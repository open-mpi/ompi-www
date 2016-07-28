<?
$subject_val = "Re: [OMPI devel] Is trunk broken ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 06:53:40 2008" -->
<!-- isoreceived="20080620105340" -->
<!-- sent="Fri, 20 Jun 2008 06:53:30 -0400" -->
<!-- isosent="20080620105330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is trunk broken ?" -->
<!-- id="4E2C76BE-CA78-4CA8-8DFC-EF7AC93781D1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4802DE0.54BA%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Is trunk broken ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-20 06:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4191.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<li><strong>Previous message:</strong> <a href="4189.php">Ralph Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>In reply to:</strong> <a href="4189.php">Ralph Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4183.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2008, at 5:38 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; If so, I wonder if what happened was that Pasha did an &quot;svn up&quot;, but
</span><br>
<span class="quotelev2">&gt;&gt; without re-running autogen/configure, he wouldn't have seen the new
</span><br>
<span class="quotelev2">&gt;&gt; &quot;bad&quot; component and therefore was falling back on the old &quot;basic&quot;
</span><br>
<span class="quotelev2">&gt;&gt; component that is now the non-default / testing component...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could be - though I thought that if you do a &quot;make&quot; in that  
</span><br>
<span class="quotelev1">&gt; situation, it
</span><br>
<span class="quotelev1">&gt; would force a re-autogen/configure when it saw a new component?
</span><br>
<p>No, it does not.  The addition / removal of a component requires a  
<br>
[manual] autogen/configure for the build system to see it.
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
<li><strong>Next message:</strong> <a href="4191.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<li><strong>Previous message:</strong> <a href="4189.php">Ralph Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>In reply to:</strong> <a href="4189.php">Ralph Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4183.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
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
