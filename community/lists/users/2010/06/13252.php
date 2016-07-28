<?
$subject_val = "Re: [OMPI users] Res:  Gromacs run in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 09:30:08 2010" -->
<!-- isoreceived="20100608133008" -->
<!-- sent="Tue, 8 Jun 2010 09:30:03 -0400" -->
<!-- isosent="20100608133003" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Res:  Gromacs run in parallel" -->
<!-- id="0FBBD0E2-108A-4CCC-AF9D-2151C68BFAE1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46CDFFC8-68E1-48E3-B536-4CF3B4C9820A_at_gwdg.de" -->
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
<strong>Date:</strong> 2010-06-08 09:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13253.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13251.php">Carsten Kutzner: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13251.php">Carsten Kutzner: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13253.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13253.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, I'm sorry -- I wasn't clear.  What I meant was, that if you run:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 4 my_mpi_application
<br>
<p>1. If you see a single, 4-process MPI job (regardless of how many nodes/servers it's spread across), then all is good.  This is what you want.
<br>
<p>2. But if you're seeing 4 independent 1-process MPI jobs (again, regardless of how many nodes/servers they are spread across), it's possible that you compiled your application with MPI implementation X and then used the &quot;mpirun&quot; from MPI implementation Y.  
<br>
<p>You will need X==Y to make it work properly -- i.e., to see case #1, above.  I mention this because your first post mentioned that you're seeing the same job run 4 times.  This implied to me that you are running into case #2.  If I misunderstood your problem, then ignore me and forgive the noise.
<br>
<p><p><p>On Jun 8, 2010, at 9:20 AM, Carsten Kutzner wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 8, 2010, at 3:06 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I know nothing about Gromacs, but you might want to ensure that your Gromacs was compiled with Open MPI.  A common symptom of &quot;mpirun -np 4 my_mpi_application&quot; running 4 1-process MPI jobs (instead of 1 4-process MPI job) is that you compiled my_mpi_application with one MPI implementation, but then used the mpirun from a different MPI implementation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this can be checked by looking at the Gromacs output file md.log. The second line should
</span><br>
<span class="quotelev1">&gt; read something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: &lt;somename&gt; pid: &lt;somepid&gt; nodeid: 0 nnodes: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lauren, you will want to ensure that nnodes is 4 in your case, and not 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can also easily test that without any input file by typing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 mdrun -h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then should see
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NNODES=4, MYRANK=1, HOSTNAME=&lt;...&gt;
</span><br>
<span class="quotelev1">&gt; NNODES=4, MYRANK=2, HOSTNAME=&lt;...&gt;
</span><br>
<span class="quotelev1">&gt; NNODES=4, MYRANK=3, HOSTNAME=&lt;...&gt;
</span><br>
<span class="quotelev1">&gt; NNODES=4, MYRANK=4, HOSTNAME=&lt;...&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Carsten
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 8, 2010, at 8:59 AM, lauren wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The version of Gromacs is 4.0.7.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is the first time that I using Gromacs, then excuse me if I'm nonsense.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wich part of md.log output  should I post?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; after or before the input description?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thanks for all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and sorry
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; De: Carsten Kutzner &lt;ckutzne_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Para: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Enviadas: Domingo, 6 de Junho de 2010 9:51:26
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Assunto: Re: [OMPI users] Gromacs run in parallel
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which version of Gromacs is this? Could you post the first lines of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the md.log output file?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Carsten
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 5, 2010, at 10:23 PM, lauren wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sorry my english..
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I want to know how can I run  Gromancs in parallel!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Because when I used 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mdrun &amp;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpiexec -np 4 mdrun_mpi -v -deffnm em
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to run the minimization in 4 cores &gt; all cores make the same job, again!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; They don't run together. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I want all in parallel make the job faster.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; what could be wrong?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; thank's a lot!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Carsten Kutzner
</span><br>
<span class="quotelev1">&gt; Max Planck Institute for Biophysical Chemistry
</span><br>
<span class="quotelev1">&gt; Theoretical and Computational Biophysics
</span><br>
<span class="quotelev1">&gt; Am Fassberg 11, 37077 Goettingen, Germany
</span><br>
<span class="quotelev1">&gt; Tel. +49-551-2012313, Fax: +49-551-2012302
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpibpc.mpg.de/home/grubmueller/ihp/ckutzne">http://www.mpibpc.mpg.de/home/grubmueller/ihp/ckutzne</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13253.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13251.php">Carsten Kutzner: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13251.php">Carsten Kutzner: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13253.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13253.php">lauren: "[OMPI users] Res:  Res:  Gromacs run in parallel"</a>
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
