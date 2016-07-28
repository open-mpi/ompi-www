<?
$subject_val = "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 04:47:11 2009" -->
<!-- isoreceived="20090927084711" -->
<!-- sent="Sun, 27 Sep 2009 09:47:19 +0100" -->
<!-- isosent="20090927084719" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an &amp;quot;flush()&amp;quot;-like function in MPI?" -->
<!-- id="1254041239.16112.2009.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="COL102-W24F6DDD133D44F63814158A8D80_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-27 04:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10785.php">Pavel Shamis (Pasha): "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>In reply to:</strong> <a href="10783.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are tools available to allow you to see the &quot;message queues&quot; of a
<br>
process, this might help you identify why you aren't seeing the messages
<br>
that you are waiting on complete.  One such tool is linked to in my
<br>
signature, you could also look into TotalView or DDT as well.
<br>
<p>I would also suggest that as you are seeing random hangs and crashes
<br>
running your code under Valgrind might be advantageous.
<br>
<p>Ashley Pittman.
<br>
<p>On Sun, 2009-09-27 at 02:05 +0800, guosong wrote:
<br>
<span class="quotelev1">&gt; Yes, I know there should be a bug. But I do not know where and why.
</span><br>
<span class="quotelev1">&gt; The strange thing was sometimes it worked but at this time there will
</span><br>
<span class="quotelev1">&gt; be a segmentation fault. If it did not work, some process must sit
</span><br>
<span class="quotelev1">&gt; there waiting for the message. There are many iterations in my
</span><br>
<span class="quotelev1">&gt; program(using a loop). It would after a few iterations the &quot;bug&quot; would
</span><br>
<span class="quotelev1">&gt; appear, which means the previous a few iterations the communication
</span><br>
<span class="quotelev1">&gt; worked. I am quite comfused now.
</span><br>
<p><p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A open source job inspection tool for parallel computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10785.php">Pavel Shamis (Pasha): "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>In reply to:</strong> <a href="10783.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
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
