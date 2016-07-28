<?
$subject_val = "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 17:30:11 2011" -->
<!-- isoreceived="20110927213011" -->
<!-- sent="Tue, 27 Sep 2011 17:30:03 -0400" -->
<!-- isosent="20110927213003" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB" -->
<!-- id="EBC24CC3-7FCB-46EF-A26A-953F2B362236_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E823A1B.3090801_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 17:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17457.php">German Hoecht: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>Previous message:</strong> <a href="17455.php">Dave Schulz: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>In reply to:</strong> <a href="17454.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17465.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Reply:</strong> <a href="17465.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2011, at 5:03 PM, Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt; To clarify, is IP/Ethernet required, or will IPoIB be used if it's
</span><br>
<span class="quotelev1">&gt; configured on the nodes? Would this make a difference.
</span><br>
<p>IPoIB is fine, although I've heard concerns about its stability at scale.
<br>
<p>The difference that it'll make is that it's generally faster than ethernet.  It never runs at wire IB speed because of the overheads involved, but it's likely to be much faster than 1GB ethernet, for example.
<br>
<p>You can specify which interfaces Open MPI's OOB channel uses with the oob_tcp_if_include MCA parameter.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca oob_tcp_if_include ib0 ...
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="17457.php">German Hoecht: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>Previous message:</strong> <a href="17455.php">Dave Schulz: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>In reply to:</strong> <a href="17454.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17465.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Reply:</strong> <a href="17465.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
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
