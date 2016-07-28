<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 20:08:58 2007" -->
<!-- isoreceived="20070712000858" -->
<!-- sent="Wed, 11 Jul 2007 21:08:53 -0300" -->
<!-- isosent="20070712000853" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()" -->
<!-- id="e7ba66e40707111708xce2f8c0mbf718c995d3a3b47_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40707111658h3c95ac23x141c1f11f0b1c247_at_mail.gmail.com" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 20:08:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1853.php">George Bosilca: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>Previous message:</strong> <a href="1851.php">Glendenning, Lisa: "[OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1853.php">George Bosilca: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>Reply:</strong> <a href="1853.php">George Bosilca: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ups, sended to wrong list, forwarded here...
<br>
<p>---------- Forwarded message ----------
<br>
From: Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;
<br>
Date: Jul 11, 2007 8:58 PM
<br>
Subject: failures runing mpi4py testsuite, perhaps Comm.Split()
<br>
To: Open MPI &lt;bugs_at_[hidden]&gt;
<br>
<p><p>Hello all, after a long time I'm here again. I am improving mpi4py in
<br>
order to support MPI threads, and I've found some problem with latest
<br>
version 1.2.3
<br>
<p>I've configured with:
<br>
<p>$ ./configure --prefix /usr/local/openmpi/1.2.3 --enable-mpi-threads
<br>
--disable-dependency-tracking
<br>
<p>However, for the following fail, MPI_Init_thread() was not used. This
<br>
test creates a intercommunicator by using Comm.Split() followed by
<br>
Intracomm.Create_intercomm(). When running in two or more procs (for
<br>
one proc this test is skipped), I got (sometimes) the following trace
<br>
<p>[trantor:06601] *** Process received signal ***
<br>
[trantor:06601] Signal: Segmentation fault (11)
<br>
[trantor:06601] Signal code: Address not mapped (1)
<br>
[trantor:06601] Failing at address: 0xa8
<br>
[trantor:06601] [ 0] [0x958440]
<br>
[trantor:06601] [ 1]
<br>
/usr/local/openmpi/1.2.3/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0x1483)
<br>
[0x995553]
<br>
[trantor:06601] [ 2]
<br>
/usr/local/openmpi/1.2.3/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x36)
<br>
[0x645d06]
<br>
[trantor:06601] [ 3]
<br>
/usr/local/openmpi/1.2.3/lib/libopen-pal.so.0(opal_progress+0x58)
<br>
[0x1a2c88]
<br>
[trantor:06601] [ 4]
<br>
/usr/local/openmpi/1.2.3/lib/libmpi.so.0(ompi_request_wait_all+0xea)
<br>
[0x140a8a]
<br>
[trantor:06601] [ 5]
<br>
/usr/local/openmpi/1.2.3/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual+0xc8)
<br>
[0x22d6e8]
<br>
[trantor:06601] [ 6]
<br>
/usr/local/openmpi/1.2.3/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allgather_intra_bruck+0xf2)
<br>
[0x231ca2]
<br>
[trantor:06601] [ 7]
<br>
/usr/local/openmpi/1.2.3/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allgather_intra_dec_fixed+0x8b)
<br>
[0x22db7b]
<br>
[trantor:06601] [ 8]
<br>
/usr/local/openmpi/1.2.3/lib/libmpi.so.0(ompi_comm_split+0x9d)
<br>
[0x12d92d]
<br>
[trantor:06601] [ 9]
<br>
/usr/local/openmpi/1.2.3/lib/libmpi.so.0(MPI_Comm_split+0xad)
<br>
[0x15a53d]
<br>
[trantor:06601] [10] /u/dalcinl/lib/python/mpi4py/_mpi.so [0x508500]
<br>
[trantor:06601] [11]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyCFunction_Call+0x14d) [0xe150ad]
<br>
[trantor:06601] [12]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyEval_EvalFrameEx+0x64af)
<br>
[0xe626bf]
<br>
[trantor:06601] [13]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyEval_EvalCodeEx+0x7c4) [0xe63814]
<br>
[trantor:06601] [14]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyEval_EvalFrameEx+0x5a43)
<br>
[0xe61c53]
<br>
[trantor:06601] [15]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyEval_EvalFrameEx+0x6130)
<br>
[0xe62340]
<br>
[trantor:06601] [16]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyEval_EvalCodeEx+0x7c4) [0xe63814]
<br>
[trantor:06601] [17] /usr/local/lib/libpython2.5.so.1.0 [0xe01450]
<br>
[trantor:06601] [18]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyObject_Call+0x37) [0xddf5c7]
<br>
[trantor:06601] [19]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyEval_EvalFrameEx+0x42eb)
<br>
[0xe604fb]
<br>
[trantor:06601] [20]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyEval_EvalCodeEx+0x7c4) [0xe63814]
<br>
[trantor:06601] [21] /usr/local/lib/libpython2.5.so.1.0 [0xe0137a]
<br>
[trantor:06601] [22]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyObject_Call+0x37) [0xddf5c7]
<br>
[trantor:06601] [23] /usr/local/lib/libpython2.5.so.1.0 [0xde6de5]
<br>
[trantor:06601] [24]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyObject_Call+0x37) [0xddf5c7]
<br>
[trantor:06601] [25] /usr/local/lib/libpython2.5.so.1.0 [0xe2abc9]
<br>
[trantor:06601] [26]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyObject_Call+0x37) [0xddf5c7]
<br>
[trantor:06601] [27]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyEval_EvalFrameEx+0x1481)
<br>
[0xe5d691]
<br>
[trantor:06601] [28]
<br>
/usr/local/lib/libpython2.5.so.1.0(PyEval_EvalCodeEx+0x7c4) [0xe63814]
<br>
[trantor:06601] [29] /usr/local/lib/libpython2.5.so.1.0 [0xe01450]
<br>
[trantor:06601] *** End of error message ***
<br>
<p><p>As the problem seems to originate in Comm.Split(), I've written a
<br>
small python script to test it::
<br>
<p>from mpi4py import MPI
<br>
<p># true MPI_COMM_WORLD_HANDLE
<br>
BASECOMM = MPI.__COMM_WORLD__
<br>
<p>BASE_SIZE = BASECOMM.Get_size()
<br>
BASE_RANK = BASECOMM.Get_rank()
<br>
<p>if BASE_RANK &lt; (BASE_SIZE // 2) :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;COLOR = 0
<br>
else:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;COLOR = 1
<br>
<p>INTRACOMM = BASECOMM.Split(COLOR, key=0)
<br>
print 'Done!!!'
<br>
<p>This seems always work, but running it under valgrind (note
<br>
valgrind-py below is just an alias adding a suppression file for
<br>
python) I get the following:
<br>
<p>mpiexec -n 3 valgrind-py python test.py
<br>
<p>=6727== Warning: set address range perms: large range 134217728 (defined)
<br>
==6727== Source and destination overlap in memcpy(0x4C93EA0, 0x4C93EA8, 16)
<br>
==6727==    at 0x4006CE6: memcpy (mc_replace_strmem.c:116)
<br>
==6727==    by 0x46C59CA: ompi_ddt_copy_content_same_ddt (in
<br>
/usr/local/openmpi/1.2.3/lib/libmpi.so.0.0.0)
<br>
==6727==    by 0x4BADDCE: ompi_coll_tuned_allgather_intra_bruck (in
<br>
/usr/local/openmpi/1.2.3/lib/openmpi/mca_coll_tuned.so)
<br>
==6727==    by 0x4BA9B7A: ompi_coll_tuned_allgather_intra_dec_fixed
<br>
(in /usr/local/openmpi/1.2.3/lib/openmpi/mca_coll_tuned.so)
<br>
==6727==    by 0x46A692C: ompi_comm_split (in
<br>
/usr/local/openmpi/1.2.3/lib/libmpi.so.0.0.0)
<br>
==6727==    by 0x46D353C: PMPI_Comm_split (in
<br>
/usr/local/openmpi/1.2.3/lib/libmpi.so.0.0.0)
<br>
==6727==    by 0x46754FF: comm_split (in /u/dalcinl/lib/python/mpi4py/_mpi.so)
<br>
==6727==    by 0x407D0AC: PyCFunction_Call (methodobject.c:108)
<br>
==6727==    by 0x40CA6BE: PyEval_EvalFrameEx (ceval.c:3564)
<br>
==6727==    by 0x40CB813: PyEval_EvalCodeEx (ceval.c:2831)
<br>
==6727==    by 0x40C9C52: PyEval_EvalFrameEx (ceval.c:3660)
<br>
==6727==    by 0x40CB813: PyEval_EvalCodeEx (ceval.c:2831)
<br>
Done!!!
<br>
Done!!!
<br>
Done!!!
<br>
<p><p>I hope you can figure what is going on. If you need additional
<br>
info/tests let me know. I have other issues, but that's for tomorrow.
<br>
<p>Regards,
<br>
<p><p><pre>
--
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1853.php">George Bosilca: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>Previous message:</strong> <a href="1851.php">Glendenning, Lisa: "[OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1853.php">George Bosilca: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>Reply:</strong> <a href="1853.php">George Bosilca: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
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
