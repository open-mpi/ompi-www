<?
$subject_val = "Re: [OMPI users] Question about RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 20:18:27 2008" -->
<!-- isoreceived="20080606001827" -->
<!-- sent="Thu, 5 Jun 2008 20:17:27 -0400" -->
<!-- isosent="20080606001727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about RDMA" -->
<!-- id="3345FE54-42C9-4F07-A719-AD611AE8FB93_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0806050647l5bf1e082k2ae1861fd4b5230d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about RDMA<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 20:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5834.php">Doug Reeder: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI users] Documentation on running under slurm"</a>
<li><strong>In reply to:</strong> <a href="5829.php">Gabriele Fatigati: "[OMPI users] Question about RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5836.php">Gabriele Fatigati: "Re: [OMPI users] Question about RDMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that &quot;eager&quot; RDMA is only used for short messages -- it's not  
<br>
really relevant to whether the same user buffers are re-used or not  
<br>
(the mpi_leave_pinned parameter for long messages is only useful if  
<br>
long buffers are re-used).  See this FAQ item:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-small-message-rdma">http://www.open-mpi.org/faq/?category=openfabrics#ib-small-message-rdma</a>
<br>
<p>For benchmarks (like SKAMPI) that re-use long buffers, you might want  
<br>
to use the mpi_leave_pinned MCA parameter:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#running-perf-numbers">http://www.open-mpi.org/faq/?category=tuning#running-perf-numbers</a>
<br>
<p><p>On Jun 5, 2008, at 9:47 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; i'm testing SKaMPI Benchmark on IBM Blade System over Infiniband.  
</span><br>
<span class="quotelev1">&gt; Current version of OpenMPI is 1.2.6
</span><br>
<span class="quotelev1">&gt; I have tried to disable RDMA setting btl_openib_use_eager_rdma = 0.  
</span><br>
<span class="quotelev1">&gt; But, i have noted that, in MPI collectives execution time, there are  
</span><br>
<span class="quotelev1">&gt; few difference beetween RDMA active and none. Before tests, I  
</span><br>
<span class="quotelev1">&gt; expected that with RDMA off, excecution time was more long.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, i suppose that SKaMPI benchmark does continues reallocation of  
</span><br>
<span class="quotelev1">&gt; buffers that forbid benefits of RDMA protocol. Indeed, if initial  
</span><br>
<span class="quotelev1">&gt; buffer address change every time, we have to do very much  
</span><br>
<span class="quotelev1">&gt; registration of memory pages afterwards decay of perfomance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used RDMA pipeline protocol. This protocol should makes no  
</span><br>
<span class="quotelev1">&gt; assumption about the application reuse of source and target buffers.  
</span><br>
<span class="quotelev1">&gt; But, is it every true?
</span><br>
<span class="quotelev1">&gt; Parameters net are explained below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_mpool&quot; (current value: &quot;rdma&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst
</span><br>
<span class="quotelev1">&gt; _ops&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_min_rdma_size&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_max_rdma_size&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden] _______________________________________________
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
<li><strong>Next message:</strong> <a href="5834.php">Doug Reeder: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI users] Documentation on running under slurm"</a>
<li><strong>In reply to:</strong> <a href="5829.php">Gabriele Fatigati: "[OMPI users] Question about RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5836.php">Gabriele Fatigati: "Re: [OMPI users] Question about RDMA"</a>
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
