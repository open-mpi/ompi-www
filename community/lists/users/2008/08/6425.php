<?
$subject_val = "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 14:05:33 2008" -->
<!-- isoreceived="20080825180533" -->
<!-- sent="Mon, 25 Aug 2008 14:05:27 -0400" -->
<!-- isosent="20080825180527" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness" -->
<!-- id="2472E01C-95A9-4869-886C-DDE574C63746_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFB40B3FB0.D119DD47-ON852574B0.0062470B-852574B0.0062A5E5_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-25 14:05:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6426.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Previous message:</strong> <a href="6424.php">Mi Yan: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>In reply to:</strong> <a href="6424.php">Mi Yan: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6426.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that this is something Brad at IBM worked on, wasn't it?  I  
<br>
*think* you may just need the development trunk (i.e., upcoming v1.3),  
<br>
but I won't swear to that.
<br>
<p>Regardless, you need to have OMPI compiled for heterogeneous support  
<br>
because control headers still need to be adjusted for endian-ness,  
<br>
etc. (even if you're only sending MPI_BYTE).
<br>
<p><p>On Aug 25, 2008, at 1:57 PM, Mi Yan wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.2.6 (r17946). Could you plese check which  
</span><br>
<span class="quotelev1">&gt; version works ? Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Mi
</span><br>
<span class="quotelev1">&gt; &lt;graycol.gif&gt;&quot;Brian W. Barrett&quot; &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Brian W. Barrett&quot; &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 08/25/2008 01:44 PM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Greg Rodgers/Poughkeepsie/IBM_at_IBMUS, Brad Benton/Austin/IBM_at_IBMUS
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] RDMA over IB between heterogenous processors with  
</span><br>
<span class="quotelev1">&gt; different endianness
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 25 Aug 2008, Mi Yan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does OpenMPI always use SEND/RECV protocol between heterogeneous
</span><br>
<span class="quotelev2">&gt; &gt; processors with different endianness?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried btl_openib_flags to be 2 , 4 and 6 respectively to allowe  
</span><br>
<span class="quotelev1">&gt; RDMA,
</span><br>
<span class="quotelev2">&gt; &gt; but the bandwidth between the two heterogeneous nodes is slow,  
</span><br>
<span class="quotelev1">&gt; same as
</span><br>
<span class="quotelev2">&gt; &gt; the bandwidth when btl_openib_flags to be 1. Seems to me SEND/RECV  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt; &gt; always used no matter btl_openib_flags is. Can I force OpenMPI to  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev2">&gt; &gt; RDMA between x86 and PPC? I only transfer MPI_BYTE, so we do not  
</span><br>
<span class="quotelev1">&gt; need the
</span><br>
<span class="quotelev2">&gt; &gt; support for endianness.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which version of Open MPI are you using?  In recent versions (I don't
</span><br>
<span class="quotelev1">&gt; remember exactly when the change occured, unfortuantely), the decision
</span><br>
<span class="quotelev1">&gt; between send/recv and rdma was moved from being solely based on the
</span><br>
<span class="quotelev1">&gt; architecture of the remote process to being based on the  
</span><br>
<span class="quotelev1">&gt; architecture and
</span><br>
<span class="quotelev1">&gt; datatype.  It's possible this has been broken again, but there  
</span><br>
<span class="quotelev1">&gt; defintiely
</span><br>
<span class="quotelev1">&gt; was some window (possibly only on the development trunk) when that  
</span><br>
<span class="quotelev1">&gt; worked
</span><br>
<span class="quotelev1">&gt; correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6426.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Previous message:</strong> <a href="6424.php">Mi Yan: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>In reply to:</strong> <a href="6424.php">Mi Yan: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6426.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
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
