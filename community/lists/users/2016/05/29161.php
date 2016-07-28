<?
$subject_val = "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 15:44:26 2016" -->
<!-- isoreceived="20160510194426" -->
<!-- sent="Tue, 10 May 2016 15:44:19 -0400" -->
<!-- isosent="20160510194419" -->
<!-- name="Llolsten Kaonga" -->
<!-- email="llk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled" -->
<!-- id="004401d1aaf4$58532080$08f96180$_at_soft-forge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="57323709.5080204_at_cora.nwra.com" -->
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
<strong>From:</strong> Llolsten Kaonga (<em>llk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 15:44:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29162.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29160.php">Orion Poplawski: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29160.php">Orion Poplawski: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29162.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29162.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Orion,
<br>
<p>I actually rather like the new CentOS 7.2 system better and would like to
<br>
not remove firewalld. We will try Gilles' suggestion and see what happens.
<br>
<p>I thank you.
<br>
<pre>
--
Llolsten
-----Original Message-----
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Orion Poplawski
Sent: Tuesday, May 10, 2016 3:31 PM
To: Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] mpirun command won't run unless the firewalld
daemon is disabled
On 05/10/2016 09:24 AM, Llolsten Kaonga wrote:
&gt; Hello Durga,
&gt; 
&gt; As I mentioned earlier, up to version 1.8.2, we would just disable 
&gt; SELinux and the IPv4 firewall and things run smoothly. It was only 
&gt; when we installed version 1.10.2 (CentOS 7.2) that we run into these 
&gt; troubles. CentOS 7.2 no longer seems to bother with the IPv4 firewall, so
you can't do:
&gt; 
&gt;  
&gt; 
&gt; # service iptables save
&gt; 
&gt; # service iptables stop
&gt; 
&gt; # chkconfig iptables off
I'll just note that you can either embrace the new firewalld config (and use
firewall-cmd to open your needed ports) or you can remove firewalld and
install iptables-services and go back to the old iptables method of
configuring the firewall.  If you don't want a firewall at all, just remove
firewalld.
--
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post:
<a href="http://www.open-mpi.org/community/lists/users/2016/05/29160.php">http://www.open-mpi.org/community/lists/users/2016/05/29160.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29162.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29160.php">Orion Poplawski: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29160.php">Orion Poplawski: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29162.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29162.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
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
