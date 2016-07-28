<?
$subject_val = "Re: [OMPI users] configure fails to detect missing libcrypto";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 12:16:37 2014" -->
<!-- isoreceived="20140801161637" -->
<!-- sent="Fri, 1 Aug 2014 09:16:31 -0700" -->
<!-- isosent="20140801161631" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure fails to detect missing libcrypto" -->
<!-- id="03B6013E-7114-402A-A472-1EEBC0F1F6B3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53D17DE1.7010209_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-08-01 12:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24901.php">Dan Shell: "[OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24899.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24867.php">Gus Correa: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff: did this get resolved? I'd like to release 1.8.2, but would like to know if this is a problem.
<br>
Ralph
<br>
<p>On Jul 24, 2014, at 2:42 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In case this matters,
</span><br>
<span class="quotelev1">&gt; ldd on my Torque 4.2.5 libtorque.so shows:
</span><br>
<span class="quotelev1">&gt; libcrypto.so.10 =&gt; /usr/lib64/libcrypto.so.10
</span><br>
<span class="quotelev1">&gt; plus a few kerberos crypto libraries, etc.
</span><br>
<span class="quotelev1">&gt; May be because I built Torque with PAM module support?
</span><br>
<span class="quotelev1">&gt; Anyway, I have built OMPI up to 1.6.5 with that Torque support
</span><br>
<span class="quotelev1">&gt; with no problem.
</span><br>
<span class="quotelev1">&gt; Could your libcrypto be in an an unusual location?
</span><br>
<span class="quotelev1">&gt; Maybe you need to load a Torque environment module to add it to your LD_LIBRARY_PATH before you build OMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/24/2014 05:18 PM, Jeff Hammond wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That could be the case.  I've reported the missing libcrypto issue to
</span><br>
<span class="quotelev2">&gt;&gt; NERSC already.  But neither Intel MPI nor MVAPICH care about libcrypto
</span><br>
<span class="quotelev2">&gt;&gt; and they are both supporting PBS, so I'm not entirely convinced that
</span><br>
<span class="quotelev2">&gt;&gt; PBS depends upon it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] configure fails to detect missing libcrypto
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2014-07-24 17:12:16
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Previous message: Jeff Hammond: &quot;[OMPI users] configure fails to
</span><br>
<span class="quotelev2">&gt;&gt; detect missing libcrypto&quot;
</span><br>
<span class="quotelev2">&gt;&gt; In reply to: Jeff Hammond: &quot;[OMPI users] configure fails to detect
</span><br>
<span class="quotelev2">&gt;&gt; missing libcrypto&quot;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not aware of our tm module requiring libcrypto - is this something
</span><br>
<span class="quotelev2">&gt;&gt; specific to your PBS install, so it wants to pull libcrypto in when we
</span><br>
<span class="quotelev2">&gt;&gt; link against the Torque lib?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 24, 2014, at 1:49 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to build Open MPI SVN trunk on NERSC Babbage with PBS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support. configure completes without error but the build fails
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because libcrypto.so is missing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I consider it a desirable property that configure detect all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; necessary dependencies for a build to complete, rather than defer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors to the compilation phase.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will file a Trac ticket as soon as my account is reset (in-progress).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in mca/plm/tm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte/mca/plm/tm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC plm_tm_component.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC plm_tm_module.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CCLD mca_plm_tm.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: cannot find -lcrypto
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [mca_plm_tm.la] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte/mca/plm/tm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;config.log.tbz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24864.php">http://www.open-mpi.org/community/lists/users/2014/07/24864.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24867.php">http://www.open-mpi.org/community/lists/users/2014/07/24867.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24900/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24901.php">Dan Shell: "[OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24899.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24867.php">Gus Correa: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
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
