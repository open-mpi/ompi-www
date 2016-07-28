<?
$subject_val = "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 15:55:19 2008" -->
<!-- isoreceived="20080227205519" -->
<!-- sent="Wed, 27 Feb 2008 14:55:10 -0600 (CST)" -->
<!-- isosent="20080227205510" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4" -->
<!-- id="Pine.LNX.4.64.0802271449550.32381_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="411593EC-DF0C-46FF-BB6A-29E67B66CE01_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 15:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5092.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5090.php">Albert Babinskas: "[OMPI users] Error compiling open-mpi"</a>
<li><strong>In reply to:</strong> <a href="5084.php">David Gunter: "[OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 27 Feb 2008, David Gunter wrote:
<br>
<p><span class="quotelev1">&gt; We are trying to build OMPI-1.2.4 for a BProc/Ethernet-based cluster.
</span><br>
<span class="quotelev1">&gt; Here are the configure options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=${PREFIX} \
</span><br>
<span class="quotelev1">&gt;   --libdir=${LIBDIR} \
</span><br>
<span class="quotelev1">&gt;   --enable-shared \
</span><br>
<span class="quotelev1">&gt;   --with-bproc \
</span><br>
<span class="quotelev1">&gt;   --with-tm=/opt/PBS \
</span><br>
<span class="quotelev1">&gt;   --with-io_romio_flags=--with-file-system=ufs+nfs \
</span><br>
<span class="quotelev1">&gt;   --disable-pty_support \
</span><br>
<span class="quotelev1">&gt;   --enable-mca-no-build=&quot;ras_tm,pls_tm&quot;
</span><br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; Isn't the --enable-mca-no-build=&quot;ras_tm,pls_tm&quot; option supposed to
</span><br>
<span class="quotelev1">&gt; remove these warnings?
</span><br>
<p>To answer the question you actually wanted answered :).
<br>
<p>You want a dash, not underscore, between the framework and component name. 
<br>
So the option would be --enable-mca-no-build=ras-tm,pls-tm.
<br>
<p>Another way to do this would be 1) not specify the --with-tm 
<br>
argument (since /opt/PBS isn't in the default search path) or 2) instead 
<br>
of --with-tm and --enable-mca-no-build, just specify --without-tm (which 
<br>
is close to but not quite the same as --enable-mca-no-build=ras-tm,pls-tm. 
<br>
The main difference is that the --without-tm future proofs you in case new 
<br>
TM components show up in future releases, as they will in 1.3).
<br>
<p>Any of these options, of course, disables PBS support inside Open MPI. 
<br>
Since you said BProc, that's probably what you want (since the MOAB + 
<br>
BProc has been hacked to look like the old LSF + BProc with the NODES 
<br>
variable and all that).  If not, then the --enable-mca-no-build surely 
<br>
isn't what you wanted in the first place :).
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5092.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5090.php">Albert Babinskas: "[OMPI users] Error compiling open-mpi"</a>
<li><strong>In reply to:</strong> <a href="5084.php">David Gunter: "[OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
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
