<?
$subject_val = "Re: [OMPI devel] suffix flag problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 22:01:46 2009" -->
<!-- isoreceived="20090905020146" -->
<!-- sent="Fri, 04 Sep 2009 19:01:34 -0700" -->
<!-- isosent="20090905020134" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] suffix flag problems" -->
<!-- id="4AA1C67E.60001_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DA999388-ECEC-41D8-95D2-56BA0AEE40C4_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 22:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6786.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6784.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>In reply to:</strong> <a href="6784.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6786.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6786.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Excellent suggestion; thanks Paul!
</span><br>
<p>You are welcome.  My presence on the ompi-devel list isn't totally 
<br>
passive. :-)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've incorporated this into OMPI -- Paul, can you confirm that I 
</span><br>
<span class="quotelev1">&gt; obeyed the license requirements properly?
</span><br>
<p>IANAL, but looks all proper to me.
<br>
<p>May I suggest that &quot;Portions of this file derived from GASNet v1.12&quot; 
<br>
might be clarified to indicate what portion(s).  Otherwise projects that 
<br>
&quot;derive&quot; from OMPI's configure might be expected to acknowledge GASNet 
<br>
simply because they cannot distinguish the origin of whatever they 
<br>
borrow from OMPI.  [discussion of viral license terms omitted].
<br>
<p>-Paul
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/changeset/21943">https://svn.open-mpi.org/trac/ompi/changeset/21943</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2009, at 9:01 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Sep 4, 2009, at 7:13 AM, David Robertson wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Perhaps it should be taken out of the help message in the configure
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; script then.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; We can't; it's part of the built-in Autoconf options.  :-(
</span><br>
<span class="quotelev2">&gt;&gt; On can't disable the option, but one can prevent confusing the user by
</span><br>
<span class="quotelev2">&gt;&gt; (partially) igonoring it.
</span><br>
<span class="quotelev2">&gt;&gt; In GASNet we dealt with this problem by detecting that the prefix,
</span><br>
<span class="quotelev2">&gt;&gt; suffix or transform options had been given and generate an error message
</span><br>
<span class="quotelev2">&gt;&gt; telling the user:
</span><br>
<span class="quotelev2">&gt;&gt;       This configure script does not support --program-prefix,
</span><br>
<span class="quotelev2">&gt;&gt; --program-suffix or --program-transform-name.
</span><br>
<span class="quotelev2">&gt;&gt;       Users are recommended to instead use --prefix with a unique
</span><br>
<span class="quotelev2">&gt;&gt; directory and make symbolic links as desired for renaming.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GASNet is BSD licensed and available at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gasnet.cs.berkeley.edu/#download">http://gasnet.cs.berkeley.edu/#download</a>
</span><br>
<span class="quotelev2">&gt;&gt; The autoconf macro in question is GASNET_FORBID_PROGRAM_TRANSFORM and is
</span><br>
<span class="quotelev2">&gt;&gt; located in acinclude.m4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6786.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6784.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>In reply to:</strong> <a href="6784.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6786.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6786.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
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
