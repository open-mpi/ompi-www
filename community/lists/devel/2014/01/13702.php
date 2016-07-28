<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 10:49:08 2014" -->
<!-- isoreceived="20140110154908" -->
<!-- sent="Fri, 10 Jan 2014 15:49:06 +0000" -->
<!-- isosent="20140110154906" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure" -->
<!-- id="500CA1BA-E60F-4B97-A5E7-F079055121D6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16yqJp+q-68MQ_v7WK-H4MkLEtm5bXzK6kOzs6fnyPAaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 10:49:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13703.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc"</a>
<li><strong>In reply to:</strong> <a href="13651.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13711.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13711.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>The output from configure looks ok to me.  We're testing for the various capabilities of the fortran compiler that we need, most of which have been around for quite a while.  One Big New Thing that isn't around yet is the type(*), dimension(..) notation, which no fortran compiler supports yet.  But *most* of the other new MPI-3 Fortran behavior has been around since F2003 (maybe earlier? I'm no expert).  (I glossed over a few details here, but you get the point)  
<br>
<p>Hence, it's not entirely surprising to me that we're determining that an &quot;old&quot; compiler is ok to build the mpi_f08 module.
<br>
<p>Can you send the output from what happens when you try to build?  (or did I miss that in another post?)
<br>
<p><p>On Jan 9, 2014, at 7:35 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My attempts to build the current 1.7.4rc tarball with versions 8.0 and 9.0 of the Portland Group compilers fails miserably on compilation of mpi-f08-types.F90.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am sort of surprised by the attempt to build Fortran 2008 support w/ such old compilers.
</span><br>
<span class="quotelev1">&gt; I think that fact itself is the real bug here, right? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With pgi-10.0 I see configure say:
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But pgi-8.0 and 9.0 both get identified as &quot;good&quot; compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pgi-9.0:
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports BIND(C)... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports BIND(C) with LOGICAL params... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports optional arguments... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports private... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports abstract... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports asynchronous... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports procedure... no
</span><br>
<span class="quotelev1">&gt; checking size of Fortran type(test_mpi_handle)... 4
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler F08 assumed rank syntax... not cached; checking
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(..)... no
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler F08 assumed rank syntax... no
</span><br>
<span class="quotelev1">&gt; checking which mpi_f08 implementation to build... &quot;good&quot; compiler, no array subsections
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Temporary development override: forcing the use of F08 wrappers
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pgi-8.0 (almost, but not quite, the same):
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports BIND(C)... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports BIND(C) with LOGICAL params... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports optional arguments... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports private... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports abstract... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports asynchronous... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports procedure... no
</span><br>
<span class="quotelev1">&gt; checking size of Fortran type(test_mpi_handle)... 4
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler F08 assumed rank syntax... not cached; checking
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(..)... no
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler F08 assumed rank syntax... no
</span><br>
<span class="quotelev1">&gt; checking which mpi_f08 implementation to build... &quot;good&quot; compiler, no array subsections
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Temporary development override: forcing the use of F08 wrappers
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The bzip2-compressed config.log files for pgi-8.0 and 9.0 are attached.
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
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.7-latest-linux-x86_64-pgi-9.0-config.log.bz2&gt;&lt;openmpi-1.7-latest-linux-x86_64-pgi-8.0-config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13703.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc"</a>
<li><strong>In reply to:</strong> <a href="13651.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13711.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13711.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
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
