<?
$subject_val = "[OMPI users] Fwd: network related MPI errors on Amazon EC2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 14:10:27 2013" -->
<!-- isoreceived="20130404181027" -->
<!-- sent="Thu, 4 Apr 2013 14:10:23 -0400" -->
<!-- isosent="20130404181023" -->
<!-- name="Yevgeny Popkov" -->
<!-- email="ypopkov_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: network related MPI errors on Amazon EC2" -->
<!-- id="CABS=9Uwag236mQkuz2YRhSFmmg+f2EU-0wQRkR8aSQSHTWPVxQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABS=9Uy2u9tpK9cvq2oPwEuh=hUWXQ0bxK-waMJ5oNPN1-eJ0Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: network related MPI errors on Amazon EC2<br>
<strong>From:</strong> Yevgeny Popkov (<em>ypopkov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 14:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21676.php">Limin Gu: "[OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>Previous message:</strong> <a href="21674.php">Reuti: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21678.php">Ralph Castain: "Re: [OMPI users] network related MPI errors on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="21678.php">Ralph Castain: "Re: [OMPI users] network related MPI errors on Amazon EC2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;I am running some matrix-algebra-based calculations on Amazon EC2 (HVM
<br>
instances running Ubuntu 11.1 with OpenMPI 1.6.4 and python bindings with
<br>
mpi4py 1.3). I am using StarCluster to spin up instances so all nodes from
<br>
a given cluster are in the same placement group (i.e. are on the same 10 Gb
<br>
network)
<br>
<p>My calculations are CPU-bound and I use just a few collective operations
<br>
(namely allgatherv, statterv, bcast, and reduce) that exchange a
<br>
non-trivial amount data (the size of full distributed dense matrix reaches
<br>
tens of gigabytes - e.g. I use allgatherv on that matrix)
<br>
<p>For smaller matrix sizes everything works fine but once I start increasing
<br>
the number of parameters in my models and, as a result, increase the number
<br>
of nodes/workers to keep up I get errors like this one:
<br>
<p>[node005][[18726,1],125][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[node008][[18726,1],8][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[node008][[18726,1],108][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[node008][[18726,1],28][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[node007][[18726,1],7][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[node001][[18726,1],21][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
<p>I've also seen other network-related errors such as &quot;unable to find path to
<br>
host&quot;. Whenever I get these errors one or more of the EC2 nodes becomes
<br>
&quot;unreachable&quot; according EC2 Web UI (even though I can log in to those nodes
<br>
using internal IP aliases) Such nodes typically recover from being
<br>
&quot;unreachable&quot; after a few minutes but my MPI job hangs anyway. The culprit
<br>
is usually allgatherv but I've seen reduce and bcast to cause these errors
<br>
as well.
<br>
<p>I don't get this errors if I run on a single node (but that's way too slow
<br>
even with 16 workers so I need to run my jobs on at least 20 nodes)
<br>
<p>Any idea how to fix this? May be by adjusting some linux and/or OpenMPI
<br>
parameters?
<br>
<p>Any help would greatly appreciated!
<br>
<p>Thanks,
<br>
Yevgeny
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21675/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21676.php">Limin Gu: "[OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>Previous message:</strong> <a href="21674.php">Reuti: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21678.php">Ralph Castain: "Re: [OMPI users] network related MPI errors on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="21678.php">Ralph Castain: "Re: [OMPI users] network related MPI errors on Amazon EC2"</a>
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
