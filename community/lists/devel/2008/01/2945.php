<?
$subject_val = "[OMPI devel] Integrating the memchecker branch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 15:09:57 2008" -->
<!-- isoreceived="20080108200957" -->
<!-- sent="Tue, 8 Jan 2008 22:11:48 +0200" -->
<!-- isosent="20080108201148" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="[OMPI devel] Integrating the memchecker branch" -->
<!-- id="200801082111.48859.keller_at_hlrs.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Integrating the memchecker branch<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-08 15:11:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2946.php">Elan Ruusamäe: "[OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="2944.php">Jeff Squyres: "[OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2976.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Reply:</strong> <a href="2976.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello dear all,
<br>
<p>WHAT:
<br>
We would like to integrate the changes on the memchecker-branch to trunk, as 
<br>
planned in the 
<br>
<p>WHY:
<br>
The checking offers memory checking for certain User and OMPI-internal errors, 
<br>
like buffer overruns, size mismatches, checks for wrong send/receive buffers.
<br>
<p>WHERE: OMPI trunk and v1.3 phase3
<br>
<p>WHEN:
<br>
Integration into Trunk of memchecker branch: 25.1. (although off-by-default, 
<br>
this leaves enough time before Feature Freeze on 8.2.)
<br>
<p>TIMEOUT: None
<br>
===============================================================
<br>
<p>The memchecker branch contains checks for memory buffer faults either in the 
<br>
User-Code or in ompi-code itself.
<br>
It uses the valgrind-API to set/reset buffer validity of the user buffers 
<br>
passed to the MPI-layer. Additionally ompi-internal datatypes are checked 
<br>
for.
<br>
Both are configurable using the flags:
<br>
&nbsp;&nbsp;--enable-memchecker
<br>
&nbsp;&nbsp;--with-valgrind=DIR (if needed)
<br>
<p>A decent/recent valgrind is needed (for getting and setting VBITS/using the 
<br>
newer macros). The valgrind-version is being checked for, at least version 
<br>
3.2.0 is required.
<br>
<p>The actual checking is done in the MPI-layer, in order not to trap any 
<br>
(correct) access in the BTL, the user buffer is reset to accessible in the 
<br>
PML-layer (currently OB1 -- others won't make much sense?). 
<br>
<p>The default behaviour is to *NOT* enable memchecker.
<br>
If it is enabled, but not valgrind is being run, the costs for the buffer 
<br>
checks are minimal, the costs for each ompi-datastructure (like datatype, or 
<br>
communicator passed) is not.
<br>
Further information regarding penalties and performance may be found in:
<br>
<a href="http://www.open-mpi.org/papers/parco-2007">http://www.open-mpi.org/papers/parco-2007</a>
<br>
<p>Comments from the Paris meeting have been integrated.
<br>
Are there any objections or hints?
<br>
<p>With best regards,
<br>
Shiqing and Rainer
<br>
<p>PS: If --enable-memchecker is on, --enable-debug should be on as well to make 
<br>
sense.
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
&quot;Emails save time, not printing them saves trees!&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2946.php">Elan Ruusamäe: "[OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="2944.php">Jeff Squyres: "[OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2976.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Reply:</strong> <a href="2976.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
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
