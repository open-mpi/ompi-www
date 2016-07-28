<?
$subject_val = "Re: [OMPI users] Setting bind-to none as default via environment?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 10:16:40 2015" -->
<!-- isoreceived="20151103151640" -->
<!-- sent="Tue, 3 Nov 2015 07:16:33 -0800" -->
<!-- isosent="20151103151633" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting bind-to none as default via environment?" -->
<!-- id="093CAE37-10EF-45C9-B24C-90459621042E_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56378FDB.6080003_at_byu.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-03 10:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27979.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="27977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27974.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27979.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="27979.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delay - was on travel.
<br>
<p>hwloc_base_binding_policy=none
<br>
<p>Alternatively, you may get better performance if you bind to numa or socket levels, assuming you want one proc per socket:
<br>
<p>hwloc_base_binding_policy=socket [or numa]
<br>
rmaps_base_mapping_policy=socket [or numa]
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Nov 2, 2015, at 8:31 AM, Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there an environment variable option, as well as the
</span><br>
<span class="quotelev1">&gt; openmpi-mca-params.conf to set the equivalent of &quot;--bind-to none&quot;?
</span><br>
<span class="quotelev1">&gt; Similar to how I can specify the environment variable
</span><br>
<span class="quotelev1">&gt; &quot;OMPI_MCA_btl=^openib&quot; instead of the cli param &quot;--mca btl ^openib&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're running into a situation where users have a combination of OpenMPI
</span><br>
<span class="quotelev1">&gt; and OpenMP threads, and the threads get constrained to the same
</span><br>
<span class="quotelev1">&gt; processor where the OpenMPI process was launched.  As far as we can
</span><br>
<span class="quotelev1">&gt; tell, this started with v1.8.x.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lloyd Brown
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; Brigham Young University
</span><br>
<span class="quotelev1">&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a> &lt;<a href="http://marylou.byu.edu/">http://marylou.byu.edu/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/01/2015 09:02 AM, Nick Papior wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You can define default mca parameters in this file:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;prefix&gt;/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2015-10-01 16:57 GMT+02:00 Grigory Shamov &lt;Grigory.Shamov_at_[hidden] &lt;mailto:Grigory.Shamov_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Grigory.Shamov_at_[hidden] &lt;mailto:Grigory.Shamov_at_[hidden]&gt;&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Hi All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    A parhaps naive question: is it possible to set ' mpiexec &#151;bind-to
</span><br>
<span class="quotelev2">&gt;&gt;    none ' as a system-wide default in 1.10, like, by setting an
</span><br>
<span class="quotelev2">&gt;&gt;    OMPI_xxx variable?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    -- 
</span><br>
<span class="quotelev2">&gt;&gt;    Grigory Shamov
</span><br>
<span class="quotelev2">&gt;&gt;    Westgrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev2">&gt;&gt;    University of Manitoba
</span><br>
<span class="quotelev2">&gt;&gt;    E2-588 EITC Building, 
</span><br>
<span class="quotelev2">&gt;&gt;    (204) 474-9625 &lt;tel:%28204%29%20474-9625 &lt;tel:%28204%29%20474-9625&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/10/27764.php">http://www.open-mpi.org/community/lists/users/2015/10/27764.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27765.php">http://www.open-mpi.org/community/lists/users/2015/10/27765.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/27974.php">http://www.open-mpi.org/community/lists/users/2015/11/27974.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/27974.php">http://www.open-mpi.org/community/lists/users/2015/11/27974.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27979.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="27977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27974.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27979.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="27979.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
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
