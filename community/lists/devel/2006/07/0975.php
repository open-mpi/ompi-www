<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 02:40:39 2006" -->
<!-- isoreceived="20060720064039" -->
<!-- sent="Thu, 20 Jul 2006 08:45:44 +0200" -->
<!-- isosent="20060720064544" -->
<!-- name="Pierre" -->
<!-- email="pierre42d_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem compiling openmpi 1.1" -->
<!-- id="44BF2698.5070902_at_9online.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1152629626.23834.41.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Pierre (<em>pierre42d_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 02:45:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0976.php">Adrian Knoth: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<li><strong>Previous message:</strong> <a href="0974.php">gh rory: "[OMPI devel] one-sided communication implementation"</a>
<li><strong>In reply to:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Mon, 2006-07-10 at 17:44 +0200, Pierre wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rtsig.c:365: error: `EV_SIGNAL' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; rtsig.c:392: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; rtsig.c:392: error: `EV_PERSIST' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [rtsig.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/tmp/openmpi-1.1/opal/event'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/tmp/openmpi-1.1/opal/event'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/tmp/openmpi-1.1/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a bit unexpected.  Can you please send us the information
</span><br>
<span class="quotelev1">&gt; requested in our &quot;Getting Help&quot; section of the web page:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It will help immensely in determining what went wrong.
</span><br>
<p>Here are the requested files.
<br>
Note that the &quot;ompi_config.h&quot; file is not found in the &quot;share/include&quot; 
<br>
directory but in &quot;ompi/include&quot;.
<br>
<p><pre>
-- 
Pierre.

</pre>
<hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0975/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0976.php">Adrian Knoth: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<li><strong>Previous message:</strong> <a href="0974.php">gh rory: "[OMPI devel] one-sided communication implementation"</a>
<li><strong>In reply to:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
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
