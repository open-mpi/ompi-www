<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 15 15:39:58 2005" -->
<!-- isoreceived="20050915203958" -->
<!-- sent="Thu, 15 Sep 2005 16:39:51 -0400" -->
<!-- isosent="20050915203951" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  64bit shared library problems" -->
<!-- id="d6405811b20d33b705ddf4547fb0fe33_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e4ae4aa8852168d24eedc16f8a89ee5e_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-15 15:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">Nathan DeBardeleben: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0360.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0362.php">Nathan DeBardeleben: "Re:  64bit shared library problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 15, 2005, at 4:32 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This allows the components themselves to pull in shared libraries when
</span><br>
<span class="quotelev1">&gt; they are dlopened -- if they need to.  If the symbols can be resolved
</span><br>
<span class="quotelev1">&gt; in the parent process' public symbol namespace, they still will be (as
</span><br>
<span class="quotelev1">&gt; in the standalone executable example, above).  But if they can't be
</span><br>
<span class="quotelev1">&gt; resolved that way, this gives the ability to explicitly find and pull
</span><br>
<span class="quotelev1">&gt; in a shared library and resolve the symbols that way (as in the Eclipse
</span><br>
<span class="quotelev1">&gt; plugin example, above).
</span><br>
<p>I forgot to include the simple example that shows this.  Here's how our 
<br>
components are today (this is the paffinity linux component, but 
<br>
they're all this way):
<br>
<p>[15:15] odin:~/svn/ompi/opal/mca/paffinity/linux % ldd 
<br>
.libs/mca_paffinity_linux.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0x0000002a9566b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x0000002a957f1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x0000002a958f4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0x0000002a95a0b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x000000552aaaa000)
<br>
<p>You can see that there's no mention of libopal, even though the 
<br>
paffinity linux component makes libopal function calls.
<br>
<p>Here's how they are after I have fixed the Makefile.am and re-linked it:
<br>
<p>[15:16] odin:~/svn/ompi/opal/mca/paffinity/linux % ldd 
<br>
.libs/mca_paffinity_linux.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopal.so.0 =&gt; /u/jsquyres/bogus/lib/libopal.so.0 
<br>
(0x0000002a9565a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0x0000002a957c8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x0000002a9594e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x0000002a95a52000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0x0000002a95b68000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x0000002a95d8d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x000000552aaaa000)
<br>
<p>Notice the explicit mention of libopal.so.  This is what allows the 
<br>
component to resolve symbols independent of the parent process, if 
<br>
necessary.
<br>
<p>Hope that all makes sense!  And if it doesn't, what do you care?  :-)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">Nathan DeBardeleben: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0360.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0362.php">Nathan DeBardeleben: "Re:  64bit shared library problems"</a>
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
