<?
$subject_val = "[OMPI users] MPI_Brecv vs multiple MPI_Irecv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 16:18:26 2008" -->
<!-- isoreceived="20080826201826" -->
<!-- sent="Tue, 26 Aug 2008 16:17:03 -0400" -->
<!-- isosent="20080826201703" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Brecv vs multiple MPI_Irecv" -->
<!-- id="FD0205D7-41D0-48E6-80AC-465D33540324_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Brecv vs multiple MPI_Irecv<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-26 16:17:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6434.php">George Bosilca: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6432.php">Jeff Squyres: "Re: [OMPI users] Opal documentation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6434.php">George Bosilca: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6434.php">George Bosilca: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From a performance point of view, which one is better:
<br>
<p>MPI_Battach(10*sizeof(MSG))
<br>
MPI_Brecv()
<br>
<p>or
<br>
<p>MPI_recv_init()
<br>
MPI_recv_init()
<br>
MPI_recv_init()
<br>
... /* 10 recv handlers */
<br>
MPI_Start(all recv)
<br>
MPI_Waitany()
<br>
<p><p>I understand MPI_Brecv will require an extra message copy, from the  
<br>
attached buffer to the MPI_Brecv() buffer. I'd like to know if there  
<br>
other differences between the two methods.
<br>
<p>Thanks,
<br>
Rob
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6434.php">George Bosilca: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6432.php">Jeff Squyres: "Re: [OMPI users] Opal documentation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6434.php">George Bosilca: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6434.php">George Bosilca: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
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
