<?
$subject_val = "Re: [OMPI users] Valgrind writev() errors with 1.3.2.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 22:43:42 2009" -->
<!-- isoreceived="20090613024342" -->
<!-- sent="Fri, 12 Jun 2009 17:21:48 -0400" -->
<!-- isosent="20090612212148" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind writev() errors with 1.3.2." -->
<!-- id="FA5B8D48-5ED1-49F6-8479-31A0B5B88A1B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ED7F46BC-0976-4FC5-B7B5-27C46890DEC5_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-12 17:21:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9619.php">Kritiraj Sajadah: "[OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="9617.php">Jeff Squyres: "Re: [OMPI users] uninstall"</a>
<li><strong>In reply to:</strong> <a href="9588.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, makes sense.  I opened a ticket a few days ago that pointed to  
<br>
the beginning of this thread.  It's just a matter of someone actually  
<br>
going to do it.  Might be useful to do both: maintain a suppression  
<br>
file in the distribution and put something in the FAQ.
<br>
<p><p>On Jun 9, 2009, at 6:31 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Sounds like the better solution to me! And far less work... ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps if we post a valgrind suppression file on the OMPI web site,
</span><br>
<span class="quotelev1">&gt; and/or include it in our releases, we could help users avoid the
</span><br>
<span class="quotelev1">&gt; problems. We could update the file as more areas are identified so we
</span><br>
<span class="quotelev1">&gt; eventually have a really good suppression file for people to use!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2009, at 1:22 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It is not as simple as it sound. The problem is not coming from the
</span><br>
<span class="quotelev2">&gt; &gt; OOB, it just surface there. The header we add on the wire is well
</span><br>
<span class="quotelev2">&gt; &gt; aligned and completely initialized. The problem is coming from the
</span><br>
<span class="quotelev2">&gt; &gt; buffer that the OOB TCP is asked to send, buffer which is only
</span><br>
<span class="quotelev2">&gt; &gt; partially initialized. This buffer is not something that the OOB can
</span><br>
<span class="quotelev2">&gt; &gt; set, so the proposed approach will not work. Unfortunately, in order
</span><br>
<span class="quotelev2">&gt; &gt; to completely remove these false positives, all layer using OOB
</span><br>
<span class="quotelev2">&gt; &gt; would have to be scanned in order to make sure that they avoid
</span><br>
<span class="quotelev2">&gt; &gt; sending uninitialized data. This is way too much work, for a so
</span><br>
<span class="quotelev2">&gt; &gt; little benefit.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As the user level is not supposed to use the OOB to send data, all
</span><br>
<span class="quotelev2">&gt; &gt; calls going from orte_rml_oob_send can be safely ignored by
</span><br>
<span class="quotelev2">&gt; &gt; valgrind. I'll advocate the usage of the following suppression rule
</span><br>
<span class="quotelev2">&gt; &gt; with valgrind. This will save a lot of output for the user, and save
</span><br>
<span class="quotelev2">&gt; &gt; us (ompi developers) a lot of time!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;  ORTE OOB suppression rule
</span><br>
<span class="quotelev2">&gt; &gt;  Memcheck:Param
</span><br>
<span class="quotelev2">&gt; &gt;  writev(vector[...])
</span><br>
<span class="quotelev2">&gt; &gt;  fun:writev
</span><br>
<span class="quotelev2">&gt; &gt;  ...
</span><br>
<span class="quotelev2">&gt; &gt;  fun:orte_rml_oob_send
</span><br>
<span class="quotelev2">&gt; &gt;  ...
</span><br>
<span class="quotelev2">&gt; &gt;  fun:main
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 9, 2009, at 11:01 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I can't speak to all of the OMPI code, but I can certainly create a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; new configure option --valgrind-friendly that would initialize the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OOB comm buffers and other RTE-related memory to eliminate such
</span><br>
<span class="quotelev3">&gt; &gt;&gt; warnings.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would prefer to configure it out rather than adding a bunch of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;if-then&quot; checks for envars to avoid having the performance hit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when not needed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Would that help?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Jun 9, 2009 at 11:40 AM, tom fogal &lt;tfogal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jody &lt;jody.xha_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I made a suppression file for the irrelevant memory leaks of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi:  I
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; make no claim that it catches all possible ones, but it catches  
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; that appear in my code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [snip]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks, Jody.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What are the chances something like this could be added /
</span><br>
<span class="quotelev3">&gt; &gt;&gt; maintained in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the OpenMPI tree?  It would be great to have something 1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; maintained by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; someone more knowledgeable about these errors than me, and 2)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; installed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; by default when I setup my toolchain for parallel debugging.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On Tue, Jun 9, 2009 at 3:28 PM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; This is worth adding to the FAQ.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; On Jun 9, 2009, at 2:31 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt; &gt;&gt; On Mon, 2009-06-08 at 23:41 -0600, tom fogal wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt; &gt;&gt; &gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; &gt;&gt; &gt; &gt; There is a whole page on valgrind web page about this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; topic. Please
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; &gt;&gt; &gt; &gt; read
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; &gt;&gt; &gt; &gt; <a href="http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress">http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; &gt;&gt; &gt; &gt;   for more information.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt; &gt;&gt; &gt; Even better, Ralph (et al.) is if we could just make
</span><br>
<span class="quotelev3">&gt; &gt;&gt; valgrind think
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt; &gt;&gt; &gt; this is defined memory.  One can do this with client  
</span><br>
<span class="quotelev1">&gt; requests:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt; &gt;&gt; &gt;   <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt; &gt;&gt; Using the Valgrind client requests unnecessarily is a very bad
</span><br>
<span class="quotelev3">&gt; &gt;&gt; idea,
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt; &gt;&gt; they are intended for where applications use their own memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; allocator
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt; &gt;&gt; (i.e. replace malloc/free) or are using custom kernel  
</span><br>
<span class="quotelev1">&gt; modules or
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt; &gt;&gt; hardware which Valgrind doesn't know about.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Okay, sure, I realize it was a bit of an abuse of the intended  
</span><br>
<span class="quotelev1">&gt; use of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the tool.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt; &gt;&gt; The correct solution is either to not send un-initialised  
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt; &gt;&gt; or to suppress the error using a suppression file as George
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt; &gt;&gt; said.  As the error is from MPI_Init() you can safely ignore  
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt; &gt;&gt; from a end-user perspective.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As I mentioned in my initial message, MPI_Init is only one such
</span><br>
<span class="quotelev3">&gt; &gt;&gt; error; I get them in a lot of MPI calls, seemingly anything that  
</span><br>
<span class="quotelev1">&gt; does
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communication.  Though I've heard differently on this list, this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; led me
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to believe I was doing something wrong in my code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It seems like the only way I could verify that I'm not causing  
</span><br>
<span class="quotelev1">&gt; these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; errors myself is to grok the call stacks I'm given for each vg  
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and figure out where the uninitialized memory comes from, and then
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a judgement call for myself whether this makes sense to  
</span><br>
<span class="quotelev1">&gt; suppress.  Or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I could mail the list about every error I see and ask for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; confirmation
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that it's benign/suppressable.  Most likely, I'll take the simple
</span><br>
<span class="quotelev3">&gt; &gt;&gt; approach and just use the suppression file I was given, but that's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; prone to be fragile and break with a future OpenMPI release.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What about an environment variable which enables slower,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; valgrind-friendly behavior?  There's precedent in other libraries,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; e.g.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; glib [1].
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -tom
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [1] <a href="http://library.gnome.org/devel/glib/stable/glib-running.html">http://library.gnome.org/devel/glib/stable/glib-running.html</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9619.php">Kritiraj Sajadah: "[OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="9617.php">Jeff Squyres: "Re: [OMPI users] uninstall"</a>
<li><strong>In reply to:</strong> <a href="9588.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
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
