<?
$subject_val = "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 17:59:10 2016" -->
<!-- isoreceived="20160615215910" -->
<!-- sent="Wed, 15 Jun 2016 22:59:08 +0100" -->
<!-- isosent="20160615215908" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM" -->
<!-- id="CADsB1iD=BcqpPv2MfF8CO7XsXdQO1VM9btZsjspBYcPhc7NGKA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5u8C-faw6jxfFiGBq95vSmFEYtLp535FkyA5HA+jGkK4g_at_mail.gmail.com" -->
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
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 17:59:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29466.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Previous message:</strong> <a href="29464.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="29433.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29466.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Reply:</strong> <a href="29466.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 14 June 2016 at 13:56, Gilles Gouaillardet
<br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
On Tuesday, June 14, 2016, MM &lt;finjulhich_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
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
<span class="quotelev1">&gt; I have a model that takes a input and produces a output, and I want to run this model for N possible combinations of inputs. N is very big and i am limited by memory capacity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the world collective and I want to know how to distribute N over the 10 ranks, given the mem specs of each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now, i have been simply dividing N by the number of ranks and scatter/gather that way.
</span><br>
<span class="quotelev1">&gt; How can I improve without hardcoding the specs in my own c++ code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note if your program is synchronous, it will run at the speed of the slowest task.
</span><br>
<span class="quotelev1">&gt; (E.g. Tasks on node 2, 1GB per task, will wait for the other tasks, 2 GB per task)
</span><br>
<p>Yes I think my program is synchronous: I generate the N possibilities
<br>
in rank 0, I then want to split in order to achieve the fastest
<br>
runtime (assuming the nodes do nothing else on the side).
<br>
Well the gather/gatherv are blocking until everything is gathered. So
<br>
the overall time is the time of the rank with the slowest compute time
<br>
(this depends on the rank's speed, and how much out of N it is
<br>
processing, assuming each evaluation takes the same time).
<br>
<p>I just realized the core frequency as a major factor and added it now
<br>
on top of my initial email:
<br>
In my case, node1 cores exhibit 4500 bogomips each, while node2 and
<br>
node3 cores exhibit 5300 bogomips.
<br>
<p>Surely, I don't want to distribute N equally across the 10 ranks:
<br>
1. because of # cores frequencies, assuming I trust the bogomips
<br>
measure for e.g., I should gather those measures first (can orted
<br>
help?), or I could have them as a config file?
<br>
2. The memory available really only impacts when N is big enough that
<br>
I would not be able to eval all Ns if I limit myself to 4GB
<br>
throughout.
<br>
<p>If I have a static config file, from RAM+bogomips i can estimate how
<br>
to distribute N myself? But your response hints to doing this
<br>
programmatically, which I prefer.
<br>
<p><span class="quotelev1">&gt; You can use MPI_Comm_split_type in order to create inter node communicators.
</span><br>
I don't quite understand this function. One starts with the world
<br>
communicator including all ranks 0...9, and splits that  into multiple
<br>
subcommunicators? only split type appears to be MPI_COMM_TYPE_SHARED.
<br>
<p><span class="quotelev1">&gt; Then you can find how much memory is available per task,
</span><br>
How? by reading '/proc/self/statm' on linux?
<br>
<p><span class="quotelev1">&gt;MPI_Gather that on the master task, and MPI_Scatterv/MPI_Gatherv to distribute/consolidate the data
</span><br>
<p><p>Apologies for my scattered comments, my question is not actually
<br>
totally clear in my head :-)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29466.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Previous message:</strong> <a href="29464.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="29433.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29466.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Reply:</strong> <a href="29466.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
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
