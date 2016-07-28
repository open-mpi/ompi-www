<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 13 21:42:57 2007" -->
<!-- isoreceived="20070914014257" -->
<!-- sent="Thu, 13 Sep 2007 21:42:53 -0400 (EDT)" -->
<!-- isosent="20070914014253" -->
<!-- name="Andrew J Caird" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two different compilation of openmpi" -->
<!-- id="Pine.LNX.4.63.0709132139110.6337_at_lancaster.engin.umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="920018.68838.qm_at_web57606.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Andrew J Caird (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-13 21:42:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4009.php">Paul Cochrane: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="4007.php">Francesco Pietra: "[OMPI users] Two different compilation of openmpi"</a>
<li><strong>In reply to:</strong> <a href="4007.php">Francesco Pietra: "[OMPI users] Two different compilation of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4011.php">Reuti: "Re: [OMPI users] Two different compilation of openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Francesco,
<br>
<p>We use modules (<a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>) to manage 14 different 
<br>
OpenMPI versions on the same cluster, along with their associated 
<br>
applications.  This is a nice way to establish dependancies between apps 
<br>
and libs and keep things organized.
<br>
<p>Good luck.
<br>
--andy
<br>
<p>$ module avail openmpi
<br>
---------------------------- /home/software/rhel4/Modules/3.2.1/modulefiles ----------------------------
<br>
openmpi/1.0.2-gcc          openmpi/1.1.0-pgi616       openmpi/1.1a9-pgi
<br>
openmpi/1.0.2-nag          openmpi/1.1.2-intel        openmpi/1.2-pgi
<br>
openmpi/1.0.2-pgi(default) openmpi/1.1.2-pgi          openmpi/1.2.3-gcc
<br>
openmpi/1.0.3a1-pgi        openmpi/1.1.4-pgi62        openmpi/1.2.3-pgi
<br>
openmpi/1.1.0-pgi          openmpi/1.1a8-nag
<br>
<p><p>On Thu, 13 Sep 2007, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; Is it possible to have two different compilations of openmpi on the same 
</span><br>
<span class="quotelev1">&gt; machine (dual-opterons, Debian Linux etch)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On that parallel computer sander.MPI (Amber9) and openmpi 1.2.3 have 
</span><br>
<span class="quotelev1">&gt; both been compiled with Intel Fortran 9.1.036.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I wish to install DOCK6 on this machine and I am advised that it 
</span><br>
<span class="quotelev1">&gt; should be better compiled on GNU compilers. As to openmpi I could 
</span><br>
<span class="quotelev1">&gt; install the Debian package, which is GNU compiled. Are conflicts between 
</span><br>
<span class="quotelev1">&gt; the two installation foreseeable? Although I don't have experience with 
</span><br>
<span class="quotelev1">&gt; DOCK, I suspect that certain procedures with DOCK call sander.MPI into 
</span><br>
<span class="quotelev1">&gt; play.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I rule out the alternative of compiling Amber9 with GNU compilers, which 
</span><br>
<span class="quotelev1">&gt; will run slower.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; francesco pietra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; ____________
</span><br>
<span class="quotelev1">&gt; Pinpoint customers who are looking for what you sell.
</span><br>
<span class="quotelev1">&gt; <a href="http://searchmarketing.yahoo.com/">http://searchmarketing.yahoo.com/</a>
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
<li><strong>Next message:</strong> <a href="4009.php">Paul Cochrane: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="4007.php">Francesco Pietra: "[OMPI users] Two different compilation of openmpi"</a>
<li><strong>In reply to:</strong> <a href="4007.php">Francesco Pietra: "[OMPI users] Two different compilation of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4011.php">Reuti: "Re: [OMPI users] Two different compilation of openmpi"</a>
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
