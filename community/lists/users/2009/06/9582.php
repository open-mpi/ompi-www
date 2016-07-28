<?
$subject_val = "Re: [OMPI users] Valgrind writev() errors with 1.3.2.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 14:01:15 2009" -->
<!-- isoreceived="20090609180115" -->
<!-- sent="Tue, 9 Jun 2009 12:01:10 -0600" -->
<!-- isosent="20090609180110" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind writev() errors with 1.3.2." -->
<!-- id="71d2d8cc0906091101v6239fbf0p89ea84c23fbce1a2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="auto-000019651726_at_sci.utah.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 14:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9583.php">Noam Bernstein: "[OMPI users] mpirun delay"</a>
<li><strong>Previous message:</strong> <a href="9581.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9581.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9584.php">흆e Sandgren: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9584.php">흆e Sandgren: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9585.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9587.php">George Bosilca: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak to all of the OMPI code, but I can certainly create a new
<br>
configure option --valgrind-friendly that would initialize the OOB comm
<br>
buffers and other RTE-related memory to eliminate such warnings.
<br>
<p>I would prefer to configure it out rather than adding a bunch of &quot;if-then&quot;
<br>
checks for envars to avoid having the performance hit when not needed.
<br>
<p>Would that help?
<br>
<p>On Tue, Jun 9, 2009 at 11:40 AM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; jody &lt;jody.xha_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt; I made a suppression file for the irrelevant memory leaks of ompi:  I
</span><br>
<span class="quotelev2">&gt; &gt; make no claim that it catches all possible ones, but it catches all
</span><br>
<span class="quotelev2">&gt; &gt; that appear in my code.
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Jody.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What are the chances something like this could be added / maintained in
</span><br>
<span class="quotelev1">&gt; the OpenMPI tree?  It would be great to have something 1) maintained by
</span><br>
<span class="quotelev1">&gt; someone more knowledgeable about these errors than me, and 2) installed
</span><br>
<span class="quotelev1">&gt; by default when I setup my toolchain for parallel debugging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jun 9, 2009 at 3:28 PM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is worth adding to the FAQ.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jun 9, 2009, at 2:31 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Mon, 2009-06-08 at 23:41 -0600, tom fogal wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; There is a whole page on valgrind web page about this topic.
</span><br>
<span class="quotelev1">&gt; Please
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; read
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress">http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;   for more information.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Even better, Ralph (et al.) is if we could just make valgrind think
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; this is defined memory.  One can do this with client requests:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Using the Valgrind client requests unnecessarily is a very bad idea,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; they are intended for where applications use their own memory
</span><br>
<span class="quotelev1">&gt; allocator
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (i.e. replace malloc/free) or are using custom kernel modules or
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; hardware which Valgrind doesn't know about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, sure, I realize it was a bit of an abuse of the intended use of
</span><br>
<span class="quotelev1">&gt; the tool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The correct solution is either to not send un-initialised memory
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; or to suppress the error using a suppression file as George
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; said.  As the error is from MPI_Init() you can safely ignore it
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; from a end-user perspective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I mentioned in my initial message, MPI_Init is only one such
</span><br>
<span class="quotelev1">&gt; error; I get them in a lot of MPI calls, seemingly anything that does
</span><br>
<span class="quotelev1">&gt; communication.  Though I've heard differently on this list, this led me
</span><br>
<span class="quotelev1">&gt; to believe I was doing something wrong in my code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems like the only way I could verify that I'm not causing these
</span><br>
<span class="quotelev1">&gt; errors myself is to grok the call stacks I'm given for each vg error
</span><br>
<span class="quotelev1">&gt; and figure out where the uninitialized memory comes from, and then make
</span><br>
<span class="quotelev1">&gt; a judgement call for myself whether this makes sense to suppress.  Or
</span><br>
<span class="quotelev1">&gt; I could mail the list about every error I see and ask for confirmation
</span><br>
<span class="quotelev1">&gt; that it's benign/suppressable.  Most likely, I'll take the simple
</span><br>
<span class="quotelev1">&gt; approach and just use the suppression file I was given, but that's
</span><br>
<span class="quotelev1">&gt; prone to be fragile and break with a future OpenMPI release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about an environment variable which enables slower,
</span><br>
<span class="quotelev1">&gt; valgrind-friendly behavior?  There's precedent in other libraries, e.g.
</span><br>
<span class="quotelev1">&gt; glib [1].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://library.gnome.org/devel/glib/stable/glib-running.html">http://library.gnome.org/devel/glib/stable/glib-running.html</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9583.php">Noam Bernstein: "[OMPI users] mpirun delay"</a>
<li><strong>Previous message:</strong> <a href="9581.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9581.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9584.php">흆e Sandgren: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9584.php">흆e Sandgren: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9585.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9587.php">George Bosilca: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
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
