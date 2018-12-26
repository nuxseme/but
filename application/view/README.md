The View is a layer that can both receive and send messages from the Model layer and/or from the
Controller layer. Its main purpose is to represent the Model to the user at the UI level, and refresh the
representation in the UI each time the Model is updated. Generally speaking, the View layer receives
an object, often a Data Transfer Object (DTO) instead of instances of the Model layer, gathering all
the needed information to be successfully represented. For PHP there are several template engines
that can help a great deal in separating the Model representation from the Model itself and from the
Controller. The most popular one by far is called Twig². Lets see how the View layer would look
like with Twig

需要多个model数据的组合 通常构造DTO层转换数据

This is an old and active topic. Why create a DTO instead of giving an instance of the Model
to the View layer? The main reason and the short answer is, again, Separation of Concerns.
Letting the view inspect and use a Model instance leads to tight coupling between the View
layer and the Model layer. In fact, a change in the Model layer can potentially break all the
views that make use of the changed Model instances.