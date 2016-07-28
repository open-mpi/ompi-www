<?
$subject_val = "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 12:21:00 2010" -->
<!-- isoreceived="20100524162100" -->
<!-- sent="Mon, 24 May 2010 12:20:55 -0400" -->
<!-- isosent="20100524162055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp" -->
<!-- id="F5B5D137-461E-4DA2-9D90-C0BD324159F2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikBkhGSVNORy44KgbgM30hVZPj8_bL-3A0seiPp_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 12:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13146.php">Jeff Squyres: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="13144.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>In reply to:</strong> <a href="13144.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13149.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<li><strong>Reply:</strong> <a href="13149.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2010, at 12:06 PM, Dawid Laszuk wrote:
<br>
<p><span class="quotelev2">&gt; &gt; What's the output from &quot;ldd hello_c&quot;?  (this tells us which libraries it's linking to at run-time -- from your configure output, it should list /usr/local/lib/libmpi.so in there somewhere)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kretyn_at_kretyn-laptop ~/Pobrane/openmpi-1.4.2/examples $ ldd hello_c
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007ffffbdbe000)
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; /usr/lib/libmpi.so.0 (0x00007f5c7ba1e000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /usr/lib/libopen-rte.so.0 (0x00007f5c7b7d6000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /usr/lib/libopen-pal.so.0 (0x00007f5c7b563000)
</span><br>
<p>This seems to be the problem -- it's pointing to the &quot;wrong&quot; libmpi (and friends).
<br>
<p>Ensure that you're using /usr/local/bin/mpicc to compile your apps.  Then you might also want to prefix the LD_LIBRARY_PATH environment variable with /usr/local/lib to ensure that you pick up your local Open MPI installation libraries (instead of the ones in /usr/lib).
<br>
<p>For example:
<br>
<p>export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
<br>
/usr/local/bin/mpicc hello_c.c -o hello_c -g
<br>
/usr/local/bin/mpirun -np 4 hello_c
<br>
<p>Try that.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13146.php">Jeff Squyres: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="13144.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>In reply to:</strong> <a href="13144.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13149.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<li><strong>Reply:</strong> <a href="13149.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
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
