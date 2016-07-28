<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 12:22:35 2006" -->
<!-- isoreceived="20060907162235" -->
<!-- sent="Thu, 07 Sep 2006 10:22:31 -0600" -->
<!-- isosent="20060907162231" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="C125A367.449F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C125B714.25C20%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 12:22:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and I talked about this for awhile this morning, and we both agree
<br>
(yes, I did change my mind after we discussed all the ramifications). It
<br>
appears that we should be able to consolidate the code into a single
<br>
component with the right configuration system &quot;magic&quot; - and that would
<br>
definitely be preferable.
<br>
<p>My primary concern originally was with the lack of knowledge and
<br>
documentation on the configuration system. I know that I don't know enough
<br>
about that system to make everything work in a single component. The
<br>
component method would have allowed you to remain ignorant of that system.
<br>
However, with Jeff's willingness to help in that regard, the approach he
<br>
recommends would be easier for everyone.
<br>
<p>Hope that doesn't cause too much of a problem.
<br>
Ralph
<br>
<p><p>On 9/7/06 9:46 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 9/1/06 12:21 PM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Sep 01, 2006 at 07:01:25AM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you agree to go on with two oob components, tcp and tcp6?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I think that's the right approach
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's a deal. ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, I would disagree here (sorry for jumping in late! :-( ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given the amount of code duplication, it seems like a big shame to make a
</span><br>
<span class="quotelev1">&gt; separate component that is almost identical.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can we just have one component that handles both ivp4 and ivp6?  Appropriate
</span><br>
<span class="quotelev1">&gt; #if's can be added (I'm willing to help with the configure.m4 mojo -- the
</span><br>
<span class="quotelev1">&gt; stuff to tell OMPI whether ipv4 and/or ipv6 stuff can be found and to set
</span><br>
<span class="quotelev1">&gt; the #define's appropriately).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically -- I can help with component / configure / build system
</span><br>
<span class="quotelev1">&gt; issues.  I'll defer on the whole how-to-wire-them-up issue for the moment
</span><br>
<span class="quotelev1">&gt; (I've got some other fires burning that must be tended to :-\ ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My $0.02: OOB is the first target to get working -- once you can orterun
</span><br>
<span class="quotelev1">&gt; non-MPI apps properly across ipv6 and/or ipv4 nodes, then move on to the MPI
</span><br>
<span class="quotelev1">&gt; layer and take the same approach there (e.g., one TCP btl with configure.m4
</span><br>
<span class="quotelev1">&gt; mojo, etc.).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
