<?
$subject_val = "Re: [OMPI users] Problem: openmpi using lam";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 13:19:28 2008" -->
<!-- isoreceived="20080307181928" -->
<!-- sent="Fri, 7 Mar 2008 13:19:16 -0500" -->
<!-- isosent="20080307181916" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem: openmpi using lam" -->
<!-- id="7AE71054-564A-4E77-BD8B-AA9C57CD7828_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080307163104.238790_at_gmx.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-07 13:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Previous message:</strong> <a href="5158.php">Brock Palen: "Re: [OMPI users] eager limits?"</a>
<li><strong>In reply to:</strong> <a href="5157.php">Justus Schwabedal: "[OMPI users] Problem: openmpi using lam"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Reply:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 7, 2008, at 11:31 AM, Justus Schwabedal wrote:
<br>
<p><span class="quotelev1">&gt; I need advise to get openmpi to work using lam.
</span><br>
<p>I think you're slightly confused -- LAM/MPI and Open MPI are two  
<br>
different software projects that implement the same standard (MPI).   
<br>
This list is for supporting Open MPI.  Another list (<a href="http://www.lam-mpi.org/mailman/listinfo.cgi/lam">http://www.lam-mpi.org/mailman/listinfo.cgi/lam</a> 
<br>
) is available for supporting LAM/MPI.  You might want to refer to the  
<br>
&quot;Getting Help&quot; page on the LAM/MPI site (<a href="http://www.lam-mpi.org/using/support/">http://www.lam-mpi.org/using/support/</a> 
<br>
).  I suspect that your problem has to do with your hostfile, and you  
<br>
should check the LAM/MPI user's guide for the answer.
<br>
<p>But be aware that LAM/MPI is in maintenance mode -- it is being  
<br>
deprecated in favor of Open MPI.  See the announcement at the top of  
<br>
LAM/MPI's home page.
<br>
<p>Good luck.
<br>
<p><span class="quotelev1">&gt; For testing I installed it on two machines running opensuse10.3  
</span><br>
<span class="quotelev1">&gt; (both atholon 64) connected via ethernet. I then try to run a test  
</span><br>
<span class="quotelev1">&gt; script &quot;hello.x&quot; with the following commands:
</span><br>
<span class="quotelev1">&gt; jus_at_cusp:~/Code/Spielwiese/Mpi&gt; make hello
</span><br>
<span class="quotelev1">&gt; mpicc hello.c -o hello.x
</span><br>
<span class="quotelev1">&gt; jus_at_cusp:~/Code/Spielwiese/Mpi&gt; lamboot mfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LAM 7.1.4/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Enter passphrase for key '/cusp/jus/.ssh/id_rsa':
</span><br>
<span class="quotelev1">&gt; Enter passphrase for key '/cusp/jus/.ssh/id_rsa':
</span><br>
<span class="quotelev1">&gt; jus_at_cusp:~/Code/Spielwiese/Mpi&gt; lamnodes
</span><br>
<span class="quotelev1">&gt; n0      cusp:1:origin,this_node
</span><br>
<span class="quotelev1">&gt; n1      neutrino.stat.physik.uni-potsdam.de:1:
</span><br>
<span class="quotelev1">&gt; jus_at_cusp:~/Code/Spielwiese/Mpi&gt; mpirun -np 2 hello.x
</span><br>
<span class="quotelev1">&gt; Process 0 on cusp out of 2
</span><br>
<span class="quotelev1">&gt; Process 1 on cusp out of 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The jobs are thus wrapped only on the node &quot;cusp&quot;, not on both. I  
</span><br>
<span class="quotelev1">&gt; have no clue why this is.
</span><br>
<span class="quotelev1">&gt; Thanks, Justus
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Psst! Geheimtipp: Online Games kostenlos spielen bei den GMX Free  
</span><br>
<span class="quotelev1">&gt; Games!
</span><br>
<span class="quotelev1">&gt; <a href="http://games.entertainment.gmx.net/de/entertainment/games/free">http://games.entertainment.gmx.net/de/entertainment/games/free</a>
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Previous message:</strong> <a href="5158.php">Brock Palen: "Re: [OMPI users] eager limits?"</a>
<li><strong>In reply to:</strong> <a href="5157.php">Justus Schwabedal: "[OMPI users] Problem: openmpi using lam"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Reply:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
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
