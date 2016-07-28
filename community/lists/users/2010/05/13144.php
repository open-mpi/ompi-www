<?
$subject_val = "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 12:06:12 2010" -->
<!-- isoreceived="20100524160612" -->
<!-- sent="Mon, 24 May 2010 18:06:07 +0200" -->
<!-- isosent="20100524160607" -->
<!-- name="Dawid Laszuk" -->
<!-- email="sednodna_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp" -->
<!-- id="AANLkTikBkhGSVNORy44KgbgM30hVZPj8_bL-3A0seiPp_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FBB9F7CD-CAE6-446D-8473-64851021CAE0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp<br>
<strong>From:</strong> Dawid Laszuk (<em>sednodna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 12:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13145.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<li><strong>Previous message:</strong> <a href="13143.php">Glass, Micheal W: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="13139.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13145.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<li><strong>Reply:</strong> <a href="13145.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot :) I've got one step further, but there are another problems.
<br>
<p>I think I've fixed that one with &quot;undefined orte_xml_fm&quot;. I've
<br>
uninstalled by &quot;make uninstall&quot; and cleaned with &quot;make clean&quot; and then
<br>
configured with &quot;--enable-mpirun-prefix-by-default&quot; (like you said it)
<br>
and &quot;make all&quot;, &quot;make install&quot;. You might have been right that I
<br>
already had Open MPI with distro, because when i uninstalled it still
<br>
could find files named &quot;openmpi&quot; and &quot;mpirun&quot; in /usr/bin .
<br>
<p>(if it's not okey to keep this topic alive, since now problem is, as I
<br>
think, different, please tell me so :)  )
<br>
<p>I get other error when I want to run something.
<br>
<p><span class="quotelev1">&gt; So just to be clear -- if you mpirun a simple MPI test executable (e.g., the test applications in the Open MPI examples/ directory), you get that error message? &#160;E.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd examples
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 examples/hello_c
</span><br>
<span class="quotelev1">&gt; ...you see the missing symbol error here...
</span><br>
<p>See attachment &quot;1&quot;
<br>
<p><p><p><span class="quotelev1">&gt; What happens if you just run hello_c without mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./hello_c
</span><br>
<p>See attachment &quot;2&quot;
<br>
<p><p>Any ideas what is wrong?
<br>
<p><p>Just in case it would be helpful:
<br>
<p><span class="quotelev1">&gt; What's the output from &quot;ldd hello_c&quot;? &#160;(this tells us which libraries it's linking to at run-time -- from your configure output, it should list /usr/local/lib/libmpi.so in there somewhere)
</span><br>
<p>kretyn_at_kretyn-laptop ~/Pobrane/openmpi-1.4.2/examples $ ldd hello_c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007ffffbdbe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/lib/libmpi.so.0 (0x00007f5c7ba1e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/lib/libopen-rte.so.0 (0x00007f5c7b7d6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/lib/libopen-pal.so.0 (0x00007f5c7b563000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x00007f5c7b35f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x00007f5c7b145000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x00007f5c7af42000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0x00007f5c7acbe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x00007f5c7aaa2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0x00007f5c7a733000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f5c7bcc7000)
<br>
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13144/1">1</a>
</ul>
<!-- attachment="1" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13144/2">2</a>
</ul>
<!-- attachment="2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13145.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<li><strong>Previous message:</strong> <a href="13143.php">Glass, Micheal W: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="13139.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13145.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<li><strong>Reply:</strong> <a href="13145.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
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
