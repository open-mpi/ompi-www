<?
$subject_val = "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 18:50:11 2009" -->
<!-- isoreceived="20091022225011" -->
<!-- sent="Thu, 22 Oct 2009 16:50:00 -0600" -->
<!-- isosent="20091022225000" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque integration when tm ras/plm isn't compiled in." -->
<!-- id="B33CDC8C-B1BD-4F3D-8987-A713D618BC31_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200910230029.57286.roy.dragseth_at_uit.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque integration when tm ras/plm isn't compiled in.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 18:50:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10950.php">Roy Dragseth: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Previous message:</strong> <a href="10948.php">Roy Dragseth: "[OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>In reply to:</strong> <a href="10948.php">Roy Dragseth: "[OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10950.php">Roy Dragseth: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Reply:</strong> <a href="10950.php">Roy Dragseth: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why not just
<br>
<p>setenv OMPI_MCA_orte_default_hostfile $PBS_NODEFILE
<br>
<p>assuming you are using 1.3.x, of course.
<br>
<p>If not, then you can use the equivalent for 1.2 - ompi_info would tell  
<br>
you the name of it.
<br>
<p><p>On Oct 22, 2009, at 4:29 PM, Roy Dragseth wrote:
<br>
<p><span class="quotelev1">&gt; Hi all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to create a tight integration between torque and openmpi  
</span><br>
<span class="quotelev1">&gt; for cases
</span><br>
<span class="quotelev1">&gt; where  the tm ras and plm isn't compiled into openmpi.  This  
</span><br>
<span class="quotelev1">&gt; scenario is
</span><br>
<span class="quotelev1">&gt; common for linux distros that ship openmpi.  Of course the ideal  
</span><br>
<span class="quotelev1">&gt; solution is
</span><br>
<span class="quotelev1">&gt; to recompile openmpi with torque support, but this isn't always  
</span><br>
<span class="quotelev1">&gt; feasible since
</span><br>
<span class="quotelev1">&gt; I do not want to support my own version of openmpi on the stuff I'm
</span><br>
<span class="quotelev1">&gt; distributing to others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We also see some proprietary applications shipping their own  
</span><br>
<span class="quotelev1">&gt; embedded openmpi
</span><br>
<span class="quotelev1">&gt; libraries where either tm plm/ras is missing or non-functional with  
</span><br>
<span class="quotelev1">&gt; the torque
</span><br>
<span class="quotelev1">&gt; installation on our system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I've come so far as to create a pbsdshwrapper.py that mimics ssh  
</span><br>
<span class="quotelev1">&gt; behaviour
</span><br>
<span class="quotelev1">&gt; very closely so that starting the orteds on all the hosts works as  
</span><br>
<span class="quotelev1">&gt; expected
</span><br>
<span class="quotelev1">&gt; and the application starts correctly when I use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv OMPI_MCA_plm_rsh_agent &quot;pbsdshwrapper.py&quot;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile $PBS_NODEFILE ........
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I want now is a way to get rid of the --hostfile $PBS_NODEFILE  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; mpirun command.  Is there an environment variable that I can set so  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; mpirun grabs the right nodelist?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By spelunking the code I find that the rsh plm has support for SGE  
</span><br>
<span class="quotelev1">&gt; where it
</span><br>
<span class="quotelev1">&gt; automatically picks up the PE_NODEFILE if it detects that it is  
</span><br>
<span class="quotelev1">&gt; launched
</span><br>
<span class="quotelev1">&gt; within an SGE job.  Would it be possible to have the same  
</span><br>
<span class="quotelev1">&gt; functionality for
</span><br>
<span class="quotelev1">&gt; torque?  The code looks a bit too complex at first sight for me to  
</span><br>
<span class="quotelev1">&gt; fix this
</span><br>
<span class="quotelev1">&gt; myself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Roy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  The Computer Center, University of Troms&#248;, N-9037 TROMS&#216; Norway.
</span><br>
<span class="quotelev1">&gt;              phone:+47 77 64 41 07, fax:+47 77 64 41 00
</span><br>
<span class="quotelev1">&gt;     Roy Dragseth, Team Leader, High Performance Computing
</span><br>
<span class="quotelev1">&gt;         Direct call: +47 77 64 62 56. email: roy.dragseth_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="10950.php">Roy Dragseth: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Previous message:</strong> <a href="10948.php">Roy Dragseth: "[OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>In reply to:</strong> <a href="10948.php">Roy Dragseth: "[OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10950.php">Roy Dragseth: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Reply:</strong> <a href="10950.php">Roy Dragseth: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
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
