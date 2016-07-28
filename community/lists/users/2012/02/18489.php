<?
$subject_val = "Re: [OMPI users] Strange OpenMPI messages";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 13:07:18 2012" -->
<!-- isoreceived="20120215180718" -->
<!-- sent="Wed, 15 Feb 2012 13:07:13 -0500" -->
<!-- isosent="20120215180713" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange OpenMPI messages" -->
<!-- id="0A02380C-D341-4290-BF07-FDF8E71A845F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALd0-53d9wheFThJgcnfjmm3hQofPi6K6ZTcE_p84tkyHHta8g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange OpenMPI messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 13:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18490.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18488.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>In reply to:</strong> <a href="18486.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18479.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 15, 2012, at 12:50 PM, Tohiko Looka wrote:
<br>
<p><span class="quotelev1">&gt; My computer doesn't have such a service. and I think that's the correct name for Fedora
</span><br>
<span class="quotelev1">&gt; Also, what bugs me is that it used to work with no warnings before restarting my computer.
</span><br>
<p>This seems to imply that *some* OpenFabrics service started upon reboot.  Perhaps it was installed prior to reboot, or perhaps it had been manually stopped before rebooting.
<br>
<p><span class="quotelev1">&gt; I will try to recompile openMPI myself (as opposed to installing it using yum) and see what happens
</span><br>
<p>Either way should be fine.  If you recompile and don't include OpenFabrics support, then the message will obviously go away.  
<br>
<p>But I think the real root of the issue is finding the OpenFabrics service / kernel drivers and stopping it / unloading those drivers.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="18490.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18488.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>In reply to:</strong> <a href="18486.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18479.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
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
