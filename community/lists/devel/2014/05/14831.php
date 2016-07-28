<?
$subject_val = "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4645: Move r31786, 31829, r31830, r31833, r31834, r31835 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()) (was: Move r31786, 31829, r31830 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()))";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 12:43:48 2014" -->
<!-- isoreceived="20140520164348" -->
<!-- sent="Tue, 20 May 2014 09:43:47 -0700" -->
<!-- isosent="20140520164347" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #4645: Move r31786, 31829, r31830, r31833, r31834, r31835 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()) (was: Move r31786, 31829, r31830 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()))" -->
<!-- id="CAMJJpkViHcDwc63+0jZDKOFx_VYPjX0gLN0u1hjSRwXHixhF6w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="064.0d86e0fb6d89b11c1d9c2ee570f025a7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI bugs] [Open MPI] #4645: Move r31786, 31829, r31830, r31833, r31834, r31835 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()) (was: Move r31786, 31829, r31830 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()))<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-20 12:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14832.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="14830.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In order to cope with the dynamic case I think we will need to remove
<br>
the check for a single registration and instead do a ompi_proc ref
<br>
count.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Tue, May 20, 2014 at 6:58 AM, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; #4645: Move r31786, 31829, r31830, r31833, r31834, r31835 to v1.8 branch (bml/r2 :
</span><br>
<span class="quotelev1">&gt; fix mca_bml_r2_del_procs())
</span><br>
<span class="quotelev1">&gt; -----------------------------------+-----------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  ggouaillardet           |       Owner:  ompi-rm1.8
</span><br>
<span class="quotelev1">&gt;     Type:  changeset move request  |      Status:  assigned
</span><br>
<span class="quotelev1">&gt; Priority:  major                   |   Milestone:  Open MPI 1.8.2
</span><br>
<span class="quotelev1">&gt;  Version:  trunk                   |  Resolution:
</span><br>
<span class="quotelev1">&gt; Keywords:                          |
</span><br>
<span class="quotelev1">&gt; -----------------------------------+-----------------------------
</span><br>
<span class="quotelev1">&gt; Changes (by hjelmn):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * owner:  hjelmn =&gt; ompi-rm1.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks George! I will see about fixing the leak in the dynamics case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/4645#comment:9">https://svn.open-mpi.org/trac/ompi/ticket/4645#comment:9</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; bugs mailing list
</span><br>
<span class="quotelev1">&gt; bugs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14832.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="14830.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
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
