<?
$subject_val = "Re: [OMPI users] Global settings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 09:40:02 2016" -->
<!-- isoreceived="20160111144002" -->
<!-- sent="Mon, 11 Jan 2016 06:39:57 -0800" -->
<!-- isosent="20160111143957" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Global settings" -->
<!-- id="782CC9AF-DEEB-4D1E-95E2-F8F6DC8CDAE2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAB2ovotMqDWRg=Y1+OycYYVKbOVS4z70yE5x0W7pEDjNiwZ7Lg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Global settings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-11 09:39:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28245.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Global settings"</a>
<li><strong>Previous message:</strong> <a href="28243.php">Bennet Fauber: "[OMPI users] Global settings"</a>
<li><strong>In reply to:</strong> <a href="28243.php">Bennet Fauber: "[OMPI users] Global settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28246.php">Bennet Fauber: "Re: [OMPI users] Global settings"</a>
<li><strong>Reply:</strong> <a href="28246.php">Bennet Fauber: "Re: [OMPI users] Global settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the 1.10 series, putting  &quot;export OMPI_MCA_hwloc_base_binding_policy=none&#226;&#128;&#157; into your default MCA param file will solve the problem. I believe that is true for all of the 1.8 series as well, and suspect the man page for 1.8.2 was simply out-of-date. You could verify that if you are using something that old.
<br>
<p><p><p><span class="quotelev1">&gt; On Jan 11, 2016, at 5:32 AM, Bennet Fauber &lt;bennet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have an issue with binding to cores with some applications and the
</span><br>
<span class="quotelev1">&gt; default causes issues.  We would, therefore, like to set the
</span><br>
<span class="quotelev1">&gt; equivalent of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; globally.  I tried search for combinations of 'openmpi global
</span><br>
<span class="quotelev1">&gt; settings', 'site settings', and the like on the web and ended up
</span><br>
<span class="quotelev1">&gt; several times at
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params">https://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That makes it look very much like MCA parameters are for network
</span><br>
<span class="quotelev1">&gt; settings; see, specifically, section 4. What are MCA Parameters? Why
</span><br>
<span class="quotelev1">&gt; would I set them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At some point, though, the mpirun man page,
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/doc/v1.8/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.8/man1/mpirun.1.php</a>, where at the end
</span><br>
<span class="quotelev1">&gt; of the section titled, Mapping, Ranking, and Binding: Oh My!, it says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; Process binding can also be set with MCA parameters. Their usage is
</span><br>
<span class="quotelev1">&gt; less convenient than that of mpirun options. On the other hand, MCA
</span><br>
<span class="quotelev1">&gt; parameters can be set not only on the mpirun command line, but
</span><br>
<span class="quotelev1">&gt; alternatively in a system or user mca-params.conf file or as
</span><br>
<span class="quotelev1">&gt; environment variables, as described in the MCA section below. Some
</span><br>
<span class="quotelev1">&gt; examples include:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun option MCA parameter key value
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --map-by core rmaps_base_mapping_policy core
</span><br>
<span class="quotelev1">&gt; . . . .
</span><br>
<span class="quotelev1">&gt; --bind-to none hwloc_base_binding_policy none
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I correct in interpreting this to mean that, if I
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     export OMPI_MCA_hwloc_base_binding_policy=none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from the module file, the default binding will be 'none'?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Equivalently, if I add a line to /ompi/install/path/etc/mca-params.conf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; hwloc_base_binding_policy = none
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that would do the same?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The web version of the man page is for 1.8.8, and it agrees with the
</span><br>
<span class="quotelev1">&gt; installed man page for our 1.8.7.  However, it appears that our system
</span><br>
<span class="quotelev1">&gt; man page for mpirun(1) for OpenMPI 1.8.2 has slightly different
</span><br>
<span class="quotelev1">&gt; parameters.  Specifically,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       Process binding can also be set with MCA parameters.   Their  usage  is
</span><br>
<span class="quotelev1">&gt;       less  convenient  than  that of mpirun options.  On the other hand, MCA
</span><br>
<span class="quotelev1">&gt;       parameters can be set not only on the mpirun command line, but alterna-
</span><br>
<span class="quotelev1">&gt;       tively in a system or user mca-params.conf file or as environment vari-
</span><br>
<span class="quotelev1">&gt;       ables, as described in the MCA section below.  The correspondences are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         mpirun option          MCA parameter key           value
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         -bycore                rmaps_base_schedule_policy  core
</span><br>
<span class="quotelev1">&gt;         -bysocket              rmaps_base_schedule_policy  socket
</span><br>
<span class="quotelev1">&gt;         -bind-to-core          orte_process_binding        core
</span><br>
<span class="quotelev1">&gt;         -bind-to-socket        orte_process_binding        socket
</span><br>
<span class="quotelev1">&gt;         -bind-to-none          orte_process_binding        none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So for version 1.8.2, the equivalent incantations would be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     export OMPI_MCA_orte_process_binding=none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /ompi/install/path/v1.8.2/etc/mca-params.conf
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; orte_process_binding = none
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry to be dense about this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,   -- bennet
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28243.php">http://www.open-mpi.org/community/lists/users/2016/01/28243.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28245.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Global settings"</a>
<li><strong>Previous message:</strong> <a href="28243.php">Bennet Fauber: "[OMPI users] Global settings"</a>
<li><strong>In reply to:</strong> <a href="28243.php">Bennet Fauber: "[OMPI users] Global settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28246.php">Bennet Fauber: "Re: [OMPI users] Global settings"</a>
<li><strong>Reply:</strong> <a href="28246.php">Bennet Fauber: "Re: [OMPI users] Global settings"</a>
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
