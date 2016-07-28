<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 10:20:44 2006" -->
<!-- isoreceived="20060331152044" -->
<!-- sent="Fri, 31 Mar 2006 10:20:43 -0500" -->
<!-- isosent="20060331152043" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="3E939D0C-B403-474A-9EB5-3EF7CFFAC514_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060331151551.GR16388_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 10:20:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0790.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0788.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2006, at 10:15 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Mar 31, 2006 at 09:36:31AM -0500, Jeff Squyres (jsquyres)  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have no personal experience with IPv6, but one thought that  
</span><br>
<span class="quotelev2">&gt;&gt; strikes me
</span><br>
<span class="quotelev2">&gt;&gt; is that the components might be able to figure out what to do by  
</span><br>
<span class="quotelev2">&gt;&gt; looking
</span><br>
<span class="quotelev2">&gt;&gt; at/parsing either the hostnames or the results that come back from
</span><br>
<span class="quotelev2">&gt;&gt; resolving the hostname...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. You can ask the resolver for v4, v6 or any of them.
</span><br>
<span class="quotelev1">&gt; The libc functions are standardized and handle both.
</span><br>
<span class="quotelev1">&gt; The socket family, too. You just have to specify whether
</span><br>
<span class="quotelev1">&gt; to use AF_INET or AF_INET6. That's all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Due to the new lookup functions, DNS lookups now return
</span><br>
<span class="quotelev1">&gt; a linked list of dynamically allocated memory containing
</span><br>
<span class="quotelev1">&gt; the results for probably multi homed hosts. The common way
</span><br>
<span class="quotelev1">&gt; is to iterate over this list, try every given address/information
</span><br>
<span class="quotelev1">&gt; and manually free the memory afterwards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The whole process in its naive implementation is straightforward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are we getting trouble with listen()/accept()? If we use
</span><br>
<span class="quotelev1">&gt; v6-mapped-v4 (::ffff:a.b.c.d/96), we only have one socket
</span><br>
<span class="quotelev1">&gt; to bind to and to listen on. But if we create two separate
</span><br>
<span class="quotelev1">&gt; sockets, are they non-blocking to each other? So to say:
</span><br>
<span class="quotelev1">&gt; does OMPI already handle more than one listen socket?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would this be a problem in case of a btl/tcp6-component?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I really prefer the v6-mapped-v4 solution with a single
</span><br>
<span class="quotelev1">&gt;  socket, thus eliminating this problem)
</span><br>
<p>We use an event library and select() to determine when things are  
<br>
pending on sockets.  However, I have to say that I would prefer have  
<br>
one tcp btl / oob component and have it do the right things  
<br>
internally.  The space difference for storing an IPv6 vs IPv4 address  
<br>
isn't that huge and maintaining all the extra code will be a  
<br>
nightmare.  At least, that's been my experience with similar things  
<br>
in the past.  Just my $0.02, of course.
<br>
<p>The other question is what to do on platforms without IPv6 support.   
<br>
I'm pretty sure we're going to run into them, so it would be good to  
<br>
plan along those lines....
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0790.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0788.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
