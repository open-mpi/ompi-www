<?
$subject_val = "Re: [OMPI users] OpenMPI problem on Fedora Core 12";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 13:26:33 2009" -->
<!-- isoreceived="20091214182633" -->
<!-- sent="Mon, 14 Dec 2009 10:28:05 -0800" -->
<!-- isosent="20091214182805" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI problem on Fedora Core 12" -->
<!-- id="4B2683B5.50206_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5684A68E-2A81-46BD-ABAE-CA33DE16DCE9_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI problem on Fedora Core 12<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-14 13:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11531.php">Ashley Pittman: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11529.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11524.php">Gijsbert Wiesenekker: "[OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11531.php">Ashley Pittman: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's start with this:  You generate non-blocking sends (MPI_Isend).  
<br>
Those sends are not completed anywhere.  So, strictly speaking, they 
<br>
don't need to be executed.  In practice, even if they are executed, they 
<br>
should be &quot;completed&quot; from the user program's point of view (MPI_Test, 
<br>
MPI_Wait, MPI_Waitall, etc.) to reclaim resources associated with the 
<br>
requests.
<br>
<p>So, you should start by fixing that.  The question arises where you 
<br>
should complete those send calls.  I think there are several steps you 
<br>
could take here to get what you're looking for:
<br>
<p>1) Implement a version that works without worrying about &quot;sleep&quot; 
<br>
behavior.  In your case, you're sending messages in an all-to-all 
<br>
pattern.  So, for example, you could issue an MPI_Irecv for each 
<br>
non-self process.  Then, issue an MPI_Isend for each non-self process.  
<br>
Then, issue MPI_Wait commands to complete all those requests.
<br>
<p>2) (Optional step):  consider alternative message patterns, like trees, 
<br>
to cut down on all the message traffic.
<br>
<p>3) Insert the &quot;sleep&quot; calls.
<br>
<p>If you fix that and still have problems, let us know and let us know 
<br>
what &quot;interconnect&quot; (possibly on-node shared memory) you're using and 
<br>
what GCC version.
<br>
<p>Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt;The following routine gives a problem after some (not reproducible) time on Fedora Core 12. The routine is a CPU usage friendly version of MPI_Barrier.
</span><br>
<span class="quotelev1">&gt;The verbose output shows that if the problem occurs one of the (not reproducible) nodes does not receive a message from one of the other (not reproducible) nodes, so it looks like the message is lost or is never received. This routine worked fine on Fedora Core 10 with OpenMPI 1.3.x and works fine on Centos 5.3 with OpenMPI 1.3.x. The problem occurs with OpenMPI 1.3.x, OpenMPI 1.4, gcc and icc.
</span><br>
<span class="quotelev1">&gt;My question is: is there a problem with this routine that I overlooked that somehow did not show up until now, and if not, how can I debug what causes this problem. Is there a way to see which messages have been sent/received/are pending?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Regards,
</span><br>
<span class="quotelev1">&gt;Gijsbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;local void my_barrier(char * info, MPI_Comm comm, int verbose)
</span><br>
<span class="quotelev1">&gt;{
</span><br>
<span class="quotelev1">&gt;	int ncomm;
</span><br>
<span class="quotelev1">&gt;	int comm_id;
</span><br>
<span class="quotelev1">&gt;	int send[MPI_NPROCS_MAX];
</span><br>
<span class="quotelev1">&gt;	MPI_Request request[MPI_NPROCS_MAX];
</span><br>
<span class="quotelev1">&gt;	int icomm;
</span><br>
<span class="quotelev1">&gt;	int done[MPI_NPROCS_MAX];
</span><br>
<span class="quotelev1">&gt;	time_t t0, t1;
</span><br>
<span class="quotelev1">&gt;	double wall[MPI_NPROCS_MAX];
</span><br>
<span class="quotelev1">&gt;	double wall_max;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	BUG(mpi_nprocs == 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	MPI_Comm_size(comm, &amp;ncomm);
</span><br>
<span class="quotelev1">&gt;	BUG(ncomm &lt; 1)
</span><br>
<span class="quotelev1">&gt;	MPI_Comm_rank(comm, &amp;comm_id);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	my_printf(&quot;entering barrier %s %d %d\n&quot;, info, ncomm, comm_id);
</span><br>
<span class="quotelev1">&gt;	for (icomm = 0; icomm &lt; ncomm; icomm++) send[icomm] = comm_id;
</span><br>
<span class="quotelev1">&gt;	for (icomm = 0; icomm &lt; ncomm; icomm++)
</span><br>
<span class="quotelev1">&gt;	{
</span><br>
<span class="quotelev1">&gt;		if (icomm != comm_id)
</span><br>
<span class="quotelev1">&gt;		{
</span><br>
<span class="quotelev1">&gt;			if (verbose) my_printf(&quot;sending from %d to %d\n&quot;, comm_id, icomm);
</span><br>
<span class="quotelev1">&gt;			MPI_Isend(send + icomm, 1, MPI_INT, icomm, MPI_BARRIER_TAG,
</span><br>
<span class="quotelev1">&gt;				comm, request + icomm);
</span><br>
<span class="quotelev1">&gt;			done[icomm] = FALSE;
</span><br>
<span class="quotelev1">&gt;		}
</span><br>
<span class="quotelev1">&gt;		else
</span><br>
<span class="quotelev1">&gt;		{
</span><br>
<span class="quotelev1">&gt;			done[icomm] = TRUE;
</span><br>
<span class="quotelev1">&gt;		}
</span><br>
<span class="quotelev1">&gt;		wall[icomm] = 0.0;
</span><br>
<span class="quotelev1">&gt;	}
</span><br>
<span class="quotelev1">&gt;	t0 = time(NULL);
</span><br>
<span class="quotelev1">&gt;	while(TRUE)
</span><br>
<span class="quotelev1">&gt;	{
</span><br>
<span class="quotelev1">&gt;		int receive;
</span><br>
<span class="quotelev1">&gt;		int flag;
</span><br>
<span class="quotelev1">&gt;		MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;		MPI_Iprobe(MPI_ANY_SOURCE, MPI_BARRIER_TAG,
</span><br>
<span class="quotelev1">&gt;			comm, &amp;flag, &amp;status);
</span><br>
<span class="quotelev1">&gt;		if (!flag)
</span><br>
<span class="quotelev1">&gt;		{
</span><br>
<span class="quotelev1">&gt;			my_sleep(0, BARRIER_POLL);
</span><br>
<span class="quotelev1">&gt;			continue;
</span><br>
<span class="quotelev1">&gt;		}
</span><br>
<span class="quotelev1">&gt;		BUG(status.MPI_SOURCE &lt; 0)
</span><br>
<span class="quotelev1">&gt;		BUG(status.MPI_SOURCE &gt;= ncomm)
</span><br>
<span class="quotelev1">&gt;		MPI_Recv(&amp;receive, 1, MPI_INT, status.MPI_SOURCE, MPI_BARRIER_TAG,
</span><br>
<span class="quotelev1">&gt;			comm, &amp;status);
</span><br>
<span class="quotelev1">&gt;		BUG(receive != status.MPI_SOURCE)
</span><br>
<span class="quotelev1">&gt;		BUG(done[status.MPI_SOURCE])
</span><br>
<span class="quotelev1">&gt;		if (verbose) my_printf(&quot;receiving from %d\n&quot;, status.MPI_SOURCE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;		t1 = time(NULL);
</span><br>
<span class="quotelev1">&gt;		done[status.MPI_SOURCE] = TRUE;
</span><br>
<span class="quotelev1">&gt;		wall[status.MPI_SOURCE] = difftime(t1, t0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;		for (icomm = 0; icomm &lt; ncomm; icomm++)
</span><br>
<span class="quotelev1">&gt;			if (!done[icomm]) break;
</span><br>
<span class="quotelev1">&gt;		if (icomm == ncomm) break;
</span><br>
<span class="quotelev1">&gt;	}
</span><br>
<span class="quotelev1">&gt;	my_printf(&quot;leaving barrier %s\n&quot;, info);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	wall_max = 0;
</span><br>
<span class="quotelev1">&gt;	for (icomm = 0; icomm &lt; ncomm; icomm++)
</span><br>
<span class="quotelev1">&gt;	{	
</span><br>
<span class="quotelev1">&gt;		if (verbose)
</span><br>
<span class="quotelev1">&gt;			my_printf(&quot;icomm=%d time=%.0f%s\n&quot;,
</span><br>
<span class="quotelev1">&gt;				icomm, wall[icomm], icomm == comm_id ? &quot; *&quot; : &quot;&quot;);
</span><br>
<span class="quotelev1">&gt;		if (wall[icomm] &gt; wall_max) wall_max = wall[icomm];
</span><br>
<span class="quotelev1">&gt;	}
</span><br>
<span class="quotelev1">&gt;	//to be sure
</span><br>
<span class="quotelev1">&gt;	MPI_Barrier(comm);
</span><br>
<span class="quotelev1">&gt;	MPI_Allreduce(MPI_IN_PLACE, &amp;wall_max, 1,
</span><br>
<span class="quotelev1">&gt;		MPI_DOUBLE, MPI_MAX, comm);
</span><br>
<span class="quotelev1">&gt;	my_printf(&quot;mpi wall_max=%.0f\n&quot;, wall_max);
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11531.php">Ashley Pittman: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11529.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11524.php">Gijsbert Wiesenekker: "[OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11531.php">Ashley Pittman: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
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
