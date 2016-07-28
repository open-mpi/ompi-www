<?
$subject_val = "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  7 07:50:07 2014" -->
<!-- isoreceived="20141207125007" -->
<!-- sent="Sun, 07 Dec 2014 13:50:05 +0100" -->
<!-- isosent="20141207125005" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6" -->
<!-- id="54844CFD.5050601_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="FDA346D4-B73A-4F67-851A-2DB1B6F10127_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-07 07:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16443.php">Kevin Buckley: "[OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="16441.php">Pim Schellart: "[OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>In reply to:</strong> <a href="16441.php">Pim Schellart: "[OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16447.php">Pim Schellart: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Reply:</strong> <a href="16447.php">Pim Schellart: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
The github issue you're refering to was closed 18 months ago. The
<br>
warning (it's not an error) is only supposed to appear if you're
<br>
importing in a recent hwloc a XML that was exported from a old hwloc. I
<br>
don't see how that could happen when using Open MPI since the hwloc
<br>
versions on both sides is the same.
<br>
Make sure you're not confusing with another error described here
<br>
&nbsp;&nbsp;&nbsp;
<br>
<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error</a>
<br>
Otherwise please report the exact Open MPI and/or hwloc versions as well
<br>
as the XML lstopo output on the nodes that raise the warning (lstopo
<br>
foo.xml). Send these to hwloc mailing lists such as
<br>
hwloc-users_at_[hidden] or hwloc-devel_at_[hidden]
<br>
Thanks
<br>
Brice
<br>
<p><p>Le 07/12/2014 13:29, Pim Schellart a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this might be a bit off topic but when using the SLURM scheduler (with cpuset support) on Ubuntu 14.04 (openmpi 1.6) hwloc sometimes gives a &quot;out-of-order topology discovery&#226;&#128;&#157; error. According to issue #103 on github (<a href="https://github.com/open-mpi/hwloc/issues/103">https://github.com/open-mpi/hwloc/issues/103</a>) this error was discussed before and it was possible to sort it out in &#226;&#128;&#156;insert_object_by_parent&#226;&#128;&#157;, is this still considered? If not, what (top level) hwloc API call should we look for in the SLURM sources to start debugging? Any help will be most welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pim Schellart
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16441.php">http://www.open-mpi.org/community/lists/devel/2014/12/16441.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16443.php">Kevin Buckley: "[OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="16441.php">Pim Schellart: "[OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>In reply to:</strong> <a href="16441.php">Pim Schellart: "[OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16447.php">Pim Schellart: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Reply:</strong> <a href="16447.php">Pim Schellart: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
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
