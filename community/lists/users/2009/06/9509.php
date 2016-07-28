<?
$subject_val = "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 09:28:52 2009" -->
<!-- isoreceived="20090603132852" -->
<!-- sent="Wed, 03 Jun 2009 15:29:09 +0200" -->
<!-- isosent="20090603132909" -->
<!-- name="DEVEL Michel" -->
<!-- email="Michel.Devel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pb in configure script when using ifort with &amp;quot;-fast&amp;quot; +	link of opal_wrapper" -->
<!-- id="4A267AA5.5060809_at_ens2m.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A2676F5.3040909_at_ens2m.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper<br>
<strong>From:</strong> DEVEL Michel (<em>Michel.Devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 09:29:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9510.php">Jeff Squyres: "Re: [OMPI users] top question"</a>
<li><strong>Previous message:</strong> <a href="9508.php">DEVEL Michel: "[OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9508.php">DEVEL Michel: "[OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9511.php">Ralph Castain: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9511.php">Ralph Castain: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>In fact I forgot to put back to '-fast -C' the FCFLAGS variable (from
<br>
'-O3 -C'). There is still an error (many opal_*_* subroutines not found
<br>
during the ipo step) at the same place, coming from the fact that
<br>
&quot;ld: attempted static link of dynamic object
<br>
`../../../opal/.libs/libopen-pal.so'
<br>
although I put --enable-static in the configure step...
<br>
<p>Any idea of how to make the static libraries ?
<br>
<pre>
-- 
Sincerely yours,
Michel DEVEL
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9509/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9510.php">Jeff Squyres: "Re: [OMPI users] top question"</a>
<li><strong>Previous message:</strong> <a href="9508.php">DEVEL Michel: "[OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9508.php">DEVEL Michel: "[OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9511.php">Ralph Castain: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9511.php">Ralph Castain: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
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
