<?
$subject_val = "Re: [OMPI users] password-less ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 18:44:39 2010" -->
<!-- isoreceived="20100219234439" -->
<!-- sent="Sat, 20 Feb 2010 00:46:27 +0100" -->
<!-- isosent="20100219234627" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] password-less ssh" -->
<!-- id="F471C4B2-7D8F-443B-AA1C-00DCAA001A43_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B7F1AAF.3000200_at_sun.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-19 18:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12113.php">Mark Hahn: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Previous message:</strong> <a href="12111.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
<li><strong>In reply to:</strong> <a href="12111.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12113.php">Mark Hahn: "Re: [OMPI users] password-less ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 20.02.2010 um 00:11 schrieb Eugene Loh:
<br>
<p><span class="quotelev1">&gt; Okay, yes, setting SSH_AUTH_SOCK is the right thing to do, but this  
</span><br>
<span class="quotelev1">&gt; strikes me as clumsy.  I'm trying to understand how things should  
</span><br>
<span class="quotelev1">&gt; be set up so that I don't have to take special action each time I  
</span><br>
<span class="quotelev1">&gt; log in.  Do I do some .login/.logout magic?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, why not just go without a DSA passphrase?  The passphrase only  
</span><br>
<span class="quotelev1">&gt; protects me from root, before whom I am rather powerless anyhow.
</span><br>
<p>you mean, that root could use your ssh-key? When you are having an  
<br>
agent running, root can hijack the created socket in /tmp. A good  
<br>
explanation you can find here:
<br>
<p><a href="http://unixwiz.net/techtips/ssh-agent-forwarding.html">http://unixwiz.net/techtips/ssh-agent-forwarding.html</a>
<br>
<p>KDE and Gnome start the agent automatically, once you use ssh-add  
<br>
(sometimes the graphical ssh-askpass is missing and must be  
<br>
installed). I have somewhere a small script to recover a saved agent  
<br>
configuration once it was started even for non-graphical based  
<br>
sessions. I'll post it later.
<br>
<p>But there is more to dicuss. Some even suggest to encrypt the ~/.ssh/ 
<br>
know_hosts file, so that noone would know where you used to log in  
<br>
once he intruded your account. But most likely it's in the bash  
<br>
history anyway, so there would be a HOSTIGNORE=&quot;ssh*:scp*&quot; necessary  
<br>
in bash. And as a next step, any convenient setting in ~/.ssh/config  
<br>
can't be used to abbreviate the logins... But it's good to use  
<br>
passphrase anyway, although it can be cracked locally by an attempt  
<br>
to change it with `ssh-keygen -y` - no delay by failed login attempt,  
<br>
so it could be really fast...
<br>
<p><p>I also suggest to follow the complete thread starting with:
<br>
<p><a href="http://ftp.beowulf.org/archive/2009-September/026424.html">http://ftp.beowulf.org/archive/2009-September/026424.html</a>
<br>
<p>from
<br>
<p><a href="http://ftp.beowulf.org/archive/2009-September/thread.html">http://ftp.beowulf.org/archive/2009-September/thread.html</a>
<br>
<p>which ended in using hostbased authentication inside a cluster.
<br>
<p><p><span class="quotelev1">&gt; Also, the OMPI FAQ says authorized_keys should have 644  
</span><br>
<span class="quotelev1">&gt; protection.  Out on the web, it appears people advise 600, which  
</span><br>
<span class="quotelev1">&gt; doesn't make sense to me since it just has public keys in it  
</span><br>
<span class="quotelev1">&gt; anyhow.  (My head is starting to spin.)
</span><br>
<p>Correct, 644 is fine.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Kenneth Yoshimoto wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After you start up ssh-agent once, check env for SSH_AUTH_SOCK
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you start a new session and the old ssh-agent is still running,  
</span><br>
<span class="quotelev2">&gt;&gt; try setting SSH_AUTH_SOCK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think there are more refined utilities out there to handle this  
</span><br>
<span class="quotelev2">&gt;&gt; situation...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 19 Feb 2010, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Fri, 19 Feb 2010 13:19:13 -0800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] password-less ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is with regards to <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; category=rsh#ssh-keys
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It says to check if you have an ssh-agent running.  How are you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supposed to do that?  I've tried &quot;ps -u myusername | grep ssh- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; agent&quot;, but didn't know if that's the proper thing to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, it appears that I do *NOT* have an ssh-agent running  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically for me.  How often do I have to start one up?  It  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears that if I start one up and log out and then log back in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; again, the old ssh-agent is still there but not usable.  I have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to start up a new one.  So, do I have to start an ssh-agent each  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time I log in?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or, I could use no DSA passphrase, but that seems to be frowned  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12113.php">Mark Hahn: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Previous message:</strong> <a href="12111.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
<li><strong>In reply to:</strong> <a href="12111.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12113.php">Mark Hahn: "Re: [OMPI users] password-less ssh"</a>
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
