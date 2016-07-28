<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 06:51:51 2011" -->
<!-- isoreceived="20110521105151" -->
<!-- sent="Sat, 21 May 2011 18:51:45 +0800" -->
<!-- isosent="20110521105145" -->
<!-- name="&#195;&#207;&#207;&#220;&#190;&#252;" -->
<!-- email="xjun.meng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv function crashes when np &amp;gt; 100" -->
<!-- id="BANLkTi=+YH9dGEXZsj4VA94ygd8_sT6asQ_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="F9F71854-B9DD-459F-999D-8A8AEF8D6006_at_cisco.com" -->
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
<strong>Date:</strong> 2011-05-21 06:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16602.php">sushil samant: "Re: [OMPI users] reading from a file"</a>
<li><strong>Previous message:</strong> <a href="16600.php">Jason Mackay: "Re: [OMPI users] users Digest, Vol 1911, Issue 4"</a>
<li><strong>In reply to:</strong> <a href="16589.php">Jeff Squyres: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16757.php">Jeffrey A Cummings: "[OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16757.php">Jeffrey A Cummings: "[OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>I have found the reason that cause the problem, when call MPI_Alltoall(v)
<br>
with many processes(300 for instanse), it will build lots of connections in
<br>
a very short space of time. This situation causes my network card drops lots
<br>
of packages including the 'syn' packages, as the result, the connection
<br>
building failed. After I figure this porblem out, my program works well.
<br>
<p>By the way, I think the error infomation is not reasonable, which takes me
<br>
lots of time to fix this bug : )
<br>
<p>Thanks
<br>
Xianjun
<br>
<p>&#212;&#218; 2011&#196;&#234;5&#212;&#194;20&#200;&#213; &#207;&#194;&#206;&#231;7:26&#163;&#172;Jeff Squyres &lt;jsquyres_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
<br>
<p><span class="quotelev1">&gt; I missed this email in my INBOX, sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you be more specific about what exact error is occurring?  You just say
</span><br>
<span class="quotelev1">&gt; that the application crashes...?  Please send all the information listed
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 26, 2011, at 10:51 PM, &#195;&#207;&#207;&#220;&#190;&#252; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems that the const variable SOMAXCONN who used by listen() system
</span><br>
<span class="quotelev1">&gt; call causes this problem. Can anybody help me resolve this question?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2011/4/25 &#195;&#207;&#207;&#220;&#190;&#252; &lt;xjun.meng_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I mentioned, when I mpiruned an application with the parameter &quot;np =
</span><br>
<span class="quotelev1">&gt; 150(or bigger)&quot;, the application who used the MPI_Alltoallv function would
</span><br>
<span class="quotelev1">&gt; carsh. The problem would recur no matter how many nodes we used.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The edition of OpenMPI: 1.4.1 or 1.4.3
</span><br>
<span class="quotelev2">&gt; &gt; The OS: linux redhat 2.6.32
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BTW, my nodes had enough memory to run the application, and the
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall function worked well at my environment.
</span><br>
<span class="quotelev2">&gt; &gt; Did anybody meet the same problem? Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16601/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16602.php">sushil samant: "Re: [OMPI users] reading from a file"</a>
<li><strong>Previous message:</strong> <a href="16600.php">Jason Mackay: "Re: [OMPI users] users Digest, Vol 1911, Issue 4"</a>
<li><strong>In reply to:</strong> <a href="16589.php">Jeff Squyres: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16757.php">Jeffrey A Cummings: "[OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16757.php">Jeffrey A Cummings: "[OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
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
