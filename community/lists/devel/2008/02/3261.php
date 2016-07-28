<?
$subject_val = "Re: [OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 09:00:02 2008" -->
<!-- isoreceived="20080219140002" -->
<!-- sent="Tue, 19 Feb 2008 15:59:51 +0200" -->
<!-- isosent="20080219135951" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm135_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA ready?" -->
<!-- id="53d4221c0802190559i11e475adva66fe8b9acd209ce_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="124DBC92-A6B7-48C7-8B29-4DCEC52DC4D6_at_cisco.com" -->
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
<strong>From:</strong> Sharon Melamed (<em>sharonm135_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 08:59:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3262.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3260.php">Jeff Squyres: "[OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3260.php">Jeff Squyres: "[OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3262.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3262.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>The new PLPA fails in compilation. there is a need to change the
<br>
paffinity API's:
<br>
1. max_processor_id with one parameter --&gt; get_processor_info with 2 parameters.
<br>
2. max_socket with one parameter --&gt; get_socket_info with 2 parameters.
<br>
3. max_core with 2 parameters --&gt; get_core_info with 3 parameters.
<br>
<p>I changed these API's internally in my copy of the trunk and tested
<br>
the new PLPA.
<br>
it works properly.
<br>
<p>Do you have an idea how to integrate the new PLPA with the new API's ?
<br>
<p>Sharon.
<br>
<p><p><p>On Feb 19, 2008 4:31 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sharon/Lenny --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try out the newest PLPA RC for me?  I think it's ready.  I
</span><br>
<span class="quotelev1">&gt; just posted rc4 to the web site (I posted that rc3 was available, and
</span><br>
<span class="quotelev1">&gt; then found a small bug that necessitated rc4): <a href="http://www.open-mpi.org/software/plpa/v1.1/">http://www.open-mpi.org/software/plpa/v1.1/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should be able to do this to test it within an OMPI SVN checkout:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd opal/mca/paffinity/linux
</span><br>
<span class="quotelev1">&gt; mv plpa bogus
</span><br>
<span class="quotelev1">&gt; tar zxf plpa-1.1rc4.tar.gz
</span><br>
<span class="quotelev1">&gt; ln -s plpa-1.1rc4 plpa
</span><br>
<span class="quotelev1">&gt; cd ../../../..
</span><br>
<span class="quotelev1">&gt; ./autogen &amp;&amp; ./configure ...... &amp;&amp; make -j 4 ......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if it works for you properly (configure, build, and
</span><br>
<span class="quotelev1">&gt; function).  If so, I think it's ready for release.  I'll then do the
</span><br>
<span class="quotelev1">&gt; SVN magic to bring it to the OMPI trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3262.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3260.php">Jeff Squyres: "[OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3260.php">Jeff Squyres: "[OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3262.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3262.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
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
