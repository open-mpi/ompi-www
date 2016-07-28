<?
$subject_val = "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 25 07:27:30 2009" -->
<!-- isoreceived="20090425112730" -->
<!-- sent="Sat, 25 Apr 2009 07:27:24 -0400" -->
<!-- isosent="20090425112724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft" -->
<!-- id="BEDC2EB6-8CF6-4A97-9FD4-10EDB9C04FF6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-25 07:27:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5874.php">Jeff Squyres: "[OMPI devel] MTT usage"</a>
<li><strong>Previous message:</strong> <a href="5872.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>In reply to:</strong> <a href="5872.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5875.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5875.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2009, at 2:46 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; 1) While developing your build system, you might have some problem  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; is Autoconf-related.  Autoconf developers ask you to provide output
</span><br>
<span class="quotelev1">&gt; from, say,
</span><br>
<span class="quotelev1">&gt;   autoconf --verbose
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and now, since you are going to publish it on a mailing list such as  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; bug-autoconf one, thus effectively distributing it, there are
</span><br>
<span class="quotelev1">&gt; restrictions on the produced text.  Since the output will likely  
</span><br>
<span class="quotelev1">&gt; depend
</span><br>
<span class="quotelev1">&gt; on both code from Autoconf, and also code from your build system, can
</span><br>
<span class="quotelev1">&gt; this now require you to provide your build system bits under a
</span><br>
<span class="quotelev1">&gt; GPL-compatible license?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, this would be good to clear up.  I'll throw in my own question --  
<br>
this may be foolish, but IANAL and I always misunderstand this stuff,  
<br>
so bear with me.
<br>
<p>We OMPI developers ask people to send the stdout/stderr of configure  
<br>
and their config.log to us to help figure out problems (<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> 
<br>
).  As I understand your explanations, this is still perfectly fine --  
<br>
these scenarios are long after running AC/AM/LT, so all that data is  
<br>
covered by the exception and is therefore effectively licensed under  
<br>
Open MPI's license.
<br>
<p>Is that correct?
<br>
<p><span class="quotelev1">&gt; 2) While developing a complex autotools-based build system such as the
</span><br>
<span class="quotelev1">&gt; one that Open MPI uses, it might be quite helpful to peek at internals
</span><br>
<span class="quotelev1">&gt; of Autoconf macros, and in some cases copy constructs from them and  
</span><br>
<span class="quotelev1">&gt; use
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
<p>Yes, this is also a good point.  There are a small number of places in  
<br>
OMPI's build system where we are using internal / unpublished AC/AM  
<br>
mechanisms (e.g., global shell variables that have the output of  
<br>
various tests that are not documented).  We *needed* to use these  
<br>
because we deviated a bit from what AC/AM normally provides (obviously  
<br>
not because we're trying to create an AC/AM clone or anything like  
<br>
that).  Are these problematic from a licensing point of view?  (of  
<br>
course, all the standard technical &quot;this isn't part of the published  
<br>
interface and may change at any time&quot; stuff applies as well)
<br>
<p>I don't recall where these places are in OMPI's configure system, so I  
<br>
can't cite them easily, but I'm sure we have some that have crept in  
<br>
over the years.  It might be difficult to find them all and root them  
<br>
out, if they are problematic, license-wise.
<br>
<p><span class="quotelev2">&gt; &gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Frankly, this all seems absurd to me. The GPL continues to grow  
</span><br>
<span class="quotelev1">&gt; in its
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unfriendliness. Perhaps it is time we reconsider our use of these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tools - we had given some consideration in the past to moving, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; maybe we need to do so again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course I am not in a position to tell you what build system to use,
</span><br>
<span class="quotelev1">&gt; but in my view, both autotools and Open MPI have profited quite a bit
</span><br>
<span class="quotelev1">&gt; from each other (I hope!), in that the former has gained support for
</span><br>
<span class="quotelev1">&gt; several new systems since, squashed lots of bugs, and the latter has
</span><br>
<span class="quotelev1">&gt; been a very good stress test example, and as a result, the former now
</span><br>
<span class="quotelev1">&gt; has several improvements for large packages (faster config.status,
</span><br>
<span class="quotelev1">&gt; less bloat in Makefile.in files, threaded automake execution) from  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; the latter may profit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Agreed.
<br>
<p>At one point, we investigated switching away from AM/LT and using  
<br>
scons as a building tool (still using AC as the configuring tool).  As  
<br>
a technology, there were certain distinct advantages to using scons --  
<br>
some aspects of it were downright cool, actually.  But even after  
<br>
producing a functional prototype, we decided to stick with AM/LT for  
<br>
two reasons:
<br>
<p>1. LT had support for far more compilers than scons
<br>
2. The support we get from Ralf and the AC/AM/LT community has been  
<br>
great; I don't know if we'd get that level of support from the scons  
<br>
community
<br>
<p>#1 may have changed since we looked at scons (this was several years  
<br>
ago now).  But we continue to enjoy pretty good support from the AC/AM/ 
<br>
LT community, and, as Ralf mentioned, we have a somewhat symbiotic  
<br>
relationship.  I, too, believe that we both have benefitted.  So while  
<br>
I'd love to have some of those cool features from scons, the  
<br>
advantages of moving are outweighed by the functionality, knowledge  
<br>
base, and rapport that we have built up in our AC/AM/LT usage.   
<br>
Perhaps we should start lobbying for some of the scons features we  
<br>
liked in AM/LT.  :-)
<br>
<p>All that being said, our next major disruptive Open MPI developer  
<br>
change will be moving to Mercurial, and that'll likely take a few  
<br>
months.  I wouldn't want to have a massive change in the configure/ 
<br>
build system at the same time.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5874.php">Jeff Squyres: "[OMPI devel] MTT usage"</a>
<li><strong>Previous message:</strong> <a href="5872.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>In reply to:</strong> <a href="5872.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5875.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5875.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
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
