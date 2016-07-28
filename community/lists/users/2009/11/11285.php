<?
$subject_val = "Re: [OMPI users] OpenMPI without IPoIB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 25 13:03:25 2009" -->
<!-- isoreceived="20091125180325" -->
<!-- sent="Wed, 25 Nov 2009 13:03:12 -0500" -->
<!-- isosent="20091125180312" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI without IPoIB" -->
<!-- id="4B0D7160.4090605_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="675d290b0911242304m41ddc6a5v82161e219732a9f6_at_mail.gmail.com" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-25 13:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11286.php">Vivek Satpute: "Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma"</a>
<li><strong>Previous message:</strong> <a href="11284.php">Eugene Loh: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>In reply to:</strong> <a href="11279.php">Vivek Satpute: "[OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11345.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11345.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/25/09 02:04, Vivek Satpute wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to execute OpenMPI examples from OFED-1.4 stack and found that 
</span><br>
<span class="quotelev1">&gt; all those
</span><br>
<span class="quotelev1">&gt; examples uses IPoIB.
</span><br>
How are you determining that it is using IPoIB?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to execute MPI applications on only Infiniband stack 
</span><br>
<span class="quotelev1">&gt; i.e. without
</span><br>
<span class="quotelev1">&gt; using IPoIB module ?
</span><br>
<span class="quotelev1">&gt; Can we execute MPI applications using libibverbs, librdma, or some 
</span><br>
<span class="quotelev1">&gt; other libraries ?
</span><br>
OpenMPI by default will select and use the best available path. If the 
<br>
ibverbs interace is available and operational OpenMPI will use this for 
<br>
off-node MPI communication. If you are concerned that ibverbs is not in 
<br>
use specifically calling it out on the mpirun command line will assure 
<br>
you that it is being used, e.g.  &quot;mpirun --mca btl self,sm,openib .... 
<br>
&quot;. This command will instruct OpenMPI to use shared memory for on node 
<br>
communication and openib (ibverbs), for off-node communication.
<br>
<p>-DON
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Vivek
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11285/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11286.php">Vivek Satpute: "Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma"</a>
<li><strong>Previous message:</strong> <a href="11284.php">Eugene Loh: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>In reply to:</strong> <a href="11279.php">Vivek Satpute: "[OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11345.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11345.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
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
