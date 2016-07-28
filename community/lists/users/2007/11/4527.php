<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 16:09:18 2007" -->
<!-- isoreceived="20071127210918" -->
<!-- sent="Tue, 27 Nov 2007 16:08:17 -0500" -->
<!-- isosent="20071127210817" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="F01DF019-9347-444E-8B50-89C46DC51B05_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="474C84C3.1030005_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-11-27 16:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4528.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4526.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4526.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4528.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4528.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What would be a place to look?  Should this just be default then for
</span><br>
<span class="quotelev2">&gt;&gt; OMPI?  ompi_info shows the default as 10 seconds?  Is that right
</span><br>
<span class="quotelev2">&gt;&gt; 'seconds' ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other IB guys can probably answer better than I can -- I'm not an
</span><br>
<span class="quotelev1">&gt; expert in this part of IB (or really any part I guess :).  Not sure  
</span><br>
<span class="quotelev1">&gt; why
</span><br>
<span class="quotelev1">&gt; a larger value isn't the default.  No, its not seconds -- check the
</span><br>
<span class="quotelev1">&gt; description of the MCA parameter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<p>You sure?
<br>
ompi_info --param btl openib
<br>
<p>MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InfiniBand transmit timeout, in seconds 
<br>
(must be &gt;= 1)
<br>
<p><span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4528.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4526.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4526.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4528.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4528.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
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
