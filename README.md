# 关于项目
本项目是 [Mirui Cloud](https://mirui.cyou/) 的网页程序 ~~可能也是最值钱的~~

项目并没有完成，现运行的程序为WHMCS ~~价格嘛...高的要死 插件价格也是~~

![PHP](https://badgen.net/badge/版本/测试版/red)
![PHP](https://badgen.net/badge/PHP/7.3+/orange)

## 正在做的
- [ ] 用户登陆/注册
- [ ] 用户面板
 
## 准备做的
- [ ] EasyPanel对接
- [ ] SolusVM对接
- [ ] Proxmox对接
- [ ] 使用[Chromedriver](https://chromedriver.chromium.org/downloads)控制Chrome完成各种WHMCS程序的对接
- [ ] 
## 使用方法

拉取仓库

```
git clone https://github.com/Ella-Alinda/Cloud
```

依赖安装 **如果失败请降级composer**  
```
composer install 
```
> 安装 laravel/ui 拓展包，命令为 composer require laravel/ui，然后再运行 php artisan ui vue --auth 替换上面的 php artisan make:auth。编译前端资源可以使用命令 npm install && npm run dev

完成数据库迁移
```
php artisan migrate
```

初始化程序密匙
```
php artisan key:g
```

> 降级命令
> ```
> composer self-update --2
> ```

更改.env文件 **复制 `.env.example` 为 `.env`** 并修改数据库

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dcat-admin
DB_USERNAME=root
DB_PASSWORD=
```

然后运行下面的命令来发布资源：

```bash
php artisan admin:publish
```
> 执行这一步命令可能会报以下错误`Specified key was too long ... 767 bytes`，如果出现这个报错，请在`app/Providers/AppServiceProvider.php`文件的`boot`方法中加上代码`\Schema::defaultStringLength(191);`，然后删除掉数据库中的所有数据表，再重新运行一遍`php artisan admin:install`命令即可。

```bash
php artisan admin:install
```

上述步骤操作完成之后就可以配置`web`服务了，**注意需要把`web`目录指向`public`目录**！如果用的是`nginx`，还需要在配置中加上伪静态配置
```dotenv
location / {
	try_files $uri $uri/ /index.php?$query_string;
}
```

启动服务后，在浏览器打开 `http://localhost/admin`，使用用户名 `admin` 和密码 `admin`登陆。