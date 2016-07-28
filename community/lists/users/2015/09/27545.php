<?
$subject_val = "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 07:39:39 2015" -->
<!-- isoreceived="20150908113939" -->
<!-- sent="Tue, 8 Sep 2015 20:39:37 +0900" -->
<!-- isosent="20150908113937" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java" -->
<!-- id="CAAkFZ5tY5D8=FNxNBPwgCxyGf6gTW6JGO4j018aQA=OWQ4K2dg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55EE963E.80302_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 07:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27546.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Previous message:</strong> <a href="27544.php">Siegmar Gross: "[OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>In reply to:</strong> <a href="27543.php">Siegmar Gross: "[OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27546.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Reply:</strong> <a href="27546.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>can you post your test program ?
<br>
<p>did you try to run the very same test with ompi configure'd without
<br>
--enable-heterogeneous ?
<br>
did this help ?
<br>
<p>can you reproduce the crash with the v2.x series ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, September 8, 2015, Siegmar Gross &lt;
<br>
Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yesterday I have built openmpi-v1.10.0-5-ge0b85ea on my
</span><br>
<span class="quotelev1">&gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev1">&gt; Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sometimes I have the following problem when I run a small Java
</span><br>
<span class="quotelev1">&gt; program in my heterogeneous environment. The problem arises
</span><br>
<span class="quotelev1">&gt; even if I only use my Linux box. It doesn't matter if I use
</span><br>
<span class="quotelev1">&gt; my cc- or gcc-version of Open MPI. Sometimes I must run the
</span><br>
<span class="quotelev1">&gt; program 10 times before the error shows up. I couldn't
</span><br>
<span class="quotelev1">&gt; reproduce the error with openmpi-v2.x-dev-325-g8ae44ea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc1 fd1026 102 mpiexec -np 2 java MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.1_64_cc/lib64/libmpi_java.so.1.2.0 which might have
</span><br>
<span class="quotelev1">&gt; disabled stack guard. The VM will try to fix the stack guard now.
</span><br>
<span class="quotelev1">&gt; It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev1">&gt; &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev1">&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.1_64_cc/lib64/libmpi_java.so.1.2.0 which might have
</span><br>
<span class="quotelev1">&gt; disabled stack guard. The VM will try to fix the stack guard now.
</span><br>
<span class="quotelev1">&gt; It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev1">&gt; &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 1 process sends its greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 1:
</span><br>
<span class="quotelev1">&gt;   message tag:    3
</span><br>
<span class="quotelev1">&gt;   message length: 6
</span><br>
<span class="quotelev1">&gt;   message:        linpc1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc1 fd1026 102 mpiexec -np 4 java MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt; ... (above message)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 3 processes are sending greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 3:
</span><br>
<span class="quotelev1">&gt;   message tag:    3
</span><br>
<span class="quotelev1">&gt;   message length: 6
</span><br>
<span class="quotelev1">&gt;   message:
</span><br>
<span class="quotelev1">&gt; linpc1??????????????????????????????????????????????????????????????????|}~
</span><br>
<span class="quotelev1">&gt; ?(?4???? ?????? ?????? ?????? ?????  ???
</span><br>
<span class="quotelev1">&gt; 9:!&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 2:
</span><br>
<span class="quotelev1">&gt;   message tag:    3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27545/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27546.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Previous message:</strong> <a href="27544.php">Siegmar Gross: "[OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>In reply to:</strong> <a href="27543.php">Siegmar Gross: "[OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27546.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Reply:</strong> <a href="27546.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
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
