<?
$subject_val = "Re: [OMPI devel] pointer_array";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 14:22:27 2007" -->
<!-- isoreceived="20071217192227" -->
<!-- sent="Mon, 17 Dec 2007 14:22:16 -0500" -->
<!-- isosent="20071217192216" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pointer_array" -->
<!-- id="A866F080-3DDD-4190-8CC3-881B1B65D056_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C38BFA36.B9D5%rhc_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 14:22:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2876.php">Lisandro Dalcin: "[OMPI devel] valgrind warnings (uninited mem passed to syscall)"</a>
<li><strong>Previous message:</strong> <a href="2874.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<li><strong>In reply to:</strong> <a href="2874.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2900.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2900.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sound good. I will replace all references to ompi_pointer_array as  
<br>
well as orte_pointer_array in the ompi layer (some BTL use the  
<br>
orte_pointer_array) and replace them with the opal_pointer_array. I'll  
<br>
avoid any modification of the orte layer.
<br>
<p>I'll commit tomorrow morning.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 17, 2007, at 12:04 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; That would be fine with me - I can grab that out of the trunk and  
</span><br>
<span class="quotelev1">&gt; adjust
</span><br>
<span class="quotelev1">&gt; ORTE in my branch instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/17/07 9:54 AM, &quot;Tim Mattox&quot; &lt;timattox_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about this as a suggested compromise.
</span><br>
<span class="quotelev2">&gt;&gt; George, could you just do half the patch... where you leave orte  
</span><br>
<span class="quotelev2">&gt;&gt; alone,
</span><br>
<span class="quotelev2">&gt;&gt; and just move the ompi pointer array implementation down into opal.
</span><br>
<span class="quotelev2">&gt;&gt; That way, any new code can make use of it from opal, and only orte
</span><br>
<span class="quotelev2">&gt;&gt; would need to be adjusted later, after Ralph is done with his  
</span><br>
<span class="quotelev2">&gt;&gt; changes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 17, 2007 9:18 AM, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would require extensive modification as use of the pointer  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; array has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spread over a wide range of the code base. I would really  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciate it if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we didn't do this right now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The differences are historic in nature - several years ago, the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working on the OMPI layer needed to insert some Fortran-specific  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; limits and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type definitions into the opal_pointer_array code. Unfortunately,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; caused type conflicts across a swath of the ORTE code. After a ton  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discussion and debate, there was no way the OMPI folks could  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guarantee that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they wouldn't need to change those definitions again at some time  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; future - which would again force the ORTE layer to make major  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In addition, the use of an int as the array index in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array
</span><br>
<span class="quotelev3">&gt;&gt;&gt; raised concerns in the ORTE world as we really didn't want to pass  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable types between processes. At the time, we weren't sure if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the index
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in a pointer array was going to need to be passed somewhere in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; future -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in fact, the code did pass it at the time in several cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So we agreed to simply create separate code that, even though it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; duplicated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the functionality, ensured that the two could operate semi- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; independently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the intervening time, the OMPI folks seem to have been able to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leave the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array definitions pretty much alone. There have been  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a few
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes along the way, but nothing overwhelming. In addition, we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the ORTE code no longer needs to pass the array index when  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sending an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; object's data to a remote process - at least, this is true at the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; moment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So making the change might be reasonable. If we are going to do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though, we need to ensure that all the functionality is replicated  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are, I believe, a couple of extensions in the orte_pointer_array  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; class), and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we should similarly review the other orte/opal class overlaps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, doing all this right now would be a disaster on the tmp  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where we are revising ORTE. It would be much better to do it after  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch merges to the trunk, or just make the change in the tmp  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch first.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That branch makes much more extensive use of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_pointer_array object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than is in the trunk, and it would be a royal pain of conflicts to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resolve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it - all for little, if any, gain.
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/17/07 6:35 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Adding RHC to the thread...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm guessing that the patch will have to be modified for the ORTE  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; branch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 16, 2007, at 6:18 PM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Right, I wonder why it didn't show in the patch file. Anyway, it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; completely remove the orte_pointer_array.[ch] as well as the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_pointer_array.[ch] file.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 16, 2007, at 12:01 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The patch looks good to my eyeballs, though I've not done any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; testing with it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I presume a follow on patch would remove the orte_pointer_array.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [ch] files?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Dec 15, 2007 4:01 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have a patch that unify the pointer array implementations into
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; just
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; one. Right now, we have 2 pointer array implementations: one for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and one for OMPI. The differences are small and mostly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; insignificant
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (there is no way to add more than 2^31 elements in the pointer  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; array
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; anyway). The following patch propose to merge these two pointer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; array
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; into one, implemented in OPAL (and called opal_pointer_array).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If nobody has complained before Wednesday noon I'll commit the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2875/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2876.php">Lisandro Dalcin: "[OMPI devel] valgrind warnings (uninited mem passed to syscall)"</a>
<li><strong>Previous message:</strong> <a href="2874.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<li><strong>In reply to:</strong> <a href="2874.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2900.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2900.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
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
