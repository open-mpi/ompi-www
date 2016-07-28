<?
$subject_val = "Re: [OMPI users] Partitioning problem set data";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 10:54:02 2010" -->
<!-- isoreceived="20100720145402" -->
<!-- sent="Tue, 20 Jul 2010 10:53:38 -0400" -->
<!-- isosent="20100720145338" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Partitioning problem set data" -->
<!-- id="AANLkTinIDdlfS08n_QbRvUcbLSuZeKL7Ld0wEMP9puL-_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikvSBaccCXCE7Zc_0qBiXJIHXtMU_uNpI1w0T_e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Partitioning problem set data<br>
<strong>From:</strong> Alexandru Blidaru (<em>alexsb92_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 10:53:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13717.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13715.php">Alexandru Blidaru: "[OMPI users] Partitioning problem set data"</a>
<li><strong>In reply to:</strong> <a href="13715.php">Alexandru Blidaru: "[OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13718.php">Eugene Loh: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Reply:</strong> <a href="13718.php">Eugene Loh: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Reply:</strong> <a href="13723.php">Bill Rankin: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If there is an already existing implementation of the *Block or Block*
<br>
methods that splits the array and sends the individual pieces to
<br>
the proper nodes, can you point me to it please?
<br>
<p>On Tue, Jul 20, 2010 at 9:52 AM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a 3D array, which I need to split into equal n parts, so that each
</span><br>
<span class="quotelev1">&gt; part would run on a different node. I found the picture in the attachment
</span><br>
<span class="quotelev1">&gt; from this website (
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning">https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning</a>) on
</span><br>
<span class="quotelev1">&gt; the different ways to partition data. I am interested in the block methods,
</span><br>
<span class="quotelev1">&gt; as the cyclic methods wouldn't really work for me at all. Obviously the *,
</span><br>
<span class="quotelev1">&gt; BLOCK and the BLOCK, * methods would be really easy to implement for 3D
</span><br>
<span class="quotelev1">&gt; arrays, assuming that the 2D picture would be looking at the array from the
</span><br>
<span class="quotelev1">&gt; top. My question is if there are other better ways to do it from a
</span><br>
<span class="quotelev1">&gt; performance standpoint?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your replies,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13716/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13717.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13715.php">Alexandru Blidaru: "[OMPI users] Partitioning problem set data"</a>
<li><strong>In reply to:</strong> <a href="13715.php">Alexandru Blidaru: "[OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13718.php">Eugene Loh: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Reply:</strong> <a href="13718.php">Eugene Loh: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Reply:</strong> <a href="13723.php">Bill Rankin: "Re: [OMPI users] Partitioning problem set data"</a>
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
