<?
$subject_val = "Re: [OMPI users] OpenMPI with Gemini Interconnect";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 17:59:21 2014" -->
<!-- isoreceived="20140416215921" -->
<!-- sent="Wed, 16 Apr 2014 14:59:20 -0700" -->
<!-- isosent="20140416215920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with Gemini Interconnect" -->
<!-- id="CAMD57ocw-_nR9FU39L1bRSzBBL7xqxSgGzvsvMmo7WSP2LK8Xw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKUBLu5nv-kayrizg1v7qev=sZf0FU5vG8w++18R-d_cJg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 17:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24232.php">George Bosilca: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24230.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>In reply to:</strong> <a href="24230.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Java bindings are written on top of the C bindings, so you'll be able
<br>
to use those networks just fine from Java :-)
<br>
<p><p><p>On Wed, Apr 16, 2014 at 2:27 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Nathan, this is what I was looking for. I'll try to build
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.8 and get back to this thread if I run into issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 16, 2014 at 5:19 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You do not need CCM to use Open MPI on with Gemini and Aries. Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; has natively supported both networks since 1.7.0. Please take a look at
</span><br>
<span class="quotelev2">&gt;&gt; the platform files in contrib/platform/lanl/cray_xe6 for CLE 4.1
</span><br>
<span class="quotelev2">&gt;&gt; support. You should be able to just build using:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure --with-platform=contrib/platform/lanl/cray_xe6/optimized-lustre
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you also enable the Java interfaces you should be up and running with
</span><br>
<span class="quotelev2">&gt;&gt; Gemini. Keep in mind you can use either mpirun or aprun to launch. You
</span><br>
<span class="quotelev2">&gt;&gt; will get a warning message from PMI (there is an open bug on this) when
</span><br>
<span class="quotelev2">&gt;&gt; using mpirun but it is harmless.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want more info on the XE, XK, and XC support feel free to ask on
</span><br>
<span class="quotelev2">&gt;&gt; this list and I will try to get an answer back quickly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev2">&gt;&gt; HPC-5, LANL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Apr 16, 2014 at 05:01:37PM -0400, Ray Sheppard wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Big Red 2 provides its own MPICH based MPI.  The only case where
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    provided OpenMPI module becomes relevant is when you create a
</span><br>
<span class="quotelev2">&gt;&gt; CCMLogin
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    instance in Cluster Compatibility Mode (CCM).  For most practical
</span><br>
<span class="quotelev2">&gt;&gt; uses,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    those sorts of needs are better addressed on the Quarry or Mason
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    machines.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      When in CCM, the Gemini network is not directly accessible.  The
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    proposed idea is for middleware to present an interface resembling
</span><br>
<span class="quotelev2">&gt;&gt; an IB
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    interface and use it to create a subset of the Gemini network for
</span><br>
<span class="quotelev2">&gt;&gt; the CCM
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    virtual cluster.  Unfortunately, due to a Cray bug, case 80503, that
</span><br>
<span class="quotelev2">&gt;&gt; has
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    not yet worked.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                            Ray
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    On 4/16/2014 4:44 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      We have a Cray XE6/XK7 supercomputer (BigRed II) and I was trying
</span><br>
<span class="quotelev2">&gt;&gt; to get
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      OpenMPI Java binding working on it. I couldn't find a way to
</span><br>
<span class="quotelev2">&gt;&gt; utilize its
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Gemini interconnect, instead was running on TCP, which is
</span><br>
<span class="quotelev2">&gt;&gt; inefficient.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      I see some work has been done along these lines in [1] and wonder
</span><br>
<span class="quotelev2">&gt;&gt; if you
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      could give some suggestions on how to build OpenMPI with Gemini
</span><br>
<span class="quotelev2">&gt;&gt; support.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      [1]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/papers/cug-2012/cug_2012_open_mpi_for_cray_xe_xk.pdf">https://www.open-mpi.org/papers/cug-2012/cug_2012_open_mpi_for_cray_xe_xk.pdf</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Thank you,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Saliya
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24232.php">George Bosilca: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24230.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>In reply to:</strong> <a href="24230.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
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
