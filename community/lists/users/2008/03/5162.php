<?
$subject_val = "Re: [OMPI users] Problem: openmpi using lam";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  9 17:10:19 2008" -->
<!-- isoreceived="20080309211019" -->
<!-- sent="Sun, 9 Mar 2008 17:09:55 -0400" -->
<!-- isosent="20080309210955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem: openmpi using lam" -->
<!-- id="51DA83E7-674B-40AD-BCE0-887395AE7605_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-09 17:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5163.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Previous message:</strong> <a href="5161.php">Reuti: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>In reply to:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 8, 2008, at 6:26 AM, Justus Schwabedal wrote:
<br>
<p><span class="quotelev1">&gt; I thought LAM/MPI is being merged into openmpi. I think, Im not sure  
</span><br>
<span class="quotelev1">&gt; how the implementations are related.
</span><br>
<p>Think of LAM/MPI as one of the predecessors to Open MPI (several MPI  
<br>
projects, including LAM/MPI, merged to create the new Open MPI).  So  
<br>
some of the ideas and code were taken from LAM, but not everything.
<br>
<p><span class="quotelev1">&gt; I think lam is just a runtime for which now openmpi delivers some  
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<p>Not really.  We originally created a new run-time (ORTE) for Open MPI  
<br>
that uses some of the ideas from LAM (and others), and a bunch of new/ 
<br>
original work.  These days, I would only consider ORTE to be distantly  
<br>
related to LAM.
<br>
<p><span class="quotelev1">&gt; If not so, I dont understand. However orte is another runtime right?  
</span><br>
<span class="quotelev1">&gt; I thought I can switch between those using something like mpi- 
</span><br>
<span class="quotelev1">&gt; selector-menu.
</span><br>
<p>mpi-selector-menu is a utility that I wrote for the OFED (OpenFabrics  
<br>
Enterprise Distribution) distribution.  It allows you to switch  
<br>
between the different MPI implementations installed by OFED without  
<br>
requiring the user to edit their shell startup files (e.g., .bashrc).   
<br>
I know that the Cisco OFED distribution includes documentation on mpi- 
<br>
selector-menu (available from cisco.com), and there's a man page  
<br>
installed on mpi-selector-menu as well (and mpi-selector, the script  
<br>
that does the work behind mpi-selector-menu).
<br>
<p>Cisco's OFED ships with 9 different MPI implementation: Open MPI,  
<br>
MVAPICH, MVAPICH2.  Each of those are compiled against the GNU  
<br>
compilers, intel compilers, and PGI compilers.  mpi-selector-menu  
<br>
allows you to switch between these 9.
<br>
<p><span class="quotelev1">&gt; I think Im lost. How can I use openmpi to run a distributed system  
</span><br>
<span class="quotelev1">&gt; efficiently? I dont want to fall back on old LAM/MPI since I want to  
</span><br>
<span class="quotelev1">&gt; be modern :o)
</span><br>
<span class="quotelev1">&gt; Yours, J
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------- Original-Nachricht --------
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5163.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Previous message:</strong> <a href="5161.php">Reuti: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>In reply to:</strong> <a href="5160.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
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
