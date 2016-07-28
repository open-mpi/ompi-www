<?
$subject_val = "Re: [OMPI users] HRM problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 06:02:13 2012" -->
<!-- isoreceived="20120424100213" -->
<!-- sent="Tue, 24 Apr 2012 06:02:05 -0400" -->
<!-- isosent="20120424100205" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HRM problem" -->
<!-- id="4F967A1D.2090200_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMvdAsJuru+2vGhErbreEYeyM2HpMsYMjAeRWca6C09DYqTJcQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-04-24 06:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19086.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<li><strong>Previous message:</strong> <a href="19084.php">seshendra seshu: "[OMPI users] Regarding the problem while connecting to nodes present in a cluster"</a>
<li><strong>In reply to:</strong> <a href="19082.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19086.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<li><strong>Reply:</strong> <a href="19086.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To determine if an MPI process is waiting for a message do what Rayson 
<br>
suggested and attach a debugger to the processes and see if any of them 
<br>
are stuck in MPI.  Either internally in a MPI_Recv or MPI_Wait call or 
<br>
looping on a MPI_Test call.
<br>
<p>Other things to consider.
<br>
&nbsp;&nbsp;&nbsp;Is this the first time you've ran it (with Open MPI? with any MPI?)?
<br>
&nbsp;&nbsp;&nbsp;How many processes is the job using?  Are you oversubscribing your 
<br>
processors?
<br>
&nbsp;&nbsp;&nbsp;What version of Open MPI are you using?
<br>
&nbsp;&nbsp;&nbsp;Have you tested all network connections?
<br>
&nbsp;&nbsp;&nbsp;It might help us to know the size of cluster you are running and what 
<br>
type of network?
<br>
<p>--td
<br>
On 4/24/2012 2:42 AM, Syed Ahsan Ali wrote:
<br>
<span class="quotelev1">&gt; Dear Rayson,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is a Nuemrical model that is written by National weather service 
</span><br>
<span class="quotelev1">&gt; of a country. The logs of the model show every detail about the 
</span><br>
<span class="quotelev1">&gt; simulation progress. I have checked on the remote nodes as well the 
</span><br>
<span class="quotelev1">&gt; application binary is running but the logs show no progress, it is 
</span><br>
<span class="quotelev1">&gt; just waiting at a point. The input data is correct everything is fine. 
</span><br>
<span class="quotelev1">&gt; How can I check if the MPI task is waiting for a message?
</span><br>
<span class="quotelev1">&gt; Ahsan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 24, 2012 at 11:03 AM, Rayson Ho &lt;raysonlogin_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:raysonlogin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Seems like there's a bug in the application. Did you or someone else
</span><br>
<span class="quotelev1">&gt;     write it, or did you get it from an ISV??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You can log onto one of the nodes, attach a debugger, and see if the
</span><br>
<span class="quotelev1">&gt;     MPI task is waiting for a message (looping in one of the MPI receive
</span><br>
<span class="quotelev1">&gt;     functions)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     =================================
</span><br>
<span class="quotelev1">&gt;     Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev1">&gt;     <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Scalable Grid Engine Support Program
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Tue, Apr 24, 2012 at 12:49 AM, Syed Ahsan Ali
</span><br>
<span class="quotelev1">&gt;     &lt;ahsanshah01_at_[hidden] &lt;mailto:ahsanshah01_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Dear All,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I am having problem with running an application on Dell cluster
</span><br>
<span class="quotelev1">&gt;     . The model
</span><br>
<span class="quotelev2">&gt;     &gt; starts well but no further progress is shown. It just stuck. I
</span><br>
<span class="quotelev1">&gt;     have checked
</span><br>
<span class="quotelev2">&gt;     &gt; the systems, no apparent hardware error is there. Other open mpi
</span><br>
<span class="quotelev2">&gt;     &gt; applications are running well on the same cluster. I have tried
</span><br>
<span class="quotelev1">&gt;     running the
</span><br>
<span class="quotelev2">&gt;     &gt; application on cores of the same server as well but the problem
</span><br>
<span class="quotelev1">&gt;     is same. The
</span><br>
<span class="quotelev2">&gt;     &gt; application just don't move further. The same application is
</span><br>
<span class="quotelev1">&gt;     also running
</span><br>
<span class="quotelev2">&gt;     &gt; well on a backup cluster. Please help.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks and Best Regards
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Ahsan
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     ==================================================
</span><br>
<span class="quotelev1">&gt;     Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt;     <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19086.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<li><strong>Previous message:</strong> <a href="19084.php">seshendra seshu: "[OMPI users] Regarding the problem while connecting to nodes present in a cluster"</a>
<li><strong>In reply to:</strong> <a href="19082.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19086.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<li><strong>Reply:</strong> <a href="19086.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
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
