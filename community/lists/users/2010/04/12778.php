<?
$subject_val = "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 05:19:45 2010" -->
<!-- isoreceived="20100426091945" -->
<!-- sent="Mon, 26 Apr 2010 13:19:38 +0400" -->
<!-- isosent="20100426091938" -->
<!-- name="Timur Magomedov" -->
<!-- email="timur.magomedov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)" -->
<!-- id="1272273578.2131.3.camel_at_magomedov-desktop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="l2j698a35c61004260126m999b4aa2mf4ef0ceadfb79f0d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)<br>
<strong>From:</strong> Timur Magomedov (<em>timur.magomedov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 05:19:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12779.php">Conboy, James: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12777.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12777.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
You can get nightly trunk snapshot from here
<br>
<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
You can grab openmpi-1.7a1r23032 and test it. This will be great.
<br>
<p>&#208;&#146; &#208;&#159;&#208;&#189;&#208;&#180;, 26/04/2010 &#208;&#178; 10:26 +0200, TRINH Minh Hieu &#208;&#191;&#208;&#184;&#209;&#136;&#208;&#181;&#209;&#130;:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can help to test the patch if you need to. But I don't know much how
</span><br>
<span class="quotelev1">&gt; to you svn to get the latest source to test.
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    TMHieu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Message: 1
</span><br>
<span class="quotelev1">&gt;         Date: Fri, 23 Apr 2010 20:15:58 +0400
</span><br>
<span class="quotelev1">&gt;         From: Timur Magomedov &lt;timur.magomedov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subject: Re: [OMPI users] Segmentation fault when Send/Recv on
</span><br>
<span class="quotelev1">&gt;                heterogeneouscluster (32/64 bit machines)
</span><br>
<span class="quotelev1">&gt;         To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Message-ID: &lt;1272039358.4818.137.camel_at_magomedov-desktop&gt;
</span><br>
<span class="quotelev1">&gt;         Content-Type: text/plain; charset=&quot;UTF-8&quot;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Hello,
</span><br>
<span class="quotelev1">&gt;         It seems that this was really a bug. It was recently fixed in
</span><br>
<span class="quotelev1">&gt;         repository
</span><br>
<span class="quotelev1">&gt;         <a href="https://svn.open-mpi.org/trac/ompi/changeset/23030">https://svn.open-mpi.org/trac/ompi/changeset/23030</a>
</span><br>
<span class="quotelev1">&gt;         and will likely be fixed in next 1.4 release.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Here is corresponding thread in ompi-devel:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7787.php">http://www.open-mpi.org/community/lists/devel/2010/04/7787.php</a>
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt;   M. TRINH Minh Hieu
</span><br>
<span class="quotelev1">&gt;   CEA, IBEB, SBTN/LIRM,
</span><br>
<span class="quotelev1">&gt;   F-30207 Bagnols-sur-C&#195;&#168;ze, FRANCE
</span><br>
<span class="quotelev1">&gt; ============================================
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
Kind regards,
Timur Magomedov
Senior C++ Developer
DevelopOnBox LLC / Zodiac Interactive
<a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12779.php">Conboy, James: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12777.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12777.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
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
