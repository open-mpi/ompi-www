<?
$subject_val = "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 19 14:46:56 2010" -->
<!-- isoreceived="20101019184656" -->
<!-- sent="Tue, 19 Oct 2010 13:46:51 -0500" -->
<!-- isosent="20101019184651" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem" -->
<!-- id="20101019184650.GC11719_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF44F48ABB.08BC89E4-ON852577AE.00468287-852577AE.004775AB_at_us.ibm.com" -->
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
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-19 14:46:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14498.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<li><strong>Previous message:</strong> <a href="14496.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14362.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14498.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<li><strong>Reply:</strong> <a href="14498.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep 30, 2010 at 09:00:31AM -0400, Richard Treumann wrote:
<br>
<span class="quotelev1">&gt; It is possible for MPI-IO to be implemented in a way that lets a single 
</span><br>
<span class="quotelev1">&gt; process or the set of process on a node act as the disk i/O agents for the 
</span><br>
<span class="quotelev1">&gt; entire job but someone else will need to tell you if OpenMPI can do this, 
</span><br>
<span class="quotelev1">&gt; I think OpenMPI built on the ROMIO MPI-IO implementation and based on my 
</span><br>
<span class="quotelev1">&gt; outdated knowledge of ROMIO, I would be a bit surprised if it has his 
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14498.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<li><strong>Previous message:</strong> <a href="14496.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14362.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14498.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<li><strong>Reply:</strong> <a href="14498.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
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
