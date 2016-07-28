<?
$subject_val = "Re: [OMPI users] some NUMA / affinity questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 13:31:11 2008" -->
<!-- isoreceived="20080324173111" -->
<!-- sent="Mon, 24 Mar 2008 13:30:59 -0400" -->
<!-- isosent="20080324173059" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some NUMA / affinity questions" -->
<!-- id="366B749C-08A9-41FA-8896-0608438F726A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c84311bb0803240329i73c6843g666bb0854dc8d1a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] some NUMA / affinity questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-24 13:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5259.php">Wen Hao Wang: "Re: [OMPI users] RHEL 5.2 and SLES10 SP2 support"</a>
<li><strong>Previous message:</strong> <a href="5257.php">Jeff Squyres: "Re: [OMPI users] RHEL 5.2 and SLES10 SP2 support"</a>
<li><strong>In reply to:</strong> <a href="5256.php">Mark Kosmowski: "[OMPI users] some NUMA / affinity questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2008, at 6:29 AM, Mark Kosmowski wrote:
<br>
<span class="quotelev1">&gt; I have a successful ompi installation and my software runs across my
</span><br>
<span class="quotelev1">&gt; humble cluster of three dual-Opteron (single core) nodes on OpenSUSE
</span><br>
<span class="quotelev1">&gt; 10.2.  I'm planning to upgrade some RAM soon and have been thinking of
</span><br>
<span class="quotelev1">&gt; playing with affinity, since each cpu will have it's own DIMMs after
</span><br>
<span class="quotelev1">&gt; the upgrade.  I have read the FAQ and know to use &quot;--mca
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone 1&quot; to enable affinity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like I am running ompi 1.1.4 (see below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mark_at_LT:~&gt; ompi_info | grep affinity
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.4)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1.4)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: libnuma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this old version of ompi do a good job of implementing affinity
</span><br>
<span class="quotelev1">&gt; or would it behoove me to use the current version if I am interested
</span><br>
<span class="quotelev1">&gt; in trying affinity?
</span><br>
<p>It's the same level of affinity support as in the 1.2 series.
<br>
<p>There are a few affinity upgrades in development, some of which will  
<br>
hit for the v1.3 series, some of which will be later:
<br>
<p>- upgrade to a newer embedded version of PLPA; this probably won't  
<br>
affect you much (will be in v1.3)
<br>
<p>- allow assigning MPI processes to specific socket/core combinations  
<br>
via a file specification (will be in v1.3)
<br>
<p>- have some &quot;better&quot; launch support such that resource managers who  
<br>
implement their own affinity controls (e.g., SLURM) can directly set  
<br>
the affinity for MPI processes (some future version; probably won't be  
<br>
ready for v1.3).
<br>
<p><span class="quotelev1">&gt; What sorts of time gains do people typically see with affinity?  (I'm
</span><br>
<span class="quotelev1">&gt; a chemistry student running planewave solid state calculation software
</span><br>
<span class="quotelev1">&gt; if this helps with the question)
</span><br>
<p>As with everything, it depends.  :-)
<br>
<p>- If you're just running one MPI process per core and you only have  
<br>
one core per socket, you might simply see a &quot;smoothing&quot; of results --  
<br>
meaning that multiple runs of the same job will have slightly more  
<br>
consistent timing results (e.g., less &quot;jitter&quot; in the timings)
<br>
<p>- If you have a NUMA architecture (e.g., AMD) and have multiple NICs,  
<br>
you can play games to get the MPI processes who are actually doing the  
<br>
communicating to be &quot;close&quot; to the NIC in the internal host topology.   
<br>
If your app is using a lot of short messages over low-latency  
<br>
interconnects, this can make a difference.  If you're using TCP, it  
<br>
likely won't make much of a difference.  :-)
<br>
<p><span class="quotelev1">&gt; Lastly, two of the three machines will have all of their DIMM slots
</span><br>
<span class="quotelev1">&gt; populated by equal sized DIMMs.  However, one of my machines has two
</span><br>
<span class="quotelev1">&gt; processors, each of which having four DIMM slots.  This machine will
</span><br>
<span class="quotelev1">&gt; be getting 4 @ 1 Gb DIMMs and 2 @ 2 Gb DIMMs.  i am assuming that the
</span><br>
<span class="quotelev1">&gt; best thing for affinity would be to put all of the 1 Gb DIMMs to one
</span><br>
<span class="quotelev1">&gt; processor and the 2 Gb DIMMs to the other and to put the 2 Gb DIMMs in
</span><br>
<span class="quotelev1">&gt; slots 0 and 1.  Does it matter which processor gets which set of
</span><br>
<span class="quotelev1">&gt; DIMMs?
</span><br>
<p><p>It depends on what your application is doing.  You generally want to  
<br>
have enough &quot;local&quot; RAM for the [MPI] processes that will be running  
<br>
on each socket.
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
<li><strong>Next message:</strong> <a href="5259.php">Wen Hao Wang: "Re: [OMPI users] RHEL 5.2 and SLES10 SP2 support"</a>
<li><strong>Previous message:</strong> <a href="5257.php">Jeff Squyres: "Re: [OMPI users] RHEL 5.2 and SLES10 SP2 support"</a>
<li><strong>In reply to:</strong> <a href="5256.php">Mark Kosmowski: "[OMPI users] some NUMA / affinity questions"</a>
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
