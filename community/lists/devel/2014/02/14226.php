<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 18:16:33 2014" -->
<!-- isoreceived="20140225231633" -->
<!-- sent="Tue, 25 Feb 2014 15:14:53 -0800" -->
<!-- isosent="20140225231453" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="2238E5D3-5826-416F-96EB-A5FAF3FD2893_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A3ECDBAE6_at_MTIDAG01.mtl.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-25 18:14:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14227.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14225.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="14225.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14227.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="14227.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Odd - it is building fine for me on both Mac and Linux. Is this a git mirror or the actual svn checkout, or a tarball?
<br>
<p><p>On Feb 25, 2014, at 3:11 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, maybe something didn&#146;t get pulled over in your OSC merge:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Looks like a few routines were removed and were not replaced or were not removed from other parts of the code where they are invoked inompi/mpi/c/profile/paccumulate.c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The offending change set is:  <a href="https://svn.open-mpi.org/trac/ompi/changeset/30816">https://svn.open-mpi.org/trac/ompi/changeset/30816</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi/mpi/c/profile'
</span><br>
<span class="quotelev1">&gt;   CC       paccumulate.lo
</span><br>
<span class="quotelev1">&gt;   CC       pget.lo
</span><br>
<span class="quotelev1">&gt;   CC       pput.lo
</span><br>
<span class="quotelev1">&gt;   CC       pwin_create_errhandler.lo
</span><br>
<span class="quotelev1">&gt;   CC       pwin_create_keyval.lo
</span><br>
<span class="quotelev1">&gt; if test ! -r pwin_create_dynamic.c ; then \
</span><br>
<span class="quotelev1">&gt;                 pname=`echo pwin_create_dynamic.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev1">&gt;                 ln -s ../../../../ompi/mpi/c/$pname pwin_create_dynamic.c ; \
</span><br>
<span class="quotelev1">&gt;         fi
</span><br>
<span class="quotelev1">&gt;   CC       pwin_complete.lo
</span><br>
<span class="quotelev1">&gt;   CC       pwin_create.lo
</span><br>
<span class="quotelev1">&gt;   CC       pwin_delete_attr.lo
</span><br>
<span class="quotelev1">&gt; if test ! -r pwin_detach.c ; then \
</span><br>
<span class="quotelev1">&gt;                 pname=`echo pwin_detach.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev1">&gt;                 ln -s ../../../../ompi/mpi/c/$pname pwin_detach.c ; \
</span><br>
<span class="quotelev1">&gt;         fi
</span><br>
<span class="quotelev1">&gt;   CC       pwin_f2c.lo
</span><br>
<span class="quotelev1">&gt; paccumulate.c: In function 'PMPI_Accumulate':
</span><br>
<span class="quotelev1">&gt; paccumulate.c:74: error: implicit declaration of function 'ompi_win_comm_allowed'
</span><br>
<span class="quotelev1">&gt; pget.c: In function 'PMPI_Get':
</span><br>
<span class="quotelev1">&gt; pget.c:59: error: implicit declaration of function 'ompi_win_comm_allowed'
</span><br>
<span class="quotelev1">&gt; pwin_complete.c: In function 'PMPI_Win_complete':
</span><br>
<span class="quotelev1">&gt; pwin_complete.c:48: error: implicit declaration of function 'ompi_win_get_mode'
</span><br>
<span class="quotelev1">&gt; pwin_complete.c:48: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; pwin_complete.c:48: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; pwin_complete.c:48: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; make[3]: *** [paccumulate.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; pput.c: In function 'PMPI_Put':
</span><br>
<span class="quotelev1">&gt; pput.c:62: error: implicit declaration of function 'ompi_win_comm_allowed'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pget.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pwin_complete.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pput.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi/mpi/c/profile'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi/mpi/c'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev1">&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell: +1 (865) 258 - 8898
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14226/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14227.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14225.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="14225.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14227.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="14227.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
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
