<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 29 12:04:36 2007" -->
<!-- isoreceived="20070429160436" -->
<!-- sent="Sun, 29 Apr 2007 18:07:03 +0200" -->
<!-- isosent="20070429160703" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sockaddr* vs. sockaddr_storage*" -->
<!-- id="20070429160703.GF14385_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1F590198-4ADA-428E-B434-970BBC36C13E_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-04-29 12:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1466.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Previous message:</strong> <a href="1464.php">George Bosilca: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>In reply to:</strong> <a href="1464.php">George Bosilca: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1466.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="1466.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="1467.php">Tim Mattox: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1469.php">Jeff Squyres: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Apr 29, 2007 at 10:18:01AM -0400, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I have to ask you to remove r14549 quickly as it bring back the trunk  
</span><br>
<span class="quotelev1">&gt; to the stage it was before r14544 (only random support for multiple  
</span><br>
<p>I'll have a look how to accomplish both: IPv6 and a reverted r14549.
<br>
<p><span class="quotelev1">&gt; BTL). It's not that I don't care about IPv6, it's just that I care  
</span><br>
<span class="quotelev1">&gt; more about multi TCP BTL working in the way it is supposed to work.  
</span><br>
<p>There'd be less trouble if we all had automatic testing, so nobody
<br>
breaks stuff somebody else relies on.
<br>
<p>See, you have committed something that made my internal tests turn red:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://cluster.inf-ra.uni-jena.de:8010/">http://cluster.inf-ra.uni-jena.de:8010/</a>
<br>
<p>If I just had an URL indicating when *I* break something *you* rely on.
<br>
<p><p>BTW: How does multi TCP BTL works? I see num_links, but I wonder if
<br>
kernel channel bonding would achieve the same results...
<br>
<p><span class="quotelev1">&gt; PS: Please read the commit log for the r14544. It explain why I  
</span><br>
<span class="quotelev1">&gt; changed from sockaddr_storage* to sockaddr*.
</span><br>
<p>It doesn't:
<br>
<p><span class="quotelev1">   &gt; Second, the IPv6 RFC suggest to use sockaddr_storage as a holder
</span><br>
<span class="quotelev1">   &gt; for the IP information, but use a sockaddr* when we pass it to 
</span><br>
<span class="quotelev1">   &gt; functions.
</span><br>
<p>I don't understand the second part: &quot;but use a sockaddr*&quot;. Why?
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1466.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Previous message:</strong> <a href="1464.php">George Bosilca: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>In reply to:</strong> <a href="1464.php">George Bosilca: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1466.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="1466.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="1467.php">Tim Mattox: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1469.php">Jeff Squyres: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
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
