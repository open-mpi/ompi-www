<?
$subject_val = "Re: [OMPI devel] iprobe and opal_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 10:38:10 2008" -->
<!-- isoreceived="20080618143810" -->
<!-- sent="Wed, 18 Jun 2008 16:37:59 +0200" -->
<!-- isosent="20080618143759" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iprobe and opal_progress" -->
<!-- id="600F1E0D-B49E-4D3B-B477-0124A8D81573_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48591AF7.303_at_sun.com" -->
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
<strong>Date:</strong> 2008-06-18 10:37:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4155.php">Muhammad Atif: "[OMPI devel] OpenMPI multiple ethernet questions ..."</a>
<li><strong>Previous message:</strong> <a href="4153.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4153.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4156.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4156.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, please call the opal_progress. Otherwise, you will create  
<br>
different behavior based on the available networks, basically the  
<br>
networks that register a socket and those who don't. It might not be a  
<br>
big deal today (except if the user call MPI_Iprobe to progress  
<br>
communications), as TCP is the only network that use file descriptors,  
<br>
but it will be in the case of multithreaded applications.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 18, 2008, at 4:25 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I'll see if I can figure out the below.  Though is this really  
</span><br>
<span class="quotelev1">&gt; something that can be used in both MPI_Iprobe and MPI_Probe?  One  
</span><br>
<span class="quotelev1">&gt; other question,  is the use of opal_progress in MPI_Iprobe the right  
</span><br>
<span class="quotelev1">&gt; thing to do?  Is there something a little lighter weight  
</span><br>
<span class="quotelev1">&gt; (bml_progress maybe)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I kind of remember that we had a discussion about this long ago,  
</span><br>
<span class="quotelev2">&gt;&gt; and that we decided to have it this way for latency. Now looking at  
</span><br>
<span class="quotelev2">&gt;&gt; the code it seems way to ugly to me. I think Brian have a point.  
</span><br>
<span class="quotelev2">&gt;&gt; MPIPobe and MPI_Iprobe are MPI functions, and they are expected to  
</span><br>
<span class="quotelev2">&gt;&gt; make progress all the time. So call opal_progress, then do the  
</span><br>
<span class="quotelev2">&gt;&gt; probe seems like the smartest and simplest approach.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, if you want to do this, then it's better if we do it in  
</span><br>
<span class="quotelev2">&gt;&gt; the right way. What we have today in the PML OB1 or probe is  
</span><br>
<span class="quotelev2">&gt;&gt; horribly expensive. Initialize a complete request, that will never  
</span><br>
<span class="quotelev2">&gt;&gt; be used for anything than matching is an overkill. The only fields  
</span><br>
<span class="quotelev2">&gt;&gt; that you really need are the flags and the matching information.  
</span><br>
<span class="quotelev2">&gt;&gt; How about, creating a request, setting these flags and then call  
</span><br>
<span class="quotelev2">&gt;&gt; the matching directly ? This way, we can create a special path or  
</span><br>
<span class="quotelev2">&gt;&gt; probes, and this will remove some ifs from the critical path for  
</span><br>
<span class="quotelev2">&gt;&gt; receives ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 18, 2008, at 3:57 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 18 Jun 2008, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Perhaps we did that as a latency optimization...?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; George / Brian / Galen -- do you guys know/remember why this was  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; done?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On the surface, it looks like it would be ok to call progress  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and check again to see if it found the match.  Can anyone think  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of a deeper reason not to?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it is ok to check again, my next question is going to be how?   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Because after looking at the code some more I found iprobe  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requests are not actually queued.  So can I just do another  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA_PML_OB1_RECV_REQUEST_START on the init'd IPROBE_REQUEST after  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the  call opal_progress to force a search on the unexpected queue  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or do I need to FINI the request and regenerate it again?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think you'd have to re-init the request at a minimum.  In other  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; words, just always call opal_progres at the top of iprobe and be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done :).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
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
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4154/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4155.php">Muhammad Atif: "[OMPI devel] OpenMPI multiple ethernet questions ..."</a>
<li><strong>Previous message:</strong> <a href="4153.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4153.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4156.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4156.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
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
