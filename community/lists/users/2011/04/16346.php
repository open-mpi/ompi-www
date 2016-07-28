<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 26 22:51:25 2011" -->
<!-- isoreceived="20110427025125" -->
<!-- sent="Wed, 27 Apr 2011 10:51:21 +0800" -->
<!-- isosent="20110427025121" -->
<!-- name="&#195;&#207;&#207;&#220;&#190;&#252;" -->
<!-- email="xjun.meng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv function crashes when np &amp;gt; 100" -->
<!-- id="BANLkTinqFUkDL3uNuQ-VjMn9voRJqGaj_w_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="BANLkTimd_Vva9ziKJx9P2M+_PxTgbfOhdQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100<br>
<strong>From:</strong> &#195;&#207;&#207;&#220;&#190;&#252; (<em>xjun.meng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-26 22:51:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16347.php">christophe petit: "[OMPI users] [SPAM:### 84%]"</a>
<li><strong>Previous message:</strong> <a href="16345.php">Dave Love: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>In reply to:</strong> <a href="16338.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16589.php">Jeff Squyres: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16589.php">Jeff Squyres: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems that the const variable SOMAXCONN who used by listen() system call
<br>
causes this problem. Can anybody help me resolve this question?
<br>
<p>2011/4/25 &#195;&#207;&#207;&#220;&#190;&#252; &lt;xjun.meng_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I mentioned, when I mpiruned an application with the parameter &quot;np =
</span><br>
<span class="quotelev1">&gt; 150(or bigger)&quot;, the application who used the MPI_Alltoallv function would
</span><br>
<span class="quotelev1">&gt; carsh. The problem would recur no matter how many nodes we used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The edition of OpenMPI: 1.4.1 or 1.4.3
</span><br>
<span class="quotelev1">&gt; The OS: linux redhat 2.6.32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, my nodes had enough memory to run the application, and the
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall function worked well at my environment.
</span><br>
<span class="quotelev1">&gt; Did anybody meet the same problem? Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16346/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16347.php">christophe petit: "[OMPI users] [SPAM:### 84%]"</a>
<li><strong>Previous message:</strong> <a href="16345.php">Dave Love: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>In reply to:</strong> <a href="16338.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16589.php">Jeff Squyres: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16589.php">Jeff Squyres: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
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
