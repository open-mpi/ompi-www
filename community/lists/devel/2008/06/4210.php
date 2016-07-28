<?
$subject_val = "Re: [OMPI devel] PML selection logic";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 15:31:51 2008" -->
<!-- isoreceived="20080623193151" -->
<!-- sent="Mon, 23 Jun 2008 15:31:43 -0400 (EDT)" -->
<!-- isosent="20080623193143" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML selection logic" -->
<!-- id="Pine.LNX.4.64.0806231530000.14475_at_marvin.we-be-smart.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C4855566.DF56%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PML selection logic<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 15:31:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4211.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4209.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4209.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4211.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Reply:</strong> <a href="4211.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that we default to OB1, but that's not the right choice for 
<br>
some platforms (like Pathscale / PSM), where there's a huge performance 
<br>
hit for using OB1.  So we run into a situation where user installs Open 
<br>
MPI, starts running, gets horrible performance, bad mouths Open MPI, and 
<br>
now we're in that game again.  Yeah, the sys admin should know what to do, 
<br>
but it doesn't always work that way.
<br>
<p>Brian
<br>
<p><p>On Mon, 23 Jun 2008, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; My fault - I should be more precise in my language. ;-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1 is not adequate, IMHO, as it forces us to -always- do a modex. It seems
</span><br>
<span class="quotelev1">&gt; to me that a simpler solution to what you describe is for the user to
</span><br>
<span class="quotelev1">&gt; specify -mca pml ob1, or -mca pml cm. If the latter, then you could deal
</span><br>
<span class="quotelev1">&gt; with the failed-to-initialize problem cleanly by having the proc directly
</span><br>
<span class="quotelev1">&gt; abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, sometimes I think we attempt to automate too many things. This seems
</span><br>
<span class="quotelev1">&gt; like a pretty clear case where you know what you want - the sys admin, if
</span><br>
<span class="quotelev1">&gt; nobody else, can certainly set that mca param in the default param file!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, it seems to me that you are relying on the modex to detect that
</span><br>
<span class="quotelev1">&gt; your proc failed to init the correct subsystem. I hate to force a modex just
</span><br>
<span class="quotelev1">&gt; for that - if so, then perhaps this could again be a settable option to
</span><br>
<span class="quotelev1">&gt; avoid requiring non-scalable behavior for those of us who want scalability?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/23/08 1:21 PM, &quot;Brian W. Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The selection code was added because frequently high speed interconnects
</span><br>
<span class="quotelev2">&gt;&gt; fail to initialize properly due to random stuff happening (yes, that's a
</span><br>
<span class="quotelev2">&gt;&gt; horrible statement, but true).  We ran into a situation with some really
</span><br>
<span class="quotelev2">&gt;&gt; flaky machines where most of the processes would chose CM, but a couple
</span><br>
<span class="quotelev2">&gt;&gt; would fail to initialize the MTL and therefore chose OB1.  This lead to a
</span><br>
<span class="quotelev2">&gt;&gt; hang situation, which is the worst of the worst.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think #1 is adequate, although it doesn't handle spawn particularly
</span><br>
<span class="quotelev2">&gt;&gt; well.  And spawn is generally used in environments where such network
</span><br>
<span class="quotelev2">&gt;&gt; mismatches are most likely to occur.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 23 Jun 2008, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since my goal is to eliminate the modex completely for managed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installations, could you give me a brief understanding of this eventual PML
</span><br>
<span class="quotelev3">&gt;&gt;&gt; selection logic? It would help to hear an example of how and why different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs could get different answers - and why we would want to allow them to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 6/23/08 11:59 AM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The first approach sounds fair enough to me. We should avoid 2 and 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as the pml selection mechanism used to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more complex before we reduced it to accommodate a major design bug in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the BTL selection process. When using the complete PML selection, BTL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would be initialized several times, leading to a variety of bugs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eventually the PML selection should return to its old self, when the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTL bug gets fixed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 23 juin 08 &#224; 12:36, Ralph H Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yo all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've been doing further research into the modex and came across
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; don't fully understand. It seems we have each process insert into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the modex
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the name of the PML module that it selected. Once the modex has
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exchanged
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that info, it then loops across all procs in the job to check their
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; selection, and aborts if any proc picked a different PML module.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; All well and good...assuming that procs actually -can- choose
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different PML
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modules and hence create an &quot;abort&quot; scenario. However, if I look
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; inside the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PML's at their selection logic, I find that a proc can ONLY pick a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; module
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; other than ob1 if:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. the user specifies the module to use via -mca pml xyz or by using a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; module specific mca param to adjust its priority. In this case,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; since the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca param is propagated, ALL procs have no choice but to pick that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; module, so that can't cause us to abort (we will have already
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; returned an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error and aborted if the specified module can't run).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. the pml/cm module detects that an MTL module was selected, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that it is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; other than &quot;psm&quot;. In this case, the CM module will be selected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; because its
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; default priority is higher than that of OB1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In looking deeper into the MTL selection logic, it appears to me
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; either have the required capability or you don't. I can see that in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environments (e.g., rsh across unmanaged collections of machines),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it might
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be possible for someone to launch across a set of machines where
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some do and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some don't have the required support. However, in all other cases,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be homogeneous across the system.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Given this analysis (and someone more familiar with the PML should
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; feel free
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to confirm or correct it), it seems to me that this could be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; streamlined via
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one or more means:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. at the most, we could have rank=0 add the PML module name to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modex,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and other procs simply check it against their own and return an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they differ. This accomplishes the identical functionality to what
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; today, but with much less info in the modex.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. we could eliminate this info from the modex altogether by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; requiring the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; user to specify the PML module if they want something other than the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OB1. In this case, there can be no confusion over what each proc is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to use.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The CM module will attempt to init the MTL - if it cannot do so,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; job will return the correct error and tell the user that CM/MTL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unavailable.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3. we could again eliminate the info by not inserting it into the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modex if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (a) the default PML module is selected, or (b) the user specified
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the PML
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; module to be used. In the first case, each proc can simply check to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; see if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they picked the default - if not, then we can insert the info to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; indicate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the difference. Thus, in the &quot;standard&quot; case, no info will be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; inserted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In the second case, we will already get an error if the specified
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PML module
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could not be used. Hence, the modex check provides no additional
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; info or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I understand the motivation to support automation. However, in this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; case,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the automation actually doesn't seem to buy us very much, and it isn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; coming &quot;free&quot;. So perhaps some change in how this is done would be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in order?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4211.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4209.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4209.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4211.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Reply:</strong> <a href="4211.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
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
