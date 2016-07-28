<?
$subject_val = "Re: [OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 16:43:52 2014" -->
<!-- isoreceived="20140919204352" -->
<!-- sent="Fri, 19 Sep 2014 22:43:51 +0200" -->
<!-- isosent="20140919204351" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can &amp;quot;timeout&amp;quot; be implemented in OpenMPI?" -->
<!-- id="CAMJJpkXnZW-Cr3r8P8cZGmBoAO-xj=DXewJXdekzQx=Os-HZcg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BC61C7775820B1469DB38FAE0D52DCA10BAD2CE6_at_UUSNWE1W.na.utcmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-19 16:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25365.php">Lee-Ping Wang: "[OMPI users] Process is hanging"</a>
<li><strong>Previous message:</strong> <a href="25363.php">Gan, Qi                    PW: "[OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="25363.php">Gan, Qi                    PW: "[OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. It is extremely unlike to have a broken MPI communication pipe. Use a
<br>
parallel debugger to validate your communication pattern is correct. I
<br>
would suspect a deadlock due to an incomplete communication pattern more
<br>
than a broken communication pipe.
<br>
<p>2. Nope, you cant set timeouts on MPI calls. There was an effort in the
<br>
past to push a timeout interface, but it failed. More information about
<br>
MPIRT available at <a href="http://www.cse.msstate.edu/~yogi/dandass-mpirt-2004.pdf">http://www.cse.msstate.edu/~yogi/dandass-mpirt-2004.pdf</a>
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, Sep 19, 2014 at 7:11 PM, Gan, Qi PW &lt;Qi.Gan2_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a question about set timeout limit for MPI data transmissions.  Our
</span><br>
<span class="quotelev1">&gt; users run their parallel jobs (with openmpi) on our HPC cluster. Sometimes
</span><br>
<span class="quotelev1">&gt; the job may hang due to unknown reason. In such case a job is still in
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;RUN&#226;&#128;&#157; status, all processes of this job are running. But not output is
</span><br>
<span class="quotelev1">&gt; produced (in normal a job writes to the output files periodically). We
</span><br>
<span class="quotelev1">&gt; suspect that is may be caused by the broken MPI communication pipe, which
</span><br>
<span class="quotelev1">&gt; stalls the entire job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, all processes exchange data at the end of  computations, and
</span><br>
<span class="quotelev1">&gt; synchronize by using MPI_waitall function. If  one of the communication
</span><br>
<span class="quotelev1">&gt; links (e.g. Ethernet, Infiniband) fails and the system is not able to
</span><br>
<span class="quotelev1">&gt; detect it, then all processes are staying with MPI_waitall indefinitely.
</span><br>
<span class="quotelev1">&gt; The whole job still looks &#226;&#128;&#156;running&#226;&#128;&#157; but it doesn&#226;&#128;&#153;t do anything useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: is it possible to set up &#226;&#128;&#156;timeout&#226;&#128;&#157; flag in MPI functions
</span><br>
<span class="quotelev1">&gt; so that if the time spent by a function (e.g. MPI_waitall) exceeds the
</span><br>
<span class="quotelev1">&gt; preset timeout limit then the function is aborted and the whole job is
</span><br>
<span class="quotelev1">&gt; terminated?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our environment, we use OpenMPI v1.4.5 and v1.6.5 on Linux platform.
</span><br>
<span class="quotelev1">&gt; The job scheduling tool is LSF v8.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Qi
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25363.php">http://www.open-mpi.org/community/lists/users/2014/09/25363.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25364/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25365.php">Lee-Ping Wang: "[OMPI users] Process is hanging"</a>
<li><strong>Previous message:</strong> <a href="25363.php">Gan, Qi                    PW: "[OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="25363.php">Gan, Qi                    PW: "[OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
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
