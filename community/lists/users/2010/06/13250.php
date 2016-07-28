<?
$subject_val = "[OMPI users] Res:  Res:  Gromacs run in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 09:18:16 2010" -->
<!-- isoreceived="20100608131816" -->
<!-- sent="Tue, 8 Jun 2010 06:18:11 -0700 (PDT)" -->
<!-- isosent="20100608131811" -->
<!-- name="lauren" -->
<!-- email="owenlany_at_[hidden]" -->
<!-- subject="[OMPI users] Res:  Res:  Gromacs run in parallel" -->
<!-- id="917444.10049.qm_at_web51001.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8FD612E2-0335-4904-867A-12F8473F83BC_at_cisco.com" -->
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
<strong>Date:</strong> 2010-06-08 09:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13251.php">Carsten Kutzner: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13249.php">Jeff Squyres: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13249.php">Jeff Squyres: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13251.php">Carsten Kutzner: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
oh! ok,
Then  I put MPI on server with 4 nodes.
I have to put 1 for each? 
How do I do that?
What's the first step in this case when I want to run 1 job in 4 nodes (the same server)?
Cause all of then are make the same job again.

sorry for all...




________________________________
De: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
Para: Open MPI Users &lt;users_at_[hidden]&gt;
Enviadas: Ter&#231;a-feira, 8 de Junho de 2010 10:06:25
Assunto: Re: [OMPI users] Res:  Gromacs run in parallel

I know nothing about Gromacs, but you might want to ensure that your Gromacs was compiled with Open MPI.  A common symptom of &quot;mpirun -np 4 my_mpi_application&quot; running 4 1-process MPI jobs (instead of 1 4-process MPI job) is that you compiled my_mpi_application with one MPI implementation, but then used the mpirun from a different MPI implementation.


On Jun 8, 2010, at 8:59 AM, lauren wrote:

&gt; 
&gt; The version of Gromacs is 4.0.7.
&gt; This is the first time that I using Gromacs, then excuse me if I'm nonsense.
&gt; 
&gt; Wich part of md.log output  should I post?
&gt; after or before the input description?
&gt; 
&gt; thanks for all,
&gt; and sorry
&gt; 
&gt; De: Carsten Kutzner &lt;ckutzne_at_[hidden]&gt;
&gt; Para: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Enviadas: Domingo, 6 de Junho de 2010 9:51:26
&gt; Assunto: Re: [OMPI users] Gromacs run in parallel
&gt; 
&gt; Hi,
&gt; 
&gt; which version of Gromacs is this? Could you post the first lines of 
&gt; the md.log output file?
&gt; 
&gt; Carsten
&gt; 
&gt; 
&gt; On Jun 5, 2010, at 10:23 PM, lauren wrote:
&gt; 
&gt;&gt; sorry my english..
&gt;&gt; 
&gt;&gt; I want to know how can I run  Gromancs in parallel!
&gt;&gt; Because when I used  
&gt;&gt; 
&gt;&gt; mdrun &amp;
&gt;&gt; mpiexec -np 4 mdrun_mpi -v -deffnm em
&gt;&gt; 
&gt;&gt;  to run the minimization in 4 cores &gt; all cores make the same job, again!
&gt;&gt; They don't run together.  
&gt;&gt; I want all in parallel make the job faster.
&gt;&gt; 
&gt;&gt; 
&gt;&gt; what could be wrong?
&gt;&gt; 
&gt;&gt; thank's a lot!
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt;  _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; 
&gt;  _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13251.php">Carsten Kutzner: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13249.php">Jeff Squyres: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13249.php">Jeff Squyres: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13251.php">Carsten Kutzner: "Re: [OMPI users] Res:  Gromacs run in parallel"</a>
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
