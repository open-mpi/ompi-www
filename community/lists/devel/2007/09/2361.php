<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 24 15:15:45 2007" -->
<!-- isoreceived="20070924191545" -->
<!-- sent="Mon, 24 Sep 2007 21:15:40 +0200 (IST)" -->
<!-- isosent="20070924191540" -->
<!-- name="David Erukhimovich" -->
<!-- email="daviderukh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with adding new component (fwd)" -->
<!-- id="Pine.LNX.4.64.0709242113250.15128_at_pita.cs.huji.ac.il" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI devel] Problem with adding new component (fwd)" -->
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
<strong>From:</strong> David Erukhimovich (<em>daviderukh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-24 15:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2362.php">Jeff Squyres: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<li><strong>Previous message:</strong> <a href="2360.php">Tim Mattox: "Re: [OMPI devel] Problem with adding new component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2362.php">Jeff Squyres: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<li><strong>Reply:</strong> <a href="2362.php">Jeff Squyres: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
---------- Forwarded message ----------
<br>
Date: Mon, 24 Sep 2007 21:11:30 +0200
<br>
From: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
<br>
To: daviderukh_at_[hidden]
<br>
Subject: Re: [OMPI devel] Problem with adding new component
<br>
<p>I'm Sorry, This time I'm sending the email to the right place.
<br>
<p>I understand all of This.
<br>
The only thing I did this time is to download v1.2.3 from svn and build it
<br>
(without modifying anything!).
<br>
So I got The linkage error I attached last time. As you can see it isn't
<br>
connected with ORTE but with opmi_info or something
<br>
<p>--David
<br>
<p>Tim Mattox wrote:
<br>
<p>In the future, please continue to ask your questions on the developer
<br>
mailing list so that others can learn from them later via google, etc.
<br>
<p>In this case, it appears the problem is that you originally copied the component
<br>
from the development trunk to modify for your own needs.  The ORTE
<br>
layer has changed significantly between the 1.2 series and the trunk,
<br>
and thus your new code inherited the newer stuff that isn't compatible with
<br>
the 1.2 sources.
<br>
<p>You should either make a copy of a component in the 1.2 series to
<br>
modify as you need, or, you should be building from a trunk checkout.
<br>
<p>On 9/24/07, David Erukhimovich &lt;daviderukh_at_[hidden]&gt; wrote:
<br>
<p><p>---------- Forwarded message ----------
<br>
Date: Mon, 24 Sep 2007 18:51:28 +0200 (IST)
<br>
From: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
<br>
To: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
<br>
Subject: Re: [OMPI devel] Problem with adding new component
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;Hello Tom,
<br>
&nbsp;&nbsp;&nbsp;Thanks for your responce.
<br>
&nbsp;&nbsp;&nbsp;I tried to complies the ompi 1.2.3 (and 1.2.0) I downloaded from svn
<br>
&nbsp;&nbsp;&nbsp;using:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ sh autogen.sh ; configure --prefix $MOSHOME/openmpi-install ; make all
<br>
&nbsp;&nbsp;&nbsp;install
<br>
<p>&nbsp;&nbsp;&nbsp;and I got the following compilation error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;components.o: In function `ompi_info::open_components()':
<br>
<p>&nbsp;&nbsp;&nbsp;/cs/stud/daviderukh/moshome/v1.2.0/ompi/tools/ompi_info/components.cc:221:
<br>
&nbsp;&nbsp;&nbsp;undefined reference to `orte_rml_base'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../../../ompi/.libs/libmpi.so: undefined reference to
<br>
&nbsp;&nbsp;&nbsp;`opal_progress_mpi_init'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../../../ompi/.libs/libmpi.so: undefined reference to
<br>
&nbsp;&nbsp;&nbsp;`opal_progress_events'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../../../ompi/.libs/libmpi.so: undefined reference to
<br>
&nbsp;&nbsp;&nbsp;`opal_progress_mpi_enable'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../../../ompi/.libs/libmpi.so: undefined reference to
<br>
&nbsp;&nbsp;&nbsp;`opal_progress_event_decrement'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../../../ompi/.libs/libmpi.so: undefined reference to
<br>
&nbsp;&nbsp;&nbsp;`opal_progress_mpi_disable'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../../../ompi/.libs/libmpi.so: undefined reference to
<br>
&nbsp;&nbsp;&nbsp;`opal_progress_event_increment'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collect2: ld returned 1 exit status
<br>
<p>&nbsp;&nbsp;&nbsp;What is the thing now?
<br>
<p>&nbsp;&nbsp;&nbsp;Thank you
<br>
&nbsp;&nbsp;&nbsp;--David
<br>
<p><p>On 9/23/07, Tim Mattox &lt;timattox_at_[hidden] &gt; wrote:
<br>
<p>Hello David,
<br>
The development trunk (towards 1.3) is not binary compatible with
<br>
the 1.2 branch of Open MPI.  Actually, AFAIK, no two versions of
<br>
Open MPI are guaranteed to be binary compatible.
<br>
<p>You would need to compile and make your component from within
<br>
a 1.2 source tree.  To be safe, you should use an svn check out that
<br>
matches the version you want to use, so in your case:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;svn co <a href="https://svn.open-mpi.org/svn/ompi/tags/v1.2-series/v1.2.3">https://svn.open-mpi.org/svn/ompi/tags/v1.2-series/v1.2.3</a>
<br>
and then go from there.  There is a chance things will work from the
<br>
current 1.2 svn HEAD, but we do not test our code changes for
<br>
binary compatibility between versions.
<br>
<p>On 9/23/07, David Erukhimovich &lt;daviderukh_at_[hidden]&gt; wrote:
<br>
<p>Hello,
<br>
I created a new component by modifying round_robin (on rmaps) a bit. I
<br>
compiled it using autogen. configure and make in the development (1.3)
<br>
version and it works fine.
<br>
Now I tried to copy the the new library I made (.so and .la files) to
<br>
<p>the
<br>
<p>lib folder of a stable release (1.2.3).
<br>
the release sees the new component but it doesn't work. the output
<br>
<p>when I
<br>
<p>run the following is:
<br>
<p>&nbsp;&nbsp;&nbsp;$ mpirun --mca rmaps mos_round_robin --mca rmaps_base_verbose 1
<br>
<p>hostname
<br>
<p>[mos204:04929] Scheduling policy: unspec
<br>
[mos204:04929] orte:base:open: querying component mos_round_robin
<br>
[mos204:04929] orte:base:open: component mos_round_robin does NOT want
<br>
<p>to
<br>
<p>be considered for selection
<br>
[mos204:04929] orte:rmaps:base:map: no components available!
<br>
[mos204:04929] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
base/rmaps_base_map_job.c at line 201
<br>
[mos204:04929] *** Process received signal ***
<br>
[mos204:04929] Signal: Segmentation fault (11)
<br>
[mos204:04929] Signal code: Address not mapped (1)
<br>
[mos204:04929] Failing at address: 0xf7f1eb
<br>
[mos204:04929] [ 0] [0xffffe440]
<br>
[mos204:04929] [ 1] /lib/i686/cmov/libc.so.6(vasprintf+0xbc)
<br>
<p>[0xb7d8eb6c]
<br>
<p>[mos204:04929] [ 2]
<br>
/cs/mosna/daviderukh/openmpi-install2/lib/libopen-pal.so.0[0xb7f18572]
<br>
[mos204:04929] [ 3]
<br>
/cs/mosna/daviderukh/openmpi-install2/lib/libopen-pal.so.0(opal_output+0x1e)
<br>
<p>[0xb7f18a5e]
<br>
[mos204:04929] [ 4]
<br>
/cs/mosna/daviderukh/openmpi-install2/lib/libopen-rte.so.0
<br>
<p>(orte_rmaps_base_map_job+0x5f6)
<br>
<p>[0xb7f870b6]
<br>
[mos204:04929] [ 5]
<br>
/cs/mosna/daviderukh/openmpi-install2/lib/openmpi/mca_rmgr_urm.so
<br>
[0xb7c7c368]
<br>
[mos204:04929] [ 6] mpirun(orterun+0x3d9) [0x804a1e9]
<br>
[mos204:04929] [ 7] mpirun(main+0x22) [0x8049e06]
<br>
[mos204:04929] [ 8] /lib/i686/cmov/libc.so.6(__libc_start_main+0xe0)
<br>
[0xb7d44050]
<br>
[mos204:04929] [ 9] mpirun [0x8049d81]
<br>
[mos204:04929] *** End of error message ***
<br>
Segmentation fault
<br>
<p><p>So... what am I doing wrong and how can I fix it?
<br>
<p>Thank you
<br>
--David
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><pre>
--
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
tmattox_at_[hidden] || timattox_at_[hidden]
     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2362.php">Jeff Squyres: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<li><strong>Previous message:</strong> <a href="2360.php">Tim Mattox: "Re: [OMPI devel] Problem with adding new component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2362.php">Jeff Squyres: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<li><strong>Reply:</strong> <a href="2362.php">Jeff Squyres: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
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
