<?
$subject_val = "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 16:11:16 2016" -->
<!-- isoreceived="20160510201116" -->
<!-- sent="Tue, 10 May 2016 16:11:06 -0400" -->
<!-- isosent="20160510201106" -->
<!-- name="Llolsten Kaonga" -->
<!-- email="llk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled" -->
<!-- id="004501d1aaf8$15e733e0$41b59ba0$_at_soft-forge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="22D082CF-D526-4A0D-8462-4E77DB58E99E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled<br>
<strong>From:</strong> Llolsten Kaonga (<em>llk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 16:11:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29164.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29162.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29162.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29164.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29164.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>I think what you suggest is likely exactly what we want to see happen. We
<br>
run the interop tests with at least two servers, sometimes more. We also
<br>
have other devices (InfiniBand or RoCE switches) between the servers.
<br>
<p>I will have to ask a stupid question here but when you suggest that we open
<br>
the firewall to trust random TCP connections, how is that different from
<br>
disabling it? Is there some configuration besides the suggestion by Gilles
<br>
to specify ports or a range of ports?
<br>
<p>I thank you.
<br>
<pre>
--
Llolsten
-----Original Message-----
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
(jsquyres)
Sent: Tuesday, May 10, 2016 3:47 PM
To: Open MPI User's List &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] mpirun command won't run unless the firewalld
daemon is disabled
Open MPI generally needs to be able to communicate on random TCP ports
between machines in the MPI job (and the machine where mpirun is invoked, if
that is a different machine).
You could also open your firewall to trust random TCP connections just
between the servers in your cluster.
&gt; On May 10, 2016, at 3:44 PM, Llolsten Kaonga &lt;llk_at_[hidden]&gt; wrote:
&gt; 
&gt; Hello Orion,
&gt; 
&gt; I actually rather like the new CentOS 7.2 system better and would like 
&gt; to not remove firewalld. We will try Gilles' suggestion and see what
happens.
&gt; 
&gt; I thank you.
&gt; --
&gt; Llolsten
&gt; 
&gt; -----Original Message-----
&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Orion 
&gt; Poplawski
&gt; Sent: Tuesday, May 10, 2016 3:31 PM
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] mpirun command won't run unless the 
&gt; firewalld daemon is disabled
&gt; 
&gt; On 05/10/2016 09:24 AM, Llolsten Kaonga wrote:
&gt;&gt; Hello Durga,
&gt;&gt; 
&gt;&gt; As I mentioned earlier, up to version 1.8.2, we would just disable 
&gt;&gt; SELinux and the IPv4 firewall and things run smoothly. It was only 
&gt;&gt; when we installed version 1.10.2 (CentOS 7.2) that we run into these 
&gt;&gt; troubles. CentOS 7.2 no longer seems to bother with the IPv4 
&gt;&gt; firewall, so
&gt; you can't do:
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; # service iptables save
&gt;&gt; 
&gt;&gt; # service iptables stop
&gt;&gt; 
&gt;&gt; # chkconfig iptables off
&gt; 
&gt; I'll just note that you can either embrace the new firewalld config 
&gt; (and use firewall-cmd to open your needed ports) or you can remove 
&gt; firewalld and install iptables-services and go back to the old 
&gt; iptables method of configuring the firewall.  If you don't want a 
&gt; firewall at all, just remove firewalld.
&gt; 
&gt; --
&gt; Orion Poplawski
&gt; Technical Manager                     303-415-9701 x222
&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
&gt; 3380 Mitchell Lane                       orion_at_[hidden]
&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29160.php">http://www.open-mpi.org/community/lists/users/2016/05/29160.php</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: 
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29161.php">http://www.open-mpi.org/community/lists/users/2016/05/29161.php</a>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post:
<a href="http://www.open-mpi.org/community/lists/users/2016/05/29162.php">http://www.open-mpi.org/community/lists/users/2016/05/29162.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29164.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29162.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29162.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29164.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29164.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
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
