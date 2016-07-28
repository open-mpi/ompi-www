<?
$subject_val = "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 08:23:05 2010" -->
<!-- isoreceived="20100415122305" -->
<!-- sent="Thu, 15 Apr 2010 08:22:59 -0400" -->
<!-- isosent="20100415122259" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="AA64CDC8-B4E3-4AEF-8741-0FDD2E98D0A9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="v2ma5d7282e1004112048nfeb82d08w3f9fe9f3a9d9cda8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 08:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12644.php">Prentice Bisbal: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="12642.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="12603.php">Baowei Liu: "[OMPI users] openMPI configure/Installing problem on Mac with gnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12645.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12645.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tested on Snow Leopard on my MBP with gcc 4.5.0 from <a href="http://hpc.sf.net">http://hpc.sf.net</a> -- gcc doesn't seem to recognize -arch at all.  This seems to agree with the output from your 1st attachment.  Keep in mind that this is a gcc issue, not a configure issue.  If gcc doesn't accept the flag you're passing, there's not much OMPI can do.
<br>
<p>For your second tarball, somehow the flags you're setting are not getting into configure.  Looking in your 2nd config.out and config.log, I don't see those flags being used (which makes sense, because gcc would have barfed they were being used and you would have ended up with the same result as in your first case).  I don't see any errors in any of the files (including make.out) -- did you not capture the stderr?
<br>
<p>So let's take a step back and ask: why do you want to pass -arch xa8_64?  Is that necessary?
<br>
<p><p><p>On Apr 11, 2010, at 11:48 PM, Baowei Liu wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed gnu-gcc-4.4.3 on our Mac and found out openMPI didn't work any
</span><br>
<span class="quotelev1">&gt; longer. I tried a lot of things to install openMPI back but failed. I
</span><br>
<span class="quotelev1">&gt; installed the new gnu-gcc-4.5 and got similar problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I followed the information on this mailing list and used option &quot;-arch
</span><br>
<span class="quotelev1">&gt; x86_64&quot; for compilers to try to get rid of the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as: more than one -arch option (not allowed, use cc(1) instead)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: *** [coll_hierarch.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried two ways:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi --enable-static CC=gcc FC=gfortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; F77=gfortran CXX=g++ CFLAGS=&quot;-arch x86_64&quot; CXXFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-m64 -arch x86_64&quot; FFLAGS=&quot;-m64 -arch x86_64&quot; --with-gnu-ld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure failed. It seems the configure doesn't recognize the option
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -arch x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I did
</span><br>
<span class="quotelev1">&gt; 2.
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev1">&gt; export FCFLAGS=&quot;-m64 -arch x86_64&quot;
</span><br>
<span class="quotelev1">&gt; export FFLAGS=&quot;-m64 -arch x86_64&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export OBJCFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export
</span><br>
<span class="quotelev1">&gt; DYLD_LIBRARY_PATH=/usr/local/gcc-4.5/lib/gcc/x86_64-apple-darwin10.2.0/4.6.0/include
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi CC=gcc FC=gfortran F77=gfortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CXX=g++ --with-gnu-ld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure passed but it gave same making error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any hint?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Bill
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output_1.tar.bz2&gt;&lt;ompi-output_2.tar.bz2&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12644.php">Prentice Bisbal: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="12642.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="12603.php">Baowei Liu: "[OMPI users] openMPI configure/Installing problem on Mac with gnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12645.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12645.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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
