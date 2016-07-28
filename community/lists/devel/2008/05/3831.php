<?
$subject_val = "Re: [OMPI devel] OMPI Mercurial read-only mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 10:34:01 2008" -->
<!-- isoreceived="20080505143401" -->
<!-- sent="Mon, 5 May 2008 10:33:56 -0400" -->
<!-- isosent="20080505143356" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI Mercurial read-only mirror" -->
<!-- id="E0D4BF6A-0334-4085-B96C-0DE25077EC97_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6054939F-98FB-4807-BACA-0E49E56F2EAA_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 10:33:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3832.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Previous message:</strong> <a href="3830.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>In reply to:</strong> <a href="3830.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3832.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Reply:</strong> <a href="3832.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A feature like this would be useful for a large project to stage the  
<br>
transition from SVN to HG such that it does not occur abruptly. I  
<br>
don't know if it would be useful or not as a permanent solution, but  
<br>
something to consider.
<br>
<p>It is certainly something interesting to watch.
<br>
<p>-- Josh
<br>
<p>On May 5, 2008, at 10:18 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Depending on how that works, it could be quite interesting -- it opens
</span><br>
<span class="quotelev1">&gt; up the possibility of leaving SVN as the &quot;back-end&quot; repository, but
</span><br>
<span class="quotelev1">&gt; also fully supporting HG as well.  I don't know if that's really
</span><br>
<span class="quotelev1">&gt; sensible / useful (i.e., why not fully convert to HG if we're going to
</span><br>
<span class="quotelev1">&gt; do HG), but it's an option...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 5, 2008, at 10:13 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per our conversation in Chicago - It looks like Mercurial has a  
</span><br>
<span class="quotelev2">&gt;&gt; Google
</span><br>
<span class="quotelev2">&gt;&gt; Summer of Code student working on the Mercurial -push-&gt; Subversion
</span><br>
<span class="quotelev2">&gt;&gt; problem we were talking about:
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://code.google.com/soc/2008/hg/appinfo.html">http://code.google.com/soc/2008/hg/appinfo.html</a>?
</span><br>
<span class="quotelev2">&gt;&gt; csaid=2757CDDD2156F1A7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For those not at the meeting this has to do with interoperability
</span><br>
<span class="quotelev2">&gt;&gt; between Subversion and Mercurial. Mercurial has decent tools for
</span><br>
<span class="quotelev2">&gt;&gt; making a read only copy of a Subversion repository (exactly like we
</span><br>
<span class="quotelev2">&gt;&gt; have just setup for Open MPI), but the problem is pushing changes  
</span><br>
<span class="quotelev2">&gt;&gt; made
</span><br>
<span class="quotelev2">&gt;&gt; to the Mercurial clone back to Subversion. The current technique is  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; create a patch from Mercurial and apply it by hand to the Subversion
</span><br>
<span class="quotelev2">&gt;&gt; repository. Maybe this will be improved this summer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 5, 2008, at 8:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 5, 2008, at 7:49 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mercurial is a fully distributed system.  So instead of thinking
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; branch, you should think of publishing your repository, which has
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commits in it.  As I understand it, open-mpi.org is not set up for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; publishing other repositories yet, but it is quite easy to set  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; up a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mercurial server; there are also several places that will host one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you: <a href="http://www.selenic.com/mercurial/wiki/index.cgi/">http://www.selenic.com/mercurial/wiki/index.cgi/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MercurialHosting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, our goal is to be able to have the OMPI developers be able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use their same SVN username/password to be able to publish hg trees
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on www.open-mpi.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (or hg.open-mpi.org).  But using an outside hosting service is also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a possibility.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's not a high priority issue at the moment, but we'll be looking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into it in the not-distant future.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3832.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Previous message:</strong> <a href="3830.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>In reply to:</strong> <a href="3830.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3832.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Reply:</strong> <a href="3832.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
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
