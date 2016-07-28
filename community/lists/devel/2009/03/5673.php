<?
$subject_val = "Re: [OMPI devel] RFC: Final cleanup of included headers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 08:52:18 2009" -->
<!-- isoreceived="20090320125218" -->
<!-- sent="Fri, 20 Mar 2009 06:52:09 -0600" -->
<!-- isosent="20090320125209" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Final cleanup of included headers" -->
<!-- id="2DC8B7DC-8C72-4DC2-B3D0-341C2B7DE3B6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E874160E-368F-4459-94FA-9FB4BEBA4196_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 08:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5674.php">Kees Verstoep: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Previous message:</strong> <a href="5672.php">Jeff Squyres: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>In reply to:</strong> <a href="5672.php">Jeff Squyres: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5861.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Agreed - thanks for the help!
<br>
<p>At the moment, almost none of the 1.3.2 CMRs apply cleanly... :-/
<br>
<p>That's the source of my concern with a change that would hit so many  
<br>
things.
<br>
<p>Thanks Rainer!
<br>
Ralph
<br>
<p>On Mar 20, 2009, at 6:45 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This sounds reasonable -- small changes are always appreciated.  If  
</span><br>
<span class="quotelev1">&gt; we can hold off on the big patch until 1.3 is about to morph into  
</span><br>
<span class="quotelev1">&gt; 1.4, that would be good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you remind us about this issue when 1.3.2 gets out the door?   
</span><br>
<span class="quotelev1">&gt; (sorry, not trying to be a jerk; I just know that my short term  
</span><br>
<span class="quotelev1">&gt; memory is so non-existent that I'll have forgotten about it by  
</span><br>
<span class="quotelev1">&gt; then :-( ...what were we talking about again?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 19, 2009, at 5:12 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 18 March 2009 09:00:36 am Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Could we hold off on this until after 1.3.2 is out the door and  
</span><br>
<span class="quotelev2">&gt;&gt; has a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; couple of days to stabilize? All these header file changes are  
</span><br>
<span class="quotelev2">&gt;&gt; making
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it more difficult to cleanly apply patches to the 1.3 branch.
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, sure, we can hold off the big patch.
</span><br>
<span class="quotelev2">&gt;&gt; With the current plan, 1.3.2 should be out on 4/3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some intermediate (small!) steps however I'd still like to be able  
</span><br>
<span class="quotelev2">&gt;&gt; to apply?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When we get past the next couple of weeks, the 1.3 branch should  
</span><br>
<span class="quotelev2">&gt;&gt; clear
</span><br>
<span class="quotelev3">&gt;&gt; &gt; out the backlog of CMRs, and we should have the usual immediate  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;oops&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; fixes in to 1.3.2. Then this won't be such a problem.
</span><br>
<span class="quotelev2">&gt;&gt; However, it would be nice, if You could test the patch on Your  
</span><br>
<span class="quotelev2">&gt;&gt; systems, prior
</span><br>
<span class="quotelev2">&gt;&gt; to me moving it into trunk. I want to limit the &quot;down-time&quot; of  
</span><br>
<span class="quotelev2">&gt;&gt; trunk (There
</span><br>
<span class="quotelev2">&gt;&gt; may be a few places, where additional headers are required  -- as  
</span><br>
<span class="quotelev2">&gt;&gt; unnecessary
</span><br>
<span class="quotelev2">&gt;&gt; headers were removed in lower-level headers).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev2">&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5674.php">Kees Verstoep: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Previous message:</strong> <a href="5672.php">Jeff Squyres: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>In reply to:</strong> <a href="5672.php">Jeff Squyres: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5861.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
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
