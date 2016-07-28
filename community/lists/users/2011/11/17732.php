<?
$subject_val = "Re: [OMPI users] Socket ports";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  9 07:57:17 2011" -->
<!-- isoreceived="20111109125717" -->
<!-- sent="Wed, 9 Nov 2011 07:57:12 -0500" -->
<!-- isosent="20111109125712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Socket ports" -->
<!-- id="67BC2B29-3B87-480B-99FB-9B83651F5795_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF1318CA4D.1F61DBB4-ON85257942.006520D8-85257942.0065CCC0_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Socket ports<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-09 07:57:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17733.php">Jeff Squyres: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="17731.php">Christophe Peyret: "Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon"</a>
<li><strong>In reply to:</strong> <a href="17724.php">Jeffrey A Cummings: "[OMPI users]  Socket ports"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I could swear that we had an FAQ entry about this, but I can't find it.
<br>
<p>It is certainly easiest if you can open random TCP ports between MPI processes in your cluster.  Can your admin open all inbound TCP ports from all nodes in your cluster (this is different than opening up all inbound TCP ports from any IP address)?
<br>
<p>Otherwise, you can try using 4 MCA params:
<br>
<p>btl_tcp_port_min_v4
<br>
btl_tcp_port_range_v4
<br>
oob_tcp_port_min_v4
<br>
oob_tcp_port_range_v4
<br>
<p>The first two control the ports used by MPI communications; the second two control Open MPI's &quot;out of band&quot; command/control messaging.  The help messages for the two BTL params are:
<br>
<p>mca:btl:tcp:param:btl_tcp_port_min_v4:value:1024
<br>
mca:btl:tcp:param:btl_tcp_port_min_v4:data_source:default value
<br>
mca:btl:tcp:param:btl_tcp_port_min_v4:status:writable
<br>
mca:btl:tcp:param:btl_tcp_port_min_v4:help:The minimum port where the TCP BTL will try to bind (default 1024)
<br>
mca:btl:tcp:param:btl_tcp_port_min_v4:deprecated:no
<br>
mca:btl:tcp:param:btl_tcp_port_range_v4:value:64511
<br>
mca:btl:tcp:param:btl_tcp_port_range_v4:data_source:default value
<br>
mca:btl:tcp:param:btl_tcp_port_range_v4:status:writable
<br>
mca:btl:tcp:param:btl_tcp_port_range_v4:help:The number of ports where the TCP BTL will try to bind (default 64511). This parameter together with the port min, define a range of ports where Open MPI will open sockets.
<br>
mca:btl:tcp:param:btl_tcp_port_range_v4:deprecated:no
<br>
<p>Also, if you're running Open MPI v1.4.0, that's pretty old.  You might want to upgrade; the latest stable version is 1.4.4.
<br>
<p><p><p>On Nov 8, 2011, at 1:31 PM, Jeffrey A Cummings wrote:
<br>
<p><span class="quotelev1">&gt; I'm attempting to launch my app via mpirun and a host file to use nodes on multiple 'stand-alone' servers.  mpirun is able to launch my app on all requested nodes on all servers, but my app doesn't seem to be able to communicate via the standard MPI api calls (send , recv, etc).  The problem seems to be that my sysadmin dept has locked down most/all ports for simple socket connections.  They are asking me which specific ports (or range of ports) are required by mpi.  I'm assuming that mpirun used secure sockets to launch my app on all nodes but that my app is not using secure sockets via the MPI calls.  Does any of this make sense?  I'm using version 1.4.0 I think. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Jeff Cummings_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17733.php">Jeff Squyres: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="17731.php">Christophe Peyret: "Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon"</a>
<li><strong>In reply to:</strong> <a href="17724.php">Jeffrey A Cummings: "[OMPI users]  Socket ports"</a>
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
