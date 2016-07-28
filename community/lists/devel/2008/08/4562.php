<?
$subject_val = "Re: [OMPI devel] Trunk Heads Up";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 13:38:47 2008" -->
<!-- isoreceived="20080807173847" -->
<!-- sent="Thu, 7 Aug 2008 13:38:41 -0400" -->
<!-- isosent="20080807173841" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Heads Up" -->
<!-- id="CBCEBFDB-20A5-4C27-802A-197D128853D7_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="03140D1A-DC50-4A2B-9CB0-042CCE924ACE_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk Heads Up<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-07 13:38:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4563.php">George Bosilca: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Previous message:</strong> <a href="4561.php">George Bosilca: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>In reply to:</strong> <a href="4561.php">George Bosilca: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4563.php">George Bosilca: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Reply:</strong> <a href="4563.php">George Bosilca: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's a missing $2 in the configure.m4.  Don actually did ask for a  
<br>
review from Brian and me, and I gave a quick one.  My bad for missing  
<br>
it.
<br>
<p>I'm testing to ensure the fix is right, and then I'll commit.
<br>
<p><p>On Aug 7, 2008, at 1:05 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Well, the commit itself doesn't modify the build process, as you  
</span><br>
<span class="quotelev1">&gt; just added a new component. However, if people autogen, you  
</span><br>
<span class="quotelev1">&gt; component doesn't correctly disable itself when not on Solaris. As a  
</span><br>
<span class="quotelev1">&gt; result, the build fails on MAC OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the error I get at build time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ranlib: file: .libs/libmca_memchecker.a(memchecker_base_wrappers.o)  
</span><br>
<span class="quotelev1">&gt; has no symbols
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/opal/mca/memory/malloc_solaris/ 
</span><br>
<span class="quotelev1">&gt; memory_malloc_solaris_component.c:94: error: conflicting types for  
</span><br>
<span class="quotelev1">&gt; &#145;munmap&#146;
</span><br>
<span class="quotelev1">&gt; /usr/include/sys/mman.h:212: error: previous declaration of &#145;munmap&#146;  
</span><br>
<span class="quotelev1">&gt; was here
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/opal/mca/memory/malloc_solaris/ 
</span><br>
<span class="quotelev1">&gt; memory_malloc_solaris_component.c:118:6: error: #error &quot;Can not  
</span><br>
<span class="quotelev1">&gt; determine how to call munmap&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here is a snippet from the config.log:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:78271: checking for Solaris
</span><br>
<span class="quotelev1">&gt; configure:78988: result: no
</span><br>
<span class="quotelev1">&gt; configure:79050: checking if MCA component memory:malloc_solaris can  
</span><br>
<span class="quotelev1">&gt; compile
</span><br>
<span class="quotelev1">&gt; configure:79052: result: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 7, 2008, at 6:07 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eh.  Damage is done.  Leave it in.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We'll whip you later.  ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 7, 2008, at 12:04 PM, Don Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just did a commit (-r19217) which I believe will require an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autogen. Since I was reminded that this is not good citizen  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior for the middle of the day I will now start figuring out  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how to back this out unless someone beats me to it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DON (with head hung low)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4563.php">George Bosilca: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Previous message:</strong> <a href="4561.php">George Bosilca: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>In reply to:</strong> <a href="4561.php">George Bosilca: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4563.php">George Bosilca: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Reply:</strong> <a href="4563.php">George Bosilca: "Re: [OMPI devel] Trunk Heads Up"</a>
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
