<?
$subject_val = "Re: [OMPI users] Bug in return status of MPI_WAIT()?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 09:39:56 2009" -->
<!-- isoreceived="20090512133956" -->
<!-- sent="Tue, 12 May 2009 09:39:50 -0400" -->
<!-- isosent="20090512133950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in return status of MPI_WAIT()?" -->
<!-- id="6F52E3A2-1174-4F7C-BDAC-3190D4DE3AFD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3A95E7AF-C91F-41D8-8238-1049DC3480BE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in return status of MPI_WAIT()?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 09:39:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9311.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<li><strong>Previous message:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<li><strong>In reply to:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9314.php">Katz, Jacob: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2009, at 9:37 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 2. The MPI_ERROR field in the status is specifically *not* set for  
</span><br>
<span class="quotelev1">&gt; MPI_TEST and MPI_WAIT.  It *is* set for the multi-test/wait  
</span><br>
<span class="quotelev1">&gt; functions (e.g., MPI_TESTANY, MPI_WAITALL).
</span><br>
<p>Oops!  Typo -- I should have said &quot;(e.g., MPI_TESTALL, MPI_WAITALL)&quot;.   
<br>
Just like MPI_TEST, the MPI_ERROR field is not set for MPI_TESTANY  
<br>
because it's a single-completion function.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9311.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<li><strong>Previous message:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<li><strong>In reply to:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9314.php">Katz, Jacob: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
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
