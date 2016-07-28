<?
$subject_val = "[OMPI users] Processor affinity troubles";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 17:03:27 2011" -->
<!-- isoreceived="20110715210327" -->
<!-- sent="Fri, 15 Jul 2011 14:03:19 -0700" -->
<!-- isosent="20110715210319" -->
<!-- name="Karl Dockendorf" -->
<!-- email="mekarl_at_[hidden]" -->
<!-- subject="[OMPI users] Processor affinity troubles" -->
<!-- id="CAEcxFUDAc__D+ytJycw+Gvr=v2nu1P3FZPSniTSVEDy8xz836Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Processor affinity troubles<br>
<strong>From:</strong> Karl Dockendorf (<em>mekarl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-15 17:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16950.php">Jeff Squyres: "Re: [OMPI users] Processor affinity troubles"</a>
<li><strong>Previous message:</strong> <a href="16948.php">Reuti: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16950.php">Jeff Squyres: "Re: [OMPI users] Processor affinity troubles"</a>
<li><strong>Reply:</strong> <a href="16950.php">Jeff Squyres: "Re: [OMPI users] Processor affinity troubles"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just upgraded from the default ompi install on OS X 10.6 to v1.5.3
<br>
so that I can use the processor affinity options.  However there seems
<br>
to be some trouble.  My mpi application executes perfectly with the
<br>
following CL statement:
<br>
/usr/local/openmpi-1.5.3/bin/mpiexec --host `hostname` --np 2
<br>
*APPLICATIONANDARGS*
<br>
but this fails:
<br>
/usr/local/openmpi-1.5.3/bin/mpiexec --host `hostname` --np 2
<br>
--cpus-per-proc 2 *APPLICATIONANDARGS*
<br>
saying:
<br>
--------------------------------------------------------------------------
<br>
An attempt to set processor affinity has failed - please check to
<br>
ensure that your system supports such functionality. If so, then
<br>
this is probably something that should be reported to the OMPI developers.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it
<br>
encountered an error:
<br>
<p>Error name: No such file or directory
<br>
Node: hrle03274.&lt;BASEURLNAME DELETED&gt;
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
2 total processes failed to start
<br>
<p>this also fails:
<br>
/usr/local/openmpi-1.5.3/bin/mpiexec --host `hostname` --np 2
<br>
--bind-to-core *APPLICATIONANDARGS*
<br>
saying the exact same thing.
<br>
<p>I configured the install with:
<br>
./configure --with-hwloc=internal --prefix=/usr/local/openmpi-1.5.3/
<br>
<p>any help in getting this working would be greatly appreciated as the
<br>
process jumping from core to core is killing my system responsiveness.
<br>
<p>Thanks,
<br>
Karl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16950.php">Jeff Squyres: "Re: [OMPI users] Processor affinity troubles"</a>
<li><strong>Previous message:</strong> <a href="16948.php">Reuti: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16950.php">Jeff Squyres: "Re: [OMPI users] Processor affinity troubles"</a>
<li><strong>Reply:</strong> <a href="16950.php">Jeff Squyres: "Re: [OMPI users] Processor affinity troubles"</a>
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
