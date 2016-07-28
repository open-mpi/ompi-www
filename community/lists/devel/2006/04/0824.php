<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 11 13:06:00 2006" -->
<!-- isoreceived="20060411170600" -->
<!-- sent="Tue, 11 Apr 2006 13:05:51 -0400" -->
<!-- isosent="20060411170551" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI v1.1 branch created" -->
<!-- id="9CFD25F8-9C34-4700-BB0F-81D761005E0E_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-11 13:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0825.php">Brian Barrett: "[OMPI devel] Subversion outage on Friday"</a>
<li><strong>Previous message:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI devel] [OT] padding and integer types"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>We have branched from the trunk (at r9613) for the Open MPI 1.1  
<br>
release.  The proceedures for the 1.1 branch will be the same as for  
<br>
the 1.0 branch -- the branch is not available directly for  
<br>
committing, and all commits must be reviewed by one other developer  
<br>
and then accepted by the release managers.  Committing to the trunk  
<br>
without coordinating with a release manager will *not* get your  
<br>
change into the 1.1 release branch.
<br>
<p>The release branch can be checked out by anyone at:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/svn/ompi/branches/v1.1/">https://svn.open-mpi.org/svn/ompi/branches/v1.1/</a>
<br>
<p>Release managers for the v1.1 branch are David Daniel (LANL) and Jeff  
<br>
Squyres (Cisco).
<br>
<p>The release branch was modified after the branch to add .ompi_ignore  
<br>
files for the two XCPU components, as was discussed on the call  
<br>
today.  The version number for the trunk has been bumped up to v1.2,  
<br>
to avoid any confusion about which tarball is which.
<br>
<p>The script to make nightly tarballs of the release branches and trunk  
<br>
has been modified to include v1.1.  It will continue making v1.0  
<br>
nightly snapshots until v1.1 has been released.  The web pages will  
<br>
be updated in a couple of hours with the first snapshot from the v1.1  
<br>
branch.
<br>
<p>In the next week or so, I will be reverting some commits out of the  
<br>
trunk regarding orte_process_name_t which will break 32/64  
<br>
interoperability support.  This is to allow Ralph to more easily  
<br>
migrate in his patches, which do the same thing, plus add multi-cell  
<br>
operations.  This will not affect the v1.1 release in any way, but  
<br>
thought I would mention it here.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0825.php">Brian Barrett: "[OMPI devel] Subversion outage on Friday"</a>
<li><strong>Previous message:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI devel] [OT] padding and integer types"</a>
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
