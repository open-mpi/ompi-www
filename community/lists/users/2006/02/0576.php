<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  3 22:57:44 2006" -->
<!-- isoreceived="20060204035744" -->
<!-- sent="Fri, 03 Feb 2006 14:55:30 -0800" -->
<!-- isosent="20060203225530" -->
<!-- name="Brian Granger" -->
<!-- email="bgranger_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4" -->
<!-- id="37EB5F44-DB91-417B-BCC3-DBAF8895DF6E_at_scu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0092522.8954%xyang_at_lanl.gov" -->
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
<strong>From:</strong> Brian Granger (<em>bgranger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-03 17:55:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0577.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="0575.php">Warner Yuen: "[O-MPI users] Xgrid and Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0574.php">Xiaoning (David) Yang: "[O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0578.php">Brian Barrett: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0578.php">Brian Barrett: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>It looks like it could be a problem with either using gcc 4.x or with  
<br>
the fortran you are using.  I have compiled OpenMPI on  10.4.4. using  
<br>
the compilers:
<br>
<p>myhost$ g77 -v
<br>
Reading specs from /usr/local/lib/gcc/powerpc-apple-darwin7.9.0/3.4.4/ 
<br>
specs
<br>
Configured with: ../gcc/configure --enable-threads=posix --enable- 
<br>
languages=f77
<br>
Thread model: posix
<br>
gcc version 3.4.4
<br>
<p>myhost$ gcc -v
<br>
Reading specs from /usr/libexec/gcc/darwin/ppc/3.3/specs
<br>
Thread model: posix
<br>
gcc version 3.3 20030304 (Apple Computer, Inc. build 1809)
<br>
<p>You might want to download g77 and switch gcc to version 3.3 using  
<br>
the command:
<br>
<p>sudo gcc_select 3.3
<br>
<p>Brian
<br>
<p>On Feb 3, 2006, at 2:20 PM, Xiaoning (David) Yang wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to configure OPEN MPI 1.0.1 under MAC OS X 10.4.4 and  
</span><br>
<span class="quotelev1">&gt; was not
</span><br>
<span class="quotelev1">&gt; successful. Attached are the output from './configure --prefix=/usr/ 
</span><br>
<span class="quotelev1">&gt; local'
</span><br>
<span class="quotelev1">&gt; and the configure log flle in a tarball. Any help is appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ***** Correspondence *****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;configure_out.tar.bz2&gt;
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
<li><strong>Next message:</strong> <a href="0577.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="0575.php">Warner Yuen: "[O-MPI users] Xgrid and Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0574.php">Xiaoning (David) Yang: "[O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0578.php">Brian Barrett: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0578.php">Brian Barrett: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
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
