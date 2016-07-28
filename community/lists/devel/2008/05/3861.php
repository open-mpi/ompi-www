<?
$subject_val = "Re: [OMPI devel] [RFC] mca_base_open() NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 11:00:47 2008" -->
<!-- isoreceived="20080508150047" -->
<!-- sent="Thu, 8 May 2008 11:00:37 -0400" -->
<!-- isosent="20080508150037" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] mca_base_open() NULL" -->
<!-- id="3DA32D43-5704-4C76-80AC-0AE8ABC44CE4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FFE4B735-42E3-4D87-B0A0-6204E111EB03_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 11:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3862.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3860.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3860.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3862.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3862.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2008, at 9:32 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; I think 'all' would be a nice symmetric addition to complement 'none'
</span><br>
<span class="quotelev1">&gt; and then this would allow users to specify the &quot;select best from all
</span><br>
<span class="quotelev1">&gt; available&quot; option on the command line.
</span><br>
<p>Ok, if you accept &quot;all&quot; and &quot;none&quot; as friendly ammendments to your  
<br>
RFC, I think I'm done with input there.  :-)
<br>
<p>Any other comments on the RFC?
<br>
<p><span class="quotelev1">&gt; Disallowing the NULL default string I think would have some
</span><br>
<span class="quotelev1">&gt; repercussions throughout the code requiring a change in the way we use
</span><br>
<span class="quotelev1">&gt; MCA parameters. For example, many component selection logics use the
</span><br>
<span class="quotelev1">&gt; NULL value as the current 'select best from all' indicator. Other MCA
</span><br>
<span class="quotelev1">&gt; parameters take the NULL value to indicate that the user did not set
</span><br>
<span class="quotelev1">&gt; any value for this string parameter and thus it can be ignored. Maybe
</span><br>
<span class="quotelev1">&gt; we can try to add a deprecation warning message when this happens to
</span><br>
<span class="quotelev1">&gt; gauge it's frequency.
</span><br>
<p><p>There's no burning need to do this ASAP; let's add this to the list of  
<br>
items to talk about in the tech meeting.  Perhaps one of us could do a  
<br>
little prep before the meeting to figure out:
<br>
<p>- how often NULL is given as a default OMPI MCA string param (probably  
<br>
quite often) -- easy enough to find out by putting a counter/ 
<br>
opal_output in the string registration function
<br>
<p>- how often NULL is *required* by the logic for one reason or another  
<br>
(probably a little more tricky to count)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3862.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3860.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3860.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3862.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3862.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
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
