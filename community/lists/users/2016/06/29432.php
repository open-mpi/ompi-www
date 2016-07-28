<?
$subject_val = "[OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 07:54:18 2016" -->
<!-- isoreceived="20160614115418" -->
<!-- sent="Tue, 14 Jun 2016 12:54:16 +0100" -->
<!-- isosent="20160614115416" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM" -->
<!-- id="CADsB1iBRcieTYj_Y9o+VPQ+ymyK2Y6=ndA42_3HsO55b=ZJiHw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 07:54:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29433.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Previous message:</strong> <a href="29431.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29433.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Reply:</strong> <a href="29433.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I have the following 3 1-socket nodes:
<br>
<p>node1:  4GB RAM 2-core: rank 0  rank 1
<br>
node2:  4GB RAM 4-core: rank 2  rank 3 rank 4 rank 5
<br>
node3:  8GB RAM 4-core: rank 6  rank 7 rank 8 rank 9
<br>
<p>I have a model that takes a input and produces a output, and I want to run
<br>
this model for N possible combinations of inputs. N is very big and i am
<br>
limited by memory capacity.
<br>
<p>I am using the world collective and I want to know how to distribute N over
<br>
the 10 ranks, given the mem specs of each node.
<br>
<p>For now, i have been simply dividing N by the number of ranks and
<br>
scatter/gather that way.
<br>
How can I improve without hardcoding the specs in my own c++ code?
<br>
<p>thanks,
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29433.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Previous message:</strong> <a href="29431.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29433.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Reply:</strong> <a href="29433.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
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
