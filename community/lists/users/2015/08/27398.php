<?
$subject_val = "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 16:18:53 2015" -->
<!-- isoreceived="20150805201853" -->
<!-- sent="Wed, 5 Aug 2015 13:18:51 -0700" -->
<!-- isosent="20150805201851" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7" -->
<!-- id="CAMD57oeAPOBRVHkrzCx_J+H=Gdw7SnDE52jrJELxAyqMy=4GWg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EF0B6E_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Date:</strong> 2015-08-05 16:18:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27399.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27397.php">Lane, William: "[OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27397.php">Lane, William: "[OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27402.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27402.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You know, I honestly don't know - there is a patch in there for qsort, but
<br>
I haven't checked it against SGE. Let us know if you hit a problem and
<br>
we'll try to figure it out.
<br>
<p>Glad to hear your cluster is working - nice to have such challenges to
<br>
shake the cobwebs out :-)
<br>
<p>On Wed, Aug 5, 2015 at 12:43 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I read @
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/faq/?category=sge">https://www.open-mpi.org/faq/?category=sge</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that for OpenMPI Parallel Environments there's
</span><br>
<span class="quotelev1">&gt; a special consideration for Son of Grid Engine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    '&quot;qsort_args&quot; is necessary with the Son of Grid Engine distribution,
</span><br>
<span class="quotelev1">&gt;    version 8.1.1 and later, and probably only applicable to it.  For
</span><br>
<span class="quotelev1">&gt;    very old versions of SGE, omit &quot;accounting_summary&quot; too.'
</span><br>
<span class="quotelev1">&gt; Does this requirement still hold true for OpenMPI 1.8.7? Because
</span><br>
<span class="quotelev1">&gt; the webpage above only refers to much older versions of OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also want to thank Ralph for all his help in debugging the manifold
</span><br>
<span class="quotelev1">&gt; problems w/our mixed bag cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill Lane
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27397.php">http://www.open-mpi.org/community/lists/users/2015/08/27397.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27398/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27399.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27397.php">Lane, William: "[OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27397.php">Lane, William: "[OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27402.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27402.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
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
