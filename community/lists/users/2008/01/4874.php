<?
$subject_val = "Re: [OMPI users] Occasional mpirun hang on completion";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 03:26:21 2008" -->
<!-- isoreceived="20080124082621" -->
<!-- sent="Thu, 24 Jan 2008 03:25:56 -0500" -->
<!-- isosent="20080124082556" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Occasional mpirun hang on completion" -->
<!-- id="20080124082556.GT12062_at_eponymous" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20080124080140.GS12062_at_eponymous" -->
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
<strong>Subject:</strong> Re: [OMPI users] Occasional mpirun hang on completion<br>
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 03:25:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4875.php">Wong, Wayne: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="4873.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>In reply to:</strong> <a href="4873.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4877.php">Tim Mattox: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4877.php">Tim Mattox: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 24, 2008 at 03:01:40AM -0500, Barry Rountree wrote:
<br>
<span class="quotelev1">&gt; On Fri, Jan 18, 2008 at 08:33:10PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Barry --
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could you check what apps are still running when it hangs?  I.e., I  
</span><br>
<span class="quotelev2">&gt; &gt; assume that all the uptime's are dead; are all the orted's dead on the  
</span><br>
<span class="quotelev2">&gt; &gt; remote nodes?  (orted = our helper process that is launched on the  
</span><br>
<span class="quotelev2">&gt; &gt; remote nodes to exert process control, funnel I/O back and forth to  
</span><br>
<span class="quotelev2">&gt; &gt; mpirun, etc.)
</span><br>
<p>One more bit of trivia -- when I ran my killall script across the nodes,
<br>
there were four out of sixteen that had an orted process hanging out.
<br>
If this is a synchronization problem, then most of the nodes are
<br>
handling it fine.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the stack trace of the orted process on node 01.  The &quot;uname&quot; 
</span><br>
<span class="quotelev1">&gt; process was long gone (and had sent its output back with no difficulty).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Stopping process localhost:5321 (/osr/users/rountree/ompi-1.2.4_intel_threaded_debug/bin/orted).
</span><br>
<span class="quotelev1">&gt; Thread received signal INT
</span><br>
<span class="quotelev1">&gt; stopped at [&lt;opaque&gt; pthread_cond_wait@@GLIBC_2.3.2(...) 0x00002aaaab67a766]
</span><br>
<span class="quotelev1">&gt; (idb) where
</span><br>
<span class="quotelev2">&gt; &gt;0  0x00002aaaab67a766 in pthread_cond_wait@@GLIBC_2.3.2(...) in /lib64/libpthread-2.4.so
</span><br>
<span class="quotelev1">&gt; #1  0x0000000000401fef in opal_condition_wait(c=0x5075c0, m=0x507580) &quot;../../../opal/threads/condition.h&quot;:64
</span><br>
<span class="quotelev1">&gt; #2  0x0000000000403000 in main(argc=17, argv=0x7ffffd82cd38) &quot;orted.c&quot;:525
</span><br>
<span class="quotelev1">&gt; #3  0x00002aaaab7a6e54 in __libc_start_main(...) in /lib64/libc-2.4.so
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000401c19 in _start(...) in /osr/users/rountree/ompi-1.2.4_intel_threaded_debug/bin/orted
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpirun process on the root node isn't quite as useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Stopping process localhost:29856 (/osr/users/rountree/ompi-1.2.4_intel_threaded_debug/bin/orterun).
</span><br>
<span class="quotelev1">&gt; Thread received signal INT
</span><br>
<span class="quotelev1">&gt; stopped at [&lt;opaque&gt; poll(...) 0x00000039ef2c3806]
</span><br>
<span class="quotelev1">&gt; (idb) where
</span><br>
<span class="quotelev2">&gt; &gt;0  0x00000039ef2c3806 in poll(...) in /lib64/libc-2.4.so
</span><br>
<span class="quotelev1">&gt; #1  0x0000000040a000c0
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know what other information would be helpful.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barry
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4875.php">Wong, Wayne: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="4873.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>In reply to:</strong> <a href="4873.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4877.php">Tim Mattox: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4877.php">Tim Mattox: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
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
