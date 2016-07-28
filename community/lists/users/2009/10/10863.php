<?
$subject_val = "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 15:13:04 2009" -->
<!-- isoreceived="20091001191304" -->
<!-- sent="Thu, 1 Oct 2009 13:13:00 -0600" -->
<!-- isosent="20091001191300" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew" -->
<!-- id="6E487AE1-25E6-4AE6-9A1D-A1DDCDB93497_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1254423387.3883.12.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 15:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10864.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10862.php">&#197;ke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesfor TotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10860.php">Ashley Pittman: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10864.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good point.  That particular call to memalign, however, is part of a  
<br>
series of OMPI memory hook tests.  The memory allocated by that  
<br>
memalign call is promptly freed (opal/mca/memory/ptmalloc2/ 
<br>
opal_ptmalloc2_component.c : line 111). The change is to silence  
<br>
TotalView's memory alignment error when memory debugging is enabled.
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Oct 1, 2009, at 12:56 PM, Ashley Pittman wrote:
&gt;
&gt; Simple malloc() returns pointers that are at least eight byte aligned
&gt; anyway, I'm not sure what the reason for calling memalign() with a  
&gt; value
&gt; of four would be be anyway.
&gt;
&gt; Ashley,
&gt;
&gt; On Thu, 2009-10-01 at 20:19 +0200, &#197;ke Sandgren wrote:
&gt;&gt; No it didn't. And memalign is obsolete according to the manpage.
&gt;&gt; posix_memalign is the one to use.
&gt;
&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21744">https://svn.open-mpi.org/trac/ompi/changeset/21744</a>
&gt;
&gt; -- 
&gt;
&gt; Ashley Pittman, Bath, UK.
&gt;
&gt; Padb - A parallel job inspection tool for cluster computing
&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10864.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10862.php">&#197;ke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesfor TotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10860.php">Ashley Pittman: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10864.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
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
