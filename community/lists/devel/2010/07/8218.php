<?
$subject_val = "Re: [OMPI devel] [OMPI users] Debug info on Darwin";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 25 07:53:02 2010" -->
<!-- isoreceived="20100725115302" -->
<!-- sent="Sun, 25 Jul 2010 05:52:52 -0600" -->
<!-- isosent="20100725115252" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Debug info on Darwin" -->
<!-- id="558D8A9F-6497-40B2-902B-6727B5E1ABF4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="980CF6A1-8184-470B-B056-EC90B6911E36_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-25 07:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8219.php">Sylvain Jeaugey: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Previous message:</strong> <a href="8217.php">Jeff Squyres: "[OMPI devel] 1.5rc4 is posted"</a>
<li><strong>In reply to:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8221.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="8221.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak for totalview, but as a developer on Darwin, adding -gstabs+ enables the clean use of gdb and would help immensely!
<br>
<p><p>On Jul 15, 2010, at 8:14 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Resurrecting this orphaned discussion...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Peter: so what exactly do you need?  -gstabs or -gstabs+ when compiling these files on Darwin?  (or, more specifically, whenever the back-end compiler supports one/both of these flags)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2010, at 11:43 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 4, 2010, at 5:02 PM, Peter Thompson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It was suggested by our CTO that if these files were compiled as to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; produce STABS debug info, rather than DWARF, then the debug info would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be copied into the executables and shared libraries, and we would then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be able to debug with Open MPI without a problem.   I'm not sure if this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is the best place to offer that suggestion, but I imagine it's not a bad
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; place to start.  ;-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Having just moved this to the &quot;devel&quot; list...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think we'd mind doing what you propose if it's not too icky.  These files are explicitly there for debuggers like TV, after all. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So how do we do that?  (I don't know anything about STABS or DWARF)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Extracted from &quot;man gcc&quot; on  Darwin host:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       -gstabs
</span><br>
<span class="quotelev2">&gt;&gt;           Produce debugging information in stabs format (if that is
</span><br>
<span class="quotelev2">&gt;&gt; supported), without GDB
</span><br>
<span class="quotelev2">&gt;&gt;           extensions.  This is the format used by DBX on most BSD
</span><br>
<span class="quotelev2">&gt;&gt; systems.  On MIPS, Alpha and
</span><br>
<span class="quotelev2">&gt;&gt;           System V Release 4 systems this option produces stabs
</span><br>
<span class="quotelev2">&gt;&gt; debugging output which is not
</span><br>
<span class="quotelev2">&gt;&gt;           understood by DBX or SDB.  On System V Release 4 systems this
</span><br>
<span class="quotelev2">&gt;&gt; option requires the GNU
</span><br>
<span class="quotelev2">&gt;&gt;           assembler.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       -gstabs+
</span><br>
<span class="quotelev2">&gt;&gt;           Produce debugging information in stabs format (if that is
</span><br>
<span class="quotelev2">&gt;&gt; supported), using GNU
</span><br>
<span class="quotelev2">&gt;&gt;           extensions understood only by the GNU debugger (GDB).  The
</span><br>
<span class="quotelev2">&gt;&gt; use of these extensions is
</span><br>
<span class="quotelev2">&gt;&gt;           likely to make other debuggers crash or refuse to read the
</span><br>
<span class="quotelev2">&gt;&gt; program.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8219.php">Sylvain Jeaugey: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Previous message:</strong> <a href="8217.php">Jeff Squyres: "[OMPI devel] 1.5rc4 is posted"</a>
<li><strong>In reply to:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8221.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="8221.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
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
