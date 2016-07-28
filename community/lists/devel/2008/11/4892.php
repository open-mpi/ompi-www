<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 17:18:24 2008" -->
<!-- isoreceived="20081113221824" -->
<!-- sent="Thu, 13 Nov 2008 14:21:34 -0800" -->
<!-- isosent="20081113222134" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="491CA86E.2080102_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A19CEFFE-C532-4B2E-999E-0815F579340C_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM backing file size<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-13 17:21:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4891.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<li><strong>In reply to:</strong> <a href="4882.php">Ralph Castain: "[OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; As has frequently been commented upon at one time or another, the  
</span><br>
<span class="quotelev1">&gt; shared memory backing file can be quite huge. There used to be a 
</span><br>
<span class="quotelev1">&gt; param  for controlling this size, but I can't find it in 1.3 - or at 
</span><br>
<span class="quotelev1">&gt; least,  the name or method for controlling file size has morphed into  
</span><br>
<span class="quotelev1">&gt; something I don't recognize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone more familiar with that subsystem point me to one or more  
</span><br>
<span class="quotelev1">&gt; params that will allow us to control the size of that file? It is  
</span><br>
<span class="quotelev1">&gt; swamping our systems and causing OMPI to segfault.
</span><br>
<p>Sounds like you've already gotten your answers, but I'll add my $0.02 
<br>
anyhow.
<br>
<p>The file size is the number of local processes (call it n) times 
<br>
mpool_sm_per_peer_size (default 32M), but with a minimum of 
<br>
mpool_sm_min_size (default 128M) and a maximum of mpool_sm_max_size 
<br>
(default 2G?  256M?).  So, you can tweak those parameters to control 
<br>
file size.
<br>
<p>Another issue is possibly how small a backing file you can get away 
<br>
with.  That is, just forcing the file to be smaller may not be enough 
<br>
since your job may no longer run.  The backing file seems to be used 
<br>
mainly by:
<br>
<p>*) eager-fragment free lists:  We start with enough eager fragments so 
<br>
that we could have two per connection.  So, you could bump the sm eager 
<br>
size down if you need to shoehorn a job into a very small backing file.
<br>
<p>*) large-fragment free lists:  We start with 8*n large fragments.  If 
<br>
this term plagues you, you can bump the sm chunk size down or reduce the 
<br>
value of 8 (using btl_sm_free_list_num, I think).
<br>
<p>*) FIFOs:  The code tries to align a number of things on pagesize 
<br>
boundaries, so you end up with about 3*n*n*pagesize overhead here.  If 
<br>
this term is causing you problems, you're stuck (unless you modify OMPI).
<br>
<p>I'm interested in this subject!  :^)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4891.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<li><strong>In reply to:</strong> <a href="4882.php">Ralph Castain: "[OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
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
