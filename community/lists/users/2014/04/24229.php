<?
$subject_val = "Re: [OMPI users] OpenMPI with Gemini Interconnect";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 17:19:10 2014" -->
<!-- isoreceived="20140416211910" -->
<!-- sent="Wed, 16 Apr 2014 15:19:09 -0600" -->
<!-- isosent="20140416211909" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with Gemini Interconnect" -->
<!-- id="20140416211909.GJ74994_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="534EEFB1.5010004_at_iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with Gemini Interconnect<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 17:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24230.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Previous message:</strong> <a href="24228.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>In reply to:</strong> <a href="24227.php">Ray Sheppard: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24230.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Reply:</strong> <a href="24230.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You do not need CCM to use Open MPI on with Gemini and Aries. Open MPI
<br>
has natively supported both networks since 1.7.0. Please take a look at
<br>
the platform files in contrib/platform/lanl/cray_xe6 for CLE 4.1
<br>
support. You should be able to just build using:
<br>
<p>configure --with-platform=contrib/platform/lanl/cray_xe6/optimized-lustre
<br>
<p>If you also enable the Java interfaces you should be up and running with
<br>
Gemini. Keep in mind you can use either mpirun or aprun to launch. You
<br>
will get a warning message from PMI (there is an open bug on this) when
<br>
using mpirun but it is harmless.
<br>
<p>If you want more info on the XE, XK, and XC support feel free to ask on
<br>
this list and I will try to get an answer back quickly.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p><p>On Wed, Apr 16, 2014 at 05:01:37PM -0400, Ray Sheppard wrote:
<br>
<span class="quotelev1">&gt;    Hello,
</span><br>
<span class="quotelev1">&gt;      Big Red 2 provides its own MPICH based MPI.  The only case where the
</span><br>
<span class="quotelev1">&gt;    provided OpenMPI module becomes relevant is when you create a CCMLogin
</span><br>
<span class="quotelev1">&gt;    instance in Cluster Compatibility Mode (CCM).  For most practical uses,
</span><br>
<span class="quotelev1">&gt;    those sorts of needs are better addressed on the Quarry or Mason
</span><br>
<span class="quotelev1">&gt;    machines. 
</span><br>
<span class="quotelev1">&gt;      When in CCM, the Gemini network is not directly accessible.  The
</span><br>
<span class="quotelev1">&gt;    proposed idea is for middleware to present an interface resembling an IB
</span><br>
<span class="quotelev1">&gt;    interface and use it to create a subset of the Gemini network for the CCM
</span><br>
<span class="quotelev1">&gt;    virtual cluster.  Unfortunately, due to a Cray bug, case 80503, that has
</span><br>
<span class="quotelev1">&gt;    not yet worked.
</span><br>
<span class="quotelev1">&gt;                            Ray
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On 4/16/2014 4:44 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hi,
</span><br>
<span class="quotelev1">&gt;      We have a Cray XE6/XK7 supercomputer (BigRed II) and I was trying to get
</span><br>
<span class="quotelev1">&gt;      OpenMPI Java binding working on it. I couldn't find a way to utilize its
</span><br>
<span class="quotelev1">&gt;      Gemini interconnect, instead was running on TCP, which is inefficient.
</span><br>
<span class="quotelev1">&gt;      I see some work has been done along these lines in [1] and wonder if you
</span><br>
<span class="quotelev1">&gt;      could give some suggestions on how to build OpenMPI with Gemini support.
</span><br>
<span class="quotelev1">&gt;      [1] <a href="https://www.open-mpi.org/papers/cug-2012/cug_2012_open_mpi_for_cray_xe_xk.pdf">https://www.open-mpi.org/papers/cug-2012/cug_2012_open_mpi_for_cray_xe_xk.pdf</a>
</span><br>
<span class="quotelev1">&gt;      Thank you,
</span><br>
<span class="quotelev1">&gt;      Saliya
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;      <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24229/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24230.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Previous message:</strong> <a href="24228.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>In reply to:</strong> <a href="24227.php">Ray Sheppard: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24230.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Reply:</strong> <a href="24230.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
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
