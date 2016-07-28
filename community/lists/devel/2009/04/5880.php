<?
$subject_val = "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 25 18:34:48 2009" -->
<!-- isoreceived="20090425223448" -->
<!-- sent="Sat, 25 Apr 2009 15:34:28 -0700" -->
<!-- isosent="20090425223428" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft" -->
<!-- id="49F38FF4.6000709_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090425064616.GA10293_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-25 18:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5881.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Open MPI mirrors list"</a>
<li><strong>Previous message:</strong> <a href="5879.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>In reply to:</strong> <a href="5872.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; Hello Open MPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Paul H. Hargrove wrote on Fri, Apr 24, 2009 at 09:17:20PM CEST:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;  I think your specific example of public posting of the debug or verbose 
</span><br>
<span class="quotelev2">&gt;&gt; output might be a valid concern, but perhaps not exactly in the way 
</span><br>
<span class="quotelev2">&gt;&gt; you've stated it.  The act of &quot;distributing&quot; the debug/verbose output is 
</span><br>
<span class="quotelev2">&gt;&gt; not forbidden, but distributing it under a *non-GPL* license is.  If by 
</span><br>
<span class="quotelev2">&gt;&gt; posting the debug or verbose output one was now required to offer, under 
</span><br>
<span class="quotelev2">&gt;&gt; GPL terms, *all* the source code that generated said output, then I'd say 
</span><br>
<span class="quotelev2">&gt;&gt; we have a problem when configure.ac and acinclude.m4 are from a non-GPL 
</span><br>
<span class="quotelev2">&gt;&gt; project such as OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
[snip]
<br>
<span class="quotelev1">&gt; Still, I can see that there may be two problematic issues, and I would
</span><br>
<span class="quotelev1">&gt; like to thank you for bringing them up; I will talk to the FSF legal
</span><br>
<span class="quotelev1">&gt; dept. about them.  Here's my summary of them, formulated in a way that I
</span><br>
<span class="quotelev1">&gt; will present them to the FSF; please correct me if I have misrepresented
</span><br>
<span class="quotelev1">&gt; or forgotten anything, thanks.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I thank you for dealing with FSF legal on these issues.
<br>
<p><span class="quotelev1">&gt; 1) While developing your build system, you might have some problem which
</span><br>
<span class="quotelev1">&gt; is Autoconf-related.  Autoconf developers ask you to provide output
</span><br>
<span class="quotelev1">&gt; from, say,
</span><br>
<span class="quotelev1">&gt;   autoconf --verbose
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and now, since you are going to publish it on a mailing list such as the
</span><br>
<span class="quotelev1">&gt; bug-autoconf one, thus effectively distributing it, there are
</span><br>
<span class="quotelev1">&gt; restrictions on the produced text.  Since the output will likely depend
</span><br>
<span class="quotelev1">&gt; on both code from Autoconf, and also code from your build system, can
</span><br>
<span class="quotelev1">&gt; this now require you to provide your build system bits under a
</span><br>
<span class="quotelev1">&gt; GPL-compatible license?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>This is exactly the issue that, based on Ralph C.'s comments, is my 
<br>
largest concern at the moment in relation to the Exception language.  If 
<br>
OMPI and other non-GPL projects were unable to get build-system support 
<br>
from people like you due to a technicality like this one, I think that 
<br>
everybody would lose.  As you have mentioned, the OMPI and AC/AM/LT 
<br>
relationship has historically been one of significant mutual benefit.
<br>
<p><span class="quotelev1">&gt; 2) While developing a complex autotools-based build system such as the
</span><br>
<span class="quotelev1">&gt; one that Open MPI uses, it might be quite helpful to peek at internals
</span><br>
<span class="quotelev1">&gt; of Autoconf macros, and in some cases copy constructs from them and use
</span><br>
<span class="quotelev1">&gt; them in Open MPI's macros, to the point that it's unclear whether one
</span><br>
<span class="quotelev1">&gt; code is derived from another in a legally significant way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In such a case, I'm personally not sure what the *desired* stance of
</span><br>
<span class="quotelev1">&gt; the FSF would be about the required license of those copied macros
</span><br>
<span class="quotelev1">&gt; (my personal preference would be to allow this, as long as the intent
</span><br>
<span class="quotelev1">&gt; is clear to not create an Autoconf clone).  However, even if the FSF
</span><br>
<span class="quotelev1">&gt; were to intend to make those honor the GPL, then it should still be
</span><br>
<span class="quotelev1">&gt; possible to distribute the produced configure script without
</span><br>
<span class="quotelev1">&gt; restrictions.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>This seems a fair summary of the concern that Jeff raised.
<br>
<p>To add my own IANAL $0.02 to this one: there is a significant difference 
<br>
from peeking at autoconf sources for the name of an internal variable 
<br>
and things like cloning the source code for AC_CHECK_SIZEOF (while 
<br>
perhaps changing the &quot;AC&quot; and &quot;ac&quot; prefixes and reindenting).  I agree 
<br>
w/ Ralf W that my preference would be to allow both practices w/o 
<br>
creating license restrictions on the configure script or even on the 
<br>
configure.ac and/or the foobar.m4 containing the cloned macro.  However, 
<br>
while I might not make myself popular outside the FSF with this 
<br>
statement, I think that *if* the FSF wants to assert their rights to 
<br>
prevent cloning AC_CHECK_SIZEOF then that is within their rights.  What 
<br>
needs to be considered is whether doing so is consistent with the AC 
<br>
project's goals.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5881.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Open MPI mirrors list"</a>
<li><strong>Previous message:</strong> <a href="5879.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>In reply to:</strong> <a href="5872.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
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
