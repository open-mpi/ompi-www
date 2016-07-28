<?
$subject_val = "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 07:24:46 2016" -->
<!-- isoreceived="20160121122446" -->
<!-- sent="Thu, 21 Jan 2016 12:24:42 +0000" -->
<!-- isosent="20160121122442" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE" -->
<!-- id="87y4bjglx1.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFb48S_JVpi5jSf=simF-T9vGeN2+_eZ54v+YhgDumSLEP39rg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 07:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28327.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Previous message:</strong> <a href="28325.php">Dave Love: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>In reply to:</strong> <a href="28287.php">Matt Thompson: "[OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28330.php">Thomas Jahns: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matt Thompson &lt;fortran_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not too sure if this is an MPI issue, a Fortran issue, or something
</span><br>
<span class="quotelev1">&gt; else but I thought I'd ask the MPI gurus here first since my web search
</span><br>
<span class="quotelev1">&gt; failed me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a chance in the future I might want/need to query an environment
</span><br>
<span class="quotelev1">&gt; variable in a Fortran program, namely to figure out what switch a currently
</span><br>
<span class="quotelev1">&gt; running process is on (via SLURM_TOPOLOGY_ADDR in my case) and perhaps make
</span><br>
<span class="quotelev1">&gt; a &quot;per-switch&quot; communicator.[1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I coded up a boring Fortran program whose only exciting lines are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call MPI_Get_Processor_Name(processor_name,name_length,ierror)
</span><br>
<span class="quotelev1">&gt;    call get_environment_variable(&quot;HOST&quot;,host_name)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is
</span><br>
<span class="quotelev1">&gt; on processor&quot;, trim(processor_name)
</span><br>
<span class="quotelev1">&gt;    write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is
</span><br>
<span class="quotelev1">&gt; on host&quot;, trim(host_name)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I decided to try out with the HOST environment variable first because it is
</span><br>
<span class="quotelev1">&gt; simple and different per node
</span><br>
<p>For what it's worth, HOST isn't in the default environment on our
<br>
cluster.  HOSTNAME is defined as a bash variable (but not in the POSIX
<br>
shell), but tasks may or may not be launched via a shell and inherit it.
<br>
<p>[...]
<br>
<p><span class="quotelev1">&gt; It looks like MPI_Get_Processor_Name is doing its thing, but the HOST one
</span><br>
<span class="quotelev1">&gt; seems to only be reflecting the first host. My guess is that OpenMPI
</span><br>
<span class="quotelev1">&gt; doesn't export every processes' environment separately to every process so
</span><br>
<span class="quotelev1">&gt; it is reflecting HOST from process 0.
</span><br>
<p>In addition to what's already been said:  First, was something wrong
<br>
with mpi_get_processor_name, or was this just an illustration?
<br>
<p>Second, I'd expect the environment even a serial job gets to depend --
<br>
there's no particular reason the batch resource manager should export
<br>
specific variables to it.&#185;  I don't know what SLURM does, but HOSTNAME
<br>
happens to be in the list SGE defines for the job that are reset from
<br>
any values exported from the submission environment.  Then, what an
<br>
MPI process sees depends on how it was launched (via qrsh in SGE's
<br>
case).
<br>
<p>I happen to have a copy of the timeless classic mpi-hello.f90 lying
<br>
around with these lines.  They do the same thing when run with OMPI
<br>
under SGE if you swap the commenting (as the demo doubtless should have
<br>
shown with a runtime switch...).
<br>
<p>&nbsp;&nbsp;!  call MPI_Get_processor_name (hostname, l, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call get_environment_variable (&quot;HOSTNAME&quot;, hostname)
<br>
<p>__
<br>
1. In fact, it can be a security issue to export things like LD_PRELOAD,
<br>
&nbsp;&nbsp;&nbsp;depending on how jobs are started; I had bad experience of the
<br>
&nbsp;&nbsp;&nbsp;CVE process from fixing that after two of us coincidentally
<br>
&nbsp;&nbsp;&nbsp;noticed different aspects of it being allowed.  I've an idea it's
<br>
&nbsp;&nbsp;&nbsp;been an issue for at least Torque too.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28327.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Previous message:</strong> <a href="28325.php">Dave Love: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>In reply to:</strong> <a href="28287.php">Matt Thompson: "[OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28330.php">Thomas Jahns: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
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
