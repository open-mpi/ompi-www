<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 09:55:02 2011" -->
<!-- isoreceived="20110216145502" -->
<!-- sent="Wed, 16 Feb 2011 09:54:14 -0500" -->
<!-- isosent="20110216145414" -->
<!-- name="Don Kerr" -->
<!-- email="don.kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395" -->
<!-- id="4D5BE516.1030501_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="991FC46D-D570-4E7E-98D7-D8B53A4B8759_at_cisco.com" -->
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
<strong>From:</strong> Don Kerr (<em>don.kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-16 09:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9001.php">Jeff Squyres: "[OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>Previous message:</strong> <a href="8999.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>In reply to:</strong> <a href="8999.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You would think but I did not want to speculate what OFED might do.
<br>
<p>I'm fine skipping the Solaris check, if OFED does include things may 
<br>
have to change at that point anyway.
<br>
<p>On 02/16/11 09:41, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; If OFED includes that constant, wouldn't we want to use it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PCI ordering is PCI ordering (i.e., unreliable) on all hardware -- or am I wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 16, 2011, at 8:59 AM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I considered that but I wanted to guard against future OFED inclusion. Removing the Solaris check is easy enough.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 02/16/11 08:49, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 16, 2011, at 8:29 AM, Don Kerr wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes this is Solaris only. OFED has not bought back the IBV_ACCESS_SO flag. Not sure they ever will.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It should be sufficient to AC_CHECK_DECLS then -- no need for the additional Solaris check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9001.php">Jeff Squyres: "[OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>Previous message:</strong> <a href="8999.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>In reply to:</strong> <a href="8999.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
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
