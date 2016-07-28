<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 11:04:31 2010" -->
<!-- isoreceived="20100129160431" -->
<!-- sent="Fri, 29 Jan 2010 08:06:14 -0800" -->
<!-- isosent="20100129160614" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="4B630776.3060200_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="320114.16743.qm_at_web63108.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] speed up this problem by MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 11:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11940.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11938.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11938.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11940.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11940.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim wrote:
<br>
<p><span class="quotelev1">&gt;Sorry, my typo. I meant to say OpenMPI documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Okay.  &quot;Open (space) MPI&quot; is simply an implementation of the MPI 
<br>
standard -- e.g., <a href="http://www.mpi-forum.org/docs/mpi21-report.pdf">http://www.mpi-forum.org/docs/mpi21-report.pdf</a> .  I 
<br>
imagine an on-line search will turn up a variety of tutorials and 
<br>
explanations of that standard.  But the standard, itself, is somewhat 
<br>
readable.
<br>
<p><span class="quotelev1">&gt;How to send/recieve and broadcast objects of self-defined class and of std::vector? If using MPI_Type_struct, the setup becomes complicated if the class has various types of data members, and a data member of another class.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I don't really know any C++, but I guess you're looking at it the right 
<br>
way.  That is, use derived MPI data types and &quot;it's complicated&quot;.
<br>
<p><span class="quotelev1">&gt;How to deal with serialization problems?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Which serialization problems?  You seem to have a split/join problem.  
<br>
The master starts, at some point there is parallel computation, then the 
<br>
masters does more work at the end.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11940.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11938.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11938.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11940.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11940.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
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
