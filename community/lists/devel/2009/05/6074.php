<?
$subject_val = "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 15:33:28 2009" -->
<!-- isoreceived="20090519193328" -->
<!-- sent="Tue, 19 May 2009 20:34:37 +0100" -->
<!-- isosent="20090519193437" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux" -->
<!-- id="1242761677.11942.10.camel_at_localhost.localdomain" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A12EAA7.9090901_at_sun.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 15:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6075.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="6073.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6073.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6079.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6079.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-05-19 at 13:21 -0400, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Actually playing with Ashley&#180;s program shown that RTLD_NOW does error 
</span><br>
<span class="quotelev1">&gt; out in the exact same way.  So could the problem be that totalview 
</span><br>
<span class="quotelev1">&gt; dlopen&#180;s the plugin with RTLD_NOW passed into dlopen.
</span><br>
<p>Passing the RTLD_NOW flag is probably the right thing to do, the problem
<br>
lies with the library, not TotalView.
<br>
<p><span class="quotelev1">&gt; I would have 
</span><br>
<span class="quotelev1">&gt; thought if this was the case we would have seen this problem sooner.
</span><br>
<p>Indeed.  It would certainly be something worth adding a test for.
<br>
<p>I can confirm the svn trunk doesn't suffer from this problem, I've been
<br>
using it all week.
<br>
<p>Ashley,
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; No, this is us trying to outsmart compilers. It turned out that at one 
</span><br>
<span class="quotelev2">&gt; &gt; point they outsmart us ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, I blame the compiler on this one. As we need the definition of 
</span><br>
<span class="quotelev2">&gt; &gt; the ompi_free_list_t structure we have to include the header file. We 
</span><br>
<span class="quotelev2">&gt; &gt; never use anything from this header file, especially not the 
</span><br>
<span class="quotelev2">&gt; &gt; ompi_free_list functions. However, as one of the functions in the 
</span><br>
<span class="quotelev2">&gt; &gt; header file make a reference to the ompi_free_list_grow function 
</span><br>
<span class="quotelev2">&gt; &gt; (defined in the .c file), the compiler include a reference to this in 
</span><br>
<span class="quotelev2">&gt; &gt; the library.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 15 May 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Could well be our visibility settings, too...  Are those symbols 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI|ORTE|OPAL_DECLSPEC'ed?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 15, 2009, at 10:26 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Fri, 2009-05-15 at 07:43 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; We are running it with 1.3.2, last I heard - haven't tried the current
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1.3 branch. Ashley reported a problem with some other symbol that
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; couldn't be loaded that blocked him on message queue debugging, but
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; that was on the trunk.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My problem is that the library opens but is expecting to find a symbol
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in the application that isn't there, it sounds like terry problem is 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; debugger isn't loading the so.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sounds like we are missing at least a couple of header files.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My first thought for this would be to write a simple C program to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; dlopen() the so and see if that works, both with RTLD_NOW and RTLD_LAZY
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; as I don't know which TotalView uses.  Try something like the 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; following.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;dlfcn.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int main (argc, argv)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     int argc;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     char *argv[];
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  void *h;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  h = dlopen(argv[1],RTLD_NOW);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  printf(&quot;Result is %p\n&quot;,h);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ashley,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev2">&gt; &gt; hope.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;                                   Martin Luther King
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6075.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="6073.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6073.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6079.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6079.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
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
