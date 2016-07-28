<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 18:16:39 2012" -->
<!-- isoreceived="20120222231639" -->
<!-- sent="Wed, 22 Feb 2012 16:16:30 -0700" -->
<!-- isosent="20120222231630" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="A9F253EC-3CC3-4874-8551-E135E8F053F0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F45766A.3030605_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 r25914 DOA<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 18:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10570.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10566.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's what we needed to know - i.e., that setting num_sockets=1 generates an error instead of segfaulting down the road. I can submit a CMR to do so.
<br>
<p>thx!
<br>
<p>On Feb 22, 2012, at 4:12 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; On 02/22/12 14:54, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That doesn't really address the issue, though. What I want to know is: what happens when you try to bind processes? What about -bind-to-socket, and -persocket options? Etc. Reason I'm concerned: I'm not sure what happens if the socket layer isn't present. The logic in 1.5 is pretty old, but I believe it relies heavily on sockets being present.
</span><br>
<span class="quotelev1">&gt; Okay.  So,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *)  &quot;out of the box&quot;, basically nothing works.  For example, &quot;mpirun hostname&quot; segfaults.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *)  With &quot;--mca orte_num_sockets 1&quot;, stuff appears to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *)  With &quot;--mca orte_num_sockets 1&quot; and adding either &quot;--bysocket --bind-to-socket&quot; or &quot;--npersocket &lt;n&gt;&quot;, I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unable to bind to socket -13 on node burl-ct-v20z-10.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Fatal
</span><br>
<span class="quotelev1">&gt; Node: burl-ct-v20z-10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I hear Brice's comment that this is an old kernel.  And, I hear what you're saying about a &quot;real&quot; fix being expensive.  Nevertheless, to my taste, automatically setting num_sockets==1 when num_sockets==0 is detected makes a lot of sense.  It makes things &quot;basically&quot; work, turning a situation where everything including &quot;mpirun hostname&quot; segfaults into a situation where default usage works just fine.  What remains broken is binding, which generates an error message that gives the user a hope of making progress (turning off binding).  That's in contrast from expecting users to go from
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun hostname
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to knowing that they should set orte_num_sockets==1.
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
<li><strong>Next message:</strong> <a href="10570.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10566.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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
