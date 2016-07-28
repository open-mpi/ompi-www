<?
$subject_val = "Re: [OMPI users] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 08:18:37 2009" -->
<!-- isoreceived="20090127131837" -->
<!-- sent="Tue, 27 Jan 2009 08:18:30 -0500" -->
<!-- isosent="20090127131830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous OpenFabrics hardware" -->
<!-- id="60A24E78-53C6-4D8A-93D6-2CEBC10C51C8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200901271208.37068.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous OpenFabrics hardware<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 08:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7857.php">Anthony Thevenin: "[OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="7855.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="7855.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7858.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="7858.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is worth clarifying a point in this discussion that I neglected to  
<br>
mention in my initial post: although Open MPI may not work *by  
<br>
default* with heterogeneous HCAs/RNICs, it is quite possible/likely  
<br>
that if you manually configure Open MPI to use the same verbs/hardware  
<br>
settings across all your HCAs/RNICs (assuming that you use a set of  
<br>
values that is compatible with all your hardware) that MPI jobs  
<br>
spanning multiple different kinds of HCAs or RNICs will work fine.
<br>
<p>See this post on the devel list for a few more details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2009/01/5314.php">http://www.open-mpi.org/community/lists/devel/2009/01/5314.php</a>
<br>
<p><p><p>On Jan 27, 2009, at 6:08 AM, Peter Kjellstrom wrote:
<br>
<p><span class="quotelev1">&gt; On Monday 26 January 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The Interop Working Group (IWG) of the OpenFabrics Alliance asked me
</span><br>
<span class="quotelev2">&gt;&gt; to bring a question to the Open MPI user and developer communities:  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; anyone interested in having a single MPI job span HCAs or RNICs from
</span><br>
<span class="quotelev2">&gt;&gt; multiple vendors?  (pardon the cross-posting, but I did want to ask
</span><br>
<span class="quotelev2">&gt;&gt; each group separately -- because the answers may be different)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The interop testing lab at the University of New Hampshire
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.iol.unh.edu/services/testing/ofa/">http://www.iol.unh.edu/services/testing/ofa/</a> ) discovered that  
</span><br>
<span class="quotelev2">&gt;&gt; most (all?)
</span><br>
<span class="quotelev2">&gt;&gt; MPI implementations fail when having a single MPI job span HCAs from
</span><br>
<span class="quotelev2">&gt;&gt; multiple vendors and/or span RNICs from multiple vendors.  I don't  
</span><br>
<span class="quotelev2">&gt;&gt; remember
</span><br>
<span class="quotelev2">&gt;&gt; the exact details (and they may not be public, anyway), but I'm  
</span><br>
<span class="quotelev2">&gt;&gt; pretty sure
</span><br>
<span class="quotelev2">&gt;&gt; that OMPI failed when used with QLogic and Mellanox HCAs in a  
</span><br>
<span class="quotelev2">&gt;&gt; single MPI
</span><br>
<span class="quotelev2">&gt;&gt; job.  This is fairly unsurprising, given how we tune Open MPI's use  
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; OpenFabrics-capable hardware based on our .ini file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my question is: does anyone want/need to support jobs that span
</span><br>
<span class="quotelev2">&gt;&gt; HCAs from multiple vendors and/or RNICs from multiple vendors?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For these three cases:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Different vedor id but same OFED driver and basic chip
</span><br>
<span class="quotelev1">&gt; 2) Same chip vendor, different OFED driver (mthca vs mlx4)
</span><br>
<span class="quotelev1">&gt; 3) Any OFED supported IB HCA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMHO:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Number one should just work. We may at times have some nodes with  
</span><br>
<span class="quotelev1">&gt; HCAs that
</span><br>
<span class="quotelev1">&gt; have been flashed with non-standard/non-vendor firmware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Number two is something I would kind of expect to work. A possible  
</span><br>
<span class="quotelev1">&gt; situation
</span><br>
<span class="quotelev1">&gt; where I'd need it is if I temporarily use an older HCA (mthca) to  
</span><br>
<span class="quotelev1">&gt; get a node
</span><br>
<span class="quotelev1">&gt; going on a cluster with ConnectX (mlx4). Another case could be a  
</span><br>
<span class="quotelev1">&gt; cluster with
</span><br>
<span class="quotelev1">&gt; two partitions with different HCAs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Number three would be nice to have. I think many users would assume  
</span><br>
<span class="quotelev1">&gt; it to
</span><br>
<span class="quotelev1">&gt; work. Why not? They have symmetric software, all nodes run OFED, all  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; working IB... It would have worked if their nodes had had different  
</span><br>
<span class="quotelev1">&gt; kinds of
</span><br>
<span class="quotelev1">&gt; ethernet NICS...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Peter
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7857.php">Anthony Thevenin: "[OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="7855.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="7855.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7858.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="7858.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
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
