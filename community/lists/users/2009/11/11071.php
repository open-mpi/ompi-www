<?
$subject_val = "[OMPI users] Openmpi on Heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 13:47:33 2009" -->
<!-- isoreceived="20091105184733" -->
<!-- sent="Thu, 5 Nov 2009 19:47:28 +0100" -->
<!-- isosent="20091105184728" -->
<!-- name="Yogesh Aher" -->
<!-- email="aher.yogesh_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi on Heterogeneous environment" -->
<!-- id="44587a140911051047o2c4a0856he463e3654af85b6d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi on Heterogeneous environment<br>
<strong>From:</strong> Yogesh Aher (<em>aher.yogesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 13:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11072.php">Pallab Datta: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="11070.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11072.php">Pallab Datta: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="11072.php">Pallab Datta: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="11113.php">Yogesh Aher: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open-mpi users,
<br>
<p>I have installed openmpi on 2 different machines with different
<br>
architectures (INTEL and x86_64) separately (command: ./configure
<br>
--enable-heterogeneous). Compiled executables of the same code for these 2
<br>
arch. Kept these executables on individual machines. Prepared a hostfile
<br>
containing the names of those 2 machines.
<br>
Now, when I want to execute the code (giving command - ./mpirun -hostfile
<br>
machines executable), it doesn't work, giving error message:
<br>
<p>MPI_ABORT was invoked on rank 2 in communicator MPI_COMM_WORLD
<br>
with errorcode 1.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 2 with PID 1712 on
<br>
node studpc1.xxx.xxxx.xx exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here)
<br>
<p>When I keep only one machine-name in the hostfile, then the execution works
<br>
perfect.
<br>
<p>Will anybody please guide me to run the program on heterogeneous environment
<br>
using mpirun!
<br>
<p>Thanking you,
<br>
<p>Sincerely,
<br>
Yogesh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11072.php">Pallab Datta: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="11070.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11072.php">Pallab Datta: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="11072.php">Pallab Datta: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="11113.php">Yogesh Aher: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
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
