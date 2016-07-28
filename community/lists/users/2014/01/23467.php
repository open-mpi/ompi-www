<?
$subject_val = "Re: [OMPI users] Open MPI and multiple Torque versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 08:37:33 2014" -->
<!-- isoreceived="20140127133733" -->
<!-- sent="Mon, 27 Jan 2014 14:37:22 +0100" -->
<!-- isosent="20140127133722" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and multiple Torque versions" -->
<!-- id="AFB82783-A3FE-42E8-84F4-FCC39359D842_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="964594274.605073.1390828449502.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and multiple Torque versions<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 08:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23468.php">Åke Sandgren: "[OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23466.php">Christoph Niethammer: "[OMPI users] Open MPI and multiple Torque versions"</a>
<li><strong>In reply to:</strong> <a href="23466.php">Christoph Niethammer: "[OMPI users] Open MPI and multiple Torque versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23477.php">Gus Correa: "Re: [OMPI users] Open MPI and multiple Torque versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 27.01.2014 um 14:14 schrieb Christoph Niethammer:
<br>
<p><span class="quotelev1">&gt; I am maintaining several Open MPI installations from the 1.6 and 1.7 series and different compilers.
</span><br>
<p>...and installed in different locations I assume.
<br>
<p><p><span class="quotelev1">&gt; Open MPI is build with torque support and shared and static bindings.
</span><br>
<p>So you have a version for Torque version A and Torque version B, i.e. some permutations of Open MPI and Torque versions.
<br>
<p><p><span class="quotelev1">&gt; Different Torque installations are present and managed via the modules environment.
</span><br>
<p>In one and the same cluster you are running two different versions of Torque?
<br>
<p><p><span class="quotelev1">&gt; Would it be possible to switch the torque version by modification of PATH and LD_LIBRARY_PATH or will I have to face problems in this case?
</span><br>
<p>When they are installed in the location where &quot;--prefix=...&quot; pointed to during `./configure` it will work. If you moved them afterwards to different locations, it might be necessary to point OPAL_PREFIX to the destination you moved it to before you call `mpiexec`.
<br>
<p>But you will have to have different compiled versions of your applications too. Between 1.6 and 1.7 the ABI may have changed, only the combination odd + next even major release of Open MPI is guaranteed to have the same ABI.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Grepping through the Open MPI installations for torque used during installation gave me some hits in binaries like mpirun or the static libs.
</span><br>
<span class="quotelev1">&gt; I would appreciate any hints.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23468.php">Åke Sandgren: "[OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23466.php">Christoph Niethammer: "[OMPI users] Open MPI and multiple Torque versions"</a>
<li><strong>In reply to:</strong> <a href="23466.php">Christoph Niethammer: "[OMPI users] Open MPI and multiple Torque versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23477.php">Gus Correa: "Re: [OMPI users] Open MPI and multiple Torque versions"</a>
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
