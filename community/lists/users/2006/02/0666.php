<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 15 08:03:38 2006" -->
<!-- isoreceived="20060215130338" -->
<!-- sent="Wed, 15 Feb 2006 08:03:31 -0500" -->
<!-- isosent="20060215130331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running Migrate with open-MPI" -->
<!-- id="71FBE0BD-D3F7-4FA5-89B3-82968816F3C0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43F304B8.6050505_at_ugent.be" -->
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
<strong>Date:</strong> 2006-02-15 08:03:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0667.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<li><strong>Previous message:</strong> <a href="0665.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0665.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0634.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great!
<br>
<p>Let us know if you have any further problems.
<br>
<p>On Feb 15, 2006, at 5:38 AM, Andy Vierstraete wrote:
<br>
<p><span class="quotelev1">&gt; Hello Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the problem is solved, I installed openmpi-1.1a1r9045, and now it  
</span><br>
<span class="quotelev1">&gt; works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ok, we've finally migrated over all the I/O forwarding fixes to  
</span><br>
<span class="quotelev2">&gt;&gt; the v1.0 branch. They've been on the trunk for a little while, but  
</span><br>
<span class="quotelev2">&gt;&gt; we have certain procedures that have to be followed to get things  
</span><br>
<span class="quotelev2">&gt;&gt; committed on the release branch and it took a little time -- sorry  
</span><br>
<span class="quotelev2">&gt;&gt; about that. Can you try a nightly tarball from tonight -- either  
</span><br>
<span class="quotelev2">&gt;&gt; the trunk or a v1.0 tarball and let us know how it goes? On Feb  
</span><br>
<span class="quotelev2">&gt;&gt; 13, 2006, at 9:46 AM, Andy Vierstraete wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Peter, I tried first with 2 nodes, but is was the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem, it hang. Then I tried with 1 node, and copied that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output in my previous mail. When I checked the process status  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (with 2 nodes), one of the migrate processes was using 100 %, the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other was sleeping. But after 15 minutes, still no output change.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andy Peter Beerli wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Andy, you wrote that with openmpi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; avierstr_at_muscorum:~&gt; mpiexec --hostfile hostfile -np 1 migrate-n
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it does not work, but with lam-mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; avierstr_at_muscorum:~/thomas&gt; mpiexec -np 2 migrate-n
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you started openmpi on only _one_ node, migrate needs at least  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _two_ nodes to run (as you did in lam-mpi) migrate actually  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; aborts when running on only one node, it should show an error  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message so, like this zork&gt;which mpirun /usr/local/openmpi/bin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun zork&gt;mpirun -machinefile ~/onehost -np 1 migrate-n  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; migrate-n =============================================  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MIGRATION RATE AND POPULATION SIZE ESTIMATION using Markov Chain  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Monte Carlo simulation  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ============================================= compiled for a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PARALLEL COMPUTER ARCHITECTURE Version debug 2.1.3 [x] Program  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; started at Mon Feb 13 09:03:45 2006 Reading N ... Reading S ...  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In file main.c on line 697 This program was compiled to use a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parallel computer and you tried to run it on only a single node.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This will not work because it uses a &quot;single_master-many_worker&quot;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; architecture and needs at least TWO nodes Peter  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ users mailing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/">http://www.open-mpi.org/mailman/</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; listinfo.cgi/users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ******************************************************************** 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * * Youth is a wonderful thing. What a crime to waste it on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; children. * * (George Bernard Shaw) *  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ******************************************************************** 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Andy Vierstraete Department of Biology University of Ghent K.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L. Ledeganckstraat 35 B-9000 Gent Belgium phone : 09-264.52.66  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fax : 09-264.87.93 <a href="http://allserv.UGent.be/~avierstr/">http://allserv.UGent.be/~avierstr/</a>  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ users mailing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/">http://www.open-mpi.org/mailman/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listinfo.cgi/users
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
<li><strong>Next message:</strong> <a href="0667.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<li><strong>Previous message:</strong> <a href="0665.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0665.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0634.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
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
