<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 07:26:25 2011" -->
<!-- isoreceived="20110520112625" -->
<!-- sent="Fri, 20 May 2011 07:26:19 -0400" -->
<!-- isosent="20110520112619" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv function crashes when np &amp;gt; 100" -->
<!-- id="F9F71854-B9DD-459F-999D-8A8AEF8D6006_at_cisco.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="BANLkTinqFUkDL3uNuQ-VjMn9voRJqGaj_w_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 07:26:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16590.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..."</a>
<li><strong>Previous message:</strong> <a href="16588.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16346.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16601.php">цооэ╬Э: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>Reply:</strong> <a href="16601.php">цооэ╬Э: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I missed this email in my INBOX, sorry.
<br>
<p>Can you be more specific about what exact error is occurring?  You just say that the application crashes...?  Please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Apr 26, 2011, at 10:51 PM, &#195;&#207;&#207;&#220;&#190;&#252; wrote:
<br>
<p><span class="quotelev1">&gt; It seems that the const variable SOMAXCONN who used by listen() system call causes this problem. Can anybody help me resolve this question?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/4/25 &#195;&#207;&#207;&#220;&#190;&#252; &lt;xjun.meng_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I mentioned, when I mpiruned an application with the parameter &quot;np = 150(or bigger)&quot;, the application who used the MPI_Alltoallv function would carsh. The problem would recur no matter how many nodes we used. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The edition of OpenMPI: 1.4.1 or 1.4.3
</span><br>
<span class="quotelev1">&gt; The OS: linux redhat 2.6.32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, my nodes had enough memory to run the application, and the MPI_Alltoall function worked well at my environment.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16590.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..."</a>
<li><strong>Previous message:</strong> <a href="16588.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16346.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16601.php">цооэ╬Э: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>Reply:</strong> <a href="16601.php">цооэ╬Э: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
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
