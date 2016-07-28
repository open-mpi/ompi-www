<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 07:41:49 2009" -->
<!-- isoreceived="20090723114149" -->
<!-- sent="Thu, 23 Jul 2009 07:41:43 -0400" -->
<!-- isosent="20090723114143" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released" -->
<!-- id="14A8A4F9-E7CF-4E75-AF7D-B07531B8C2F1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87hbx3smx0.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 07:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10054.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10049.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2009, at 6:39 AM, Dave Love wrote:
<br>
<p><span class="quotelev2">&gt; &gt; The MPI ABI has not changed since 1.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good, thanks.  I hadn't had time to investigate the items in the  
</span><br>
<span class="quotelev1">&gt; release
</span><br>
<span class="quotelev1">&gt; notes that looked suspicious.  Are there actually any known ABI
</span><br>
<span class="quotelev1">&gt; incompatibilities between 1.3.0 and 1.3.2?  We haven't noticed any as
</span><br>
<span class="quotelev1">&gt; far as I know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It *might* work?  To be honest, I would be surprised, though -- it may  
<br>
fail in subtle, non-obvious ways (i.e., during execution, not startup/ 
<br>
linking).  We made some changes in 1.3.2 in order to freeze the ABI  
<br>
for the future that *probably* have disruptive effects in seamlessly  
<br>
working with prior versions (there were some strange technical issues  
<br>
involving OMPI's use of pointers for MPI handles -- I can explain more  
<br>
if you care).
<br>
<p>FWIW: the changes we made were in the back-end/internals of libmpi;  
<br>
source-code compatibility has been maintained since MPI-1.0 (aside  
<br>
from a handful of bugs in the MPI API that we have fixed over time --  
<br>
e.g., a wrong parameter type in an MPI API function, etc.).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10054.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10049.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
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
