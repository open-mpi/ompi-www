<?
$subject_val = "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 14 10:01:45 2011" -->
<!-- isoreceived="20110114150145" -->
<!-- sent="Fri, 14 Jan 2011 10:01:37 -0500" -->
<!-- isosent="20110114150137" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk" -->
<!-- id="782666ED-222B-4552-AECC-9A48CCF24BAE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D304D88.3070308_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-14 10:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8874.php">Mohamad Chaarawi: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24251"</a>
<li><strong>Previous message:</strong> <a href="8872.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8872.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8876.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8876.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just (re?)noticed that your mercurial tree is based on the 1.4 branch:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/devezep/new-romio-for-openmpi">https://bitbucket.org/devezep/new-romio-for-openmpi</a>
<br>
<p>Are we targeting the v1.4 series for this?  
<br>
<p>I thought we were targeting trunk/v1.5 for the new ROMIO, but perhaps I'm forgetting something...?
<br>
<p><p><p><p>On Jan 14, 2011, at 8:20 AM, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Great!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see in your other mail that you pulled something from MPICH2 to make this work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does that mean that there's a even-newer version of ROMIO that we should pull in its entirety?  It's a little risky to pull most stuff from one released version of ROMIO and then more stuff from another released version.  Meaning: it's little nicer/safer to say that we have ROMIO from a single released version of MPICH2.  
</span><br>
<span class="quotelev2">&gt;&gt; If possible.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Don't get me wrong -- I want the new ROMIO, and I'm sorry you've had to go through so many hoops to get it ready.  :-(  But we should do it the best way we can; we have history/precedent for taking ROMIO from a single source/released version of MPICH[2], and I'd like to maintain that precedent if at all possible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; I've just made a comparison with the very last MPICH2 version (mpich2-1.3.1) and found very little differencies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've  reported them into bitbucket. I 've tested with the ROMIO tests and I 've commited them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, we now have on bitbucket the version from mpich2-1.3.1 plus the patch for the attribute issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal
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
<li><strong>Next message:</strong> <a href="8874.php">Mohamad Chaarawi: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24251"</a>
<li><strong>Previous message:</strong> <a href="8872.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8872.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8876.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8876.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
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
