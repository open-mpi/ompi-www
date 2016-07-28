<?
$subject_val = "Re: [OMPI devel] RFC: Final cleanup of included headers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 09:00:46 2009" -->
<!-- isoreceived="20090318130046" -->
<!-- sent="Wed, 18 Mar 2009 07:00:36 -0600" -->
<!-- isosent="20090318130036" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Final cleanup of included headers" -->
<!-- id="EF9C3497-9293-4357-AD0C-18859ADD68BF_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200903171841.45123.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Final cleanup of included headers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 09:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5659.php">Jeff Squyres: "[OMPI devel] Fwd: New MPI-2.1 standard in hardcover - the yellow book"</a>
<li><strong>Previous message:</strong> <a href="5657.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>In reply to:</strong> <a href="5649.php">Rainer Keller: "[OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5669.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Reply:</strong> <a href="5669.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could we hold off on this until after 1.3.2 is out the door and has a  
<br>
couple of days to stabilize? All these header file changes are making  
<br>
it more difficult to cleanly apply patches to the 1.3 branch.
<br>
<p>When we get past the next couple of weeks, the 1.3 branch should clear  
<br>
out the backlog of CMRs, and we should have the usual immediate &quot;oops&quot;  
<br>
fixes in to 1.3.2. Then this won't be such a problem.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Mar 17, 2009, at 4:41 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What:     Delete unused headers (intrusive)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why:      Get rid of needlessly included headers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where:    On trunk -- but I am playing safe -- hence this RFC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When:     Apply on trunk on 20.3. (in the evening before MTT tar  
</span><br>
<span class="quotelev1">&gt; ball, but
</span><br>
<span class="quotelev1">&gt;          not to disturb other people's work)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Timeout:  Afternoon of 20.03.2009 (for comments or hold-off notice)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the frame of the BTL-move work a libopen-net library is created,  
</span><br>
<span class="quotelev1">&gt; several
</span><br>
<span class="quotelev1">&gt; dependencies have been resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some still remain: we include headers all over the place, which is  
</span><br>
<span class="quotelev1">&gt; technically
</span><br>
<span class="quotelev1">&gt; not an error. However, it's not nice in order to resolve some  
</span><br>
<span class="quotelev1">&gt; problems and not
</span><br>
<span class="quotelev1">&gt; the Right Thing(tm).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'd propose to apply the following script (with the diff file  
</span><br>
<span class="quotelev1">&gt; showing a
</span><br>
<span class="quotelev1">&gt; preliminary example of what's submitted modulo the stuff in ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; c/*),
</span><br>
<span class="quotelev1">&gt; which then would only remove headers, which are _not_ needed (as  
</span><br>
<span class="quotelev1">&gt; figured by
</span><br>
<span class="quotelev1">&gt; below script), as said in today's telcon.
</span><br>
<span class="quotelev1">&gt; Todays patches at first _add_ some of the required headers, which  
</span><br>
<span class="quotelev1">&gt; later are
</span><br>
<span class="quotelev1">&gt; needed anyway (iff the deletion of headers in included-files is done).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As this deletion is _intrusive_ (touching ~800 files, mostly just  
</span><br>
<span class="quotelev1">&gt; single-
</span><br>
<span class="quotelev1">&gt; liners), I would like to get feedback and comments, whether it  
</span><br>
<span class="quotelev1">&gt; breaks anything
</span><br>
<span class="quotelev1">&gt; in any branches or has other negative effects in any branches of  
</span><br>
<span class="quotelev1">&gt; partners or
</span><br>
<span class="quotelev1">&gt; is considered to be overly intrusive / should be split...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; check_unnecessary_headers 
</span><br>
<span class="quotelev1">&gt; .sh 
</span><br>
<span class="quotelev1">&gt; .bz2 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; ompi_cleanup_header 
</span><br>
<span class="quotelev1">&gt; -2009.03.17.diff.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="5659.php">Jeff Squyres: "[OMPI devel] Fwd: New MPI-2.1 standard in hardcover - the yellow book"</a>
<li><strong>Previous message:</strong> <a href="5657.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>In reply to:</strong> <a href="5649.php">Rainer Keller: "[OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5669.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Reply:</strong> <a href="5669.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
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
