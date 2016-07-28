<?
$subject_val = "[OMPI users] opal_timer_linux_open() setting inexact floating point exception";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 14 13:21:48 2012" -->
<!-- isoreceived="20120614172148" -->
<!-- sent="Thu, 14 Jun 2012 11:21:44 -0600" -->
<!-- isosent="20120614172144" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI users] opal_timer_linux_open() setting inexact floating point exception" -->
<!-- id="4FDA1DA8.3040808_at_cora.nwra.com" -->
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
<strong>Subject:</strong> [OMPI users] opal_timer_linux_open() setting inexact floating point exception<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-14 13:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19571.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19569.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19572.php">Ralph Castain: "Re: [OMPI users] opal_timer_linux_open() setting inexact floating point exception"</a>
<li><strong>Reply:</strong> <a href="19572.php">Ralph Castain: "Re: [OMPI users] opal_timer_linux_open() setting inexact floating point exception"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While trying to debug some other stuff, I discovered that 
<br>
opal_timer_linux_open() ends up setting the inexact floating point exception here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* numer is in MHz - convert to Hz and make an integer */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_timer_linux_freq = (opal_timer_t) cpu_f * 1000000;
<br>
<p>I'm not sure if this is anything we should care about or not, but when linked 
<br>
to the pgf runtime you end up with the following warning output:
<br>
<p>Warning: ieee_inexact is signaling
<br>
<p>I tried to see if I could do the conversion without triggering this to no 
<br>
avail.  One could avoid changing the state with:
<br>
<p>#include &lt;fenv.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fecxept_t feflags
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fegetexceptflag(&amp;feflags, FE_INEXACT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* numer is in MHz - convert to Hz and make an integer */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_timer_linux_freq = (opal_timer_t) cpu_f * 1000000;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fesetexceptflag(&amp;feflags, FE_INEXACT);
<br>
<p>But I'm not sure this is worth the overhead.  Not sure how often this code is 
<br>
called.
<br>
<p>- Orion
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder Office                  FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19571.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19569.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19572.php">Ralph Castain: "Re: [OMPI users] opal_timer_linux_open() setting inexact floating point exception"</a>
<li><strong>Reply:</strong> <a href="19572.php">Ralph Castain: "Re: [OMPI users] opal_timer_linux_open() setting inexact floating point exception"</a>
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
