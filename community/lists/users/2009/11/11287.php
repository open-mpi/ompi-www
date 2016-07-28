<?
$subject_val = "Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 27 02:05:11 2009" -->
<!-- isoreceived="20091127070511" -->
<!-- sent="Fri, 27 Nov 2009 12:35:02 +0530" -->
<!-- isosent="20091127070502" -->
<!-- name="Vivek Satpute" -->
<!-- email="vivekonline86_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma" -->
<!-- id="675d290b0911262305u9579588id800030af98cc49_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a00d3c7f0911260905k71f81ee8r6ed7b16db88d85da_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma<br>
<strong>From:</strong> Vivek Satpute (<em>vivekonline86_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-27 02:05:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11288.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11286.php">Vivek Satpute: "Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma"</a>
<li><strong>Maybe in reply to:</strong> <a href="11286.php">Vivek Satpute: "Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Thu, Nov 26, 2009 at 10:35 PM, Chuck Ritter &lt;cfr100_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Nov 26, 2009 at 6:30 AM, Vivek Satpute &lt;vivekonline86_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ritter,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; And why those examples in libibverbs-1.1.2 package takes IP address ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Do you have any idea about that ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Why not?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think hostnames and ips were used because they uniquely identify a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node. Why create a parallel naming scheme? It just adds more data to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; track.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I agree with this that why there should be parallel naming scheme. But
</span><br>
<span class="quotelev2">&gt; &gt; Infiniband devices already have LID and GID naming system to identify
</span><br>
<span class="quotelev2">&gt; &gt; devices
</span><br>
<span class="quotelev2">&gt; &gt; So instead of using IP address to uniquely identify, we can use those
</span><br>
<span class="quotelev2">&gt; &gt; LID/GID.
</span><br>
<span class="quotelev2">&gt; &gt; Am I right ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would have been another possibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could say the same about the SCSI bus. LUN and bus information is
</span><br>
<span class="quotelev1">&gt; mapped to an abstract device so that the user does not have to deal
</span><br>
<span class="quotelev1">&gt; with those low level details. In the case of SCSI, the OS handles
</span><br>
<span class="quotelev1">&gt; that... maps it into devices. I think IB somewhat follows that model.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yope. Maybe you are right.
</span><br>
<p><span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Thanks,
<br>
Vivek
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11288.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11286.php">Vivek Satpute: "Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma"</a>
<li><strong>Maybe in reply to:</strong> <a href="11286.php">Vivek Satpute: "Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma"</a>
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
