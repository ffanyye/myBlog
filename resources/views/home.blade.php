@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="mount-wrapper mount-panel">
                <div class="mount mount-user  mount-border">
                    <div class="mount-user-header">
                    </div>
                    <div class="mount-user-icon">
                        <img class="mount-circle" src="/img/icon.png" alt="user-icon">
                    </div>
                    <div class="mount-user-footer">
                        <h2 class="text-center">Jonethan</h2>
                        <p class="text-center">当你的能力不够时，你应该静下心来学习</p>
                    </div>
                </div>
                <div class="mount mount-archievs mount-border">
                    <div class="mount-header text-center btn btn-primary mount-header-default">
                    <i class="fa fa-archive"></i>&nbsp;&nbsp;
                    归档</div>
                </div>
                <div class="mount mount-classify mount-border">
                    <div class="mount-header text-center">
                        
                        <h4><i class="fa fa-folder"></i>&nbsp;&nbsp;分类</h4>
                    </div>
                    <ul class="mount-classify-ul mount-body">
                        <a href="###" href="###" class="mount-classify-list mount-border">算法<span class="badge">0</span></a>
                        <a href="###" class="mount-classify-list mount-border">框架<span class="badge">6</span></a>
                        <a href="###" class="mount-classify-list mount-border">闲聊<span class="badge">26</span></a>
                        <a href="###" class="mount-classify-list mount-border">ACG<span class="badge">111</span></a>
                        <a href="###" class="mount-classify-list mount-border">福利<span class="badge">1111</span></a>
                    </ul>
                </div>
                <div class="mount mount-tags mount-border">
                    <div class="text-center mount-header text-center">
                        <h4><i class="fa fa-tags"></i>&nbsp;&nbsp;标签</h4>
                    </div>
                    <ul class="mount-tags-ul mount-body">
                        <a href="###" class="mount-tag-list">php</a>
                        <a href="###" class="mount-tag-list">python</a>
                        <a href="###" class="mount-tag-list">web</a>
                        <a href="###" class="mount-tag-list">physical</a>
                        <a href="###" class="mount-tag-list">like</a>
                        <a href="###" class="mount-tag-list">php</a>
                        <a href="###" class="mount-tag-list">python</a>
                        <a href="###" class="mount-tag-list">web</a>
                        <a href="###" class="mount-tag-list">physical</a>
                        <a href="###" class="mount-tag-list">like</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <section>
                <article class="post post-normal">
                    <header>
                        <h2>使用 Travis CI 自动更新 GitHub Pages</h2>
                        <div class="post-meta">
                            <span class="post-time text-center">
                                <i class="fa fa-calendar"></i>
                                发表于 2016-03-22
                            </span>
                            <span class="post-category">
                                <span class="post-meta-divider">|</span>
                                <i class="fa fa-folder"></i>
                                分类于 技术水波文
                            </span>
                            <span class="post-comment-count">
                                <span class="post-meta-divider">|</span>
                                <span class="post-meta-item-icon">
                                    <i class="fa fa-comment"></i>
                                </span>
                            </span>
                            <span class="post-visiters">
                                <span class="post-meta-divider">|</span>
                                <span class="post-meta-item-icon">
                                    <i class="fa fa-eye"></i>
                                </span>
                                <span class="post-meta-text">
                                    阅读次数
                                </span>
                                <span class="post-meta-visiters-count">20000</span>
                            </span>
                            <span class="post-category"></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p>每次更改完 NexT 文档 都要手动部署到 GitHub Pages，重复的次数多了就显得很麻烦，出错的几率也会变大。文档源码放置在 master 分支，最终部署文件在 gh-pages 分支。当在 master 分支更改某些内容之后，通过运行 gulp dist 来生成最终部署的 HTML 文件到 dist 目录，随后再进入 dist 目录初始化 git 仓库、添加文件、提交文件，最后将提交强制推送到远程 gh-pages 分支（因当心我会误将最终部署的 HTML 文件提交到 master 分支导致源码丢失，我在 GitHub 上把 master 分支给锁定了）。除此之外还有另外一个问题：如果 master 分支有 Pull Requests，我需要先将更新取回本地，然后编译更新再提交回远程 gh-pages 分支。</p>
                        <div class="post-button text-center">
                            <a href="###" class="btn btn-primary">阅读全文</a>
                        </div>
                    </div>
                    <footer>
                        <div class="post-eof"></div>
                    </footer>
                </article>
                <article class="post post-normal">
                    <header>
                        <h2>使用 Travis CI 自动更新 GitHub Pages</h2>
                        <div class="post-meta">
                            <span class="post-time text-center">
                                <i class="fa fa-calendar"></i>
                                发表于 2016-03-22
                            </span>
                            <span class="post-category">
                                <span class="post-meta-divider">|</span>
                                <i class="fa fa-folder"></i>
                                分类于 技术水波文
                            </span>
                            <span class="post-comment-count">
                                <span class="post-meta-divider">|</span>
                                <span class="post-meta-item-icon">
                                    <i class="fa fa-comment"></i>
                                </span>
                            </span>
                            <span class="post-visiters">
                                <span class="post-meta-divider">|</span>
                                <span class="post-meta-item-icon">
                                    <i class="fa fa-eye"></i>
                                </span>
                                <span class="post-meta-text">
                                    阅读次数
                                </span>
                                <span class="post-meta-visiters-count">20000</span>
                            </span>
                            <span class="post-category"></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p>每次更改完 NexT 文档 都要手动部署到 GitHub Pages，重复的次数多了就显得很麻烦，出错的几率也会变大。文档源码放置在 master 分支，最终部署文件在 gh-pages 分支。当在 master 分支更改某些内容之后，通过运行 gulp dist 来生成最终部署的 HTML 文件到 dist 目录，随后再进入 dist 目录初始化 git 仓库、添加文件、提交文件，最后将提交强制推送到远程 gh-pages 分支（因当心我会误将最终部署的 HTML 文件提交到 master 分支导致源码丢失，我在 GitHub 上把 master 分支给锁定了）。除此之外还有另外一个问题：如果 master 分支有 Pull Requests，我需要先将更新取回本地，然后编译更新再提交回远程 gh-pages 分支。</p>
                        <div class="post-button text-center">
                            <a href="{{ url('/article') }}" class="btn btn-primary">阅读全文</a>
                        </div>
                    </div>
                    <footer>
                        <div class="post-eof"></div>
                    </footer>
                </article>
                <article class="post post-normal">
                    <header>
                        <h2>使用 Travis CI 自动更新 GitHub Pages</h2>
                        <div class="post-meta">
                            <span class="post-time text-center">
                                <i class="fa fa-calendar"></i>
                                发表于 2016-03-22
                            </span>
                            <span class="post-category">
                                <span class="post-meta-divider">|</span>
                                <i class="fa fa-folder"></i>
                                分类于 技术水波文
                            </span>
                            <span class="post-comment-count">
                                <span class="post-meta-divider">|</span>
                                <span class="post-meta-item-icon">
                                    <i class="fa fa-comment"></i>
                                </span>
                            </span>
                            <span class="post-visiters">
                                <span class="post-meta-divider">|</span>
                                <span class="post-meta-item-icon">
                                    <i class="fa fa-eye"></i>
                                </span>
                                <span class="post-meta-text">
                                    阅读次数
                                </span>
                                <span class="post-meta-visiters-count">20000</span>
                            </span>
                            <span class="post-category"></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p>每次更改完 NexT 文档 都要手动部署到 GitHub Pages，重复的次数多了就显得很麻烦，出错的几率也会变大。文档源码放置在 master 分支，最终部署文件在 gh-pages 分支。当在 master 分支更改某些内容之后，通过运行 gulp dist 来生成最终部署的 HTML 文件到 dist 目录，随后再进入 dist 目录初始化 git 仓库、添加文件、提交文件，最后将提交强制推送到远程 gh-pages 分支（因当心我会误将最终部署的 HTML 文件提交到 master 分支导致源码丢失，我在 GitHub 上把 master 分支给锁定了）。除此之外还有另外一个问题：如果 master 分支有 Pull Requests，我需要先将更新取回本地，然后编译更新再提交回远程 gh-pages 分支。</p>
                        <div class="post-button text-center">
                            <a href="###" class="btn btn-primary">阅读全文</a>
                        </div>
                    </div>
                    <footer>
                        <div class="post-eof"></div>
                    </footer>
                </article>
                <article class="post post-normal">
                    <header>
                        <h2>使用 Travis CI 自动更新 GitHub Pages</h2>
                        <div class="post-meta">
                            <span class="post-time text-center">
                                <i class="fa fa-calendar"></i>
                                发表于 2016-03-22
                            </span>
                            <span class="post-category">
                                <span class="post-meta-divider">|</span>
                                <i class="fa fa-folder"></i>
                                分类于 技术水波文
                            </span>
                            <span class="post-comment-count">
                                <span class="post-meta-divider">|</span>
                                <span class="post-meta-item-icon">
                                    <i class="fa fa-comment"></i>
                                </span>
                            </span>
                            <span class="post-visiters">
                                <span class="post-meta-divider">|</span>
                                <span class="post-meta-item-icon">
                                    <i class="fa fa-eye"></i>
                                </span>
                                <span class="post-meta-text">
                                    阅读次数
                                </span>
                                <span class="post-meta-visiters-count">20000</span>
                            </span>
                            <span class="post-category"></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p>每次更改完 NexT 文档 都要手动部署到 GitHub Pages，重复的次数多了就显得很麻烦，出错的几率也会变大。文档源码放置在 master 分支，最终部署文件在 gh-pages 分支。当在 master 分支更改某些内容之后，通过运行 gulp dist 来生成最终部署的 HTML 文件到 dist 目录，随后再进入 dist 目录初始化 git 仓库、添加文件、提交文件，最后将提交强制推送到远程 gh-pages 分支（因当心我会误将最终部署的 HTML 文件提交到 master 分支导致源码丢失，我在 GitHub 上把 master 分支给锁定了）。除此之外还有另外一个问题：如果 master 分支有 Pull Requests，我需要先将更新取回本地，然后编译更新再提交回远程 gh-pages 分支。</p>
                        <div class="post-button text-center">
                            <a href="###" class="btn btn-primary">阅读全文</a>
                        </div>
                    </div>
                    <footer>
                        <div class="post-eof"></div>
                    </footer>
                </article>
                
            </section>
        </div>
    </div>
</div>
@endsection
