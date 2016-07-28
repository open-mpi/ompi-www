<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 15:06:12 2006" -->
<!-- isoreceived="20060314200612" -->
<!-- sent="Tue, 14 Mar 2006 15:06:07 -0500 (EST)" -->
<!-- isosent="20060314200607" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r9278" -->
<!-- id="Pine.LNX.4.62.0603141504440.2299_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200603141933.k2EJXTTN022725_at_magrathea.osl.iu.edu" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-14 15:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0750.php">Jeff Squyres \(jsquyres\): "[OMPI devel] FW:  Open MPI SVN outage"</a>
<li><strong>Previous message:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI devel] writing a module to use OMPI on another network interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
&nbsp;&nbsp;does this break for anyone else?
<br>
<p>In file included from paccumulate.c:26:
<br>
../../../../ompi/datatype/datatype_internal.h:367:2: #endif without #if
<br>
make[4]: *** [paccumulate.lo] Error 1
<br>
make[4]: Leaving directory `/mnt/scratch2/fagg/OPENMPI/ompi/mpi/c/profile'
<br>
<p>G.
<br>
<p>On Tue, 14 Mar 2006 twoodall_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: twoodall
</span><br>
<span class="quotelev1">&gt; Date: 2006-03-14 14:33:27 -0500 (Tue, 14 Mar 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 9278
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/datatype/convertor.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/datatype/convertor.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/datatype/datatype_internal.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/datatype/dt_pack.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/datatype/dt_unpack.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/datatype/new_pack.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/datatype/new_unpack.c
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; macros to compute checksum while moving data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (22791 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    svn diff -r 9277:9278 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0750.php">Jeff Squyres \(jsquyres\): "[OMPI devel] FW:  Open MPI SVN outage"</a>
<li><strong>Previous message:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI devel] writing a module to use OMPI on another network interface"</a>
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
