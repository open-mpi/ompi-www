<?
$subject_val = "Re: [OMPI devel] PML selection logic";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 13:59:43 2008" -->
<!-- isoreceived="20080623175943" -->
<!-- sent="Mon, 23 Jun 2008 13:59:32 -0400" -->
<!-- isosent="20080623175932" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML selection logic" -->
<!-- id="C26BA51D-8525-47EB-893F-2B4CF242EBA9_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4852D37.DF32%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 13:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4203.php">Jeff Squyres: "[OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Previous message:</strong> <a href="4201.php">Tim Mattox: "Re: [OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>In reply to:</strong> <a href="4200.php">Ralph H Castain: "[OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4204.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Reply:</strong> <a href="4204.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The first approach sounds fair enough to me. We should avoid 2 and 3  
<br>
as the pml selection mechanism used to be
<br>
more complex before we reduced it to accommodate a major design bug in  
<br>
the BTL selection process. When using the complete PML selection, BTL  
<br>
would be initialized several times, leading to a variety of bugs.  
<br>
Eventually the PML selection should return to its old self, when the  
<br>
BTL bug gets fixed.
<br>
<p>Aurelien
<br>
<p>Le 23 juin 08 &#224; 12:36, Ralph H Castain a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Yo all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been doing further research into the modex and came across  
</span><br>
<span class="quotelev1">&gt; something I
</span><br>
<span class="quotelev1">&gt; don't fully understand. It seems we have each process insert into  
</span><br>
<span class="quotelev1">&gt; the modex
</span><br>
<span class="quotelev1">&gt; the name of the PML module that it selected. Once the modex has  
</span><br>
<span class="quotelev1">&gt; exchanged
</span><br>
<span class="quotelev1">&gt; that info, it then loops across all procs in the job to check their
</span><br>
<span class="quotelev1">&gt; selection, and aborts if any proc picked a different PML module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All well and good...assuming that procs actually -can- choose  
</span><br>
<span class="quotelev1">&gt; different PML
</span><br>
<span class="quotelev1">&gt; modules and hence create an &quot;abort&quot; scenario. However, if I look  
</span><br>
<span class="quotelev1">&gt; inside the
</span><br>
<span class="quotelev1">&gt; PML's at their selection logic, I find that a proc can ONLY pick a  
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; other than ob1 if:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. the user specifies the module to use via -mca pml xyz or by using a
</span><br>
<span class="quotelev1">&gt; module specific mca param to adjust its priority. In this case,  
</span><br>
<span class="quotelev1">&gt; since the
</span><br>
<span class="quotelev1">&gt; mca param is propagated, ALL procs have no choice but to pick that  
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev1">&gt; module, so that can't cause us to abort (we will have already  
</span><br>
<span class="quotelev1">&gt; returned an
</span><br>
<span class="quotelev1">&gt; error and aborted if the specified module can't run).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. the pml/cm module detects that an MTL module was selected, and  
</span><br>
<span class="quotelev1">&gt; that it is
</span><br>
<span class="quotelev1">&gt; other than &quot;psm&quot;. In this case, the CM module will be selected  
</span><br>
<span class="quotelev1">&gt; because its
</span><br>
<span class="quotelev1">&gt; default priority is higher than that of OB1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In looking deeper into the MTL selection logic, it appears to me  
</span><br>
<span class="quotelev1">&gt; that you
</span><br>
<span class="quotelev1">&gt; either have the required capability or you don't. I can see that in  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; environments (e.g., rsh across unmanaged collections of machines),  
</span><br>
<span class="quotelev1">&gt; it might
</span><br>
<span class="quotelev1">&gt; be possible for someone to launch across a set of machines where  
</span><br>
<span class="quotelev1">&gt; some do and
</span><br>
<span class="quotelev1">&gt; some don't have the required support. However, in all other cases,  
</span><br>
<span class="quotelev1">&gt; this will
</span><br>
<span class="quotelev1">&gt; be homogeneous across the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given this analysis (and someone more familiar with the PML should  
</span><br>
<span class="quotelev1">&gt; feel free
</span><br>
<span class="quotelev1">&gt; to confirm or correct it), it seems to me that this could be  
</span><br>
<span class="quotelev1">&gt; streamlined via
</span><br>
<span class="quotelev1">&gt; one or more means:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. at the most, we could have rank=0 add the PML module name to the  
</span><br>
<span class="quotelev1">&gt; modex,
</span><br>
<span class="quotelev1">&gt; and other procs simply check it against their own and return an  
</span><br>
<span class="quotelev1">&gt; error if
</span><br>
<span class="quotelev1">&gt; they differ. This accomplishes the identical functionality to what  
</span><br>
<span class="quotelev1">&gt; we have
</span><br>
<span class="quotelev1">&gt; today, but with much less info in the modex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. we could eliminate this info from the modex altogether by  
</span><br>
<span class="quotelev1">&gt; requiring the
</span><br>
<span class="quotelev1">&gt; user to specify the PML module if they want something other than the  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; OB1. In this case, there can be no confusion over what each proc is  
</span><br>
<span class="quotelev1">&gt; to use.
</span><br>
<span class="quotelev1">&gt; The CM module will attempt to init the MTL - if it cannot do so,  
</span><br>
<span class="quotelev1">&gt; then the
</span><br>
<span class="quotelev1">&gt; job will return the correct error and tell the user that CM/MTL  
</span><br>
<span class="quotelev1">&gt; support is
</span><br>
<span class="quotelev1">&gt; unavailable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. we could again eliminate the info by not inserting it into the  
</span><br>
<span class="quotelev1">&gt; modex if
</span><br>
<span class="quotelev1">&gt; (a) the default PML module is selected, or (b) the user specified  
</span><br>
<span class="quotelev1">&gt; the PML
</span><br>
<span class="quotelev1">&gt; module to be used. In the first case, each proc can simply check to  
</span><br>
<span class="quotelev1">&gt; see if
</span><br>
<span class="quotelev1">&gt; they picked the default - if not, then we can insert the info to  
</span><br>
<span class="quotelev1">&gt; indicate
</span><br>
<span class="quotelev1">&gt; the difference. Thus, in the &quot;standard&quot; case, no info will be  
</span><br>
<span class="quotelev1">&gt; inserted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the second case, we will already get an error if the specified  
</span><br>
<span class="quotelev1">&gt; PML module
</span><br>
<span class="quotelev1">&gt; could not be used. Hence, the modex check provides no additional  
</span><br>
<span class="quotelev1">&gt; info or
</span><br>
<span class="quotelev1">&gt; value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand the motivation to support automation. However, in this  
</span><br>
<span class="quotelev1">&gt; case,
</span><br>
<span class="quotelev1">&gt; the automation actually doesn't seem to buy us very much, and it isn't
</span><br>
<span class="quotelev1">&gt; coming &quot;free&quot;. So perhaps some change in how this is done would be  
</span><br>
<span class="quotelev1">&gt; in order?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4203.php">Jeff Squyres: "[OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Previous message:</strong> <a href="4201.php">Tim Mattox: "Re: [OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>In reply to:</strong> <a href="4200.php">Ralph H Castain: "[OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4204.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Reply:</strong> <a href="4204.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
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
