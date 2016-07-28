<?
$subject_val = "[OMPI users] OpenMPI 1.8 and PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 13:22:58 2014" -->
<!-- isoreceived="20140425172258" -->
<!-- sent="Fri, 25 Apr 2014 17:22:56 +0000" -->
<!-- isosent="20140425172256" -->
<!-- name="Andrus, Brian Contractor" -->
<!-- email="bdandrus_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.8 and PGI compilers" -->
<!-- id="ADC981242279AD408816CB7141A2789D7B8A2FEC_at_GROWLER.ern.nps.edu" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.8 and PGI compilers<br>
<strong>From:</strong> Andrus, Brian Contractor (<em>bdandrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 13:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24257.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="24255.php">Ralph Castain: "Re: [OMPI users] Connection timed out on TCP and notify question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24257.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Reply:</strong> <a href="24257.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Reply:</strong> <a href="24263.php">Hjelm, Nathan T: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I have been unable to compile OpenMPI 1.8 using PGI compilers (13.6, 13.10 or 14.3)
<br>
<p>EVERY time, I get the error:
<br>
<p>PGC-S-0094-Illegal type conversion required (btl_scif_component.c: 215)
<br>
PGC/x86-64 Linux 14.3-0: compilation completed with severe errors
<br>
make[2]: *** [btl_scif_component.lo] Error 1
<br>
<p><p>Has anyone successfully built OpenMPI 1.8 with PGI?
<br>
<p>If so, how??
<br>
I have tried ./configure alone, using &quot;-fast&quot; options, setting -DNO_PGI_OFFSET all to no avail.
<br>
<p>Thanks in advance,
<br>
<p><p>Brian Andrus
<br>
ITACS/Research Computing
<br>
Naval Postgraduate School
<br>
Monterey, California
<br>
voice: 831-656-6238
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24257.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="24255.php">Ralph Castain: "Re: [OMPI users] Connection timed out on TCP and notify question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24257.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Reply:</strong> <a href="24257.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Reply:</strong> <a href="24263.php">Hjelm, Nathan T: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
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
