<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 12 08:27:22 2006" -->
<!-- isoreceived="20060512122722" -->
<!-- sent="Fri, 12 May 2006 08:27:27 -0400" -->
<!-- isosent="20060512122727" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and OpenIB" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF83F9D1_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open MPI and OpenIB" -->
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
<strong>Date:</strong> 2006-05-12 08:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1241.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1239.php">Brian Barrett: "Re: [OMPI users] 64-Bit MIPS support patch"</a>
<li><strong>Maybe in reply to:</strong> <a href="1229.php">Gurhan Ozen: "[OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1241.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Reply:</strong> <a href="1241.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Gurhan Ozen
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 11, 2006 4:11 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI and OpenIB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At any rate though, --mca btl ib,self looks like the traffic goes over
</span><br>
<span class="quotelev1">&gt; ethernet device .. I couldn't find any documentation on the &quot;self&quot;
</span><br>
<span class="quotelev1">&gt; argument of mca, does it mean to explore alternatives if the desired
</span><br>
<span class="quotelev1">&gt; btl (in this case ib) doesn't work?
</span><br>
<p>Note that Open MPI still does use TCP for &quot;setup&quot; information; a bunch
<br>
of data is passed around via mpirun and MPI_INIT for all the processes
<br>
to find each other, etc.  Similar control messages get passed around
<br>
during MPI_FINALIZE as well.
<br>
<p>This is likely the TCP traffice that you are seeing.  However, rest
<br>
assured that the btl MCA parameter will unequivocally set the network
<br>
that MPI traffic will use.
<br>
<p>I've updated the on-line FAQ with regards to the &quot;self&quot; BTL module.
<br>
<p>And finally, a man page is available for mpirun in the [not yet
<br>
released] Open MPI 1.1 (see
<br>
<a href="http://svn.open-mpi.org/svn/ompi/trunk/orte/tools/orterun/orterun.1">http://svn.open-mpi.org/svn/ompi/trunk/orte/tools/orterun/orterun.1</a>).
<br>
It should be pretty much the same for 1.0.  One notable difference is I
<br>
just recently added a -nolocal option (not yet on the trunk, but likely
<br>
will be in the not-distant future) that does not exist in 1.0.
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
<li><strong>Next message:</strong> <a href="1241.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1239.php">Brian Barrett: "Re: [OMPI users] 64-Bit MIPS support patch"</a>
<li><strong>Maybe in reply to:</strong> <a href="1229.php">Gurhan Ozen: "[OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1241.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Reply:</strong> <a href="1241.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
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
