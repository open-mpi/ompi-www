<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 18:28:42 2007" -->
<!-- isoreceived="20071128232842" -->
<!-- sent="Wed, 28 Nov 2007 18:27:39 -0500" -->
<!-- isosent="20071128232739" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="5ED999C8-449F-41A6-A7E5-D55F2CC292C0_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A5BB7DE3-309B-4FAB-BB6A-01FDA32CB974_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 18:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4549.php">Henry Adolfo Lambis Miranda: "[OMPI users] Run a process double"</a>
<li><strong>Previous message:</strong> <a href="4547.php">Bob Soliday: "[OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>In reply to:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4533.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff thanks for all the reply's,
<br>
<p>Hate to admit but at the moment we can't log onto the switch.
<br>
<p>But the ibcheckerrors command returns nothing out of bounds, and i  
<br>
think that command also checks the switch ports.
<br>
<p>Thanks, we will do some tests
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Nov 27, 2007, at 4:50 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for jumping in late; the holiday and other travel prevented me
</span><br>
<span class="quotelev1">&gt; from getting to all my mail recently...  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you checked the counters on the subnet manager to see if any
</span><br>
<span class="quotelev1">&gt; other errors are occurring?  It might be good to clear all the
</span><br>
<span class="quotelev1">&gt; counters, run the job, and see if the counters are increasing faster
</span><br>
<span class="quotelev1">&gt; than they should (i.e., any particular counter should advance very
</span><br>
<span class="quotelev1">&gt; very slowly -- perhaps 1 per day or so).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll ask around the kernel-level guys (i.e., Roland) to see what else
</span><br>
<span class="quotelev1">&gt; could cause this kind of error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2007, at 3:35 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok i will open a case with cisco,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 27, 2007, at 4:19 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What would be a place to look?  Should this just be default then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OMPI?  ompi_info shows the default as 10 seconds?  Is that right
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 'seconds' ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The other IB guys can probably answer better than I can -- I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; expert in this part of IB (or really any part I guess :).  Not  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; why
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a larger value isn't the default.  No, its not seconds -- check  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; description of the MCA parameter:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You sure?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info --param btl openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                           InfiniBand transmit timeout, in seconds
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (must be &gt;= 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yeah:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          InfiniBand transmit timeout, plugged into formula:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          4.096 microseconds * (2^btl_openib_ib_timeout)(must be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 0 and &lt;= 31)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reading earlier in the thread you said OMPI v1.2.0, I got this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk checkout thats around 3 weeks old.  A quick check shows this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; description was changed between 1.2.0 and 1.2.1.  However the use of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this parameter hasn't changed -- it's simply passed along to IB  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; verbs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when creating a queue pair (aka a connection).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4549.php">Henry Adolfo Lambis Miranda: "[OMPI users] Run a process double"</a>
<li><strong>Previous message:</strong> <a href="4547.php">Bob Soliday: "[OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>In reply to:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4533.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
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
