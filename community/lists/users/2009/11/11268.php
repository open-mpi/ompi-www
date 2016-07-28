<?
$subject_val = "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 11:46:21 2009" -->
<!-- isoreceived="20091124164621" -->
<!-- sent="Tue, 24 Nov 2009 11:46:15 -0500" -->
<!-- isosent="20091124164615" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend" -->
<!-- id="DFF8EE07-439C-4416-AD77-AEF3F1A6288E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c4b5a27c0911231349i5bef916fr65ef4f2a50da21b_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 11:46:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11269.php">Jeff Squyres: "Re: [OMPI users] Open MPI Query"</a>
<li><strong>Previous message:</strong> <a href="11267.php">George Bosilca: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11275.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="11275.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 23, 2009, at 4:49 PM, Natarajan CS wrote:
<br>
<p><span class="quotelev1">&gt; Oh okay that explains the behaviour of MPI_SHORT, guess sizeof is  
</span><br>
<span class="quotelev1">&gt; going to give me the same value no matter what MPI_Datatype I use?  
</span><br>
<span class="quotelev1">&gt; Thanks for the quick response!
</span><br>
<p>Correct.  MPI_&lt;datatype_name&gt; is just a handle to an internal MPI data  
<br>
structure.  Its size (as reported by sizeof()) is unrelated to the  
<br>
actual datatype size.
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
<li><strong>Next message:</strong> <a href="11269.php">Jeff Squyres: "Re: [OMPI users] Open MPI Query"</a>
<li><strong>Previous message:</strong> <a href="11267.php">George Bosilca: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11275.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="11275.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
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
