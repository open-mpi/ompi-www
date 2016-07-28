<?
$subject_val = "Re: [OMPI users] Cuda Aware MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 13 08:03:04 2013" -->
<!-- isoreceived="20131213130304" -->
<!-- sent="Fri, 13 Dec 2013 15:02:44 +0200" -->
<!-- isosent="20131213130244" -->
<!-- name="&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan" -->
<!-- email="ozgur.pekcagliyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cuda Aware MPI Problem" -->
<!-- id="CAA52m+NNM_tnJcXr2bd4DeCqDSzZyixFTt18VhHZq8-WC3Hfxw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAA52m+OMTgeqEO=rs1RPBUK9+rGSHS91ot2hQon8hxXR5295+g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cuda Aware MPI Problem<br>
<strong>From:</strong> &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan (<em>ozgur.pekcagliyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-13 08:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23191.php">Rolf vandeVaart: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="23189.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "[OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="23189.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "[OMPI users] Cuda Aware MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23191.php">Rolf vandeVaart: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>Reply:</strong> <a href="23191.php">Rolf vandeVaart: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again,
<br>
<p>I have compiled openmpi--1.9a1r29873 from nightly build trunk and so far
<br>
everything looks alright. But I have not test the cuda support yet.
<br>
<p><p>On Fri, Dec 13, 2013 at 2:38 PM, &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan &lt;
<br>
ozgur.pekcagliyan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having difficulties with compiling openMPI with CUDA support. I have
</span><br>
<span class="quotelev1">&gt; followed this (<a href="http://www.open-mpi.org/faq/?category=building#build-cuda">http://www.open-mpi.org/faq/?category=building#build-cuda</a>)
</span><br>
<span class="quotelev1">&gt; faq entry. As below;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cd openmpi-1.7.3/
</span><br>
<span class="quotelev1">&gt; $ ./configure --with-cuda=/urs/local/cuda-5.5
</span><br>
<span class="quotelev1">&gt; $ make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; everything goes perfect during compilation. But when I try to execute
</span><br>
<span class="quotelev1">&gt; simplest mpi hello world application I got following error;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc hello.c -o hello
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hello: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; hello: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 30329 on
</span><br>
<span class="quotelev1">&gt; node cudalab1 exiting improperly. There are three reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev1">&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev1">&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev1">&gt; error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can avoid this message by specifying -quiet on the mpirun command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hello: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 30327 on
</span><br>
<span class="quotelev1">&gt; node cudalab1 exiting improperly. There are three reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev1">&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev1">&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev1">&gt; error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can avoid this message by specifying -quiet on the mpirun command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; I have two PCs with Intel I3 CPUs and Geforce GTX 480 GPUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here is the hello.c file;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int rank, size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init (&amp;argc, &amp;argv); /* starts MPI */
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank); /* get current process id */
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size (MPI_COMM_WORLD, &amp;size); /* get number of processes */
</span><br>
<span class="quotelev1">&gt;   printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan
</span><br>
<span class="quotelev1">&gt; B.Sc. in Computer Engineering
</span><br>
<span class="quotelev1">&gt; M.Sc. in Computer Engineering
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan
B.Sc. in Computer Engineering
M.Sc. in Computer Engineering
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23190/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23191.php">Rolf vandeVaart: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="23189.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "[OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="23189.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "[OMPI users] Cuda Aware MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23191.php">Rolf vandeVaart: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>Reply:</strong> <a href="23191.php">Rolf vandeVaart: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
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
