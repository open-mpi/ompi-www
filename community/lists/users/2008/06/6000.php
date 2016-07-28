<?
$subject_val = "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 14:19:58 2008" -->
<!-- isoreceived="20080627181958" -->
<!-- sent="Fri, 27 Jun 2008 20:19:44 +0200" -->
<!-- isosent="20080627181944" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory" -->
<!-- id="E10B499A-383C-4020-8D1E-E84701D52AD4_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="93414.4699.qm_at_web56302.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-27 14:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6001.php">Doug Roberts: "[OMPI users] Processes Not Restarting On Requested Hosts"</a>
<li><strong>Previous message:</strong> <a href="5999.php">George Bosilca: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>In reply to:</strong> <a href="5998.php">Azhar Ali Shah: "[OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 27.06.2008 um 20:00 schrieb Azhar Ali Shah:
<br>
<p><span class="quotelev1">&gt; Using openmpi-1.2.6 with SGE 6.1u3 when I submit a job script  
</span><br>
<span class="quotelev1">&gt; containing:
</span><br>
<span class="quotelev1">&gt; mpirun -n $NSLOTS -machinefile $TMPDIR/machines ~/openmpi_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it produces following error in the output file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat: /tmp/174.1.all.q/machines: No such file or directory
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev1">&gt;     /tmp/174.1.all.q/machines
</span><br>
<span class="quotelev1">&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [comp5...] [0,0,0] ORTE_ERROR_LOG: Not found in file rmgr_urm.c at  
</span><br>
<span class="quotelev1">&gt; line 358
</span><br>
<span class="quotelev1">&gt; [comp5....] mpirun: spawn failed with errno=-13
</span><br>
<p>the file $TMPDIR/machines will be created from the script defined in  
<br>
start_proc_args in your PE in SGE. But for Open MPI you don't need a  
<br>
special procedure for start/stop_proc_args at all (hence the file  
<br>
will never be written). But you can run the application with just:
<br>
<p>mpirun -n $NSLOTS ~/openmpi_test
<br>
<p>and the to be used machines should be detected by Open MPI on its own.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6001.php">Doug Roberts: "[OMPI users] Processes Not Restarting On Requested Hosts"</a>
<li><strong>Previous message:</strong> <a href="5999.php">George Bosilca: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>In reply to:</strong> <a href="5998.php">Azhar Ali Shah: "[OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
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
