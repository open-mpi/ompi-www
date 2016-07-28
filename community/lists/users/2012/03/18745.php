<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 16:54:27 2012" -->
<!-- isoreceived="20120313205427" -->
<!-- sent="Tue, 13 Mar 2012 16:54:23 -0400 (EDT)" -->
<!-- isosent="20120313205423" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203131650350.11946_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CA78C203-22A4-4400-AA75-004E60B27A07_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Joshua Baker-LePain (<em>jlb17_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 16:54:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18746.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18744.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18744.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18746.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18746.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18755.php">Gustavo Correa: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 13 Mar 2012 at 7:53pm, Gutierrez, Samuel K wrote
<br>
<p><span class="quotelev1">&gt; The failure signature isn't exactly what we were seeing here at LANL, 
</span><br>
<span class="quotelev1">&gt; but there were misplaced memory barriers in Open MPI 1.4.3.  Ticket 2619 
</span><br>
<span class="quotelev1">&gt; talks about this issue (<a href="https://svn.open-mpi.org/trac/ompi/ticket/2619">https://svn.open-mpi.org/trac/ompi/ticket/2619</a>). 
</span><br>
<span class="quotelev1">&gt; This doesn't explain, however, the failures that you are experiencing 
</span><br>
<span class="quotelev1">&gt; within Open MPI 1.5.4.  Can you give 1.4.4 a whirl and see if this fixes 
</span><br>
<span class="quotelev1">&gt; the issue?
</span><br>
<p>Would it be best to use 1.4.4 specifically, or simply the most recent 
<br>
1.4.x (which appears to be 1.4.5 at this point)?
<br>
<p><span class="quotelev1">&gt; Any more information surrounding your failures in 1.5.4 are greatly 
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<p>I'm happy to provide, but what exactly are you looking for?  The test code 
<br>
I'm running is *very* simple:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int node;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int i, j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float f;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello World from Node %d.\n&quot;, node);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i&lt;=1000000000000; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f=i*2.718281828*i+i+i*3.141592654;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>And my environment is a pretty standard CentOS-6.2 install.
<br>
<p><pre>
-- 
Joshua Baker-LePain
QB3 Shared Cluster Sysadmin
UCSF
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18746.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18744.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18744.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18746.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18746.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18755.php">Gustavo Correa: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
