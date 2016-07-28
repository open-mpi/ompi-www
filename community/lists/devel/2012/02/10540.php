<?
$subject_val = "Re: [OMPI devel] excessive warnings on some BSDs [w/ PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 08:34:50 2012" -->
<!-- isoreceived="20120221133450" -->
<!-- sent="Tue, 21 Feb 2012 08:34:46 -0500" -->
<!-- isosent="20120221133446" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] excessive warnings on some BSDs [w/ PATCH]" -->
<!-- id="B3DE47D4-EEE3-4A38-9C7D-7BD7630B09DF_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F3EB6E9.2010809_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] excessive warnings on some BSDs [w/ PATCH]<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 08:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10541.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10539.php">Jeffrey Squyres: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<li><strong>In reply to:</strong> <a href="10484.php">Paul H. Hargrove: "[OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed and CMR'ed.  Thanks!
<br>
<p>On Feb 17, 2012, at 3:22 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; When building trunk or 1.5.x on OpenBSD-5.0 (and maybe others), I get *LOTS* of the following:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/arpa/inet.h:74: warning: 'struct in_addr' declared inside parameter list
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/arpa/inet.h:74: warning: its scope is only this definition or declaration, which is probably not what you want
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/arpa/inet.h:75: warning: 'struct in_addr' declared inside parameter list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is trivial to fix by including netinet/in.h before arpa/inet.h (see attached patch).
</span><br>
<span class="quotelev1">&gt; The patch applies cleanly to both the trunk and the 1.5 branch (perhaps to hold back until 1.6)
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
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;in_addr_warn.diff&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="10541.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10539.php">Jeffrey Squyres: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<li><strong>In reply to:</strong> <a href="10484.php">Paul H. Hargrove: "[OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
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
