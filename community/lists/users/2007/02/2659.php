<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 21:58:42 2007" -->
<!-- isoreceived="20070209025842" -->
<!-- sent="Thu, 8 Feb 2007 21:58:32 -0500" -->
<!-- isosent="20070209025832" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="2453e2900702081858ucdacd63u5c3beb130dff2ddf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c84311bb0702081451n3004a6dal69b40d7e5b7e3544_at_mail.gmail.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 21:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2660.php">Jeff Squyres: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Previous message:</strong> <a href="2658.php">Brian W. Barrett: "Re: [OMPI users] install script issue"</a>
<li><strong>In reply to:</strong> <a href="2650.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2691.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; mpirun --prefix /opt/openmpi -mca oob_tcp_include eth0 -mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include eth0 --hostfile ~/work/openmpi_hostfile -np 4
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could a section be added to the FAQ mentioning that the firewall
</span><br>
<span class="quotelev1">&gt; service should be shutdown over the mpi interface and that the two
</span><br>
<span class="quotelev1">&gt; -mca switches should be used?  This could perhaps be most useful to a
</span><br>
<span class="quotelev1">&gt; beginner in either the 'Running MPI Jobs' or 'Troubleshooting'
</span><br>
<span class="quotelev1">&gt; sections of the FAQ.
</span><br>
<p>Mark, check this FAQ entry as well as #7 on the same page:
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>And while you are waiting for your current jobs, you could try
<br>
something non-invasive but OMPI-ish nevertheless:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;int numprocs, rank, namelen;
<br>
&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
<p>&nbsp;&nbsp;printf(&quot;Process %d on %s out of %d\n&quot;, rank, processor_name, numprocs);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>Have fun.
<br>
<p>Alex.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2660.php">Jeff Squyres: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Previous message:</strong> <a href="2658.php">Brian W. Barrett: "Re: [OMPI users] install script issue"</a>
<li><strong>In reply to:</strong> <a href="2650.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2691.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
