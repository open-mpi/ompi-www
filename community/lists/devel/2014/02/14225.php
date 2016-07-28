<?
$subject_val = "[OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 18:11:12 2014" -->
<!-- isoreceived="20140225231112" -->
<!-- sent="Tue, 25 Feb 2014 23:11:08 +0000" -->
<!-- isosent="20140225231108" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk is broken" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3ECDBAE6_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk is broken<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-25 18:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14226.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] wrapper compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14226.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="14226.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, maybe something didn't get pulled over in your OSC merge:
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
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14226.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] wrapper compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14226.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="14226.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
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
