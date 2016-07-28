<?
$subject_val = "Re: [OMPI users] Valgrind writev() errors with 1.3.2.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 13:40:11 2009" -->
<!-- isoreceived="20090609174011" -->
<!-- sent="Tue, 09 Jun 2009 11:40:06 -0600" -->
<!-- isosent="20090609174006" -->
<!-- name="tom fogal" -->
<!-- email="tfogal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind writev() errors with 1.3.2." -->
<!-- id="auto-000019651726_at_sci.utah.edu" -->
<!-- inreplyto="9b0da5ce0906090643r773a36e1kacd052a8970c780d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind writev() errors with 1.3.2.<br>
<strong>From:</strong> tom fogal (<em>tfogal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 13:40:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9582.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9580.php">jobic: "Re: [OMPI users] MPI_Lookup_name"</a>
<li><strong>In reply to:</strong> <a href="9574.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9582.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9582.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jody &lt;jody.xha_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; I made a suppression file for the irrelevant memory leaks of ompi:  I
</span><br>
<span class="quotelev1">&gt; make no claim that it catches all possible ones, but it catches all
</span><br>
<span class="quotelev1">&gt; that appear in my code.
</span><br>
[snip]
<br>
<p>Thanks, Jody.
<br>
<p>What are the chances something like this could be added / maintained in
<br>
the OpenMPI tree?  It would be great to have something 1) maintained by
<br>
someone more knowledgeable about these errors than me, and 2) installed
<br>
by default when I setup my toolchain for parallel debugging.
<br>
<p><span class="quotelev1">&gt; On Tue, Jun 9, 2009 at 3:28 PM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This is worth adding to the FAQ.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 9, 2009, at 2:31 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, 2009-06-08 at 23:41 -0600, tom fogal wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; There is a whole page on valgrind web page about this topic. Please
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; read
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; <a href="http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress">http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; &#160; for more information.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Even better, Ralph (et al.) is if we could just make valgrind think
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; this is defined memory. &#160;One can do this with client requests:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; &#160; <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Using the Valgrind client requests unnecessarily is a very bad idea,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; they are intended for where applications use their own memory allocator
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (i.e. replace malloc/free) or are using custom kernel modules or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hardware which Valgrind doesn't know about.
</span><br>
<p>Okay, sure, I realize it was a bit of an abuse of the intended use of
<br>
the tool.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; The correct solution is either to not send un-initialised memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or to suppress the error using a suppression file as George
</span><br>
<span class="quotelev3">&gt; &gt;&gt; said. &#160;As the error is from MPI_Init() you can safely ignore it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from a end-user perspective.
</span><br>
<p>As I mentioned in my initial message, MPI_Init is only one such
<br>
error; I get them in a lot of MPI calls, seemingly anything that does
<br>
communication.  Though I've heard differently on this list, this led me
<br>
to believe I was doing something wrong in my code.
<br>
<p>It seems like the only way I could verify that I'm not causing these
<br>
errors myself is to grok the call stacks I'm given for each vg error
<br>
and figure out where the uninitialized memory comes from, and then make
<br>
a judgement call for myself whether this makes sense to suppress.  Or
<br>
I could mail the list about every error I see and ask for confirmation
<br>
that it's benign/suppressable.  Most likely, I'll take the simple
<br>
approach and just use the suppression file I was given, but that's
<br>
prone to be fragile and break with a future OpenMPI release.
<br>
<p>What about an environment variable which enables slower,
<br>
valgrind-friendly behavior?  There's precedent in other libraries, e.g.
<br>
glib [1].
<br>
<p>-tom
<br>
<p>[1] <a href="http://library.gnome.org/devel/glib/stable/glib-running.html">http://library.gnome.org/devel/glib/stable/glib-running.html</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9582.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9580.php">jobic: "Re: [OMPI users] MPI_Lookup_name"</a>
<li><strong>In reply to:</strong> <a href="9574.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9582.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9582.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
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
