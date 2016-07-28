<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 07:40:24 2014" -->
<!-- isoreceived="20140124124024" -->
<!-- sent="Fri, 24 Jan 2014 12:40:22 +0000" -->
<!-- isosent="20140124124022" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="9FC64146-4094-4CD3-8B37-5AFB876235BE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15jZX9+ndEL-h31PpgR7dAYp6b6ninb7PtOKyj4ruwGLw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-01-24 07:40:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem	oshmem/shmem/fortran oshmem/tools/oshmem_info"</a>
<li><strong>Previous message:</strong> <a href="13899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>In reply to:</strong> <a href="13864.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see.
<br>
<p>Yes, this is what we originally thought was a Pathscale bug, but it later turned out that Pathscale was correct and MPI-3.0 was wrong (which led to a major errata for the mpi_f08 stuff :-( ).
<br>
<p>Meaning: Fortran explicitly says that BIND(C) is not compatible with LOGICAL dummy params (which is why we took much BIND(C) usage out in an MPI-3 errata).  
<br>
<p>Hence, this configure test is not correct; the answer should *always* be &quot;no&quot; (even though most compilers allow it!).  Therefore, this litmus test is no good -- we need some another one.  Possibilities:
<br>
<p>1. Check for BIND(C) name support of &gt; 32 characters
<br>
2. Somehow check for the internal compiler errors
<br>
<p>#1 is a little tricky because of ABI issues, but is do-able (although I'm not happy about it...).
<br>
<p>#2 will truly suck; I don't know what causes the internal error.  By definition, it's a compiler bug, and I really don't want to have to test for compiler bugs in a configure test.  :-(
<br>
<p>It could be that #1 is sufficient.  I'm still waiting to hear back from Pathscale.
<br>
<p><p><p><p>On Jan 22, 2014, at 11:02 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The reason appears to be:
</span><br>
<span class="quotelev1">&gt;   checking if Fortran compiler supports BIND(C) with LOGICAL params... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The requested files are attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 22, 2014 at 7:46 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Can you send me the configure output and config.log from this build?  I'd like to see why it chose not to build the mpi_f08 module.
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
<span class="quotelev2">&gt; &gt; On Wed, Jan 22, 2014 at 6:31 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; But just to confirm: you said that your pathscale compilers *do* compile 1.7.3 -- including the mpi_f08 module -- with no problems?  That would be a little surprising, because those same &gt;=32 character symbol names are in 1.7.3...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not quite - I was a bit too quick in composing that email.
</span><br>
<span class="quotelev2">&gt; &gt; The mpi_f08 stuff is NOT getting built in 1.7.3 when using pathf95.
</span><br>
<span class="quotelev2">&gt; &gt; What I should have said is &quot;the fortran code and configure script in 1.7.3 work together to produce a failure-free build&quot;.
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
<span class="quotelev2">&gt; &gt;        Fort compiler abs: /project/projectdirs/ftg/ekopath-4.0.12.1/bin/pathf95
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; &lt;configure.stdout.bz2&gt;&lt;config.log.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem	oshmem/shmem/fortran oshmem/tools/oshmem_info"</a>
<li><strong>Previous message:</strong> <a href="13899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>In reply to:</strong> <a href="13864.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
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
