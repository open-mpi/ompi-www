<?
$subject_val = "Re: [OMPI devel] Trunk Heads Up";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 13:05:27 2008" -->
<!-- isoreceived="20080807170527" -->
<!-- sent="Thu, 7 Aug 2008 19:05:15 +0200" -->
<!-- isosent="20080807170515" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Heads Up" -->
<!-- id="03140D1A-DC50-4A2B-9CB0-042CCE924ACE_at_eecs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1A5C4FFC-C744-44DF-9F4C-34A1377C260C_at_cisco.com" -->
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
<strong>Date:</strong> 2008-08-07 13:05:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4562.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Previous message:</strong> <a href="4560.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>In reply to:</strong> <a href="4560.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4562.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Reply:</strong> <a href="4562.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, the commit itself doesn't modify the build process, as you just  
<br>
added a new component. However, if people autogen, you component  
<br>
doesn't correctly disable itself when not on Solaris. As a result, the  
<br>
build fails on MAC OS X.
<br>
<p>Here is the error I get at build time:
<br>
<p>ranlib: file: .libs/libmca_memchecker.a(memchecker_base_wrappers.o)  
<br>
has no symbols
<br>
../../../../../ompi/opal/mca/memory/malloc_solaris/ 
<br>
memory_malloc_solaris_component.c:94: error: conflicting types for  
<br>
&#145;munmap&#146;
<br>
/usr/include/sys/mman.h:212: error: previous declaration of &#145;munmap&#146;  
<br>
was here
<br>
../../../../../ompi/opal/mca/memory/malloc_solaris/ 
<br>
memory_malloc_solaris_component.c:118:6: error: #error &quot;Can not  
<br>
determine how to call munmap&quot;
<br>
<p>And here is a snippet from the config.log:
<br>
<p>configure:78271: checking for Solaris
<br>
configure:78988: result: no
<br>
configure:79050: checking if MCA component memory:malloc_solaris can  
<br>
compile
<br>
configure:79052: result: yes
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 7, 2008, at 6:07 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Eh.  Damage is done.  Leave it in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'll whip you later.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 7, 2008, at 12:04 PM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just did a commit (-r19217) which I believe will require an  
</span><br>
<span class="quotelev2">&gt;&gt; autogen. Since I was reminded that this is not good citizen  
</span><br>
<span class="quotelev2">&gt;&gt; behavior for the middle of the day I will now start figuring out  
</span><br>
<span class="quotelev2">&gt;&gt; how to back this out unless someone beats me to it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -DON (with head hung low)
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4561/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4562.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Previous message:</strong> <a href="4560.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>In reply to:</strong> <a href="4560.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4562.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
<li><strong>Reply:</strong> <a href="4562.php">Jeff Squyres: "Re: [OMPI devel] Trunk Heads Up"</a>
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
