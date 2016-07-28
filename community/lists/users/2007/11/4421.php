<?
$subject_val = "Re: [OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 22:11:29 2007" -->
<!-- isoreceived="20071107031129" -->
<!-- sent="Tue, 6 Nov 2007 22:10:52 -0500" -->
<!-- isosent="20071107031052" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)" -->
<!-- id="6B292BA9-9A21-4179-A73C-62066FA5190D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="897c4ba20711020802t76e73d37s1fbaa7c4fbc2eec4_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-11-06 22:10:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4422.php">Gleb Natapov: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>Previous message:</strong> <a href="4420.php">Jeff Squyres: "Re: [OMPI users] Slightly OT: mpi job terminates"</a>
<li><strong>In reply to:</strong> <a href="4390.php">himanshu khandelia: "[OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 2, 2007, at 11:02 AM, himanshu khandelia wrote:
<br>
<p><span class="quotelev1">&gt; This question is about the use of a simulation package called GROMACS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: On our cluster (quad-core nodes), GROMACS does not scale well
</span><br>
<span class="quotelev1">&gt; beyond 4 cpus. So, I wish to run two different simulations, while
</span><br>
<span class="quotelev1">&gt; requesting 2 nodes (1 simulation on each node) to best exploit the
</span><br>
<span class="quotelev1">&gt; policies of our MAUI scheduler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I am requesting 2 4-cpu nodes on a cluster using PBS. I want to
</span><br>
<span class="quotelev1">&gt; run a separate simulation on each 4-cpu node. However, on 2 nodes, the
</span><br>
<span class="quotelev1">&gt; speed for each simulation decreases (50 to 100%) if compared to a
</span><br>
<span class="quotelev1">&gt; simulation which runs in a job which requests only one node. I am
</span><br>
<span class="quotelev1">&gt; guessing this is because openmpi fails to assign all cpus of the same
</span><br>
<span class="quotelev1">&gt; node to one simulation ? Instead, cpus from different nodes are being
</span><br>
<span class="quotelev1">&gt; used to run simulation. This is what I have in the PBS script
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.
</span><br>
<span class="quotelev1">&gt; ########
</span><br>
<span class="quotelev1">&gt; mpirun -np 4  my-gromacs-executable-for-simulation-1 -np 4  &amp;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4  my-gromacs-executable-for-simulation-1-np 4  &amp;
</span><br>
<p>In this case, Open MPI does not realize that you have executed 2  
<br>
mpiruns and therefore assigns both the first and second job to the  
<br>
same 4 processors.  Hence, they run at half speed (or slower) because  
<br>
they're competing for the same CPUs.
<br>
<p><span class="quotelev1">&gt; # (THE GROMACS EXECUTABLE DOES REQUIRE A REPEAT REQUEST FOR THE NUMBER
</span><br>
<span class="quotelev1">&gt; OF PROCESSORS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; wait
</span><br>
<span class="quotelev1">&gt; ########
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OPENMPI does have a mechanism whereby one can assign specific
</span><br>
<span class="quotelev1">&gt; processes to specific nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I also tried all of the following in the PBS script where the
</span><br>
<span class="quotelev1">&gt; --bynode or the --byslot option is used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.
</span><br>
<span class="quotelev1">&gt; ########
</span><br>
<span class="quotelev1">&gt; mpirun -np 4  --bynode my-gromacs-executable-for-simulation-1  -np 4 &amp;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4  --bynode my-gromacs-executable-for-simulation-2  -np 4 &amp;
</span><br>
<span class="quotelev1">&gt; wait
</span><br>
<span class="quotelev1">&gt; ########
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3.
</span><br>
<span class="quotelev1">&gt; ########
</span><br>
<span class="quotelev1">&gt; mpirun -np 4  --byslot  my-gromacs-executable-for-simulation-1 -np 4 &amp;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4  --byslot  my-gromacs-executable-for-simulation-2 -np 4 &amp;
</span><br>
<span class="quotelev1">&gt; wait
</span><br>
<span class="quotelev1">&gt; ########
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But these methods also result in similar performance losses.
</span><br>
<p>The same thing will happen here -- OMPI is unaware of the 2 mpiruns,  
<br>
and therefore schedules on the same first 4 nodes or slots.
<br>
<p>It sounds like you really want to run two torque jobs, not one.  Is  
<br>
there a reason you're not doing that?
<br>
<p>Failing that, you could do an end-run around the Open MPI torque  
<br>
support and use the rsh launcher to precisely control where you launch  
<br>
jobs, but that's a bunch of trouble and not really how we intended the  
<br>
system to be used.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So how does one assign the cpus properly using mpirun if running
</span><br>
<span class="quotelev1">&gt; different simulations in the same PBS job  ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Himanshu
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
<li><strong>Next message:</strong> <a href="4422.php">Gleb Natapov: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>Previous message:</strong> <a href="4420.php">Jeff Squyres: "Re: [OMPI users] Slightly OT: mpi job terminates"</a>
<li><strong>In reply to:</strong> <a href="4390.php">himanshu khandelia: "[OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)"</a>
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
