<?
$subject_val = "Re: [OMPI devel] v1.3 RM: need a ruling";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:26:53 2008" -->
<!-- isoreceived="20080711142653" -->
<!-- sent="Fri, 11 Jul 2008 10:26:28 -0400" -->
<!-- isosent="20080711142628" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.3 RM: need a ruling" -->
<!-- id="48776D94.9060606_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C49CC4A1.E416%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.3 RM: need a ruling<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 10:26:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4318.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Previous message:</strong> <a href="4316.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4314.php">Ralph H Castain: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4316.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/11/08 7:48 AM, &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check that -- Ralph and I talked more about #1383 and have come up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a decent/better solution that a) is not wonky and b) does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; involve MCA parameter synonyms.  We're working on it in an hg and will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; put it back when done (probably within a business day or three).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I think the MCA synonym stuff *isn't* needed for v1.3 after all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I am not dead yet!!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, there was also the name change of pls_rsh_agent to plm_rsh_agent
</span><br>
<span class="quotelev2">&gt;&gt; because the pls's were sucked into plm's (or so I believe).  Anyways,
</span><br>
<span class="quotelev2">&gt;&gt; this seems like another case to support synonyms.  Also are there other
</span><br>
<span class="quotelev2">&gt;&gt; pls mca parameters that have had their names changed to plm?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you're opening a really ugly can of worms. How far back do you want
</span><br>
<span class="quotelev1">&gt; to go? v1.0? v0.1? We have a history of changing mca param names across
</span><br>
<span class="quotelev1">&gt; major releases, so trying to keep everything alive could well become a
</span><br>
<span class="quotelev1">&gt; nightmare.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I am only asking to be compatible with the last release (however that 
<br>
might have an interpretation of inifinity :-).  Seriously, though I 
<br>
think we need to be very careful about renaming mca parameters because 
<br>
this will screw production sites and ISV's which use scripts to launch 
<br>
their apps.  So a change could render their scripts useless (the 
<br>
paffinity param is a perfect example of this). 
<br>
<p>I don't really want to promote keeping everything alive forever but in 
<br>
cases where the only change is a 3-4 letter prefix it almost looks 
<br>
random to people outside of the community.
<br>
<p><span class="quotelev1">&gt; I would hate to try and figure out all the changes - and what about the
</span><br>
<span class="quotelev1">&gt; params that simply have disappeared, or had their functionality absorbed by
</span><br>
<span class="quotelev1">&gt; some combination of other params?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
So, I think if a functionality is not supported or the way you drive it 
<br>
is completely different then I agree with you trying to support a round 
<br>
peg to fit in a square hole is silly.  But if the feature is one for one 
<br>
except in name only then I think we need to ask ourselves if we really 
<br>
want/need to drop the original name. 
<br>
<span class="quotelev1">&gt; My head aches already... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Take two aspirins...
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the MCA param synonyms and &quot;deprecated&quot; stuff is useful for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the future, but at this point, nothing in v1.3 would use it.  So my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $0.02 is that we should leave it out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 10, 2008, at 2:00 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; K, will do.  Note that it turns out that we did not yet solve the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_paffinity_alone issue, but we're working on it.  I'm working on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the IOF issue ATM; will return to mpi_paffinity_alone in a bit...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 10, 2008, at 1:56 PM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm 100% with Brad on this. Please go ahead and include this feature
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the 1.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 10, 2008, at 11:33 AM, Brad Benton wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I think this is very reasonable to go ahead and include for 1.3.  I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; find that preferable to a 1.3-specific &quot;wonky&quot; workaround.  Plus,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this sounds like something that is very good to have in general.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --brad
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Jul 9, 2008 at 8:49 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; v1.3 RMs: Due to some recent work, the MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpi_paffinity_alone disappeared -- it was moved and renamed to be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_paffinity_alone.  This is Bad because we have a lot of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; historical precent based on the MCA param name
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpi_paffinity_alone&quot; (FAQ, PPT presentations, e-mails on public
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lists, etc.).  So it needed to be restored for v1.3.  I just
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; noticed that I hadn't opened a ticket on this -- sorry -- I opened
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #1383 tonight.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For a variety of reasons described in the commit message r1383,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Lenny and I first decided that it would be best to fix this problem
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; by the functionality committed in r18770 (have the ability to find
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; out where an MCA parameter was set).  This would allow us to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; register two MCA params: mpi_paffinity_alone and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_paffinity_alone, and generally do the Right Thing (because we
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; could then tell if a user had set a value or whether it was a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; default MCA param value).  This functionality will also be useful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in the openib BTL, where there is a blend of MCA parameters and INI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file parameters.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, after doing that, it seemed like only a few more steps to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; implement an overall better solution: implement &quot;synonyms&quot; for MCA
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameters.  I.e., register the name &quot;mpi_paffinity_alone&quot; as a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; synonym for opal_paffinity_alone.  Along the way, it was trivial to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; add a &quot;deprecated&quot; flag for MCA parameters that we no longer want
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to use anymore (this deprecated flag is also useful in the OB1 PML
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and openib BTL).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So to fix a problem that needed to be fixed for v1.3 (restore the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MCA parameter &quot;mpi_paffinity_alone&quot;), I ended up implementing new
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; functionality.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can this go into v1.3, or do we need to implement some kind of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; alternate fix?  (I admit to not having thought through what it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; would take to fix without the new MCA parameter functionality -- it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; might be kinda wonky)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4318.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Previous message:</strong> <a href="4316.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4314.php">Ralph H Castain: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4316.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
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
