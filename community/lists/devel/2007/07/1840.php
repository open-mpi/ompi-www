<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 13:26:42 2007" -->
<!-- isoreceived="20070710172642" -->
<!-- sent="Tue, 10 Jul 2007 11:26:31 -0600" -->
<!-- isosent="20070710172631" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="C2B91D67.9DDA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D2DBCBE9-BF8C-44F0-B462-F3E0EC3705A5_at_cisco.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 13:26:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1841.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1839.php">Jeff Squyres: "Re: [OMPI devel] Bproc support"</a>
<li><strong>In reply to:</strong> <a href="1838.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that is quite accurate and would be helpful in resolving the
<br>
problem...
<br>
<p><p>On 7/10/07 10:32 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Point taken.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this an accurate summary?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. &quot;Best practices&quot; should be documented, to include sysadmins
</span><br>
<span class="quotelev1">&gt; specifically itemizing what components should be used on their
</span><br>
<span class="quotelev1">&gt; systems (e.g., in an environment variable or the system-wide MCA
</span><br>
<span class="quotelev1">&gt; parameters file).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. It may be useful to have some high-level parameters to specify a
</span><br>
<span class="quotelev1">&gt; specific run-time environment, since ORTE has multiple, related
</span><br>
<span class="quotelev1">&gt; frameworks (e.g., RAS and PLS).  E.g., &quot;orte_base_launcher=tm&quot;, or
</span><br>
<span class="quotelev1">&gt; somesuch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2007, at 9:08 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I was talking specifically about configuration at build
</span><br>
<span class="quotelev2">&gt;&gt; time. I
</span><br>
<span class="quotelev2">&gt;&gt; realize there are trade-offs here, and suspect we can find a common
</span><br>
<span class="quotelev2">&gt;&gt; ground.
</span><br>
<span class="quotelev2">&gt;&gt; The problem with using the options Jeff described is that they require
</span><br>
<span class="quotelev2">&gt;&gt; knowledge on the part of the builder as to what environments have
</span><br>
<span class="quotelev2">&gt;&gt; had their
</span><br>
<span class="quotelev2">&gt;&gt; include files/libraries installed on the file system of this
</span><br>
<span class="quotelev2">&gt;&gt; particular
</span><br>
<span class="quotelev2">&gt;&gt; machine. And unfortunately, not every component is protected by these
</span><br>
<span class="quotelev2">&gt;&gt; &quot;sentinel&quot; variables, nor does it appear possible to do so in a
</span><br>
<span class="quotelev2">&gt;&gt; &quot;guaranteed
</span><br>
<span class="quotelev2">&gt;&gt; safe&quot; manner.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that I didn't say &quot;installed on their machine&quot;. In most cases,
</span><br>
<span class="quotelev2">&gt;&gt; these
</span><br>
<span class="quotelev2">&gt;&gt; alternative environments are not currently installed at all - they
</span><br>
<span class="quotelev2">&gt;&gt; are stale
</span><br>
<span class="quotelev2">&gt;&gt; files, or were placed on the file system by someone that wanted to
</span><br>
<span class="quotelev2">&gt;&gt; look at
</span><br>
<span class="quotelev2">&gt;&gt; their documentation, or whatever. The problem is that Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; blindly picks
</span><br>
<span class="quotelev2">&gt;&gt; them up and attempts to use them, with sometimes disastrous and
</span><br>
<span class="quotelev2">&gt;&gt; frequently
</span><br>
<span class="quotelev2">&gt;&gt; unpredictable ways.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence, the user can be &quot;astonished&quot; to find that an application
</span><br>
<span class="quotelev2">&gt;&gt; that worked
</span><br>
<span class="quotelev2">&gt;&gt; perfectly yesterday suddenly segfaults today - because someone
</span><br>
<span class="quotelev2">&gt;&gt; decided one
</span><br>
<span class="quotelev2">&gt;&gt; day, for example, to un-tar the bproc files in a public place where
</span><br>
<span class="quotelev2">&gt;&gt; we pick
</span><br>
<span class="quotelev2">&gt;&gt; them up, and then someone else (perhaps a sys admin or the user
</span><br>
<span class="quotelev2">&gt;&gt; themselves)
</span><br>
<span class="quotelev2">&gt;&gt; at some later time rebuilt Open MPI to bring in an update.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now imagine being a software provider who gets the call about a
</span><br>
<span class="quotelev2">&gt;&gt; problem with
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI and has to figure out what the heck happened....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My suggested solution may not be the best, which is why I put it
</span><br>
<span class="quotelev2">&gt;&gt; out there
</span><br>
<span class="quotelev2">&gt;&gt; for discussion. One alternative might be for us to instruct sys
</span><br>
<span class="quotelev2">&gt;&gt; admins to
</span><br>
<span class="quotelev2">&gt;&gt; put MCA params in their default param file that force selection of the
</span><br>
<span class="quotelev2">&gt;&gt; proper components for each framework. Thus, someone with an lsf
</span><br>
<span class="quotelev2">&gt;&gt; system would
</span><br>
<span class="quotelev2">&gt;&gt; enter:  pls=lsf ras=lsf sds=lsf in their config file to ensure that
</span><br>
<span class="quotelev2">&gt;&gt; only lsf
</span><br>
<span class="quotelev2">&gt;&gt; was used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The negative to that approach is that we would have to warn
</span><br>
<span class="quotelev2">&gt;&gt; everyone any
</span><br>
<span class="quotelev2">&gt;&gt; time that list changed (e.g., a new component for a new framework).
</span><br>
<span class="quotelev2">&gt;&gt; Another
</span><br>
<span class="quotelev2">&gt;&gt; option to help that problem, of course, would be to set one mca
</span><br>
<span class="quotelev2">&gt;&gt; param (say
</span><br>
<span class="quotelev2">&gt;&gt; something like &quot;enviro=lsf&quot;) that we would use internal to Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; to set
</span><br>
<span class="quotelev2">&gt;&gt; the individual components correctly - i.e., we would hold the list of
</span><br>
<span class="quotelev2">&gt;&gt; relevant frameworks internally since (hopefully) we know what they
</span><br>
<span class="quotelev2">&gt;&gt; should be
</span><br>
<span class="quotelev2">&gt;&gt; for a given environment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, I'm glad people are looking at this and suggesting
</span><br>
<span class="quotelev2">&gt;&gt; solutions. It is
</span><br>
<span class="quotelev2">&gt;&gt; a problem that seems to be biting us recently and may become a
</span><br>
<span class="quotelev2">&gt;&gt; bigger issue
</span><br>
<span class="quotelev2">&gt;&gt; as the user community grows.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/10/07 6:12 AM, &quot;Bogdan Costescu&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Bogdan.Costescu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, 10 Jul 2007, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do either of these work for you?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will report back in a bit, I'm now in the middle of an OS upgrade on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But my question was more like: is this a configuration that should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; theoretically work ? Or in other words, are there known dependencies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on rsh that would make a rsh-less build not work or work with reduced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Most batch systems today set a sentinel environment variable that we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; check for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that we talk about slightly different things - my impression
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was that the OP was asking about detection at config time, while your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; statements make perfect sense to me if they are relative to detection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at run-time. If the OP was indeed asking about run-time detection,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then I apologize for the time you wasted on reading and replying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; questions...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's what the compile-time vs. run-time detection and selection is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supposed to be for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I understand that, it's the same type of mechanism as in LAM/MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which it's not that foreign to me ;-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1841.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1839.php">Jeff Squyres: "Re: [OMPI devel] Bproc support"</a>
<li><strong>In reply to:</strong> <a href="1838.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
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
