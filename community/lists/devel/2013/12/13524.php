<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 09:49:41 2013" -->
<!-- isoreceived="20131220144941" -->
<!-- sent="Fri, 20 Dec 2013 14:49:39 +0000" -->
<!-- isosent="20131220144939" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6" -->
<!-- id="C2BB9BC9-4181-4889-916B-4E7B4AF18B51_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14McKf92u-O=SwRA02chn8OHyPBVprAo+DeRpDhKZTZ_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 09:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13525.php">Mike Dubman: "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<li><strong>Previous message:</strong> <a href="13523.php">Jeff Squyres (jsquyres): "[OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<li><strong>In reply to:</strong> <a href="13519.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13551.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Reply:</strong> <a href="13551.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just submitted a CMR to Brian to fix this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/4015">https://svn.open-mpi.org/trac/ompi/ticket/4015</a>
<br>
<p><p>On Dec 19, 2013, at 10:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Probably nobody cares, but I'll report this for completeness.
</span><br>
<span class="quotelev1">&gt; In trying to understand the &quot;make install&quot; failure on NetBSD-6 I run &quot;autogen.sh&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The versions detected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Searching for autoconf
</span><br>
<span class="quotelev1">&gt;      Found autoconf version 2.69; checking version...
</span><br>
<span class="quotelev1">&gt;        Found version component 2 -- need 2
</span><br>
<span class="quotelev1">&gt;        Found version component 69 -- need 65
</span><br>
<span class="quotelev1">&gt;      ==&gt; ACCEPTED
</span><br>
<span class="quotelev1">&gt;    Searching for libtoolize
</span><br>
<span class="quotelev1">&gt;      Found libtoolize version 2.2.6b; checking version...
</span><br>
<span class="quotelev1">&gt;        Found version component 2 -- need 2
</span><br>
<span class="quotelev1">&gt;        Found version component 2 -- need 2
</span><br>
<span class="quotelev1">&gt;        Found version component 6b -- need 6b
</span><br>
<span class="quotelev1">&gt;      ==&gt; ACCEPTED
</span><br>
<span class="quotelev1">&gt;    Searching for automake
</span><br>
<span class="quotelev1">&gt;      Found automake version 1.13.1; checking version...
</span><br>
<span class="quotelev1">&gt;        Found version component 1 -- need 1
</span><br>
<span class="quotelev1">&gt;        Found version component 13 -- need 12
</span><br>
<span class="quotelev1">&gt;      ==&gt; ACCEPTED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that when run, the generated configure script dies as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Java compiler
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Found configure shell variable clash!
</span><br>
<span class="quotelev1">&gt; configure: WARNING: OPAL_VAR_SCOPE_PUSH called on &quot;dir&quot;,
</span><br>
<span class="quotelev1">&gt; configure: WARNING: but it is already defined with value &quot;/bin&quot;
</span><br>
<span class="quotelev1">&gt; configure: WARNING: This usually indicates an error in configure.
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13525.php">Mike Dubman: "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<li><strong>Previous message:</strong> <a href="13523.php">Jeff Squyres (jsquyres): "[OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<li><strong>In reply to:</strong> <a href="13519.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13551.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Reply:</strong> <a href="13551.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
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
