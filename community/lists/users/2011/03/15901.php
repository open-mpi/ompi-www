<?
$subject_val = "Re: [OMPI users] Error in Binding MPI Process to a socket";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 15:31:16 2011" -->
<!-- isoreceived="20110317193116" -->
<!-- sent="Thu, 17 Mar 2011 14:31:12 -0500" -->
<!-- isosent="20110317193112" -->
<!-- name="vaibhav dutt" -->
<!-- email="vaibhavsupersaiyan9_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in Binding MPI Process to a socket" -->
<!-- id="AANLkTikF7hdP8bO+hT01q8BVQiwFhY-aJAfUo7=ZA+ud_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="757888C9-6905-4395-9C58-3FF768DC2C74_at_open-mpi.org" -->
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
<strong>From:</strong> vaibhav dutt (<em>vaibhavsupersaiyan9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 15:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>In reply to:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Reply:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Reply:</strong> <a href="15913.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Reply:</strong> <a href="15914.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for your reply. I tried to execute first a process by using
<br>
<p>mpirun -machinefile hostfile.txt  --slot-list 0:1   -np 1
<br>
<p>but it gives the same as error as mentioned previously.
<br>
<p>Then, I created a rankfile with contents&quot;
<br>
<p>rank 0=t1.tools.xxx  slot=0:0
<br>
rank 1=t1.tools.xxx  slot=1:0.
<br>
<p>and the  used command
<br>
<p>mpirun -machinefile hostfile.txt --rankfile my_rankfile.txt   -np 2
<br>
<p>but ended  up getting same error. Is there any patch that I can install in
<br>
my system to make it
<br>
topology aware?
<br>
<p>Thanks
<br>
<p><p>On Thu, Mar 17, 2011 at 2:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The error is telling you that your OS doesn't support queries telling us
</span><br>
<span class="quotelev1">&gt; what cores are on which sockets, so we can't perform a &quot;bind to socket&quot;
</span><br>
<span class="quotelev1">&gt; operation. You can probably still &quot;bind to core&quot;, so if you know what cores
</span><br>
<span class="quotelev1">&gt; are in which sockets, then you could use the rank_file mapper to assign
</span><br>
<span class="quotelev1">&gt; processes to groups of cores in a socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's just that we can't do it automatically because the OS won't give us
</span><br>
<span class="quotelev1">&gt; the required info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See &quot;mpirun -h&quot; for more info on slot lists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2011, at 11:26 AM, vaibhav dutt wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to perform an experiment in which I can spawn 2 MPI
</span><br>
<span class="quotelev1">&gt; processes, one on each socket in a 4 core node
</span><br>
<span class="quotelev2">&gt; &gt; having 2 dual cores. I used the option  &quot;bind to socket&quot; which mpirun for
</span><br>
<span class="quotelev1">&gt; that but I am getting an error like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; An attempt was made to bind a process to a specific hardware topology
</span><br>
<span class="quotelev2">&gt; &gt; mapping (e.g., binding to a socket) but the operating system does not
</span><br>
<span class="quotelev2">&gt; &gt; support such topology-aware actions.  Talk to your local system
</span><br>
<span class="quotelev2">&gt; &gt; administrator to find out if your system can support topology-aware
</span><br>
<span class="quotelev2">&gt; &gt; functionality (e.g., Linux Kernels newer than v2.6.18).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Systems that do not support processor topology-aware functionality cannot
</span><br>
<span class="quotelev2">&gt; &gt; use &quot;bind to socket&quot; and other related functionality.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can anybody please tell me what is this error about. Is there any other
</span><br>
<span class="quotelev1">&gt; option than &quot;bind to socket&quot;
</span><br>
<span class="quotelev2">&gt; &gt; that I can use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15901/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>In reply to:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Reply:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Reply:</strong> <a href="15913.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Reply:</strong> <a href="15914.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
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
