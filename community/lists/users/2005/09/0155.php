<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 20 11:41:40 2005" -->
<!-- isoreceived="20050920164140" -->
<!-- sent="Tue, 20 Sep 2005 10:41:37 -0600" -->
<!-- isosent="20050920164137" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="[O-MPI users] HOWTO turn of &amp;quot;multi-rail&amp;quot; support at runtime?" -->
<!-- id="20050920164137.GA7216_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-20 11:41:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0156.php">Tim S. Woodall: "Re: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Lisa Glendenning: "Re: [O-MPI users] Compile problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0156.php">Tim S. Woodall: "Re: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>Reply:</strong> <a href="0156.php">Tim S. Woodall: "Re: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I've got a dual-homed IB + GigE connected cluster for which I've built
<br>
a very recent drop of OpenMPI (w/ mvapi support).  I'm having difficulty
<br>
making OMPI solely use native verbs as it's communication between nodes.
<br>
I've tried all incantations of the following mca parameters to no avail:
<br>
<p>&nbsp;&nbsp;&nbsp;--mca btl_tcp_if_exclude &quot;lo,eth0,eth1,ib0,ib1&quot;
<br>
&nbsp;&nbsp;&nbsp;--mca ptl_tcp_if_include &quot;lo,eth0,eth1,ib0,ib1&quot;
<br>
<p>Note I'm putting ib in the list because I really don't wish to use IP/IB;
<br>
OMPI should be able to communicate at the native verbs level, right?  If I
<br>
leave ib0/1 unconfigured on my host, OMPI uses eth0 for its communication.
<br>
If I bring up ib0, OMPI uses both eth0 and ib0!  Is there any way I can
<br>
specify for it to use none of these TCP interfaces?  TIA!
<br>
<p>Daryl
<br>
<p>P.s.  I can send output of ompi_info if that is helpful.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0156.php">Tim S. Woodall: "Re: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Lisa Glendenning: "Re: [O-MPI users] Compile problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0156.php">Tim S. Woodall: "Re: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>Reply:</strong> <a href="0156.php">Tim S. Woodall: "Re: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
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
