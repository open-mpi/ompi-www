<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  8 08:48:01 2006" -->
<!-- isoreceived="20060908124801" -->
<!-- sent="Fri, 08 Sep 2006 06:47:58 -0600" -->
<!-- isosent="20060908124758" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="C126C29E.44FB%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C126125A.25D76%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-09-08 08:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1057.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1055.php">Ralph Castain: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>In reply to:</strong> <a href="1053.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1057.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It occurred to me last night that this solves the homogeneous case, but
<br>
still leaves us with the problem of hetero systems. What we really need to
<br>
know is not only &quot;what do I support&quot;, but &quot;what does the recipient support&quot;.
<br>
<p>Then it hit me that we may already have the solution for that problem in the
<br>
OOB, though we don't use it currently. If you check the OOB code, you will
<br>
find that we store the OOB contact info on the registry during startup, and
<br>
in return we obtain ALL of the OOB contact info for our peers. In that code,
<br>
we allow for multiple contact points to be passed for each peer process -
<br>
including what protocol is to be used for each contact point.
<br>
<p>In other words, if we have an IPv6 socket, that information gets passed to
<br>
our peers (including the fact that it is an IPv6 address). Ditto if we have
<br>
an IPv4 socket. And we are covered even if we have both types.
<br>
<p>What is missing in the code is the selection of which contact point to use
<br>
to communicate a given message, and the decision logic that uses the &quot;right&quot;
<br>
addressing protocol as specified for that recipient (current code assumes
<br>
only one is given).
<br>
<p>So I think we can actually build a lot of the hetero support into the
<br>
existing OOB component. We just may need to add a little to take full
<br>
advantage of what is already there. For example, on a send, we may just need
<br>
to use the proper call that matches the specified protocol. The &quot;if&quot;
<br>
statement approach should be adequate for that level of separation.
<br>
<p>Ralph
<br>
<p><p><p>On 9/7/06 4:15 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 9/7/06 1:51 PM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I'm willing to help with the configure.m4 mojo -- the
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's good. Just check for struct sockaddr_in6 and add
</span><br>
<span class="quotelev2">&gt;&gt; -DIPV6 to the CFLAGS. This flag is currently needed by
</span><br>
<span class="quotelev2">&gt;&gt; opal/util/if.* and orte/mca/oob/tcp/*, so one might limit
</span><br>
<span class="quotelev2">&gt;&gt; it to the two corresponding makefiles.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We can also set/define IPV6 in something_config.h.
</span><br>
<span class="quotelev2">&gt;&gt; It'd also be a good idea to have a --disable-ipv6 configure flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Done.  See the attached patch (apply it, then re-run autogen.sh and
</span><br>
<span class="quotelev1">&gt; configure).  It does three things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Check if --disable-ipv6 was passed to configure.
</span><br>
<span class="quotelev1">&gt; 2. Check to see if struct sockaddr_in6 exists.
</span><br>
<span class="quotelev1">&gt; 3. Sets a macro OMPI_WANT_IPV6 to either 0 or 1 (i.e., it's always defined
</span><br>
<span class="quotelev1">&gt; and is therefore suitable for #if, not #ifdef):
</span><br>
<span class="quotelev1">&gt;    - Set to 1 if --disable-ipv6 was not passed to configure *AND* struct
</span><br>
<span class="quotelev1">&gt; sockaddr_in6 exists
</span><br>
<span class="quotelev1">&gt;    - Set to 0 otherwise
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So surround your code with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OMPI_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; ...ipv6 stuff...
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All you have to do to get this define is #include &quot;ompi_config.h&quot;, which all
</span><br>
<span class="quotelev1">&gt; of the files should be doing already, anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if this works for you.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1057.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1055.php">Ralph Castain: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>In reply to:</strong> <a href="1053.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1057.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
