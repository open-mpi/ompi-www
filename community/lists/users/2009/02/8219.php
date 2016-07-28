<?
$subject_val = "Re: [OMPI users] Latest SVN failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 15:10:09 2009" -->
<!-- isoreceived="20090226201009" -->
<!-- sent="Thu, 26 Feb 2009 13:09:57 -0700" -->
<!-- isosent="20090226200957" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest SVN failures" -->
<!-- id="91E2517A-EF29-4B52-B811-DD2A088F0910_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0902261202330.28649_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Latest SVN failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 15:09:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8220.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8218.php">Mostyn Lewis: "[OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8218.php">Mostyn Lewis: "[OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8220.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry, but I can't make any sense of this message. Could you  
<br>
provide a little explanation of what you are doing, what the system  
<br>
looks like, what is supposed to happen, etc? I can barely parse your  
<br>
cmd line...
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Feb 26, 2009, at 1:03 PM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Today's and yesterdays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.4a1r20643_svn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + mpirun --prefix /tools/openmpi/1.4a1r20643_svn/connectx/ 
</span><br>
<span class="quotelev1">&gt; intel64/10.1.015/openib/suse_sles_10/x86_6
</span><br>
<span class="quotelev1">&gt; 4/opteron -np 256 --mca btl sm,openib,self -x  
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_use_eager_rdma -x OMPI_MCA_btl_ope
</span><br>
<span class="quotelev1">&gt; nib_eager_limit -x OMPI_MCA_btl_self_eager_limit -x  
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_sm_eager_limit -machinefile /tmp/48
</span><br>
<span class="quotelev1">&gt; 269.1.all.q/newhosts /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/ 
</span><br>
<span class="quotelev1">&gt; mpi_binder.MRL /ctmp8/mostyn/IM
</span><br>
<span class="quotelev1">&gt; SC/bench_intel_openmpi_I_shang2/ 
</span><br>
<span class="quotelev1">&gt; intel-10.1.015_ofed_1.3.1_openmpi_1.4a1r20643_svn/NAMD_2.6_Source/Li
</span><br>
<span class="quotelev1">&gt; nux-amd64-MPI/namd2 stmv.namd
</span><br>
<span class="quotelev1">&gt; [s0164:24296] [[64102,0],16] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev1">&gt; file ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev1">&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev1">&gt; [s0128:24439] [[64102,0],4] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev1">&gt; file ../../../.././orte/mca/odls/base/odls_
</span><br>
<span class="quotelev1">&gt; base_default_fns.c at line 595
</span><br>
<span class="quotelev1">&gt; [s0156:29300] [[64102,0],12] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev1">&gt; file ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev1">&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev1">&gt; [s0168:20585] [[64102,0],20] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev1">&gt; file ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev1">&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev1">&gt; [s0181:19554] [[64102,0],28] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev1">&gt; file ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev1">&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Made with INTEL compilers 10.1.015.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mostyn
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
<li><strong>Next message:</strong> <a href="8220.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8218.php">Mostyn Lewis: "[OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8218.php">Mostyn Lewis: "[OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8220.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
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
