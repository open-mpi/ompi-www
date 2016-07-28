<?
$subject_val = "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 12:15:47 2014" -->
<!-- isoreceived="20140807161547" -->
<!-- sent="Thu, 07 Aug 2014 12:17:01 -0400" -->
<!-- isosent="20140807161701" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C" -->
<!-- id="53E3A67D.4000200_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="96FD7CE7-FCF7-41F6-9726-A4B4049B3C2B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-07 12:17:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24946.php">Ralph Castain: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24944.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>In reply to:</strong> <a href="24941.php">Ralph Castain: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24946.php">Ralph Castain: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24946.php">Ralph Castain: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/07/2014 11:49 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 7, 2014, at 8:47 AM, Reuti &lt;reuti_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 07.08.2014 um 17:28 schrieb Gus Correa:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess Control-C will kill only the mpirun process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may need to kill the (two) jules.exe processes separately,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; say, with kill -9.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ps -u &quot;yourname&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will show what you have running.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shouldn't Open MPI clean this up in a proper way when Control-C is
</span><br>
<span class="quotelev2">&gt;&gt; pressed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far as I know, it does...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>How about processes in D state, waiting for a slow/busy NFS server?
<br>
Could this prevent Control-C to do the right thing?
<br>
<p>Gus Correa
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But maybe there is something left in /tmp like
</span><br>
<span class="quotelev2">&gt;&gt; &quot;openmpi-sessions-..._at_...&quot; which needs to be removed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 08/07/2014 11:16 AM, Jane Lewis wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is a really simple problem (I hope) where I&#146;ve introduced MPI to a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; complex numerical model which I have to kill occasionally with Control-C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as I don&#146;t want it running forever.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have only used mpi_init(), mpi_comm_size(), mpi_comm_rank() and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_finalize()&#150; there are no send/receive calls going on at the moment &#150;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I only have two instances. My startup command is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #/bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi/bin/mpirun  -np 2 -hostfile hostfile jules.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where hostfile has one entry : localhost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The result of terminating the process with Control-C at the command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prompt from where I launched it, is that I am then unable to run it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; again. I get the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#147;mpirun has exited due to process rank 0 with PID 10094 on node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; metclcv10.local exiting improperly. There are two reasons this could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; occur:&#133;&#148; error each time despite checking running processes for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stragglers, closing my terminal, or changing node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have spent several hours searching for an answer to this, if it&#146;s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; already somewhere then please point me in the right direction.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; many thanks in advance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jane
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For info:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; package:Open MPI root_at_centos-6-3.localdomain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:root_at_centos-6-3.localdomain&gt; Distribution
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi:version:full:1.6.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi:version:svn:r27344
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte:version:full:1.6.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte:version:svn:r27344
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal:version:full:1.6.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal:version:svn:r27344
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi-api:version:full:2.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ident:1.6.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#146;m using centos-6-3 and FORTRAN.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jane Lewis
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Deputy Technical Director, Reading e-Science Centre
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Meteorology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University of Reading, UK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: +44 (0)118 378 5173
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.resc.reading.ac.uk">http://www.resc.reading.ac.uk</a> &lt;<a href="http://www.resc.reading.ac.uk/">http://www.resc.reading.ac.uk/</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24938.php">http://www.open-mpi.org/community/lists/users/2014/08/24938.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24939.php">http://www.open-mpi.org/community/lists/users/2014/08/24939.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/24940.php">http://www.open-mpi.org/community/lists/users/2014/08/24940.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24941.php">http://www.open-mpi.org/community/lists/users/2014/08/24941.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24946.php">Ralph Castain: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24944.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>In reply to:</strong> <a href="24941.php">Ralph Castain: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24946.php">Ralph Castain: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24946.php">Ralph Castain: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
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
