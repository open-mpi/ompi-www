<?
$subject_val = "Re: [OMPI users] ROMIO bug reading darrays";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 18:18:04 2014" -->
<!-- isoreceived="20140508221804" -->
<!-- sent="Thu, 8 May 2014 18:18:01 -0400" -->
<!-- isosent="20140508221801" -->
<!-- name="Richard Shaw" -->
<!-- email="jrs65_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ROMIO bug reading darrays" -->
<!-- id="CAN+evmkF5UGRjbUhfiAW3SwU_baGd3RH62eEJ6tJPrhn=gKoeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="536BF046.8090408_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] ROMIO bug reading darrays<br>
<strong>From:</strong> Richard Shaw (<em>jrs65_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 18:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24328.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24326.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24323.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8 May 2014 16:59, Rob Latham &lt;robl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard: may I add this test case to ROMIO's test suite?  I'm always on
</span><br>
<span class="quotelev1">&gt; the hunt for small self-contained tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Please do. I'm glad it's being so useful - it seems to be hitting a
<br>
surprising amount of bugs of different origins.
<br>
<p>It might be an idea to make it test a variety of arrays sizes and block
<br>
sizes, it was interesting to me that this showed up with 3x3 blocks, but
<br>
not 2x2 blocks.
<br>
<p>I found the problem in MPICH, but i don't know how it relates to OpenMPI --
<br>
<span class="quotelev1">&gt; the darray bug is one I introduced on tuesday, so OpenMPI's ROMIO code
</span><br>
<span class="quotelev1">&gt; should not have a problem with this darray type.
</span><br>
<p><p>Fascinating!
<br>
<p>Richard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24328.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24326.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24323.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
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
