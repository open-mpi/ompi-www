<?
$subject_val = "[OMPI users] Issue with requests in openmpi?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 11:33:59 2015" -->
<!-- isoreceived="20150109163359" -->
<!-- sent="Fri, 09 Jan 2015 17:33:57 +0100" -->
<!-- isosent="20150109163357" -->
<!-- name="Moritz Hanke" -->
<!-- email="hanke_at_[hidden]" -->
<!-- subject="[OMPI users] Issue with requests in openmpi?" -->
<!-- id="54B002F5.6010603_at_dkrz.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Issue with requests in openmpi?<br>
<strong>From:</strong> Moritz Hanke (<em>hanke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 11:33:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26154.php">Dave Goodell (dgoodell): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26152.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Determine IB transport type of OpenMPI job"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>When running the attached program with 128 processes I get the following 
<br>
errors for most runs:
<br>
<p>_openmpi/1.8.4 with --enable-debug --enable-mem-debug with NAG 6.0:_
<br>
<p>opal_list_remove_item - the item 0x195d820 is not on the list 0x2b05da5101e0
<br>
connect/btl_openib_connect_udcm.c:2132: udcm_send_timeout: Assertion 
<br>
`((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) 
<br>
(msg))-&gt;obj_magic_id' failed.
<br>
<p>_openmpi/1.8.1 with NAG 6.0:_
<br>
<p>deadlock
<br>
<p>_openmpi/1.8.4 with Intel15 (also with NAG 6.0):_
<br>
<p>Program terminated with signal 11, Segmentation fault.
<br>
#0  0x000000000070a885 in opal_memory_ptmalloc2_int_malloc ()
<br>
(gdb) bt
<br>
#0  0x000000000070a885 in opal_memory_ptmalloc2_int_malloc ()
<br>
#1  0x000000000070a05f in opal_memory_linux_memalign_hook ()
<br>
#2  0x00000000004afc29 in ompi_free_list_grow ()
<br>
#3  0x0000000000535fde in match_one ()
<br>
#4  0x0000000000533e16 in mca_pml_ob1_recv_frag_callback_match ()
<br>
#5  0x0000000000431e92 in btl_openib_handle_incoming ()
<br>
#6  0x0000000000431413 in btl_openib_component_progress ()
<br>
#7  0x00000000006862f6 in opal_progress ()
<br>
#8  0x000000000041f222 in ompi_request_default_test_any ()
<br>
#9  0x0000000000428ca9 in PMPI_Testany ()
<br>
#10 0x000000000040775f in get_free_send_request_handle ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ***:34
<br>
#11 0x0000000000407819 in isend (send_buffer=0x7fffe9672c14, count=1, 
<br>
dest=70, tag=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ***:52
<br>
#12 0x0000000000407b82 in main () at ***:112
<br>
<p>or
<br>
<p>Program terminated with signal 7, Bus error.
<br>
#0  0x000000000070a89a in opal_memory_ptmalloc2_int_malloc ()
<br>
(gdb) bt
<br>
#0  0x000000000070a89a in opal_memory_ptmalloc2_int_malloc ()
<br>
#1  0x000000000070a05f in opal_memory_linux_memalign_hook ()
<br>
#2  0x00000000004afc29 in ompi_free_list_grow ()
<br>
#3  0x0000000000535fde in match_one ()
<br>
#4  0x0000000000533e16 in mca_pml_ob1_recv_frag_callback_match ()
<br>
#5  0x0000000000431e92 in btl_openib_handle_incoming ()
<br>
#6  0x0000000000431413 in btl_openib_component_progress ()
<br>
#7  0x00000000006862f6 in opal_progress ()
<br>
#8  0x000000000041f222 in ompi_request_default_test_any ()
<br>
#9  0x0000000000428ca9 in PMPI_Testany ()
<br>
#10 0x000000000040775f in get_free_send_request_handle ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ***:34
<br>
#11 0x0000000000407819 in isend (send_buffer=0x7fffabba7b64, count=1, 
<br>
dest=7, tag=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ***:52
<br>
#12 0x0000000000407b82 in main () at ***:112
<br>
<p>or
<br>
<p>Program terminated with signal 11, Segmentation fault.
<br>
#0  0x000000000070a951 in opal_memory_ptmalloc2_int_malloc ()
<br>
(gdb) bt
<br>
#0  0x000000000070a951 in opal_memory_ptmalloc2_int_malloc ()
<br>
#1  0x000000000070a05f in opal_memory_linux_memalign_hook ()
<br>
#2  0x00002b9f7b05b248 in mlx4_create_ah (pd=0x1212680, attr=0xb26988) 
<br>
at src/verbs.c:728
<br>
#3  0x00002b9f70eafaed in __ibv_create_ah (pd=0xb26640, attr=0xb26988) 
<br>
at src/verbs.c:508
<br>
#4  0x000000000043c9df in udcm_module_start_connect ()
<br>
#5  0x0000000000445bcd in mca_btl_openib_endpoint_send ()
<br>
#6  0x0000000000546050 in mca_pml_ob1_send_request_start_copy ()
<br>
#7  0x00000000005310e4 in mca_pml_ob1_isend ()
<br>
#8  0x0000000000428689 in PMPI_Isend ()
<br>
#9  0x0000000000407876 in isend (send_buffer=0x7fff0e12cd94, count=1, 
<br>
dest=82, tag=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ***:54
<br>
#10 0x0000000000407aae in main () at ***:95
<br>
<p>_ openmpi/1.6.5 with NAG 5.3__:_
<br>
<p>no error
<br>
<p>With less processes the program runs fine most of the time. It looks 
<br>
like an issue with requests in Open MPI. Can someone confirm this?
<br>
(I am running my tests on an Intel Xeon cluster.)
<br>
<p>Thanks!
<br>
Moritz
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26153/app.c">app.c</a>
</ul>
<!-- attachment="app.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26154.php">Dave Goodell (dgoodell): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26152.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Determine IB transport type of OpenMPI job"</a>
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
