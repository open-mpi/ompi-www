<?
$subject_val = "[OMPI devel] r25470 (hwloc CMR) breaks v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 15 01:16:42 2011" -->
<!-- isoreceived="20111115061642" -->
<!-- sent="Tue, 15 Nov 2011 01:17:34 -0500" -->
<!-- isosent="20111115061734" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] r25470 (hwloc CMR) breaks v1.5" -->
<!-- id="4EC203FE.4010806_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] r25470 (hwloc CMR) breaks v1.5<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-15 01:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9970.php">Matthias Jurenz: "Re: [OMPI devel] VT issue"</a>
<li><strong>Previous message:</strong> <a href="9968.php">Christopher Samuel: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Reply:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried building v1.5.  r25469 builds for me, r25470 does not.  This is 
<br>
Friday's hwloc putback of CMR 2866.  I'm on Solaris11/x86.  The problem 
<br>
is basically:
<br>
<p>Making all in tools/ompi_info
<br>
&nbsp;&nbsp;&nbsp;CC     ompi_info.o
<br>
&quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 193: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&nbsp;&nbsp;&nbsp;CC     output.o
<br>
&quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 193: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&nbsp;&nbsp;&nbsp;CC     param.o
<br>
&quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 193: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&nbsp;&nbsp;&nbsp;CC     components.o
<br>
&quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 193: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&nbsp;&nbsp;&nbsp;CC     version.o
<br>
&quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 193: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&nbsp;&nbsp;&nbsp;CCLD   ompi_info
<br>
Undefined                       first referenced
<br>
&nbsp;&nbsp;symbol                             in file
<br>
opal_hwloc122_hwloc_bitmap_dup      components.o
<br>
opal_hwloc122_hwloc_bitmap_weight   components.o
<br>
ld: fatal: symbol referencing errors. No output written to .libs/ompi_info
<br>
<p>Blood and gore are attached to this e-mail.
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9969/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9970.php">Matthias Jurenz: "Re: [OMPI devel] VT issue"</a>
<li><strong>Previous message:</strong> <a href="9968.php">Christopher Samuel: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Reply:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
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
