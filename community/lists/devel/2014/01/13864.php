<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 23:02:07 2014" -->
<!-- isoreceived="20140123040207" -->
<!-- sent="Wed, 22 Jan 2014 20:02:02 -0800" -->
<!-- isosent="20140123040202" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="CAAvDA15jZX9+ndEL-h31PpgR7dAYp6b6ninb7PtOKyj4ruwGLw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0609905E-7A7C-472E-AD62-073F27F1848C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 23:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13865.php">Irvanda Kurniadi: "[OMPI devel] Unknown object files in libmpi.a"</a>
<li><strong>Previous message:</strong> <a href="13863.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>In reply to:</strong> <a href="13862.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13900.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13900.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The reason appears to be:
<br>
&nbsp;&nbsp;checking if Fortran compiler supports BIND(C) with LOGICAL params... no
<br>
<p>The requested files are attached.
<br>
<p>-Paul
<br>
<p><p>On Wed, Jan 22, 2014 at 7:46 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Can you send me the configure output and config.log from this build?  I'd
</span><br>
<span class="quotelev1">&gt; like to see why it chose not to build the mpi_f08 module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2014, at 10:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 22, 2014 at 6:31 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; But just to confirm: you said that your pathscale compilers *do* compile
</span><br>
<span class="quotelev1">&gt; 1.7.3 -- including the mpi_f08 module -- with no problems?  That would be a
</span><br>
<span class="quotelev1">&gt; little surprising, because those same &gt;=32 character symbol names are in
</span><br>
<span class="quotelev1">&gt; 1.7.3...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not quite - I was a bit too quick in composing that email.
</span><br>
<span class="quotelev2">&gt; &gt; The mpi_f08 stuff is NOT getting built in 1.7.3 when using pathf95.
</span><br>
<span class="quotelev2">&gt; &gt; What I should have said is &quot;the fortran code and configure script in
</span><br>
<span class="quotelev1">&gt; 1.7.3 work together to produce a failure-free build&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ bin/ompi_info | grep -e Ident -e Fort
</span><br>
<span class="quotelev2">&gt; &gt;             Ident string: 1.7.3
</span><br>
<span class="quotelev2">&gt; &gt;              Fort mpif.h: yes (all)
</span><br>
<span class="quotelev2">&gt; &gt;             Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev2">&gt; &gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev2">&gt; &gt;         Fort use mpi_f08: no
</span><br>
<span class="quotelev2">&gt; &gt;  Fort mpi_f08 compliance: The mpi_f08 module was not built
</span><br>
<span class="quotelev2">&gt; &gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev2">&gt; &gt;            Fort compiler: pathf95
</span><br>
<span class="quotelev2">&gt; &gt;        Fort compiler abs:
</span><br>
<span class="quotelev1">&gt; /project/projectdirs/ftg/ekopath-4.0.12.1/bin/pathf95
</span><br>
<span class="quotelev2">&gt; &gt;          Fort ignore TKR: yes (!DIR$ IGNORE_TKR)
</span><br>
<span class="quotelev2">&gt; &gt;    Fort 08 assumed shape: no
</span><br>
<span class="quotelev2">&gt; &gt;       Fort optional args: no
</span><br>
<span class="quotelev2">&gt; &gt;             Fort BIND(C): yes
</span><br>
<span class="quotelev2">&gt; &gt;             Fort PRIVATE: no
</span><br>
<span class="quotelev2">&gt; &gt;            Fort ABSTRACT: no
</span><br>
<span class="quotelev2">&gt; &gt;        Fort ASYNCHRONOUS: no
</span><br>
<span class="quotelev2">&gt; &gt;           Fort PROCEDURE: no
</span><br>
<span class="quotelev2">&gt; &gt;  Fort f08 using wrappers: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13864/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13864/configure.stdout.bz2">configure.stdout.bz2</a>
</ul>
<!-- attachment="configure.stdout.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13864/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13865.php">Irvanda Kurniadi: "[OMPI devel] Unknown object files in libmpi.a"</a>
<li><strong>Previous message:</strong> <a href="13863.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>In reply to:</strong> <a href="13862.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13900.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13900.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
