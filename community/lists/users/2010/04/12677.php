<?
$subject_val = "[OMPI users] unresolved symbol mca_base_param_reg_int";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 17 21:05:43 2010" -->
<!-- isoreceived="20100418010543" -->
<!-- sent="Sun, 18 Apr 2010 11:05:37 +1000" -->
<!-- isosent="20100418010537" -->
<!-- name="Nev" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] unresolved symbol mca_base_param_reg_int" -->
<!-- id="1271552737.2612.157.camel_at_roo" -->
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
<strong>Subject:</strong> [OMPI users] unresolved symbol mca_base_param_reg_int<br>
<strong>From:</strong> Nev (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-17 21:05:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12678.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="12676.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12693.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12693.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am having a problem running application with OpenMpi version 1.4.1.
<br>
The system works with version 1.2.7, but fails with version 1.3.4 and
<br>
1.4.1. (These are the only version I have tried).
<br>
<p>My application is linked against a shared library which does a dlopen of
<br>
a 2nd shared &quot;C&quot; library which is compiled and linked using mpicc. The
<br>
application and first shared library are C++.
<br>
I rebuild and relink the 2nd shared library each time I change the
<br>
openmpi build.
<br>
<p>When MPI_init is called I get the following error
<br>
symbol lookup error: /opt/openmpi/lib/openmpi/mca_paffinity_linux.so:
<br>
undefined symbol: mca_base_param_reg_int
<br>
<p>This does NOT occur with OpenMpi version 1.2.7, Or if I build OpenMpi as
<br>
a static library, and then link against this static library.
<br>
<p>I am building a default openmpi except for --prefix=/opt/openmpi and
<br>
--enable-static --disable-shared for static library build.
<br>
<p>I would link to be able to use non static openmpi build.
<br>
<p>Any suggestion on what I am doing wrong?
<br>
<p>Thanks Nev
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12678.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="12676.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12693.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12693.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
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
