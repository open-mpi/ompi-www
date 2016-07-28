<?
$subject_val = "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 11:50:27 2014" -->
<!-- isoreceived="20140807155027" -->
<!-- sent="Thu, 7 Aug 2014 08:49:57 -0700" -->
<!-- isosent="20140807154957" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C" -->
<!-- id="96FD7CE7-FCF7-41F6-9726-A4B4049B3C2B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="97ACD0E6-647B-4D00-B9AB-BBF8EC0D5025_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-07 11:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24940.php">Reuti: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>In reply to:</strong> <a href="24940.php">Reuti: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24945.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24945.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 7, 2014, at 8:47 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 07.08.2014 um 17:28 schrieb Gus Correa:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess Control-C will kill only the mpirun process.
</span><br>
<span class="quotelev2">&gt;&gt; You may need to kill the (two) jules.exe processes separately,
</span><br>
<span class="quotelev2">&gt;&gt; say, with kill -9.
</span><br>
<span class="quotelev2">&gt;&gt; ps -u &quot;yourname&quot;
</span><br>
<span class="quotelev2">&gt;&gt; will show what you have running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't Open MPI clean this up in a proper way when Control-C is pressed?
</span><br>
<p>So far as I know, it does...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But maybe there is something left in /tmp like &quot;openmpi-sessions-..._at_...&quot; which needs to be removed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 08/07/2014 11:16 AM, Jane Lewis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a really simple problem (I hope) where I&#146;ve introduced MPI to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complex numerical model which I have to kill occasionally with Control-C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as I don&#146;t want it running forever.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have only used mpi_init(), mpi_comm_size(), mpi_comm_rank() and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_finalize()&#150; there are no send/receive calls going on at the moment &#150;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I only have two instances. My startup command is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/bin/mpirun  -np 2 -hostfile hostfile jules.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where hostfile has one entry : localhost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The result of terminating the process with Control-C at the command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prompt from where I launched it, is that I am then unable to run it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; again. I get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#147;mpirun has exited due to process rank 0 with PID 10094 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; metclcv10.local exiting improperly. There are two reasons this could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occur:&#133;&#148; error each time despite checking running processes for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stragglers, closing my terminal, or changing node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have spent several hours searching for an answer to this, if it&#146;s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; already somewhere then please point me in the right direction.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jane
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; package:Open MPI root_at_centos-6-3.localdomain Distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi:version:full:1.6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi:version:svn:r27344
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte:version:full:1.6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte:version:svn:r27344
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal:version:full:1.6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal:version:svn:r27344
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi-api:version:full:2.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ident:1.6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m using centos-6-3 and FORTRAN.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jane Lewis
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Deputy Technical Director, Reading e-Science Centre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Meteorology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Reading, UK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +44 (0)118 378 5173
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.resc.reading.ac.uk">http://www.resc.reading.ac.uk</a> &lt;<a href="http://www.resc.reading.ac.uk/">http://www.resc.reading.ac.uk/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24938.php">http://www.open-mpi.org/community/lists/users/2014/08/24938.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24939.php">http://www.open-mpi.org/community/lists/users/2014/08/24939.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24940.php">http://www.open-mpi.org/community/lists/users/2014/08/24940.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24940.php">Reuti: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>In reply to:</strong> <a href="24940.php">Reuti: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24945.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24945.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
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
