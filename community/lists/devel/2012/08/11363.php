<?
$subject_val = "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  3 03:29:49 2012" -->
<!-- isoreceived="20120803072949" -->
<!-- sent="Fri, 3 Aug 2012 16:59:53 +0930" -->
<!-- isosent="20120803072953" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk" -->
<!-- id="20120803165953.2d5e558d_at_Gantu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D895198B-D966-4D44-B7C3-6AE6B4B0729F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-03 03:29:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11364.php">Paul Kapinos: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11362.php">P. Martin: "Re: [OMPI devel] 1.6.1rc2"</a>
<li><strong>In reply to:</strong> <a href="11359.php">Jeff Squyres: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11364.php">Paul Kapinos: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Reply:</strong> <a href="11364.php">Paul Kapinos: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Reply:</strong> <a href="11389.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2 Aug 2012 10:25:53 -0400
<br>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 1, 2012, at 9:44 AM, Christopher Yeoh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run one of my MTT configs with --enable-mpi-thread-multiple, but
</span><br>
<span class="quotelev1">&gt; only run single-threaded apps (i.e., MPI_THREAD_SINGLE).  This just
</span><br>
<span class="quotelev1">&gt; checks the bozo case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm seeing even very basic programs hang. If it is working for you,
</span><br>
<span class="quotelev2">&gt; &gt; what architecture are you running on? (may help me debug what is
</span><br>
<span class="quotelev2">&gt; &gt; going on with my setup). In contrast, 1.6 on the same machines work
</span><br>
<span class="quotelev2">&gt; &gt; fine for me (well as fine as MPI_THREAD_MULTIPLE has ever worked
</span><br>
<span class="quotelev2">&gt; &gt; anyway ;-) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder what broke on the trunk...
</span><br>
<p>I don't know, but its getting pretty frustrating trying to work out
<br>
what is going wrong. I've narrowed it down to a very simple test case 
<br>
(you don't need to explicitly spawn any threads).
<br>
<p>Just need a program like:
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char hostname[4096];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size, provided;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init_thread( &amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (provided != MPI_THREAD_MULTIPLE) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;errx(1, &quot;MPI_Init_thread expected, MPI_THREAD_MULTIPLE (%d), &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;got %d \n&quot;, MPI_THREAD_MULTIPLE, provided);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s(%d) of %d provided=(%d)\n&quot;, hostname, rank, size, provided);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>If its run with &quot;--mpi-preconnect_mpi 1&quot; then it hangs in MPI_Init_thread. If not,
<br>
then it hangs in MPI_Barrier. Get a backtrace that looks like this (with the former):
<br>
<p>(gdb) bt
<br>
#0  0x0000008039720d6c in .pthread_cond_wait () from /lib64/power6/libpthread.so.0
<br>
#1  0x00000400001299d8 in opal_condition_wait (c=0x400004763f8, m=0x40000476460)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../ompi-trunk.chris2/opal/threads/condition.h:79
<br>
#2  0x000004000012a08c in ompi_request_default_wait_all (count=2, requests=0xfffffa9db20, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;statuses=0x0) at ../../ompi-trunk.chris2/ompi/request/req_wait.c:281
<br>
#3  0x000004000012f56c in ompi_init_preconnect_mpi ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../ompi-trunk.chris2/ompi/runtime/ompi_mpi_preconnect.c:72
<br>
#4  0x000004000012c738 in ompi_mpi_init (argc=1, argv=0xfffffa9f278, requested=3, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0xfffffa9edd8) at ../../ompi-trunk.chris2/ompi/runtime/ompi_mpi_init.c:800
<br>
#5  0x000004000017a064 in PMPI_Init_thread (argc=0xfffffa9ee20, argv=0xfffffa9ee28, required=3, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0xfffffa9edd8) at pinit_thread.c:84
<br>
#6  0x0000000010000ae4 in main (argc=1, argv=0xfffffa9f278) at test2.c:15
<br>
<p>(neither of the requests are received so presumably messages are getting lost).
<br>
<p>In contrast if you run against the exact same build of OMPI with pretty 
<br>
much the same test program but do &quot;MPI_Init(&amp;argc, &amp;argv)&quot; then it works fine.
<br>
<p>If anyone has any suggestions they'd be very welcome. I've resorted to staring at log outputs
<br>
(with openib and rml verbose) comparing running with MPI_THREAD_MULTIPLE and without
<br>
to try to work out where there might be a race. 
<br>
<p>Regards,
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11364.php">Paul Kapinos: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11362.php">P. Martin: "Re: [OMPI devel] 1.6.1rc2"</a>
<li><strong>In reply to:</strong> <a href="11359.php">Jeff Squyres: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11364.php">Paul Kapinos: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Reply:</strong> <a href="11364.php">Paul Kapinos: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Reply:</strong> <a href="11389.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
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
