<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 28 17:41:25 2006" -->
<!-- isoreceived="20060728214125" -->
<!-- sent="Fri, 28 Jul 2006 17:41:09 -0400" -->
<!-- isosent="20060728214109" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime Error" -->
<!-- id="C0EFFCB5.BC38%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C00910B0-245E-42E3-A3E2-1E5004FDDADB_at_ieee.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-28 17:41:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1696.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Previous message:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI users] Open-MPI running os SMP cluster"</a>
<li><strong>In reply to:</strong> <a href="1679.php">Michael Kluskens: "Re: [OMPI users] Runtime Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This question has come up a few times now, so I've added it to the faq,
<br>
which should make the &quot;mca_pml_teg.so:undefined symbol&quot; message
<br>
web-searchable for others who run into this issue.
<br>
<p><p>On 7/26/06 8:36 AM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Summary: You have to properly uninstall OpenMPI 1.0.2 before
</span><br>
<span class="quotelev1">&gt; installing OpenMPI 1.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 26, 2006, at 7:05 AM, &lt;robertmcbroom_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Updated to open_mpi-1.1.   I get a runtime error on the application as
</span><br>
<span class="quotelev2">&gt;&gt; follows
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca:base:component_find:unable to
</span><br>
<span class="quotelev2">&gt;&gt; open:/usr/local/lip/openmpi/mca_pml_teg.so:undefined
</span><br>
<span class="quotelev2">&gt;&gt; symbol:mca_ptl_base_modules_initialized
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open_mpi is compile with g95 and gcc 4.0.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use that combination all the time on OS X 10.4.7 and under Debian
</span><br>
<span class="quotelev1">&gt; Sarge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since you did not specify how you updated to OpenMPI 1.1 I'm copying
</span><br>
<span class="quotelev1">&gt; the instructions posted previously on the list:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 26, 2006, at 5:56 PM, Benjamin Landsteiner wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Strange.  I had actually done this before I emailed (several times,
</span><br>
<span class="quotelev2">&gt;&gt; in fact), but for the sake of completeness, I did it once more.  This
</span><br>
<span class="quotelev2">&gt;&gt; time, it worked!  No clue why it worked this time around.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For those of you who in the future come across this problem, here are
</span><br>
<span class="quotelev2">&gt;&gt; the (more or less exact) steps I took to recover from the problem:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PROBLEM:  You installed v1.1 of Open MPI and experience keyval parse
</span><br>
<span class="quotelev2">&gt;&gt; errors upon running mpicc, mpif77, mpic++, and so forth.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SOLUTION:
</span><br>
<span class="quotelev2">&gt;&gt; 1.  Go to your v1.1 directory, and type './configure' if you have not
</span><br>
<span class="quotelev2">&gt;&gt; already done so
</span><br>
<span class="quotelev2">&gt;&gt; 2.  Type 'make uninstall'
</span><br>
<span class="quotelev2">&gt;&gt; 3.  Go to your v1.0.2 directory, and reconfigure using the same
</span><br>
<span class="quotelev2">&gt;&gt; settings as you installed with (if you still have the install
</span><br>
<span class="quotelev2">&gt;&gt; directory, you probably don't need to do this as it has already been
</span><br>
<span class="quotelev2">&gt;&gt; configured)
</span><br>
<span class="quotelev2">&gt;&gt; 4.  In the v1.0.2 directory, type 'make uninstall'
</span><br>
<span class="quotelev2">&gt;&gt; 5.  For good measure, I went back to the v1.1 directory and typed
</span><br>
<span class="quotelev2">&gt;&gt; 'make uninstall' again
</span><br>
<span class="quotelev2">&gt;&gt; 6.  Find lingering Open MPI directories and files and then delete
</span><br>
<span class="quotelev2">&gt;&gt; them (for instance, empty Open MPI-related folders remained in my /
</span><br>
<span class="quotelev2">&gt;&gt; usr/local/* directories)
</span><br>
<span class="quotelev2">&gt;&gt; 7.  At this point, I restarted my machine.  Not sure if it's
</span><br>
<span class="quotelev2">&gt;&gt; necessary or not.
</span><br>
<span class="quotelev2">&gt;&gt; 8.  Go back to the v1.1 directory.  Type 'make clean', then
</span><br>
<span class="quotelev2">&gt;&gt; reconfigure, then recompile and reinstall
</span><br>
<span class="quotelev2">&gt;&gt; 9.  Things should work now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you Michael,
</span><br>
<span class="quotelev2">&gt;&gt; ~Ben
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +--------------------+
</span><br>
<span class="quotelev2">&gt;&gt; Benjamin Landsteiner
</span><br>
<span class="quotelev2">&gt;&gt; landstei_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2006/06/26, at 3:48 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may have to properly uninstall OpenMPI 1.0.2 before installing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This was an issue in the past.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would recommend you go into your OpenMPI 1.1 directory and type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;make uninstall&quot;, then if you have it go into your OpenMPI 1.0.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory and do the same.  If you don't have a directory with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.0.2 configured already then either rebuild OpenMPI 1.0.2 or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go into /usr/local and identify all remaining OpenMPI directories and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components and remove them.  Basically you should find directories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modified when you installed OpenMPI 1.1 (or when you uninstalled it)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and you may find components dated from when you installed OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.0.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 26, 2006, at 4:34 PM, Benjamin Landsteiner wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I recently upgraded to v1.1 of Open MPI and ran into a problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; head node that I can't seem to solve.  Upon running mpicc, mpiCC,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpic++, and so forth, I get an error like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1696.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Previous message:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI users] Open-MPI running os SMP cluster"</a>
<li><strong>In reply to:</strong> <a href="1679.php">Michael Kluskens: "Re: [OMPI users] Runtime Error"</a>
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
