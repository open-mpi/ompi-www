<?
$subject_val = "Re: [OMPI devel] FreeBSD timer_base_open error?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 20:16:27 2008" -->
<!-- isoreceived="20080326001627" -->
<!-- sent="Tue, 25 Mar 2008 20:16:22 -0400" -->
<!-- isosent="20080326001622" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD timer_base_open error?" -->
<!-- id="3874CEB6-8214-4796-BEC8-1EA181CBA9A6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b89c3c270803222154w52112a7bgc10f819a475e9bde_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] FreeBSD timer_base_open error?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 20:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3527.php">Brian Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Previous message:</strong> <a href="3525.php">Jeff Squyres: "Re: [OMPI devel] Proc modex change"</a>
<li><strong>In reply to:</strong> <a href="3499.php">Brad Penoff: "[OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3527.php">Brian Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Reply:</strong> <a href="3527.php">Brian Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;linux&quot; is the name of the component.  It looks like opal/mca/timer/ 
<br>
linux/timer_linux_component.c is doing some checks during component  
<br>
open() and returning an error if it can't be used (e.g,. if it's not  
<br>
on linux).
<br>
<p>The timer components are a little different than normal MCA  
<br>
frameworks; they *must* be compiled in libopen-pal statically, and  
<br>
there will only be one of them built.
<br>
<p>In this case, I'm guessing that linux was built simply because nothing  
<br>
else was selected to be built, but then its component_open() function  
<br>
failed because it didn't find /proc/cpuinfo.
<br>
<p>Do you have the inclination to write a quickie BSD-capable timer  
<br>
component?  There's only 3 functions to write:
<br>
<p>- get the cycle count
<br>
- get the current usec time
<br>
- get the CPU frequency
<br>
<p><p><p>On Mar 23, 2008, at 12:54 AM, Brad Penoff wrote:
<br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In an MTT run just now, I'm noticing these funny output messages in
</span><br>
<span class="quotelev1">&gt; the middle of an early phase:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;snip snip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI install [mpi install: gcc warnings]
</span><br>
<span class="quotelev1">&gt;   Installing MPI: [ompi-nightly-trunk] / [1.3a1r17921] / [gcc  
</span><br>
<span class="quotelev1">&gt; warnings]...
</span><br>
<span class="quotelev1">&gt; [pc23.netbed.icics.ubc.ca:59263] mca: base: components_open: component
</span><br>
<span class="quotelev1">&gt; timer / linux open function failed
</span><br>
<span class="quotelev1">&gt; [pc23.netbed.icics.ubc.ca:59264] mca: base: components_open: component
</span><br>
<span class="quotelev1">&gt; timer / linux open function failed
</span><br>
<span class="quotelev1">&gt; [pc23.netbed.icics.ubc.ca:59265] mca: base: components_open: component
</span><br>
<span class="quotelev1">&gt; timer / linux open function failed
</span><br>
<span class="quotelev1">&gt; [pc23.netbed.icics.ubc.ca:59266] mca: base: components_open: component
</span><br>
<span class="quotelev1">&gt; timer / linux open function failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;snip snip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone ever seen these?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nonetheless, my tests proceed and run after this.  This is on a
</span><br>
<span class="quotelev1">&gt; FreeBSD 6.2 system, so having &quot;linux&quot; in the message seems
</span><br>
<span class="quotelev1">&gt; interesting...  any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; brad
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
<li><strong>Next message:</strong> <a href="3527.php">Brian Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Previous message:</strong> <a href="3525.php">Jeff Squyres: "Re: [OMPI devel] Proc modex change"</a>
<li><strong>In reply to:</strong> <a href="3499.php">Brad Penoff: "[OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3527.php">Brian Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Reply:</strong> <a href="3527.php">Brian Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
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
