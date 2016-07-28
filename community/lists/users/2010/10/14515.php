<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 21:22:30 2010" -->
<!-- isoreceived="20101021012230" -->
<!-- sent="Wed, 20 Oct 2010 20:22:23 -0500" -->
<!-- isosent="20101021012223" -->
<!-- name="Raymond Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="4CBF95CF.9010800_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1629467C-1503-4E2F-8D35-7D87B9BCFFD7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults<br>
<strong>From:</strong> Raymond Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 21:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14514.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14514.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 10/20/2010 7:59 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The error message seems to imply that mpirun itself didn't segfault, but that something else did. Is that segfault pid from mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This kind of problem usually is caused by mismatched builds - i.e., you compile against your new build, but you pick up the Myrinet build when you try to run because of path and ld_library_path issues. You might check to ensure you are running against what you built with.
</span><br>
The PATH and LD_LIBRARY_PATH are set explicitly (through modules) on the 
<br>
frontend and each node.  The PGI compiler and the OpenMPI I am trying to 
<br>
run is set for each.
<br>
<p>ldd /share/apps/opt/OpenMPI/1.4.2/PGI/10.4/bin/mpirun
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; 
<br>
/share/apps/opt/OpenMPI/1.4.2/PGI/10.4/lib/libopen-rte.so.0 
<br>
(0x00002b6a16552000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; 
<br>
/share/apps/opt/OpenMPI/1.4.2/PGI/10.4/lib/libopen-pal.so.0 
<br>
(0x00002b6a167aa000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003a7dc00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003a80400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003a88a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003a7e000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003a7d800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003a7d400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpgc.so =&gt; 
<br>
/share/apps/opt/PGI/10.4/linux86-64/10.4/libso/libpgc.so 
<br>
(0x00002b6a16a28000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003a7d000000)
<br>
<p>The one that works from the other tree
<br>
<p>ldd /opt/openmpi-myrinet_mx/bin/mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; 
<br>
/opt/openmpi-myrinet_mx/lib/libopen-rte.so.0 (0x00002b51c71b0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; 
<br>
/opt/openmpi-myrinet_mx/lib/libopen-pal.so.0 (0x00002b51c7430000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003a7dc00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003a80400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003a88a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003a7d800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003a7e000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003a7d400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003a7d000000)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14514.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14514.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
