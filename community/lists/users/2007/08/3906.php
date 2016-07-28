<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 10:20:35 2007" -->
<!-- isoreceived="20070822142035" -->
<!-- sent="Wed, 22 Aug 2007 17:20:44 +0300" -->
<!-- isosent="20070822142044" -->
<!-- name="Noam Meltzer" -->
<!-- email="noam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE" -->
<!-- id="46CC463C.5070507_at_emet.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7222E6A9-E08A-499B-96EC-F8EFF5C95152_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-22 10:20:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3907.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Previous message:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<li><strong>In reply to:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks all who answered. The problem was indeed in the max. locked 
<br>
memory limitation.
<br>
Though, changing it in &lt;SGE_ROOT&gt;/default/common/settings.sh was not enough.
<br>
I also had to add &quot;. &lt;SGE_ROOT&gt;/default/common/settings.sh&quot; to 
<br>
&lt;SGE_ROOT&gt;/default/common/sgeexecd (and to /etc/init.d/sgeexecd on the 
<br>
compute nodes) as when the sgeexecd was executed boot it ignored the 
<br>
limits.conf.
<br>
<p>Best regards,
<br>
Noam Meltzer
<br>
Software Support Engineer &amp; RHCE
<br>
E&amp;M Computing
<br>
<p><a href="http://www.emet.co.il">http://www.emet.co.il</a>
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I suspect that your SGE daemons are not starting with the proper  
</span><br>
<span class="quotelev1">&gt; locked memory limits (and therefore jobs started under SGE get  
</span><br>
<span class="quotelev1">&gt; severely limited locked memory limits).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See these FAQ entries -- the issues described for SLURM are  
</span><br>
<span class="quotelev1">&gt; applicable to all resource managers (to include SGE):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2007, at 8:31 AM, Noam Meltzer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running openmpi-1.2.3 compiled for 64bit on RHEL4u4.
</span><br>
<span class="quotelev2">&gt;&gt; I also have a Voltaire InfiniBand interconnect.
</span><br>
<span class="quotelev2">&gt;&gt; When I manually run jobs using the following command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/local/openmpi-1.2.3-gcc4/bin/orterun -np 8 -hostfile ~/myHostList
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl self,openib /tcc/eandm/performance/igor/main.exe.openmpi123
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The job is executed just fine..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Though, when run through SGE I have the weirdest problem, and get the
</span><br>
<span class="quotelev2">&gt;&gt; following error (on all hosts in my list):
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; The OpenIB BTL failed to initialize while trying to create an internal
</span><br>
<span class="quotelev2">&gt;&gt; queue.  This typically indicates a failed OpenFabrics installation or
</span><br>
<span class="quotelev2">&gt;&gt; faulty hardware.  The failure occured here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Host:        node4.grid.technion.ac.il
</span><br>
<span class="quotelev2">&gt;&gt;     OMPI source: btl_openib.c:828
</span><br>
<span class="quotelev2">&gt;&gt;     Function:    ibv_create_cq()
</span><br>
<span class="quotelev2">&gt;&gt;     Error:       Invalid argument (errno=22)
</span><br>
<span class="quotelev2">&gt;&gt;     Device:      mthca0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev2">&gt;&gt; problem fixed.
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To send a job to the grid I use the following command:
</span><br>
<span class="quotelev2">&gt;&gt; qrsh -cwd -q noam.q -pe orte 8 ./myScript
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while &quot;myScript&quot; looks like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; /opt/local/openmpi-1.2.3-gcc4/bin/orterun -np $NSLOTS -mca btl
</span><br>
<span class="quotelev2">&gt;&gt; self,openib /tcc/eandm/performance/igor/main.exe.openmpi123
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I change &quot;openib&quot; to &quot;tcp&quot; (in myScript) everything works just  
</span><br>
<span class="quotelev2">&gt;&gt; fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Noam Meltzer
</span><br>
<span class="quotelev2">&gt;&gt; Software Support Engineer &amp; RHCE
</span><br>
<span class="quotelev2">&gt;&gt; E&amp;M Computing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.emet.co.il">http://www.emet.co.il</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3907.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Previous message:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<li><strong>In reply to:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
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
