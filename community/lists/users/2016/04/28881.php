<?
$subject_val = "[OMPI users] Building against XLC XLF";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 22:28:43 2016" -->
<!-- isoreceived="20160404022843" -->
<!-- sent="Sun, 3 Apr 2016 22:28:42 -0400" -->
<!-- isosent="20160404022842" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Building against XLC XLF" -->
<!-- id="CAFVdyvMuur5LwiAubCEMgU6U86LHjFZf-L9W8zveNF_3B_0sDA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Building against XLC XLF<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-03 22:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28882.php">Gilles Gouaillardet: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>Previous message:</strong> <a href="28880.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28882.php">Gilles Gouaillardet: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>Reply:</strong> <a href="28882.php">Gilles Gouaillardet: "Re: [OMPI users] Building against XLC XLF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently needed to build an OpenMPI build on Power 8 where I had access
<br>
to xlc / xlf
<br>
<p>The current release fails (as noted in the readme)
<br>
But a clone as of April 4th from git worked, here is my (simple) configure
<br>
script:
<br>
<p>COMPILERS='CC=xlc FC=xlf CXX=xlc++'
<br>
./configure             \
<br>
--prefix=$PREFIX        \
<br>
--mandir=$PREFIX/man    \
<br>
$COMPILERS
<br>
<p>Is there a better way to check other than
<br>
make check
<br>
<p>It had not failures.
<br>
<p>xlc --version
<br>
IBM XL C/C++ for Linux, V13.1.3 (5725-C73, 5765-J08)
<br>
xlf -qversion
<br>
IBM XL Fortran for Linux, V15.1.3 (5725-C75, 5765-J10)
<br>
Version: 15.01.0003.0001
<br>
<p><p>Thanks!
<br>
<p><pre>
-- 
Brock Palen
www.umich.edu/~brockp
Assoc. Director Advanced Research Computing - TS
XSEDE Campus Champion
brockp_at_[hidden]
(734)936-1985
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28882.php">Gilles Gouaillardet: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>Previous message:</strong> <a href="28880.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28882.php">Gilles Gouaillardet: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>Reply:</strong> <a href="28882.php">Gilles Gouaillardet: "Re: [OMPI users] Building against XLC XLF"</a>
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
