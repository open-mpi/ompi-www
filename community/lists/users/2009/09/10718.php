<?
$subject_val = "Re: [OMPI users] MPI_Irecv segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 02:28:47 2009" -->
<!-- isoreceived="20090922062847" -->
<!-- sent="Tue, 22 Sep 2009 08:28:31 +0200" -->
<!-- isosent="20090922062831" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv segmentation fault" -->
<!-- id="1253600911.13599.2.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="351727c0909211626w105d5e47icfd55d347a4655da_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Irecv segmentation fault<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 02:28:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10719.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10717.php">Mallikarjuna Shastry: "[OMPI users] error in ompi-checkpoint"</a>
<li><strong>In reply to:</strong> <a href="10714.php">Everette Clemmer: "[OMPI users] MPI_Irecv segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10719.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>Reply:</strong> <a href="10719.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-09-21 at 19:26 -0400, Everette Clemmer wrote:
<br>
<span class="quotelev1">&gt; Hey all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting a segmentation fault when I attempt to receive a single
</span><br>
<span class="quotelev1">&gt; character via MPI_Irecv. Code follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void recv_func() {
</span><br>
<span class="quotelev1">&gt; 		if( !MASTER ) {
</span><br>
<span class="quotelev1">&gt; 			char		buffer[ 1 ];
</span><br>
<span class="quotelev1">&gt; 			int  		flag;
</span><br>
<span class="quotelev1">&gt; 			MPI_Request request;
</span><br>
<span class="quotelev1">&gt; 			MPI_Status 	status;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 			MPI_Irecv( &amp;buffer, 1, MPI_CHAR, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;request);
</span><br>
<p>It should be MPI_Irecv(buffer, 1, ...)
<br>
<p><span class="quotelev1">&gt; The segfault disappears if I comment out the MPI_Irecv call in
</span><br>
<span class="quotelev1">&gt; recv_func so I'm assuming that there's something wrong with the
</span><br>
<span class="quotelev1">&gt; parameters that I'm passing to it. Thoughts?
</span><br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10719.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10717.php">Mallikarjuna Shastry: "[OMPI users] error in ompi-checkpoint"</a>
<li><strong>In reply to:</strong> <a href="10714.php">Everette Clemmer: "[OMPI users] MPI_Irecv segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10719.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>Reply:</strong> <a href="10719.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
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
