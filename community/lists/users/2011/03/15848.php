<?
$subject_val = "Re: [OMPI users] QLogic Infiniband : Run switch from ib0 to eth0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 10:31:13 2011" -->
<!-- isoreceived="20110311153113" -->
<!-- sent="Fri, 11 Mar 2011 16:31:03 +0100" -->
<!-- isosent="20110311153103" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] QLogic Infiniband : Run switch from ib0 to eth0" -->
<!-- id="201103111631.08208.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="009e01cbdf59$978e7450$c6ab5cf0$_at_noveltis.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] QLogic Infiniband : Run switch from ib0 to eth0<br>
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-11 10:31:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15849.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Previous message:</strong> <a href="15847.php">Jeff Squyres: "Re: [OMPI users] Error with an application, miscalculate message sizes"</a>
<li><strong>In reply to:</strong> <a href="15844.php">Thierry LAMOUREUX: "[OMPI users] QLogic Infiniband : Run switch from ib0 to eth0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday, March 10, 2011 08:30:19 pm Thierry LAMOUREUX wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We add recently enhanced our network with Infiniband modules on a six node
</span><br>
<span class="quotelev1">&gt; cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have install all OFED drivers related to our hardware
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have set network IP like following :
</span><br>
<span class="quotelev1">&gt; - eth : 192.168.1.0 / 255.255.255.0
</span><br>
<span class="quotelev1">&gt; - ib : 192.168.70.0 / 255.255.255.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After first tests all seems good. IB interfaces ping each other, ssh and
</span><br>
<span class="quotelev1">&gt; other king of exchanges over IB works well.
</span><br>
<p>A very important thing to realise is that TCP/IP on Infiniband, while quite 
<br>
possible and sometimes useful, has very little to do with running MPI/OpenMPI 
<br>
&quot;using&quot; Infiniband.
<br>
<p>MPI data transport can run on either TCP/IP (btl: tcp) or natively on IB (for 
<br>
Mellanox btl: openib, for Qlogic mtl: psm).
<br>
<p>On top of this job startup uses TCP/IP.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Then we started to run our job thought openmpi (building with --with-openib
</span><br>
<span class="quotelev1">&gt; option) and our first results were very bad.
</span><br>
<p>This builds the openib btl but it wont be used runtime if there's no active ib 
<br>
interface (I'm _NOT_ talking about interface as listed by ifconfig). Check you 
<br>
IB with ibstat or similar.
<br>
<p>Also, while it's possible to run MPI traffic on the openib btl (verbs) on 
<br>
Qlogic cards you'll have to use the psm mtl (psm) for good performance.
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt; After investigations, our system have the following behaviour :
</span><br>
<span class="quotelev1">&gt; - job starts over ib network (few packet are sent)
</span><br>
<span class="quotelev1">&gt; - job switch to eth network (all next packet sent to these interfaces)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We never specified the IP Address of our eth interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We tried to launch our jobs with the following options :
</span><br>
<span class="quotelev1">&gt; - mpirun -hostfile hostfile.list -mca blt openib,self
</span><br>
<span class="quotelev1">&gt; /common_gfs2/script-test.sh
</span><br>
<span class="quotelev1">&gt; - mpirun -hostfile hostfile.list -mca blt openib,sm,self
</span><br>
<span class="quotelev1">&gt; /common_gfs2/script-test.sh
</span><br>
<span class="quotelev1">&gt; - mpirun -hostfile hostfile.list -mca blt openib,self -mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude lo,eth0,eth1,eth2 /common_gfs2/script-test.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The final behaviour remain the same : job is initiated over ib and runs
</span><br>
<span class="quotelev1">&gt; over eth.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We grab performance tests file (osu_bw and osu_latency) and we got not so
</span><br>
<span class="quotelev1">&gt; bad results (see attached files).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had tried plenty of different things but we are stuck : we don't have
</span><br>
<span class="quotelev1">&gt; any error message...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks per advance for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thierry.
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15848/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15849.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Previous message:</strong> <a href="15847.php">Jeff Squyres: "Re: [OMPI users] Error with an application, miscalculate message sizes"</a>
<li><strong>In reply to:</strong> <a href="15844.php">Thierry LAMOUREUX: "[OMPI users] QLogic Infiniband : Run switch from ib0 to eth0"</a>
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
