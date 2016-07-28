<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 19:38:14 2006" -->
<!-- isoreceived="20060420233814" -->
<!-- sent="Thu, 20 Apr 2006 19:35:27 -0400" -->
<!-- isosent="20060420233527" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI and TCP port range" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7086B6_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open-MPI and TCP port range" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-20 19:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1107.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Previous message:</strong> <a href="1105.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Maybe in reply to:</strong> <a href="1093.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1108.php">Ralph Castain: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Reply:</strong> <a href="1108.php">Ralph Castain: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Bogdan Costescu
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 20, 2006 10:32 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open-MPI and TCP port range
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 20 Apr 2006, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Right now, there is no way to restrict the port range that Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; will use. ... If this becomes a problem for you (i.e., the random
</span><br>
<span class="quotelev2">&gt; &gt; MPI-chose-the-same-port-as-your-app events happen a lot), let us
</span><br>
<span class="quotelev2">&gt; &gt; know and we can probably put in some controls to work around this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would welcome a discussion about this; on the LAM/MPI lists several
</span><br>
<span class="quotelev1">&gt; people asked for a limited port range to allow them to pass through
</span><br>
<span class="quotelev1">&gt; firewalls or to do tunneling.
</span><br>
<p>Recall that we didn't end up doing this in LAM because limiting the port
<br>
ranges is not necessarily sufficient to allow you to run parallel
<br>
computing spanning firewalls.  The easiest solution is to have a single
<br>
routing entity that can be exposed publicly (in front of the firewall,
<br>
either virtually or physically) that understands MPI -- so that MPI
<br>
processes outside the firewall can send to this entity and it routes the
<br>
messages to the appropriate back-end MPI process.  This routable entity
<br>
does not exist for LAM (*), and does not yet exist for Open MPI (there
<br>
have been discussions about creating it, but nothing has been done about
<br>
it).
<br>
<p>(*) Disclaimer: the run-time environment for LAM actually does support
<br>
this kind of routing, but we stopped actively maintaining it years ago
<br>
-- it may or may not work at the MPI layer.
<br>
<p>Other scenarios are also possible, two of which include:
<br>
<p>1. make a virtual public IP address in front of the firewall for each
<br>
back-end node.  MPI processes who send data to the public IP address
<br>
will be routed [by the firewall] back to the back-end node.
<br>
<p>2. use a single virtual public IP address in front of the firewall with
<br>
N ports open.  MPI processes who send data to the public IP address
<br>
dispatch to the back-end node [by the firewall] based on the port
<br>
number.
<br>
<p>Both of these require opening a bunch of holes in the firewall which is
<br>
at least somewhat unattractive.
<br>
<p>So probably the best solution is to have an MPI-level routable entity
<br>
that can do this stuff.  Then you only need one public IP address and
<br>
potentially a small number of ports opened.
<br>
<p>That being said, we are not opposed to putting port number controls in
<br>
Open MPI.  Especially if it really is a problem for someone, not just a
<br>
hypothetical problem ;-).  But such controls should not be added to
<br>
support firewalled operations, because -- at a minimum -- unless you do
<br>
a bunch of other firewall configuration, it will not be enough.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1107.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Previous message:</strong> <a href="1105.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Maybe in reply to:</strong> <a href="1093.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1108.php">Ralph Castain: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Reply:</strong> <a href="1108.php">Ralph Castain: "Re: [OMPI users] Open-MPI and TCP port range"</a>
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
