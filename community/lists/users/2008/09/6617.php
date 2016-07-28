<?
$subject_val = "[OMPI users] Strange segfault in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 14:42:23 2008" -->
<!-- isoreceived="20080919184223" -->
<!-- sent="Fri, 19 Sep 2008 12:42:18 -0600" -->
<!-- isosent="20080919184218" -->
<!-- name="Daniel Hansen" -->
<!-- email="dhansen_at_[hidden]" -->
<!-- subject="[OMPI users] Strange segfault in openmpi" -->
<!-- id="f50c46db0809191142u34b002d0u5ce8d7f9a033c7f7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Strange segfault in openmpi<br>
<strong>From:</strong> Daniel Hansen (<em>dhansen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 14:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6618.php">Robert Kubrick: "Re: [OMPI users] Strange segfault in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6616.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6618.php">Robert Kubrick: "Re: [OMPI users] Strange segfault in openmpi"</a>
<li><strong>Reply:</strong> <a href="6618.php">Robert Kubrick: "Re: [OMPI users] Strange segfault in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I work for a supercomputing organization and we just installed the latest
<br>
version of rocks/centos on our cluster.  We compiled openmpi from source to
<br>
customize it for our purposes.  Since switching we have receive messages
<br>
from users about errors, segfaults, etc. that we didn't see before.  Here is
<br>
one such segfault message that I don't have enough knowledge to figure out
<br>
or even have a clue about what is going on.  Here it is:
<br>
<p>[m4b-1-8:11830] *** Process received signal ***
<br>
[m4b-1-8:11830] Signal: Segmentation fault (11)
<br>
[m4b-1-8:11830] Signal code: Address not mapped (1)
<br>
[m4b-1-8:11830] Failing at address: 0x2abcdff475b0
<br>
[m4b-1-8:11830] [ 0] /lib64/libpthread.so.0 [0x33e8c0de70]
<br>
[m4b-1-8:11830] [ 1]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(mca_btl_sm_send+0xf1)
<br>
[0x2aaaaab541d1]
<br>
[m4b-1-8:11830] [ 2]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(mca_pml_ob1_send_request_start_copy+0x15e)
<br>
[0x2aaaaaba0e2e]
<br>
[m4b-1-8:11830] [ 3]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(mca_pml_ob1_isend+0x217)
<br>
[0x2aaaaab9be37]
<br>
[m4b-1-8:11830] [ 4]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(ompi_coll_tuned_sendrecv_actual+0xda)
<br>
[0x2aaaaab5acaa]
<br>
[m4b-1-8:11830] [ 5]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(ompi_coll_tuned_barrier_intra_bruck+0x9f)
<br>
[0x2aaaaab5f81f]
<br>
[m4b-1-8:11830] [ 6]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(PMPI_Barrier+0x6f)
<br>
[0x2aaaaab1eadf]
<br>
[m4b-1-8:11830] [ 7]
<br>
/fslhome/wshuai/compute/for_Shuai2/mpi_md_bgo_twham_12sept08_debug(main+0x5d9)
<br>
[0x413179]
<br>
[m4b-1-8:11830] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x33e841d8a4]
<br>
<p>[m4b-1-8:11830] [ 9]
<br>
/fslhome/wshuai/compute/for_Shuai2/mpi_md_bgo_twham_12sept08_debug
<br>
[0x404109]
<br>
[m4b-1-8:11830] *** End of error message ***
<br>
[m4b-1-9:11772] *** Process received signal ***
<br>
[m4b-1-9:11772] Signal: Segmentation fault (11)
<br>
[m4b-1-9:11772] Signal code: Address not mapped (1)
<br>
[m4b-1-9:11772] Failing at address: 0x2abcdff475b0
<br>
[m4b-1-9:11772] [ 0] /lib64/libpthread.so.0 [0x302380de70]
<br>
[m4b-1-9:11772] [ 1]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(mca_btl_sm_send+0xf1)
<br>
[0x2aaaaab541d1]
<br>
[m4b-1-9:11772] [ 2]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(mca_pml_ob1_send_request_start_copy+0x15e)
<br>
[0x2aaaaaba0e2e]
<br>
[m4b-1-9:11772] [ 3]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(mca_pml_ob1_isend+0x217)
<br>
[0x2aaaaab9be37]
<br>
[m4b-1-9:11772] [ 4]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(ompi_coll_tuned_sendrecv_actual+0xda)
<br>
[0x2aaaaab5acaa]
<br>
[m4b-1-9:11772] [ 5]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(ompi_coll_tuned_barrier_intra_bruck+0x9f)
<br>
[0x2aaaaab5f81f]
<br>
[m4b-1-9:11772] [ 6]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(PMPI_Barrier+0x6f)
<br>
[0x2aaaaab1eadf]
<br>
[m4b-1-9:11772] [ 7]
<br>
/fslhome/wshuai/compute/for_Shuai2/mpi_md_bgo_twham_12sept08_debug(main+0x5d9)
<br>
[0x413179]
<br>
[m4b-1-9:11772] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x302301d8a4]
<br>
<p>[m4b-1-9:11772] [ 9]
<br>
/fslhome/wshuai/compute/for_Shuai2/mpi_md_bgo_twham_12sept08_debug
<br>
[0x404109]
<br>
[m4b-1-9:11772] *** End of error message ***
<br>
[m4b-1-7i][0,1,7][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=111
<br>
[m4b-1-7i][0,1,8][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=111
<br>
[m4b-1-7i][0,1,9][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed with errno=104
<br>
[m4b-1-7i][0,1,9][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=111
<br>
[m4b-1-9:11773] *** Process received signal ***
<br>
[m4b-1-9:11773] Signal: Segmentation fault (11)
<br>
[m4b-1-9:11773] Signal code: Address not mapped (1)
<br>
[m4b-1-9:11773] Failing at address: 0x2abcdff475b0
<br>
[m4b-1-9:11773] [ 0] /lib64/libpthread.so.0 [0x302380de70]
<br>
[m4b-1-9:11773] [ 1]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(mca_btl_sm_send+0xf1)
<br>
[0x2aaaaab541d1]
<br>
[m4b-1-9:11773] [ 2]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(mca_pml_ob1_send_request_start_copy+0x15e)
<br>
[0x2aaaaaba0e2e]
<br>
[m4b-1-9:11773] [ 3]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(mca_pml_ob1_isend+0x217)
<br>
[0x2aaaaab9be37]
<br>
[m4b-1-9:11773] [ 4]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(ompi_coll_tuned_sendrecv_actual+0xda)
<br>
[0x2aaaaab5acaa]
<br>
[m4b-1-9:11773] [ 5]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(ompi_coll_tuned_barrier_intra_bruck+0x9f)
<br>
[0x2aaaaab5f81f]
<br>
[m4b-1-9:11773] [ 6]
<br>
/usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0(PMPI_Barrier+0x6f)
<br>
[0x2aaaaab1eadf]
<br>
[m4b-1-9:11773] [ 7]
<br>
/fslhome/wshuai/compute/for_Shuai2/mpi_md_bgo_twham_12sept08_debug(main+0x5d9)
<br>
[0x413179]
<br>
[m4b-1-9:11773] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x302301d8a4]
<br>
<p>[m4b-1-9:11773] [ 9]
<br>
/fslhome/wshuai/compute/for_Shuai2/mpi_md_bgo_twham_12sept08_debug
<br>
[0x404109]
<br>
[m4b-1-9:11773] *** End of error message ***
<br>
orterun noticed that job rank 0 with PID 12338 on node m4b-1-10i exited on
<br>
signal 15 (Terminated).
<br>
<p>Can someone give me some clues as to what is going wrong here or possibly
<br>
point me in the right direction?  Is there something I or the user can do to
<br>
get more informative error messages?  The user mentioned that this
<br>
particular program ran fine before we upgraded to the current openmpi
<br>
version, and that he can't find any bugs in his code.
<br>
<p>Thanks for your help,
<br>
<p>Daniel Hansen
<br>
Systems Administrator
<br>
BYU Fulton Supercomputing Lab
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6617/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6618.php">Robert Kubrick: "Re: [OMPI users] Strange segfault in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6616.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6618.php">Robert Kubrick: "Re: [OMPI users] Strange segfault in openmpi"</a>
<li><strong>Reply:</strong> <a href="6618.php">Robert Kubrick: "Re: [OMPI users] Strange segfault in openmpi"</a>
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
