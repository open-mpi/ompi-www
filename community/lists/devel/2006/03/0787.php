<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 10:15:07 2006" -->
<!-- isoreceived="20060331151507" -->
<!-- sent="Fri, 31 Mar 2006 17:15:51 +0200" -->
<!-- isosent="20060331151551" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331151551.GR16388_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF5B20DC_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 10:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0788.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0786.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0785.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0789.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0789.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 31, 2006 at 09:36:31AM -0500, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; I have no personal experience with IPv6, but one thought that strikes me
</span><br>
<span class="quotelev1">&gt; is that the components might be able to figure out what to do by looking
</span><br>
<span class="quotelev1">&gt; at/parsing either the hostnames or the results that come back from
</span><br>
<span class="quotelev1">&gt; resolving the hostname...?
</span><br>
<p>Yes. You can ask the resolver for v4, v6 or any of them.
<br>
The libc functions are standardized and handle both.
<br>
The socket family, too. You just have to specify whether
<br>
to use AF_INET or AF_INET6. That's all.
<br>
<p>Due to the new lookup functions, DNS lookups now return
<br>
a linked list of dynamically allocated memory containing
<br>
the results for probably multi homed hosts. The common way
<br>
is to iterate over this list, try every given address/information
<br>
and manually free the memory afterwards.
<br>
<p>The whole process in its naive implementation is straightforward.
<br>
<p>Are we getting trouble with listen()/accept()? If we use
<br>
v6-mapped-v4 (::ffff:a.b.c.d/96), we only have one socket
<br>
to bind to and to listen on. But if we create two separate
<br>
sockets, are they non-blocking to each other? So to say:
<br>
does OMPI already handle more than one listen socket?
<br>
<p>Would this be a problem in case of a btl/tcp6-component?
<br>
<p>(I really prefer the v6-mapped-v4 solution with a single
<br>
&nbsp;socket, thus eliminating this problem)
<br>
<p><p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Werbung f&#252;r einen Sch&#252;tzenverein:
&quot;Lernen Sie bei uns schie&#223;en und treffen Sie gute Freunde!&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0788.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0786.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0785.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0789.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0789.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
