<?
$subject_val = "Re: [OMPI users] Openmpi on Heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 07:36:57 2009" -->
<!-- isoreceived="20091110123657" -->
<!-- sent="Tue, 10 Nov 2009 13:36:52 +0100" -->
<!-- isosent="20091110123652" -->
<!-- name="Yogesh Aher" -->
<!-- email="aher.yogesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi on Heterogeneous environment" -->
<!-- id="44587a140911100436g33aa93ecjd72241b882f484c1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44587a140911051047o2c4a0856he463e3654af85b6d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi on Heterogeneous environment<br>
<strong>From:</strong> Yogesh Aher (<em>aher.yogesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 07:36:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11114.php">Jeff Squyres: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="11112.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>In reply to:</strong> <a href="11071.php">Yogesh Aher: "[OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11114.php">Jeff Squyres: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="11114.php">Jeff Squyres: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply Pallab. Firewall is not an issue as I can
<br>
passwordless-SSH to/from both machines.
<br>
My problem is to deal with 32bit &amp; 64bit architectures simultaneously (and
<br>
not with different operating systems). Can it be possible through
<br>
open-MPI???
<br>
<p>Look forward to the solution!
<br>
<p>Thanks,
<br>
Yogesh
<br>
<p><p>*From:* Pallab Datta (*datta_at_[hidden]*)
<br>
<p>I have had issues for running in cross platforms..ie. Mac OSX and Linux
<br>
(Ubuntu)..haven't got it resolved..check firewalls if thats blocking any
<br>
communication..
<br>
<p>On Thu, Nov 5, 2009 at 7:47 PM, Yogesh Aher &lt;aher.yogesh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open-mpi users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi on 2 different machines with different
</span><br>
<span class="quotelev1">&gt; architectures (INTEL and x86_64) separately (command: ./configure
</span><br>
<span class="quotelev1">&gt; --enable-heterogeneous). Compiled executables of the same code for these 2
</span><br>
<span class="quotelev1">&gt; arch. Kept these executables on individual machines. Prepared a hostfile
</span><br>
<span class="quotelev1">&gt; containing the names of those 2 machines.
</span><br>
<span class="quotelev1">&gt; Now, when I want to execute the code (giving command - ./mpirun -hostfile
</span><br>
<span class="quotelev1">&gt; machines executable), it doesn't work, giving error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 2 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 1712 on
</span><br>
<span class="quotelev1">&gt; node studpc1.xxx.xxxx.xx exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I keep only one machine-name in the hostfile, then the execution works
</span><br>
<span class="quotelev1">&gt; perfect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will anybody please guide me to run the program on heterogeneous
</span><br>
<span class="quotelev1">&gt; environment using mpirun!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Yogesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11113/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11114.php">Jeff Squyres: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="11112.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>In reply to:</strong> <a href="11071.php">Yogesh Aher: "[OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11114.php">Jeff Squyres: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="11114.php">Jeff Squyres: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
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
