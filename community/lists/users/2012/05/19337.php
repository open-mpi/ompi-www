<?
$subject_val = "[OMPI users] openmpi-1.6 + Intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 08:52:03 2012" -->
<!-- isoreceived="20120523125203" -->
<!-- sent="Wed, 23 May 2012 14:51:57 +0200" -->
<!-- isosent="20120523125157" -->
<!-- name="Christophe Peyret" -->
<!-- email="christophe.peyret_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.6 + Intel compilers" -->
<!-- id="A05E0529-0A2F-4D22-B518-FDE7CFA51EB0_at_onera.fr" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.6 + Intel compilers<br>
<strong>From:</strong> Christophe Peyret (<em>christophe.peyret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 08:51:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>Previous message:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have built openmpi-1.6 for MacOSX Lion 10.7.4 with intel compilers v12.1 (icc,icpc,ifort)
<br>
<p>When I try to install the mpif90 wrapper, I have the error message : ifort: error #10104: unable to open '-commons'
<br>
<p>When I compare &quot;mpif90 -showme&quot; from version 1.5.4 and version 1.6, I find :
<br>
<p><p>/opt/openmpi-1.5.4/bin/mpif90 -showme
<br>
/opt/intel/composerxe/bin/ifort -I/opt/openmpi-1.5.4/include -I/opt/openmpi-1.5.4/lib -L/opt/openmpi-1.5.4-v12/lib -lmpi_f90 -lmpi_f77 -lmpi
<br>
<p>/opt/openmpi-1.6/bin/mpif90 -showme
<br>
/opt/intel/composerxe/bin/ifort -I/opt/openmpi-1.6/include -Wl,-commons,use_dylibs -I/opt/openmpi-1.6/lib -L/opt/openmpi-1.6/lib -lmpi_f90 -lmpi_f77 -lmpi -lm
<br>
<p>What are options -Wl,-commons,use_dylibs ? Can I remove it and How ?
<br>
<p><pre>
--
Christophe Peyret
ONERA - DSNA - PS3A
<a href="http://www.onera.fr/dsna/couplage-methodes-aeroacoustiques">http://www.onera.fr/dsna/couplage-methodes-aeroacoustiques</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19337/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>Previous message:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
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
