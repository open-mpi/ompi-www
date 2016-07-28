<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 14 17:43:14 2006" -->
<!-- isoreceived="20060214224314" -->
<!-- sent="Tue, 14 Feb 2006 17:43:03 -0500" -->
<!-- isosent="20060214224303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running Migrate with open-MPI" -->
<!-- id="11DF70E6-BD48-4242-83A6-FE779E9C93F2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43F09BCF.5050502_at_ugent.be" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-14 17:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0663.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0661.php">Zhao, Yongsheng: "[OMPI users] Dynamic process question"</a>
<li><strong>In reply to:</strong> <a href="0651.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0665.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0665.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, we've finally migrated over all the I/O forwarding fixes to the  
<br>
v1.0 branch.  They've been on the trunk for a little while, but we  
<br>
have certain procedures that have to be followed to get things  
<br>
committed on the release branch and it took a little time -- sorry  
<br>
about that.
<br>
<p>Can you try a nightly tarball from tonight -- either the trunk or a  
<br>
v1.0 tarball and let us know how it goes?
<br>
<p><p>On Feb 13, 2006, at 9:46 AM, Andy Vierstraete wrote:
<br>
<p><span class="quotelev1">&gt; Hi Peter,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried first with 2 nodes, but is was the same problem, it hang.   
</span><br>
<span class="quotelev1">&gt; Then I tried with 1 node, and copied that output in my previous  
</span><br>
<span class="quotelev1">&gt; mail.  When I checked the process status (with 2 nodes), one of the  
</span><br>
<span class="quotelev1">&gt; migrate processes was using 100 %, the other was sleeping.  But  
</span><br>
<span class="quotelev1">&gt; after 15 minutes, still no output change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter Beerli wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Andy, you wrote that with openmpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; avierstr_at_muscorum:~&gt; mpiexec --hostfile hostfile -np 1 migrate-n
</span><br>
<span class="quotelev2">&gt;&gt; it does not work, but with lam-mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; avierstr_at_muscorum:~/thomas&gt; mpiexec -np 2 migrate-n
</span><br>
<span class="quotelev2">&gt;&gt; you started openmpi on only _one_ node, migrate needs at least  
</span><br>
<span class="quotelev2">&gt;&gt; _two_ nodes to run (as you did in lam-mpi) migrate actually aborts  
</span><br>
<span class="quotelev2">&gt;&gt; when running on only one node, it should show an error message so,  
</span><br>
<span class="quotelev2">&gt;&gt; like this  zork&gt;which mpirun /usr/local/openmpi/bin/mpirun  
</span><br>
<span class="quotelev2">&gt;&gt; zork&gt;mpirun -machinefile ~/onehost -np 1 migrate-n migrate-n  
</span><br>
<span class="quotelev2">&gt;&gt; ============================================= MIGRATION RATE AND  
</span><br>
<span class="quotelev2">&gt;&gt; POPULATION SIZE ESTIMATION using Markov Chain Monte Carlo  
</span><br>
<span class="quotelev2">&gt;&gt; simulation ============================================= compiled  
</span><br>
<span class="quotelev2">&gt;&gt; for a PARALLEL COMPUTER ARCHITECTURE Version debug 2.1.3 [x]  
</span><br>
<span class="quotelev2">&gt;&gt; Program started at Mon Feb 13 09:03:45 2006 Reading N ... Reading  
</span><br>
<span class="quotelev2">&gt;&gt; S ... In file main.c on line 697 This program was compiled to use  
</span><br>
<span class="quotelev2">&gt;&gt; a parallel computer and you tried to run it on only a single node.  
</span><br>
<span class="quotelev2">&gt;&gt; This will not work because it uses a &quot;single_master-many_worker&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; architecture and needs at least TWO nodes Peter  
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list  
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --  
</span><br>
<span class="quotelev1">&gt; *********************************************************************  
</span><br>
<span class="quotelev1">&gt; * Youth is a wonderful thing. What a crime to waste it on children.  
</span><br>
<span class="quotelev1">&gt; * * (George Bernard Shaw) *  
</span><br>
<span class="quotelev1">&gt; *********************************************************************  
</span><br>
<span class="quotelev1">&gt; Andy Vierstraete Department of Biology University of Ghent K. L.  
</span><br>
<span class="quotelev1">&gt; Ledeganckstraat 35 B-9000 Gent Belgium phone : 09-264.52.66 fax :  
</span><br>
<span class="quotelev1">&gt; 09-264.87.93 <a href="http://allserv.UGent.be/~avierstr/">http://allserv.UGent.be/~avierstr/</a>
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0663.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0661.php">Zhao, Yongsheng: "[OMPI users] Dynamic process question"</a>
<li><strong>In reply to:</strong> <a href="0651.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0665.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0665.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
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
