<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  3 11:33:22 2006" -->
<!-- isoreceived="20060303163322" -->
<!-- sent="Fri, 03 Mar 2006 09:33:19 -0700" -->
<!-- isosent="20060303163319" -->
<!-- name="Xiaoning (David) Yang" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running open mpi across nodes." -->
<!-- id="C02DBDDF.8FDB%xyang_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BBD25918-0EFD-4CAD-8779-0F70C9657CC7_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-03-03 11:33:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0774.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] Building OpenMPI with Lahey Fortran 95"</a>
<li><strong>Previous message:</strong> <a href="0772.php">Julian Seward: "[OMPI users] MPI_Type_get_envelope fails for no obvious reason"</a>
<li><strong>In reply to:</strong> <a href="0767.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Thank you so much! It is working now.
<br>
<p>David
<br>
<p>***** Correspondence *****
<br>
<p><p><p><span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 2 Mar 2006 20:32:25 -0500
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem running open mpi across nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2006, at 8:19 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My G5s only have one ethernet card each and are connected to the
</span><br>
<span class="quotelev2">&gt;&gt; network
</span><br>
<span class="quotelev2">&gt;&gt; through those cards. I upgraded to Open MPI 1.0.2. The problem
</span><br>
<span class="quotelev2">&gt;&gt; remains the
</span><br>
<span class="quotelev2">&gt;&gt; same.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A somewhat detailed description of the problem is like this. When I
</span><br>
<span class="quotelev2">&gt;&gt; run jobs
</span><br>
<span class="quotelev2">&gt;&gt; from the 4-cpu machine, specifying 6 processes, orted, orterun and 4
</span><br>
<span class="quotelev2">&gt;&gt; processes will start on this machine. orted and 2 processes will
</span><br>
<span class="quotelev2">&gt;&gt; start on
</span><br>
<span class="quotelev2">&gt;&gt; the 2-cpu machine. The processes hang for a while and then I get
</span><br>
<span class="quotelev2">&gt;&gt; the error
</span><br>
<span class="quotelev2">&gt;&gt; message . After that, the processes still hang. If I Ctrl+c, all
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; on both machines including both orteds and the orterun will quit.
</span><br>
<span class="quotelev2">&gt;&gt; If I run
</span><br>
<span class="quotelev2">&gt;&gt; jobs from the 2-cpu machin, specfying 6 processes, orted, orterun
</span><br>
<span class="quotelev2">&gt;&gt; and 2
</span><br>
<span class="quotelev2">&gt;&gt; processes will start on this machine. Only orted will start on the
</span><br>
<span class="quotelev2">&gt;&gt; 4-cpu
</span><br>
<span class="quotelev2">&gt;&gt; machine and no processes will start. The job then hang and I don't
</span><br>
<span class="quotelev2">&gt;&gt; get any
</span><br>
<span class="quotelev2">&gt;&gt; response. If I Ctrl+c, orted, orterun and the 2 processes on the 2-cpu
</span><br>
<span class="quotelev2">&gt;&gt; machine will quit. But orted on the 4-cpu machine will not quit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does this have anything to do with the IP addresses? The IP address
</span><br>
<span class="quotelev2">&gt;&gt; xxx.xxx.aaa.bbb for one machine is different from the IP address
</span><br>
<span class="quotelev2">&gt;&gt; xxx.xxx.cc.dd for the other machine in that not only bbb is not dd,
</span><br>
<span class="quotelev2">&gt;&gt; but also
</span><br>
<span class="quotelev2">&gt;&gt; aaa is not cc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, you can't guess right all the time :).  But I think you gave
</span><br>
<span class="quotelev1">&gt; enough information for the next thing to try.  It sounds like there
</span><br>
<span class="quotelev1">&gt; might be a firewall running on the 2 process machine.  When you
</span><br>
<span class="quotelev1">&gt; orterun on the 4 cpu machine, the remote orted can clearly connect
</span><br>
<span class="quotelev1">&gt; back to orterun because it is getting the process startup and
</span><br>
<span class="quotelev1">&gt; shutdown messages.  Things only fail when the MPI process on the 4
</span><br>
<span class="quotelev1">&gt; cpu machine try to connect to the other processes.  On the other
</span><br>
<span class="quotelev1">&gt; hand, when you start on the 2 cpu machine, the orted on the 4 cpu
</span><br>
<span class="quotelev1">&gt; machine starts but can't even connect back to orterun to find out
</span><br>
<span class="quotelev1">&gt; what processes to start, nor can it get the shutdown request.  So you
</span><br>
<span class="quotelev1">&gt; get a hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you go into System Preferences -&gt; Sharing, make sure that the
</span><br>
<span class="quotelev1">&gt; firewall is turned off  in the &quot;firewall&quot; tab.  Hopefully, that will
</span><br>
<span class="quotelev1">&gt; do the trick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 2 Mar 2006 18:50:35 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Problem running open mpi across nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 2, 2006, at 3:56 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I installed Open MPI on two Mac G5s, one with 2 cpus and the other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpus. I can run jobs on either of the machines fine. But when I ran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a job on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine one across the two nodes, the all processes I requested
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would start,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but they then seemed to hang and I got the error message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0,1,1][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 559:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connect() failed with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errno=60[0,1,0][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 559:mca_btl_tcp_endpoint_complete_connect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ] connect() failed with errno=60
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I ran the job on machine two across the nodes, only processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine would start and then hung. No processes would start on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I didn't get any messages. In both cases, I have to Ctrl+C to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; kill the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jobs. Any idea what was wrong? Thanks a lot!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno 60 is ETIMEDOUT, which means that the connect() timed out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before the remote side answered.  The other way was probably a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similar problem - there's something strange going on with the routing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the two nodes that's causing OMPI to get confused.  Do your G5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines have ethernet adapters other than the primary GigE cards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (wireless, a second GigE card, a Firewire TCP stack) by any chance?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There's an issue with situations where there are multiple ethernet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cards that causes the TCP btl to behave badly like this.  We think we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have it fixed in the latest 1.0.2 pre-release tarball of Open MPI, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it might help to upgrade to that version:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.0/">http://www.open-mpi.org/software/ompi/v1.0/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="0774.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] Building OpenMPI with Lahey Fortran 95"</a>
<li><strong>Previous message:</strong> <a href="0772.php">Julian Seward: "[OMPI users] MPI_Type_get_envelope fails for no obvious reason"</a>
<li><strong>In reply to:</strong> <a href="0767.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
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
