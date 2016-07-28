<?
$subject_val = "[OMPI devel] Error in version 1.8.7?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 04:23:28 2015" -->
<!-- isoreceived="20150804082328" -->
<!-- sent="Tue, 4 Aug 2015 10:23:22 +0200" -->
<!-- isosent="20150804082322" -->
<!-- name="SCC" -->
<!-- email="Hartmut.Haefner_at_[hidden]" -->
<!-- subject="[OMPI devel] Error in version 1.8.7?" -->
<!-- id="2054557.zLd69ucCAZ_at_rzm-haefner" -->
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
<strong>Subject:</strong> [OMPI devel] Error in version 1.8.7?<br>
<strong>From:</strong> SCC (<em>Hartmut.Haefner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-04 04:23:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17729.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.7?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17727.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17729.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.7?"</a>
<li><strong>Reply:</strong> <a href="17729.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.7?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers,
<br>
we have installed OpenMPI 1.8.7 with GNU Compiler suite on our clusters.
<br>
For cluster IC2: config.log is attached. Also ompi_info --all.
<br>
<p>All parallel jobs run on IC2, but we always get the following message. Here mpi_hello 
<br>
is run interactively (we get the same message in batch jobs):
<br>
mpirun -np 4 mpi_hello 
<br>
<p>We are using SLES 11 SP3 (with OFED 1.5.4) on our system. On another system we are 
<br>
using RHEL EL 6.6. There we don't get this message! But I don't know if XRC us used on 
<br>
RHEL EL.
<br>
<p>&nbsp;
<br>
<p>Sincerly yours
<br>
<p>&nbsp;&nbsp;&nbsp;Hartmut H&#228;fner
<br>
<p><p>------------------------ 
<br>
Hartmut H&#228;fner
<br>
Karlsruhe Institute of Technology (KIT)
<br>
University Karlsruhe (TH)
<br>
Steinbuch Centre for Computing (SCC)
<br>
Scientific Computing and Simulation (SCS)
<br>
Zirkel 2 (Campus S&#252;d, Geb. 20.21, Raum 204)
<br>
D-76128 Karlsruhe
<br>
<p>Fon +49(0)721 608 44869
<br>
Fax +49(0)721 32550
<br>
Hartmut.Haefner_at_[hidden]
<br>
<p><a href="http://www.scc.kit.edu/personen/hartmut.haefner">http://www.scc.kit.edu/personen/hartmut.haefner</a>
<br>
<p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17728/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17728/ompiinfo.bz2">ompiinfo.bz2</a>
</ul>
<!-- attachment="ompiinfo.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17728/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17729.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.7?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17727.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17729.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.7?"</a>
<li><strong>Reply:</strong> <a href="17729.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.7?"</a>
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
