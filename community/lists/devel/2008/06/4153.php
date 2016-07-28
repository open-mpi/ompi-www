<?
$subject_val = "Re: [OMPI devel] iprobe and opal_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 10:26:19 2008" -->
<!-- isoreceived="20080618142619" -->
<!-- sent="Wed, 18 Jun 2008 10:25:59 -0400" -->
<!-- isosent="20080618142559" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iprobe and opal_progress" -->
<!-- id="48591AF7.303_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3455CC5B-EC70-47EA-AD44-870E98B5586D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] iprobe and opal_progress<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 10:25:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4154.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4152.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4152.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4154.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4154.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I'll see if I can figure out the below.  Though is this really 
<br>
something that can be used in both MPI_Iprobe and MPI_Probe?  One other 
<br>
question,  is the use of opal_progress in MPI_Iprobe the right thing to 
<br>
do?  Is there something a little lighter weight (bml_progress maybe)?
<br>
<p>--td
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I kind of remember that we had a discussion about this long ago, and 
</span><br>
<span class="quotelev1">&gt; that we decided to have it this way for latency. Now looking at the 
</span><br>
<span class="quotelev1">&gt; code it seems way to ugly to me. I think Brian have a point. MPIPobe 
</span><br>
<span class="quotelev1">&gt; and MPI_Iprobe are MPI functions, and they are expected to make 
</span><br>
<span class="quotelev1">&gt; progress all the time. So call opal_progress, then do the probe seems 
</span><br>
<span class="quotelev1">&gt; like the smartest and simplest approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if you want to do this, then it's better if we do it in the 
</span><br>
<span class="quotelev1">&gt; right way. What we have today in the PML OB1 or probe is horribly 
</span><br>
<span class="quotelev1">&gt; expensive. Initialize a complete request, that will never be used for 
</span><br>
<span class="quotelev1">&gt; anything than matching is an overkill. The only fields that you really 
</span><br>
<span class="quotelev1">&gt; need are the flags and the matching information. How about, creating a 
</span><br>
<span class="quotelev1">&gt; request, setting these flags and then call the matching directly ? 
</span><br>
<span class="quotelev1">&gt; This way, we can create a special path or probes, and this will remove 
</span><br>
<span class="quotelev1">&gt; some ifs from the critical path for receives ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2008, at 3:57 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 18 Jun 2008, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps we did that as a latency optimization...?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George / Brian / Galen -- do you guys know/remember why this was done?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On the surface, it looks like it would be ok to call progress and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; check again to see if it found the match.  Can anyone think of a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deeper reason not to?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it is ok to check again, my next question is going to be how?  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because after looking at the code some more I found iprobe requests 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are not actually queued.  So can I just do another 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA_PML_OB1_RECV_REQUEST_START on the init'd IPROBE_REQUEST after 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the  call opal_progress to force a search on the unexpected queue or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do I need to FINI the request and regenerate it again?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you'd have to re-init the request at a minimum.  In other 
</span><br>
<span class="quotelev2">&gt;&gt; words, just always call opal_progres at the top of iprobe and be done 
</span><br>
<span class="quotelev2">&gt;&gt; :).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4154.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4152.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4152.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4154.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4154.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
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
