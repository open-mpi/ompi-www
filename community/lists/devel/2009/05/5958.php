<?
$subject_val = "Re: [OMPI devel] Branching for 1.5.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 09:24:19 2009" -->
<!-- isoreceived="20090505132419" -->
<!-- sent="Tue, 5 May 2009 09:24:13 -0400" -->
<!-- isosent="20090505132413" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Branching for 1.5.0" -->
<!-- id="320D80E5-30E4-44D2-A8D2-1D7D21D5AFBE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="537C6C0940C6C143AA46A88946B85417116AE139_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 09:24:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5959.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5957.php">Graham, Richard L.: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>In reply to:</strong> <a href="5957.php">Graham, Richard L.: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we're all amenable for this for the v1.5 branch.
<br>
<p>Let's do the usual -- bring it in on the trunk, smooth out any issues  
<br>
that arise, and, if we've branched for v1.5 already, bring it over  
<br>
when it's ready.  If not, it'll just be included in the branch.
<br>
<p>So either way, it'll get into v1.5 -- either right at the beginning,  
<br>
or shortly thereafter.
<br>
<p><p>On May 4, 2009, at 4:19 PM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt; This should go ahead with right before the 1.5 changes, as  
</span><br>
<span class="quotelev1">&gt; discussed.  Greg has put out the changes for testing several months  
</span><br>
<span class="quotelev1">&gt; ago, so there has been quite a while to test, and he has done quite  
</span><br>
<span class="quotelev1">&gt; a bit of testing himself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Mon May 04 15:54:34 2009
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Branching for 1.5.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich and Rainer are encouraging me to follow through with this name  
</span><br>
<span class="quotelev1">&gt; change
</span><br>
<span class="quotelev1">&gt; operation sometime in the near future.  I understand people's  
</span><br>
<span class="quotelev1">&gt; concern that
</span><br>
<span class="quotelev1">&gt; this touches a lot of source code files and has limited benefit  
</span><br>
<span class="quotelev1">&gt; other than
</span><br>
<span class="quotelev1">&gt; aesthetical merits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.  What evidence do you need me to provide in order to agree to  
</span><br>
<span class="quotelev1">&gt; allow this
</span><br>
<span class="quotelev1">&gt; change to happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.  What timeframe is appropriate for this to happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks -- Greg.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/29/09 7:54 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; No offense, but I would like some better evidence that the new  
</span><br>
<span class="quotelev1">&gt; changes
</span><br>
<span class="quotelev2">&gt; &gt; are more complete than this last round. It was disturbing to find  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt; the changes were not in fact ready to come into the trunk - as  
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev2">&gt; &gt; noted, he had to include a separate commit that actually broke the
</span><br>
<span class="quotelev2">&gt; &gt; system because he couldn't make it compile with his changes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, this situation was not communicated *prior* to  
</span><br>
<span class="quotelev1">&gt; agreeing
</span><br>
<span class="quotelev2">&gt; &gt; to the RFC.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would like to see some concrete evidence that this next round
</span><br>
<span class="quotelev2">&gt; &gt; doesn't suffer from similar deficiencies before it enters the  
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev2">&gt; &gt; Otherwise, let's branch now (once we recover from this last
</span><br>
<span class="quotelev2">&gt; &gt; disruption). Greg's changes are not critical for making the system
</span><br>
<span class="quotelev2">&gt; &gt; work, and don't represent a new &quot;feature&quot; - they can come into the
</span><br>
<span class="quotelev2">&gt; &gt; system at any point down the road once we have assurance that they
</span><br>
<span class="quotelev2">&gt; &gt; actually work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 29, 2009, at 4:29 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Let's let the #include changes settle down a bit and then let's get
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Greg's stuff in.  Then let's let that settle, and then we'll branch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for 1.5.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 28, 2009, at 10:32 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; as You may have noticed, the two patches for header cleanup have  
</span><br>
<span class="quotelev1">&gt; been
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; committed  (SVN: r21095, r21096). Thanks Ralph.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Up to now, the consensus was, that the renaming patches by Gregory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Koenig
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; should be integrated just before branching to minimize drift
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; between branch
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and trunk.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Now is the time ;-) End of this week, just before the branch is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; done, Greg
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; would apply the name changes. Ralph&amp;Jeff, please let us know, when
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You'll plan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to make the move. Thanks!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; With best regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Rainer
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Tuesday 28 April 2009 12:50:03 pm Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; We are ready to branch the next feature release series - tagged
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1.5. Rainer
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; will be doing a rather intrusive commit later this evening to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cleanup
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; unnecessary header file dependencies. Once the dust from that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; settles
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (probably end of the week), we will do the branch.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For now, the branch will be done via subversion. Once the IU
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; infrastructure
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to support Mercurial is completed, the branch and the rest of the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; repository will be converted to Mercurial. We would rather just
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; do the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; branch now instead of wait for that to be completed.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; So this is just a &quot;heads up&quot;. Please let us know if there are any
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; concerns
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with that plan.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph &amp; Jeff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; aka. Mutt &amp; Jeff (for those of you old enough to remember that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; comic strip)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; No wait....that should be Ralph &amp; the Mutt!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5959.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5957.php">Graham, Richard L.: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>In reply to:</strong> <a href="5957.php">Graham, Richard L.: "Re: [OMPI devel] Branching for 1.5.0"</a>
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
