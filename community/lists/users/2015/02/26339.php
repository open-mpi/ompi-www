<?
$subject_val = "[OMPI users] Help on getting CMA works";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 14:56:19 2015" -->
<!-- isoreceived="20150218195619" -->
<!-- sent="Wed, 18 Feb 2015 14:56:01 -0500" -->
<!-- isosent="20150218195601" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] Help on getting CMA works" -->
<!-- id="54E4EE51.60305_at_giref.ulaval.ca" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Help on getting CMA works<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-18 14:56:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26340.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26338.php">Sachin Krishnan: "[OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26340.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26340.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have configured with &quot;--with-cma&quot; on 2 differents OS (RedHat 6.6 and 
<br>
OpenSuse 12.3), but in both case, I have the following error when 
<br>
launching a simple mpi_hello_world.c example:
<br>
<p>/opt/openmpi-1.8.4_cma/bin/mpiexec --mca btl_sm_use_cma 1 -np 2 /tmp/hw
<br>
--------------------------------------------------------------------------
<br>
WARNING: Linux kernel CMA support was requested via the
<br>
btl_vader_single_copy_mechanism MCA variable, but CMA support is
<br>
not available due to restrictive ptrace settings.
<br>
<p>The vader shared memory BTL will fall back on another single-copy
<br>
mechanism if one is available. This may result in lower performance.
<br>
<p>&nbsp;&nbsp;&nbsp;Local host: compile
<br>
--------------------------------------------------------------------------
<br>
Hello world from process 0 of 2
<br>
Hello world from process 1 of 2
<br>
[compile:23874] 1 more process has sent help message help-btl-vader.txt 
<br>
/ cma-permission-denied
<br>
[compile:23874] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see 
<br>
all help / error messages
<br>
<p>After I googled the subject, it seems there is a kernel parameter to 
<br>
modify, but I can't find it for OpenSuse 12.3 or RedHat 6.6...
<br>
<p>Here is the &quot;config.log&quot; issued from RedHat 6.6...
<br>
<p><a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184_cma.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184_cma.gz</a>
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26340.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26338.php">Sachin Krishnan: "[OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26340.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26340.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
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
