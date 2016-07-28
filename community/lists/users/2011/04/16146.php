<?
$subject_val = "Re: [OMPI users] Not pointing to correct libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 12:53:12 2011" -->
<!-- isoreceived="20110405165312" -->
<!-- sent="Tue, 05 Apr 2011 12:53:03 -0400" -->
<!-- isosent="20110405165303" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Not pointing to correct libraries" -->
<!-- id="4D9B48EF.2080902_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1A1A5DCF18E4C40AF5288387679A69C017748EB_at_HOLLY.ads.warwick.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Not pointing to correct libraries<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 12:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16147.php">David Zhang: "Re: [OMPI users] deny permission"</a>
<li><strong>Previous message:</strong> <a href="16145.php">Terry Dontje: "Re: [OMPI users] Not pointing to correct libraries"</a>
<li><strong>In reply to:</strong> <a href="16143.php">Warnett, Jason: "[OMPI users] Not pointing to correct libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Warnett, Jason wrote:
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running on Linux, latest version of mpi built but I've run into a 
</span><br>
<span class="quotelev1">&gt; few issues with a program which I am trying to run. It is a widely used 
</span><br>
<span class="quotelev1">&gt; open source application called LIGGGHTS so I know the code works and 
</span><br>
<span class="quotelev1">&gt; should compile, so I obviously have a setting wrong with MPI. I saw a 
</span><br>
<span class="quotelev1">&gt; similar problem in a previous post (2007), but couldn't see how to 
</span><br>
<span class="quotelev1">&gt; resolve it as I am quite new to the terminal environment in Unix (always 
</span><br>
<span class="quotelev1">&gt; been windows... until now).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the issue I am getting is the following error...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Jay_at_Jay chute_wear]$ mpirun -np 1 lmp_fedora &lt; in.chute_wear
</span><br>
<span class="quotelev1">&gt; lmp_fedora: error while loading shared libraries: libmpi_cxx.so.0: 
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I checked where stuff was pointing using the ldd command as in that 
</span><br>
<span class="quotelev1">&gt; post and found the following:
</span><br>
<span class="quotelev1">&gt;         linux-gate.so.1 =&gt;  (0x00d10000)
</span><br>
<span class="quotelev1">&gt;         libmpi_cxx.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib/libdl.so.2 (0x00cbe000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x007e6000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib/libutil.so.1 (0x009fa000)
</span><br>
<span class="quotelev1">&gt;         libstdc++.so.6 =&gt; /usr/lib/libstdc++.so.6 (0x04a02000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib/libm.so.6 (0x008a4000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib/libgcc_s.so.1 (0x00110000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x00550000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib/libc.so.6 (0x003b3000)
</span><br>
<span class="quotelev1">&gt;         /lib/ld-linux.so.2 (0x00bfa000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so it is the open mpi files it isn't linking to. How can i sort this? I 
</span><br>
<span class="quotelev1">&gt; shouldn't need to edit code of the executable of LIGGGHTS I've compiled 
</span><br>
<span class="quotelev1">&gt; as I know other people are using the same thing so I guess it is to do 
</span><br>
<span class="quotelev1">&gt; with the way I installed openMPI. I did a system search and couldn't 
</span><br>
<span class="quotelev1">&gt; find a file called libmpi* anywhere... so my guess is that I've 
</span><br>
<span class="quotelev1">&gt; incorrectly installed. I have tried several ways, but could you tell me 
</span><br>
<span class="quotelev1">&gt; how to fix it/ install correctly? (embaressing if it is to do with a 
</span><br>
<span class="quotelev1">&gt; correct install...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jay
</span><br>
<p>Hi Jay
<br>
<p>You must set the LD_LIBRARY_PATH (in your .bashrc/.cshrc file)
<br>
to include the OpenMPI 'lib' directory. Something like
<br>
<p>(for csh)
<br>
setenv LD_LIBRARY_PATH /path/to/openmpi/lib:$LD_LIBRARY_PATH
<br>
<p>(for bash)
<br>
export LD_LIBRARY_PATH=/path/to/openmpi/lib:$LD_LIBRARY_PATH
<br>
<p>Likewise, PATH should include the OpenMPI 'bin' directory.
<br>
See the OpenMPI FAQ for details:
<br>
<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>Also, before trying more complex codes, I suggest that you test
<br>
your OpenMPI functionality with the simple example programs
<br>
that come in the OpenMPI 'examples' directory: hello_c.c, ring_c.c,
<br>
and connectivity_c.c.
<br>
It will save you many headaches.
<br>
Ex:
<br>
mpicc -o hello_c hello_c.c
<br>
then
<br>
mpirun -np 4 hello_c
<br>
<p>How did you compile LIGGGHTS?
<br>
Did you use the OpenMPI compiler wrappers?
<br>
<p>You say 'latest version of mpi built'.
<br>
Did you build OpenMPI from source?
<br>
Got it via yum perhaps?
<br>
Did you use the mpi compiler wrappers (mpicc,mpif90,etc)
<br>
*from OpenMPI* to build the application (LIGGGHTS)?
<br>
<p>Is this a single machine or a cluster?
<br>
<p>Are you sure LIGGGHTS runs in parallel mode with a single process?
<br>
You said 'mpirun -np 1 lmp_fedora &lt; in.chute_wear'.
<br>
Wouldn't it need at least two processes, perhaps?
<br>
'mpirun -np 2 lmp_fedora &lt; in.chute_wear'
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16147.php">David Zhang: "Re: [OMPI users] deny permission"</a>
<li><strong>Previous message:</strong> <a href="16145.php">Terry Dontje: "Re: [OMPI users] Not pointing to correct libraries"</a>
<li><strong>In reply to:</strong> <a href="16143.php">Warnett, Jason: "[OMPI users] Not pointing to correct libraries"</a>
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
