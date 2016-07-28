<?
$subject_val = "Re: [OMPI users] Occasional mpirun hang on completion";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 22:10:23 2008" -->
<!-- isoreceived="20080125031023" -->
<!-- sent="Thu, 24 Jan 2008 22:09:51 -0500" -->
<!-- isosent="20080125030951" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Occasional mpirun hang on completion" -->
<!-- id="20080125030951.GA19638_at_eponymous" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ea86ce220801241303o16ec766k6158b232f79222b3_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-01-24 22:09:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4880.php">Stefan Knecht: "[OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="4878.php">David Souther: "[OMPI users] Topology functions from MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="4877.php">Tim Mattox: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4886.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4886.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 24, 2008 at 04:03:49PM -0500, Tim Mattox wrote:
<br>
<span class="quotelev1">&gt; Hello Barry,
</span><br>
<span class="quotelev1">&gt; I am guessing you are trying to use a threaded build of Open MPI...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, the threading support in Open MPI 1.2.x is not only not well
</span><br>
<span class="quotelev1">&gt; tested, it has many known problems.  We do not advise use of threading in
</span><br>
<span class="quotelev1">&gt; the Open MPI 1.2.x series.  We even added a warning in version 1.2.5 if
</span><br>
<span class="quotelev1">&gt; you try to use threading... specifically we added run-time warnings during
</span><br>
<span class="quotelev1">&gt; MPI_INIT when MPI_THREAD_MULTIPLE and/or progression threads are used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are targeting the 1.3 series to have threading support actually working.
</span><br>
<p>Well, I'm happy the problem is obvious and the workaround is easy.  I'll
<br>
compile that version tonight and try it out when I get some time on the
<br>
cluster tomorrow.
<br>
<p>Thanks for the help!
<br>
<p>Barry
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 24, 2008 3:25 AM, Barry Rountree &lt;rountree_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jan 24, 2008 at 03:01:40AM -0500, Barry Rountree wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Fri, Jan 18, 2008 at 08:33:10PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Barry --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Could you check what apps are still running when it hangs?  I.e., I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; assume that all the uptime's are dead; are all the orted's dead on the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; remote nodes?  (orted = our helper process that is launched on the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; remote nodes to exert process control, funnel I/O back and forth to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun, etc.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One more bit of trivia -- when I ran my killall script across the nodes,
</span><br>
<span class="quotelev2">&gt; &gt; there were four out of sixteen that had an orted process hanging out.
</span><br>
<span class="quotelev2">&gt; &gt; If this is a synchronization problem, then most of the nodes are
</span><br>
<span class="quotelev2">&gt; &gt; handling it fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here's the stack trace of the orted process on node 01.  The &quot;uname&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; process was long gone (and had sent its output back with no difficulty).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ============
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Stopping process localhost:5321 (/osr/users/rountree/ompi-1.2.4_intel_threaded_debug/bin/orted).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thread received signal INT
</span><br>
<span class="quotelev3">&gt; &gt; &gt; stopped at [&lt;opaque&gt; pthread_cond_wait@@GLIBC_2.3.2(...) 0x00002aaaab67a766]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (idb) where
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;0  0x00002aaaab67a766 in pthread_cond_wait@@GLIBC_2.3.2(...) in /lib64/libpthread-2.4.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x0000000000401fef in opal_condition_wait(c=0x5075c0, m=0x507580) &quot;../../../opal/threads/condition.h&quot;:64
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x0000000000403000 in main(argc=17, argv=0x7ffffd82cd38) &quot;orted.c&quot;:525
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  0x00002aaaab7a6e54 in __libc_start_main(...) in /lib64/libc-2.4.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x0000000000401c19 in _start(...) in /osr/users/rountree/ompi-1.2.4_intel_threaded_debug/bin/orted
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ============
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The mpirun process on the root node isn't quite as useful.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ============
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Stopping process localhost:29856 (/osr/users/rountree/ompi-1.2.4_intel_threaded_debug/bin/orterun).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thread received signal INT
</span><br>
<span class="quotelev3">&gt; &gt; &gt; stopped at [&lt;opaque&gt; poll(...) 0x00000039ef2c3806]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (idb) where
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;0  0x00000039ef2c3806 in poll(...) in /lib64/libc-2.4.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x0000000040a000c0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ============
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Let me know what other information would be helpful.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Barry
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4880.php">Stefan Knecht: "[OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="4878.php">David Souther: "[OMPI users] Topology functions from MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="4877.php">Tim Mattox: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4886.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4886.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
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
