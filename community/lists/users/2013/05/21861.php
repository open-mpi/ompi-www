<?
$subject_val = "Re: [OMPI users] running openmpi with specified lib path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 10:01:17 2013" -->
<!-- isoreceived="20130507140117" -->
<!-- sent="Tue, 07 May 2013 21:01:08 +0700" -->
<!-- isosent="20130507140108" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running openmpi with specified lib path" -->
<!-- id="51890924.2090507_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0EE9328A-BEAF-496B-B479-6B405CB09D87_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Duke Nguyen (<em>duke.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 10:01:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21862.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21860.php">Jeff Squyres (jsquyres): "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21859.php">Reuti: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21862.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21862.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/7/13 7:02 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 07.05.2013 um 13:36 schrieb Duke Nguyen:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am testing our cluster with module environment, and am having a
</span><br>
<span class="quotelev2">&gt;&gt; headache to understand openmpi 1.7.2!!! So our system currently has
</span><br>
<span class="quotelev2">&gt;&gt; openmpi 1.6.3 (at default location /usr/local), 1.6.4 and 1.7.2 compiled
</span><br>
<span class="quotelev2">&gt;&gt; with intel compilers (installed at /opt/apps). In order to use openmpi
</span><br>
<span class="quotelev2">&gt;&gt; 1.7.2 for example, I tried:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ module load mpi/openmpi-1.7.2_composer_xe_2013.3.163
</span><br>
<span class="quotelev2">&gt;&gt; $ module load
</span><br>
<span class="quotelev2">&gt;&gt; apps/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun ./mpihello_intel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ which mpirun
</span><br>
<p><p>$ which mpirun
<br>
/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/bin/mpirun
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; show? Did you also recompile your application?
</span><br>
<p><p>Yes, I did. That is why abinit has that long's name when I call it using
<br>
module
<br>
(abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl -&gt;
<br>
abinit compiled with intel xe 2013.3.163 and openmpi 1.7.2 and
<br>
fftw3-mkl; also openmpi 1.7.2 was compiled with intel xe 2013.3.163).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_hnp:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_hnp.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; orte_local_jobdata (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_slurm:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_slurm.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; orte_orted_exit_with_barrier (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_slurmd:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; orte_pmap_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: symbol lookup error:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_singleton.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; orte_util_setup_local_nidmap_entries
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To investigate the error, I tried:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/abinit/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl/usr/local/lib:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib:/usr/local/lib:/opt/intel/lib/intel64:/opt/intel/mkl/lib/intel64
</span><br>
<span class="quotelev2">&gt;&gt; $ ls
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; | grep mca_ess
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_env.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_env.so
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_hnp.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_hnp.so
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_singleton.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_singleton.so
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_slurm.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_tm.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_tm.so
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_tool.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_tool.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So apparently openmpi 1.7.2 looks for the old library at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/loca/lib/openmpi for 1.6.3 instead of at
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; Is there away to force openmpi 1.7.2 look at
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; first before looking at other locations?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21861/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21862.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21860.php">Jeff Squyres (jsquyres): "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21859.php">Reuti: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21862.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21862.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
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
