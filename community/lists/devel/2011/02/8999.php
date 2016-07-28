<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 09:41:53 2011" -->
<!-- isoreceived="20110216144153" -->
<!-- sent="Wed, 16 Feb 2011 09:41:48 -0500" -->
<!-- isosent="20110216144148" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395" -->
<!-- id="991FC46D-D570-4E7E-98D7-D8B53A4B8759_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D5BD85D.7090101_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-16 09:41:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9000.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Previous message:</strong> <a href="8998.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>In reply to:</strong> <a href="8998.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9000.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Reply:</strong> <a href="9000.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If OFED includes that constant, wouldn't we want to use it?
<br>
<p>PCI ordering is PCI ordering (i.e., unreliable) on all hardware -- or am I wrong?
<br>
<p>On Feb 16, 2011, at 8:59 AM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; I considered that but I wanted to guard against future OFED inclusion. Removing the Solaris check is easy enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/16/11 08:49, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 16, 2011, at 8:29 AM, Don Kerr wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes this is Solaris only. OFED has not bought back the IBV_ACCESS_SO flag. Not sure they ever will.
</span><br>
<span class="quotelev2">&gt;&gt; It should be sufficient to AC_CHECK_DECLS then -- no need for the additional Solaris check.
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9000.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Previous message:</strong> <a href="8998.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>In reply to:</strong> <a href="8998.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9000.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Reply:</strong> <a href="9000.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
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
