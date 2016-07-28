<?
$subject_val = "[OMPI users] Application Context and OpenMPI 1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 09:37:42 2008" -->
<!-- isoreceived="20080616133742" -->
<!-- sent="Mon, 16 Jun 2008 08:37:30 -0500" -->
<!-- isosent="20080616133730" -->
<!-- name="pat.o'bryant_at_[hidden]" -->
<!-- email="pat.o'bryant_at_[hidden]" -->
<!-- subject="[OMPI users] Application Context and OpenMPI 1.2.4" -->
<!-- id="OF0388A7EA.43C8B067-ON8625746A.0049C633-8625746A.004AD850_at_exxonmobil.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Application Context and OpenMPI 1.2.4<br>
<strong>From:</strong> <a href="mailto:pat.o'bryant_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Application%20Context%20and%20OpenMPI%201.2.4"><em>pat.o'bryant_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-06-16 09:37:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5883.php">Weirs, V Gregory: "[OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5881.php">George Bosilca: "Re: [OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5907.php">Ralph H Castain: "Re: [OMPI users] Application Context and OpenMPI 1.2.4"</a>
<li><strong>Reply:</strong> <a href="5907.php">Ralph H Castain: "Re: [OMPI users] Application Context and OpenMPI 1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having a problem using  an &quot;application context&quot; with OpenMPI 1.2.4.
<br>
My invocation of &quot;mpirun&quot; is shown below along with the &quot;--app&quot; file.
<br>
<p>Invocation:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export LD_LIBRARY_PATH=&quot;/usr/local/openmpi-1.2.4/gnu/lib&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.2.4/gnu/bin/mpirun --app /my_id/appschema
<br>
<p>Contents of &quot;--app&quot; file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-np 1 /my_id/Gnu/hello_mpi
<br>
<p>Ldd of hello_mpi:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ldd hello_mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000002a9566c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/local/openmpi-1.2.4/gnu/lib/libmpi.so.0
<br>
(0x0000002a957f3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/local/openmpi-1.2.4
<br>
/gnu/lib/libopen-rte.so.0 (0x0000002a9598e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/local/openmpi-1.2.4
<br>
/gnu/lib/libopen-pal.so.0 (0x0000002a95ae9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000002a95c47000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000002a95d4b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000002a95e62000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0 (0x0000002a95f65000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000002a9607b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000002a95556000)
<br>
<p>Error message:
<br>
&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG: Data unpack had inadequate space in file
<br>
dss/dss_unpack.c at line 90
<br>
<p>Any help would be greatly appreciated.
<br>
<p>Thanks,
<br>
&nbsp;Pat O'Bryant
<br>
<p><p><p>J.W. (Pat) O'Bryant,Jr.
<br>
Business Line Infrastructure
<br>
Technical Systems, HPC
<br>
Office: 713-431-7022
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5883.php">Weirs, V Gregory: "[OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5881.php">George Bosilca: "Re: [OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5907.php">Ralph H Castain: "Re: [OMPI users] Application Context and OpenMPI 1.2.4"</a>
<li><strong>Reply:</strong> <a href="5907.php">Ralph H Castain: "Re: [OMPI users] Application Context and OpenMPI 1.2.4"</a>
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
