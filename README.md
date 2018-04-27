# 微信测试

# 安装

## 开头的行说明需要在命令行下执行

1. 项目配置文件


        $ cp .env.example .env
    
    
并配置内容为本地环境

2. 安装 PHP 环境依赖


        $ composer install
        
        $ php artisan migrate
        
   
       
        
    

3. 安装前端依赖


        $ yarn install

下面的命令二选一
    
        $ npm run dev (该命令只编译一次前端文件，如果前端文件有变更，需要重新执行)
        
        $ npm run watch (该命令会监控前端文件，如果有变更，会自动编译，建议开发中使用)
        
        $ npm run production (线上命令，会压缩 JS 文件资源)

# 开发环境

统一使用 PhpStorm

## 安装 vue 和 laravel 插件

打开设置，`plugin` => `Browse Reposiitories...`， 搜索并安装 `Vue.js` 和 `laravel Plugin`

重启 PhpStorm

## 配置插件

设置：`File | Settings | Languages & Frameworks | PHP | Laravel`, 勾选第一行开启复选框即开启。点击 `Apply`

设置：`File | Settings | Languages & Frameworks | JavaScript`，选择 Javascript 版本为 `ES6`。点击 `Apply`

设置：`File | Settings | Editor | Code Style | JavaScript | Wrapping and Braces | '.' on new line` ,勾选。点击 `Apply`

设置：`File | Settings | Languages & Frameworks | JavaScript | Code Quality Tools | ESLint`，勾选第一行开启复选框即开启 `ESLint` ,点击 `Apply`

设置：`File | Settings | Editor | Code Style | JavaScript | Set from` 选择 `Predefine style` 为 `javascript stand style`  ,点击 `Apply`

设置：`File | Settings | Editor | Code Style | JavaScript | Punctuation` 选择 `Trailing comma` 为 `Remove`  ,点击 `Apply`

设置：`File | Settings | Editor | Code Style | PHP | Set from` 选择 `Predefine style` 为 `PSR1/PSR2`  ,点击 `Apply`

## 配置 phpcs（后端必须配置，前端不需要）

Mac:

    $ brew install php-code-sniffer

Win:

    $ composer global require "squizlabs/php_codesniffer=*"

注意: Win 下注意 ~/.composer/vendor/bin/ 添加到环境变量，是否成功通过在命令行执行 `phpcs -v` 看是否能找到命令。

设置：`File | Settings | Languages & Frameworks | PHP | Code Sniffer` 点击 `...`，在弹出框内 `PHP Code Sniffer(phpcs) path` ，填写 `phpcs` 命令的位置，最后按 `Validate` 看是否通过。最后点击 `OK`

设置：`File | Settings | Editor | Inspections` 搜索 `code sniffer` ，并勾选左栏搜索出来的 `PHP | PHP Code Sniffer validation`，并在右侧的 `Coding standard`  选择 `PSR2`，点击 `Apply`


## 请求返回代码
    Code    | Text                  | 描述
    200     | OK                    | 成功!
    304     | Not Modified          | 没有新数据返回，没有什么发生变化。例如：提交的内容并没有什么要变化时，可以返回。
    400     | Bad Request           | 请求有问题而不能被服务器处理. 返回错误信息给客户端。 请求被认为是无效的。例如：请求处理过程中，验证一些逻辑有问题，如 A 给 B 转钱，服务器处理时发现 B 账号有问题，不能转
    401     | Unauthorized          | 没有登录认证，或者认证信息错误，需要重新登录。例如：用户没有登录，需要重新登录进行后续操作
    403     | Forbidden             | 不允许进行请求访问，返回错误信息解释为什么。例如：没有权限访问
    404     | Not Found             | 请求的数据不存在。例如：请求的商品不存在
    406     | Not Acceptable        | 请求内容格式有问题。
    410     | Gone                  | 请求的资源已经不在了，这个接口已关闭，不提供服务。
    420     | Enhance Your Calm     | 冷静！冷静！！请求过于频繁，返回错误信息解释为什么。一般用于点击过于频繁。例如：点击过快，重复提交
    422     | Unprocessable Entity  | 请求内容有问题，不允许提交。例如：表单验证有问题。
    429     | Too Many Requests     | 请求次数被限制。
    
    500     | Internal Server Error | 服务器内部错误。例如：程序出现 BUG
    502     | Bad Gateway           | 服务器挂了或者正在升级.
    503     | Service Unavailable   | 服务器繁忙。
    504     | Gateway timeout       | 服务器繁忙

