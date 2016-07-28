<?
$subject_val = "Re: [OMPI devel] [OMPI users] Debug info on Darwin";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 10:13:35 2010" -->
<!-- isoreceived="20100715141335" -->
<!-- sent="Thu, 15 Jul 2010 10:14:01 -0400" -->
<!-- isosent="20100715141401" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Debug info on Darwin" -->
<!-- id="980CF6A1-8184-470B-B056-EC90B6911E36_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C105F48.6050803_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Debug info on Darwin<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 10:14:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8187.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8087.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8218.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="8218.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Resurrecting this orphaned discussion...
<br>
<p>Peter: so what exactly do you need?  -gstabs or -gstabs+ when compiling these files on Darwin?  (or, more specifically, whenever the back-end compiler supports one/both of these flags)
<br>
<p><p>On Jun 9, 2010, at 11:43 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 4, 2010, at 5:02 PM, Peter Thompson wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It was suggested by our CTO that if these files were compiled as to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; produce STABS debug info, rather than DWARF, then the debug info would
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be copied into the executables and shared libraries, and we would then
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be able to debug with Open MPI without a problem.   I'm not sure if this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is the best place to offer that suggestion, but I imagine it's not a bad
</span><br>
<span class="quotelev3">&gt; &gt;&gt; place to start.  ;-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Having just moved this to the &quot;devel&quot; list...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't think we'd mind doing what you propose if it's not too icky.  These files are explicitly there for debuggers like TV, after all. 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So how do we do that?  (I don't know anything about STABS or DWARF)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Extracted from &quot;man gcc&quot; on  Darwin host:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        -gstabs
</span><br>
<span class="quotelev1">&gt;            Produce debugging information in stabs format (if that is
</span><br>
<span class="quotelev1">&gt; supported), without GDB
</span><br>
<span class="quotelev1">&gt;            extensions.  This is the format used by DBX on most BSD
</span><br>
<span class="quotelev1">&gt; systems.  On MIPS, Alpha and
</span><br>
<span class="quotelev1">&gt;            System V Release 4 systems this option produces stabs
</span><br>
<span class="quotelev1">&gt; debugging output which is not
</span><br>
<span class="quotelev1">&gt;            understood by DBX or SDB.  On System V Release 4 systems this
</span><br>
<span class="quotelev1">&gt; option requires the GNU
</span><br>
<span class="quotelev1">&gt;            assembler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        -gstabs+
</span><br>
<span class="quotelev1">&gt;            Produce debugging information in stabs format (if that is
</span><br>
<span class="quotelev1">&gt; supported), using GNU
</span><br>
<span class="quotelev1">&gt;            extensions understood only by the GNU debugger (GDB).  The
</span><br>
<span class="quotelev1">&gt; use of these extensions is
</span><br>
<span class="quotelev1">&gt;            likely to make other debuggers crash or refuse to read the
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8187.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8087.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8218.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="8218.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
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
