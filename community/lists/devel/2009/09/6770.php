<?
$subject_val = "Re: [OMPI devel] Failed datatype test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 09:37:51 2009" -->
<!-- isoreceived="20090904133751" -->
<!-- sent="Fri, 4 Sep 2009 07:37:36 -0600" -->
<!-- isosent="20090904133736" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Failed datatype test" -->
<!-- id="ED53B06A-12BB-4677-817E-5EAB9151C573_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="29B25014-E8A4-4048-AD41-07FD8FA62314_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 09:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6771.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6769.php">Ralph Castain: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>In reply to:</strong> <a href="6769.php">Ralph Castain: "Re: [OMPI devel] Failed datatype test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>Reply:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correcting my own statement here: it was bombing on the IU machines  
<br>
that generate the nightly tarball, hence the error reports. I removed  
<br>
it because our automated systems were unable to generate nightly  
<br>
tarballs until it was removed.
<br>
<p>It also bombed on my Mac when I tried to test it manually.
<br>
<p>Sorry for mis-speak.
<br>
<p><p>On Sep 4, 2009, at 7:32 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Before or after I removed the test? If you look at the MTT reports,  
</span><br>
<span class="quotelev1">&gt; you'll find that opal_datatype_test  bombed on almost every system  
</span><br>
<span class="quotelev1">&gt; with an assert failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 3, 2009, at 9:53 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I get a bunch of valid-looking compiler warnings when running  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;make check&quot; in the test/datatype directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2009, at 7:42 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A recent commit to the trunk is apparently causing &quot;make check&quot; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail due to an assertion failure in an opal datatype test. I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; turned this test &quot;off&quot; until someone can fix it as it is preventing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the creation of a tarball.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could someone knowledgeable in the datatype changes over the last  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; few
</span><br>
<span class="quotelev3">&gt;&gt;&gt; weeks/months please fix this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6771.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6769.php">Ralph Castain: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>In reply to:</strong> <a href="6769.php">Ralph Castain: "Re: [OMPI devel] Failed datatype test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>Reply:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
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
