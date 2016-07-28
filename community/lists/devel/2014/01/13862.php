<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 22:46:27 2014" -->
<!-- isoreceived="20140123034627" -->
<!-- sent="Thu, 23 Jan 2014 03:46:26 +0000" -->
<!-- isosent="20140123034626" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="0609905E-7A7C-472E-AD62-073F27F1848C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17ktiKXqRumJPvPMw8D7Xit5SMVcmpd=jiLOAiuv9zy_Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 22:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13863.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Previous message:</strong> <a href="13861.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>In reply to:</strong> <a href="13859.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13864.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13864.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send me the configure output and config.log from this build?  I'd like to see why it chose not to build the mpi_f08 module.
<br>
<p><p>On Jan 22, 2014, at 10:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 22, 2014 at 6:31 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; But just to confirm: you said that your pathscale compilers *do* compile 1.7.3 -- including the mpi_f08 module -- with no problems?  That would be a little surprising, because those same &gt;=32 character symbol names are in 1.7.3...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not quite - I was a bit too quick in composing that email.
</span><br>
<span class="quotelev1">&gt; The mpi_f08 stuff is NOT getting built in 1.7.3 when using pathf95.
</span><br>
<span class="quotelev1">&gt; What I should have said is &quot;the fortran code and configure script in 1.7.3 work together to produce a failure-free build&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ bin/ompi_info | grep -e Ident -e Fort
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.7.3
</span><br>
<span class="quotelev1">&gt;              Fort mpif.h: yes (all)
</span><br>
<span class="quotelev1">&gt;             Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev1">&gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev1">&gt;         Fort use mpi_f08: no
</span><br>
<span class="quotelev1">&gt;  Fort mpi_f08 compliance: The mpi_f08 module was not built
</span><br>
<span class="quotelev1">&gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;            Fort compiler: pathf95
</span><br>
<span class="quotelev1">&gt;        Fort compiler abs: /project/projectdirs/ftg/ekopath-4.0.12.1/bin/pathf95
</span><br>
<span class="quotelev1">&gt;          Fort ignore TKR: yes (!DIR$ IGNORE_TKR)
</span><br>
<span class="quotelev1">&gt;    Fort 08 assumed shape: no
</span><br>
<span class="quotelev1">&gt;       Fort optional args: no
</span><br>
<span class="quotelev1">&gt;             Fort BIND(C): yes
</span><br>
<span class="quotelev1">&gt;             Fort PRIVATE: no
</span><br>
<span class="quotelev1">&gt;            Fort ABSTRACT: no
</span><br>
<span class="quotelev1">&gt;        Fort ASYNCHRONOUS: no
</span><br>
<span class="quotelev1">&gt;           Fort PROCEDURE: no
</span><br>
<span class="quotelev1">&gt;  Fort f08 using wrappers: yes
</span><br>
<span class="quotelev1">&gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev1">&gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13863.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Previous message:</strong> <a href="13861.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>In reply to:</strong> <a href="13859.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13864.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13864.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
