<?
$subject_val = "Re: [OMPI users] get the process Id of mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 14 18:33:07 2009" -->
<!-- isoreceived="20091114233307" -->
<!-- sent="Sat, 14 Nov 2009 16:32:57 -0700" -->
<!-- isosent="20091114233257" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] get the process Id of mpirun" -->
<!-- id="E499045A-ED55-4261-BF19-E09400430632_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="38998.36627.qm_at_web31002.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] get the process Id of mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-14 18:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11197.php">Charles Salvia: "[OMPI users] TCP sockets opened by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11195.php">Gus Correa: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<li><strong>In reply to:</strong> <a href="11194.php">Kritiraj Sajadah: "[OMPI users] get the process Id of mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not that I know of - mpirun may not even be on the same node!
<br>
<p>And we certainly don't pass that information to the remote processes.
<br>
<p>On Nov 14, 2009, at 8:05 AM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;          I am trying to get the process Id of Mpirun from within my MPI application. When i use getpid() and getppid(), i get the PID of my application and the PID of &quot;orted --daemonize -mca...&quot; respectively. 
</span><br>
<span class="quotelev1">&gt; Is there a way to get the PID of the mpirun? In this case, it looks like it is the grandparent of the application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Raj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11197.php">Charles Salvia: "[OMPI users] TCP sockets opened by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11195.php">Gus Correa: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<li><strong>In reply to:</strong> <a href="11194.php">Kritiraj Sajadah: "[OMPI users] get the process Id of mpirun"</a>
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
