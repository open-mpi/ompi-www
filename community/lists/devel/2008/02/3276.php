<?
$subject_val = "Re: [OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 09:18:05 2008" -->
<!-- isoreceived="20080221141805" -->
<!-- sent="Thu, 21 Feb 2008 06:17:32 -0800" -->
<!-- isosent="20080221141732" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA ready?" -->
<!-- id="A7C825BD-BFA8-4EE8-BD07-A75C6F95D09D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="53d4221c0802200753x1d43d55ct4f4ef3a2f0cbeaaf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PLPA ready?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 09:17:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3277.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3275.php">Pavel Shamis (Pasha): "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>In reply to:</strong> <a href="3272.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3277.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3277.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2008, at 7:53 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I guess I was torn between reporting num_processors/sockets and
</span><br>
<span class="quotelev2">&gt;&gt; max_socket|core_id.  Really, you need both, right?  It is possible
</span><br>
<span class="quotelev2">&gt;&gt; that the number of processors and/or sockets are not contiguous.
</span><br>
<span class="quotelev1">&gt; I need both *because* the number of processor is not contiguous. In my
</span><br>
<span class="quotelev1">&gt; case, I have a machine with two sockets. the socket numbers are 0 and
</span><br>
<span class="quotelev1">&gt; 3. so in num_sockets I have 2 and in max_socket_id I have 3 and I need
</span><br>
<span class="quotelev1">&gt; those both values.
</span><br>
<p>Ok, so it sounds like a paffinity API change is in order.  When/if the  
<br>
Solaris plugin comes into effect, I know that they have similar issues  
<br>
(processors may not be numbered contiguously).
<br>
<p>Do you want to change the API to include both parameters when querying  
<br>
sockets and cores?  The Solaris API has these functions, but they're  
<br>
no-ops (returning NOT_SUPPORTED), but we'll need to make their  
<br>
prototypes match.
<br>
<p>I think PLPA otherwise passes criteria for release.  I'll release PLPA  
<br>
v1.1 today and try to get it integrated into the trunk.  Sorry it's  
<br>
taken a while...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3277.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3275.php">Pavel Shamis (Pasha): "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>In reply to:</strong> <a href="3272.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3277.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3277.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
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
