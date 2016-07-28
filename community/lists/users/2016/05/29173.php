<?
$subject_val = "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 11:03:40 2016" -->
<!-- isoreceived="20160511150340" -->
<!-- sent="Thu, 12 May 2016 00:03:29 +0900" -->
<!-- isosent="20160511150329" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled" -->
<!-- id="CAAkFZ5vrj1wKq_TC5420TkErnpohKdk4CJcrKvfYS_6cqmEnqw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="002601d1ab8a$8515a5c0$8f40f140$_at_soft-forge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 11:03:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29174.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29172.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29172.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29174.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29174.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not sure I understand your last message.
<br>
<p>if MPI only need the internal port, and there is no firewall protecting
<br>
this port, then simply tell ompi to use it and only it
<br>
mpirun --mca oob_tco_if_include ethxx --mca btl_tcp_if_include ethxx ...
<br>
<p>otherwise, it should work, but only after some internal timeout expire
<br>
(because of dropped packets by the firewall on the external port) and that
<br>
can take a while
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, May 11, 2016, Llolsten Kaonga &lt;llk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Gilles/Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for clarifying this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have three ports but the RoCE traffic is supposed to use one of the
</span><br>
<span class="quotelev1">&gt; internal ports. However, we do allow use of one of the external ports which
</span><br>
<span class="quotelev1">&gt; we assign a static address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Llolsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users [mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;] *On Behalf
</span><br>
<span class="quotelev1">&gt; Of *Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, May 10, 2016 5:06 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] mpirun command won't run unless the firewalld
</span><br>
<span class="quotelev1">&gt; daemon is disabled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was basically suggesting you open a few ports to anyone (e.g. any IP
</span><br>
<span class="quotelev1">&gt; address), and Jeff suggests you open all ports to a few trusted IP
</span><br>
<span class="quotelev1">&gt; addresses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw, how many network ports do you have ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you have two ports (e.g. eth0 for external access and eth1 for private
</span><br>
<span class="quotelev1">&gt; network) and MPI should only use the internal network, then you can allow
</span><br>
<span class="quotelev1">&gt; all traffic on the internal port, and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca oob_tcp_if_include eth1 --mca btl_tcp_if_include eth1 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, May 11, 2016, Llolsten Kaonga &lt;llk_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','llk_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think what you suggest is likely exactly what we want to see happen. We
</span><br>
<span class="quotelev1">&gt; run the interop tests with at least two servers, sometimes more. We also
</span><br>
<span class="quotelev1">&gt; have other devices (InfiniBand or RoCE switches) between the servers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will have to ask a stupid question here but when you suggest that we open
</span><br>
<span class="quotelev1">&gt; the firewall to trust random TCP connections, how is that different from
</span><br>
<span class="quotelev1">&gt; disabling it? Is there some configuration besides the suggestion by Gilles
</span><br>
<span class="quotelev1">&gt; to specify ports or a range of ports?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thank you.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Llolsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 10, 2016 3:47 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI User's List &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpirun command won't run unless the firewalld
</span><br>
<span class="quotelev1">&gt; daemon is disabled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI generally needs to be able to communicate on random TCP ports
</span><br>
<span class="quotelev1">&gt; between machines in the MPI job (and the machine where mpirun is invoked,
</span><br>
<span class="quotelev1">&gt; if
</span><br>
<span class="quotelev1">&gt; that is a different machine).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could also open your firewall to trust random TCP connections just
</span><br>
<span class="quotelev1">&gt; between the servers in your cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 10, 2016, at 3:44 PM, Llolsten Kaonga &lt;llk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Orion,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I actually rather like the new CentOS 7.2 system better and would like
</span><br>
<span class="quotelev2">&gt; &gt; to not remove firewalld. We will try Gilles' suggestion and see what
</span><br>
<span class="quotelev1">&gt; happens.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I thank you.
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Llolsten
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Orion
</span><br>
<span class="quotelev2">&gt; &gt; Poplawski
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, May 10, 2016 3:31 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] mpirun command won't run unless the
</span><br>
<span class="quotelev2">&gt; &gt; firewalld daemon is disabled
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 05/10/2016 09:24 AM, Llolsten Kaonga wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello Durga,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As I mentioned earlier, up to version 1.8.2, we would just disable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SELinux and the IPv4 firewall and things run smoothly. It was only
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when we installed version 1.10.2 (CentOS 7.2) that we run into these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; troubles. CentOS 7.2 no longer seems to bother with the IPv4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; firewall, so
</span><br>
<span class="quotelev2">&gt; &gt; you can't do:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # service iptables save
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # service iptables stop
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # chkconfig iptables off
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'll just note that you can either embrace the new firewalld config
</span><br>
<span class="quotelev2">&gt; &gt; (and use firewall-cmd to open your needed ports) or you can remove
</span><br>
<span class="quotelev2">&gt; &gt; firewalld and install iptables-services and go back to the old
</span><br>
<span class="quotelev2">&gt; &gt; iptables method of configuring the firewall.  If you don't want a
</span><br>
<span class="quotelev2">&gt; &gt; firewall at all, just remove firewalld.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Orion Poplawski
</span><br>
<span class="quotelev2">&gt; &gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev2">&gt; &gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev2">&gt; &gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29160.php">http://www.open-mpi.org/community/lists/users/2016/05/29160.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29161.php">http://www.open-mpi.org/community/lists/users/2016/05/29161.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29162.php">http://www.open-mpi.org/community/lists/users/2016/05/29162.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29163.php">http://www.open-mpi.org/community/lists/users/2016/05/29163.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29173/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29174.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29172.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29172.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29174.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29174.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
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
