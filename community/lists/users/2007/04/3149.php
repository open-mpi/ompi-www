<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 26 14:30:59 2007" -->
<!-- isoreceived="20070426183059" -->
<!-- sent="Thu, 26 Apr 2007 14:30:54 -0400" -->
<!-- isosent="20070426183054" -->
<!-- name="Donald Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI over uDAPL doesn't work" -->
<!-- id="4630EFDE.8070608_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46305D0A.5020900_at_lfbs.rwth-aachen.de" -->
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
<strong>Date:</strong> 2007-04-26 14:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3150.php">Andrew Friedley: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3148.php">Josh Hursey: "[OMPI users] Checkpoint/Restart Process Fault Tolerance Support"</a>
<li><strong>In reply to:</strong> <a href="3145.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3206.php">Boris Bierbaum: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3206.php">Boris Bierbaum: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not tried Open MPI uDAPL on Linux nor do I have access to a Linux 
<br>
box so I am having a difficult time trying to find a way to help you 
<br>
debug this issue.
<br>
<p>-DON
<br>
<p>Andreas Kuntze wrote:
<br>
<p><span class="quotelev1">&gt;On Linux you needn't initialise the dat registry. Your program prints: 
</span><br>
<span class="quotelev1">&gt;&quot;provider 1: OpenIB-cma&quot;. I successfully tested INTEL MPI  and  mvapich2 
</span><br>
<span class="quotelev1">&gt;with uDAPL .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Donald Kerr wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Andreas,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I am going to guess at a minimum the interfaces are up and you can 
</span><br>
<span class="quotelev2">&gt;&gt;ping them.  On Solaris there is an additional step required and that 
</span><br>
<span class="quotelev2">&gt;&gt;is initializing the dat registry. If &quot;/usr/sbin/datadm -v&quot; does not 
</span><br>
<span class="quotelev2">&gt;&gt;show some driver output then you would need to run &quot;/usr/sbin/datadm 
</span><br>
<span class="quotelev2">&gt;&gt;-a /usr/share/dat/SUNWudaplt.conf&quot;. I don't know if there is an 
</span><br>
<span class="quotelev2">&gt;&gt;equivalent on Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Attached is a simple udapl program which will check if the interfaces 
</span><br>
<span class="quotelev2">&gt;&gt;are available in the dat registry.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-DON
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3150.php">Andrew Friedley: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3148.php">Josh Hursey: "[OMPI users] Checkpoint/Restart Process Fault Tolerance Support"</a>
<li><strong>In reply to:</strong> <a href="3145.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3206.php">Boris Bierbaum: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3206.php">Boris Bierbaum: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
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
