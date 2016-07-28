<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 11:20:05 2007" -->
<!-- isoreceived="20071008152005" -->
<!-- sent="Mon, 8 Oct 2007 17:19:57 +0200" -->
<!-- isosent="20071008151957" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)" -->
<!-- id="897B6169-808D-4581-A19B-4CB8DA2E3F8B_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EDB16910-9063-4103-88B3-528ACAA2B5EC_at_san.rr.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 11:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4169.php">Bill Rankin: "Re: [OMPI users] [OT] Newbie seeks clarification about Parallel Computing Terminologies"</a>
<li><strong>Previous message:</strong> <a href="4167.php">Michael Clover: "[OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<li><strong>In reply to:</strong> <a href="4165.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Reply:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 07.10.2007 um 01:16 schrieb Michael Clover:
<br>
<p><span class="quotelev1">&gt; I was just trying to install openmpi-1.2.4 on a brand new iMac (2.4  
</span><br>
<span class="quotelev1">&gt; GHZ Intel Core 2 Duo, 1GB RAM, OSX 10.4.10), having just loaded the  
</span><br>
<span class="quotelev1">&gt; xtools environnment.  I am able to successfully run the configure,  
</span><br>
<span class="quotelev1">&gt; but make dies instantly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure -prefix=/usr/local/openmpi --disable-mpi-cxx --disable- 
</span><br>
<span class="quotelev1">&gt; mpi-f90 --without-xgrid FC=gfortran | tee config.out
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev1">&gt; config.status: executing libtool commands
</span><br>
<span class="quotelev1">&gt; cloverm:~/bin/openmpi-1.2.4:[22]&gt;make -j 4 |&amp; tee make.out
</span><br>
<span class="quotelev1">&gt; Makefile:602: *** missing separator.  Stop.
</span><br>
<span class="quotelev1">&gt; cloverm:~/bin/openmpi-1.2.4:[23]&gt;ls *.out
</span><br>
<span class="quotelev1">&gt; config.out      make.out
</span><br>
<span class="quotelev1">&gt; cloverm:~/bin/openmpi-1.2.4:[24]&gt;tar -zcvf ompi-output.tar.gz *.log  
</span><br>
<span class="quotelev1">&gt; *.out
</span><br>
<span class="quotelev1">&gt; config.log
</span><br>
<span class="quotelev1">&gt; config.out
</span><br>
<span class="quotelev1">&gt; make.out
</span><br>
<span class="quotelev1">&gt; cloverm:~/bin/openmpi-1.2.4:[25]&gt;ld -v
</span><br>
<span class="quotelev1">&gt; Apple Computer, Inc. version cctools-622.5.obj~13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have copied lines 599-609 from Makefile, so you can see that Make  
</span><br>
<span class="quotelev1">&gt; is trying to run gcc, in a way that doesn't look correct
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_AS_GLOBAL =
</span><br>
<span class="quotelev1">&gt; OMPI_AS_LABEL_SUFFIX =
</span><br>
<span class="quotelev1">&gt; OMPI_CC_ABSOLUTE =  DISPLAY known
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc
</span><br>
<p>The &quot;DISPLAY known&quot; shouldn't be there. What is a plain:
<br>
<p>which gcc
<br>
<p>giving? Just /usr/bin/gcc as for me or something more?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; OMPI_CONFIGURE_DATE = Sat Oct  6 16:05:59 PDT 2007
</span><br>
<span class="quotelev1">&gt; OMPI_CONFIGURE_HOST = michael-clovers-computer.local
</span><br>
<span class="quotelev1">&gt; OMPI_CONFIGURE_USER = mrc
</span><br>
<span class="quotelev1">&gt; OMPI_CXX_ABSOLUTE =  DISPLAY known
</span><br>
<span class="quotelev1">&gt; /usr/bin/g++
</span><br>
<span class="quotelev1">&gt; OMPI_F77_ABSOLUTE = none
</span><br>
<span class="quotelev1">&gt; OMPI_F90_ABSOLUTE = none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am also attaching the tee'd results, the config.log, and the  
</span><br>
<span class="quotelev1">&gt; Makefile that doesn't work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cloverm:~/bin/openmpi-1.2.4:[27]&gt;tar -zcvf ompi-output.tar.gz *.log  
</span><br>
<span class="quotelev1">&gt; *.out Makefile
</span><br>
<span class="quotelev1">&gt; config.log
</span><br>
<span class="quotelev1">&gt; config.out
</span><br>
<span class="quotelev1">&gt; make.out
</span><br>
<span class="quotelev1">&gt; Makefile
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Clover
</span><br>
<span class="quotelev1">&gt; mclover_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4169.php">Bill Rankin: "Re: [OMPI users] [OT] Newbie seeks clarification about Parallel Computing Terminologies"</a>
<li><strong>Previous message:</strong> <a href="4167.php">Michael Clover: "[OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<li><strong>In reply to:</strong> <a href="4165.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Reply:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
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
