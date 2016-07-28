<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 09:06:05 2008" -->
<!-- isoreceived="20081204140605" -->
<!-- sent="Thu, 4 Dec 2008 09:05:51 -0500" -->
<!-- isosent="20081204140551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="DB58B507-847B-45E6-ABC0-97BDAC87BB00_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="779CE9B4-60B0-4A9E-9D8F-460E2B1B4621_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Preparations for moving the btl's<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 09:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4991.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4989.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4988.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4991.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4991.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4992.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After reflecting on this a bit, there's two more things I should have  
<br>
mentioned:
<br>
<p>1. I think that moving the BTL's out into their own layer (or  
<br>
whatever) should be a separate effort than re-introducing the RSL (or  
<br>
something like it).  To me, they're two different things and should be  
<br>
addressed separately.
<br>
2. With both the BTLs and some incarnation of RSL coming into the code  
<br>
base, we need to decide exactly what our policies will be on who can  
<br>
drive interface changes and what our responsibilities will be to  
<br>
external code bases that use the BTL and/or RSL interfaces.
<br>
<p>FYI: Re-introducing the some form of the RSL is already on either the  
<br>
December or January ORTE meeting agenda (I don't remember which  
<br>
offhand).
<br>
<p><p>On Dec 4, 2008, at 8:13 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think you got it right.  And I think we're pretty good in terms of  
</span><br>
<span class="quotelev1">&gt; BTL usage of ORTE and OPAL (to include the new &quot;notifier&quot; service  
</span><br>
<span class="quotelev1">&gt; that Ralph put in recently -- what the FTB will likely eventually  
</span><br>
<span class="quotelev1">&gt; use, I think...?); those interfaces and abstraction barriers are  
</span><br>
<span class="quotelev1">&gt; technologically enforced.  If you break the abstractions, the linker  
</span><br>
<span class="quotelev1">&gt; will swiftly and unmercifully punish you.  (this was exactly [one  
</span><br>
<span class="quotelev1">&gt; of] the rationale that we used for splitting the code base into  
</span><br>
<span class="quotelev1">&gt; OPAL, ORTE, and OMPI several years ago)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg has already noted on the wiki a few constants used in the BTL's  
</span><br>
<span class="quotelev1">&gt; that have an OMPI_ prefix that aren't really OMPI values (e.g.,  
</span><br>
<span class="quotelev1">&gt; OMPI_ENABLE_HETEROGENEOUS_SUPPORT).  These come from configure  
</span><br>
<span class="quotelev1">&gt; (i.e., opal/include/opal_config.h) and were not renamed back when we  
</span><br>
<span class="quotelev1">&gt; split the code base into OPAL, ORTE, and OMPI.  I don't think we had  
</span><br>
<span class="quotelev1">&gt; a strong reason for not renaming them -- most could probably be  
</span><br>
<span class="quotelev1">&gt; renamed to OPAL_* -- we just didn't do it then.  Perhaps they can be  
</span><br>
<span class="quotelev1">&gt; changed during the BTL extraction process (I noted this on the wiki).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 3, 2008, at 9:43 PM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW,
</span><br>
<span class="quotelev2">&gt;&gt;  I was guessing FTB is Fault Tolerant Backbone, but if not, can  
</span><br>
<span class="quotelev2">&gt;&gt; someone tell me what it is ?  If it is not the later, what I just  
</span><br>
<span class="quotelev2">&gt;&gt; wrote about it makes no sense.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/3/08 9:34 PM, &quot;Richard Graham&quot; &lt;rlgraham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The goal is to use the btl&#146;s outside of the context of MPI, which  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was what was in mind from the day the ompi work started over five  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; years ago, but with no other use at the time, things grew up  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intermingled &#150; no surprise at all.  What we are attempting to do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is to untangle the existing dependencies, and make a much cleaner  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distinction between how/what data is passed between layers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I expect this will involve some sort of well defined interface  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between the btl&#146;s and orte, and I don&#146;t know if this will also  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; require something like this between the btl&#146;s and the pml &#150; I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think that interface is rigidly enforced, but am not sure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I expect that explicit calls to FTB in the btl layer would have to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be componentized, especially in the context of what is developing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the FT working group of the MPI Forum.  Not that FTB is bad in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any way, just that it is one of many monitors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We will need to talk about this on a case by case basis, and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decide how to proceed.  If anyone wants to help, please do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/3/08 3:02 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I managed to execute the modex-less changes pretty much without
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; introducing additional ORTE dependencies into the BTL's, though  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; may be some additions as we look a the other BTLs that I didn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; address. So hopefully that won't contribute too much to the issue  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At the moment, I don't think it matters where notifier sits - it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; might
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be able to move to OPAL. Only catch will be if some notifier  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requires communications. I'm thinking of FTB, for example, and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; our own
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; local monitoring program that may require TCP messaging. We don't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; currently have anything in OPAL that would support an OPAL level
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; messaging system, though perhaps that could be resolved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We also have dependencies where the BTL's will call orte_ess to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out what node another proc is on, the node local rank of that proc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; etc. Those dependencies are likely to grow after the Dec meeting  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wiki for that agenda item), and definitely cannot be moved to OPAL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, note that Rich stated the BTL's were -not- moving to OPAL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This begs the question: where -are- they going? Into their own  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; layer?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Will that layer be somewhere in-between OMPI and ORTE (in which  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the ORTE dependencies are moot)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I note that the wiki page doesn't address any of these questions,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which is understandable if things are just getting underway. But it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does sound like this is going to take some thought to ensure we  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paint ourselves into a corner.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 3, 2008, at 12:10 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; FWIW, I see lots of notifier calls being added to the BTLs (and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; elsewhere throughout the OMPI code base) over time...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On Dec 3, 2008, at 2:07 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; The BTLs might have added calls to the notifier framework in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; their
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; error paths.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; The notifier framework is currently in the ORTE layer... not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sure
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; if we could
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; move it down to OPAL.  Ralph, any thoughts on that?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; On Wed, Dec 3, 2008 at 11:56 AM, Richard Graham &lt;rlgraham_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; George told me about what he is doing, so no changes would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; committed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; until George has his changes in.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Are there other changes to the btl's that we should be aware  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; On 12/3/08 11:47 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Terry,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; I'm involved [at some degree] in both efforts and I can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; confirm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; two efforts will not affect each other in any bad way.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; On Dec 3, 2008, at 11:42 , Terry Dontje wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; I don't have any *strong* objections. However, I know that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eugene
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; and George B have been working on some Fastpath code changes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; that we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; should make sure neither project obliterates the other.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Now that 1.3 will be released, we would like to go ahead  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; plan to move the btl&#146;s out of the MPI layer. Greg Koenig  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; who is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; doing most of the work has started a wiki page with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; details on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; plans. Right now details are sketchy, as Greg is digging  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; through
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; the code, and has only hand written notes on data  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; structures that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; need to be moved, include files that are not needed, etc.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; page
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; is at:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; _<a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction">https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction</a>_
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; The first three steps basically only involve code motion,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; moving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; items such as ompi_list, and renaming them, moving where  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the code
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; is actually located in the repository, and the like. For  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these we
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; do not plan to put out a formal RFC, but comments are very
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; welcome,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; and any hands that are willing to help with this are even  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; welcome.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; The last phase where the btl&#146;s are made dependent on OPAL,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; supporting libraries such as mpools I expect will be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; disruptive,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; and will definitely require an RFC, and will also be a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; longer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; process.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Please send comments,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4991.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4989.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4988.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4991.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4991.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4992.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
