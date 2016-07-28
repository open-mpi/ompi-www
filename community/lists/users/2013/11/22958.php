<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 12 13:47:57 2013" -->
<!-- isoreceived="20131112184757" -->
<!-- sent="Tue, 12 Nov 2013 18:47:55 +0000" -->
<!-- isosent="20131112184755" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing" -->
<!-- id="7615FF91-E808-44C6-903C-2A109517DB16_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="798D3376-0A3A-44A6-AAA1-ED71F94F0352_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-11-12 13:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22959.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22957.php">Alex A. Granovsky: "Re: [OMPI users] Segmentation fault in MPI_Init when passingpointers allocated in main()"</a>
<li><strong>In reply to:</strong> <a href="22945.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22959.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22959.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2013, at 4:42 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 2. In the 64 bit case, you'll have a difficult time extracting the MPI status values from the 8-byte INTEGERs in the status array in Fortran (because the first 2 of 3 each really be 2 4-byte integers).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My understanding is that in Fortran explicitly types variables will retain their expected size. Thus, instead of declaring
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; INTEGER :: status[MPI_STATUS_SIZE]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; one should go for
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; INTEGER*4 :: status[MPI_STATUS_SIZE]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This should make it work right now.
</span><br>
<p>You are correct.  That's a good workaround.
<br>
<p><span class="quotelev1">&gt; However, it is a non-standard solution, and we should fix the status handling internally in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the code I think that correctly detecting the type of our ompi_fortran_integer_t during configure (which should be a breeze if the correct flags are passed) should solve all issues here as we are protecting the status conversion between C and Fortran.
</span><br>
<p>Not quite.  We do already correctly determine ompi_fortran_integer_t as a C &quot;int&quot; or &quot;long long&quot; (that's what I saw yesterday when I tested this myself).
<br>
<p>However, the key here is that MPI_STATUS_SIZE is set to be the size of a ***C*** MPI_Status (but expressed in units of Fortran INTEGER size -- so in the sizeof(int)==sizeof(INTEGER)==4 case, MPI_STATUS_SIZE is 6.  But in the sizeof(int)==4, sizeof(INTEGER)==8 case, MPI_STATUS_SIZE is 3.
<br>
<p>That being said, we *could* change this so that MPI_STATUS_SIZE is always 6, and have the C&lt;--&gt;Fortran status routines just do the Right Thing depending on the size/type of ompi_fortran_integer_t.
<br>
<p>Either way, as you say, it's a nonstandard solution.  So I don't know which way is &quot;more correct&quot;.  On the one hand, we've had it this way for *years* (so perhaps there's code out there that uses the George workaround and is working fine).  But OTOH, it's different than what you would have to do in the non-dash-i8 case, and so we should make MPI_STATUS_SIZE be 6 and then Fortran code will work identically (without INTEGER*4) regardless of whether you used -i8 or not.
<br>
<p>Shrug.
<br>
<p><span class="quotelev1">&gt; Jim, can you go in the include directory on your Open MPI installation and grep for the definition of ompi_fortran_integer_t please.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22959.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22957.php">Alex A. Granovsky: "Re: [OMPI users] Segmentation fault in MPI_Init when passingpointers allocated in main()"</a>
<li><strong>In reply to:</strong> <a href="22945.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22959.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22959.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
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
