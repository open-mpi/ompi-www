<?
$subject_val = "Re: [OMPI users] OpenMPI without IPoIB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 14:47:24 2011" -->
<!-- isoreceived="20110311194724" -->
<!-- sent="Fri, 11 Mar 2011 16:47:18 -0300" -->
<!-- isosent="20110311194718" -->
<!-- name="Bernardo F Costa" -->
<!-- email="bfcta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI without IPoIB" -->
<!-- id="AANLkTi=WHRGuNETkG_QoHgT1m9DhywMSdMBL9jnGpC25_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] OpenMPI without IPoIB" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI without IPoIB<br>
<strong>From:</strong> Bernardo F Costa (<em>bfcta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-11 14:47:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15850.php">Jeff Squyres: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15848.php">Peter Kjellstr&#246;m: "Re: [OMPI users] QLogic Infiniband : Run switch from ib0 to eth0"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11279.php">Vivek Satpute: "[OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15853.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Reply:</strong> <a href="15853.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have found this thread form two years ago. I am some kind of lost on
<br>
configuring an infiniband cluster for openmpi. What is best: use iboip
<br>
or use native infiniband ibverbs interface ? For now I am using native
<br>
infiniband withou ipoib. But I have lots of problems specially with
<br>
latency in the cluster. Which of these two ipoib or ibverbs is more
<br>
likely to be fault tolerant or stable ?
<br>
<p>On Nov 25, 2009, at 1:03 PM, Don Kerr wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/25/09 02:04, Vivek Satpute wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to execute OpenMPI examples from OFED-1.4 stack and found
</span><br>
<span class="quotelev2">&gt;&gt; that all those
</span><br>
<span class="quotelev2">&gt;&gt; examples uses IPoIB.
</span><br>
<span class="quotelev1">&gt; How are you determining that it is using IPoIB?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to execute MPI applications on only Infiniband
</span><br>
<span class="quotelev2">&gt;&gt; stack i.e. without
</span><br>
<span class="quotelev2">&gt;&gt; using IPoIB module ?
</span><br>
<span class="quotelev2">&gt;&gt; Can we execute MPI applications using libibverbs, librdma, or some
</span><br>
<span class="quotelev2">&gt;&gt; other libraries ?
</span><br>
<span class="quotelev1">&gt; OpenMPI by default will select and use the best available path. If
</span><br>
<span class="quotelev1">&gt; the ibverbs interace is available and operational OpenMPI will use
</span><br>
<span class="quotelev1">&gt; this for off-node MPI communication. If you are concerned that
</span><br>
<span class="quotelev1">&gt; ibverbs is not in use specifically calling it out on the mpirun
</span><br>
<span class="quotelev1">&gt; command line will assure you that it is being used, e.g. &quot;mpirun --
</span><br>
<span class="quotelev1">&gt; mca btl self,sm,openib .... &quot;. This command will instruct OpenMPI to
</span><br>
<span class="quotelev1">&gt; use shared memory for on node communication and openib (ibverbs),
</span><br>
<span class="quotelev1">&gt; for off-node communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Vivek
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="15850.php">Jeff Squyres: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15848.php">Peter Kjellstr&#246;m: "Re: [OMPI users] QLogic Infiniband : Run switch from ib0 to eth0"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11279.php">Vivek Satpute: "[OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15853.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Reply:</strong> <a href="15853.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI without IPoIB"</a>
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
