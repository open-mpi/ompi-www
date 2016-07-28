<?
$subject_val = "Re: [OMPI users] build OpenMPI with OpenIB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 07:18:46 2008" -->
<!-- isoreceived="20080307121846" -->
<!-- sent="Fri, 7 Mar 2008 07:18:02 -0500" -->
<!-- isosent="20080307121802" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] build OpenMPI with OpenIB" -->
<!-- id="A1F668CD-B353-4CE8-AE14-20F4ACE555D9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0803071026030.28982_at_cappuccino.ucs.ed.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] build OpenMPI with OpenIB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-07 07:18:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5155.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5153.php">Gleb Natapov: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="5152.php">Yuan Wan: "[OMPI users] build OpenMPI with OpenIB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 7, 2008, at 5:36 AM, Yuan Wan wrote:
<br>
<p><span class="quotelev1">&gt; I want to build OpenMPI-1.2.5 on my Infiniband cluster which has  
</span><br>
<span class="quotelev1">&gt; OFED-2.1
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I configured OpenMPI as:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/exports/home/local/Cluster-Apps/openmpi/gcc/ 
</span><br>
<span class="quotelev1">&gt; 64/1.2.5 \
</span><br>
<span class="quotelev1">&gt; --enable-shared --enable-static --enable-debug \
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr/local/Cluster-Apps/infinipath/2.1/ofed
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And 'ompi_info | grep openib' only shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MCA btl: openib (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MCA mpool: openib (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<p>This is ok; we changed the name of the mpool component somewhere along  
<br>
the way to be &quot;rdma&quot; (vs. &quot;openib&quot;).
<br>
<p>I see that you're compiling against the InfiniPath OFED -- is there a  
<br>
reason you're not building the ipath Open MPI plugins?  They should  
<br>
give better performance than the openib stuff.  Try
<br>
<p>&nbsp;&nbsp;&nbsp;--with-psm=/usr/local/Cluster-Apps/infinipath/2.1/
<br>
<p>(I don't know if you need to supply more to that path or not)
<br>
<p><span class="quotelev1">&gt; No idea why and if this will cause failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried to run a MPI code with the option &quot;--mca btl  
</span><br>
<span class="quotelev1">&gt; openib,self&quot;, It
</span><br>
<span class="quotelev1">&gt; failed to run with the following messages:
</span><br>
<p>Gleb already replied here...
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
<li><strong>Next message:</strong> <a href="5155.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5153.php">Gleb Natapov: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="5152.php">Yuan Wan: "[OMPI users] build OpenMPI with OpenIB"</a>
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
