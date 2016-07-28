<?
$subject_val = "Re: [OMPI users] Application Context and OpenMPI 1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 10:47:36 2008" -->
<!-- isoreceived="20080617144736" -->
<!-- sent="Tue, 17 Jun 2008 08:47:14 -0600" -->
<!-- isosent="20080617144714" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application Context and OpenMPI 1.2.4" -->
<!-- id="C47D2A92.DDE6%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF0388A7EA.43C8B067-ON8625746A.0049C633-8625746A.004AD850_at_exxonmobil.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Application Context and OpenMPI 1.2.4<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 10:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5908.php">SLIM H.A.: "[OMPI users] btl parameter is not set to openib on node with ib card"</a>
<li><strong>Previous message:</strong> <a href="5906.php">jody: "[OMPI users] orted runs on host, but doesn't seem to communicate"</a>
<li><strong>In reply to:</strong> <a href="5882.php">pat.o'bryant_at_[hidden]: "[OMPI users] Application Context and OpenMPI 1.2.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pat
<br>
<p>A friendly elf forwarded this to me, so please be sure to explicitly include
<br>
me on any reply.
<br>
<p>Was that the only error message you received? I would have expected a trail
<br>
of &quot;error_log&quot; outputs that would help me understand where this came from.
<br>
If not, I can give you some debug flags to set once I know the environment.
<br>
<p>Usually, that error indicates a mismatch between the backend daemon and
<br>
mpirun - one is from 1.2.4, for example, while another was from some other
<br>
build - but it is hard to tell without seeing some more error output.
<br>
<p>I assume this is using ssh as a launch environment?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 6/16/08 7:37 AM, &quot;pat.o'bryant_at_[hidden]&quot;
<br>
&lt;pat.o'bryant_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having a problem using  an &quot;application context&quot; with OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2.4.
</span><br>
<span class="quotelev1">&gt; My invocation of &quot;mpirun&quot; is shown below along with the &quot;--app&quot; file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Invocation:
</span><br>
<span class="quotelev1">&gt;      export LD_LIBRARY_PATH=&quot;/usr/local/openmpi-1.2.4/gnu/lib&quot;
</span><br>
<span class="quotelev1">&gt;      /usr/local/openmpi-1.2.4/gnu/bin/mpirun --app /my_id/appschema
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Contents of &quot;--app&quot; file:
</span><br>
<span class="quotelev1">&gt;     -np 1 /my_id/Gnu/hello_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ldd of hello_mpi:
</span><br>
<span class="quotelev1">&gt;      ldd hello_mpi
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000002a9566c000)
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; /usr/local/openmpi-1.2.4/gnu/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (0x0000002a957f3000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /usr/local/openmpi-1.2.4
</span><br>
<span class="quotelev1">&gt; /gnu/lib/libopen-rte.so.0 (0x0000002a9598e000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /usr/local/openmpi-1.2.4
</span><br>
<span class="quotelev1">&gt; /gnu/lib/libopen-pal.so.0 (0x0000002a95ae9000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000002a95c47000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000002a95d4b000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000002a95e62000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; (0x0000002a95f65000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000002a9607b000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x0000002a95556000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error message:
</span><br>
<span class="quotelev1">&gt;    ORTE_ERROR_LOG: Data unpack had inadequate space in file
</span><br>
<span class="quotelev1">&gt; dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pat O'Bryant
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev1">&gt; Business Line Infrastructure
</span><br>
<span class="quotelev1">&gt; Technical Systems, HPC
</span><br>
<span class="quotelev1">&gt; Office: 713-431-7022
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
<li><strong>Next message:</strong> <a href="5908.php">SLIM H.A.: "[OMPI users] btl parameter is not set to openib on node with ib card"</a>
<li><strong>Previous message:</strong> <a href="5906.php">jody: "[OMPI users] orted runs on host, but doesn't seem to communicate"</a>
<li><strong>In reply to:</strong> <a href="5882.php">pat.o'bryant_at_[hidden]: "[OMPI users] Application Context and OpenMPI 1.2.4"</a>
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
