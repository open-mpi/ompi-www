<?
$subject_val = "Re: [OMPI users] Debugging Runtime/Ethernet Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 11:17:58 2013" -->
<!-- isoreceived="20130920151758" -->
<!-- sent="Fri, 20 Sep 2013 08:17:43 -0700" -->
<!-- isosent="20130920151743" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging Runtime/Ethernet Problems" -->
<!-- id="917B367F-1687-4A91-B173-DE1BBA7C7866_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB73284E992_at_FMSMSX104.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging Runtime/Ethernet Problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 11:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22695.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="22693.php">Elken, Tom: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>In reply to:</strong> <a href="22693.php">Elken, Tom: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Reply:</strong> <a href="22696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think you are allowed to specify both include and exclude options at the same time as they conflict - you should either exclude ib0 or include eth0 (or whatever).
<br>
<p>My guess is that the various nodes are trying to communicate across disjoint networks. We've seen that before when, for example, eth0 on one node is on one subnet, and eth0 on another node is on a different subnet. You might look for that kind of arrangement.
<br>
<p><p>On Sep 20, 2013, at 8:05 AM, &quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The trouble is when I try to add some &quot;--mca&quot; parameters to force it to
</span><br>
<span class="quotelev2">&gt;&gt; use TCP/Ethernet, the program seems to hang.  I get the headers of the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;osu_bw&quot; output, but no results, even on the first case (1 byte payload
</span><br>
<span class="quotelev2">&gt;&gt; per packet).  This is occurring on both the IB-enabled nodes, and on the
</span><br>
<span class="quotelev2">&gt;&gt; Ethernet-only nodes.  The specific syntax I was using was:  &quot;mpirun
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl ^openib --mca btl_tcp_if_exclude ib0 ./osu_bw&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When we want to run over TCP and IPoIB on an IB/PSM equipped cluster, we use:
</span><br>
<span class="quotelev1">&gt; --mca btl sm --mca btl tcp,self --mca btl_tcp_if_exclude eth0 --mca btl_tcp_if_include ib0 --mca mtl ^psm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; based on this, it looks like the following might work for you:
</span><br>
<span class="quotelev1">&gt; --mca btl sm,tcp,self --mca btl_tcp_if_exclude ib0 --mca btl_tcp_if_include eth0 --mca btl ^openib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't have ib0 ports configured on the IB nodes, probably you don't need the&quot; --mca btl_tcp_if_exclude ib0.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem occurs at least with OpenMPI 1.6.3 compiled with GNU 4.4
</span><br>
<span class="quotelev2">&gt;&gt; compilers, with 1.6.3 compiled with Intel 13.0.1 compilers, and with
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.5 compiled with Intel 13.0.1 compilers.  I haven't tested any other
</span><br>
<span class="quotelev2">&gt;&gt; combinations yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas here?  It's very possible this is a system configuration
</span><br>
<span class="quotelev2">&gt;&gt; problem, but I don't know where to look.  At this point, any ideas would
</span><br>
<span class="quotelev2">&gt;&gt; be welcome, either about the specific situation, or general pointers on
</span><br>
<span class="quotelev2">&gt;&gt; mpirun debugging flags to use.  I can't find much in the docs yet on
</span><br>
<span class="quotelev2">&gt;&gt; run-time debugging for OpenMPI, as opposed to debugging the application.
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I'm just looking in the wrong place.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Lloyd Brown
</span><br>
<span class="quotelev2">&gt;&gt; Systems Administrator
</span><br>
<span class="quotelev2">&gt;&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev2">&gt;&gt; Brigham Young University
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22695.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="22693.php">Elken, Tom: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>In reply to:</strong> <a href="22693.php">Elken, Tom: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Reply:</strong> <a href="22696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
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
