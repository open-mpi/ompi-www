<?
$subject_val = "[OMPI devel] Wrong documentation for MPI_Comm_size manual page";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 04:41:21 2010" -->
<!-- isoreceived="20100602084121" -->
<!-- sent="Wed, 02 Jun 2010 09:41:14 +0100" -->
<!-- isosent="20100602084114" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="[OMPI devel] Wrong documentation for MPI_Comm_size manual page" -->
<!-- id="4C06192A.3000602_at_ntlworld.com" -->
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
<strong>Subject:</strong> [OMPI devel] Wrong documentation for MPI_Comm_size manual page<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 04:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8018.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8016.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8021.php">Jeff Squyres: "Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<li><strong>Reply:</strong> <a href="8021.php">Jeff Squyres: "Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm working on some intercommunicator stuff at the moment. According to 
<br>
MPI-2.2 standard:
<br>
&quot;An inter-communication is a point-to-point communication between 
<br>
processes in different groups&quot; [Section 6.6]
<br>
<p>yet the &quot;man&quot; page for MPI_Comm_size reads:
<br>
&quot;If the communicator  is  an  **intra-communicator**  (enables  
<br>
communication  between  two groups),  this  function returns the size of 
<br>
the local group&quot;
<br>
<p>Shouldn't that be **inter-communicator**?
<br>
<p>Thanks,
<br>
Simon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8018.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8016.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8021.php">Jeff Squyres: "Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<li><strong>Reply:</strong> <a href="8021.php">Jeff Squyres: "Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
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
