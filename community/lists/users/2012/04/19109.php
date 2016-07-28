<?
$subject_val = "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 18:08:32 2012" -->
<!-- isoreceived="20120424220832" -->
<!-- sent="Tue, 24 Apr 2012 15:07:58 -0700" -->
<!-- isosent="20120424220758" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
<!-- id="4F6E2EDA-D190-4414-8977-45327FDFE0F0_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+vDB+PM460n8s9iRJmgMfzBqten3Q_a3wkOsixLZK+g4ah99w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines<br>
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 18:07:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19110.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19108.php">Kyle Boe: "[OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19108.php">Kyle Boe: "[OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19110.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19110.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try using slots in hostfile ?
<br>
<p><pre>
--
Sent from my iPhone
On Apr 24, 2012, at 2:52 PM, Kyle Boe &lt;boex0040_at_[hidden]&gt; wrote:
&gt; I'm having a problem trying to use OpenMPI on some multicore machines I have. The code I am running was giving me errors which suggested that MPI was assigning multiple processes to the same core (which I do not want). So, I tried launching my job using the -nooversubscribe option, and I get this error:
&gt; 
&gt; bash-3.2$ mpirun -np 2 -nooversubscribe &lt;executable and options here&gt;
&gt; --------------------------------------------------------------------------
&gt; There are not enough slots available in the system to satisfy the 2 slots 
&gt; that were requested by the application:
&gt;   &lt;executable name&gt;
&gt; 
&gt; Either request fewer slots for your application, or make more slots available
&gt; for use.
&gt; --------------------------------------------------------------------------
&gt; --------------------------------------------------------------------------
&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
&gt; launch so we are aborting.
&gt; 
&gt; There may be more information reported by the environment (see above).
&gt; 
&gt; This may be because the daemon was unable to find all the needed shared
&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
&gt; location of the shared libraries on the remote nodes and this will
&gt; automatically be forwarded to the remote nodes.
&gt; --------------------------------------------------------------------------
&gt; --------------------------------------------------------------------------
&gt; mpirun noticed that the job aborted, but has no info as to the process
&gt; that caused that situation.
&gt; --------------------------------------------------------------------------
&gt; mpirun: clean termination accomplished
&gt; 
&gt; I am just trying to run on the localhost, not on any remote machines. This happens on both my 8 (2*4) core and 24 (4*6) core machines. Relevant info: I am not using any type of scheduler here, although from the searching I've done that doesn't seem like a requirement. The only thing I can think is there must be some type of configuration or option I'm not setting for using on shared memory machines (either at compile or run time), but I can't find anyone else who has come across this error. Any thoughts?
&gt; 
&gt; Thanks,
&gt; 
&gt; Kyle
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19110.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19108.php">Kyle Boe: "[OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19108.php">Kyle Boe: "[OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19110.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19110.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
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
