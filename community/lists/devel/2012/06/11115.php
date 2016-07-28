<?
$subject_val = "[OMPI devel] openib Dynamic SL opensm-devel usage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 07:07:03 2012" -->
<!-- isoreceived="20120618110703" -->
<!-- sent="Mon, 18 Jun 2012 07:06:56 -0400" -->
<!-- isosent="20120618110656" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] openib Dynamic SL opensm-devel usage" -->
<!-- id="4FDF0BD0.4060408_at_oracle.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] openib Dynamic SL opensm-devel usage<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 07:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11116.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11114.php">George Bosilca: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11117.php">TERRY DONTJE: "Re: [OMPI devel] openib Dynamic SL opensm-devel usage"</a>
<li><strong>Reply:</strong> <a href="11117.php">TERRY DONTJE: "Re: [OMPI devel] openib Dynamic SL opensm-devel usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've ran into an issue compiling openib's Dynamic SL support  on a RH 
<br>
6.2 based system with the Oracle Studio compilers.
<br>
<p>Turns out if I compile btl_openib_connect_sl.c with the Oracle Studio 
<br>
compilers with the &quot;-g&quot; option the compiler compiles some static inline 
<br>
functions in ib_types.h standalone (as opposed to ignoring the functions 
<br>
since they are not called in the btl_openib_connect_sl.c source).  This 
<br>
creates a dependency on the symbol ib_error_str in 
<br>
btl_openib_connect_sl.o .  Note this symbol is defined in libosmcomp.so.
<br>
<p>My question is should btl_openib_connect_sl.c be linking to 
<br>
libosmcomp.so since btl_openib_connect_sl.c  is including ib_types.h or 
<br>
is there an assumption being made that btl_openib_connect_sl.c is just 
<br>
using macros/defines provided by the header and nothing requiring access 
<br>
to libosmcomp.so?
<br>
<p>I ask this because I can make my original issue go away on RH 5.X 
<br>
systems if I link in libosmcomp.so however, this library doesn't exist 
<br>
on RH 6.2 systems without RH 5 compat headers package and doesn't have a 
<br>
32 bit version on RH 6.2 systems at all.  The point is if I try to fix 
<br>
the libosmcomp.so dependency by doing an AC_CHECK_LIB that RH 6.X system 
<br>
will actually stop configuring in Dynamic SL.
<br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11115/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11116.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11114.php">George Bosilca: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11117.php">TERRY DONTJE: "Re: [OMPI devel] openib Dynamic SL opensm-devel usage"</a>
<li><strong>Reply:</strong> <a href="11117.php">TERRY DONTJE: "Re: [OMPI devel] openib Dynamic SL opensm-devel usage"</a>
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
