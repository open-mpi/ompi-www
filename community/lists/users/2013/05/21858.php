<?
$subject_val = "[OMPI users] running openmpi with specified lib path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 07:36:58 2013" -->
<!-- isoreceived="20130507113658" -->
<!-- sent="Tue, 07 May 2013 18:36:39 +0700" -->
<!-- isosent="20130507113639" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="[OMPI users] running openmpi with specified lib path" -->
<!-- id="5188E747.9090900_at_gmx.com" -->
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
<strong>Subject:</strong> [OMPI users] running openmpi with specified lib path<br>
<strong>From:</strong> Duke Nguyen (<em>duke.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 07:36:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21859.php">Reuti: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21857.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21859.php">Reuti: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21859.php">Reuti: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21860.php">Jeff Squyres (jsquyres): "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I am testing our cluster with module environment, and am having a
<br>
headache to understand openmpi 1.7.2!!! So our system currently has
<br>
openmpi 1.6.3 (at default location /usr/local), 1.6.4 and 1.7.2 compiled
<br>
with intel compilers (installed at /opt/apps). In order to use openmpi
<br>
1.7.2 for example, I tried:
<br>
<p>$ module load mpi/openmpi-1.7.2_composer_xe_2013.3.163
<br>
$ module load
<br>
apps/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl
<br>
$ mpirun ./mpihello_intel
<br>
mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_ess_hnp:
<br>
/usr/local/lib/openmpi/mca_ess_hnp.so: undefined symbol:
<br>
orte_local_jobdata (ignored)
<br>
mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_ess_slurm:
<br>
/usr/local/lib/openmpi/mca_ess_slurm.so: undefined symbol:
<br>
orte_orted_exit_with_barrier (ignored)
<br>
mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_ess_slurmd:
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
<p>To investigate the error, I tried:
<br>
<p>$ echo $LD_LIBRARY_PATH
<br>
/opt/apps/abinit/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl/usr/local/lib:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib:/usr/local/lib:/opt/intel/lib/intel64:/opt/intel/mkl/lib/intel64
<br>
$ ls
<br>
/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi
<br>
| grep mca_ess
<br>
mca_ess_env.la
<br>
mca_ess_env.so
<br>
mca_ess_hnp.la
<br>
mca_ess_hnp.so
<br>
mca_ess_singleton.la
<br>
mca_ess_singleton.so
<br>
mca_ess_slurm.la
<br>
mca_ess_slurm.so
<br>
mca_ess_tm.la
<br>
mca_ess_tm.so
<br>
mca_ess_tool.la
<br>
mca_ess_tool.so
<br>
<p>So apparently openmpi 1.7.2 looks for the old library at
<br>
/usr/loca/lib/openmpi for 1.6.3 instead of at
<br>
/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi.
<br>
Is there away to force openmpi 1.7.2 look at
<br>
/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi
<br>
first before looking at other locations?
<br>
<p>Thanks,
<br>
<p>D.
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21858/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21859.php">Reuti: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21857.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21859.php">Reuti: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21859.php">Reuti: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21860.php">Jeff Squyres (jsquyres): "Re: [OMPI users] running openmpi with specified lib path"</a>
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
