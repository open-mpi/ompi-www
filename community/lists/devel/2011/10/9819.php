<?
$subject_val = "[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package (Revised)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 12 02:16:33 2011" -->
<!-- isoreceived="20111012061633" -->
<!-- sent="Tue, 11 Oct 2011 23:16:09 -0700" -->
<!-- isosent="20111012061609" -->
<!-- name="Alex Brick" -->
<!-- email="bricka_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package (Revised)" -->
<!-- id="4E9530A9.70405_at_ccs.neu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package (Revised)<br>
<strong>From:</strong> Alex Brick (<em>bricka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-12 02:16:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9820.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
<li><strong>Previous message:</strong> <a href="9818.php">Rayson Ho: "[OMPI devel] IBM to acquire Platform Computing!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Bring in the mtcp CRS component
<br>
<p>WHY: Add support for the MTCP checkpoint/restart service
<br>
<p>WHERE: opal/mca/crs/mtcp
<br>
<p>TIMEOUT: Tuesday teleconf, 2011-10-18 (about 1 week from now)
<br>
<p>-------------------------------------------
<br>
What is MTCP?
<br>
<p>MTCP (MultiThreaded CheckPointing; <a href="http://dmtcp.sourceforge.net">http://dmtcp.sourceforge.net</a>) is an 
<br>
LGPL single-process checkpointing package that has been under 
<br>
development for seven years.  It operates entirely in user space, 
<br>
requiring no special kernel modules or superuser access to a system. 
<br>
Using it is as simple as linking with a library and adding a call to the 
<br>
mtcp_init function to your code.
<br>
<p>MTCP is distributed as a part of the DMTCP package, and is currently 
<br>
available as a Debian package.
<br>
<p>-------------------------------------------
<br>
More details:
<br>
<p>Open MPI MTCP integration implementation available at:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/ompi-dmtcp2">https://bitbucket.org/jsquyres/ompi-dmtcp2</a>
<br>
<p>The DMTCP parent project website is below:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://dmtcp.sourceforge.net/">http://dmtcp.sourceforge.net/</a>
<br>
<p>This RFC introduces a new CRS component for Open MPI that uses MTCP to 
<br>
provide transparent checkpointing.  The primary advantage of MTCP over 
<br>
the existing BLCR CRS module is that it operates entirely in userspace, 
<br>
meaning that any user can use it on a system without requiring special 
<br>
kernel modules or superuser access to the system.  Like the BLCR module, 
<br>
using the MTCP CRS module is entirely transparent to the actual user 
<br>
process, and requires no modification to the user program.
<br>
<p>Jeff Hursey and Josh Squyres have been working with the DMTCP authors 
<br>
(based out of the US Northeastern University in Boston, MA, USA) for 
<br>
quite a while and feel that this component is ready to be brought into 
<br>
the Open MPI main line for inclusion in the 1.7.x series (and possibly 
<br>
the 1.5.x series?).  The authors have submitted OMPI 3rd party 
<br>
contribution agreements.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9820.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
<li><strong>Previous message:</strong> <a href="9818.php">Rayson Ho: "[OMPI devel] IBM to acquire Platform Computing!"</a>
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
