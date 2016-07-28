<?
$subject_val = "Re: [OMPI devel] 1.7.4 fortran status?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 21:12:59 2014" -->
<!-- isoreceived="20140125021259" -->
<!-- sent="Sat, 25 Jan 2014 02:12:58 +0000" -->
<!-- isosent="20140125021258" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 fortran status?" -->
<!-- id="1490D4A0-101C-4DFB-9EE5-B71DC4BC1A75_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16D5UGYS_5oBSY9+abU-wH4=uuP5EqeuE_4KsKdiXs6rA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4 fortran status?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 21:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI devel] testing assignments/requests"</a>
<li><strong>Previous message:</strong> <a href="13916.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>In reply to:</strong> <a href="13916.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sweet.
<br>
<p>On Jan 24, 2014, at 7:09 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Jan 24, 2014 at 3:31 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 24, 2014 at 3:27 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I just committed a change on the trunk to configure that should disqualify the older pathscale and open64 compilers from compiling the mpi_f08 module (like we did in 1.7.3 and earlier).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, I will plan to test tonight's trunk tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, as my &quot;real job&quot; has me compiling gcc today, I have the free time to at least attempt to autogen from svn trunk.
</span><br>
<span class="quotelev1">&gt; So, results may come sooner.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; autogen + rsync worked fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can confirm trunk (r30421) is now correctly disqualifying f08 support in the PathScale and Open64 compilers.
</span><br>
<span class="quotelev1">&gt; Both produce the following output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports ISO_C_BINDING... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports SUBROUTINE BIND(C)... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports TYPE, BIND(C)... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports TYPE(type), BIND(C, NAME=&quot;name&quot;)... no
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still enough time to CMR before the 1.7.4 nightly tarball.
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
<li><strong>Next message:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI devel] testing assignments/requests"</a>
<li><strong>Previous message:</strong> <a href="13916.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>In reply to:</strong> <a href="13916.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
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
