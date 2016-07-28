<?
$subject_val = "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 11:48:28 2009" -->
<!-- isoreceived="20090928154828" -->
<!-- sent="Mon, 28 Sep 2009 23:48:23 +0800" -->
<!-- isosent="20090928154823" -->
<!-- name="guosong" -->
<!-- email="guosong1079_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?" -->
<!-- id="COL102-W52340D264FAB6D6BC3CEE2A8D60_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="B2CB69E4-81B6-427C-832E-860D2305239B_at_cisco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?<br>
<strong>From:</strong> guosong (<em>guosong1079_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 11:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10796.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10794.php">Jeff Squyres: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>In reply to:</strong> <a href="10793.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10796.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10796.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, thanks. I found that mpich2/gnu supports MPI_THREAD_MULTIPLE by default on my server. So if it supports MPI_THREAD_MULTIPLE, does it mean that I can run the program without segmentation fault (if there is no other bugs ^_^)
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Mon, 28 Sep 2009 11:28:31 -0400
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 27, 2009, at 1:45 PM, guosong wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Loh,
</span><br>
<span class="quotelev2">&gt; &gt; I used MPI_Init_thread(&amp;argc,&amp;argv, MPI_THREAD_MULTIPLE, &amp;provided); 
</span><br>
<span class="quotelev2">&gt; &gt; in my program and got provided = 0 which turns out to be the 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_THREAD_SINGLE. Does this mean that I can not use 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_THREAD_MULTIPLE model?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To get Open MPI to support MPI_THREAD_MULTIPLE, you need to configure 
</span><br>
<span class="quotelev1">&gt; and build it with the --enable-mpi-threads switch to OMPI's ./ 
</span><br>
<span class="quotelev1">&gt; configure script. We don't build MPI_THREAD_MULTIPLE support by 
</span><br>
<span class="quotelev1">&gt; default because it does add some performance overhead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Messenger&#176;&#178;&#200;&#171;&#177;&#163;&#187;&#164;&#214;&#208;&#208;&#196;&#163;&#172;&#195;&#226;&#183;&#209;&#208;&#222;&#184;&#180;&#207;&#181;&#205;&#179;&#194;&#169;&#182;&#180;&#163;&#172;&#177;&#163;&#187;&#164;Messenger&#176;&#178;&#200;&#171;&#163;&#161;
<br>
<a href="http://im.live.cn/safe/">http://im.live.cn/safe/</a>
<br>
--_dbb68c85-cb63-4db8-b4b3-45bdada45139_
<br>
Content-Type: text/html; charset=&quot;gb2312&quot;
<br>
Content-Transfer-Encoding: 8bit
<br>
<p>&lt;html&gt;
<br>
&lt;head&gt;
<br>
&lt;style&gt;&lt;!--
<br>
.hmmessage P
<br>
{
<br>
margin:0px;
<br>
padding:0px
<br>
}
<br>
body.hmmessage
<br>
{
<br>
font-size: 10pt;
<br>
font-family:Verdana
<br>
}
<br>
--&gt;&lt;/style&gt;
<br>
&lt;/head&gt;
<br>
&lt;body class='hmmessage'&gt;
<br>
Oh, thanks. I found that mpich2/gnu supports MPI_THREAD_MULTIPLE by default on&amp;nbsp;my server. So if&amp;nbsp;it supports MPI_THREAD_MULTIPLE, does it mean that I can run the program without segmentation fault (if there is no other bugs ^_^)&lt;BR&gt;&amp;nbsp;&lt;BR&gt;&amp;gt; From: jsquyres_at_[hidden]&lt;BR&gt;&amp;gt; To: users_at_[hidden]&lt;BR&gt;&amp;gt; Date: Mon, 28 Sep 2009 11:28:31 -0400&lt;BR&gt;&amp;gt; Subject: Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?&lt;BR&gt;&amp;gt; &lt;BR&gt;&amp;gt; On Sep 27, 2009, at 1:45 PM, guosong wrote:&lt;BR&gt;&amp;gt; &lt;BR&gt;&amp;gt; &amp;gt; Hi Loh,&lt;BR&gt;&amp;gt; &amp;gt; I used MPI_Init_thread(&amp;amp;argc,&amp;amp;argv, MPI_THREAD_MULTIPLE, &amp;amp;provided); &lt;BR&gt;&amp;gt; &amp;gt; in my program and got provided = 0 which turns out to be the &lt;BR&gt;&amp;gt; &amp;gt; MPI_THREAD_SINGLE. Does this mean that I can not use &lt;BR&gt;&amp;gt; &amp;gt; MPI_THREAD_MULTIPLE model?&lt;BR&gt;&amp;gt; &lt;BR&gt;&amp;gt; Correct.&lt;BR&gt;&amp;gt; &lt;BR&gt;&amp;gt; To get Open MPI to support MPI_THREAD_MULTIPLE, you need to configure &lt;BR&gt;&amp;gt; and build it with the --enable-mpi-threads switch to OMPI's ./ &lt;<br>
BR&gt;&amp;gt; configure script. We don't build MPI_THREAD_MULTIPLE support by &lt;BR&gt;&amp;gt; default because it does add some performance overhead.&lt;BR&gt;&amp;gt; &lt;BR&gt;&amp;gt; -- &lt;BR&gt;&amp;gt; Jeff Squyres&lt;BR&gt;&amp;gt; jsquyres_at_[hidden]&lt;BR&gt;&amp;gt; &lt;BR&gt;&amp;gt; _______________________________________________&lt;BR&gt;&amp;gt; users mailing list&lt;BR&gt;&amp;gt; users_at_[hidden]&lt;BR&gt;&amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<BR">http://www.open-mpi.org/mailman/listinfo.cgi/users<BR</a>&gt; 		 	   		  &lt;br /&gt;&lt;hr /&gt;&#202;&#185;&#211;&#195;&#208;&#194;&#210;&#187;&#180;&#250; Windows Live Messenger &#199;&#225;&#203;&#201;&#189;&#187;&#193;&#247;&#186;&#205;&#185;&#178;&#207;&#237;&#163;&#161; &lt;a href='<a href="http://www.windowslive.cn/Messenger/">http://www.windowslive.cn/Messenger/</a>' target='_new'&gt;&#193;&#162;&#191;&#204;&#207;&#194;&#212;&#216;&#163;&#161;&lt;/a&gt;&lt;/body&gt;
<br>
&lt;/html&gt;
<br>
--_dbb68c85-cb63-4db8-b4b3-45bdada45139_--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10796.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10794.php">Jeff Squyres: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>In reply to:</strong> <a href="10793.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10796.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10796.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
