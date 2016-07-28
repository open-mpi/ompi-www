<?
$subject_val = "Re: [OMPI users] OpenMPI collective algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  8 09:55:30 2013" -->
<!-- isoreceived="20130408135530" -->
<!-- sent="Mon, 8 Apr 2013 15:55:24 +0200" -->
<!-- isosent="20130408135524" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI collective algorithm selection" -->
<!-- id="8D829083-57C5-494E-8819-CC8EE2E5F165_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D6B062E6-479E-4545-8B05-CCAD71045DF1_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-08 09:55:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21695.php">Ed Blosch: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>Previous message:</strong> <a href="21693.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>In reply to:</strong> <a href="21686.php">Ralph Castain: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As you noticed the ID of the algorithms are not in any header file, so installing the devel-headers will not help with this particular issue. Hiding the ID of the algorithms has been done in purpose, to prevent people fiddling with one of the most critical pieces in the collective performance (the dynamic rules).
<br>
<p>The only way to know the number of supported algorithms and their ID is to read the output of the &quot;ompi_info --param coll tuned&quot; once the &quot;coll_tuned_use_dynamic_rules = 1&quot; has been added to your .openmpi/mca-config.param file.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Apr 5, 2013, at 15:11 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You can get the headers installed by adding --with-devel-headers to the configure line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 5, 2013, at 5:10 AM, chandan basu &lt;cbasu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I want to use OpenMPI dynamic collective algorithm selection using rules file, e.g.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca coll_tuned_use_dynamic_rules 1 --mca_coll_tuned_dynamic_rules_file rules.txt ./myexe
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can see some examples in earlier discussions (given below). My question is how do I know the ID for the different collectives. I do not see  coll_tuned.h in the installation folder . Is there any command to find the ID of an algorithm. I am particularly interested in Alltoallv. I have checked that coll_tuned_alltoallv_algorithm 1 and coll_tuned_alltoallv_algorithm 2 has lot of performance difference depending on data size and comm size. So I think giving a rules file can improve the performance over a range of data sizes and comm size. Any help in this regard will be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Chandan
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Chandan Basu
</span><br>
<span class="quotelev2">&gt;&gt; National Supercomputer Center
</span><br>
<span class="quotelev2">&gt;&gt; Link&#246;ping University
</span><br>
<span class="quotelev2">&gt;&gt; S-581 83 Link&#246;ping
</span><br>
<span class="quotelev2">&gt;&gt; email: cbasu_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;1 # num of collectives 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;3 # ID = 3 Alltoall collective (ID in coll_tuned.h) 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;2 # number of com sizes 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;1 # comm size 1 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;1 # number of msg sizes 1 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;0 1 0 0 # for message size 0, linear 1, topo 0, 0 segmentation 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;8 # comm size 8 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;4 # number of msg sizes 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;0 1 0 0 # for message size 0, linear 1, topo 0, 0 segmentation 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;32768 2 0 0 # 32k, pairwise 2, no topo or segmentation 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;262144 1 0 0 # 256k, use linear 1, no topo or segmentation 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;524288 2 0 0 # message size 512k+, pairwise 2, topo 0, 0 segmentation 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;# end of first collective 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21695.php">Ed Blosch: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>Previous message:</strong> <a href="21693.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>In reply to:</strong> <a href="21686.php">Ralph Castain: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
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
