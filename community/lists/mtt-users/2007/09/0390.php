<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  4 10:57:39 2007" -->
<!-- isoreceived="20070904145739" -->
<!-- sent="Tue, 4 Sep 2007 10:57:34 -0400" -->
<!-- isosent="20070904145734" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params" -->
<!-- id="20070904145733.GQ12598_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="013AB39E-D5DE-478E-BFD0-92151391F09D_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-04 10:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0391.php">Ethan Mallove: "[MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Previous message:</strong> <a href="0389.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other INI params"</a>
<li><strong>In reply to:</strong> <a href="0389.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other INI params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0392.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params"</a>
<li><strong>Reply:</strong> <a href="0392.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So if I have the following line in my [Test build: intel]
<br>
section, MTT will now build and run the Intel tests *twice*?
<br>
Once with compiler-A and once with compiler-B?
<br>
<p>&nbsp;&nbsp;setenv = &amp;enumerate(&quot;/path/to/compiler-A&quot;, &quot;/path/to/compiler-B&quot;)
<br>
<p>-Ethan
<br>
<p><p>On Tue, Sep/04/2007 10:03:09AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think we'll get it for everything because of the new @foo@ syntax.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think you'll want to use that effect everywhere, but it's now  
</span><br>
<span class="quotelev1">&gt; *possible* to do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2007, at 9:57 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So we will get a multiplicative effect on the following INI
</span><br>
<span class="quotelev2">&gt; &gt; parameters?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   * setenv
</span><br>
<span class="quotelev2">&gt; &gt;   * unsetenv
</span><br>
<span class="quotelev2">&gt; &gt;   * env_module
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any other parameters?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Aug/31/2007 10:18:30PM, MTT wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #245: Support multiplicative effect for other INI params
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Reporter:  emallove     |       Owner:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Type:  enhancement  |      Status:  closed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Priority:  major        |   Milestone:  v3.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Component:  Client side  |     Version:  trunk
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Resolution:  fixed        |    Keywords:  multiplicative exec INI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Changes (by jsquyres):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   * status:  new =&gt; closed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   * resolution:  =&gt; fixed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Comment:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  This is now done on the jms-new-parser branch.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/mtt/ticket/245#comment:2">https://svn.open-mpi.org/trac/mtt/ticket/245#comment:2</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MTT &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Issue tracking for the MPI Testing Tool.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0391.php">Ethan Mallove: "[MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Previous message:</strong> <a href="0389.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other INI params"</a>
<li><strong>In reply to:</strong> <a href="0389.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other INI params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0392.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params"</a>
<li><strong>Reply:</strong> <a href="0392.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params"</a>
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
