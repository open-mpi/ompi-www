<?
$subject_val = "Re: [OMPI users] Setting bind-to none as default via environment?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 11:31:48 2015" -->
<!-- isoreceived="20151103163148" -->
<!-- sent="Tue, 03 Nov 2015 09:31:43 -0700" -->
<!-- isosent="20151103163143" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting bind-to none as default via environment?" -->
<!-- id="5638E16F.4060209_at_byu.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="093CAE37-10EF-45C9-B24C-90459621042E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting bind-to none as default via environment?<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-03 11:31:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27980.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27978.php">Ralph Castain: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27978.php">Ralph Castain: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27982.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="27982.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No problem.  It wasn't much of a delay.
<br>
<p>The scenario involves a combination of MPI and OpenMP (or other
<br>
threading scheme).  Basically, the software will launch one or more
<br>
processes via MPI, which then spawn threads to do the work.
<br>
<p>What we've been seeing is that, without something like '--bind-to none'
<br>
or similar, those threads end up being pinned to the same processor as
<br>
the process that spawned them.
<br>
<p>We're okay with a bind=none, since we already have cgroups in place to
<br>
constrain the user to the resources they request.  We might get more
<br>
process/thread migration between processors (but within the cgroup) than
<br>
we would like, but that's still probably acceptable in this scenario.
<br>
<p>If there's a better solution, we'd love to hear it.
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 11/03/2015 08:16 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Sorry for delay - was on travel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_base_binding_policy=none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively, you may get better performance if you bind to numa or
</span><br>
<span class="quotelev1">&gt; socket levels, assuming you want one proc per socket:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_base_binding_policy=socket [or numa]
</span><br>
<span class="quotelev1">&gt; rmaps_base_mapping_policy=socket [or numa]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 2, 2015, at 8:31 AM, Lloyd Brown &lt;lloyd_brown_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:lloyd_brown_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there an environment variable option, as well as the
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-mca-params.conf to set the equivalent of &quot;--bind-to none&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; Similar to how I can specify the environment variable
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OMPI_MCA_btl=^openib&quot; instead of the cli param &quot;--mca btl ^openib&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We're running into a situation where users have a combination of OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; and OpenMP threads, and the threads get constrained to the same
</span><br>
<span class="quotelev2">&gt;&gt; processor where the OpenMPI process was launched.  As far as we can
</span><br>
<span class="quotelev2">&gt;&gt; tell, this started with v1.8.x.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lloyd Brown
</span><br>
<span class="quotelev2">&gt;&gt; Systems Administrator
</span><br>
<span class="quotelev2">&gt;&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev2">&gt;&gt; Brigham Young University
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a> &lt;<a href="http://marylou.byu.edu/">http://marylou.byu.edu/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/01/2015 09:02 AM, Nick Papior wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can define default mca parameters in this file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;prefix&gt;/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2015-10-01 16:57 GMT+02:00 Grigory Shamov
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Grigory.Shamov_at_[hidden] &lt;mailto:Grigory.Shamov_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:Grigory.Shamov_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    A parhaps naive question: is it possible to set ' mpiexec &#151;bind-to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    none ' as a system-wide default in 1.10, like, by setting an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    OMPI_xxx variable?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Grigory Shamov
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Westgrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    University of Manitoba
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    E2-588 EITC Building, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    (204) 474-9625 &lt;tel:%28204%29%20474-9625&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/10/27764.php">http://www.open-mpi.org/community/lists/users/2015/10/27764.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27765.php">http://www.open-mpi.org/community/lists/users/2015/10/27765.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this
</span><br>
<span class="quotelev2">&gt;&gt; post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/27974.php">http://www.open-mpi.org/community/lists/users/2015/11/27974.php</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/27978.php">http://www.open-mpi.org/community/lists/users/2015/11/27978.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27980.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27978.php">Ralph Castain: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27978.php">Ralph Castain: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27982.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="27982.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
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
