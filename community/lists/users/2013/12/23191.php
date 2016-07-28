<?
$subject_val = "Re: [OMPI users] Cuda Aware MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 13 08:21:06 2013" -->
<!-- isoreceived="20131213132106" -->
<!-- sent="Fri, 13 Dec 2013 05:21:03 -0800" -->
<!-- isosent="20131213132103" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cuda Aware MPI Problem" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601911FCED_at_HQMAIL02.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAA52m+NNM_tnJcXr2bd4DeCqDSzZyixFTt18VhHZq8-WC3Hfxw_at_mail.gmail.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-13 08:21:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23192.php">tom fogal: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23190.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="23190.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this was a bug with Open MPI 1.7.3.  I could not reproduce it, but it was definitely an issue in certain configurations.
<br>
Here was the fix.   <a href="https://svn.open-mpi.org/trac/ompi/changeset/29762">https://svn.open-mpi.org/trac/ompi/changeset/29762</a>
<br>

<br>
We fixed it in Open MPI 1.7.4 and the trunk version, so as you have seen, they do not have the problem.
<br>

<br>
Rolf
<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;agliyan
<br>
Sent: Friday, December 13, 2013 8:03 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Cuda Aware MPI Problem
<br>

<br>
Hello again,
<br>

<br>
I have compiled openmpi--1.9a1r29873 from nightly build trunk and so far everything looks alright. But I have not test the cuda support yet.
<br>

<br>
On Fri, Dec 13, 2013 at 2:38 PM, &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan &lt;ozgur.pekcagliyan_at_[hidden]&lt;mailto:ozgur.pekcagliyan_at_[hidden]&gt;&gt; wrote:
<br>
Hello,
<br>

<br>
I am having difficulties with compiling openMPI with CUDA support. I have followed this (<a href="http://www.open-mpi.org/faq/?category=building#build-cuda">http://www.open-mpi.org/faq/?category=building#build-cuda</a>) faq entry. As below;
<br>

<br>
$ cd openmpi-1.7.3/
<br>
$ ./configure --with-cuda=/urs/local/cuda-5.5
<br>
$ make all install
<br>

<br>
everything goes perfect during compilation. But when I try to execute simplest mpi hello world application I got following error;
<br>

<br>
$ mpicc hello.c -o hello
<br>
$ mpirun -np 2 hello
<br>

<br>
hello: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
hello: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 30329 on
<br>
node cudalab1 exiting improperly. There are three reasons this could occur:
<br>

<br>
1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>

<br>
2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>

<br>
3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>

<br>
This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>

<br>
You can avoid this message by specifying -quiet on the mpirun command line.
<br>

<br>
--------------------------------------------------------------------------
<br>

<br>
$ mpirun -np 1 hello
<br>

<br>
hello: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 30327 on
<br>
node cudalab1 exiting improperly. There are three reasons this could occur:
<br>

<br>
1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>

<br>
2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>

<br>
3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>

<br>
This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>

<br>
You can avoid this message by specifying -quiet on the mpirun command line.
<br>

<br>
--------------------------------------------------------------------------
<br>

<br>

<br>
Any suggestions?
<br>
I have two PCs with Intel I3 CPUs and Geforce GTX 480 GPUs.
<br>

<br>

<br>
And here is the hello.c file;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>

<br>

<br>
int main (int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int rank, size;
<br>

<br>
&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv); /* starts MPI */
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

<br>

<br>

<br>
--
<br>
&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan
<br>
B.Sc. in Computer Engineering
<br>
M.Sc. in Computer Engineering
<br>

<br>

<br>

<br>
--
<br>
&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan
<br>
B.Sc. in Computer Engineering
<br>
M.Sc. in Computer Engineering
<br>

<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23191/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23192.php">tom fogal: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23190.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="23190.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
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
