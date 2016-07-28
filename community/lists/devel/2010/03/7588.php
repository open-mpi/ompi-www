<?
$subject_val = "Re: [OMPI devel] Build issue: mpi_portable_platform.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 19:00:41 2010" -->
<!-- isoreceived="20100313000041" -->
<!-- sent="Fri, 12 Mar 2010 19:00:35 -0500" -->
<!-- isosent="20100313000035" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build issue: mpi_portable_platform.h" -->
<!-- id="4F3578F7-6C91-4FAD-B8F3-B70CE5017A01_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B455B7BD-2313-4656-8441-1E7BBF4B70FB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build issue: mpi_portable_platform.h<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 19:00:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7589.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7587.php">Jeff Squyres: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7587.php">Jeff Squyres: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use it, but I only ran it once when I setup the HG+SVN. I'll start refreshing it more frequently.
<br>
<p>Thanks for the tip,
<br>
Josh
<br>
<p>On Mar 12, 2010, at 6:19 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Josh --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you use the contrib/hg/build-hgignore.pl script?  It examines all the svn:ignore files to build up a .hgignore file.  I run this every time I svn up on my hg+svn tree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2010, at 3:06 PM, Joshua Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think I figured it out. The error was coming from a Mercurial branch cloned from my internal HG+SVN branch. HG previously marked &quot;mpi_portable_platform.h&quot; as a file to not include in rev. control since it was auto-generated. Now that it is not auto-generated, it needs to be included in the rev. control.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The fix (in case anyone hits the same problem) is to remove &quot;mpi_portable_platform.h&quot; from the .hgignore in your HG+SVN, then 'hg addremove', 'hg commit'. Then things are better.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the pointers to the rev #, that helped.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 12, 2010, at 4:42 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is caused by moving mpi_portable_platform.h.in file in two steps from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/include to opal/include -- in order to be used by opal_info and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You need to autogen.sh again after svn up to at least r22789.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope, this helps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RAiner
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Friday 12 March 2010 04:17:41 pm Joshua Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I noticed the following build error on the OMPI trunk (r22821) on IU's Odin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine: make[3]: *** No rule to make target `mpi_portable_platform.h',
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; needed by `all-am'.  Stop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I took a quick pass through the svn commit log and did not see anything
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that would have broken this. Any thoughts on what could be causing this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7589.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7587.php">Jeff Squyres: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7587.php">Jeff Squyres: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
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
