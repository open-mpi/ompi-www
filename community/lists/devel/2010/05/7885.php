<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 10:15:00 2010" -->
<!-- isoreceived="20100504141500" -->
<!-- sent="04 May 2010 15:14:56 +0100" -->
<!-- isosent="20100504141456" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing" -->
<!-- id="Prayer.1.3.2.1005041514560.30322_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE02791.9010907_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 10:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7884.php">Ralph Castain: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7883.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4 2010, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt;Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is a configure-time test good enough?  For example, are all Linuxes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same in this regard.  That is if you built OMPI on RH and it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configured in the new SysV SM will those bits actually run on other 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux systems correctly?  I think Jeff had hinted to this similarly 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when suggesting this may need to be a runtime test. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think we have ever enforced that requirement, nor am I sure 
</span><br>
<span class="quotelev2">&gt;&gt; the current code would meet it. We have a number of components that 
</span><br>
<span class="quotelev2">&gt;&gt; test for ability to build, but don't check again at run-time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Generally, the project has followed the philosophy of &quot;build on the 
</span><br>
<span class="quotelev2">&gt;&gt; system you intend to run on&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;There is at least one binary distribution that does build on one linux 
</span><br>
<span class="quotelev1">&gt;and allows to be installed on several others.  That is the reason I 
</span><br>
<span class="quotelev1">&gt;bring up the above.   The community can make a stance that that one 
</span><br>
<span class="quotelev1">&gt;distribution does not matter for this case or needs to handle it on its 
</span><br>
<span class="quotelev1">&gt;own.  In the grand scheme of things it might not matter but I wanted to 
</span><br>
<span class="quotelev1">&gt;at least stand up and be heard.
</span><br>
<p>There is a gradation involved.  Building on one distribution and using
<br>
on another is one thing.  But the same distribution can use differently
<br>
built kernels, and the same system can be reconfigured (including both
<br>
package updating and parameter changing).  It is highly undesirable to
<br>
use volatile parameters in non-volatile context.
<br>
<p>A lot of applications need rebuilding when the administrator updates
<br>
packages or makes configuration changes; that's not good and should be
<br>
avoided if at all possible.  Given the way that systems are currently
<br>
configured, and the design of the autoconfigure mechanism, it's probably
<br>
not wholly avoidable.  But it's still a very nasty gotcha.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7884.php">Ralph Castain: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7883.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
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
