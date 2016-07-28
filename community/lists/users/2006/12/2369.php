<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 15 10:39:42 2006" -->
<!-- isoreceived="20061215153942" -->
<!-- sent="Fri, 15 Dec 2006 08:32:35 -0700" -->
<!-- isosent="20061215153235" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90" -->
<!-- id="7755A0FB-D84B-4493-9669-AE4E8A1401A7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5927226A3D285F40AB95CA2A3D2369D4C7A7DA_at_EXCLUSTER.pu.win.princeton.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-15 10:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2370.php">Doug Gregor: "[OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<li><strong>Previous message:</strong> <a href="2368.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>In reply to:</strong> <a href="2360.php">Dennis McRitchie: "[OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2006, at 4:15 PM, Dennis McRitchie wrote:
<br>
<p><span class="quotelev1">&gt; When creating a static build of an MPI program, I get a number of  
</span><br>
<span class="quotelev1">&gt; fatal
</span><br>
<span class="quotelev1">&gt; error messages, as listed below. They are all regarding conflicts
</span><br>
<span class="quotelev1">&gt; between duplicate definitions and different sizes of malloc, free,
</span><br>
<span class="quotelev1">&gt; realloc, etc. for the RHEL4 and openmpi versions of these functions. I
</span><br>
<span class="quotelev1">&gt; could build openmpi with --without-memorymanager, but we are using
</span><br>
<span class="quotelev1">&gt; infiniband and need the memory manager features.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi v1.1.2 built against the Intel fortran compiler  
</span><br>
<span class="quotelev1">&gt; v9.1
</span><br>
<span class="quotelev1">&gt; on RHEL4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local/openmpi-intel/bin/mpif90 -showme&quot; returns:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifort -I/usr/local/openmpi-1.1.2-intel/include -pthread
</span><br>
<span class="quotelev1">&gt; -I/usr/local/openmpi-1.1.2-intel/lib
</span><br>
<span class="quotelev1">&gt; -L/usr/local/openmpi-1.1.2-intel/lib -lmpi_f90 -lmpi -lorte -lopal - 
</span><br>
<span class="quotelev1">&gt; lrt
</span><br>
<span class="quotelev1">&gt; -lpbs -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The offending line is the one that links the program. I've added  
</span><br>
<span class="quotelev1">&gt; the -v
</span><br>
<span class="quotelev1">&gt; option so you can see all the utilities invoked below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to prevent this behavior?
</span><br>
<p>The only way to prevent this behavior when building a static library  
<br>
is to disable the memory manager code in Open MPI.  Note that this  
<br>
code is not required for use of the OpenIB, MVAPI, or GM transports,  
<br>
only to get peak bandwidth on applications with extremely high  
<br>
communication buffer reuse.  In fact, the default operating mode for  
<br>
Open MPI is to not use the memory manager code for registration cache.
<br>
<p>So configure and recompile with --without-memory-manager and Open MPI  
<br>
will compile fine.  You may also want to add the configure option -- 
<br>
disable-dlopen to silence some (but not all) of the other warnings.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2370.php">Doug Gregor: "[OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<li><strong>Previous message:</strong> <a href="2368.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>In reply to:</strong> <a href="2360.php">Dennis McRitchie: "[OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90"</a>
<!-- nextthread="start" -->
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
