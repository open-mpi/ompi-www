<?
$subject_val = "Re: [OMPI users] problem about mpirun on two nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 14:31:15 2016" -->
<!-- isoreceived="20160523183115" -->
<!-- sent="Mon, 23 May 2016 14:31:13 -0400" -->
<!-- isosent="20160523183113" -->
<!-- name="douraku_at_[hidden]" -->
<!-- email="douraku_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem about mpirun on two nodes" -->
<!-- id="154dee29be4-1586-ad18_at_webprd-m30.mail.aol.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B2033C1D-8AA4-4823-B984-92756DC1E756_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:douraku_at_[hidden]?Subject=Re:%20[OMPI%20users]%20problem%20about%20mpirun%20on%20two%20nodes"><em>douraku_at_[hidden]</em></a><br>
<strong>Date:</strong> 2016-05-23 14:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29291.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Previous message:</strong> <a href="29289.php">Saliya Ekanayake: "Re: [OMPI users] mpirun java"</a>
<li><strong>In reply to:</strong> <a href="29282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29291.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Reply:</strong> <a href="29291.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, Thank you for your advice.
<br>
<p>By bad. I took the wrong shot, because I tested so many different settings. 
<br>
After I came back to the original network settings, &quot;permission denied', of course disappeared, but the other messages were still there. The master node has two NICs, one for WAN (via another server) with zone=external and the other for the slave node, zone = internal. The NICs on the master are in different subnet.
<br>
NIC on the slave node is set to 'internal'.Their status was confirmed by firewall-cmd --get-active-zones. 
<br>
<p>I temporary stopped firewalld and the error messages disappeared. I saw six processes were running on each node, but now the all processes keep running forever with 100% CPU usage.
<br>
<p><p>-----Original Message-----
<br>
From: Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
To: Open MPI User's List &lt;users_at_[hidden]&gt;
<br>
Sent: Mon, May 23, 2016 9:13 am
<br>
Subject: Re: [OMPI users] problem about mpirun on two nodes
<br>
<p>On May 21, 2016, at 11:31 PM, douraku_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered a problem about mpirun and SSH when using OMPI 1.10.0 compiled with gcc, running on centos7.2.
</span><br>
<span class="quotelev1">&gt; When I execute mpirun on my 2 node cluster, I get the following errors pasted below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [douraku_at_master home]$ mpirun -np 12 a.out
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,gssapi-keyex,gssapi-with-mic).
</span><br>
<p>This is the key right here: you got a permission denied error when you (assumedly) tried to execute on the remote server.
<br>
<p>Triple check your ssh settings to ensure that you can run on the remote server(s) without a password or interactive passphrase entry.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29282.php">http://www.open-mpi.org/community/lists/users/2016/05/29282.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29291.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Previous message:</strong> <a href="29289.php">Saliya Ekanayake: "Re: [OMPI users] mpirun java"</a>
<li><strong>In reply to:</strong> <a href="29282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29291.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Reply:</strong> <a href="29291.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
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
