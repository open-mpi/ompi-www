<?
$subject_val = "Re: [OMPI devel] Progress of the asynchronous messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 15:04:19 2008" -->
<!-- isoreceived="20081106200419" -->
<!-- sent="Thu, 6 Nov 2008 15:04:13 -0500" -->
<!-- isosent="20081106200413" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Progress of the asynchronous messages" -->
<!-- id="024B6BB8-56A4-4DE2-A368-A07B97F8D533_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="770344.67353.qm_at_web24103.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Progress of the asynchronous messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 15:04:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4859.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4857.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>In reply to:</strong> <a href="4852.php">vladimir marjanovic: "[OMPI devel] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4880.php">Nifty niftyompi Mitch: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="4880.php">Nifty niftyompi Mitch: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the web archives: this same question was posted and answered on  
<br>
the users list.  See this thread:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2008/11/7222.php">http://www.open-mpi.org/community/lists/users/2008/11/7222.php</a>
<br>
<p><p>On Nov 6, 2008, at 1:00 PM, vladimir marjanovic wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I am new user of Open MPI, I've used MPICH before.
</span><br>
<span class="quotelev2">&gt;&gt; I've tried on the user list but they couldn't help me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is performance bug with the following scenario:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; proc_B:  MPI_Isend(...,proc_A,..,&amp;request)
</span><br>
<span class="quotelev2">&gt;&gt;                 do{
</span><br>
<span class="quotelev2">&gt;&gt;                   sleep(1);
</span><br>
<span class="quotelev2">&gt;&gt;                   MPI_Test(..,&amp;flag,&amp;request);
</span><br>
<span class="quotelev2">&gt;&gt;                   count++
</span><br>
<span class="quotelev2">&gt;&gt;                 }while(!flag);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; proc_A: MPI_Recv(...,proc_B);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For message size 8MB,  proc_B calls MPI_Test 88 times. It means  
</span><br>
<span class="quotelev2">&gt;&gt; that point to point communication costs 88 seconds.
</span><br>
<span class="quotelev2">&gt;&gt; Btw, bandwidth isn't the problem (interconnection network:  
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Obviously, there is the problem with progress of the asynchronous  
</span><br>
<span class="quotelev2">&gt;&gt; messages.  In order to overlap communication and computation I  
</span><br>
<span class="quotelev2">&gt;&gt; don't want to use MPI_Wait.  Probably, the message is being  
</span><br>
<span class="quotelev2">&gt;&gt; decomposed into chucks and the size of chuck is probably defined by  
</span><br>
<span class="quotelev2">&gt;&gt; environment variable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  How can I advance the message more aggressively or can I control  
</span><br>
<span class="quotelev2">&gt;&gt; size of chunk?
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Vladimir
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4859.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4857.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>In reply to:</strong> <a href="4852.php">vladimir marjanovic: "[OMPI devel] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4880.php">Nifty niftyompi Mitch: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="4880.php">Nifty niftyompi Mitch: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
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
