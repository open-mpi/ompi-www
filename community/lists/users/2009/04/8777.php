<?
$subject_val = "Re: [OMPI users] Bogus memcpy or bogus valgrind record";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 06:39:15 2009" -->
<!-- isoreceived="20090406103915" -->
<!-- sent="Mon, 06 Apr 2009 11:39:10 +0100" -->
<!-- isosent="20090406103910" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bogus memcpy or bogus valgrind record" -->
<!-- id="49D9DBCE.9040707_at_ntlworld.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Bogus memcpy or bogus valgrind record" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bogus memcpy or bogus valgrind record<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 06:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8778.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI users] Problem with insatlling OpenMPI on compute node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd like to add my concern to the thread at 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/03/8661.php">http://www.open-mpi.org/community/lists/users/2009/03/8661.php</a> that the 
<br>
latest 1.3 series produces far too much memory-checker noise.
<br>
<p>We use Valgrind extensively during debugging, and although I'm using the 
<br>
latest snapshot (1.3.2a1r20901) and latest Valgrind, and have 
<br>
--with-valgrind turned on to suppress the PLPA-check related errors, I'm 
<br>
still getting far too many issues from the following simple test:
<br>
#include &lt;iostream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int
<br>
main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;int myRank;
<br>
&nbsp;&nbsp;&nbsp;if(!MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Hello World from &quot; &lt;&lt; myRank &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Running this via &quot;mpirun -np 2 valgrind hello_mpi&quot; gives:
<br>
==16829== Memcheck, a memory error detector.
<br>
==16829== Copyright (C) 2002-2008, and GNU GPL'd, by Julian Seward et al.
<br>
==16829== Using LibVEX rev 1884, a library for dynamic binary translation.
<br>
==16829== Copyright (C) 2004-2008, and GNU GPL'd, by OpenWorks LLP.
<br>
==16829== Using valgrind-3.4.1, a dynamic binary instrumentation framework.
<br>
==16829== Copyright (C) 2000-2008, and GNU GPL'd, by Julian Seward et al.
<br>
==16829== For more details, rerun with: -v
<br>
==16829==
<br>
==16830== Memcheck, a memory error detector.
<br>
==16830== Copyright (C) 2002-2008, and GNU GPL'd, by Julian Seward et al.
<br>
==16830== Using LibVEX rev 1884, a library for dynamic binary translation.
<br>
==16830== Copyright (C) 2004-2008, and GNU GPL'd, by OpenWorks LLP.
<br>
==16830== Using valgrind-3.4.1, a dynamic binary instrumentation framework.
<br>
==16830== Copyright (C) 2000-2008, and GNU GPL'd, by Julian Seward et al.
<br>
==16830== For more details, rerun with: -v
<br>
==16830==
<br>
==16830== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==16830==    at 0x34DE2C9F0C: writev (in /lib64/libc-2.6.so)
<br>
==16830==    by 0x5CD213: mca_oob_tcp_msg_send_handler (oob_tcp_msg.c:265)
<br>
==16830==    by 0x5C5B6A: mca_oob_tcp_peer_send (oob_tcp_peer.c:197)
<br>
==16830==    by 0x5CB958: mca_oob_tcp_send_nb (oob_tcp_send.c:167)
<br>
==16830==    by 0x5DB136: orte_rml_oob_send (rml_oob_send.c:137)
<br>
==16830==    by 0x5DBBBB: orte_rml_oob_send_buffer (rml_oob_send.c:269)
<br>
==16830==    by 0x5AFF7E: allgather (grpcomm_bad_module.c:369)
<br>
==16830==    by 0x5B0805: modex (grpcomm_bad_module.c:497)
<br>
==16830==    by 0x453518: ompi_mpi_init (ompi_mpi_init.c:626)
<br>
==16830==    by 0x476CF8: PMPI_Init (pinit.c:80)
<br>
==16830==    by 0x423DE0: main (helloMPI.cpp:8)
<br>
==16830==  Address 0x4e9e383 is 107 bytes inside a block of size 128 alloc'd
<br>
==16830==    at 0x4A05FBB: malloc (vg_replace_malloc.c:207)
<br>
==16830==    by 0x61684E: opal_dss_buffer_extend 
<br>
(dss_internal_functions.c:68)
<br>
==16830==    by 0x5F36CE: opal_dss_pack_byte (dss_pack.c:198)
<br>
==16830==    by 0x616974: opal_dss_store_data_type 
<br>
(dss_internal_functions.c:117)
<br>
==16830==    by 0x5F31FF: opal_dss_pack (dss_pack.c:37)
<br>
==16830==    by 0x5AFD65: allgather (grpcomm_bad_module.c:351)
<br>
==16830==    by 0x5B0805: modex (grpcomm_bad_module.c:497)
<br>
==16830==    by 0x453518: ompi_mpi_init (ompi_mpi_init.c:626)
<br>
==16830==    by 0x476CF8: PMPI_Init (pinit.c:80)
<br>
==16830==    by 0x423DE0: main (helloMPI.cpp:8)
<br>
==16829== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==16829==    at 0x34DE2C9F0C: writev (in /lib64/libc-2.6.so)
<br>
==16829==    by 0x5CD213: mca_oob_tcp_msg_send_handler (oob_tcp_msg.c:265)
<br>
==16829==    by 0x5C5B6A: mca_oob_tcp_peer_send (oob_tcp_peer.c:197)
<br>
==16829==    by 0x5CB958: mca_oob_tcp_send_nb (oob_tcp_send.c:167)
<br>
==16829==    by 0x5DB136: orte_rml_oob_send (rml_oob_send.c:137)
<br>
==16829==    by 0x5DBBBB: orte_rml_oob_send_buffer (rml_oob_send.c:269)
<br>
==16829==    by 0x5AFF7E: allgather (grpcomm_bad_module.c:369)
<br>
==16829==    by 0x5B0805: modex (grpcomm_bad_module.c:497)
<br>
==16829==    by 0x453518: ompi_mpi_init (ompi_mpi_init.c:626)
<br>
==16829==    by 0x476CF8: PMPI_Init (pinit.c:80)
<br>
==16829==    by 0x423DE0: main (helloMPI.cpp:8)
<br>
==16829==  Address 0x4e9e63b is 107 bytes inside a block of size 256 alloc'd
<br>
==16829==    at 0x4A06092: realloc (vg_replace_malloc.c:429)
<br>
==16829==    by 0x61681C: opal_dss_buffer_extend 
<br>
(dss_internal_functions.c:63)
<br>
==16829==    by 0x6181D2: opal_dss_copy_payload (dss_load_unload.c:164)
<br>
==16829==    by 0x5AFEC9: allgather (grpcomm_bad_module.c:363)
<br>
==16829==    by 0x5B0805: modex (grpcomm_bad_module.c:497)
<br>
==16829==    by 0x453518: ompi_mpi_init (ompi_mpi_init.c:626)
<br>
==16829==    by 0x476CF8: PMPI_Init (pinit.c:80)
<br>
==16829==    by 0x423DE0: main (helloMPI.cpp:8)
<br>
==16829==
<br>
==16829== Conditional jump or move depends on uninitialised value(s)
<br>
==16829==    at 0x4A5F4C: mca_mpool_sm_alloc (mpool_sm_module.c:79)
<br>
==16829==    by 0x4F3585: mpool_calloc (btl_sm.c:108)
<br>
==16829==    by 0x4F3E3B: sm_btl_first_time_init (btl_sm.c:307)
<br>
==16829==    by 0x4F436F: mca_btl_sm_add_procs (btl_sm.c:484)
<br>
==16829==    by 0x54ECFB: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==16829==    by 0x4C2DC4: mca_pml_ob1_add_procs (pml_ob1.c:308)
<br>
==16829==    by 0x45362A: ompi_mpi_init (ompi_mpi_init.c:667)
<br>
==16829==    by 0x476CF8: PMPI_Init (pinit.c:80)
<br>
==16829==    by 0x423DE0: main (helloMPI.cpp:8)
<br>
==16829==
<br>
==16829== Conditional jump or move depends on uninitialised value(s)
<br>
==16829==    at 0x4A5F4C: mca_mpool_sm_alloc (mpool_sm_module.c:79)
<br>
==16829==    by 0x4D81E2: ompi_free_list_grow (ompi_free_list.c:198)
<br>
==16829==    by 0x4D8015: ompi_free_list_init_ex_new (ompi_free_list.c:163)
<br>
==16829==    by 0x4F40C3: ompi_free_list_init_new (ompi_free_list.h:169)
<br>
==16829==    by 0x4F3F57: sm_btl_first_time_init (btl_sm.c:333)
<br>
==16829==    by 0x4F436F: mca_btl_sm_add_procs (btl_sm.c:484)
<br>
==16829==    by 0x54ECFB: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==16829==    by 0x4C2DC4: mca_pml_ob1_add_procs (pml_ob1.c:308)
<br>
==16829==    by 0x45362A: ompi_mpi_init (ompi_mpi_init.c:667)
<br>
==16829==    by 0x476CF8: PMPI_Init (pinit.c:80)
<br>
==16829==    by 0x423DE0: main (helloMPI.cpp:8)
<br>
==16830==
<br>
==16830== Conditional jump or move depends on uninitialised value(s)
<br>
==16830==    at 0x4A5F4C: mca_mpool_sm_alloc (mpool_sm_module.c:79)
<br>
==16830==    by 0x4F3585: mpool_calloc (btl_sm.c:108)
<br>
==16830==    by 0x4F3E3B: sm_btl_first_time_init (btl_sm.c:307)
<br>
==16830==    by 0x4F436F: mca_btl_sm_add_procs (btl_sm.c:484)
<br>
==16830==    by 0x54ECFB: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==16830==    by 0x4C2DC4: mca_pml_ob1_add_procs (pml_ob1.c:308)
<br>
==16830==    by 0x45362A: ompi_mpi_init (ompi_mpi_init.c:667)
<br>
==16830==    by 0x476CF8: PMPI_Init (pinit.c:80)
<br>
==16830==    by 0x423DE0: main (helloMPI.cpp:8)
<br>
==16829==
<br>
==16829== Conditional jump or move depends on uninitialised value(s)
<br>
==16829==    at 0x4A5F4C: mca_mpool_sm_alloc (mpool_sm_module.c:79)
<br>
==16829==    by 0x4F4619: sm_fifo_init (btl_sm.h:213)
<br>
==16829==    by 0x4F4459: mca_btl_sm_add_procs (btl_sm.c:510)
<br>
==16829==    by 0x54ECFB: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==16829==    by 0x4C2DC4: mca_pml_ob1_add_procs (pml_ob1.c:308)
<br>
==16829==    by 0x45362A: ompi_mpi_init (ompi_mpi_init.c:667)
<br>
==16829==    by 0x476CF8: PMPI_Init (pinit.c:80)
<br>
==16829==    by 0x423DE0: main (helloMPI.cpp:8)
<br>
==16830==
<br>
==16830== Conditional jump or move depends on uninitialised value(s)
<br>
==16830==    at 0x4A5F4C: mca_mpool_sm_alloc (mpool_sm_module.c:79)
<br>
==16830==    by 0x4D81E2: ompi_free_list_grow (ompi_free_list.c:198)
<br>
==16830==    by 0x4D8015: ompi_free_list_init_ex_new (ompi_free_list.c:163)
<br>
==16830==    by 0x4F40C3: ompi_free_list_init_new (ompi_free_list.h:169)
<br>
==16830==    by 0x4F3F57: sm_btl_first_time_init (btl_sm.c:333)
<br>
==16830==    by 0x4F436F: mca_btl_sm_add_procs (btl_sm.c:484)
<br>
==16830==    by 0x54ECFB: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==16830==    by 0x4C2DC4: mca_pml_ob1_add_procs (pml_ob1.c:308)
<br>
==16830==    by 0x45362A: ompi_mpi_init (ompi_mpi_init.c:667)
<br>
==16830==    by 0x476CF8: PMPI_Init (pinit.c:80)
<br>
==16830==    by 0x423DE0: main (helloMPI.cpp:8)
<br>
==16830==
<br>
==16830== Conditional jump or move depends on uninitialised value(s)
<br>
==16830==    at 0x4A5F4C: mca_mpool_sm_alloc (mpool_sm_module.c:79)
<br>
==16830==    by 0x4F4619: sm_fifo_init (btl_sm.h:213)
<br>
==16830==    by 0x4F4459: mca_btl_sm_add_procs (btl_sm.c:510)
<br>
==16830==    by 0x54ECFB: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==16830==    by 0x4C2DC4: mca_pml_ob1_add_procs (pml_ob1.c:308)
<br>
==16830==    by 0x45362A: ompi_mpi_init (ompi_mpi_init.c:667)
<br>
==16830==    by 0x476CF8: PMPI_Init (pinit.c:80)
<br>
==16830==    by 0x423DE0: main (helloMPI.cpp:8)
<br>
Hello World from 1
<br>
Hello World from 0
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8778.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI users] Problem with insatlling OpenMPI on compute node"</a>
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
