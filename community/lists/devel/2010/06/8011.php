<?
$subject_val = "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  1 13:49:59 2010" -->
<!-- isoreceived="20100601174959" -->
<!-- sent="Tue, 1 Jun 2010 11:49:55 -0600" -->
<!-- isosent="20100601174955" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: System V Shared Memory for Open MPI" -->
<!-- id="63806D5E-3AA5-417E-8A46-F4EBEDC7EB54_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="236B18D117B37C449E470367EFCEC00303B8C58FFE6D_at_EXCHMB.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: System V Shared Memory for Open MPI<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-01 13:49:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8012.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8010.php">Graham, Richard L.: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8010.php">Graham, Richard L.: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8014.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rich,
<br>
<p>I'll add a configure-time option.  This addition does not negatively  
<br>
impact the performance of the current sm component.
<br>
<p>Thanks,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Jun 1, 2010, at 11:35 AM, Graham, Richard L. wrote:
&gt; Can you be a bit more explicit, please ?
&gt; I do not want this on our systems, so as long as this is a compile  
&gt; time decision, and as long as this does not degrade the performance  
&gt; of the current sm device, I will not object.
&gt;
&gt; Rich
&gt;
&gt; ----- Original Message -----
&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt; Sent: Tue Jun 01 13:08:46 2010
&gt; Subject: [OMPI devel] RFC: System V Shared Memory for Open MPI
&gt;
&gt; WHAT: New System V shared memory component.
&gt;
&gt; WHY: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1320">https://svn.open-mpi.org/trac/ompi/ticket/1320</a>
&gt;
&gt; WHERE:
&gt; M      ompi/mca/btl/sm/btl_sm.c
&gt; M      ompi/mca/btl/sm/btl_sm_component.c
&gt; M      ompi/mca/btl/sm/btl_sm.h
&gt; M      ompi/mca/mpool/sm/mpool_sm_component.c
&gt; M      ompi/mca/mpool/sm/mpool_sm.h
&gt; M      ompi/mca/mpool/sm/mpool_sm_module.c
&gt; A      ompi/mca/common/sm/configure.m4
&gt; A      ompi/mca/common/sm/common_sm_sysv.h
&gt; A      ompi/mca/common/sm/common_sm_windows.c
&gt; A      ompi/mca/common/sm/common_sm_windows.h
&gt; A      ompi/mca/common/sm/common_sm.c
&gt; A      ompi/mca/common/sm/common_sm_sysv.c
&gt; A      ompi/mca/common/sm/common_sm.h
&gt; M      ompi/mca/common/sm/common_sm_mmap.c
&gt; M      ompi/mca/common/sm/common_sm_mmap.h
&gt; M      ompi/mca/common/sm/Makefile.am
&gt; M      ompi/mca/common/sm/help-mpi-common-sm.txt
&gt; M      ompi/mca/coll/sm/coll_sm_module.c
&gt; M      ompi/mca/coll/sm/coll_sm.h
&gt;
&gt; WHEN: Upon acceptance.
&gt;
&gt; TIMEOUT: Tuesday, June 8, 2010 (after devel concall).
&gt;
&gt; HOW:
&gt; MCA mpi: parameter &quot;mpi_common_sm&quot; (current value: &lt;mmap&gt;,
&gt;                           data source: default value)
&gt;                           Which shared memory support will be used.
&gt; Valid
&gt;                           values: sysv,mmap - or a comma delimited
&gt; combination
&gt;                           of them (order dependent).  The first
&gt; component that
&gt;                           is successfully selected is used.
&gt;
&gt; Thanks!
&gt;
&gt; --
&gt; Samuel K. Gutierrez
&gt; Los Alamos National Laboratory
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8012.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8010.php">Graham, Richard L.: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8010.php">Graham, Richard L.: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8014.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
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
