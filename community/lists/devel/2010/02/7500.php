<?
$subject_val = "Re: [OMPI devel] question about pids";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 21:07:14 2010" -->
<!-- isoreceived="20100226020714" -->
<!-- sent="Thu, 25 Feb 2010 19:07:09 -0700" -->
<!-- isosent="20100226020709" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question about pids" -->
<!-- id="71d2d8cc1002251807h68bb8c58v6aaa53f5c47f716a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F6FC914-FC0A-4E56-BEE7-26D7CB237E1A_at_computer.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 21:07:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7501.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7499.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7506.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<li><strong>Reply:</strong> <a href="7506.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Easy to do. I'll dump all the pids at the same time when the launch
<br>
completes - effectively, it will be at the same point used by other
<br>
debuggers to attach.
<br>
<p>Have it for you in the trunk this weekend. Can you suggest an xml format you
<br>
would like? Otherwise, I'll just use the current proc output (used in the
<br>
map output) and add a &quot;pid&quot; field to it.
<br>
<p>On Thu, Feb 25, 2010 at 10:43 AM, Greg Watson &lt;g.watson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'd like this to be able to support attaching a debugger to the
</span><br>
<span class="quotelev1">&gt; application. Would it be difficult to provide? We don't need the information
</span><br>
<span class="quotelev1">&gt; all at once, each PID could be sent as the process launches (as long as the
</span><br>
<span class="quotelev1">&gt; XML is correctly formatted) if that makes it any easier.
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
<span class="quotelev2">&gt; &gt; I don't see a way to currently do that - the rmaps display comes -before-
</span><br>
<span class="quotelev1">&gt; process launch, so the pid will not be displayed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you need to see them? We'd have to add that output somewhere
</span><br>
<span class="quotelev1">&gt; post-launch - perhaps when debuggers are initialized.
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
<span class="quotelev3">&gt; &gt;&gt; I notice that you've got support in the XML output code to display the
</span><br>
<span class="quotelev1">&gt; pids of the processes, but I can't see how to enable them. Can you give me
</span><br>
<span class="quotelev1">&gt; any pointers?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7500/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7501.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7499.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7506.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<li><strong>Reply:</strong> <a href="7506.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
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
