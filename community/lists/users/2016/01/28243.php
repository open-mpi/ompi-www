<?
$subject_val = "[OMPI users] Global settings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 08:32:10 2016" -->
<!-- isoreceived="20160111133210" -->
<!-- sent="Mon, 11 Jan 2016 08:32:09 -0500" -->
<!-- isosent="20160111133209" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="[OMPI users] Global settings" -->
<!-- id="CAB2ovotMqDWRg=Y1+OycYYVKbOVS4z70yE5x0W7pEDjNiwZ7Lg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Global settings<br>
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-11 08:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28244.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Previous message:</strong> <a href="28242.php">Jeff Hammond: "Re: [OMPI users] Put/Get semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28244.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Reply:</strong> <a href="28244.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Reply:</strong> <a href="28245.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Global settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have an issue with binding to cores with some applications and the
<br>
default causes issues.  We would, therefore, like to set the
<br>
equivalent of
<br>
<p>mpirun --bind-to none
<br>
<p>globally.  I tried search for combinations of 'openmpi global
<br>
settings', 'site settings', and the like on the web and ended up
<br>
several times at
<br>
<p><a href="https://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params">https://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params</a>
<br>
<p>That makes it look very much like MCA parameters are for network
<br>
settings; see, specifically, section 4. What are MCA Parameters? Why
<br>
would I set them?
<br>
<p>At some point, though, the mpirun man page,
<br>
<a href="https://www.open-mpi.org/doc/v1.8/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.8/man1/mpirun.1.php</a>, where at the end
<br>
of the section titled, Mapping, Ranking, and Binding: Oh My!, it says:
<br>
<p>-----------------------------
<br>
Process binding can also be set with MCA parameters. Their usage is
<br>
less convenient than that of mpirun options. On the other hand, MCA
<br>
parameters can be set not only on the mpirun command line, but
<br>
alternatively in a system or user mca-params.conf file or as
<br>
environment variables, as described in the MCA section below. Some
<br>
examples include:
<br>
<p>mpirun option MCA parameter key value
<br>
<p>--map-by core rmaps_base_mapping_policy core
<br>
. . . .
<br>
--bind-to none hwloc_base_binding_policy none
<br>
-----------------------------
<br>
<p>Am I correct in interpreting this to mean that, if I
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export OMPI_MCA_hwloc_base_binding_policy=none
<br>
<p>from the module file, the default binding will be 'none'?
<br>
<p>Equivalently, if I add a line to /ompi/install/path/etc/mca-params.conf
<br>
<p>-----
<br>
hwloc_base_binding_policy = none
<br>
-----
<br>
<p>that would do the same?
<br>
<p>The web version of the man page is for 1.8.8, and it agrees with the
<br>
installed man page for our 1.8.7.  However, it appears that our system
<br>
man page for mpirun(1) for OpenMPI 1.8.2 has slightly different
<br>
parameters.  Specifically,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process binding can also be set with MCA parameters.   Their  usage  is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;less  convenient  than  that of mpirun options.  On the other hand, MCA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameters can be set not only on the mpirun command line, but alterna-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tively in a system or user mca-params.conf file or as environment vari-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ables, as described in the MCA section below.  The correspondences are:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun option          MCA parameter key           value
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-bycore                rmaps_base_schedule_policy  core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-bysocket              rmaps_base_schedule_policy  socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-bind-to-core          orte_process_binding        core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-bind-to-socket        orte_process_binding        socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-bind-to-none          orte_process_binding        none
<br>
<p>So for version 1.8.2, the equivalent incantations would be
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export OMPI_MCA_orte_process_binding=none
<br>
<p>or
<br>
<p>/ompi/install/path/v1.8.2/etc/mca-params.conf
<br>
-----
<br>
orte_process_binding = none
<br>
-----
<br>
<p>Yes?
<br>
<p>Sorry to be dense about this.
<br>
<p>Thanks,   -- bennet
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28244.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Previous message:</strong> <a href="28242.php">Jeff Hammond: "Re: [OMPI users] Put/Get semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28244.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Reply:</strong> <a href="28244.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Reply:</strong> <a href="28245.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Global settings"</a>
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
