<?
$subject_val = "Re: [OMPI users] Problem: openmpi using lam";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  8 10:51:46 2008" -->
<!-- isoreceived="20080308155146" -->
<!-- sent="Sat, 8 Mar 2008 16:40:05 +0100" -->
<!-- isosent="20080308154005" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem: openmpi using lam" -->
<!-- id="4CEA111A-EB92-48A6-A9FF-58151AC50289_at_staff.uni-marburg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080308112646.291350_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem: openmpi using lam<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-08 10:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5162.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Previous message:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>In reply to:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5163.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Reply:</strong> <a href="5163.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 08.03.2008 um 12:26 schrieb Justus Schwabedal:
<br>
<p><span class="quotelev1">&gt; I thought LAM/MPI is being merged into openmpi. I think, Im not  
</span><br>
<span class="quotelev1">&gt; sure how the implementations are related. I think lam is just a  
</span><br>
<span class="quotelev1">&gt; runtime for which now openmpi delivers some support. If not so, I  
</span><br>
<span class="quotelev1">&gt; dont understand. However orte is another runtime right? I thought I  
</span><br>
<span class="quotelev1">&gt; can switch between those using something like mpi-selector-menu. I  
</span><br>
<span class="quotelev1">&gt; think Im lost. How can I use openmpi to run a distributed system  
</span><br>
<span class="quotelev1">&gt; efficiently? I dont want to fall back on old LAM/MPI since I want  
</span><br>
<span class="quotelev1">&gt; to be modern :o)
</span><br>
<span class="quotelev1">&gt; Yours, J
</span><br>
<p>You can't mix different MPI implementations. If you compiled your  
<br>
program with LAM/MPI, you must use their mpirun. There is no binary  
<br>
interface defined for MPI, so that you could change the to be used  
<br>
MPI implementation just on the fly from one run to the next. If you  
<br>
want to change to Open MPI, you have to recompile your program and  
<br>
use Open MPI's mpirun.
<br>
<p>To your test-run: you specified to use two processes, but not where  
<br>
to start them. Hence you must provide something like a machine file.  
<br>
In LAM/MPI you could try:
<br>
<p>mpirun C hello.x
<br>
<p>(again: this only works in LAM/MPI).
<br>
<p>In a distributed environment it's must common to use a queuing sytem  
<br>
to select free nodes most efficiently for you. E.g. SGE ( http:// 
<br>
gridengine.sunsource.net/ ) or Torque ( http:// 
<br>
www.clusterresources.com/pages/products/torque-resource-manager.php )  
<br>
and to start the jobs under their supervision.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; -------- Original-Nachricht --------
</span><br>
<span class="quotelev2">&gt;&gt; Datum: Fri, 7 Mar 2008 13:19:16 -0500
</span><br>
<span class="quotelev2">&gt;&gt; Von: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Betreff: Re: [OMPI users] Problem: openmpi using lam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 7, 2008, at 11:31 AM, Justus Schwabedal wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need advise to get openmpi to work using lam.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you're slightly confused -- LAM/MPI and Open MPI are two
</span><br>
<span class="quotelev2">&gt;&gt; different software projects that implement the same standard (MPI).
</span><br>
<span class="quotelev2">&gt;&gt; This list is for supporting Open MPI.  Another list
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.lam-mpi.org/mailman/listinfo.cgi/lam">http://www.lam-mpi.org/mailman/listinfo.cgi/lam</a>
</span><br>
<span class="quotelev2">&gt;&gt; ) is available for supporting LAM/MPI.  You might want to refer to  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Getting Help&quot; page on the LAM/MPI site
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.lam-mpi.org/using/support/">http://www.lam-mpi.org/using/support/</a>
</span><br>
<span class="quotelev2">&gt;&gt; ).  I suspect that your problem has to do with your hostfile, and you
</span><br>
<span class="quotelev2">&gt;&gt; should check the LAM/MPI user's guide for the answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But be aware that LAM/MPI is in maintenance mode -- it is being
</span><br>
<span class="quotelev2">&gt;&gt; deprecated in favor of Open MPI.  See the announcement at the top of
</span><br>
<span class="quotelev2">&gt;&gt; LAM/MPI's home page.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good luck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For testing I installed it on two machines running opensuse10.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (both atholon 64) connected via ethernet. I then try to run a test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; script &quot;hello.x&quot; with the following commands:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jus_at_cusp:~/Code/Spielwiese/Mpi&gt; make hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc hello.c -o hello.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jus_at_cusp:~/Code/Spielwiese/Mpi&gt; lamboot mfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LAM 7.1.4/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Enter passphrase for key '/cusp/jus/.ssh/id_rsa':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Enter passphrase for key '/cusp/jus/.ssh/id_rsa':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jus_at_cusp:~/Code/Spielwiese/Mpi&gt; lamnodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n0      cusp:1:origin,this_node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n1      neutrino.stat.physik.uni-potsdam.de:1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jus_at_cusp:~/Code/Spielwiese/Mpi&gt; mpirun -np 2 hello.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 on cusp out of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 on cusp out of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The jobs are thus wrapped only on the node &quot;cusp&quot;, not on both. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have no clue why this is.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, Justus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Psst! Geheimtipp: Online Games kostenlos spielen bei den GMX Free
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Games!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://games.entertainment.gmx.net/de/entertainment/games/free">http://games.entertainment.gmx.net/de/entertainment/games/free</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Psssst! Schon vom neuen GMX MultiMessenger geh&#246;rt?
</span><br>
<span class="quotelev1">&gt; Der kann`s mit allen: <a href="http://www.gmx.net/de/go/multimessenger">http://www.gmx.net/de/go/multimessenger</a>
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
<li><strong>Next message:</strong> <a href="5162.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Previous message:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>In reply to:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5163.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Reply:</strong> <a href="5163.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
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
