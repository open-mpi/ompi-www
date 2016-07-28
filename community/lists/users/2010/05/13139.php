<?
$subject_val = "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 09:09:15 2010" -->
<!-- isoreceived="20100524130915" -->
<!-- sent="Mon, 24 May 2010 09:09:10 -0400" -->
<!-- isosent="20100524130910" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp" -->
<!-- id="FBB9F7CD-CAE6-446D-8473-64851021CAE0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTil10LEa0ffmTxKxuGwwqQ4C6IrNeI55u3aacwdT_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 09:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13140.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13138.php">Jeff Squyres: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="13130.php">Dawid Laszuk: "[OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13144.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>Reply:</strong> <a href="13144.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 23, 2010, at 11:57 AM, Dawid Laszuk wrote:
<br>
<p><span class="quotelev1">&gt; It's a bit awkward for me to ask, because I'm not only newbie in
</span><br>
<span class="quotelev1">&gt; parallel programming but also in Linux system, but i've but searching
</span><br>
<span class="quotelev1">&gt; for long enough to loose any hopes.
</span><br>
<p>No problem; we'll try to help.
<br>
<p><span class="quotelev1">&gt; My problem is, when I try to run compiled code with &quot;mpirun&quot; I get output:
</span><br>
<span class="quotelev1">&gt; mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can compile code with &quot;mpicc&quot; (i write in C) and it runs, but only
</span><br>
<span class="quotelev1">&gt; on one CPU ( I have Athlon X2 64bit, dual core ). There is no
</span><br>
<span class="quotelev1">&gt; difference when I write &quot;mpirun&quot;, &quot;mpiexec&quot; or &quot;orterun&quot; (but that's
</span><br>
<span class="quotelev1">&gt; normal, isn't it?). It doesn't matter what I'm trying to run; I get
</span><br>
<span class="quotelev1">&gt; that output just by typing it into console.
</span><br>
<p>FWIW: all three of those are exactly equivalent in Open MPI (mpirun, mpiexec, orterun).
<br>
<p>So just to be clear -- if you mpirun a simple MPI test executable (e.g., the test applications in the Open MPI examples/ directory), you get that error message?  E.g.:
<br>
<p>cd examples
<br>
make
<br>
mpirun -np 2 examples/hello_c
<br>
...you see the missing symbol error here...
<br>
<p>What happens if you just run hello_c without mpirun?
<br>
<p>./hello_c
<br>
<p>What's the output from &quot;ldd hello_c&quot;?  (this tells us which libraries it's linking to at run-time -- from your configure output, it should list /usr/local/lib/libmpi.so in there somewhere)
<br>
<p><span class="quotelev1">&gt; As I said, I know basics with linux and even adding some libs into sys
</span><br>
<span class="quotelev1">&gt; path is something which I still don't know ( and don't how much time
</span><br>
<span class="quotelev1">&gt; to read about).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've attached things which maybe helpful ( output from &quot;./configure&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;make all&quot;, &quot;make install&quot; ).
</span><br>
<span class="quotelev1">&gt; I'm using Linux Mint 8 ( Kernel Linux 2.6.31-20-generic). Have two CPU
</span><br>
<span class="quotelev1">&gt; cores AMD Athlon Dual-Core QL-60.
</span><br>
<p>The most common case for this kind of error is mixing-n-matching multiple versions of Open MPI on the same machine.  Does your Linux distro come with Open MPI installed already, for example?
<br>
<p>You might want to configure Open MPI with --enable-mpirun-prefix-by-default -- this does some magic, particularly when running across multiple machines, to try to ensure that the &quot;right&quot; Open MPI installation is picked.
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
<li><strong>Next message:</strong> <a href="13140.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13138.php">Jeff Squyres: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="13130.php">Dawid Laszuk: "[OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13144.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>Reply:</strong> <a href="13144.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
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
