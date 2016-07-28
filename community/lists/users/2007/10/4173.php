<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 02:09:13 2007" -->
<!-- isoreceived="20071009060913" -->
<!-- sent="Tue, 9 Oct 2007 08:08:23 +0200" -->
<!-- isosent="20071009060823" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)" -->
<!-- id="897EB321-9A89-4D8B-8B19-D53225573619_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="897B6169-808D-4581-A19B-4CB8DA2E3F8B_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2007-10-09 02:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4174.php">Jeff Squyres: "Re: [OMPI users] Tool communication"</a>
<li><strong>Previous message:</strong> <a href="4172.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4168.php">Reuti: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From the files you attached, I see the following in config.log:
<br>
<p>OMPI_CC_ABSOLUTE=' DISPLAY known
<br>
<p>and several lines later:
<br>
<p>OMPI_CXX_ABSOLUTE=' DISPLAY known
<br>
<p>But in Makefile, I see this bogus 2-line value (same as you noted):
<br>
<p>OMPI_CC_ABSOLUTE =  DISPLAY known
<br>
/usr/bin/gcc
<br>
<p>and several lines later:
<br>
<p>OMPI_CXX_ABSOLUTE =  DISPLAY known
<br>
/usr/bin/g++
<br>
<p>Note that we set these two values in configure with the following  
<br>
commands:
<br>
<p>OMPI_CC_ABSOLUTE=&quot;`which $CC`&quot;
<br>
OMPI_CXX_ABSOLUTE=&quot;`which $CXX`&quot;
<br>
<p>So I *suspect* that the bogus values in config.status are totally  
<br>
hosing you when trying to create all the other files -- the version  
<br>
of &quot;sed&quot; is a red herring.
<br>
<p>What exactly is your output when you run &quot;which gcc&quot; and &quot;which g+ 
<br>
+&quot;?  We are blindly taking the whole value -- mainly because I've  
<br>
never seen &quot;which foo&quot; give more than one line on stdout.  ;-)
<br>
<p>What *could* be happening is that your shell startup files are  
<br>
generating some output (e.g., &quot;DISPLAY known&quot;) and that's being  
<br>
output before &quot;which foo&quot; is run because of the `` usage.  Do your  
<br>
shell startup files emit &quot;DISPLAY known&quot; when you start up?
<br>
<p><p><p>On Oct 8, 2007, at 5:19 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 07.10.2007 um 01:16 schrieb Michael Clover:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was just trying to install openmpi-1.2.4 on a brand new iMac (2.4
</span><br>
<span class="quotelev2">&gt;&gt; GHZ Intel Core 2 Duo, 1GB RAM, OSX 10.4.10), having just loaded the
</span><br>
<span class="quotelev2">&gt;&gt; xtools environnment.  I am able to successfully run the configure,
</span><br>
<span class="quotelev2">&gt;&gt; but make dies instantly:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure -prefix=/usr/local/openmpi --disable-mpi-cxx --disable-
</span><br>
<span class="quotelev2">&gt;&gt; mpi-f90 --without-xgrid FC=gfortran | tee config.out
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev2">&gt;&gt; config.status: executing libtool commands
</span><br>
<span class="quotelev2">&gt;&gt; cloverm:~/bin/openmpi-1.2.4:[22]&gt;make -j 4 |&amp; tee make.out
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:602: *** missing separator.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; cloverm:~/bin/openmpi-1.2.4:[23]&gt;ls *.out
</span><br>
<span class="quotelev2">&gt;&gt; config.out      make.out
</span><br>
<span class="quotelev2">&gt;&gt; cloverm:~/bin/openmpi-1.2.4:[24]&gt;tar -zcvf ompi-output.tar.gz *.log
</span><br>
<span class="quotelev2">&gt;&gt; *.out
</span><br>
<span class="quotelev2">&gt;&gt; config.log
</span><br>
<span class="quotelev2">&gt;&gt; config.out
</span><br>
<span class="quotelev2">&gt;&gt; make.out
</span><br>
<span class="quotelev2">&gt;&gt; cloverm:~/bin/openmpi-1.2.4:[25]&gt;ld -v
</span><br>
<span class="quotelev2">&gt;&gt; Apple Computer, Inc. version cctools-622.5.obj~13
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have copied lines 599-609 from Makefile, so you can see that Make
</span><br>
<span class="quotelev2">&gt;&gt; is trying to run gcc, in a way that doesn't look correct
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_AS_GLOBAL =
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_AS_LABEL_SUFFIX =
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CC_ABSOLUTE =  DISPLAY known
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;DISPLAY known&quot; shouldn't be there. What is a plain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; giving? Just /usr/bin/gcc as for me or something more?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CONFIGURE_DATE = Sat Oct  6 16:05:59 PDT 2007
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CONFIGURE_HOST = michael-clovers-computer.local
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CONFIGURE_USER = mrc
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CXX_ABSOLUTE =  DISPLAY known
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_F77_ABSOLUTE = none
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_F90_ABSOLUTE = none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am also attaching the tee'd results, the config.log, and the
</span><br>
<span class="quotelev2">&gt;&gt; Makefile that doesn't work:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cloverm:~/bin/openmpi-1.2.4:[27]&gt;tar -zcvf ompi-output.tar.gz *.log
</span><br>
<span class="quotelev2">&gt;&gt; *.out Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.log
</span><br>
<span class="quotelev2">&gt;&gt; config.out
</span><br>
<span class="quotelev2">&gt;&gt; make.out
</span><br>
<span class="quotelev2">&gt;&gt; Makefile
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-output.tar.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael Clover
</span><br>
<span class="quotelev2">&gt;&gt; mclover_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4174.php">Jeff Squyres: "Re: [OMPI users] Tool communication"</a>
<li><strong>Previous message:</strong> <a href="4172.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4168.php">Reuti: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
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
