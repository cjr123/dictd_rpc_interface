# 说明
本组件是为前置机接口中的微服务公共资源组件，里面包含JSON RPC微服务相关扩展、多路复用。

# 注意

1、微服务方法中的参数支持类对象. 在`config/autoload/dependencies.php`中加入：
- `use Hyperf\Utils\Serializer\SerializerFactory;`
- `use Hyperf\Utils\Serializer\Serializer;`
- `Hyperf\Contract\NormalizerInterface::class => new SerializerFactory(Serializer::class),`

2、RPC服务端配制
- 修改 config/autoload/server.php 配置文件
- https://hyperf.wiki/2.2/#/zh-cn/rpc-multiplex

3、客户端配制
- 修改 config/autoload/services.php 配置文件
- https://hyperf.wiki/2.2/#/zh-cn/rpc-multiplex?id=%e5%ae%a2%e6%88%b7%e7%ab%af%e9%85%8d%e7%bd%ae