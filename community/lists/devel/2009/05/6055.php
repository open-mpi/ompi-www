<?
$subject_val = "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 11:32:35 2009" -->
<!-- isoreceived="20090515153235" -->
<!-- sent="Fri, 15 May 2009 11:32:28 -0400" -->
<!-- isosent="20090515153228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux" -->
<!-- id="250049D6-839A-49B9-9031-E8CB395F3B34_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1242397581.2925.36.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-15 11:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6056.php">George Bosilca: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6054.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6054.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6056.php">George Bosilca: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6056.php">George Bosilca: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could well be our visibility settings, too...  Are those symbols OMPI| 
<br>
ORTE|OPAL_DECLSPEC'ed?
<br>
<p><p>On May 15, 2009, at 10:26 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 2009-05-15 at 07:43 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; We are running it with 1.3.2, last I heard - haven't tried the  
</span><br>
<span class="quotelev1">&gt; current
</span><br>
<span class="quotelev2">&gt; &gt; 1.3 branch. Ashley reported a problem with some other symbol that
</span><br>
<span class="quotelev2">&gt; &gt; couldn't be loaded that blocked him on message queue debugging, but
</span><br>
<span class="quotelev2">&gt; &gt; that was on the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is that the library opens but is expecting to find a symbol
</span><br>
<span class="quotelev1">&gt; in the application that isn't there, it sounds like terry problem is  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; debugger isn't loading the so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sounds like we are missing at least a couple of header files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My first thought for this would be to write a simple C program to
</span><br>
<span class="quotelev1">&gt; dlopen() the so and see if that works, both with RTLD_NOW and  
</span><br>
<span class="quotelev1">&gt; RTLD_LAZY
</span><br>
<span class="quotelev1">&gt; as I don't know which TotalView uses.  Try something like the  
</span><br>
<span class="quotelev1">&gt; following.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;dlfcn.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (argc, argv)
</span><br>
<span class="quotelev1">&gt;      int argc;
</span><br>
<span class="quotelev1">&gt;      char *argv[];
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   void *h;
</span><br>
<span class="quotelev1">&gt;   h = dlopen(argv[1],RTLD_NOW);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Result is %p\n&quot;,h);
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6056.php">George Bosilca: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6054.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6054.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6056.php">George Bosilca: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6056.php">George Bosilca: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
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
