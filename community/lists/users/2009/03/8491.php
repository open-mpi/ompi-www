<?
$subject_val = "[OMPI users] openmpi 1.3 and gridengine tight integration problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 23:51:35 2009" -->
<!-- isoreceived="20090318035135" -->
<!-- sent="Wed, 18 Mar 2009 03:51:28 -0000" -->
<!-- isosent="20090318035128" -->
<!-- name="Salmon, Rene" -->
<!-- email="salmr0_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.3 and gridengine tight integration problem" -->
<!-- id="7E8D27758D889B418F815F0BB9EA34B30278802A_at_BP1XEUEX018-C.bp1.ad.bp.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.3 and gridengine tight integration problem<br>
<strong>From:</strong> Salmon, Rene (<em>salmr0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 23:51:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8492.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8490.php">-andria-: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8493.php">Reuti: "Re: [OMPI users] openmpi 1.3 and gridengine tight integration problem"</a>
<li><strong>Reply:</strong> <a href="8493.php">Reuti: "Re: [OMPI users] openmpi 1.3 and gridengine tight integration problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have looked through the list archives and google but could not find anything related to what I am seeing. I am simply trying to run the basic cpi.c code using SGE and tight integration.
<br>
<p>If run outside SGE i can run my jobs just fine:
<br>
hpcp7781(salmr0)132:mpiexec -np 2 --machinefile x a.out 
<br>
Process 0 on hpcp7781
<br>
Process 1 on hpcp7782
<br>
pi is approximately 3.1416009869231241, Error is 0.0000083333333309
<br>
wall clock time = 0.032325
<br>
<p><p>If I submit to SGE I get this:
<br>
<p>[hpcp7781:08527] mca: base: components_open: Looking for plm components
<br>
[hpcp7781:08527] mca: base: components_open: opening plm components
<br>
[hpcp7781:08527] mca: base: components_open: found loaded component rsh
<br>
[hpcp7781:08527] mca: base: components_open: component rsh has no register function
<br>
[hpcp7781:08527] mca: base: components_open: component rsh open function successful
<br>
[hpcp7781:08527] mca: base: components_open: found loaded component slurm
<br>
[hpcp7781:08527] mca: base: components_open: component slurm has no register function
<br>
[hpcp7781:08527] mca: base: components_open: component slurm open function successful
<br>
[hpcp7781:08527] mca:base:select: Auto-selecting plm components
<br>
[hpcp7781:08527] mca:base:select:(  plm) Querying component [rsh]
<br>
[hpcp7781:08527] [[INVALID],INVALID] plm:rsh: using /hpc/SGE/bin/lx24-amd64/qrsh for launching
<br>
[hpcp7781:08527] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[hpcp7781:08527] mca:base:select:(  plm) Querying component [slurm]
<br>
[hpcp7781:08527] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
<br>
[hpcp7781:08527] mca:base:select:(  plm) Selected component [rsh]
<br>
[hpcp7781:08527] mca: base: close: component slurm closed
<br>
[hpcp7781:08527] mca: base: close: unloading component slurm
<br>
Starting server daemon at host &quot;hpcp7782&quot;
<br>
error: executing task of job 1702026 failed: 
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 8528) died unexpectedly with status 1 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>[hpcp7781:08527] mca: base: close: component rsh closed
<br>
[hpcp7781:08527] mca: base: close: unloading component rsh
<br>
<p><p><p><p>Seems to me orted is not starting on the remote node.  I have LD_LIBRARY_PATH set on my shell startup files.  If I do an ldd on orted i see this:
<br>
<p>hpcp7781(salmr0)135:ldd /bphpc7/vol0/salmr0/ompi/bin/orted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /bphpc7/vol0/salmr0/ompi/lib/libopen-rte.so.0 (0x00002ac5b14e2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /bphpc7/vol0/salmr0/ompi/lib/libopen-pal.so.0 (0x00002ac5b1628000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002ac5b17a9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002ac5b18ad000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002ac5b19c4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002ac5b1ac7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002ac5b1c1c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002ac5b1d34000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002ac5b13c6000)
<br>
<p><p>Looks like gridengine is using qrsh to start orted on the remote nodes. qrsh might not be reading my shell startup file and setting LD_LIBRARY_PATH.  
<br>
<p>Thanks for any help with this.
<br>
<p>Rene
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8492.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8490.php">-andria-: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8493.php">Reuti: "Re: [OMPI users] openmpi 1.3 and gridengine tight integration problem"</a>
<li><strong>Reply:</strong> <a href="8493.php">Reuti: "Re: [OMPI users] openmpi 1.3 and gridengine tight integration problem"</a>
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
