<?
$subject_val = "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines) (Timur Magomedov)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 12:40:58 2010" -->
<!-- isoreceived="20100426164058" -->
<!-- sent="Mon, 26 Apr 2010 18:40:31 +0200" -->
<!-- isosent="20100426164031" -->
<!-- name="TRINH Minh Hieu" -->
<!-- email="mhtrinh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines) (Timur Magomedov)" -->
<!-- id="u2l698a35c61004260940nb254a5demae15f86d20f77416_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines) (Timur Magomedov)" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines) (Timur Magomedov)<br>
<strong>From:</strong> TRINH Minh Hieu (<em>mhtrinh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 12:40:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12797.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12795.php">Jed Brown: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I downloaded the nightly trunk snapshot openmpi-1.7a1r23032. I recompiled
<br>
openmpi and my test code, and put back the btl_tcp_eager_limit to default.
<br>
The bug seems to be fixed. I don't have the segfault anymore even with big
<br>
array (up to 685MB).
<br>
Thanks to all the developpers.
<br>
<p>There is a ticket on the bug trac about this problem that may need to be
<br>
updated :
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2336">https://svn.open-mpi.org/trac/ompi/ticket/2336</a>
<br>
<p>Regards,
<br>
<p>&nbsp;&nbsp;&nbsp;TMHieu
<br>
<p>On Mon, Apr 26, 2010 at 5:08 PM, &lt;users-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 9
</span><br>
<span class="quotelev1">&gt; Date: Mon, 26 Apr 2010 13:19:38 +0400
</span><br>
<span class="quotelev1">&gt; From: Timur Magomedov &lt;timur.magomedov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Segmentation fault when Send/Recv on
</span><br>
<span class="quotelev1">&gt;        heterogeneouscluster (32/64 bit machines)
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;1272273578.2131.3.camel_at_magomedov-desktop&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;UTF-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; You can get nightly trunk snapshot from here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt; You can grab openmpi-1.7a1r23032 and test it. This will be great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ? ???, 26/04/2010 ? 10:26 +0200, TRINH Minh Hieu ?????:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can help to test the patch if you need to. But I don't know much how
</span><br>
<span class="quotelev2">&gt; &gt; to you svn to get the latest source to test.
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    TMHieu
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Message: 1
</span><br>
<span class="quotelev2">&gt; &gt;         Date: Fri, 23 Apr 2010 20:15:58 +0400
</span><br>
<span class="quotelev2">&gt; &gt;         From: Timur Magomedov &lt;timur.magomedov_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Subject: Re: [OMPI users] Segmentation fault when Send/Recv on
</span><br>
<span class="quotelev2">&gt; &gt;                heterogeneouscluster (32/64 bit machines)
</span><br>
<span class="quotelev2">&gt; &gt;         To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Message-ID: &lt;1272039358.4818.137.camel_at_magomedov-desktop&gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Content-Type: text/plain; charset=&quot;UTF-8&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Hello,
</span><br>
<span class="quotelev2">&gt; &gt;         It seems that this was really a bug. It was recently fixed in
</span><br>
<span class="quotelev2">&gt; &gt;         repository
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="https://svn.open-mpi.org/trac/ompi/changeset/23030">https://svn.open-mpi.org/trac/ompi/changeset/23030</a>
</span><br>
<span class="quotelev2">&gt; &gt;         and will likely be fixed in next 1.4 release.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Here is corresponding thread in ompi-devel:
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7787.php">http://www.open-mpi.org/community/lists/devel/2010/04/7787.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ============================================
</span><br>
<span class="quotelev2">&gt; &gt;   M. TRINH Minh Hieu
</span><br>
<span class="quotelev2">&gt; &gt;   CEA, IBEB, SBTN/LIRM,
</span><br>
<span class="quotelev2">&gt; &gt;   F-30207 Bagnols-sur-C?ze, FRANCE
</span><br>
<span class="quotelev2">&gt; &gt; ============================================
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
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Timur Magomedov
</span><br>
<span class="quotelev1">&gt; Senior C++ Developer
</span><br>
<span class="quotelev1">&gt; DevelopOnBox LLC / Zodiac Interactive
</span><br>
<span class="quotelev1">&gt; <a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12796/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12797.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12795.php">Jed Brown: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
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
