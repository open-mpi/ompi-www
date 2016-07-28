<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 19 14:38:33 2006" -->
<!-- isoreceived="20060819183833" -->
<!-- sent="Sat, 19 Aug 2006 20:38:15 +0200" -->
<!-- isosent="20060819183815" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI not conforming with the C90 spec?" -->
<!-- id="20060819183815.GD2730_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="645d17210608171548wa6c8e6ftd3c882714ab8e4f3_at_mail.gmail.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-19 14:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0998.php">Adrian Knoth: "[OMPI devel] A few notes on IPv6 status"</a>
<li><strong>Previous message:</strong> <a href="0996.php">Jonathan Underwood: "[OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>In reply to:</strong> <a href="0996.php">Jonathan Underwood: "[OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0999.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Reply:</strong> <a href="0999.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Reply:</strong> <a href="1003.php">Jonathan Underwood: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 17, 2006 at 11:48:44PM +0100, Jonathan Underwood wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<p>Hi!
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Compiling a file with the gcc options -Wall and -pedantic gives the
</span><br>
<span class="quotelev1">&gt; following warning:
</span><br>
<span class="quotelev1">&gt; mpi.h:147: warning: ISO C90 does not support 'long long'
</span><br>
<span class="quotelev1">&gt; Is this intentional, or is this a bug?
</span><br>
<p>If you do not insist on using C90, you may compile with -std=c99
<br>
to get rid of this message ;)
<br>
<p>I don't have the C90 (ANSI-C) at my fingertips, but I confirm it
<br>
does not support &quot;long long&quot;.
<br>
<p>Perhaps we should use int64_t instead.
<br>
<p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Schei&#223;e wird nicht dadurch besser oder sicherer, dass man ein paar
Shareware-Warnl&#228;mpchen dranpappt. (Robin S. Socha &#252;ber &quot;Desktop-Firewalls&quot;)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0998.php">Adrian Knoth: "[OMPI devel] A few notes on IPv6 status"</a>
<li><strong>Previous message:</strong> <a href="0996.php">Jonathan Underwood: "[OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>In reply to:</strong> <a href="0996.php">Jonathan Underwood: "[OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0999.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Reply:</strong> <a href="0999.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Reply:</strong> <a href="1003.php">Jonathan Underwood: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
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
