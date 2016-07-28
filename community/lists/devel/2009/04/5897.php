<?
$subject_val = "Re: [OMPI devel] Branching for 1.5.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 06:29:34 2009" -->
<!-- isoreceived="20090429102934" -->
<!-- sent="Wed, 29 Apr 2009 06:29:29 -0400" -->
<!-- isosent="20090429102929" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Branching for 1.5.0" -->
<!-- id="03739C2A-F340-4B08-A85C-EE840802D0FF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200904282232.25027.keller_at_ornl.gov" -->
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
<strong>Date:</strong> 2009-04-29 06:29:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5898.php">Jeff Squyres: "[OMPI devel] r21096"</a>
<li><strong>Previous message:</strong> <a href="5896.php">Caciano Machado: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>In reply to:</strong> <a href="5893.php">Rainer Keller: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5899.php">Ralph Castain: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>Reply:</strong> <a href="5899.php">Ralph Castain: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's let the #include changes settle down a bit and then let's get  
<br>
Greg's stuff in.  Then let's let that settle, and then we'll branch  
<br>
for 1.5.
<br>
<p>On Apr 28, 2009, at 10:32 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; as You may have noticed, the two patches for header cleanup have been
</span><br>
<span class="quotelev1">&gt; committed  (SVN: r21095, r21096). Thanks Ralph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Up to now, the consensus was, that the renaming patches by Gregory  
</span><br>
<span class="quotelev1">&gt; Koenig
</span><br>
<span class="quotelev1">&gt; should be integrated just before branching to minimize drift between  
</span><br>
<span class="quotelev1">&gt; branch
</span><br>
<span class="quotelev1">&gt; and trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now is the time ;-) End of this week, just before the branch is  
</span><br>
<span class="quotelev1">&gt; done, Greg
</span><br>
<span class="quotelev1">&gt; would apply the name changes. Ralph&amp;Jeff, please let us know, when  
</span><br>
<span class="quotelev1">&gt; You'll plan
</span><br>
<span class="quotelev1">&gt; to make the move. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 28 April 2009 12:50:03 pm Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We are ready to branch the next feature release series - tagged  
</span><br>
<span class="quotelev1">&gt; 1.5. Rainer
</span><br>
<span class="quotelev2">&gt; &gt; will be doing a rather intrusive commit later this evening to  
</span><br>
<span class="quotelev1">&gt; cleanup
</span><br>
<span class="quotelev2">&gt; &gt; unnecessary header file dependencies. Once the dust from that  
</span><br>
<span class="quotelev1">&gt; settles
</span><br>
<span class="quotelev2">&gt; &gt; (probably end of the week), we will do the branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For now, the branch will be done via subversion. Once the IU  
</span><br>
<span class="quotelev1">&gt; infrastructure
</span><br>
<span class="quotelev2">&gt; &gt; to support Mercurial is completed, the branch and the rest of the
</span><br>
<span class="quotelev2">&gt; &gt; repository will be converted to Mercurial. We would rather just do  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; branch now instead of wait for that to be completed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So this is just a &quot;heads up&quot;. Please let us know if there are any  
</span><br>
<span class="quotelev1">&gt; concerns
</span><br>
<span class="quotelev2">&gt; &gt; with that plan.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph &amp; Jeff
</span><br>
<span class="quotelev2">&gt; &gt; aka. Mutt &amp; Jeff (for those of you old enough to remember that  
</span><br>
<span class="quotelev1">&gt; comic strip)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No wait....that should be Ralph &amp; the Mutt!
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
<li><strong>Next message:</strong> <a href="5898.php">Jeff Squyres: "[OMPI devel] r21096"</a>
<li><strong>Previous message:</strong> <a href="5896.php">Caciano Machado: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>In reply to:</strong> <a href="5893.php">Rainer Keller: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5899.php">Ralph Castain: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>Reply:</strong> <a href="5899.php">Ralph Castain: "Re: [OMPI devel] Branching for 1.5.0"</a>
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
