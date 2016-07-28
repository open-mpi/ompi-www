<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 12 16:25:04 2013" -->
<!-- isoreceived="20131112212504" -->
<!-- sent="Tue, 12 Nov 2013 22:25:01 +0100" -->
<!-- isosent="20131112212501" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="AE631149-E25A-4D58-8487-37F0DC8CD251_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7615FF91-E808-44C6-903C-2A109517DB16_at_cisco.com" -->
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
<strong>Date:</strong> 2013-11-12 16:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22960.php">Saliya Ekanayake: "[OMPI users] Equivalent to MPI.OBJECT in trunk"</a>
<li><strong>Previous message:</strong> <a href="22958.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22958.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22970.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22970.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2013, at 19:47 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 12, 2013, at 4:42 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. In the 64 bit case, you'll have a difficult time extracting the MPI status values from the 8-byte INTEGERs in the status array in Fortran (because the first 2 of 3 each really be 2 4-byte integers).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My understanding is that in Fortran explicitly types variables will retain their expected size. Thus, instead of declaring
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER :: status[MPI_STATUS_SIZE]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; one should go for
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER*4 :: status[MPI_STATUS_SIZE]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This should make it work right now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are correct.  That&#146;s a good workaround.
</span><br>
<p>Not good &#133; temporary ;)
<br>
<p><span class="quotelev2">&gt;&gt; However, it is a non-standard solution, and we should fix the status handling internally in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the code I think that correctly detecting the type of our ompi_fortran_integer_t during configure (which should be a breeze if the correct flags are passed) should solve all issues here as we are protecting the status conversion between C and Fortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not quite.  We do already correctly determine ompi_fortran_integer_t as a C &quot;int&quot; or &quot;long long&quot; (that's what I saw yesterday when I tested this myself).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the key here is that MPI_STATUS_SIZE is set to be the size of a ***C*** MPI_Status (but expressed in units of Fortran INTEGER size -- so in the sizeof(int)==sizeof(INTEGER)==4 case, MPI_STATUS_SIZE is 6.  But in the sizeof(int)==4, sizeof(INTEGER)==8 case, MPI_STATUS_SIZE is 3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, we *could* change this so that MPI_STATUS_SIZE is always 6, and have the C&lt;&#151;&gt;Fortran status routines just do the Right Thing depending on the size/type of ompi_fortran_integer_t.
</span><br>
<p>Indeed. We can have an Fortran MPI_Status (only in the Fortran interface) that will be 3 ompi_fortran_integer_t, and alter the translation macros to do the right thing (translate from C int to the chosen Fortran int).
<br>
<p><span class="quotelev1">&gt; Either way, as you say, it's a nonstandard solution.  So I don't know which way is &quot;more correct&quot;.  On the one hand, we've had it this way for *years* (so perhaps there's code out there that uses the George workaround and is working fine).  But OTOH, it&#146;s different than what you would have to do in the non-dash-i8 case, and so we should make MPI_STATUS_SIZE be 6 and then Fortran code will work identically (without INTEGER*4) regardless of whether you used -i8 or not.
</span><br>
<p>Honestly, I think that most users will expect that an MPI compiled with -i8 will have the status as a 3 8 bytes integers and not some other weird combination depending on another layer of the library (compiled in a language lacking the subtlety of -i8 ;)).
<br>
<p>&nbsp;&nbsp;George.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shrug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jim, can you go in the include directory on your Open MPI installation and grep for the definition of ompi_fortran_integer_t please.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="22960.php">Saliya Ekanayake: "[OMPI users] Equivalent to MPI.OBJECT in trunk"</a>
<li><strong>Previous message:</strong> <a href="22958.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22958.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22970.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22970.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
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
