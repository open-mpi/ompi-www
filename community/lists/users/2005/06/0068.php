<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 15 14:24:31 2005" -->
<!-- isoreceived="20050615192431" -->
<!-- sent="Wed, 15 Jun 2005 14:24:24 -0500" -->
<!-- isosent="20050615192424" -->
<!-- name="Matthew Knepley" -->
<!-- email="knepley_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions on status" -->
<!-- id="y8hr7f3tod3.fsf_at_harley.mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050615113217.A4630_at_ca.sandia.gov" -->
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
<strong>From:</strong> Matthew Knepley (<em>knepley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-15 14:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0069.php">Brian Barrett: "Re: [O-MPI users] Wrapper names [was: shell interaction]"</a>
<li><strong>Previous message:</strong> <a href="0067.php">Tim Mattox: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0066.php">Benjamin Allan: "Re: [O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0070.php">Benjamin Allan: "[O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0070.php">Benjamin Allan: "[O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0076.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Benjamin Allan &lt;baallan_at_[hidden]&gt; writes:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I would like to emphasize Ben's point about integration.
<br>
I really could care less whether the implementation works right now
<br>
or not. However, I care very much how the build system functions,
<br>
since that it where the hard work of integration will be. You are
<br>
making my job harder by restricting the source. I think the fears
<br>
of allowing access to buggy code are far overblown. I develop an
<br>
open source package with thousands of users and always allow access
<br>
to the latest code. Most people do not even upgrade to the latest
<br>
release, let alone dive in and test out alpha code.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matt
<br>
<p><span class="quotelev1">&gt; Just a brief response on two points (lest the 'insiders' think
</span><br>
<span class="quotelev1">&gt; there are no sympathetic outsiders...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 15, 2005 at 01:09:27PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Although we have not made a final decision yet, given that community 
</span><br>
<span class="quotelev2">&gt;&gt; involvement is a *strong* goal of this project, we've actively 
</span><br>
<span class="quotelev2">&gt;&gt; discussed several models of how to bring the community into Open MPI.  
</span><br>
<span class="quotelev2">&gt;&gt; One possibility is to have a minimal registration mechanism where 
</span><br>
<span class="quotelev2">&gt;&gt; anyone who registers can get anonymous/read-only access.  This would 
</span><br>
<span class="quotelev2">&gt;&gt; likely be a suitable deterrent for someone to take our work and claim 
</span><br>
<span class="quotelev2">&gt;&gt; it as their own (because there would be a paper trail).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; a)
</span><br>
<span class="quotelev1">&gt; It has not been my experience that a paper trail makes the
</span><br>
<span class="quotelev1">&gt; class of people prone to theivery any less prone to theivery.
</span><br>
<span class="quotelev1">&gt; The sad reality of ineffective (totally absent?) quality control by
</span><br>
<span class="quotelev1">&gt; journals and conferences makes the deterrent effect unlikely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b)
</span><br>
<span class="quotelev1">&gt; On the release issue, the '&quot;slow stable&quot; plus snapshots' release
</span><br>
<span class="quotelev1">&gt; cycle (after the initial stable point) seems very desirable to me.
</span><br>
<span class="quotelev1">&gt; I've lost countless months of time making my primary open-source
</span><br>
<span class="quotelev1">&gt; deliverable appear &quot;stable&quot; to the users in spite of deep instabilities
</span><br>
<span class="quotelev1">&gt; in external tools I am forced to incorporate for programmatic reasons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open-mpi, I can guarantee, will be added to this list of external
</span><br>
<span class="quotelev1">&gt; dependencies I have to cope with and I'm thrilled to see folks aiming 
</span><br>
<span class="quotelev1">&gt; to keep the quality high in the first release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I would like to see, as the developer of another (non-competing)
</span><br>
<span class="quotelev1">&gt; infrastructure tool set, is some sort of little web form or at
</span><br>
<span class="quotelev1">&gt; least an email link where
</span><br>
<span class="quotelev1">&gt; I can put in a description of my project and say why it should be
</span><br>
<span class="quotelev1">&gt; given early access, rather than just being told &quot;sorry, closed&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It takes time to incorporate a new mpi implementation (and yet
</span><br>
<span class="quotelev1">&gt; another set of awful build requirement peculiarities) into a
</span><br>
<span class="quotelev1">&gt; a package like mine that is expected to be portable and to cope
</span><br>
<span class="quotelev1">&gt; seamlessly with every mpi that comes along. I can guarantee
</span><br>
<span class="quotelev1">&gt; that within days of the open-mpi download becoming public,
</span><br>
<span class="quotelev1">&gt; people will be dumping hatemail in *my* mailbox because the
</span><br>
<span class="quotelev1">&gt; toolset i support isn't 'open-mpi-ready'.
</span><br>
<span class="quotelev1">&gt; As it happens, I can get a bootleg (not necessarily current)
</span><br>
<span class="quotelev1">&gt; openmpi tarball from
</span><br>
<span class="quotelev1">&gt; someone nearby as I work at Sandia, but that shouldn't have
</span><br>
<span class="quotelev1">&gt; to be the case. Wouldn't it be better if (knowing that
</span><br>
<span class="quotelev1">&gt; testing comes with certain politeness requirements and testing
</span><br>
<span class="quotelev1">&gt; duties) those who have to support open-mpi users get to do
</span><br>
<span class="quotelev1">&gt; gamma-testing programming before the release (since beta is closed)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the question of 'benefit of more testers' from 'my' class
</span><br>
<span class="quotelev1">&gt; of user. You're right, i don't have the slightest interest
</span><br>
<span class="quotelev1">&gt; in examining or reporting bugs down in 95% of your code.
</span><br>
<span class="quotelev1">&gt; (unless valgrind tells me otherwise...)
</span><br>
<span class="quotelev1">&gt; But the 5% of code which the end user (and more importantly
</span><br>
<span class="quotelev1">&gt; down-stream build systems) have to see is likely to be
</span><br>
<span class="quotelev1">&gt; gone over with a fine-toothed comb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
&quot;Failure has a thousand explanations. Success doesn't need one&quot; -- Sir Alec Guiness
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0069.php">Brian Barrett: "Re: [O-MPI users] Wrapper names [was: shell interaction]"</a>
<li><strong>Previous message:</strong> <a href="0067.php">Tim Mattox: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0066.php">Benjamin Allan: "Re: [O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0070.php">Benjamin Allan: "[O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0070.php">Benjamin Allan: "[O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0076.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
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
