model 只能通过service 操作  不接受任何其他层的直接调用

“Asking a question should not change the answer” – Bertrand Meyer
This design principle states that every method should be either a Command, that performs
an action, or a Query, that returns data to the caller, but not both.

获取模型不应该改变这个模型

read 是负责read职责
write  只负责write 职责 

那常常是更新一个模型之后需要返回给caller ,这里需要通知read模型 数据变更  会出现 最终一致性
