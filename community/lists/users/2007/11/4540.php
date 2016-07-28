<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 11:29:18 2007" -->
<!-- isoreceived="20071128162918" -->
<!-- sent="Wed, 28 Nov 2007 11:28:10 -0500" -->
<!-- isosent="20071128162810" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="92810368-B804-4687-B753-CCDA048D9617_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="19045289-961D-48C0-91AE-C11FE8AAEBC9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 11:28:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4541.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4539.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>In reply to:</strong> <a href="4533.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4541.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4541.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roland thought that the default value of 10 might be a bit too low and  
<br>
that tuning it to be higher, particularly in apps that pound on a  
<br>
single port, would probably be acceptable.
<br>
<p>Tuning up to 20 is probably a bit overkill.
<br>
<p><p><p>On Nov 27, 2007, at 3:54 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; BTW, Andrew is correct about the unit for btl_openib_ib_timeout and  
</span><br>
<span class="quotelev1">&gt; that the value is simply passed down to the verbs library when  
</span><br>
<span class="quotelev1">&gt; making an IB connection.  Open MPI does nothing else with that  
</span><br>
<span class="quotelev1">&gt; value; it's an IBTA-defined value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The help message was wrong on the 1.2 branch for a while; I think  
</span><br>
<span class="quotelev1">&gt; it's been corrected in more recent versions of OMPI (i.e., &gt;1.2 -- I  
</span><br>
<span class="quotelev1">&gt; don't recall which version specifically).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2007, at 3:19 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What would be a place to look?  Should this just be default then  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI?  ompi_info shows the default as 10 seconds?  Is that right
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 'seconds' ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The other IB guys can probably answer better than I can -- I'm  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expert in this part of IB (or really any part I guess :).  Not sure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; why
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a larger value isn't the default.  No, its not seconds -- check the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; description of the MCA parameter:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You sure?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --param btl openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          InfiniBand transmit timeout, in seconds
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;         InfiniBand transmit timeout, plugged into formula:
</span><br>
<span class="quotelev2">&gt;&gt;         4.096 microseconds * (2^btl_openib_ib_timeout)(must be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 0 and &lt;= 31)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reading earlier in the thread you said OMPI v1.2.0, I got this from a
</span><br>
<span class="quotelev2">&gt;&gt; trunk checkout thats around 3 weeks old.  A quick check shows this
</span><br>
<span class="quotelev2">&gt;&gt; description was changed between 1.2.0 and 1.2.1.  However the use of
</span><br>
<span class="quotelev2">&gt;&gt; this parameter hasn't changed -- it's simply passed along to IB verbs
</span><br>
<span class="quotelev2">&gt;&gt; when creating a queue pair (aka a connection).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4541.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4539.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>In reply to:</strong> <a href="4533.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4541.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4541.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
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
