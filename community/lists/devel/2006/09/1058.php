<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 11 07:39:49 2006" -->
<!-- isoreceived="20060911113949" -->
<!-- sent="Mon, 11 Sep 2006 13:36:55 +0200" -->
<!-- isosent="20060911113655" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="200609111336.55781.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2E2C6A0B-1985-4B8A-B885-D1DA29FAE9D7_at_cs.utk.edu" -->
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
<strong>From:</strong> Sven Stork (<em>stork_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-11 07:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1059.php">Christian Siebert: "[OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>Previous message:</strong> <a href="1057.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 07 September 2006 18:42, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I still wonder why we need any configuration &quot;magic&quot;. We don't want  
</span><br>
<span class="quotelev1">&gt; to be the only one around supporting IPv4 OR IPv6. Supporting both of  
</span><br>
<span class="quotelev1">&gt; them simultaneously can be interesting, and it does not require huge  
</span><br>
<span class="quotelev1">&gt; changes. In fact, we have a problem only at the connection step,  
</span><br>
<span class="quotelev1">&gt; everything else will be identically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In fact, as we're talking about the TCP layer, we might want to  
</span><br>
<span class="quotelev1">&gt; finish the discussion we had a while ago, about merging the OOB and  
</span><br>
<span class="quotelev1">&gt; the BTL in one component. They do have very similar functions, and  
</span><br>
<span class="quotelev1">&gt; right now we have to maintain 2 components. I think it's more than  
</span><br>
<span class="quotelev1">&gt; time to do the merge, and move the resulting component or whatever  
</span><br>
<span class="quotelev1">&gt; down in the OPAL layer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I even volunteer for that. Next week I will be away, so I will come  
</span><br>
<span class="quotelev1">&gt; back with a design for the phone conference on ... well beginning of  
</span><br>
<span class="quotelev1">&gt; october.
</span><br>
<p>Sounds the most reasonable solution for me. At the moment the TCP BTL would 
<br>
have a problem in the case where a Open MPI jobs is spawned across multiple 
<br>
cells where at least 2 cells have the same private IP address range. In this 
<br>
scenario a process of one cell could think that a process from the other cell 
<br>
is reachable.
<br>
<p>That's not really an IPv6 specific problem but when we are thinking about 
<br>
moving the BTL down to the OPAL layer we should take care about that. I'm not 
<br>
sure if other BTLs have similar problems (e.g. 2 infiniband cells connect via 
<br>
TCP).
<br>
<p><p>Thanks,
<br>
&nbsp;Sven
<br>
<p><span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 7, 2006, at 12:22 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff and I talked about this for awhile this morning, and we both  
</span><br>
<span class="quotelev2">&gt; &gt; agree
</span><br>
<span class="quotelev2">&gt; &gt; (yes, I did change my mind after we discussed all the  
</span><br>
<span class="quotelev2">&gt; &gt; ramifications). It
</span><br>
<span class="quotelev2">&gt; &gt; appears that we should be able to consolidate the code into a single
</span><br>
<span class="quotelev2">&gt; &gt; component with the right configuration system &quot;magic&quot; - and that would
</span><br>
<span class="quotelev2">&gt; &gt; definitely be preferable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My primary concern originally was with the lack of knowledge and
</span><br>
<span class="quotelev2">&gt; &gt; documentation on the configuration system. I know that I don't know  
</span><br>
<span class="quotelev2">&gt; &gt; enough
</span><br>
<span class="quotelev2">&gt; &gt; about that system to make everything work in a single component. The
</span><br>
<span class="quotelev2">&gt; &gt; component method would have allowed you to remain ignorant of that  
</span><br>
<span class="quotelev2">&gt; &gt; system.
</span><br>
<span class="quotelev2">&gt; &gt; However, with Jeff's willingness to help in that regard, the  
</span><br>
<span class="quotelev2">&gt; &gt; approach he
</span><br>
<span class="quotelev2">&gt; &gt; recommends would be easier for everyone.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope that doesn't cause too much of a problem.
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 9/7/06 9:46 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 9/1/06 12:21 PM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Fri, Sep 01, 2006 at 07:01:25AM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Do you agree to go on with two oob components, tcp and tcp6?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Yes, I think that's the right approach
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It's a deal. ;)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Actually, I would disagree here (sorry for jumping in late! :-( ).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Given the amount of code duplication, it seems like a big shame to  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; separate component that is almost identical.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can we just have one component that handles both ivp4 and ivp6?   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Appropriate
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #if's can be added (I'm willing to help with the configure.m4 mojo  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; stuff to tell OMPI whether ipv4 and/or ipv6 stuff can be found and  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to set
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the #define's appropriately).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; More specifically -- I can help with component / configure / build  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; system
</span><br>
<span class="quotelev3">&gt; &gt;&gt; issues.  I'll defer on the whole how-to-wire-them-up issue for the  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; moment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (I've got some other fires burning that must be tended to :-\ ).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My $0.02: OOB is the first target to get working -- once you can  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orterun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; non-MPI apps properly across ipv6 and/or ipv4 nodes, then move on  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to the MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; layer and take the same approach there (e.g., one TCP btl with  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure.m4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mojo, etc.).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other  
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1059.php">Christian Siebert: "[OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>Previous message:</strong> <a href="1057.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
