<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 13 16:41:07 2013" -->
<!-- isoreceived="20131113214107" -->
<!-- sent="Wed, 13 Nov 2013 22:41:03 +0100" -->
<!-- isosent="20131113214103" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="CFCBBF45-1200-4766-AA01-5BAD9FD0E611_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="A846152B-8A85-41CF-9D9F-3E10970ECC3A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-13 16:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22974.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI @SC next week"</a>
<li><strong>Previous message:</strong> <a href="22972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22976.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22976.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 13, 2013, at 21:05 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 12, 2013, at 4:25 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the key here is that MPI_STATUS_SIZE is set to be the size of a ***C*** MPI_Status (but expressed in units of Fortran INTEGER size -- so in the sizeof(int)==sizeof(INTEGER)==4 case, MPI_STATUS_SIZE is 6.  But in the sizeof(int)==4, sizeof(INTEGER)==8 case, MPI_STATUS_SIZE is 3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said, we *could* change this so that MPI_STATUS_SIZE is always 6, and have the C&lt;&#151;&gt;Fortran status routines just do the Right Thing depending on the size/type of ompi_fortran_integer_t.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Indeed. We can have an Fortran MPI_Status (only in the Fortran interface) that will be 3 ompi_fortran_integer_t, and alter the translation macros to do the right thing (translate from C int to the chosen Fortran int).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand what you're proposing: what you say sounds like what we do today:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - in the sizeof(int)==sizeof(INTEGER)==4 case, everything is the same size, and nothing special needs to be done
</span><br>
<p>Yes for this part.
<br>
<p><span class="quotelev1">&gt; - in the sizeof(int)==4, sizeof(INTEGER)==8 case, the Fortran status size is 3, but the C&lt;-&gt;Fortran stuff still basically does a memcpy from the C MPI_Status to the Fortran array (meaning: the C int&#146;s are not upsized to be fortran INTEGERs).
</span><br>
<p>No. The Fortran status must __always__ be 6, because we need enough room to correctly convert the 3 useful variables to Fortran, plus copy the rest of the hidden things.These 6 type will be INTEGER (which will then be different than the C int). The C&lt;-&gt;F stuff will do not a memcpy but copy all elements while casting to the correct Fortran type (ompi_fortran_integer_t).
<br>
<p>The fact that we are talking about 3 integers in the Fortran status might explain the segfault. This number should never be 3 it should be ALWAYS 6 or the function MPI_Status_c2f will clearly overwrite the memory.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22974.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI @SC next week"</a>
<li><strong>Previous message:</strong> <a href="22972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22976.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22976.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
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
