<?
$subject_val = "Re: [OMPI devel] Open MPI autogen.pl in tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 19:46:09 2015" -->
<!-- isoreceived="20151027234609" -->
<!-- sent="Wed, 28 Oct 2015 08:46:03 +0900" -->
<!-- isosent="20151027234603" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI autogen.pl in tarball" -->
<!-- id="56300CBB.5090908_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="557F5581-2EC8-4F03-BADE-C4D4BC809737_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI autogen.pl in tarball<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 19:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18294.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18292.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18289.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and all,
<br>
<p>my 0.02 US$ ...
<br>
<p>- autogen.pl was recently used with v1.10 on a PowerPC Little Endian arch
<br>
(that was mandatory since the libtool we use to generate v1.10 series do 
<br>
not yet support PPC LE)
<br>
<p>- if we remove (from the tarball) autogen.pl, should we also remove 
<br>
configure.ac ?
<br>
&nbsp;&nbsp;&nbsp;and what about m4 files and Makefile.am ?
<br>
<p>- an alternative to removing autogen.pl (from the tarball) is to have 
<br>
autogen.pl
<br>
&nbsp;&nbsp;&nbsp;test repo_rev and/or tarball_version from VERSION so we can detect if 
<br>
autogen.pl is ran
<br>
&nbsp;&nbsp;&nbsp;from a tarball. in that case, we could fail with a message such as
<br>
&nbsp;&nbsp;&nbsp;&quot;you might not want to do that, but if you really do, re-run 
<br>
autogen.pl with the --force parameter&quot;
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 10/28/2015 5:21 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Yo Brian Barrett: cast your brain into the WayBack(tm) machine...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you remember why we include autogen.pl in distribution tarballs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My recollection is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. It was handy for OMPI developers to &quot;make dist&quot; in a SVN checkout to take a tarball over to back-end machine where you couldn't do an SVN checkout.  In short: including autogen.* in the tarball (and all of its machinery) makes &quot;make dist&quot; tarballs that are functional for an OMPI developer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. We wanted to be friendly to 3rd-party vendors who have their own out-of-tree plugins.  They can take an official release tarball, add their components into the source tree, run autogen, and be good to go.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. It seemed like the Right Thing to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question came up today on the weekly call for obscure reasons... not worth describing here.  But it raised the question, &quot;Is there a reason we include autogen.pl in the tarball?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I dug in history, and I see that autogen.sh was added here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/changeset/17505">https://svn.open-mpi.org/trac/ompi/changeset/17505</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It cited the wrong Trac ticket, but I found that, too:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/1205">https://svn.open-mpi.org/trac/ompi/ticket/1205</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neither of them really talks much about *why* we added autogen.sh to the tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The switch from SVN ti Git may obviate #1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #2 hasn't really ever occurred.  Although it could happen in the future, 3rd-party vendors can just grab from github at the right Git tag, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3 ...shrug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a memory of a stronger reason than #3 to keep autogen.pl in the tarball?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I don't have a super strong opinion either way, I think -- perhaps 51% in favor of removing it from the tarball, simply because we do occasionally get the user on users_at_[hidden] who runs autogen.pl for no reason, and then runs into problems because they've got old Autotools)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18294.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18292.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18289.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
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
