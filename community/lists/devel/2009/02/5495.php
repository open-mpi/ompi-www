<?
$subject_val = "Re: [OMPI devel] 1.3 runtime message ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 16:32:25 2009" -->
<!-- isoreceived="20090219213225" -->
<!-- sent="Thu, 19 Feb 2009 16:30:31 -0500" -->
<!-- isosent="20090219213031" -->
<!-- name="Jim Langston" -->
<!-- email="Jim.Langston_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 runtime message ?" -->
<!-- id="499DCF77.9010107_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499DCCE8.7020006_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 runtime message ?<br>
<strong>From:</strong> Jim Langston (<em>Jim.Langston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 16:30:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5496.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5494.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5494.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5498.php">Jeff Squyres: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5498.php">Jeff Squyres: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don Kerr wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/19/09 15:57, Jim Langston wrote:
</span><br>
<span class="quotelev2">&gt;&gt; After building 1.3, running the example I get this message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[55888,1],0]: A high-performance Open MPI point-to-point messaging 
</span><br>
<span class="quotelev2">&gt;&gt; module
</span><br>
<span class="quotelev2">&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Module: uDAPL
</span><br>
<span class="quotelev2">&gt;&gt;  Host: alpha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt; [alpha:09794] 1 more process has sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev2">&gt;&gt; [alpha:09794] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
</span><br>
<span class="quotelev2">&gt;&gt; see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there something I need to do at runtime to eliminate the 
</span><br>
<span class="quotelev2">&gt;&gt; point-to-point message ?
</span><br>
<span class="quotelev1">&gt; So you want the message not to be reported. I believe &quot;--mca 
</span><br>
<span class="quotelev1">&gt; btl_base_warn_component_unused 0&quot;  will do the trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
I'm just wondering if I compiled incorrectly, or if the message is 
<br>
generated because uDAPL is the default
<br>
interface (I'm on OpenSolaris), which I'm wondering if I can stop from 
<br>
being looked at, either by
<br>
compiling differently, or from the command line.
<br>
<p>This doesn't stop the message either, but stops the noisy stuff:
<br>
<p>orterun --mca orte_base_help_aggregate 0 --mca blt tcp -np 2 hello_c
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jim
</span><br>
<span class="quotelev2">&gt;&gt;
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
/////////////////////////////////////////////
Jim Langston
Sun Microsystems, Inc.
(877) 854-5583 (AccessLine)
(513) 702-4741 (Cell)
AIM: jl9594
jim.langston_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5496.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5494.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5494.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5498.php">Jeff Squyres: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5498.php">Jeff Squyres: "Re: [OMPI devel] 1.3 runtime message ?"</a>
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
