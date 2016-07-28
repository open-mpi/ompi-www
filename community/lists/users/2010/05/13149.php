<?
$subject_val = "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 15:12:03 2010" -->
<!-- isoreceived="20100524191203" -->
<!-- sent="Mon, 24 May 2010 21:11:16 +0200" -->
<!-- isosent="20100524191116" -->
<!-- name="Dawid Laszuk" -->
<!-- email="sednodna_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp" -->
<!-- id="AANLkTikNshfLtFiMJCD0_LvXfufZ4XWzaojcueYsmBY__at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F5B5D137-461E-4DA2-9D90-C0BD324159F2_at_cisco.com" -->
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
<strong>From:</strong> Dawid Laszuk (<em>sednodna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 15:11:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13150.php">Peter Thompson: "[OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>Previous message:</strong> <a href="13148.php">Eugene Loh: "Re: [OMPI users] Deadlock question"</a>
<li><strong>In reply to:</strong> <a href="13145.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's it! It works. When I make export I don't have to even start
<br>
from /usr/.../mpirun, plan &quot;mpirun&quot; do the work. Now I have to make
<br>
that PATH to be like that all the time... hmm...
<br>
<p>Thanks a lot :)
<br>
much appreciate it :)
<br>
<p>2010/5/24 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On May 24, 2010, at 12:06 PM, Dawid Laszuk wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What's the output from &quot;ldd hello_c&quot;? &#160;(this tells us which libraries it's linking to at run-time -- from your configure output, it should list /usr/local/lib/libmpi.so in there somewhere)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; kretyn_at_kretyn-laptop ~/Pobrane/openmpi-1.4.2/examples $ ldd hello_c
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; linux-vdso.so.1 =&gt; &#160;(0x00007ffffbdbe000)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; libmpi.so.0 =&gt; /usr/lib/libmpi.so.0 (0x00007f5c7ba1e000)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; libopen-rte.so.0 =&gt; /usr/lib/libopen-rte.so.0 (0x00007f5c7b7d6000)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; libopen-pal.so.0 =&gt; /usr/lib/libopen-pal.so.0 (0x00007f5c7b563000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to be the problem -- it's pointing to the &quot;wrong&quot; libmpi (and friends).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ensure that you're using /usr/local/bin/mpicc to compile your apps. &#160;Then you might also want to prefix the LD_LIBRARY_PATH environment variable with /usr/local/lib to ensure that you pick up your local Open MPI installation libraries (instead of the ones in /usr/lib).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpicc hello_c.c -o hello_c -g
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun -np 4 hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Pozdrawiam,
Dawid Laszuk
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13150.php">Peter Thompson: "[OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>Previous message:</strong> <a href="13148.php">Eugene Loh: "Re: [OMPI users] Deadlock question"</a>
<li><strong>In reply to:</strong> <a href="13145.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
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
