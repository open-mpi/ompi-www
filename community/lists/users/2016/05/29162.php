<?
$subject_val = "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 15:46:35 2016" -->
<!-- isoreceived="20160510194635" -->
<!-- sent="Tue, 10 May 2016 19:46:32 +0000" -->
<!-- isosent="20160510194632" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled" -->
<!-- id="22D082CF-D526-4A0D-8462-4E77DB58E99E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="004401d1aaf4$58532080$08f96180$_at_soft-forge.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 15:46:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29163.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29161.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29161.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29163.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29163.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI generally needs to be able to communicate on random TCP ports between machines in the MPI job (and the machine where mpirun is invoked, if that is a different machine).
<br>
<p>You could also open your firewall to trust random TCP connections just between the servers in your cluster.
<br>
<p><p><p><span class="quotelev1">&gt; On May 10, 2016, at 3:44 PM, Llolsten Kaonga &lt;llk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Orion,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I actually rather like the new CentOS 7.2 system better and would like to
</span><br>
<span class="quotelev1">&gt; not remove firewalld. We will try Gilles' suggestion and see what happens.
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
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 10, 2016 3:31 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpirun command won't run unless the firewalld
</span><br>
<span class="quotelev1">&gt; daemon is disabled
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/10/2016 09:24 AM, Llolsten Kaonga wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Durga,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I mentioned earlier, up to version 1.8.2, we would just disable 
</span><br>
<span class="quotelev2">&gt;&gt; SELinux and the IPv4 firewall and things run smoothly. It was only 
</span><br>
<span class="quotelev2">&gt;&gt; when we installed version 1.10.2 (CentOS 7.2) that we run into these 
</span><br>
<span class="quotelev2">&gt;&gt; troubles. CentOS 7.2 no longer seems to bother with the IPv4 firewall, so
</span><br>
<span class="quotelev1">&gt; you can't do:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # service iptables save
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # service iptables stop
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # chkconfig iptables off
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll just note that you can either embrace the new firewalld config (and use
</span><br>
<span class="quotelev1">&gt; firewall-cmd to open your needed ports) or you can remove firewalld and
</span><br>
<span class="quotelev1">&gt; install iptables-services and go back to the old iptables method of
</span><br>
<span class="quotelev1">&gt; configuring the firewall.  If you don't want a firewall at all, just remove
</span><br>
<span class="quotelev1">&gt; firewalld.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29160.php">http://www.open-mpi.org/community/lists/users/2016/05/29160.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29161.php">http://www.open-mpi.org/community/lists/users/2016/05/29161.php</a>
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
<li><strong>Next message:</strong> <a href="29163.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29161.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29161.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29163.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29163.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
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
