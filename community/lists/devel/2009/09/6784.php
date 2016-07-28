<?
$subject_val = "Re: [OMPI devel] suffix flag problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 21:47:19 2009" -->
<!-- isoreceived="20090905014719" -->
<!-- sent="Sat, 5 Sep 2009 04:47:13 +0300" -->
<!-- isosent="20090905014713" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] suffix flag problems" -->
<!-- id="DA999388-ECEC-41D8-95D2-56BA0AEE40C4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AA155E8.7080309_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] suffix flag problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 21:47:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6785.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>In reply to:</strong> <a href="6781.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6785.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6785.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent suggestion; thanks Paul!
<br>
<p>I've incorporated this into OMPI -- Paul, can you confirm that I  
<br>
obeyed the license requirements properly?
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/21943">https://svn.open-mpi.org/trac/ompi/changeset/21943</a>
<br>
<p><p>On Sep 4, 2009, at 9:01 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 4, 2009, at 7:13 AM, David Robertson wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Perhaps it should be taken out of the help message in the configure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; script then.
</span><br>
<span class="quotelev2">&gt; &gt; We can't; it's part of the built-in Autoconf options.  :-(
</span><br>
<span class="quotelev1">&gt; On can't disable the option, but one can prevent confusing the user by
</span><br>
<span class="quotelev1">&gt; (partially) igonoring it.
</span><br>
<span class="quotelev1">&gt; In GASNet we dealt with this problem by detecting that the prefix,
</span><br>
<span class="quotelev1">&gt; suffix or transform options had been given and generate an error  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; telling the user:
</span><br>
<span class="quotelev1">&gt;       This configure script does not support --program-prefix,
</span><br>
<span class="quotelev1">&gt; --program-suffix or --program-transform-name.
</span><br>
<span class="quotelev1">&gt;       Users are recommended to instead use --prefix with a unique
</span><br>
<span class="quotelev1">&gt; directory and make symbolic links as desired for renaming.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GASNet is BSD licensed and available at
</span><br>
<span class="quotelev1">&gt; <a href="http://gasnet.cs.berkeley.edu/#download">http://gasnet.cs.berkeley.edu/#download</a>
</span><br>
<span class="quotelev1">&gt; The autoconf macro in question is GASNET_FORBID_PROGRAM_TRANSFORM  
</span><br>
<span class="quotelev1">&gt; and is
</span><br>
<span class="quotelev1">&gt; located in acinclude.m4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory
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
<li><strong>Next message:</strong> <a href="6785.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>In reply to:</strong> <a href="6781.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6785.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6785.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
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
