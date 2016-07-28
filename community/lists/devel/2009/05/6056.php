<?
$subject_val = "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 13:07:12 2009" -->
<!-- isoreceived="20090515170712" -->
<!-- sent="Fri, 15 May 2009 13:06:46 -0400 (EDT)" -->
<!-- isosent="20090515170646" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux" -->
<!-- id="alpine.OSX.2.00.0905151303250.266_at_laptop37.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="250049D6-839A-49B9-9031-E8CB395F3B34_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-15 13:06:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6057.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6055.php">Jeff Squyres: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6055.php">Jeff Squyres: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6073.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6073.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, this is us trying to outsmart compilers. It turned out that at one 
<br>
point they outsmart us ...
<br>
<p>Anyway, I blame the compiler on this one. As we need the definition of the 
<br>
ompi_free_list_t structure we have to include the header file. We never 
<br>
use anything from this header file, especially not the ompi_free_list 
<br>
functions. However, as one of the functions in the header file make a 
<br>
reference to the ompi_free_list_grow function (defined in the .c file), 
<br>
the compiler include a reference to this in the library.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><p>On Fri, 15 May 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Could well be our visibility settings, too...  Are those symbols 
</span><br>
<span class="quotelev1">&gt; OMPI|ORTE|OPAL_DECLSPEC'ed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 15, 2009, at 10:26 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 2009-05-15 at 07:43 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are running it with 1.3.2, last I heard - haven't tried the current
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.3 branch. Ashley reported a problem with some other symbol that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couldn't be loaded that blocked him on message queue debugging, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that was on the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My problem is that the library opens but is expecting to find a symbol
</span><br>
<span class="quotelev2">&gt;&gt; in the application that isn't there, it sounds like terry problem is the
</span><br>
<span class="quotelev2">&gt;&gt; debugger isn't loading the so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sounds like we are missing at least a couple of header files.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My first thought for this would be to write a simple C program to
</span><br>
<span class="quotelev2">&gt;&gt; dlopen() the so and see if that works, both with RTLD_NOW and RTLD_LAZY
</span><br>
<span class="quotelev2">&gt;&gt; as I don't know which TotalView uses.  Try something like the following.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;dlfcn.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main (argc, argv)
</span><br>
<span class="quotelev2">&gt;&gt;     int argc;
</span><br>
<span class="quotelev2">&gt;&gt;     char *argv[];
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  void *h;
</span><br>
<span class="quotelev2">&gt;&gt;  h = dlopen(argv[1],RTLD_NOW);
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;Result is %p\n&quot;,h);
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ashley,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6057.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6055.php">Jeff Squyres: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6055.php">Jeff Squyres: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6073.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6073.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
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
