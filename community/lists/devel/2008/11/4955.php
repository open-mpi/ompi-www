<?
$subject_val = "Re: [OMPI devel] gather-bug reminder/re-post";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 07:18:18 2008" -->
<!-- isoreceived="20081125121818" -->
<!-- sent="Tue, 25 Nov 2008 07:18:10 -0500" -->
<!-- isosent="20081125121810" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] gather-bug reminder/re-post" -->
<!-- id="E6CD40F3-BA32-4ED9-8DE8-627F218D558D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200811241934.34085.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] gather-bug reminder/re-post<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-25 07:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4956.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>Previous message:</strong> <a href="4954.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4948.php">Peter Kjellstrom: "[OMPI devel] gather-bug reminder/re-post"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4956.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>Reply:</strong> <a href="4956.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 24, 2008, at 1:34 PM, Peter Kjellstrom wrote:
<br>
<p><span class="quotelev1">&gt; I originally posted this to the users list maybe it should have gone  
</span><br>
<span class="quotelev1">&gt; here. I
</span><br>
<span class="quotelev1">&gt; talked to Jeff Squyres about this bug at SC08 and he thought it  
</span><br>
<span class="quotelev1">&gt; would be nice
</span><br>
<span class="quotelev1">&gt; to have it fixed before 1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bug probably is in ompi/datatype/ 
</span><br>
<span class="quotelev1">&gt; dt_copy.c:ompi_ddt_copy_content_same_ddt
</span><br>
<span class="quotelev1">&gt; unless I misunderstood Jeff :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Original post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/11/7318.php">http://www.open-mpi.org/community/lists/users/2008/11/7318.php</a>
</span><br>
<p><p>Sorry for the delays; almost no real work got done by many of us last  
<br>
week because of SC08.  But I spoke to George about this issue last  
<br>
Thursday afternoon, and now I see that George committed r20034 that  
<br>
looks like it's a fix for this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/20034">https://svn.open-mpi.org/trac/ompi/changeset/20034</a>
<br>
<p>Can you give the OMPI trunk a whirl and see if this fixes the problem  
<br>
for you?
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
<li><strong>Next message:</strong> <a href="4956.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>Previous message:</strong> <a href="4954.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4948.php">Peter Kjellstrom: "[OMPI devel] gather-bug reminder/re-post"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4956.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>Reply:</strong> <a href="4956.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
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
