<?
$subject_val = "Re: [OMPI users] Argument parsing issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 04:22:54 2011" -->
<!-- isoreceived="20110127092254" -->
<!-- sent="Thu, 27 Jan 2011 10:22:35 +0100" -->
<!-- isosent="20110127092235" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Argument parsing issue" -->
<!-- id="D225A66C-FB21-41C9-BB91-16C98985D50A_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimHvN5gHpS1XF7iM6S=5TwPEqOck-nNnWFWxqQD_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Argument parsing issue<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 04:22:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15429.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Previous message:</strong> <a href="15427.php">Gabriele Fatigati: "[OMPI users] Argument parsing issue"</a>
<li><strong>In reply to:</strong> <a href="15427.php">Gabriele Fatigati: "[OMPI users] Argument parsing issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15429.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Reply:</strong> <a href="15429.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 27.01.2011 um 09:48 schrieb Gabriele Fatigati:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI users and developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i'm using OpenMPI 1.4.3 and Intel compiler. My simple application require 3 line arguments to work. If i use the follow command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./a.out a b &quot;c d&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debugging my application with Totalview:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --debug  ./a.out a b &quot;c d&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Argument parsing doesn't work well. Arguments passed are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a b c d
</span><br>
<p>this double expansion can happen with certain wrappers (also with queuing system this happens sometimes). What you can try is:
<br>
<p>$ mpirun -np 2 --debug ./a.out a b &quot;'c d'&quot;
<br>
<p>$ mpirun -np 2 --debug ./a.out a b &quot;\&quot;c d\&quot;&quot;
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; and not 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a b &quot;c d&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think there is an issue in parsing the arguments invoking Totalview. Is this a bug into mpirun or i need to do it in other way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in forward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it           
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
<li><strong>Next message:</strong> <a href="15429.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Previous message:</strong> <a href="15427.php">Gabriele Fatigati: "[OMPI users] Argument parsing issue"</a>
<li><strong>In reply to:</strong> <a href="15427.php">Gabriele Fatigati: "[OMPI users] Argument parsing issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15429.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Reply:</strong> <a href="15429.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
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
