<?
$subject_val = "Re: [OMPI devel] Branching for 1.5.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 07:54:19 2009" -->
<!-- isoreceived="20090429115419" -->
<!-- sent="Wed, 29 Apr 2009 05:54:06 -0600" -->
<!-- isosent="20090429115406" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Branching for 1.5.0" -->
<!-- id="B4C2A950-20A4-4BEC-9656-D1E13CADFAC9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="03739C2A-F340-4B08-A85C-EE840802D0FF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Branching for 1.5.0<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 07:54:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5900.php">Rainer Keller: "Re: [OMPI devel] r21096"</a>
<li><strong>Previous message:</strong> <a href="5898.php">Jeff Squyres: "[OMPI devel] r21096"</a>
<li><strong>In reply to:</strong> <a href="5897.php">Jeff Squyres: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5956.php">Greg Koenig: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5956.php">Greg Koenig: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No offense, but I would like some better evidence that the new changes  
<br>
are more complete than this last round. It was disturbing to find that  
<br>
the changes were not in fact ready to come into the trunk - as Rainer  
<br>
noted, he had to include a separate commit that actually broke the  
<br>
system because he couldn't make it compile with his changes.
<br>
<p>Unfortunately, this situation was not communicated *prior* to agreeing  
<br>
to the RFC.
<br>
<p>I would like to see some concrete evidence that this next round  
<br>
doesn't suffer from similar deficiencies before it enters the system.  
<br>
Otherwise, let's branch now (once we recover from this last  
<br>
disruption). Greg's changes are not critical for making the system  
<br>
work, and don't represent a new &quot;feature&quot; - they can come into the  
<br>
system at any point down the road once we have assurance that they  
<br>
actually work.
<br>
<p><p>On Apr 29, 2009, at 4:29 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Let's let the #include changes settle down a bit and then let's get  
</span><br>
<span class="quotelev1">&gt; Greg's stuff in.  Then let's let that settle, and then we'll branch  
</span><br>
<span class="quotelev1">&gt; for 1.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2009, at 10:32 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt; as You may have noticed, the two patches for header cleanup have been
</span><br>
<span class="quotelev2">&gt;&gt; committed  (SVN: r21095, r21096). Thanks Ralph.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Up to now, the consensus was, that the renaming patches by Gregory  
</span><br>
<span class="quotelev2">&gt;&gt; Koenig
</span><br>
<span class="quotelev2">&gt;&gt; should be integrated just before branching to minimize drift  
</span><br>
<span class="quotelev2">&gt;&gt; between branch
</span><br>
<span class="quotelev2">&gt;&gt; and trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now is the time ;-) End of this week, just before the branch is  
</span><br>
<span class="quotelev2">&gt;&gt; done, Greg
</span><br>
<span class="quotelev2">&gt;&gt; would apply the name changes. Ralph&amp;Jeff, please let us know, when  
</span><br>
<span class="quotelev2">&gt;&gt; You'll plan
</span><br>
<span class="quotelev2">&gt;&gt; to make the move. Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday 28 April 2009 12:50:03 pm Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; We are ready to branch the next feature release series - tagged  
</span><br>
<span class="quotelev2">&gt;&gt; 1.5. Rainer
</span><br>
<span class="quotelev3">&gt;&gt; &gt; will be doing a rather intrusive commit later this evening to  
</span><br>
<span class="quotelev2">&gt;&gt; cleanup
</span><br>
<span class="quotelev3">&gt;&gt; &gt; unnecessary header file dependencies. Once the dust from that  
</span><br>
<span class="quotelev2">&gt;&gt; settles
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (probably end of the week), we will do the branch.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For now, the branch will be done via subversion. Once the IU  
</span><br>
<span class="quotelev2">&gt;&gt; infrastructure
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to support Mercurial is completed, the branch and the rest of the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; repository will be converted to Mercurial. We would rather just  
</span><br>
<span class="quotelev2">&gt;&gt; do the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; branch now instead of wait for that to be completed.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So this is just a &quot;heads up&quot;. Please let us know if there are any  
</span><br>
<span class="quotelev2">&gt;&gt; concerns
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with that plan.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph &amp; Jeff
</span><br>
<span class="quotelev3">&gt;&gt; &gt; aka. Mutt &amp; Jeff (for those of you old enough to remember that  
</span><br>
<span class="quotelev2">&gt;&gt; comic strip)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; No wait....that should be Ralph &amp; the Mutt!
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5900.php">Rainer Keller: "Re: [OMPI devel] r21096"</a>
<li><strong>Previous message:</strong> <a href="5898.php">Jeff Squyres: "[OMPI devel] r21096"</a>
<li><strong>In reply to:</strong> <a href="5897.php">Jeff Squyres: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5956.php">Greg Koenig: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5956.php">Greg Koenig: "Re: [OMPI devel] Branching for 1.5.0"</a>
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
