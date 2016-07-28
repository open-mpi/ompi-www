<?
$subject_val = "[OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 04:03:36 2015" -->
<!-- isoreceived="20150908080336" -->
<!-- sent="Tue, 8 Sep 2015 10:03:10 +0200" -->
<!-- isosent="20150908080310" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java" -->
<!-- id="55EE963E.80302_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 04:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27544.php">Siegmar Gross: "[OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Previous message:</strong> <a href="27542.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27545.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Reply:</strong> <a href="27545.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I have built openmpi-v1.10.0-5-ge0b85ea on my
<br>
machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
<br>
Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13.
<br>
<p>Sometimes I have the following problem when I run a small Java
<br>
program in my heterogeneous environment. The problem arises
<br>
even if I only use my Linux box. It doesn't matter if I use
<br>
my cc- or gcc-version of Open MPI. Sometimes I must run the
<br>
program 10 times before the error shows up. I couldn't
<br>
reproduce the error with openmpi-v2.x-dev-325-g8ae44ea.
<br>
<p>linpc1 fd1026 102 mpiexec -np 2 java MsgSendRecvMain
<br>
Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library 
<br>
/usr/local/openmpi-1.10.1_64_cc/lib64/libmpi_java.so.1.2.0 which might 
<br>
have disabled stack guard. The VM will try to fix the stack guard now.
<br>
It's highly recommended that you fix the library with 'execstack -c 
<br>
&lt;libfile&gt;', or link it with '-z noexecstack'.
<br>
Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library 
<br>
/usr/local/openmpi-1.10.1_64_cc/lib64/libmpi_java.so.1.2.0 which might 
<br>
have disabled stack guard. The VM will try to fix the stack guard now.
<br>
It's highly recommended that you fix the library with 'execstack -c 
<br>
&lt;libfile&gt;', or link it with '-z noexecstack'.
<br>
<p>Now 1 process sends its greetings.
<br>
<p>Greetings from process 1:
<br>
&nbsp;&nbsp;&nbsp;message tag:    3
<br>
&nbsp;&nbsp;&nbsp;message length: 6
<br>
&nbsp;&nbsp;&nbsp;message:        linpc1
<br>
<p><p><p>linpc1 fd1026 102 mpiexec -np 4 java MsgSendRecvMain
<br>
... (above message)
<br>
<p>Now 3 processes are sending greetings.
<br>
<p>Greetings from process 3:
<br>
&nbsp;&nbsp;&nbsp;message tag:    3
<br>
&nbsp;&nbsp;&nbsp;message length: 6
<br>
&nbsp;&nbsp;&nbsp;message: 
<br>
linpc1??????????????????????????????????????????????????????????????????|}~?(?4???? 
<br>
?????? ?????? ?????? ?????  ???
<br>
9:!&quot;?
<br>
<p>Greetings from process 2:
<br>
&nbsp;&nbsp;&nbsp;message tag:    3
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27543/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27544.php">Siegmar Gross: "[OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Previous message:</strong> <a href="27542.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27545.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Reply:</strong> <a href="27545.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
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
