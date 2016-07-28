<?
$subject_val = "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  3 18:14:47 2012" -->
<!-- isoreceived="20120303231447" -->
<!-- sent="Sat, 3 Mar 2012 16:14:39 -0700" -->
<!-- isosent="20120303231439" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081" -->
<!-- id="FC412F89-34B8-44B2-B2BE-02B70EBD649F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F52A407.3030603_at_oracle.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-03 18:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10673.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10671.php">Eugene Loh: "[OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>In reply to:</strong> <a href="10671.php">Eugene Loh: "[OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10675.php">Eugene Loh: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>Reply:</strong> <a href="10675.php">Eugene Loh: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed in r26093
<br>
<p>On Mar 3, 2012, at 4:06 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'll look at this some more, but for now I'll note that the trunk has an apparent regression in r26081.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ./configure                          \
</span><br>
<span class="quotelev1">&gt;      --enable-shared                    \
</span><br>
<span class="quotelev1">&gt;      --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;      --disable-peruse                   \
</span><br>
<span class="quotelev1">&gt;      --disable-mpi-thread-multiple      \
</span><br>
<span class="quotelev1">&gt;      --enable-contrib-no-build=vt       \
</span><br>
<span class="quotelev1">&gt;      --prefix=...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    setenv OPAL_PREFIX ...
</span><br>
<span class="quotelev1">&gt;    set path = ( $OPAL_PREFIX/bin $path )
</span><br>
<span class="quotelev1">&gt;    setenv LD_LIBRARY_PATH $OPAL_PREFIX/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun [--prefix $OPAL_PREFIX] hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Up to 26080, the mpirun line runs fine, whether with the --prefix option or not.  Starting in 26081, I get a seg fault when I do *NOT* use --prefix.  (Still runs fine *with* --prefix.)  I've seen the problem on SunOS and on Linux, with Studio, GCC, and Intel compilers.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10673.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10671.php">Eugene Loh: "[OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>In reply to:</strong> <a href="10671.php">Eugene Loh: "[OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10675.php">Eugene Loh: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>Reply:</strong> <a href="10675.php">Eugene Loh: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
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
