<?
$subject_val = "Re: [OMPI devel] Trunk build failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 10:33:33 2013" -->
<!-- isoreceived="20130819143333" -->
<!-- sent="Mon, 19 Aug 2013 14:33:31 +0000" -->
<!-- isosent="20130819143331" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk build failures" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F80856D_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DEEFB4A2-3886-469D-A1BC-C57C8E1F3FB4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk build failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 10:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12735.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<li><strong>Previous message:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI devel] Trunk build failures"</a>
<li><strong>In reply to:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI devel] Trunk build failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make it so.
<br>

<br>
:p
<br>

<br>

<br>
On Aug 19, 2013, at 10:13 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; yeah, i'm trying to fix it - could use your help when you quit your manager impersonation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 19, 2013, at 7:04 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Did something happen to break the trunk recently?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; [7:03] savbu-usnic-a:~/s/o/o/t/ompi_info &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; make
</span><br>
<span class="quotelev2">&gt;&gt; CC       ompi_info.o
</span><br>
<span class="quotelev2">&gt;&gt; CC       param.o
</span><br>
<span class="quotelev2">&gt;&gt; CC       components.o
</span><br>
<span class="quotelev2">&gt;&gt; CC       version.o
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `mpit_unlock'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `mpit_init_count'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `mpit_lock'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ompit_var_type_to_datatype'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `initted'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `mpit_big_lock'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [ompi_info] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12735.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<li><strong>Previous message:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI devel] Trunk build failures"</a>
<li><strong>In reply to:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI devel] Trunk build failures"</a>
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
