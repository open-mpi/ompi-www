<?
$subject_val = "[OMPI users] Binding width affects allgatherv performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 21:27:16 2015" -->
<!-- isoreceived="20150702012716" -->
<!-- sent="Wed, 1 Jul 2015 21:27:15 -0400" -->
<!-- isosent="20150702012715" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] Binding width affects allgatherv performance?" -->
<!-- id="CA+ssbKXvg+wx5EHNP_qAOUu+nmme-Yx156Oe-L+HPFsvOfzXKA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Binding width affects allgatherv performance?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 21:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27246.php">Tom Coles: "[OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Previous message:</strong> <a href="27244.php">Tim Miller: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27258.php">Saliya Ekanayake: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>Reply:</strong> <a href="27258.php">Saliya Ekanayake: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am getting strange performance results for allgatherv operation for the
<br>
same number of procs and data, but with varying binding width. For example
<br>
here are two cases with about 180x difference in performance.
<br>
<p>Each machine has 4 sockets each with 6 cores totaling 24 cores per node
<br>
(topology attached).
<br>
<p>Case 1
<br>
<pre>
----
12 procs per node each bound to 1 core times 30 nodes --&gt; 1929 ms
Case 2
----
12 procs per node each bound to 2 cores times 30 nodes --&gt; 357209 ms
Another set of variations for 2 procs per node and 4 procs per node is
given below in the chart. Is such variation expected with binding width? I
am a bit puzzled and would appreciate any help to understand this.
[image: Inline image 1]
Thank you,
Saliya
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27245/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-27245/image.png" alt="image.png">
<!-- attachment="image.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-27245/tempest.cn01.topology.png" alt="tempest.cn01.topology.png">
<!-- attachment="tempest.cn01.topology.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27246.php">Tom Coles: "[OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Previous message:</strong> <a href="27244.php">Tim Miller: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27258.php">Saliya Ekanayake: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>Reply:</strong> <a href="27258.php">Saliya Ekanayake: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
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
