<?
$subject_val = "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 12:53:40 2009" -->
<!-- isoreceived="20090224175340" -->
<!-- sent="Tue, 24 Feb 2009 09:52:48 -0800" -->
<!-- isosent="20090224175248" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="49A433F0.7080607_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5E26C5D4-9378-42E3-9EC5-B196E046671D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 12:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5523.php">Jeff Squyres: "[OMPI devel] OMPI v1.3.1rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="5521.php">Brian W. Barrett: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<li><strong>In reply to:</strong> <a href="5520.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5508.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Here is another way to write the code without having to pay the  
</span><br>
<span class="quotelev1">&gt; expensive initialization of sendreq.
</span><br>
<span class="quotelev1">&gt;    first_time = 0;
</span><br>
<span class="quotelev1">&gt;    for ( btl = ... ) {
</span><br>
<span class="quotelev1">&gt;        if ( SUCCESS == sendi() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;        if( 0 == first_time++)  set_up_expensive_send_request(&amp;sendreq);
</span><br>
<span class="quotelev1">&gt;        if ( SUCCESS == send(&amp;sendreq) ) return SUCESS;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<p>Sure.  Well, things are complicated by the fact that 
<br>
&quot;set_up_expensive_send_request()&quot; is not a factored-out function.  So, 
<br>
restructuring code to look like this is a hassle.  But, let's first 
<br>
figure out what we *want* to do and then tackle what is merely a simple 
<br>
matter of implementation!  :^)
<br>
<p><span class="quotelev1">&gt; Anyway, the main problem is not in this code. The main problem is in  
</span><br>
<span class="quotelev1">&gt; the fact that now instead of sharing the load over all available BTL  
</span><br>
<span class="quotelev1">&gt; in a round-robin fashion, you overload the BTL(s) providing the sendi  
</span><br>
<span class="quotelev1">&gt; function with small (and eager) messages, and you completely ignore  
</span><br>
<span class="quotelev1">&gt; all the others until something goes wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I can see one interesting point in your approach. As the 
</span><br>
<span class="quotelev1">&gt; BTLs  are indexed in increasing order of their published latency in 
</span><br>
<span class="quotelev1">&gt; the  eager array, we might benefit from the smallest latency for 
</span><br>
<span class="quotelev1">&gt; several  small messages before taking the most expensive path. But 
</span><br>
<span class="quotelev1">&gt; this is not  something we should tackle allegedly, as it modify the 
</span><br>
<span class="quotelev1">&gt; most  performance related parts of the PML.
</span><br>
<p>I would like to understand this better.  Let's say you can reach your 
<br>
destination via two BTLs:  sm and TCP.  I don't know what the numbers 
<br>
are, but let's say TCP latency is &gt;10x slower than sm latency.  Are you 
<br>
saying we want to roundrobin between the two BTLs?  And to do otherwise 
<br>
would modify a lot of the PML?  Like what?
<br>
<p>I can imagine cases where one might have comparable BTLs and want to 
<br>
round robin them.  But, if one BTL is much faster than another, I would 
<br>
want to use the faster one.  Period.  Especially if it had a sendi function.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5523.php">Jeff Squyres: "[OMPI devel] OMPI v1.3.1rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="5521.php">Brian W. Barrett: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<li><strong>In reply to:</strong> <a href="5520.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5508.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
