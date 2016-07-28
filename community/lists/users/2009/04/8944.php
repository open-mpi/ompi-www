<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and oreted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 06:03:02 2009" -->
<!-- isoreceived="20090416100302" -->
<!-- sent="Thu, 16 Apr 2009 18:02:51 +0800" -->
<!-- isosent="20090416100251" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and oreted" -->
<!-- id="49E7024B.2040509_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E6F05F.6090107_at_mailsnare.net" -->
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
<strong>Date:</strong> 2009-04-16 06:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8945.php">Terry Frankcombe: "Re: [OMPI users] An mpirun question"</a>
<li><strong>Previous message:</strong> <a href="8943.php">Min Zhu: "[OMPI users] An mpirun question"</a>
<li><strong>In reply to:</strong> <a href="8942.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8951.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Reply:</strong> <a href="8951.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi !
<br>
<p>finally I got it:
<br>
passing the mca key/value `&quot;plm_slurm_args&quot;/&quot;--chdir /local/folder&quot;' does the trick.
<br>
<p>As a matter of fact, my code pass the MPI_Info key/value `&quot;wdir&quot;/&quot;/local/folder&quot;'
<br>
to MPI_Comm_spawn as well: the working directories on the nodes of the spawned programs
<br>
are `nodes:/local/folder' as expected, but the working directory of the oreted_s
<br>
is the working directory of the parent program. My guess is that the MPI_Info key/vale
<br>
may also be passed to `srun'.
<br>
<p>hth,
<br>
Jerome
<br>
<p><p><p>Jerome BENOIT wrote:
<br>
<span class="quotelev1">&gt; Hello Again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jerome BENOIT wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello List,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have just noticed that, when MPI_Comm_spawn is used to launch 
</span><br>
<span class="quotelev2">&gt;&gt; programs around,
</span><br>
<span class="quotelev2">&gt;&gt; oreted working directory on the nodes is the working directory of the 
</span><br>
<span class="quotelev2">&gt;&gt; spawnning program:
</span><br>
<span class="quotelev2">&gt;&gt; can we ask to oreted to use an another directory ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changing the working the directory via chdir before spawning with 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; changes nothing: the oreted working directory on the nodes seems to be 
</span><br>
<span class="quotelev1">&gt; imposed
</span><br>
<span class="quotelev1">&gt; by something else. As run OMPI on top of SLURM, I guess this is related 
</span><br>
<span class="quotelev1">&gt; to SLURM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Jerome _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8945.php">Terry Frankcombe: "Re: [OMPI users] An mpirun question"</a>
<li><strong>Previous message:</strong> <a href="8943.php">Min Zhu: "[OMPI users] An mpirun question"</a>
<li><strong>In reply to:</strong> <a href="8942.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8951.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Reply:</strong> <a href="8951.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
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
