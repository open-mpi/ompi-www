<?
$subject_val = "Re: [OMPI users] Valgrind writev() errors with 1.3.2.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 14:13:53 2009" -->
<!-- isoreceived="20090609181353" -->
<!-- sent="Tue, 09 Jun 2009 12:13:48 -0600" -->
<!-- isosent="20090609181348" -->
<!-- name="tom fogal" -->
<!-- email="tfogal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind writev() errors with 1.3.2." -->
<!-- id="auto-000019652028_at_sci.utah.edu" -->
<!-- inreplyto="71d2d8cc0906091101v6239fbf0p89ea84c23fbce1a2_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-06-09 14:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9586.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9584.php">&#197;ke Sandgren: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9582.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9586.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9586.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; I can't speak to all of the OMPI code, but I can certainly create
</span><br>
<span class="quotelev1">&gt; a new configure option --valgrind-friendly that would initialize
</span><br>
<span class="quotelev1">&gt; the OOB comm buffers and other RTE-related memory to eliminate such
</span><br>
<span class="quotelev1">&gt; warnings.
</span><br>
<p>That would be excellent, thank you for offering.
<br>
<p><span class="quotelev1">&gt; I would prefer to configure it out rather than adding a bunch of
</span><br>
<span class="quotelev1">&gt; &quot;if-then&quot; checks for envars to avoid having the performance hit when
</span><br>
<span class="quotelev1">&gt; not needed.
</span><br>
<p>FWIW, we've solved this before by using function pointers initialized
<br>
on load, e.g. (warning, untested pseudocode):
<br>
<p>&nbsp;&nbsp;void mymethod(int stuff) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do(stuff);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;void mymethod_debug(int stuff) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;internal_consistency_check();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do(stuff);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;void (*method)(int);
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;void init() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;method = mymethod;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(getenv(&quot;DEBUGGING&quot;) != NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;method = mymethod_debug;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;void algorithm() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;method(42);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;}
<br>
<p>You'd only pay the branch during the one-time init().  Of course, the
<br>
method can't be inlined anymore either.
<br>
<p>Anyway, I realize that's quite a bit more work.  Preferred, but the
<br>
configure check would suffice for most of my needs.
<br>
<p><span class="quotelev1">&gt; Would that help?
</span><br>
<p>Tremendously, thank you.
<br>
<p>-tom
<br>
<p><span class="quotelev1">&gt; On Tue, Jun 9, 2009 at 11:40 AM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; jody &lt;jody.xha_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I made a suppression file for the irrelevant memory leaks of ompi:  I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make no claim that it catches all possible ones, but it catches all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that appear in my code.
</span><br>
<span class="quotelev2">&gt; &gt; [snip]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Jody.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What are the chances something like this could be added / maintained in
</span><br>
<span class="quotelev2">&gt; &gt; the OpenMPI tree?  It would be great to have something 1) maintained by
</span><br>
<span class="quotelev2">&gt; &gt; someone more knowledgeable about these errors than me, and 2) installed
</span><br>
<span class="quotelev2">&gt; &gt; by default when I setup my toolchain for parallel debugging.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, Jun 9, 2009 at 3:28 PM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This is worth adding to the FAQ.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Jun 9, 2009, at 2:31 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; On Mon, 2009-06-08 at 23:41 -0600, tom fogal wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt; &gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt; &gt; &gt; There is a whole page on valgrind web page about this topic.
</span><br>
<span class="quotelev2">&gt; &gt; Please
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt; &gt; &gt; read
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress">http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt; &gt; &gt;   for more information.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt; &gt; Even better, Ralph (et al.) is if we could just make valgrind think
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt; &gt; this is defined memory.  One can do this with client requests:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Using the Valgrind client requests unnecessarily is a very bad idea,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; they are intended for where applications use their own memory
</span><br>
<span class="quotelev2">&gt; &gt; allocator
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; (i.e. replace malloc/free) or are using custom kernel modules or
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; hardware which Valgrind doesn't know about.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Okay, sure, I realize it was a bit of an abuse of the intended use of
</span><br>
<span class="quotelev2">&gt; &gt; the tool.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; The correct solution is either to not send un-initialised memory
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; or to suppress the error using a suppression file as George
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; said.  As the error is from MPI_Init() you can safely ignore it
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; from a end-user perspective.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I mentioned in my initial message, MPI_Init is only one such
</span><br>
<span class="quotelev2">&gt; &gt; error; I get them in a lot of MPI calls, seemingly anything that does
</span><br>
<span class="quotelev2">&gt; &gt; communication.  Though I've heard differently on this list, this led me
</span><br>
<span class="quotelev2">&gt; &gt; to believe I was doing something wrong in my code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems like the only way I could verify that I'm not causing these
</span><br>
<span class="quotelev2">&gt; &gt; errors myself is to grok the call stacks I'm given for each vg error
</span><br>
<span class="quotelev2">&gt; &gt; and figure out where the uninitialized memory comes from, and then make
</span><br>
<span class="quotelev2">&gt; &gt; a judgement call for myself whether this makes sense to suppress.  Or
</span><br>
<span class="quotelev2">&gt; &gt; I could mail the list about every error I see and ask for confirmation
</span><br>
<span class="quotelev2">&gt; &gt; that it's benign/suppressable.  Most likely, I'll take the simple
</span><br>
<span class="quotelev2">&gt; &gt; approach and just use the suppression file I was given, but that's
</span><br>
<span class="quotelev2">&gt; &gt; prone to be fragile and break with a future OpenMPI release.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What about an environment variable which enables slower,
</span><br>
<span class="quotelev2">&gt; &gt; valgrind-friendly behavior?  There's precedent in other libraries, e.g.
</span><br>
<span class="quotelev2">&gt; &gt; glib [1].
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -tom
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [1] <a href="http://library.gnome.org/devel/glib/stable/glib-running.html">http://library.gnome.org/devel/glib/stable/glib-running.html</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9586.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9584.php">&#197;ke Sandgren: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9582.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9586.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9586.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
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
