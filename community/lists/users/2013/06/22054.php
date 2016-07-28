<?
$subject_val = "[OMPI users] Sandy Bridge performance question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 19:10:40 2013" -->
<!-- isoreceived="20130606231040" -->
<!-- sent="Thu, 6 Jun 2013 23:10:07 +0000" -->
<!-- isosent="20130606231007" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Sandy Bridge performance question" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CA150F3_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Sandy Bridge performance question<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 19:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22055.php">Ralph Castain: "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Previous message:</strong> <a href="22053.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22055.php">Ralph Castain: "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Reply:</strong> <a href="22055.php">Ralph Castain: "Re: [OMPI users] Sandy Bridge performance question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running single-node Sandy Bridge cases with OpenMPI and looking at scaling.
<br>
<p>I'm using -bind-to-core without any other options (default is -bycore I believe).
<br>
<p>These numbers indicate number of cores first, then the second digit is the run number (except for n=1, all runs repeated 3 times).  Any thought why n15 should be so much slower than n16?   I also measure the RSS of the running processes, and the rank 0 process for n=15 cases uses about 2x more memory than all the other ranks, whereas all the ranks use the same amount of memory for the n=16 cases.
<br>
<p>Thanks for insights,
<br>
<p>Ed
<br>
<p>n1.1:    6.9530
<br>
n2.1:    7.0185
<br>
n2.2:    7.0313
<br>
n3.1:    8.2069
<br>
n3.2:    8.1628
<br>
n3.3:    8.1311
<br>
n4.1:    7.5307
<br>
n4.2:    7.5323
<br>
n4.3:    7.5858
<br>
n5.1:    9.5693
<br>
n5.2:    9.5104
<br>
n5.3:    9.4821
<br>
n6.1:    8.9821
<br>
n6.2:    8.9720
<br>
n6.3:    8.9541
<br>
n7.1:    10.640
<br>
n7.2:    10.650
<br>
n7.3:    10.638
<br>
n8.1:    8.6822
<br>
n8.2:    8.6630
<br>
n8.3:    8.6903
<br>
n9.1:    9.5058
<br>
n9.2:    9.5255
<br>
n9.3:    9.4809
<br>
n10.1:    10.484
<br>
n10.2:    10.452
<br>
n10.3:    10.516
<br>
n11.1:    11.327
<br>
n11.2:    11.316
<br>
n11.3:    11.318
<br>
n12.1:    12.285
<br>
n12.2:    12.303
<br>
n12.3:    12.272
<br>
n13.1:    13.127
<br>
n13.2:    13.113
<br>
n13.3:    13.113
<br>
n14.1:    14.035
<br>
n14.2:    13.989
<br>
n14.3:    14.021
<br>
n15.1:    14.533
<br>
n15.2:    14.529
<br>
n15.3:    14.586
<br>
n16.1:    8.6542
<br>
n16.2:    8.6731
<br>
n16.3:    8.6586
<br>
~
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22054/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22055.php">Ralph Castain: "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Previous message:</strong> <a href="22053.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22055.php">Ralph Castain: "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Reply:</strong> <a href="22055.php">Ralph Castain: "Re: [OMPI users] Sandy Bridge performance question"</a>
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
