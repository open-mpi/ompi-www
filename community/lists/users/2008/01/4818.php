<?
$subject_val = "Re: [OMPI users] how to select a specific network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 16:24:35 2008" -->
<!-- isoreceived="20080111212435" -->
<!-- sent="Fri, 11 Jan 2008 16:24:30 -0500" -->
<!-- isosent="20080111212430" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to select a specific network" -->
<!-- id="3D569BC3-16CF-4123-A9F2-EF407FAB24DC_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4787DA33.2090605_at_Sun.COM" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 16:24:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4819.php">Jeff Squyres: "Re: [OMPI users] Open MPI and thread-safety"</a>
<li><strong>Previous message:</strong> <a href="4817.php">Rolf Vandevaart: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>In reply to:</strong> <a href="4817.php">Rolf Vandevaart: "Re: [OMPI users] how to select a specific network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4812.php">Adrian Knoth: "Re: [OMPI users] how to select a specific network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ibd0 and ce0 have to be on the same network for this to work. Or said  
<br>
differently IP must be able to find a route between en0 and idb0. If  
<br>
those are on different private networks (like 192.168.1.x and  
<br>
192.168.2.x) this will not work.
<br>
<p>Aurelien
<br>
<p>Le 11 janv. 08 &#224; 16:05, Rolf Vandevaart a &#233;crit :
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello:
</span><br>
<span class="quotelev1">&gt; Have you actually tried this and got it to work?  It did not work  
</span><br>
<span class="quotelev1">&gt; for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  burl-ct-v440-0 50 =&gt;mpirun -host burl-ct-v440-0,burl-ct-v440-1 -np 1
</span><br>
<span class="quotelev1">&gt; -mca btl self,sm,tcp -mca btl_tcp_if_include ce0 connectivity_c : - 
</span><br>
<span class="quotelev1">&gt; np 1
</span><br>
<span class="quotelev1">&gt; -mca btl self,sm,tcp -mca btl_tcp_if_include ce0 connectivity_c
</span><br>
<span class="quotelev1">&gt; Connectivity test on 2 processes PASSED.
</span><br>
<span class="quotelev1">&gt;  burl-ct-v440-0 51 =&gt;mpirun -host burl-ct-v440-0,burl-ct-v440-1 -np 1
</span><br>
<span class="quotelev1">&gt; -mca btl self,sm,tcp -mca btl_tcp_if_include ibd0 connectivity_c : - 
</span><br>
<span class="quotelev1">&gt; np 1
</span><br>
<span class="quotelev1">&gt; -mca btl self,sm,tcp -mca btl_tcp_if_include ibd0 connectivity_c
</span><br>
<span class="quotelev1">&gt; Connectivity test on 2 processes PASSED.
</span><br>
<span class="quotelev1">&gt;  burl-ct-v440-0 52 =&gt;mpirun -host burl-ct-v440-0,burl-ct-v440-1 -np 1
</span><br>
<span class="quotelev1">&gt; -mca btl self,sm,tcp -mca btl_tcp_if_include ce0 connectivity_c : - 
</span><br>
<span class="quotelev1">&gt; np 1
</span><br>
<span class="quotelev1">&gt; -mca btl self,sm,tcp -mca btl_tcp_if_include ibd0 connectivity_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  burl-ct-v440-0 53 =&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Try something similar to this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 -mca btl self,tcp -mca btl_tcp_if_include en1  
</span><br>
<span class="quotelev2">&gt;&gt; NetPIPE_3.6/
</span><br>
<span class="quotelev2">&gt;&gt; NPmpi : -np 1 -mca btl self,tcp -mca btl_tcp_if_include en0
</span><br>
<span class="quotelev2">&gt;&gt; NetPIPE_3.6/NPmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You should then be able to specify a different if_include mask for  
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; different processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 11 janv. 08 &#224; 06:46, Lydia Heck a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I should have added that the two networks are not routable,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that they are private class B.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 11 Jan 2008, Lydia Heck wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a setup which contains one set of machines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with one nge and one e1000g network and of machines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with two e1000g networks configured. I am planning a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; large run where all these computers will be occupied
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with one job and the mpi communication should only go
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; over one specific network which is configured over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; e1000g0 on the first set of machines and on e1000g1 on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; second set. I cannot use - for obvious reasons to either
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include all of e1000g or to exclude part of e1000g - if that is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I have to exclude or include on the internet number range.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there an obvious flag - which I have not yet found - to tell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun to use one specific network?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lydia
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dr E L  Heck
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University of Durham
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ogden Centre
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Physics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; South Road
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; United Kingdom
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ___________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev2">&gt;&gt; Sr. Research Associate - Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Suite 350, 1122 Volunteer Boulevard
</span><br>
<span class="quotelev2">&gt;&gt; Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt;&gt; 865 974 6321
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<li><strong>Next message:</strong> <a href="4819.php">Jeff Squyres: "Re: [OMPI users] Open MPI and thread-safety"</a>
<li><strong>Previous message:</strong> <a href="4817.php">Rolf Vandevaart: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>In reply to:</strong> <a href="4817.php">Rolf Vandevaart: "Re: [OMPI users] how to select a specific network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4812.php">Adrian Knoth: "Re: [OMPI users] how to select a specific network"</a>
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
