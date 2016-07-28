<?
$subject_val = "[OMPI users] Cuda Aware MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 13 07:39:15 2013" -->
<!-- isoreceived="20131213123915" -->
<!-- sent="Fri, 13 Dec 2013 14:38:55 +0200" -->
<!-- isosent="20131213123855" -->
<!-- name="&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan" -->
<!-- email="ozgur.pekcagliyan_at_[hidden]" -->
<!-- subject="[OMPI users] Cuda Aware MPI Problem" -->
<!-- id="CAA52m+OMTgeqEO=rs1RPBUK9+rGSHS91ot2hQon8hxXR5295+g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Cuda Aware MPI Problem<br>
<strong>From:</strong> &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan (<em>ozgur.pekcagliyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-13 07:38:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23190.php">Özgür Pekçağlıyan: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="23188.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23190.php">Özgür Pekçağlıyan: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>Reply:</strong> <a href="23190.php">Özgür Pekçağlıyan: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am having difficulties with compiling openMPI with CUDA support. I have
<br>
followed this (<a href="http://www.open-mpi.org/faq/?category=building#build-cuda">http://www.open-mpi.org/faq/?category=building#build-cuda</a>)
<br>
faq entry. As below;
<br>
<p>$ cd openmpi-1.7.3/
<br>
$ ./configure --with-cuda=/urs/local/cuda-5.5
<br>
$ make all install
<br>
<p>everything goes perfect during compilation. But when I try to execute
<br>
simplest mpi hello world application I got following error;
<br>
<p>$ mpicc hello.c -o hello
<br>
$ mpirun -np 2 hello
<br>
<p>hello: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so:
<br>
undefined symbol: progress_one_cuda_htod_event
<br>
hello: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so:
<br>
undefined symbol: progress_one_cuda_htod_event
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 30329 on
<br>
node cudalab1 exiting improperly. There are three reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>You can avoid this message by specifying -quiet on the mpirun command line.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>$ mpirun -np 1 hello
<br>
<p>hello: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so:
<br>
undefined symbol: progress_one_cuda_htod_event
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 30327 on
<br>
node cudalab1 exiting improperly. There are three reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>You can avoid this message by specifying -quiet on the mpirun command line.
<br>
<p>--------------------------------------------------------------------------
<br>
<p><p>Any suggestions?
<br>
I have two PCs with Intel I3 CPUs and Geforce GTX 480 GPUs.
<br>
<p><p>And here is the hello.c file;
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p><p>int main (int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv); /* starts MPI */
<br>
&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank); /* get current process id */
<br>
&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;size); /* get number of processes */
<br>
&nbsp;&nbsp;printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p><p><pre>
-- 
&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan
B.Sc. in Computer Engineering
M.Sc. in Computer Engineering
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23189/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23190.php">Özgür Pekçağlıyan: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="23188.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23190.php">Özgür Pekçağlıyan: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>Reply:</strong> <a href="23190.php">Özgür Pekçağlıyan: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
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
