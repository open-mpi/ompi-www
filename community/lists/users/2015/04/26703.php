<?
$subject_val = "Re: [OMPI users] Build error with gcc-4.9.2?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 19:30:28 2015" -->
<!-- isoreceived="20150413233028" -->
<!-- sent="Mon, 13 Apr 2015 17:30:16 -0600" -->
<!-- isosent="20150413233016" -->
<!-- name="John Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build error with gcc-4.9.2?" -->
<!-- id="552C5188.9000908_at_txcorp.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FCEDAE52-DFEF-48A3-95B1-02A0FD030CBB_at_ca.rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Build error with gcc-4.9.2?<br>
<strong>From:</strong> John Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 19:30:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26704.php">Ralph Castain: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Previous message:</strong> <a href="26702.php">Novosielski, Ryan: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>In reply to:</strong> <a href="26702.php">Novosielski, Ryan: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26704.php">Ralph Castain: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Reply:</strong> <a href="26704.php">Ralph Castain: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>Now found the related issue, 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2015/01/26134.php">http://www.open-mpi.org/community/lists/users/2015/01/26134.php</a>
<br>
<p>We are similarly using a newer compiler (gcc-4.9.2) on an older
<br>
machine (glibc-2.5).
<br>
<p>As noted in the above issue, upon adding -fgnu89-inline it built.
<br>
<p>....J
<br>
<p><p><p><p><p>On 4/13/2015 4:25 PM, Novosielski, Ryan wrote:
<br>
<span class="quotelev1">&gt; I believe I reported same some months back. I don't remember the 
</span><br>
<span class="quotelev1">&gt; outcome or whether I got it working. But you're not alone anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
</span><br>
<span class="quotelev1">&gt; || \\UTGERS      |---------------------*O*---------------------
</span><br>
<span class="quotelev1">&gt; ||_// Biomedical | Ryan Novosielski - Senior Technologist
</span><br>
<span class="quotelev1">&gt; || \\ and Health | novosirj_at_[hidden] &lt;mailto:novosirj_at_[hidden]&gt;- 
</span><br>
<span class="quotelev1">&gt; 973/972.0922 (2x0922)
</span><br>
<span class="quotelev1">&gt; ||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
</span><br>
<span class="quotelev1">&gt;     `'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2015, at 17:21, John Cary &lt;cary_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:cary_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am seeing:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/scr_devlinux/cary/vorpalall/builds/openmpi-1.8.4/static/ompi/tools/ompi_info'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       ompi_info.o
</span><br>
<span class="quotelev2">&gt;&gt;   CC       param.o
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD     ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.a(strfns.o): In function `lstat64':
</span><br>
<span class="quotelev2">&gt;&gt; strfns.c:(.text+0x0): multiple definition of `lstat64'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0): 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; first defined here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.a(ad_init.o): In function `lstat64':
</span><br>
<span class="quotelev2">&gt;&gt; ad_init.c:(.text+0x30): multiple definition of `lstat64'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0): 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; first defined here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.a(delete.o): In function `lstat64':
</span><br>
<span class="quotelev2">&gt;&gt; delete.c:(.text+0x0): multiple definition of `lstat64'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0): 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; first defined here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.a(iread.o): In function `lstat64':
</span><br>
<span class="quotelev2">&gt;&gt; iread.c:(.text+0x0): multiple definition of `lstat64'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0): 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; first defined here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.a(iread_at.o): In function `lstat64':
</span><br>
<span class="quotelev2">&gt;&gt; iread_at.c:(.text+0x0): multiple definition of `lstat64'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0): 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; first defined here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; using
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev2">&gt;&gt; gcc (GCC) 4.9.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and openmpi configured with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-static \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-shared \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-pic \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-dlopen \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-valgrind=/path/valgrind \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-vt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thx...J
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26701.php">http://www.open-mpi.org/community/lists/users/2015/04/26701.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26702.php">http://www.open-mpi.org/community/lists/users/2015/04/26702.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26704.php">Ralph Castain: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Previous message:</strong> <a href="26702.php">Novosielski, Ryan: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>In reply to:</strong> <a href="26702.php">Novosielski, Ryan: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26704.php">Ralph Castain: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Reply:</strong> <a href="26704.php">Ralph Castain: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
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
