<?
$subject_val = "[OMPI devel] stdout, stderr reporting different values for isatty";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 08:22:10 2015" -->
<!-- isoreceived="20150727122210" -->
<!-- sent="Mon, 27 Jul 2015 14:22:08 +0200 (CEST)" -->
<!-- isosent="20150727122208" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[OMPI devel] stdout, stderr reporting different values for isatty" -->
<!-- id="1545563637.35536.1437999728958.JavaMail.zimbra_at_hlrs.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] stdout, stderr reporting different values for isatty<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 08:22:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17714.php">Gilles Gouaillardet: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>Previous message:</strong> <a href="17712.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17714.php">Gilles Gouaillardet: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>Reply:</strong> <a href="17714.php">Gilles Gouaillardet: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I know, using stdout and stderr within MPI programs is in no way good.
<br>
Nevertheless I found that - and now wonder why - isatty inside an MPI program reports different values for stdout and stderr in Open MPI:
<br>
<p># Running as non MPI program:
<br>
./isatty-test 
<br>
[0/1] stdout FILENO: 1, TTY: 1
<br>
[0/1] stderr FILENO: 2, TTY: 1
<br>
<p># Running with Open MPI 1.8.7:
<br>
mpirun -np 2 ./isatty-test
<br>
[1/2] stdout FILENO: 1, TTY: 1
<br>
[1/2] stderr FILENO: 2, TTY: 0
<br>
[0/2] stdout FILENO: 1, TTY: 1
<br>
[0/2] stderr FILENO: 2, TTY: 0
<br>
<p>... not sure if this is good or bad. Both are forwarded correctly to the tty as far as I see...
<br>
<p>Redirecting stdout or stderr to files does not change anything in the Open MPI case.
<br>
<p>Best regards
<br>
Christoph Niethammer
<br>
<p>PS: MPICH reports in all cases 0 for isatty() on stdout and stderr. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17714.php">Gilles Gouaillardet: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>Previous message:</strong> <a href="17712.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17714.php">Gilles Gouaillardet: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>Reply:</strong> <a href="17714.php">Gilles Gouaillardet: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
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
