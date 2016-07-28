<?
$subject_val = "Re: [OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 13:59:20 2007" -->
<!-- isoreceived="20071218185920" -->
<!-- sent="Tue, 18 Dec 2007 11:59:10 -0700" -->
<!-- isosent="20071218185910" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="C38D668E.BA24%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF8BC10C79.347D472E-ON862573B5.0063EF72-862573B5.006406FA_at_exxonmobil.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Torque and OpenMPI 1.2<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 13:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4717.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4715.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4715.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4718.php">Terry Frankcombe: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4718.php">Terry Frankcombe: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hate to be a party-pooper, but the answer is &quot;no&quot; in OpenMPI 1.2. We don't
<br>
allow the use of a hostfile in a Torque environment in that version.
<br>
<p>We have changed this for v1.3, but you'll have to wait for that release.
<br>
<p>Sorry
<br>
Ralph
<br>
<p><p><p>On 12/18/07 11:12 AM, &quot;pat.o'bryant_at_[hidden]&quot;
<br>
&lt;pat.o'bryant_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tim,
</span><br>
<span class="quotelev1">&gt;      Will OpenMPI 1.2.1 allow the use of a &quot;hostfile&quot;?
</span><br>
<span class="quotelev1">&gt;                  Thanks,
</span><br>
<span class="quotelev1">&gt;                   Pat
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev1">&gt; Business Line Infrastructure
</span><br>
<span class="quotelev1">&gt; Technical Systems, HPC
</span><br>
<span class="quotelev1">&gt; Office: 713-431-7022
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              Tim Prins
</span><br>
<span class="quotelev1">&gt;              &lt;tprins_at_open-m
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt; pi.org&gt;                                                    To
</span><br>
<span class="quotelev1">&gt;              Sent by:                 Open MPI Users &lt;users_at_open-
</span><br>
<span class="quotelev1">&gt; mpi.org&gt;
</span><br>
<span class="quotelev1">&gt;              users-
</span><br>
<span class="quotelev1">&gt; bounces@                                             cc
</span><br>
<span class="quotelev1">&gt;              open-mpi.org
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt;                                       Re: [OMPI users] Torque and
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt;              12/18/07 11:57           1.2
</span><br>
<span class="quotelev1">&gt;              AM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              Please respond
</span><br>
<span class="quotelev1">&gt;                    to
</span><br>
<span class="quotelev1">&gt;              Open MPI Users
</span><br>
<span class="quotelev1">&gt;              &lt;users_at_open-mp
</span><br>
<span class="quotelev1">&gt;                  i.org&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI v1.2 had some problems with the TM configuration code which was
</span><br>
<span class="quotelev1">&gt; fixed
</span><br>
<span class="quotelev1">&gt; in v1.2.1. So any version v1.2.1 or later should work fine (and, as you
</span><br>
<span class="quotelev1">&gt; indicate, 1.2.4 works fine).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday 18 December 2007 12:48:40 pm pat.o'bryant_at_[hidden]
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;    Here is the result of the &quot;pbs-config&quot;. By the way, I have
</span><br>
<span class="quotelev1">&gt; successfully
</span><br>
<span class="quotelev2">&gt;&gt; built OpenMPI 1.2.4 on this same system. The &quot;config.log&quot; for OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2.4
</span><br>
<span class="quotelev2">&gt;&gt; shows the correct Torque path. That is not surprising since the
</span><br>
<span class="quotelev1">&gt; &quot;configure&quot;
</span><br>
<span class="quotelev2">&gt;&gt; script for OpenMPI 1.2.4 uses &quot;pbs-config&quot; while the configure
</span><br>
<span class="quotelev2">&gt;&gt; script for
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.2 does not.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------- # pbs-config --libs
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/local/pbs/x86_64/lib -ltorque -Wl,--rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/usr/local/pbs/x86_64/lib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Now, to address your concern about the nodes, my users are not
</span><br>
<span class="quotelev1">&gt; &quot;adding
</span><br>
<span class="quotelev2">&gt;&gt; nodes&quot; to those provided by Torque. They are using a &quot;proper subset&quot;
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; nodes.  Also,  I believe I read this comment on the OpenMPI web site
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev2">&gt;&gt; seems to imply an oversight as far as the &quot;-hostfile&quot; is concerned.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------- Can I specify a hostfile
</span><br>
<span class="quotelev2">&gt;&gt; or use
</span><br>
<span class="quotelev2">&gt;&gt; the --host option to mpirun when running in a Torque / PBS
</span><br>
<span class="quotelev2">&gt;&gt; environment?
</span><br>
<span class="quotelev2">&gt;&gt; As of version v1.2.1, no.
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI will fail to launch processes properly when a hostfile is
</span><br>
<span class="quotelev1">&gt; specifed
</span><br>
<span class="quotelev2">&gt;&gt; on the mpirun command line, or if the mpirun [--host] option is used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're working on correcting the error. A future version of Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; will
</span><br>
<span class="quotelev2">&gt;&gt; likely launch on the hosts specified either in the hostfile or via the
</span><br>
<span class="quotelev2">&gt;&gt; --host option as long as they are a proper subset of the hosts
</span><br>
<span class="quotelev2">&gt;&gt; allocated
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; the Torque / PBS Pro job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------- Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev2">&gt;&gt; Business Line Infrastructure
</span><br>
<span class="quotelev2">&gt;&gt; Technical Systems, HPC
</span><br>
<span class="quotelev2">&gt;&gt; Office: 713-431-7022
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
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4717.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4715.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4715.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4718.php">Terry Frankcombe: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4718.php">Terry Frankcombe: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
