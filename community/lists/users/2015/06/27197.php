<?
$subject_val = "[OMPI users] Running with native ugni on a Cray XC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 17:55:53 2015" -->
<!-- isoreceived="20150625215553" -->
<!-- sent="Thu, 25 Jun 2015 21:55:47 +0000" -->
<!-- isosent="20150625215547" -->
<!-- name="Nick Radcliffe" -->
<!-- email="nradclif_at_[hidden]" -->
<!-- subject="[OMPI users] Running with native ugni on a Cray XC" -->
<!-- id="431FBD479B82074EA4C9DC37E413F4F32505B27E_at_CFWEX01.americas.cray.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Running with native ugni on a Cray XC<br>
<strong>From:</strong> Nick Radcliffe (<em>nradclif_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-25 17:55:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27198.php">Howard Pritchard: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Previous message:</strong> <a href="27196.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27198.php">Howard Pritchard: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Reply:</strong> <a href="27198.php">Howard Pritchard: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

I'm trying to build and run Open MPI 1.8.5 with native ugni on a Cray XC. The build works, but I'm getting this error when I run:

nradclif_at_kay:/lus/scratch/nradclif&gt; aprun -n 2 -N 1 ./osu_latency                                          
[nid00014:28784] [db_pmi.c:174:pmi_commit_packed] PMI_KVS_Put: Operation failed                            
[nid00014:28784] [db_pmi.c:457:commit] PMI_KVS_Commit: Operation failed                                    
[nid00012:12788] [db_pmi.c:174:pmi_commit_packed] PMI_KVS_Put: Operation failed                            
[nid00012:12788] [db_pmi.c:457:commit] PMI_KVS_Commit: Operation failed                                    
# OSU MPI Latency Test                                                                                     
# Size            Latency (us)                                                                             
osu_latency: btl_ugni_endpoint.c:87: mca_btl_ugni_ep_connect_start: Assertion `0' failed.                  
[nid00012:12788] *** Process received signal ***                                                           
[nid00012:12788] Signal: Aborted (6)                                                                       
[nid00012:12788] Signal code:  (-6)                                                                        
[nid00012:12788] [ 0] /lib64/libpthread.so.0(+0xf850)[0x2aaaab42b850]                                      
[nid00012:12788] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x2aaaab66b885]                                       
[nid00012:12788] [ 2] /lib64/libc.so.6(abort+0x181)[0x2aaaab66ce61]                                        
[nid00012:12788] [ 3] /lib64/libc.so.6(__assert_fail+0xf0)[0x2aaaab664740]                                 
[nid00012:12788] [ 4] /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(mca_btl_ugni_ep_connect_progress+0x6c9)[0x2aaaaaff9869]
[nid00012:12788] [ 5] /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(+0x5ae32)[0x2aaaaaf46e32]                              
[nid00012:12788] [ 6] /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(mca_btl_ugni_sendi+0x8bd)[0x2aaaaaffaf7d]              
[nid00012:12788] [ 7] /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(+0x1f0c17)[0x2aaaab0dcc17]                             
[nid00012:12788] [ 8] /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(mca_pml_ob1_isend+0xa8)[0x2aaaab0dd488]                
[nid00012:12788] [ 9] /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(ompi_coll_tuned_barrier_intra_two_procs+0x11b)[0x2aaaab07e84b]
[nid00012:12788] [10] /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(PMPI_Barrier+0xb6)[0x2aaaaaf8a7c6]                            
[nid00012:12788] [11] ./osu_latency[0x401114]                                                                                             
[nid00012:12788] [12] /lib64/libc.so.6(__libc_start_main+0xe6)[0x2aaaab657c36]                                                            
[nid00012:12788] [13] ./osu_latency[0x400dd9]                                                                                             
[nid00012:12788] *** End of error message ***                                                                                             
osu_latency: btl_ugni_endpoint.c:87: mca_btl_ugni_ep_connect_start: Assertion `0' failed.


Here's how I build:

export FC=ftn         (I'm not using Fortran, but the configure fails if it can't find a Fortran compiler)
./configure --prefix=/lus/scratch/nradclif/openmpi_install --enable-mpi-fortran=none --with-platform=contrib/platform/lanl/cray_xe6/debug-lustre
make install

I didn't modify the debug-lustre file, but I did change cray-common to remove the hard-coding, e.g., rather than using the gemini-specific path &quot;with_pmi=/opt/cray/pmi/2.1.4-1.0000.8596.8.9.gem&quot;, I used &quot;with_pmi=/opt/cray/pmi/default&quot;.

I've tried running different executables with different numbers of ranks/nodes, but they all seem to run into problems with PMI_KVS_Put.

Any ideas what could be going wrong?

Thanks for any help,
Nick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27198.php">Howard Pritchard: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Previous message:</strong> <a href="27196.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27198.php">Howard Pritchard: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Reply:</strong> <a href="27198.php">Howard Pritchard: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
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
