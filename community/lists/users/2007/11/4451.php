<?
$subject_val = "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 12:28:45 2007" -->
<!-- isoreceived="20071108172845" -->
<!-- sent="Thu, 8 Nov 2007 18:28:42 +0100" -->
<!-- isosent="20071108172842" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries" -->
<!-- id="200711081828.42637.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="47333EC4.3050601_at_cepba.upc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 12:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4452.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4450.php">Harald Servat: "[OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="4450.php">Harald Servat: "[OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4453.php">Harald Servat: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>Reply:</strong> <a href="4453.php">Harald Servat: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Harald,
<br>
please see:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#why-no-rpath">http://www.open-mpi.org/faq/?category=mpi-apps#why-no-rpath</a>
<br>
<p>One possibility with Your existing installation is to circumvent a libmpi* 
<br>
being used from the standard system library directories: just adapt Your 
<br>
mpi*-wrapper-data.txt files in
<br>
/home/Computacional/harald/aplic/openmpi/1.2/share/openmpi
<br>
<p>Instead of:
<br>
&nbsp;&nbsp;libs=-lmpi
<br>
set it to:
<br>
&nbsp;&nbsp;libs=/home/Computacional/harald/aplic/openmpi/1.2/lib/libmpi.a
<br>
<p>Of course, You may play with -rpath in conjunction with 
<br>
--with-wrapper-ldflags.
<br>
<p>More info on this in: 
<br>
<a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
<br>
<p><p>Hope this helps,
<br>
Rainer
<br>
<p>On Thursday 08 November 2007 17:52, Harald Servat wrote:
<br>
<span class="quotelev1">&gt; Hello to all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I'm working on SGI Altix machine (IA64) which provides its own MPI
</span><br>
<span class="quotelev1">&gt; library. It is installed under /usr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I've installed OpenMPI 1.2 on my own user area in order to do some tests.
</span><br>
<span class="quotelev1">&gt;   However, when I link the test application with the mpicc from OpenMPI
</span><br>
<span class="quotelev1">&gt; and the command line contains -L /usr/lib mpicc fails telling me that
</span><br>
<span class="quotelev1">&gt; it's unable to find some symbols from the OpenMPI lib (I suppose that it
</span><br>
<span class="quotelev1">&gt; tries to use /usr/lib/libmpi.* instead of $OMPI_HOME/lib/libmpi.*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Shouldn't mpicc force the usage of $OMPI_HOME/lib/libmpi* at the link
</span><br>
<span class="quotelev1">&gt; stage and avoid other MPI libraries?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; harald_at_bscsmp01:~&gt;
</span><br>
<span class="quotelev1">&gt; /home/Computacional/harald/aplic/openmpi/1.2/bin/mpicc prova-mpi.c
</span><br>
<span class="quotelev1">&gt; harald_at_bscsmp01:~&gt;
</span><br>
<span class="quotelev1">&gt; /home/Computacional/harald/aplic/openmpi/1.2/bin/mpicc prova-mpi.c
</span><br>
<span class="quotelev1">&gt; -L/usr/lib
</span><br>
<span class="quotelev1">&gt; /tmp/ccIsf1pD.o: In function `main':
</span><br>
<span class="quotelev1">&gt; prova-mpi.c:(.text+0x61): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev1">&gt; prova-mpi.c:(.text+0x70): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and prova-mpi.c is like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         int r;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         r = MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;         r = MPI_Barrier (MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         r = MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
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
<p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
&quot;Emails save time, not printing them saves trees!&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4452.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4450.php">Harald Servat: "[OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="4450.php">Harald Servat: "[OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4453.php">Harald Servat: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>Reply:</strong> <a href="4453.php">Harald Servat: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
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
