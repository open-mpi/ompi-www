<?
$subject_val = "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 11:23:14 2007" -->
<!-- isoreceived="20071218162314" -->
<!-- sent="Tue, 18 Dec 2007 17:12:06 +0100 (MET)" -->
<!-- isosent="20071218161206" -->
<!-- name="Marco Sbrighi" -->
<!-- email="m.sbrighi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?" -->
<!-- id="1197994325.12495.22.camel_at_nb-sbrighi.cineca.it" -->
<!-- inreplyto="4E2C2D1E-CC7A-477A-9050-F154C9B705D2_at_cisco.com" -->
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
<strong>From:</strong> Marco Sbrighi (<em>m.sbrighi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 11:12:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4702.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4700.php">pat.o'bryant_at_[hidden]: "[OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4717.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Reply:</strong> <a href="4717.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2007-12-17 at 17:19 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 17, 2007, at 8:35 AM, Marco Sbrighi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm using Open MPI 1.2.2 over OFED 1.2 on an 256 nodes, dual Opteron,
</span><br>
<span class="quotelev2">&gt; &gt; dual core, Linux cluster. Of course, with Infiniband 4x interconnect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Each cluster node is equipped with 4 (or more) ethernet interface,
</span><br>
<span class="quotelev2">&gt; &gt; namely 2 gigabit ones plus 2 IPoIB. The two gig are named  eth0,eth1,
</span><br>
<span class="quotelev2">&gt; &gt; while the two IPoIB are named ib0,ib1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It happens that the eth0 is a management network, with poor
</span><br>
<span class="quotelev2">&gt; &gt; performances, and furthermore we wouldn't use the ib* to carry MPI's
</span><br>
<span class="quotelev2">&gt; &gt; traffic (neither OOB or TCP), so we would like the eth1 is used for  
</span><br>
<span class="quotelev2">&gt; &gt; open
</span><br>
<span class="quotelev2">&gt; &gt; MPI OOB and TCP.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In order to drive the OOB over only eth1 I've tried various  
</span><br>
<span class="quotelev2">&gt; &gt; combinations
</span><br>
<span class="quotelev2">&gt; &gt; of oob_tcp_[ex|in]clude MCA statements, starting from the obvious
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; oob_tcp_exclude = lo,eth0,ib0,ib1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; then trying the othe obvious:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; oob_tcp_include = eth1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This one statement (_include) should be sufficient.
</span><br>
<p>I agree with your interpretation, but what I'm experimenting here is &quot;it
<br>
should&quot; but in fact it doesn't .....
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assumedly this(these) statement(s) are in a config file that is being  
</span><br>
<span class="quotelev1">&gt; read by Open MPI, such as $HOME/.openmpi/mca-params.conf?
</span><br>
<p>I've tried many combinations: only in $HOME/.openmpi/mca-params.conf,
<br>
only in command line and both; but none seems to work correctly.
<br>
Nevertheless, what I'm expecting is that if something is specified in 
<br>
$HOME/.openmpi/mca-params.conf, then if differently specified in command
<br>
line, the last should be assumed, I think.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and both at the same time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Next I've tried the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; oob_tcp_exclude = eth0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but after the job starts, I still have a lot of tcp connections
</span><br>
<span class="quotelev2">&gt; &gt; established using eth0 or ib0 or ib1.
</span><br>
<span class="quotelev2">&gt; &gt; Furthermore It happens the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   [node191:03976] [0,1,14]-[0,1,12] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev2">&gt; &gt; connection failed: Connection timed out (110) - retrying
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is quite odd.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've found only a way in order to have tcp connections binded only to
</span><br>
<span class="quotelev2">&gt; &gt; the eth1 interface, using both the following MCA directives in the
</span><br>
<span class="quotelev2">&gt; &gt; command line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun .... --mca oob_tcp_include eth1 --mca oob_tcp_include  
</span><br>
<span class="quotelev2">&gt; &gt; lo,eth0,ib0,ib1 .....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This sounds me as bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it does.  Specifying the MCA same param twice on the command line  
</span><br>
<span class="quotelev1">&gt; results in undefined behavior -- it will only take one of them, and I  
</span><br>
<span class="quotelev1">&gt; assume it'll take the first (but I'd have to check the code to be sure).
</span><br>
<p>OK, I can obtain the same behaviour using only one statement: 
<br>
--mca oob_tcp_include eth1,lo,eth0,ib0,ib1
<br>
<p>note that using  --mca mpi_show_mca_params what I'm seeing in the report
<br>
is the same for both statements (twice and single):
<br>
<p>.....
<br>
&nbsp;[node255:30188] oob_tcp_debug=0
<br>
[node255:30188] oob_tcp_include=eth1,lo,eth0,ib0,ib1
<br>
[node255:30188] oob_tcp_exclude=
<br>
.......
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there someone able to reproduce this behaviour?
</span><br>
<span class="quotelev2">&gt; &gt; If this is a bug, are there fixes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unfortunately unable to reproduce this behavior.  I have a test  
</span><br>
<span class="quotelev1">&gt; cluster with 2 IP interfaces: ib0, eth0.  I have tried several  
</span><br>
<span class="quotelev1">&gt; combinations of MCA params with 1.2.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --mca oob_tcp_include ib0
</span><br>
<span class="quotelev1">&gt;     --mca oob_tcp_include ib0,bogus
</span><br>
<span class="quotelev1">&gt;     --mca oob_tcp_include eth0
</span><br>
<span class="quotelev1">&gt;     --mca oob_tcp_include eth0,bogus
</span><br>
<span class="quotelev1">&gt;     --mca oob_tcp_exclude ib0
</span><br>
<span class="quotelev1">&gt;     --mca oob_tcp_exclude ib0,bogus
</span><br>
<span class="quotelev1">&gt;     --mca oob_tcp_exclude eth0
</span><br>
<span class="quotelev1">&gt;     --mca oob_tcp_exclude eth0,bogus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All do as they are supposed to -- including or excluding ib0 or eth0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do note, however, that the handling of these parameters changed in  
</span><br>
<span class="quotelev1">&gt; 1.2.3 -- as well as their names.  The names changed to  
</span><br>
<span class="quotelev1">&gt; &quot;oob_tcp_if_include&quot; and &quot;oob_tcp_if_exclude&quot; to match other MCA  
</span><br>
<span class="quotelev1">&gt; parameter name conventions from other components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you try with 1.2.3 or 1.2.4 (1.2.4 is the most recent; 1.2.5 is  
</span><br>
<span class="quotelev1">&gt; due out &quot;soon&quot; -- it *may* get out before the holiday break, but no  
</span><br>
<span class="quotelev1">&gt; promises...)?
</span><br>
<p>we have 1.2.3 in another cluster and it performs the same behaviour as
<br>
1.2.2 .... (BTW the other cluster has the same eth ifaces)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you can't upgrade, let me know and I can provide a debugging patch  
</span><br>
<span class="quotelev1">&gt; that will give us a little more insight into what is happening on your  
</span><br>
<span class="quotelev1">&gt; machines.  Thanks.
</span><br>
<p>It is quite difficult for us to upgrade the open-mpi now. We have the
<br>
official CISCO packages installed, and I know the 1.2.2-1 is the only
<br>
official CISCO's open-mpi distribution today ....
<br>
<p>In any case I would like to try your debug patch.
<br>
<p>Thanks
<br>
<p>Marco 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
-----------------------------------------------------------------
 Marco Sbrighi  m.sbrighi_at_[hidden]
 HPC Group
 CINECA Interuniversity Computing Centre
 via Magnanelli, 6/3
 40033 Casalecchio di Reno (Bo) ITALY
 tel. 051 6171516
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4702.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4700.php">pat.o'bryant_at_[hidden]: "[OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4717.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Reply:</strong> <a href="4717.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
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
