<?
$subject_val = "[OMPI users] Question about RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 09:47:45 2008" -->
<!-- isoreceived="20080605134745" -->
<!-- sent="Thu, 5 Jun 2008 15:47:39 +0200" -->
<!-- isosent="20080605134739" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Question about RDMA" -->
<!-- id="3a37617f0806050647l5bf1e082k2ae1861fd4b5230d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Question about RDMA<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 09:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5830.php">Brock Palen: "Re: [OMPI users] libibverbs"</a>
<li><strong>Previous message:</strong> <a href="5828.php">Jeff Squyres: "Re: [OMPI users] libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5833.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Reply:</strong> <a href="5833.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Maybe reply:</strong> <a href="5836.php">Gabriele Fatigati: "Re: [OMPI users] Question about RDMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
i'm testing SKaMPI Benchmark on IBM Blade System over Infiniband. Current
<br>
version of OpenMPI is 1.2.6
<br>
I have tried to disable RDMA setting btl_openib_use_eager_rdma = 0. But, i
<br>
have noted that, in MPI collectives execution time, there are few difference
<br>
beetween RDMA active and none. Before tests, I expected that with RDMA off,
<br>
excecution time was more long.
<br>
<p>So, i suppose that SKaMPI benchmark does continues reallocation of buffers
<br>
that forbid benefits of RDMA protocol. Indeed, if initial buffer address
<br>
change every time, we have to do very much registration of memory pages
<br>
afterwards decay of perfomance.
<br>
<p>I used RDMA pipeline protocol. This protocol should makes no assumption
<br>
about the application reuse of source and target buffers. But, is it every
<br>
true?
<br>
Parameters net are explained below.
<br>
<p>MCA btl: parameter &quot;btl_openib_mpool&quot; (current value: &quot;rdma&quot;)
<br>
MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst_ops&quot; (current value: &quot;4&quot;)
<br>
MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot; (current value: &quot;1&quot;)
<br>
MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot; (current value: &quot;16&quot;)
<br>
MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot; (current value: &quot;16&quot;)
<br>
MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot; (current value: &quot;16&quot;)
<br>
MCA btl: parameter &quot;btl_openib_min_rdma_size&quot; (current value: &quot;1048576&quot;)
<br>
MCA btl: parameter &quot;btl_openib_max_rdma_size&quot; (current value: &quot;1048576&quot;)
<br>
<p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5829/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5830.php">Brock Palen: "Re: [OMPI users] libibverbs"</a>
<li><strong>Previous message:</strong> <a href="5828.php">Jeff Squyres: "Re: [OMPI users] libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5833.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Reply:</strong> <a href="5833.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Maybe reply:</strong> <a href="5836.php">Gabriele Fatigati: "Re: [OMPI users] Question about RDMA"</a>
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
