<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 17:27:45 2013" -->
<!-- isoreceived="20131203222745" -->
<!-- sent="Tue, 3 Dec 2013 22:27:43 +0000" -->
<!-- isosent="20131203222743" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h" -->
<!-- id="BCA0EB1C-4194-4412-81E5-189526CF170F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CEB4C944.15B25%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 17:27:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13348.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="13346.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13303.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13349.php">Nathan Hjelm: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Reply:</strong> <a href="13349.php">Nathan Hjelm: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David --
<br>
<p>Any possibility of upgrading to the v1.7 series?
<br>
<p><p>On Nov 22, 2013, at 10:46 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; David (Gunter) -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which version of Open MPI are you using?  It looks like the 1.7 series
</span><br>
<span class="quotelev1">&gt; does not declare the internal version (GREEK / SVN) in the Fortran
</span><br>
<span class="quotelev1">&gt; headers, so this shouldn't be a problem going forward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/22/13 8:39 AM, &quot;Dave Goodell (dgoodell)&quot; &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres is usually our Fortran expert for this sort of issue, but
</span><br>
<span class="quotelev2">&gt;&gt; he's on vacation until after the Thanksgiving holiday in the US.  So
</span><br>
<span class="quotelev2">&gt;&gt; please expect a modest delay in (properly) responding to your question.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 21, 2013, at 9:37 AM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a user complaining about warnings he is getting from his
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran 95 code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Intel compilers throw out this warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning #7346: The CHARACTER* form of a CHARACTER declaration is an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; obsolescent feature in Fortran 95.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The warning stems from the following two lines in &lt;mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dir&gt;/include/mpif-config.h:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     character*32 OMPI_GREEK_VERSION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     character*32 OMPI_SVN_VERSION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can we simply change those lines to the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     character(len=32) OMPI_GREEK_VERSION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     character(len=32) OMPI_SVN_VERSION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What would break if that happened?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; david
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Gunter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13348.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="13346.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13303.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13349.php">Nathan Hjelm: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Reply:</strong> <a href="13349.php">Nathan Hjelm: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
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
