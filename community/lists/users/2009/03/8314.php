<?
$subject_val = "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 10:25:38 2009" -->
<!-- isoreceived="20090305152538" -->
<!-- sent="Thu, 5 Mar 2009 10:25:30 -0500" -->
<!-- isosent="20090305152530" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application heavily using MPI_Barrier?" -->
<!-- id="D30873DF-DD8F-43CB-BEEF-9187CFC3CACB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84F70A10-3B7E-41CE-B917-A7954837E1A8_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific application heavily using MPI_Barrier?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 10:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8315.php">Ganesh: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8313.php">Shanyuan Gao: "[OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8313.php">Shanyuan Gao: "[OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8315.php">Ganesh: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8315.php">Ganesh: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8316.php">Gerry Creager: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8321.php">Durga Choudhury: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8350.php">Ashley Pittman: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2009, at 9:29 AM, Shanyuan Gao wrote:
<br>
<p><span class="quotelev1">&gt; I am doing some research on MPI barrier operations.  And I am ready
</span><br>
<span class="quotelev1">&gt; to do some performance test.
</span><br>
<span class="quotelev1">&gt; I wonder if there are any applications that using barriers a lot.
</span><br>
<span class="quotelev1">&gt; Please let me know if there
</span><br>
<span class="quotelev1">&gt; is any.  Any comments are welcomed.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I don't remember who originally said it, but I've repeated the  
<br>
statement: any MPI program that relies on a barrier for correctness is  
<br>
an incorrect MPI application.
<br>
<p>There's anecdotal evidence that throwing in a barrier every once in a  
<br>
while can help reduce unexpected messages (and other things), and  
<br>
therefore improve performance a bit.  But that's very application  
<br>
dependent, and usually not frequent.
<br>
<p>Why do you want to do a barrier?  Particularly one that sounds like it  
<br>
might be in your critical performance path?
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
<li><strong>Next message:</strong> <a href="8315.php">Ganesh: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8313.php">Shanyuan Gao: "[OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8313.php">Shanyuan Gao: "[OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8315.php">Ganesh: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8315.php">Ganesh: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8316.php">Gerry Creager: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8321.php">Durga Choudhury: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8350.php">Ashley Pittman: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
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
