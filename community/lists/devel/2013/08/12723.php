<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 14 18:02:38 2013" -->
<!-- isoreceived="20130814220238" -->
<!-- sent="Wed, 14 Aug 2013 18:02:36 -0400" -->
<!-- isosent="20130814220236" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2" -->
<!-- id="51D66921-EB21-412E-8A90-E1932A91E29B_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A2200083F_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-14 18:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12724.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12722.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12722.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12724.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>There is OpenSHMEM test suite <a href="http://bongo.cs.uh.edu/site/sites/default/site_files/openshmem-test-suite-release-1.0d.tar.bz2">http://bongo.cs.uh.edu/site/sites/default/site_files/openshmem-test-suite-release-1.0d.tar.bz2</a>
<br>
The test-suite exercises most of the API.
<br>
<p>Best,
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Aug 14, 2013, at 5:52 PM, Joshua Ladd &lt;joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;&gt; wrote:
The following simple test code will exercise the following:
start_pes()
shmalloc()
shmem_int_get()
shmem_int_put()
shmem_barrier_all()
To compile:
shmemcc test_shmem.c -o test_shmem
To launch:
shmemrun -np 2  test_shmem
or for those who prefer to launch with SLURM
srun -n 2 test_shmem
Josh
-----Original Message-----
From: devel [mailto:devel-bounces_at_[hidden]&lt;mailto:bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
Sent: Wednesday, August 14, 2013 5:32 PM
To: Open MPI Developers
Subject: Re: [OMPI devel] [EXTERNAL] OpenSHMEM round 2
Can you point me to a test program that would exercise it? I'd like to give it a try first.
I'm okay with on by default as it builds its own separate library, and with the RFC
On Aug 14, 2013, at 2:03 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&lt;mailto:bwbarre_at_[hidden]&gt;&gt; wrote:
Josh -
In general, I don't have a strong opinion of whether OpenSHMEM is on
by default or not.  It might cause unexpected behavior for some users
(like on Crays, where one should really use Cray's SHMEM), but maybe
it's better on other platforms.
I also would have no objection to the RFC, provided the segfaults I
found get resolved.
Brian
On 8/14/13 2:08 PM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;&gt; wrote:
Ralph, and Brian
Thanks a bunch for taking the time to review this. It is extremely
helpful. Let me comment of the building of OSHMEM and solicit some
feedback from you guys (along with the rest of the community.)
Originally we had planned to enable OSHMEM to build only if
'--with-oshmem' flag was passed at configure time. However,
(unbeknownst to me) this behavior was changed and now OSHMEM is built by default, i.e.
yes, Ralph this is the intended behavior now. I am wondering if this
is such a good idea. Do folks have a strong opinion on this one way
or the other? From my perspective I can see arguments for both sides
of the coin.
Other than cleaning up warnings and resolving the segfault that Brian
observed are we on a good course to getting this upstream? Is it
reasonable to file an RFC for three weeks out?
Josh
-----Original Message-----
From: devel [mailto:devel-bounces_at_[hidden]&lt;mailto:bounces_at_[hidden]&gt;] On Behalf Of Barrett,
Brian W
Sent: Sunday, August 11, 2013 1:42 PM
To: Open MPI Developers
Subject: Re: [OMPI devel] [EXTERNAL] OpenSHMEM round 2
Ralph -
I think those warnings are just because of when they last synced with
the trunk; it looks like they haven't updated in the last week, when
those (and some usnic fixes) went in.
More concerning is the --enable-picky stuff and the disabling of
SHMEM in the right places.
Brian
On 8/11/13 11:24 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
Turning off the enable_picky, I get it to compile with the following
warnings:
pget_elements_x_f.c:70: warning: no previous prototype for
'ompi_get_elements_x_f'
pstatus_set_elements_x_f.c:70: warning: no previous prototype for
'ompi_status_set_elements_x_f'
ptype_get_extent_x_f.c:69: warning: no previous prototype for
'ompi_type_get_extent_x_f'
ptype_get_true_extent_x_f.c:69: warning: no previous prototype for
'ompi_type_get_true_extent_x_f'
ptype_size_x_f.c:69: warning: no previous prototype for
'ompi_type_size_x_f'
I also found that OpenShmem is still building by default. Is that
intended? I thought you were only going to build if --with-shmem (or
whatever option) was given.
Looks like some cleanup is required
On Aug 10, 2013, at 8:54 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
FWIW, I couldn't get it to build - this is on a simple Xeon-based
system under CentOS 6.2:
cc1: warnings being treated as errors
spml_yoda_getreq.c: In function 'mca_spml_yoda_get_completion':
spml_yoda_getreq.c:98: error: pointer targets in passing argument 1
of 'opal_atomic_add_32' differ in signedness
../../../../opal/include/opal/sys/amd64/atomic.h:174: note:
expected 'volatile int32_t *' but argument is of type 'uint32_t *'
spml_yoda_getreq.c:98: error: signed and unsigned type in
conditional expression
cc1: warnings being treated as errors
spml_yoda_putreq.c: In function 'mca_spml_yoda_put_completion':
spml_yoda_putreq.c:81: error: pointer targets in passing argument 1
of 'opal_atomic_add_32' differ in signedness
../../../../opal/include/opal/sys/amd64/atomic.h:174: note:
expected 'volatile int32_t *' but argument is of type 'uint32_t *'
spml_yoda_putreq.c:81: error: signed and unsigned type in
conditional expression
make[2]: *** [spml_yoda_getreq.lo] Error 1
make[2]: *** Waiting for unfinished jobs....
make[2]: *** [spml_yoda_putreq.lo] Error 1
cc1: warnings being treated as errors
spml_yoda.c: In function 'mca_spml_yoda_put_internal':
spml_yoda.c:725: error: pointer targets in passing argument 1 of
'opal_atomic_add_32' differ in signedness
../../../../opal/include/opal/sys/amd64/atomic.h:174: note:
expected 'volatile int32_t *' but argument is of type 'uint32_t *'
spml_yoda.c:725: error: signed and unsigned type in conditional
expression
spml_yoda.c: In function 'mca_spml_yoda_get':
spml_yoda.c:1107: error: pointer targets in passing argument 1 of
'opal_atomic_add_32' differ in signedness
../../../../opal/include/opal/sys/amd64/atomic.h:174: note:
expected 'volatile int32_t *' but argument is of type 'uint32_t *'
spml_yoda.c:1107: error: signed and unsigned type in conditional
expression
make[2]: *** [spml_yoda.lo] Error 1
make[1]: *** [all-recursive] Error 1
Only configure arguments:
enable_picky=yes
enable_debug=yes
gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-3)
On Aug 10, 2013, at 7:21 PM, &quot;Barrett, Brian W&quot;
&lt;bwbarre_at_[hidden]&lt;mailto:bwbarre_at_[hidden]&gt;&gt;
wrote:
On 8/6/13 10:30 AM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;&gt; wrote:
Dear OMPI Community,
Please find on Bitbucket the latest round of OSHMEM changes based
on community feedback. Please git and test at your leisure.
<a href="https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>
Josh -
In general, I think everything looks ok.  However, the &quot;right&quot;
thing doesn't happen if the CM PML is used (at least, when using
the Portals
4
MTL).  When configured with:
./configure
--enable-mca-no-build=pml-ob1,pml-bfo,pml-v,btl,bml,mpool
The build segfaults trying to run a SHMEM program:
mpirun -np 2 ./bcast
[shannon:90397] *** Process received signal *** [shannon:90397]
Signal: Segmentation fault (11) [shannon:90397] Signal code:
Address not mapped (1) [shannon:90397] Failing at address: (nil)
[shannon:90398] *** Process received signal *** [shannon:90398]
Signal: Segmentation fault (11) [shannon:90398] Signal code:
Address not mapped (1) [shannon:90398] Failing at address: (nil)
[shannon:90397] [ 0] /lib64/libpthread.so.0() [0x38b7a0f4a0]
[shannon:90397] *** End of error message *** [shannon:90398] [ 0]
/lib64/libpthread.so.0() [0x38b7a0f4a0] [shannon:90398] *** End of
error message ***
------------------------------------------------------------------
---
---
--
mpirun noticed that process rank 1 with PID 90398 on node shannon
exited  on signal 11 (Segmentation fault).
------------------------------------------------------------------
---
---
--
Brian
--
Brian W. Barrett
Scalable System Software Group
Sandia National Laboratories
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
--
Brian W. Barrett
Scalable System Software Group
Sandia National Laboratories
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
--
Brian W. Barrett
Scalable System Software Group
Sandia National Laboratories
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&lt;test_shmem.c&gt;_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12724.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12722.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12722.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12724.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
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
