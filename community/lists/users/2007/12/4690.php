<?
$subject_val = "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 17:20:10 2007" -->
<!-- isoreceived="20071217222010" -->
<!-- sent="Mon, 17 Dec 2007 17:19:50 -0500" -->
<!-- isosent="20071217221950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?" -->
<!-- id="4E2C2D1E-CC7A-477A-9050-F154C9B705D2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1197898526.4945.44.camel_at_nb-sbrighi.cineca.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 17:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4691.php">George Bosilca: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4689.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="4683.php">Marco Sbrighi: "[OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4692.php">Brian Dobbins: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Reply:</strong> <a href="4692.php">Brian Dobbins: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Reply:</strong> <a href="4701.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17, 2007, at 8:35 AM, Marco Sbrighi wrote:
<br>
<p><span class="quotelev1">&gt; I'm using Open MPI 1.2.2 over OFED 1.2 on an 256 nodes, dual Opteron,
</span><br>
<span class="quotelev1">&gt; dual core, Linux cluster. Of course, with Infiniband 4x interconnect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each cluster node is equipped with 4 (or more) ethernet interface,
</span><br>
<span class="quotelev1">&gt; namely 2 gigabit ones plus 2 IPoIB. The two gig are named  eth0,eth1,
</span><br>
<span class="quotelev1">&gt; while the two IPoIB are named ib0,ib1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It happens that the eth0 is a management network, with poor
</span><br>
<span class="quotelev1">&gt; performances, and furthermore we wouldn't use the ib* to carry MPI's
</span><br>
<span class="quotelev1">&gt; traffic (neither OOB or TCP), so we would like the eth1 is used for  
</span><br>
<span class="quotelev1">&gt; open
</span><br>
<span class="quotelev1">&gt; MPI OOB and TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to drive the OOB over only eth1 I've tried various  
</span><br>
<span class="quotelev1">&gt; combinations
</span><br>
<span class="quotelev1">&gt; of oob_tcp_[ex|in]clude MCA statements, starting from the obvious
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; oob_tcp_exclude = lo,eth0,ib0,ib1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then trying the othe obvious:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; oob_tcp_include = eth1
</span><br>
<p>This one statement (_include) should be sufficient.
<br>
<p>Assumedly this(these) statement(s) are in a config file that is being  
<br>
read by Open MPI, such as $HOME/.openmpi/mca-params.conf?
<br>
<p><span class="quotelev1">&gt; and both at the same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Next I've tried the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; oob_tcp_exclude = eth0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but after the job starts, I still have a lot of tcp connections
</span><br>
<span class="quotelev1">&gt; established using eth0 or ib0 or ib1.
</span><br>
<span class="quotelev1">&gt; Furthermore It happens the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [node191:03976] [0,1,14]-[0,1,12] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed: Connection timed out (110) - retrying
</span><br>
<p>This is quite odd.  :-(
<br>
<p><span class="quotelev1">&gt; I've found only a way in order to have tcp connections binded only to
</span><br>
<span class="quotelev1">&gt; the eth1 interface, using both the following MCA directives in the
</span><br>
<span class="quotelev1">&gt; command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun .... --mca oob_tcp_include eth1 --mca oob_tcp_include  
</span><br>
<span class="quotelev1">&gt; lo,eth0,ib0,ib1 .....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This sounds me as bug.
</span><br>
<p>Yes, it does.  Specifying the MCA same param twice on the command line  
<br>
results in undefined behavior -- it will only take one of them, and I  
<br>
assume it'll take the first (but I'd have to check the code to be sure).
<br>
<p><span class="quotelev1">&gt; Is there someone able to reproduce this behaviour?
</span><br>
<span class="quotelev1">&gt; If this is a bug, are there fixes?
</span><br>
<p><p>I'm unfortunately unable to reproduce this behavior.  I have a test  
<br>
cluster with 2 IP interfaces: ib0, eth0.  I have tried several  
<br>
combinations of MCA params with 1.2.2:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--mca oob_tcp_include ib0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mca oob_tcp_include ib0,bogus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mca oob_tcp_include eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mca oob_tcp_include eth0,bogus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mca oob_tcp_exclude ib0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mca oob_tcp_exclude ib0,bogus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mca oob_tcp_exclude eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mca oob_tcp_exclude eth0,bogus
<br>
<p>All do as they are supposed to -- including or excluding ib0 or eth0.
<br>
<p>I do note, however, that the handling of these parameters changed in  
<br>
1.2.3 -- as well as their names.  The names changed to  
<br>
&quot;oob_tcp_if_include&quot; and &quot;oob_tcp_if_exclude&quot; to match other MCA  
<br>
parameter name conventions from other components.
<br>
<p>Could you try with 1.2.3 or 1.2.4 (1.2.4 is the most recent; 1.2.5 is  
<br>
due out &quot;soon&quot; -- it *may* get out before the holiday break, but no  
<br>
promises...)?
<br>
<p>If you can't upgrade, let me know and I can provide a debugging patch  
<br>
that will give us a little more insight into what is happening on your  
<br>
machines.  Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4691.php">George Bosilca: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4689.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="4683.php">Marco Sbrighi: "[OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4692.php">Brian Dobbins: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Reply:</strong> <a href="4692.php">Brian Dobbins: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Reply:</strong> <a href="4701.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
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
