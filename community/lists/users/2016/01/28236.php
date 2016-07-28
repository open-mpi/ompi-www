<?
$subject_val = "[OMPI users] warnings building openmpi-v2.x-dev-950-g995993b";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 05:08:52 2016" -->
<!-- isoreceived="20160107100852" -->
<!-- sent="Thu, 7 Jan 2016 11:08:16 +0100" -->
<!-- isosent="20160107100816" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] warnings building openmpi-v2.x-dev-950-g995993b" -->
<!-- id="568E3910.6080301_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] warnings building openmpi-v2.x-dev-950-g995993b<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-07 05:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28237.php">Au Eelis: "[OMPI users] Singleton process spawns additional thread"</a>
<li><strong>Previous message:</strong> <a href="28235.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>perhaps sombody is interested in some warnings which I got building
<br>
openmpi-v2.x-dev-950-g995993b on my machines (Solaris 10 Sparc,
<br>
Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with gcc-5.1.0
<br>
and Sun C 5.13. I got the same warnings on Solaris sparc and x86_64.
<br>
<p>I've produced the attached files with the following command
<br>
<p>grep -i warning \
<br>
&nbsp;&nbsp;&nbsp;openmpi-v2.x-dev-950-g995993b-Linux.x86_64.64_cc/log.make.* | \
<br>
&nbsp;&nbsp;&nbsp;grep -v atomic.h | grep -v relinking | grep -v &quot;not reached&quot; | \
<br>
&nbsp;&nbsp;&nbsp;grep -v &quot;failed to detect system&quot; | grep -v &quot;Optimizer level&quot; | \
<br>
&nbsp;&nbsp;&nbsp;grep -v &quot;seems to be&quot; | grep -v &quot;attempted multiple&quot; | \
<br>
&nbsp;&nbsp;&nbsp;sort | uniq &gt; /tmp/warning_Linux_x86_64_cc.txt
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>



<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28236/warning_Linux_x86_64_cc.txt">warning_Linux_x86_64_cc.txt</a>
</ul>
<!-- attachment="warning_Linux_x86_64_cc.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28236/warning_Linux_x86_64_gcc.txt">warning_Linux_x86_64_gcc.txt</a>
</ul>
<!-- attachment="warning_Linux_x86_64_gcc.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28236/warning_SunOS_cc.txt">warning_SunOS_cc.txt</a>
</ul>
<!-- attachment="warning_SunOS_cc.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28236/warning_SunOS_gcc.txt">warning_SunOS_gcc.txt</a>
</ul>
<!-- attachment="warning_SunOS_gcc.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28237.php">Au Eelis: "[OMPI users] Singleton process spawns additional thread"</a>
<li><strong>Previous message:</strong> <a href="28235.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
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
