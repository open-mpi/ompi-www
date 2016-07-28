<?
$subject_val = "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 12:09:17 2014" -->
<!-- isoreceived="20140807160917" -->
<!-- sent="Thu, 07 Aug 2014 12:10:31 -0400" -->
<!-- isosent="20140807161031" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C" -->
<!-- id="53E3A4F7.4030903_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="53E39B34.5050304_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-08-07 12:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24944.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Previous message:</strong> <a href="24942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>In reply to:</strong> <a href="24939.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/07/2014 11:28 AM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; I guess Control-C will kill only the mpirun process.
</span><br>
<span class="quotelev1">&gt; You may need to kill the (two) jules.exe processes separately,
</span><br>
<span class="quotelev1">&gt; say, with kill -9.
</span><br>
<span class="quotelev1">&gt; ps -u &quot;yourname&quot;
</span><br>
<span class="quotelev1">&gt; will show what you have running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Something may have been left behind by Control-C,
<br>
although as Reuti and Ralph said that is unusual.
<br>
Besides the jules.exe and mpiexec,
<br>
check for the orted process also,
<br>
which may need to be killed manually.
<br>
Just in case: Better not run MPI programs as root,
<br>
but as a regular user.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/07/2014 11:16 AM, Jane Lewis wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a really simple problem (I hope) where I&#146;ve introduced MPI to a
</span><br>
<span class="quotelev2">&gt;&gt; complex numerical model which I have to kill occasionally with Control-C
</span><br>
<span class="quotelev2">&gt;&gt; as I don&#146;t want it running forever.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have only used mpi_init(), mpi_comm_size(), mpi_comm_rank() and
</span><br>
<span class="quotelev2">&gt;&gt; mpi_finalize()&#150; there are no send/receive calls going on at the moment &#150;
</span><br>
<span class="quotelev2">&gt;&gt; and I only have two instances. My startup command is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/bin/mpirun  -np 2 -hostfile hostfile jules.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where hostfile has one entry : localhost
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The result of terminating the process with Control-C at the command
</span><br>
<span class="quotelev2">&gt;&gt; prompt from where I launched it, is that I am then unable to run it
</span><br>
<span class="quotelev2">&gt;&gt; again. I get the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#147;mpirun has exited due to process rank 0 with PID 10094 on node
</span><br>
<span class="quotelev2">&gt;&gt; metclcv10.local exiting improperly. There are two reasons this could
</span><br>
<span class="quotelev2">&gt;&gt; occur:&#133;&#148; error each time despite checking running processes for
</span><br>
<span class="quotelev2">&gt;&gt; stragglers, closing my terminal, or changing node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have spent several hours searching for an answer to this, if it&#146;s
</span><br>
<span class="quotelev2">&gt;&gt; already somewhere then please point me in the right direction.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; many thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jane
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; package:Open MPI root_at_centos-6-3.localdomain Distribution
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi:version:full:1.6.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi:version:svn:r27344
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte:version:full:1.6.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte:version:svn:r27344
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal:version:full:1.6.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal:version:svn:r27344
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpi-api:version:full:2.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ident:1.6.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m using centos-6-3 and FORTRAN.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jane Lewis
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Deputy Technical Director, Reading e-Science Centre
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Department of Meteorology
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; University of Reading, UK
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +44 (0)118 378 5173
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.resc.reading.ac.uk">http://www.resc.reading.ac.uk</a> &lt;<a href="http://www.resc.reading.ac.uk/">http://www.resc.reading.ac.uk/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24938.php">http://www.open-mpi.org/community/lists/users/2014/08/24938.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24939.php">http://www.open-mpi.org/community/lists/users/2014/08/24939.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24944.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Previous message:</strong> <a href="24942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>In reply to:</strong> <a href="24939.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
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
