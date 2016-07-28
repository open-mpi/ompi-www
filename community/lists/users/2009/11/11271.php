<?
$subject_val = "[OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 14:41:45 2009" -->
<!-- isoreceived="20091124194145" -->
<!-- sent="Tue, 24 Nov 2009 11:41:33 -0800" -->
<!-- isosent="20091124194133" -->
<!-- name="Scott Beardsley" -->
<!-- email="scott_at_[hidden]" -->
<!-- subject="[OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)" -->
<!-- id="4B0C36ED.6090309_at_cse.ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)<br>
<strong>From:</strong> Scott Beardsley (<em>scott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 14:41:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11272.php">chan_at_[hidden]: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Previous message:</strong> <a href="11270.php">Lu&#237;s Miranda: "[OMPI users] How to install openmpi to suport thread_level_multiple?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11272.php">chan_at_[hidden]: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Maybe reply:</strong> <a href="11272.php">chan_at_[hidden]: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a post on the PG forums[1] that claims it is a bug in the OMPI
<br>
1.3.3 configure script. I couldn't find any reference on the
<br>
openmpi-users or openmpi-devel lists. Is there a fix for the configure
<br>
script floating around.
<br>
<p>It seems more like a PGI problem to me. pgcc (v10.0) can't compile the
<br>
following:
<br>
<p>#include&lt;stddef.h&gt;
<br>
int main ()
<br>
{
<br>
struct foo {int a, b;}; size_t offset = offsetof(struct foo, b);
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ pgcc conftest.c
<br>
PGC-S-0037-Syntax error: Recovery attempted by deleting keyword struct
<br>
(conftest.c: 4)
<br>
PGC-S-0039-Use of undeclared variable foo (conftest.c: 4)
<br>
PGC-S-0039-Use of undeclared variable b (conftest.c: 4)
<br>
PGC/x86-64 Linux 10.0-0: compilation completed with severe errors
<br>
$
<br>
<p>pgcc v9 and gcc seem to have no problem with that code.
<br>
<p>Oh, here is my configure command:
<br>
<p>CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 ./configure
<br>
<p>Scott
<br>
---------------
<br>
[1] <a href="http://www.pgroup.com/userforum/viewtopic.php?p=6114">http://www.pgroup.com/userforum/viewtopic.php?p=6114</a>
<br>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11271/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11272.php">chan_at_[hidden]: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Previous message:</strong> <a href="11270.php">Lu&#237;s Miranda: "[OMPI users] How to install openmpi to suport thread_level_multiple?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11272.php">chan_at_[hidden]: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Maybe reply:</strong> <a href="11272.php">chan_at_[hidden]: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
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
