<?
$subject_val = "[OMPI devel] MPI 2.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 08:38:29 2008" -->
<!-- isoreceived="20080828123829" -->
<!-- sent="Thu, 28 Aug 2008 05:38:24 -0700" -->
<!-- isosent="20080828123824" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI 2.1" -->
<!-- id="DFBF8846-8A0F-4EEB-959E-2D2DC4BBFB61_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI 2.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 08:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4613.php">Ralph Castain: "[OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4611.php">Tim Mattox: "Re: [OMPI devel] IOF and scalability"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
--------------
<br>
<p>Per tickets 1236 and 1237, the &quot;MPI_SUBVERSION&quot; #define in mpi.h will  
<br>
soon be increasing from 0 to 1 (i.e., MPI 2.0 -&gt; 2.1).  The work is  
<br>
currently pending in an hg tree; I'm just waiting for a review of my  
<br>
changes before putting it all back to the SVN trunk.
<br>
<p>Longer version:
<br>
---------------
<br>
<p>In working on some MPI-2.1 items (cartesian and graph communicators in  
<br>
tickets <a href="https://svn.open-mpi.org/trac/ompi/ticket/1236">https://svn.open-mpi.org/trac/ompi/ticket/1236</a> and <a href="https://svn.open-mpi.org/trac/ompi/ticket/1237">https://svn.open-mpi.org/trac/ompi/ticket/1237</a>) 
<br>
, I expanded the existing cartesian/graph tests in the ompi-tests IBM  
<br>
test suite to test for the new behavior.
<br>
<p>I used the MPI_VERSION and MPI_SUBVERSION #define's in mpi.h to  
<br>
conditionally activate the new testing code.  Otherwise, the newly- 
<br>
expanded IBM tests would be unsuitable for testing older versions of  
<br>
OMPI (e.g., the v1.2 series).
<br>
<p>This meant that I needed to distinguish the newer OMPI from the older  
<br>
OMPI -- so I bumped up the MPI_SUBVERSION from 0 to 1.  So trunk/v1.3  
<br>
mpi.h will shortly advertise:
<br>
<p>#define MPI_VERSION 2
<br>
#define MPI_SUBVERSION 1
<br>
<p>This is appropriate because we'll be conforming to MPI-2.1 as soon as  
<br>
these two 2.1 tickets are reviewed/committed, and one more 2.1 ticket  
<br>
is complete (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1239">https://svn.open-mpi.org/trac/ompi/ticket/1239</a>).   
<br>
Hopefully, that'll be RSN.  Perhaps I'll dig into this on the plane  
<br>
trip to Dublin so that we can report good 2.1 status at the Forum  
<br>
meeting...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4613.php">Ralph Castain: "[OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4611.php">Tim Mattox: "Re: [OMPI devel] IOF and scalability"</a>
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
