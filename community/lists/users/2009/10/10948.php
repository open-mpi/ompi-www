<?
$subject_val = "[OMPI users] torque integration when tm ras/plm isn't compiled in.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 18:30:04 2009" -->
<!-- isoreceived="20091022223004" -->
<!-- sent="Fri, 23 Oct 2009 00:29:57 +0200" -->
<!-- isosent="20091022222957" -->
<!-- name="Roy Dragseth" -->
<!-- email="roy.dragseth_at_[hidden]" -->
<!-- subject="[OMPI users] torque integration when tm ras/plm isn't compiled in." -->
<!-- id="200910230029.57286.roy.dragseth_at_uit.no" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] torque integration when tm ras/plm isn't compiled in.<br>
<strong>From:</strong> Roy Dragseth (<em>roy.dragseth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 18:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10949.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Previous message:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batchsystem integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10949.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Reply:</strong> <a href="10949.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all.
<br>
<p>I'm trying to create a tight integration between torque and openmpi for cases 
<br>
where  the tm ras and plm isn't compiled into openmpi.  This scenario is 
<br>
common for linux distros that ship openmpi.  Of course the ideal solution is 
<br>
to recompile openmpi with torque support, but this isn't always feasible since 
<br>
I do not want to support my own version of openmpi on the stuff I'm 
<br>
distributing to others.
<br>
<p>We also see some proprietary applications shipping their own embedded openmpi 
<br>
libraries where either tm plm/ras is missing or non-functional with the torque 
<br>
installation on our system.
<br>
<p>So, I've come so far as to create a pbsdshwrapper.py that mimics ssh behaviour 
<br>
very closely so that starting the orteds on all the hosts works as expected 
<br>
and the application starts correctly when I use
<br>
<p>setenv OMPI_MCA_plm_rsh_agent &quot;pbsdshwrapper.py&quot;
<br>
mpirun --hostfile $PBS_NODEFILE ........
<br>
<p>What I want now is a way to get rid of the --hostfile $PBS_NODEFILE in the 
<br>
mpirun command.  Is there an environment variable that I can set so that 
<br>
mpirun grabs the right nodelist?
<br>
<p>By spelunking the code I find that the rsh plm has support for SGE where it 
<br>
automatically picks up the PE_NODEFILE if it detects that it is launched 
<br>
within an SGE job.  Would it be possible to have the same functionality for 
<br>
torque?  The code looks a bit too complex at first sight for me to fix this 
<br>
myself.
<br>
<p>Best regards,
<br>
Roy.
<br>
<p><pre>
-- 
  The Computer Center, University of Troms&#248;, N-9037 TROMS&#216; Norway.
              phone:+47 77 64 41 07, fax:+47 77 64 41 00
     Roy Dragseth, Team Leader, High Performance Computing
         Direct call: +47 77 64 62 56. email: roy.dragseth_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10949.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Previous message:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batchsystem integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10949.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Reply:</strong> <a href="10949.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
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
