<?
$subject_val = "Re: [OMPI devel] Refactoring opal if.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 17:29:35 2010" -->
<!-- isoreceived="20100824212935" -->
<!-- sent="Tue, 24 Aug 2010 17:31:12 -0400" -->
<!-- isosent="20100824213112" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Refactoring opal if.c" -->
<!-- id="1533902A-2A58-4C63-B4B0-300A67CBB4D1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E8D90106-E9E6-493F-9A9F-E969F19469CB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Refactoring opal if.c<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 17:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8317.php">Paul H. Hargrove: "[OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8315.php">Ralph Castain: "[OMPI devel] Refactoring opal if.c"</a>
<li><strong>In reply to:</strong> <a href="8315.php">Ralph Castain: "[OMPI devel] Refactoring opal if.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More specifically: if.h has not been changed (except for its finalize function).
<br>
<p>So all this change does it un-spaghettify the if.c code.  From an interface perspective, the rest of the code base isn't even aware that this change occurred.
<br>
<p>Also, I think Ralph meant the following URL:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/rhc/ompi-if">https://bitbucket.org/rhc/ompi-if</a>
<br>
<p><p><p><p>On Aug 24, 2010, at 5:11 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Per the discussion on today's telecon, I've started working with Jeff on refactoring the opal/util/if.c code into something more understandable without changing the discovery logic. We are creating a framework that solely performs interface discovery, leaving all of the interface wrapper functions untouched. The various components are now configured in/out instead of being buried in multiple layers of #if.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff will be working on the configure logic in the near future. Meantime, the layout of the system is complete and everything builds as it should.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Operation of the framework is straightforward. When framework open is called, it iterates through all available components and calls their open function. At that time, each component adds to the list of interfaces whatever it finds. The IPv4 interface discovery that was common across posix-based systems is located in a single component. The IPv6 discovery code, which tended to be highly system specific, is in separate components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a result, there may be a change in the order in which interfaces are found on the list from where they appear today. However, this order was never guaranteed anyway, so any code that relied on it is incorrect and should be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are welcome to look at what is being done:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hg clone <a href="https://rhc&#64;bitbucket.org/rhc/ompi-if">https://rhc&#64;bitbucket.org/rhc/ompi-if</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="8317.php">Paul H. Hargrove: "[OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8315.php">Ralph Castain: "[OMPI devel] Refactoring opal if.c"</a>
<li><strong>In reply to:</strong> <a href="8315.php">Ralph Castain: "[OMPI devel] Refactoring opal if.c"</a>
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
