<?
$subject_val = "Re: [OMPI devel] OMPI Mercurial read-only mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 10:37:14 2008" -->
<!-- isoreceived="20080505143714" -->
<!-- sent="Mon, 5 May 2008 10:37:02 -0400" -->
<!-- isosent="20080505143702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI Mercurial read-only mirror" -->
<!-- id="8804AA0B-23B2-49B8-A48A-85E4E4445265_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E0D4BF6A-0334-4085-B96C-0DE25077EC97_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI Mercurial read-only mirror<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 10:37:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3833.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3831.php">Josh Hursey: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>In reply to:</strong> <a href="3831.php">Josh Hursey: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you are exactly right -- I was not verbose enough to express what  
<br>
I meant.
<br>
<p>Given that we're somewhat wary about the immature state of HG's  
<br>
toolset, it could be a good interim solution until someday possibly  
<br>
entirely switching to HG.
<br>
<p><p>On May 5, 2008, at 10:33 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A feature like this would be useful for a large project to stage the
</span><br>
<span class="quotelev1">&gt; transition from SVN to HG such that it does not occur abruptly. I
</span><br>
<span class="quotelev1">&gt; don't know if it would be useful or not as a permanent solution, but
</span><br>
<span class="quotelev1">&gt; something to consider.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is certainly something interesting to watch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 5, 2008, at 10:18 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Depending on how that works, it could be quite interesting -- it  
</span><br>
<span class="quotelev2">&gt;&gt; opens
</span><br>
<span class="quotelev2">&gt;&gt; up the possibility of leaving SVN as the &quot;back-end&quot; repository, but
</span><br>
<span class="quotelev2">&gt;&gt; also fully supporting HG as well.  I don't know if that's really
</span><br>
<span class="quotelev2">&gt;&gt; sensible / useful (i.e., why not fully convert to HG if we're going  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; do HG), but it's an option...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 5, 2008, at 10:13 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Per our conversation in Chicago - It looks like Mercurial has a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Google
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Summer of Code student working on the Mercurial -push-&gt; Subversion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem we were talking about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://code.google.com/soc/2008/hg/appinfo.html">http://code.google.com/soc/2008/hg/appinfo.html</a>?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csaid=2757CDDD2156F1A7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For those not at the meeting this has to do with interoperability
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between Subversion and Mercurial. Mercurial has decent tools for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; making a read only copy of a Subversion repository (exactly like we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have just setup for Open MPI), but the problem is pushing changes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; made
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the Mercurial clone back to Subversion. The current technique is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; create a patch from Mercurial and apply it by hand to the Subversion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; repository. Maybe this will be improved this summer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 5, 2008, at 8:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 5, 2008, at 7:49 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mercurial is a fully distributed system.  So instead of thinking
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; branch, you should think of publishing your repository, which has
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; commits in it.  As I understand it, open-mpi.org is not set up  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; publishing other repositories yet, but it is quite easy to set
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; up a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mercurial server; there are also several places that will host  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; one
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you: <a href="http://www.selenic.com/mercurial/wiki/index.cgi/">http://www.selenic.com/mercurial/wiki/index.cgi/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MercurialHosting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW, our goal is to be able to have the OMPI developers be able to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use their same SVN username/password to be able to publish hg trees
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on www.open-mpi.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (or hg.open-mpi.org).  But using an outside hosting service is also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a possibility.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's not a high priority issue at the moment, but we'll be looking
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into it in the not-distant future.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3833.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3831.php">Josh Hursey: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>In reply to:</strong> <a href="3831.php">Josh Hursey: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
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
