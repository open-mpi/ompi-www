<?
$subject_val = "Re: [OMPI users] Setting bind-to none as default via environment?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 11:31:29 2015" -->
<!-- isoreceived="20151102163129" -->
<!-- sent="Mon, 02 Nov 2015 09:31:23 -0700" -->
<!-- isosent="20151102163123" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting bind-to none as default via environment?" -->
<!-- id="56378FDB.6080003_at_byu.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAbhqc6Q4=HpKzTaabjc+AkgxOOjwnsk9Ug4qTHcMgum_H6+-A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-11-02 11:31:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27975.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27973.php">Dave Love: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27765.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27978.php">Ralph Castain: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="27978.php">Ralph Castain: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there an environment variable option, as well as the
<br>
openmpi-mca-params.conf to set the equivalent of &quot;--bind-to none&quot;?
<br>
Similar to how I can specify the environment variable
<br>
&quot;OMPI_MCA_btl=^openib&quot; instead of the cli param &quot;--mca btl ^openib&quot;?
<br>
<p>We're running into a situation where users have a combination of OpenMPI
<br>
and OpenMP threads, and the threads get constrained to the same
<br>
processor where the OpenMPI process was launched.  As far as we can
<br>
tell, this started with v1.8.x.
<br>
<p><p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 10/01/2015 09:02 AM, Nick Papior wrote:
<br>
<span class="quotelev1">&gt; You can define default mca parameters in this file:
</span><br>
<span class="quotelev1">&gt; &lt;prefix&gt;/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-10-01 16:57 GMT+02:00 Grigory Shamov &lt;Grigory.Shamov_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Grigory.Shamov_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     A parhaps naive question: is it possible to set ' mpiexec &#151;bind-to
</span><br>
<span class="quotelev1">&gt;     none ' as a system-wide default in 1.10, like, by setting an
</span><br>
<span class="quotelev1">&gt;     OMPI_xxx variable?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Grigory Shamov
</span><br>
<span class="quotelev1">&gt;     Westgrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev1">&gt;     University of Manitoba
</span><br>
<span class="quotelev1">&gt;     E2-588 EITC Building, 
</span><br>
<span class="quotelev1">&gt;     (204) 474-9625 &lt;tel:%28204%29%20474-9625&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/10/27764.php">http://www.open-mpi.org/community/lists/users/2015/10/27764.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27765.php">http://www.open-mpi.org/community/lists/users/2015/10/27765.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27975.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27973.php">Dave Love: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27765.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27978.php">Ralph Castain: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="27978.php">Ralph Castain: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
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
