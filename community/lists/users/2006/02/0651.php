<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 13 09:46:29 2006" -->
<!-- isoreceived="20060213144629" -->
<!-- sent="Mon, 13 Feb 2006 15:46:39 +0100" -->
<!-- isosent="20060213144639" -->
<!-- name="Andy Vierstraete" -->
<!-- email="andy.vierstraete_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running Migrate with open-MPI" -->
<!-- id="43F09BCF.5050502_at_ugent.be" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="64DB9BE8-15AF-4DA0-A7BF-232DE6A7BB1C_at_scs.fsu.edu" -->
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
<strong>Date:</strong> 2006-02-13 09:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0652.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Peter Beerli: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0650.php">Peter Beerli: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0662.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0662.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Peter,
<br>
<p>I tried first with 2 nodes, but is was the same problem, it hang.  Then 
<br>
I tried with 1 node, and copied that output in my previous mail.  When I 
<br>
checked the process status (with 2 nodes), one of the migrate processes 
<br>
was using 100 %, the other was sleeping.  But after 15 minutes, still no 
<br>
output change.
<br>
<p>Andy
<br>
<p>Peter Beerli wrote:
<br>
<p><span class="quotelev1">&gt;Dear Andy,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;you wrote that with openmpi:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;avierstr_at_muscorum:~&gt; mpiexec --hostfile hostfile -np 1  migrate-n
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;it does not work, but with lam-mpi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;avierstr_at_muscorum:~/thomas&gt; mpiexec -np 2  migrate-n
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;you started openmpi on only _one_ node, migrate needs at least _two_  
</span><br>
<span class="quotelev1">&gt;nodes to run
</span><br>
<span class="quotelev1">&gt;(as you did in lam-mpi)
</span><br>
<span class="quotelev1">&gt;migrate actually aborts when running on only one node, it should show  
</span><br>
<span class="quotelev1">&gt;an error message so, like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;zork&gt;which mpirun
</span><br>
<span class="quotelev1">&gt;/usr/local/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt;zork&gt;mpirun -machinefile ~/onehost -np 1 migrate-n
</span><br>
<span class="quotelev1">&gt;migrate-n
</span><br>
<span class="quotelev1">&gt;   =============================================
</span><br>
<span class="quotelev1">&gt;   MIGRATION RATE AND POPULATION SIZE ESTIMATION
</span><br>
<span class="quotelev1">&gt;   using Markov Chain Monte Carlo simulation
</span><br>
<span class="quotelev1">&gt;   =============================================
</span><br>
<span class="quotelev1">&gt;   compiled for a PARALLEL COMPUTER ARCHITECTURE
</span><br>
<span class="quotelev1">&gt;   Version debug 2.1.3   [x]
</span><br>
<span class="quotelev1">&gt;   Program started at   Mon Feb 13 09:03:45 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Reading N ...
</span><br>
<span class="quotelev1">&gt;Reading S ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In file main.c on line 697
</span><br>
<span class="quotelev1">&gt;This program was compiled to use a parallel computer
</span><br>
<span class="quotelev1">&gt;and you tried to run it on only a single node.
</span><br>
<span class="quotelev1">&gt;This will not work because it uses a
</span><br>
<span class="quotelev1">&gt;&quot;single_master-many_worker&quot; architecture
</span><br>
<span class="quotelev1">&gt;and needs at least TWO nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0652.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Peter Beerli: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0650.php">Peter Beerli: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0662.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0662.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
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
