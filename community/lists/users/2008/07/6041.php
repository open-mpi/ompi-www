<?
$subject_val = "[OMPI users] Number of file handles limiting the number off processes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 08:04:24 2008" -->
<!-- isoreceived="20080710120424" -->
<!-- sent="Thu, 10 Jul 2008 14:04:12 +0200" -->
<!-- isosent="20080710120412" -->
<!-- name="Samuel Sarholz" -->
<!-- email="sarholz_at_[hidden]" -->
<!-- subject="[OMPI users] Number of file handles limiting the number off processes?" -->
<!-- id="4875FABC.1020500_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Number of file handles limiting the number off processes?<br>
<strong>From:</strong> Samuel Sarholz (<em>sarholz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 08:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6042.php">Ralph Castain: "Re: [OMPI users] Number of file handles limiting the number off processes?"</a>
<li><strong>Previous message:</strong> <a href="6040.php">lammpi_at_[hidden]: "[OMPI users] Open Mpi on LFS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6042.php">Ralph Castain: "Re: [OMPI users] Number of file handles limiting the number off processes?"</a>
<li><strong>Reply:</strong> <a href="6042.php">Ralph Castain: "Re: [OMPI users] Number of file handles limiting the number off processes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>mpiexec seems to need a file handle per started process.
<br>
By default the number of file handles is set to 1024 here, thus I can 
<br>
start about 900 something processes.
<br>
<p>With higher numbers I get
<br>
mca_oob_tcp_accept: accept() failed: Too many open files (24).
<br>
<p>If I decrease the file handles on the shell I run mpiexec from, I get 
<br>
the error with less processes. However no MPI process is started on the 
<br>
local machine.
<br>
<p><p>The first thing I am wondering about is the TCP because Infiniband is 
<br>
used for communication.
<br>
And secondly what are the files/connections used for?
<br>
<p>Do I really have to set the file handles to 5000 (and to 32000 in a few 
<br>
years) for large MPI programs or is there a workaround?
<br>
<p><p>Another thing that I don't get is that the problem only arises if I 
<br>
start an MPI program.
<br>
mpiexec -np 2000 hostname
<br>
works fine.
<br>
<p><p>best regards,
<br>
Samuel
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6041/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6042.php">Ralph Castain: "Re: [OMPI users] Number of file handles limiting the number off processes?"</a>
<li><strong>Previous message:</strong> <a href="6040.php">lammpi_at_[hidden]: "[OMPI users] Open Mpi on LFS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6042.php">Ralph Castain: "Re: [OMPI users] Number of file handles limiting the number off processes?"</a>
<li><strong>Reply:</strong> <a href="6042.php">Ralph Castain: "Re: [OMPI users] Number of file handles limiting the number off processes?"</a>
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
