<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  1 02:01:41 2005" -->
<!-- isoreceived="20050901070141" -->
<!-- sent="Thu, 1 Sep 2005 09:01:38 +0200" -->
<!-- isosent="20050901070138" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  ltdl.h problem" -->
<!-- id="20050901070138.GC2159_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.58.0509010040590.5104_at_localhost" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-01 02:01:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0285.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="../../2005/08/0283.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0283.php">George Bosilca: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0285.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>* George Bosilca wrote on Thu, Sep 01, 2005 at 06:49:48AM CEST:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I see the reason behind this change. Anyway, few month ago we decide
</span><br>
<span class="quotelev1">&gt; to switch the compilation process, and to modify all the files in order to
</span><br>
<span class="quotelev1">&gt; start all the #include directives with the full path of the include files
</span><br>
<span class="quotelev1">&gt; (starting the main components top directories).
</span><br>
<p>I can see the reason behind this.  For external packages, esp. ones that
<br>
are replaced every time you run autogen.sh, this is a bit dangerous,
<br>
however.
<br>
<p><span class="quotelev1">&gt; Personally, I prefer to keep this rule for all things inside, libltdl
</span><br>
<span class="quotelev1">&gt; included. Later, when the libtool-2.x will became available we can add
</span><br>
<span class="quotelev1">&gt; a define in the ompi_config.h that will trigger the correct include.
</span><br>
<p>It's not my decision which way OpenMPI will go, but: I'd volunteer to
<br>
provide a patch which fixes all the include paths if that can be agreed
<br>
upon.
<br>
<p>My patch is motivated by the fact that I am trying to use OpenMPI as
<br>
testing ground for Libtool-2.x.  OpenMPI is a good candidate package for
<br>
several reasons: it exercises libtool fairly thoroughly, it uses
<br>
libltdl, it is big (and as such not a model project), and I happen to
<br>
have used its predecessor anyway.  Advantage for both sides: hopefully
<br>
the transition will be as smooth as possible.
<br>
<p>If you choose not to fix the include paths, you will have to modify
<br>
ltdl.h in autogen.sh after each `libtoolize --ltdl' for 2.x.  I would
<br>
provide a patch to this end, too, but not guarantee that this would be
<br>
forward-compatible.
<br>
<p>You get to decide which way to go.  :)
<br>
<p><span class="quotelev1">&gt; If we provide a ltdl.h file and finally the compilation use the one from
</span><br>
<span class="quotelev1">&gt; /usr/include that's really confusing.
</span><br>
<p>If you configure with --enable-ltdl-convenience (which is the default in
<br>
OpenMPI), then yes, that would be a bug.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0285.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="../../2005/08/0283.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0283.php">George Bosilca: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0285.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
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
