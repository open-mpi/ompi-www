<?
$subject_val = "Re: [OMPI users] open-mpi error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 24 16:59:11 2011" -->
<!-- isoreceived="20111124215911" -->
<!-- sent="Thu, 24 Nov 2011 22:59:04 +0100" -->
<!-- isosent="20111124215904" -->
<!-- name="Markus Stiller" -->
<!-- email="pge08fjv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi error" -->
<!-- id="4ECEBE28.2090208_at_studserv.uni-leipzig.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="000001ccaaed$35e62cb0$a1b28610$_at_com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi error<br>
<strong>From:</strong> Markus Stiller (<em>pge08fjv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-24 16:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17828.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<li><strong>In reply to:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17828.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/24/2011 10:08 PM, MM wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the same error while linking against home built 1.5.4 openmpi libs on
</span><br>
<span class="quotelev1">&gt; win32.
</span><br>
<span class="quotelev1">&gt; I didn't get this error against the prebuilt libs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see you use Suse. There probably is a openmpi.rpm or openmpi.dpkg already
</span><br>
<span class="quotelev1">&gt; available for Suse which contains the libraries and you could link against
</span><br>
<span class="quotelev1">&gt; those and that may work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Markus Stiller
</span><br>
<span class="quotelev1">&gt; Sent: 24 November 2011 20:41
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] open-mpi error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i have some problem with mpi, i looked in the FAQ and google already but i
</span><br>
<span class="quotelev1">&gt; couldnt find a solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To build mpi i used this:
</span><br>
<span class="quotelev1">&gt; shell$ ./configure --prefix=/opt/mpirun
</span><br>
<span class="quotelev1">&gt; &lt;...lots of output...&gt;
</span><br>
<span class="quotelev1">&gt; shell$ make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Worked fine so far. I am using dlpoly, and this makefile:
</span><br>
<span class="quotelev1">&gt;       $(MAKE) LD=&quot;mpif90 -o&quot; LDFLAGS=&quot;-O3&quot; \
</span><br>
<span class="quotelev1">&gt;       FC=&quot;mpif90 -c&quot; FCFLAGS=&quot;-O3&quot; \
</span><br>
<span class="quotelev1">&gt;       EX=$(EX) BINROOT=$(BINROOT) $(TYPE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This worked fine too,
</span><br>
<span class="quotelev1">&gt; the problem occurs when i want to run a job with
</span><br>
<span class="quotelev1">&gt; mpiexec -n 4 ./DLPOLY.Z   or
</span><br>
<span class="quotelev1">&gt; mpirun -n 4 ./DLPOLY.z
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this error:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [linux-6wa6:02927] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orterun.c at line 543 markus_at_linux-6wa6:/media/808CCB178CCB069E/MD
</span><br>
<span class="quotelev1">&gt; Simulations/Test Simu1&gt;  sudo mpiexec -n 4 ./DLPOLY.Z [linux-6wa6:03731]
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at
</span><br>
<span class="quotelev1">&gt; line 125
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can fail
</span><br>
<span class="quotelev1">&gt; during orte_init; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;     --&gt;  Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [linux-6wa6:03731] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orterun.c at line 543
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some Informations:
</span><br>
<span class="quotelev1">&gt; I use Open MPI 1.4.4, Suse 64bit, AMD quadcore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make check gives:
</span><br>
<span class="quotelev1">&gt; make: *** No rule to make target `check'.  Stop.
</span><br>
<span class="quotelev1">&gt; I attached the ompi_info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx alot for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Markus
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
<span class="quotelev1">&gt;
</span><br>
Hi,
<br>
<p>thx for your answer.
<br>
When i try this (with mpich) i get problems with dl_poly itself:
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../x86_64-suse-linux/bin/ld: 
<br>
cannot find -lmpi_f90
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../x86_64-suse-linux/bin/ld: 
<br>
cannot find -lmpi_f77
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../x86_64-suse-linux/bin/ld: 
<br>
cannot find -lmpi
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../x86_64-suse-linux/bin/ld: 
<br>
cannot find -lopen-rte
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../x86_64-suse-linux/bin/ld: 
<br>
cannot find -lopen-pal
<br>
<p>I do not really know how to get rid of this either ^^
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17828.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<li><strong>In reply to:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17828.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
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
