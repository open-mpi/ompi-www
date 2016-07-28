<?
$subject_val = "Re: [OMPI devel] new btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 12:25:57 2011" -->
<!-- isoreceived="20110614162557" -->
<!-- sent="Tue, 14 Jun 2011 12:25:52 -0400" -->
<!-- isosent="20110614162552" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] new btl" -->
<!-- id="AADA1BDB-103D-433D-866D-32F1E5C5550F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTik7hwdGfocu0JrBFO46jUcqQSzHzQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] new btl<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-14 12:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9372.php">Xin He I: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="9370.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>In reply to:</strong> <a href="9369.php">Tim Mattox: "Re: [OMPI devel] new btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9379.php">Peter Kjellström: "Re: [OMPI devel] new btl"</a>
<li><strong>Reply:</strong> <a href="9379.php">Peter Kjellström: "Re: [OMPI devel] new btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Tim!
<br>
<p>I should say that if anyone is contemplating writing a new BTL, I'm happy to get on the phone / webex with you for an intro to the OMPI code base, point you in the right direction, etc.  Ping me on/off list and we can setup a time.
<br>
<p>Reading reading reading documentation is all well and good, but sometimes a 30-60 min intro to the huge code base that is OMPI can save you a week's worth of fumbling around trying to divine the original coders' intents.
<br>
<p>Also, note that the mechanisms to start up a job are different than the BTL plugins.  We have a layer devoted to all the run-time support in OMPI: the ORTE later (i.e., orte/ in the code tree).  There are different plugins to write there to launch jobs (as compared to writing a plugin for the underlying MPI point-to-point transports).
<br>
<p><p><p>On Jun 14, 2011, at 11:32 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Hi Larry,
</span><br>
<span class="quotelev1">&gt; Good timing...  Jeff Squyres just posted yesterday about this topic.
</span><br>
<span class="quotelev1">&gt; You can find his suggestions here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9366.php">http://www.open-mpi.org/community/lists/devel/2011/06/9366.php</a>
</span><br>
<span class="quotelev1">&gt; -- Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 14, 2011 at 11:10 AM, Lawrence Stewart
</span><br>
<span class="quotelev1">&gt; &lt;lstewart2_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I apologize for asking elementary questions, I have spent some time looking through the open-mpi.org site and the list archives, without notable success.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am contemplating writing a btl component in order to make OpenMPI work on the fos experimental message-based operating system under construction at csail.  The network semantics provided are reliable, in-order messages to process mailboxes, which may be shared.  This &lt;ought&gt; to be  straightforward, but
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * A search around open-mpi.org did not uncover a &quot;how to write a BTL component&quot; document.  Is there one?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * A quick survey through .../ompi/mca/btl did not uncover an obvious &quot;example&quot;.  Is there one? Or which existing component is the simplest non-rdma one?  It might be that elan is the simplest,
</span><br>
<span class="quotelev2">&gt;&gt; based on source lines, but it is a little tricky to untangle the elan-parts from the open-mpi parts.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The other thing I'll have to tackle is figuring out whether fos has enough of the os interfaces needed by the rest of open-mpi, and how to get the job launch machinery working.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Larry
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  timattox_at_[hidden] || tmattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9372.php">Xin He I: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="9370.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>In reply to:</strong> <a href="9369.php">Tim Mattox: "Re: [OMPI devel] new btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9379.php">Peter Kjellström: "Re: [OMPI devel] new btl"</a>
<li><strong>Reply:</strong> <a href="9379.php">Peter Kjellström: "Re: [OMPI devel] new btl"</a>
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
