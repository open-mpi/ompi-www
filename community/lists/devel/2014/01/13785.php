<?
$subject_val = "Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 09:28:25 2014" -->
<!-- isoreceived="20140117142825" -->
<!-- sent="Fri, 17 Jan 2014 14:28:24 +0000" -->
<!-- isosent="20140117142824" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM" -->
<!-- id="E0CF032F-223F-4F85-A91C-2AA71D64EFAE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17mfJAUtXMTg09WjqDGNZtb05Yh4HSqy98MU59kKzW9nQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 09:28:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<li><strong>Previous message:</strong> <a href="13784.php">Paul Hargrove: "[OMPI devel] ILP32 warnings report"</a>
<li><strong>In reply to:</strong> <a href="13769.php">Paul Hargrove: "[OMPI devel] test/util/opal_path_nfs failure due to EPERM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed.  Slated for v1.7.5, because it's not too important.
<br>
<p><p>On Jan 13, 2014, at 11:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a Linux system on which there is a fuse mount.
</span><br>
<span class="quotelev1">&gt; Users other than the owner get EPERM from statfs().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When opal_path_nfs() sees the EPERM it drops one path component and does statfs() on the parent.
</span><br>
<span class="quotelev1">&gt; The issue I encountered is that the parent is a user's NFS-mounted home directory.
</span><br>
<span class="quotelev1">&gt; Thus the results from the test differ from what is expected:
</span><br>
<span class="quotelev1">&gt;  Failure : Mismatch: input &quot;/users/steineju/.gvfs&quot;, expected:0 got:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not overly concerned about this, but figured I should report it for completeness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was tonight's trunk tarball if it matters.
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
<li><strong>Next message:</strong> <a href="13786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<li><strong>Previous message:</strong> <a href="13784.php">Paul Hargrove: "[OMPI devel] ILP32 warnings report"</a>
<li><strong>In reply to:</strong> <a href="13769.php">Paul Hargrove: "[OMPI devel] test/util/opal_path_nfs failure due to EPERM"</a>
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
