<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 07:05:31 2006" -->
<!-- isoreceived="20060314120531" -->
<!-- sent="Tue, 14 Mar 2006 07:05:25 -0500" -->
<!-- isosent="20060314120525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?" -->
<!-- id="200603141205.k2EC5U8h031488_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="957DBDF1-ED10-49D9-BFC9-5C1EB958614B_at_nrl.navy.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-14 07:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0850.php">Brian Barrett: "Re: [OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>Previous message:</strong> <a href="0848.php">Pierre Valiron: "[OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>In reply to:</strong> <a href="0797.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0851.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; [-:13327] mca: base: component_find: unable to open: dlopen(/usr/ 
</span><br>
<span class="quotelev2">&gt; &gt; local/lib/openmpi/mca_pml_teg.so, 9): Symbol not found:
</span><br>
<span class="quotelev2">&gt; &gt; _mca_ptl_base_recv_request_t_class
</span><br>
<span class="quotelev2">&gt; &gt;    Referenced from: /usr/local/lib/openmpi/mca_pml_teg.so
</span><br>
<span class="quotelev2">&gt; &gt;    Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt; &gt; (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have determined that the above error/warning is caused by 
</span><br>
<span class="quotelev1">&gt; installing opempi1.1r9212 on a machine were openmpi1.0.1 was 
</span><br>
<span class="quotelev1">&gt; previously installed.  I had to manually delete the files in 
</span><br>
<span class="quotelev1">&gt; /usr/ local/lib/openmpi and then reinstall.  This implies an 
</span><br>
<span class="quotelev1">&gt; error with with the 1.1 install script.
</span><br>
<p>Just to clarify on this issue -- Open MPI uses Automake for its installation
<br>
/ uninstallation.  As such, it only copies in the files that are relevant to
<br>
each version of Open MPI.  It does *not* uninstall any previous versions of
<br>
Open MPI.  Specifically, the plugins that are installed between Open MPI
<br>
1.0.x and 1.1.x are different.  When you installed Open MPI 1.1.x over the
<br>
same tree as 1.0.x, although most of the 1.0.x plugins were overwritten,
<br>
some were not (because they only exist in 1.0.x).  At run time, Open MPI
<br>
1.1.x tried to open the 1.0.x plugins and resulted in the &quot;symbol not found&quot;
<br>
errors that you saw.
<br>
<p>So this is actually exactly what the Open MPI installation process is
<br>
supposed to do (only touch the files that are relevant to it, not any
<br>
others).  We could probably be a bit smarter and not have Open MPI try to
<br>
open plugins from earlier versions, but that's a low priority at the moment.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0850.php">Brian Barrett: "Re: [OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>Previous message:</strong> <a href="0848.php">Pierre Valiron: "[OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>In reply to:</strong> <a href="0797.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0851.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
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
