<?
$subject_val = "[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 24 03:10:35 2013" -->
<!-- isoreceived="20130524071035" -->
<!-- sent="Fri, 24 May 2013 09:02:52 +0200 (CEST)" -->
<!-- isosent="20130524070252" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs" -->
<!-- id="201305240703.r4O72qeI020120_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-24 03:02:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21957.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.2rc3r28550"</a>
<li><strong>Previous message:</strong> <a href="21955.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21959.php">Ralph Castain: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Reply:</strong> <a href="21959.php">Ralph Castain: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Maybe reply:</strong> <a href="21979.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Maybe reply:</strong> <a href="21988.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I installed openmpi-1.6.5a1r28554 on &quot;openSuSE Linux 12.1&quot;, &quot;Solaris 10
<br>
x86_64&quot;, and &quot;Solaris 10 sparc&quot; with gcc-4.8.0 and &quot;Sun C 5.12&quot; in 32-
<br>
and 64-bit versions. Unfortunately I have a problem with the 64-bit
<br>
version, if I build Open MPI with gcc. The program hangs and I have
<br>
to terminate it with &lt;Ctrl-c&gt;.
<br>
<p><p>sunpc1 hello_1 144 mpiexec -mca btl ^udapl -np 4 \
<br>
&nbsp;&nbsp;-host sunpc1,linpc1,rs0 hello_1_mpi
<br>
[sunpc1:15576] [[16182,0],0] ORTE_ERROR_LOG: Buffer type (described vs
<br>
&nbsp;&nbsp;non-described) mismatch - operation not allowed in file
<br>
&nbsp;&nbsp;../../../../../openmpi-1.6.5a1r28554/orte/mca/grpcomm/bad/grpcomm_bad_module.c
<br>
&nbsp;&nbsp;at line 841
<br>
^Cmpiexec: killing job...
<br>
<p>sunpc1 hello_1 145 which mpiexec
<br>
/usr/local/openmpi-1.6.5_64_gcc/bin/mpiexec
<br>
sunpc1 hello_1 146 
<br>
<p><p>I have no problems with the 64-bit version, if I compile Open MPI
<br>
with Sun C. Both 32-bit versions (compiled with &quot;cc&quot; or &quot;gcc&quot;) work
<br>
as expectedas well.
<br>
<p>sunpc1 hello_1 106 mpiexec -mca btl ^udapl -np 4 \
<br>
&nbsp;&nbsp;-host sunpc1,linpc1,rs0 hello_1_mpi
<br>
Process 2 of 4 running on rs0.informatik.hs-fulda.de
<br>
Process 0 of 4 running on sunpc1
<br>
Process 3 of 4 running on sunpc1
<br>
Process 1 of 4 running on linpc1
<br>
Now 3 slave tasks are sending greetings.
<br>
Greetings from task 3:
<br>
&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;msg length:          116 characters
<br>
&nbsp;&nbsp;message:             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hostname:          sunpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;operating system:  SunOS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;release:           5.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processor:         i86pc
<br>
...
<br>
<p>sunpc1 hello_1 107 which mpiexec
<br>
/usr/local/openmpi-1.6.5_64_cc/bin/mpiexec
<br>
<p><p><p>sunpc1 hello_1 106 mpiexec -mca btl ^udapl -np 4 \
<br>
&nbsp;&nbsp;-host sunpc1,linpc1,rs0 hello_1_mpi
<br>
Process 2 of 4 running on rs0.informatik.hs-fulda.de
<br>
Process 3 of 4 running on sunpc1
<br>
Process 0 of 4 running on sunpc1
<br>
Process 1 of 4 running on linpc1
<br>
...
<br>
<p>sunpc1 hello_1 107 which mpiexec
<br>
/usr/local/openmpi-1.6.5_32_gcc/bin/mpiexec
<br>
<p><p>I would be grateful, if somebody can fix the problem for the
<br>
64-bit version with gcc. Thank you very much for any help in
<br>
advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21957.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.2rc3r28550"</a>
<li><strong>Previous message:</strong> <a href="21955.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21959.php">Ralph Castain: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Reply:</strong> <a href="21959.php">Ralph Castain: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Maybe reply:</strong> <a href="21979.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Maybe reply:</strong> <a href="21988.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
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
