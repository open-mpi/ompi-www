<?
$subject_val = "Re: [OMPI devel] Bug Report cxx/constants.h";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 15 14:39:02 2012" -->
<!-- isoreceived="20120815183902" -->
<!-- sent="Wed, 15 Aug 2012 14:38:55 -0400" -->
<!-- isosent="20120815183855" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug Report cxx/constants.h" -->
<!-- id="FCF1B3D6-3A42-41B9-993D-71C34D5A87B8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C5C6B03-0EC1-4046-85F5-B2D857AE44EA_at_utsa.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug Report cxx/constants.h<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-15 14:38:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11402.php">Jeff Squyres: "[OMPI devel] 1.6.1rc3 posted"</a>
<li><strong>Previous message:</strong> <a href="11400.php">John T. Foster: "[OMPI devel] Bug Report cxx/constants.h"</a>
<li><strong>In reply to:</strong> <a href="11400.php">John T. Foster: "[OMPI devel] Bug Report cxx/constants.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weird -- it never caused an issue for my clang version.  Shrug.
<br>
<p>Thanks for the heads up!  I committed it to the SVN trunk; it will be included in v1.6.1.
<br>
<p><p>On Aug 15, 2012, at 9:08 AM, John T. Foster wrote:
<br>
<p><span class="quotelev1">&gt; In the release version of open-mpi 1.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cxx/constants.h header file on line 54 there is an extra semi-colon at the end of line.  This causes the clang compiler to fail on a Mac when the header is included.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; JTF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; John T. Foster
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Mechanical Engineering Department
</span><br>
<span class="quotelev1">&gt; The University of Texas at San Antonio
</span><br>
<span class="quotelev1">&gt; AET 2.330
</span><br>
<span class="quotelev1">&gt; One UTSA Circle
</span><br>
<span class="quotelev1">&gt; San Antonio, TX 78249
</span><br>
<span class="quotelev1">&gt; 210.458.5521
</span><br>
<span class="quotelev1">&gt; john.foster_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11402.php">Jeff Squyres: "[OMPI devel] 1.6.1rc3 posted"</a>
<li><strong>Previous message:</strong> <a href="11400.php">John T. Foster: "[OMPI devel] Bug Report cxx/constants.h"</a>
<li><strong>In reply to:</strong> <a href="11400.php">John T. Foster: "[OMPI devel] Bug Report cxx/constants.h"</a>
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
