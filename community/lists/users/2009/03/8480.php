<?
$subject_val = "Re: [OMPI users] open-mpi error: unable to create listen socket";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 09:08:41 2009" -->
<!-- isoreceived="20090317130841" -->
<!-- sent="Tue, 17 Mar 2009 07:08:32 -0600" -->
<!-- isosent="20090317130832" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi error: unable to create listen socket" -->
<!-- id="759BD4D7-1CA3-4B88-AF9E-03906F32BC6C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d39867f70903170212w7e1e99b1i3276a91bc75040b5_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 09:08:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8481.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Previous message:</strong> <a href="8479.php">Gilbert Grosdidier: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>In reply to:</strong> <a href="8478.php">-andria-: "[OMPI users] open-mpi error: unable to create listen socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8490.php">-andria-: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>Reply:</strong> <a href="8490.php">-andria-: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andria
<br>
<p>The problem is a permissions one - your system has been setup so that  
<br>
only root has permission to open a TCP socket. I don't know what  
<br>
system you are running - you might want to talk to your system admin  
<br>
or someone knowledgeable on that operating system to ask them how to  
<br>
revise the required permissions.
<br>
<p>Ralph
<br>
<p><p>On Mar 17, 2009, at 3:12 AM, -andria- wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am still learning how to create a parallel program with open-mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to run a mpihello program on my cluster, but it gives error  
</span><br>
<span class="quotelev1">&gt; when it is executed as ordinary (public) user. however, it gives the  
</span><br>
<span class="quotelev1">&gt; correct result when it is run by root user.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; why this happen? how can it be solved?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; attached you can find ompi_info --all output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;stdio.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;    int numprocs, rank, namelen;
</span><br>
<span class="quotelev1">&gt;    char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Process %d on %s out of %d\n&quot;, rank, processor_name,  
</span><br>
<span class="quotelev1">&gt; numprocs);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt; [public_at_cisitu01 ~]$ mpicc mpihello.c -o mpihello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ### as public ###
</span><br>
<span class="quotelev1">&gt; [public_at_cisitu01 ~]$ mpirun -np 4 -hostfile nodes.lst mpihello
</span><br>
<span class="quotelev1">&gt; [cisitu02:02897] mca_oob_tcp_create_listen: bind() failed:  
</span><br>
<span class="quotelev1">&gt; Permission denied (13)
</span><br>
<span class="quotelev1">&gt; [cisitu02:02897] mca_oob_tcp_init: unable to create listen socket
</span><br>
<span class="quotelev1">&gt; [cisitu02:02898] mca_oob_tcp_create_listen: bind() failed:  
</span><br>
<span class="quotelev1">&gt; Permission denied (13)
</span><br>
<span class="quotelev1">&gt; [cisitu02:02898] mca_oob_tcp_init: unable to create listen socket
</span><br>
<span class="quotelev1">&gt; [cisitu02][0,1,1][btl_tcp_component.c: 
</span><br>
<span class="quotelev1">&gt; 412:mca_btl_tcp_component_create_listen] bind() failed with errno=13
</span><br>
<span class="quotelev1">&gt; [cisitu02][0,1,3][btl_tcp_component.c: 
</span><br>
<span class="quotelev1">&gt; 412:mca_btl_tcp_component_create_listen] bind() failed with errno=13
</span><br>
<span class="quotelev1">&gt; [cisitu02:02897] [0,1,1] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; gpr_proxy_deliver_notify_msg.c at line 139
</span><br>
<span class="quotelev1">&gt; [cisitu02:02898] [0,1,3] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; gpr_proxy_deliver_notify_msg.c at line 139
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 2976 on node cisitu01 exited  
</span><br>
<span class="quotelev1">&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ### as root ###
</span><br>
<span class="quotelev1">&gt; -bash-3.2# mpirun -np 4 -hostfile nodes.lst mpihello
</span><br>
<span class="quotelev1">&gt; Process 0 on cisitu01 out of 4
</span><br>
<span class="quotelev1">&gt; Process 1 on cisitu02 out of 4
</span><br>
<span class="quotelev1">&gt; Process 3 on cisitu02 out of 4
</span><br>
<span class="quotelev1">&gt; Process 2 on cisitu01 out of 4
</span><br>
<span class="quotelev1">&gt; -bash-3.2#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; -andria
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.all&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="8481.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Previous message:</strong> <a href="8479.php">Gilbert Grosdidier: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>In reply to:</strong> <a href="8478.php">-andria-: "[OMPI users] open-mpi error: unable to create listen socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8490.php">-andria-: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>Reply:</strong> <a href="8490.php">-andria-: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
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
