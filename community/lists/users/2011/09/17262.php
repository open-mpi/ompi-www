<?
$subject_val = "Re: [OMPI users] Problem compiling openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 16:30:13 2011" -->
<!-- isoreceived="20110913203013" -->
<!-- sent="Tue, 13 Sep 2011 16:30:09 -0400" -->
<!-- isosent="20110913203009" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling openmpi-1.4.3" -->
<!-- id="CAHwLALOhVhpg-yjSkEqY_N0FPiXdyPQBJU2MXfZW7J7U5JdUZA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHNB0nOfh69W_3tfCwDfCkDL9KNR2=sd-h-feqSRyOquLrs1wA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling openmpi-1.4.3<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 16:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17263.php">Gus Correa: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="17261.php">amosleff_at_[hidden]: "[OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="17261.php">amosleff_at_[hidden]: "[OMPI users] Problem compiling openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17263.php">Gus Correa: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="17263.php">Gus Correa: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you notice the error message:
<br>
<p>&nbsp;&nbsp;/usr/bin/install: cannot remove
<br>
`/opt/openmpi/share/openmpi/amca-param-sets/example.conf': Permission
<br>
denied
<br>
<p>I would check the permission settings of the file first if I encounter
<br>
something like this...
<br>
<p>Rayson
<br>
<p>=================================
<br>
Grid Engine / Open Grid Scheduler
<br>
<a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
<br>
<p><p>On Tue, Sep 13, 2011 at 4:22 PM, amosleff_at_[hidden] &lt;amosleff_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear Users,
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I have run into a problem trying to compile openmpi-1.4.3.&#160; I am
</span><br>
<span class="quotelev1">&gt; running SuSE Linux 11.4 in VMware-7.0.1.&#160; For compilers I am using
</span><br>
<span class="quotelev1">&gt; l_fcompxe_intel64_2011.5.220 and l_ccompxe_intel64_2011.5.220 which are
</span><br>
<span class="quotelev1">&gt; newly issued. It appears to go through the compile command:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; ./compile
</span><br>
<span class="quotelev1">&gt; LIBDIRS=&quot;/opt/intel/composerxe-2011.5.220/compiler/lib/intel64&quot;
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi CC=icc CXX=icpc F77=ifort F90=ifort
</span><br>
<span class="quotelev1">&gt; After running &quot;make all install&quot; the end of the output gives the error:
</span><br>
<span class="quotelev1">&gt; test -z &quot;/opt/openmpi/share/openmpi/amca-param-sets&quot; || /bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; &quot;/opt/openmpi/share/openmpi/amca-param-sets&quot;
</span><br>
<span class="quotelev1">&gt; &#160;/usr/bin/install -c -m 644 'amca-param-sets/example.conf'
</span><br>
<span class="quotelev1">&gt; '/opt/openmpi/share/openmpi/amca-param-sets/example.conf'
</span><br>
<span class="quotelev1">&gt; /usr/bin/install: cannot remove
</span><br>
<span class="quotelev1">&gt; `/opt/openmpi/share/openmpi/amca-param-sets/example.conf': Permission denied
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-dist_amca_paramDATA] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/contrib'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/contrib'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I have tried using examples trying to run one of the examples
</span><br>
<span class="quotelev1">&gt; and it gives an error
</span><br>
<span class="quotelev1">&gt; /Downloads/openmpi-1.4.3/examples&gt; mpicc -np 4 connectivity_c.c
</span><br>
<span class="quotelev1">&gt; mpicc: error while loading shared libraries: libimf.so: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; This is the reason for the LIBDIRS in the compiling command.&#160; I have run
</span><br>
<span class="quotelev1">&gt; into the same error trying to set up espresso-4.3.1.&#160; The result occurs
</span><br>
<span class="quotelev1">&gt; whether I use root or a user login.&#160; The file is present being the next
</span><br>
<span class="quotelev1">&gt; entry in the string in LIBDIRS.
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Any help would be much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Amos Leffler
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Rayson
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17263.php">Gus Correa: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="17261.php">amosleff_at_[hidden]: "[OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="17261.php">amosleff_at_[hidden]: "[OMPI users] Problem compiling openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17263.php">Gus Correa: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="17263.php">Gus Correa: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
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
