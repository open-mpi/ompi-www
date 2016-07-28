<?
$subject_val = "Re: [OMPI users] password-less ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 18:09:53 2010" -->
<!-- isoreceived="20100219230953" -->
<!-- sent="Fri, 19 Feb 2010 15:11:43 -0800" -->
<!-- isosent="20100219231143" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] password-less ssh" -->
<!-- id="4B7F1AAF.3000200_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.60.1002191322450.32524_at_qe2.sdsc.edu" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-19 18:11:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12112.php">Reuti: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Previous message:</strong> <a href="12110.php">Kenneth Yoshimoto: "Re: [OMPI users] password-less ssh"</a>
<li><strong>In reply to:</strong> <a href="12110.php">Kenneth Yoshimoto: "Re: [OMPI users] password-less ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12112.php">Reuti: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Reply:</strong> <a href="12112.php">Reuti: "Re: [OMPI users] password-less ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, yes, setting SSH_AUTH_SOCK is the right thing to do, but this 
<br>
strikes me as clumsy.  I'm trying to understand how things should be set 
<br>
up so that I don't have to take special action each time I log in.  Do I 
<br>
do some .login/.logout magic?
<br>
<p>Or, why not just go without a DSA passphrase?  The passphrase only 
<br>
protects me from root, before whom I am rather powerless anyhow.
<br>
<p>Also, the OMPI FAQ says authorized_keys should have 644 protection.  Out 
<br>
on the web, it appears people advise 600, which doesn't make sense to me 
<br>
since it just has public keys in it anyhow.  (My head is starting to spin.)
<br>
<p>Kenneth Yoshimoto wrote:
<br>
<p><span class="quotelev1">&gt; After you start up ssh-agent once, check env for SSH_AUTH_SOCK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you start a new session and the old ssh-agent is still running, try 
</span><br>
<span class="quotelev1">&gt; setting SSH_AUTH_SOCK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think there are more refined utilities out there to handle this 
</span><br>
<span class="quotelev1">&gt; situation...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 19 Feb 2010, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 19 Feb 2010 13:19:13 -0800
</span><br>
<span class="quotelev2">&gt;&gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] password-less ssh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is with regards to 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It says to check if you have an ssh-agent running.  How are you 
</span><br>
<span class="quotelev2">&gt;&gt; supposed to do that?  I've tried &quot;ps -u myusername | grep ssh-agent&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; but didn't know if that's the proper thing to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, it appears that I do *NOT* have an ssh-agent running 
</span><br>
<span class="quotelev2">&gt;&gt; automatically for me.  How often do I have to start one up?  It 
</span><br>
<span class="quotelev2">&gt;&gt; appears that if I start one up and log out and then log back in 
</span><br>
<span class="quotelev2">&gt;&gt; again, the old ssh-agent is still there but not usable.  I have to 
</span><br>
<span class="quotelev2">&gt;&gt; start up a new one.  So, do I have to start an ssh-agent each time I 
</span><br>
<span class="quotelev2">&gt;&gt; log in?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or, I could use no DSA passphrase, but that seems to be frowned upon. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12112.php">Reuti: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Previous message:</strong> <a href="12110.php">Kenneth Yoshimoto: "Re: [OMPI users] password-less ssh"</a>
<li><strong>In reply to:</strong> <a href="12110.php">Kenneth Yoshimoto: "Re: [OMPI users] password-less ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12112.php">Reuti: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Reply:</strong> <a href="12112.php">Reuti: "Re: [OMPI users] password-less ssh"</a>
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
