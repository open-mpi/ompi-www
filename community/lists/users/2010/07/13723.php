<?
$subject_val = "Re: [OMPI users] Partitioning problem set data";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 10:48:42 2010" -->
<!-- isoreceived="20100721144842" -->
<!-- sent="Wed, 21 Jul 2010 14:48:36 +0000" -->
<!-- isosent="20100721144836" -->
<!-- name="Bill Rankin" -->
<!-- email="Bill.Rankin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Partitioning problem set data" -->
<!-- id="76097BB0C025054786EFAB631C4A2E3C093733B8_at_MERCMBX04R.na.SAS.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinIDdlfS08n_QbRvUcbLSuZeKL7Ld0wEMP9puL-_at_mail.gmail.com" -->
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
<strong>From:</strong> Bill Rankin (<em>Bill.Rankin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 10:48:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13724.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Previous message:</strong> <a href="13722.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13716.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13724.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Reply:</strong> <a href="13724.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depending on the datatype and its order in memory, the &quot;Block,*&quot; and &quot;*,Block&quot; (which we used to call &quot;slabs&quot; in 3D) may be implemented by a simple scatter/gather call in MPI.   The &quot;Block,Block&quot; distribution is a little more complex, but if you take advantage of MPI's derived datatypes, you may be able to reference an arbitrary 3D sub-space as a single data entity and then use gather/scatter with that.
<br>
<p>I recommend that look through some of the examples in &quot;MPI - The Complete Reference (Vol. 1)&quot; by Snir, et.al. for use of  MPI_Gather(), MPI_Scatter(), as well as the section on user-defined datatypes.  Section 5.2 of &quot;Using MPI&quot; by Gropp, Lusk and Skjellum has an example code for an N-Body Problem which you may find useful.
<br>
<p>Hope this helps.
<br>
<p>-bill
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Alexandru Blidaru
<br>
Sent: Tuesday, July 20, 2010 10:54 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Partitioning problem set data
<br>
<p>If there is an already existing implementation of the *Block or Block* methods that splits the array and sends the individual pieces to the proper nodes, can you point me to it please?
<br>
On Tue, Jul 20, 2010 at 9:52 AM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&lt;mailto:alexsb92_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>
<p>I have a 3D array, which I need to split into equal n parts, so that each part would run on a different node. I found the picture in the attachment from this website (<a href="https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning">https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning</a>) on the different ways to partition data. I am interested in the block methods, as the cyclic methods wouldn't really work for me at all. Obviously the *, BLOCK and the BLOCK, * methods would be really easy to implement for 3D arrays, assuming that the 2D picture would be looking at the array from the top. My question is if there are other better ways to do it from a performance standpoint?
<br>
<p>Thanks for your replies,
<br>
Alex
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13724.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Previous message:</strong> <a href="13722.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13716.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13724.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Reply:</strong> <a href="13724.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
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
