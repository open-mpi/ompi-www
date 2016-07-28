<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 17:44:34 2007" -->
<!-- isoreceived="20070608214434" -->
<!-- sent="Sat, 9 Jun 2007 09:44:30 +1200" -->
<!-- isosent="20070608214430" -->
<!-- name="Code Master" -->
<!-- email="cpp.codemaster_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes" -->
<!-- id="1626092b0706081444x707f99d2ge2ee50023bd315ca_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F7EA221-8BF4-4E44-A39B-AB1B1F9B6A3B_at_cisco.com" -->
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
<strong>From:</strong> Code Master (<em>cpp.codemaster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 17:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3424.php">Alex Tumanov: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3422.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>In reply to:</strong> <a href="3416.php">Jeff Squyres: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/9/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jun 8, 2007, at 9:29 AM, Code Master wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I compiled openmpi-1.2.2 with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure CFLAGS=-g -pg -O3 --prefix=/home/foo/490_research/490/
</span><br>
<span class="quotelev2">&gt; &gt; src/mpi.optimized_profiling/  \
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-threads --enable-progress-threads --enable-static --
</span><br>
<span class="quotelev2">&gt; &gt; disable-shared --without-memory-manager  \
</span><br>
<span class="quotelev2">&gt; &gt; --without-libnuma --disable-mpi-f77 --disable-mpi-f90 --disable-mpi-
</span><br>
<span class="quotelev2">&gt; &gt; cxx --disable-mpi-cxx-seek --disable-dlopen
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (Thanks Jeff, now I know that I have to add --without-memory-
</span><br>
<span class="quotelev2">&gt; &gt; manager and --without-libnuma for static linking)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; make all
</span><br>
<span class="quotelev2">&gt; &gt; make install
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; then I run my client app with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /home/foo/490_research/490/src/mpi.optimized_profiling/bin/mpirun --
</span><br>
<span class="quotelev2">&gt; &gt; hostfile ../hostfile -n 32 raytrace -finputs/car.env
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The program runs well and each process completes succssfully (I can
</span><br>
<span class="quotelev2">&gt; &gt; tell because all processes have now generated gmon.out successfully
</span><br>
<span class="quotelev2">&gt; &gt; and a &quot;ps aux&quot; on other slave nodes (except the originating node)
</span><br>
<span class="quotelev2">&gt; &gt; show that my program in slave nodes have already exited (not
</span><br>
<span class="quotelev2">&gt; &gt; existant).  Therefore I think this may have something to do with
</span><br>
<span class="quotelev2">&gt; &gt; mpirun,which hangs forever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be aware that you may have problems with multiple processes writing
</span><br>
<span class="quotelev1">&gt; to the same gmon.out, unless you're running each instance in a
</span><br>
<span class="quotelev1">&gt; different directory (your command line doesn't indicate that you are,
</span><br>
<span class="quotelev1">&gt; but that doesn't necessarily prove anything).
</span><br>
<p>I am sure this is not happening, because  in my program, after the MPI
<br>
initialization, the main() invokes chdir() which immediately change
<br>
the directory to the process's own directory (named after the
<br>
proc_id).  Therefore they all have their own directory to write to.
<br>
<p><span class="quotelev2">&gt; &gt; Can you see anything wrong in my ./configure command which explains
</span><br>
<span class="quotelev2">&gt; &gt; the mpirun hang at the end of the run?  How can I fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, everything looks fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you confirm that all raytrace instances have exited and all orteds
</span><br>
<span class="quotelev1">&gt; have exited, leaving *only* mpirun runnning?
</span><br>
<p>Yes, I am sure that all raytrace instances as well as all mpi-related
<br>
processes (including mpirun and orteds etc.) have exited in all slave
<br>
nodes.  In the *master* node, all raytrace instances and all orteds
<br>
have exited as well, leaving *only* mpirun running in the *master*
<br>
node.
<br>
<p>14818 pts/0    S+     0:00
<br>
/home/foo/490_research/490/src/mpi.optimized_profiling/bin/mpirun
<br>
--hostfile ../hostfile -n 32 raytrace -finputs/car.env -s
<br>
1
<br>
<span class="quotelev1">&gt; There was a race condition about this at one point; Ralph -- can you
</span><br>
<span class="quotelev1">&gt; comment further?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3424.php">Alex Tumanov: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3422.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>In reply to:</strong> <a href="3416.php">Jeff Squyres: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
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
