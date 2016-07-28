<?
$subject_val = "Re: [OMPI users] configure fails to detect missing libcrypto";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 17:42:25 2014" -->
<!-- isoreceived="20140724214225" -->
<!-- sent="Thu, 24 Jul 2014 17:42:57 -0400" -->
<!-- isosent="20140724214257" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure fails to detect missing libcrypto" -->
<!-- id="53D17DE1.7010209_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGKz=uJ0bzLMuNA7zZh1QK9LgajwfxtToaSJjqKrr+8qPp3pWw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 17:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24868.php">Siegmar Gross: "[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>Previous message:</strong> <a href="24866.php">Jeff Hammond: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>In reply to:</strong> <a href="24866.php">Jeff Hammond: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24900.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24900.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>In case this matters,
<br>
ldd on my Torque 4.2.5 libtorque.so shows:
<br>
libcrypto.so.10 =&gt; /usr/lib64/libcrypto.so.10
<br>
plus a few kerberos crypto libraries, etc.
<br>
May be because I built Torque with PAM module support?
<br>
Anyway, I have built OMPI up to 1.6.5 with that Torque support
<br>
with no problem.
<br>
Could your libcrypto be in an an unusual location?
<br>
Maybe you need to load a Torque environment module to add it to your 
<br>
LD_LIBRARY_PATH before you build OMPI?
<br>
<p>Gus Correa
<br>
<p><p>On 07/24/2014 05:18 PM, Jeff Hammond wrote:
<br>
<span class="quotelev1">&gt; That could be the case.  I've reported the missing libcrypto issue to
</span><br>
<span class="quotelev1">&gt; NERSC already.  But neither Intel MPI nor MVAPICH care about libcrypto
</span><br>
<span class="quotelev1">&gt; and they are both supporting PBS, so I'm not entirely convinced that
</span><br>
<span class="quotelev1">&gt; PBS depends upon it.
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
<span class="quotelev1">&gt; Subject: Re: [OMPI users] configure fails to detect missing libcrypto
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2014-07-24 17:12:16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Previous message: Jeff Hammond: &quot;[OMPI users] configure fails to
</span><br>
<span class="quotelev1">&gt; detect missing libcrypto&quot;
</span><br>
<span class="quotelev1">&gt; In reply to: Jeff Hammond: &quot;[OMPI users] configure fails to detect
</span><br>
<span class="quotelev1">&gt; missing libcrypto&quot;
</span><br>
<span class="quotelev1">&gt; I'm not aware of our tm module requiring libcrypto - is this something
</span><br>
<span class="quotelev1">&gt; specific to your PBS install, so it wants to pull libcrypto in when we
</span><br>
<span class="quotelev1">&gt; link against the Torque lib?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2014, at 1:49 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to build Open MPI SVN trunk on NERSC Babbage with PBS
</span><br>
<span class="quotelev2">&gt;&gt; support. configure completes without error but the build fails
</span><br>
<span class="quotelev2">&gt;&gt; because libcrypto.so is missing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I consider it a desirable property that configure detect all the
</span><br>
<span class="quotelev2">&gt;&gt; necessary dependencies for a build to complete, rather than defer
</span><br>
<span class="quotelev2">&gt;&gt; errors to the compilation phase.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will file a Trac ticket as soon as my account is reset (in-progress).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/plm/tm
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte/mca/plm/tm'
</span><br>
<span class="quotelev2">&gt;&gt; CC plm_tm_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC plm_tm_module.lo
</span><br>
<span class="quotelev2">&gt;&gt; CCLD mca_plm_tm.la
</span><br>
<span class="quotelev2">&gt;&gt; ld: cannot find -lcrypto
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [mca_plm_tm.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte/mca/plm/tm'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.tbz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24864.php">http://www.open-mpi.org/community/lists/users/2014/07/24864.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24868.php">Siegmar Gross: "[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>Previous message:</strong> <a href="24866.php">Jeff Hammond: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>In reply to:</strong> <a href="24866.php">Jeff Hammond: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24900.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24900.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
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
