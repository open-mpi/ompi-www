<?
$subject_val = "Re: [OMPI users] ompi-checkpoint is hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 12:20:58 2008" -->
<!-- isoreceived="20081031162058" -->
<!-- sent="Fri, 31 Oct 2008 12:20:54 -0400" -->
<!-- isosent="20081031162054" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-checkpoint is hanging" -->
<!-- id="E851F1E8-111B-4460-AF9D-ABCB73EAC9AC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="490B1B5D.5080100_at_cs.tu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-checkpoint is hanging<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 12:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7162.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Previous message:</strong> <a href="7160.php">Rajesh Ramaya: "[OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7156.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7162.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Reply:</strong> <a href="7162.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After some additional testing I believe that I have been able to  
<br>
reproduce the problem. I suspect that there is a bug in the  
<br>
coordination protocol that is causing an occasional hang in the  
<br>
system. Since it only happens occasionally (though slightly more often  
<br>
on a fully loaded machine) that is probably how I missed it in my  
<br>
testing.
<br>
<p>I'll work on a patch, and let you know when it is ready. Unfortunately  
<br>
it probably won't be for a couple weeks. :(
<br>
<p>You can increase the verbose level for all of the fault tolerance  
<br>
frameworks and components through MCA parameters. They are referenced  
<br>
in the FT C/R User Doc on the Open MPI wiki, and you can access them  
<br>
through 'ompi-info'. You will look for the following frameworks/ 
<br>
components:
<br>
&nbsp;&nbsp;- crs/blcr
<br>
&nbsp;&nbsp;- snapc/full
<br>
&nbsp;&nbsp;- crcp/bkmrk
<br>
&nbsp;&nbsp;- opal_cr_verbose
<br>
&nbsp;&nbsp;- orte_cr_verbose
<br>
&nbsp;&nbsp;- ompi_cr_verbose
<br>
<p>Thanks for the bug report. I filed a ticket in our bug tracker, and  
<br>
CC'ed you on it. The ticket is:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/ompi/ticket/1619">http://svn.open-mpi.org/trac/ompi/ticket/1619</a>
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Oct 31, 2008, at 10:51 AM, Matthias Hovestadt wrote:
<br>
<p><span class="quotelev1">&gt; Hi Tim!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all: thanks a lot for answering! :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you try running your two MPI jobs with fewer procs each,
</span><br>
<span class="quotelev2">&gt;&gt; say 2 or 3 each instead of 4, so that there are a few extra cores  
</span><br>
<span class="quotelev2">&gt;&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem occurrs with any number of procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, what happens to the checkpointing of one MPI job if you kill  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; other MPI job
</span><br>
<span class="quotelev2">&gt;&gt; after the first &quot;hangs&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nothing, it keeps hanging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; (It may not be a true hang, but very very slow progress that you
</span><br>
<span class="quotelev2">&gt; &gt; are observing.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I already waited for more than 12 hours, but the ompi-checkpoint
</span><br>
<span class="quotelev1">&gt; did not return. So if it's slow, it must be very slow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I continued testing and just observed a case where the problem
</span><br>
<span class="quotelev1">&gt; occurred with only one job running on the compute node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ ps auxww | grep mpirun | grep -v grep
</span><br>
<span class="quotelev1">&gt; ccs       7706  0.4  0.2  63864  2640 ?        S    15:35   0:00  
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 -am ft-enable-cr -np 6 /home/ccs/XN-OMPI/testdrive/ 
</span><br>
<span class="quotelev1">&gt; loop-1/remotedir/mpi-x-povray +I planet.pov -w1600 -h1200 +SP1 +O  
</span><br>
<span class="quotelev1">&gt; planet.tga
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The resource management system tried to checkpoint this job using the
</span><br>
<span class="quotelev1">&gt; command &quot;ompi-checkpoint -v --term 7706&quot;. This is the output of that
</span><br>
<span class="quotelev1">&gt; command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178]     PID 7706
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178]     Connected to Mpirun  
</span><br>
<span class="quotelev1">&gt; [[3623,0],0]
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178]     Terminating after checkpoint
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: notify_hnp:  
</span><br>
<span class="quotelev1">&gt; Contact Head Node Process PID 7706
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: notify_hnp:  
</span><br>
<span class="quotelev1">&gt; Requested a checkpoint of jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver:  
</span><br>
<span class="quotelev1">&gt; Receive a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver:  
</span><br>
<span class="quotelev1">&gt; Status Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178]                 Requested -  
</span><br>
<span class="quotelev1">&gt; Global Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver:  
</span><br>
<span class="quotelev1">&gt; Receive a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver:  
</span><br>
<span class="quotelev1">&gt; Status Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178]     Pending (Termination) -  
</span><br>
<span class="quotelev1">&gt; Global Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver:  
</span><br>
<span class="quotelev1">&gt; Receive a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver:  
</span><br>
<span class="quotelev1">&gt; Status Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08178]                   Running -  
</span><br>
<span class="quotelev1">&gt; Global Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I look to the activity on the node, I see that the processes
</span><br>
<span class="quotelev1">&gt; are still computing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  COMMAND
</span><br>
<span class="quotelev1">&gt; 7710 ccs       25   0  327m 6936 4052 R  102  0.7   4:14.17 mpi-x- 
</span><br>
<span class="quotelev1">&gt; povray
</span><br>
<span class="quotelev1">&gt; 7712 ccs       25   0  327m 6884 4000 R  102  0.7   3:34.06 mpi-x- 
</span><br>
<span class="quotelev1">&gt; povray
</span><br>
<span class="quotelev1">&gt; 7708 ccs       25   0  327m 6896 4012 R   66  0.7   2:42.10 mpi-x- 
</span><br>
<span class="quotelev1">&gt; povray
</span><br>
<span class="quotelev1">&gt; 7707 ccs       25   0  331m  10m 3736 R   54  1.0   3:08.62 mpi-x- 
</span><br>
<span class="quotelev1">&gt; povray
</span><br>
<span class="quotelev1">&gt; 7709 ccs       25   0  327m 6940 4056 R   48  0.7   1:48.24 mpi-x- 
</span><br>
<span class="quotelev1">&gt; povray
</span><br>
<span class="quotelev1">&gt; 7711 ccs       25   0  327m 6724 4032 R   36  0.7   1:29.34 mpi-x- 
</span><br>
<span class="quotelev1">&gt; povray
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I killed the hanging ompi-checkpoint operation and tried
</span><br>
<span class="quotelev1">&gt; to execute a checkpoint manually:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ ompi-checkpoint -v --term 7706
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08224] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08224]     PID 7706
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08224]     Connected to Mpirun  
</span><br>
<span class="quotelev1">&gt; [[3623,0],0]
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08224]     Terminating after checkpoint
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08224] orte_checkpoint: notify_hnp:  
</span><br>
<span class="quotelev1">&gt; Contact Head Node Process PID 7706
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:08224] orte_checkpoint: notify_hnp:  
</span><br>
<span class="quotelev1">&gt; Requested a checkpoint of jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there perhaps a way of increasing the level of debug output?
</span><br>
<span class="quotelev1">&gt; Please let me know if I can support you in any way...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Matthias
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
<li><strong>Next message:</strong> <a href="7162.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Previous message:</strong> <a href="7160.php">Rajesh Ramaya: "[OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7156.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7162.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Reply:</strong> <a href="7162.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
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
