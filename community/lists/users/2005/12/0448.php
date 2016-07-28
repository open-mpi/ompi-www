<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec 22 09:15:58 2005" -->
<!-- isoreceived="20051222141558" -->
<!-- sent="Thu, 22 Dec 2005 15:15:56 +0100 (CET)" -->
<!-- isosent="20051222141556" -->
<!-- name="Christophe Peyret" -->
<!-- email="christophe.peyret_at_[hidden]" -->
<!-- subject="[O-MPI users] High Virtual Memory" -->
<!-- id="50598.82.67.159.21.1135260956.squirrel_at_mis.onera.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Christophe Peyret (<em>christophe.peyret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-22 09:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0449.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0447.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0451.php">Brian Barrett: "Re: [O-MPI users] High Virtual Memory"</a>
<li><strong>Reply:</strong> <a href="0451.php">Brian Barrett: "Re: [O-MPI users] High Virtual Memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have compiled and install openmpi-1.0.1 on MacOSX Tiger 10.4.3. It has
<br>
been configured to works with xfl_r and xlf95_r. I just change few lines
<br>
of the xlf.cfg in order to build open-mpi as mentioned on the mail-list :
<br>
<p>OMPI uses the fortran compiler to link a C program in order to test
<br>
the size of LOGICAL, etc. To get it to work with xlf, I had to add
<br>
-lSystemStubs to the gcc_libs entry for f77 in /etc/opt/ibmcmp/xlf/8.1/
<br>
xlf.cfg.
<br>
<p>I also compile my program using mpif90 and it works !
<br>
<p><p>Now, when I launch my program with open-mpi, The difference between the
<br>
real and virtual memories is about 600 MO while I have only 50 MO using
<br>
lam-7.1.1.
<br>
<p>I am looking for a solution to reduce that 'too' high level of virtual
<br>
memory.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0449.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0447.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0451.php">Brian Barrett: "Re: [O-MPI users] High Virtual Memory"</a>
<li><strong>Reply:</strong> <a href="0451.php">Brian Barrett: "Re: [O-MPI users] High Virtual Memory"</a>
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
