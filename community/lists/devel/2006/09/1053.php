<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 18:16:09 2006" -->
<!-- isoreceived="20060907221609" -->
<!-- sent="Thu, 07 Sep 2006 18:15:54 -0400" -->
<!-- isosent="20060907221554" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="C126125A.25D76%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060907175128.GQ6454_at_drcomp.erfurt.thur.de" -->
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
<strong>Date:</strong> 2006-09-07 18:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1054.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1052.php">Renato Golin: "Re: [OMPI devel] R: Re: MPI2 Client-Server routines BUG!!!"</a>
<li><strong>In reply to:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1056.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1056.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1057.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/7/06 1:51 PM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; (I'm willing to help with the configure.m4 mojo -- the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's good. Just check for struct sockaddr_in6 and add
</span><br>
<span class="quotelev1">&gt; -DIPV6 to the CFLAGS. This flag is currently needed by
</span><br>
<span class="quotelev1">&gt; opal/util/if.* and orte/mca/oob/tcp/*, so one might limit
</span><br>
<span class="quotelev1">&gt; it to the two corresponding makefiles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can also set/define IPV6 in something_config.h.
</span><br>
<span class="quotelev1">&gt; It'd also be a good idea to have a --disable-ipv6 configure flag.
</span><br>
<p>Done.  See the attached patch (apply it, then re-run autogen.sh and
<br>
configure).  It does three things:
<br>
<p>1. Check if --disable-ipv6 was passed to configure.
<br>
2. Check to see if struct sockaddr_in6 exists.
<br>
3. Sets a macro OMPI_WANT_IPV6 to either 0 or 1 (i.e., it's always defined
<br>
and is therefore suitable for #if, not #ifdef):
<br>
&nbsp;&nbsp;&nbsp;- Set to 1 if --disable-ipv6 was not passed to configure *AND* struct
<br>
sockaddr_in6 exists
<br>
&nbsp;&nbsp;&nbsp;- Set to 0 otherwise
<br>
<p>So surround your code with:
<br>
<p>#if OMPI_WANT_IPV6
<br>
...ipv6 stuff...
<br>
#endif
<br>
<p>All you have to do to get this define is #include &quot;ompi_config.h&quot;, which all
<br>
of the files should be doing already, anyway.
<br>
<p>Let me know if this works for you.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1053/ipv6.patch">ipv6.patch</a>
</ul>
<!-- attachment="ipv6.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1054.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1052.php">Renato Golin: "Re: [OMPI devel] R: Re: MPI2 Client-Server routines BUG!!!"</a>
<li><strong>In reply to:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1056.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1056.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1057.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
