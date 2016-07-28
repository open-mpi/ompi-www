<?
$subject_val = "Re: [OMPI users] How to get started?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 03:07:05 2008" -->
<!-- isoreceived="20081002070705" -->
<!-- sent="Thu, 2 Oct 2008 12:37:00 +0530" -->
<!-- isosent="20081002070700" -->
<!-- name="Anugraha Sankaranarayanan" -->
<!-- email="atomhouse_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to get started?" -->
<!-- id="62da47a00810020007t1c5ab472y253ea5a39a8a564c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B8248BD1-4C12-4730-AE08-A7B82BB641FC_at_cisco.com" -->
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
<strong>From:</strong> Anugraha Sankaranarayanan (<em>atomhouse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-02 03:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6826.php">jody: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6824.php">Doug Reeder: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6454.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6826.php">jody: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6826.php">jody: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6835.php">Gus Correa: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6836.php">Shafagh Jafer: "[OMPI users] mpi2c++ map?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;Thank you, everyone.I have successfully installed the openmpi pkg in
</span><br>
<span class="quotelev1">&gt;my ubuntu hardy heron for gcc( HP Compaq Dual-core notebook) following
</span><br>
<span class="quotelev1">&gt;the instructions in the FAQ page.I still need to install the
</span><br>
<span class="quotelev1">&gt;libopenmpi-dev header file pkg.Will come back after doing that.
</span><br>
<p><span class="quotelev1">&gt;Anugraha.S
</span><br>
<p>I've installed the libopenmpi-dev and also openmpi-bin.I tried to compile a
<br>
sample program and am getting this error,
<br>
atom_at_atom-laptop:~$ mpicc sample.c -o sample
<br>
sample.c:2:17: error: ompi.h: No such file or directory
<br>
sample.c: In function 'main':
<br>
sample.c:7: error: 'mpi_comm_world' undeclared (first use in this function)
<br>
sample.c:7: error: (Each undeclared identifier is reported only once
<br>
sample.c:7: error: for each function it appears in.)
<br>
<p>Am I using the wrong header file? I tried ompic.h too, but the same
<br>
error.What do i have to do?
<br>
<p>Thanking in advance,
<br>
S.Anugraha.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6825/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6826.php">jody: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6824.php">Doug Reeder: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6454.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6826.php">jody: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6826.php">jody: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6835.php">Gus Correa: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6836.php">Shafagh Jafer: "[OMPI users] mpi2c++ map?"</a>
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
