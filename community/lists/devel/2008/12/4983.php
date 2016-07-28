<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  3 15:02:37 2008" -->
<!-- isoreceived="20081203200237" -->
<!-- sent="Wed, 3 Dec 2008 13:02:29 -0700" -->
<!-- isosent="20081203200229" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="DD828F23-3FBE-4431-8577-BF96ACA590FB_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76C9713A-E980-437F-B53B-F5F406F65D12_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-03 15:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4984.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4982.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4982.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4984.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4984.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4986.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I managed to execute the modex-less changes pretty much without  
<br>
introducing additional ORTE dependencies into the BTL's, though there  
<br>
may be some additions as we look a the other BTLs that I didn't  
<br>
address. So hopefully that won't contribute too much to the issue here.
<br>
<p>At the moment, I don't think it matters where notifier sits - it might  
<br>
be able to move to OPAL. Only catch will be if some notifier component  
<br>
requires communications. I'm thinking of FTB, for example, and our own  
<br>
local monitoring program that may require TCP messaging. We don't  
<br>
currently have anything in OPAL that would support an OPAL level  
<br>
messaging system, though perhaps that could be resolved.
<br>
<p>We also have dependencies where the BTL's will call orte_ess to find  
<br>
out what node another proc is on, the node local rank of that proc,  
<br>
etc. Those dependencies are likely to grow after the Dec meeting (see  
<br>
wiki for that agenda item), and definitely cannot be moved to OPAL.
<br>
<p>However, note that Rich stated the BTL's were -not- moving to OPAL.  
<br>
This begs the question: where -are- they going? Into their own layer?  
<br>
Will that layer be somewhere in-between OMPI and ORTE (in which case,  
<br>
the ORTE dependencies are moot)?
<br>
<p>I note that the wiki page doesn't address any of these questions,  
<br>
which is understandable if things are just getting underway. But it  
<br>
does sound like this is going to take some thought to ensure we don't  
<br>
paint ourselves into a corner.
<br>
<p>Ralph
<br>
<p><p>On Dec 3, 2008, at 12:10 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I see lots of notifier calls being added to the BTLs (and  
</span><br>
<span class="quotelev1">&gt; elsewhere throughout the OMPI code base) over time...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 3, 2008, at 2:07 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The BTLs might have added calls to the notifier framework in their  
</span><br>
<span class="quotelev2">&gt;&gt; error paths.
</span><br>
<span class="quotelev2">&gt;&gt; The notifier framework is currently in the ORTE layer... not sure  
</span><br>
<span class="quotelev2">&gt;&gt; if we could
</span><br>
<span class="quotelev2">&gt;&gt; move it down to OPAL.  Ralph, any thoughts on that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 3, 2008 at 11:56 AM, Richard Graham &lt;rlgraham_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George told me about what he is doing, so no changes would be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; committed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; until George has his changes in.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are there other changes to the btl's that we should be aware of ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/3/08 11:47 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Terry,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm involved [at some degree] in both efforts and I can confirm  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; two efforts will not affect each other in any bad way.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 3, 2008, at 11:42 , Terry Dontje wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't have any *strong* objections. However, I know that Eugene
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and George B have been working on some Fastpath code changes  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should make sure neither project obliterates the other.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Now that 1.3 will be released, we would like to go ahead with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; plan to move the btl&#185;s out of the MPI layer. Greg Koenig who is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doing most of the work has started a wiki page with details on  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; plans. Right now details are sketchy, as Greg is digging through
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the code, and has only hand written notes on data structures that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; need to be moved, include files that are not needed, etc. The  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; page
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is at:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _<a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction">https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction</a>_
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The first three steps basically only involve code motion, moving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; items such as ompi_list, and renaming them, moving where the code
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is actually located in the repository, and the like. For these we
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; do not plan to put out a formal RFC, but comments are very  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; welcome,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and any hands that are willing to help with this are even more
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; welcome.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The last phase where the btl&#185;s are made dependent on OPAL, and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; supporting libraries such as mpools I expect will be disruptive,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and will definitely require an RFC, and will also be a longer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please send comments,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4984.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4982.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4982.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4984.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4984.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4986.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
