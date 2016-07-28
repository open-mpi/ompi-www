<?
$subject_val = "Re: [OMPI users] Detecting Node Failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 18:18:54 2013" -->
<!-- isoreceived="20130620221854" -->
<!-- sent="Thu, 20 Jun 2013 22:18:48 +0000" -->
<!-- isosent="20130620221848" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Detecting Node Failure" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6956E0_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130620215758.GA3393_at_neuromancer.fritz.box" -->
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
<strong>Subject:</strong> Re: [OMPI users] Detecting Node Failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-20 18:18:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22169.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Previous message:</strong> <a href="22167.php">Andreas Sch&#228;fer: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>In reply to:</strong> <a href="22167.php">Andreas Sch&#228;fer: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22169.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Reply:</strong> <a href="22169.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not at present, no.
<br>
<p>But you might want to look at a fork of the OMPI code base that was exploring fault resilience issues:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://fault-tolerance.org/">http://fault-tolerance.org/</a>
<br>
<p><p>On Jun 20, 2013, at 5:57 PM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; On 14:59 Thu 20 Jun     , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It should detect and abort - what version are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would it be possible to call MPI_Comm_disconnect() in the case the
</span><br>
<span class="quotelev1">&gt; communicator in question is an intercom -- without having OMPI abort?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm asking because if we had a possibility to dynamically
</span><br>
<span class="quotelev1">&gt; connect/disconnect nodes in a robust way, then we could build
</span><br>
<span class="quotelev1">&gt; fault-resilient apps on top of that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; HPC and Grid Computing
</span><br>
<span class="quotelev1">&gt; Chair of Computer Science 3
</span><br>
<span class="quotelev1">&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev1">&gt; +49 9131 85-27910
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22169.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Previous message:</strong> <a href="22167.php">Andreas Sch&#228;fer: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>In reply to:</strong> <a href="22167.php">Andreas Sch&#228;fer: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22169.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Reply:</strong> <a href="22169.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
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
