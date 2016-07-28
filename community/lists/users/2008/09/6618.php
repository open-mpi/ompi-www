<?
$subject_val = "Re: [OMPI users] Strange segfault in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 14:53:09 2008" -->
<!-- isoreceived="20080919185309" -->
<!-- sent="Fri, 19 Sep 2008 14:51:32 -0400" -->
<!-- isosent="20080919185132" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange segfault in openmpi" -->
<!-- id="DBBDA5DE-B1E7-47F1-B981-D1262B545275_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f50c46db0809191142u34b002d0u5ce8d7f9a033c7f7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange segfault in openmpi<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 14:51:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6619.php">Timothy Kaiser: "[OMPI users] proper way to shut down orted"</a>
<li><strong>Previous message:</strong> <a href="6617.php">Daniel Hansen: "[OMPI users] Strange segfault in openmpi"</a>
<li><strong>In reply to:</strong> <a href="6617.php">Daniel Hansen: "[OMPI users] Strange segfault in openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The line
<br>
<p>Signal code: Address not mapped (1)
<br>
<p>indicates that there is probably a mismatch between the runtime  
<br>
library and the linked version. Make sure that you link the program  
<br>
and run it using the same installation base. Are the libraries in / 
<br>
usr/mpi/fsl_openmpi_gcc_1.2.6 the same you used at link time?
<br>
<p>On Sep 19, 2008, at 2:42 PM, Daniel Hansen wrote:
<br>
<p><span class="quotelev1">&gt; I work for a supercomputing organization and we just installed the  
</span><br>
<span class="quotelev1">&gt; latest version of rocks/centos on our cluster.  We compiled openmpi  
</span><br>
<span class="quotelev1">&gt; from source to customize it for our purposes.  Since switching we  
</span><br>
<span class="quotelev1">&gt; have receive messages from users about errors, segfaults, etc. that  
</span><br>
<span class="quotelev1">&gt; we didn't see before.  Here is one such segfault message that I  
</span><br>
<span class="quotelev1">&gt; don't have enough knowledge to figure out or even have a clue about  
</span><br>
<span class="quotelev1">&gt; what is going on.  Here it is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] Failing at address: 0x2abcdff475b0
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] [ 0] /lib64/libpthread.so.0 [0x33e8c0de70]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] [ 1] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_btl_sm_send+0xf1) [0x2aaaaab541d1]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] [ 2] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_send_request_start_copy+0x15e) [0x2aaaaaba0e2e]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] [ 3] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_isend+0x217) [0x2aaaaab9be37]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] [ 4] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_sendrecv_actual+0xda) [0x2aaaaab5acaa]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] [ 5] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_barrier_intra_bruck+0x9f) [0x2aaaaab5f81f]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] [ 6] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (PMPI_Barrier+0x6f) [0x2aaaaab1eadf]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] [ 7] /fslhome/wshuai/compute/for_Shuai2/ 
</span><br>
<span class="quotelev1">&gt; mpi_md_bgo_twham_12sept08_debug(main+0x5d9) [0x413179]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x33e841d8a4]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] [ 9] /fslhome/wshuai/compute/for_Shuai2/ 
</span><br>
<span class="quotelev1">&gt; mpi_md_bgo_twham_12sept08_debug [0x404109]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11830] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] Failing at address: 0x2abcdff475b0
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] [ 0] /lib64/libpthread.so.0 [0x302380de70]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] [ 1] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_btl_sm_send+0xf1) [0x2aaaaab541d1]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] [ 2] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_send_request_start_copy+0x15e) [0x2aaaaaba0e2e]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] [ 3] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_isend+0x217) [0x2aaaaab9be37]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] [ 4] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_sendrecv_actual+0xda) [0x2aaaaab5acaa]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] [ 5] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_barrier_intra_bruck+0x9f) [0x2aaaaab5f81f]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] [ 6] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (PMPI_Barrier+0x6f) [0x2aaaaab1eadf]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] [ 7] /fslhome/wshuai/compute/for_Shuai2/ 
</span><br>
<span class="quotelev1">&gt; mpi_md_bgo_twham_12sept08_debug(main+0x5d9) [0x413179]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x302301d8a4]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] [ 9] /fslhome/wshuai/compute/for_Shuai2/ 
</span><br>
<span class="quotelev1">&gt; mpi_md_bgo_twham_12sept08_debug [0x404109]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11772] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [m4b-1-7i][0,1,7][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=111
</span><br>
<span class="quotelev1">&gt; [m4b-1-7i][0,1,8][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=111
</span><br>
<span class="quotelev1">&gt; [m4b-1-7i][0,1,9][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=104
</span><br>
<span class="quotelev1">&gt; [m4b-1-7i][0,1,9][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=111
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] Failing at address: 0x2abcdff475b0
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] [ 0] /lib64/libpthread.so.0 [0x302380de70]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] [ 1] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_btl_sm_send+0xf1) [0x2aaaaab541d1]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] [ 2] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_send_request_start_copy+0x15e) [0x2aaaaaba0e2e]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] [ 3] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_isend+0x217) [0x2aaaaab9be37]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] [ 4] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_sendrecv_actual+0xda) [0x2aaaaab5acaa]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] [ 5] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_barrier_intra_bruck+0x9f) [0x2aaaaab5f81f]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] [ 6] /usr/mpi/fsl_openmpi_gcc_1.2.6/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (PMPI_Barrier+0x6f) [0x2aaaaab1eadf]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] [ 7] /fslhome/wshuai/compute/for_Shuai2/ 
</span><br>
<span class="quotelev1">&gt; mpi_md_bgo_twham_12sept08_debug(main+0x5d9) [0x413179]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x302301d8a4]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] [ 9] /fslhome/wshuai/compute/for_Shuai2/ 
</span><br>
<span class="quotelev1">&gt; mpi_md_bgo_twham_12sept08_debug [0x404109]
</span><br>
<span class="quotelev1">&gt; [m4b-1-9:11773] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; orterun noticed that job rank 0 with PID 12338 on node m4b-1-10i  
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone give me some clues as to what is going wrong here or  
</span><br>
<span class="quotelev1">&gt; possibly point me in the right direction?  Is there something I or  
</span><br>
<span class="quotelev1">&gt; the user can do to get more informative error messages?  The user  
</span><br>
<span class="quotelev1">&gt; mentioned that this particular program ran fine before we upgraded  
</span><br>
<span class="quotelev1">&gt; to the current openmpi version, and that he can't find any bugs in  
</span><br>
<span class="quotelev1">&gt; his code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel Hansen
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; BYU Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6618/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6619.php">Timothy Kaiser: "[OMPI users] proper way to shut down orted"</a>
<li><strong>Previous message:</strong> <a href="6617.php">Daniel Hansen: "[OMPI users] Strange segfault in openmpi"</a>
<li><strong>In reply to:</strong> <a href="6617.php">Daniel Hansen: "[OMPI users] Strange segfault in openmpi"</a>
<!-- nextthread="start" -->
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
