<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 16:22:23 2007" -->
<!-- isoreceived="20071016202223" -->
<!-- sent="Tue, 16 Oct 2007 16:22:00 -0400" -->
<!-- isosent="20071016202200" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] broken symbolic links when configured with --program-suffix" -->
<!-- id="6A0A52D0-B5AB-4836-8488-7EAA16313F5D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4714FA0A.7020505_at_gmail.com" -->
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
<strong>Date:</strong> 2007-10-16 16:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4227.php">Dibyendu Das1: "[OMPI users] Dibyendu Das1 is out of the office."</a>
<li><strong>Previous message:</strong> <a href="4225.php">Victor Prosolin: "[OMPI users] broken symbolic links when configured with --program-suffix"</a>
<li><strong>In reply to:</strong> <a href="4225.php">Victor Prosolin: "[OMPI users] broken symbolic links when configured with --program-suffix"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops!  Looks like we missed handling the --program-suffix stuff  
<br>
properly when making our sym links.  I've filed a ticket on the issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1168">https://svn.open-mpi.org/trac/ompi/ticket/1168</a>
<br>
<p><p>On Oct 16, 2007, at 1:51 PM, Victor Prosolin wrote:
<br>
<p><span class="quotelev1">&gt; Hi all.
</span><br>
<span class="quotelev1">&gt; This is a bug report, though minor.
</span><br>
<span class="quotelev1">&gt; Briefly: when I configure openmpi with the option
</span><br>
<span class="quotelev1">&gt; --program-suffix=-gcc-4.3 I get a bunch of symbolic links that  
</span><br>
<span class="quotelev1">&gt; point to
</span><br>
<span class="quotelev1">&gt; non-existing files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is then configure command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  FC=gfortran-4.3 F77=gfortran-4.3 CC=gcc-4.3 ./configure
</span><br>
<span class="quotelev1">&gt; --enable-mpi-f77 --enable-mpi-f90 --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt; --prefix=/localhome/vic/programs --program-suffix=-gcc-4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is &quot;ls -l&quot; /localhome/vic/programs/bin
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpic++ -&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpicc -&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpiCC -&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpicxx -&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 vic vic       7 Oct 16 11:19 mpiexec -&gt; orterun
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpif77 -&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpif90 -&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 vic vic       7 Oct 16 11:19 mpirun -&gt; orterun
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 vic vic 2261137 Oct 16 11:19 ompi_info-gcc-4.3
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 vic vic  212716 Oct 16 11:18 opal_wrapper-gcc-4.3
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 vic vic 1112352 Oct 16 11:18 orted-gcc-4.3
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 vic vic 1180508 Oct 16 11:18 orterun-gcc-4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_wrapper and orterun do not exist, so all symbolic links are  
</span><br>
<span class="quotelev1">&gt; broken.
</span><br>
<span class="quotelev1">&gt; All symbolic links (except mpirun and mpiexec) should point to
</span><br>
<span class="quotelev1">&gt; opal_wrapper-gcc-4.3 instead of just opal_wrapper, and mpirun and
</span><br>
<span class="quotelev1">&gt; mpiexec should point to orterun-gcc-4.3 instead of just orterun. So
</span><br>
<span class="quotelev1">&gt; basically, the custom program-prefix did not work for some files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI version 1.2.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can provide more information if needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Victor.
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4227.php">Dibyendu Das1: "[OMPI users] Dibyendu Das1 is out of the office."</a>
<li><strong>Previous message:</strong> <a href="4225.php">Victor Prosolin: "[OMPI users] broken symbolic links when configured with --program-suffix"</a>
<li><strong>In reply to:</strong> <a href="4225.php">Victor Prosolin: "[OMPI users] broken symbolic links when configured with --program-suffix"</a>
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
