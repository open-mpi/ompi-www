<?
$subject_val = "Re: [OMPI users] Latest SVN failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 15:48:21 2009" -->
<!-- isoreceived="20090310194821" -->
<!-- sent="Tue, 10 Mar 2009 13:45:07 -0600" -->
<!-- isosent="20090310194507" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest SVN failures" -->
<!-- id="A1BB0284-F7C5-41C1-9962-855139AEE997_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0903100946550.2237_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Date:</strong> 2009-03-10 15:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8385.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<li><strong>Previous message:</strong> <a href="8383.php">Yu Chen: "[OMPI users] pcart_coords_f.c:74: error: lvalue required as decrement operand"</a>
<li><strong>In reply to:</strong> <a href="8380.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8387.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Reply:</strong> <a href="8387.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not really. I've run much bigger jobs than this without problem, so I  
<br>
don't think there is a fundamental issue here.
<br>
<p>It looks like the TCP fabric between the various nodes is breaking  
<br>
down. I note in the enclosed messages that the problems are all with  
<br>
comm between daemons 4 and 21. We keep trying to get through, but  
<br>
failing.
<br>
<p>I can fix things so we don't endlessly loop when that happens (IIRC, I  
<br>
think we are already supposed to abort, but it appears that isn't  
<br>
working). But the real question is why the comm fails in the first  
<br>
place.
<br>
<p><p>On Mar 10, 2009, at 10:50 AM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Latest status - 1.4a1r20757 (yesterday);
</span><br>
<span class="quotelev1">&gt; the job now starts with a little output but quickly runs into  
</span><br>
<span class="quotelev1">&gt; trouble with
</span><br>
<span class="quotelev1">&gt; a lot of
</span><br>
<span class="quotelev1">&gt; 'oob-tcp: Communication retries exceeded.  Can not communicate with  
</span><br>
<span class="quotelev1">&gt; peer '
</span><br>
<span class="quotelev1">&gt; errors?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e.g.
</span><br>
<span class="quotelev1">&gt; [s0158:22513] [[41245,0],4]-[[41245,0],21] oob-tcp: Communication  
</span><br>
<span class="quotelev1">&gt; retries exceeded.  Can not communicate with peer [s0158:22513]  
</span><br>
<span class="quotelev1">&gt; [[41245,0],4]-[[41245,0],21] oob-tcp: Communication retries  
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer [s0158:22513] [[41245,0],4]- 
</span><br>
<span class="quotelev1">&gt; [[41245,0],21] oob-tcp: Communication retries exceeded.  Can not  
</span><br>
<span class="quotelev1">&gt; communicate with peer [s0158:22513] [[41245,0],4]-[[41245,0],21] oob- 
</span><br>
<span class="quotelev1">&gt; tcp: Communication retries exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The nodes are O.K. ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas folks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, 28 Feb 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I have this figured out - will fix on Monday. I'm not sure  
</span><br>
<span class="quotelev2">&gt;&gt; why Jeff's conditions are all required, especially the second one.  
</span><br>
<span class="quotelev2">&gt;&gt; However, the fundamental problem is that we pull information from  
</span><br>
<span class="quotelev2">&gt;&gt; two sources regarding the number of procs in the job when unpacking  
</span><br>
<span class="quotelev2">&gt;&gt; a buffer, and the two sources appear to be out-of-sync with each  
</span><br>
<span class="quotelev2">&gt;&gt; other in certain scenarios.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The details are beyond the user list. I'll respond here again once  
</span><br>
<span class="quotelev2">&gt;&gt; I get it fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 27, 2009, at 4:14 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, I think I have reproduced the problem as well --  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with SVN trunk HEAD (r20655):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [15:12] svbu-mpi:~/mpi % mpirun --mca bogus foo --bynode -np 2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uptime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi.cisco.com:24112] [[62779,0],0] ORTE_ERROR_LOG: Data  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unpack failed in file base/odls_base_default_fns.c at line 566
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Notice that I'm not trying to run an MPI app -- it's just &quot;uptime&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The following things seem to be necessary to make this error occur  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for me:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. --bynode
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. set some mca parameter (any mca parameter)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. -np value less than the size of my slurm allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I remove any of those, it seems to run file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 27, 2009, at 5:05 PM, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With further investigation, I have reproduced this problem.  I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; think I was originally testing against a version that was not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recent enough.  I do not see it with r20594 which is from  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; February 19.  So, something must have happened over the last 8  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; days.  I will try and narrow down the issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 02/27/09 09:34, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I just tried trunk-1.4a1r20458 and I did not see this error,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; although my configuration was rather different.  I ran across  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 100 2-CPU sparc nodes, np=256, connected with TCP.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hopefully George's comment helps out with this issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One other thought to see whether SGE has anything to do with  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this is create a hostfile and run it outside of SGE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 02/26/09 22:10, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FWIW: I tested the trunk tonight using both SLURM and rsh  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; launchers, and everything checks out fine. However, this is  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; running under SGE and thus using qrsh, so it is possible the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SGE support is having a problem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Perhaps one of the Sun OMPI developers can help here?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Feb 26, 2009, at 7:21 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like the system doesn't know what nodes the procs are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to be placed upon. Can you run this with --display-devel-map?  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; That will tell us where the system thinks it is placing things.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 26, 2009, at 3:41 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maybe it's my pine mailer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is a NAMD run on 256 procs across 32 dual-socket quad- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; core AMD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shangai nodes running a standard benchmark called stmv.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The basic error message, which occurs 31 times is like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0164:24296] [[64102,0],16] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file ../../../.././orte/mca/odls/base/odls_base_default_fns.c  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at line 595
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The mpirun command has long paths in it, sorry. It's invoking  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a special binding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; script which in turn lauches the NAMD run. This works on an  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; older SVN at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; level 1.4a1r20123 (for 16,32,64,128 and 512 procs)but not for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this 256 proc run where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the older SVN hangs indefinitely polling some completion (sm  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; or openib). So, I was trying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; later SVNs with this 256 proc run, hoping the error would go  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; away.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here's some of the invocation again. Hope you can read it:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; EAGER_SIZE=32767
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_btl_openib_use_eager_rdma=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_btl_openib_eager_limit=$EAGER_SIZE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_btl_self_eager_limit=$EAGER_SIZE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_btl_sm_eager_limit=$EAGER_SIZE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and, unexpanded
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --prefix $PREFIX -np %PE% $MCA -x  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_openib_use_eager_rdma -x  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_openib_eager_limit -x  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_self_eager_limit -x OMPI_MCA_btl_sm_eager_limit - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; machinefile $HOSTS $MPI_BINDER $NAMD2 stmv.namd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and, expanded
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --prefix /tools/openmpi/1.4a1r20643_svn/connectx/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; intel64/10.1.015/openib/suse_sles_10/x86_64/opteron -np 256 -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca btl sm,openib,self -x OMPI_MCA_btl_openib_use_eager_rdma - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; x OMPI_MCA_btl_openib_eager_limit -x  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_self_eager_limit -x OMPI_MCA_btl_sm_eager_limit - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; machinefile /tmp/48292.1.all.q/newhosts /ctmp8/mostyn/IMSC/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bench_intel_openmpi_I_shang2/mpi_binder.MRL /ctmp8/mostyn/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IMSC/bench_intel_openmpi_I_shang2/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; intel-10.1.015_ofed_1.3.1_openmpi_1.4a1r20643_svn/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NAMD_2.6_Source/Linux-amd64-MPI/namd2 stmv.namd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is all via Sun Grid Engine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The OS as indicated above is SuSE SLES 10 SP2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; DM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, 26 Feb 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm sorry, but I can't make any sense of this message. Could  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you provide a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; little explanation of what you are doing, what the system  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; looks like, what is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; supposed to happen, etc? I can barely parse your cmd line...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 26, 2009, at 1:03 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Today's and yesterdays.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.4a1r20643_svn
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; + mpirun --prefix
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tools/openmpi/1.4a1r20643_svn/connectx/intel64/10.1.015/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib/suse_sles_10/x86_6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 4/opteron -np 256 --mca btl sm,openib,self -x
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_openib_use_eager_rdma -x OMPI_MCA_btl_ope
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nib_eager_limit -x OMPI_MCA_btl_self_eager_limit -x
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_sm_eager_limit -machinefile /tmp/48
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 269.1.all.q/newhosts
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_binder.MRL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /ctmp8/mostyn/IM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SC/bench_intel_openmpi_I_shang2/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; intel-10.1.015_ofed_1.3.1_openmpi_1.4a1r20643_svn/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NAMD_2.6_Source/Li
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nux-amd64-MPI/namd2 stmv.namd
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0164:24296] [[64102,0],16] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0128:24439] [[64102,0],4] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls_
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; base_default_fns.c at line 595
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0156:29300] [[64102,0],12] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0168:20585] [[64102,0],20] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0181:19554] [[64102,0],28] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Made with INTEL compilers 10.1.015.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mostyn
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="8385.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<li><strong>Previous message:</strong> <a href="8383.php">Yu Chen: "[OMPI users] pcart_coords_f.c:74: error: lvalue required as decrement operand"</a>
<li><strong>In reply to:</strong> <a href="8380.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8387.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Reply:</strong> <a href="8387.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
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
