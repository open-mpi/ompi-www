<?
$subject_val = "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 20:26:13 2009" -->
<!-- isoreceived="20090923002613" -->
<!-- sent="Wed, 23 Sep 2009 08:26:09 +0800" -->
<!-- isosent="20090923002609" -->
<!-- name="guosong" -->
<!-- email="guosong1079_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?" -->
<!-- id="COL102-W112843379C0AACADAFF888A8DB0_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="1253662762.5817.41.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?<br>
<strong>From:</strong> guosong (<em>guosong1079_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 20:26:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10732.php">Jeff Squyres: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10730.php">Terry Frankcombe: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10730.php">Terry Frankcombe: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is just a test example. The real project behind it needs to configure like that.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; From: terry_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Wed, 23 Sep 2009 09:39:22 +1000
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want all threads to communicate via MPI, and your initially
</span><br>
<span class="quotelev1">&gt; launching multiple parents, I don't really see the advantage of using
</span><br>
<span class="quotelev1">&gt; threads at all. Why not launch 12 MPI processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2009-09-22 at 10:32 -0700, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt; &gt; guosong wrote: 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for responding. I used a linux cluster. I think I would like
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to create a model that is multithreaded and each thread can make MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; calls. I attached test code as follow. It has two pthreads and there
</span><br>
<span class="quotelev3">&gt; &gt; &gt; are MPI calls in both of those two threads. In the main function,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; there are also MPI calls. Should I use a full multithreading?
</span><br>
<span class="quotelev2">&gt; &gt; I guess so. It seems like the created threads are expected to make
</span><br>
<span class="quotelev2">&gt; &gt; independent/concurrent message-passing calls. Do read the link I
</span><br>
<span class="quotelev2">&gt; &gt; sent. You need to convert from MPI_Init to MPI_Init_thread(), asking
</span><br>
<span class="quotelev2">&gt; &gt; for a full-multithreaded model and checking that you got it. Also
</span><br>
<span class="quotelev2">&gt; &gt; note in main() that the MPI_Isend() calls should be matched with
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Wait() or similar calls. I guess the parent thread will sit in
</span><br>
<span class="quotelev2">&gt; &gt; such calls while the child threads do their own message passing. Good
</span><br>
<span class="quotelev2">&gt; &gt; luck.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Messenger10&#196;&#234;&#188;&#206;&#196;&#234;&#187;&#170;&#163;&#172;&#192;&#241;&#198;&#183;&#180;&#243;&#189;&#177;&#181;&#200;&#196;&#227;&#196;&#195;&#163;&#161;
<br>
<a href="http://10.msn.com.cn">http://10.msn.com.cn</a>
<br>
--_f0d421df-cf23-4223-8eea-5fa8f41dd1ee_
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
This is just a test example. The real project behind it needs to configure like that.&lt;BR&gt;&amp;nbsp;&lt;BR&gt;&amp;gt; From: terry_at_[hidden]&lt;BR&gt;&amp;gt; To: users_at_[hidden]&lt;BR&gt;&amp;gt; Date: Wed, 23 Sep 2009 09:39:22 +1000&lt;BR&gt;&amp;gt; Subject: Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?&lt;BR&gt;&amp;gt; &lt;BR&gt;&amp;gt; If you want all threads to communicate via MPI, and your initially&lt;BR&gt;&amp;gt; launching multiple parents, I don't really see the advantage of using&lt;BR&gt;&amp;gt; threads at all. Why not launch 12 MPI processes?&lt;BR&gt;&amp;gt; &lt;BR&gt;&amp;gt; On Tue, 2009-09-22 at 10:32 -0700, Eugene Loh wrote:&lt;BR&gt;&amp;gt; &amp;gt; guosong wrote: &lt;BR&gt;&amp;gt; &amp;gt; &amp;gt; Thanks for responding. I used a linux cluster. I think I would like&lt;BR&gt;&amp;gt; &amp;gt; &amp;gt; to create a model that is multithreaded and each thread can make MPI&lt;BR&gt;&amp;gt; &amp;gt; &amp;gt; calls. I attached test code as follow. It has two pthreads and there&lt;BR&gt;&amp;gt; &amp;gt; &amp;gt; are MPI calls in both of those two threads. In the main function,&lt;BR&gt;&amp;gt; &amp;gt; &amp;gt; there are also MPI calls. Sh<br>
ould I use a full multithreading?&lt;BR&gt;&amp;gt; &amp;gt; I guess so. It seems like the created threads are expected to make&lt;BR&gt;&amp;gt; &amp;gt; independent/concurrent message-passing calls. Do read the link I&lt;BR&gt;&amp;gt; &amp;gt; sent. You need to convert from MPI_Init to MPI_Init_thread(), asking&lt;BR&gt;&amp;gt; &amp;gt; for a full-multithreaded model and checking that you got it. Also&lt;BR&gt;&amp;gt; &amp;gt; note in main() that the MPI_Isend() calls should be matched with&lt;BR&gt;&amp;gt; &amp;gt; MPI_Wait() or similar calls. I guess the parent thread will sit in&lt;BR&gt;&amp;gt; &amp;gt; such calls while the child threads do their own message passing. Good&lt;BR&gt;&amp;gt; &amp;gt; luck.&lt;BR&gt;&amp;gt; &amp;gt; _______________________________________________&lt;BR&gt;&amp;gt; &amp;gt; users mailing list&lt;BR&gt;&amp;gt; &amp;gt; users_at_[hidden]&lt;BR&gt;&amp;gt; &amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<BR">http://www.open-mpi.org/mailman/listinfo.cgi/users<BR</a>&gt;&amp;gt; &lt;BR&gt;&amp;gt; _______________________________________________&lt;BR&gt;&amp;gt; users mailing list&lt;BR&gt;&amp;gt; users_at_[hidden]&lt;BR&gt;&amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<BR">http://www.open-mpi.org/mailman/listinfo.cgi/users<BR</a>&gt; 		 	   		  &lt;br /&gt;&lt;hr /&gt;&#193;&#162;&#191;&#204;&#207;&#194;&#212;&#216; MSN &#177;&#163;&#187;<br>
&#164;
<br>
&#182;&#220;&#163;&#172;&#177;&#163;&#213;&#207;Messenger &#176;&#178;&#200;&#171;&#206;&#200;&#182;&#168;&#163;&#161; &lt;a href='<a href="http://im.live.cn/safe/">http://im.live.cn/safe/</a>' target='_new'&gt;&#207;&#214;&#212;&#218;&#190;&#205;&#207;&#194;&#212;&#216;&#163;&#161;&lt;/a&gt;&lt;/body&gt;
<br>
&lt;/html&gt;
<br>
--_f0d421df-cf23-4223-8eea-5fa8f41dd1ee_--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10732.php">Jeff Squyres: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10730.php">Terry Frankcombe: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10730.php">Terry Frankcombe: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
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
