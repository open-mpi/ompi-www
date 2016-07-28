<?
$subject_val = "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 11:22:01 2010" -->
<!-- isoreceived="20100307162201" -->
<!-- sent="Sun, 7 Mar 2010 09:21:53 -0700" -->
<!-- isosent="20100307162153" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory" -->
<!-- id="4178683F-A816-40B8-8D95-7B56598D06A5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1C4CE477-C94D-4890-838E-288B4C465DFE_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 11:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12272.php">David Turner: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Previous message:</strong> <a href="12270.php">Fernando Lemos: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12266.php">Gijsbert Wiesenekker: "[OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12272.php">David Turner: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Reply:</strong> <a href="12272.php">David Turner: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 7, 2010, at 2:55 AM, Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt; I was having non-reproducible hangs in an OpenMPI program. While troubleshooting this problem I found that there were many temporary directories in my /tmp/openmpi-sessions-userid directory (probably the result of MPI_Abort aborted OpenMPI programs). I cleaned those directories up and it looks like the hangs have gone.
</span><br>
<span class="quotelev1">&gt; My questions are:
</span><br>
<span class="quotelev1">&gt; It looks like the name of the temporary directory in /tmp/openmpi-sessions-userid directory is a process-id. What happens when an OpenMPI program starts and the temporary directory in /tmp/openmpi-sessions-userid already exists?
</span><br>
<p>It'll just overwrite what is already there. I confess that the code has not been tested for that situation, though, so I can't guarantee that response.
<br>
<p><span class="quotelev1">&gt; Could existing temporary directories in /tmp/openmpi-sessions-userid cause an OpenMPI program to hang?
</span><br>
<p>Given your observations, I guess the answer has to be &quot;yes&quot;, though I wouldn't have expected it. The typical behavior in this scenario is for the application to error out during MPI_Init when it finds that there isn't enough space in /tmp for the session directory - and that is caused not by the directory itself, but rather by the shared memory backing file that resides in the session dir tree and can be quite large.
<br>
<p><p><span class="quotelev1">&gt; Is there a way to ensure that the temporary directory created in /tmp/openmpi-sessions-userid is always removed after an OpenMPI program has run?
</span><br>
<p>It really, really helps to know what  version you are using.  We just found a bug in the 1.3/1.4 series that was causing the apps not to cleanup in exactly this scenario - that is fixed in the upcoming 1.4.2 release. The older 1.2 series had this problem as well, but we aren't going back to fix it. :-)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gijsbert
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12272.php">David Turner: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Previous message:</strong> <a href="12270.php">Fernando Lemos: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12266.php">Gijsbert Wiesenekker: "[OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12272.php">David Turner: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Reply:</strong> <a href="12272.php">David Turner: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
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
