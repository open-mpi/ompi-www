<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 18:48:21 2014" -->
<!-- isoreceived="20140225234821" -->
<!-- sent="Tue, 25 Feb 2014 15:46:42 -0800" -->
<!-- isosent="20140225234642" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="13CC0041-ADC1-4740-BC48-C80112EDAB7B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AAD42D52-30EF-4626-A670-0761AF234A2F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-25 18:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14230.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14228.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="14228.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14230.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="14230.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope - that built fine too. I'm at a loss - was this a new checkout? Or did you do an svn up? If the latter, did you remember to re-run autogen?
<br>
<p>On Feb 25, 2014, at 3:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm....tried again and all built fine. Trying with a fresh checkout
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2014, at 3:26 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SVN checkout, built on Linux.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; configure --prefix=/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi_install --enable-debug --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, February 25, 2014 6:17 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Trunk is broken
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Odd - it is building fine for me on both Mac and Linux. Is this a git mirror or the actual svn checkout, or a tarball?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 25, 2014, at 3:11 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, maybe something didn&#146;t get pulled over in your OSC merge:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Looks like a few routines were removed and were not replaced or were not removed from other parts of the code where they are invoked inompi/mpi/c/profile/paccumulate.c
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The offending change set is:  <a href="https://svn.open-mpi.org/trac/ompi/changeset/30816">https://svn.open-mpi.org/trac/ompi/changeset/30816</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi/mpi/c/profile'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       paccumulate.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       pget.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       pput.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       pwin_create_errhandler.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       pwin_create_keyval.lo
</span><br>
<span class="quotelev2">&gt;&gt; if test ! -r pwin_create_dynamic.c ; then \
</span><br>
<span class="quotelev2">&gt;&gt;                 pname=`echo pwin_create_dynamic.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev2">&gt;&gt;                 ln -s ../../../../ompi/mpi/c/$pname pwin_create_dynamic.c ; \
</span><br>
<span class="quotelev2">&gt;&gt;         fi
</span><br>
<span class="quotelev2">&gt;&gt;   CC       pwin_complete.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       pwin_create.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       pwin_delete_attr.lo
</span><br>
<span class="quotelev2">&gt;&gt; if test ! -r pwin_detach.c ; then \
</span><br>
<span class="quotelev2">&gt;&gt;                 pname=`echo pwin_detach.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev2">&gt;&gt;                 ln -s ../../../../ompi/mpi/c/$pname pwin_detach.c ; \
</span><br>
<span class="quotelev2">&gt;&gt;         fi
</span><br>
<span class="quotelev2">&gt;&gt;   CC       pwin_f2c.lo
</span><br>
<span class="quotelev2">&gt;&gt; paccumulate.c: In function 'PMPI_Accumulate':
</span><br>
<span class="quotelev2">&gt;&gt; paccumulate.c:74: error: implicit declaration of function 'ompi_win_comm_allowed'
</span><br>
<span class="quotelev2">&gt;&gt; pget.c: In function 'PMPI_Get':
</span><br>
<span class="quotelev2">&gt;&gt; pget.c:59: error: implicit declaration of function 'ompi_win_comm_allowed'
</span><br>
<span class="quotelev2">&gt;&gt; pwin_complete.c: In function 'PMPI_Win_complete':
</span><br>
<span class="quotelev2">&gt;&gt; pwin_complete.c:48: error: implicit declaration of function 'ompi_win_get_mode'
</span><br>
<span class="quotelev2">&gt;&gt; pwin_complete.c:48: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; pwin_complete.c:48: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev2">&gt;&gt; pwin_complete.c:48: error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [paccumulate.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; pput.c: In function 'PMPI_Put':
</span><br>
<span class="quotelev2">&gt;&gt; pput.c:62: error: implicit declaration of function 'ompi_win_comm_allowed'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [pget.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [pwin_complete.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [pput.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi/mpi/c/profile'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi/mpi/c'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev2">&gt;&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell: +1 (865) 258 - 8898
</span><br>
<span class="quotelev2">&gt;&gt;  
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14229/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14230.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14228.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="14228.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14230.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="14230.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
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
