<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 14 13:51:28 2006" -->
<!-- isoreceived="20060614175128" -->
<!-- sent="Wed, 14 Jun 2006 10:51:14 -0700" -->
<!-- isosent="20060614175114" -->
<!-- name="Doolittle, Joshua" -->
<!-- email="joshua.doolittle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with open MPI and Slurm" -->
<!-- id="AF293AF0A07C8A44A6098DA99D03713005EC8C70_at_pnlmse24.pnl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="88E3231D-8733-420E-939D-F3E968DF8925_at_cs.utk.edu" -->
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
<strong>From:</strong> Doolittle, Joshua (<em>joshua.doolittle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-14 13:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1419.php">Brian Barrett: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<li><strong>Previous message:</strong> <a href="1417.php">George Bosilca: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<li><strong>In reply to:</strong> <a href="1417.php">George Bosilca: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1419.php">Brian Barrett: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
#include &lt;stdio.h&gt;
<br>
#ifdef MPI
<br>
#include &lt;mpi.h&gt;
<br>
#endif
<br>
#include &lt;sys/time.h&gt;
<br>
#include &lt;sys/resource.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p><p>main(argc, argv)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int argc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *argv[];
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char name[BUFSIZ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int length;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct rlimit rlim;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FILE *output;
<br>
<p>#ifdef MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(name, &amp;length);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank); #endif #ifdef MPI
<br>
//      while(1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s: hello world from rank %d\n&quot;, name, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
//      }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
#endif
<br>
}
<br>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of George Bosilca
<br>
Sent: Wednesday, June 14, 2006 10:27 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Trouble with open MPI and Slurm
<br>
<p>I wonder how the &quot;simple optimized hello world&quot; application look like ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 14, 2006, at 1:05 PM, Doolittle, Joshua wrote:
<br>
<p><span class="quotelev1">&gt; a simple mpi optimized hello world.
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other half
<br>
may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1419.php">Brian Barrett: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<li><strong>Previous message:</strong> <a href="1417.php">George Bosilca: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<li><strong>In reply to:</strong> <a href="1417.php">George Bosilca: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1419.php">Brian Barrett: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
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
