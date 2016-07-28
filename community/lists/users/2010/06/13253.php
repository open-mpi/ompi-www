<?
$subject_val = "[OMPI users] Res:  Res:  Gromacs run in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 11:50:08 2010" -->
<!-- isoreceived="20100608155008" -->
<!-- sent="Tue, 8 Jun 2010 08:50:00 -0700 (PDT)" -->
<!-- isosent="20100608155000" -->
<!-- name="lauren" -->
<!-- email="owenlany_at_[hidden]" -->
<!-- subject="[OMPI users] Res:  Res:  Gromacs run in parallel" -->
<!-- id="710194.30444.qm_at_web51004.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0FBBD0E2-108A-4CCC-AF9D-2151C68BFAE1_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] Res:  Res:  Gromacs run in parallel<br>
<strong>From:</strong> lauren (<em>owenlany_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-08 11:50:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13254.php">Carsten Kutzner: "Re: [OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13252.php">Jeff Squyres: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13252.php">Jeff Squyres: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13254.php">Carsten Kutzner: "Re: [OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13254.php">Carsten Kutzner: "Re: [OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I saw 

Host: &lt;somename&gt; pid: &lt;somepid&gt; nodeid: 0 nnodes: 1

really it`s running in 1 node
and All of you really undestood my problem, thanks

But how can I fix it.
How can I run 1 job in 4 nodes...?
I really need help, 
I took a look in my files and erase all the errors and the implementations seem corect.
From the beginning, please.
`case all tutorials only explain the same thing that look right.
And thanks very much for this help!


 


________________________________
De: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
Para: Open MPI Users &lt;users_at_[hidden]&gt;
Enviadas: Ter&#231;a-feira, 8 de Junho de 2010 10:30:03
Assunto: Re: [OMPI users] Res:  Gromacs run in parallel

No, I'm sorry -- I wasn't clear.  What I meant was, that if you run:

   mpirun -np 4 my_mpi_application

1. If you see a single, 4-process MPI job (regardless of how many nodes/servers it's spread across), then all is good.  This is what you want.

2. But if you're seeing 4 independent 1-process MPI jobs (again, regardless of how many nodes/servers they are spread across), it's possible that you compiled your application with MPI implementation X and then used the &quot;mpirun&quot; from MPI implementation Y.  

You will need X==Y to make it work properly -- i.e., to see case #1, above.  I mention this because your first post mentioned that you're seeing the same job run 4 times.  This implied to me that you are running into case #2.  If I misunderstood your problem, then ignore me and forgive the noise.



On Jun 8, 2010, at 9:20 AM, Carsten Kutzner wrote:

&gt; On Jun 8, 2010, at 3:06 PM, Jeff Squyres wrote:
&gt; 
&gt; &gt; I know nothing about Gromacs, but you might want to ensure that your Gromacs was compiled with Open MPI.  A common symptom of &quot;mpirun -np 4 my_mpi_application&quot; running 4 1-process MPI jobs (instead of 1 4-process MPI job) is that you compiled my_mpi_application with one MPI implementation, but then used the mpirun from a different MPI implementation.
&gt; &gt;
&gt; Hi,
&gt; 
&gt; this can be checked by looking at the Gromacs output file md.log. The second line should
&gt; read something like
&gt; 
&gt; Host: &lt;somename&gt; pid: &lt;somepid&gt; nodeid: 0 nnodes: 4
&gt; 
&gt; Lauren, you will want to ensure that nnodes is 4 in your case, and not 1.
&gt; 
&gt; You can also easily test that without any input file by typing
&gt; 
&gt; mpirun -np 4 mdrun -h
&gt; 
&gt; and then should see
&gt; 
&gt; NNODES=4, MYRANK=1, HOSTNAME=&lt;...&gt;
&gt; NNODES=4, MYRANK=2, HOSTNAME=&lt;...&gt;
&gt; NNODES=4, MYRANK=3, HOSTNAME=&lt;...&gt;
&gt; NNODES=4, MYRANK=4, HOSTNAME=&lt;...&gt;
&gt; ...
&gt; 
&gt; 
&gt; Carsten
&gt; 
&gt; 
&gt; &gt;
&gt; &gt; On Jun 8, 2010, at 8:59 AM, lauren wrote:
&gt; &gt;
&gt; &gt;&gt;
&gt; &gt;&gt; The version of Gromacs is 4.0.7.
&gt; &gt;&gt; This is the first time that I using Gromacs, then excuse me if I'm nonsense.
&gt; &gt;&gt;
&gt; &gt;&gt; Wich part of md.log output  should I post?
&gt; &gt;&gt; after or before the input description?
&gt; &gt;&gt;
&gt; &gt;&gt; thanks for all,
&gt; &gt;&gt; and sorry
&gt; &gt;&gt;
&gt; &gt;&gt; De: Carsten Kutzner &lt;ckutzne_at_[hidden]&gt;
&gt; &gt;&gt; Para: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; &gt;&gt; Enviadas: Domingo, 6 de Junho de 2010 9:51:26
&gt; &gt;&gt; Assunto: Re: [OMPI users] Gromacs run in parallel
&gt; &gt;&gt;
&gt; &gt;&gt; Hi,
&gt; &gt;&gt;
&gt; &gt;&gt; which version of Gromacs is this? Could you post the first lines of
&gt; &gt;&gt; the md.log output file?
&gt; &gt;&gt;
&gt; &gt;&gt; Carsten
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; On Jun 5, 2010, at 10:23 PM, lauren wrote:
&gt; &gt;&gt;
&gt; &gt;&gt;&gt; sorry my english..
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; I want to know how can I run  Gromancs in parallel!
&gt; &gt;&gt;&gt; Because when I used 
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; mdrun &amp;
&gt; &gt;&gt;&gt; mpiexec -np 4 mdrun_mpi -v -deffnm em
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; to run the minimization in 4 cores &gt; all cores make the same job, again!
&gt; &gt;&gt;&gt; They don't run together. 
&gt; &gt;&gt;&gt; I want all in parallel make the job faster.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; what could be wrong?
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; thank's a lot!
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden]
&gt; &gt; For corporate legal information go to:
&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; --
&gt; Dr. Carsten Kutzner
&gt; Max Planck Institute for Biophysical Chemistry
&gt; Theoretical and Computational Biophysics
&gt; Am Fassberg 11, 37077 Goettingen, Germany
&gt; Tel. +49-551-2012313, Fax: +49-551-2012302
&gt; <a href="http://www.mpibpc.mpg.de/home/grubmueller/ihp/ckutzne">http://www.mpibpc.mpg.de/home/grubmueller/ihp/ckutzne</a>
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>


_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>



      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13253/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13254.php">Carsten Kutzner: "Re: [OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13252.php">Jeff Squyres: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13252.php">Jeff Squyres: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13254.php">Carsten Kutzner: "Re: [OMPI users] Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13254.php">Carsten Kutzner: "Re: [OMPI users] Res:  Res:  Gromacs run in parallel"</a>
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
