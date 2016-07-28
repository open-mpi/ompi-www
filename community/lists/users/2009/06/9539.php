<?
$subject_val = "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 07:31:24 2009" -->
<!-- isoreceived="20090604113124" -->
<!-- sent="Thu, 4 Jun 2009 07:31:18 -0400" -->
<!-- isosent="20090604113118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case" -->
<!-- id="39018181-663A-43F2-9EA7-FFFB75013406_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1166.7592.qm_at_web76214.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 07:31:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9540.php">Richard Treumann: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<li><strong>Previous message:</strong> <a href="9538.php">Eloi Gaudry: "[OMPI users] [1.2.x] --enable--mpi-threads"</a>
<li><strong>In reply to:</strong> <a href="9534.php">Tee Wen Kai: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9540.php">Richard Treumann: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<li><strong>Reply:</strong> <a href="9540.php">Richard Treumann: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2009, at 2:16 AM, Tee Wen Kai wrote:
<br>
<p><span class="quotelev1">&gt; Just to find out more about the consequences for exiting MPI  
</span><br>
<span class="quotelev1">&gt; processes without calling MPI_Finalize, will it cause memory leak or  
</span><br>
<span class="quotelev1">&gt; other fatal problem?
</span><br>
<p>If you're exiting the process, you won't cause any kind of problems --  
<br>
the OS will clean up everything.
<br>
<p>However, we might also have the orted clean up some things when MPI  
<br>
processes unexpectedly die (e.g., filesystem temporary files in / 
<br>
tmp).  So you might want to leave those around to clean themselves up  
<br>
and die naturally.
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
<li><strong>Next message:</strong> <a href="9540.php">Richard Treumann: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<li><strong>Previous message:</strong> <a href="9538.php">Eloi Gaudry: "[OMPI users] [1.2.x] --enable--mpi-threads"</a>
<li><strong>In reply to:</strong> <a href="9534.php">Tee Wen Kai: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9540.php">Richard Treumann: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<li><strong>Reply:</strong> <a href="9540.php">Richard Treumann: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
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
