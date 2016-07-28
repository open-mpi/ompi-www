<?
$subject_val = "Re: [OMPI devel] [RFC] mca_base_open() NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 11:05:34 2008" -->
<!-- isoreceived="20080508150534" -->
<!-- sent="Thu, 8 May 2008 11:05:22 -0400" -->
<!-- isosent="20080508150522" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] mca_base_open() NULL" -->
<!-- id="0CEB840D-5FEA-43D0-B9EC-DED524D6D2F0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3DA32D43-5704-4C76-80AC-0AE8ABC44CE4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] mca_base_open() NULL<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 11:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3863.php">Mukesh K Srivastava: "Re: [OMPI devel] [OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>Previous message:</strong> <a href="3861.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3861.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds good.
<br>
<p>I can probably try to finish the patch in the next couple weeks, but  
<br>
if someone needs it before I get a chance to look at it let me know.
<br>
<p>Once the implementation is complete, then the RFC will be updated with  
<br>
a termination date for further input.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On May 8, 2008, at 11:00 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 8, 2008, at 9:32 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think 'all' would be a nice symmetric addition to complement 'none'
</span><br>
<span class="quotelev2">&gt;&gt; and then this would allow users to specify the &quot;select best from all
</span><br>
<span class="quotelev2">&gt;&gt; available&quot; option on the command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, if you accept &quot;all&quot; and &quot;none&quot; as friendly ammendments to your
</span><br>
<span class="quotelev1">&gt; RFC, I think I'm done with input there.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other comments on the RFC?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Disallowing the NULL default string I think would have some
</span><br>
<span class="quotelev2">&gt;&gt; repercussions throughout the code requiring a change in the way we  
</span><br>
<span class="quotelev2">&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt; MCA parameters. For example, many component selection logics use the
</span><br>
<span class="quotelev2">&gt;&gt; NULL value as the current 'select best from all' indicator. Other MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameters take the NULL value to indicate that the user did not set
</span><br>
<span class="quotelev2">&gt;&gt; any value for this string parameter and thus it can be ignored. Maybe
</span><br>
<span class="quotelev2">&gt;&gt; we can try to add a deprecation warning message when this happens to
</span><br>
<span class="quotelev2">&gt;&gt; gauge it's frequency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's no burning need to do this ASAP; let's add this to the list of
</span><br>
<span class="quotelev1">&gt; items to talk about in the tech meeting.  Perhaps one of us could do a
</span><br>
<span class="quotelev1">&gt; little prep before the meeting to figure out:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - how often NULL is given as a default OMPI MCA string param (probably
</span><br>
<span class="quotelev1">&gt; quite often) -- easy enough to find out by putting a counter/
</span><br>
<span class="quotelev1">&gt; opal_output in the string registration function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - how often NULL is *required* by the logic for one reason or another
</span><br>
<span class="quotelev1">&gt; (probably a little more tricky to count)
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
<li><strong>Next message:</strong> <a href="3863.php">Mukesh K Srivastava: "Re: [OMPI devel] [OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>Previous message:</strong> <a href="3861.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3861.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
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
