<?
$subject_val = "Re: [OMPI users] HRM problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 02:42:59 2012" -->
<!-- isoreceived="20120424064259" -->
<!-- sent="Tue, 24 Apr 2012 11:42:54 +0500" -->
<!-- isosent="20120424064254" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HRM problem" -->
<!-- id="CAMvdAsJuru+2vGhErbreEYeyM2HpMsYMjAeRWca6C09DYqTJcQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHwLALM+rycn9YS6C1i4FLFGStjP4j1Y=r4CKoSzeh6v+KetGw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-04-24 02:42:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19083.php">Rohan Deshpande: "[OMPI users] MPI and CUDA"</a>
<li><strong>Previous message:</strong> <a href="19081.php">Rayson Ho: "Re: [OMPI users] HRM problem"</a>
<li><strong>In reply to:</strong> <a href="19081.php">Rayson Ho: "Re: [OMPI users] HRM problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19085.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<li><strong>Reply:</strong> <a href="19085.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Rayson,
<br>
<p>That is a Nuemrical model that is written by National weather service of a
<br>
country. The logs of the model show every detail about the simulation
<br>
progress. I have checked on the remote nodes as well the application binary
<br>
is running but the logs show no progress, it is just waiting at a point.
<br>
The input data is correct everything is fine. How can I check if the MPI
<br>
task is waiting for a message?
<br>
Ahsan
<br>
<p>On Tue, Apr 24, 2012 at 11:03 AM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Seems like there's a bug in the application. Did you or someone else
</span><br>
<span class="quotelev1">&gt; write it, or did you get it from an ISV??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can log onto one of the nodes, attach a debugger, and see if the
</span><br>
<span class="quotelev1">&gt; MPI task is waiting for a message (looping in one of the MPI receive
</span><br>
<span class="quotelev1">&gt; functions)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev1">&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 24, 2012 at 12:49 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am having problem with running an application on Dell cluster . The
</span><br>
<span class="quotelev1">&gt; model
</span><br>
<span class="quotelev2">&gt; &gt; starts well but no further progress is shown. It just stuck. I have
</span><br>
<span class="quotelev1">&gt; checked
</span><br>
<span class="quotelev2">&gt; &gt; the systems, no apparent hardware error is there. Other open mpi
</span><br>
<span class="quotelev2">&gt; &gt; applications are running well on the same cluster. I have tried running
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; application on cores of the same server as well but the problem is same.
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev2">&gt; &gt; application just don't move further. The same application is also running
</span><br>
<span class="quotelev2">&gt; &gt; well on a backup cluster. Please help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks and Best Regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ahsan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19082/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19083.php">Rohan Deshpande: "[OMPI users] MPI and CUDA"</a>
<li><strong>Previous message:</strong> <a href="19081.php">Rayson Ho: "Re: [OMPI users] HRM problem"</a>
<li><strong>In reply to:</strong> <a href="19081.php">Rayson Ho: "Re: [OMPI users] HRM problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19085.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<li><strong>Reply:</strong> <a href="19085.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
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
