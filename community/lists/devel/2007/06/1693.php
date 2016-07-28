<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 13:48:41 2007" -->
<!-- isoreceived="20070613174841" -->
<!-- sent="Wed, 13 Jun 2007 20:48:36 +0300" -->
<!-- isosent="20070613174836" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041" -->
<!-- id="20070613174836.GE6519_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B9878473-E98C-408B-9569-09A0FD4A6E64_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 13:48:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1692.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1683.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1709.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1709.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 13, 2007 at 12:35:55PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 13, 2007, at 12:03 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think the &quot;hidden&quot; MCA parameters are a different issue; they were
</span><br>
<span class="quotelev3">&gt; &gt;&gt; created for a different purpose (users are not supposed to see/set
</span><br>
<span class="quotelev3">&gt; &gt;&gt; them).  These variable parameters would be intended to be used by the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users, but they would have no way of finding out a) that they exist,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and b) what they are.  That's why I think that the MCA parameters may
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not be the right mechanism for this kind of information.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I see 2 possible solutions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. we update our documentation in such a way that it will clearly  
</span><br>
<span class="quotelev2">&gt; &gt; describe
</span><br>
<span class="quotelev2">&gt; &gt; these variable MCA parameters for each BTL that support them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. We create fake MCA parameters that will never be used, but they  
</span><br>
<span class="quotelev2">&gt; &gt; will
</span><br>
<span class="quotelev2">&gt; &gt; show up in the ompi_info output so the user will know they exist.  
</span><br>
<span class="quotelev2">&gt; &gt; For TCP
</span><br>
<span class="quotelev2">&gt; &gt; they can be btl_tcp_latency_* and btl_tcp_bandwidth_* ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Use a file to convey this information, because it's better suited  
</span><br>
<span class="quotelev1">&gt; to what we're trying to do (vs. MCA parameters).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seriously, why is a file a bad thing?  The file can list interfaces  
</span><br>
<span class="quotelev1">&gt; by hostname.  For example, if you have a heterogeneous setup, what's  
</span><br>
<span class="quotelev1">&gt; to say that having btl_tcp_bandwidth_eth0 is not the same across all  
</span><br>
<span class="quotelev1">&gt; your hosts?  That is -- the MCA parameters you're providing are not  
</span><br>
<span class="quotelev1">&gt; sufficient for a true heterogeneous environment, anyway.
</span><br>
I don't feel strongly one way or the other. The command line approach
<br>
was much easier to implement. Is it possible to have one parser for all
<br>
BTLs or each one will have to implement different one?a
<br>
<p>BTW ompi_info will not parse this file too, so it will not be able to
<br>
present correct bandwidth/latency value just like command line solution.
<br>
For heterogeneous config file is the only option of cause.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's an example file format off the top of my head:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl-tcp-if.txt:
</span><br>
<span class="quotelev1">&gt; host1 eth0=latency,bw eth1=latency,bw
</span><br>
<span class="quotelev1">&gt; host2 eth0=latency,bw eth1=latency,bw
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or perhaps you might like the INI-style format:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl-tcp-if.ini:
</span><br>
<span class="quotelev1">&gt; [host1]
</span><br>
<span class="quotelev1">&gt; latency_eth0 = x1
</span><br>
<span class="quotelev1">&gt; bandwidth_eth0 = y1
</span><br>
<span class="quotelev1">&gt; latency_eth1 = x2
</span><br>
<span class="quotelev1">&gt; bandwidth_eth1 = y2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...or pick any other format/variation on the above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In short: the data you're trying to provide is really (at least) a 2D  
</span><br>
<span class="quotelev1">&gt; data set (hosts * interfaces).  It's just not suitable for MCA  
</span><br>
<span class="quotelev1">&gt; parameters.
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1692.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1683.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1709.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1709.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
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
