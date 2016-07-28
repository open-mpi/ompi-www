<?
$subject_val = "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 19 15:10:16 2010" -->
<!-- isoreceived="20101019191016" -->
<!-- sent="Tue, 19 Oct 2010 15:10:03 -0400" -->
<!-- isosent="20101019191003" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem" -->
<!-- id="OF19D1FB51.C43B5D9B-ON852577C1.00687171-852577C1.00694CFC_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20101019184650.GC11719_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-19 15:10:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14499.php">Jack Bryan: "[OMPI users] Open MPI dynamic data structure error"</a>
<li><strong>Previous message:</strong> <a href="14497.php">Rob Latham: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<li><strong>In reply to:</strong> <a href="14497.php">Rob Latham: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Rob mentions
<br>
<p>There are three capabilities to consider:
<br>
<p>1) The process (or processes) that will do the I/O are members of the file 
<br>
handle's hidden communicator and the call is collective
<br>
<p>2)) The process (or processes) that will do the I/O are members of the 
<br>
file handle's hidden communicator but the call is non-collective and made 
<br>
by a remote rank
<br>
<p>3) The process (or processes) that will do the I/O are not members.  The 
<br>
MPI_COMM_SELF mention would probably be this second case.
<br>
<p>Number 2 &amp; 3 are harder but still an implementation option.  The standard 
<br>
does not require or prohibit them.
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
Rob Latham &lt;robl_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
10/19/2010 02:47 PM
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
<p><p><p>On Thu, Sep 30, 2010 at 09:00:31AM -0400, Richard Treumann wrote:
<br>
<span class="quotelev1">&gt; It is possible for MPI-IO to be implemented in a way that lets a single 
</span><br>
<span class="quotelev1">&gt; process or the set of process on a node act as the disk i/O agents for 
</span><br>
the 
<br>
<span class="quotelev1">&gt; entire job but someone else will need to tell you if OpenMPI can do 
</span><br>
this, 
<br>
<span class="quotelev1">&gt; I think OpenMPI built on the ROMIO MPI-IO implementation and based on my 
</span><br>
<p><span class="quotelev1">&gt; outdated knowledge of ROMIO, I would be a bit surprised if it has his 
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<p>SURPRISE!!!  ROMIO has been able to do this since about 2002 (It was
<br>
my first ROMIO project when I came to Argonne).
<br>
<p>now, if you do independent i/o or you do i/o on comm_self, then ROMIO
<br>
can't really do anything for you. 
<br>
<p>But... 
<br>
- if you use collective I/O 
<br>
- and you set the &quot;cb_config_list&quot; to contain the machine name of the
<br>
&nbsp;&nbsp;one node with a disk (or if everyone has a disk, pick one to be the
<br>
&nbsp;&nbsp;master)
<br>
- and you set &quot;romio_no_indep_rw&quot; to &quot;enable&quot;
<br>
<p>then two things will happen.  first, ROMIO will enter &quot;deferred open&quot;
<br>
mode, meaning only the designated I/O aggregators will open the file.
<br>
second, your collective MPI_File_*_all calls will all go through the
<br>
one node you gave in the cb_config_list.
<br>
<p>Try it and if it does/doesn't work, I'd like to hear. 
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14498/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14499.php">Jack Bryan: "[OMPI users] Open MPI dynamic data structure error"</a>
<li><strong>Previous message:</strong> <a href="14497.php">Rob Latham: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<li><strong>In reply to:</strong> <a href="14497.php">Rob Latham: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
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
