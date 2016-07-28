<?
$subject_val = "Re: [OMPI users] running openmpi with specified lib path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 10:11:39 2013" -->
<!-- isoreceived="20130507141139" -->
<!-- sent="Tue, 07 May 2013 21:11:31 +0700" -->
<!-- isosent="20130507141131" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running openmpi with specified lib path" -->
<!-- id="51890B93.7020207_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F60A8D5_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-05-07 10:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21865.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21863.php">Andrey Rubshtein: "[OMPI users] Building Open MPI with LSF"</a>
<li><strong>In reply to:</strong> <a href="21860.php">Jeff Squyres (jsquyres): "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21865.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21865.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/7/13 8:10 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On May 7, 2013, at 7:36 AM, Duke Nguyen &lt;duke.lists_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is *usually* a problem of local settings.  Make sure you don't have both the 1.6 and 1.7 library directories listed in LD_LIBRARY_PATH, for example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I also thought of that, but removing /usr/local does not help.
<br>
<p>$ echo $PATH
<br>
/usr/lib64/qt-3.3/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/opt/apps/abinit/bin:/opt/torque/sbin:/opt/torque/bin:/usr/local/bin:/opt/apps/bin
<br>
$ export PATH=/usr/lib64/qt-3.3/bin:/bin:/usr/bin:/usr/sbin:/sbin
<br>
$ echo $LD_LIBRARY_PATH
<br>
:/usr/local/lib:/opt/intel/lib/intel64:/opt/intel/mkl/lib/intel64
<br>
$ export LD_LIBRARY_PATH=
<br>
$ module load mpi/openmpi-1.7.2_composer_xe_2013.3.163
<br>
$ module load
<br>
apps/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl
<br>
$ mpirun ./mpihello_intel
<br>
mpirun: error while loading shared libraries: libimf.so: cannot open
<br>
shared object file: No such file or directory
<br>
$ echo $LD_LIBRARY_PATH
<br>
/opt/apps/abinit/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl/usr/local/lib:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib
<br>
$ export
<br>
LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/opt/intel/composer_xe_2013/lib/intel64
<br>
$ mpirun ./mpihello_intel
<br>
[node0111.biobos.grih.org:18979] mca: base: component_find: unable to
<br>
open /usr/local/lib/openmpi/mca_ess_hnp:
<br>
/usr/local/lib/openmpi/mca_ess_hnp.so: undefined symbol:
<br>
orte_local_jobdata (ignored)
<br>
[node0111.biobos.grih.org:18979] mca: base: component_find: unable to
<br>
open /usr/local/lib/openmpi/mca_ess_slurm:
<br>
/usr/local/lib/openmpi/mca_ess_slurm.so: undefined symbol:
<br>
orte_orted_exit_with_barrier (ignored)
<br>
[node0111.biobos.grih.org:18979] mca: base: component_find: unable to
<br>
open /usr/local/lib/openmpi/mca_ess_slurmd:
<br>
/usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol:
<br>
orte_pmap_t_class (ignored)
<br>
mpirun: symbol lookup error:
<br>
/usr/local/lib/openmpi/mca_ess_singleton.so: undefined symbol:
<br>
orte_util_setup_local_nidmap_entries
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21864/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21865.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21863.php">Andrey Rubshtein: "[OMPI users] Building Open MPI with LSF"</a>
<li><strong>In reply to:</strong> <a href="21860.php">Jeff Squyres (jsquyres): "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21865.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21865.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
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
