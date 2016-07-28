<?
$subject_val = "Re: [OMPI users] Solaris sigbus error in ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 05:45:37 2014" -->
<!-- isoreceived="20140102104537" -->
<!-- sent="Thu, 2 Jan 2014 11:44:49 +0100 (CET)" -->
<!-- isosent="20140102104449" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Solaris sigbus error in ompi_info" -->
<!-- id="201401021044.s02AindZ012262_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Solaris sigbus error in ompi_info" -->
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
<strong>Subject:</strong> Re: [OMPI users] Solaris sigbus error in ompi_info<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 05:44:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23311.php">Siegmar Gross: "Re: [OMPI users] Hetero apps just hang"</a>
<li><strong>Previous message:</strong> <a href="23309.php">&#197;ke Sandgren: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Maybe in reply to:</strong> <a href="23299.php">Ralph Castain: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23300.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; I have no ideas here as there isn't enough info - can you dig
</span><br>
<span class="quotelev1">&gt; deeper to tell us where the sigbus happens?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meantime, I filed a ticket against it and we can capture your
</span><br>
<span class="quotelev1">&gt; response there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4042">https://svn.open-mpi.org/trac/ompi/ticket/4042</a>
</span><br>
<p>Yes. Jeff has an account on my machine, so that he can look at
<br>
the problem as well. He can even use our system with little and
<br>
big endian machines, if he has time and if he wants that Open
<br>
MPI can use a real heterogeneous environment with different
<br>
architectures and not only different operating systems (LAM-MPI
<br>
can use all of our machines in a single job).
<br>
<p><p>tyr bin 49 /opt/solstudio12.3/bin/sparcv9/dbx ompi_info
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message
<br>
&nbsp;&nbsp;7.9' in your .dbxrc
<br>
Reading ompi_info
<br>
Reading ld.so.1
<br>
Reading libmpi.so.0.0.0
<br>
...
<br>
(dbx) run -a
<br>
Running: ompi_info -a 
<br>
(process id 12251)
<br>
Reading libc_psr.so.1
<br>
Reading mca_compress_bzip.so
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA compress: parameter &quot;compress_base_verbose&quot; (current value:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;-1&quot;, data source: default, level: 8 dev/detail,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verbosity level for the compress framework (0 = no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;verbosity)
<br>
t_at_1 (l_at_1) signal BUS (invalid address alignment) in var_value_string at line 
<br>
1685 in file &quot;mca_base_var.c&quot;
<br>
&nbsp;1685               ret = asprintf (value_string, 
<br>
var_type_formats[var-&gt;mbv_type], value[0]);
<br>
(dbx) 
<br>
(dbx) 
<br>
(dbx) check -all
<br>
dbx: warning: check -all will be turned on in the next run of the process
<br>
access checking - OFF
<br>
memuse checking - OFF
<br>
(dbx) run -a
<br>
Running: ompi_info -a 
<br>
(process id 12253)
<br>
Reading rtcapihook.so
<br>
...
<br>
RTC: Running program...
<br>
Write to unallocated (wua) on thread 1:
<br>
Attempting to write 1 byte at address 0xffffffff79f04000
<br>
t_at_1 (l_at_1) stopped in _readdir at 0xffffffff53d74e40
<br>
0xffffffff53d74e40: _readdir+0x0064:    call     
<br>
_PROCEDURE_LINKAGE_TABLE_+0x23a0 [PLT]       ! 0xffffffff53f42aa0
<br>
Current function is find_dyn_components
<br>
&nbsp;&nbsp;393                       if (0 != lt_dlforeachfile(dir, save_filename, NULL)) 
<br>
{
<br>
(dbx) 
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On Jan 1, 2014, at 1:48 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately I still get a &quot;SIGBUS Error&quot; on &quot;Solaris Sparc&quot;
</span><br>
<span class="quotelev2">&gt; &gt; for &quot;ompi_info -a&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-1.9 99 ompi_info | grep MPI:
</span><br>
<span class="quotelev2">&gt; &gt;                Open MPI: 1.9a1r30100
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-1.9 100 ompi_info -a |&amp; grep Signal
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:09699] Signal: Bus Error (10)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:09699] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev2">&gt; &gt; .../openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1321b8
</span><br>
<span class="quotelev2">&gt; &gt;  [ Signal 2099900312 (?)]
</span><br>
<span class="quotelev2">&gt; &gt; Bus error 
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-1.9 101 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can compile and run a small MPI program without &quot;SIGBUS Error&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; Jeff, thank you very much for solving this problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 110 mpicc init_finalize.c 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 111 mpiexec -np 1 a.out 
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 112 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23311.php">Siegmar Gross: "Re: [OMPI users] Hetero apps just hang"</a>
<li><strong>Previous message:</strong> <a href="23309.php">&#197;ke Sandgren: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Maybe in reply to:</strong> <a href="23299.php">Ralph Castain: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23300.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
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
