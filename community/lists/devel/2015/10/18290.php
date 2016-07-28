<?
$subject_val = "Re: [OMPI devel] Open MPI autogen.pl in tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 16:39:09 2015" -->
<!-- isoreceived="20151027203909" -->
<!-- sent="Tue, 27 Oct 2015 13:39:03 -0700" -->
<!-- isosent="20151027203903" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI autogen.pl in tarball" -->
<!-- id="CAAvDA15yr8Tv7tVMOxxRRVQ7WVbCHhMGHxrC-AYYb-6ovizKBg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 16:39:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18291.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
<li><strong>Previous message:</strong> <a href="18289.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>In reply to:</strong> <a href="18289.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18293.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe not relevant, but...
<br>
<p>In the GASNet and Berkeley UPC projects we include our analogue of
<br>
autogen.sh in tarballs, too.
<br>
Because of this our analogue of MTT is able to exercise it across many
<br>
versions of the autotools.
<br>
This *has* actually allowed us to learn of problems in our configury before
<br>
developers had updated their own autotools.
<br>
<p>Not that I get a vote, but I think leaving it out of the tarball is the
<br>
&quot;safer&quot; choice.
<br>
Anyone who needs to run autogen.pl should be capable of using git.
<br>
<p>-Paul
<br>
<p><p>On Tue, Oct 27, 2015 at 1:21 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Yo Brian Barrett: cast your brain into the WayBack(tm) machine...
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
<span class="quotelev1">&gt; 1. It was handy for OMPI developers to &quot;make dist&quot; in a SVN checkout to
</span><br>
<span class="quotelev1">&gt; take a tarball over to back-end machine where you couldn't do an SVN
</span><br>
<span class="quotelev1">&gt; checkout.  In short: including autogen.* in the tarball (and all of its
</span><br>
<span class="quotelev1">&gt; machinery) makes &quot;make dist&quot; tarballs that are functional for an OMPI
</span><br>
<span class="quotelev1">&gt; developer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. We wanted to be friendly to 3rd-party vendors who have their own
</span><br>
<span class="quotelev1">&gt; out-of-tree plugins.  They can take an official release tarball, add their
</span><br>
<span class="quotelev1">&gt; components into the source tree, run autogen, and be good to go.
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
<span class="quotelev1">&gt; The question came up today on the weekly call for obscure reasons... not
</span><br>
<span class="quotelev1">&gt; worth describing here.  But it raised the question, &quot;Is there a reason we
</span><br>
<span class="quotelev1">&gt; include autogen.pl in the tarball?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I dug in history, and I see that autogen.sh was added here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset/17505">https://svn.open-mpi.org/trac/ompi/changeset/17505</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It cited the wrong Trac ticket, but I found that, too:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/1205">https://svn.open-mpi.org/trac/ompi/ticket/1205</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neither of them really talks much about *why* we added autogen.sh to the
</span><br>
<span class="quotelev1">&gt; tarball.
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
<span class="quotelev1">&gt; #2 hasn't really ever occurred.  Although it could happen in the future,
</span><br>
<span class="quotelev1">&gt; 3rd-party vendors can just grab from github at the right Git tag, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3 ...shrug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a memory of a stronger reason than #3 to keep autogen.pl in
</span><br>
<span class="quotelev1">&gt; the tarball?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I don't have a super strong opinion either way, I think -- perhaps 51% in
</span><br>
<span class="quotelev1">&gt; favor of removing it from the tarball, simply because we do occasionally
</span><br>
<span class="quotelev1">&gt; get the user on users_at_[hidden] who runs autogen.pl for no reason, and
</span><br>
<span class="quotelev1">&gt; then runs into problems because they've got old Autotools)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18289.php">http://www.open-mpi.org/community/lists/devel/2015/10/18289.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18290/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18291.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
<li><strong>Previous message:</strong> <a href="18289.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>In reply to:</strong> <a href="18289.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18293.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
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
