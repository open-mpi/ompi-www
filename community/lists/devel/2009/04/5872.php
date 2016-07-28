<?
$subject_val = "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 25 02:46:27 2009" -->
<!-- isoreceived="20090425064627" -->
<!-- sent="Sat, 25 Apr 2009 08:46:16 +0200" -->
<!-- isosent="20090425064616" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft" -->
<!-- id="20090425064616.GA10293_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49F21040.6070507_at_lbl.gov" -->
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
<strong>Date:</strong> 2009-04-25 02:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5873.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Previous message:</strong> <a href="5871.php">Jeff Squyres: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>In reply to:</strong> <a href="5870.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5873.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5873.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5878.php">Ralph Castain: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5880.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Open MPI developers,
<br>
<p>* Paul H. Hargrove wrote on Fri, Apr 24, 2009 at 09:17:20PM CEST:
<br>
<span class="quotelev1">&gt;  I think your specific example of public posting of the debug or verbose 
</span><br>
<span class="quotelev1">&gt; output might be a valid concern, but perhaps not exactly in the way 
</span><br>
<span class="quotelev1">&gt; you've stated it.  The act of &quot;distributing&quot; the debug/verbose output is 
</span><br>
<span class="quotelev1">&gt; not forbidden, but distributing it under a *non-GPL* license is.  If by 
</span><br>
<span class="quotelev1">&gt; posting the debug or verbose output one was now required to offer, under 
</span><br>
<span class="quotelev1">&gt; GPL terms, *all* the source code that generated said output, then I'd say 
</span><br>
<span class="quotelev1">&gt; we have a problem when configure.ac and acinclude.m4 are from a non-GPL 
</span><br>
<span class="quotelev1">&gt; project such as OMPI.
</span><br>
<p><span class="quotelev1">&gt; Ralf Wildenhues,
</span><br>
<span class="quotelev1">&gt;  While I believe Jeff is the one that brought this discussion to  
</span><br>
<span class="quotelev1">&gt; ompi-devel, I know you've posted on ompi-devel in the past.  Are you  
</span><br>
<span class="quotelev1">&gt; seeing this?
</span><br>
<p>Yes, I am casually reading this list.
<br>
<p><span class="quotelev1">&gt;  Do you have a response to Ralph's concern, or can you  
</span><br>
<span class="quotelev1">&gt; bring this to the attention of those who would?  Perhaps we are  
</span><br>
<span class="quotelev1">&gt; rehashing a discussion already settled on some list we don't read?
</span><br>
<p>Well, it brings up an interesting point; part of this has been discussed
<br>
already, part hasn't.  For those interested, most of the other
<br>
discussion has taken place on the autoconf list as part of this thread:
<br>
&lt;<a href="http://lists.gnu.org/archive/html/autoconf/2009-04/msg00081.html">http://lists.gnu.org/archive/html/autoconf/2009-04/msg00081.html</a>&gt;
<br>
<p>For the points brought up here, allow me to give a bit of background:
<br>
<p>The whole language about &quot;verbosity&quot; and &quot;non-debugging&quot; output was
<br>
added to the Exception in the first place, in order to prevent something
<br>
like this to happen: somebody modifies autoconf to output all of the
<br>
macro input files that are part of the Autoconf software package itself;
<br>
then somebody else uses that output to create an Autoconf clone under
<br>
any license.  It was considered that this might be possible with the
<br>
current GPLv2 + Exception.  Note this all about somebody who wants to
<br>
create another &quot;Autoconf&quot;, not about normal users of it.
<br>
<p>Now, as the Exception is formulated currently, it certainly has the
<br>
chance to also impact normal users of Autoconf.  Finding out whether
<br>
this may be a problem for our users is one of the very reasons we posted
<br>
this draft Exception as an RFC; we would like to ensure that our users
<br>
are not impacted negatively by it.  This includes that it should
<br>
continue to be possible to produce configure scripts for non-free
<br>
software and distribute it alongside that, even without source code.
<br>
<p>Here's the way I see it (and IANAL):
<br>
<p>As long as you only deal with the configure script and output from that,
<br>
may that be debugging output, verbose output, whatever, you can do
<br>
anything with it that you want.  This Exception only ever deals with
<br>
what is done with the output of &quot;autoconf&quot;, i.e., whatever happens
<br>
when &quot;autogen.sh&quot; is run on the Open MPI tree.
<br>
<p>Still, I can see that there may be two problematic issues, and I would
<br>
like to thank you for bringing them up; I will talk to the FSF legal
<br>
dept. about them.  Here's my summary of them, formulated in a way that I
<br>
will present them to the FSF; please correct me if I have misrepresented
<br>
or forgotten anything, thanks.
<br>
<p>1) While developing your build system, you might have some problem which
<br>
is Autoconf-related.  Autoconf developers ask you to provide output
<br>
from, say,
<br>
&nbsp;&nbsp;autoconf --verbose
<br>
<p>and now, since you are going to publish it on a mailing list such as the
<br>
bug-autoconf one, thus effectively distributing it, there are
<br>
restrictions on the produced text.  Since the output will likely depend
<br>
on both code from Autoconf, and also code from your build system, can
<br>
this now require you to provide your build system bits under a
<br>
GPL-compatible license?
<br>
<p>2) While developing a complex autotools-based build system such as the
<br>
one that Open MPI uses, it might be quite helpful to peek at internals
<br>
of Autoconf macros, and in some cases copy constructs from them and use
<br>
them in Open MPI's macros, to the point that it's unclear whether one
<br>
code is derived from another in a legally significant way.
<br>
<p>In such a case, I'm personally not sure what the *desired* stance of
<br>
the FSF would be about the required license of those copied macros
<br>
(my personal preference would be to allow this, as long as the intent
<br>
is clear to not create an Autoconf clone).  However, even if the FSF
<br>
were to intend to make those honor the GPL, then it should still be
<br>
possible to distribute the produced configure script without
<br>
restrictions.
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Frankly, this all seems absurd to me. The GPL continues to grow in its  
</span><br>
<span class="quotelev2">&gt;&gt; unfriendliness. Perhaps it is time we reconsider our use of these  
</span><br>
<span class="quotelev2">&gt;&gt; tools - we had given some consideration in the past to moving, and  
</span><br>
<span class="quotelev2">&gt;&gt; maybe we need to do so again.
</span><br>
<p>Of course I am not in a position to tell you what build system to use,
<br>
but in my view, both autotools and Open MPI have profited quite a bit
<br>
from each other (I hope!), in that the former has gained support for
<br>
several new systems since, squashed lots of bugs, and the latter has
<br>
been a very good stress test example, and as a result, the former now
<br>
has several improvements for large packages (faster config.status,
<br>
less bloat in Makefile.in files, threaded automake execution) from which
<br>
the latter may profit.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5873.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Previous message:</strong> <a href="5871.php">Jeff Squyres: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>In reply to:</strong> <a href="5870.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5873.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5873.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5878.php">Ralph Castain: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5880.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
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
