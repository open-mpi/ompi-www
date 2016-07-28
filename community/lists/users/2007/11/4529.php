<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 16:35:48 2007" -->
<!-- isoreceived="20071127213548" -->
<!-- sent="Tue, 27 Nov 2007 16:35:34 -0500" -->
<!-- isosent="20071127213534" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="D8F16456-F5B4-4A9D-9C28-40975141E502_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="474C89E5.9090100_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-11-27 16:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4530.php">Jeff Squyres: "[OMPI users] Fwd: [all-osl-users] OSL system outage"</a>
<li><strong>Previous message:</strong> <a href="4528.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4528.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok i will open a case with cisco,
<br>
<p><p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Nov 27, 2007, at 4:19 PM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What would be a place to look?  Should this just be default then  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI?  ompi_info shows the default as 10 seconds?  Is that right
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'seconds' ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The other IB guys can probably answer better than I can -- I'm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expert in this part of IB (or really any part I guess :).  Not sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; why
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a larger value isn't the default.  No, its not seconds -- check the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; description of the MCA parameter:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You sure?
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --param btl openib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            InfiniBand transmit timeout, in seconds
</span><br>
<span class="quotelev2">&gt;&gt; (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;           InfiniBand transmit timeout, plugged into formula:
</span><br>
<span class="quotelev1">&gt;           4.096 microseconds * (2^btl_openib_ib_timeout)(must be
</span><br>
<span class="quotelev2">&gt;&gt; = 0 and &lt;= 31)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reading earlier in the thread you said OMPI v1.2.0, I got this from a
</span><br>
<span class="quotelev1">&gt; trunk checkout thats around 3 weeks old.  A quick check shows this
</span><br>
<span class="quotelev1">&gt; description was changed between 1.2.0 and 1.2.1.  However the use of
</span><br>
<span class="quotelev1">&gt; this parameter hasn't changed -- it's simply passed along to IB verbs
</span><br>
<span class="quotelev1">&gt; when creating a queue pair (aka a connection).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
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
<li><strong>Next message:</strong> <a href="4530.php">Jeff Squyres: "[OMPI users] Fwd: [all-osl-users] OSL system outage"</a>
<li><strong>Previous message:</strong> <a href="4528.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4528.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
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
