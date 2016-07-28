<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 10:46:18 2013" -->
<!-- isoreceived="20131122154618" -->
<!-- sent="Fri, 22 Nov 2013 15:46:06 +0000" -->
<!-- isosent="20131122154606" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h" -->
<!-- id="CEB4C944.15B25%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9E26879C-9685-4CCD-A77A-B5F2312714D1_at_cisco.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 10:46:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="13302.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>In reply to:</strong> <a href="13301.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Change request for include/mpif-config.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13347.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13347.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David (Gunter) -
<br>
<p>Which version of Open MPI are you using?  It looks like the 1.7 series
<br>
does not declare the internal version (GREEK / SVN) in the Fortran
<br>
headers, so this shouldn't be a problem going forward.
<br>
<p>Brian
<br>
<p>On 11/22/13 8:39 AM, &quot;Dave Goodell (dgoodell)&quot; &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Jeff Squyres is usually our Fortran expert for this sort of issue, but
</span><br>
<span class="quotelev1">&gt;he's on vacation until after the Thanksgiving holiday in the US.  So
</span><br>
<span class="quotelev1">&gt;please expect a modest delay in (properly) responding to your question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 21, 2013, at 9:37 AM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a user complaining about warnings he is getting from his
</span><br>
<span class="quotelev2">&gt;&gt;Fortran 95 code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The Intel compilers throw out this warning:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; warning #7346: The CHARACTER* form of a CHARACTER declaration is an
</span><br>
<span class="quotelev2">&gt;&gt;obsolescent feature in Fortran 95.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The warning stems from the following two lines in &lt;mpi
</span><br>
<span class="quotelev2">&gt;&gt;dir&gt;/include/mpif-config.h:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      character*32 OMPI_GREEK_VERSION
</span><br>
<span class="quotelev2">&gt;&gt;      character*32 OMPI_SVN_VERSION
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can we simply change those lines to the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      character(len=32) OMPI_GREEK_VERSION
</span><br>
<span class="quotelev2">&gt;&gt;      character(len=32) OMPI_SVN_VERSION
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What would break if that happened?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; david
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Gunter
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="13302.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>In reply to:</strong> <a href="13301.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Change request for include/mpif-config.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13347.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13347.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
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
