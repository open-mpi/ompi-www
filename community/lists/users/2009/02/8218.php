<?
$subject_val = "[OMPI users] Latest SVN failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 15:04:06 2009" -->
<!-- isoreceived="20090226200406" -->
<!-- sent="Thu, 26 Feb 2009 12:03:46 -0800 (PST)" -->
<!-- isosent="20090226200346" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] Latest SVN failures" -->
<!-- id="Pine.GSO.4.64.0902261202330.28649_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Subject:</strong> [OMPI users] Latest SVN failures<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 15:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8219.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8217.php">Mark Allan: "Re: [OMPI users] Memory leak in my code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8219.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Reply:</strong> <a href="8219.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Maybe reply:</strong> <a href="8220.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Today's and yesterdays.
<br>
<p>1.4a1r20643_svn
<br>
<p>+ mpirun --prefix /tools/openmpi/1.4a1r20643_svn/connectx/intel64/10.1.015/openib/suse_sles_10/x86_6
<br>
4/opteron -np 256 --mca btl sm,openib,self -x OMPI_MCA_btl_openib_use_eager_rdma -x OMPI_MCA_btl_ope
<br>
nib_eager_limit -x OMPI_MCA_btl_self_eager_limit -x OMPI_MCA_btl_sm_eager_limit -machinefile /tmp/48
<br>
269.1.all.q/newhosts /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/mpi_binder.MRL /ctmp8/mostyn/IM
<br>
SC/bench_intel_openmpi_I_shang2/intel-10.1.015_ofed_1.3.1_openmpi_1.4a1r20643_svn/NAMD_2.6_Source/Li
<br>
nux-amd64-MPI/namd2 stmv.namd
<br>
[s0164:24296] [[64102,0],16] ORTE_ERROR_LOG: Not found in file ../../../.././orte/mca/odls/base/odls
<br>
_base_default_fns.c at line 595
<br>
[s0128:24439] [[64102,0],4] ORTE_ERROR_LOG: Not found in file ../../../.././orte/mca/odls/base/odls_
<br>
base_default_fns.c at line 595
<br>
[s0156:29300] [[64102,0],12] ORTE_ERROR_LOG: Not found in file ../../../.././orte/mca/odls/base/odls
<br>
_base_default_fns.c at line 595
<br>
[s0168:20585] [[64102,0],20] ORTE_ERROR_LOG: Not found in file ../../../.././orte/mca/odls/base/odls
<br>
_base_default_fns.c at line 595
<br>
[s0181:19554] [[64102,0],28] ORTE_ERROR_LOG: Not found in file ../../../.././orte/mca/odls/base/odls
<br>
_base_default_fns.c at line 595
<br>
<p>Made with INTEL compilers 10.1.015.
<br>
<p><p>Regards,
<br>
Mostyn
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8219.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8217.php">Mark Allan: "Re: [OMPI users] Memory leak in my code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8219.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Reply:</strong> <a href="8219.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Maybe reply:</strong> <a href="8220.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
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
