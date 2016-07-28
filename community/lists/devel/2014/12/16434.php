<?
$subject_val = "Re: [OMPI devel] RTLD_GLOBAL question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 06:40:59 2014" -->
<!-- isoreceived="20141204114059" -->
<!-- sent="Thu, 4 Dec 2014 18:40:58 +0700" -->
<!-- isosent="20141204114058" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTLD_GLOBAL question" -->
<!-- id="CAJ2Qj5rc2sYBTnD1ZaHHcKKXp5sAbRMG88RATjDJuf_YM__Cxg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B32494C4-1D21-4578-8131-5E291B25AFDA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTLD_GLOBAL question<br>
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-04 06:40:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="16433.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16433.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16428.php">Howard Pritchard: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2014-12-04 17:29 GMT+06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Dec 3, 2014, at 11:35 PM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff, I must admit that I don't completely understand how your fix work.
</span><br>
<span class="quotelev1">&gt; Can you explan me why this veriant was failing:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CPPFLAGS=&quot;-I$srcdir/opal/libltdl/&quot;
</span><br>
<span class="quotelev2">&gt; &gt; AC_EGREP_HEADER([lt_dladvise_init], [$srcdir/opal/libltdl/ltdl.h]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; while the new one:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CPPFLAGS=&quot;-I$srcdir -I$srcdir/opal/libltdl/&quot;
</span><br>
<span class="quotelev2">&gt; &gt; AC_EGREP_HEADER([lt_dladvise_init], [opal/libltdl/ltdl.h],
</span><br>
<span class="quotelev2">&gt; &gt;                          [OPAL_HAVE_LTDL_ADVISE=1])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; works well?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there additional header files that are included in conftest.c and has
</span><br>
<span class="quotelev1">&gt; to be reached through $srcdir?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, it was simpler than that: &quot;.&quot; (i.e., $srcdir in a non-VPATH build) is
</span><br>
<span class="quotelev1">&gt; not necessarily in the default include search path for &lt;&gt; files (which is
</span><br>
<span class="quotelev1">&gt; what AC_EGREP_HEADER uses).  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [3:24] savbu-usnic-a:~/g/ompi (topic/master-libfabric&#226;&#151;&#143;)
</span><br>
<span class="quotelev1">&gt; $ cat test.c
</span><br>
<span class="quotelev1">&gt; #include &lt;./opal/libltdl/ltdl.h&gt;
</span><br>
<span class="quotelev1">&gt; [3:24] savbu-usnic-a:~/g/ompi (topic/master-libfabric&#226;&#151;&#143;)
</span><br>
<span class="quotelev1">&gt; $ gcc -E test.c &gt; /dev/null
</span><br>
<span class="quotelev1">&gt; test.c:1:33: fatal error: ./opal/libltdl/ltdl.h: No such file or directory
</span><br>
<span class="quotelev1">&gt;  #include &lt;./opal/libltdl/ltdl.h&gt;
</span><br>
<span class="quotelev1">&gt;                                  ^
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice that if I don't have -I. (i.e., -I$srcdir), the above compilation
</span><br>
<span class="quotelev1">&gt; fails because it can't find &lt;./opal/libltdl/ltdl.h&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if I add -I., then the file can be found:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [3:24] savbu-usnic-a:~/g/ompi (topic/master-libfabric&#226;&#151;&#143;)
</span><br>
<span class="quotelev1">&gt; $ gcc -E test.c -I. &gt; /dev/null
</span><br>
<span class="quotelev1">&gt; [3:25] savbu-usnic-a:~/g/ompi (topic/master-libfabric&#226;&#151;&#143;)
</span><br>
<span class="quotelev1">&gt; $ echo $status
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And since we're -I$srcdir, there's no need to include $srcdir in the
</span><br>
<span class="quotelev1">&gt; filename.  Indeed, if $srcdir==., then adding it in the filename is
</span><br>
<span class="quotelev1">&gt; harmless.  But if $srcdir=/path/to/somewhere, it's actually a problem.
</span><br>
<span class="quotelev1">&gt; Regardless, $srcdir should no longer be in the filename.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The part I forgot was that your version of libtool also requires some sub
</span><br>
<span class="quotelev1">&gt; header files in the $srcdir/opal/libltdl tree, so a -I for that also needs
</span><br>
<span class="quotelev1">&gt; to be there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes. Thank you!
<br>
<p><p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16433.php">http://www.open-mpi.org/community/lists/devel/2014/12/16433.php</a>
</span><br>
<p><p><p><p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="16433.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16433.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16428.php">Howard Pritchard: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
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
