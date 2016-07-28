<?
$subject_val = "Re: [OMPI devel] openib Dynamic SL opensm-devel usage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 09:36:44 2012" -->
<!-- isoreceived="20120618133644" -->
<!-- sent="Mon, 18 Jun 2012 09:36:40 -0400" -->
<!-- isosent="20120618133640" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib Dynamic SL opensm-devel usage" -->
<!-- id="4FDF2EE8.9080603_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FDF0BD0.4060408_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib Dynamic SL opensm-devel usage<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 09:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11116.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11115.php">TERRY DONTJE: "[OMPI devel] openib Dynamic SL opensm-devel usage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nevermind the below post.  I was wrong about opensm-devel not existing 
<br>
on OL6.2.  However I still have the issue of dependency on libosmcomp.so 
<br>
that I would like to put into ompi_check_openib.m4.  Anyone against me 
<br>
putting a dependency on libosmcomp.so for btl_openib_connect_sl.o ?
<br>
<p>--td
<br>
<p>On 6/18/2012 7:06 AM, TERRY DONTJE wrote:
<br>
<span class="quotelev1">&gt; I've ran into an issue compiling openib's Dynamic SL support  on a RH 
</span><br>
<span class="quotelev1">&gt; 6.2 based system with the Oracle Studio compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Turns out if I compile btl_openib_connect_sl.c with the Oracle Studio 
</span><br>
<span class="quotelev1">&gt; compilers with the &quot;-g&quot; option the compiler compiles some static 
</span><br>
<span class="quotelev1">&gt; inline functions in ib_types.h standalone (as opposed to ignoring the 
</span><br>
<span class="quotelev1">&gt; functions since they are not called in the btl_openib_connect_sl.c 
</span><br>
<span class="quotelev1">&gt; source).  This creates a dependency on the symbol ib_error_str in 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_sl.o .  Note this symbol is defined in libosmcomp.so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is should btl_openib_connect_sl.c be linking to 
</span><br>
<span class="quotelev1">&gt; libosmcomp.so since btl_openib_connect_sl.c  is including ib_types.h 
</span><br>
<span class="quotelev1">&gt; or is there an assumption being made that btl_openib_connect_sl.c is 
</span><br>
<span class="quotelev1">&gt; just using macros/defines provided by the header and nothing requiring 
</span><br>
<span class="quotelev1">&gt; access to libosmcomp.so?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask this because I can make my original issue go away on RH 5.X 
</span><br>
<span class="quotelev1">&gt; systems if I link in libosmcomp.so however, this library doesn't exist 
</span><br>
<span class="quotelev1">&gt; on RH 6.2 systems without RH 5 compat headers package and doesn't have 
</span><br>
<span class="quotelev1">&gt; a 32 bit version on RH 6.2 systems at all.  The point is if I try to 
</span><br>
<span class="quotelev1">&gt; fix the libosmcomp.so dependency by doing an AC_CHECK_LIB that RH 6.X 
</span><br>
<span class="quotelev1">&gt; system will actually stop configuring in Dynamic SL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11116.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11115.php">TERRY DONTJE: "[OMPI devel] openib Dynamic SL opensm-devel usage"</a>
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
