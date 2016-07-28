<?
$subject_val = "[OMPI devel] Open MPI autogen.pl in tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 16:21:41 2015" -->
<!-- isoreceived="20151027202141" -->
<!-- sent="Tue, 27 Oct 2015 20:21:13 +0000" -->
<!-- isosent="20151027202113" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI autogen.pl in tarball" -->
<!-- id="557F5581-2EC8-4F03-BADE-C4D4BC809737_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B125AE8A-CA2E-4425-B997-16BE990F2413_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI autogen.pl in tarball<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 16:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18290.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18288.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18290.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18290.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18293.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18326.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Brian Barrett: cast your brain into the WayBack(tm) machine...
<br>
<p>Do you remember why we include autogen.pl in distribution tarballs?
<br>
<p>My recollection is:
<br>
<p>1. It was handy for OMPI developers to &quot;make dist&quot; in a SVN checkout to take a tarball over to back-end machine where you couldn't do an SVN checkout.  In short: including autogen.* in the tarball (and all of its machinery) makes &quot;make dist&quot; tarballs that are functional for an OMPI developer.
<br>
<p>2. We wanted to be friendly to 3rd-party vendors who have their own out-of-tree plugins.  They can take an official release tarball, add their components into the source tree, run autogen, and be good to go.
<br>
<p>3. It seemed like the Right Thing to do.
<br>
<p><pre>
----
The question came up today on the weekly call for obscure reasons... not worth describing here.  But it raised the question, &quot;Is there a reason we include autogen.pl in the tarball?&quot;
I dug in history, and I see that autogen.sh was added here:
   <a href="https://svn.open-mpi.org/trac/ompi/changeset/17505">https://svn.open-mpi.org/trac/ompi/changeset/17505</a>
It cited the wrong Trac ticket, but I found that, too:
   <a href="https://svn.open-mpi.org/trac/ompi/ticket/1205">https://svn.open-mpi.org/trac/ompi/ticket/1205</a>
Neither of them really talks much about *why* we added autogen.sh to the tarball.
FWIW:
The switch from SVN ti Git may obviate #1.
#2 hasn't really ever occurred.  Although it could happen in the future, 3rd-party vendors can just grab from github at the right Git tag, too.
#3 ...shrug.
Do you have a memory of a stronger reason than #3 to keep autogen.pl in the tarball?
(I don't have a super strong opinion either way, I think -- perhaps 51% in favor of removing it from the tarball, simply because we do occasionally get the user on users_at_[hidden] who runs autogen.pl for no reason, and then runs into problems because they've got old Autotools)
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18290.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18288.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18290.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18290.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18293.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18326.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
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
