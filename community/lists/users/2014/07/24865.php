<?
$subject_val = "Re: [OMPI users] configure fails to detect missing libcrypto";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 17:13:35 2014" -->
<!-- isoreceived="20140724211335" -->
<!-- sent="Thu, 24 Jul 2014 14:12:16 -0700" -->
<!-- isosent="20140724211216" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure fails to detect missing libcrypto" -->
<!-- id="33FE01EF-54A6-4D71-959D-EEBAA19F8EFE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGKz=uLF0VsRUxLHq_W6xiqnU2gHa8V0A+C=20531UEzO=8XMQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure fails to detect missing libcrypto<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 17:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24866.php">Jeff Hammond: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Previous message:</strong> <a href="24864.php">Jeff Hammond: "[OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>In reply to:</strong> <a href="24864.php">Jeff Hammond: "[OMPI users] configure fails to detect missing libcrypto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24866.php">Jeff Hammond: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not aware of our tm module requiring libcrypto - is this something specific to your PBS install, so it wants to pull libcrypto in when we link against the Torque lib?
<br>
<p>On Jul 24, 2014, at 1:49 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to build Open MPI SVN trunk on NERSC Babbage with PBS
</span><br>
<span class="quotelev1">&gt; support.  configure completes without error but the build fails
</span><br>
<span class="quotelev1">&gt; because libcrypto.so is missing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I consider it a desirable property that configure detect all the
</span><br>
<span class="quotelev1">&gt; necessary dependencies for a build to complete, rather than defer
</span><br>
<span class="quotelev1">&gt; errors to the compilation phase.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will file a Trac ticket as soon as my account is reset (in-progress).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mca/plm/tm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte/mca/plm/tm'
</span><br>
<span class="quotelev1">&gt;  CC       plm_tm_component.lo
</span><br>
<span class="quotelev1">&gt;  CC       plm_tm_module.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     mca_plm_tm.la
</span><br>
<span class="quotelev1">&gt; ld: cannot find -lcrypto
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mca_plm_tm.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte/mca/plm/tm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt; &lt;config.log.tbz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24864.php">http://www.open-mpi.org/community/lists/users/2014/07/24864.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24866.php">Jeff Hammond: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Previous message:</strong> <a href="24864.php">Jeff Hammond: "[OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>In reply to:</strong> <a href="24864.php">Jeff Hammond: "[OMPI users] configure fails to detect missing libcrypto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24866.php">Jeff Hammond: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
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
