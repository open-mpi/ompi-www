<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 21 06:46:32 2006" -->
<!-- isoreceived="20060821104632" -->
<!-- sent="Mon, 21 Aug 2006 11:46:21 +0100" -->
<!-- isosent="20060821104621" -->
<!-- name="Jonathan Underwood" -->
<!-- email="jonathan.underwood_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI not conforming with the C90 spec?" -->
<!-- id="645d17210608210346k61cdf2cegcd776a90d911d661_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060819183815.GD2730_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Jonathan Underwood (<em>jonathan.underwood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-21 06:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1004.php">Ralf Wildenhues: "Re: [OMPI devel] exit declaration in configure tests"</a>
<li><strong>Previous message:</strong> <a href="1002.php">George Bosilca: "Re: [OMPI devel] exit declaration in configure tests"</a>
<li><strong>In reply to:</strong> <a href="0997.php">Adrian Knoth: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 19/08/06, Adrian Knoth &lt;adi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt; Compiling a file with the gcc options -Wall and -pedantic gives the
</span><br>
<span class="quotelev2">&gt; &gt; following warning:
</span><br>
<span class="quotelev2">&gt; &gt; mpi.h:147: warning: ISO C90 does not support 'long long'
</span><br>
<span class="quotelev2">&gt; &gt; Is this intentional, or is this a bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do not insist on using C90, you may compile with -std=c99
</span><br>
<span class="quotelev1">&gt; to get rid of this message ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Heh :)
<br>
<p><span class="quotelev1">&gt; I don't have the C90 (ANSI-C) at my fingertips, but I confirm it
</span><br>
<span class="quotelev1">&gt; does not support &quot;long long&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps we should use int64_t instead.
</span><br>
<p>I think that wouldn't solve the problem (see another post on that from
<br>
Ralf Wildenhaus).
<br>
<p>I notice that the gcc documentation has this to say:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The macro &quot;__STRICT_ANSI__&quot; is predefined when the -ansi option is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used.  Some header files may notice this macro and refrain from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;declaring certain functions or defining certain macros that the ISO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;standard doesn't call for; this is to avoid interfering with any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;programs that might use these names for other things.
<br>
<p>I wonder if it would be possible to #ifdef away non-C90 conforming
<br>
declarations in mpi.h when C90 conformance is requested. I am not sure
<br>
if __STRICT_ANSI__ is portable though.
<br>
If this is considered to be a worthwhile endeavour, I'm happy to cook
<br>
up a patch for it. OTOH, it may not really be worth it.
<br>
<p>Best wishes,
<br>
Jonathan.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1004.php">Ralf Wildenhues: "Re: [OMPI devel] exit declaration in configure tests"</a>
<li><strong>Previous message:</strong> <a href="1002.php">George Bosilca: "Re: [OMPI devel] exit declaration in configure tests"</a>
<li><strong>In reply to:</strong> <a href="0997.php">Adrian Knoth: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
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
