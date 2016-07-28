<?
$subject_val = "Re: [OMPI devel] more vt woes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 07:58:30 2008" -->
<!-- isoreceived="20080213125830" -->
<!-- sent="Wed, 13 Feb 2008 13:58:22 +0100" -->
<!-- isosent="20080213125822" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] more vt woes" -->
<!-- id="20080213125822.GB28594_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1202906981.5923.5.camel_at_ricolap" -->
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
<strong>Subject:</strong> Re: [OMPI devel] more vt woes<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 07:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3237.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3235.php">Ralph Castain: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<li><strong>In reply to:</strong> <a href="3234.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3237.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Reply:</strong> <a href="3237.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo Matthias,
<br>
<p>* Matthias Jurenz wrote on Wed, Feb 13, 2008 at 01:49:41PM CET:
<br>
<span class="quotelev1">&gt; On Di, 2008-02-12 at 11:27 -0500, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I keep getting some warnings when I compile with gcc-4.2 on MAC OS X.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tools/compwrap/Makefile.am:38: `CXXFLAGS' is a user variable, you  
</span><br>
<span class="quotelev2">&gt; &gt; should not override it;
</span><br>
[...]
<br>
<span class="quotelev1">&gt; So, please ignore the warnings from Automake... Currently, I see no
</span><br>
<span class="quotelev1">&gt; better solution ;-)
</span><br>
<p>You can put
<br>
&nbsp;&nbsp;AUTOMAKE_OPTIONS = -Wno-gnu
<br>
<p>in tools/compwrap/Makefile.am to avoid the warnings from automake.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3237.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3235.php">Ralph Castain: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<li><strong>In reply to:</strong> <a href="3234.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3237.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Reply:</strong> <a href="3237.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
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
