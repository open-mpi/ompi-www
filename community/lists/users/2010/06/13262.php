<?
$subject_val = "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 16:35:07 2010" -->
<!-- isoreceived="20100608203507" -->
<!-- sent="Tue, 08 Jun 2010 16:34:57 -0400" -->
<!-- isosent="20100608203457" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel" -->
<!-- id="4C0EA971.9090605_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="391416.38951.qm_at_web51006.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-08 16:34:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13263.php">Gus Correa: "[OMPI users] Collective component priorities and sm"</a>
<li><strong>Previous message:</strong> <a href="13261.php">Jeff Squyres: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13260.php">lauren: "[OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Have you tried to compile and run the simple examples
<br>
that come with OpenMPI?
<br>
<p>Often times they tell you right away if there are problems with your
<br>
PATH, or with your LD_LIBRARY_PATH, or if all OpenMPI software can
<br>
be reached by your nodes (and not only by your head node), etc.
<br>
<p>The little time you spend doing this boring routine,
<br>
may become the big time you save trying to troubleshoot
<br>
a more complex application like Gromacs.
<br>
Minimally, it should tell you if OpenMPI is really working
<br>
on your system.
<br>
<p>You can find the example programs in the &quot;examples&quot; directory of the 
<br>
OpenMPI tarball.
<br>
My favorite is connectivity_c.c, which tests pair-wise communication
<br>
across all processes, but there are other examples there.
<br>
<p>To compile it, do:
<br>
<p>mpicc connectivity_c.c
<br>
<p>To run it with verbose output, say, on 4 processes, do:
<br>
<p>mpirun -np 4 a.out -v
<br>
<p>The output is self-explanatory.
<br>
<p>Other useful test is just to run hostname through mpirun, say:
<br>
<p>mpirun -np 4 hostname
<br>
<p>to see if all hosts respond.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>lauren wrote:
<br>
<span class="quotelev1">&gt; One problem with versions or incompatibility can lead to a error like:
</span><br>
<span class="quotelev1">&gt; &quot;Unable to start a daemon on the local node&quot;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; &quot;ompi_mpi_init: ort_init failed&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *De:* &quot;Addepalli, Srirangam V&quot; &lt;srirangam.v.addepalli_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Para:* Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Enviadas:* Ter&#231;a-feira, 8 de Junho de 2010 13:59:08
</span><br>
<span class="quotelev1">&gt; *Assunto:* Re: [OMPI users] Res: Res: Res: Gromacs run in parallel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ldd  `which mdrun_mpi`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; should give you which libraries the binary is looking for.  What does 
</span><br>
<span class="quotelev1">&gt; the above command do for your build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had a user who had a serial mdrun in his path and it did the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] On 
</span><br>
<span class="quotelev1">&gt; Behalf Of lauren [owenlany_at_[hidden] &lt;mailto:owenlany_at_[hidden]&gt;]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 08, 2010 11:36 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Res:  Res:  Res:  Gromacs run in parallel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I did it and it match.....
</span><br>
<span class="quotelev1">&gt; mdrun and mpiexec at the same place.
</span><br>
<span class="quotelev1">&gt; seems ok...
</span><br>
<span class="quotelev1">&gt; 1 more suggestion?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you,
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
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; De: Carsten Kutzner &lt;ckutzne_at_[hidden] &lt;mailto:ckutzne_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Para: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Enviadas: Ter&#231;a-feira, 8 de Junho de 2010 13:12:35
</span><br>
<span class="quotelev1">&gt; Assunto: Re: [OMPI users] Res: Res: Gromacs run in parallel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. type 'which mdrun' to see where the mdrun executable resides.
</span><br>
<span class="quotelev1">&gt; 2. type ldd 'which mdrun' to find out against which mpi library it is linked
</span><br>
<span class="quotelev1">&gt; 3. type which mpirun (or which mpiexec, whatever you use) to verify that
</span><br>
<span class="quotelev1">&gt; this is the right mpi launcher for your mdrun.
</span><br>
<span class="quotelev1">&gt; 4. If the MPI's do not match, either use the right mpiexec or recompile
</span><br>
<span class="quotelev1">&gt; gromacs with the current mpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Carsten
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2010, at 5:50 PM, lauren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw
</span><br>
<span class="quotelev1">&gt; Host: &lt;somename&gt; pid: &lt;somepid&gt; nodeid: 0 nnodes: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; really it`s running in 1 node
</span><br>
<span class="quotelev1">&gt; and All of you really undestood my problem, thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But how can I fix it.
</span><br>
<span class="quotelev1">&gt; How can I run 1 job in 4 nodes...?
</span><br>
<span class="quotelev1">&gt; I really need help,
</span><br>
<span class="quotelev1">&gt; I took a look in my files and erase all the errors and the 
</span><br>
<span class="quotelev1">&gt; implementations seem corect.
</span><br>
<span class="quotelev2">&gt;  &gt;From the beginning, please.
</span><br>
<span class="quotelev1">&gt; `case all tutorials only explain the same thing that look right.
</span><br>
<span class="quotelev1">&gt; And thanks very much for this help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; De: Jeff Squyres &lt;jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&lt;mailto:jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Para: Open MPI Users &lt;users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Enviadas: Ter&#231;a-feira, 8 de Junho de 2010 10:30:03
</span><br>
<span class="quotelev1">&gt; Assunto: Re: [OMPI users] Res: Gromacs run in parallel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I'm sorry -- I wasn't clear.  What I meant was, that if you run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun -np 4 my_mpi_application
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. If you see a single, 4-process MPI job (regardless of how many 
</span><br>
<span class="quotelev1">&gt; nodes/servers it's spread across), then all is good.  This is what you want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. But if you're seeing 4 independent 1-process MPI jobs (again, 
</span><br>
<span class="quotelev1">&gt; regardless of how many nodes/servers they are spread across), it's 
</span><br>
<span class="quotelev1">&gt; possible that you compiled your application with MPI implementation X 
</span><br>
<span class="quotelev1">&gt; and then used the &quot;mpirun&quot; from MPI implementation Y.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You will need X==Y to make it work properly -- i.e., to see case #1, 
</span><br>
<span class="quotelev1">&gt; above.  I mention this because your first post mentioned that you're 
</span><br>
<span class="quotelev1">&gt; seeing the same job run 4 times.  This implied to me that you are 
</span><br>
<span class="quotelev1">&gt; running into case #2.  If I misunderstood your problem, then ignore me 
</span><br>
<span class="quotelev1">&gt; and forgive the noise.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2010, at 9:20 AM, Carsten Kutzner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; On Jun 8, 2010, at 3:06 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; I know nothing about Gromacs, but you might want to ensure that 
</span><br>
<span class="quotelev1">&gt; your Gromacs was compiled with Open MPI.  A common symptom of &quot;mpirun 
</span><br>
<span class="quotelev1">&gt; -np 4 my_mpi_application&quot; running 4 1-process MPI jobs (instead of 1 
</span><br>
<span class="quotelev1">&gt; 4-process MPI job) is that you compiled my_mpi_application with one MPI 
</span><br>
<span class="quotelev1">&gt; implementation, but then used the mpirun from a different MPI 
</span><br>
<span class="quotelev1">&gt; implementation.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Hi,
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; this can be checked by looking at the Gromacs output file md.log. The 
</span><br>
<span class="quotelev1">&gt; second line should
</span><br>
<span class="quotelev2">&gt;  &gt; read something like
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Host: &lt;somename&gt; pid: &lt;somepid&gt; nodeid: 0 nnodes: 4
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Lauren, you will want to ensure that nnodes is 4 in your case, and not 1.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; You can also easily test that without any input file by typing
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; mpirun -np 4 mdrun -h
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; and then should see
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; NNODES=4, MYRANK=1, HOSTNAME=&lt;...&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; NNODES=4, MYRANK=2, HOSTNAME=&lt;...&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; NNODES=4, MYRANK=3, HOSTNAME=&lt;...&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; NNODES=4, MYRANK=4, HOSTNAME=&lt;...&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; ...
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Carsten
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; On Jun 8, 2010, at 8:59 AM, lauren wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; The version of Gromacs is 4.0.7.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; This is the first time that I using Gromacs, then excuse me if I'm 
</span><br>
<span class="quotelev1">&gt; nonsense.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; Wich part of md.log output  should I post?
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; after or before the input description?
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; thanks for all,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; and sorry
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; De: Carsten Kutzner &lt;ckutzne_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:ckutzne_at_[hidden]&gt;&lt;mailto:ckutzne_at_[hidden] &lt;mailto:ckutzne_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; Para: Open MPI Users &lt;users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; Enviadas: Domingo, 6 de Junho de 2010 9:51:26
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; Assunto: Re: [OMPI users] Gromacs run in parallel
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; which version of Gromacs is this? Could you post the first lines of
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; the md.log output file?
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; Carsten
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; On Jun 5, 2010, at 10:23 PM, lauren wrote:
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; sorry my english..
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; I want to know how can I run  Gromancs in parallel!
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; Because when I used
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; mdrun &amp;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; mpiexec -np 4 mdrun_mpi -v -deffnm em
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; to run the minimization in 4 cores &gt; all cores make the same job, 
</span><br>
<span class="quotelev1">&gt; again!
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; They don't run together.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; I want all in parallel make the job faster.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; what could be wrong?
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; thank's a lot!
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; --
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&lt;mailto:jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; --
</span><br>
<span class="quotelev2">&gt;  &gt; Dr. Carsten Kutzner
</span><br>
<span class="quotelev2">&gt;  &gt; Max Planck Institute for Biophysical Chemistry
</span><br>
<span class="quotelev2">&gt;  &gt; Theoretical and Computational Biophysics
</span><br>
<span class="quotelev2">&gt;  &gt; Am Fassberg 11, 37077 Goettingen, Germany
</span><br>
<span class="quotelev2">&gt;  &gt; Tel. +49-551-2012313, Fax: +49-551-2012302
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.mpibpc.mpg.de/home/grubmueller/ihp/ckutzne">http://www.mpibpc.mpg.de/home/grubmueller/ihp/ckutzne</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&lt;mailto:jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13263.php">Gus Correa: "[OMPI users] Collective component priorities and sm"</a>
<li><strong>Previous message:</strong> <a href="13261.php">Jeff Squyres: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13260.php">lauren: "[OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
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
