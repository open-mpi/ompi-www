<?
$subject_val = "[OMPI users] Issue running mpi program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 00:31:27 2014" -->
<!-- isoreceived="20140508043127" -->
<!-- sent="Thu, 8 May 2014 00:31:26 -0400" -->
<!-- isosent="20140508043126" -->
<!-- name="zack li" -->
<!-- email="lyzack89_at_[hidden]" -->
<!-- subject="[OMPI users] Issue running mpi program" -->
<!-- id="CAERZHG8rU1rAgErnVdywLjOfomo6_e6BB=0kEiZXyr=3q8R8PQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Issue running mpi program<br>
<strong>From:</strong> zack li (<em>lyzack89_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 00:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24312.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24310.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24340.php">Ralph Castain: "Re: [OMPI users] Issue running mpi program"</a>
<li><strong>Reply:</strong> <a href="24340.php">Ralph Castain: "Re: [OMPI users] Issue running mpi program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to run a simple MPI program on TACC Stampede system.  But, I
<br>
have the following error:
<br>
c445-203$ ../../ompi/install/bin/mpirun -np 2 -hostfile hosts ./simp
<br>
srun: cluster configuration lacks support for cpu bindingBut, I have
<br>
<p>My config flag is:
<br>
./configure --prefix=$PWD/install --enable-static --disable-shared
<br>
--without-slurm --without-ftb --disable-vt
<br>
<p>Could anyone tell me what's the issue here?
<br>
<p>Zack
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24311/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24312.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24310.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24340.php">Ralph Castain: "Re: [OMPI users] Issue running mpi program"</a>
<li><strong>Reply:</strong> <a href="24340.php">Ralph Castain: "Re: [OMPI users] Issue running mpi program"</a>
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
