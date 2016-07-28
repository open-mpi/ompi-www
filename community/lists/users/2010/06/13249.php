<?
$subject_val = "Re: [OMPI users] Res:  Gromacs run in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 09:06:30 2010" -->
<!-- isoreceived="20100608130630" -->
<!-- sent="Tue, 8 Jun 2010 09:06:25 -0400" -->
<!-- isosent="20100608130625" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Res:  Gromacs run in parallel" -->
<!-- id="8FD612E2-0335-4904-867A-12F8473F83BC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="403044.96986.qm_at_web51001.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Res:  Gromacs run in parallel<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-08 09:06:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13250.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13248.php">lauren: "[OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13248.php">lauren: "[OMPI users] Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13250.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13250.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13251.php">Carsten Kutzner: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know nothing about Gromacs, but you might want to ensure that your Gromacs was compiled with Open MPI.  A common symptom of &quot;mpirun -np 4 my_mpi_application&quot; running 4 1-process MPI jobs (instead of 1 4-process MPI job) is that you compiled my_mpi_application with one MPI implementation, but then used the mpirun from a different MPI implementation.
<br>
<p><p>On Jun 8, 2010, at 8:59 AM, lauren wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The version of Gromacs is 4.0.7.
</span><br>
<span class="quotelev1">&gt; This is the first time that I using Gromacs, then excuse me if I'm nonsense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wich part of md.log output  should I post?
</span><br>
<span class="quotelev1">&gt; after or before the input description?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for all,
</span><br>
<span class="quotelev1">&gt; and sorry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; De: Carsten Kutzner &lt;ckutzne_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Para: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Enviadas: Domingo, 6 de Junho de 2010 9:51:26
</span><br>
<span class="quotelev1">&gt; Assunto: Re: [OMPI users] Gromacs run in parallel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which version of Gromacs is this? Could you post the first lines of 
</span><br>
<span class="quotelev1">&gt; the md.log output file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Carsten
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 5, 2010, at 10:23 PM, lauren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sorry my english..
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I want to know how can I run  Gromancs in parallel!
</span><br>
<span class="quotelev2">&gt;&gt; Because when I used  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mdrun &amp;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 4 mdrun_mpi -v -deffnm em
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  to run the minimization in 4 cores &gt; all cores make the same job, again!
</span><br>
<span class="quotelev2">&gt;&gt; They don't run together.  
</span><br>
<span class="quotelev2">&gt;&gt; I want all in parallel make the job faster.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; what could be wrong?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thank's a lot!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13250.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13248.php">lauren: "[OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13248.php">lauren: "[OMPI users] Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13250.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13250.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13251.php">Carsten Kutzner: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
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
