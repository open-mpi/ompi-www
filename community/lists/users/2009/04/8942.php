<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and oreted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 04:46:32 2009" -->
<!-- isoreceived="20090416084632" -->
<!-- sent="Thu, 16 Apr 2009 16:46:23 +0800" -->
<!-- isosent="20090416084623" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and oreted" -->
<!-- id="49E6F05F.6090107_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E6E894.2020404_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn and oreted<br>
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 04:46:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8943.php">Min Zhu: "[OMPI users] An mpirun question"</a>
<li><strong>Previous message:</strong> <a href="8941.php">Jerome BENOIT: "[OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>In reply to:</strong> <a href="8941.php">Jerome BENOIT: "[OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8944.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Reply:</strong> <a href="8944.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Again,
<br>
<p>Jerome BENOIT wrote:
<br>
<span class="quotelev1">&gt; Hello List,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have just noticed that, when MPI_Comm_spawn is used to launch programs 
</span><br>
<span class="quotelev1">&gt; around,
</span><br>
<span class="quotelev1">&gt; oreted working directory on the nodes is the working directory of the 
</span><br>
<span class="quotelev1">&gt; spawnning program:
</span><br>
<span class="quotelev1">&gt; can we ask to oreted to use an another directory ?
</span><br>
<p>Changing the working the directory via chdir before spawning with MPI_Comm_spawn
<br>
changes nothing: the oreted working directory on the nodes seems to be imposed
<br>
by something else. As run OMPI on top of SLURM, I guess this is related to SLURM.
<br>
<p>Jerome
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Jerome _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8943.php">Min Zhu: "[OMPI users] An mpirun question"</a>
<li><strong>Previous message:</strong> <a href="8941.php">Jerome BENOIT: "[OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>In reply to:</strong> <a href="8941.php">Jerome BENOIT: "[OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8944.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Reply:</strong> <a href="8944.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
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
