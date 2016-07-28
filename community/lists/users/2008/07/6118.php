<?
$subject_val = "Re: [OMPI users] Can't use tcp instead of openib/infinipath";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 17:12:26 2008" -->
<!-- isoreceived="20080723211226" -->
<!-- sent="Wed, 23 Jul 2008 17:12:20 -0400" -->
<!-- isosent="20080723211220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't use tcp instead of openib/infinipath" -->
<!-- id="48611D34-C8AF-4910-BD06-64C5BCCB6952_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4881CAD1.809_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't use tcp instead of openib/infinipath<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 17:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6119.php">Jeff Squyres: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Previous message:</strong> <a href="6117.php">Brian Dobbins: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>In reply to:</strong> <a href="6093.php">Bill Broadley: "[OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6121.php">Bill Broadley: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Reply:</strong> <a href="6121.php">Bill Broadley: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 19, 2008, at 7:06 AM, Bill Broadley wrote:
<br>
<p><span class="quotelev1">&gt; I built openib-1.2.6 on centos-5.2 with gcc-4.3.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did a tar xvzf, cd openib-1.2.6, mkdir obj, cd obj:
</span><br>
<span class="quotelev1">&gt; (I put gcc-4.3.1/bin first in my path)
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=/opt/pkg/openmpi-1.2.6 --enable-shared -- 
</span><br>
<span class="quotelev1">&gt; enable-debug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I look in config.log I see:
</span><br>
<span class="quotelev1">&gt; MCA_btl_ALL_COMPONENTS=' self sm gm mvapi mx openib portals tcp udapl'
</span><br>
<span class="quotelev1">&gt; MCA_btl_DSO_COMPONENTS=' self sm openib tcp'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So both openib and tcp are available and have many parameters under
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl tcp
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet, when I run a MPI program I can't get use TCP:
</span><br>
<span class="quotelev1">&gt; # which mpirun
</span><br>
<span class="quotelev1">&gt; /opt/pkg/openmpi-1.2.6/bin/mpirun
</span><br>
<span class="quotelev1">&gt; # mpirun -mca btl ^openib -np 2 -machinefile m ./relay 1
</span><br>
<span class="quotelev1">&gt; compute-0-1.local compute-0-0.local
</span><br>
<span class="quotelev1">&gt; size=    1, 131072 hops, 2 nodes in  0.304 sec ( 2.320 us/hop)    
</span><br>
<span class="quotelev1">&gt; 1683 KB/sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or if I try the inverse:
</span><br>
<span class="quotelev1">&gt; # mpirun -mca btl self,tcp -np 2 -machinefile m ./relay 1
</span><br>
<span class="quotelev1">&gt; compute-0-1.local compute-0-0.local
</span><br>
<span class="quotelev1">&gt; size=    1, 131072 hops, 2 nodes in  0.313 sec ( 2.386 us/hop)    
</span><br>
<span class="quotelev1">&gt; 1637 KB/sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.3us is definitely faster than GigE.  I don't have IPoverIB setup,  
</span><br>
<span class="quotelev1">&gt; ifconfig -a shows ib0, but it has no IP address.
</span><br>
<p><p>Sorry for the delay in replying.
<br>
<p>What exactly is the relay program timing?  Can you run a standard  
<br>
benchmark like NetPIPE, perchance?  (<a href="http://www.scl.ameslab.gov/">http://www.scl.ameslab.gov/</a> 
<br>
netpipe/)
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
<li><strong>Next message:</strong> <a href="6119.php">Jeff Squyres: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Previous message:</strong> <a href="6117.php">Brian Dobbins: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>In reply to:</strong> <a href="6093.php">Bill Broadley: "[OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6121.php">Bill Broadley: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Reply:</strong> <a href="6121.php">Bill Broadley: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
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
