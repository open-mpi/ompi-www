<?
$subject_val = "Re: [OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 11:40:33 2008" -->
<!-- isoreceived="20080219164033" -->
<!-- sent="Tue, 19 Feb 2008 11:40:06 -0500" -->
<!-- isosent="20080219164006" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA ready?" -->
<!-- id="BC4AF822-5562-4BEE-8FBE-6709E58B8822_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="53d4221c0802190559i11e475adva66fe8b9acd209ce_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PLPA ready?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 11:40:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3263.php">Terry Dontje: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3261.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3261.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3263.php">Terry Dontje: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3263.php">Terry Dontje: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3266.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
$%@#$%  Sorry.
<br>
<p>I saw that and fixed it in my local OMPI SVN copy last night as well.  
<br>
Here's a patch to make it go (I obviously didn't want to commit this  
<br>
until the new PLPA goes in).  We *may* want to revise the paffinity  
<br>
API to match PLPA, not because Linux is the one-and-only-way, but  
<br>
because we actually took some effort in PLPA to make a fairly neutral  
<br>
API.
<br>
<p><p>On Feb 19, 2008, at 8:59 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The new PLPA fails in compilation. there is a need to change the
</span><br>
<span class="quotelev1">&gt; paffinity API's:
</span><br>
<span class="quotelev1">&gt; 1. max_processor_id with one parameter --&gt; get_processor_info with 2  
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt; 2. max_socket with one parameter --&gt; get_socket_info with 2  
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt; 3. max_core with 2 parameters --&gt; get_core_info with 3 parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I changed these API's internally in my copy of the trunk and tested
</span><br>
<span class="quotelev1">&gt; the new PLPA.
</span><br>
<span class="quotelev1">&gt; it works properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have an idea how to integrate the new PLPA with the new API's ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sharon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 19, 2008 4:31 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sharon/Lenny --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you try out the newest PLPA RC for me?  I think it's ready.  I
</span><br>
<span class="quotelev2">&gt;&gt; just posted rc4 to the web site (I posted that rc3 was available, and
</span><br>
<span class="quotelev2">&gt;&gt; then found a small bug that necessitated rc4): <a href="http://www.open-mpi.org/software/plpa/v1.1/">http://www.open-mpi.org/software/plpa/v1.1/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You should be able to do this to test it within an OMPI SVN checkout:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cd opal/mca/paffinity/linux
</span><br>
<span class="quotelev2">&gt;&gt; mv plpa bogus
</span><br>
<span class="quotelev2">&gt;&gt; tar zxf plpa-1.1rc4.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; ln -s plpa-1.1rc4 plpa
</span><br>
<span class="quotelev2">&gt;&gt; cd ../../../..
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen &amp;&amp; ./configure ...... &amp;&amp; make -j 4 ......
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if it works for you properly (configure, build, and
</span><br>
<span class="quotelev2">&gt;&gt; function).  If so, I think it's ready for release.  I'll then do the
</span><br>
<span class="quotelev2">&gt;&gt; SVN magic to bring it to the OMPI trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
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
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3262/linux-paffinity.patch">linux-paffinity.patch</a>
</ul>
<!-- attachment="linux-paffinity.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3263.php">Terry Dontje: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3261.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3261.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3263.php">Terry Dontje: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3263.php">Terry Dontje: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3266.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
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
