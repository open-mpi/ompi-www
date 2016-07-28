<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 12:36:11 2007" -->
<!-- isoreceived="20070613163611" -->
<!-- sent="Wed, 13 Jun 2007 12:35:55 -0400" -->
<!-- isosent="20070613163555" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041" -->
<!-- id="B9878473-E98C-408B-9569-09A0FD4A6E64_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.WNT.4.64.0706131159010.2008_at_voyager" -->
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
<strong>Date:</strong> 2007-06-13 12:35:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1684.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1682.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1681.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1693.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1693.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2007, at 12:03 PM, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I think the &quot;hidden&quot; MCA parameters are a different issue; they were
</span><br>
<span class="quotelev2">&gt;&gt; created for a different purpose (users are not supposed to see/set
</span><br>
<span class="quotelev2">&gt;&gt; them).  These variable parameters would be intended to be used by the
</span><br>
<span class="quotelev2">&gt;&gt; users, but they would have no way of finding out a) that they exist,
</span><br>
<span class="quotelev2">&gt;&gt; and b) what they are.  That's why I think that the MCA parameters may
</span><br>
<span class="quotelev2">&gt;&gt; not be the right mechanism for this kind of information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see 2 possible solutions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. we update our documentation in such a way that it will clearly  
</span><br>
<span class="quotelev1">&gt; describe
</span><br>
<span class="quotelev1">&gt; these variable MCA parameters for each BTL that support them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. We create fake MCA parameters that will never be used, but they  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; show up in the ompi_info output so the user will know they exist.  
</span><br>
<span class="quotelev1">&gt; For TCP
</span><br>
<span class="quotelev1">&gt; they can be btl_tcp_latency_* and btl_tcp_bandwidth_* ...
</span><br>
<p>Or:
<br>
<p>3. Use a file to convey this information, because it's better suited  
<br>
to what we're trying to do (vs. MCA parameters).
<br>
<p>Seriously, why is a file a bad thing?  The file can list interfaces  
<br>
by hostname.  For example, if you have a heterogeneous setup, what's  
<br>
to say that having btl_tcp_bandwidth_eth0 is not the same across all  
<br>
your hosts?  That is -- the MCA parameters you're providing are not  
<br>
sufficient for a true heterogeneous environment, anyway.
<br>
<p>Here's an example file format off the top of my head:
<br>
<p>btl-tcp-if.txt:
<br>
host1 eth0=latency,bw eth1=latency,bw
<br>
host2 eth0=latency,bw eth1=latency,bw
<br>
<p>Or perhaps you might like the INI-style format:
<br>
<p>btl-tcp-if.ini:
<br>
[host1]
<br>
latency_eth0 = x1
<br>
bandwidth_eth0 = y1
<br>
latency_eth1 = x2
<br>
bandwidth_eth1 = y2
<br>
<p>...or pick any other format/variation on the above.
<br>
<p>In short: the data you're trying to provide is really (at least) a 2D  
<br>
data set (hosts * interfaces).  It's just not suitable for MCA  
<br>
parameters.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1684.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1682.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1681.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1693.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1693.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
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
