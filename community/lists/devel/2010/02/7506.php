<?
$subject_val = "Re: [OMPI devel] question about pids";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 09:03:15 2010" -->
<!-- isoreceived="20100226140315" -->
<!-- sent="Fri, 26 Feb 2010 09:03:10 -0500" -->
<!-- isosent="20100226140310" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question about pids" -->
<!-- id="321CC113-9242-44F3-8284-7EE90B08CCC2_at_computer.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71d2d8cc1002251807h68bb8c58v6aaa53f5c47f716a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] question about pids<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 09:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7507.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7505.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>In reply to:</strong> <a href="7500.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7513.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<li><strong>Reply:</strong> <a href="7513.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Adding a pid attribute to the process element would be great.
<br>
<p>Thanks,
<br>
Greg
<br>
<p>On Feb 25, 2010, at 9:07 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Easy to do. I'll dump all the pids at the same time when the launch completes - effectively, it will be at the same point used by other debuggers to attach.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have it for you in the trunk this weekend. Can you suggest an xml format you would like? Otherwise, I'll just use the current proc output (used in the map output) and add a &quot;pid&quot; field to it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 25, 2010 at 10:43 AM, Greg Watson &lt;g.watson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'd like this to be able to support attaching a debugger to the application. Would it be difficult to provide? We don't need the information all at once, each PID could be sent as the process launches (as long as the XML is correctly formatted) if that makes it any easier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 23, 2010, at 3:58 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't see a way to currently do that - the rmaps display comes -before- process launch, so the pid will not be displayed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you need to see them? We'd have to add that output somewhere post-launch - perhaps when debuggers are initialized.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 23, 2010, at 12:58 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I notice that you've got support in the XML output code to display the pids of the processes, but I can't see how to enable them. Can you give me any pointers?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7507.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7505.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>In reply to:</strong> <a href="7500.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7513.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<li><strong>Reply:</strong> <a href="7513.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
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
