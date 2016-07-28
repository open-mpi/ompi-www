<?
$subject_val = "Re: [OMPI users] OpenMPI collective algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 09:11:59 2013" -->
<!-- isoreceived="20130405131159" -->
<!-- sent="Fri, 5 Apr 2013 06:11:51 -0700" -->
<!-- isosent="20130405131151" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI collective algorithm selection" -->
<!-- id="D6B062E6-479E-4545-8B05-CCAD71045DF1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMWuWhcs=t-8TB2cUXPWeuHf0FqeBsSt2eSFoZArOwAtjvK+XQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI collective algorithm selection<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 09:11:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21687.php">Siegmar Gross: "[OMPI users] cannot build 32-bit openmpi-1.7 on Linux"</a>
<li><strong>Previous message:</strong> <a href="21685.php">chandan basu: "[OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="21685.php">chandan basu: "[OMPI users] OpenMPI collective algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21694.php">George Bosilca: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>Reply:</strong> <a href="21694.php">George Bosilca: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can get the headers installed by adding --with-devel-headers to the configure line.
<br>
<p>On Apr 5, 2013, at 5:10 AM, chandan basu &lt;cbasu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to use OpenMPI dynamic collective algorithm selection using rules file, e.g.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca coll_tuned_use_dynamic_rules 1 --mca_coll_tuned_dynamic_rules_file rules.txt ./myexe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see some examples in earlier discussions (given below). My question is how do I know the ID for the different collectives. I do not see  coll_tuned.h in the installation folder . Is there any command to find the ID of an algorithm. I am particularly interested in Alltoallv. I have checked that coll_tuned_alltoallv_algorithm 1 and coll_tuned_alltoallv_algorithm 2 has lot of performance difference depending on data size and comm size. So I think giving a rules file can improve the performance over a range of data sizes and comm size. Any help in this regard will be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Chandan
</span><br>
<span class="quotelev1">&gt; ----------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr. Chandan Basu
</span><br>
<span class="quotelev1">&gt; National Supercomputer Center
</span><br>
<span class="quotelev1">&gt; Link&#246;ping University
</span><br>
<span class="quotelev1">&gt; S-581 83 Link&#246;ping
</span><br>
<span class="quotelev1">&gt; email: cbasu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -----------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;1 # num of collectives 
</span><br>
<span class="quotelev2">&gt; &gt;3 # ID = 3 Alltoall collective (ID in coll_tuned.h) 
</span><br>
<span class="quotelev2">&gt; &gt;2 # number of com sizes 
</span><br>
<span class="quotelev2">&gt; &gt;1 # comm size 1 
</span><br>
<span class="quotelev2">&gt; &gt;1 # number of msg sizes 1 
</span><br>
<span class="quotelev2">&gt; &gt;0 1 0 0 # for message size 0, linear 1, topo 0, 0 segmentation 
</span><br>
<span class="quotelev2">&gt; &gt;8 # comm size 8 
</span><br>
<span class="quotelev2">&gt; &gt;4 # number of msg sizes 
</span><br>
<span class="quotelev2">&gt; &gt;0 1 0 0 # for message size 0, linear 1, topo 0, 0 segmentation 
</span><br>
<span class="quotelev2">&gt; &gt;32768 2 0 0 # 32k, pairwise 2, no topo or segmentation 
</span><br>
<span class="quotelev2">&gt; &gt;262144 1 0 0 # 256k, use linear 1, no topo or segmentation 
</span><br>
<span class="quotelev2">&gt; &gt;524288 2 0 0 # message size 512k+, pairwise 2, topo 0, 0 segmentation 
</span><br>
<span class="quotelev2">&gt; &gt;# end of first collective 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21686/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21687.php">Siegmar Gross: "[OMPI users] cannot build 32-bit openmpi-1.7 on Linux"</a>
<li><strong>Previous message:</strong> <a href="21685.php">chandan basu: "[OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="21685.php">chandan basu: "[OMPI users] OpenMPI collective algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21694.php">George Bosilca: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>Reply:</strong> <a href="21694.php">George Bosilca: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
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
