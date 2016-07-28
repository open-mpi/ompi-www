<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 17 14:03:48 2005" -->
<!-- isoreceived="20051117190348" -->
<!-- sent="Thu, 17 Nov 2005 11:03:41 -0800" -->
<!-- isosent="20051117190341" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] FC4 Compile Problem" -->
<!-- id="381D8D88-9B93-4C4A-AD2D-7B61102E15AC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E21C0C99-61EC-46F5-A0A7-1E440D84715B_at_ole.augie.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-17 14:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0364.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0362.php">George Bosilca: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>In reply to:</strong> <a href="0358.php">David Huebner: "[O-MPI users] FC4 Compile Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 17, 2005, at 8:21 AM, David Huebner wrote:
<br>
<p><span class="quotelev1">&gt; I'm managing a small cluster running Clustermatic 5 on top of  
</span><br>
<span class="quotelev1">&gt; Fedora Core 4.  OMPI won't build, exiting with the following error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -O3 -DNDEBUG -fno-strict-aliasing -pthread -o .libs/orted  
</span><br>
<span class="quotelev1">&gt; orted.o -Wl,--export-dynamic  ../../../orte/.libs/liborte.so - 
</span><br>
<span class="quotelev1">&gt; lbproc /home/dthuebner/Desktop/openmpi/openmpi-1.0rc8/opal/.libs/ 
</span><br>
<span class="quotelev1">&gt; libopal.so ../../../opal/.libs/libopal.so -ldl -lm -lutil -lnsl - 
</span><br>
<span class="quotelev1">&gt; Wl,--rpath -Wl,/usr/openmpi/lib
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/liborte.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_kill_other_threads_np'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[3]: *** [orted] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/dthuebner/Desktop/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0rc8/orte/tools/orted'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/dthuebner/Desktop/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0rc8/orte/tools'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/dthuebner/Desktop/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0rc8/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p>Hi -
<br>
<p>Our current implementation of BProc process startup requires  
<br>
LinuxThreads in order to operate.  Unfortunately, this will not be  
<br>
fixed for the 1.0 due to time constraints.  I have added this to the  
<br>
list of known issues and we will be investigating it as time permits.
<br>
<p>For now, my only suggestion is to use LinuxThreads instead of NPTL on  
<br>
your cluster.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0364.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0362.php">George Bosilca: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>In reply to:</strong> <a href="0358.php">David Huebner: "[O-MPI users] FC4 Compile Problem"</a>
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
