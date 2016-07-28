<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 21:59:05 2011" -->
<!-- isoreceived="20110520015905" -->
<!-- sent="Thu, 19 May 2011 21:58:58 -0400" -->
<!-- isosent="20110520015858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="96B36423-3253-440A-B9FA-1C52AB078FD6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ED9C7710-80EA-4613-B271-A09F30446832_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4rc2 is up<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 21:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9276.php">George Bosilca: "Re: [OMPI devel] IO forwarding"</a>
<li><strong>Previous message:</strong> <a href="9274.php">Jeff Squyres: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>In reply to:</strong> <a href="9262.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9278.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9278.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With all the outputs from Paul and Sam, I think we'll be good.
<br>
<p>...hmmm.  Wait.  I see that our 1.4.x configure *is* patched to have the extra &quot;.&quot;.  Here's the lines from configure in 1.4.3 and 1.4.4rc2:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Portland Group C++ compiler                                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case `$CC -V` in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*pgCC\ [1-5].* | *pgcpp\ [1-5].*)
<br>
<p>It's not in the .m4 file because we patch configure *after* the m4 file is used to generate configure (Don't ask -- it's a long, twisted story).
<br>
<p>Can you say what the original problem was that eventually led you to this patch?
<br>
<p><p><p>On May 18, 2011, at 2:08 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this guaranteed to work for all versions of the PGI compiler?  I.e., does &quot;pgCC -V&quot; always return something in the form of (digit)+\. ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know, but I think so.  See your Nov 2009 discussion of this bug and Ralf Wildenhues' libtool.m4 patches at <a href="http://www.open-mpi.org/community/lists/users/2009/11/11277.php">http://www.open-mpi.org/community/lists/users/2009/11/11277.php</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 18 May 2011, at 5:50 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (adding libtool-patches_at_[hidden])
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this guaranteed to work for all versions of the PGI compiler?  I.e., does &quot;pgCC -V&quot; always return something in the form of (digit)+\. ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 17, 2011, at 8:52 PM, Larry Baker wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This bug applies to OpenMPI 1.4.x and 1.5.x.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The libtool.m4 in config and opal/libltdl/m4 do not properly determine the version of the PGI compiler, which then set the wrong compile/link options.  They interpret V11.4 (version no. begins with a 1), for example, as being a V1 to V5 compiler.  There is a missing period in the pattern, so that only text like 1.x through 5.x matches.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the diff -u from OpenMPI 1.4.3 (same code, same bug):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# diff -u config/libtool.m4{.original,}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- config/libtool.m4.original	2010-10-05 15:45:44.000000000 -0700
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ config/libtool.m4	2011-05-17 15:32:31.000000000 -0700
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -5896,7 +5896,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          pgCC* | pgcpp*)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            # Portland Group C++ compiler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	    case `$CC -V` in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -	    *pgCC\ [[1-5]]* | *pgcpp\ [[1-5]]*)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	    *pgCC\ [[1-5]].* | *pgcpp\ [[1-5]].*)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	      _LT_TAGVAR(prelink_cmds, $1)='tpldir=Template.dir~
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 		rm -rf $tpldir~
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 		$CC --prelink_objects --instantiation_dir $tpldir $objs $libobjs $compile_deplibs~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev3">&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev3">&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fixed the ROMIO attribute problem properly this time -- it's in the usual place:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9276.php">George Bosilca: "Re: [OMPI devel] IO forwarding"</a>
<li><strong>Previous message:</strong> <a href="9274.php">Jeff Squyres: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>In reply to:</strong> <a href="9262.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9278.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9278.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
