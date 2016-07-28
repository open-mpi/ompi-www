<?
$subject_val = "Re: [OMPI users] Build error with gcc-4.9.2?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 19:46:25 2015" -->
<!-- isoreceived="20150413234625" -->
<!-- sent="Mon, 13 Apr 2015 17:46:24 -0600" -->
<!-- isosent="20150413234624" -->
<!-- name="John Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build error with gcc-4.9.2?" -->
<!-- id="552C5550.9030501_at_txcorp.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4B5F37D2-6A6A-40F9-91C9-A9D698BBF229_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-04-13 19:46:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26706.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26704.php">Ralph Castain: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>In reply to:</strong> <a href="26704.php">Ralph Castain: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should have mentioned that I was working on Linux.
<br>
<p><p>On 4/13/2015 5:34 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yeah, I verified that on a new machine (Mac OSX 10.10) everything 
</span><br>
<span class="quotelev1">&gt; built fine with gcc 4.9.2 - but that&#146;s a new glibc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 13, 2015, at 4:30 PM, John Cary &lt;cary_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:cary_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now found the related issue, 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26134.php">http://www.open-mpi.org/community/lists/users/2015/01/26134.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are similarly using a newer compiler (gcc-4.9.2) on an older
</span><br>
<span class="quotelev2">&gt;&gt; machine (glibc-2.5).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As noted in the above issue, upon adding -fgnu89-inline it built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ....J
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/13/2015 4:25 PM, Novosielski, Ryan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe I reported same some months back. I don't remember the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; outcome or whether I got it working. But you're not alone anyway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; || \\UTGERS &lt;smb://UTGERS&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      |---------------------*O*---------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ||_// Biomedical | Ryan Novosielski - Senior Technologist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; || \\ and Health | novosirj_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:novosirj_at_[hidden]&gt;- 973/972.0922 (2x0922)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     `'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 13, 2015, at 17:21, John Cary &lt;cary_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:cary_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am seeing:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in tools/ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/scr_devlinux/cary/vorpalall/builds/openmpi-1.8.4/static/ompi/tools/ompi_info'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC       ompi_info.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC       param.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CCLD     ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.a(strfns.o): In function `lstat64':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strfns.c:(.text+0x0): multiple definition of `lstat64'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0): 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first defined here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.a(ad_init.o): In function `lstat64':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ad_init.c:(.text+0x30): multiple definition of `lstat64'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0): 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first defined here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.a(delete.o): In function `lstat64':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; delete.c:(.text+0x0): multiple definition of `lstat64'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0): 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first defined here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.a(iread.o): In function `lstat64':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; iread.c:(.text+0x0): multiple definition of `lstat64'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0): 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first defined here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.a(iread_at.o): In function `lstat64':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; iread_at.c:(.text+0x0): multiple definition of `lstat64'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0): 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first defined here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gcc (GCC) 4.9.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and openmpi configured with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-static \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --disable-shared \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-pic \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --disable-dlopen \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-valgrind=/path/valgrind \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --disable-vt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thoughts?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thx...J
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26701.php">http://www.open-mpi.org/community/lists/users/2015/04/26701.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/04/26702.php">http://www.open-mpi.org/community/lists/users/2015/04/26702.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26703.php">http://www.open-mpi.org/community/lists/users/2015/04/26703.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26704.php">http://www.open-mpi.org/community/lists/users/2015/04/26704.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26705/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26706.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26704.php">Ralph Castain: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>In reply to:</strong> <a href="26704.php">Ralph Castain: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
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
