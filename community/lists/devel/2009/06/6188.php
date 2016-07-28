<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 07:40:13 2009" -->
<!-- isoreceived="20090608114013" -->
<!-- sent="Mon, 8 Jun 2009 05:39:58 -0600" -->
<!-- isosent="20090608113958" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="08BA8D17-DBBA-4470-9BE1-1F8A3C2DD22A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0905271412200.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem in the ORTE notifier framework<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 07:39:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6189.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6187.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6187.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the concern here was that we aren't entirely sure just where  
<br>
you plan to do this. If we are talking about reporting errors, then  
<br>
there is less concern about adding cycles. For example, we already  
<br>
check to see if the IB driver has exceeded the limit on retries -  
<br>
adding more logic to the code that executes when that test is positive  
<br>
is of little concern.
<br>
<p>However, if we are talking about adding warnings that are not in the  
<br>
error paths, then there is concern because that code will execute  
<br>
every time, even when there isn't a problem. There is no issue with  
<br>
using likely() directives, but I'm not sure there is general agreement  
<br>
with your analysis regarding the potential impact of adding such code,  
<br>
and the belief that it only adds one cycle doesn't appear to be  
<br>
supported by our experience to date. Hence the cautions from other  
<br>
developers.
<br>
<p>Regardless, it has been our general policy to add this kind of  
<br>
capability on a &quot;configure-in&quot; basis so that those who do not want it  
<br>
are not impacted by it. My proposed method would allow for that  
<br>
policy. Whether you use that approach, or devise your own, I do  
<br>
believe the &quot;configure-in&quot; policy really needs to be used for this  
<br>
capability.
<br>
<p>Working on a tmp branch will give developers a chance to evaluate the  
<br>
overall impact and help people in deciding whether or not to enable  
<br>
this capability. I suspect (based on prior similar proposals) that  
<br>
many will choose -not- to enable it (e.g., research clusters in  
<br>
universities), while some (e.g., large production clusters) may well  
<br>
do so, depending on exactly what you are reporting.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><p>On Jun 8, 2009, at 4:57 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for answering on this old thread, but it seems that my answer  
</span><br>
<span class="quotelev1">&gt; was blocked in the &quot;postponed&quot; folder.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About the if-then, I thought it was 1 cycle. I mean, if you don't  
</span><br>
<span class="quotelev1">&gt; break the pipeline, i.e. use likely() or builtin_expect() or  
</span><br>
<span class="quotelev1">&gt; something like that to be sure that the compiler will generate  
</span><br>
<span class="quotelev1">&gt; assembly in the right way, it shouldn't be more than 1 cycle,  
</span><br>
<span class="quotelev1">&gt; perhaps less on some architectures like Itanium [however, my multi- 
</span><br>
<span class="quotelev1">&gt; architecture view is somewhat limited to x86 and ia64, so I may be  
</span><br>
<span class="quotelev1">&gt; wrong].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, in these if-then cases where we know which branch is the more  
</span><br>
<span class="quotelev1">&gt; likely to be used, I don't think that 1 CPU cycle is really a  
</span><br>
<span class="quotelev1">&gt; problem, especially if we are already in a slow code path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a multi-compiler,multi-arch,multi-os reason not to use  
</span><br>
<span class="quotelev1">&gt; likely() directives ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 27 May 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While that is a good way of minimizing the impact of the counter,  
</span><br>
<span class="quotelev2">&gt;&gt; you still have to do an &quot;if-then&quot; to check if the counter
</span><br>
<span class="quotelev2">&gt;&gt; exceeds the threshold. This &quot;if-then&quot; also has to get executed  
</span><br>
<span class="quotelev2">&gt;&gt; every time, and generally consumes more than a few cycles.
</span><br>
<span class="quotelev2">&gt;&gt; To be clear: it isn't the output that is the concern. The output  
</span><br>
<span class="quotelev2">&gt;&gt; only occurs as an exception case, essentially equivalent
</span><br>
<span class="quotelev2">&gt;&gt; to dealing with an error, so it can be &quot;slow&quot;. The concern is with  
</span><br>
<span class="quotelev2">&gt;&gt; the impact of testing to see if the output needs to be
</span><br>
<span class="quotelev2">&gt;&gt; generated as this testing occurs every time we transit the code.
</span><br>
<span class="quotelev2">&gt;&gt; I think Jeff and I are probably closer to agreement on design than  
</span><br>
<span class="quotelev2">&gt;&gt; it might seem, and may be close to what you might also
</span><br>
<span class="quotelev2">&gt;&gt; have had in mind. Basically, I was thinking of a macro like this:
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...)
</span><br>
<span class="quotelev2">&gt;&gt; #if WANT_NOTIFIER_VERBOSE
</span><br>
<span class="quotelev2">&gt;&gt; opal_atomic_increment(counter);
</span><br>
<span class="quotelev2">&gt;&gt; if (counter &gt; threshold) {
</span><br>
<span class="quotelev2">&gt;&gt;     orte_notifier.api(.....)
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; You would set the specific thresholds for each situation via MCA  
</span><br>
<span class="quotelev2">&gt;&gt; params, so this could be tuned to fit specific needs.
</span><br>
<span class="quotelev2">&gt;&gt; Those who don't want the penalty can just build normally - those  
</span><br>
<span class="quotelev2">&gt;&gt; who want this level of information can enable it.
</span><br>
<span class="quotelev2">&gt;&gt; We can then see just how much penalty is involved in real world  
</span><br>
<span class="quotelev2">&gt;&gt; situations. My guess is that it won't be that big, but it's
</span><br>
<span class="quotelev2">&gt;&gt; hard to know without seeing how frequently we actually insert this  
</span><br>
<span class="quotelev2">&gt;&gt; code.
</span><br>
<span class="quotelev2">&gt;&gt; Hope that makes sense
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 27, 2009 at 1:25 AM, Sylvain Jeaugey &lt;sylvain.jeaugey_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;      About performance, I may miss something, but our first goal  
</span><br>
<span class="quotelev2">&gt;&gt; was to track already slow pathes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      We imagined that it could be possible to add at the beginning  
</span><br>
<span class="quotelev2">&gt;&gt; (or end) of this &quot;bad path&quot; just one line that
</span><br>
<span class="quotelev2">&gt;&gt;      would basically do an atomic inc. So, in terms of CPU cycles,  
</span><br>
<span class="quotelev2">&gt;&gt; something like 1 for the inc and maybe 1 jump
</span><br>
<span class="quotelev2">&gt;&gt;      before. Are a couple of cycles really an issue in slow pathes  
</span><br>
<span class="quotelev2">&gt;&gt; (which take at least hundreds of cycles), or do
</span><br>
<span class="quotelev2">&gt;&gt;      you fear out-of-cache memory accesses - or something else ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      As for outputs, they indeed are slow (and can slow down  
</span><br>
<span class="quotelev2">&gt;&gt; considerably an application if not synchronized), but
</span><br>
<span class="quotelev2">&gt;&gt;      aggregation on the head node should solve our problems. And if  
</span><br>
<span class="quotelev2">&gt;&gt; not, we can also disable outputs at runtime.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      So, in my opinion, no application should notice a difference  
</span><br>
<span class="quotelev2">&gt;&gt; (unless you tune the framework to output every
</span><br>
<span class="quotelev2">&gt;&gt;      warning).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Sylvain
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 26 May 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Nadia --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Sorry I didn't get to jump in on the other thread earlier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      We have made considerable changes to the notifier framework in  
</span><br>
<span class="quotelev2">&gt;&gt; a branch to better support &quot;SOS&quot;
</span><br>
<span class="quotelev2">&gt;&gt;      functionality:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       <a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Cisco and Indiana U. have been working on this branch for a  
</span><br>
<span class="quotelev2">&gt;&gt; while.  A description of the SOS stuff is
</span><br>
<span class="quotelev2">&gt;&gt;      here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       <a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      As for setting up an external web server with hg, don't bother  
</span><br>
<span class="quotelev2">&gt;&gt; -- just get an account at bitbucket.org.
</span><br>
<span class="quotelev2">&gt;&gt;       They're free and allow you to host hg repositories there.   
</span><br>
<span class="quotelev2">&gt;&gt; I've used bitbucket to collaborate on code
</span><br>
<span class="quotelev2">&gt;&gt;      before it hits OMPI's SVN trunk with both internal and  
</span><br>
<span class="quotelev2">&gt;&gt; external OMPI developers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      We can certainly move the opal-sos repo to bitbucket (or  
</span><br>
<span class="quotelev2">&gt;&gt; branch again off opal-sos to bitbucket --
</span><br>
<span class="quotelev2">&gt;&gt;      whatever makes more sense) to facilitate collaborating with you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Back on topic...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      I'd actually suggest a combination of what has been discussed  
</span><br>
<span class="quotelev2">&gt;&gt; in the other thread.  The notifier can be
</span><br>
<span class="quotelev2">&gt;&gt;      the mechanism that actually sends the output message, but it  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't have to be the mechanism that tracks
</span><br>
<span class="quotelev2">&gt;&gt;      the stats and decides when to output a message.  That can be  
</span><br>
<span class="quotelev2">&gt;&gt; separate logic, and therefore be more
</span><br>
<span class="quotelev2">&gt;&gt;      fine-grained (and potentially even specific to the MPI layer).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      The Big Question will how to do this with zero performance  
</span><br>
<span class="quotelev2">&gt;&gt; impact when it is not being used. This has
</span><br>
<span class="quotelev2">&gt;&gt;      always been the difficult issue when trying to implement any  
</span><br>
<span class="quotelev2">&gt;&gt; kind of monitoring inside the core OMPI
</span><br>
<span class="quotelev2">&gt;&gt;      performance-sensitive paths.  Even adding individual branches  
</span><br>
<span class="quotelev2">&gt;&gt; has met with resistance (in
</span><br>
<span class="quotelev2">&gt;&gt;      performance-critical code paths)...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      On May 26, 2009, at 10:59 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            While having a look at the notifier framework under  
</span><br>
<span class="quotelev2">&gt;&gt; orte, I noticed that
</span><br>
<span class="quotelev2">&gt;&gt;            the way it is written, the init routine for the selected  
</span><br>
<span class="quotelev2">&gt;&gt; module cannot
</span><br>
<span class="quotelev2">&gt;&gt;            be called.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Attached is a small patch that fixes this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Regards,
</span><br>
<span class="quotelev2">&gt;&gt;            Nadia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            &lt;orte_notifier_fix_select.patch&gt;&lt;ATT14046023.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      --
</span><br>
<span class="quotelev2">&gt;&gt;      Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;      Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;      devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6189.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6187.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6187.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
