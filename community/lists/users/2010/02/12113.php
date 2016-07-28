<?
$subject_val = "Re: [OMPI users] password-less ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 20 18:14:54 2010" -->
<!-- isoreceived="20100220231454" -->
<!-- sent="Sat, 20 Feb 2010 18:14:09 -0500 (EST)" -->
<!-- isosent="20100220231409" -->
<!-- name="Mark Hahn" -->
<!-- email="hahn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] password-less ssh" -->
<!-- id="12267_1266707694_o1KNEnYH002597_Pine.LNX.4.64.1002201746520.20823_at_coffee.psychology.mcmaster.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="27523_1266621057_o1JNAiUg024493_4B7F1AAF.3000200_at_sun.com" -->
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
<strong>From:</strong> Mark Hahn (<em>hahn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-20 18:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12114.php">Rodolfo Chua: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="12112.php">Reuti: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Maybe in reply to:</strong> <a href="12109.php">Eugene Loh: "[OMPI users] password-less ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12117.php">Jeff Squyres: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Reply:</strong> <a href="12117.php">Jeff Squyres: "Re: [OMPI users] password-less ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Okay, yes, setting SSH_AUTH_SOCK is the right thing to do, but this strikes 
</span><br>
<span class="quotelev1">&gt; me as clumsy.
</span><br>
<p>normally, you should run ssh-agent only on the machine where you sit. 
<br>
it operates until you logout (you can also tell it to discard keys). 
<br>
ssh-agent is normally part if your X startup sequence, so that all
<br>
terminals/etc inherit SSH_AUTH_SOCK and can do agent-based operations.
<br>
<p><span class="quotelev1">&gt; I'm trying to understand how things should be set up so that I 
</span><br>
<span class="quotelev1">&gt; don't have to take special action each time I log in.  Do I do some 
</span><br>
<span class="quotelev1">&gt; .login/.logout magic?
</span><br>
<p>no, that would be very clumsy.
<br>
<p><span class="quotelev1">&gt; Or, why not just go without a DSA passphrase?  The passphrase only protects 
</span><br>
<span class="quotelev1">&gt; me from root, before whom I am rather powerless anyhow.
</span><br>
<p>unencrypted keys are the moral equivalent of putting your password
<br>
into a file, in the clear.  anyone who gains access to the file _owns_
<br>
your accounts.
<br>
<p><span class="quotelev1">&gt; Also, the OMPI FAQ says authorized_keys should have 644 protection.  Out on 
</span><br>
<span class="quotelev1">&gt; the web, it appears people advise 600, which doesn't make sense to me since 
</span><br>
<span class="quotelev1">&gt; it just has public keys in it anyhow.  (My head is starting to spin.)
</span><br>
<p>it shouldn't be 644, since there's no reason for unrelated users to know 
<br>
what keys permit login to your account.  the answer is also wrong about
<br>
permissions for home and .ssh directories: there's no ssh reason for 
<br>
either to be readable by group or other.  what ssh is most picky about 
<br>
is that it doesn't want ~, .ssh or .ssh/authorized_keys to be writable,
<br>
even by group.  that is, no one but the user should be able to alter
<br>
what keys permit login.  but I can't think of any reason to permit 
<br>
anyone, even in your group, to read .ssh, either.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; This is with regards to <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
</span><br>
<p>this page is not wonderful.
<br>
<p>a pretty common structure for clusters is that both login and compute nodes
<br>
are in the same administrative domain.  that is, the same definition of valid
<br>
users, shared home directory, etc.  as such, the most robust, least-effort 
<br>
use of ssh is to make the compute nodes trust (via hostbased shosts.equiv)
<br>
the login nodes.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Also, it appears that I do *NOT* have an ssh-agent running automatically 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for me.  How often do I have to start one up?  It appears that if I start
</span><br>
<p>many desktop distos will start ssh-agent automatically - for instance,
<br>
.Xclients might do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exec ssh-agent startkde
<br>
(this means that X starts ssh-agent as a parent to your window manager,
<br>
the main point of which is that the WM and all the apps it starts will
<br>
inherit your SSH_AUTH_SOCK setting.  you'll want to run ssh-add as well
<br>
to actually provide the agent with keys.  when you logout, the agent 
<br>
goes away as it should.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; one up and log out and then log back in again, the old ssh-agent is still
</span><br>
<p>ssh-agent should run on your desktop, since you fundamentally must trust
<br>
the machine you sit at.  you should avoid starting a remote ssh-agent
<br>
(and should avoid agent forwarding if possible.)
<br>
<p><span class="quotelev3">&gt;&gt;&gt; there but not usable.  I have to start up a new one.  So, do I have to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start an ssh-agent each time I log in?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or, I could use no DSA passphrase, but that seems to be frowned upon.
</span><br>
<p>it's just hazardous.  if the unencrypted private key file never leaves 
<br>
your desktop, it's not entirely stupid, but putting an unencrypted priv key
<br>
on remote machine or fileserver is just asking to be owned.  (though it is
<br>
useful to note that the authorized_keys file format can express some pretty
<br>
powerful restrictions on how the key can be used - only from certain hosts,
<br>
only to do a certain command, etc.)
<br>
<p>regards, mark hahn.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12114.php">Rodolfo Chua: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="12112.php">Reuti: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Maybe in reply to:</strong> <a href="12109.php">Eugene Loh: "[OMPI users] password-less ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12117.php">Jeff Squyres: "Re: [OMPI users] password-less ssh"</a>
<li><strong>Reply:</strong> <a href="12117.php">Jeff Squyres: "Re: [OMPI users] password-less ssh"</a>
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
