<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 21 00:34:40 2006" -->
<!-- isoreceived="20060421043440" -->
<!-- sent="Fri, 21 Apr 2006 12:25:10 +0800" -->
<!-- isosent="20060421042510" -->
<!-- name="semper" -->
<!-- email="semper_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SLURM Confiuration ?" -->
<!-- id="345593510.12398_at_nudt.edu.cn" -->
<!-- inreplyto="[OMPI users] OpenMPI and SLURM Confiuration ?" -->
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
<strong>From:</strong> semper (<em>semper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-21 00:25:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1115.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
<li><strong>Previous message:</strong> <a href="1113.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1116.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
<li><strong>Maybe reply:</strong> <a href="1116.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;I think that you need to install Open MPI into other machine as well.
</span><br>
<span class="quotelev1">&gt;You might want to setup NSF (network file system) for the master (you are
</span><br>
<span class="quotelev1">&gt;saying your local machine) so that your slave nodes could see your
</span><br>
<span class="quotelev1">&gt;mpi executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash line 1: orted : command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This error might go away if you install Open MPI into all machines.
</span><br>
<p>Thank you,Sang Chul.
<br>
<p>I consulted the system administrator,and NFS is already UP. Yet disk0-4 all are
<br>
located under /home directory,that is to say ,they can be accessed by user semper
<br>
on each node.  So I add to mpirun &quot;--prefix /home/disk0/semper/openmpi&quot; option
<br>
which absolutely can be found by each node. this time it works!!!
<br>
<p>However when I type &quot;mpirun -np 3 --hostfile hostfile --prefix 
<br>
/home/disk0/semper/openmpi hostname -s&quot; after &quot;srun -N 3 -A&quot;, there goes 3
<br>
results, and then hang. &quot;squeue&quot; shows that job is completed but not removed from
<br>
job queue. what does that say?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1115.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
<li><strong>Previous message:</strong> <a href="1113.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1116.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
<li><strong>Maybe reply:</strong> <a href="1116.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
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
