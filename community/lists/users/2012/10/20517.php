<?
$subject_val = "[OMPI users] Low cpu utilization due to high IO operations of openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 21 16:41:02 2012" -->
<!-- isoreceived="20121021204102" -->
<!-- sent="Sun, 21 Oct 2012 13:40:57 -0700 (PDT)" -->
<!-- isosent="20121021204057" -->
<!-- name="Mahmood Naderan" -->
<!-- email="nt_mahmood_at_[hidden]" -->
<!-- subject="[OMPI users] Low cpu utilization due to high IO operations of openmpi" -->
<!-- id="1350852057.15231.YahooMailNeo_at_web111718.mail.gq1.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Low cpu utilization due to high IO operations of openmpi<br>
<strong>From:</strong> Mahmood Naderan (<em>nt_mahmood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-21 16:40:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20518.php">Yoshiki SATO: "[OMPI users] Java binding requirements"</a>
<li><strong>Previous message:</strong> <a href="20516.php">Eric Chamberland: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
We have a diskless cluster with these specs:
<br>
1) A server which has some disks. Root directories (/usr, /lib, ...) are 
<br>
<p>on /dev/sda while /home is on /dev/sdb and these are two physical 
<br>
<p>hard drives.
<br>
<p>2) Some compute nodes. These don't have any disk drive instead they 
<br>
<p>are connected through a 10/100/1000 switch to the server
<br>
<p>3) Nodes uses a NFS directory for booting which resides on /dev/sda.
<br>
<p>In our cluster we use openmpi with openfoam. Both were compiled using 
<br>
<p>default options. Problem is when the openfoam solver with openmpi is 
<br>
<p>sent to a compute node, the opnempi uses a lot of *WRITE* operations
<br>
which causes a low cpu utilization and hence the processes are mainly 
<br>
<p>in 'D' state. A brief description of our tests are:
<br>
<p>We ssh to the compute node and run the application there
<br>
<p>Test 1) One process of openfoam is launched without openmpi. Everything 
<br>
<p>is fine and cpu is utilized 100%
<br>
Test 2) Two processes of openfoam is launched (mpirun -np 2 ....). Two 
<br>
<p>openfoam processes has about 30% cpu utilization and they are in 'D' 
<br>
<p>state most of the time.
<br>
<p><p>Is there any suggestion on that. That is a really poor performance
<br>
<p><p>Regards,
<br>
Mahmood
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20517/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20518.php">Yoshiki SATO: "[OMPI users] Java binding requirements"</a>
<li><strong>Previous message:</strong> <a href="20516.php">Eric Chamberland: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
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
