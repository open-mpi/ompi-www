<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 13:37:17 2007" -->
<!-- isoreceived="20070321173717" -->
<!-- sent="Wed, 21 Mar 2007 13:37:12 -0400" -->
<!-- isosent="20070321173712" -->
<!-- name="Donald Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA parameter settings" -->
<!-- id="46016D48.7010309_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="99A75949-64B5-4EEA-96AE-0B474A4BCED5_at_cisco.com" -->
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
<strong>From:</strong> Donald Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-21 13:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1373.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Previous message:</strong> <a href="1371.php">Jeff Squyres: "Re: [OMPI devel] MCA parameter settings"</a>
<li><strong>In reply to:</strong> <a href="1371.php">Jeff Squyres: "Re: [OMPI devel] MCA parameter settings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff.  Mostly just checking i was not missing something.
<br>
<p>I am doing some checking with local state for the moment. Will put #1 in 
<br>
the list of &quot;like to haves&quot; for the time being.
<br>
<p>-DON
<br>
<p>Jeff Squyres wrote On 03/21/07 13:10,:
<br>
<p><span class="quotelev1">&gt; On Mar 21, 2007, at 10:24 AM, Donald Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Case: A btl parameter is given a default setting and at some later  
</span><br>
<span class="quotelev2">&gt;&gt; point is potentially adjusted depending on the number of peers.   Now 
</span><br>
<span class="quotelev2">&gt;&gt; if the MPI user sets this same parameter I don't won't to  overright 
</span><br>
<span class="quotelev2">&gt;&gt; what they have set, or at least I would like to warn them  before 
</span><br>
<span class="quotelev2">&gt;&gt; doing so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gotcha.  Right now, there's no way to check this (i.e., what &quot;level&quot;  
</span><br>
<span class="quotelev1">&gt; an MCA param was set from).  I see two options for going forward:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Add an API call to check what level a given MCA param is currently  
</span><br>
<span class="quotelev1">&gt; resolved from (probably return some kind of enum?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Don't use the MCA param API but rather keep your own state (e.g.,  
</span><br>
<span class="quotelev1">&gt; a global with the default, another with the adjusted value derived  
</span><br>
<span class="quotelev1">&gt; from the number of peers, etc.) and do your own comparisons to see if  
</span><br>
<span class="quotelev1">&gt; the value was changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #2 is workable today, but obviously more work for you.  #1 is a  
</span><br>
<span class="quotelev1">&gt; better long-term solution.  It wouldn't be too much work to do, but I  
</span><br>
<span class="quotelev1">&gt; unfortunately do not have the cycles to do it at the moment.  I'd be  
</span><br>
<span class="quotelev1">&gt; happy to point you in the right direction, if you want...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1373.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Previous message:</strong> <a href="1371.php">Jeff Squyres: "Re: [OMPI devel] MCA parameter settings"</a>
<li><strong>In reply to:</strong> <a href="1371.php">Jeff Squyres: "Re: [OMPI devel] MCA parameter settings"</a>
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
