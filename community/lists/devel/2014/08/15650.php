<?
$subject_val = "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 10:00:02 2014" -->
<!-- isoreceived="20140814140002" -->
<!-- sent="Thu, 14 Aug 2014 14:00:01 +0000" -->
<!-- isosent="20140814140001" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers" -->
<!-- id="591F712F-D163-4B4B-8D23-5DCB3457D1C2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14LUxtVBWnCnTATdawLTjUfL4nh_JoPOCF4HY6=4A_GEQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 10:00:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="15649.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="15643.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15653.php">Joshua Ladd: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Reply:</strong> <a href="15653.php">Joshua Ladd: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good points.
<br>
<p>Mellanox -- can you update per Paul's suggestions?
<br>
<p><p>On Aug 13, 2014, at 8:26 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The following is NOT a bug report.
</span><br>
<span class="quotelev1">&gt; This is just an observation that may deserve some text in the README.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've reported issues in the past with some Fortran compilers (mostly older XLC and PGI) which either cannot build the &quot;use mpi_f08&quot; module, or cannot correctly link to it (and sometimes this fails only if configured with --enable-debug).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Testing the OSHMEM Fortran bindings (enabled by default on Linux) I have found several compilers which fail to link the examples (hello_oshmemfh and ring_oshmemfh).  I reported one specific instance (with xlc-11/xlf-13) back in February: <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14057.php">http://www.open-mpi.org/community/lists/devel/2014/02/14057.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So far I have these failures only on platforms where the Fortran compiler is *known* to be broken for the MPI f90 and/or f08 bindings.  Specifically, all the failing platforms are ones on which either:
</span><br>
<span class="quotelev1">&gt; + Configure determines (without my help) that FC cannot build the F90 and/or F08 modules.
</span><br>
<span class="quotelev1">&gt; OR
</span><br>
<span class="quotelev1">&gt; + I must pass --enable-mpi-fortran=usempi or --enable-mpi-fortran=mpifh for cases configure cannot detect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I do *not* believe there is anything wrong with the OSHMEM code, which is why I started this post with &quot;The following is NOT a bug report&quot;.  However, I have two recommendations to make:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Documentation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The README says just:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --disable-oshmem-fortran
</span><br>
<span class="quotelev1">&gt;   Disable building only the Fortran OSHMEM bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I recommend adding a sentence there referencing the &quot;Compiler Notes&quot; section of the README which has details on some known bad Fortran compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) Configure: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I noted above, at least some of the failures are on platforms where configure has determined it cannot build the f08 MPI bindings.  So, maybe there is something that could be done at configure time to disqualify some Fortran compilers from building the OSHMEM fotran bindings, too.
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15643.php">http://www.open-mpi.org/community/lists/devel/2014/08/15643.php</a>
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
<li><strong>Next message:</strong> <a href="15651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="15649.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="15643.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15653.php">Joshua Ladd: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Reply:</strong> <a href="15653.php">Joshua Ladd: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
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
