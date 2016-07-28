<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 22:00:42 2007" -->
<!-- isoreceived="20070712020042" -->
<!-- sent="Wed, 11 Jul 2007 22:00:22 -0400" -->
<!-- isosent="20070712020022" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()" -->
<!-- id="F3EFB142-DF92-495B-ACED-D8DDC29A9CE1_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40707111708xce2f8c0mbf718c995d3a3b47_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 22:00:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1854.php">Lisandro Dalcin: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>Previous message:</strong> <a href="1852.php">Lisandro Dalcin: "[OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>In reply to:</strong> <a href="1852.php">Lisandro Dalcin: "[OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1854.php">Lisandro Dalcin: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>Reply:</strong> <a href="1854.php">Lisandro Dalcin: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>The two errors you provide are quite different. The first one has  
<br>
been addresses few days ago in the trunk (<a href="https://svn.open-mpi.org/">https://svn.open-mpi.org/</a> 
<br>
trac/ompi/changeset/15291). If instead of the 1.2.3 you use anything  
<br>
after r15291 you will be safe in a threading case.
<br>
<p>The second is different. The problem is that memcpy is a lot faster  
<br>
than memmove, and that's why we use it. The case where the 2 data  
<br>
overlap are quite minimal. I'll take a look to see exactly what  
<br>
happened there.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 11, 2007, at 8:08 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Ups, sended to wrong list, forwarded here...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Jul 11, 2007 8:58 PM
</span><br>
<span class="quotelev1">&gt; Subject: failures runing mpi4py testsuite, perhaps Comm.Split()
</span><br>
<span class="quotelev1">&gt; To: Open MPI &lt;bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all, after a long time I'm here again. I am improving mpi4py in
</span><br>
<span class="quotelev1">&gt; order to support MPI threads, and I've found some problem with latest
</span><br>
<span class="quotelev1">&gt; version 1.2.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've configured with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix /usr/local/openmpi/1.2.3 --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --disable-dependency-tracking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, for the following fail, MPI_Init_thread() was not used. This
</span><br>
<span class="quotelev1">&gt; test creates a intercommunicator by using Comm.Split() followed by
</span><br>
<span class="quotelev1">&gt; Intracomm.Create_intercomm(). When running in two or more procs (for
</span><br>
<span class="quotelev1">&gt; one proc this test is skipped), I got (sometimes) the following trace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [trantor:06601] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [trantor:06601] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [trantor:06601] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [trantor:06601] Failing at address: 0xa8
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [ 0] [0x958440]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/openmpi/mca_btl_sm.so 
</span><br>
<span class="quotelev1">&gt; (mca_btl_sm_component_progress+0x1483)
</span><br>
<span class="quotelev1">&gt; [0x995553]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/openmpi/mca_bml_r2.so 
</span><br>
<span class="quotelev1">&gt; (mca_bml_r2_progress+0x36)
</span><br>
<span class="quotelev1">&gt; [0x645d06]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/libopen-pal.so.0(opal_progress+0x58)
</span><br>
<span class="quotelev1">&gt; [0x1a2c88]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/libmpi.so.0(ompi_request_wait_all+0xea)
</span><br>
<span class="quotelev1">&gt; [0x140a8a]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [ 5]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/openmpi/mca_coll_tuned.so 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_sendrecv_actual+0xc8)
</span><br>
<span class="quotelev1">&gt; [0x22d6e8]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [ 6]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/openmpi/mca_coll_tuned.so 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_allgather_intra_bruck+0xf2)
</span><br>
<span class="quotelev1">&gt; [0x231ca2]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [ 7]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/openmpi/mca_coll_tuned.so 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_allgather_intra_dec_fixed+0x8b)
</span><br>
<span class="quotelev1">&gt; [0x22db7b]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [ 8]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/libmpi.so.0(ompi_comm_split+0x9d)
</span><br>
<span class="quotelev1">&gt; [0x12d92d]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [ 9]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/libmpi.so.0(MPI_Comm_split+0xad)
</span><br>
<span class="quotelev1">&gt; [0x15a53d]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [10] /u/dalcinl/lib/python/mpi4py/_mpi.so [0x508500]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [11]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyCFunction_Call+0x14d) [0xe150ad]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [12]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyEval_EvalFrameEx+0x64af)
</span><br>
<span class="quotelev1">&gt; [0xe626bf]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [13]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyEval_EvalCodeEx+0x7c4) [0xe63814]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [14]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyEval_EvalFrameEx+0x5a43)
</span><br>
<span class="quotelev1">&gt; [0xe61c53]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [15]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyEval_EvalFrameEx+0x6130)
</span><br>
<span class="quotelev1">&gt; [0xe62340]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [16]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyEval_EvalCodeEx+0x7c4) [0xe63814]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [17] /usr/local/lib/libpython2.5.so.1.0 [0xe01450]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [18]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyObject_Call+0x37) [0xddf5c7]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [19]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyEval_EvalFrameEx+0x42eb)
</span><br>
<span class="quotelev1">&gt; [0xe604fb]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [20]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyEval_EvalCodeEx+0x7c4) [0xe63814]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [21] /usr/local/lib/libpython2.5.so.1.0 [0xe0137a]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [22]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyObject_Call+0x37) [0xddf5c7]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [23] /usr/local/lib/libpython2.5.so.1.0 [0xde6de5]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [24]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyObject_Call+0x37) [0xddf5c7]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [25] /usr/local/lib/libpython2.5.so.1.0 [0xe2abc9]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [26]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyObject_Call+0x37) [0xddf5c7]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [27]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyEval_EvalFrameEx+0x1481)
</span><br>
<span class="quotelev1">&gt; [0xe5d691]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [28]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libpython2.5.so.1.0(PyEval_EvalCodeEx+0x7c4) [0xe63814]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] [29] /usr/local/lib/libpython2.5.so.1.0 [0xe01450]
</span><br>
<span class="quotelev1">&gt; [trantor:06601] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As the problem seems to originate in Comm.Split(), I've written a
</span><br>
<span class="quotelev1">&gt; small python script to test it::
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from mpi4py import MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # true MPI_COMM_WORLD_HANDLE
</span><br>
<span class="quotelev1">&gt; BASECOMM = MPI.__COMM_WORLD__
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BASE_SIZE = BASECOMM.Get_size()
</span><br>
<span class="quotelev1">&gt; BASE_RANK = BASECOMM.Get_rank()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if BASE_RANK &lt; (BASE_SIZE // 2) :
</span><br>
<span class="quotelev1">&gt;     COLOR = 0
</span><br>
<span class="quotelev1">&gt; else:
</span><br>
<span class="quotelev1">&gt;     COLOR = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; INTRACOMM = BASECOMM.Split(COLOR, key=0)
</span><br>
<span class="quotelev1">&gt; print 'Done!!!'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems always work, but running it under valgrind (note
</span><br>
<span class="quotelev1">&gt; valgrind-py below is just an alias adding a suppression file for
</span><br>
<span class="quotelev1">&gt; python) I get the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -n 3 valgrind-py python test.py
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =6727== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==6727== Source and destination overlap in memcpy(0x4C93EA0,  
</span><br>
<span class="quotelev1">&gt; 0x4C93EA8, 16)
</span><br>
<span class="quotelev1">&gt; ==6727==    at 0x4006CE6: memcpy (mc_replace_strmem.c:116)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x46C59CA: ompi_ddt_copy_content_same_ddt (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x4BADDCE: ompi_coll_tuned_allgather_intra_bruck (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x4BA9B7A: ompi_coll_tuned_allgather_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (in /usr/local/openmpi/1.2.3/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x46A692C: ompi_comm_split (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x46D353C: PMPI_Comm_split (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.2.3/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x46754FF: comm_split (in /u/dalcinl/lib/python/ 
</span><br>
<span class="quotelev1">&gt; mpi4py/_mpi.so)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x407D0AC: PyCFunction_Call (methodobject.c:108)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x40CA6BE: PyEval_EvalFrameEx (ceval.c:3564)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x40CB813: PyEval_EvalCodeEx (ceval.c:2831)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x40C9C52: PyEval_EvalFrameEx (ceval.c:3660)
</span><br>
<span class="quotelev1">&gt; ==6727==    by 0x40CB813: PyEval_EvalCodeEx (ceval.c:2831)
</span><br>
<span class="quotelev1">&gt; Done!!!
</span><br>
<span class="quotelev1">&gt; Done!!!
</span><br>
<span class="quotelev1">&gt; Done!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope you can figure what is going on. If you need additional
</span><br>
<span class="quotelev1">&gt; info/tests let me know. I have other issues, but that's for tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1854.php">Lisandro Dalcin: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>Previous message:</strong> <a href="1852.php">Lisandro Dalcin: "[OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>In reply to:</strong> <a href="1852.php">Lisandro Dalcin: "[OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1854.php">Lisandro Dalcin: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>Reply:</strong> <a href="1854.php">Lisandro Dalcin: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
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
