<?
$subject_val = "Re: [OMPI users] Question about MPI_Waitany";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 13:54:25 2008" -->
<!-- isoreceived="20080130185425" -->
<!-- sent="Wed, 30 Jan 2008 19:54:18 +0100" -->
<!-- isosent="20080130185418" -->
<!-- name="Francisco Jes&#250;s Mart&#237;nez Serrano" -->
<!-- email="franjesus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about MPI_Waitany" -->
<!-- id="8e3e1e8e0801301054n1ab37d3j2b226b72d183782e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47A0C4E2.7070307_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about MPI_Waitany<br>
<strong>From:</strong> Francisco Jes&#250;s Mart&#237;nez Serrano (<em>franjesus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 13:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4929.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4927.php">Edgar Gabriel: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>In reply to:</strong> <a href="4927.php">Edgar Gabriel: "Re: [OMPI users] Question about MPI_Waitany"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I had already realized, sorry about the question.
<br>
<p>It seems however, that for some MPI implementations (LAM in
<br>
particular) a NULL pointer is assumed to be like a pointer to
<br>
MPI_REQUEST_NULL, and my program ran fine with them. I have corrected
<br>
my program and all works fine with Open MPI. Thanks!
<br>
<p>2008/1/30, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; I think you are mixing up two different things here: a NULL pointer is
</span><br>
<span class="quotelev1">&gt; invalid, and thus Open MPI has to raise an error. If a request is
</span><br>
<span class="quotelev1">&gt; MPI_REQUEST_NULL, that's perfectly legal according to the standard.
</span><br>
<span class="quotelev1">&gt; However MPI_REQUEST_NULL is not a NULL pointer, its a well defined value.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4929.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4927.php">Edgar Gabriel: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>In reply to:</strong> <a href="4927.php">Edgar Gabriel: "Re: [OMPI users] Question about MPI_Waitany"</a>
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
