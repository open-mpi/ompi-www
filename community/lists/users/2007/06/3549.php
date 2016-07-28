<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 10:34:19 2007" -->
<!-- isoreceived="20070626143419" -->
<!-- sent="Tue, 26 Jun 2007 15:34:18 +0100 (BST)" -->
<!-- isosent="20070626143418" -->
<!-- name="Yuan Wan" -->
<!-- email="ywan_at_[hidden]" -->
<!-- subject="[OMPI users] How to use multi TCP network" -->
<!-- id="Pine.LNX.4.64.0706261533010.7682_at_cappuccino.ucs.ed.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Yuan Wan (<em>ywan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 10:34:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3550.php">Brian Barrett: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Previous message:</strong> <a href="3548.php">Francesco Pietra: "[OMPI users] Fwd: Re:  intel/openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3787.php">Jeff Squyres: "Re: [OMPI users] How to use multi TCP network"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3787.php">Jeff Squyres: "Re: [OMPI users] How to use multi TCP network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm benchmarking our new cluster with HPL. I pick OpenMPI as parallel 
<br>
environment as I found OpenMPi is able to benefit from two giga-ethernet 
<br>
tcp
<br>
networks on our cluster during low-level benchmark.
<br>
(bandwidth could be upto 250MB/s)
<br>
<p>The HPL code is well built and run well for small problem size.
<br>
However, when I turned to run the code on 32-node (128-way), the code will 
<br>
crash in the half way with the following error message:
<br>
<p>---------------------------------------------
<br>
[node074:09973] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node074:09973] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node073:10234] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node073:10234] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node089:29190] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node090:27881] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node072:02729] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node071:03029] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
.....
<br>
[node084:06044] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node086:01346] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node069:16372] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node100:23294] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node069:16372] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node085:04347] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node087:31391] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
---------------------------------------------
<br>
<p>According to the following faq instruction, I explicitly tell the 
<br>
interface name of tow tcp networks, but the code still break.
<br>
<p>mpirun --mca btl_tcp_if_include eth0,eth1 -np 128 -bynode -machinefile 
<br>
hostfile ./xhpl
<br>
<p><a href="http://icl.cs.utk.edu/open-mpi/faq/?category=tcp#tcp-selection">http://icl.cs.utk.edu/open-mpi/faq/?category=tcp#tcp-selection</a>
<br>
<p>If I include only one tcp network, the code won't break, but the 
<br>
performance is not desirble/
<br>
<p><p>Anyone know how to fix it?
<br>
<p>--Yuan
<br>
<p><p>Yuan Wan
<br>
--- 
<br>
Unix Section
<br>
Information Services Infrastructure Division
<br>
University of Edinburgh
<br>
<p>tel: 0131 650 4985
<br>
email: ywan_at_[hidden]
<br>
<p>2032 Computing Services, JCMB
<br>
The King's Buildings,
<br>
Edinburgh, EH9 3JZ
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3550.php">Brian Barrett: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Previous message:</strong> <a href="3548.php">Francesco Pietra: "[OMPI users] Fwd: Re:  intel/openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3787.php">Jeff Squyres: "Re: [OMPI users] How to use multi TCP network"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3787.php">Jeff Squyres: "Re: [OMPI users] How to use multi TCP network"</a>
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
