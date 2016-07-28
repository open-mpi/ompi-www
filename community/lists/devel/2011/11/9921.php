<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 17:18:47 2011" -->
<!-- isoreceived="20111107221847" -->
<!-- sent="Mon, 7 Nov 2011 17:18:42 -0500" -->
<!-- isosent="20111107221842" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="492E8894-0FB9-4413-BCE3-7697C0534537_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="93B5638B-6F9A-4683-8F76-573F0C219AED_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 17:18:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9920.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9916.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9928.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9928.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A little bit of history:
<br>
<p>1. r25305: added 2 atomic operations to OPAL. However, they only exists on amd64 and are only used in the vader BTL, which I assume only supports amd64.
<br>
<p>2. r25334: The seg_key union got a new member ptr. This member is solely used in the vader BTL, as all other BTL use a compiler trick to convert a pointer to a 64 bits.
<br>
<p>3. r25445: All members of the seg_key union got friends, because Cray dare to set their keys at 128 bits long. However a quick 
<br>
&nbsp;&nbsp;find . -name &quot;*.[ch]&quot; -exec grep -Hn seg_key {} \; | grep &quot;\[1\]&quot;
<br>
indicates that no BTL is using 128 bits keys. Code has been added to all PMLs, but I guess they just copy empty data.
<br>
<p>What I see is a pattern of commits that can have been dealt with differently. None had an RFC, and most of them are not even used. 
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 7, 2011, at 10:37 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 7, 2011, at 10:16 AM, Nathan T. Hjelm wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, and I completely agree. I was simply trying to keep it consistent in
</span><br>
<span class="quotelev2">&gt;&gt; case there is something I don't know about the heterogeneous case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I increased the size of the 64 bit member because there is no uint128 type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, I see.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would put the other sizes back, at a minimum.  There should be no need to increase those.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George -- comments?  Should this be a new key fields (128, with 2 uint64_t's)?  If this is only for large messages, is the extra 8 bytes a concern?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9920.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9916.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9928.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9928.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
