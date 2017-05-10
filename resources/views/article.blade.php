@extends('layouts.app')

@section('content')
    <div class="container">
    	<div class="col-md-8 col-md-offset-2">
	        <div id="post">
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
	                    <p>每次更改完 NexT 文档 都要手动部署到 GitHub Pages，重复的次数多了就显得很麻烦，出错的几率也会变大。文档源码放置在 master 分支，最终部署文件在 gh-pages 分支。当在 master 分支更改某些内容之后，通过运行 gulp dist 来生成最终部署的 HTML 文件到 dist 目录，随后再进入 dist 目录初始化 git 仓库、添加文件、提交文件，最后将提交强制推送到远程 gh-pages 分支（因当心我会误将最终部署的 HTML 文件提交到 master 分支导致源码丢失，我在 GitHub 上把 master 分支给锁定了）。除此之外还有另外一个问题：如果 master 分支有 Pull Requests，我需要先将更新取回本地，然后编译更新再提交回远程 gh-pages 分支。这个设置之中包含了 仓库的地址（设置在 GH_REF 环境变量中）以及 Access Token （被加密了，设置在 GH_TOKEN 环境变量中）。这两个环境变量将 Build 的时候被使用，用于往 GitHub gh-pages 分支推送。</p>
	                    <pre>2323
							<code>232323</code>
	                    </pre>
	                </div>
	            </article>
	        </div>
	    </div>
    </div>
@endsection