<?
$subject_val = "Re: [OMPI users] openmpi 1.3 and --wdir problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 10:45:46 2009" -->
<!-- isoreceived="20090121154546" -->
<!-- sent="Wed, 21 Jan 2009 08:45:37 -0700" -->
<!-- isosent="20090121154537" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3 and --wdir problem" -->
<!-- id="17CD69BB-10A5-4AE8-9E26-840A3B686425_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b4f9bf870901210222j5b458a51u533080f3e2246fd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.3 and --wdir problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 10:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7751.php">Evgeniy Gromov: "[OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<li><strong>Previous message:</strong> <a href="7749.php">Tim Mattox: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7746.php">Geoffroy Pignot: "[OMPI users] openmpi 1.3 and --wdir problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<li><strong>Reply:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are correct - that is a bug in 1.3.0. I'm working on a fix for it  
<br>
now and will report back.
<br>
<p>Thanks for catching it!
<br>
Ralph
<br>
<p><p>On Jan 21, 2009, at 3:22 AM, Geoffroy Pignot wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I'm currently trying the new release but I cant reproduce the  
</span><br>
<span class="quotelev1">&gt; 1.2.8 behaviour
</span><br>
<span class="quotelev1">&gt;    concerning --wdir option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Then
</span><br>
<span class="quotelev1">&gt;    %% /tmp/openmpi-1.2.8/bin/mpirun -n 1 --wdir /tmp --host r003n030  
</span><br>
<span class="quotelev1">&gt; pwd :   --wdir /scr1 -n 1 --host r003n031 pwd
</span><br>
<span class="quotelev1">&gt;    /scr1
</span><br>
<span class="quotelev1">&gt;    /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    but
</span><br>
<span class="quotelev1">&gt;    %% /tmp/openmpi-1.3/bin/mpirun -n 1 --wdir /tmp --host r003n030  
</span><br>
<span class="quotelev1">&gt; pwd : --wdir  /scr1 -n 1 --host r003n031 pwd
</span><br>
<span class="quotelev1">&gt;    /scr1
</span><br>
<span class="quotelev1">&gt;    /scr1
</span><br>
<span class="quotelev1">&gt;    Thanks in advance
</span><br>
<span class="quotelev1">&gt;    Regards
</span><br>
<span class="quotelev1">&gt;    Geoffroy
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
<li><strong>Next message:</strong> <a href="7751.php">Evgeniy Gromov: "[OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<li><strong>Previous message:</strong> <a href="7749.php">Tim Mattox: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7746.php">Geoffroy Pignot: "[OMPI users] openmpi 1.3 and --wdir problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<li><strong>Reply:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
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
