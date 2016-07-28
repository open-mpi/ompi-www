<?
$subject_val = "[OMPI users] Test works with 3 computers, but not 4?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 15:19:20 2009" -->
<!-- isoreceived="20090729191920" -->
<!-- sent="Wed, 29 Jul 2009 15:19:15 -0400" -->
<!-- isosent="20090729191915" -->
<!-- name="David Doria" -->
<!-- email="daviddoria+openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] Test works with 3 computers, but not 4?" -->
<!-- id="c19fcadc0907291219w6f9912eep45d06e6dd9bf559b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Test works with 3 computers, but not 4?<br>
<strong>From:</strong> David Doria (<em>daviddoria+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 15:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10129.php">Dorian Krause: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wrote a simple program to display &quot;hello world&quot; from each process.
<br>
<p>When I run this (126 - my machine, 122, and 123), everything works fine:
<br>
[doriad_at_daviddoria MPITest]$ mpirun -H 10.1.2.126,10.1.2.122,10.1.2.123
<br>
hello-mpi
<br>
<span class="quotelev1">&gt;From process 1 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt;From process 2 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt;From process 3 out of 3, Hello World!
</span><br>
<p>When I run this (126 - my machine, 122, and 125), everything works fine:
<br>
[doriad_at_daviddoria MPITest]$ mpirun -H 10.1.2.126,10.1.2.122,10.1.2.125
<br>
hello-mpi
<br>
<span class="quotelev1">&gt;From process 2 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt;From process 1 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt;From process 3 out of 3, Hello World!
</span><br>
<p>When I run this (126 - my machine, 123, and 125), everything works fine:
<br>
[doriad_at_daviddoria MPITest]$ mpirun -H 10.1.2.126,10.1.2.123,10.1.2.125
<br>
hello-mpi
<br>
<span class="quotelev1">&gt;From process 2 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt;From process 1 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt;From process 3 out of 3, Hello World!
</span><br>
<p><p>However, when I run this (126 - my machine, 122, 123, AND 125), I get no
<br>
output at all.
<br>
<p>Is there any way to check what is going on / does anyone know what that
<br>
would happen? I'm using OpenMPI 1.3.3
<br>
<p>Thanks,
<br>
<p>David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10130/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10129.php">Dorian Krause: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
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
