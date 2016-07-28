<?
$subject_val = "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 15:44:02 2007" -->
<!-- isoreceived="20071108204402" -->
<!-- sent="Thu, 8 Nov 2007 21:43:55 +0100" -->
<!-- isosent="20071108204355" -->
<!-- name="Harald Servat" -->
<!-- email="harald_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries" -->
<!-- id="20071108204355.GA19896_at_keops.cepba.upc.es" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200711081828.42637.keller_at_hlrs.de" -->
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
<strong>From:</strong> Harald Servat (<em>harald_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 15:43:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4454.php">Brian Budge: "Re: [OMPI users] multi-threaded MPI"</a>
<li><strong>Previous message:</strong> <a href="4452.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>In reply to:</strong> <a href="4451.php">Rainer Keller: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer,
<br>
<p>On Thu, Nov 08, 2007 at 06:28:42PM +0100, Rainer Keller wrote:
<br>
<span class="quotelev1">&gt; Hello Harald,
</span><br>
<span class="quotelev1">&gt; please see:
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=mpi-apps#why-no-rpath">http://www.open-mpi.org/faq/?category=mpi-apps#why-no-rpath</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One possibility with Your existing installation is to circumvent a libmpi* 
</span><br>
<span class="quotelev1">&gt; being used from the standard system library directories: just adapt Your 
</span><br>
<span class="quotelev1">&gt; mpi*-wrapper-data.txt files in
</span><br>
<span class="quotelev1">&gt; /home/Computacional/harald/aplic/openmpi/1.2/share/openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead of:
</span><br>
<span class="quotelev1">&gt;   libs=-lmpi
</span><br>
<span class="quotelev1">&gt; set it to:
</span><br>
<span class="quotelev1">&gt;   libs=/home/Computacional/harald/aplic/openmpi/1.2/lib/libmpi.a
</span><br>
<p>&nbsp;&nbsp;thank you! It worked like a charm!
<br>
<p>Regards,
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, You may play with -rpath in conjunction with 
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More info on this in: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday 08 November 2007 17:52, Harald Servat wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello to all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   I'm working on SGI Altix machine (IA64) which provides its own MPI
</span><br>
<span class="quotelev2">&gt; &gt; library. It is installed under /usr.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   I've installed OpenMPI 1.2 on my own user area in order to do some tests.
</span><br>
<span class="quotelev2">&gt; &gt;   However, when I link the test application with the mpicc from OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; and the command line contains -L /usr/lib mpicc fails telling me that
</span><br>
<span class="quotelev2">&gt; &gt; it's unable to find some symbols from the OpenMPI lib (I suppose that it
</span><br>
<span class="quotelev2">&gt; &gt; tries to use /usr/lib/libmpi.* instead of $OMPI_HOME/lib/libmpi.*).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Shouldn't mpicc force the usage of $OMPI_HOME/lib/libmpi* at the link
</span><br>
<span class="quotelev2">&gt; &gt; stage and avoid other MPI libraries?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you!,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; **
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; harald_at_bscsmp01:~&gt;
</span><br>
<span class="quotelev2">&gt; &gt; /home/Computacional/harald/aplic/openmpi/1.2/bin/mpicc prova-mpi.c
</span><br>
<span class="quotelev2">&gt; &gt; harald_at_bscsmp01:~&gt;
</span><br>
<span class="quotelev2">&gt; &gt; /home/Computacional/harald/aplic/openmpi/1.2/bin/mpicc prova-mpi.c
</span><br>
<span class="quotelev2">&gt; &gt; -L/usr/lib
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/ccIsf1pD.o: In function `main':
</span><br>
<span class="quotelev2">&gt; &gt; prova-mpi.c:(.text+0x61): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev2">&gt; &gt; prova-mpi.c:(.text+0x70): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev2">&gt; &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and prova-mpi.c is like this
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;         int r;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         r = MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;         r = MPI_Barrier (MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;         r = MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt;  HLRS                          Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev1">&gt;  Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev1">&gt;  70550 Stuttgart                    email: keller_at_[hidden]     
</span><br>
<span class="quotelev1">&gt;  Germany                             AIM/Skype:rusraink
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Emails save time, not printing them saves trees!&quot;
</span><br>
<p><pre>
-- 
================================================================================
   o//o Harald Servat Gelabert (harald at cepba dot upc dot edu)
  o//o  Centre Europeu de Paral.lelisme de Barcelona (CEPBA)
 o//o   Tel: +34-93-401 74 20 Fax: +34-93-401 25 77
o//o    c/Jordi Girona, 1-3, Modul C6 Despatx E203. E-08034 Barcelona, Catalunya
================================================================================
The consciousness of AC encompassed all of what had once been a Universe
and brooded over what was now Chaos. Step by step, it must be done.
And AC said, &quot;LET THERE BE LIGHT!&quot;
And there was light.
== Isaac Asimov, The Last Question
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4454.php">Brian Budge: "Re: [OMPI users] multi-threaded MPI"</a>
<li><strong>Previous message:</strong> <a href="4452.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>In reply to:</strong> <a href="4451.php">Rainer Keller: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
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
