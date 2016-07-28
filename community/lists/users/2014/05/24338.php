<?
$subject_val = "Re: [OMPI users] Intercommunicators Collective Communciation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 20:22:47 2014" -->
<!-- isoreceived="20140510002247" -->
<!-- sent="Sat, 10 May 2014 00:22:46 +0000" -->
<!-- isosent="20140510002246" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intercommunicators Collective Communciation" -->
<!-- id="8402474A-38AC-4AE7-A4B2-15B209DAD6E2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEBucnAOGCoY56j9aeJbfw7MuHhU-Mc3g_VzE+unG3bCrnXhFA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intercommunicators Collective Communciation<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-09 20:22:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24339.php">Spenser Gilliland: "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>Previous message:</strong> <a href="24337.php">Spenser Gilliland: "[OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>In reply to:</strong> <a href="24337.php">Spenser Gilliland: "[OMPI users] Intercommunicators Collective Communciation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24339.php">Spenser Gilliland: "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>Reply:</strong> <a href="24339.php">Spenser Gilliland: "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 9, 2014, at 7:56 PM, Spenser Gilliland &lt;spenser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm having some trouble understanding Intercommunicators with
</span><br>
<span class="quotelev1">&gt; Collective Communication.  Is there a collective routine to express a
</span><br>
<span class="quotelev1">&gt; transfer from all left process to all right processes? or vice versa?
</span><br>
<p>The intercomm collectives are all basically defined as data movement from one group to the other (*and* vice versa), with the obvious exception of Barrier, which has no data movement -- just synchronization.
<br>
<p>The key to understand is (aside from barrier):
<br>
<p>- collectives with intracomms are data movement in the *same* group
<br>
- collectives with intercomms are data movement to the *other* group
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24339.php">Spenser Gilliland: "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>Previous message:</strong> <a href="24337.php">Spenser Gilliland: "[OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>In reply to:</strong> <a href="24337.php">Spenser Gilliland: "[OMPI users] Intercommunicators Collective Communciation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24339.php">Spenser Gilliland: "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>Reply:</strong> <a href="24339.php">Spenser Gilliland: "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
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
