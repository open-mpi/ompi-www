<?
$subject_val = "[OMPI users] MPI_Comm_accept() busy waiting?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 06:28:23 2010" -->
<!-- isoreceived="20100302112823" -->
<!-- sent="Tue, 02 Mar 2010 12:27:59 +0100" -->
<!-- isosent="20100302112759" -->
<!-- name="Ramon" -->
<!-- email="ramif.47_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_accept() busy waiting?" -->
<!-- id="4B8CF63F.2030906_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_accept() busy waiting?<br>
<strong>From:</strong> Ramon (<em>ramif.47_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 06:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12197.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12195.php">Ralph Castain: "Re: [OMPI users] Leftover session directories [was sm btl choices]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12283.php">Ramon: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<li><strong>Reply:</strong> <a href="12283.php">Ramon: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've recently been trying to develop a client-server distributed file 
<br>
system (for my thesis) using the MPI.  The communication between the 
<br>
machines is working great, however when ever the MPI_Comm_accept() 
<br>
function is called, the server starts like consuming 100% of the CPU.
<br>
<p>One interesting thing is that I tried to compile the same code using the 
<br>
LAM/MPI library and the mentioned behaviour could not be observed.
<br>
<p>Is this a bug?
<br>
<p>On a side note, I'm using Ubuntu 9.10's default OpenMPI deb package.  
<br>
Its version is 1.3.2.
<br>
<p>Regards
<br>
<p>Ramon.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12197.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12195.php">Ralph Castain: "Re: [OMPI users] Leftover session directories [was sm btl choices]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12283.php">Ramon: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<li><strong>Reply:</strong> <a href="12283.php">Ramon: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
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
