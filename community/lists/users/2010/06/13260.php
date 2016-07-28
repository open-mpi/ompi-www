<?
$subject_val = "[OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 14:07:27 2010" -->
<!-- isoreceived="20100608180727" -->
<!-- sent="Tue, 8 Jun 2010 11:07:22 -0700 (PDT)" -->
<!-- isosent="20100608180722" -->
<!-- name="lauren" -->
<!-- email="owenlany_at_[hidden]" -->
<!-- subject="[OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel" -->
<!-- id="391416.38951.qm_at_web51006.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA9640E5AB6A86F0_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel<br>
<strong>From:</strong> lauren (<em>owenlany_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-08 14:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13261.php">Jeff Squyres: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13259.php">lauren: "[OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13258.php">Addepalli, Srirangam V: "Re: [OMPI users] Res:  Res:  Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13261.php">Jeff Squyres: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13261.php">Jeff Squyres: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13262.php">Gus Correa: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One problem with versions or incompatibility can lead to a error like:
&quot;Unable to start a daemon on the local node&quot; 
and
&quot;ompi_mpi_init: ort_init failed&quot; 


??

thanks




________________________________
De: &quot;Addepalli, Srirangam V&quot; &lt;srirangam.v.addepalli_at_[hidden]&gt;
Para: Open MPI Users &lt;users_at_[hidden]&gt;
Enviadas: Ter&#231;a-feira, 8 de Junho de 2010 13:59:08
Assunto: Re: [OMPI users] Res:  Res:  Res:  Gromacs run in parallel

Hello,

ldd  `which mdrun_mpi`

should give you which libraries the binary is looking for.  What does the above command do for your build.

I had a user who had a serial mdrun in his path and it did the same.

Rangam

________________________________________
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of lauren [owenlany_at_[hidden]]
Sent: Tuesday, June 08, 2010 11:36 AM
To: Open MPI Users
Subject: [OMPI users] Res:  Res:  Res:  Gromacs run in parallel

Hi,
I did it and it match.....
mdrun and mpiexec at the same place.
seems ok...
1 more suggestion?

thank you,





________________________________
De: Carsten Kutzner &lt;ckutzne_at_[hidden]&gt;
Para: Open MPI Users &lt;users_at_[hidden]&gt;
Enviadas: Ter&#231;a-feira, 8 de Junho de 2010 13:12:35
Assunto: Re: [OMPI users] Res: Res: Gromacs run in parallel

Ok,

1. type 'which mdrun' to see where the mdrun executable resides.
2. type ldd 'which mdrun' to find out against which mpi library it is linked
3. type which mpirun (or which mpiexec, whatever you use) to verify that
this is the right mpi launcher for your mdrun.
4. If the MPI's do not match, either use the right mpiexec or recompile
gromacs with the current mpi.

Carsten


On Jun 8, 2010, at 5:50 PM, lauren wrote:

I saw
Host: &lt;somename&gt; pid: &lt;somepid&gt; nodeid: 0 nnodes: 1

really it`s running in 1 node
and All of you really undestood my problem, thanks

But how can I fix it.
How can I run 1 job in 4 nodes...?
I really need help,
I took a look in my files and erase all the errors and the implementations seem corect.
&gt;From the beginning, please.
`case all tutorials only explain the same thing that look right.
And thanks very much for this help!



________________________________
De: Jeff Squyres &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt;
Para: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
Enviadas: Ter&#231;a-feira, 8 de Junho de 2010 10:30:03
Assunto: Re: [OMPI users] Res: Gromacs run in parallel

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
&gt; &gt;&gt; De: Carsten Kutzner &lt;ckutzne_at_[hidden]&lt;mailto:ckutzne_at_[hidden]&gt;&gt;
&gt; &gt;&gt; Para: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
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
&gt; &gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
&gt; &gt; For corporate legal information go to:
&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
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
&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;


--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>


_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


--
Dr. Carsten Kutzner
Max Planck Institute for Biophysical Chemistry
Theoretical and Computational Biophysics
Am Fassberg 11, 37077 Goettingen, Germany
Tel. +49-551-2012313, Fax: +49-551-2012302
<a href="http://www.mpibpc.mpg.de/home/grubmueller/ihp/ckutzne">http://www.mpibpc.mpg.de/home/grubmueller/ihp/ckutzne</a>







_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>



      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13260/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13261.php">Jeff Squyres: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13259.php">lauren: "[OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13258.php">Addepalli, Srirangam V: "Re: [OMPI users] Res:  Res:  Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13261.php">Jeff Squyres: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13261.php">Jeff Squyres: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<li><strong>Reply:</strong> <a href="13262.php">Gus Correa: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
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
