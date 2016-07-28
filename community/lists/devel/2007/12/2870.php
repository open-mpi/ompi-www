<?
$subject_val = "Re: [OMPI devel] pointer_array";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 09:19:04 2007" -->
<!-- isoreceived="20071217141904" -->
<!-- sent="Mon, 17 Dec 2007 07:18:53 -0700" -->
<!-- isosent="20071217141853" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pointer_array" -->
<!-- id="C38BD35D.B9BD%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FE109715-602D-4BAB-B9C1-79159C27C655_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pointer_array<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 09:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969"</a>
<li><strong>Previous message:</strong> <a href="2869.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>In reply to:</strong> <a href="2868.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2873.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2873.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would require extensive modification as use of the pointer array has
<br>
spread over a wide range of the code base. I would really appreciate it if
<br>
we didn't do this right now.
<br>
<p>The differences are historic in nature - several years ago, the folks
<br>
working on the OMPI layer needed to insert some Fortran-specific limits and
<br>
type definitions into the opal_pointer_array code. Unfortunately, that
<br>
caused type conflicts across a swath of the ORTE code. After a ton of
<br>
discussion and debate, there was no way the OMPI folks could guarantee that
<br>
they wouldn't need to change those definitions again at some time into the
<br>
future - which would again force the ORTE layer to make major changes to
<br>
their code.
<br>
<p>In addition, the use of an int as the array index in the opal_pointer_array
<br>
raised concerns in the ORTE world as we really didn't want to pass generic
<br>
variable types between processes. At the time, we weren't sure if the index
<br>
in a pointer array was going to need to be passed somewhere in the future -
<br>
in fact, the code did pass it at the time in several cases.
<br>
<p>So we agreed to simply create separate code that, even though it duplicated
<br>
the functionality, ensured that the two could operate semi-independently.
<br>
<p>In the intervening time, the OMPI folks seem to have been able to leave the
<br>
opal_pointer_array definitions pretty much alone. There have been a few
<br>
changes along the way, but nothing overwhelming. In addition, we have found
<br>
that the ORTE code no longer needs to pass the array index when sending an
<br>
object's data to a remote process - at least, this is true at the moment.
<br>
<p>So making the change might be reasonable. If we are going to do that,
<br>
though, we need to ensure that all the functionality is replicated (there
<br>
are, I believe, a couple of extensions in the orte_pointer_array class), and
<br>
we should similarly review the other orte/opal class overlaps.
<br>
<p>However, doing all this right now would be a disaster on the tmp branch
<br>
where we are revising ORTE. It would be much better to do it after that
<br>
branch merges to the trunk, or just make the change in the tmp branch first.
<br>
That branch makes much more extensive use of the orte_pointer_array object
<br>
than is in the trunk, and it would be a royal pain of conflicts to resolve
<br>
it - all for little, if any, gain.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 12/17/07 6:35 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Adding RHC to the thread...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm guessing that the patch will have to be modified for the ORTE tmp
</span><br>
<span class="quotelev1">&gt; branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 16, 2007, at 6:18 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Right, I wonder why it didn't show in the patch file. Anyway, it
</span><br>
<span class="quotelev2">&gt;&gt; completely remove the orte_pointer_array.[ch] as well as the
</span><br>
<span class="quotelev2">&gt;&gt; ompi_pointer_array.[ch] file.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 16, 2007, at 12:01 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The patch looks good to my eyeballs, though I've not done any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing with it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I presume a follow on patch would remove the orte_pointer_array.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ch] files?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 15, 2007 4:01 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a patch that unify the pointer array implementations into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one. Right now, we have 2 pointer array implementations: one for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and one for OMPI. The differences are small and mostly insignificant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (there is no way to add more than 2^31 elements in the pointer array
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anyway). The following patch propose to merge these two pointer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; array
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into one, implemented in OPAL (and called opal_pointer_array).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If nobody has complained before Wednesday noon I'll commit the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; patch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969"</a>
<li><strong>Previous message:</strong> <a href="2869.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>In reply to:</strong> <a href="2868.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2873.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2873.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
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
