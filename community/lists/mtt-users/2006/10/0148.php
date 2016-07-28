<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 12:27:57 2006" -->
<!-- isoreceived="20061018162757" -->
<!-- sent="Wed, 18 Oct 2006 12:27:41 -0400" -->
<!-- isosent="20061018162741" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Bproc support in MTT" -->
<!-- id="A2A5FCC6-7201-4E5E-9ACF-60FA795D2FA9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6.2.3.4.2.20061018091951.02260fb8_at_cic-mail.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-18 12:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0149.php">James W. Barker: "[MTT users] MTT reporter module settings"</a>
<li><strong>Previous message:</strong> <a href="0147.php">James W. Barker: "[MTT users] Bproc support in MTT"</a>
<li><strong>In reply to:</strong> <a href="0147.php">James W. Barker: "[MTT users] Bproc support in MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0151.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 18, 2006, at 11:28 AM, James W. Barker wrote:
<br>
<p><span class="quotelev1">&gt; In an email exchange with Jeff Squyres regarding setting the number  
</span><br>
<span class="quotelev1">&gt; of processors on a Bproc system the following statement was made:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you running under bproc or some other scheduler?  Right now,  
</span><br>
<span class="quotelev1">&gt; MTT understands SLURM, Torque, and LoadLeveler.  If you're running  
</span><br>
<span class="quotelev1">&gt; under Bproc, we can easily add support for it into MTT (I'll need  
</span><br>
<span class="quotelev1">&gt; some information from you since I don't have any BProc systems  
</span><br>
<span class="quotelev1">&gt; myself).
</span><br>
<p>Just for this instance, I'll reply.  :-)
<br>
<p><span class="quotelev1">&gt; Jeff went on to say:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ethan Mallove is the engineer at Sun who is heading up most of the  
</span><br>
<span class="quotelev1">&gt; MTT efforts these days; the mails go to all of us, so he can reply  
</span><br>
<span class="quotelev1">&gt; even when I'm unavailable.
</span><br>
<p>This is a good characteristic -- I'm *usually* not the MTT guy, but  
<br>
in this case, I can probably do it faster/easier than Ethan.
<br>
<p><span class="quotelev1">&gt; So I am asking what information do you need from me to add Bproc  
</span><br>
<span class="quotelev1">&gt; support to MTT?
</span><br>
<p>I need a list of environment variables that you find in BProc jobs  
<br>
for the following:
<br>
<p>- the presence of this environment variable means that you are  
<br>
definitely running in an BProc job
<br>
- an environment variable (or variables) that can be analyzed to tell  
<br>
me how many processes are supposed to be run in this BProc job
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0149.php">James W. Barker: "[MTT users] MTT reporter module settings"</a>
<li><strong>Previous message:</strong> <a href="0147.php">James W. Barker: "[MTT users] Bproc support in MTT"</a>
<li><strong>In reply to:</strong> <a href="0147.php">James W. Barker: "[MTT users] Bproc support in MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0151.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
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
