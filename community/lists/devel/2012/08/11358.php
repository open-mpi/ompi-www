<?
$subject_val = "Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  1 13:04:11 2012" -->
<!-- isoreceived="20120801170411" -->
<!-- sent="Wed, 1 Aug 2012 13:04:07 -0400" -->
<!-- isosent="20120801170407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1" -->
<!-- id="8BB0D204-5788-4789-BF51-394CBB2D0EB7_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC9030E682C_at_rz-mbx2.win.rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-01 13:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11359.php">Jeff Squyres: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11357.php">Jeff Squyres: "[OMPI devel] openib: Error posting send"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11338.php">Iliev, Hristo: "[OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it really should have been fixed by now.  :-\
<br>
<p>Thanks for the nudge in reminding us -- I've bumped George to review this again (he's the owner of this particular section of code).  
<br>
<p><p>On Jul 30, 2012, at 6:18 AM, Iliev, Hristo wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 3 months ago I opened a ticket about an extra local data copy being made in the pairwise alltoallv implementation in the &#147;tuned&#148; module that can hurt performance in some cases:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3079">https://svn.open-mpi.org/trac/ompi/ticket/3079</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; As far as I can see the milestone was set to Open MPI 1.6.1 and although it was quite trivial to fix (and I have submitted the appropriate patch with the ticket), the defect is still present in the latest revision of the 1.6 branch and also in trunk. Given that in most cluster cases OMPI ends up using &#147;tuned&#148; and that 1.6.1rc1 makes the pairwise algorithm the default, shouldn&#146;t this defect have been fixed by now?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo Iliev
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
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
<li><strong>Next message:</strong> <a href="11359.php">Jeff Squyres: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11357.php">Jeff Squyres: "[OMPI devel] openib: Error posting send"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11338.php">Iliev, Hristo: "[OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
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
