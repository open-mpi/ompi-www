<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 17:22:57 2007" -->
<!-- isoreceived="20070718212257" -->
<!-- sent="Wed, 18 Jul 2007 17:22:52 -0400" -->
<!-- isosent="20070718212252" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="200707181722.52932.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1184783239.3979.131.camel_at_doorstop.home.net" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 17:22:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3720.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Previous message:</strong> <a href="3718.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3717.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3721.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3721.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3727.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt; Yes, this helps tremendously.  I installed rsh, and now it pretty much
</span><br>
<span class="quotelev1">&gt; works.
</span><br>
Glad this worked out for you.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The one missing detail is that I can't seem to get the stdout/stderr
</span><br>
<span class="quotelev1">&gt; output.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ orterun -np 1 uptime
</span><br>
<span class="quotelev1">&gt; $ uptime
</span><br>
<span class="quotelev1">&gt; 18:24:27 up 13 days,  3:03,  0 users,  load average: 0.00, 0.03, 0.00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The man page indicates that stdout/stderr is supposed to come back to
</span><br>
<span class="quotelev1">&gt; the stdout/stderr of the orterun process.  Any ideas on why this isn't
</span><br>
<span class="quotelev1">&gt; working?
</span><br>
It should work. However, we currently have some I/O forwarding problems which 
<br>
show up in some environments that will (hopefully) be fixed in the next 
<br>
release. As far as I know, the problem seems to happen mostly with non-mpi 
<br>
applications.
<br>
<p>Try running a simple mpi application, such as:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello, world, I am %d of %d\n&quot;, rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>If that works fine, then it is probably our problem, and not a problem with 
<br>
your setup.
<br>
<p>Sorry I don't have a better answer :(
<br>
&nbsp;
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3720.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Previous message:</strong> <a href="3718.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3717.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3721.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3721.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3727.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
