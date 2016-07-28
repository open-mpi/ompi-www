<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 18:50:23 2014" -->
<!-- isoreceived="20140225235023" -->
<!-- sent="Tue, 25 Feb 2014 23:50:20 +0000" -->
<!-- isosent="20140225235020" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3ECDBBA9_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="13CC0041-ADC1-4740-BC48-C80112EDAB7B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk is broken<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-25 18:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14231.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14229.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="14229.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14231.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="14231.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SVN up. Reran autogen. I'm trying with a fresh checkout now.
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, February 25, 2014 6:48 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Trunk is broken
<br>
<p>Nope - that built fine too. I'm at a loss - was this a new checkout? Or did you do an svn up? If the latter, did you remember to re-run autogen?
<br>
<p>On Feb 25, 2014, at 3:40 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hmmm....tried again and all built fine. Trying with a fresh checkout
<br>
<p>On Feb 25, 2014, at 3:26 PM, Joshua Ladd &lt;joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>SVN checkout, built on Linux.
<br>
<p>configure --prefix=/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi_install --enable-debug --enable-mpirun-prefix-by-default
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, February 25, 2014 6:17 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Trunk is broken
<br>
<p>Odd - it is building fine for me on both Mac and Linux. Is this a git mirror or the actual svn checkout, or a tarball?
<br>
<p><p>On Feb 25, 2014, at 3:11 PM, Joshua Ladd &lt;joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;&gt; wrote:
<br>
<p><p><p>Ralph, maybe something didn't get pulled over in your OSC merge:
<br>
<p>Looks like a few routines were removed and were not replaced or were not removed from other parts of the code where they are invoked inompi/mpi/c/profile/paccumulate.c
<br>
<p>The offending change set is:  <a href="https://svn.open-mpi.org/trac/ompi/changeset/30816">https://svn.open-mpi.org/trac/ompi/changeset/30816</a>
<br>
<p><p><p>make[3]: Entering directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi/mpi/c/profile'
<br>
&nbsp;&nbsp;CC       paccumulate.lo
<br>
&nbsp;&nbsp;CC       pget.lo
<br>
&nbsp;&nbsp;CC       pput.lo
<br>
&nbsp;&nbsp;CC       pwin_create_errhandler.lo
<br>
&nbsp;&nbsp;CC       pwin_create_keyval.lo
<br>
if test ! -r pwin_create_dynamic.c ; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pname=`echo pwin_create_dynamic.c | cut -b '2-'` ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s ../../../../ompi/mpi/c/$pname pwin_create_dynamic.c ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;CC       pwin_complete.lo
<br>
&nbsp;&nbsp;CC       pwin_create.lo
<br>
&nbsp;&nbsp;CC       pwin_delete_attr.lo
<br>
if test ! -r pwin_detach.c ; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pname=`echo pwin_detach.c | cut -b '2-'` ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s ../../../../ompi/mpi/c/$pname pwin_detach.c ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;CC       pwin_f2c.lo
<br>
paccumulate.c: In function 'PMPI_Accumulate':
<br>
paccumulate.c:74: error: implicit declaration of function 'ompi_win_comm_allowed'
<br>
pget.c: In function 'PMPI_Get':
<br>
pget.c:59: error: implicit declaration of function 'ompi_win_comm_allowed'
<br>
pwin_complete.c: In function 'PMPI_Win_complete':
<br>
pwin_complete.c:48: error: implicit declaration of function 'ompi_win_get_mode'
<br>
pwin_complete.c:48: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
<br>
pwin_complete.c:48: error: (Each undeclared identifier is reported only once
<br>
pwin_complete.c:48: error: for each function it appears in.)
<br>
make[3]: *** [paccumulate.lo] Error 1
<br>
make[3]: *** Waiting for unfinished jobs....
<br>
pput.c: In function 'PMPI_Put':
<br>
pput.c:62: error: implicit declaration of function 'ompi_win_comm_allowed'
<br>
make[3]: *** [pget.lo] Error 1
<br>
make[3]: *** [pwin_complete.lo] Error 1
<br>
make[3]: *** [pput.lo] Error 1
<br>
make[3]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi/mpi/c/profile'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi/mpi/c'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p>Joshua S. Ladd, PhD
<br>
HPC Algorithms Engineer
<br>
Mellanox Technologies
<br>
<p>Email: joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;
<br>
Cell: +1 (865) 258 - 8898
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14230/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14231.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14229.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="14229.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14231.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="14231.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
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
