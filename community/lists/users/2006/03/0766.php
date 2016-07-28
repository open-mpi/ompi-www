<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 20:19:24 2006" -->
<!-- isoreceived="20060303011924" -->
<!-- sent="Thu, 02 Mar 2006 18:19:20 -0700" -->
<!-- isosent="20060303011920" -->
<!-- name="Xiaoning (David) Yang" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running open mpi across nodes." -->
<!-- id="C02CE7A8.8F58%xyang_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E165415D-73F4-436E-A0AF-C46E95E0ED0A_at_open-mpi.org" -->
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
<strong>From:</strong> Xiaoning (David) Yang (<em>xyang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 20:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0767.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Previous message:</strong> <a href="0765.php">Andy Selle: "[OMPI users] C++ bool type reduction failing"</a>
<li><strong>In reply to:</strong> <a href="0764.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0767.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Reply:</strong> <a href="0767.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>My G5s only have one ethernet card each and are connected to the network
<br>
through those cards. I upgraded to Open MPI 1.0.2. The problem remains the
<br>
same.
<br>
<p>A somewhat detailed description of the problem is like this. When I run jobs
<br>
from the 4-cpu machine, specifying 6 processes, orted, orterun and 4
<br>
processes will start on this machine. orted and 2 processes will start on
<br>
the 2-cpu machine. The processes hang for a while and then I get the error
<br>
message . After that, the processes still hang. If I Ctrl+c, all processes
<br>
on both machines including both orteds and the orterun will quit. If I run
<br>
jobs from the 2-cpu machin, specfying 6 processes, orted, orterun and 2
<br>
processes will start on this machine. Only orted will start on the 4-cpu
<br>
machine and no processes will start. The job then hang and I don't get any
<br>
response. If I Ctrl+c, orted, orterun and the 2 processes on the 2-cpu
<br>
machine will quit. But orted on the 4-cpu machine will not quit.
<br>
<p>Does this have anything to do with the IP addresses? The IP address
<br>
xxx.xxx.aaa.bbb for one machine is different from the IP address
<br>
xxx.xxx.cc.dd for the other machine in that not only bbb is not dd, but also
<br>
aaa is not cc.
<br>
<p>David
<br>
<p>***** Correspondence *****
<br>
<p><p><p><span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 2 Mar 2006 18:50:35 -0500
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem running open mpi across nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2006, at 3:56 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I installed Open MPI on two Mac G5s, one with 2 cpus and the other
</span><br>
<span class="quotelev2">&gt;&gt; with 4
</span><br>
<span class="quotelev2">&gt;&gt; cpus. I can run jobs on either of the machines fine. But when I ran
</span><br>
<span class="quotelev2">&gt;&gt; a job on
</span><br>
<span class="quotelev2">&gt;&gt; machine one across the two nodes, the all processes I requested
</span><br>
<span class="quotelev2">&gt;&gt; would start,
</span><br>
<span class="quotelev2">&gt;&gt; but they then seemed to hang and I got the error message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=60[0,1,0][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 559:mca_btl_tcp_endpoint_complete_connect
</span><br>
<span class="quotelev2">&gt;&gt; ] connect() failed with errno=60
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I ran the job on machine two across the nodes, only processes
</span><br>
<span class="quotelev2">&gt;&gt; on this
</span><br>
<span class="quotelev2">&gt;&gt; machine would start and then hung. No processes would start on
</span><br>
<span class="quotelev2">&gt;&gt; machine one
</span><br>
<span class="quotelev2">&gt;&gt; and I didn't get any messages. In both cases, I have to Ctrl+C to
</span><br>
<span class="quotelev2">&gt;&gt; kill the
</span><br>
<span class="quotelev2">&gt;&gt; jobs. Any idea what was wrong? Thanks a lot!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; errno 60 is ETIMEDOUT, which means that the connect() timed out
</span><br>
<span class="quotelev1">&gt; before the remote side answered.  The other way was probably a
</span><br>
<span class="quotelev1">&gt; similar problem - there's something strange going on with the routing
</span><br>
<span class="quotelev1">&gt; on the two nodes that's causing OMPI to get confused.  Do your G5
</span><br>
<span class="quotelev1">&gt; machines have ethernet adapters other than the primary GigE cards
</span><br>
<span class="quotelev1">&gt; (wireless, a second GigE card, a Firewire TCP stack) by any chance?
</span><br>
<span class="quotelev1">&gt; There's an issue with situations where there are multiple ethernet
</span><br>
<span class="quotelev1">&gt; cards that causes the TCP btl to behave badly like this.  We think we
</span><br>
<span class="quotelev1">&gt; have it fixed in the latest 1.0.2 pre-release tarball of Open MPI, so
</span><br>
<span class="quotelev1">&gt; it might help to upgrade to that version:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.0/">http://www.open-mpi.org/software/ompi/v1.0/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="0767.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Previous message:</strong> <a href="0765.php">Andy Selle: "[OMPI users] C++ bool type reduction failing"</a>
<li><strong>In reply to:</strong> <a href="0764.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0767.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Reply:</strong> <a href="0767.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
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
