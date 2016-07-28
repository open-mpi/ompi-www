<?
$subject_val = "Re: [OMPI users] opal_timer_linux_open() setting inexact floating point exception";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 14 13:32:40 2012" -->
<!-- isoreceived="20120614173240" -->
<!-- sent="Thu, 14 Jun 2012 11:32:33 -0600" -->
<!-- isosent="20120614173233" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_timer_linux_open() setting inexact floating point exception" -->
<!-- id="C0D4981C-29EF-45A4-A794-CD201C26631E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FDA1DA8.3040808_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] opal_timer_linux_open() setting inexact floating point exception<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-14 13:32:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19573.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19571.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19570.php">Orion Poplawski: "[OMPI users] opal_timer_linux_open() setting inexact floating point exception"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Huh - weird. I've never seen that warning appear. What system was this on?
<br>
<p>The code you flagged gets called exactly once, so overhead isn't an issue. Just puzzling why it would now suddenly appear after it has been there for years.
<br>
<p><p>On Jun 14, 2012, at 11:21 AM, Orion Poplawski wrote:
<br>
<p><span class="quotelev1">&gt; While trying to debug some other stuff, I discovered that opal_timer_linux_open() ends up setting the inexact floating point exception here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* numer is in MHz - convert to Hz and make an integer */
</span><br>
<span class="quotelev1">&gt;     opal_timer_linux_freq = (opal_timer_t) cpu_f * 1000000;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is anything we should care about or not, but when linked to the pgf runtime you end up with the following warning output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Warning: ieee_inexact is signaling
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to see if I could do the conversion without triggering this to no avail.  One could avoid changing the state with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;fenv.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     fecxept_t feflags
</span><br>
<span class="quotelev1">&gt;     fegetexceptflag(&amp;feflags, FE_INEXACT);
</span><br>
<span class="quotelev1">&gt;     /* numer is in MHz - convert to Hz and make an integer */
</span><br>
<span class="quotelev1">&gt;     opal_timer_linux_freq = (opal_timer_t) cpu_f * 1000000;
</span><br>
<span class="quotelev1">&gt;     fesetexceptflag(&amp;feflags, FE_INEXACT);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I'm not sure this is worth the overhead.  Not sure how often this code is called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Orion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder Office                  FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19573.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19571.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19570.php">Orion Poplawski: "[OMPI users] opal_timer_linux_open() setting inexact floating point exception"</a>
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
