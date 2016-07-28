<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 28 09:28:56 2007" -->
<!-- isoreceived="20070928132856" -->
<!-- sent="Fri, 28 Sep 2007 07:28:35 -0600" -->
<!-- isosent="20070928132835" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on 64 bits intel Mac OS X" -->
<!-- id="CBF731EC-6CED-44F5-8848-D6EB0C0078ED_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="354E9118-A20C-44BD-90A6-E59D39A9B659_at_unile.it" -->
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
<strong>Date:</strong> 2007-09-28 09:28:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4093.php">Yu. Vishnevsky: "[OMPI users] Run MPI-based program without mpirun"</a>
<li><strong>Previous message:</strong> <a href="4091.php">Terry Dontje: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, , sm, self"</a>
<li><strong>In reply to:</strong> <a href="4089.php">Massimo Cafaro: "[OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4099.php">Massimo Cafaro: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<li><strong>Reply:</strong> <a href="4099.php">Massimo Cafaro: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2007, at 4:56 AM, Massimo Cafaro wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I try to compile my MPI code on 64 bits intel Mac OS X the  
</span><br>
<span class="quotelev1">&gt; build fails since the Open MPI library has been compiled using 32  
</span><br>
<span class="quotelev1">&gt; bits. Can you please provide in the next version the ability at  
</span><br>
<span class="quotelev1">&gt; configure time to choose between 32 and 64 bits or even better  
</span><br>
<span class="quotelev1">&gt; compile by defaults using both modes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To reproduce the problem, simply compile on 64 bits intel Mac OS X  
</span><br>
<span class="quotelev1">&gt; an MPI application using mpicc -arch x86_64. The 64 bits linker  
</span><br>
<span class="quotelev1">&gt; complains as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ld64 warning: in /usr/local/mpi/lib/libmpi.dylib, file is not of  
</span><br>
<span class="quotelev1">&gt; required architecture
</span><br>
<span class="quotelev1">&gt; ld64 warning: in /usr/local/mpi/lib/libopen-rte.dylib, file is not  
</span><br>
<span class="quotelev1">&gt; of required architecture
</span><br>
<span class="quotelev1">&gt; ld64 warning: in /usr/local/mpi/lib/libopen-pal.dylib, file is not  
</span><br>
<span class="quotelev1">&gt; of required architecture
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and a number of undefined symbols is shown, one for each MPI  
</span><br>
<span class="quotelev1">&gt; function used in the application.
</span><br>
<p>This is already possible.  Simply use the configure options:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure ... CFLAGS=&quot;-arch x86_64&quot; CXXFLAGS=&quot;-arch x86_64&quot;  
<br>
OBJCFLAGS=&quot;-arch x86_64&quot;
<br>
<p>also set FFLAGS and FCFLAGS to &quot;-m64&quot; if you have gfortran/g95  
<br>
compiler installed.  The common installs of either don't speak the - 
<br>
arch option, so you have to use the more traditional -m64.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4093.php">Yu. Vishnevsky: "[OMPI users] Run MPI-based program without mpirun"</a>
<li><strong>Previous message:</strong> <a href="4091.php">Terry Dontje: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, , sm, self"</a>
<li><strong>In reply to:</strong> <a href="4089.php">Massimo Cafaro: "[OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4099.php">Massimo Cafaro: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<li><strong>Reply:</strong> <a href="4099.php">Massimo Cafaro: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
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
