<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  9 10:45:00 2005" -->
<!-- isoreceived="20051109154500" -->
<!-- sent="Wed, 9 Nov 2005 08:44:50 -0700" -->
<!-- isosent="20051109154450" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenIB module problem/questions:" -->
<!-- id="F6CC2373-2B24-4657-B125-ED42C1F33705_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.szx77o01ies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-09 10:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0296.php">Troy Telford: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>Previous message:</strong> <a href="0294.php">Troy Telford: "[O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>In reply to:</strong> <a href="0294.php">Troy Telford: "[O-MPI users] OpenIB module problem/questions:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0296.php">Troy Telford: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>Reply:</strong> <a href="0296.php">Troy Telford: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 8, 2005, at 6:10 PM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; I decided to try OpenMPI using the 'openib' module, rather than  
</span><br>
<span class="quotelev1">&gt; 'mvapi'; however I'm having a bit of difficulty:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test hardware is the same as in my earlier posts, the only  
</span><br>
<span class="quotelev1">&gt; software difference is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux 2.6.14 (OpenIB 2nd gen IB drivers)
</span><br>
<span class="quotelev1">&gt; OpenIB userspace tools (svn from openib.org)
</span><br>
<span class="quotelev1">&gt; OpenMPI (svn revision 8046)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm executing the program using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0svn/ --mca btl  
</span><br>
<span class="quotelev1">&gt; openib -np 100 -machinefile nodelist &lt;program&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I receive the following error:
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:341:mca_btl_openib_component_init]   
</span><br>
<span class="quotelev1">&gt; error obtaining device context for mthca0 errno says No such file  
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This error is occurring when Open MPI attempts to open the Infiniband  
<br>
device mthca0. This doesn't appear to be an Open MPI issue, it looks  
<br>
like a configuration issue with OpenIB. What do you find under /sys/ 
<br>
class/infiniband/ ?
<br>
You might also want to recheck your OpenIB installation.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; No available btl components were found!
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of ompi_info is included; it appears that the openib btl  
</span><br>
<span class="quotelev1">&gt; component does exist, however.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly enough, if I use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0svn/ --mca ptl  
</span><br>
<span class="quotelev1">&gt; openib -np 100 -machinefile nodelist &lt;program&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program will execute; which is even more interesting:
</span><br>
<span class="quotelev1">&gt; * There is no openib ptl (or at least, there isn't one in  
</span><br>
<span class="quotelev1">&gt; ompi_info, nor is there a corresponding mca_ptl_openib.la or .so file)
</span><br>
<span class="quotelev1">&gt; * Even though 'openib' is specified, the TCP interface is used.   
</span><br>
<span class="quotelev1">&gt; (not a bug, but a feature?)
</span><br>
<span class="quotelev1">&gt; * Before execution begins, I receive this error (but execution then  
</span><br>
<span class="quotelev1">&gt; continues):
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:341:mca_btl_openib_component_init]   
</span><br>
<span class="quotelev1">&gt; error obtaining device context for mthca0 errno says No such file  
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.out&gt;
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
<li><strong>Next message:</strong> <a href="0296.php">Troy Telford: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>Previous message:</strong> <a href="0294.php">Troy Telford: "[O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>In reply to:</strong> <a href="0294.php">Troy Telford: "[O-MPI users] OpenIB module problem/questions:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0296.php">Troy Telford: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>Reply:</strong> <a href="0296.php">Troy Telford: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
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
