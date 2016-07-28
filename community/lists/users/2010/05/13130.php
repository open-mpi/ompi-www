<?
$subject_val = "[OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 23 11:57:54 2010" -->
<!-- isoreceived="20100523155754" -->
<!-- sent="Sun, 23 May 2010 17:57:46 +0200" -->
<!-- isosent="20100523155746" -->
<!-- name="Dawid Laszuk" -->
<!-- email="sednodna_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp" -->
<!-- id="AANLkTil10LEa0ffmTxKxuGwwqQ4C6IrNeI55u3aacwdT_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTilgYP1PTLlfUK9PtpVe98kPYaX6vMKGy442e5YZ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp<br>
<strong>From:</strong> Dawid Laszuk (<em>sednodna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-23 11:57:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13131.php">Glass, Micheal W: "[OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="13129.php">Pankatz, Klaus: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13139.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>Reply:</strong> <a href="13139.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>It's a bit awkward for me to ask, because I'm not only newbie in
<br>
parallel programming but also in Linux system, but i've but searching
<br>
for long enough to loose any hopes.
<br>
<p><p>My problem is, when I try to run compiled code with &quot;mpirun&quot; I get output:
<br>
mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp
<br>
<p>I can compile code with &quot;mpicc&quot; (i write in C) and it runs, but only
<br>
on one CPU ( I have Athlon X2 64bit, dual core ). There is no
<br>
difference when I write &quot;mpirun&quot;, &quot;mpiexec&quot; or &quot;orterun&quot; (but that's
<br>
normal, isn't it?). It doesn't matter what I'm trying to run; I get
<br>
that output just by typing it into console.
<br>
<p>As I said, I know basics with linux and even adding some libs into sys
<br>
path is something which I still don't know ( and don't how much time
<br>
to read about).
<br>
<p>I've attached things which maybe helpful ( output from &quot;./configure&quot;,
<br>
&quot;make all&quot;, &quot;make install&quot; ).
<br>
I'm using Linux Mint 8 ( Kernel Linux 2.6.31-20-generic). Have two CPU
<br>
cores AMD Athlon Dual-Core QL-60.
<br>
<p>Much appreciate any help :)
<br>
<p>Cheers,
<br>
David Laszuk
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13130/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13131.php">Glass, Micheal W: "[OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="13129.php">Pankatz, Klaus: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13139.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>Reply:</strong> <a href="13139.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
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
