<?
$subject_val = "Re: [OMPI devel] RFC: Final cleanup of included headers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 16:18:06 2009" -->
<!-- isoreceived="20090424201806" -->
<!-- sent="Fri, 24 Apr 2009 16:18:01 -0400" -->
<!-- isosent="20090424201801" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Final cleanup of included headers" -->
<!-- id="B505870E-6A6D-4ECD-9345-1A2B8190EEE7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200904231928.55014.keller_at_ornl.gov" -->
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
<strong>Date:</strong> 2009-04-24 16:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5872.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Previous message:</strong> <a href="5870.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>In reply to:</strong> <a href="5861.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ditto what I said before (and thanks for your patience): it sounds  
<br>
good to me!
<br>
<p>On Apr 23, 2009, at 7:28 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; what were we talking about again ;-)?
</span><br>
<span class="quotelev1">&gt; Aah, right: 1.3.2 is out the door, the dust has settled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tuesday, next week, I'd like to apply the patch (produced by
</span><br>
<span class="quotelev1">&gt; contrib/check_unnecessary_headers.sh, see the first email).
</span><br>
<span class="quotelev1">&gt; This will require just two patches:
</span><br>
<span class="quotelev1">&gt;  - one (independent patch) for a few minor additions of mostly include
</span><br>
<span class="quotelev1">&gt; string.h and other includes of header files
</span><br>
<span class="quotelev1">&gt;  - then the &quot;big&quot; one, that gets rid of inclusion of header files in  
</span><br>
<span class="quotelev1">&gt; 832 files
</span><br>
<span class="quotelev1">&gt; (again mostly one-liners).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For this, I expect to not require exclusive access to the trunk...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would that be reasonable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CU,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: Regarding MTT, it _has_ been tested on several clusters (getting  
</span><br>
<span class="quotelev1">&gt; coverage
</span><br>
<span class="quotelev1">&gt; of more MCAs, compilers and so on), but neither OS's, nor  
</span><br>
<span class="quotelev1">&gt; architectures, so...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday 20 March 2009 08:45:27 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This sounds reasonable -- small changes are always appreciated.   
</span><br>
<span class="quotelev1">&gt; If we
</span><br>
<span class="quotelev2">&gt; &gt; can hold off on the big patch until 1.3 is about to morph into 1.4,
</span><br>
<span class="quotelev2">&gt; &gt; that would be good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you remind us about this issue when 1.3.2 gets out the door?
</span><br>
<span class="quotelev2">&gt; &gt; (sorry, not trying to be a jerk; I just know that my short term  
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev2">&gt; &gt; is so non-existent that I'll have forgotten about it by then :-
</span><br>
<span class="quotelev2">&gt; &gt; ( ...what were we talking about again?)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 19, 2009, at 5:12 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wednesday 18 March 2009 09:00:36 am Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Could we hold off on this until after 1.3.2 is out the door and
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; has a
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; couple of days to stabilize? All these header file changes are
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; making
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; it more difficult to cleanly apply patches to the 1.3 branch.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hmm, sure, we can hold off the big patch.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; With the current plan, 1.3.2 should be out on 4/3.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Some intermediate (small!) steps however I'd still like to be able
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to apply?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; When we get past the next couple of weeks, the 1.3 branch should
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; clear
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; out the backlog of CMRs, and we should have the usual immediate
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;oops&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; fixes in to 1.3.2. Then this won't be such a problem.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, it would be nice, if You could test the patch on Your
</span><br>
<span class="quotelev3">&gt; &gt; &gt; systems, prior
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to me moving it into trunk. I want to limit the &quot;down-time&quot; of  
</span><br>
<span class="quotelev1">&gt; trunk
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (There
</span><br>
<span class="quotelev3">&gt; &gt; &gt; may be a few places, where additional headers are required  -- as
</span><br>
<span class="quotelev3">&gt; &gt; &gt; unnecessary
</span><br>
<span class="quotelev3">&gt; &gt; &gt; headers were removed in lower-level headers).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Rainer
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev3">&gt; &gt; &gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5872.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Previous message:</strong> <a href="5870.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>In reply to:</strong> <a href="5861.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
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
