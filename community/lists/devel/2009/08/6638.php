<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 16 20:56:54 2009" -->
<!-- isoreceived="20090817005654" -->
<!-- sent="Sun, 16 Aug 2009 20:56:46 -0400" -->
<!-- isosent="20090817005646" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="19494DC6-851D-4170-A4DA-DDEA3AABA61B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1954476207.1418451250469762900.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-16 20:56:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6639.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6637.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6637.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tend to agree with Chris. Changing the behavior of the 1.3 in the  
<br>
middle of the stable release cycle, will be very confusing for our  
<br>
users. Moreover, as Ralph pointed out, everything in Open MPI is  
<br>
configurable so if we advertise this feature in the Changelog, the  
<br>
institutions where the nodes are not shared can easily amend their  
<br>
configuration files to take advantage of it. In particular, for Sun,  
<br>
if we push this feature in the 1.3.4 release, they can ship their  
<br>
version (derived from the 1.3.4) with the MCA parameter set to bind-to- 
<br>
whatever.
<br>
<p>We can bring this topic in the spotlight for the next cycle (1.4/1.5).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 16, 2009, at 20:42 , Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Chris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hiya Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There would be a &quot;-do-not-bind&quot; option that will prevent us from
</span><br>
<span class="quotelev2">&gt;&gt; binding processes to anything which should cover that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gotcha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My point was only that we would be changing the out-of-the-box
</span><br>
<span class="quotelev2">&gt;&gt; behavior to the opposite of today's, so all those such as yourself
</span><br>
<span class="quotelev2">&gt;&gt; would now have to add the -do-not-bind MCA param to your default MCA
</span><br>
<span class="quotelev2">&gt;&gt; param file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doable - but it -is- a significant change in our out-of-the-box
</span><br>
<span class="quotelev2">&gt;&gt; behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is too big a change in the default behaviour
</span><br>
<span class="quotelev1">&gt; for a stable release, it'll cause a lot of people pain for
</span><br>
<span class="quotelev1">&gt; no readily apparent reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also believe that if those sites with multiple MPI jobs
</span><br>
<span class="quotelev1">&gt; on nodes are indeed in the majority then it makes more sense
</span><br>
<span class="quotelev1">&gt; to keep the default behaviour and have those who need this
</span><br>
<span class="quotelev1">&gt; functionality enable it on their installs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev1">&gt; The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt; P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev1">&gt; VPAC is a not-for-profit Registered Research Agency
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6639.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6637.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6637.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
