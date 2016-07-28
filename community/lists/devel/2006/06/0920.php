<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 12:43:20 2006" -->
<!-- isoreceived="20060602164320" -->
<!-- sent="Fri, 2 Jun 2006 12:42:51 -0400" -->
<!-- isosent="20060602164251" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SIGSTOP and SIGCONT on orted" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C66C_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] SIGSTOP and SIGCONT on orted" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 12:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0921.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe in reply to:</strong> <a href="0913.php">Pak Lui: "[OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot to mention that I completely agree that we don't need (or want)
<br>
to pause/resume the orteds.  This is also in total agreement with the
<br>
checkpoint/restart philosophy: we are only checkpointing and restarting
<br>
the user application(s), not the run-time infrastructure.  There may
<br>
still be quiescing issues within ORTE for checkpointing the user
<br>
applications (per Josh's work and Ralph's explanations), but there's no
<br>
need to actually pause / checkpoint the orteds themselves. 
<br>
<p>As a corollary, this means that we likely will not be able to pause /
<br>
checkpoint in cases where we don't use orteds.  I'm fine with that.
<br>
Currently, the only place where this occurs is on Red Storm, where
<br>
pausing doesn't make sense (I'm not conversant enough with the Red Storm
<br>
architecture to know if they care about checkpointing, and if so, how
<br>
it's handled).
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Pak Lui
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 02, 2006 11:37 AM
</span><br>
<span class="quotelev1">&gt; To: rhc_at_[hidden]; Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] SIGSTOP and SIGCONT on orted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that stopping orted may not be the behavior that we 
</span><br>
<span class="quotelev1">&gt; are looking 
</span><br>
<span class="quotelev1">&gt; for. Instead, we can send the signals to the application processes, 
</span><br>
<span class="quotelev1">&gt; since stopping them is what we are interested in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The idea is to stop the resource consumption by the user 
</span><br>
<span class="quotelev1">&gt; processes once 
</span><br>
<span class="quotelev1">&gt; the stop signal is sent from N1GE, since orted is being an 
</span><br>
<span class="quotelev1">&gt; administrative daemon rather than a running process that's 
</span><br>
<span class="quotelev1">&gt; doing work, 
</span><br>
<span class="quotelev1">&gt; it probably does not need to be accounted for the resource usage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And since 'qrsh' does not issue a 'stop' orted but only give a stop 
</span><br>
<span class="quotelev1">&gt; signal to mpirun, it's really up to mpirun to tell where to give the 
</span><br>
<span class="quotelev1">&gt; stop signal to.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0921.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe in reply to:</strong> <a href="0913.php">Pak Lui: "[OMPI devel] SIGSTOP and SIGCONT on orted"</a>
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
