<?
$subject_val = "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 10:58:30 2014" -->
<!-- isoreceived="20140514145830" -->
<!-- sent="Wed, 14 May 2014 07:56:53 -0700" -->
<!-- isosent="20140514145653" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
<!-- id="45BF4142-E430-4179-9009-604AC5FC92E5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201405141445.s4EEjUjc008815_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 10:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24353.php">Bennet Fauber: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24351.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>In reply to:</strong> <a href="24351.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24355.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What are the interfaces on these machines?
<br>
<p><p>On May 14, 2014, at 7:45 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just installed openmpi-1.8.2a1r31742 on my machines (Solaris 10
</span><br>
<span class="quotelev1">&gt; Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
</span><br>
<span class="quotelev1">&gt; Sun C5.12 and still have the following problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 102 which mpiexec
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.2_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
</span><br>
<span class="quotelev1">&gt;  REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
</span><br>
<span class="quotelev1">&gt;  REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev1">&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev1">&gt; Killed by signal 2.
</span><br>
<span class="quotelev1">&gt; tyr fd1026 104 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command works fine with openmpi-1.6.6rc1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 102 which mpiexec
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.6.6_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; tyr fd1026 104 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have reported the problem before and I would be grateful, if
</span><br>
<span class="quotelev1">&gt; somebody could solve it. Please let me know if I can provide any
</span><br>
<span class="quotelev1">&gt; other information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<li><strong>Next message:</strong> <a href="24353.php">Bennet Fauber: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24351.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>In reply to:</strong> <a href="24351.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24355.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
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
