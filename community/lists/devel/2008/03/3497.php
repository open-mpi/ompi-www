<?
$subject_val = "Re: [OMPI devel] New libevent to trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 16:13:32 2008" -->
<!-- isoreceived="20080321201332" -->
<!-- sent="Fri, 21 Mar 2008 13:13:25 -0700" -->
<!-- isosent="20080321201325" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New libevent to trunk?" -->
<!-- id="47E416E5.10105_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BB511F23-17E2-4017-89EE-E4FF514351E8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New libevent to trunk?<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-21 16:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3498.php">Jeff Squyres: "Re: [OMPI devel] Makefile.am updates"</a>
<li><strong>Previous message:</strong> <a href="3496.php">Jeff Squyres: "Re: [OMPI devel] New libevent to trunk?"</a>
<li><strong>In reply to:</strong> <a href="3495.php">Josh Hursey: "Re: [OMPI devel] New libevent to trunk?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>&nbsp;&nbsp;As you saw off-list, I've entered a BLCR bug for the epoll problems,
<br>
which I a certain are mine.
<br>
<p>&nbsp;&nbsp;What is the status of the problems you saw when testing w/ select()?
<br>
I don't know of any reason why BLCR would/could interfere with select(),
<br>
assuming the caller of select() is prepared to handle EINTR.  So I don't
<br>
think that BLCR is at fault here, but am willing to be convinced
<br>
otherwise.  Do you have any idea what the problem is w/ select()?
<br>
<p>-Paul
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Go ahead and bring it in. I have c/r working with forcing poll for  
</span><br>
<span class="quotelev1">&gt; the event engine via the amca file. Supporting the other mechanisms  
</span><br>
<span class="quotelev1">&gt; will take a while and should not prevent this from being merged into  
</span><br>
<span class="quotelev1">&gt; the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for checking though.
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2008, at 11:53 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Josh --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where do we stand on bringing in the new libevent to the trunk this
</span><br>
<span class="quotelev2">&gt;&gt; weekend?  Is it ok to import, or do you need more time to work with
</span><br>
<span class="quotelev2">&gt;&gt; the ramifications to the FT stuff?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3498.php">Jeff Squyres: "Re: [OMPI devel] Makefile.am updates"</a>
<li><strong>Previous message:</strong> <a href="3496.php">Jeff Squyres: "Re: [OMPI devel] New libevent to trunk?"</a>
<li><strong>In reply to:</strong> <a href="3495.php">Josh Hursey: "Re: [OMPI devel] New libevent to trunk?"</a>
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
