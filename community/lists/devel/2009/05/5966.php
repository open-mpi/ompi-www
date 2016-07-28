<?
$subject_val = "Re: [OMPI devel] MTT tests: segv's with sm on large messages";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 00:03:03 2009" -->
<!-- isoreceived="20090506040303" -->
<!-- sent="Wed, 6 May 2009 00:02:41 -0400" -->
<!-- isosent="20090506040241" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT tests: segv's with sm on large messages" -->
<!-- id="A393E51A-B662-4744-9C32-349ECF356777_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A00D505.7010306_at_sun.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 00:02:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5967.php">Ralph Castain: "[OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5965.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>In reply to:</strong> <a href="5965.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If it would help in tracking this problem to give someone access to  
<br>
Sif, I can probably make that happen. Just let me know.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On May 5, 2009, at 8:08 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 5, 2009, at 6:01 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You and Terry saw something that was occurring about 0.01% of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during MPI_Init during add_procs.  That does not seem to be what  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we  are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seeing here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right -- that's what I'm saying.  It's different than the  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INIT  errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to say that there are two kinds of MPI_Init errors.   
</span><br>
<span class="quotelev1">&gt; One, which you and Terry have seen, is in add_procs and shows up  
</span><br>
<span class="quotelev1">&gt; about 0.01% of the time.  The other, um, is not and occurs more  
</span><br>
<span class="quotelev1">&gt; like 1% of the time.  I'm not real sure what &quot;1%&quot; means.  It isn't  
</span><br>
<span class="quotelev1">&gt; always 1%.  But the times I've seen it has been in MTT runs in  
</span><br>
<span class="quotelev1">&gt; which there are dozens of failures among thousands of runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But we have seen failures in 1.3.1 and 1.3.2 that look like the one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here.  They occur more like 1% of the time and can occur during   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *OR* later during a collective call.  What we're looking at here  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be related.  E.g., see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5768.php">http://www.open-mpi.org/community/lists/devel/2009/03/5768.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good to see that we're agreeing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I agree that this is not a new error, but it is worth  
</span><br>
<span class="quotelev2">&gt;&gt; fixing.   Cisco's MTT didn't run last night because there was no  
</span><br>
<span class="quotelev2">&gt;&gt; new trunk  tarball last night.  I'll check Cisco's MTT tomorrow  
</span><br>
<span class="quotelev2">&gt;&gt; morning and see  if there are any sm failures of this new flavor,  
</span><br>
<span class="quotelev2">&gt;&gt; and how frequently  they're happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just took a stroll down memory lane and these errors seem to be  
</span><br>
<span class="quotelev1">&gt; harder to find than I thought.  But, got some:  <a href="http://www.open">http://www.open</a>- 
</span><br>
<span class="quotelev1">&gt; mpi.org/mtt/index.php?do_redir=1030  IU, v1.3.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, and <a href="http://www.open-mpi.org/mtt/index.php?do_redir=1031">http://www.open-mpi.org/mtt/index.php?do_redir=1031</a>   
</span><br>
<span class="quotelev1">&gt; IU_Sif, v1.3 January  4/9700 failures
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what to key in on to find these particular errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, worth fixing.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="5967.php">Ralph Castain: "[OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5965.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>In reply to:</strong> <a href="5965.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
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
