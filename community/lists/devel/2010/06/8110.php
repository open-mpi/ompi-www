<?
$subject_val = "[OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 11:09:22 2010" -->
<!-- isoreceived="20100618150922" -->
<!-- sent="Fri, 18 Jun 2010 17:10:49 +0200" -->
<!-- isosent="20100618151049" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs" -->
<!-- id="1276873849.1825.253.camel_at_B014522" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 11:10:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8111.php">Lisandro Dalcin: "[OMPI devel] MPI_Type_free(MPI_BYTE) not failing after MPI_Win_create()"</a>
<li><strong>Previous message:</strong> <a href="8109.php">Ralph Castain: "Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8116.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Reply:</strong> <a href="8116.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Reply:</strong> <a href="8117.php">Shamis, Pavel: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in the	SRQs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Reference is the v1.5 branch
<br>
<p>If an SRQ has the following settings: S,&lt;size&gt;,4,2,1
<br>
<p>1) setup_qps() sets the following:
<br>
mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_num=4
<br>
mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init=rd_num/4=1
<br>
<p>2) create_srq() sets the following:
<br>
openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = 1 (rd_init value)
<br>
openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = rd_curr_num - (rd_curr_num
<br>
<span class="quotelev2">&gt;&gt; 2) = rd_curr_num = 1
</span><br>
<p>3) if mca_btl_openib_post_srr() is called with rd_posted=1:
<br>
rd_posted &gt; rd_low_local is false
<br>
num_post=rd_curr_num-rd_posted=0
<br>
the loop is not executed
<br>
wr is never initialized (remains NULL)
<br>
wr-&gt;next: address not mapped
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; SIGSEGV
<br>
<p>The attached patch solves the problem by ensuring that we'll actually
<br>
enter the loop and leave otherwise.
<br>
Can someone have a look please: the patch solves the problem with my
<br>
reproducer, but I'm not sure the fix covers all the situations.
<br>
<p>Regards,
<br>
Nadia
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8110/001_openib_low_rd_num.patch">001_openib_low_rd_num.patch</a>
</ul>
<!-- attachment="001_openib_low_rd_num.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8111.php">Lisandro Dalcin: "[OMPI devel] MPI_Type_free(MPI_BYTE) not failing after MPI_Win_create()"</a>
<li><strong>Previous message:</strong> <a href="8109.php">Ralph Castain: "Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8116.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Reply:</strong> <a href="8116.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Reply:</strong> <a href="8117.php">Shamis, Pavel: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in the	SRQs"</a>
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
