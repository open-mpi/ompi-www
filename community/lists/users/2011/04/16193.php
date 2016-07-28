<?
$subject_val = "[OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 11 10:07:26 2011" -->
<!-- isoreceived="20110411140726" -->
<!-- sent="Mon, 11 Apr 2011 09:53:11 -0400" -->
<!-- isosent="20110411135311" -->
<!-- name="Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640" -->
<!-- email="jonathan.stergiou_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc" -->
<!-- id="45A45D8D2A0DBB49B1BE570660FCE2F5011DE01E_at_naeapaxrez04v.nadsusea.nads.navy.mil" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc<br>
<strong>From:</strong> Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640 (<em>jonathan.stergiou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-11 09:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16194.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16192.php">hi: "[OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16200.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16200.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16203.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16205.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running OpenMPI 1.4.2 under RHEL 5.5.  After install, I tested with &quot;mpirun -np 4 date&quot;; the command returned four &quot;date&quot; outputs. 
<br>
<p>Then I tried running two different MPI programs, &quot;geminimpi&quot; and &quot;salinas&quot;.  Both run correctly with &quot;mpirun -np 1 $prog&quot;.  However, both hang indefinitely when I use anything other than &quot;-np 1&quot;.  
<br>
<p>Next, I ran &quot;mpirun --debug-daemons -np 1 geminimpi&quot; and got the following:  (this looks good, and is what I would expect)
<br>
<p>[code]
<br>
[xxx_at_XXX_TUX01 ~]$ mpirun --debug-daemons -np 1 geminimpi
<br>
[XXX_TUX01:06558] [[15027,0],0] node[0].name XXX_TUX01 daemon 0 arch ffc91200
<br>
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received add_local_procs
<br>
[XXX_TUX01:06558] [[15027,0],0] orted_recv: received sync+nidmap from local proc [[15027,1],0]
<br>
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received collective data cmd
<br>
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received message_local_procs
<br>
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received collective data cmd
<br>
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received message_local_procs
<br>
Fluid Proc Ready: ID, FluidMaster,LagMaster =     0    0    1
<br>
&nbsp;Checking license for Gemini
<br>
&nbsp;Checking license for Linux OS
<br>
&nbsp;Checking internal license list
<br>
&nbsp;License valid
<br>
&nbsp;
<br>
&nbsp;GEMINI Startup
<br>
&nbsp;Gemini +++ Version 5.1.00  20110501 +++    
<br>
&nbsp;
<br>
&nbsp;+++++ ERROR MESSAGE +++++
<br>
&nbsp;FILE MISSING (Input): name = gemini.inp
<br>
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received waitpid_fired cmd
<br>
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received iof_complete cmd
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 6559 on
<br>
node XXX_TUX01 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[XXX_TUX01:06558] [[15027,0],0] orted_cmd: received exit
<br>
[/code]
<br>
<p>With &quot;mpirun --debug-daemons -np 2 geminimpi&quot;, it hangs like this: (hangs indefinitely)
<br>
<p>[code]
<br>
[xxx_at_XXX_TUX01 ~]$ mpirun --debug-daemons -np 2 geminimpi
<br>
[XXX_TUX01:06570] [[14983,0],0] node[0].name XXX_TUX01 daemon 0 arch ffc91200
<br>
[XXX_TUX01:06570] [[14983,0],0] orted_cmd: received add_local_procs
<br>
[XXX_TUX01:06570] [[14983,0],0] orted_recv: received sync+nidmap from local proc [[14983,1],1]
<br>
[XXX_TUX01:06570] [[14983,0],0] orted_recv: received sync+nidmap from local proc [[14983,1],0]
<br>
[XXX_TUX01:06570] [[14983,0],0] orted_cmd: received collective data cmd
<br>
[XXX_TUX01:06570] [[14983,0],0] orted_cmd: received collective data cmd
<br>
[XXX_TUX01:06570] [[14983,0],0] orted_cmd: received message_local_procs
<br>
[/code]
<br>
<p><p>I cloned my entire installation to a number of other machines to test.  On all the other workstations, everything behaves correctly and various regression suites return good results. 
<br>
<p>Any ideas? 
<br>
<p><pre>
--
Jon Stergiou
Engineer
NSWC Carderock
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16194.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16192.php">hi: "[OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16200.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16200.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16203.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16205.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
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
