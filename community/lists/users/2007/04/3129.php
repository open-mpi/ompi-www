<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 24 11:11:01 2007" -->
<!-- isoreceived="20070424151101" -->
<!-- sent="Tue, 24 Apr 2007 11:10:54 -0400" -->
<!-- isosent="20070424151054" -->
<!-- name="Donald Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI over uDAPL doesn't work" -->
<!-- id="462E1DFE.5010703_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="462E13A6.3030207_at_lfbs.rwth-aachen.de" -->
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
<strong>From:</strong> Donald Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-24 11:10:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3130.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3128.php">Andreas Kuntze: "[OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3128.php">Andreas Kuntze: "[OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3145.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3145.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andreas,
<br>
<p>I am going to guess at a minimum the interfaces are up and you can ping 
<br>
them.  On Solaris there is an additional step required and that is 
<br>
initializing the dat registry. If &quot;/usr/sbin/datadm -v&quot; does not show 
<br>
some driver output then you would need to run &quot;/usr/sbin/datadm -a 
<br>
/usr/share/dat/SUNWudaplt.conf&quot;. I don't know if there is an equivalent 
<br>
on Linux.
<br>
<p>Attached is a simple udapl program which will check if the interfaces 
<br>
are available in the dat registry.
<br>
<p>-DON
<br>
<p>Andreas Kuntze wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I finally managed to run open MPI with uDAPl but all MPI programs  
</span><br>
<span class="quotelev1">&gt; hang up, when they use MPI_Recv. If I use TCP or native InfiniBand 
</span><br>
<span class="quotelev1">&gt; instead, it works. Maybe you have an idea where the problem could be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3129/dat_reg.c">dat_reg.c</a>
</ul>
<!-- attachment="dat_reg.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3130.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3128.php">Andreas Kuntze: "[OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3128.php">Andreas Kuntze: "[OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3145.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3145.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
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
