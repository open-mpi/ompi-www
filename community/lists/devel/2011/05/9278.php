<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 22:29:24 2011" -->
<!-- isoreceived="20110520022924" -->
<!-- sent="Thu, 19 May 2011 19:29:19 -0700" -->
<!-- isosent="20110520022919" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="BA03DC4C-03D7-44E5-AC34-8FCB4E09D9A7_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="96B36423-3253-440A-B9FA-1C52AB078FD6_at_cisco.com" -->
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
<strong>Date:</strong> 2011-05-19 22:29:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9279.php">Edgar Gabriel: "[OMPI devel] problems compiling new ROMIO with PVFS2 support"</a>
<li><strong>Previous message:</strong> <a href="9277.php">Ralph Castain: "Re: [OMPI devel] IO forwarding"</a>
<li><strong>In reply to:</strong> <a href="9275.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9263.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I ran into some kind of link error, I think, with PGI 10.3 and OpenMPI  
<br>
1.4.2 last year.  I am building a new cluster and we have PGI 11.4  
<br>
now.  I am consulting my notes and patches from 1.4.2 to inspect 1.4.3  
<br>
to see if the problems I had have been fixed.  I found the .m4 files I  
<br>
patched in 1.4.2 were identical in 1.4.3, so I fixed them right off  
<br>
the bat.  I found the same was true for the detection of inline  
<br>
assembly with C++.  Other problems I had with PGI 10.3 have been fixed  
<br>
with PGI 11.4, but I patched them anyway so OpenMPI 1.4.3 will still  
<br>
compile cleanly on PGI 10.x.  (I haven't sent you all of those for  
<br>
1.4.3; I sent them last year for 1.4.2.)  Finally, I patch the shell  
<br>
scripts that generate the Fortran 90 interface routines to remove the  
<br>
spurious declarations (without implementations, of course) of  
<br>
Character and Logical MPI_SIZEOF() generics, convert dummy arrays to  
<br>
assumed-shape arrays, and substantially clean them up/shrink them.
<br>
<p>I have compiled and tested (make check) my patched OpenMPI 1.4.3 with  
<br>
Rocks 5.4 (CentOS 5.5) gcc version 4.1.2 20080704 (Red Hat 4.1.2-48)  
<br>
and PGI pgcc 11.4-0 64-bit target on x86-64 Linux -tp nehalem.  I have  
<br>
not been so successful yet with Intel icc Version 12.0.3.174 Build  
<br>
20110309.  I have yet to try AMD x86 Open64 GNU gcc version 4.2.0  
<br>
(Open64 4.2.5 driver) or whatever I get from PathScale when I transfer  
<br>
the license from our old cluster to the new one.
<br>
<p>After I get through OpenMPI 1.4.3, I should have time to test 1.4.4.   
<br>
Will there be another 1.4.4 release candidate?  Do I have to hurry to  
<br>
give you my feedback?
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 19 May 2011, at 6:58 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; With all the outputs from Paul and Sam, I think we'll be good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...hmmm.  Wait.  I see that our 1.4.x configure *is* patched to have  
</span><br>
<span class="quotelev1">&gt; the extra &quot;.&quot;.  Here's the lines from configure in 1.4.3 and 1.4.4rc2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            # Portland Group C++ compiler
</span><br>
<span class="quotelev1">&gt;            case `$CC -V` in
</span><br>
<span class="quotelev1">&gt;            *pgCC\ [1-5].* | *pgcpp\ [1-5].*)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not in the .m4 file because we patch configure *after* the m4  
</span><br>
<span class="quotelev1">&gt; file is used to generate configure (Don't ask -- it's a long,  
</span><br>
<span class="quotelev1">&gt; twisted story).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you say what the original problem was that eventually led you to  
</span><br>
<span class="quotelev1">&gt; this patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 18, 2011, at 2:08 PM, Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this guaranteed to work for all versions of the PGI compiler?   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e., does &quot;pgCC -V&quot; always return something in the form of (digit) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +\. ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know, but I think so.  See your Nov 2009 discussion of this  
</span><br>
<span class="quotelev2">&gt;&gt; bug and Ralf Wildenhues' libtool.m4 patches at <a href="http://www.open-mpi.org/community/lists/users/2009/11/11277.php">http://www.open-mpi.org/community/lists/users/2009/11/11277.php</a> 
</span><br>
<span class="quotelev2">&gt;&gt; .
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
<span class="quotelev2">&gt;&gt; On 18 May 2011, at 5:50 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (adding libtool-patches_at_[hidden])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this guaranteed to work for all versions of the PGI compiler?   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e., does &quot;pgCC -V&quot; always return something in the form of (digit) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +\. ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 17, 2011, at 8:52 PM, Larry Baker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This bug applies to OpenMPI 1.4.x and 1.5.x.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The libtool.m4 in config and opal/libltdl/m4 do not properly  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; determine the version of the PGI compiler, which then set the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrong compile/link options.  They interpret V11.4 (version no.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; begins with a 1), for example, as being a V1 to V5 compiler.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is a missing period in the pattern, so that only text like  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.x through 5.x matches.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's the diff -u from OpenMPI 1.4.3 (same code, same bug):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# diff -u config/libtool.m4{.original,}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- config/libtool.m4.original	2010-10-05 15:45:44.000000000 -0700
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ config/libtool.m4	2011-05-17 15:32:31.000000000 -0700
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -5896,7 +5896,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         pgCC* | pgcpp*)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           # Portland Group C++ compiler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	    case `$CC -V` in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -	    *pgCC\ [[1-5]]* | *pgcpp\ [[1-5]]*)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +	    *pgCC\ [[1-5]].* | *pgcpp\ [[1-5]].*)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	      _LT_TAGVAR(prelink_cmds, $1)='tpldir=Template.dir~
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 		rm -rf $tpldir~
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 		$CC --prelink_objects --instantiation_dir $tpldir $objs  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $libobjs $compile_deplibs~
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fixed the ROMIO attribute problem properly this time -- it's in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the usual place:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9279.php">Edgar Gabriel: "[OMPI devel] problems compiling new ROMIO with PVFS2 support"</a>
<li><strong>Previous message:</strong> <a href="9277.php">Ralph Castain: "Re: [OMPI devel] IO forwarding"</a>
<li><strong>In reply to:</strong> <a href="9275.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9263.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
