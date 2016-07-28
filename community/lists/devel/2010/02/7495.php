<?
$subject_val = "Re: [OMPI devel] question about pids";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 14:28:32 2010" -->
<!-- isoreceived="20100225192832" -->
<!-- sent="Thu, 25 Feb 2010 19:28:23 +0000" -->
<!-- isosent="20100225192823" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question about pids" -->
<!-- id="89978BCD-A88E-4255-81C9-4BD125DAAD60_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 14:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7496.php">Jeff Squyres: "[OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>Previous message:</strong> <a href="7494.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7500.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you looked at orte-ps?  It contains all the information you'll need to attach a debugger to a already running application.
<br>
<p>Ashley,
<br>
<p>On 25 Feb 2010, at 17:43, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
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
<span class="quotelev2">&gt;&gt; I don't see a way to currently do that - the rmaps display comes -before- process launch, so the pid will not be displayed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you need to see them? We'd have to add that output somewhere post-launch - perhaps when debuggers are initialized.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 23, 2010, at 12:58 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I notice that you've got support in the XML output code to display the pids of the processes, but I can't see how to enable them. Can you give me any pointers?
</span><br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7496.php">Jeff Squyres: "[OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>Previous message:</strong> <a href="7494.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7500.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
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
