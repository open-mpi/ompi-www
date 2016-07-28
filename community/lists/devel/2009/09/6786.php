<?
$subject_val = "Re: [OMPI devel] suffix flag problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 23:54:16 2009" -->
<!-- isoreceived="20090905035416" -->
<!-- sent="Sat, 5 Sep 2009 06:42:45 +0300" -->
<!-- isosent="20090905034245" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] suffix flag problems" -->
<!-- id="95781F4D-A415-4CB2-8C77-F87D60457CBF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AA1C67E.60001_at_lbl.gov" -->
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
<strong>Date:</strong> 2009-09-04 23:42:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6787.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6785.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>In reply to:</strong> <a href="6785.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good call; done.  Thanks!
<br>
<p>On Sep 5, 2009, at 5:01 AM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Excellent suggestion; thanks Paul!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are welcome.  My presence on the ompi-devel list isn't totally
</span><br>
<span class="quotelev1">&gt; passive. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've incorporated this into OMPI -- Paul, can you confirm that I
</span><br>
<span class="quotelev2">&gt; &gt; obeyed the license requirements properly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IANAL, but looks all proper to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; May I suggest that &quot;Portions of this file derived from GASNet v1.12&quot;
</span><br>
<span class="quotelev1">&gt; might be clarified to indicate what portion(s).  Otherwise projects  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; &quot;derive&quot; from OMPI's configure might be expected to acknowledge GASNet
</span><br>
<span class="quotelev1">&gt; simply because they cannot distinguish the origin of whatever they
</span><br>
<span class="quotelev1">&gt; borrow from OMPI.  [discussion of viral license terms omitted].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="https://svn.open-mpi.org/trac/ompi/changeset/21943">https://svn.open-mpi.org/trac/ompi/changeset/21943</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 4, 2009, at 9:01 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On Sep 4, 2009, at 7:13 AM, David Robertson wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Perhaps it should be taken out of the help message in the  
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; script then.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; We can't; it's part of the built-in Autoconf options.  :-(
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On can't disable the option, but one can prevent confusing the  
</span><br>
<span class="quotelev1">&gt; user by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (partially) igonoring it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In GASNet we dealt with this problem by detecting that the prefix,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; suffix or transform options had been given and generate an error  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev3">&gt; &gt;&gt; telling the user:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       This configure script does not support --program-prefix,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --program-suffix or --program-transform-name.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Users are recommended to instead use --prefix with a unique
</span><br>
<span class="quotelev3">&gt; &gt;&gt; directory and make symbolic links as desired for renaming.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; GASNet is BSD licensed and available at
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://gasnet.cs.berkeley.edu/#download">http://gasnet.cs.berkeley.edu/#download</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The autoconf macro in question is GASNET_FORBID_PROGRAM_TRANSFORM  
</span><br>
<span class="quotelev1">&gt; and is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; located in acinclude.m4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lawrence Berkeley National Laboratory
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
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6787.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6785.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>In reply to:</strong> <a href="6785.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
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
