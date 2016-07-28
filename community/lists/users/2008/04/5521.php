<?
$subject_val = "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 11:46:46 2008" -->
<!-- isoreceived="20080425154646" -->
<!-- sent="Fri, 25 Apr 2008 11:46:35 -0400" -->
<!-- isosent="20080425154635" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found" -->
<!-- id="F6DDEA67-78CC-448F-ABFD-0F2DB3B9813E_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080425145420.327130_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 11:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5522.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5520.php">Hans Wurst: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5520.php">Hans Wurst: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5523.php">Doug Reeder: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5523.php">Doug Reeder: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2008, at 10:54 AM, Hans Wurst wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So you'll need to
</span><br>
<span class="quotelev2">&gt;&gt; compile your benchmarks for each MPI implementation that you want to
</span><br>
<span class="quotelev2">&gt;&gt; test (i.e., use that MPI's wrapper compilers to compile them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not conscious about what a MPI wrapper compiler is and how it  
</span><br>
<span class="quotelev1">&gt; works.
</span><br>
<p>mpicc (et al.) are the &quot;wrapper&quot; compilers.  So you compile your app  
<br>
with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc my_mpi_app.c -o my_mpi_app
<br>
<p>All the &quot;wrapper&quot; compilers do is add in the relevant compiler /  
<br>
linker flags and invoke the underlying compiler.  See:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=mpi-apps#general-build">http://www.open-mpi.org/faq/?category=mpi-apps#general-build</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a>
<br>
<p><span class="quotelev1">&gt; Maybe we can discuss this with a little example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpptest requires the current installation path of the MPI- 
</span><br>
<span class="quotelev1">&gt; implementation before compiling. When I switch between MPI- 
</span><br>
<span class="quotelev1">&gt; implementations, do I have to re-compile the benchmark each time? If  
</span><br>
<span class="quotelev1">&gt; not, how do I handle that issue? How do I keep the two compiled  
</span><br>
<span class="quotelev1">&gt; executables separate?
</span><br>
<p>In general, yes, you need to have different executables for each MPI  
<br>
implementation (likely compiled with their wrapper compilers, or  
<br>
whatever compiler/linker flags may be required for that MPI  
<br>
implementation).
<br>
<p>I don't recall mpptest's build system offhand; a simple solution would  
<br>
be to have multiple copies of the mpptest software and build them each  
<br>
for a single MPI implementation.
<br>
<p>Another option is to build for one, rename the output exectuable  
<br>
(E.g., &quot;mv mpptest mpptest.openmpi&quot;), and then repeat as desired.
<br>
<p><span class="quotelev2">&gt;&gt; The --prefix option (and friends) make the ssh/rsh command line much
</span><br>
<span class="quotelev2">&gt;&gt; more complex, effectively setting PATH and LD_LIBRARY_PATH for you on
</span><br>
<span class="quotelev2">&gt;&gt; each remote machine before launching orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, I tried that and it works great. Knowing that, I've got one more  
</span><br>
<span class="quotelev1">&gt; question regarding different MPI-Implementations on one node. What  
</span><br>
<span class="quotelev1">&gt; is the smartest way to switch between them?
</span><br>
<span class="quotelev1">&gt; Changing the PATH's in the .bashrc and rebooting the nodes? Is there  
</span><br>
<span class="quotelev1">&gt; a smart way to do that online without reboot? Would it be possible  
</span><br>
<span class="quotelev1">&gt; to have two separate users &quot;MPICHuser&quot; and &quot;OpenMPIuser&quot; each with  
</span><br>
<span class="quotelev1">&gt; the PATH for the corresponding MPI-implementation&#180;, and launching  
</span><br>
<span class="quotelev1">&gt; the processes for the different implementations with these separate  
</span><br>
<span class="quotelev1">&gt; users?
</span><br>
<p><p>No, you likely don't need anything so elaborate (at least for Open MPI).
<br>
<p>If you use the full/absolute path name to Open MPI, it'll effect the -- 
<br>
prefix functionality for you.  Keep in mind that --prefix  
<br>
functionality means that you don't need any setup on the remote node  
<br>
(nothing in your .bashrc, etc.).  So you can:
<br>
<p>/path/to/first/openmpi/bin/mpirun ....
<br>
/path/to/second/openmpi/bin/mpirun ....
<br>
<p>This will use the two different Open MPI installations.  Or, if you  
<br>
use the --enable-mpirun-prefix-by-default option when configuring/ 
<br>
building Open MPI, then you can use something like environment modules  
<br>
to switch between different MPI implementations (http:// 
<br>
modules.sf.net/) and set them in your PATH.  Then just [Open MPI's]  
<br>
&quot;mpirun&quot; will do the Right thing by default, perhaps something like  
<br>
this:
<br>
<p>module load openmpi/1.2.5
<br>
mpirun ....
<br>
module unload openmpi
<br>
module load openmpi/1.2.6
<br>
mpirun ....
<br>
<p>And so on.
<br>
<p>For MPICH, I don't know exactly what they require in terms of remote  
<br>
path setup, etc.  I don't know if it has --prefix like functionality,  
<br>
or if it automatically does it (like OMPI's --enable-mpirun-prefix-by- 
<br>
default), etc.  You'll need to check their docs.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5522.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5520.php">Hans Wurst: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5520.php">Hans Wurst: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5523.php">Doug Reeder: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5523.php">Doug Reeder: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
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
