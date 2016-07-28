<?
$subject_val = "Re: [OMPI users] password-less ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 22 09:27:24 2010" -->
<!-- isoreceived="20100222142724" -->
<!-- sent="Mon, 22 Feb 2010 09:27:18 -0500" -->
<!-- isosent="20100222142718" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] password-less ssh" -->
<!-- id="AEF77F31-A3A9-4B95-9631-6CF0CBD4F7CF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="12267_1266707694_o1KNEnYH002597_Pine.LNX.4.64.1002201746520.20823_at_coffee.psychology.mcmaster.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-22 09:27:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12118.php">Jeff Squyres: "Re: [OMPI users] configure: error: Could not determine size of LOGICAL"</a>
<li><strong>Previous message:</strong> <a href="12116.php">rockhee sung: "[OMPI users] configure: error: Could not determine size of LOGICAL"</a>
<li><strong>In reply to:</strong> <a href="12113.php">Mark Hahn: "Re: [OMPI users] password-less ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12115.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I took a few of the points from this thread and updated the rsh faq entry (I almost fell out of my chair when I saw &quot;lamboot&quot; and &quot;recon&quot; still listed in that entry -- yoinks!).  More updates would be greatly appreciated; could you send a diff against:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/svn/ompi-www/trunk/faq/rsh.inc">http://svn.open-mpi.org/svn/ompi-www/trunk/faq/rsh.inc</a>
<br>
<p><p><p>On Feb 20, 2010, at 6:14 PM, Mark Hahn wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Okay, yes, setting SSH_AUTH_SOCK is the right thing to do, but this strikes
</span><br>
<span class="quotelev2">&gt; &gt; me as clumsy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; normally, you should run ssh-agent only on the machine where you sit.
</span><br>
<span class="quotelev1">&gt; it operates until you logout (you can also tell it to discard keys).
</span><br>
<span class="quotelev1">&gt; ssh-agent is normally part if your X startup sequence, so that all
</span><br>
<span class="quotelev1">&gt; terminals/etc inherit SSH_AUTH_SOCK and can do agent-based operations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to understand how things should be set up so that I
</span><br>
<span class="quotelev2">&gt; &gt; don't have to take special action each time I log in.  Do I do some
</span><br>
<span class="quotelev2">&gt; &gt; .login/.logout magic?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; no, that would be very clumsy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Or, why not just go without a DSA passphrase?  The passphrase only protects
</span><br>
<span class="quotelev2">&gt; &gt; me from root, before whom I am rather powerless anyhow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; unencrypted keys are the moral equivalent of putting your password
</span><br>
<span class="quotelev1">&gt; into a file, in the clear.  anyone who gains access to the file _owns_
</span><br>
<span class="quotelev1">&gt; your accounts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also, the OMPI FAQ says authorized_keys should have 644 protection.  Out on
</span><br>
<span class="quotelev2">&gt; &gt; the web, it appears people advise 600, which doesn't make sense to me since
</span><br>
<span class="quotelev2">&gt; &gt; it just has public keys in it anyhow.  (My head is starting to spin.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it shouldn't be 644, since there's no reason for unrelated users to know
</span><br>
<span class="quotelev1">&gt; what keys permit login to your account.  the answer is also wrong about
</span><br>
<span class="quotelev1">&gt; permissions for home and .ssh directories: there's no ssh reason for
</span><br>
<span class="quotelev1">&gt; either to be readable by group or other.  what ssh is most picky about
</span><br>
<span class="quotelev1">&gt; is that it doesn't want ~, .ssh or .ssh/authorized_keys to be writable,
</span><br>
<span class="quotelev1">&gt; even by group.  that is, no one but the user should be able to alter
</span><br>
<span class="quotelev1">&gt; what keys permit login.  but I can't think of any reason to permit
</span><br>
<span class="quotelev1">&gt; anyone, even in your group, to read .ssh, either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This is with regards to <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this page is not wonderful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a pretty common structure for clusters is that both login and compute nodes
</span><br>
<span class="quotelev1">&gt; are in the same administrative domain.  that is, the same definition of valid
</span><br>
<span class="quotelev1">&gt; users, shared home directory, etc.  as such, the most robust, least-effort
</span><br>
<span class="quotelev1">&gt; use of ssh is to make the compute nodes trust (via hostbased shosts.equiv)
</span><br>
<span class="quotelev1">&gt; the login nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Also, it appears that I do *NOT* have an ssh-agent running automatically
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for me.  How often do I have to start one up?  It appears that if I start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; many desktop distos will start ssh-agent automatically - for instance,
</span><br>
<span class="quotelev1">&gt; .Xclients might do
</span><br>
<span class="quotelev1">&gt;           exec ssh-agent startkde
</span><br>
<span class="quotelev1">&gt; (this means that X starts ssh-agent as a parent to your window manager,
</span><br>
<span class="quotelev1">&gt; the main point of which is that the WM and all the apps it starts will
</span><br>
<span class="quotelev1">&gt; inherit your SSH_AUTH_SOCK setting.  you'll want to run ssh-add as well
</span><br>
<span class="quotelev1">&gt; to actually provide the agent with keys.  when you logout, the agent
</span><br>
<span class="quotelev1">&gt; goes away as it should.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; one up and log out and then log back in again, the old ssh-agent is still
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh-agent should run on your desktop, since you fundamentally must trust
</span><br>
<span class="quotelev1">&gt; the machine you sit at.  you should avoid starting a remote ssh-agent
</span><br>
<span class="quotelev1">&gt; (and should avoid agent forwarding if possible.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; there but not usable.  I have to start up a new one.  So, do I have to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; start an ssh-agent each time I log in?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Or, I could use no DSA passphrase, but that seems to be frowned upon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it's just hazardous.  if the unencrypted private key file never leaves
</span><br>
<span class="quotelev1">&gt; your desktop, it's not entirely stupid, but putting an unencrypted priv key
</span><br>
<span class="quotelev1">&gt; on remote machine or fileserver is just asking to be owned.  (though it is
</span><br>
<span class="quotelev1">&gt; useful to note that the authorized_keys file format can express some pretty
</span><br>
<span class="quotelev1">&gt; powerful restrictions on how the key can be used - only from certain hosts,
</span><br>
<span class="quotelev1">&gt; only to do a certain command, etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards, mark hahn.
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
<li><strong>Next message:</strong> <a href="12118.php">Jeff Squyres: "Re: [OMPI users] configure: error: Could not determine size of LOGICAL"</a>
<li><strong>Previous message:</strong> <a href="12116.php">rockhee sung: "[OMPI users] configure: error: Could not determine size of LOGICAL"</a>
<li><strong>In reply to:</strong> <a href="12113.php">Mark Hahn: "Re: [OMPI users] password-less ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12115.php">Eugene Loh: "Re: [OMPI users] password-less ssh"</a>
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
