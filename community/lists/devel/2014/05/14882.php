<?
$subject_val = "Re: [OMPI devel] some info is not pushed into the dstore";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 04:18:08 2014" -->
<!-- isoreceived="20140528081808" -->
<!-- sent="Wed, 28 May 2014 17:18:05 +0900" -->
<!-- isosent="20140528081805" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some info is not pushed into the dstore" -->
<!-- id="CAAkFZ5u9etdgz-C1oda-eeoWcT1+VOyoTax0nqrosQuNWA+6Aw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9BA29F0D-E552-420F-831E-CA0E1BC901A9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] some info is not pushed into the dstore<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 04:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14881.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14861.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14888.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Reply:</strong> <a href="14888.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i finally got it :-)
<br>
<p>/* i previously got it &quot;almost&quot; right ... */
<br>
<p>here is what happens on job 2 (with trunk) :
<br>
MPI_Intercomm_create calls ompi_comm_get_rprocs that calls ompi_proc_unpack
<br>
=&gt; ompi_proc_unpack store job 3 info into opal_dstore_peer
<br>
<p><p>then ompi_comm_get_rprocs calls ompi_proc_set_locality(job 3)
<br>
=&gt; ompi_proc_set_locality fetch information job 3 info from
<br>
opal_dstore_internal (not found) and then opal_dstore_nonpeer (not found
<br>
again) and then fails.
<br>
this is just the consequence of ompi_proc_unpack stored job 3 info in
<br>
opal_dstore_peer and not in opal_dstore_nonpeer
<br>
<p>i do not understand which of opal_dstore_peer and opal_dstore_nonpeer
<br>
should be used and when, so i wrote a defensive patch (fetch both
<br>
opal_dstore_nonpeer and then opal_dstore_peer if not previously found).
<br>
<p>please someone review this and comment/fix it if needed
<br>
(for example, store in opal_dstore_nonpeer instead of opal_dstore_peer
<br>
*or*
<br>
fetch in opal_dstore_peer instead of opal_dstore_nonpeer
<br>
and/or something else )
<br>
<p>and then, locality is correctly set, coll ml receives correct information
<br>
and this does not
<br>
hang any more if mpirun is invoked without --mca coll ^ml and on a single
<br>
node single socket VM)
<br>
<p>bottom line, job 2 *did* receive information of job 3 but failed to
<br>
store/fetch it in the right opal_store !
<br>
<p>v1.8 is unaffected since there is only one dstore
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Wed, May 28, 2014 at 4:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...I did some digging, and the best I can tell is that root cause is
</span><br>
<span class="quotelev1">&gt; that the second job (&quot;b&quot; in the test program) is never actually calling
</span><br>
<span class="quotelev1">&gt; connect_accept!  This looks like a change may have occurred in
</span><br>
<span class="quotelev1">&gt; Intercomm_create that is causing it to not recognize the need to do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone confirm that diagnosis?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: job 1 clearly receives and has all the required info in the correct
</span><br>
<span class="quotelev1">&gt; places - it is ready to provide it to job 2, if/when job 2 actually calls
</span><br>
<span class="quotelev1">&gt; connect_accept.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2014, at 10:13 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I concur on the typo and fixed it - thanks for catching it. I'll have to
</span><br>
<span class="quotelev1">&gt; look into the problem you reported as it has been fixed in the past, and
</span><br>
<span class="quotelev1">&gt; was working last I checked it. The info required for this 3-way
</span><br>
<span class="quotelev1">&gt; connect/accept is supposed to be in the modex provided by the common
</span><br>
<span class="quotelev1">&gt; communicator.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 27, 2014, at 3:51 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Folks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; while debugging the dynamic/intercomm_create from the ibm test suite, i
</span><br>
<span class="quotelev1">&gt; found something odd.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; i ran *without* any batch manager on a VM (one socket and four cpus)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun -np 1 ./dynamic/intercomm_create
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it hangs by default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it works with --mca coll ^ml
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; basically :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - task 0 spawns task 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - task 0 spawns task 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - a communicator is created for the 3 tasks via MPI_Intercomm_create()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Intercomm_create() calls ompi_comm_get_rprocs() which calls
</span><br>
<span class="quotelev1">&gt; ompi_proc_set_locality()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then, on task 1, ompi_proc_set_locality() calls
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_dstore.fetch(opal_dstore_internal, &quot;task 2&quot;-&gt;proc_name, ...) which
</span><br>
<span class="quotelev1">&gt; fails and this is OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_dstore_fetch(opal_dstore_nonpeer, &quot;task 2&quot;-&gt;proc_name, ...) which
</span><br>
<span class="quotelev1">&gt; fails and this is *not* OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /* on task 2, the first fetch for &quot;task 1&quot; fails but the second success
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; my analysis is that when task 2 was created, it updated its
</span><br>
<span class="quotelev1">&gt; opal_dstore_nonpeer with info from &quot;task 1&quot; which was previously spawned by
</span><br>
<span class="quotelev1">&gt; task 0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when task 1 was spawned, task 2 did not exist yet and hence
</span><br>
<span class="quotelev1">&gt; opal_dstore_nonpeer contains no reference to task 2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but when task 2 was spawned, opal_dstore_nonpeer of task 1 has not been
</span><br>
<span class="quotelev1">&gt; updated, hence the failure
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (on task 1, proc_flags of task 2 has incorrect locality, this likely
</span><br>
<span class="quotelev1">&gt; confuses coll ml and hang the test)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; should task1 have received new information when task 2 was spawned ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; shoud task2 have sent information to task1 when it was spawned ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; should task1 have (tried to) get fresh information before invoking
</span><br>
<span class="quotelev1">&gt; MPI_Intercomm_create() ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; incidentally, i found ompi_proc_set_locality calls opal_dstore.store
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; identifier &amp;proc (the argument is &amp;proc-&gt;proc_name everywhere else, so
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is likely a bug/typo. the attached patch fixes this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance for your feedback,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;proc.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14848.php">http://www.open-mpi.org/community/lists/devel/2014/05/14848.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14861.php">http://www.open-mpi.org/community/lists/devel/2014/05/14861.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14882/proc.patch">proc.patch</a>
</ul>
<!-- attachment="proc.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14881.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14861.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14888.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Reply:</strong> <a href="14888.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
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
