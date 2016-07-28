<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 15:17:27 2007" -->
<!-- isoreceived="20070724191727" -->
<!-- sent="Tue, 24 Jul 2007 12:17:12 -0700 (PDT)" -->
<!-- isosent="20070724191712" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi support ignored" -->
<!-- id="627863.41785.qm_at_web57602.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5E4D9A7F-AB64-467C-BB91-290311605A34_at_cisco.com" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-24 15:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3755.php">Dirk Clasen: "[OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Previous message:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI users] type_match_size_f always fails?"</a>
<li><strong>In reply to:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3758.php">Jeff Squyres: "Re: [OMPI users] openmpi support ignored"</a>
<li><strong>Reply:</strong> <a href="3758.php">Jeff Squyres: "Re: [OMPI users] openmpi support ignored"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff:
<br>
The application mailing list was the first I tried. So far the difficulty to
<br>
let amber know about openmpi remains, however. Therefore, with the serial
<br>
installation I am at a fraction of the possibilities of my machine.
<br>
<p>I wonder whether by providing here the way openmpi was compiled and
<br>
(attachments) the config.h used to try to compile the application and
<br>
errors.log, forced to be generated during the compilation, may reveal a
<br>
solution to openmpi experts, ie how to set ./config for the application. It
<br>
seems to me that the application does not find the mpi libraries.
<br>
<p>openmpi-1.2.3 was compiled on Debian Linux amd64 etch with 
<br>
<p>./configure CC=/opt/intel/cce/9.1.042/bin/icc
<br>
CXX=/opt/intel/cce/9.1.042/bin/icpc F77=/opt/intel/fce/9.1.036/bin/ifort
<br>
FC=/opt/intel/fce/9.1.036/bin/ifort --with-libnuma=/usr/lib
<br>
<p>ompi_info |grep libnuma
<br>
<p>ompi_info |grep maffinity
<br>
<p><p>Amber9 parallel compilation was attempted on the same machine by first letting
<br>
it know about openmpi, as indicated in their manual:
<br>
<p>export MPI_HOME=/usr/local/openmpi-1.2.3
<br>
<p>Then:
<br>
<p>make clean
<br>
<p>./configure -openmpi ifort_x86_64
<br>
<p>(must say that I did not find on the configure help a flag for the intel C
<br>
compiler, though probably this is not the issue; the application is set to use 
<br>
gcc)
<br>
<p>make parallel &gt;&amp; errors.log
<br>
<p><p>Both errors.log and config.h (renamed config.hREN because .h does not result in
<br>
a true attachment with gnome)
<br>
<p><p>All that under the hypothesis that a possible solution may be seen on the fly;
<br>
I can't expect that the problem is studied on the openmpi site.
<br>
<p>Thanks
<br>
<p>francesco pietra
<br>
<p><p><p><p><p>--- Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 23, 2007, at 5:11 PM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not sure what these command line switches do...?  &quot;-openmpi&quot; is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not a switch that our configure supports.
</span><br>
<span class="quotelev2">&gt; &gt; No, he tries to configure the application &quot;Amber9&quot;, so this is not the
</span><br>
<span class="quotelev2">&gt; &gt; Open  MPI configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, I mis-read this completely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unfortunately totally unfamiliar with Amber9 -- do they have a  
</span><br>
<span class="quotelev1">&gt; support mailing list where you can ask this question?
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
<p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________
<br>
Get the Yahoo! toolbar and be alerted to new email wherever you're surfing.
<br>
<a href="http://new.toolbar.yahoo.com/toolbar/features/mail/index.php">http://new.toolbar.yahoo.com/toolbar/features/mail/index.php</a>
<br>


<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3754/config.hREN">519880682-config.hREN</a>
</ul>
<!-- attachment="config.hREN" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3754/errors.log">524885129-errors.log</a>
</ul>
<!-- attachment="errors.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3755.php">Dirk Clasen: "[OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Previous message:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI users] type_match_size_f always fails?"</a>
<li><strong>In reply to:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3758.php">Jeff Squyres: "Re: [OMPI users] openmpi support ignored"</a>
<li><strong>Reply:</strong> <a href="3758.php">Jeff Squyres: "Re: [OMPI users] openmpi support ignored"</a>
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
