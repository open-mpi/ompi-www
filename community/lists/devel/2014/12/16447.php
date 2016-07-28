<?
$subject_val = "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 10:48:42 2014" -->
<!-- isoreceived="20141208154842" -->
<!-- sent="Mon, 8 Dec 2014 16:48:33 +0100" -->
<!-- isosent="20141208154833" -->
<!-- name="Pim Schellart" -->
<!-- email="p.schellart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6" -->
<!-- id="104DA665-3B2C-40D5-BBE5-DA0DA67466A2_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54844CFD.5050601_at_inria.fr" -->
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
<strong>From:</strong> Pim Schellart (<em>p.schellart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-08 10:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16448.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16446.php">Howard Pritchard: "Re: [OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="16442.php">Brice Goglin: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16448.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Reply:</strong> <a href="16448.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brice,
<br>
<p>I am not sure why this is happening since all code seems to be using the same hwloc library version (1.8) but it does :) An MPI program is started through SLURM on two nodes with four CPU cores total (divided over the nodes) using the following script:
<br>
<p>#! /bin/bash
<br>
#SBATCH -N 2 -n 4
<br>
/usr/bin/mpiexec /usr/bin/lstopo --version
<br>
/usr/bin/mpiexec /usr/bin/lstopo --of xml
<br>
/usr/bin/mpiexec  /path/to/my_mpi_code
<br>
<p>When this is submitted multiple times it gives &#226;&#128;&#156;out-of-order&#226;&#128;&#157; warnings in about 9/10 cases but works without warnings in 1/10 cases. I attached the output (with xml) for both the working and `broken` case. Note that the xml is of course printed (differently) multiple times for each task/core. As always, any help would be appreciated.
<br>
<p>Regards,
<br>
<p>Pim Schellart
<br>
<p>P.S. $ mpirun --version
<br>
mpirun (Open MPI) 1.6.5
<br>
<p><p>


<br><p>
<p><p><span class="quotelev1">&gt; On 07 Dec 2014, at 13:50, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; The github issue you're refering to was closed 18 months ago. The
</span><br>
<span class="quotelev1">&gt; warning (it's not an error) is only supposed to appear if you're
</span><br>
<span class="quotelev1">&gt; importing in a recent hwloc a XML that was exported from a old hwloc. I
</span><br>
<span class="quotelev1">&gt; don't see how that could happen when using Open MPI since the hwloc
</span><br>
<span class="quotelev1">&gt; versions on both sides is the same.
</span><br>
<span class="quotelev1">&gt; Make sure you're not confusing with another error described here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error</a>
</span><br>
<span class="quotelev1">&gt; Otherwise please report the exact Open MPI and/or hwloc versions as well
</span><br>
<span class="quotelev1">&gt; as the XML lstopo output on the nodes that raise the warning (lstopo
</span><br>
<span class="quotelev1">&gt; foo.xml). Send these to hwloc mailing lists such as
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden] or hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 07/12/2014 13:29, Pim Schellart a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; this might be a bit off topic but when using the SLURM scheduler (with cpuset support) on Ubuntu 14.04 (openmpi 1.6) hwloc sometimes gives a &quot;out-of-order topology discovery&#226;&#128;&#157; error. According to issue #103 on github (<a href="https://github.com/open-mpi/hwloc/issues/103">https://github.com/open-mpi/hwloc/issues/103</a>) this error was discussed before and it was possible to sort it out in &#226;&#128;&#156;insert_object_by_parent&#226;&#128;&#157;, is this still considered? If not, what (top level) hwloc API call should we look for in the SLURM sources to start debugging? Any help will be most welcome.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pim Schellart
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16441.php">http://www.open-mpi.org/community/lists/devel/2014/12/16441.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16447/broken.log">broken.log</a>
</ul>
<!-- attachment="broken.log" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16447/working.log">working.log</a>
</ul>
<!-- attachment="working.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16448.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16446.php">Howard Pritchard: "Re: [OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="16442.php">Brice Goglin: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16448.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Reply:</strong> <a href="16448.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
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
