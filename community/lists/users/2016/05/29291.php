<?
$subject_val = "Re: [OMPI users] problem about mpirun on two nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 14:37:48 2016" -->
<!-- isoreceived="20160523183748" -->
<!-- sent="Mon, 23 May 2016 18:37:46 +0000" -->
<!-- isosent="20160523183746" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem about mpirun on two nodes" -->
<!-- id="003EFB0A-0008-47EC-BDF9-B0BB8136E5DC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="154dee29be4-1586-ad18_at_webprd-m30.mail.aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem about mpirun on two nodes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 14:37:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29292.php">Claudio Stamile: "Re: [OMPI users] mpirun java"</a>
<li><strong>Previous message:</strong> <a href="29290.php">douraku_at_[hidden]: "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>In reply to:</strong> <a href="29290.php">douraku_at_[hidden]: "Re: [OMPI users] problem about mpirun on two nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to test with some known-good MPI applications first.  Try following the steps in this FAQ item:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">https://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
<br>
<p><p><span class="quotelev1">&gt; On May 23, 2016, at 2:31 PM, douraku_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff, Thank you for your advice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By bad. I took the wrong shot, because I tested so many different settings. 
</span><br>
<span class="quotelev1">&gt; After I came back to the original network settings, &quot;permission denied', of course disappeared, but the other messages were still there. The master node has two NICs, one for WAN (via another server) with zone=external and the other for the slave node, zone = internal. The NICs on the master are in different subnet.
</span><br>
<span class="quotelev1">&gt; NIC on the slave node is set to 'internal'.Their status was confirmed by firewall-cmd --get-active-zones. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I temporary stopped firewalld and the error messages disappeared. I saw six processes were running on each node, but now the all processes keep running forever with 100% CPU usage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI User's List &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Mon, May 23, 2016 9:13 am
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] problem about mpirun on two nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 21, 2016, at 11:31 PM, douraku_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I encountered a problem about mpirun and SSH when using OMPI 1.10.0 compiled with gcc, running on centos7.2.
</span><br>
<span class="quotelev2">&gt;&gt; When I execute mpirun on my 2 node cluster, I get the following errors pasted below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [douraku_at_master home]$ mpirun -np 12 a.out
</span><br>
<span class="quotelev2">&gt;&gt; Permission denied (publickey,gssapi-keyex,gssapi-with-mic).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the key right here: you got a permission denied error when you (assumedly) tried to execute on the remote server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Triple check your ssh settings to ensure that you can run on the remote server(s) without a password or interactive passphrase entry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29282.php">http://www.open-mpi.org/community/lists/users/2016/05/29282.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29290.php">http://www.open-mpi.org/community/lists/users/2016/05/29290.php</a>
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
<li><strong>Next message:</strong> <a href="29292.php">Claudio Stamile: "Re: [OMPI users] mpirun java"</a>
<li><strong>Previous message:</strong> <a href="29290.php">douraku_at_[hidden]: "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>In reply to:</strong> <a href="29290.php">douraku_at_[hidden]: "Re: [OMPI users] problem about mpirun on two nodes"</a>
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
