<?
$subject_val = "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 10:25:19 2009" -->
<!-- isoreceived="20090515142519" -->
<!-- sent="Fri, 15 May 2009 15:26:21 +0100" -->
<!-- isosent="20090515142621" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux" -->
<!-- id="1242397581.2925.36.camel_at_localhost.localdomain" -->
<!-- inreplyto="71d2d8cc0905150643k2d038784n62dfb7c1fec2af28_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-05-15 10:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6055.php">Jeff Squyres: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6053.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6055.php">Jeff Squyres: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6055.php">Jeff Squyres: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-05-15 at 07:43 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; We are running it with 1.3.2, last I heard - haven't tried the current
</span><br>
<span class="quotelev1">&gt; 1.3 branch. Ashley reported a problem with some other symbol that
</span><br>
<span class="quotelev1">&gt; couldn't be loaded that blocked him on message queue debugging, but
</span><br>
<span class="quotelev1">&gt; that was on the trunk.
</span><br>
<p>My problem is that the library opens but is expecting to find a symbol
<br>
in the application that isn't there, it sounds like terry problem is the
<br>
debugger isn't loading the so.
<br>
<p><span class="quotelev1">&gt; Sounds like we are missing at least a couple of header files.
</span><br>
<p>My first thought for this would be to write a simple C program to
<br>
dlopen() the so and see if that works, both with RTLD_NOW and RTLD_LAZY
<br>
as I don't know which TotalView uses.  Try something like the following.
<br>
<p>#include &lt;dlfcn.h&gt;
<br>
<p>int main (argc, argv)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int argc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *argv[];
<br>
{
<br>
&nbsp;&nbsp;void *h;
<br>
&nbsp;&nbsp;h = dlopen(argv[1],RTLD_NOW);
<br>
&nbsp;&nbsp;printf(&quot;Result is %p\n&quot;,h);
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6055.php">Jeff Squyres: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6053.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6055.php">Jeff Squyres: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6055.php">Jeff Squyres: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
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
