<?
$subject_val = "Re: [OMPI users] Openmpi on Heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 13:54:00 2009" -->
<!-- isoreceived="20091105185400" -->
<!-- sent="Thu, 5 Nov 2009 10:53:54 -0800 (PST)" -->
<!-- isosent="20091105185354" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi on Heterogeneous environment" -->
<!-- id="54321.198.133.185.38.1257447234.squirrel_at_mercury.nsi.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Pallab Datta (<em>datta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 13:53:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11073.php">qing pang: "[OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11071.php">Yogesh Aher: "[OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="11071.php">Yogesh Aher: "[OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11113.php">Yogesh Aher: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have had issues for running in cross platforms..ie. Mac OSX and Linux
<br>
(Ubuntu)..haven't got it resolved..check firewalls if thats blocking any
<br>
communication..
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
<span class="quotelev1">&gt; When I keep only one machine-name in the hostfile, then the execution
</span><br>
<span class="quotelev1">&gt; works
</span><br>
<span class="quotelev1">&gt; perfect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will anybody please guide me to run the program on heterogeneous
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; using mpirun!
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
<li><strong>Next message:</strong> <a href="11073.php">qing pang: "[OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11071.php">Yogesh Aher: "[OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="11071.php">Yogesh Aher: "[OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11113.php">Yogesh Aher: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
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
