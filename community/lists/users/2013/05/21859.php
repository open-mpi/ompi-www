<?
$subject_val = "Re: [OMPI users] running openmpi with specified lib path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 08:02:34 2013" -->
<!-- isoreceived="20130507120234" -->
<!-- sent="Tue, 7 May 2013 14:02:21 +0200" -->
<!-- isosent="20130507120221" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running openmpi with specified lib path" -->
<!-- id="0EE9328A-BEAF-496B-B479-6B405CB09D87_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5188E747.9090900_at_gmx.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] running openmpi with specified lib path<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 08:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21860.php">Jeff Squyres (jsquyres): "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21858.php">Duke Nguyen: "[OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21858.php">Duke Nguyen: "[OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21861.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21861.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 07.05.2013 um 13:36 schrieb Duke Nguyen:
<br>
<p><span class="quotelev1">&gt; I am testing our cluster with module environment, and am having a
</span><br>
<span class="quotelev1">&gt; headache to understand openmpi 1.7.2!!! So our system currently has
</span><br>
<span class="quotelev1">&gt; openmpi 1.6.3 (at default location /usr/local), 1.6.4 and 1.7.2 compiled
</span><br>
<span class="quotelev1">&gt; with intel compilers (installed at /opt/apps). In order to use openmpi
</span><br>
<span class="quotelev1">&gt; 1.7.2 for example, I tried:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ module load mpi/openmpi-1.7.2_composer_xe_2013.3.163
</span><br>
<span class="quotelev1">&gt; $ module load
</span><br>
<span class="quotelev1">&gt; apps/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl
</span><br>
<span class="quotelev1">&gt; $ mpirun ./mpihello_intel
</span><br>
<p>What does:
<br>
<p>$ which mpirun
<br>
<p>show? Did you also recompile your application?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_ess_hnp:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_ess_hnp.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; orte_local_jobdata (ignored)
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_ess_slurm:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_ess_slurm.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; orte_orted_exit_with_barrier (ignored)
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_ess_slurmd:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; orte_pmap_t_class (ignored)
</span><br>
<span class="quotelev1">&gt; mpirun: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_ess_singleton.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; orte_util_setup_local_nidmap_entries
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To investigate the error, I tried:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/apps/abinit/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl/usr/local/lib:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib:/usr/local/lib:/opt/intel/lib/intel64:/opt/intel/mkl/lib/intel64
</span><br>
<span class="quotelev1">&gt; $ ls
</span><br>
<span class="quotelev1">&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi
</span><br>
<span class="quotelev1">&gt; | grep mca_ess
</span><br>
<span class="quotelev1">&gt; mca_ess_env.la
</span><br>
<span class="quotelev1">&gt; mca_ess_env.so
</span><br>
<span class="quotelev1">&gt; mca_ess_hnp.la
</span><br>
<span class="quotelev1">&gt; mca_ess_hnp.so
</span><br>
<span class="quotelev1">&gt; mca_ess_singleton.la
</span><br>
<span class="quotelev1">&gt; mca_ess_singleton.so
</span><br>
<span class="quotelev1">&gt; mca_ess_slurm.la
</span><br>
<span class="quotelev1">&gt; mca_ess_slurm.so
</span><br>
<span class="quotelev1">&gt; mca_ess_tm.la
</span><br>
<span class="quotelev1">&gt; mca_ess_tm.so
</span><br>
<span class="quotelev1">&gt; mca_ess_tool.la
</span><br>
<span class="quotelev1">&gt; mca_ess_tool.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So apparently openmpi 1.7.2 looks for the old library at
</span><br>
<span class="quotelev1">&gt; /usr/loca/lib/openmpi for 1.6.3 instead of at
</span><br>
<span class="quotelev1">&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi.
</span><br>
<span class="quotelev1">&gt; Is there away to force openmpi 1.7.2 look at
</span><br>
<span class="quotelev1">&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi
</span><br>
<span class="quotelev1">&gt; first before looking at other locations?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21860.php">Jeff Squyres (jsquyres): "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21858.php">Duke Nguyen: "[OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21858.php">Duke Nguyen: "[OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21861.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21861.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
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
