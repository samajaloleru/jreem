<div class="w-20 h-100 br3 br--left bg-black mr4">
    <div class="fl w-100 pa3 br3 br--left br--top hover-bg-yellow">
        <a href="/dashboard">
            <div class="yellow hover-black-70">
                Dashboard
            </div>
        </a>
    </div>
    @if($LoggedUserInfo['is_admin']==1)
        
        <div class="fl w-100 pa3 hover-bg-yellow">
            <a href="/dashboard/blogs">
                <div class="yellow hover-black-70">
                    Blog
                </div>
            </a>
        </div>
        <div class="fl w-100 pa3 hover-bg-yellow">
            <a href="/dashboard/categories">
                <div class="yellow hover-black-70">
                    Categories
                </div>
            </a>
        </div>
        <div class="fl w-100 pa3 br3 br--left br--bottom hover-bg-yellow">
            <a href="/dashboard/products">
                <div class="yellow hover-black-70">
                    Products
                </div>
            </a>
        </div>
    @endif
</div>