<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 16:19:38 2007" -->
<!-- isoreceived="20071127211938" -->
<!-- sent="Tue, 27 Nov 2007 13:19:33 -0800" -->
<!-- isosent="20071127211933" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="474C89E5.9090100_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F01DF019-9347-444E-8B50-89C46DC51B05_at_umich.edu" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-27 16:19:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4529.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4527.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4527.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4529.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4529.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4533.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock Palen wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; What would be a place to look?  Should this just be default then for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI?  ompi_info shows the default as 10 seconds?  Is that right
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'seconds' ?
</span><br>
<span class="quotelev2">&gt;&gt; The other IB guys can probably answer better than I can -- I'm not an
</span><br>
<span class="quotelev2">&gt;&gt; expert in this part of IB (or really any part I guess :).  Not sure  
</span><br>
<span class="quotelev2">&gt;&gt; why
</span><br>
<span class="quotelev2">&gt;&gt; a larger value isn't the default.  No, its not seconds -- check the
</span><br>
<span class="quotelev2">&gt;&gt; description of the MCA parameter:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You sure?
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl openib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            InfiniBand transmit timeout, in seconds 
</span><br>
<span class="quotelev1">&gt; (must be &gt;= 1)
</span><br>
<p>Yeah:
<br>
<p>MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InfiniBand transmit timeout, plugged into formula:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.096 microseconds * (2^btl_openib_ib_timeout)(must be
<br>
<span class="quotelev1">          &gt;= 0 and &lt;= 31)
</span><br>
<p>Reading earlier in the thread you said OMPI v1.2.0, I got this from a 
<br>
trunk checkout thats around 3 weeks old.  A quick check shows this 
<br>
description was changed between 1.2.0 and 1.2.1.  However the use of 
<br>
this parameter hasn't changed -- it's simply passed along to IB verbs 
<br>
when creating a queue pair (aka a connection).
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4529.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4527.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4527.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4529.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4529.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4533.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
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
