<?
$subject_val = "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 22:09:23 2010" -->
<!-- isoreceived="20100416020923" -->
<!-- sent="Thu, 15 Apr 2010 22:09:18 -0400" -->
<!-- isosent="20100416020918" -->
<!-- name="Baowei Liu" -->
<!-- email="bliu520_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="g2ta5d7282e1004151909x51f718b7y2d7b15dd7807a94f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AA64CDC8-B4E3-4AEF-8741-0FDD2E98D0A9_at_cisco.com" -->
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
<strong>From:</strong> Baowei Liu (<em>bliu520_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 22:09:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12646.php">max marconi: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="12644.php">Prentice Bisbal: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="12643.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12651.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12651.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot for your reply, Jeff!  I think I figure out why I got this
<br>
trouble but am still looking for a way to work around it. The Mac I have has
<br>
a 64-bit processor but its kernel is 32-bit. When I installed gnu-gcc, it
<br>
identified the architecture as x86_64--I cannot install it if I force it to
<br>
be i386. But the OMPI treat the arch as i386. If I try to force it to be
<br>
x86_64, I got the problem I mentioned before....
<br>
<p>On Thu, Apr 15, 2010 at 8:22 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I tested on Snow Leopard on my MBP with gcc 4.5.0 from <a href="http://hpc.sf.net">http://hpc.sf.net</a>-- gcc doesn't seem to recognize -arch at all.  This seems to agree with the
</span><br>
<span class="quotelev1">&gt; output from your 1st attachment.  Keep in mind that this is a gcc issue, not
</span><br>
<span class="quotelev1">&gt; a configure issue.  If gcc doesn't accept the flag you're passing, there's
</span><br>
<span class="quotelev1">&gt; not much OMPI can do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For your second tarball, somehow the flags you're setting are not getting
</span><br>
<span class="quotelev1">&gt; into configure.  Looking in your 2nd config.out and config.log, I don't see
</span><br>
<span class="quotelev1">&gt; those flags being used (which makes sense, because gcc would have barfed
</span><br>
<span class="quotelev1">&gt; they were being used and you would have ended up with the same result as in
</span><br>
<span class="quotelev1">&gt; your first case).  I don't see any errors in any of the files (including
</span><br>
<span class="quotelev1">&gt; make.out) -- did you not capture the stderr?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So let's take a step back and ask: why do you want to pass -arch xa8_64?
</span><br>
<span class="quotelev1">&gt;  Is that necessary?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 11, 2010, at 11:48 PM, Baowei Liu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I installed gnu-gcc-4.4.3 on our Mac and found out openMPI didn't work
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev2">&gt; &gt; longer. I tried a lot of things to install openMPI back but failed. I
</span><br>
<span class="quotelev2">&gt; &gt; installed the new gnu-gcc-4.5 and got similar problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I followed the information on this mailing list and used option &quot;-arch
</span><br>
<span class="quotelev2">&gt; &gt; x86_64&quot; for compilers to try to get rid of the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; as: more than one -arch option (not allowed, use cc(1) instead)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [coll_hierarch.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried two ways:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1.
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local/openmpi --enable-static CC=gcc
</span><br>
<span class="quotelev1">&gt; FC=gfortran
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; F77=gfortran CXX=g++ CFLAGS=&quot;-arch x86_64&quot; CXXFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FCFLAGS=&quot;-m64 -arch x86_64&quot; FFLAGS=&quot;-m64 -arch x86_64&quot; --with-gnu-ld
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Configure failed. It seems the configure doesn't recognize the option
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -arch x86_64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then I did
</span><br>
<span class="quotelev2">&gt; &gt; 2.
</span><br>
<span class="quotelev2">&gt; &gt; export CFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export CXXFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export FCFLAGS=&quot;-m64 -arch x86_64&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export FFLAGS=&quot;-m64 -arch x86_64&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export OBJCFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; DYLD_LIBRARY_PATH=/usr/local/gcc-4.5/lib/gcc/x86_64-apple-darwin10.2.0/4.6.0/include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local/openmpi CC=gcc FC=gfortran F77=gfortran
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CXX=g++ --with-gnu-ld
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Configure passed but it gave same making error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any hint?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Bill
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output_1.tar.bz2&gt;&lt;ompi-output_2.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12646.php">max marconi: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="12644.php">Prentice Bisbal: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="12643.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12651.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12651.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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
