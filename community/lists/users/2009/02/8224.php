<?
$subject_val = "Re: [OMPI users] Latest SVN failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 22:10:24 2009" -->
<!-- isoreceived="20090227031024" -->
<!-- sent="Thu, 26 Feb 2009 20:10:14 -0700" -->
<!-- isosent="20090227031014" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest SVN failures" -->
<!-- id="466E6259-4F14-4925-85FF-AB114E9CEAB2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ECFC9FE-E89F-498E-A824-C0D7A91DA009_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-02-26 22:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8225.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Previous message:</strong> <a href="8223.php">Brett Pemberton: "[OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8222.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8229.php">George Bosilca: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Reply:</strong> <a href="8229.php">George Bosilca: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Reply:</strong> <a href="8239.php">Rolf Vandevaart: "Re: [OMPI users] Latest SVN failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I tested the trunk tonight using both SLURM and rsh launchers,  
<br>
and everything checks out fine. However, this is running under SGE and  
<br>
thus using qrsh, so it is possible the SGE support is having a problem.
<br>
<p>Perhaps one of the Sun OMPI developers can help here?
<br>
<p>Ralph
<br>
<p>On Feb 26, 2009, at 7:21 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; It looks like the system doesn't know what nodes the procs are to be  
</span><br>
<span class="quotelev1">&gt; placed upon. Can you run this with --display-devel-map? That will  
</span><br>
<span class="quotelev1">&gt; tell us where the system thinks it is placing things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 26, 2009, at 3:41 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe it's my pine mailer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a NAMD run on 256 procs across 32 dual-socket quad-core AMD
</span><br>
<span class="quotelev2">&gt;&gt; shangai nodes running a standard benchmark called stmv.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The basic error message, which occurs 31 times is like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [s0164:24296] [[64102,0],16] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../.././orte/mca/odls/base/odls_base_default_fns.c at  
</span><br>
<span class="quotelev2">&gt;&gt; line 595
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mpirun command has long paths in it, sorry. It's invoking a  
</span><br>
<span class="quotelev2">&gt;&gt; special binding
</span><br>
<span class="quotelev2">&gt;&gt; script which in turn lauches the NAMD run. This works on an older  
</span><br>
<span class="quotelev2">&gt;&gt; SVN at
</span><br>
<span class="quotelev2">&gt;&gt; level 1.4a1r20123 (for 16,32,64,128 and 512 procs)but not for this  
</span><br>
<span class="quotelev2">&gt;&gt; 256 proc run where
</span><br>
<span class="quotelev2">&gt;&gt; the older SVN hangs indefinitely polling some completion (sm or  
</span><br>
<span class="quotelev2">&gt;&gt; openib). So, I was trying
</span><br>
<span class="quotelev2">&gt;&gt; later SVNs with this 256 proc run, hoping the error would go away.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's some of the invocation again. Hope you can read it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; EAGER_SIZE=32767
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_btl_openib_use_eager_rdma=0
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_btl_openib_eager_limit=$EAGER_SIZE
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_btl_self_eager_limit=$EAGER_SIZE
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_btl_sm_eager_limit=$EAGER_SIZE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and, unexpanded
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix $PREFIX -np %PE% $MCA -x  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_openib_use_eager_rdma -x  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_openib_eager_limit -x OMPI_MCA_btl_self_eager_limit -x  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_sm_eager_limit -machinefile $HOSTS $MPI_BINDER $NAMD2  
</span><br>
<span class="quotelev2">&gt;&gt; stmv.namd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and, expanded
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /tools/openmpi/1.4a1r20643_svn/connectx/ 
</span><br>
<span class="quotelev2">&gt;&gt; intel64/10.1.015/openib/suse_sles_10/x86_64/opteron -np 256 --mca  
</span><br>
<span class="quotelev2">&gt;&gt; btl sm,openib,self -x OMPI_MCA_btl_openib_use_eager_rdma -x  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_openib_eager_limit -x OMPI_MCA_btl_self_eager_limit -x  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_sm_eager_limit -machinefile /tmp/48292.1.all.q/ 
</span><br>
<span class="quotelev2">&gt;&gt; newhosts /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/ 
</span><br>
<span class="quotelev2">&gt;&gt; mpi_binder.MRL /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/ 
</span><br>
<span class="quotelev2">&gt;&gt; intel-10.1.015_ofed_1.3.1_openmpi_1.4a1r20643_svn/NAMD_2.6_Source/ 
</span><br>
<span class="quotelev2">&gt;&gt; Linux-amd64-MPI/namd2 stmv.namd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is all via Sun Grid Engine.
</span><br>
<span class="quotelev2">&gt;&gt; The OS as indicated above is SuSE SLES 10 SP2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DM
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 26 Feb 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm sorry, but I can't make any sense of this message. Could you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; little explanation of what you are doing, what the system looks  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like, what is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supposed to happen, etc? I can barely parse your cmd line...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 26, 2009, at 1:03 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Today's and yesterdays.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.4a1r20643_svn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + mpirun --prefix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tools/openmpi/1.4a1r20643_svn/connectx/intel64/10.1.015/openib/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suse_sles_10/x86_6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4/opteron -np 256 --mca btl sm,openib,self -x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_btl_openib_use_eager_rdma -x OMPI_MCA_btl_ope
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nib_eager_limit -x OMPI_MCA_btl_self_eager_limit -x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_btl_sm_eager_limit -machinefile /tmp/48
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 269.1.all.q/newhosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/mpi_binder.MRL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /ctmp8/mostyn/IM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SC/bench_intel_openmpi_I_shang2/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intel-10.1.015_ofed_1.3.1_openmpi_1.4a1r20643_svn/NAMD_2.6_Source/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Li
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nux-amd64-MPI/namd2 stmv.namd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s0164:24296] [[64102,0],16] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s0128:24439] [[64102,0],4] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base_default_fns.c at line 595
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s0156:29300] [[64102,0],12] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s0168:20585] [[64102,0],20] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s0181:19554] [[64102,0],28] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Made with INTEL compilers 10.1.015.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mostyn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8225.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Previous message:</strong> <a href="8223.php">Brett Pemberton: "[OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8222.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8229.php">George Bosilca: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Reply:</strong> <a href="8229.php">George Bosilca: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Reply:</strong> <a href="8239.php">Rolf Vandevaart: "Re: [OMPI users] Latest SVN failures"</a>
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
