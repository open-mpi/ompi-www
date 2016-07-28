<?
$subject_val = "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  3 21:42:22 2012" -->
<!-- isoreceived="20120304024222" -->
<!-- sent="Sat, 03 Mar 2012 18:42:25 -0800" -->
<!-- isosent="20120304024225" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081" -->
<!-- id="4F52D691.70808_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC412F89-34B8-44B2-B2BE-02B70EBD649F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-03 21:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10676.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10674.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10672.php">Ralph Castain: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, seems to work for me, thanks.
<br>
<p>On 3/3/2012 3:14 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Should be fixed in r26093
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 3, 2012, at 4:06 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'll look at this some more, but for now I'll note that the trunk has an apparent regression in r26081.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ./configure                          \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-shared                    \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;       --disable-peruse                   \
</span><br>
<span class="quotelev2">&gt;&gt;       --disable-mpi-thread-multiple      \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-contrib-no-build=vt       \
</span><br>
<span class="quotelev2">&gt;&gt;       --prefix=...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     setenv OPAL_PREFIX ...
</span><br>
<span class="quotelev2">&gt;&gt;     set path = ( $OPAL_PREFIX/bin $path )
</span><br>
<span class="quotelev2">&gt;&gt;     setenv LD_LIBRARY_PATH $OPAL_PREFIX/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun [--prefix $OPAL_PREFIX] hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Up to 26080, the mpirun line runs fine, whether with the --prefix option or not.  Starting in 26081, I get a seg fault when I do *NOT* use --prefix.  (Still runs fine *with* --prefix.)  I've seen the problem on SunOS and on Linux, with Studio, GCC, and Intel compilers.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10676.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10674.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10672.php">Ralph Castain: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
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
