<?
$subject_val = "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 15:33:38 2009" -->
<!-- isoreceived="20091123203338" -->
<!-- sent="Mon, 23 Nov 2009 13:33:33 -0700 (MST)" -->
<!-- isosent="20091123203333" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend" -->
<!-- id="alpine.BSF.2.00.0911231328520.66127_at_hurl.aict.ualberta.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c4b5a27c0911231201j1e1a4a13tf6e5b7eb1d26f475_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend<br>
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 15:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="11258.php">Barrett, Brian W: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>In reply to:</strong> <a href="11257.php">Natarajan CS: "[OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 23 Nov 2009, Natarajan CS wrote:
<br>
<p>[...]
<br>
<span class="quotelev1">&gt; 1) When I use MPI_SHORT instead of short to count the number of data transferred I get an array that is half the size. (ie MPI_Isend(&amp;data2[0][0][0], (int) (sizeof(data2)/sizeof(MPI_SHORT)), MPI_SHORT, rank, 123,
</span><br>
<span class="quotelev1">&gt; cartcomm,&amp;request[rank-1]);
</span><br>
<p>MPI_SHORT and the other data types are actually macros that resolve to 
<br>
MPI_Datatype which is a pointer to a struct.
<br>
<p>[...]
<br>
<p><pre>
-- 
Edmund Sumbar
AICT Research Support Group
esumbar_at_[hidden]
780.492.9360
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="11258.php">Barrett, Brian W: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>In reply to:</strong> <a href="11257.php">Natarajan CS: "[OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
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
