<?
$subject_val = "Re: [OMPI users] How to get started?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 06:00:25 2008" -->
<!-- isoreceived="20081002100025" -->
<!-- sent="Thu, 2 Oct 2008 12:00:20 +0200" -->
<!-- isosent="20081002100020" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to get started?" -->
<!-- id="9b0da5ce0810020300r21112a2q3b8a192d159222a9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62da47a00810020007t1c5ab472y253ea5a39a8a564c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to get started?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-02 06:00:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6827.php">Jaime Perea: "[OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6825.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="6825.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6835.php">Gus Correa: "Re: [OMPI users] How to get started?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's difficult to tell what is going on without seeing the source code,
<br>
but the error message seems to indicate that you wrote
<br>
&nbsp;&nbsp;#include &quot;ompi.h&quot;
<br>
instead of
<br>
&nbsp;&nbsp;#include &quot;mpi.h&quot;
<br>
<p>Jody
<br>
<p>On Thu, Oct 2, 2008 at 9:07 AM, Anugraha Sankaranarayanan
<br>
&lt;atomhouse_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt;Thank you, everyone.I have successfully installed the openmpi pkg in
</span><br>
<span class="quotelev2">&gt;&gt;my ubuntu hardy heron for gcc( HP Compaq Dual-core notebook) following
</span><br>
<span class="quotelev2">&gt;&gt;the instructions in the FAQ page.I still need to install the
</span><br>
<span class="quotelev2">&gt;&gt;libopenmpi-dev header file pkg.Will come back after doing that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Anugraha.S
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've installed the libopenmpi-dev and also openmpi-bin.I tried to compile a
</span><br>
<span class="quotelev1">&gt; sample program and am getting this error,
</span><br>
<span class="quotelev1">&gt; atom_at_atom-laptop:~$ mpicc sample.c -o sample
</span><br>
<span class="quotelev1">&gt; sample.c:2:17: error: ompi.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; sample.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; sample.c:7: error: 'mpi_comm_world' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; sample.c:7: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; sample.c:7: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I using the wrong header file? I tried ompic.h too, but the same
</span><br>
<span class="quotelev1">&gt; error.What do i have to do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking in advance,
</span><br>
<span class="quotelev1">&gt; S.Anugraha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6827.php">Jaime Perea: "[OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6825.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="6825.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6835.php">Gus Correa: "Re: [OMPI users] How to get started?"</a>
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
