<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 11:57:05 2007" -->
<!-- isoreceived="20070719155705" -->
<!-- sent="Thu, 19 Jul 2007 09:56:56 -0600" -->
<!-- isosent="20070719155656" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI start up problems" -->
<!-- id="C2C4E5E8.A12B%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="383416.59347.qm_at_web57712.mail.re3.yahoo.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 11:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3727.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3725.php">Konstantin Kudin: "[OMPI users] OpenMPI start up problems"</a>
<li><strong>In reply to:</strong> <a href="3725.php">Konstantin Kudin: "[OMPI users] OpenMPI start up problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I gather you are running under TM since you have a PBS_NODEFILE? If so, in
<br>
1.2 we setup to read that file directly - you cannot specify it on the
<br>
command line.
<br>
<p>We will fix this in 1.3 so you can do both, but for now - under TM - you
<br>
have to leave that &quot;-machinefile $PBS_NODEFILE&quot; off of the command line.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p><p>On 7/19/07 9:27 AM, &quot;Konstantin Kudin&quot; &lt;konstantin_kudin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I've run across a somewhat difficult code for OpenMPI to handle
</span><br>
<span class="quotelev1">&gt; (CPMD).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Here is the report on the versions I tried:
</span><br>
<span class="quotelev1">&gt;  1.1.4 - mostly does not start
</span><br>
<span class="quotelev1">&gt;  1.1.5 - works
</span><br>
<span class="quotelev1">&gt;  1.2.3 - does not start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The machine has dual Opterons, with Gigabit. The running command with
</span><br>
<span class="quotelev1">&gt; 4x2 cpus is:
</span><br>
<span class="quotelev1">&gt; mpirun -np $np -machinefile $PBS_NODEFILE \
</span><br>
<span class="quotelev1">&gt; -mca coll self,basic,tuned -mca  \
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone 1  -mca coll_basic_crossover 4 \
</span><br>
<span class="quotelev1">&gt; $HOME/cpmd/cpmd.x_o $1 &gt;&gt; $2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, onto specific errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.1.4 :
</span><br>
<span class="quotelev1">&gt; occasionally starts, occasionally gives the error:
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.1.5 :
</span><br>
<span class="quotelev1">&gt; works fine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.2.3 :
</span><br>
<span class="quotelev1">&gt; [node041:04866] pls:tm: failed to poll for a spawned proc, return
</span><br>
<span class="quotelev1">&gt; status = 17002
</span><br>
<span class="quotelev1">&gt; [node041:04866] [0,0,0] ORTE_ERROR_LOG: In errno in file rmgr_urm.c at
</span><br>
<span class="quotelev1">&gt; line 462
</span><br>
<span class="quotelev1">&gt; [node041:04866] mpirun: spawn failed with errno=-11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Kostya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; ______
</span><br>
<span class="quotelev1">&gt; Building a website is a piece of cake. Yahoo! Small Business gives you all the
</span><br>
<span class="quotelev1">&gt; tools to get online.
</span><br>
<span class="quotelev1">&gt; <a href="http://smallbusiness.yahoo.com/webhosting">http://smallbusiness.yahoo.com/webhosting</a>
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
<li><strong>Next message:</strong> <a href="3727.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3725.php">Konstantin Kudin: "[OMPI users] OpenMPI start up problems"</a>
<li><strong>In reply to:</strong> <a href="3725.php">Konstantin Kudin: "[OMPI users] OpenMPI start up problems"</a>
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
