<?
$subject_val = "Re: [OMPI devel] Trunk Heads Up";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 13:42:51 2008" -->
<!-- isoreceived="20080807174251" -->
<!-- sent="Thu, 7 Aug 2008 19:42:39 +0200" -->
<!-- isosent="20080807174239" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Heads Up" -->
<!-- id="FC5B4983-9EEA-471C-809D-4F687ADD03A4_at_eecs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="CBCEBFDB-20A5-4C27-802A-197D128853D7_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-07 13:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4564.php">Don Kerr: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Previous message:</strong> <a href="4562.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>In reply to:</strong> <a href="4562.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4564.php">Don Kerr: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Reply:</strong> <a href="4564.php">Don Kerr: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r19218 fixes this problem. I couldn't wait so I fix it myself.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 7, 2008, at 7:38 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; There's a missing $2 in the configure.m4.  Don actually did ask for  
</span><br>
<span class="quotelev1">&gt; a review from Brian and me, and I gave a quick one.  My bad for  
</span><br>
<span class="quotelev1">&gt; missing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm testing to ensure the fix is right, and then I'll commit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 7, 2008, at 1:05 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, the commit itself doesn't modify the build process, as you  
</span><br>
<span class="quotelev2">&gt;&gt; just added a new component. However, if people autogen, you  
</span><br>
<span class="quotelev2">&gt;&gt; component doesn't correctly disable itself when not on Solaris. As  
</span><br>
<span class="quotelev2">&gt;&gt; a result, the build fails on MAC OS X.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the error I get at build time:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ranlib: file: .libs/libmca_memchecker.a(memchecker_base_wrappers.o)  
</span><br>
<span class="quotelev2">&gt;&gt; has no symbols
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/opal/mca/memory/malloc_solaris/ 
</span><br>
<span class="quotelev2">&gt;&gt; memory_malloc_solaris_component.c:94: error: conflicting types for  
</span><br>
<span class="quotelev2">&gt;&gt; &#145;munmap&#146;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/sys/mman.h:212: error: previous declaration of  
</span><br>
<span class="quotelev2">&gt;&gt; &#145;munmap&#146; was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/opal/mca/memory/malloc_solaris/ 
</span><br>
<span class="quotelev2">&gt;&gt; memory_malloc_solaris_component.c:118:6: error: #error &quot;Can not  
</span><br>
<span class="quotelev2">&gt;&gt; determine how to call munmap&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And here is a snippet from the config.log:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:78271: checking for Solaris
</span><br>
<span class="quotelev2">&gt;&gt; configure:78988: result: no
</span><br>
<span class="quotelev2">&gt;&gt; configure:79050: checking if MCA component memory:malloc_solaris  
</span><br>
<span class="quotelev2">&gt;&gt; can compile
</span><br>
<span class="quotelev2">&gt;&gt; configure:79052: result: yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 7, 2008, at 6:07 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eh.  Damage is done.  Leave it in.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We'll whip you later.  ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 7, 2008, at 12:04 PM, Don Kerr wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just did a commit (-r19217) which I believe will require an  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; autogen. Since I was reminded that this is not good citizen  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; behavior for the middle of the day I will now start figuring out  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how to back this out unless someone beats me to it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DON (with head hung low)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4563/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4564.php">Don Kerr: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Previous message:</strong> <a href="4562.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>In reply to:</strong> <a href="4562.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4564.php">Don Kerr: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Reply:</strong> <a href="4564.php">Don Kerr: "Re: [OMPI devel] Trunk Heads Up"</a>
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
