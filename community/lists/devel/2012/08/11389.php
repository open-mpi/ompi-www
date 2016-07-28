<?
$subject_val = "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  8 09:55:39 2012" -->
<!-- isoreceived="20120808135539" -->
<!-- sent="Wed, 8 Aug 2012 23:25:51 +0930" -->
<!-- isosent="20120808135551" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk" -->
<!-- id="20120808232551.4675c1ef_at_Gantu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20120803165953.2d5e558d_at_Gantu" -->
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
<strong>Date:</strong> 2012-08-08 09:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11390.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11388.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Thu, 2 Aug 2012 10:25:53 -0400
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 1, 2012, at 9:44 AM, Christopher Yeoh wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0000008039720d6c in .pthread_cond_wait ()
</span><br>
<span class="quotelev1">&gt; from /lib64/power6/libpthread.so.0 #1  0x00000400001299d8 in
</span><br>
<span class="quotelev1">&gt; opal_condition_wait (c=0x400004763f8, m=0x40000476460)
</span><br>
<span class="quotelev1">&gt; at ../../ompi-trunk.chris2/opal/threads/condition.h:79 #2
</span><br>
<span class="quotelev1">&gt; 0x000004000012a08c in ompi_request_default_wait_all (count=2,
</span><br>
<span class="quotelev1">&gt; requests=0xfffffa9db20, statuses=0x0)
</span><br>
<span class="quotelev1">&gt; at ../../ompi-trunk.chris2/ompi/request/req_wait.c:281 #3
</span><br>
<span class="quotelev1">&gt; 0x000004000012f56c in ompi_init_preconnect_mpi ()
</span><br>
<span class="quotelev1">&gt; at ../../ompi-trunk.chris2/ompi/runtime/ompi_mpi_preconnect.c:72 #4
</span><br>
<span class="quotelev1">&gt; 0x000004000012c738 in ompi_mpi_init (argc=1, argv=0xfffffa9f278,
</span><br>
<span class="quotelev1">&gt; requested=3, provided=0xfffffa9edd8)
</span><br>
<span class="quotelev1">&gt; at ../../ompi-trunk.chris2/ompi/runtime/ompi_mpi_init.c:800 #5
</span><br>
<span class="quotelev1">&gt; 0x000004000017a064 in PMPI_Init_thread (argc=0xfffffa9ee20,
</span><br>
<span class="quotelev1">&gt; argv=0xfffffa9ee28, required=3, provided=0xfffffa9edd8) at
</span><br>
<span class="quotelev1">&gt; pinit_thread.c:84 #6  0x0000000010000ae4 in main (argc=1,
</span><br>
<span class="quotelev1">&gt; argv=0xfffffa9f278) at test2.c:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (neither of the requests are received so presumably messages are
</span><br>
<span class="quotelev1">&gt; getting lost).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In contrast if you run against the exact same build of OMPI with
</span><br>
<span class="quotelev1">&gt; pretty much the same test program but do &quot;MPI_Init(&amp;argc, &amp;argv)&quot;
</span><br>
<span class="quotelev1">&gt; then it works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I think I've worked out what is going on. The difference between 1.6 and
<br>
trunk is that in 1.6 is the #ifdefs in opal/threads/condition.h and how
<br>
they are set by configure. Its a bit complicated because there was some
<br>
renaming done between 1.6 and trunk.
<br>
<p>An excerpt from opal/threads/condition.h from 1.6 (in
<br>
opal_condition_wait):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (opal_using_threads()) {
<br>
#if OPAL_HAVE_POSIX_THREADS &amp;&amp; OPAL_ENABLE_PROGRESS_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = pthread_cond_wait(&amp;c-&gt;c_cond, &amp;m-&gt;m_lock_pthread);
<br>
#elif OPAL_HAVE_SOLARIS_THREADS &amp;&amp; OPAL_ENABLE_PROGRESS_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = cond_wait(&amp;c-&gt;c_cond, &amp;m-&gt;m_lock_solaris);
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (c-&gt;c_signaled) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c-&gt;c_waiting--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_mutex_unlock(m);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
<p>and from trunk:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (opal_using_threads()) {
<br>
#if OPAL_HAVE_POSIX_THREADS &amp;&amp; OPAL_ENABLE_MULTI_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = pthread_cond_wait(&amp;c-&gt;c_cond, &amp;m-&gt;m_lock_pthread);
<br>
#elif OPAL_HAVE_SOLARIS_THREADS &amp;&amp; OPAL_ENABLE_MULTI_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = cond_wait(&amp;c-&gt;c_cond, &amp;m-&gt;m_lock_solaris);
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (c-&gt;c_signaled) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c-&gt;c_waiting--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_mutex_unlock(m);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
<p><p>Now in 1.6 OPAL_ENABLE_PROGRESS_THREADS is hardcoded by configure to be
<br>
off. So even with mpi threads enabled when we are in
<br>
ompi_request_default_wait_all and call opal_condition_wait we still
<br>
call opal_progress.
<br>
<p>In trunk OPAL_ENABLE_MULTI_THREADS is set to 1 if mpi threads are
<br>
enabled. Note that in 1.6 OPAL_ENABLE_MULTI_THREADS also exists and is
<br>
set to 1 if mpi threads are enabled, but as can be seen above is not
<br>
used to control how opal_condition_wait behaves. 
<br>
<p>So in trunk when MPI_THREAD_MULTIPLE is requrest in init, the
<br>
pthread_cond_wait path is taken. MPI programs get stuck because the
<br>
main thread sits in pthread_cond_wait and there appears to be no one
<br>
around to call opal_progress. I've looked around in the OMPI code to see
<br>
where a thread should be spawned to service opal_progress, but I
<br>
haven't been able to find it.
<br>
<p>Between 1.6 and trunk OPAL_ENABLE_PROGRESS_THREADS seems to have
<br>
disappeared and OMPI_ENABLE_PROGRESS_THREADS has appeared. The latter
<br>
is hardcoded to be off. I tried to compile with
<br>
OMPI_ENABLE_PROGRESS_THREADS set, but there are compile errors
<br>
(presumably why its turned off). But I'm wondering if in
<br>
opal_condition_wait and a few other areas if OPAL_ENABLE_MULTI_THREADS
<br>
should in fact be OMPI_ENABLE_PROGRESS_THREADS?
<br>
<p>If I change a few of those OPAL_ENABLE_MULTI_THREADS to
<br>
OMPI_ENABLE_PROGRESS_THREADS (I don't know if I changed all that need
<br>
to be changed) then I can start running threaded MPI programs again.
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
<li><strong>Next message:</strong> <a href="11390.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11388.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
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
