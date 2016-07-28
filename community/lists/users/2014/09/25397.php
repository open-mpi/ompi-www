<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Application hangs in 1.8.1 related to collective operations";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 28 15:58:40 2014" -->
<!-- isoreceived="20140928195840" -->
<!-- sent="Sun, 28 Sep 2014 19:58:36 +0000" -->
<!-- isosent="20140928195836" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Application hangs in 1.8.1 related to collective operations" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CBF6690_at_HDXDSP53.us.lmco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] EXTERNAL: Re: Application hangs in 1.8.1 related to collective operations" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Application hangs in 1.8.1 related to collective operations<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-28 15:58:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25398.php">Lee-Ping Wang: "[OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Previous message:</strong> <a href="25396.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Howard,
<br>

<br>
I&#226;&#128;&#153;ve attached ompi_info &#226;&#128;&#147;c output.
<br>

<br>
Below are the code snippets that all processes execute.  The first one has some number of MPI_REDUCE calls. It&#226;&#128;&#153;s not an IREDUCE, is that what you mean by &#226;&#128;&#152;variation&#226;&#128;&#153;?  The second one calls the MPI_ALLREDUCE.
<br>

<br>
All the processes execute both of these regions of the code. When the job hangs, I notice after 15 or 20 minutes of no progress.  Then I kill one of the processes, and the stack trace indicates that most of the processes are still in the next-to-last MPI_REDUCE (the 3rd of the 4 that you see), but 3 of them are in the MPI_ALLREDUCE.  I miscounted earlier when I said the majority of processes were in the 4th MPI_REDUCE out of 5.  It was the 3rd out of 4.
<br>

<br>
You also asked about size.  The first two MPI_REDUCE calls in the loop below involve 1 element; the second two calls involve num_quans elements, which is 22 in the case that hangs.
<br>

<br>
I will post some output from the coll_base_verbose output in the next e-mail.
<br>

<br>
Thanks again
<br>

<br>
Ed
<br>

<br>
Snippet #1
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;do k = 1, num_integrations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (integration(k)%skip) cycle
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atots_tot = 0.0_fdf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atots = integration(k)%atots  ! locally accumulated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_reduce(atots,atots_tot,1,my_mpi_real,MPI_SUM,0,exec_comm,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr /= MPI_SUCCESS) call handle_mpi_error('inforce atots mpi_reduce',ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integration(k)%atots = atots_tot
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rats_tot = 0.0_fdf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rats = integration(k)%rats  ! locally accumulated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_reduce(rats,rats_tot,1,my_mpi_real,MPI_SUM,0,exec_comm,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr /= MPI_SUCCESS) call handle_mpi_error('inforce rats mpi_reduce',ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integration(k)%rats = rats_tot
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int_data_tot = 0.0_fdf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_reduce(integration(k)%int_data,int_data_tot, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integration(k)%num_quans,my_mpi_real,MPI_SUM, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,exec_comm,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr /= MPI_SUCCESS) call handle_mpi_error('inforce int_data mpi_reduce',ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integration(k)%int_data = int_data_tot
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quan_num_max = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_reduce(integration(k)%quan_num,quan_num_max, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integration(k)%num_quans,MPI_INTEGER,MPI_MAX, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,exec_comm,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr /= MPI_SUCCESS) call handle_mpi_error('inforce quan_num mpi_reduce',ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integration(k)%quan_num = quan_num_max
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>

<br>

<br>
Snippet #2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;! Everybody gets the information about whether any cells have failed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itmp(1) = wallfn_runinfo%nwallfn_cells
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itmp(2) = wallfn_runinfo%ncells_failed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itmp(3) = wallfn_runinfo%ncells_printed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itmpg = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(itmp,itmpg,3,MPI_INTEGER,MPI_SUM,exec_comm,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr /= MPI_SUCCESS) call handle_mpi_error('wallfn_runinfo_dump_errors mpi_allreduce',ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g_nwallfn_cells = itmpg(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g_ncells_failed = itmpg(2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g_ncells_printed = itmpg(3)
<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Friday, September 26, 2014 4:10 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Application hangs in 1.8.1 related to collective operations
<br>

<br>
Hello Ed,
<br>

<br>
Could you post the output of ompi_info?  It would also help to know which variant of the collective ops
<br>
your doing.  If you could post the output when you run with
<br>

<br>
mpirun --mca coll_base_verbose 10 &quot;other mpirun args you've been using&quot;
<br>

<br>
that would be great
<br>

<br>
Also, if you know the sizes (number of elements) involved in the reduce and allreduce operations it
<br>
would be helpful to know this as well.
<br>

<br>
Thanks,
<br>

<br>
Howard
<br>

<br>

<br>
2014-09-25 3:34 GMT-06:00 Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt;:
<br>
I had an application suddenly stop making progress.  By killing the last process out of 208 processes, then looking at the stack trace, I found 3 of 208 processes were in an MPI_REDUCE call.  The other 205 had progressed in their execution to another routine, where they were waiting in an unrelated MPI_ALLREDUCE call.
<br>

<br>
The code structure is such that each processes calls MPI_REDUCE 5 times for different variables, then some work is done, then the MPI_ALLREDUCE call happens early in the next iteration of the solution procedure.  I thought it was also noteworthy that the 3 processes stuck at MPI_REDUCE, were actually stuck on the 4th of 5 MPI_REDUCE calls, not the 5th call.
<br>

<br>
No issues with MVAPICH.  Problem easily solved by adding MPI_BARRIER after the section of MPI_REDUCE calls.
<br>

<br>
It seems like MPI_REDUCE has some kind of non-blocking implementation, and it was not safe to enter the MPI_ALLREDUCE while those MPI_REDUCE calls had not yet completed for other processes.
<br>

<br>
This was in OpenMPI 1.8.1.  Same problem seen on 3 slightly different systems, all QDR Infiniband, Mellanox HCAs, using a Mellanox OFED stack (slightly different versions on each cluster).  Intel compilers, again slightly different versions on each of the 3 systems.
<br>

<br>
Has anyone encountered anything similar?  While I have a workaround, I want to make sure the root cause of the deadlock gets fixed.  Please let me know what I can do to help.
<br>

<br>
Thanks,
<br>

<br>
Ed
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25389.php">http://www.open-mpi.org/community/lists/users/2014/09/25389.php</a>
<br>

<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25397/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25397/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25398.php">Lee-Ping Wang: "[OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Previous message:</strong> <a href="25396.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
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
