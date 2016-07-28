<?
$subject_val = "Re: [OMPI users] segfault when resuming on different host";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 29 16:31:34 2011" -->
<!-- isoreceived="20111229213134" -->
<!-- sent="Thu, 29 Dec 2011 16:31:30 -0500" -->
<!-- isosent="20111229213130" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when resuming on different host" -->
<!-- id="CAANzjEmAH8b18a4pMfM2ZFjq189bXr_gv3CnMeQMynmGfx=nmQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EFCAF43.8060408_at_byu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault when resuming on different host<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-29 16:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18072.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Previous message:</strong> <a href="18070.php">Lloyd Brown: "[OMPI users] segfault when resuming on different host"</a>
<li><strong>In reply to:</strong> <a href="18070.php">Lloyd Brown: "[OMPI users] segfault when resuming on different host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18075.php">Lloyd Brown: "Re: [OMPI users] segfault when resuming on different host"</a>
<li><strong>Reply:</strong> <a href="18075.php">Lloyd Brown: "Re: [OMPI users] segfault when resuming on different host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Often this type of problem is due to the 'prelink' option in Linux.
<br>
BLCR has a FAQ item that discusses this issue and how to resolve it:
<br>
&nbsp;&nbsp;<a href="https://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink</a>
<br>
<p>I would give that a try. If that does not help then you might want to
<br>
try checkpointing a single (non-MPI) process on one node with BLCR and
<br>
restart it on the other node. If that fails, then it is likely a
<br>
BLCR/system configuration issue that is the cause. If it does work,
<br>
then we can dig more into the Open MPI causes.
<br>
<p>Let me know if disabling prelink works for you.
<br>
<p>-- Josh
<br>
<p>On Thu, Dec 29, 2011 at 1:19 PM, Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi, all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm in the middle of testing some of the checkpoint/restart capabilities
</span><br>
<span class="quotelev1">&gt; of OpenMPI with BLCR on our cluster. &#160;I've been able to checkpoint and
</span><br>
<span class="quotelev1">&gt; restart successfully when I restart on the same nodes as it was running
</span><br>
<span class="quotelev1">&gt; previously. &#160;But when I try to restart on a different host, I always get
</span><br>
<span class="quotelev1">&gt; an error like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi-restart ompi_global_snapshot_15935.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 15201 on node m5stage-1-2.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, it's very possible that I've missed something during the setup, or
</span><br>
<span class="quotelev1">&gt; that despite my failure to find it while searching the mailing list,
</span><br>
<span class="quotelev1">&gt; that this is already answered somewhere, but none of the threads I could
</span><br>
<span class="quotelev1">&gt; find seemed to apply (eg. cr_restart *is* installed, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm attaching a tarball that contains the source code of the very-simple
</span><br>
<span class="quotelev1">&gt; test application, as well as some example output of &quot;ompi_info --all&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;ompi_info -v ompi full --parsable&quot;. &#160;I don't know if this will be
</span><br>
<span class="quotelev1">&gt; useful or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is being tested on CentOS v5.4 with BLCR v0.8.4. &#160;I've seen this
</span><br>
<span class="quotelev1">&gt; problem with OpenMPI v1.4.2, v1.4.4, and v1.5.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If anyone has any ideas on what's going on, or how to best debug this,
</span><br>
<span class="quotelev1">&gt; I'd love to hear about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't mind doing the legwork too, but I'm just stumped where to go
</span><br>
<span class="quotelev1">&gt; from here. &#160;I have some core files, but I'm having trouble getting the
</span><br>
<span class="quotelev1">&gt; symbols from the backtrace in gdb. &#160;Maybe I'm doing it wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIA,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lloyd Brown
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; Brigham Young University
</span><br>
<span class="quotelev1">&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18072.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Previous message:</strong> <a href="18070.php">Lloyd Brown: "[OMPI users] segfault when resuming on different host"</a>
<li><strong>In reply to:</strong> <a href="18070.php">Lloyd Brown: "[OMPI users] segfault when resuming on different host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18075.php">Lloyd Brown: "Re: [OMPI users] segfault when resuming on different host"</a>
<li><strong>Reply:</strong> <a href="18075.php">Lloyd Brown: "Re: [OMPI users] segfault when resuming on different host"</a>
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
