<?
$subject_val = "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 17:46:22 2016" -->
<!-- isoreceived="20160415214622" -->
<!-- sent="Fri, 15 Apr 2016 21:46:19 +0000" -->
<!-- isosent="20160415214619" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()" -->
<!-- id="5325FC99-0A72-41A5-B853-B628E3E63F27_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="12D90B6B-3E17-4C24-A9B5-2FE87165106B_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-15 17:46:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18780.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18778.php">Larry Baker: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18778.php">Larry Baker: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18780.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18780.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All sounds like good reasons to amend the Bull test suite to no longer check for character and logical.  :-)
<br>
<p><p><span class="quotelev1">&gt; On Apr 15, 2016, at 5:38 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also remember reading in the past about problems with C sizeof and multibyte characters.  I just looked over the C90 standard.  In C90 code, the sizeof operator returns size_t in bytes.  Except that it always returns 1 for char, signed char, or unsigned char.  For an array, C90 says sizeof returns the number of bytes.  I interpret this to mean that when the execution character set is a 16-bit multibyte character set, sizeof a char is 1, while sizeof a char[1] is 2.  I've never actually tested this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any programs that marshall character strings for interchange have to be quite specific, I think, in the character set being exchanged.  I don't think MPI SIZEOF has a way to know or specify the semantics of the character set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 15 Apr 2016, at 2:23 PM, Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Be careful what you wish for.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I remember looking at this issue a while ago, but I can't remember why or how I ran into it.  I do remember convincing myself that the MPI standard was correct in restricting SIZEOF to numeric types.  For one thing, a character variable type is a string container in Fortran, while in C it is a single character.  What would be the correct interpretation for SIZEOF in Fortran?  The maximum length?  The TRIM'd length?  What would be the correct interpretation in C?  1?  strlen()?  strlen()+1?  The size of a character itself may not be the same on either end of an MPI connection if, for example, one program is compiled using 8-bit characters and the other is compiled using uses 16-bit characters.  Interchanging strings opens up a can of worms.  As far as logical, there is no C logical type.  In Fortran, while the size of a logical variable is specified as a &quot;storage unit&quot; (the same as an integer), the representation of true and false is unspecified, and, thus, is processor dependent.  On VAXes, only a single bit matters; the instruction set supports this logical data type.  (In C, thought there is no logical data type, the C standard does specify 0=false and 1=true for the result of relational and logical operators and 0=false and not 0=true for logical operator operands.)  This means it is problematic to exchange logical data between Fortran programs (C makes no sense, since there is no logical data type) when different compilers (part of what Fortran calls a processor) are used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Better to find out what discussions took place in the MPI standards committee before adding extensions to SIZEOF.  They may very well have good reasons to avoid character and logical data, as I concluded. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 15 Apr 2016, at 5:34 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nadia --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe that the character and logical types are not in this script already because the description of MPI_SIZEOF in MPI-3.1 says that the input choice buffer parameter is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IN x     a Fortran variable of numeric intrinsic type (choice)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I understand it (and my usual disclaimer here: I am *not* a Fortran expert), CHARACTER and LOGICAL types are not numeric in Fortran.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, we could add such interfaces as an extension.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just checked MPICH 3.2, and they *do* include MPI_SIZEOF interfaces for CHARACTER and LOGICAL, but they are missing many of the other MPI_SIZEOF interfaces that we have in OMPI.  Meaning: OMPI and MPICH already diverge wildly on MPI_SIZEOF.  :-\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess I don't have a strong opinion here.  If you file a PR for this patch, I won't object.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 15, 2016, at 3:22 AM, DERBEY, NADIA &lt;nadia.derbey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The following trivial example doesn't compile because of 2 missing types 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the MPI_SIZEOF subroutines (in mpi_sizeof.f90).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [derbeyn_at_btp0 test]$ cat mpi_sizeof.f90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          program main
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; !        use mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          include 'mpif.h'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          integer ierr, sz, mpisize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          real r1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          integer i1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          character ch1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          logical l1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          call MPI_INIT(ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          call MPI_SIZEOF(r1, sz, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          call MPI_SIZEOF(i1, sz, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          call MPI_SIZEOF(l1, sz, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          call MPI_SIZEOF(ch1, sz, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [derbeyn_at_btp0 test]$ mpif90 -o mpi_sizeof mpi_sizeof.f90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_sizeof.f90(14): error #6285: There is no matching specific 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subroutine for this generic subroutine call.   [MPI_SIZEOF]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          call MPI_SIZEOF(ch1, sz, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_sizeof.f90(15): error #6285: There is no matching specific
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subroutine for this generic subroutine call.   [MPI_SIZEOF]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          call MPI_SIZEOF(l1, sz, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compilation aborted for mpi_sizeof.f90 (code 1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This problem happens both on master and v2.x. The following patch seems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to solve the issue:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; diff --git a/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; b/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; index 5ea3dca3..a2a99924 100755
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- a/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ b/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -145,6 +145,9 @@ sub generate {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   # Main
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #############################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +queue_sub(&quot;character&quot;, &quot;char&quot;, &quot;character_kinds&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +queue_sub(&quot;logical&quot;, &quot;logical&quot;, &quot;logical_kinds&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   for my $size (qw/8 16 32 64/) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       queue_sub(&quot;integer(int${size})&quot;, &quot;int${size}&quot;, &quot;int${size}&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nadia
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nadia Derbey - B1-387
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPC R&amp;D - MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: +33 4 76 29 77 62
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nadia.derbey_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 Rue de Provence BP 208
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 38130 Echirolles Cedex, France
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.atos.com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18765.php">http://www.open-mpi.org/community/lists/devel/2016/04/18765.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18766.php">http://www.open-mpi.org/community/lists/devel/2016/04/18766.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="18780.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18778.php">Larry Baker: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18778.php">Larry Baker: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18780.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18780.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
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
