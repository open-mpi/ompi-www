<?
$subject_val = "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 17:11:55 2009" -->
<!-- isoreceived="20091124221155" -->
<!-- sent="Tue, 24 Nov 2009 14:11:45 -0800" -->
<!-- isosent="20091124221145" -->
<!-- name="Scott Beardsley" -->
<!-- email="scott_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)" -->
<!-- id="4B0C5A21.5050806_at_cse.ucdavis.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="19492113.55731259099387661.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)<br>
<strong>From:</strong> Scott Beardsley (<em>scott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 17:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11274.php">Reuti: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Previous message:</strong> <a href="11272.php">chan_at_[hidden]: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>In reply to:</strong> <a href="11272.php">chan_at_[hidden]: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11274.php">Reuti: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Reply:</strong> <a href="11274.php">Reuti: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; pgcc v9 has problem to compile the above test program:
</span><br>
<p>Not for me (pgcc v9.0-3):
<br>
<p>$ cat c.c
<br>
#include&lt;stddef.h&gt;
<br>
int
<br>
main ()
<br>
{
<br>
struct foo {int a, b;}; size_t offset = offsetof(struct foo, b);
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
$ pgcc -V
<br>
<p>pgcc 9.0-3 64-bit target on x86-64 Linux -tp gh-64
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
<br>
$ pgcc c.c
<br>
$ echo $?
<br>
0
<br>
<p><span class="quotelev1">&gt; PGC/x86-64 Linux 9.0-4: compilation completed with severe errors
</span><br>
<p>Ahh it looks like you have a slightly newer version of pgcc than I do.
<br>
That might explain the difference.
<br>
<p>Scott
<br>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11273/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11274.php">Reuti: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Previous message:</strong> <a href="11272.php">chan_at_[hidden]: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>In reply to:</strong> <a href="11272.php">chan_at_[hidden]: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11274.php">Reuti: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Reply:</strong> <a href="11274.php">Reuti: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
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
