<?
$subject_val = "Re: [OMPI users] open-mpi error: unable to create listen socket";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 22:07:26 2009" -->
<!-- isoreceived="20090318020726" -->
<!-- sent="Wed, 18 Mar 2009 09:07:17 +0700" -->
<!-- isosent="20090318020717" -->
<!-- name="-andria-" -->
<!-- email="andria009_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi error: unable to create listen socket" -->
<!-- id="d39867f70903171907j54d10ef8m4ab7252e5e17911e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="759BD4D7-1CA3-4B88-AF9E-03906F32BC6C_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi error: unable to create listen socket<br>
<strong>From:</strong> -andria- (<em>andria009_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 22:07:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8491.php">Salmon, Rene: "[OMPI users] openmpi 1.3 and gridengine tight integration problem"</a>
<li><strong>Previous message:</strong> <a href="8489.php">Ron Babich: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>In reply to:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Ralph,
<br>
<p>I found the problem. it is because I wrongly configured the second node's
<br>
selinux property (which is set to be enforced).
<br>
After it is disabled, the parallel-hello works fine.
<br>
<p>regards,
<br>
-andria
<br>
<p><p>On Tue, Mar 17, 2009 at 8:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Andria
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is a permissions one - your system has been setup so that only
</span><br>
<span class="quotelev1">&gt; root has permission to open a TCP socket. I don't know what system you are
</span><br>
<span class="quotelev1">&gt; running - you might want to talk to your system admin or someone
</span><br>
<span class="quotelev1">&gt; knowledgeable on that operating system to ask them how to revise the
</span><br>
<span class="quotelev1">&gt; required permissions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2009, at 3:12 AM, -andria- wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am still learning how to create a parallel program with open-mpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I try to run a mpihello program on my cluster, but it gives error when it
</span><br>
<span class="quotelev2">&gt;&gt; is executed as ordinary (public) user. however, it gives the correct result
</span><br>
<span class="quotelev2">&gt;&gt; when it is run by root user.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; why this happen? how can it be solved?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; attached you can find ompi_info --all output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;stdio.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev2">&gt;&gt;   int numprocs, rank, namelen;
</span><br>
<span class="quotelev2">&gt;&gt;   char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Process %d on %s out of %d\n&quot;, rank, processor_name, numprocs);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; output:
</span><br>
<span class="quotelev2">&gt;&gt; [public_at_cisitu01 ~]$ mpicc mpihello.c -o mpihello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ### as public ###
</span><br>
<span class="quotelev2">&gt;&gt; [public_at_cisitu01 ~]$ mpirun -np 4 -hostfile nodes.lst mpihello
</span><br>
<span class="quotelev2">&gt;&gt; [cisitu02:02897] mca_oob_tcp_create_listen: bind() failed: Permission
</span><br>
<span class="quotelev2">&gt;&gt; denied (13)
</span><br>
<span class="quotelev2">&gt;&gt; [cisitu02:02897] mca_oob_tcp_init: unable to create listen socket
</span><br>
<span class="quotelev2">&gt;&gt; [cisitu02:02898] mca_oob_tcp_create_listen: bind() failed: Permission
</span><br>
<span class="quotelev2">&gt;&gt; denied (13)
</span><br>
<span class="quotelev2">&gt;&gt; [cisitu02:02898] mca_oob_tcp_init: unable to create listen socket
</span><br>
<span class="quotelev2">&gt;&gt; [cisitu02][0,1,1][btl_tcp_component.c:412:mca_btl_tcp_component_create_listen]
</span><br>
<span class="quotelev2">&gt;&gt; bind() failed with errno=13
</span><br>
<span class="quotelev2">&gt;&gt; [cisitu02][0,1,3][btl_tcp_component.c:412:mca_btl_tcp_component_create_listen]
</span><br>
<span class="quotelev2">&gt;&gt; bind() failed with errno=13
</span><br>
<span class="quotelev2">&gt;&gt; [cisitu02:02897] [0,1,1] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; gpr_proxy_deliver_notify_msg.c at line 139
</span><br>
<span class="quotelev2">&gt;&gt; [cisitu02:02898] [0,1,3] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; gpr_proxy_deliver_notify_msg.c at line 139
</span><br>
<span class="quotelev2">&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 2976 on node cisitu01 exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ### as root ###
</span><br>
<span class="quotelev2">&gt;&gt; -bash-3.2# mpirun -np 4 -hostfile nodes.lst mpihello
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 on cisitu01 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 on cisitu02 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; Process 3 on cisitu02 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 on cisitu01 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thank you in advance,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt; -andria
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_info.all&gt;_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8491.php">Salmon, Rene: "[OMPI users] openmpi 1.3 and gridengine tight integration problem"</a>
<li><strong>Previous message:</strong> <a href="8489.php">Ron Babich: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>In reply to:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
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
