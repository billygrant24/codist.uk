---
extends: 'schema/post'
title: 'Object composition'
summary: 'A method for designing more flexible classes.'
cover: 'composition.jpg'
tags: ['php', 'programming', 'architecture']
published: '2014-02-28'
---

`Warning: This post is gibberish and only serves as an example of formatting.`

There are two kinds of controller that I can rely on encountering everyday as a PHP developer. The most common is the confused behemoth. It might handle requests, validate input, process data and return a response. No fun at all.

The second controller is harder to criticise. It sends all non-trivial tasks to specialist services. What's the problem?

Well, how does the controller handle user input? It holds a reference to a Request object. How does it validate data? It holds a reference to the Validator object. It might even hold an instance of the entire container to alleviate the number of dependencies. Convenient, but is it necessary?

From PHP 5.4 onwards you can use a combination of traits, interfaces and a dependency injection container to dumb down your all-knowing super classes.

Consider a controller for a contact form.

```
class ContactController implements RequestAwareInterface
{
    use RequestAwareTrait;
    
    /**
     * Display the form to the client.
     */
    public function show()
    {
        // ...
    }
    
    /**
     * Handle the form submission.
     */
    public function handle()
    {
        $input = $this->getRequest()->all();
        
        // ...
    }
}
```

Let's have a look at the interface we are implemnting.

```
interface RequestAwareInterface
{
    public function setRequest(Request $request);
    public function getRequest();
}
```

And the trait…

```
trait RequestAwareTrait
{
    protected $request;
    
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }
    
    public function getRequest()
    {
        return $this->request;
    }
}
```

Now our dependency injection container can do something like this (implementations may vary):

```
$container = new League\Container\Container();

$container->inflector('RequestAwareInterface')
    ->invokeMethod('setRequest', [new Request()]);
```

As long as we resolve the controller through our container any classes implementing RequestAwareInterface are by default furnished with an instance of Request.

This is object composition. We are composing flexible objects from arbitrary components. It's a thrilling alternative to traditional inheritance-based design.