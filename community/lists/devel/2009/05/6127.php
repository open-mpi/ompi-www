<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 13:23:18 2009" -->
<!-- isoreceived="20090527172318" -->
<!-- sent="Wed, 27 May 2009 13:23:04 -0400" -->
<!-- isosent="20090527172304" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300" -->
<!-- id="7C21D095-C8A6-4619-A6DE-E298B2CB65C5_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AE2D6307-56A4-45FE-9C0C-E3558A9838C8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 13:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6126.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>In reply to:</strong> <a href="6126.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think we need to enable the panic mode. This problem only  
<br>
happens on a *very* limited number of scenarios, basically when the  
<br>
BTL return a fragment in several iovecs. Few BTLs have this  
<br>
capability, and even if they have it most of the time they prefer to  
<br>
avoid it. Moreover, we never get bitten by this on all our MTT tests ...
<br>
<p>A bullet about it on the NEWS I think it's enough ;)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 27, 2009, at 13:14 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 27, 2009, at 12:38 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Depend on how we evaluate the fact that we can deliver wrong (and
</span><br>
<span class="quotelev2">&gt;&gt; truncated) data. From my perspective it is a blocker, and reflected
</span><br>
<span class="quotelev2">&gt;&gt; this on the CMR.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correctness, schmorectness...  who cares?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I meant was: do we need to alert users about this, tell them to  
</span><br>
<span class="quotelev1">&gt; stop using 1.3.0-1.3.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6126.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>In reply to:</strong> <a href="6126.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
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
