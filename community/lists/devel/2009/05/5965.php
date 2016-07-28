<?
$subject_val = "Re: [OMPI devel] MTT tests: segv's with sm on large messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 20:09:04 2009" -->
<!-- isoreceived="20090506000904" -->
<!-- sent="Tue, 05 May 2009 17:08:37 -0700" -->
<!-- isosent="20090506000837" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT tests: segv's with sm on large messages" -->
<!-- id="4A00D505.7010306_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E54F68D2-D9A2-4BEF-8259-ED3EC902E13E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT tests: segv's with sm on large messages<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 20:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5966.php">Josh Hursey: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5964.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>In reply to:</strong> <a href="5964.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5966.php">Josh Hursey: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5966.php">Josh Hursey: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 5, 2009, at 6:01 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You and Terry saw something that was occurring about 0.01% of the time
</span><br>
<span class="quotelev2">&gt;&gt; during MPI_Init during add_procs.  That does not seem to be what we  are
</span><br>
<span class="quotelev2">&gt;&gt; seeing here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right -- that's what I'm saying.  It's different than the MPI_INIT  
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<p>I was trying to say that there are two kinds of MPI_Init errors.  One, 
<br>
which you and Terry have seen, is in add_procs and shows up about 0.01% 
<br>
of the time.  The other, um, is not and occurs more like 1% of the 
<br>
time.  I'm not real sure what &quot;1%&quot; means.  It isn't always 1%.  But the 
<br>
times I've seen it has been in MTT runs in which there are dozens of 
<br>
failures among thousands of runs.
<br>
<p><span class="quotelev2">&gt;&gt; But we have seen failures in 1.3.1 and 1.3.2 that look like the one
</span><br>
<span class="quotelev2">&gt;&gt; here.  They occur more like 1% of the time and can occur during  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *OR* later during a collective call.  What we're looking at here seems
</span><br>
<span class="quotelev2">&gt;&gt; to be related.  E.g., see
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5768.php">http://www.open-mpi.org/community/lists/devel/2009/03/5768.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good to see that we're agreeing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I agree that this is not a new error, but it is worth fixing.   
</span><br>
<span class="quotelev1">&gt; Cisco's MTT didn't run last night because there was no new trunk  
</span><br>
<span class="quotelev1">&gt; tarball last night.  I'll check Cisco's MTT tomorrow morning and see  
</span><br>
<span class="quotelev1">&gt; if there are any sm failures of this new flavor, and how frequently  
</span><br>
<span class="quotelev1">&gt; they're happening.
</span><br>
<p>I just took a stroll down memory lane and these errors seem to be harder 
<br>
to find than I thought.  But, got some:  
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=1030">http://www.open-mpi.org/mtt/index.php?do_redir=1030</a>  IU, v1.3.1
<br>
<p>Ah, and <a href="http://www.open-mpi.org/mtt/index.php?do_redir=1031">http://www.open-mpi.org/mtt/index.php?do_redir=1031</a>  IU_Sif, 
<br>
v1.3 January  4/9700 failures
<br>
<p>I'm not sure what to key in on to find these particular errors.
<br>
<p>Yeah, worth fixing.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5966.php">Josh Hursey: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5964.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>In reply to:</strong> <a href="5964.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5966.php">Josh Hursey: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5966.php">Josh Hursey: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
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
