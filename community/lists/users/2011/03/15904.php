<?
$subject_val = "Re: [OMPI users] Error in Binding MPI Process to a socket";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 16:03:39 2011" -->
<!-- isoreceived="20110317200339" -->
<!-- sent="Thu, 17 Mar 2011 14:03:26 -0600" -->
<!-- isosent="20110317200326" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in Binding MPI Process to a socket" -->
<!-- id="9115AF22-BBAE-499D-B1ED-817878C225EC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=ySepV6f2_TL5WTGLxM346psJocto5-SNsy6PR_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-03-17 16:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15905.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="15903.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>In reply to:</strong> <a href="15903.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15913.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is an awfully old kernel, so it may indeed not have support for binding. I'd have to defer to someone more knowledgable to say for sure, but you might consider updating to something newer.
<br>
<p><p>On Mar 17, 2011, at 1:57 PM, vaibhav dutt wrote:
<br>
<p><span class="quotelev1">&gt; 2.6.9-78.0.17.ELpapismp #1 SMP Tue Apr 7 13:14:04 CDT 2009 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 17, 2011 at 2:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; What OS version is it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; uname -a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; will tell you, if you are on linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2011, at 1:31 PM, vaibhav dutt wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply. I tried to execute first a process by using
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -machinefile hostfile.txt  --slot-list 0:1   -np 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but it gives the same as error as mentioned previously.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then, I created a rankfile with contents&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=t1.tools.xxx  slot=0:0
</span><br>
<span class="quotelev2">&gt;&gt; rank 1=t1.tools.xxx  slot=1:0.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and the  used command
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -machinefile hostfile.txt --rankfile my_rankfile.txt   -np 2 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but ended  up getting same error. Is there any patch that I can install in my system to make it
</span><br>
<span class="quotelev2">&gt;&gt; topology aware?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Mar 17, 2011 at 2:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The error is telling you that your OS doesn't support queries telling us what cores are on which sockets, so we can't perform a &quot;bind to socket&quot; operation. You can probably still &quot;bind to core&quot;, so if you know what cores are in which sockets, then you could use the rank_file mapper to assign processes to groups of cores in a socket.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's just that we can't do it automatically because the OS won't give us the required info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See &quot;mpirun -h&quot; for more info on slot lists.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2011, at 11:26 AM, vaibhav dutt wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am trying to perform an experiment in which I can spawn 2 MPI processes, one on each socket in a 4 core node
</span><br>
<span class="quotelev3">&gt;&gt; &gt; having 2 dual cores. I used the option  &quot;bind to socket&quot; which mpirun for that but I am getting an error like:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; An attempt was made to bind a process to a specific hardware topology
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mapping (e.g., binding to a socket) but the operating system does not
</span><br>
<span class="quotelev3">&gt;&gt; &gt; support such topology-aware actions.  Talk to your local system
</span><br>
<span class="quotelev3">&gt;&gt; &gt; administrator to find out if your system can support topology-aware
</span><br>
<span class="quotelev3">&gt;&gt; &gt; functionality (e.g., Linux Kernels newer than v2.6.18).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Systems that do not support processor topology-aware functionality cannot
</span><br>
<span class="quotelev3">&gt;&gt; &gt; use &quot;bind to socket&quot; and other related functionality.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can anybody please tell me what is this error about. Is there any other option than &quot;bind to socket&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that I can use.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks.
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15904/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15905.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="15903.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>In reply to:</strong> <a href="15903.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15913.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
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
