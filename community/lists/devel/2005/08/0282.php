<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 31 23:37:13 2005" -->
<!-- isoreceived="20050901043713" -->
<!-- sent="Thu, 1 Sep 2005 06:37:09 +0200" -->
<!-- isosent="20050901043709" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  ltdl.h problem" -->
<!-- id="20050901043709.GC5483_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.58.0509010019130.5104_at_localhost" -->
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
<strong>Date:</strong> 2005-08-31 23:37:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0283.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0281.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0281.php">George Bosilca: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0283.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0283.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0285.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0289.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* George Bosilca wrote on Thu, Sep 01, 2005 at 06:27:27AM CEST:
<br>
<span class="quotelev1">&gt; I trace this one as far as I could. And the results are mostly unexpected.
</span><br>
<span class="quotelev1">&gt; On some of the clusters it compiles without any problems and on some
</span><br>
<span class="quotelev1">&gt; others it doesn't. The difference is ... if there is an ltdl.h installed
</span><br>
<span class="quotelev1">&gt; in the system directories. I don't think that's the expected behavior for
</span><br>
<span class="quotelev1">&gt; the compilation, if we have our own ltdl.h file why should we use the
</span><br>
<span class="quotelev1">&gt; system wide one ...
</span><br>
<p>This is usually up to the user's choice at some point (I don't know
<br>
about OpenMPI with that respect).
<br>
<p><span class="quotelev1">&gt; For some component it work as expected because on the revision 7106 the
</span><br>
<span class="quotelev1">&gt; -I$(top_srcdir)/opal/libltdl has been added to the AM_CPPFLAGS in the
</span><br>
<span class="quotelev1">&gt; Makefile.am. As most of our code use components there is a dependency
</span><br>
<span class="quotelev1">&gt; between nearly every file in the ompi source code and the ldtl.h file.
</span><br>
<span class="quotelev1">&gt; Having to modify all the Makefile.am is a herculean task ...
</span><br>
<p>Ah, ok, I was blind then, in thinking only the parts that compiled over
<br>
here used ltdl.h.  There are a couple of ways to add include paths to
<br>
many Makefile.am's: You could leverage config/Makefile.options, and set
<br>
a default value for AM_CPPFLAGS (surely you have to change the
<br>
Makefile.am's once to only add to AM_CPPFLAGS afterwards; or, maybe
<br>
better, to add some other variable CPPFLAGS_LTDL set in
<br>
Makefile.options).
<br>
<p>But surely, once the work has to be done.  I suggested that change
<br>
because before, the code would've broken with Libtool-2.x anyway.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0283.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0281.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0281.php">George Bosilca: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0283.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0283.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0285.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0289.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
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
