<?
$subject_val = "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 11:27:39 2014" -->
<!-- isoreceived="20140807152739" -->
<!-- sent="Thu, 07 Aug 2014 11:28:52 -0400" -->
<!-- isosent="20140807152852" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C" -->
<!-- id="53E39B34.5050304_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="2DA00190D12F2143B16E21D8FC3438AA538F0842_at_vime-mbx6.rdg.ac.uk" -->
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
<strong>Date:</strong> 2014-08-07 11:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24940.php">Reuti: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24938.php">Jane Lewis: "[OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>In reply to:</strong> <a href="24938.php">Jane Lewis: "[OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24940.php">Reuti: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24940.php">Reuti: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24943.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess Control-C will kill only the mpirun process.
<br>
You may need to kill the (two) jules.exe processes separately,
<br>
say, with kill -9.
<br>
ps -u &quot;yourname&quot;
<br>
will show what you have running.
<br>
<p><p>On 08/07/2014 11:16 AM, Jane Lewis wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a really simple problem (I hope) where I&#146;ve introduced MPI to a
</span><br>
<span class="quotelev1">&gt; complex numerical model which I have to kill occasionally with Control-C
</span><br>
<span class="quotelev1">&gt; as I don&#146;t want it running forever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have only used mpi_init(), mpi_comm_size(), mpi_comm_rank() and
</span><br>
<span class="quotelev1">&gt; mpi_finalize()&#150; there are no send/receive calls going on at the moment &#150;
</span><br>
<span class="quotelev1">&gt; and I only have two instances. My startup command is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #/bin/bash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun  -np 2 -hostfile hostfile jules.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where hostfile has one entry : localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The result of terminating the process with Control-C at the command
</span><br>
<span class="quotelev1">&gt; prompt from where I launched it, is that I am then unable to run it
</span><br>
<span class="quotelev1">&gt; again. I get the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#147;mpirun has exited due to process rank 0 with PID 10094 on node
</span><br>
<span class="quotelev1">&gt; metclcv10.local exiting improperly. There are two reasons this could
</span><br>
<span class="quotelev1">&gt; occur:&#133;&#148; error each time despite checking running processes for
</span><br>
<span class="quotelev1">&gt; stragglers, closing my terminal, or changing node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have spent several hours searching for an answer to this, if it&#146;s
</span><br>
<span class="quotelev1">&gt; already somewhere then please point me in the right direction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; many thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jane
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; package:Open MPI root_at_centos-6-3.localdomain Distribution
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi:version:full:1.6.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi:version:svn:r27344
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte:version:full:1.6.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte:version:svn:r27344
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal:version:full:1.6.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal:version:svn:r27344
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ident:1.6.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m using centos-6-3 and FORTRAN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jane Lewis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deputy Technical Director, Reading e-Science Centre
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Department of Meteorology
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Reading, UK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)118 378 5173
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.resc.reading.ac.uk">http://www.resc.reading.ac.uk</a> &lt;<a href="http://www.resc.reading.ac.uk/">http://www.resc.reading.ac.uk/</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24938.php">http://www.open-mpi.org/community/lists/users/2014/08/24938.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24940.php">Reuti: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24938.php">Jane Lewis: "[OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>In reply to:</strong> <a href="24938.php">Jane Lewis: "[OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24940.php">Reuti: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24940.php">Reuti: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24943.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
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
