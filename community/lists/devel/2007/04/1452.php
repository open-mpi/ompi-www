<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 20:28:19 2007" -->
<!-- isoreceived="20070420002819" -->
<!-- sent="Thu, 19 Apr 2007 20:28:08 -0400" -->
<!-- isosent="20070420002808" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SOS... help needed :(" -->
<!-- id="3AF89134-9D56-47F4-9149-F4E022883FC8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4340.69.180.16.130.1177031894.squirrel_at_webmail.cc.gatech.edu" -->
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
<strong>Date:</strong> 2007-04-19 20:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1453.php">Jeff Squyres: "Re: [OMPI devel] Need help for semaphore in BML"</a>
<li><strong>Previous message:</strong> <a href="1451.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1451.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are both the IB HCA and the ethernet interfaces on the same physical  
<br>
bus?
<br>
<p>If they're not, the need for multiplexing them is diminished (but, of  
<br>
course, it depends on what you're trying to do -- if everything is  
<br>
using huge memory transfers, then your bottleneck will be RAM, not  
<br>
the bus that the NICs reside on).
<br>
<p>That being said, something we have not explored at all is the idea of  
<br>
multiplexing at the MPI layer.  Perhaps something like &quot;this is a low  
<br>
priority communicator; I want you to only use the 'tcp' BTL on it&quot;  
<br>
and &quot;this is a high priority communicator; I want you to only use the  
<br>
'openib' BTL on it&quot;.
<br>
<p>I haven't thought at all about whether that is possible.  It would  
<br>
probably take some mucking around in both the bml and the ob1 pml.   
<br>
Hmm.  It may or may not be worth it, but I raise the possibility...
<br>
<p><p>On Apr 19, 2007, at 9:18 PM, pooja_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of our clusters uses Gigabit Ethernet and Infiniband.
</span><br>
<span class="quotelev1">&gt; So we are trying to multiplex them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and Regards
</span><br>
<span class="quotelev1">&gt; Pooja
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 19, 2007 at 06:58:37PM -0400, pooja_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am Pooja working with chaitali on this project.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The idea behind this is while running a parallelized code ,if a huge
</span><br>
<span class="quotelev3">&gt;&gt;&gt; chunks of serial computation is encountered at that time underlying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network infrastructure can be used for some other data transfer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This increases the network utilization.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But this (non Mpi) data transfer should not keep Mpi calls blocking.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So we need to give them priorities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also we are trying to predict a behavior of the code (like if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more MPi calls coming with short interval or if they are coming  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after
</span><br>
<span class="quotelev3">&gt;&gt;&gt; large interval ) based on previous calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a result we can make this mechanism more efficient.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, so you have a Cluster with Infiniband a while the network  
</span><br>
<span class="quotelev2">&gt;&gt; traffic is
</span><br>
<span class="quotelev2">&gt;&gt; low you want to utilize the Infiniband network for other data  
</span><br>
<span class="quotelev2">&gt;&gt; transfers
</span><br>
<span class="quotelev2">&gt;&gt; with a lower priority?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does this have to do with TCP or are you using TCP over  
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Christian Leber
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://rettetdieti.vde-uni-mannheim.de/">http://rettetdieti.vde-uni-mannheim.de/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1453.php">Jeff Squyres: "Re: [OMPI devel] Need help for semaphore in BML"</a>
<li><strong>Previous message:</strong> <a href="1451.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1451.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
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
