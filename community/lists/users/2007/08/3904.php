<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 08:35:59 2007" -->
<!-- isoreceived="20070822123559" -->
<!-- sent="Wed, 22 Aug 2007 15:35:12 +0300" -->
<!-- isosent="20070822123512" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails to initalize the openib btl when	run from SGE" -->
<!-- id="20070822123512.GL25167_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46CC2C98.4080606_at_emet.co.il" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-22 08:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<li><strong>Previous message:</strong> <a href="3903.php">Noam Meltzer: "[OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<li><strong>In reply to:</strong> <a href="3903.php">Noam Meltzer: "[OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 22, 2007 at 03:31:20PM +0300, Noam Meltzer wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running openmpi-1.2.3 compiled for 64bit on RHEL4u4.
</span><br>
<span class="quotelev1">&gt; I also have a Voltaire InfiniBand interconnect.
</span><br>
<span class="quotelev1">&gt; When I manually run jobs using the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/local/openmpi-1.2.3-gcc4/bin/orterun -np 8 -hostfile ~/myHostList 
</span><br>
<span class="quotelev1">&gt; -mca btl self,openib /tcc/eandm/performance/igor/main.exe.openmpi123
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The job is executed just fine..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though, when run through SGE I have the weirdest problem, and get the 
</span><br>
<span class="quotelev1">&gt; following error (on all hosts in my list):
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenIB BTL failed to initialize while trying to create an internal
</span><br>
<span class="quotelev1">&gt; queue.  This typically indicates a failed OpenFabrics installation or
</span><br>
<span class="quotelev1">&gt; faulty hardware.  The failure occured here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Host:        node4.grid.technion.ac.il
</span><br>
<span class="quotelev1">&gt;     OMPI source: btl_openib.c:828
</span><br>
<span class="quotelev1">&gt;     Function:    ibv_create_cq()
</span><br>
<span class="quotelev1">&gt;     Error:       Invalid argument (errno=22)
</span><br>
<span class="quotelev1">&gt;     Device:      mthca0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To send a job to the grid I use the following command:
</span><br>
<span class="quotelev1">&gt; qrsh -cwd -q noam.q -pe orte 8 ./myScript
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while &quot;myScript&quot; looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; /opt/local/openmpi-1.2.3-gcc4/bin/orterun -np $NSLOTS -mca btl 
</span><br>
<span class="quotelev1">&gt; self,openib /tcc/eandm/performance/igor/main.exe.openmpi123
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I change &quot;openib&quot; to &quot;tcp&quot; (in myScript) everything works just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Perhaps SGE doesn't set locked memory limit properly.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<li><strong>Previous message:</strong> <a href="3903.php">Noam Meltzer: "[OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<li><strong>In reply to:</strong> <a href="3903.php">Noam Meltzer: "[OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
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
