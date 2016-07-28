<?
$subject_val = "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 09:53:44 2015" -->
<!-- isoreceived="20150908135344" -->
<!-- sent="Tue, 8 Sep 2015 22:53:38 +0900" -->
<!-- isosent="20150908135338" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java" -->
<!-- id="CAAkFZ5sMvR-hD5NiFZ8df9LA0xrKZAjUZ-gfv_nsDw9t-Pq6qw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55EED841.3040600_at_informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2015-09-08 09:53:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27550.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Previous message:</strong> <a href="27548.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>In reply to:</strong> <a href="27546.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27551.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Reply:</strong> <a href="27551.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Siegmar,
<br>
<p>at first glance, I suspect String.valueOf(buffer)
<br>
buffer is 256 chars, but the message you really want to print is only the
<br>
first num chars.
<br>
I will double check tomorrow, in the mean time, feel free to revamp the
<br>
test and see if it works better
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, September 8, 2015, Siegmar Gross &lt;
<br>
Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you post your test program ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; did you try to run the very same test with ompi configure'd without
</span><br>
<span class="quotelev2">&gt;&gt; --enable-heterogeneous ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you reproduce the crash with the v2.x series ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, I tried, but wasn't successful :-)).
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
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday, September 8, 2015, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     yesterday I have built openmpi-v1.10.0-5-ge0b85ea on my
</span><br>
<span class="quotelev2">&gt;&gt;     machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev2">&gt;&gt;     Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Sometimes I have the following problem when I run a small Java
</span><br>
<span class="quotelev2">&gt;&gt;     program in my heterogeneous environment. The problem arises
</span><br>
<span class="quotelev2">&gt;&gt;     even if I only use my Linux box. It doesn't matter if I use
</span><br>
<span class="quotelev2">&gt;&gt;     my cc- or gcc-version of Open MPI. Sometimes I must run the
</span><br>
<span class="quotelev2">&gt;&gt;     program 10 times before the error shows up. I couldn't
</span><br>
<span class="quotelev2">&gt;&gt;     reproduce the error with openmpi-v2.x-dev-325-g8ae44ea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     linpc1 fd1026 102 mpiexec -np 2 java MsgSendRecvMain
</span><br>
<span class="quotelev2">&gt;&gt;     Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/local/openmpi-1.10.1_64_cc/lib64/libmpi_java.so.1.2.0 which
</span><br>
<span class="quotelev2">&gt;&gt;     might have disabled stack guard. The VM will try to fix the stack
</span><br>
<span class="quotelev2">&gt;&gt;     guard now.
</span><br>
<span class="quotelev2">&gt;&gt;     It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev2">&gt;&gt;     Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/local/openmpi-1.10.1_64_cc/lib64/libmpi_java.so.1.2.0 which
</span><br>
<span class="quotelev2">&gt;&gt;     might have disabled stack guard. The VM will try to fix the stack
</span><br>
<span class="quotelev2">&gt;&gt;     guard now.
</span><br>
<span class="quotelev2">&gt;&gt;     It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Now 1 process sends its greetings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Greetings from process 1:
</span><br>
<span class="quotelev2">&gt;&gt;        message tag:    3
</span><br>
<span class="quotelev2">&gt;&gt;        message length: 6
</span><br>
<span class="quotelev2">&gt;&gt;        message:        linpc1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     linpc1 fd1026 102 mpiexec -np 4 java MsgSendRecvMain
</span><br>
<span class="quotelev2">&gt;&gt;     ... (above message)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Now 3 processes are sending greetings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Greetings from process 3:
</span><br>
<span class="quotelev2">&gt;&gt;        message tag:    3
</span><br>
<span class="quotelev2">&gt;&gt;        message length: 6
</span><br>
<span class="quotelev2">&gt;&gt;        message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; linpc1??????????????????????????????????????????????????????????????????|}~
</span><br>
<span class="quotelev2">&gt;&gt;     ?(?4???? ?????? ?????? ?????? ?????  ???
</span><br>
<span class="quotelev2">&gt;&gt;     9:!&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Greetings from process 2:
</span><br>
<span class="quotelev2">&gt;&gt;        message tag:    3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27545.php">http://www.open-mpi.org/community/lists/users/2015/09/27545.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27549/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27550.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Previous message:</strong> <a href="27548.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>In reply to:</strong> <a href="27546.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27551.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Reply:</strong> <a href="27551.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
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
