<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 16:40:46 2007" -->
<!-- isoreceived="20070723204046" -->
<!-- sent="Mon, 23 Jul 2007 16:40:05 -0400" -->
<!-- isosent="20070723204005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_HOME" -->
<!-- id="7E56679B-EC03-4D30-B13C-2C51CE3B6551_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="904632.85738.qm_at_web57615.mail.re1.yahoo.com" -->
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
<strong>Date:</strong> 2007-07-23 16:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3747.php">Jeff Pummill: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
<li><strong>Previous message:</strong> <a href="3745.php">Francesco Pietra: "[OMPI users] MPI_HOME"</a>
<li><strong>In reply to:</strong> <a href="3745.php">Francesco Pietra: "[OMPI users] MPI_HOME"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3749.php">Bert Wesarg: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>Reply:</strong> <a href="3749.php">Bert Wesarg: "Re: [OMPI users] MPI_HOME"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2007, at 4:31 PM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; openmpi-1.2.3 compiled on Debian Linux amd64 etch with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=/opt/intel/cce/9.1.042/bin/icc
</span><br>
<span class="quotelev1">&gt; CXX=/opt/intel/cce/9.1.042/bin/icpc F77=/opt/intel/fce/9.1.036/bin/ 
</span><br>
<span class="quotelev1">&gt; ifort
</span><br>
<span class="quotelev1">&gt; FC=/opt/intel/fce/9.1.036/bin/ifort --with-libnuma=/usr/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info |grep libnuma
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info |grep maffinity
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; reported OK, though an attempt to install Amber9 parallel, at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure -openmpi ifort_x86_64
</span><br>
<p>I'm not sure what these command line switches do...?  &quot;-openmpi&quot; is  
<br>
not a switch that our configure supports.
<br>
<p><span class="quotelev1">&gt; reported:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error, MPI_HOME must be set.
</span><br>
<p>Are you sure that you are running Open MPI's configure script?  If  
<br>
so, please send in all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><span class="quotelev1">&gt; OK, for my installation and bash it should be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export MPI_HOME=/usr/local/openmpi-1.2.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not tried, because the above Error message also contained:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Set it where the location of the include/ and lib/ subdirectories  
</span><br>
<span class="quotelev1">&gt; containing
</span><br>
<span class="quotelev1">&gt; mpi.f
</span><br>
<span class="quotelev1">&gt; libmpi.a
</span><br>
<span class="quotelev1">&gt; liblam.a
</span><br>
<span class="quotelev1">&gt; liblamf77mpi.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which was confusing to me. None of these libraries on my system and  
</span><br>
<span class="quotelev1">&gt; I never
</span><br>
<span class="quotelev1">&gt; advocated lam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for helping
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
<span class="quotelev1">&gt; ______________________________________________________________________ 
</span><br>
<span class="quotelev1">&gt; ______________
</span><br>
<span class="quotelev1">&gt; Fussy? Opinionated? Impossible to please? Perfect.  Join Yahoo!'s  
</span><br>
<span class="quotelev1">&gt; user panel and lay it on us. <a href="http://surveylink.yahoo.com/gmrs/">http://surveylink.yahoo.com/gmrs/</a> 
</span><br>
<span class="quotelev1">&gt; yahoo_panel_invite.asp?a=7
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3747.php">Jeff Pummill: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
<li><strong>Previous message:</strong> <a href="3745.php">Francesco Pietra: "[OMPI users] MPI_HOME"</a>
<li><strong>In reply to:</strong> <a href="3745.php">Francesco Pietra: "[OMPI users] MPI_HOME"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3749.php">Bert Wesarg: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>Reply:</strong> <a href="3749.php">Bert Wesarg: "Re: [OMPI users] MPI_HOME"</a>
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
