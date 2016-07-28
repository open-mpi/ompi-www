<?
$subject_val = "Re: [OMPI users] password-less ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 16:26:32 2010" -->
<!-- isoreceived="20100219212632" -->
<!-- sent="Fri, 19 Feb 2010 13:26:27 -0800 (PST)" -->
<!-- isosent="20100219212627" -->
<!-- name="Kenneth Yoshimoto" -->
<!-- email="kenneth_at_[hidden]" -->
<!-- subject="Re: [OMPI users] password-less ssh" -->
<!-- id="Pine.LNX.4.60.1002191322450.32524_at_qe2.sdsc.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B7F0051.6050307_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] password-less ssh<br>
<strong>From:</strong> Kenneth Yoshimoto (<em>kenneth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-19 16:26:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12111.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Previous message:</strong> <a href="12109.php">Eugene Loh: "[OMPI users] password-less ssh"</a>
<li><strong>In reply to:</strong> <a href="12109.php">Eugene Loh: "[OMPI users] password-less ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12111.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Reply:</strong> <a href="12111.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After you start up ssh-agent once, check env for
<br>
SSH_AUTH_SOCK
<br>
<p>If you start a new session and the old ssh-agent is still running,
<br>
try setting SSH_AUTH_SOCK.
<br>
<p>I think there are more refined utilities out there to handle this
<br>
situation...
<br>
<p>Kenneth
<br>
<p>On Fri, 19 Feb 2010, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Date: Fri, 19 Feb 2010 13:19:13 -0800
</span><br>
<span class="quotelev1">&gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] password-less ssh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with regards to <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It says to check if you have an ssh-agent running.  How are you supposed to 
</span><br>
<span class="quotelev1">&gt; do that?  I've tried &quot;ps -u myusername | grep ssh-agent&quot;, but didn't know if 
</span><br>
<span class="quotelev1">&gt; that's the proper thing to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, it appears that I do *NOT* have an ssh-agent running automatically for 
</span><br>
<span class="quotelev1">&gt; me.  How often do I have to start one up?  It appears that if I start one up 
</span><br>
<span class="quotelev1">&gt; and log out and then log back in again, the old ssh-agent is still there but 
</span><br>
<span class="quotelev1">&gt; not usable.  I have to start up a new one.  So, do I have to start an 
</span><br>
<span class="quotelev1">&gt; ssh-agent each time I log in?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, I could use no DSA passphrase, but that seems to be frowned upon.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12111.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Previous message:</strong> <a href="12109.php">Eugene Loh: "[OMPI users] password-less ssh"</a>
<li><strong>In reply to:</strong> <a href="12109.php">Eugene Loh: "[OMPI users] password-less ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12111.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Reply:</strong> <a href="12111.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
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
