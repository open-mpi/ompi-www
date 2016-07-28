<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 11 11:19:07 2013" -->
<!-- isoreceived="20131211161907" -->
<!-- sent="Wed, 11 Dec 2013 10:19:05 -0600" -->
<!-- isosent="20131211161905" -->
<!-- name="Jim Parker" -->
<!-- email="jimparker96313_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="CAEGKUyxhwbccokBE1ESne79bDnD2cY4mvXbKw9+FrQ+8_uJiVA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing<br>
<strong>From:</strong> Jim Parker (<em>jimparker96313_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-11 11:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23184.php">tom fogal: "[OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22945.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
&nbsp;&nbsp;Per George's recommendation, I found the following definition of
<br>
ompi_fortran_integer_t
<br>
<p>#define ompi_fortran_integer_t long long
<br>
<p>My application is working fine with the MPI_STATUS_IGNORE flag set
<br>
<p>Cheers,
<br>
--Jim
<br>
<p><p>On Tue, Nov 12, 2013 at 3:42 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 12, 2013, at 00:38 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. In the 64 bit case, you'll have a difficult time extracting the MPI
</span><br>
<span class="quotelev1">&gt; status values from the 8-byte INTEGERs in the status array in Fortran
</span><br>
<span class="quotelev1">&gt; (because the first 2 of 3 each really be 2 4-byte integers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding is that in Fortran explicitly types variables will retain
</span><br>
<span class="quotelev1">&gt; their expected size. Thus, instead of declaring
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
<span class="quotelev1">&gt; This should make it work right now. However, it is a non-standard
</span><br>
<span class="quotelev1">&gt; solution, and we should fix the status handling internally in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the code I think that correctly detecting the type of our
</span><br>
<span class="quotelev1">&gt; ompi_fortran_integer_t during configure (which should be a breeze if the
</span><br>
<span class="quotelev1">&gt; correct flags are passed) should solve all issues here as we are protecting
</span><br>
<span class="quotelev1">&gt; the status conversion between C and Fortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim, can you go in the include directory on your Open MPI installation and
</span><br>
<span class="quotelev1">&gt; grep for the definition of ompi_fortran_integer_t please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23184.php">tom fogal: "[OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22945.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
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
