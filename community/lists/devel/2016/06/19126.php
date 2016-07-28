<?
$subject_val = "[OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 23:00:54 2016" -->
<!-- isoreceived="20160618030054" -->
<!-- sent="Fri, 17 Jun 2016 20:00:49 -0700" -->
<!-- isosent="20160618030049" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file" -->
<!-- id="CAAvDA15UzAJb+K=-W8dy0x=054bojsipsM-5DtZCUH=dcx1Zpg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-17 23:00:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19127.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file"</a>
<li><strong>Previous message:</strong> <a href="19125.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19127.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file"</a>
<li><strong>Reply:</strong> <a href="19127.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am testing the 2.0.0rc3 tarball PLUS the patch from PR1232 to fix the
<br>
dependence on 64-bit atomics.
<br>
On an ARM system with only 256MB of memory, I am seeing the following
<br>
failure which did NOT occur in my testing of 1.10.3rc4.
<br>
<p><p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
[armel-jessie:03953] create_and_attach: unable to create shared memory BTL
<br>
coordinating structure :: size 134217728
<br>
--------------------------------------------------------------------------
<br>
It appears as if there is not enough space for
<br>
/run/user/19214/openmpi-sessions-19214_at_armel-jessie_0/34799/1/shared_mem_pool.armel-jessie
<br>
(the shared-memory backing
<br>
file). It is likely that your MPI job will now either abort or experience
<br>
performance degradation.
<br>
<p>&nbsp;&nbsp;Local host:  armel-jessie
<br>
&nbsp;&nbsp;Space Requested: 134217736 B
<br>
&nbsp;&nbsp;Space Available: 25968640 B
<br>
--------------------------------------------------------------------------
<br>
[...]
<br>
Your MPI job is now going to abort; sorry.
<br>
[...]
<br>
<p>I already determined that changing &quot;-mca btl sm,self&quot; to &quot;-mca btl
<br>
tcp,self&quot; works, but would rather not go that route if &quot;sm&quot; can be
<br>
preserved.
<br>
So, if there are other MCA parameters I could/should be setting to avoid
<br>
this please let me know.
<br>
<p>If this system is now &quot;officially too small&quot; to run btl:sm, then I will
<br>
just have to accept that.
<br>
However, I wanted to bring this to the attention of the devel list in case
<br>
this change in behavior relative to v1.10 was *not* expected behavior.
<br>
<p>BTW: The awkward line break between &quot;backing&quot; and &quot;file&quot; is in the original
<br>
output (not an artifact of my email).
<br>
<p>-Paul [who still remembers owning an i486 with a 40MB hard drive]
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19126/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19127.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file"</a>
<li><strong>Previous message:</strong> <a href="19125.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19127.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file"</a>
<li><strong>Reply:</strong> <a href="19127.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file"</a>
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
