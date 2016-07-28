<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 11:46:49 2006" -->
<!-- isoreceived="20060907154649" -->
<!-- sent="Thu, 07 Sep 2006 11:46:28 -0400" -->
<!-- isosent="20060907154628" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="C125B714.25C20%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060901162136.GO6454_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 11:46:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1040.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1038.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1025.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1040.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1040.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/1/06 12:21 PM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Sep 01, 2006 at 07:01:25AM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you agree to go on with two oob components, tcp and tcp6?
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I think that's the right approach
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a deal. ;)
</span><br>
<p>Actually, I would disagree here (sorry for jumping in late! :-( ).
<br>
<p>Given the amount of code duplication, it seems like a big shame to make a
<br>
separate component that is almost identical.
<br>
<p>Can we just have one component that handles both ivp4 and ivp6?  Appropriate
<br>
#if's can be added (I'm willing to help with the configure.m4 mojo -- the
<br>
stuff to tell OMPI whether ipv4 and/or ipv6 stuff can be found and to set
<br>
the #define's appropriately).
<br>
<p>More specifically -- I can help with component / configure / build system
<br>
issues.  I'll defer on the whole how-to-wire-them-up issue for the moment
<br>
(I've got some other fires burning that must be tended to :-\ ).
<br>
<p>My $0.02: OOB is the first target to get working -- once you can orterun
<br>
non-MPI apps properly across ipv6 and/or ipv4 nodes, then move on to the MPI
<br>
layer and take the same approach there (e.g., one TCP btl with configure.m4
<br>
mojo, etc.).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1040.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1038.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1025.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1040.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1040.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
