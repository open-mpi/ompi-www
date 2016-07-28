<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 15 05:38:34 2006" -->
<!-- isoreceived="20060215103834" -->
<!-- sent="Wed, 15 Feb 2006 11:38:48 +0100" -->
<!-- isosent="20060215103848" -->
<!-- name="Andy Vierstraete" -->
<!-- email="andy.vierstraete_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running Migrate with open-MPI" -->
<!-- id="43F304B8.6050505_at_ugent.be" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="11DF70E6-BD48-4242-83A6-FE779E9C93F2_at_open-mpi.org" -->
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
<strong>From:</strong> Andy Vierstraete (<em>andy.vierstraete_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-15 05:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0666.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0664.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="0662.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0666.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0666.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>the problem is solved, I installed openmpi-1.1a1r9045, and now it works.
<br>
<p>Thanks,
<br>
<p>Andy
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;Ok, we've finally migrated over all the I/O forwarding fixes to the  
</span><br>
<span class="quotelev1">&gt;v1.0 branch.  They've been on the trunk for a little while, but we  
</span><br>
<span class="quotelev1">&gt;have certain procedures that have to be followed to get things  
</span><br>
<span class="quotelev1">&gt;committed on the release branch and it took a little time -- sorry  
</span><br>
<span class="quotelev1">&gt;about that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can you try a nightly tarball from tonight -- either the trunk or a  
</span><br>
<span class="quotelev1">&gt;v1.0 tarball and let us know how it goes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 13, 2006, at 9:46 AM, Andy Vierstraete wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hi Peter,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I tried first with 2 nodes, but is was the same problem, it hang.   
</span><br>
<span class="quotelev2">&gt;&gt;Then I tried with 1 node, and copied that output in my previous  
</span><br>
<span class="quotelev2">&gt;&gt;mail.  When I checked the process status (with 2 nodes), one of the  
</span><br>
<span class="quotelev2">&gt;&gt;migrate processes was using 100 %, the other was sleeping.  But  
</span><br>
<span class="quotelev2">&gt;&gt;after 15 minutes, still no output change.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Andy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Peter Beerli wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Dear Andy, you wrote that with openmpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;avierstr_at_muscorum:~&gt; mpiexec --hostfile hostfile -np 1 migrate-n
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;it does not work, but with lam-mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;avierstr_at_muscorum:~/thomas&gt; mpiexec -np 2 migrate-n
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;you started openmpi on only _one_ node, migrate needs at least  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_two_ nodes to run (as you did in lam-mpi) migrate actually aborts  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;when running on only one node, it should show an error message so,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;like this  zork&gt;which mpirun /usr/local/openmpi/bin/mpirun  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;zork&gt;mpirun -machinefile ~/onehost -np 1 migrate-n migrate-n  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;============================================= MIGRATION RATE AND  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;POPULATION SIZE ESTIMATION using Markov Chain Monte Carlo  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;simulation ============================================= compiled  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;for a PARALLEL COMPUTER ARCHITECTURE Version debug 2.1.3 [x]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Program started at Mon Feb 13 09:03:45 2006 Reading N ... Reading  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;S ... In file main.c on line 697 This program was compiled to use  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;a parallel computer and you tried to run it on only a single node.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;This will not work because it uses a &quot;single_master-many_worker&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;architecture and needs at least TWO nodes Peter  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________ users mailing list  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;--  
</span><br>
<span class="quotelev2">&gt;&gt;*********************************************************************  
</span><br>
<span class="quotelev2">&gt;&gt;* Youth is a wonderful thing. What a crime to waste it on children.  
</span><br>
<span class="quotelev2">&gt;&gt;* * (George Bernard Shaw) *  
</span><br>
<span class="quotelev2">&gt;&gt;*********************************************************************  
</span><br>
<span class="quotelev2">&gt;&gt;Andy Vierstraete Department of Biology University of Ghent K. L.  
</span><br>
<span class="quotelev2">&gt;&gt;Ledeganckstraat 35 B-9000 Gent Belgium phone : 09-264.52.66 fax :  
</span><br>
<span class="quotelev2">&gt;&gt;09-264.87.93 <a href="http://allserv.UGent.be/~avierstr/">http://allserv.UGent.be/~avierstr/</a>
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
*********************************************************************
* Youth is a wonderful thing. What a crime to waste it on children. *
*                                             (George Bernard Shaw) *
*********************************************************************
Andy Vierstraete
Department of Biology
University of Ghent
K. L. Ledeganckstraat 35
B-9000 Gent
Belgium
phone : 09-264.52.66
fax : 09-264.87.93
<a href="http://allserv.UGent.be/~avierstr/">http://allserv.UGent.be/~avierstr/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0665/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0666.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0664.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="0662.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0666.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0666.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
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
