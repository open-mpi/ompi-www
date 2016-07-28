<?
$subject_val = "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 12:16:41 2008" -->
<!-- isoreceived="20080425161641" -->
<!-- sent="Fri, 25 Apr 2008 09:10:45 -0700" -->
<!-- isosent="20080425161045" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found" -->
<!-- id="F42545C5-1034-49E1-8A4C-32AC6D2366FB_at_rain.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F6DDEA67-78CC-448F-ABFD-0F2DB3B9813E_at_cisco.com" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 12:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5524.php">Warner Yuen: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5522.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5521.php">Jeff Squyres: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using the modules software (modules.sourceforge.net) works pretty  
<br>
well for managing multiple mpi flavors. You still need to put each  
<br>
mpi flavor's bin, lib, and include files in uniquely named paths,  
<br>
then modules lets you put the appropriate mpi flavor in your path for  
<br>
each application. It takes a little effort to set modules up but then  
<br>
it is easy to use. It is particularly helpful for users who aren't  
<br>
good at editing .xxrc files.
<br>
<p>Doug Reeder
<br>
On Apr 25, 2008, at 8:46 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 25, 2008, at 10:54 AM, Hans Wurst wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So you'll need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile your benchmarks for each MPI implementation that you want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test (i.e., use that MPI's wrapper compilers to compile them).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not conscious about what a MPI wrapper compiler is and how it
</span><br>
<span class="quotelev2">&gt;&gt; works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc (et al.) are the &quot;wrapper&quot; compilers.  So you compile your app
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpicc my_mpi_app.c -o my_mpi_app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the &quot;wrapper&quot; compilers do is add in the relevant compiler /
</span><br>
<span class="quotelev1">&gt; linker flags and invoke the underlying compiler.  See:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#general-build">http://www.open-mpi.org/faq/?category=mpi-apps#general-build</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe we can discuss this with a little example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpptest requires the current installation path of the MPI-
</span><br>
<span class="quotelev2">&gt;&gt; implementation before compiling. When I switch between MPI-
</span><br>
<span class="quotelev2">&gt;&gt; implementations, do I have to re-compile the benchmark each time? If
</span><br>
<span class="quotelev2">&gt;&gt; not, how do I handle that issue? How do I keep the two compiled
</span><br>
<span class="quotelev2">&gt;&gt; executables separate?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, yes, you need to have different executables for each MPI
</span><br>
<span class="quotelev1">&gt; implementation (likely compiled with their wrapper compilers, or
</span><br>
<span class="quotelev1">&gt; whatever compiler/linker flags may be required for that MPI
</span><br>
<span class="quotelev1">&gt; implementation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't recall mpptest's build system offhand; a simple solution would
</span><br>
<span class="quotelev1">&gt; be to have multiple copies of the mpptest software and build them each
</span><br>
<span class="quotelev1">&gt; for a single MPI implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another option is to build for one, rename the output exectuable
</span><br>
<span class="quotelev1">&gt; (E.g., &quot;mv mpptest mpptest.openmpi&quot;), and then repeat as desired.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The --prefix option (and friends) make the ssh/rsh command line much
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more complex, effectively setting PATH and LD_LIBRARY_PATH for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each remote machine before launching orted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, I tried that and it works great. Knowing that, I've got one more
</span><br>
<span class="quotelev2">&gt;&gt; question regarding different MPI-Implementations on one node. What
</span><br>
<span class="quotelev2">&gt;&gt; is the smartest way to switch between them?
</span><br>
<span class="quotelev2">&gt;&gt; Changing the PATH's in the .bashrc and rebooting the nodes? Is there
</span><br>
<span class="quotelev2">&gt;&gt; a smart way to do that online without reboot? Would it be possible
</span><br>
<span class="quotelev2">&gt;&gt; to have two separate users &quot;MPICHuser&quot; and &quot;OpenMPIuser&quot; each with
</span><br>
<span class="quotelev2">&gt;&gt; the PATH for the corresponding MPI-implementation&#180;, and launching
</span><br>
<span class="quotelev2">&gt;&gt; the processes for the different implementations with these separate
</span><br>
<span class="quotelev2">&gt;&gt; users?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, you likely don't need anything so elaborate (at least for Open  
</span><br>
<span class="quotelev1">&gt; MPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use the full/absolute path name to Open MPI, it'll effect  
</span><br>
<span class="quotelev1">&gt; the --
</span><br>
<span class="quotelev1">&gt; prefix functionality for you.  Keep in mind that --prefix
</span><br>
<span class="quotelev1">&gt; functionality means that you don't need any setup on the remote node
</span><br>
<span class="quotelev1">&gt; (nothing in your .bashrc, etc.).  So you can:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /path/to/first/openmpi/bin/mpirun ....
</span><br>
<span class="quotelev1">&gt; /path/to/second/openmpi/bin/mpirun ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will use the two different Open MPI installations.  Or, if you
</span><br>
<span class="quotelev1">&gt; use the --enable-mpirun-prefix-by-default option when configuring/
</span><br>
<span class="quotelev1">&gt; building Open MPI, then you can use something like environment modules
</span><br>
<span class="quotelev1">&gt; to switch between different MPI implementations (http://
</span><br>
<span class="quotelev1">&gt; modules.sf.net/) and set them in your PATH.  Then just [Open MPI's]
</span><br>
<span class="quotelev1">&gt; &quot;mpirun&quot; will do the Right thing by default, perhaps something like
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module load openmpi/1.2.5
</span><br>
<span class="quotelev1">&gt; mpirun ....
</span><br>
<span class="quotelev1">&gt; module unload openmpi
</span><br>
<span class="quotelev1">&gt; module load openmpi/1.2.6
</span><br>
<span class="quotelev1">&gt; mpirun ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For MPICH, I don't know exactly what they require in terms of remote
</span><br>
<span class="quotelev1">&gt; path setup, etc.  I don't know if it has --prefix like functionality,
</span><br>
<span class="quotelev1">&gt; or if it automatically does it (like OMPI's --enable-mpirun-prefix-by-
</span><br>
<span class="quotelev1">&gt; default), etc.  You'll need to check their docs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5524.php">Warner Yuen: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5522.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5521.php">Jeff Squyres: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
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
