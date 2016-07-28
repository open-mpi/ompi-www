<?
$subject_val = "Re: [OMPI devel] Failed datatype test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 20:58:32 2009" -->
<!-- isoreceived="20090905005832" -->
<!-- sent="Sat, 5 Sep 2009 03:58:28 +0300" -->
<!-- isosent="20090905005828" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Failed datatype test" -->
<!-- id="CAEBD31C-16AA-4E0C-82CF-62E20790DF95_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ED53B06A-12BB-4677-817E-5EAB9151C573_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Failed datatype test<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 20:58:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6784.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6782.php">Ralph Castain: "Re: [OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<li><strong>In reply to:</strong> <a href="6770.php">Ralph Castain: "Re: [OMPI devel] Failed datatype test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry if I was not clear -- I was building the test/datatype directory  
<br>
manually with &quot;make check&quot; and seeing those warnings.
<br>
<p>So what I was trying to say was: no only was it bombing, it may have  
<br>
experienced other flavors of bit rot before then.
<br>
<p><p><p>On Sep 4, 2009, at 4:37 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Correcting my own statement here: it was bombing on the IU machines
</span><br>
<span class="quotelev1">&gt; that generate the nightly tarball, hence the error reports. I removed
</span><br>
<span class="quotelev1">&gt; it because our automated systems were unable to generate nightly
</span><br>
<span class="quotelev1">&gt; tarballs until it was removed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It also bombed on my Mac when I tried to test it manually.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for mis-speak.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2009, at 7:32 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Before or after I removed the test? If you look at the MTT reports,
</span><br>
<span class="quotelev2">&gt; &gt; you'll find that opal_datatype_test  bombed on almost every system
</span><br>
<span class="quotelev2">&gt; &gt; with an assert failure.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 3, 2009, at 9:53 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FWIW, I get a bunch of valid-looking compiler warnings when running
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;make check&quot; in the test/datatype directory.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 3, 2009, at 7:42 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; A recent commit to the trunk is apparently causing &quot;make check&quot; to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fail due to an assertion failure in an opal datatype test. I have
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; turned this test &quot;off&quot; until someone can fix it as it is  
</span><br>
<span class="quotelev1">&gt; preventing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the creation of a tarball.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Could someone knowledgeable in the datatype changes over the last
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; few
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; weeks/months please fix this?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6784.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6782.php">Ralph Castain: "Re: [OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<li><strong>In reply to:</strong> <a href="6770.php">Ralph Castain: "Re: [OMPI devel] Failed datatype test"</a>
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
