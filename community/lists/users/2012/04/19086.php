<?
$subject_val = "Re: [OMPI users] HRM problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 06:20:02 2012" -->
<!-- isoreceived="20120424102002" -->
<!-- sent="Tue, 24 Apr 2012 15:19:57 +0500" -->
<!-- isosent="20120424101957" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HRM problem" -->
<!-- id="CAMvdAs+KapPoNbQku7-vSdiqrg75GmK46FGh5fa5drosiKNdUQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F967A1D.2090200_at_oracle.com" -->
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
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 06:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19087.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<li><strong>Previous message:</strong> <a href="19085.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<li><strong>In reply to:</strong> <a href="19085.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19087.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<li><strong>Reply:</strong> <a href="19087.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not familiar with attaching debugger to the processes. Other things
<br>
you asked are as follows:
<br>
<p>&nbsp;&nbsp;Is this the first time you've ran it (with Open MPI? with any MPI?) *No
<br>
We have been running this and other models but this problem has arised now
<br>
*  How many processes is the job using?  Are you oversubscribing your
<br>
processors?* I have tried to run on cluster having 184 cores as well on 8
<br>
cores of the same server
<br>
*  What version of Open MPI are you using? *openmpi 1.4.2*
<br>
&nbsp;&nbsp;Have you tested all network connections?  *yes
<br>
*  It might help us to know the size of cluster you are running and what
<br>
type of network? *the cluster has 32 nodes dell power edge blade servers
<br>
and connectivity is Gigabit Ethernet and Infiniband,
<br>
*
<br>
<p><p>On Tue, Apr 24, 2012 at 3:02 PM, TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; To determine if an MPI process is waiting for a message do what Rayson
</span><br>
<span class="quotelev1">&gt; suggested and attach a debugger to the processes and see if any of them are
</span><br>
<span class="quotelev1">&gt; stuck in MPI.  Either internally in a MPI_Recv or MPI_Wait call or looping
</span><br>
<span class="quotelev1">&gt; on a MPI_Test call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other things to consider.
</span><br>
<span class="quotelev1">&gt;   Is this the first time you've ran it (with Open MPI? with any MPI?)?
</span><br>
<span class="quotelev1">&gt;   How many processes is the job using?  Are you oversubscribing your
</span><br>
<span class="quotelev1">&gt; processors?
</span><br>
<span class="quotelev1">&gt;   What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;   Have you tested all network connections?
</span><br>
<span class="quotelev1">&gt;   It might help us to know the size of cluster you are running and what
</span><br>
<span class="quotelev1">&gt; type of network?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/24/2012 2:42 AM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Rayson,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is a Nuemrical model that is written by National weather service of a
</span><br>
<span class="quotelev1">&gt; country. The logs of the model show every detail about the simulation
</span><br>
<span class="quotelev1">&gt; progress. I have checked on the remote nodes as well the application binary
</span><br>
<span class="quotelev1">&gt; is running but the logs show no progress, it is just waiting at a point.
</span><br>
<span class="quotelev1">&gt; The input data is correct everything is fine. How can I check if the MPI
</span><br>
<span class="quotelev1">&gt; task is waiting for a message?
</span><br>
<span class="quotelev1">&gt; Ahsan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 24, 2012 at 11:03 AM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seems like there's a bug in the application. Did you or someone else
</span><br>
<span class="quotelev2">&gt;&gt; write it, or did you get it from an ISV??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can log onto one of the nodes, attach a debugger, and see if the
</span><br>
<span class="quotelev2">&gt;&gt; MPI task is waiting for a message (looping in one of the MPI receive
</span><br>
<span class="quotelev2">&gt;&gt; functions)...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =================================
</span><br>
<span class="quotelev2">&gt;&gt; Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 24, 2012 at 12:49 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear All,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am having problem with running an application on Dell cluster . The
</span><br>
<span class="quotelev2">&gt;&gt; model
</span><br>
<span class="quotelev3">&gt;&gt; &gt; starts well but no further progress is shown. It just stuck. I have
</span><br>
<span class="quotelev2">&gt;&gt; checked
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the systems, no apparent hardware error is there. Other open mpi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; applications are running well on the same cluster. I have tried running
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; application on cores of the same server as well but the problem is
</span><br>
<span class="quotelev2">&gt;&gt; same. The
</span><br>
<span class="quotelev3">&gt;&gt; &gt; application just don't move further. The same application is also
</span><br>
<span class="quotelev2">&gt;&gt; running
</span><br>
<span class="quotelev3">&gt;&gt; &gt; well on a backup cluster. Please help.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks and Best Regards
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ahsan
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19086/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19087.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<li><strong>Previous message:</strong> <a href="19085.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<li><strong>In reply to:</strong> <a href="19085.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19087.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<li><strong>Reply:</strong> <a href="19087.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
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
