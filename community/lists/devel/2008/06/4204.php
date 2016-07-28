<?
$subject_val = "Re: [OMPI devel] PML selection logic";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 14:36:00 2008" -->
<!-- isoreceived="20080623183600" -->
<!-- sent="Mon, 23 Jun 2008 12:35:49 -0600" -->
<!-- isosent="20080623183549" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML selection logic" -->
<!-- id="C4854925.DF46%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C26BA51D-8525-47EB-893F-2B4CF242EBA9_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 14:35:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4205.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Previous message:</strong> <a href="4203.php">Jeff Squyres: "[OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>In reply to:</strong> <a href="4202.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4207.php">Brian W. Barrett: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Reply:</strong> <a href="4207.php">Brian W. Barrett: "Re: [OMPI devel] PML selection logic"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since my goal is to eliminate the modex completely for managed
<br>
installations, could you give me a brief understanding of this eventual PML
<br>
selection logic? It would help to hear an example of how and why different
<br>
procs could get different answers - and why we would want to allow them to
<br>
do so.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 6/23/08 11:59 AM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The first approach sounds fair enough to me. We should avoid 2 and 3
</span><br>
<span class="quotelev1">&gt; as the pml selection mechanism used to be
</span><br>
<span class="quotelev1">&gt; more complex before we reduced it to accommodate a major design bug in
</span><br>
<span class="quotelev1">&gt; the BTL selection process. When using the complete PML selection, BTL
</span><br>
<span class="quotelev1">&gt; would be initialized several times, leading to a variety of bugs.
</span><br>
<span class="quotelev1">&gt; Eventually the PML selection should return to its old self, when the
</span><br>
<span class="quotelev1">&gt; BTL bug gets fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 23 juin 08 &#224; 12:36, Ralph H Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yo all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've been doing further research into the modex and came across
</span><br>
<span class="quotelev2">&gt;&gt; something I
</span><br>
<span class="quotelev2">&gt;&gt; don't fully understand. It seems we have each process insert into
</span><br>
<span class="quotelev2">&gt;&gt; the modex
</span><br>
<span class="quotelev2">&gt;&gt; the name of the PML module that it selected. Once the modex has
</span><br>
<span class="quotelev2">&gt;&gt; exchanged
</span><br>
<span class="quotelev2">&gt;&gt; that info, it then loops across all procs in the job to check their
</span><br>
<span class="quotelev2">&gt;&gt; selection, and aborts if any proc picked a different PML module.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All well and good...assuming that procs actually -can- choose
</span><br>
<span class="quotelev2">&gt;&gt; different PML
</span><br>
<span class="quotelev2">&gt;&gt; modules and hence create an &quot;abort&quot; scenario. However, if I look
</span><br>
<span class="quotelev2">&gt;&gt; inside the
</span><br>
<span class="quotelev2">&gt;&gt; PML's at their selection logic, I find that a proc can ONLY pick a
</span><br>
<span class="quotelev2">&gt;&gt; module
</span><br>
<span class="quotelev2">&gt;&gt; other than ob1 if:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. the user specifies the module to use via -mca pml xyz or by using a
</span><br>
<span class="quotelev2">&gt;&gt; module specific mca param to adjust its priority. In this case,
</span><br>
<span class="quotelev2">&gt;&gt; since the
</span><br>
<span class="quotelev2">&gt;&gt; mca param is propagated, ALL procs have no choice but to pick that
</span><br>
<span class="quotelev2">&gt;&gt; same
</span><br>
<span class="quotelev2">&gt;&gt; module, so that can't cause us to abort (we will have already
</span><br>
<span class="quotelev2">&gt;&gt; returned an
</span><br>
<span class="quotelev2">&gt;&gt; error and aborted if the specified module can't run).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. the pml/cm module detects that an MTL module was selected, and
</span><br>
<span class="quotelev2">&gt;&gt; that it is
</span><br>
<span class="quotelev2">&gt;&gt; other than &quot;psm&quot;. In this case, the CM module will be selected
</span><br>
<span class="quotelev2">&gt;&gt; because its
</span><br>
<span class="quotelev2">&gt;&gt; default priority is higher than that of OB1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In looking deeper into the MTL selection logic, it appears to me
</span><br>
<span class="quotelev2">&gt;&gt; that you
</span><br>
<span class="quotelev2">&gt;&gt; either have the required capability or you don't. I can see that in
</span><br>
<span class="quotelev2">&gt;&gt; some
</span><br>
<span class="quotelev2">&gt;&gt; environments (e.g., rsh across unmanaged collections of machines),
</span><br>
<span class="quotelev2">&gt;&gt; it might
</span><br>
<span class="quotelev2">&gt;&gt; be possible for someone to launch across a set of machines where
</span><br>
<span class="quotelev2">&gt;&gt; some do and
</span><br>
<span class="quotelev2">&gt;&gt; some don't have the required support. However, in all other cases,
</span><br>
<span class="quotelev2">&gt;&gt; this will
</span><br>
<span class="quotelev2">&gt;&gt; be homogeneous across the system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Given this analysis (and someone more familiar with the PML should
</span><br>
<span class="quotelev2">&gt;&gt; feel free
</span><br>
<span class="quotelev2">&gt;&gt; to confirm or correct it), it seems to me that this could be
</span><br>
<span class="quotelev2">&gt;&gt; streamlined via
</span><br>
<span class="quotelev2">&gt;&gt; one or more means:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. at the most, we could have rank=0 add the PML module name to the
</span><br>
<span class="quotelev2">&gt;&gt; modex,
</span><br>
<span class="quotelev2">&gt;&gt; and other procs simply check it against their own and return an
</span><br>
<span class="quotelev2">&gt;&gt; error if
</span><br>
<span class="quotelev2">&gt;&gt; they differ. This accomplishes the identical functionality to what
</span><br>
<span class="quotelev2">&gt;&gt; we have
</span><br>
<span class="quotelev2">&gt;&gt; today, but with much less info in the modex.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. we could eliminate this info from the modex altogether by
</span><br>
<span class="quotelev2">&gt;&gt; requiring the
</span><br>
<span class="quotelev2">&gt;&gt; user to specify the PML module if they want something other than the
</span><br>
<span class="quotelev2">&gt;&gt; default
</span><br>
<span class="quotelev2">&gt;&gt; OB1. In this case, there can be no confusion over what each proc is
</span><br>
<span class="quotelev2">&gt;&gt; to use.
</span><br>
<span class="quotelev2">&gt;&gt; The CM module will attempt to init the MTL - if it cannot do so,
</span><br>
<span class="quotelev2">&gt;&gt; then the
</span><br>
<span class="quotelev2">&gt;&gt; job will return the correct error and tell the user that CM/MTL
</span><br>
<span class="quotelev2">&gt;&gt; support is
</span><br>
<span class="quotelev2">&gt;&gt; unavailable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. we could again eliminate the info by not inserting it into the
</span><br>
<span class="quotelev2">&gt;&gt; modex if
</span><br>
<span class="quotelev2">&gt;&gt; (a) the default PML module is selected, or (b) the user specified
</span><br>
<span class="quotelev2">&gt;&gt; the PML
</span><br>
<span class="quotelev2">&gt;&gt; module to be used. In the first case, each proc can simply check to
</span><br>
<span class="quotelev2">&gt;&gt; see if
</span><br>
<span class="quotelev2">&gt;&gt; they picked the default - if not, then we can insert the info to
</span><br>
<span class="quotelev2">&gt;&gt; indicate
</span><br>
<span class="quotelev2">&gt;&gt; the difference. Thus, in the &quot;standard&quot; case, no info will be
</span><br>
<span class="quotelev2">&gt;&gt; inserted.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the second case, we will already get an error if the specified
</span><br>
<span class="quotelev2">&gt;&gt; PML module
</span><br>
<span class="quotelev2">&gt;&gt; could not be used. Hence, the modex check provides no additional
</span><br>
<span class="quotelev2">&gt;&gt; info or
</span><br>
<span class="quotelev2">&gt;&gt; value.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I understand the motivation to support automation. However, in this
</span><br>
<span class="quotelev2">&gt;&gt; case,
</span><br>
<span class="quotelev2">&gt;&gt; the automation actually doesn't seem to buy us very much, and it isn't
</span><br>
<span class="quotelev2">&gt;&gt; coming &quot;free&quot;. So perhaps some change in how this is done would be
</span><br>
<span class="quotelev2">&gt;&gt; in order?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4205.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Previous message:</strong> <a href="4203.php">Jeff Squyres: "[OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>In reply to:</strong> <a href="4202.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4207.php">Brian W. Barrett: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Reply:</strong> <a href="4207.php">Brian W. Barrett: "Re: [OMPI devel] PML selection logic"</a>
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
