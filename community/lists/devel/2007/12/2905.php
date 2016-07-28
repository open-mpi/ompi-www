<?
$subject_val = "Re: [OMPI devel] pointer_array";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 15:21:16 2007" -->
<!-- isoreceived="20071221202116" -->
<!-- sent="Fri, 21 Dec 2007 15:20:57 -0500" -->
<!-- isosent="20071221202057" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pointer_array" -->
<!-- id="56473680-DCA8-43FB-8B4F-2C2F816D3954_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FB845F82-0341-472A-8BDB-F071EC4C05C1_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-21 15:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2906.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="2904.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>In reply to:</strong> <a href="2903.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2869.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/17021">https://svn.open-mpi.org/trac/ompi/changeset/17021</a> -- a  
<br>
simple off-by-one error caused by some logic moving around.
<br>
<p><p>On Dec 21, 2007, at 12:19 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I'm unfortunately getting some test failures after r17007 when
</span><br>
<span class="quotelev1">&gt; converting between C and C++/F77 handles, such as the following (I
</span><br>
<span class="quotelev1">&gt; checked; trunk/r17006 works fine):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [9:17] svbu-mpi:~/svn/ompi-tests/cxx-test-suite % mpirun -np 4 src/
</span><br>
<span class="quotelev1">&gt; mpi2c++_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since we made it this far, we will assume that
</span><br>
<span class="quotelev1">&gt; MPI::Init() worked properly.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; ...snipped....
</span><br>
<span class="quotelev1">&gt; * MPI::misc...
</span><br>
<span class="quotelev1">&gt;   - MPI::Query_thread...                          PASS
</span><br>
<span class="quotelev1">&gt;   - Commname...                                   PASS
</span><br>
<span class="quotelev1">&gt;   - Commgethandler...                             PASS
</span><br>
<span class="quotelev1">&gt;   - Handle conversion...                          mpi2c++_test: class/
</span><br>
<span class="quotelev1">&gt; opal_pointer_array.c:131: opal_pointer_array_add: Assertion `table-
</span><br>
<span class="quotelev2">&gt;&gt; addr[index] == ((void *)0)' failed.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And other failures in the simple/basic/f90/attr_f test. I'll start
</span><br>
<span class="quotelev1">&gt; poking around shortly to see if I can figure out the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2007, at 1:31 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The opal_pointer_array is now committed. I try to update all BTL to
</span><br>
<span class="quotelev2">&gt;&gt; use the opal_pointer_array instead of the orte_pointer_array. Now,
</span><br>
<span class="quotelev2">&gt;&gt; the OMPI layer only use opal_pointer_array. Unfortunately, I cannot
</span><br>
<span class="quotelev2">&gt;&gt; test most of the BTLs so I hope I didn't miss anything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 17, 2007, at 2:22 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sound good. I will replace all references to ompi_pointer_array as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; well as orte_pointer_array in the ompi layer (some BTL use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_pointer_array) and replace them with the opal_pointer_array.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll avoid any modification of the orte layer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll commit tomorrow morning.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 17, 2007, at 12:04 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That would be fine with me - I can grab that out of the trunk and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; adjust
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE in my branch instead.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 12/17/07 9:54 AM, &quot;Tim Mattox&quot; &lt;timattox_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; How about this as a suggested compromise.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; George, could you just do half the patch... where you leave orte
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; alone,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and just move the ompi pointer array implementation down into  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That way, any new code can make use of it from opal, and only orte
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would need to be adjusted later, after Ralph is done with his
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; changes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 17, 2007 9:18 AM, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It would require extensive modification as use of the pointer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; array has
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; spread over a wide range of the code base. I would really
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; appreciate it if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we didn't do this right now.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The differences are historic in nature - several years ago, the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; folks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; working on the OMPI layer needed to insert some Fortran-specific
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; limits and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; type definitions into the opal_pointer_array code.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; caused type conflicts across a swath of the ORTE code. After a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ton of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; discussion and debate, there was no way the OMPI folks could
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; guarantee that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; they wouldn't need to change those definitions again at some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; time into the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; future - which would again force the ORTE layer to make major
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; changes to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; their code.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In addition, the use of an int as the array index in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; raised concerns in the ORTE world as we really didn't want to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pass generic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; variable types between processes. At the time, we weren't sure
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if the index
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in a pointer array was going to need to be passed somewhere in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the future -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in fact, the code did pass it at the time in several cases.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So we agreed to simply create separate code that, even though it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; duplicated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the functionality, ensured that the two could operate semi-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; independently.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In the intervening time, the OMPI folks seem to have been able
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to leave the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_pointer_array definitions pretty much alone. There have
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; been a few
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; changes along the way, but nothing overwhelming. In addition, we
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have found
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that the ORTE code no longer needs to pass the array index when
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sending an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; object's data to a remote process - at least, this is true at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the moment.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So making the change might be reasonable. If we are going to do
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; though, we need to ensure that all the functionality is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; replicated (there
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are, I believe, a couple of extensions in the orte_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; class), and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we should similarly review the other orte/opal class overlaps.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, doing all this right now would be a disaster on the tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; branch
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; where we are revising ORTE. It would be much better to do it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; after that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; branch merges to the trunk, or just make the change in the tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; branch first.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; That branch makes much more extensive use of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_pointer_array object
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; than is in the trunk, and it would be a royal pain of conflicts
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to resolve
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it - all for little, if any, gain.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 12/17/07 6:35 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Adding RHC to the thread...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm guessing that the patch will have to be modified for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 16, 2007, at 6:18 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Right, I wonder why it didn't show in the patch file. Anyway,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; completely remove the orte_pointer_array.[ch] as well as the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_pointer_array.[ch] file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 16, 2007, at 12:01 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The patch looks good to my eyeballs, though I've not done any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; testing with it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I presume a follow on patch would remove the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_pointer_array.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [ch] files?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 15, 2007 4:01 PM, George Bosilca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have a patch that unify the pointer array implementations
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; into
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; just
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; one. Right now, we have 2 pointer array implementations: one
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and one for OMPI. The differences are small and mostly
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; insignificant
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (there is no way to add more than 2^31 elements in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pointer array
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; anyway). The following patch propose to merge these two
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pointer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; array
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; into one, implemented in OPAL (and called  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_pointer_array).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If nobody has complained before Wednesday noon I'll commit  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; patch.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="2906.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="2904.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>In reply to:</strong> <a href="2903.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2869.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
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
