<?
$subject_val = "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 17:38:52 2010" -->
<!-- isoreceived="20101014213852" -->
<!-- sent="Thu, 14 Oct 2010 23:38:47 +0200" -->
<!-- isosent="20101014213847" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="AANLkTinumk+M0UnrwdTKj_RjAFtJW5ckbt0owW4odARY_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0AFAB789-BCA3-4290-A28D-D0870B93C5E7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 17:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14471.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14469.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14469.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14471.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14471.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 14, 2010 at 23:31, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Strange, because I see
</span><br>
<span class="quotelev1">&gt; /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs/libmpi.so
</span><br>
<span class="quotelev1">&gt; explicitly listed in the link line, which should contain MPI_Abort.  Can you
</span><br>
<span class="quotelev1">&gt; nm on that file and ensure that it is actually listed there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>$ nm -D
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs/libmpi.so
<br>
|grep MPI_Abort
<br>
0000000000074380 T PMPI_Abort
<br>
<p>In contrast, with gcc:
<br>
<p>$ nm -D
<br>
/home/jed/src/openmpi-1.5/bgcc/ompi/contrib/vt/vt/../../../.libs/libmpi.so
<br>
|grep MPI_Abort
<br>
00000000000712d0 W MPI_Abort
<br>
00000000000712d0 T PMPI_Abort
<br>
<p>Weak symbol issue, I don't know how clang is different in this regard.
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14470/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14471.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14469.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14469.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14471.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14471.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
