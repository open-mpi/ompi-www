<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 13 00:25:18 2005" -->
<!-- isoreceived="20051013052518" -->
<!-- sent="Thu, 13 Oct 2005 01:25:07 -0400" -->
<!-- isosent="20051013052507" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[O-MPI users] Hpl Bench mark and Openmpi rc3" -->
<!-- id="434DEFB3.4040502_at_sympatico.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-13 00:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0197.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0195.php">Tim Prins: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0200.php">Jeff Squyres: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
<li><strong>Reply:</strong> <a href="0200.php">Jeff Squyres: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I have a 16 node cluster of x86 machines with FC3 running on the head 
<br>
node. I used a beta version of OSCAR 4.2 for putting together the 
<br>
cluster. It uses /home/allan as the NFS directory.
<br>
I tried Mpich2v1.02p1 and got abench mark of 26GFlops for it approx. 
<br>
WIth open mpi 1.0RC3 having set the LD_LIBRARY_PATH in .bashrc and the 
<br>
/opt/openmpi/bin path in .bash_profile in the home directory I cannnot 
<br>
seeem to get a performance beyond 9 GFlops approximately. The block size 
<br>
for mpich2 was 120 for best results. For open mpi for N = 22000 I have 
<br>
to use block sizes of 10 -11 to get a performance of 9GFlops other wise 
<br>
for larger block sizes(NB) it's worse. I used the same N=22000 for 
<br>
mpich2 and have a 16 port Gigabit Netgear ethernet switch with Gigabit 
<br>
realtek8169 ethernet cards. Can any one tell me why the performance with 
<br>
open mpi is so low compared to mpich2-1.02p1?
<br>
Thanking you in anticipation,
<br>
Allan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0197.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0195.php">Tim Prins: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0200.php">Jeff Squyres: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
<li><strong>Reply:</strong> <a href="0200.php">Jeff Squyres: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
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
