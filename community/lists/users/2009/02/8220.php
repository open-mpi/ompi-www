<?
$subject_val = "Re: [OMPI users] Latest SVN failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 17:41:36 2009" -->
<!-- isoreceived="20090226224136" -->
<!-- sent="Thu, 26 Feb 2009 14:41:27 -0800 (PST)" -->
<!-- isosent="20090226224127" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest SVN failures" -->
<!-- id="Pine.GSO.4.64.0902261440430.13209_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Latest SVN failures" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 17:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8221.php">Justin: "[OMPI users] valgrind problems"</a>
<li><strong>Previous message:</strong> <a href="8219.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="8218.php">Mostyn Lewis: "[OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8222.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Reply:</strong> <a href="8222.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe it's my pine mailer.
<br>
<p>This is a NAMD run on 256 procs across 32 dual-socket quad-core AMD
<br>
shangai nodes running a standard benchmark called stmv.
<br>
<p>The basic error message, which occurs 31 times is like:
<br>
<p>[s0164:24296] [[64102,0],16] ORTE_ERROR_LOG: Not found in file ../../../.././orte/mca/odls/base/odls_base_default_fns.c at line 595
<br>
<p>The mpirun command has long paths in it, sorry. It's invoking a special binding
<br>
script which in turn lauches the NAMD run. This works on an older SVN at
<br>
level 1.4a1r20123 (for 16,32,64,128 and 512 procs)but not for this 256 proc run where
<br>
the older SVN hangs indefinitely polling some completion (sm or openib). So, I was trying
<br>
later SVNs with this 256 proc run, hoping the error would go away.
<br>
<p>Here's some of the invocation again. Hope you can read it:
<br>
<p>EAGER_SIZE=32767
<br>
export OMPI_MCA_btl_openib_use_eager_rdma=0
<br>
export OMPI_MCA_btl_openib_eager_limit=$EAGER_SIZE
<br>
export OMPI_MCA_btl_self_eager_limit=$EAGER_SIZE
<br>
export OMPI_MCA_btl_sm_eager_limit=$EAGER_SIZE
<br>
<p>and, unexpanded
<br>
<p>mpirun --prefix $PREFIX -np %PE% $MCA -x OMPI_MCA_btl_openib_use_eager_rdma -x OMPI_MCA_btl_openib_eager_limit -x OMPI_MCA_btl_self_eager_limit -x OMPI_MCA_btl_sm_eager_limit -machinefile $HOSTS $MPI_BINDER $NAMD2 stmv.namd
<br>
<p>and, expanded
<br>
<p>mpirun --prefix /tools/openmpi/1.4a1r20643_svn/connectx/intel64/10.1.015/openib/suse_sles_10/x86_64/opteron -np 256 --mca btl sm,openib,self -x OMPI_MCA_btl_openib_use_eager_rdma -x OMPI_MCA_btl_openib_eager_limit -x OMPI_MCA_btl_self_eager_limit -x OMPI_MCA_btl_sm_eager_limit -machinefile /tmp/48292.1.all.q/newhosts /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/mpi_binder.MRL /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/intel-10.1.015_ofed_1.3.1_openmpi_1.4a1r20643_svn/NAMD_2.6_Source/Linux-amd64-MPI/namd2 stmv.namd
<br>
<p>This is all via Sun Grid Engine.
<br>
The OS as indicated above is SuSE SLES 10 SP2.
<br>
<p>DM
<br>
On Thu, 26 Feb 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm sorry, but I can't make any sense of this message. Could you provide a
</span><br>
<span class="quotelev1">&gt; little explanation of what you are doing, what the system looks like, what is
</span><br>
<span class="quotelev1">&gt; supposed to happen, etc? I can barely parse your cmd line...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 26, 2009, at 1:03 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today's and yesterdays.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.4a1r20643_svn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + mpirun --prefix
</span><br>
<span class="quotelev2">&gt;&gt; /tools/openmpi/1.4a1r20643_svn/connectx/intel64/10.1.015/openib/suse_sles_10/x86_6
</span><br>
<span class="quotelev2">&gt;&gt; 4/opteron -np 256 --mca btl sm,openib,self -x
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_openib_use_eager_rdma -x OMPI_MCA_btl_ope
</span><br>
<span class="quotelev2">&gt;&gt; nib_eager_limit -x OMPI_MCA_btl_self_eager_limit -x
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_sm_eager_limit -machinefile /tmp/48
</span><br>
<span class="quotelev2">&gt;&gt; 269.1.all.q/newhosts
</span><br>
<span class="quotelev2">&gt;&gt; /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/mpi_binder.MRL
</span><br>
<span class="quotelev2">&gt;&gt; /ctmp8/mostyn/IM
</span><br>
<span class="quotelev2">&gt;&gt; SC/bench_intel_openmpi_I_shang2/intel-10.1.015_ofed_1.3.1_openmpi_1.4a1r20643_svn/NAMD_2.6_Source/Li
</span><br>
<span class="quotelev2">&gt;&gt; nux-amd64-MPI/namd2 stmv.namd
</span><br>
<span class="quotelev2">&gt;&gt; [s0164:24296] [[64102,0],16] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev2">&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev2">&gt;&gt; [s0128:24439] [[64102,0],4] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../.././orte/mca/odls/base/odls_
</span><br>
<span class="quotelev2">&gt;&gt; base_default_fns.c at line 595
</span><br>
<span class="quotelev2">&gt;&gt; [s0156:29300] [[64102,0],12] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev2">&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev2">&gt;&gt; [s0168:20585] [[64102,0],20] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev2">&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev2">&gt;&gt; [s0181:19554] [[64102,0],28] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev2">&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Made with INTEL compilers 10.1.015.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Mostyn
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
<li><strong>Next message:</strong> <a href="8221.php">Justin: "[OMPI users] valgrind problems"</a>
<li><strong>Previous message:</strong> <a href="8219.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="8218.php">Mostyn Lewis: "[OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8222.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Reply:</strong> <a href="8222.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
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
