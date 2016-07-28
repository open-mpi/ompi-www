<?
$subject_val = "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 25 08:33:57 2009" -->
<!-- isoreceived="20090425123357" -->
<!-- sent="Sat, 25 Apr 2009 14:33:44 +0200" -->
<!-- isosent="20090425123344" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft" -->
<!-- id="20090425123343.GA19430_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BEDC2EB6-8CF6-4A97-9FD4-10EDB9C04FF6_at_cisco.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-25 08:33:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5876.php">Jeff Squyres: "[OMPI devel] Open MPI mirrors list"</a>
<li><strong>Previous message:</strong> <a href="5874.php">Jeff Squyres: "[OMPI devel] MTT usage"</a>
<li><strong>In reply to:</strong> <a href="5873.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5905.php">Jeff Squyres: "[OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)"</a>
<li><strong>Reply:</strong> <a href="5905.php">Jeff Squyres: "[OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>* Jeff Squyres wrote on Sat, Apr 25, 2009 at 01:27:24PM CEST:
<br>
<span class="quotelev1">&gt; We OMPI developers ask people to send the stdout/stderr of configure and 
</span><br>
<span class="quotelev1">&gt; their config.log to us to help figure out problems 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>).  As I understand your 
</span><br>
<span class="quotelev1">&gt; explanations, this is still perfectly fine -- these scenarios are long 
</span><br>
<span class="quotelev1">&gt; after running AC/AM/LT, so all that data is covered by the exception and 
</span><br>
<span class="quotelev1">&gt; is therefore effectively licensed under Open MPI's license.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that correct?
</span><br>
<p>Yes, that is correct.
<br>
<p><span class="quotelev2">&gt;&gt; 2) While developing a complex autotools-based build system such as the
</span><br>
<span class="quotelev2">&gt;&gt; one that Open MPI uses, it might be quite helpful to peek at internals
</span><br>
<span class="quotelev2">&gt;&gt; of Autoconf macros, and in some cases copy constructs from them and  
</span><br>
<span class="quotelev2">&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt; them in Open MPI's macros, to the point that it's unclear whether one
</span><br>
<span class="quotelev2">&gt;&gt; code is derived from another in a legally significant way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In such a case, I'm personally not sure what the *desired* stance of
</span><br>
<span class="quotelev2">&gt;&gt; the FSF would be about the required license of those copied macros
</span><br>
<span class="quotelev2">&gt;&gt; (my personal preference would be to allow this, as long as the intent
</span><br>
<span class="quotelev2">&gt;&gt; is clear to not create an Autoconf clone).  However, even if the FSF
</span><br>
<span class="quotelev2">&gt;&gt; were to intend to make those honor the GPL, then it should still be
</span><br>
<span class="quotelev2">&gt;&gt; possible to distribute the produced configure script without
</span><br>
<span class="quotelev2">&gt;&gt; restrictions.
</span><br>
<p><span class="quotelev1">&gt; Yes, this is also a good point.  There are a small number of places in  
</span><br>
<span class="quotelev1">&gt; OMPI's build system where we are using internal / unpublished AC/AM  
</span><br>
<span class="quotelev1">&gt; mechanisms (e.g., global shell variables that have the output of various 
</span><br>
<span class="quotelev1">&gt; tests that are not documented).  We *needed* to use these because we 
</span><br>
<span class="quotelev1">&gt; deviated a bit from what AC/AM normally provides (obviously not because 
</span><br>
<span class="quotelev1">&gt; we're trying to create an AC/AM clone or anything like that).  Are these 
</span><br>
<span class="quotelev1">&gt; problematic from a licensing point of view?  (of course, all the standard 
</span><br>
<span class="quotelev1">&gt; technical &quot;this isn't part of the published interface and may change at 
</span><br>
<span class="quotelev1">&gt; any time&quot; stuff applies as well)
</span><br>
<p>Well, the question whether they are problematic or not, is one where in
<br>
the end, only a lawyer can provide a definite answer for you.  Whether
<br>
for the current GPLv2 + the simple Autoconf Exception, or with a future
<br>
GPLv3 + Exception.
<br>
<p>I brought this up now precisely because I'm not quite sure of this
<br>
myself, but I'd like the next Autoconf license to be clear here, and
<br>
in a way that this works for you.  Please note that I'm not the person
<br>
to decide this, in the end, it is the FSF.
<br>
<p><span class="quotelev1">&gt; I don't recall where these places are in OMPI's configure system, so I  
</span><br>
<span class="quotelev1">&gt; can't cite them easily, but I'm sure we have some that have crept in  
</span><br>
<span class="quotelev1">&gt; over the years.  It might be difficult to find them all and root them  
</span><br>
<span class="quotelev1">&gt; out, if they are problematic, license-wise.
</span><br>
<p>I don't actually think there is much relevant code of this form at all
<br>
in Open MPI.  I haven't done an analysis, though.  And if there would
<br>
turn out to be relevant portions, _and_ the license question can't be
<br>
cleared up, then I'd see it as next step on my TODO list to help redo
<br>
the Open MPI macros in a clean fashion.
<br>
<p><span class="quotelev2">&gt;&gt; Of course I am not in a position to tell you what build system to use,
</span><br>
<span class="quotelev2">&gt;&gt; but in my view, both autotools and Open MPI have profited quite a bit
</span><br>
<span class="quotelev2">&gt;&gt; from each other (I hope!), in that the former has gained support for
</span><br>
<span class="quotelev2">&gt;&gt; several new systems since, squashed lots of bugs, and the latter has
</span><br>
<span class="quotelev2">&gt;&gt; been a very good stress test example, and as a result, the former now
</span><br>
<span class="quotelev2">&gt;&gt; has several improvements for large packages (faster config.status,
</span><br>
<span class="quotelev2">&gt;&gt; less bloat in Makefile.in files, threaded automake execution) from  
</span><br>
<span class="quotelev2">&gt;&gt; which the latter may profit.
</span><br>
<p><span class="quotelev1">&gt; Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At one point, we investigated switching away from AM/LT and using scons 
</span><br>
<span class="quotelev1">&gt; as a building tool (still using AC as the configuring tool).  As a 
</span><br>
<span class="quotelev1">&gt; technology, there were certain distinct advantages to using scons --  
</span><br>
<span class="quotelev1">&gt; some aspects of it were downright cool, actually.
</span><br>
<p>I hardly know scons.  What's cool about it that autotools don't have?
<br>
<p>Just in case less verbose build output (a la Linux kernel builds) is one
<br>
of them, Automake-1.11 will have that (and its release is only waiting
<br>
for the license stuff to be resolved).
<br>
<p><span class="quotelev1">&gt; 2. The support we get from Ralf and the AC/AM/LT community has been  
</span><br>
<span class="quotelev1">&gt; great; I don't know if we'd get that level of support from the scons  
</span><br>
<span class="quotelev1">&gt; community
</span><br>
<p>Thanks!
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5876.php">Jeff Squyres: "[OMPI devel] Open MPI mirrors list"</a>
<li><strong>Previous message:</strong> <a href="5874.php">Jeff Squyres: "[OMPI devel] MTT usage"</a>
<li><strong>In reply to:</strong> <a href="5873.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5905.php">Jeff Squyres: "[OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)"</a>
<li><strong>Reply:</strong> <a href="5905.php">Jeff Squyres: "[OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)"</a>
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
