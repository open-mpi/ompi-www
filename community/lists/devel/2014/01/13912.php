<?
$subject_val = "Re: [OMPI devel] out-of-date or missing manpages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 18:25:16 2014" -->
<!-- isoreceived="20140124232516" -->
<!-- sent="Fri, 24 Jan 2014 23:25:14 +0000" -->
<!-- isosent="20140124232514" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] out-of-date or missing manpages" -->
<!-- id="401465E2-8F95-4347-8BB7-F2CE483769E9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16LRqv0JQpkt_wj3DisR3KQU3o36MMePy=PwP+kFmxJEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] out-of-date or missing manpages<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 18:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Previous message:</strong> <a href="13911.php">Paul Hargrove: "[OMPI devel] testing assignments/requests"</a>
<li><strong>In reply to:</strong> <a href="13893.php">Paul Hargrove: "[OMPI devel] out-of-date or missing manpages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed the F77 references (and other stuff) in the README and man pages.
<br>
<p>On Jan 23, 2014, at 7:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The man pages in trunk for the compiler wrappers still make reference to distinct FC and F77 (and FCFLAGS and FFLAGS), though configure no longer honors F77 or FFLAGS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ grep -e F77 -e FFLAGS INST/share/man/man1/*
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpiCC.1:the user in the CC, CXX, F77, and/or FC environment variables
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpiCC.1:F77
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpiCC.1:FFLAGS
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpic++.1:the user in the CC, CXX, F77, and/or FC environment variables
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpic++.1:F77
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpic++.1:FFLAGS
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpicc.1:the user in the CC, CXX, F77, and/or FC environment variables
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpicc.1:F77
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpicc.1:FFLAGS
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpicxx.1:the user in the CC, CXX, F77, and/or FC environment variables
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpicxx.1:F77
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpicxx.1:FFLAGS
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpifort.1:the user in the CC, CXX, F77, and/or FC environment variables
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpifort.1:F77
</span><br>
<span class="quotelev1">&gt; INST/share/man/man1/mpifort.1:FFLAGS
</span><br>
<span class="quotelev1">&gt; grep: INST/share/man/man1/orteCC.1: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note also the last line out output is due to an orteCC.1 which is a dangling symlink:
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 hargrove PARTS     9 Jan 23 21:53 orteCC.1 -&gt; ortec++.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no manpage for ortec++ (nor otrecc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However bin/ is populated correctly:
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 hargrove PARTS     12 Jan 23 21:53 orteCC -&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 hargrove PARTS     12 Jan 23 21:53 ortec++ -&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 hargrove PARTS     12 Jan 23 21:53 ortecc -&gt; opal_wrapper
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
<li><strong>Next message:</strong> <a href="13913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Previous message:</strong> <a href="13911.php">Paul Hargrove: "[OMPI devel] testing assignments/requests"</a>
<li><strong>In reply to:</strong> <a href="13893.php">Paul Hargrove: "[OMPI devel] out-of-date or missing manpages"</a>
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
