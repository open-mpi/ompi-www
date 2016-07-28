<?
$subject_val = "Re: [OMPI users] Problem compiling openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 16:49:43 2011" -->
<!-- isoreceived="20110913204943" -->
<!-- sent="Tue, 13 Sep 2011 16:49:34 -0400" -->
<!-- isosent="20110913204934" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling openmpi-1.4.3" -->
<!-- id="4E6FC1DE.8040300_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHwLALOhVhpg-yjSkEqY_N0FPiXdyPQBJU2MXfZW7J7U5JdUZA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 16:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17264.php">Blosch, Edwin L: "[OMPI users] Problem running under SGE"</a>
<li><strong>Previous message:</strong> <a href="17262.php">Rayson Ho: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="17262.php">Rayson Ho: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Amos
<br>
<p>Do you mean './configure' instead of './compile'?
<br>
Also, not sure if LIBDIRS is used by the OpenMPI configure script.
<br>
<p>The second error (cannot load libimf.so)
<br>
may be because you need to set your
<br>
Intel compiler environment environment.
<br>
It is easier to put it in your .cshrc/.bashrc file.
<br>
Something like this:
<br>
<p>source /opt/intel/composerxe-2011.5.220/compiler/bin/compilervars.csh
<br>
<p>I guess mpicc won't do it for you when you compile a program,
<br>
and mpiexec won't do it either, when you run the program.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>Rayson Ho wrote:
<br>
<span class="quotelev1">&gt; Did you notice the error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   /usr/bin/install: cannot remove
</span><br>
<span class="quotelev1">&gt; `/opt/openmpi/share/openmpi/amca-param-sets/example.conf': Permission
</span><br>
<span class="quotelev1">&gt; denied
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would check the permission settings of the file first if I encounter
</span><br>
<span class="quotelev1">&gt; something like this...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Grid Engine / Open Grid Scheduler
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 13, 2011 at 4:22 PM, amosleff_at_[hidden] &lt;amosleff_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Users,
</span><br>
<span class="quotelev2">&gt;&gt;             I have run into a problem trying to compile openmpi-1.4.3.  I am
</span><br>
<span class="quotelev2">&gt;&gt; running SuSE Linux 11.4 in VMware-7.0.1.  For compilers I am using
</span><br>
<span class="quotelev2">&gt;&gt; l_fcompxe_intel64_2011.5.220 and l_ccompxe_intel64_2011.5.220 which are
</span><br>
<span class="quotelev2">&gt;&gt; newly issued. It appears to go through the compile command:
</span><br>
<span class="quotelev2">&gt;&gt;                 ./compile
</span><br>
<span class="quotelev2">&gt;&gt; LIBDIRS=&quot;/opt/intel/composerxe-2011.5.220/compiler/lib/intel64&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/openmpi CC=icc CXX=icpc F77=ifort F90=ifort
</span><br>
<span class="quotelev2">&gt;&gt; After running &quot;make all install&quot; the end of the output gives the error:
</span><br>
<span class="quotelev2">&gt;&gt; test -z &quot;/opt/openmpi/share/openmpi/amca-param-sets&quot; || /bin/mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/openmpi/share/openmpi/amca-param-sets&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  /usr/bin/install -c -m 644 'amca-param-sets/example.conf'
</span><br>
<span class="quotelev2">&gt;&gt; '/opt/openmpi/share/openmpi/amca-param-sets/example.conf'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install: cannot remove
</span><br>
<span class="quotelev2">&gt;&gt; `/opt/openmpi/share/openmpi/amca-param-sets/example.conf': Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [install-dist_amca_paramDATA] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/contrib'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/contrib'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;             I have tried using examples trying to run one of the examples
</span><br>
<span class="quotelev2">&gt;&gt; and it gives an error
</span><br>
<span class="quotelev2">&gt;&gt; /Downloads/openmpi-1.4.3/examples&gt; mpicc -np 4 connectivity_c.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc: error while loading shared libraries: libimf.so: cannot open shared
</span><br>
<span class="quotelev2">&gt;&gt; object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; This is the reason for the LIBDIRS in the compiling command.  I have run
</span><br>
<span class="quotelev2">&gt;&gt; into the same error trying to set up espresso-4.3.1.  The result occurs
</span><br>
<span class="quotelev2">&gt;&gt; whether I use root or a user login.  The file is present being the next
</span><br>
<span class="quotelev2">&gt;&gt; entry in the string in LIBDIRS.
</span><br>
<span class="quotelev2">&gt;&gt;            Any help would be much appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Amos Leffler
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17264.php">Blosch, Edwin L: "[OMPI users] Problem running under SGE"</a>
<li><strong>Previous message:</strong> <a href="17262.php">Rayson Ho: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="17262.php">Rayson Ho: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
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
