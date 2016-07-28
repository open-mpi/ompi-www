<?
$subject_val = "Re: [OMPI users] Question about RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 06:03:30 2008" -->
<!-- isoreceived="20080606100330" -->
<!-- sent="Fri, 6 Jun 2008 12:03:19 +0200" -->
<!-- isosent="20080606100319" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about RDMA" -->
<!-- id="3a37617f0806060303mc1d5a12g3a4a39f04a310b2f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3a37617f0806060302s4e204f6ak2fe0e3685f1cd010_at_mail.gmail.com" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 06:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5837.php">SLIM H.A.: "[OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5835.php">Matt Hughes: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>Maybe in reply to:</strong> <a href="5829.php">Gabriele Fatigati: "[OMPI users] Question about RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5915.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Reply:</strong> <a href="5915.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
thanks for you reply. I did understand previous questions about RDMA. Ever
<br>
with SKaMPI, i tried to run with mpi_leave_pinned = 1, as you have
<br>
suggested.  But also in this case, execution time is very similar to
<br>
previous case.
<br>
<p>Does it means that SKaMPI, reallocates buffer every time ? For example, with
<br>
&quot;MPI_Bcast-length&quot; test, over 128 procs,  the collective is repeated about
<br>
28 times, increasing buffer size for each step by internal formula, and
<br>
finale buffer size =2097152  K.
<br>
<p>Since there aren't advantages with leave_pinned = 1, it means that SKaMPI
<br>
doesn't allocates buffer of 2097152 K initially, but it allocates small
<br>
buffer and reallocates buffer every time, with more large size. Is it
<br>
possible? If no, which is the cause of similar performance?
<br>
<p>Another question: RDMA pipeline protocol for long messages, in OpenMPI 1.2.6
<br>
is setting by default?
<br>
<p>2008/6/6 Gabriele Fatigati &lt;gabriele.fatigati_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; thanks for you reply. I did understand previous questions about RDMA. Ever
</span><br>
<span class="quotelev1">&gt; with SKaMPI, i tried to run with mpi_leave_pinned = 1, as you have
</span><br>
<span class="quotelev1">&gt; suggested.  But also in this case, execution time is very similar to
</span><br>
<span class="quotelev1">&gt; previous case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does it means that SKaMPI, reallocates buffer every time ? For example,
</span><br>
<span class="quotelev1">&gt; with &quot;MPI_Bcast-length&quot; test, over 128 procs,  the collective is repeated
</span><br>
<span class="quotelev1">&gt; about 28 times, increasing buffer size for each step by internal formula,
</span><br>
<span class="quotelev1">&gt; and finale buffer size =2097152  K.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since there aren't advantages with leave_pinned = 1, it means that SKaMPI
</span><br>
<span class="quotelev1">&gt; doesn't allocates buffer of 2097152 K initially, but it allocates small
</span><br>
<span class="quotelev1">&gt; buffer and reallocates buffer every time, with more large size. Is it
</span><br>
<span class="quotelev1">&gt; possible? If no, which is the cause of similar performance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another question: RDMA pipeline protocol for long messages, in OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2.6 is setting by default?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/6/6 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that &quot;eager&quot; RDMA is only used for short messages -- it's not
</span><br>
<span class="quotelev2">&gt;&gt; really relevant to whether the same user buffers are re-used or not
</span><br>
<span class="quotelev2">&gt;&gt; (the mpi_leave_pinned parameter for long messages is only useful if
</span><br>
<span class="quotelev2">&gt;&gt; long buffers are re-used).  See this FAQ item:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-small-message-rdma">http://www.open-mpi.org/faq/?category=openfabrics#ib-small-message-rdma</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For benchmarks (like SKAMPI) that re-use long buffers, you might want
</span><br>
<span class="quotelev2">&gt;&gt; to use the mpi_leave_pinned MCA parameter:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#running-perf-numbers">http://www.open-mpi.org/faq/?category=tuning#running-perf-numbers</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 5, 2008, at 9:47 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; i'm testing SKaMPI Benchmark on IBM Blade System over Infiniband.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Current version of OpenMPI is 1.2.6
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have tried to disable RDMA setting btl_openib_use_eager_rdma = 0.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But, i have noted that, in MPI collectives execution time, there are
</span><br>
<span class="quotelev3">&gt;&gt; &gt; few difference beetween RDMA active and none. Before tests, I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; expected that with RDMA off, excecution time was more long.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So, i suppose that SKaMPI benchmark does continues reallocation of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; buffers that forbid benefits of RDMA protocol. Indeed, if initial
</span><br>
<span class="quotelev3">&gt;&gt; &gt; buffer address change every time, we have to do very much
</span><br>
<span class="quotelev3">&gt;&gt; &gt; registration of memory pages afterwards decay of perfomance.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I used RDMA pipeline protocol. This protocol should makes no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; assumption about the application reuse of source and target buffers.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But, is it every true?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Parameters net are explained below.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MCA btl: parameter &quot;btl_openib_mpool&quot; (current value: &quot;rdma&quot;)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _ops&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot; (current value:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;16&quot;)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MCA btl: parameter &quot;btl_openib_min_rdma_size&quot; (current value:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;1048576&quot;)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MCA btl: parameter &quot;btl_openib_max_rdma_size&quot; (current value:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;1048576&quot;)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Supercomputing Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; g.fatigati_at_[hidden] _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5836/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5837.php">SLIM H.A.: "[OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5835.php">Matt Hughes: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>Maybe in reply to:</strong> <a href="5829.php">Gabriele Fatigati: "[OMPI users] Question about RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5915.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Reply:</strong> <a href="5915.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
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
