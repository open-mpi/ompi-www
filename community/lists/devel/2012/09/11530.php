<?
$subject_val = "Re: [OMPI devel] making Fortran MPI_Status components public";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 01:30:28 2012" -->
<!-- isoreceived="20120927053028" -->
<!-- sent="Wed, 26 Sep 2012 22:30:20 -0700" -->
<!-- isosent="20120927053020" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] making Fortran MPI_Status components public" -->
<!-- id="CAAvDA17GDXwDnsKyHs=p0dgEG3PCRKQo07-8xuEmrmFeu483SQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2D2B16BA-942E-426B-A328-9E8AE79152D6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] making Fortran MPI_Status components public<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 01:30:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11531.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11529.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11529.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11531.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11531.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unless I am missing something here the desired incantation is either
<br>
&quot;PUBLIC&quot; to make an entire module's contents accessible, or &quot;PUBLIC ::
<br>
[component]&quot; for individual control.
<br>
<p>PUBLIC should be a standard part of F95 (no configure probe required).
<br>
However, the presence of &quot;OMPI_PRIVATE&quot; suggests you already have a
<br>
configure probe for the &quot;PRIVATE&quot; keyword.
<br>
<p>-Paul
<br>
<p>On Wed, Sep 26, 2012 at 10:14 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Craig: Can you reply to Eugene's question?  I *assume* the answer is &quot;no&quot;,
</span><br>
<span class="quotelev1">&gt; since we don't need it for any other compilers.  Is there an optional
</span><br>
<span class="quotelev1">&gt; &quot;public&quot; directive that we can use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene: can you see if your compiler supports an optional &quot;public&quot; kind of
</span><br>
<span class="quotelev1">&gt; directive?  We could discover this directive during configure, and then
</span><br>
<span class="quotelev1">&gt; only use it when using your compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 26, 2012, at 9:49 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The ibm tests aren't building for me.  One of the issues is
</span><br>
<span class="quotelev1">&gt; mprobe_usempif08.f90 trying to access status%MPI_SOURCE and status%MPI_TAG.
</span><br>
<span class="quotelev1">&gt;  I assume this is supposed to work, but it doesn't.  E.g., trunk with
</span><br>
<span class="quotelev1">&gt; Oracle Studio compilers:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; % cat a.f90
</span><br>
<span class="quotelev2">&gt; &gt;  use mpi_f08
</span><br>
<span class="quotelev2">&gt; &gt;  type(MPI_Status) status
</span><br>
<span class="quotelev2">&gt; &gt;  write(6,*) status%MPI_SOURCE
</span><br>
<span class="quotelev2">&gt; &gt;  write(6,*) status%MPI_TAG
</span><br>
<span class="quotelev2">&gt; &gt;  end
</span><br>
<span class="quotelev2">&gt; &gt; % mpifort -m64 -c a.f90
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  write(6,*) status%MPI_SOURCE
</span><br>
<span class="quotelev2">&gt; &gt;                    ^
</span><br>
<span class="quotelev2">&gt; &gt; &quot;a.f90&quot;, Line = 3, Column = 21: ERROR: &quot;MPI_SOURCE&quot; is a private
</span><br>
<span class="quotelev1">&gt; component of &quot;MPI_STATUS&quot; and cannot be used outside of the module.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  write(6,*) status%MPI_TAG
</span><br>
<span class="quotelev2">&gt; &gt;                    ^
</span><br>
<span class="quotelev2">&gt; &gt; &quot;a.f90&quot;, Line = 4, Column = 21: ERROR: &quot;MPI_TAG&quot; is a private component
</span><br>
<span class="quotelev1">&gt; of &quot;MPI_STATUS&quot; and cannot be used outside of the module.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I look in ompi/mpi/fortran/[base|use-mpi-f08-desc]/mpi-f08-types.f90,
</span><br>
<span class="quotelev1">&gt; I see:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   type, BIND(C) :: MPI_Status
</span><br>
<span class="quotelev2">&gt; &gt;      integer :: MPI_SOURCE
</span><br>
<span class="quotelev2">&gt; &gt;      integer :: MPI_TAG
</span><br>
<span class="quotelev2">&gt; &gt;      integer :: MPI_ERROR
</span><br>
<span class="quotelev2">&gt; &gt;      integer(C_INT)    OMPI_PRIVATE :: c_cancelled
</span><br>
<span class="quotelev2">&gt; &gt;      integer(C_SIZE_T) OMPI_PRIVATE :: c_count
</span><br>
<span class="quotelev2">&gt; &gt;   end type MPI_Status
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Should the first three components explicitly be made public?
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11530/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11531.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11529.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11529.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11531.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11531.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
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
