<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 14:12:27 2015" -->
<!-- isoreceived="20150220191227" -->
<!-- sent="Fri, 20 Feb 2015 11:12:21 -0800" -->
<!-- isosent="20150220191221" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="6DD01DBC-D695-41FF-B9D7-ADD9AFA0DC7F_at_usgs.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54E715E7.5000207_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran issue<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 14:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17012.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17010.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<li><strong>In reply to:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17012.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17012.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20 Feb 2015, at 3:09 AM, Gilles Gouaillardet wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is correctly handled in ompi_testany_f :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* Increment index by one for fortran conventions.  Note that
</span><br>
<span class="quotelev1">&gt;            all Fortran compilers have FALSE==0; we just need to check
</span><br>
<span class="quotelev1">&gt;            for any nonzero value (because TRUE is not always 1) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<p><p>Beware, this has/may not always be the case.  This is due to C's historical confusion/misuse of integers as boolean data types.  On VAX hardware, the low bit was the only significant part of a Fortran LOGICAL data type, owing to the architectural support (Branch of Low Bit Set/Clear) for the low bit in a status word meaning success/failure.  I doubt anyone uses VAXes and MPI, so this is not likely to cause users problems.
<br>
<p>See <a href="http://h71000.www7.hp.com/doc/82final/6443/6443pro_026.html">http://h71000.www7.hp.com/doc/82final/6443/6443pro_026.html</a>:
<br>
<p><span class="quotelev1">&gt; 8.3 Logical Data Representations
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Logical data can be one, two, four, or eight bytes in length.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The default size used for a LOGICAL data declaration without a kind parameter (or size specifier) is LOGICAL (KIND=4) (same as LOGICAL*4), unless you do one of the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	&#149; Explicitly declare the length of a LOGICAL declaration by using a kind parameter, such as LOGICAL (KIND=4). HP Fortran provides intrinsic LOGICAL kinds of 1, 2, 4, and 8. Each LOGICAL kind number corresponds to number of bytes used by that intrinsic representation. 
</span><br>
<span class="quotelev1">&gt; You can also use a size specifier, such as LOGICAL*4, but be aware this is an extension to the Fortran 90 standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	&#149; Use the FORTRAN command /INTEGER_SIZE=nn qualifier to control the size of default (without a kind parameter or size specifier) LOGICAL and INTEGER declarations (see Section 2.3.26).
</span><br>
<span class="quotelev1">&gt; To improve performance, avoid using 2-byte or 1-byte logical declarations (see Chapter 5).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intrinsic LOGICAL*1 or LOGICAL (KIND=1) values are stored in a single byte.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Logical (intrinsic) values can also be stored in the following sizes of contiguous bytes starting on an arbitrary byte boundary:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	&#149; Two bytes (LOGICAL (KIND=2) or LOGICAL*2)
</span><br>
<span class="quotelev1">&gt; 	&#149; Four bytes (LOGICAL (KIND=4) or LOGICAL*4)
</span><br>
<span class="quotelev1">&gt; 	&#149; Eight bytes (LOGICAL (KIND=8) or LOGICAL*8)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The low-order bit determines whether the logical value is true or false. Logical variables can also be interpreted as integer data (an extension to the Fortran 90 standard). For example, in addition to having logical values .TRUE. and .FALSE., LOGICAL*1 data can also have values in the range --128 to 127.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LOGICAL*1, LOGICAL*2, LOGICAL*4, and LOGICAL*8 data representations appear in Figure 8-5.
</span><br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17012.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17010.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<li><strong>In reply to:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17012.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17012.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
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
