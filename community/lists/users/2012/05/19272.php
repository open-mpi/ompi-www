<?
$subject_val = "Re: [OMPI users] problems with 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 14 22:51:08 2012" -->
<!-- isoreceived="20120515025108" -->
<!-- sent="Mon, 14 May 2012 20:51:00 -0600" -->
<!-- isosent="20120515025100" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with 1.6" -->
<!-- id="1EC5D43D-43B4-4871-9E92-4F889EF7AA5C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FB17C09.2000702_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with 1.6<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-14 22:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19273.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19271.php">David Turner: "[OMPI users] problems with 1.6"</a>
<li><strong>In reply to:</strong> <a href="19271.php">David Turner: "[OMPI users] problems with 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19288.php">David Turner: "Re: [OMPI users] problems with 1.6"</a>
<li><strong>Reply:</strong> <a href="19288.php">David Turner: "Re: [OMPI users] problems with 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I'll need more info than that, David - how was it configured, what is the resource manager, and what was the command line to launch?
<br>
<p>We aren't seeing any problems in our test systems, so I suspect the most likely reason is version confusion where the mpirun being used doesn't match the backend daemons.
<br>
<p><p>On May 14, 2012, at 3:41 PM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having troubles with the newly-available 1.6 release (tar.gz).
</span><br>
<span class="quotelev1">&gt; I built it with my &quot;normal&quot; configure options, with no obvious
</span><br>
<span class="quotelev1">&gt; configure or make errors.  I used both PGI 12.4, and GCC 4.7.0, under
</span><br>
<span class="quotelev1">&gt; Scientific Linux 5.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then compiled my &quot;normal&quot; matrix-multiply test case.  Upon execution,
</span><br>
<span class="quotelev1">&gt; I get (with either compiler):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [c0667:24962] [[39579,1],11] ORTE_ERROR_LOG: Data unpack had inadequate space in file util/nidmap.c at line 118
</span><br>
<span class="quotelev1">&gt; [c0667:24962] [[39579,1],11] ORTE_ERROR_LOG: Data unpack had inadequate space in file ess_env_module.c at line 174
</span><br>
<span class="quotelev1">&gt; [c0667:24966] [[39579,1],15] ORTE_ERROR_LOG: Data unpack had inadequate space in file util/nidmap.c at line 118
</span><br>
<span class="quotelev1">&gt; [c0667:24966] [[39579,1],15] ORTE_ERROR_LOG: Data unpack had inadequate space in file ess_env_module.c at line 174
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can provide additional details if needed, but again:  I did nothing
</span><br>
<span class="quotelev1">&gt; different than what I have done with previous OMPI and compiler
</span><br>
<span class="quotelev1">&gt; releases.  Thoughts?  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<li><strong>Next message:</strong> <a href="19273.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19271.php">David Turner: "[OMPI users] problems with 1.6"</a>
<li><strong>In reply to:</strong> <a href="19271.php">David Turner: "[OMPI users] problems with 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19288.php">David Turner: "Re: [OMPI users] problems with 1.6"</a>
<li><strong>Reply:</strong> <a href="19288.php">David Turner: "Re: [OMPI users] problems with 1.6"</a>
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
