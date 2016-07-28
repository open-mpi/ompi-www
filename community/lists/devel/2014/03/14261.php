<?
$subject_val = "Re: [OMPI devel] v1.7.5rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 22:49:59 2014" -->
<!-- isoreceived="20140303034959" -->
<!-- sent="Sun, 02 Mar 2014 20:49:45 -0700" -->
<!-- isosent="20140303034945" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.5rc1 posted" -->
<!-- id="5313FBD9.3000705_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CC5F287A-3B46-4D5C-8462-0D8D3D86C0AD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.5rc1 posted<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 22:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14262.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14260.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<li><strong>In reply to:</strong> <a href="14257.php">Ralph Castain: "[OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14262.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="14262.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/01/2014 07:13 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; In the usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please subject this to your best tests as we hope to roll this (plus bug fixes) to 1.8.0 at the end of the month. This includes the new OSHMEM support, plus a completely updated MPI-3 compliant one-sided implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scheduled release date: Mar 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p><p>According to configure --help:
<br>
<p>&nbsp;&nbsp;&nbsp;--enable-oshmem-fortran enable OSHMEM Fortran bindings (default:
<br>
enabled if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran compiler found)
<br>
<p>However, it is not being automatically enabled for me:
<br>
<p>checking if want to build OSHMEM fortran bindings... no
<br>
<p>This seems to be because the configure test uses:
<br>
<p>if test &quot;$enable_oshmem_fortran&quot; != &quot;no&quot; -a &quot;$ompi_fortran_happy&quot; = 1; then
<br>
<p>but ompi_fortran_happy is not yet set at this point.
<br>
<p>- Orion
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14262.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14260.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<li><strong>In reply to:</strong> <a href="14257.php">Ralph Castain: "[OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14262.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="14262.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
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
