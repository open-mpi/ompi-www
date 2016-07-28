<?
$subject_val = "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 19:41:41 2015" -->
<!-- isoreceived="20150805234141" -->
<!-- sent="Wed, 5 Aug 2015 16:41:39 -0700" -->
<!-- isosent="20150805234139" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7" -->
<!-- id="CAMD57odPSh7_Y8mVo82woc2oPT=WM7bW=TBDDvbKW9b90+q+Pw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EF0BAA_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-05 19:41:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27404.php">Ralph Castain: "Re: [OMPI users] bad XRC API"</a>
<li><strong>Previous message:</strong> <a href="27402.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27402.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27417.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27417.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well that stinks! Let me know what's going on and I'll take a look. FWIW,
<br>
the best method is generally to configure OMPI with --enable-debug, and
<br>
then run with &quot;--leave-session-attached --mca plm_base_verbose 5&quot;. That
<br>
will tell us what the launcher thinks it is doing and what the daemons
<br>
think is wrong.
<br>
<p><p>On Wed, Aug 5, 2015 at 3:17 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Actually, we're still having problems submitting OpenMPI 1.8.7 jobs
</span><br>
<span class="quotelev1">&gt; to the cluster thru SGE (which we need to do in order to track usage
</span><br>
<span class="quotelev1">&gt; stats on the cluster). I suppose I'll make a PE w/the appropriate settings
</span><br>
<span class="quotelev1">&gt; and see if that makes a difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill L
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, August 05, 2015 1:18 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Son of Grid Engine, Parallel Environments and
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.8.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You know, I honestly don't know - there is a patch in there for qsort, but
</span><br>
<span class="quotelev1">&gt; I haven't checked it against SGE. Let us know if you hit a problem and
</span><br>
<span class="quotelev1">&gt; we'll try to figure it out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Glad to hear your cluster is working - nice to have such challenges to
</span><br>
<span class="quotelev1">&gt; shake the cobwebs out :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 5, 2015 at 12:43 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I read @
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/faq/?category=sge">https://www.open-mpi.org/faq/?category=sge</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that for OpenMPI Parallel Environments there's
</span><br>
<span class="quotelev2">&gt;&gt; a special consideration for Son of Grid Engine:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    '&quot;qsort_args&quot; is necessary with the Son of Grid Engine distribution,
</span><br>
<span class="quotelev2">&gt;&gt;    version 8.1.1 and later, and probably only applicable to it.  For
</span><br>
<span class="quotelev2">&gt;&gt;    very old versions of SGE, omit &quot;accounting_summary&quot; too.'
</span><br>
<span class="quotelev2">&gt;&gt; Does this requirement still hold true for OpenMPI 1.8.7? Because
</span><br>
<span class="quotelev2">&gt;&gt; the webpage above only refers to much older versions of OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also want to thank Ralph for all his help in debugging the manifold
</span><br>
<span class="quotelev2">&gt;&gt; problems w/our mixed bag cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or
</span><br>
<span class="quotelev2">&gt;&gt; entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev2">&gt;&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev2">&gt;&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev2">&gt;&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev2">&gt;&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev2">&gt;&gt; you for your cooperation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27397.php">http://www.open-mpi.org/community/lists/users/2015/08/27397.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or
</span><br>
<span class="quotelev1">&gt; entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev1">&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev1">&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev1">&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev1">&gt; you for your cooperation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27402.php">http://www.open-mpi.org/community/lists/users/2015/08/27402.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27404.php">Ralph Castain: "Re: [OMPI users] bad XRC API"</a>
<li><strong>Previous message:</strong> <a href="27402.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27402.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27417.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27417.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
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
