<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 09:38:44 2010" -->
<!-- isoreceived="20100114143844" -->
<!-- sent="Thu, 14 Jan 2010 09:38:39 -0500" -->
<!-- isosent="20100114143839" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="888FA576-8C55-4E35-B343-6BD78D9D1E0E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="68119efe1001140520s4a5e4b2fvd26dd9fe46ad1a29_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint/Restart error<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 09:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11770.php">von Tycowicz, Christoph: "[OMPI users] configure script fails - fixed?"</a>
<li><strong>Previous message:</strong> <a href="11768.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart"</a>
<li><strong>In reply to:</strong> <a href="11767.php">Andreea Costea: "[OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11786.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11786.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 14, 2010, at 8:20 AM, Andreea Costea wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wanted to try the C/R feature in OpenMPI version 1.4.1 that I have downloaded today. When I want to checkpoint I am having the following error message:
</span><br>
<span class="quotelev1">&gt; [[65192,0],0] ORTE_ERROR_LOG: Not found in file orte-checkpoint.c at line 399
</span><br>
<span class="quotelev1">&gt; HNP with PID 2337 Not found! 
</span><br>
<p>This looks like an error coming from the 1.3.3 install. In 1.4.1 there is no error at line 399, in 1.3.3 there is. Check your installation of Open MPI, I bet you are mixing 1.4.1 and 1.3.3, which can cause unexpected problems.
<br>
<p>Try a clean installation of 1.4.1 and double check that 1.3.3 is not in your path/lib_path any longer.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried the same thing with version 1.3.3 and it works perfectly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea why?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
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
<li><strong>Next message:</strong> <a href="11770.php">von Tycowicz, Christoph: "[OMPI users] configure script fails - fixed?"</a>
<li><strong>Previous message:</strong> <a href="11768.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart"</a>
<li><strong>In reply to:</strong> <a href="11767.php">Andreea Costea: "[OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11786.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11786.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
