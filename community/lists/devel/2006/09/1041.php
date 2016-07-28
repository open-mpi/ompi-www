<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 12:42:39 2006" -->
<!-- isoreceived="20060907164239" -->
<!-- sent="Thu, 7 Sep 2006 12:42:43 -0400" -->
<!-- isosent="20060907164243" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="2E2C6A0B-1985-4B8A-B885-D1DA29FAE9D7_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C125A367.449F%rhc_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 12:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1042.php">Renato Golin: "Re: [OMPI devel] [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1040.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1040.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1043.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1043.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1044.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1058.php">Sven Stork: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I still wonder why we need any configuration &quot;magic&quot;. We don't want  
<br>
to be the only one around supporting IPv4 OR IPv6. Supporting both of  
<br>
them simultaneously can be interesting, and it does not require huge  
<br>
changes. In fact, we have a problem only at the connection step,  
<br>
everything else will be identically.
<br>
<p>In fact, as we're talking about the TCP layer, we might want to  
<br>
finish the discussion we had a while ago, about merging the OOB and  
<br>
the BTL in one component. They do have very similar functions, and  
<br>
right now we have to maintain 2 components. I think it's more than  
<br>
time to do the merge, and move the resulting component or whatever  
<br>
down in the OPAL layer.
<br>
<p>I even volunteer for that. Next week I will be away, so I will come  
<br>
back with a design for the phone conference on ... well beginning of  
<br>
october.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Sep 7, 2006, at 12:22 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Jeff and I talked about this for awhile this morning, and we both  
</span><br>
<span class="quotelev1">&gt; agree
</span><br>
<span class="quotelev1">&gt; (yes, I did change my mind after we discussed all the  
</span><br>
<span class="quotelev1">&gt; ramifications). It
</span><br>
<span class="quotelev1">&gt; appears that we should be able to consolidate the code into a single
</span><br>
<span class="quotelev1">&gt; component with the right configuration system &quot;magic&quot; - and that would
</span><br>
<span class="quotelev1">&gt; definitely be preferable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My primary concern originally was with the lack of knowledge and
</span><br>
<span class="quotelev1">&gt; documentation on the configuration system. I know that I don't know  
</span><br>
<span class="quotelev1">&gt; enough
</span><br>
<span class="quotelev1">&gt; about that system to make everything work in a single component. The
</span><br>
<span class="quotelev1">&gt; component method would have allowed you to remain ignorant of that  
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; However, with Jeff's willingness to help in that regard, the  
</span><br>
<span class="quotelev1">&gt; approach he
</span><br>
<span class="quotelev1">&gt; recommends would be easier for everyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that doesn't cause too much of a problem.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/7/06 9:46 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/1/06 12:21 PM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Sep 01, 2006 at 07:01:25AM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do you agree to go on with two oob components, tcp and tcp6?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, I think that's the right approach
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's a deal. ;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I would disagree here (sorry for jumping in late! :-( ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given the amount of code duplication, it seems like a big shame to  
</span><br>
<span class="quotelev2">&gt;&gt; make a
</span><br>
<span class="quotelev2">&gt;&gt; separate component that is almost identical.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can we just have one component that handles both ivp4 and ivp6?   
</span><br>
<span class="quotelev2">&gt;&gt; Appropriate
</span><br>
<span class="quotelev2">&gt;&gt; #if's can be added (I'm willing to help with the configure.m4 mojo  
</span><br>
<span class="quotelev2">&gt;&gt; -- the
</span><br>
<span class="quotelev2">&gt;&gt; stuff to tell OMPI whether ipv4 and/or ipv6 stuff can be found and  
</span><br>
<span class="quotelev2">&gt;&gt; to set
</span><br>
<span class="quotelev2">&gt;&gt; the #define's appropriately).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More specifically -- I can help with component / configure / build  
</span><br>
<span class="quotelev2">&gt;&gt; system
</span><br>
<span class="quotelev2">&gt;&gt; issues.  I'll defer on the whole how-to-wire-them-up issue for the  
</span><br>
<span class="quotelev2">&gt;&gt; moment
</span><br>
<span class="quotelev2">&gt;&gt; (I've got some other fires burning that must be tended to :-\ ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My $0.02: OOB is the first target to get working -- once you can  
</span><br>
<span class="quotelev2">&gt;&gt; orterun
</span><br>
<span class="quotelev2">&gt;&gt; non-MPI apps properly across ipv6 and/or ipv4 nodes, then move on  
</span><br>
<span class="quotelev2">&gt;&gt; to the MPI
</span><br>
<span class="quotelev2">&gt;&gt; layer and take the same approach there (e.g., one TCP btl with  
</span><br>
<span class="quotelev2">&gt;&gt; configure.m4
</span><br>
<span class="quotelev2">&gt;&gt; mojo, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1042.php">Renato Golin: "Re: [OMPI devel] [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1040.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1040.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1043.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1043.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1044.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1058.php">Sven Stork: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
