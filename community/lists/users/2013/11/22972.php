<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 13 15:05:27 2013" -->
<!-- isoreceived="20131113200527" -->
<!-- sent="Wed, 13 Nov 2013 20:05:25 +0000" -->
<!-- isosent="20131113200525" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing" -->
<!-- id="A846152B-8A85-41CF-9D9F-3E10970ECC3A_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="AE631149-E25A-4D58-8487-37F0DC8CD251_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-13 15:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22973.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22971.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22959.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22973.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22973.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2013, at 4:25 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; However, the key here is that MPI_STATUS_SIZE is set to be the size of a ***C*** MPI_Status (but expressed in units of Fortran INTEGER size -- so in the sizeof(int)==sizeof(INTEGER)==4 case, MPI_STATUS_SIZE is 6.  But in the sizeof(int)==4, sizeof(INTEGER)==8 case, MPI_STATUS_SIZE is 3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said, we *could* change this so that MPI_STATUS_SIZE is always 6, and have the C&lt;&#151;&gt;Fortran status routines just do the Right Thing depending on the size/type of ompi_fortran_integer_t.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed. We can have an Fortran MPI_Status (only in the Fortran interface) that will be 3 ompi_fortran_integer_t, and alter the translation macros to do the right thing (translate from C int to the chosen Fortran int).
</span><br>
<p><p>I'm not sure I understand what you're proposing: what you say sounds like what we do today:
<br>
<p>- in the sizeof(int)==sizeof(INTEGER)==4 case, everything is the same size, and nothing special needs to be done
<br>
<p>- in the sizeof(int)==4, sizeof(INTEGER)==8 case, the Fortran status size is 3, but the C&lt;-&gt;Fortran stuff still basically does a memcpy from the C MPI_Status to the Fortran array (meaning: the C int's are not upsized to be fortran INTEGERs).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22973.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22971.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22959.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22973.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22973.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
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
