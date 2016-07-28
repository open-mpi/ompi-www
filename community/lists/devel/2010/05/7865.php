<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  2 08:46:21 2010" -->
<!-- isoreceived="20100502124621" -->
<!-- sent="Sun, 02 May 2010 22:45:51 +1000" -->
<!-- isosent="20100502124551" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing" -->
<!-- id="D45958078CD65C429557B4C5F492B6A60770E4BC_at_IS-EX-BEV3.unimelb.edu.au" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7050C0ED-F7FC-42D6-AC8D-0FA5D682CD89_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-02 08:45:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7866.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7864.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7863.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7864.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/05/10 06:49, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; I think you should look into this a little deeper, it
</span><br>
<span class="quotelev1">&gt; certainly used to be the case on Linux that setting
</span><br>
<span class="quotelev1">&gt; IPC_RMID would also prevent any further processes from
</span><br>
<span class="quotelev1">&gt; attaching to the segment.
</span><br>
<p>That certainly appears to be the case in the current master
<br>
of the kernel, IPC_PRIVATE is set on the segment with the
<br>
comment:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Do not find it any more */
<br>
<p>That flag means that ipcget() - used by sys_shmget() -
<br>
take a different code path and now call ipcget_new()
<br>
rather than ipcget_public().
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
  Christopher Samuel - Senior Systems Administrator
  VLSCI - Victorian Life Sciences Computational Initiative
  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7865/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7866.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7864.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7863.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7864.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
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
