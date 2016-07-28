<?
$subject_val = "Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 30 09:01:21 2010" -->
<!-- isoreceived="20100930130121" -->
<!-- sent="Thu, 30 Sep 2010 09:00:31 -0400" -->
<!-- isosent="20100930130031" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem" -->
<!-- id="OF44F48ABB.08BC89E4-ON852577AE.00468287-852577AE.004775AB_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1285811227.5787.64.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-30 09:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14363.php">Daniel Beatty: "[OMPI users] Potential developer to reinstate Xgrid support"</a>
<li><strong>Previous message:</strong> <a href="14361.php">Reuti: "Re: [OMPI users] how to tell if opempi is using rsh or ssh"</a>
<li><strong>In reply to:</strong> <a href="14360.php">Terry Frankcombe: "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14497.php">Rob Latham: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14497.php">Rob Latham: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will add to what Terry said by mentioning that the MPI implementation 
<br>
has no awareness of ordinary POSIX or Fortran disk I/O routines.  It 
<br>
cannot help on those.
<br>
<p>Any automated help the MPI implementation can provide would only apply to 
<br>
MPI_File_xxx  disk I/O.  These are implemented by the MPI library. 
<br>
<p>It is possible for MPI-IO to be implemented in a way that lets a single 
<br>
process or the set of process on a node act as the disk i/O agents for the 
<br>
entire job but someone else will need to tell you if OpenMPI can do this, 
<br>
I think OpenMPI built on the ROMIO MPI-IO implementation and based on my 
<br>
outdated knowledge of ROMIO, I would be a bit surprised if it has his 
<br>
option.
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p><p>From:
<br>
Terry Frankcombe &lt;terry_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
09/29/2010 09:50 PM
<br>
Subject:
<br>
Re: [OMPI users] a question about [MPI]IO on systems    without network 
<br>
filesystem
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>
<p><p><p>Hi Paul
<br>
<p>I think you should clarify whether you mean you want you application to
<br>
send all it's data back to a particular rank, which then does all IO (in
<br>
which case the answer is any MPI implementation can do this... it's a
<br>
matter of how you code the app), or if you want the application to know
<br>
nothing about it, but have the system somehow intercept all IO and make
<br>
it magically appear at a particular node (much harder).
<br>
<p><p>On Wed, 2010-09-29 at 11:34 +0200, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI developer,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a question about the possibility to use MPI IO (and possible 
</span><br>
<span class="quotelev1">&gt; regular I/O) on clusters which does *not* have a common filesystem 
</span><br>
<span class="quotelev1">&gt; (network filesystem) on all nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A common filesystem is mainly NOT a hard precondition to use OpenMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<a href="http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem">http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Say, we have a (diskless? equipped with very small disks?) cluster, on 
</span><br>
<span class="quotelev1">&gt; which only one node have access to a filesystem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to configure/run OpenMPI in a such way, that only _one_ 
</span><br>
<span class="quotelev1">&gt; process (e.g. master) performs real disk I/O, and other processes sends 
</span><br>
<span class="quotelev1">&gt; the data to the master which works as an agent?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course this would impacts the performance, because all data must be 
</span><br>
<span class="quotelev1">&gt; send over network, and the master may became a bottleneck. But is such 
</span><br>
<span class="quotelev1">&gt; scenario - IO of all processes bundled to one  process - practicable at 
</span><br>
all?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes
</span><br>
<span class="quotelev1">&gt; Paul
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14362/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14363.php">Daniel Beatty: "[OMPI users] Potential developer to reinstate Xgrid support"</a>
<li><strong>Previous message:</strong> <a href="14361.php">Reuti: "Re: [OMPI users] how to tell if opempi is using rsh or ssh"</a>
<li><strong>In reply to:</strong> <a href="14360.php">Terry Frankcombe: "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14497.php">Rob Latham: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14497.php">Rob Latham: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
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
