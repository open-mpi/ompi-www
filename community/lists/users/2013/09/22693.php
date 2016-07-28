<?
$subject_val = "Re: [OMPI users] Debugging Runtime/Ethernet Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 11:05:15 2013" -->
<!-- isoreceived="20130920150515" -->
<!-- sent="Fri, 20 Sep 2013 15:05:14 +0000" -->
<!-- isosent="20130920150514" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging Runtime/Ethernet Problems" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB73284E992_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="523C6070.7000704_at_byu.edu" -->
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
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 11:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22694.php">Ralph Castain: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22692.php">Lloyd Brown: "[OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>In reply to:</strong> <a href="22692.php">Lloyd Brown: "[OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22694.php">Ralph Castain: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Reply:</strong> <a href="22694.php">Ralph Castain: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The trouble is when I try to add some &quot;--mca&quot; parameters to force it to
</span><br>
<span class="quotelev1">&gt; use TCP/Ethernet, the program seems to hang.  I get the headers of the
</span><br>
<span class="quotelev1">&gt; &quot;osu_bw&quot; output, but no results, even on the first case (1 byte payload
</span><br>
<span class="quotelev1">&gt; per packet).  This is occurring on both the IB-enabled nodes, and on the
</span><br>
<span class="quotelev1">&gt; Ethernet-only nodes.  The specific syntax I was using was:  &quot;mpirun
</span><br>
<span class="quotelev1">&gt; --mca btl ^openib --mca btl_tcp_if_exclude ib0 ./osu_bw&quot;
</span><br>
&nbsp;
<br>
When we want to run over TCP and IPoIB on an IB/PSM equipped cluster, we use:
<br>
--mca btl sm --mca btl tcp,self --mca btl_tcp_if_exclude eth0 --mca btl_tcp_if_include ib0 --mca mtl ^psm
<br>
<p>based on this, it looks like the following might work for you:
<br>
--mca btl sm,tcp,self --mca btl_tcp_if_exclude ib0 --mca btl_tcp_if_include eth0 --mca btl ^openib
<br>
<p>If you don't have ib0 ports configured on the IB nodes, probably you don't need the&quot; --mca btl_tcp_if_exclude ib0.&quot;
<br>
<p>-Tom
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem occurs at least with OpenMPI 1.6.3 compiled with GNU 4.4
</span><br>
<span class="quotelev1">&gt; compilers, with 1.6.3 compiled with Intel 13.0.1 compilers, and with
</span><br>
<span class="quotelev1">&gt; 1.6.5 compiled with Intel 13.0.1 compilers.  I haven't tested any other
</span><br>
<span class="quotelev1">&gt; combinations yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas here?  It's very possible this is a system configuration
</span><br>
<span class="quotelev1">&gt; problem, but I don't know where to look.  At this point, any ideas would
</span><br>
<span class="quotelev1">&gt; be welcome, either about the specific situation, or general pointers on
</span><br>
<span class="quotelev1">&gt; mpirun debugging flags to use.  I can't find much in the docs yet on
</span><br>
<span class="quotelev1">&gt; run-time debugging for OpenMPI, as opposed to debugging the application.
</span><br>
<span class="quotelev1">&gt;  Maybe I'm just looking in the wrong place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lloyd Brown
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; Brigham Young University
</span><br>
<span class="quotelev1">&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
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
<li><strong>Next message:</strong> <a href="22694.php">Ralph Castain: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22692.php">Lloyd Brown: "[OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>In reply to:</strong> <a href="22692.php">Lloyd Brown: "[OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22694.php">Ralph Castain: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Reply:</strong> <a href="22694.php">Ralph Castain: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
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
