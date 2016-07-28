<?
$subject_val = "Re: [OMPI users] mpirun: symbol lookup error:	/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 16:03:02 2009" -->
<!-- isoreceived="20090406200302" -->
<!-- sent="Mon, 06 Apr 2009 16:02:57 -0400" -->
<!-- isosent="20090406200257" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: symbol lookup error:	/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init" -->
<!-- id="49DA5FF1.5040309_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="adbbb9af0904010900u6affe279w42e8971b10264836_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun: symbol lookup error:	/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 16:02:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8793.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8791.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8842.php">Alessandro Surace: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Reply:</strong> <a href="8842.php">Alessandro Surace: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alessandro Surace wrote:
<br>
<span class="quotelev1">&gt; Hi guys, I try to repost my question...
</span><br>
<span class="quotelev1">&gt; I've a problem with the last stable build and the last nightly snapshot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run a job directly with mpirun no problem.
</span><br>
<span class="quotelev1">&gt; If I try to submit it with lsf:
</span><br>
<span class="quotelev1">&gt; bsub -a openmpi -m grid01 mpirun.lsf /mnt/ewd/mpi/fibonacci/fibonacci_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the follow error:
</span><br>
<span class="quotelev1">&gt; mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: lsb_init
</span><br>
<span class="quotelev1">&gt; Job  /opt/lsf/7.0/linux2.6-glibc2.3-x86/bin/openmpi_wrapper
</span><br>
<span class="quotelev1">&gt; /mnt/ewd/mpi/fibonacci/fibonacci_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've verified that the lsb_init symbol is present in the library:
</span><br>
<span class="quotelev1">&gt; [root_at_grid01 lib]# strings libbat.* |grep lsb_init
</span><br>
<span class="quotelev1">&gt; lsb_init
</span><br>
<span class="quotelev1">&gt; sch_lsb_init
</span><br>
<span class="quotelev1">&gt; lsb_init()
</span><br>
<span class="quotelev1">&gt; lsb_init
</span><br>
<span class="quotelev1">&gt; sch_lsb_init
</span><br>
<span class="quotelev1">&gt; sch_lsb_init
</span><br>
<span class="quotelev1">&gt; sch_lsb_init
</span><br>
<span class="quotelev1">&gt; sch_lsb_init
</span><br>
<span class="quotelev1">&gt; lsb_init()
</span><br>
<span class="quotelev1">&gt; sch_lsb_init
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Can you verify that LSF is passing your evironment along correctly? It
<br>
looks like your LD_LIBRARY_PATH is set in your login environment, but
<br>
not the environment that the LSF job runs in
<br>
<p>You can check this by submitting a jog that executes just the command
<br>
'printenv'. Compare the output to what you get when you type 'printenv'
<br>
on the command. Compare the values for LD_LIBRARY_PATH, in particular.
<br>
<p>If that looks okay, then try running a job that just executes
<br>
<p>ldd /mnt/ewd/mpi/fibonacci/fibonacci_mpi
<br>
<p>This will show you any libraries that ld can't find in the LSF run-time
<br>
environment.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8793.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8791.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8842.php">Alessandro Surace: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Reply:</strong> <a href="8842.php">Alessandro Surace: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
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
