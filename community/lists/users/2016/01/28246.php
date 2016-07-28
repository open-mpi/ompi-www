<?
$subject_val = "Re: [OMPI users] Global settings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 09:51:54 2016" -->
<!-- isoreceived="20160111145154" -->
<!-- sent="Mon, 11 Jan 2016 09:51:52 -0500" -->
<!-- isosent="20160111145152" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Global settings" -->
<!-- id="CAB2ovosnLmX1i92niDNLKGkfNBa84W5fOebb5P4nYJbEUTzRPg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="782CC9AF-DEEB-4D1E-95E2-F8F6DC8CDAE2_at_open-mpi.org" -->
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
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-11 09:51:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28247.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Previous message:</strong> <a href="28245.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Global settings"</a>
<li><strong>In reply to:</strong> <a href="28244.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28247.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Reply:</strong> <a href="28247.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph,
<br>
<p>The .../etc/mca-params.conf doesn't want the shell version with the
<br>
export and OMPI_MCA_ prefix, does it?
<br>
<p>$ tail -3 $MPI_HOME/etc/openmpi-mca-params.conf
<br>
# See &quot;ompi_info --param all all&quot; for a full listing of Open MPI MCA
<br>
# parameters available and their default values.
<br>
orte_hetero_nodes=1
<br>
<p>Yes, it appears the man page may have been outdated, as ompi_info -a shows:
<br>
<p>MCA hwloc: parameter &quot;hwloc_base_binding_policy&quot; (current value: &quot;&quot;,
<br>
data source: default, level: 9 dev/all, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Policy for binding processes [none |
<br>
hwthread | core (default) | l1cache | l2cache | l3cache | socket |
<br>
numa | board] (supported qualifiers: overload-allowed,if-supported)
<br>
<p>and the default is hwloc_base_binding_policy=core, I believe.
<br>
<p>Thanks, again, and sorry to be dense.
<br>
<p>-- bennet
<br>
<p>On Mon, Jan 11, 2016 at 9:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; For the 1.10 series, putting  &quot;export OMPI_MCA_hwloc_base_binding_policy=none&#226;&#128;&#157; into your default MCA param file will solve the problem. I believe that is true for all of the 1.8 series as well, and suspect the man page for 1.8.2 was simply out-of-date. You could verify that if you are using something that old.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 11, 2016, at 5:32 AM, Bennet Fauber &lt;bennet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have an issue with binding to cores with some applications and the
</span><br>
<span class="quotelev2">&gt;&gt; default causes issues.  We would, therefore, like to set the
</span><br>
<span class="quotelev2">&gt;&gt; equivalent of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --bind-to none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; globally.  I tried search for combinations of 'openmpi global
</span><br>
<span class="quotelev2">&gt;&gt; settings', 'site settings', and the like on the web and ended up
</span><br>
<span class="quotelev2">&gt;&gt; several times at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params">https://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That makes it look very much like MCA parameters are for network
</span><br>
<span class="quotelev2">&gt;&gt; settings; see, specifically, section 4. What are MCA Parameters? Why
</span><br>
<span class="quotelev2">&gt;&gt; would I set them?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At some point, though, the mpirun man page,
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/doc/v1.8/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.8/man1/mpirun.1.php</a>, where at the end
</span><br>
<span class="quotelev2">&gt;&gt; of the section titled, Mapping, Ranking, and Binding: Oh My!, it says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Process binding can also be set with MCA parameters. Their usage is
</span><br>
<span class="quotelev2">&gt;&gt; less convenient than that of mpirun options. On the other hand, MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameters can be set not only on the mpirun command line, but
</span><br>
<span class="quotelev2">&gt;&gt; alternatively in a system or user mca-params.conf file or as
</span><br>
<span class="quotelev2">&gt;&gt; environment variables, as described in the MCA section below. Some
</span><br>
<span class="quotelev2">&gt;&gt; examples include:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun option MCA parameter key value
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --map-by core rmaps_base_mapping_policy core
</span><br>
<span class="quotelev2">&gt;&gt; . . . .
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to none hwloc_base_binding_policy none
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I correct in interpreting this to mean that, if I
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     export OMPI_MCA_hwloc_base_binding_policy=none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; from the module file, the default binding will be 'none'?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Equivalently, if I add a line to /ompi/install/path/etc/mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_base_binding_policy = none
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that would do the same?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The web version of the man page is for 1.8.8, and it agrees with the
</span><br>
<span class="quotelev2">&gt;&gt; installed man page for our 1.8.7.  However, it appears that our system
</span><br>
<span class="quotelev2">&gt;&gt; man page for mpirun(1) for OpenMPI 1.8.2 has slightly different
</span><br>
<span class="quotelev2">&gt;&gt; parameters.  Specifically,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Process binding can also be set with MCA parameters.   Their  usage  is
</span><br>
<span class="quotelev2">&gt;&gt;       less  convenient  than  that of mpirun options.  On the other hand, MCA
</span><br>
<span class="quotelev2">&gt;&gt;       parameters can be set not only on the mpirun command line, but alterna-
</span><br>
<span class="quotelev2">&gt;&gt;       tively in a system or user mca-params.conf file or as environment vari-
</span><br>
<span class="quotelev2">&gt;&gt;       ables, as described in the MCA section below.  The correspondences are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun option          MCA parameter key           value
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -bycore                rmaps_base_schedule_policy  core
</span><br>
<span class="quotelev2">&gt;&gt;         -bysocket              rmaps_base_schedule_policy  socket
</span><br>
<span class="quotelev2">&gt;&gt;         -bind-to-core          orte_process_binding        core
</span><br>
<span class="quotelev2">&gt;&gt;         -bind-to-socket        orte_process_binding        socket
</span><br>
<span class="quotelev2">&gt;&gt;         -bind-to-none          orte_process_binding        none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So for version 1.8.2, the equivalent incantations would be
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     export OMPI_MCA_orte_process_binding=none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /ompi/install/path/v1.8.2/etc/mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_binding = none
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry to be dense about this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,   -- bennet
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28243.php">http://www.open-mpi.org/community/lists/users/2016/01/28243.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28244.php">http://www.open-mpi.org/community/lists/users/2016/01/28244.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28247.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Previous message:</strong> <a href="28245.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Global settings"</a>
<li><strong>In reply to:</strong> <a href="28244.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28247.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Reply:</strong> <a href="28247.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
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
