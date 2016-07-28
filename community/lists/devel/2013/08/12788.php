<?
$subject_val = "[OMPI devel] Potential Performance issues with mmap'ed files";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 22 11:14:17 2013" -->
<!-- isoreceived="20130822151417" -->
<!-- sent="Thu, 22 Aug 2013 11:13:40 -0400" -->
<!-- isosent="20130822151340" -->
<!-- name="Tim Mattox" -->
<!-- email="tmattox_at_[hidden]" -->
<!-- subject="[OMPI devel] Potential Performance issues with mmap'ed files" -->
<!-- id="CALwSR2Wzav6kxXSn5=Jhd44-BEKekYR9ujkW31EgA41EWUFtGw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Potential Performance issues with mmap'ed files<br>
<strong>From:</strong> Tim Mattox (<em>tmattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-22 11:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12789.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="12787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Open MPI developers,
<br>
I've been away from the Open MPI code for a long time now, but I just
<br>
ran across this article that should give developers second thoughts
<br>
about using mmap'ed files in performance critical situations.
<br>
<p>&quot;Deferring mtime and ctime updates&quot;
<br>
<a href="http://lwn.net/SubscriberLink/564120/bdc189d08c512761/">http://lwn.net/SubscriberLink/564120/bdc189d08c512761/</a>
<br>
<p>I might suggest an audit of the Open MPI code base for mmap calls
<br>
to make sure they are all needed, or if they can be done
<br>
a different way, especially in the coll and sm btl.
<br>
Yes, the article is about a patchset to lessen the performance problem,
<br>
but until that gets into the kernel, and into the distributions, and into
<br>
the parallel machines, this could be a source of lost performance in Open MPI.
<br>
<p>I seem to recall some work was done after I left development to
<br>
make use of POSIX or SYSV shared memory system calls that avoided
<br>
having an associated backing-store file.  But I don't remember if
<br>
those became the default, or if mmap'ed files was still the default.
<br>
<p>Anyway, back to lurking on the mailing lists for me.
<br>
P.S. - Darn, my timattox_at_[hidden] e-mail alias is gone... c'est la vie!
<br>
<pre>
-- 
Tim Mattox, Ph.D. - tmattox_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12789.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="12787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
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
