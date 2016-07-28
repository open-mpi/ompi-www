<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 21 12:05:18 2007" -->
<!-- isoreceived="20070221170518" -->
<!-- sent="Wed, 21 Feb 2007 12:04:34 -0500" -->
<!-- isosent="20070221170434" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling HPCC with OpenMPI" -->
<!-- id="1879E64F-739F-4823-A3B4-5D55B0B6320B_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200702211135.58267.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-21 12:04:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2726.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2724.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2722.php">Eric Thibodeau: "[OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2726.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2726.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should use something like this
<br>
MPdir = /usr/local/mpi
<br>
MPinc = -I$(MPdir)/include
<br>
MPlib = -L$(MPdir)/lib -lmpi -lopen-rte -lopen-pal
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 21, 2007, at 11:35 AM, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	As we all know, compiling OpenMPI is not a matter of adding -lmpi  
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a>). I have tried many  
</span><br>
<span class="quotelev1">&gt; different approaches on configuring the 3 crucial MPI lines in the  
</span><br>
<span class="quotelev1">&gt; HPCC Makefiles with no success. There seems to be no correct way to  
</span><br>
<span class="quotelev1">&gt; get mpicc --shome:* to return the correct info and forcing the  
</span><br>
<span class="quotelev1">&gt; correct paths/info seems to be incorrect (ie, what OpenMPI lib do I  
</span><br>
<span class="quotelev1">&gt; point to here:  MPlib = $(MPdir)/lib/libmpich.a)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exerp from the Makefile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - Message Passing library (MPI)  
</span><br>
<span class="quotelev1">&gt; --------------------------------------
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # MPinc tells the  C  compiler where to find the Message Passing  
</span><br>
<span class="quotelev1">&gt; library
</span><br>
<span class="quotelev1">&gt; # header files,  MPlib  is defined  to be the name of  the library  
</span><br>
<span class="quotelev1">&gt; to be
</span><br>
<span class="quotelev1">&gt; # used. The variable MPdir is only used for defining MPinc and MPlib.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; MPdir        = /usr/local/mpi
</span><br>
<span class="quotelev1">&gt; MPinc        = -I$(MPdir)/include
</span><br>
<span class="quotelev1">&gt; MPlib        = $(MPdir)/lib/libmpich.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau
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
<li><strong>Next message:</strong> <a href="2726.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2724.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2722.php">Eric Thibodeau: "[OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2726.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2726.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
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
