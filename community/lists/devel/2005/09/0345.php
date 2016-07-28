<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 09:42:20 2005" -->
<!-- isoreceived="20050914144220" -->
<!-- sent="Wed, 14 Sep 2005 14:42:09 +0000" -->
<!-- isosent="20050914144209" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux" -->
<!-- id="1126708929.1795.16.camel_at_polylepis.inforead.com" -->
<!-- inreplyto="B1CDAC23-810E-4B93-8E1D-38888F723EF8_at_open-mpi.org" -->
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
<strong>From:</strong> Ferris McCormick (<em>fmccor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-14 09:42:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0346.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0344.php">Galen M. Shipman: "Registration Cache changes"</a>
<li><strong>In reply to:</strong> <a href="0331.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is a bit more on the sparc/linux SegFault from everything unless
<br>
configured with --enable-debug:
<br>
<p>On Mon, 2005-09-12 at 13:34 -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Ok, I see what's happening, although I'm not sure the two problems  
</span><br>
<span class="quotelev1">&gt; are actually related.  The first is that the component to provide  
</span><br>
<span class="quotelev1">&gt; high resolution timer support on Linux is disabling itself because:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And here's a back-trace from ompi_info:
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================
</span><br>
<span class="quotelev2">&gt; &gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; opal_output_close (output_id=1880710872) at opal_object.h:409
</span><br>
<span class="quotelev2">&gt; &gt; 409         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; Current language:  auto; currently c
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  opal_output_close (output_id=1880710872) at opal_object.h:4
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x700d8e00 in mca_topo_base_close () at topo_base_close.c:46
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00016aa4 in close_components () at components.cc:254
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00018bbc in main (argc=1, argv=0xefa253f4) at ompi_info.cc:251
</span><br>
<span class="quotelev2">&gt; &gt; =============================================
</span><br>
<span class="quotelev2">&gt; &gt; HOWEVER:  If I configure with --enable-debug, two things happen:
</span><br>
<span class="quotelev2">&gt; &gt; 1.  I have to build ompi/mca/rcache/rb by hand because of incorrect
</span><br>
<span class="quotelev2">&gt; &gt; CFLAGS;
</span><br>
<span class="quotelev2">&gt; &gt; 2.  The SegFault disappears.
</span><br>
<p>Here's a little more information on the Segfault.  It is coming from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;verbose);
<br>
in
<br>
void opal_output_close(int output_id) (in opal/util/output.c)
<br>
<p>Indeed, if I just comment out that OBJ_DESTRUCT line, everything runs
<br>
&quot;normally,&quot; although that does not look like a very good fix.
<br>
<p>Regards,
<br>
Ferris
<br>
<pre>
-- 
Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
Developer, Gentoo Linux (Sparc, Devrel)

</pre>
<p>
<p><p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0345/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0346.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0344.php">Galen M. Shipman: "Registration Cache changes"</a>
<li><strong>In reply to:</strong> <a href="0331.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
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
