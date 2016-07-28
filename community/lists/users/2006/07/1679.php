<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 26 08:36:47 2006" -->
<!-- isoreceived="20060726123647" -->
<!-- sent="Wed, 26 Jul 2006 08:36:38 -0400" -->
<!-- isosent="20060726123638" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime Error" -->
<!-- id="C00910B0-245E-42E3-A3E2-1E5004FDDADB_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060714125152.KXTB26406.ibm61aec.bellsouth.net_at_mail.bellsouth.net" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-26 08:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1680.php">Borenstein, Bernard S: "[OMPI users] minor program build problem"</a>
<li><strong>Previous message:</strong> <a href="1678.php">robertmcbroom_at_[hidden]: "[OMPI users] Runtime Error"</a>
<li><strong>In reply to:</strong> <a href="1678.php">robertmcbroom_at_[hidden]: "[OMPI users] Runtime Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI users] Runtime Error"</a>
<li><strong>Reply:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI users] Runtime Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Summary: You have to properly uninstall OpenMPI 1.0.2 before  
<br>
installing OpenMPI 1.1
<br>
<p><p>On Jul 26, 2006, at 7:05 AM, &lt;robertmcbroom_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Updated to open_mpi-1.1.   I get a runtime error on the application as
</span><br>
<span class="quotelev1">&gt; follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca:base:component_find:unable to
</span><br>
<span class="quotelev1">&gt; open:/usr/local/lip/openmpi/mca_pml_teg.so:undefined
</span><br>
<span class="quotelev1">&gt; symbol:mca_ptl_base_modules_initialized
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open_mpi is compile with g95 and gcc 4.0.3
</span><br>
<p>I use that combination all the time on OS X 10.4.7 and under Debian  
<br>
Sarge.
<br>
<p>Since you did not specify how you updated to OpenMPI 1.1 I'm copying  
<br>
the instructions posted previously on the list:
<br>
<p><p>On Jun 26, 2006, at 5:56 PM, Benjamin Landsteiner wrote:
<br>
<span class="quotelev1">&gt; Strange.  I had actually done this before I emailed (several times,
</span><br>
<span class="quotelev1">&gt; in fact), but for the sake of completeness, I did it once more.  This
</span><br>
<span class="quotelev1">&gt; time, it worked!  No clue why it worked this time around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For those of you who in the future come across this problem, here are
</span><br>
<span class="quotelev1">&gt; the (more or less exact) steps I took to recover from the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PROBLEM:  You installed v1.1 of Open MPI and experience keyval parse
</span><br>
<span class="quotelev1">&gt; errors upon running mpicc, mpif77, mpic++, and so forth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SOLUTION:
</span><br>
<span class="quotelev1">&gt; 1.  Go to your v1.1 directory, and type './configure' if you have not
</span><br>
<span class="quotelev1">&gt; already done so
</span><br>
<span class="quotelev1">&gt; 2.  Type 'make uninstall'
</span><br>
<span class="quotelev1">&gt; 3.  Go to your v1.0.2 directory, and reconfigure using the same
</span><br>
<span class="quotelev1">&gt; settings as you installed with (if you still have the install
</span><br>
<span class="quotelev1">&gt; directory, you probably don't need to do this as it has already been
</span><br>
<span class="quotelev1">&gt; configured)
</span><br>
<span class="quotelev1">&gt; 4.  In the v1.0.2 directory, type 'make uninstall'
</span><br>
<span class="quotelev1">&gt; 5.  For good measure, I went back to the v1.1 directory and typed
</span><br>
<span class="quotelev1">&gt; 'make uninstall' again
</span><br>
<span class="quotelev1">&gt; 6.  Find lingering Open MPI directories and files and then delete
</span><br>
<span class="quotelev1">&gt; them (for instance, empty Open MPI-related folders remained in my /
</span><br>
<span class="quotelev1">&gt; usr/local/* directories)
</span><br>
<span class="quotelev1">&gt; 7.  At this point, I restarted my machine.  Not sure if it's
</span><br>
<span class="quotelev1">&gt; necessary or not.
</span><br>
<span class="quotelev1">&gt; 8.  Go back to the v1.1 directory.  Type 'make clean', then
</span><br>
<span class="quotelev1">&gt; reconfigure, then recompile and reinstall
</span><br>
<span class="quotelev1">&gt; 9.  Things should work now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you Michael,
</span><br>
<span class="quotelev1">&gt; ~Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +--------------------+
</span><br>
<span class="quotelev1">&gt; Benjamin Landsteiner
</span><br>
<span class="quotelev1">&gt; landstei_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2006/06/26, at 3:48 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may have to properly uninstall OpenMPI 1.0.2 before installing
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was an issue in the past.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would recommend you go into your OpenMPI 1.1 directory and type
</span><br>
<span class="quotelev2">&gt;&gt; &quot;make uninstall&quot;, then if you have it go into your OpenMPI 1.0.2
</span><br>
<span class="quotelev2">&gt;&gt; directory and do the same.  If you don't have a directory with
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.0.2 configured already then either rebuild OpenMPI 1.0.2 or
</span><br>
<span class="quotelev2">&gt;&gt; go into /usr/local and identify all remaining OpenMPI directories and
</span><br>
<span class="quotelev2">&gt;&gt; components and remove them.  Basically you should find directories
</span><br>
<span class="quotelev2">&gt;&gt; modified when you installed OpenMPI 1.1 (or when you uninstalled it)
</span><br>
<span class="quotelev2">&gt;&gt; and you may find components dated from when you installed OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.0.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 26, 2006, at 4:34 PM, Benjamin Landsteiner wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	I recently upgraded to v1.1 of Open MPI and ran into a problem  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; head node that I can't seem to solve.  Upon running mpicc, mpiCC,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpic++, and so forth, I get an error like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1680.php">Borenstein, Bernard S: "[OMPI users] minor program build problem"</a>
<li><strong>Previous message:</strong> <a href="1678.php">robertmcbroom_at_[hidden]: "[OMPI users] Runtime Error"</a>
<li><strong>In reply to:</strong> <a href="1678.php">robertmcbroom_at_[hidden]: "[OMPI users] Runtime Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI users] Runtime Error"</a>
<li><strong>Reply:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI users] Runtime Error"</a>
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
