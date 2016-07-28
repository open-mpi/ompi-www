<?
$subject_val = "Re: [OMPI users] OpenMPI-Ranking problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 12:42:24 2010" -->
<!-- isoreceived="20100608164224" -->
<!-- sent="Tue, 08 Jun 2010 12:41:53 -0400" -->
<!-- isosent="20100608164153" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-Ranking problem" -->
<!-- id="4C0E72D1.3090405_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTilex29PsrHNEJa8I8WxqqE1O0aLeY84uJ7ZrtWp_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-Ranking problem<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-08 12:41:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13258.php">Addepalli, Srirangam V: "Re: [OMPI users] Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13256.php">lauren: "[OMPI users] Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13247.php">Chamila Janath: "[OMPI users] OpenMPI-Ranking problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13269.php">Chamila Janath: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
<li><strong>Reply:</strong> <a href="13269.php">Chamila Janath: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which version of OMPI are you running on and the OS version?
<br>
Can you try and replace the rankfile specification with --bind-to-core 
<br>
and tell me if that works any better?
<br>
<p>--td
<br>
<p>Chamila Janath wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _rankfile_
</span><br>
<span class="quotelev1">&gt; rank 0=10.16.71.1 slot=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I launched my mpi app using,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 -rf rankfile appname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can run the application on Intel dual-core machine with Linux based 
</span><br>
<span class="quotelev1">&gt; OS nicely. But i can't run it on single core machine(P4).
</span><br>
<span class="quotelev1">&gt; The execution terminates specifying a problem of slot number. What is 
</span><br>
<span class="quotelev1">&gt; the reason for this? A bug or problem of the slot number I 
</span><br>
<span class="quotelev1">&gt; specified.(I tried by using rank 0=10.16.71.1 slot=p0:0 but it too failed)
</span><br>
<span class="quotelev1">&gt; Please help me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13257/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13258.php">Addepalli, Srirangam V: "Re: [OMPI users] Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13256.php">lauren: "[OMPI users] Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13247.php">Chamila Janath: "[OMPI users] OpenMPI-Ranking problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13269.php">Chamila Janath: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
<li><strong>Reply:</strong> <a href="13269.php">Chamila Janath: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
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
