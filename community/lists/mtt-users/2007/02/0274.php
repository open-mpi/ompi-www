<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 21 17:35:34 2007" -->
<!-- isoreceived="20070221223534" -->
<!-- sent="Wed, 21 Feb 2007 17:34:56 -0500" -->
<!-- isosent="20070221223456" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT proxy (for offline clusters)" -->
<!-- id="A199E1FA-F521-4F13-8C14-867C639F6C1B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070221215944.GF31640_at_sun.com" -->
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
<strong>Date:</strong> 2007-02-21 17:34:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0275.php">Jeff Squyres: "[MTT users] Running MTT in developers' SVN checkouts"</a>
<li><strong>Previous message:</strong> <a href="0273.php">Ethan Mallove: "[MTT users] MTT proxy (for offline clusters)"</a>
<li><strong>In reply to:</strong> <a href="0273.php">Ethan Mallove: "[MTT users] MTT proxy (for offline clusters)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to clarify: the default URL that it relays to is <a href="http://www.open">http://www.open</a>- 
<br>
mpi.org/mtt/submit/index.php (I think shortly to be changed to  
<br>
https?).  You can see all the command line options via &quot;mtt-relay -- 
<br>
help&quot;.
<br>
<p><p><p>On Feb 21, 2007, at 4:59 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have a cluster which can not access the Internet (and
</span><br>
<span class="quotelev1">&gt; thus can not submit results to www.open-mpi.org), there's a
</span><br>
<span class="quotelev1">&gt; solution now.  In mtt/trunk/client there's a simple web
</span><br>
<span class="quotelev1">&gt; proxy you can run like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ client/mtt-relay --port 6789 &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Set mttdatabase_url as below in your [Reporter: IU database]
</span><br>
<span class="quotelev1">&gt; section, and your results should get submitted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mttdatabase_url = host.where.mtt-relay.runs:6789
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0275.php">Jeff Squyres: "[MTT users] Running MTT in developers' SVN checkouts"</a>
<li><strong>Previous message:</strong> <a href="0273.php">Ethan Mallove: "[MTT users] MTT proxy (for offline clusters)"</a>
<li><strong>In reply to:</strong> <a href="0273.php">Ethan Mallove: "[MTT users] MTT proxy (for offline clusters)"</a>
<!-- nextthread="start" -->
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
