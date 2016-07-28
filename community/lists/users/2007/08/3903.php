<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 08:31:15 2007" -->
<!-- isoreceived="20070822123115" -->
<!-- sent="Wed, 22 Aug 2007 15:31:20 +0300" -->
<!-- isosent="20070822123120" -->
<!-- name="Noam Meltzer" -->
<!-- email="noam_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI fails to initalize the openib btl when run from SGE" -->
<!-- id="46CC2C98.4080606_at_emet.co.il" -->
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
<strong>From:</strong> Noam Meltzer (<em>noam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-22 08:31:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3904.php">Gleb Natapov: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when	run from SGE"</a>
<li><strong>Previous message:</strong> <a href="3902.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3904.php">Gleb Natapov: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when	run from SGE"</a>
<li><strong>Reply:</strong> <a href="3904.php">Gleb Natapov: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when	run from SGE"</a>
<li><strong>Reply:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am running openmpi-1.2.3 compiled for 64bit on RHEL4u4.
<br>
I also have a Voltaire InfiniBand interconnect.
<br>
When I manually run jobs using the following command:
<br>
<p>/opt/local/openmpi-1.2.3-gcc4/bin/orterun -np 8 -hostfile ~/myHostList 
<br>
-mca btl self,openib /tcc/eandm/performance/igor/main.exe.openmpi123
<br>
<p>The job is executed just fine..
<br>
<p>Though, when run through SGE I have the weirdest problem, and get the 
<br>
following error (on all hosts in my list):
<br>
--------------------------------------------------------------------------
<br>
The OpenIB BTL failed to initialize while trying to create an internal
<br>
queue.  This typically indicates a failed OpenFabrics installation or
<br>
faulty hardware.  The failure occured here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Host:        node4.grid.technion.ac.il
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI source: btl_openib.c:828
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Function:    ibv_create_cq()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Error:       Invalid argument (errno=22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Device:      mthca0
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
<p>To send a job to the grid I use the following command:
<br>
qrsh -cwd -q noam.q -pe orte 8 ./myScript
<br>
<p>while &quot;myScript&quot; looks like:
<br>
<p>#!/bin/bash
<br>
/opt/local/openmpi-1.2.3-gcc4/bin/orterun -np $NSLOTS -mca btl 
<br>
self,openib /tcc/eandm/performance/igor/main.exe.openmpi123
<br>
<p>If I change &quot;openib&quot; to &quot;tcp&quot; (in myScript) everything works just fine.
<br>
<p>Any ideas?
<br>
<p><pre>
-- 
Best regards,
Noam Meltzer
Software Support Engineer &amp; RHCE
E&amp;M Computing
<a href="http://www.emet.co.il">http://www.emet.co.il</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3904.php">Gleb Natapov: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when	run from SGE"</a>
<li><strong>Previous message:</strong> <a href="3902.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3904.php">Gleb Natapov: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when	run from SGE"</a>
<li><strong>Reply:</strong> <a href="3904.php">Gleb Natapov: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when	run from SGE"</a>
<li><strong>Reply:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
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
