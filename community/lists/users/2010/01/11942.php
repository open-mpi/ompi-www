<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 11:29:26 2010" -->
<!-- isoreceived="20100129162926" -->
<!-- sent="Fri, 29 Jan 2010 08:31:10 -0800" -->
<!-- isosent="20100129163110" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="4B630D4E.2050903_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="751496.27932.qm_at_web63104.mail.re1.yahoo.com" -->
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
<strong>Date:</strong> 2010-01-29 11:31:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11943.php">Jed Brown: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11941.php">Richard Treumann: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11940.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11922.php">Natarajan CS: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim wrote:
<br>
<p><span class="quotelev1">&gt;By serialization, I mean in the context of data storage and transmission. See <a href="http://en.wikipedia.org/wiki/Serialization">http://en.wikipedia.org/wiki/Serialization</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;e.g. in a structure or class, if there is a pointer pointing to some memory outside the structure or class, one has to send the content of the memory besides the structure or class, right?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Okay, yes.  There are also MPI_Pack/MPI_Unpack functions that take 
<br>
general data types and pack them into contiguous (serialized) buffers.  
<br>
But you first have to describe to MPI what those data structures look 
<br>
like.  And it can certainly get complicated.
<br>
<p>I think I don't have much else to contribute here.  There are lots of 
<br>
options and decisions to make based on the particulars of your data 
<br>
structures.  The general problem can certainly be complicated, as you've 
<br>
already indicated.  Good luck.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11943.php">Jed Brown: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11941.php">Richard Treumann: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11940.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11922.php">Natarajan CS: "Re: [OMPI users] speed up this problem by MPI"</a>
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
