<?
$subject_val = "[OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  6 10:21:55 2010" -->
<!-- isoreceived="20100206152155" -->
<!-- sent="Sat, 6 Feb 2010 13:21:49 -0200" -->
<!-- isosent="20100206152149" -->
<!-- name="Caciano Machado" -->
<!-- email="caciano_at_[hidden]" -->
<!-- subject="[OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558" -->
<!-- id="4226a8f1002060721s2006fbc0q4d46af05f8244d3c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558<br>
<strong>From:</strong> Caciano Machado (<em>caciano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-06 10:21:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7380.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="7378.php">Jeff Squyres: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7475.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558"</a>
<li><strong>Reply:</strong> <a href="7475.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm following the instructions found at
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR">https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR</a> to run an
<br>
application with the vprotocol pessimist enabled. I believe that I'm
<br>
doing something wrong but I can't figure out the problem.
<br>
<p>I have compiled Open MPI 1.4.1 and 1.4.2a1r22558 with the parameters:
<br>
./configure --prefix=/usr/local/openmpi-v/ --with-ft=cr
<br>
--with-blcr=/usr/local/blcr/
<br>
<p>Here is my configuration file:
<br>
vprotocol_pessimist_priority=10
<br>
pml_base_verbose=10
<br>
pbl_v_verbose=500
<br>
<p>The command line:
<br>
mpirun -am /etc/v -np 2 -machinefile /etc/machinefile ep.B.8
<br>
<p>And the mpirun output:
<br>
##############################################################################3
<br>
[xiru-10:03440] mca: base: components_open: Looking for pml components
<br>
[xiru-10:03440] mca: base: components_open: opening pml components
<br>
[xiru-10:03440] mca: base: components_open: found loaded component cm
<br>
[xiru-10:03440] mca: base: components_open: component cm has no
<br>
register function
<br>
[xiru-10:03440] mca: base: component_find: unable to open
<br>
/usr/local/openmpi-v/lib/openmpi/mca_mtl_mx: perhaps a missing symbol,
<br>
or compiled for a different version of Open MPI? (ignored)
<br>
<p>[xiru-10:03440] mca: base: components_open: component cm open function
<br>
successful
<br>
[xiru-10:03440] mca: base: components_open: found loaded component crcpw
<br>
[xiru-10:03440] mca: base: components_open: component crcpw has no
<br>
register function
<br>
[xiru-10:03440] mca: base: components_open: component crcpw open
<br>
function successful
<br>
[xiru-10:03440] mca: base: components_open: found loaded component csum
<br>
[xiru-10:03440] mca: base: components_open: component csum has no
<br>
register function
<br>
[xiru-10:03440] mca: base: component_find: unable to open
<br>
/usr/local/openmpi-v/lib/openmpi/mca_btl_mx: perhaps a missing symbol,
<br>
or compiled for a different version of Open MPI? (ignored)
<br>
[xiru-10:03440] mca: base: components_open: component csum open
<br>
function successful
<br>
[xiru-10:03440] mca: base: components_open: found loaded component ob1
<br>
[xiru-10:03440] mca: base: components_open: component ob1 has no
<br>
register function
<br>
[xiru-10:03440] mca: base: components_open: component ob1 open
<br>
function successful
<br>
[xiru-10:03440] mca: base: components_open: found loaded component v
<br>
[xiru-10:03440] mca: base: components_open: component v has no register function
<br>
[xiru-10:03440] mca: base: components_open: component v open function successful
<br>
--------------------------------------------------------------------------
<br>
[[65326,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: OpenFabrics (openib)
<br>
&nbsp;&nbsp;Host: xiru-10.portoalegre.grenoble.grid5000.fr
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
[xiru-10:03440] select: initializing pml component cm
<br>
[xiru-10:03440] select: init returned failure for component cm
<br>
[xiru-10:03440] select: component crcpw not in the include list
<br>
[xiru-10:03440] select: component csum not in the include list
<br>
[xiru-10:03440] select: initializing pml component ob1
<br>
[xiru-10:03440] select: init returned priority 20
<br>
[xiru-10:03440] select: component v not in the include list
<br>
[xiru-10:03440] selected ob1 best priority 20
<br>
[xiru-10:03440] select: component ob1 selected
<br>
[xiru-10:03440] mca: base: close: component cm closed
<br>
[xiru-10:03440] mca: base: close: unloading component cm
<br>
[xiru-10:03440] mca: base: close: component crcpw closed
<br>
[xiru-10:03440] mca: base: close: unloading component crcpw
<br>
[xiru-10:03440] mca: base: close: component csum closed
<br>
[xiru-10:03440] mca: base: close: unloading component csum
<br>
[xiru-10:03440] mca: base: close: component v closed
<br>
[xiru-10:03440] mca: base: close: unloading component v
<br>
...
<br>
<p>#########################################################3
<br>
<p>It seems that the vprotocol module is not loading properly. Does
<br>
anyone have a solution to run Open MPI with this module?
<br>
<p>Regards,
<br>
Caciano Machado
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7380.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="7378.php">Jeff Squyres: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7475.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558"</a>
<li><strong>Reply:</strong> <a href="7475.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558"</a>
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
