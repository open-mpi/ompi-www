<?
$subject_val = "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 08:57:00 2016" -->
<!-- isoreceived="20160614125700" -->
<!-- sent="Tue, 14 Jun 2016 21:56:59 +0900" -->
<!-- isosent="20160614125659" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM" -->
<!-- id="CAAkFZ5u8C-faw6jxfFiGBq95vSmFEYtLp535FkyA5HA+jGkK4g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADsB1iBRcieTYj_Y9o+VPQ+ymyK2Y6=ndA42_3HsO55b=ZJiHw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 08:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29434.php">Nicolas Joly: "[OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29432.php">MM: "[OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>In reply to:</strong> <a href="29432.php">MM: "[OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29465.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Reply:</strong> <a href="29465.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note if your program is synchronous, it will run at the speed of the
<br>
slowest task.
<br>
(E.g. Tasks on node 2, 1GB per task, will wait for the other tasks, 2 GB
<br>
per task)
<br>
<p>You can use MPI_Comm_split_type in order to create inter node communicators.
<br>
Then you can find how much memory is available per task, MPI_Gather that on
<br>
the master task, and MPI_Scatterv/MPI_Gatherv to distribute/consolidate the
<br>
data
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, June 14, 2016, MM &lt;finjulhich_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I have the following 3 1-socket nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node1:  4GB RAM 2-core: rank 0  rank 1
</span><br>
<span class="quotelev1">&gt; node2:  4GB RAM 4-core: rank 2  rank 3 rank 4 rank 5
</span><br>
<span class="quotelev1">&gt; node3:  8GB RAM 4-core: rank 6  rank 7 rank 8 rank 9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a model that takes a input and produces a output, and I want to run
</span><br>
<span class="quotelev1">&gt; this model for N possible combinations of inputs. N is very big and i am
</span><br>
<span class="quotelev1">&gt; limited by memory capacity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the world collective and I want to know how to distribute N
</span><br>
<span class="quotelev1">&gt; over the 10 ranks, given the mem specs of each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now, i have been simply dividing N by the number of ranks and
</span><br>
<span class="quotelev1">&gt; scatter/gather that way.
</span><br>
<span class="quotelev1">&gt; How can I improve without hardcoding the specs in my own c++ code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29433/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29434.php">Nicolas Joly: "[OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29432.php">MM: "[OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>In reply to:</strong> <a href="29432.php">MM: "[OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29465.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Reply:</strong> <a href="29465.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
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
