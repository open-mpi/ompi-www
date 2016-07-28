<?
$subject_val = "Re: [OMPI devel] iprobe and opal_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 10:09:25 2008" -->
<!-- isoreceived="20080618140925" -->
<!-- sent="Wed, 18 Jun 2008 16:09:14 +0200" -->
<!-- isosent="20080618140914" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iprobe and opal_progress" -->
<!-- id="3455CC5B-EC70-47EA-AD44-870E98B5586D_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0806180956480.21120_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 10:09:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4153.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4151.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4151.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4153.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4153.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I kind of remember that we had a discussion about this long ago, and  
<br>
that we decided to have it this way for latency. Now looking at the  
<br>
code it seems way to ugly to me. I think Brian have a point. MPIPobe  
<br>
and MPI_Iprobe are MPI functions, and they are expected to make  
<br>
progress all the time. So call opal_progress, then do the probe seems  
<br>
like the smartest and simplest approach.
<br>
<p>However, if you want to do this, then it's better if we do it in the  
<br>
right way. What we have today in the PML OB1 or probe is horribly  
<br>
expensive. Initialize a complete request, that will never be used for  
<br>
anything than matching is an overkill. The only fields that you really  
<br>
need are the flags and the matching information. How about, creating a  
<br>
request, setting these flags and then call the matching directly ?  
<br>
This way, we can create a special path or probes, and this will remove  
<br>
some ifs from the critical path for receives ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 18, 2008, at 3:57 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 18 Jun 2008, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps we did that as a latency optimization...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George / Brian / Galen -- do you guys know/remember why this was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the surface, it looks like it would be ok to call progress and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check again to see if it found the match.  Can anyone think of a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deeper reason not to?
</span><br>
<span class="quotelev2">&gt;&gt; If it is ok to check again, my next question is going to be how?   
</span><br>
<span class="quotelev2">&gt;&gt; Because after looking at the code some more I found iprobe requests  
</span><br>
<span class="quotelev2">&gt;&gt; are not actually queued.  So can I just do another  
</span><br>
<span class="quotelev2">&gt;&gt; MCA_PML_OB1_RECV_REQUEST_START on the init'd IPROBE_REQUEST after  
</span><br>
<span class="quotelev2">&gt;&gt; the  call opal_progress to force a search on the unexpected queue  
</span><br>
<span class="quotelev2">&gt;&gt; or do I need to FINI the request and regenerate it again?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you'd have to re-init the request at a minimum.  In other  
</span><br>
<span class="quotelev1">&gt; words, just always call opal_progres at the top of iprobe and be  
</span><br>
<span class="quotelev1">&gt; done :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4152/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4153.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4151.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4151.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4153.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4153.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
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
