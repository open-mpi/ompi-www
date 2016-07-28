<?
$subject_val = "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 05:58:06 2010" -->
<!-- isoreceived="20100107105806" -->
<!-- sent="Thu, 7 Jan 2010 11:57:56 +0100" -->
<!-- isosent="20100107105756" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3" -->
<!-- id="201001071158.00948.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3cc760c91001060906m4cce47f4i857a5195b0afdc98_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 05:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11706.php">Ake Sandgren: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Previous message:</strong> <a href="11704.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>In reply to:</strong> <a href="11702.php">Tim Miller: "[OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11706.php">Ake Sandgren: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Reply:</strong> <a href="11706.php">Ake Sandgren: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 06 January 2010, Tim Miller wrote:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to compile OpenMPI 1.4 with PGI 9.0-3 and am getting the
</span><br>
<span class="quotelev1">&gt; following error in configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for functional offsetof macro... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Your compiler does not support offsetof macro
</span><br>
<span class="quotelev1">&gt; configure: error: Configure: Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have searched around and found that this error occurs because of a
</span><br>
<span class="quotelev1">&gt; problem in the configure scripts when PGI 10 is used, but I'm using 9.0-3
</span><br>
<span class="quotelev1">&gt; which should not have the configure script issue. Here is the output of
</span><br>
<span class="quotelev1">&gt; pgcc -V:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pgcc 9.0-3 64-bit target on x86-64 Linux -tp k8-64e
</span><br>
<span class="quotelev1">&gt; Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what's wrong here as other people have reported being able to
</span><br>
<span class="quotelev1">&gt; build OpenMPI with PGI 9. Does anyone have any ideas?
</span><br>
<p>Maybe a late enough PGI-9 behaves like PGI-10. You could try the 1.4.1-rc1 
<br>
which should work with PGI-10 and see if it fixes your problems too.
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim Miller
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11705/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11706.php">Ake Sandgren: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Previous message:</strong> <a href="11704.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>In reply to:</strong> <a href="11702.php">Tim Miller: "[OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11706.php">Ake Sandgren: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Reply:</strong> <a href="11706.php">Ake Sandgren: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
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
