<?
$subject_val = "Re: [OMPI devel] FreeBSD timer_base_open error?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 22:31:48 2008" -->
<!-- isoreceived="20080326023148" -->
<!-- sent="Tue, 25 Mar 2008 20:31:39 -0600" -->
<!-- isosent="20080326023139" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD timer_base_open error?" -->
<!-- id="D5D23ACD-B9A5-4A00-88D3-F334093337DA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3874CEB6-8214-4796-BEC8-1EA181CBA9A6_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 22:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3528.php">George Bosilca: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Previous message:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>In reply to:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3528.php">George Bosilca: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Reply:</strong> <a href="3528.php">George Bosilca: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2008, at 6:16 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; &quot;linux&quot; is the name of the component.  It looks like opal/mca/timer/
</span><br>
<span class="quotelev1">&gt; linux/timer_linux_component.c is doing some checks during component
</span><br>
<span class="quotelev1">&gt; open() and returning an error if it can't be used (e.g,. if it's not
</span><br>
<span class="quotelev1">&gt; on linux).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The timer components are a little different than normal MCA
</span><br>
<span class="quotelev1">&gt; frameworks; they *must* be compiled in libopen-pal statically, and
</span><br>
<span class="quotelev1">&gt; there will only be one of them built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case, I'm guessing that linux was built simply because nothing
</span><br>
<span class="quotelev1">&gt; else was selected to be built, but then its component_open() function
</span><br>
<span class="quotelev1">&gt; failed because it didn't find /proc/cpuinfo.
</span><br>
<p><p>This is actually incorrect.  The linux component looks for /proc/ 
<br>
cpuinfo and builds if it founds that file.  There's a base component  
<br>
that's built if nothing else is found.  The configure logic for the  
<br>
linux component is probably not the right thing to do -- it should  
<br>
probably be modified to check both for that file (there are systems  
<br>
that call themselves &quot;linux&quot; but don't have a /proc/cpuinfo) is  
<br>
readable and that we're actually on Linux.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   There is an art . . . to flying. The knack lies in learning how to
   throw yourself at the ground and miss.
       Douglas Adams, 'The Hitchhikers Guide to the Galaxy'
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3528.php">George Bosilca: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Previous message:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>In reply to:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3528.php">George Bosilca: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Reply:</strong> <a href="3528.php">George Bosilca: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
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
