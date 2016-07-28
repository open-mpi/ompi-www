<?
$subject_val = "Re: [OMPI devel] Open-MPI on TIPC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 13:21:42 2010" -->
<!-- isoreceived="20100512172142" -->
<!-- sent="Wed, 12 May 2010 11:21:35 -0600" -->
<!-- isosent="20100512172135" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI on TIPC" -->
<!-- id="3A6B5B80-9C76-44E3-BAA5-F572533AA5BE_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D06C14A2-B77D-450A-93F5-41B34A40CF63_at_ludd.ltu.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MPI on TIPC<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 13:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="7916.php">Nils Carlson: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="7914.php">Nils Carlson: "[OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9372.php">Xin He I: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a paper from a while back where a group implemented TIPC for OMPI 1.0.2 and showed some decent improvement. It was pretty well done in terms of what they measured but the over-all gains were of the order of 3-4% improvement for &quot;real world&quot; applications.
<br>
<p><a href="http://www.fz-juelich.de/nic-series/volume38/bounanos.pdf">http://www.fz-juelich.de/nic-series/volume38/bounanos.pdf</a>
<br>
<p>You might see what they did to port TIPC over.
<br>
<p>-david
<br>
<p><pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
On May 12, 2010, at 10:54 AM, Nils Carlson wrote:
&gt; Hi,
&gt; 
&gt; I'm wondering if anyone has looked at adding support in MPI for TIPC, Transparent Inter-Process Communication protocol?
&gt; 
&gt; Considering TIPC's properties this should provide better performance than TCP on ethernet.
&gt; 
&gt; Thanks for any info,
&gt; 
&gt; Nils Carlson
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="7916.php">Nils Carlson: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="7914.php">Nils Carlson: "[OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9372.php">Xin He I: "Re: [OMPI devel] Open-MPI on TIPC"</a>
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
