<?
$subject_val = "Re: [OMPI devel] [MTT users]  Open MPI MTT is moving";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 10:50:48 2012" -->
<!-- isoreceived="20121105155048" -->
<!-- sent="Mon, 5 Nov 2012 10:50:43 -0500" -->
<!-- isosent="20121105155043" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [MTT users]  Open MPI MTT is moving" -->
<!-- id="BD41C201-EDD4-4CE8-9610-930152399EB4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEmtvOACMjf9WxwRrFna_7rQY86s+VQ=UP9bF0C_aofAOQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [MTT users]  Open MPI MTT is moving<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 10:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11754.php">Jeff Squyres: "[OMPI devel] MPI-3 feature list"</a>
<li><strong>Previous message:</strong> <a href="11752.php">Josh Hursey: "Re: [OMPI devel] Open MPI MTT is moving"</a>
<li><strong>In reply to:</strong> <a href="11752.php">Josh Hursey: "Re: [OMPI devel] Open MPI MTT is moving"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just want to publicly thank Josh and DongInn (Indiana U. Sys Admin -- the guy who handles all of Open MPI's hosting needs) for all the work that was required to do this move.
<br>
<p>None of you saw all the behind-the-scenes work to make this changeover, but let me tell you: it too many hours of Josh+DongInn's time to make this a smooth operation.  It was a complex, detailed operation that required a LOT of planning.
<br>
<p>Many, many thanks Josh and DongInn!
<br>
<p><p><p><p>On Nov 5, 2012, at 10:46 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; The MTT server migration went well this weekend. I have updated the
</span><br>
<span class="quotelev1">&gt; Open MPI website to redirect you appropriately to the new MTT
</span><br>
<span class="quotelev1">&gt; Reporter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You will need to update your .ini files to submit your tests to the
</span><br>
<span class="quotelev1">&gt; new server at the address below:
</span><br>
<span class="quotelev1">&gt;  <a href="https://mtt.open-mpi.org/submit/">https://mtt.open-mpi.org/submit/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if you experience any problems with the new server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 2, 2012 at 9:26 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Reminder that we will be shutting down the MTT submission and reporter
</span><br>
<span class="quotelev2">&gt;&gt; services this weekend to migrate it to another machine. The MTT
</span><br>
<span class="quotelev2">&gt;&gt; services will go offline at COB today, and be brought back by Monday
</span><br>
<span class="quotelev2">&gt;&gt; morning.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Oct 31, 2012 at 7:54 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** IF YOU RUN MTT, YOU NEED TO READ THIS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Due to some server re-organization at Indiana University (read: our gracious hosting provider), we are moving the Open MPI community MTT database to a new server.  Instead of being found under www.open-mpi.org/mtt/, the OMPI MTT results will soon be located under mtt.open-mpi.org.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh and I have been running tests on the new server and we think it is ready; it's now time to move the rest of the community to it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. In order to make this change, we need some &quot;quiet time&quot; where no one is submitting new MTT results.  As such, we will be shutting down MTT/disallowing new MTT submissions over this upcoming weekend: from COB Friday, 2 Nov 2012 through Monday morning, 5 Nov 2012 (all times US Central).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** Translation: don't expect submissions or queries to work after about 5pm on Friday through about 8am Monday (US Central).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **** Super obvious translation: turn off your MTT runs this weekend.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. After this weekend, you will need to update your MTT submission URL from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="https://mtt.open-mpi.org/submit/">https://mtt.open-mpi.org/submit/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev1">&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11754.php">Jeff Squyres: "[OMPI devel] MPI-3 feature list"</a>
<li><strong>Previous message:</strong> <a href="11752.php">Josh Hursey: "Re: [OMPI devel] Open MPI MTT is moving"</a>
<li><strong>In reply to:</strong> <a href="11752.php">Josh Hursey: "Re: [OMPI devel] Open MPI MTT is moving"</a>
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
