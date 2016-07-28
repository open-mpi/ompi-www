<?
$subject_val = "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 00:24:29 2011" -->
<!-- isoreceived="20110913042429" -->
<!-- sent="Tue, 13 Sep 2011 16:24:22 +1200" -->
<!-- isosent="20110913042422" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?" -->
<!-- id="52b9452f9fdff90941bbeaf1a8f0c030.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CE218C87-D932-49E7-8EA5-E76BBC509C0A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenIB%20error%20messages:%20reporting%20the%20default%20or%20telling%20you%20what's%20happening?"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-09-13 00:24:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17244.php">nn3003: "[OMPI users] #cpus/socket"</a>
<li><strong>Previous message:</strong> <a href="17242.php">Steve Jones: "[OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>In reply to:</strong> <a href="17224.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17275.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17275.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha writes
<br>
<p><span class="quotelev2">&gt; &gt; Actually I'm surprised that default value is 10. I think it
</span><br>
<span class="quotelev2">&gt; &gt;  used to be 20....
</span><br>
<p>Jeff writes:
<br>
<p><span class="quotelev1">&gt; FWIW, the default for the ib_timeout is 20 in both v1.4.x and v1.5.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Ralph said, ompi_info will show the current value -- not the default
</span><br>
<span class="quotelev1">&gt; value.  Of course, the current value will be the default value, unless it
</span><br>
<span class="quotelev1">&gt; has been overridden.  In OMPI v1.5, ompi_info should indicate where the
</span><br>
<span class="quotelev1">&gt; value came from:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; % ompi_info --param btl openib | grep ib_timeout
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &lt;20&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; % setenv OMPI_MCA_btl_openib_ib_timeout 13
</span><br>
<span class="quotelev1">&gt; % ompi_info --param btl openib | grep ib_timeout
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &lt;13&gt;, data source: environment or cmdline)
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hmmm?
<br>
<p>So the error output is not showing what you two think should be
<br>
the default value, 20, but then nor is it showing what I think I
<br>
have set it to globally, again, 20.
<br>
<p>But anyroad, what I wanted from this is confirmation that the output
<br>
is telling me the value that the job was running with, 10.
<br>
<p>Now to find out why it appears as 10, because,
<br>
<p>a) that's not seemingly the default
<br>
b) it's not being set to 10 globally by me as the admin
<br>
c) it wasn't being set to anything by the user's submission script
<br>
<p>I'll have a dig around and get back to the thread,
<br>
Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17244.php">nn3003: "[OMPI users] #cpus/socket"</a>
<li><strong>Previous message:</strong> <a href="17242.php">Steve Jones: "[OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>In reply to:</strong> <a href="17224.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17275.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17275.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
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
