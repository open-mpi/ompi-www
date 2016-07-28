<?
$subject_val = "Re: [OMPI users] Error in Binding MPI Process to a socket";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 15:05:55 2011" -->
<!-- isoreceived="20110317190555" -->
<!-- sent="Thu, 17 Mar 2011 13:05:45 -0600" -->
<!-- isosent="20110317190545" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in Binding MPI Process to a socket" -->
<!-- id="757888C9-6905-4395-9C58-3FF768DC2C74_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimncG8YoEJDQSoweDnMbkVDnmepvig0TuRVop9u_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error in Binding MPI Process to a socket<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 15:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15901.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15899.php">vaibhav dutt: "[OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>In reply to:</strong> <a href="15899.php">vaibhav dutt: "[OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15901.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Reply:</strong> <a href="15901.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The error is telling you that your OS doesn't support queries telling us what cores are on which sockets, so we can't perform a &quot;bind to socket&quot; operation. You can probably still &quot;bind to core&quot;, so if you know what cores are in which sockets, then you could use the rank_file mapper to assign processes to groups of cores in a socket.
<br>
<p>It's just that we can't do it automatically because the OS won't give us the required info.
<br>
<p>See &quot;mpirun -h&quot; for more info on slot lists.
<br>
<p>On Mar 17, 2011, at 11:26 AM, vaibhav dutt wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to perform an experiment in which I can spawn 2 MPI processes, one on each socket in a 4 core node
</span><br>
<span class="quotelev1">&gt; having 2 dual cores. I used the option  &quot;bind to socket&quot; which mpirun for that but I am getting an error like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An attempt was made to bind a process to a specific hardware topology
</span><br>
<span class="quotelev1">&gt; mapping (e.g., binding to a socket) but the operating system does not
</span><br>
<span class="quotelev1">&gt; support such topology-aware actions.  Talk to your local system
</span><br>
<span class="quotelev1">&gt; administrator to find out if your system can support topology-aware
</span><br>
<span class="quotelev1">&gt; functionality (e.g., Linux Kernels newer than v2.6.18).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Systems that do not support processor topology-aware functionality cannot
</span><br>
<span class="quotelev1">&gt; use &quot;bind to socket&quot; and other related functionality.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anybody please tell me what is this error about. Is there any other option than &quot;bind to socket&quot;
</span><br>
<span class="quotelev1">&gt; that I can use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
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
<li><strong>Next message:</strong> <a href="15901.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15899.php">vaibhav dutt: "[OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>In reply to:</strong> <a href="15899.php">vaibhav dutt: "[OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15901.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Reply:</strong> <a href="15901.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
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
