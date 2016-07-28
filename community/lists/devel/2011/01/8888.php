<?
$subject_val = "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 09:32:00 2011" -->
<!-- isoreceived="20110118143200" -->
<!-- sent="Tue, 18 Jan 2011 09:31:37 -0500" -->
<!-- isosent="20110118143137" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk" -->
<!-- id="9B8E33FD-28B3-4B6D-AAF0-44958DA4EFEC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D3467A6.1010605_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-18 09:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8889.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8887.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8881.php">Pascal Deveze: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8889.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8889.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IMHO, it's (much) easier to get an SVN checkout of the tree you're trying to sync with and then follow the procedures on that wiki page for SVN + Mercurial interaction.  This allows two things:
<br>
<p>1. You can easily stay up-to-date with SVN changes, even on release branches.
<br>
2. You can easily/directly commit back to SVN when ready (no need for additional patch files, etc.).
<br>
<p>It looks like you manually updated the hg repo to be v1.5, so I guess we can go from there (i.e., I'll review and send feedback).  But in the future, you might want to try the above procedures, instead.
<br>
<p>That being said, I think we also need to update the SVN trunk to be the same version as what is going into v1.5 (trunk will eventually branch to become v1.7).  Can you make an hg tree for trunk+new ROMIO?  I'm sorry to ask for this, but we do need a way to go forward... :-\  Hopefully, it should be straightforward to apply the new ROMIO to the trunk (especially since you've already done the work to apply it to v1.4 and v1.5!).
<br>
<p>It's unfortunate that there's such a divergence between trunk and the v1.5 branch right now, but you *might* only have to adapt the build system stuff, per the email I sent to devel the other day (since not much else has changed in the IO MCA framework for a long time).
<br>
<p>FWIW, most people usually develop on the trunk and then port to a release branch.  It's *usually* easier this way.  Per above, there's a bit of divergence between the trunk and v1.5 right now, making this a little harder than it should be, but it's not too bad (especially for the IO MCA framework, as noted above).  That being said, it's probably not too hard to port from the v1.5 branch to the trunk, either.
<br>
<p><p><p>On Jan 17, 2011, at 11:00 AM, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; The bitbucket tree (<a href="https://bitbucket.org/devezep/new-romio-for-openmpi">https://bitbucket.org/devezep/new-romio-for-openmpi</a>) has just been updated with the open-mpi trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have made three patches:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hg out
</span><br>
<span class="quotelev1">&gt; comparing with ssh://hg@bitbucket.org/devezep/new-romio-for-openmpi
</span><br>
<span class="quotelev1">&gt; searching for changes
</span><br>
<span class="quotelev1">&gt; changeset:   25:3e677102a125
</span><br>
<span class="quotelev1">&gt; user:        Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; date:        Mon Jan 17 13:40:10 2011 +0100
</span><br>
<span class="quotelev1">&gt; summary:     Remove all files
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; changeset:   26:e3989f46f83a
</span><br>
<span class="quotelev1">&gt; user:        Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; date:        Mon Jan 17 14:46:48 2011 +0100
</span><br>
<span class="quotelev1">&gt; summary:     Import from <a href="http://svn.open-mpi.org/svn/ompi/trunki">http://svn.open-mpi.org/svn/ompi/trunki</a> (r24256)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; changeset:   27:97f54ec8a575
</span><br>
<span class="quotelev1">&gt; tag:         tip
</span><br>
<span class="quotelev1">&gt; user:        Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; date:        Mon Jan 17 16:14:06 2011 +0100
</span><br>
<span class="quotelev1">&gt; summary:     New Romio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tested the result and the ROMIO tests are OK.
</span><br>
<span class="quotelev1">&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8889.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8887.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8881.php">Pascal Deveze: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8889.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8889.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
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
