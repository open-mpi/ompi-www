<?
$subject_val = "Re: [OMPI users] running openmpi with specified lib path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 10:25:38 2013" -->
<!-- isoreceived="20130507142538" -->
<!-- sent="Tue, 7 May 2013 07:25:30 -0700" -->
<!-- isosent="20130507142530" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running openmpi with specified lib path" -->
<!-- id="882E42B1-3001-4105-BA83-79BA51277252_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51890B93.7020207_at_gmx.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 10:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21866.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21864.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21864.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21867.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21867.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Look at your ld-library-path. Breaking it down, you have the following elements
<br>
<p>/opt/apps/abinit/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl/usr/local/lib
<br>
<p>repeated three times. Did you actually configure with
<br>
<p>--prefix=/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local
<br>
<p>Note that the prefix path *must* be the first element in your ld-libary-path or you'll pickup one of your other installations. When you did your test, you goofed:
<br>
<p><span class="quotelev1">&gt; $ export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/opt/intel/composer_xe_2013/lib/intel64
</span><br>
<p><p>This put the new path at the end, where it would never be used
<br>
<p><p>On May 7, 2013, at 7:11 AM, Duke Nguyen &lt;duke.lists_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 5/7/13 8:10 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 7, 2013, at 7:36 AM, Duke Nguyen &lt;duke.lists_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So apparently openmpi 1.7.2 looks for the old library at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/loca/lib/openmpi for 1.6.3 instead of at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there away to force openmpi 1.7.2 look at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first before looking at other locations?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is *usually* a problem of local settings.  Make sure you don't have both the 1.6 and 1.7 library directories listed in LD_LIBRARY_PATH, for example.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also thought of that, but removing /usr/local does not help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ echo $PATH
</span><br>
<span class="quotelev1">&gt; /usr/lib64/qt-3.3/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/opt/apps/abinit/bin:/opt/torque/sbin:/opt/torque/bin:/usr/local/bin:/opt/apps/bin
</span><br>
<span class="quotelev1">&gt; $ export PATH=/usr/lib64/qt-3.3/bin:/bin:/usr/bin:/usr/sbin:/sbin
</span><br>
<span class="quotelev1">&gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; :/usr/local/lib:/opt/intel/lib/intel64:/opt/intel/mkl/lib/intel64
</span><br>
<span class="quotelev1">&gt; $ export LD_LIBRARY_PATH=
</span><br>
<span class="quotelev1">&gt; $ module load mpi/openmpi-1.7.2_composer_xe_2013.3.163
</span><br>
<span class="quotelev1">&gt; $ module load
</span><br>
<span class="quotelev1">&gt; apps/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl
</span><br>
<span class="quotelev1">&gt; $ mpirun ./mpihello_intel
</span><br>
<span class="quotelev1">&gt; mpirun: error while loading shared libraries: libimf.so: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/apps/abinit/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl/usr/local/lib:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib
</span><br>
<span class="quotelev1">&gt; $ export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/opt/intel/composer_xe_2013/lib/intel64
</span><br>
<span class="quotelev1">&gt; $ mpirun ./mpihello_intel
</span><br>
<span class="quotelev1">&gt; [node0111.biobos.grih.org:18979] mca: base: component_find: unable to
</span><br>
<span class="quotelev1">&gt; open /usr/local/lib/openmpi/mca_ess_hnp:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_ess_hnp.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; orte_local_jobdata (ignored)
</span><br>
<span class="quotelev1">&gt; [node0111.biobos.grih.org:18979] mca: base: component_find: unable to
</span><br>
<span class="quotelev1">&gt; open /usr/local/lib/openmpi/mca_ess_slurm:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_ess_slurm.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; orte_orted_exit_with_barrier (ignored)
</span><br>
<span class="quotelev1">&gt; [node0111.biobos.grih.org:18979] mca: base: component_find: unable to
</span><br>
<span class="quotelev1">&gt; open /usr/local/lib/openmpi/mca_ess_slurmd:
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
<li><strong>Next message:</strong> <a href="21866.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21864.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21864.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21867.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21867.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
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
