<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  4 12:48:01 2007" -->
<!-- isoreceived="20070904164801" -->
<!-- sent="Tue, 4 Sep 2007 12:47:29 -0400" -->
<!-- isosent="20070904164729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params" -->
<!-- id="8485B604-C734-474C-A9E9-2F927E02BD10_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070904145733.GQ12598_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-04 12:47:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0393.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
<li><strong>Previous message:</strong> <a href="0391.php">Ethan Mallove: "[MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>In reply to:</strong> <a href="0390.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0393.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
<li><strong>Reply:</strong> <a href="0393.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 4, 2007, at 10:57 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; So if I have the following line in my [Test build: intel]
</span><br>
<span class="quotelev1">&gt; section, MTT will now build and run the Intel tests *twice*?
</span><br>
<span class="quotelev1">&gt; Once with compiler-A and once with compiler-B?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   setenv = &amp;enumerate(&quot;/path/to/compiler-A&quot;, &quot;/path/to/compiler-B&quot;)
</span><br>
<p>setenv is a bad example -- we can already take multiple values for  
<br>
that and we do *not* create multiple runs for it.  For example:
<br>
<p>setenv = FOO value1
<br>
setenv = BAR value2
<br>
<p>The mtt client is smart enough just to do 2 setenv's in a single  
<br>
instance.
<br>
<p>I think that you can have some places that don't make sense to have  
<br>
multiple values, and perhaps we should put in safeguards to ensure  
<br>
that the INI file doesn't mistakenly do that.  For example:
<br>
<p>module = &amp;enumerate(foo, bar)
<br>
<p>That would be bad.  :-)
<br>
<p>But this issue has always been around -- it's just that you can now do:
<br>
<p>module = @foo@
<br>
foo = &amp;enumerate(foo, bar)
<br>
<p><p><span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep/04/2007 10:03:09AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think we'll get it for everything because of the new @foo@ syntax.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think you'll want to use that effect everywhere, but it's now
</span><br>
<span class="quotelev2">&gt;&gt; *possible* to do so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 4, 2007, at 9:57 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So we will get a multiplicative effect on the following INI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameters?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * setenv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * unsetenv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * env_module
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any other parameters?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Aug/31/2007 10:18:30PM, MTT wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #245: Support multiplicative effect for other INI params
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +-------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Reporter:  emallove     |       Owner:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Type:  enhancement  |      Status:  closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Priority:  major        |   Milestone:  v3.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Component:  Client side  |     Version:  trunk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Resolution:  fixed        |    Keywords:  multiplicative exec INI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +-------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Changes (by jsquyres):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   * status:  new =&gt; closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   * resolution:  =&gt; fixed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Comment:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  This is now done on the jms-new-parser branch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/mtt/ticket/">https://svn.open-mpi.org/trac/mtt/ticket/</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 245#comment:2&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MTT &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Issue tracking for the MPI Testing Tool.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0393.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
<li><strong>Previous message:</strong> <a href="0391.php">Ethan Mallove: "[MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>In reply to:</strong> <a href="0390.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0393.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
<li><strong>Reply:</strong> <a href="0393.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
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
