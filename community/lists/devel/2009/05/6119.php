<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 11:35:01 2009" -->
<!-- isoreceived="20090527153501" -->
<!-- sent="Wed, 27 May 2009 11:34:51 -0400" -->
<!-- isosent="20090527153451" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="F7F337DC-0A87-41F5-8C77-3732A6541594_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0905270359l530cf2celaeea456a5c811f6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem in the ORTE notifier framework<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 11:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6120.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<li><strong>Previous message:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is a generic threshold? And what is a counter? We have a policy  
<br>
against such coding standards, and to be honest I would like to stick  
<br>
to it. The reason is that the PML is a very complex piece of code, and  
<br>
I would like to keep it as easy to understand as possible. If people  
<br>
start adding #if/#endif all over the code, we diverging from this goal.
<br>
<p>The only way to make this work is to call the notifier or some other  
<br>
framework in this &quot;slow path&quot; and let this other framework do it's own  
<br>
logic to determine what and when to print. Of course the cost of this  
<br>
is a function call plus an atomic operation (which is already not  
<br>
cheap). It's starting to get expensive, even for a &quot;slow path&quot;, which  
<br>
in this particular context is just one insertion in an atomic FIFO.
<br>
<p>If instead of counting in number of times we try to send the fragment,  
<br>
and switch to a time base approach, this can be solved with the PERUSE  
<br>
calls. There is a callback when the request is created, and another  
<br>
callback when the first fragment is pushed successfully into the  
<br>
network. Computing the time between these two, allow a tool to figure  
<br>
out how much time the request was waiting in some internal queues, and  
<br>
therefore how much delay this added to the execution time.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 27, 2009, at 06:59 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if WANT_NOTIFIER_VERBOSE
</span><br>
<span class="quotelev1">&gt; opal_atomic_increment(counter);
</span><br>
<span class="quotelev1">&gt; if (counter &gt; threshold) {
</span><br>
<span class="quotelev1">&gt;     orte_notifier.api(.....)
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6120.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<li><strong>Previous message:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
