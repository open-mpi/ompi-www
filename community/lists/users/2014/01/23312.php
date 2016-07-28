<?
$subject_val = "Re: [OMPI users] Problem on big endian machines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 06:02:14 2014" -->
<!-- isoreceived="20140102110214" -->
<!-- sent="Thu, 2 Jan 2014 12:01:43 +0100 (CET)" -->
<!-- isosent="20140102110143" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem on big endian machines" -->
<!-- id="201401021101.s02B1h5n012347_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Problem on big endian machines" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem on big endian machines<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 06:01:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23313.php">Hongyi Zhao: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Previous message:</strong> <a href="23311.php">Siegmar Gross: "Re: [OMPI users] Hetero apps just hang"</a>
<li><strong>Maybe in reply to:</strong> <a href="23302.php">Ralph Castain: "Re: [OMPI users] Problem on big endian machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23303.php">Ralph Castain: "Re: [OMPI users] rankfile issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Not sure I understand the problem here - are you saying that
</span><br>
<span class="quotelev1">&gt; the proc ran, but then mpiexec hangs instead of exiting?
</span><br>
<p>No, mpiexec doesn't hang. It completes without any output.
<br>
<p><p>tyr small_prog 60 /opt/solstudio12.3/bin/sparcv9/dbx \
<br>
&nbsp;&nbsp;/usr/local/openmpi-1.9_64_cc/bin/mpiexec
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
<br>
Reading mpiexec
<br>
Reading ld.so.1
<br>
Reading libopen-rte.so.0.0.0
<br>
...
<br>
(dbx) run -np 2 -host tyr,rs0 rank_size
<br>
Running: mpiexec -np 2 -host tyr,rs0 rank_size 
<br>
(process id 12341)
<br>
Reading libc_psr.so.1
<br>
Reading mca_shmem_mmap.so
<br>
...
<br>
Reading mca_dfs_app.so
<br>
Reading mca_dfs_orted.so
<br>
Reading mca_dfs_test.so
<br>
<p>execution completed, exit code is 1
<br>
(dbx) 
<br>
(dbx) 
<br>
(dbx) 
<br>
(dbx) check -all
<br>
access checking - ON
<br>
memuse checking - ON
<br>
(dbx) run -np 2 -host tyr,rs0 rank_size
<br>
Running: mpiexec -np 2 -host tyr,rs0 rank_size 
<br>
(process id 12346)
<br>
Reading rtcapihook.so
<br>
Reading libdl.so.1
<br>
...
<br>
RTC: Running program...
<br>
Read from uninitialized (rui) on thread 1:
<br>
Attempting to read 1 byte at address 0xffffffff7fffbfcb
<br>
&nbsp;&nbsp;&nbsp;&nbsp;which is 459 bytes above the current stack pointer
<br>
Variable is 'cwd'
<br>
t_at_1 (l_at_1) stopped in opal_getcwd at line 65 in file &quot;opal_getcwd.c&quot;
<br>
&nbsp;&nbsp;&nbsp;65           if (0 != strcmp(pwd, cwd)) {
<br>
(dbx)
<br>
<p><p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On Jan 1, 2014, at 1:48 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Nevertheless I have another problem with my small program.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 158 uname -p
</span><br>
<span class="quotelev2">&gt; &gt; sparc
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 159 ssh rs0 uname -p
</span><br>
<span class="quotelev2">&gt; &gt; sparc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 160 mpiexec rank_size
</span><br>
<span class="quotelev2">&gt; &gt; I'm process 0 of 1 available processes running on 
</span><br>
tyr.informatik.hs-fulda.de.
<br>
<span class="quotelev2">&gt; &gt; MPI standard 2.2 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 161 ssh rs0 mpiexec rank_size
</span><br>
<span class="quotelev2">&gt; &gt; I'm process 0 of 1 available processes running on 
</span><br>
rs0.informatik.hs-fulda.de.
<br>
<span class="quotelev2">&gt; &gt; MPI standard 2.2 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 162 mpiexec -np 2 -host tyr,rs0 rank_size
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 163 echo $status
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 164 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The command works as expected on little endian machines.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 small_prog 93 mpiexec -np 2 -host linpc1,sunpc1 rank_size
</span><br>
<span class="quotelev2">&gt; &gt; I'm process 0 of 2 available processes running on linpc1.
</span><br>
<span class="quotelev2">&gt; &gt; MPI standard 2.2 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; I'm process 1 of 2 available processes running on sunpc1.
</span><br>
<span class="quotelev2">&gt; &gt; MPI standard 2.2 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 small_prog 94 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23313.php">Hongyi Zhao: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Previous message:</strong> <a href="23311.php">Siegmar Gross: "Re: [OMPI users] Hetero apps just hang"</a>
<li><strong>Maybe in reply to:</strong> <a href="23302.php">Ralph Castain: "Re: [OMPI users] Problem on big endian machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23303.php">Ralph Castain: "Re: [OMPI users] rankfile issues"</a>
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
