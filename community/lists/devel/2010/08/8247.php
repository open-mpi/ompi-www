<?
$subject_val = "[OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 10:52:10 2010" -->
<!-- isoreceived="20100810145210" -->
<!-- sent="Tue, 10 Aug 2010 08:52:05 -0600" -->
<!-- isosent="20100810145205" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="9BB07EDB-A453-4034-9302-5089F942619D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-10 10:52:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8248.php">Joshua Hursey: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Previous message:</strong> <a href="8246.php">Terry Dontje: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8253.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8253.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I wanted to give everyone a heads-up about a new POSIX shared memory  
<br>
component
<br>
that has been in the works for a while now and is ready to be pushed  
<br>
into the
<br>
trunk.
<br>
<p><a href="http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new">http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new</a>
<br>
<p>Some highlights:
<br>
o New posix component now the new default.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o May address some of the shared memory performance issues users  
<br>
encounter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;when OMPI's session directories are inadvertently placed on a non- 
<br>
local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;filesystem.
<br>
o Silent component failover.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o In the default case, if the posix component fails initialization,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mmap will be selected.
<br>
o The sysv component will only be queried for selection if it is  
<br>
placed before
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the mmap component (for example, -mca mpi_common_sm  
<br>
sysv,posix,mmap).  In the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;default case, sysv will never be queried/selected.
<br>
o Per some on-list discussion, now unlinking mmaped file in both mmap  
<br>
and posix
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components (see: &quot;System V Shared Memory for Open MPI: Request for  
<br>
Community
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Input and Testing&quot; thread).
<br>
o  Assuming local process homogeneity with respect to all utilized  
<br>
shared
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory facilities. That is, if one local process deems a  
<br>
particular shared
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory facility acceptable, then ALL local processes should be  
<br>
able to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;utilize that facility. As it stands, this is an important point  
<br>
because one
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;process dictates to all other local processes which common sm  
<br>
component will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be selected based on its own, local run-time test.
<br>
o Addressed some of George's code reuse concerns.
<br>
<p>If there are no major objections by August 17th, I'll commit the code  
<br>
after the
<br>
Tuesday morning conference call.
<br>
<p>Thanks!
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8248.php">Joshua Hursey: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Previous message:</strong> <a href="8246.php">Terry Dontje: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8253.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8253.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
