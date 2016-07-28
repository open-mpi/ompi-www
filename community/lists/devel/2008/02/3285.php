<?
$subject_val = "Re: [OMPI devel] rch-step2 branch errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 11:24:02 2008" -->
<!-- isoreceived="20080221162402" -->
<!-- sent="Thu, 21 Feb 2008 11:23:54 -0500" -->
<!-- isosent="20080221162354" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rch-step2 branch errors" -->
<!-- id="47BDA59A.9030704_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47BD97F1.1060409_at_cs.indiana.edu" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 11:23:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3286.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3284.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3283.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3280.php">Ralph H Castain: "Re: [OMPI devel] rch-step2 branch errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think I run into any problem building either rhc-step2b and 
<br>
tmp-public/rank_file yesterday or today. But I am building with Sun 
<br>
Studio 12 on Solaris 10 SPARC though.
<br>
<p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; I have just made a change in r17540 which may fix your problem. If not, 
</span><br>
<span class="quotelev1">&gt; please send the requested output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been doing some work on this branch, and may have caused that 
</span><br>
<span class="quotelev2">&gt;&gt; problem. But I really cannot help at all without all the error output. 
</span><br>
<span class="quotelev2">&gt;&gt; If you do a 'make &gt;/dev/null' and send that output I may be able to help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order to make a /tmp/rank_file branch with new RMAPS component I need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/rhc-step2b branch to be based on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to download and compile it, but it failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (missing many defines, h files and new directories e.t.c)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm  -Wl,--rpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,/home/USERS/lenny/OMPI_ORTE_17540/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `OPAL_OUTPUT'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3286.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3284.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3283.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3280.php">Ralph H Castain: "Re: [OMPI devel] rch-step2 branch errors"</a>
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
