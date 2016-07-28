<?
$subject_val = "Re: [OMPI devel] RFC: Final cleanup of included headers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 08:45:34 2009" -->
<!-- isoreceived="20090320124534" -->
<!-- sent="Fri, 20 Mar 2009 08:45:27 -0400" -->
<!-- isosent="20090320124527" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Final cleanup of included headers" -->
<!-- id="E874160E-368F-4459-94FA-9FB4BEBA4196_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200903191712.33522.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Final cleanup of included headers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 08:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5673.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Previous message:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>In reply to:</strong> <a href="5669.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5673.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Reply:</strong> <a href="5673.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5861.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds reasonable -- small changes are always appreciated.  If we  
<br>
can hold off on the big patch until 1.3 is about to morph into 1.4,  
<br>
that would be good.
<br>
<p>Can you remind us about this issue when 1.3.2 gets out the door?   
<br>
(sorry, not trying to be a jerk; I just know that my short term memory  
<br>
is so non-existent that I'll have forgotten about it by then :- 
<br>
( ...what were we talking about again?)
<br>
<p><p>On Mar 19, 2009, at 5:12 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; On Wednesday 18 March 2009 09:00:36 am Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Could we hold off on this until after 1.3.2 is out the door and  
</span><br>
<span class="quotelev1">&gt; has a
</span><br>
<span class="quotelev2">&gt; &gt; couple of days to stabilize? All these header file changes are  
</span><br>
<span class="quotelev1">&gt; making
</span><br>
<span class="quotelev2">&gt; &gt; it more difficult to cleanly apply patches to the 1.3 branch.
</span><br>
<span class="quotelev1">&gt; Hmm, sure, we can hold off the big patch.
</span><br>
<span class="quotelev1">&gt; With the current plan, 1.3.2 should be out on 4/3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some intermediate (small!) steps however I'd still like to be able  
</span><br>
<span class="quotelev1">&gt; to apply?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When we get past the next couple of weeks, the 1.3 branch should  
</span><br>
<span class="quotelev1">&gt; clear
</span><br>
<span class="quotelev2">&gt; &gt; out the backlog of CMRs, and we should have the usual immediate  
</span><br>
<span class="quotelev1">&gt; &quot;oops&quot;
</span><br>
<span class="quotelev2">&gt; &gt; fixes in to 1.3.2. Then this won't be such a problem.
</span><br>
<span class="quotelev1">&gt; However, it would be nice, if You could test the patch on Your  
</span><br>
<span class="quotelev1">&gt; systems, prior
</span><br>
<span class="quotelev1">&gt; to me moving it into trunk. I want to limit the &quot;down-time&quot; of trunk  
</span><br>
<span class="quotelev1">&gt; (There
</span><br>
<span class="quotelev1">&gt; may be a few places, where additional headers are required  -- as  
</span><br>
<span class="quotelev1">&gt; unnecessary
</span><br>
<span class="quotelev1">&gt; headers were removed in lower-level headers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5673.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Previous message:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>In reply to:</strong> <a href="5669.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5673.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Reply:</strong> <a href="5673.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5861.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
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
