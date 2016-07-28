<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  2 15:55:29 2006" -->
<!-- isoreceived="20061002195529" -->
<!-- sent="Mon, 2 Oct 2006 15:53:53 -0400" -->
<!-- isosent="20061002195353" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS &amp;amp; OpenMPI" -->
<!-- id="9AF9CC77-009F-42C2-8366-F0EB0DE38B2C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E97633BC-19E2-4892-B187-BCB0CE07BA29_at_ieee.org" -->
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
<strong>Date:</strong> 2006-10-02 15:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1915.php">Michael Kluskens: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1913.php">Michael Kluskens: "[OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1913.php">Michael Kluskens: "[OMPI users] BLACS &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1915.php">Michael Kluskens: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="1915.php">Michael Kluskens: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We usually advertise mpicc as the best way to compile an Open MPI  
<br>
application. This is because the includes and the libs that have to  
<br>
be on the linker command. The problem here is that libmpi.a is not  
<br>
enough as the full installation of Open MPI include 3 sub-projects  
<br>
(OPAL, ORTE and OMPI).
<br>
<p>If you really want to compile BLACS with this approach then change  
<br>
the MPILIB to &quot;-lmpi -lorte -lopal&quot;. Otherwise set it to an empty  
<br>
string and set CC to mpicc.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 2, 2006, at 3:32 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; Building BLACS 1.1 with patch 3 and OpenMPI 1.1.1 (using gcc and  
</span><br>
<span class="quotelev1">&gt; ifort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuring the Bmake.inc file, if I set:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPILIB = -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no trouble building the install program xsyserrors.  However,
</span><br>
<span class="quotelev1">&gt; the more standard approach is to set:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPILIB = $(MPILIBdir)/libmpi.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which generates the following error and more:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.a(dt_module.o)(.text+0x34c1): In function
</span><br>
<span class="quotelev1">&gt; `ompi_ddt_init':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `opal_class_initialize'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have libmpi.a because I had specified  --enable-static when I build
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.1.  But there appears to be some details about static
</span><br>
<span class="quotelev1">&gt; libraries that I missed in the documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to use static libraries is it required to also include
</span><br>
<span class="quotelev1">&gt; components in libraries?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1915.php">Michael Kluskens: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1913.php">Michael Kluskens: "[OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1913.php">Michael Kluskens: "[OMPI users] BLACS &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1915.php">Michael Kluskens: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="1915.php">Michael Kluskens: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
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
