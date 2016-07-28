<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov 18 11:55:47 2006" -->
<!-- isoreceived="20061118165547" -->
<!-- sent="Sat, 18 Nov 2006 16:55:26 +0000 (GMT)" -->
<!-- isosent="20061118165526" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] btl mx : file not found" -->
<!-- id="Pine.GSO.4.53.0611181634170.9621_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-18 11:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2185.php">George Bosilca: "Re: [OMPI users] btl mx : file not found"</a>
<li><strong>Previous message:</strong> <a href="2183.php">Victor Prosolin: "Re: [OMPI users] OpenMPI runtime problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2185.php">George Bosilca: "Re: [OMPI users] btl mx : file not found"</a>
<li><strong>Reply:</strong> <a href="2185.php">George Bosilca: "Re: [OMPI users] btl mx : file not found"</a>
<li><strong>Reply:</strong> <a href="2188.php">Lydia Heck: "Re: [OMPI users] btl mx : file not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have myricom mx installed and configured and its communications work (using
<br>
mx commands such as mx_info to check)
<br>
Then I configured openmpi-1.3a1r12408 with mx and the configuration
<br>
did give no errors. The built of the openmpi was without problems and it
<br>
installed properly. I can build and link a program - and ldd shows the
<br>
openmpi libraries linked accordingly.
<br>
<p>In order to run applications I set the LD_LIBRARY_PATH and the PATH correctly
<br>
but the command.
<br>
<p><p>ompi_info | grep mx
<br>
[m2001:12844] mca: base: component_find: unable to open mtl mx: file not found
<br>
(ignored)
<br>
[m2001:12844] mca: base: component_find: unable to open btl mx: file not found
<br>
(ignored)
<br>
[m2001:12844] mca: base: component_find: unable to open mtl mx: file not found
<br>
(ignored)
<br>
<p>and indeed the job does not run, if I give the instruction
<br>
<p>-mca btl mx
<br>
<p>Any idea why this should happen?
<br>
<p>Lydia
<br>
<p><p><p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>

<br><hr>
<ul>
<li>APPLICATION/OCTET-STREAM attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2184/openmpi-1.3a1r12408-config.log.gz">config.log of openmpi-1.3a1r1240 with myrinet mx</a>
</ul>
<!-- attachment="openmpi-1.3a1r12408-config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2185.php">George Bosilca: "Re: [OMPI users] btl mx : file not found"</a>
<li><strong>Previous message:</strong> <a href="2183.php">Victor Prosolin: "Re: [OMPI users] OpenMPI runtime problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2185.php">George Bosilca: "Re: [OMPI users] btl mx : file not found"</a>
<li><strong>Reply:</strong> <a href="2185.php">George Bosilca: "Re: [OMPI users] btl mx : file not found"</a>
<li><strong>Reply:</strong> <a href="2188.php">Lydia Heck: "Re: [OMPI users] btl mx : file not found"</a>
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
