<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 14:08:09 2011" -->
<!-- isoreceived="20110518180809" -->
<!-- sent="Wed, 18 May 2011 11:08:03 -0700" -->
<!-- isosent="20110518180803" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="ED9C7710-80EA-4613-B271-A09F30446832_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F5FCADB9-10F9-4A08-B693-330F6C98A937_at_cisco.com" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-18 14:08:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9263.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9275.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9275.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p><span class="quotelev1">&gt; Is this guaranteed to work for all versions of the PGI compiler?   
</span><br>
<span class="quotelev1">&gt; I.e., does &quot;pgCC -V&quot; always return something in the form of (digit)+ 
</span><br>
<span class="quotelev1">&gt; \. ?
</span><br>
<p>I don't know, but I think so.  See your Nov 2009 discussion of this  
<br>
bug and Ralf Wildenhues' libtool.m4 patches at <a href="http://www.open-mpi.org/community/lists/users/2009/11/11277.php">http://www.open-mpi.org/community/lists/users/2009/11/11277.php</a> 
<br>
.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 18 May 2011, at 5:50 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; (adding libtool-patches_at_[hidden])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this guaranteed to work for all versions of the PGI compiler?   
</span><br>
<span class="quotelev1">&gt; I.e., does &quot;pgCC -V&quot; always return something in the form of (digit)+ 
</span><br>
<span class="quotelev1">&gt; \. ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 17, 2011, at 8:52 PM, Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This bug applies to OpenMPI 1.4.x and 1.5.x.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The libtool.m4 in config and opal/libltdl/m4 do not properly  
</span><br>
<span class="quotelev2">&gt;&gt; determine the version of the PGI compiler, which then set the wrong  
</span><br>
<span class="quotelev2">&gt;&gt; compile/link options.  They interpret V11.4 (version no. begins  
</span><br>
<span class="quotelev2">&gt;&gt; with a 1), for example, as being a V1 to V5 compiler.  There is a  
</span><br>
<span class="quotelev2">&gt;&gt; missing period in the pattern, so that only text like 1.x through  
</span><br>
<span class="quotelev2">&gt;&gt; 5.x matches.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the diff -u from OpenMPI 1.4.3 (same code, same bug):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# diff -u config/libtool.m4{.original,}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- config/libtool.m4.original	2010-10-05 15:45:44.000000000 -0700
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ config/libtool.m4	2011-05-17 15:32:31.000000000 -0700
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -5896,7 +5896,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           pgCC* | pgcpp*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             # Portland Group C++ compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    case `$CC -V` in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -	    *pgCC\ [[1-5]]* | *pgcpp\ [[1-5]]*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	    *pgCC\ [[1-5]].* | *pgcpp\ [[1-5]].*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	      _LT_TAGVAR(prelink_cmds, $1)='tpldir=Template.dir~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		rm -rf $tpldir~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		$CC --prelink_objects --instantiation_dir $tpldir $objs $libobjs  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $compile_deplibs~
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fixed the ROMIO attribute problem properly this time -- it's in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the usual place:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9263.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9275.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9275.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
