<?
$subject_val = "Re: [OMPI users] how to select a specific network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 16:06:25 2008" -->
<!-- isoreceived="20080111210625" -->
<!-- sent="Fri, 11 Jan 2008 16:05:55 -0500" -->
<!-- isosent="20080111210555" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to select a specific network" -->
<!-- id="4787DA33.2090605_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="34865A18-8B19-4707-B991-DF220B6E415D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to select a specific network<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 16:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4818.php">Aurélien Bouteiller: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Previous message:</strong> <a href="4816.php">George Bosilca: "Re: [OMPI users] Open MPI and thread-safety"</a>
<li><strong>In reply to:</strong> <a href="4814.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] how to select a specific network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4818.php">Aurélien Bouteiller: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Reply:</strong> <a href="4818.php">Aurélien Bouteiller: "Re: [OMPI users] how to select a specific network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello:
<br>
Have you actually tried this and got it to work?  It did not work for me.
<br>
<p>&nbsp;&nbsp;burl-ct-v440-0 50 =&gt;mpirun -host burl-ct-v440-0,burl-ct-v440-1 -np 1 
<br>
-mca btl self,sm,tcp -mca btl_tcp_if_include ce0 connectivity_c : -np 1 
<br>
-mca btl self,sm,tcp -mca btl_tcp_if_include ce0 connectivity_c
<br>
Connectivity test on 2 processes PASSED.
<br>
&nbsp;&nbsp;burl-ct-v440-0 51 =&gt;mpirun -host burl-ct-v440-0,burl-ct-v440-1 -np 1 
<br>
-mca btl self,sm,tcp -mca btl_tcp_if_include ibd0 connectivity_c : -np 1 
<br>
-mca btl self,sm,tcp -mca btl_tcp_if_include ibd0 connectivity_c
<br>
Connectivity test on 2 processes PASSED.
<br>
&nbsp;&nbsp;burl-ct-v440-0 52 =&gt;mpirun -host burl-ct-v440-0,burl-ct-v440-1 -np 1 
<br>
-mca btl self,sm,tcp -mca btl_tcp_if_include ce0 connectivity_c : -np 1 
<br>
-mca btl self,sm,tcp -mca btl_tcp_if_include ibd0 connectivity_c
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;&nbsp;burl-ct-v440-0 53 =&gt;
<br>
<p><p><p>Aur&#233;lien Bouteiller wrote:
<br>
<span class="quotelev1">&gt; Try something similar to this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 -mca btl self,tcp -mca btl_tcp_if_include en1 NetPIPE_3.6/ 
</span><br>
<span class="quotelev1">&gt; NPmpi : -np 1 -mca btl self,tcp -mca btl_tcp_if_include en0   
</span><br>
<span class="quotelev1">&gt; NetPIPE_3.6/NPmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should then be able to specify a different if_include mask for you  
</span><br>
<span class="quotelev1">&gt; different processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 11 janv. 08 &#224; 06:46, Lydia Heck a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I should have added that the two networks are not routable,
</span><br>
<span class="quotelev2">&gt;&gt; and that they are private class B.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 11 Jan 2008, Lydia Heck wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a setup which contains one set of machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with one nge and one e1000g network and of machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with two e1000g networks configured. I am planning a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; large run where all these computers will be occupied
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with one job and the mpi communication should only go
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over one specific network which is configured over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e1000g0 on the first set of machines and on e1000g1 on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; second set. I cannot use - for obvious reasons to either
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include all of e1000g or to exclude part of e1000g - if that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I have to exclude or include on the internet number range.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there an obvious flag - which I have not yet found - to tell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun to use one specific network?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lydia
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr E L  Heck
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Durham
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ogden Centre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Physics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; South Road
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; United Kingdom
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ___________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dr E L  Heck
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; University of Durham
</span><br>
<span class="quotelev2">&gt;&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev2">&gt;&gt; Ogden Centre
</span><br>
<span class="quotelev2">&gt;&gt; Department of Physics
</span><br>
<span class="quotelev2">&gt;&gt; South Road
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev2">&gt;&gt; United Kingdom
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev2">&gt;&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev2">&gt;&gt; ___________________________________________
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; Sr. Research Associate - Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; Suite 350, 1122 Volunteer Boulevard
</span><br>
<span class="quotelev1">&gt; Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; 865 974 6321
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4818.php">Aurélien Bouteiller: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Previous message:</strong> <a href="4816.php">George Bosilca: "Re: [OMPI users] Open MPI and thread-safety"</a>
<li><strong>In reply to:</strong> <a href="4814.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] how to select a specific network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4818.php">Aurélien Bouteiller: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Reply:</strong> <a href="4818.php">Aurélien Bouteiller: "Re: [OMPI users] how to select a specific network"</a>
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
