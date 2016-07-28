<?
$subject_val = "Re: [OMPI devel] rch-step2 branch errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 10:25:39 2008" -->
<!-- isoreceived="20080221152539" -->
<!-- sent="Thu, 21 Feb 2008 10:25:37 -0500" -->
<!-- isosent="20080221152537" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rch-step2 branch errors" -->
<!-- id="47BD97F1.1060409_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47BD9488.7050005_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] rch-step2 branch errors<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 10:25:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3284.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3282.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3279.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3285.php">Pak Lui: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>Reply:</strong> <a href="3285.php">Pak Lui: "Re: [OMPI devel] rch-step2 branch errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have just made a change in r17540 which may fix your problem. If not, 
<br>
please send the requested output.
<br>
<p>Tim
<br>
<p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been doing some work on this branch, and may have caused that 
</span><br>
<span class="quotelev1">&gt; problem. But I really cannot help at all without all the error output. 
</span><br>
<span class="quotelev1">&gt; If you do a 'make &gt;/dev/null' and send that output I may be able to help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order to make a /tmp/rank_file branch with new RMAPS component I need
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/rhc-step2b branch to be based on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to download and compile it, but it failed.
</span><br>
<span class="quotelev2">&gt;&gt; (missing many defines, h files and new directories e.t.c)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -o
</span><br>
<span class="quotelev2">&gt;&gt; .libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm  -Wl,--rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/home/USERS/lenny/OMPI_ORTE_17540/lib
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `OPAL_OUTPUT'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3284.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3282.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3279.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3285.php">Pak Lui: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>Reply:</strong> <a href="3285.php">Pak Lui: "Re: [OMPI devel] rch-step2 branch errors"</a>
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
