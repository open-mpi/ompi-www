<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 17 20:52:38 2011" -->
<!-- isoreceived="20110518005238" -->
<!-- sent="Tue, 17 May 2011 17:52:33 -0700" -->
<!-- isosent="20110518005233" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="44F4A894-CF7E-4ED8-BE7B-3C7AF33413F0_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CB6264CC-7C21-486E-9FF9-C0C6E8159B17_at_cisco.com" -->
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
<strong>Date:</strong> 2011-05-17 20:52:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9259.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9257.php">Ken Lloyd: "Re: [OMPI devel] Multiple Memory Pools"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This bug applies to OpenMPI 1.4.x and 1.5.x.
<br>
<p>The libtool.m4 in config and opal/libltdl/m4 do not properly determine  
<br>
the version of the PGI compiler, which then set the wrong compile/link  
<br>
options.  They interpret V11.4 (version no. begins with a 1), for  
<br>
example, as being a V1 to V5 compiler.  There is a missing period in  
<br>
the pattern, so that only text like 1.x through 5.x matches.
<br>
<p>Here's the diff -u from OpenMPI 1.4.3 (same code, same bug):
<br>
<p><span class="quotelev1">&gt; [root_at_hydra openmpi-1.4.3]# diff -u config/libtool.m4{.original,}
</span><br>
<span class="quotelev1">&gt; --- config/libtool.m4.original	2010-10-05 15:45:44.000000000 -0700
</span><br>
<span class="quotelev1">&gt; +++ config/libtool.m4	2011-05-17 15:32:31.000000000 -0700
</span><br>
<span class="quotelev1">&gt; @@ -5896,7 +5896,7 @@
</span><br>
<span class="quotelev1">&gt;            pgCC* | pgcpp*)
</span><br>
<span class="quotelev1">&gt;              # Portland Group C++ compiler
</span><br>
<span class="quotelev1">&gt;  	    case `$CC -V` in
</span><br>
<span class="quotelev1">&gt; -	    *pgCC\ [[1-5]]* | *pgcpp\ [[1-5]]*)
</span><br>
<span class="quotelev1">&gt; +	    *pgCC\ [[1-5]].* | *pgcpp\ [[1-5]].*)
</span><br>
<span class="quotelev1">&gt;  	      _LT_TAGVAR(prelink_cmds, $1)='tpldir=Template.dir~
</span><br>
<span class="quotelev1">&gt;  		rm -rf $tpldir~
</span><br>
<span class="quotelev1">&gt;  		$CC --prelink_objects --instantiation_dir $tpldir $objs $libobjs  
</span><br>
<span class="quotelev1">&gt; $compile_deplibs~
</span><br>
<p><p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Fixed the ROMIO attribute problem properly this time -- it's in the  
</span><br>
<span class="quotelev1">&gt; usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9258/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9259.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9257.php">Ken Lloyd: "Re: [OMPI devel] Multiple Memory Pools"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
