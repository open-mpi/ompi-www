<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 06:05:39 2007" -->
<!-- isoreceived="20070622100539" -->
<!-- sent="Fri, 22 Jun 2007 12:05:33 +0200" -->
<!-- isosent="20070622100533" -->
<!-- name="Pablo Casc&#195;&#179;n Katchadourian" -->
<!-- email="pcascon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] create new btl" -->
<!-- id="200706221205.34015.pcascon_at_atc.ugr.es" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A55DB2D8-4A6C-45DB-A28B-D8362211480B_at_cs.utk.edu" -->
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
<strong>From:</strong> Pablo Casc&#195;&#179;n Katchadourian (<em>pcascon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-22 06:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1744.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1741.php">George Bosilca: "Re: [OMPI devel] create new btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;It couldn't be easier. Thanks a lot!
<br>
<p>Pablo
<br>
<p><p>On Friday 22 June 2007 00:32:13 George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Rerun the autogen.sh script and the new BTL will get auto-magically
</span><br>
<span class="quotelev1">&gt; included in the build. You don't have to modify anything, just run
</span><br>
<span class="quotelev1">&gt; the script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once you get it compiled, you can specify --mca btl &lt;whatever&gt;,self
</span><br>
<span class="quotelev1">&gt; on your mpirun command line to get access at runtime to your BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 21, 2007, at 3:36 PM, pcascon_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;    I just arrived to open-mpi. I'm trying to create a new btl. The
</span><br>
<span class="quotelev2">&gt; &gt; goal is
</span><br>
<span class="quotelev2">&gt; &gt; to use open-mpi with a library that sends/receives packets with a
</span><br>
<span class="quotelev2">&gt; &gt; network processor (IXP) based board. Since it's an ethernet board I
</span><br>
<span class="quotelev2">&gt; &gt; thought the best way to start it's to reproduce the TCP btl. So I made
</span><br>
<span class="quotelev2">&gt; &gt; a copy of the directory ompi/mca/btl/tcp/ just to have something to
</span><br>
<span class="quotelev2">&gt; &gt; start. But then, I don't know how to include this &quot;new&quot; btl into the
</span><br>
<span class="quotelev2">&gt; &gt; build system (./configure ; make all install). My knowledge about the
</span><br>
<span class="quotelev2">&gt; &gt; GNU autotools it's not good enough I guess. I believe first step it's
</span><br>
<span class="quotelev2">&gt; &gt; to modify the configure script through 'autoconf' but not sure how to
</span><br>
<span class="quotelev2">&gt; &gt; do this. I've been searching for information about that on this
</span><br>
<span class="quotelev2">&gt; &gt; maillist with no luck. What will be the steps to create a basic btl?
</span><br>
<span class="quotelev2">&gt; &gt; What's the best way to integrate the code onto the whole open-mpi?
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot for reading :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt;    Pablo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1744.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1741.php">George Bosilca: "Re: [OMPI devel] create new btl"</a>
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
