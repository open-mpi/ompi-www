<?
$subject_val = "Re: [OMPI users] HRM problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 06:52:27 2012" -->
<!-- isoreceived="20120424105227" -->
<!-- sent="Tue, 24 Apr 2012 06:52:18 -0400" -->
<!-- isosent="20120424105218" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HRM problem" -->
<!-- id="4F9685E2.9080904_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMvdAs+KapPoNbQku7-vSdiqrg75GmK46FGh5fa5drosiKNdUQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] HRM problem<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 06:52:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19088.php">Jeffrey Squyres: "Re: [OMPI users] Regarding the problem while connecting to nodes present in a cluster"</a>
<li><strong>Previous message:</strong> <a href="19086.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<li><strong>In reply to:</strong> <a href="19086.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/24/2012 6:19 AM, Syed Ahsan Ali wrote:
<br>
<span class="quotelev1">&gt; I am not familiar with attaching debugger to the processes. Other 
</span><br>
<span class="quotelev1">&gt; things you asked are as follows:
</span><br>
The easiest is to get Totalview or Allinea (both are parallel debuggers) 
<br>
and attach them to the job.  However they cost.  Another is to try padb, 
<br>
look at <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a> (this is probably your best bet).  
<br>
Lastly is on a node that has a running process find the pid of that 
<br>
process and attach gdb or dbx to it using &quot;gdb - &lt;pid&gt;&quot; where &lt;pid&gt; is 
<br>
the process id of one of the processes.  Then once in the debugger do a 
<br>
&quot;where&quot; command (this will give you the stack of the process).
<br>
<span class="quotelev1">&gt;   Is this the first time you've ran it (with Open MPI? with any MPI?) 
</span><br>
<span class="quotelev1">&gt; *No We have been running this and other models but this problem has 
</span><br>
<span class="quotelev1">&gt; arised now
</span><br>
<span class="quotelev1">&gt; *
</span><br>
Ok, so from the above are you saying HRM has worked with Open MPI on the 
<br>
same cluster before?  If so what has changed?
<br>
<span class="quotelev1">&gt;   How many processes is the job using?  Are you oversubscribing your 
</span><br>
<span class="quotelev1">&gt; processors?*I have tried to run on cluster having 184 cores as well on 
</span><br>
<span class="quotelev1">&gt; 8 cores of the same server
</span><br>
<span class="quotelev1">&gt; *
</span><br>
So the hang even happens on a single server without any networks?
<br>
Does the job get past MPI_Init?
<br>
<span class="quotelev1">&gt; **  What version of Open MPI are you using? *openmpi 1.4.2*
</span><br>
<span class="quotelev1">&gt;   Have you tested all network connections? *yes
</span><br>
<span class="quotelev1">&gt; *  It might help us to know the size of cluster you are running and 
</span><br>
<span class="quotelev1">&gt; what type of network? *the cluster has 32 nodes dell power edge blade 
</span><br>
<span class="quotelev1">&gt; servers and connectivity is Gigabit Ethernet and Infiniband,
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<p>--td
<br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 24, 2012 at 3:02 PM, TERRY DONTJE &lt;terry.dontje_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:terry.dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     To determine if an MPI process is waiting for a message do what
</span><br>
<span class="quotelev1">&gt;     Rayson suggested and attach a debugger to the processes and see if
</span><br>
<span class="quotelev1">&gt;     any of them are stuck in MPI.  Either internally in a MPI_Recv or
</span><br>
<span class="quotelev1">&gt;     MPI_Wait call or looping on a MPI_Test call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Other things to consider.
</span><br>
<span class="quotelev1">&gt;       Is this the first time you've ran it (with Open MPI? with any MPI?)?
</span><br>
<span class="quotelev1">&gt;       How many processes is the job using?  Are you oversubscribing
</span><br>
<span class="quotelev1">&gt;     your processors?
</span><br>
<span class="quotelev1">&gt;       What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;       Have you tested all network connections?
</span><br>
<span class="quotelev1">&gt;       It might help us to know the size of cluster you are running and
</span><br>
<span class="quotelev1">&gt;     what type of network?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 4/24/2012 2:42 AM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Dear Rayson,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     That is a Nuemrical model that is written by National weather
</span><br>
<span class="quotelev2">&gt;&gt;     service of a country. The logs of the model show every detail
</span><br>
<span class="quotelev2">&gt;&gt;     about the simulation progress. I have checked on the remote nodes
</span><br>
<span class="quotelev2">&gt;&gt;     as well the application binary is running but the logs show no
</span><br>
<span class="quotelev2">&gt;&gt;     progress, it is just waiting at a point. The input data is
</span><br>
<span class="quotelev2">&gt;&gt;     correct everything is fine. How can I check if the MPI task is
</span><br>
<span class="quotelev2">&gt;&gt;     waiting for a message?
</span><br>
<span class="quotelev2">&gt;&gt;     Ahsan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Tue, Apr 24, 2012 at 11:03 AM, Rayson Ho
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;raysonlogin_at_[hidden] &lt;mailto:raysonlogin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Seems like there's a bug in the application. Did you or
</span><br>
<span class="quotelev2">&gt;&gt;         someone else
</span><br>
<span class="quotelev2">&gt;&gt;         write it, or did you get it from an ISV??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         You can log onto one of the nodes, attach a debugger, and see
</span><br>
<span class="quotelev2">&gt;&gt;         if the
</span><br>
<span class="quotelev2">&gt;&gt;         MPI task is waiting for a message (looping in one of the MPI
</span><br>
<span class="quotelev2">&gt;&gt;         receive
</span><br>
<span class="quotelev2">&gt;&gt;         functions)...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Rayson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         =================================
</span><br>
<span class="quotelev2">&gt;&gt;         Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Scalable Grid Engine Support Program
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Tue, Apr 24, 2012 at 12:49 AM, Syed Ahsan Ali
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;ahsanshah01_at_[hidden] &lt;mailto:ahsanshah01_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Dear All,
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; I am having problem with running an application on Dell
</span><br>
<span class="quotelev2">&gt;&gt;         cluster . The model
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; starts well but no further progress is shown. It
</span><br>
<span class="quotelev2">&gt;&gt;         just stuck. I have checked
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; the systems, no apparent hardware error is there. Other
</span><br>
<span class="quotelev2">&gt;&gt;         open mpi
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; applications are running well on the same cluster. I have
</span><br>
<span class="quotelev2">&gt;&gt;         tried running the
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; application on cores of the same server as well but the
</span><br>
<span class="quotelev2">&gt;&gt;         problem is same. The
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; application just don't move further. The same application
</span><br>
<span class="quotelev2">&gt;&gt;         is also running
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; well on a backup cluster. Please help.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Thanks and Best Regards
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Ahsan
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --
</span><br>
<span class="quotelev2">&gt;&gt;         ==================================================
</span><br>
<span class="quotelev2">&gt;&gt;         Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt;     Developer Tools Engineering | +1.781.442.2631 &lt;tel:%2B1.781.442.2631&gt;
</span><br>
<span class="quotelev1">&gt;     Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt;     95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;     Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19087/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19088.php">Jeffrey Squyres: "Re: [OMPI users] Regarding the problem while connecting to nodes present in a cluster"</a>
<li><strong>Previous message:</strong> <a href="19086.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<li><strong>In reply to:</strong> <a href="19086.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
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
