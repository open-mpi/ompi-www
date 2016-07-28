<?
$subject_val = "Re: [OMPI devel] adding new functions to a BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 17:52:00 2008" -->
<!-- isoreceived="20081022215200" -->
<!-- sent="Wed, 22 Oct 2008 23:51:34 +0200" -->
<!-- isosent="20081022215134" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] adding new functions to a BTL" -->
<!-- id="20081022215133.GA9160_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48FF9F81.9030807_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] adding new functions to a BTL<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 17:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4799.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4797.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4797.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4799.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4799.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4804.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff, Eugene,
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We use lt_dlopen() to open the plugins (Libtool's wrapper for a   
</span><br>
<span class="quotelev2">&gt;&gt; portable dlopen).  It opens all plugins (DSOs) in a private scope.    
</span><br>
<span class="quotelev2">&gt;&gt; That private scope is kept deep in the OPAL MCA base and not exposed   
</span><br>
<span class="quotelev2">&gt;&gt; elsewhere in the code base.  So if you manually dlopen a plugin again,  
</span><br>
<span class="quotelev2">&gt;&gt; I'll bet that the linker realizes that that DSO has already been  
</span><br>
<span class="quotelev2">&gt;&gt; loaded into the process space and doesn't actually load it again (but  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't fail).  So the dlsyms fail because you don't have access to  
</span><br>
<span class="quotelev2">&gt;&gt; the private scope from where Libtool originally opened the DSO.
</span><br>
<p>Shouldn't it work to re-dlopen the lib with RTLD_GLOBAL?
<br>
<p>Also, recent libltdl should allow you to choose which scope you want in
<br>
the first place, local or global, through lt_dladvise.
<br>
<p>Hope that helps.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4799.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4797.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4797.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4799.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4799.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4804.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
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
