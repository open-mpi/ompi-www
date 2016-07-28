<?
$subject_val = "[OMPI users] OpenMPI collective algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 08:10:13 2013" -->
<!-- isoreceived="20130405121013" -->
<!-- sent="Fri, 5 Apr 2013 14:10:04 +0200" -->
<!-- isosent="20130405121004" -->
<!-- name="chandan basu" -->
<!-- email="cbasu_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI collective algorithm selection" -->
<!-- id="CAMWuWhcs=t-8TB2cUXPWeuHf0FqeBsSt2eSFoZArOwAtjvK+XQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI collective algorithm selection<br>
<strong>From:</strong> chandan basu (<em>cbasu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 08:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21686.php">Ralph Castain: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="21684.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21686.php">Ralph Castain: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>Reply:</strong> <a href="21686.php">Ralph Castain: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I want to use OpenMPI dynamic collective algorithm selection using rules
<br>
file, e.g.
<br>
<p>mpirun --mca coll_tuned_use_dynamic_rules 1
<br>
--mca_coll_tuned_dynamic_rules_file rules.txt ./myexe
<br>
<p>I can see some examples in earlier discussions (given below). My question
<br>
is how do I know the ID for the different collectives. I do not see
<br>
coll_tuned.h
<br>
in the installation folder . Is there any command to find the ID of an
<br>
algorithm. I am particularly interested in Alltoallv. I have checked that
<br>
coll_tuned_alltoallv_algorithm 1 and coll_tuned_alltoallv_algorithm 2 has
<br>
lot of performance difference depending on data size and comm size. So I
<br>
think giving a rules file can improve the performance over a range of data
<br>
sizes and comm size. Any help in this regard will be appreciated.
<br>
<p>With regards,
<br>
<p>-Chandan
<br>
----------------------------------------
<br>
Dr. Chandan Basu
<br>
National Supercomputer Center
<br>
Link&#246;ping University
<br>
S-581 83 Link&#246;ping
<br>
email: cbasu_at_[hidden]
<br>
-----------------------------------------
<br>
<span class="quotelev1">&gt;1 # num of collectives
</span><br>
<span class="quotelev1">&gt;3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
</span><br>
<span class="quotelev1">&gt;2 # number of com sizes
</span><br>
<span class="quotelev1">&gt;1 # comm size 1
</span><br>
<span class="quotelev1">&gt;1 # number of msg sizes 1
</span><br>
<span class="quotelev1">&gt;0 1 0 0 # for message size 0, linear 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev1">&gt;8 # comm size 8
</span><br>
<span class="quotelev1">&gt;4 # number of msg sizes
</span><br>
<span class="quotelev1">&gt;0 1 0 0 # for message size 0, linear 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev1">&gt;32768 2 0 0 # 32k, pairwise 2, no topo or segmentation
</span><br>
<span class="quotelev1">&gt;262144 1 0 0 # 256k, use linear 1, no topo or segmentation
</span><br>
<span class="quotelev1">&gt;524288 2 0 0 # message size 512k+, pairwise 2, topo 0, 0 segmentation
</span><br>
<span class="quotelev1">&gt;# end of first collective
</span><br>
<p><p><pre>
--
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21685/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21686.php">Ralph Castain: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="21684.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21686.php">Ralph Castain: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>Reply:</strong> <a href="21686.php">Ralph Castain: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
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
