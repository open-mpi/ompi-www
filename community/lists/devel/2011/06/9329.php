<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 08:36:06 2011" -->
<!-- isoreceived="20110609123606" -->
<!-- sent="Thu, 9 Jun 2011 08:36:01 -0400" -->
<!-- isosent="20110609123601" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTimvc3LV2a3o33ws7Z+Q4vn-YR-SQw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTikL1SsWUvH=FNvYqeQ9zwmDKayydQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 08:36:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9330.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9328.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9326.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9330.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9330.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 8, 2011 at 5:37 PM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Tuesday, June 7, 2011 at 4:55 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - orte_errmgr.post_startup() start the persistent RML message. There
</span><br>
<span class="quotelev1">&gt; does not seem to be a shutdown version of this (to deregister the RML
</span><br>
<span class="quotelev1">&gt; message at orte_finalize time). Was this intentional, or just missed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;I just missed that one. I've added that into the code now.
</span><br>
<p>Cool.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - in the orte_errmgr.set_fault_callback: it would be nice if it
</span><br>
<span class="quotelev1">&gt; returned the previous callback, so you could layer more than one
</span><br>
<span class="quotelev1">&gt; 'thing' on top of ORTE and have them chain in a sigaction-like manner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Again, you are correct. Rather than just returning the previous callback
</span><br>
<span class="quotelev1">&gt; (if any) I think it makes more sense to maintain a list of callbacks and
</span><br>
<span class="quotelev1">&gt; have the errmgr call them directly. That way applications/ompi layers don't
</span><br>
<span class="quotelev1">&gt; have to worry about calling another callback function.
</span><br>
<p>I would prefer returning the previous callback instead of relying on
<br>
the errmgr to get the ordering right. Additionally, when I want to
<br>
unregister (or replace) a call back it is easy to do that with a
<br>
single interface, than introducing a new one to remove a particular
<br>
callback.
<br>
Register:
<br>
&nbsp;&nbsp;ompi_errmgr.set_fault_callback(my_callback, prev_callback);
<br>
Deregister:
<br>
&nbsp;&nbsp;ompi_errmgr.set_fault_callback(prev_callback, old_callback);
<br>
or to eliminate all callbacks (if you needed that for somme reason):
<br>
&nbsp;&nbsp;ompi_errmgr.set_fault_callback(NULL, old_callback);
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - orte_process_info.max_procs: this seems to be only used in the
</span><br>
<span class="quotelev1">&gt; binomial routed, but I was a bit unclear about its purpose. Can you
</span><br>
<span class="quotelev1">&gt; describe what it does, and how it is used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use this to determine how many processes were in the job before we started
</span><br>
<span class="quotelev1">&gt; having failures. This helps me preserve the structure of the tree as much as
</span><br>
<span class="quotelev1">&gt; possible rather than completely reorganizing the routing layer every time a
</span><br>
<span class="quotelev1">&gt; process fails.
</span><br>
<p>Sounds fine, I was just curious.
<br>
<p>Reorganizing the routing layer after every process failure has some
<br>
race issues with multiple rolling failures, so preserving the original
<br>
routing tree and rerouting is probably best for this situation. We can
<br>
revisit this later for more performance perserving techniques, but not
<br>
really something that needs to be addressed now.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - in orted_comm.c: you process the ORTE_PROCESS_FAILED_NOTIFICATION
</span><br>
<span class="quotelev1">&gt; message here. Why not push all of that logic into the errmgr
</span><br>
<span class="quotelev1">&gt; components? It is not a big deal, just curious.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most of the actual logic that handles the processing of the error messages
</span><br>
<span class="quotelev1">&gt; is pushed into the errmgr component. The code you see in orted_comm.c is
</span><br>
<span class="quotelev1">&gt; almost all parsing and resending the list of dead processes to the
</span><br>
<span class="quotelev1">&gt; appropriate modules. That code will have to be in there no matter what.
</span><br>
<span class="quotelev1">&gt; I've updated the code and checked it into a bitbucket repository which can
</span><br>
<span class="quotelev1">&gt; be found here:
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/wesbland/resilient-orte/">https://bitbucket.org/wesbland/resilient-orte/</a>
</span><br>
<p>Awesome. Thanks,
<br>
Josh
<br>
<p><span class="quotelev1">&gt; Please let me know of any more comments,
</span><br>
<span class="quotelev1">&gt; Wesley
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9330.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9328.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9326.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9330.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9330.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
