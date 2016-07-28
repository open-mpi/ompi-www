<?
$subject_val = "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 17:03:27 2009" -->
<!-- isoreceived="20090927210327" -->
<!-- sent="Mon, 28 Sep 2009 05:03:22 +0800" -->
<!-- isosent="20090927210322" -->
<!-- name="guosong" -->
<!-- email="guosong1079_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?" -->
<!-- id="COL102-W258A4FA6571C4F7D443A74A8D70_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="4ABFD250.5020208_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?<br>
<strong>From:</strong> guosong (<em>guosong1079_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-27 17:03:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10790.php">Thomas Ropars: "Re: [OMPI users] segfault on finalize"</a>
<li><strong>Previous message:</strong> <a href="10788.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10788.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10793.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The reason I asked the background thread is that I need to make MPI calls in this thread and this is also why I got errors in the little testing program. 
<br>
&nbsp;
<br>
<p><p>Date: Sun, 27 Sep 2009 14:00:00 -0700
<br>
From: Eugene.Loh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?
<br>
<p>guosong wrote: 
<br>
<p><p>I used MPI_Init_thread(&amp;argc,&amp;argv, MPI_THREAD_MULTIPLE, &amp;provided); in my program and got provided = 0 which turns out to be the MPI_THREAD_SINGLE. Does this mean that I can not use MPI_THREAD_MULTIPLE model?Right.  I've not done much multithreaded MPI work.  Someone else on this list can advise you better what you need to do to get provided=MPI_THREAD_MULTIPLE.
<br>
<p>I write a little program to test the multithreading and it worked sometimes and failed sometimes. It also hang there sometimes. Does this only because the MPI_THREAD_MULTIPLE is not supported or there are some bugs in the program?I don't know if there are bugs in the program, but without the MPI threads support you can't really test it.  
<br>
<p>BTW, if I want to create a background thread which is sort of like a deamon thread, how can I achieve that in MPI programs? Thanks.
<br>
I'm not sure I understand the question.  Creating a background thread isn't part of MPI.  You would use something else, like POSIX threads or OpenMP.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
&#212;&#188;&#187;&#225;&#203;&#181;&#178;&#187;&#199;&#229;&#181;&#216;&#183;&#189;&#163;&#191;&#192;&#180;&#202;&#212;&#202;&#212;&#206;&#162;&#200;&#237;&#181;&#216;&#205;&#188;&#215;&#238;&#208;&#194;msn&#187;&#165;&#182;&#175;&#185;&#166;&#196;&#220;&#163;&#161;
<br>
<a href="http://ditu.live.com/?form=TL&amp;swm=1">http://ditu.live.com/?form=TL&amp;swm=1</a>
<br>
--_7d81decd-326f-438d-ace7-ceac7a925781_
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
The reason I asked the background thread is that I need to make MPI calls in this thread and this is also why I got errors in the little&amp;nbsp;testing program. &lt;BR&gt;&amp;nbsp;&lt;BR&gt;
<br>
&lt;HR id=stopSpelling&gt;
<br>
Date: Sun, 27 Sep 2009 14:00:00 -0700&lt;BR&gt;From: Eugene.Loh_at_[hidden]&lt;BR&gt;To: users_at_[hidden]&lt;BR&gt;Subject: Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?&lt;BR&gt;&lt;BR&gt;guosong wrote: 
<br>
&lt;BLOCKQUOTE cite=midCOL102-W53595083E63C66A1D18823A8D70_at_phx.gbl&gt;
<br>
&lt;STYLE&gt;
<br>
.ExternalClass .ecxhmmessage P
<br>
{padding:0px;}
<br>
.ExternalClass body.ecxhmmessage
<br>
{font-size:10pt;font-family:Verdana;}
<br>
&lt;/STYLE&gt;
<br>
I used MPI_Init_thread(&amp;amp;argc,&amp;amp;argv, MPI_THREAD_MULTIPLE, &amp;amp;provided); in my program and got provided = 0 which turns out to be the MPI_THREAD_SINGLE. Does this mean that I can not use MPI_THREAD_MULTIPLE model?&lt;/BLOCKQUOTE&gt;Right.&amp;nbsp; I've not done much multithreaded MPI work.&amp;nbsp; Someone else on this list can advise you better what you need to do to get provided=MPI_THREAD_MULTIPLE.&lt;BR&gt;
<br>
&lt;BLOCKQUOTE cite=midCOL102-W53595083E63C66A1D18823A8D70_at_phx.gbl&gt;I write a little program to test the multithreading and it worked sometimes and failed sometimes. It also hang&amp;nbsp;there sometimes.&amp;nbsp;Does this only because the MPI_THREAD_MULTIPLE is not supported or&amp;nbsp;there are some bugs in the program?&lt;/BLOCKQUOTE&gt;I don't know if there are bugs in the program, but without the MPI threads support you can't really test it.&amp;nbsp; &lt;BR&gt;
<br>
&lt;BLOCKQUOTE cite=midCOL102-W53595083E63C66A1D18823A8D70_at_phx.gbl&gt;BTW, if&amp;nbsp;I want to create a background thread which is&amp;nbsp;sort of&amp;nbsp;like a deamon&amp;nbsp;thread,&amp;nbsp;how can I&amp;nbsp;achieve that in&amp;nbsp;MPI programs? Thanks.&lt;BR&gt;&lt;/BLOCKQUOTE&gt;I'm not sure I understand the question.&amp;nbsp; Creating a background thread isn't part of MPI.&amp;nbsp; You would use something else, like POSIX threads or OpenMP.&lt;BR&gt; 		 	   		  &lt;br /&gt;&lt;hr /&gt;&#184;&#252;&#182;&#224;&#200;&#200;&#192;&#177;&#215;&#202;&#209;&#182;&#190;&#161;&#212;&#218;&#208;&#194;&#176;&#230;MSN&#202;&#215;&#210;&#179;&#163;&#161; &lt;a href='<a href="http://cn.msn.com/">http://cn.msn.com/</a>' target='_new'&gt;&#193;&#162;&#191;&#204;&#183;&#195;&#206;&#202;&#163;&#161;&lt;/a&gt;&lt;/body&gt;
<br>
&lt;/html&gt;
<br>
--_7d81decd-326f-438d-ace7-ceac7a925781_--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10790.php">Thomas Ropars: "Re: [OMPI users] segfault on finalize"</a>
<li><strong>Previous message:</strong> <a href="10788.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10788.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10793.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
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
