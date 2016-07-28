<?
$subject_val = "Re: [OMPI users] question running on heterogeneous systems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 07:45:41 2009" -->
<!-- isoreceived="20090106124541" -->
<!-- sent="Tue, 6 Jan 2009 07:45:36 -0500" -->
<!-- isosent="20090106124536" -->
<!-- name="Mahmoud Payami" -->
<!-- email="mahmoud.payami_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question running on heterogeneous systems" -->
<!-- id="118b978f0901060445t161206e0le8a14574071794f1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49624197.6010004_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] question running on heterogeneous systems<br>
<strong>From:</strong> Mahmoud Payami (<em>mahmoud.payami_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-06 07:45:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7643.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Previous message:</strong> <a href="7641.php">Bernard Secher - SFME/LGLS: "[OMPI users] default hostfile with 1.3 version"</a>
<li><strong>In reply to:</strong> <a href="7632.php">Gus Correa: "Re: [OMPI users] question running on heterogeneous systems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gus,
<br>
<p>Thank you for the detailed explanation. It is quite helpful. I think now I
<br>
have got how to manage the problem.
<br>
<p>Best regards,
<br>
<p>Mahmoud Payami
<br>
Theoretical Physics Group,
<br>
Atomic Energy Organization of Iran
<br>
Tehran-Iran
<br>
mpayami_at_[hidden]
<br>
<p><p>On Mon, Jan 5, 2009 at 12:21 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mahmoud Payami wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 2, 2009 at 9:08 AM, doriankrause &lt;doriankrause_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; doriankrause_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Mahmoud Payami wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Dear OpenMPI Users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        I have two systems, one with Intel64 processor, and one with
</span><br>
<span class="quotelev2">&gt;&gt;        IA32. The OSs on first is CentOS-86_64 and the other
</span><br>
<span class="quotelev2">&gt;&gt;        CentOS-i386. I installed Intel fortran compiler 10.1 on both.
</span><br>
<span class="quotelev2">&gt;&gt;         In the first I use the fce, and in the second I use fc
</span><br>
<span class="quotelev2">&gt;&gt;        directories (ifortvars.sh/csh). I have compiled openmpi
</span><br>
<span class="quotelev2">&gt;&gt;        separately on each machine. Now, I could not run my
</span><br>
<span class="quotelev2">&gt;&gt;        application whch is compiled on ia32 machine. Should I use
</span><br>
<span class="quotelev2">&gt;&gt;        &quot;fc&quot; instead of &quot;fce&quot; on intel64 and then compile openmpi with
</span><br>
<span class="quotelev2">&gt;&gt;        that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Could you give us some more information? What is the error message?
</span><br>
<span class="quotelev2">&gt;&gt;    You said that the application is compiled for the 32 bit
</span><br>
<span class="quotelev2">&gt;&gt;    architecture. I'm not used to mixing 32/64 bit architectures. Does
</span><br>
<span class="quotelev2">&gt;&gt;    the application run on each host seperately?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Dorian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Mahmoud, list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Dorian,
</span><br>
<span class="quotelev2">&gt;&gt; Thank you  for your contribution. The application, compiled on each box
</span><br>
<span class="quotelev2">&gt;&gt; separately, is ok with mpi an no problem. Recently, I had checked that a
</span><br>
<span class="quotelev2">&gt;&gt; binary file created on ia32, also works on 86_64 but the reverse is not
</span><br>
<span class="quotelev2">&gt;&gt; true.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; That is correct.
</span><br>
<span class="quotelev1">&gt; x86-64 architecture can run 32-bit binaries,
</span><br>
<span class="quotelev1">&gt; but 64-bit binaries don't work on x86 machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, why not a parallel program which is compiled on ia32 box? I think, if
</span><br>
<span class="quotelev2">&gt;&gt; I configure and install openmpi using ia32 intel compiler on 86_64 box, then
</span><br>
<span class="quotelev2">&gt;&gt; it will be resolved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 1. You need to compile OpenMPI separately on each architecture.
</span><br>
<span class="quotelev1">&gt; Use the &quot;--prefix=/path/to/my/openmpi/32bit/&quot; (32-bit example/suggestion)
</span><br>
<span class="quotelev1">&gt; configure option, to install the two libraries on different locations,
</span><br>
<span class="quotelev1">&gt; if you want. This will make clear for which architecture the library was
</span><br>
<span class="quotelev1">&gt; built for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. You need to compile your application separately on each architecture,
</span><br>
<span class="quotelev1">&gt; and link to the OpenMPI libraries built for that specific architecture
</span><br>
<span class="quotelev1">&gt; according to item 1  above.
</span><br>
<span class="quotelev1">&gt; (I.e. don't mix apples and oranges.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. You need to have the correct environment variables set
</span><br>
<span class="quotelev1">&gt; on each machine architecture.
</span><br>
<span class="quotelev1">&gt; They are *different* on each architecture.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e., if you use Intel Fortran,
</span><br>
<span class="quotelev1">&gt; source the fc script on the 32bit machine,
</span><br>
<span class="quotelev1">&gt; and source the fce script on the 64-bit machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This can be done on the .bashrc or .tcshrc file.
</span><br>
<span class="quotelev1">&gt; If you have a different home directory on each machine,
</span><br>
<span class="quotelev1">&gt; you can write a .bashrc or .tcshrc file for each architecture.
</span><br>
<span class="quotelev1">&gt; If you have a single NFS mounted home directory,
</span><br>
<span class="quotelev1">&gt; use a trick like this (tcsh example):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if ( $HOST == &quot;my_32bit_hostname&quot; ) then
</span><br>
<span class="quotelev1">&gt;   source /path/to/intel/fc/bin/ifortvars.csh             # Note &quot;fc&quot; here.
</span><br>
<span class="quotelev1">&gt; else if ( $HOST == &quot;my_64bit_hostname&quot;  ) then
</span><br>
<span class="quotelev1">&gt;   source /path/to/intel/fce/bin/ifortvars.csh           # Note &quot;fce&quot; here.
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; whatever your &quot;my_32bit_hostname&quot;, &quot;my_64bit_hostname&quot;.
</span><br>
<span class="quotelev1">&gt; /path/to/intel/fc/, and  /path/to/intel/fce/   are.
</span><br>
<span class="quotelev1">&gt; (Do &quot;hostname&quot; on each machine to find out the right name to use.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Likewise for the OpenMPI binaries (mpicc, mpif90, mpirun, etc):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if ( $HOST == &quot;my_32bit_hostname&quot; ) then
</span><br>
<span class="quotelev1">&gt;   setenv PATH /path/to/my/openmpi/32bit/bin:$PATH   # Note &quot;32bit&quot; here.
</span><br>
<span class="quotelev1">&gt; else if ( $HOST == &quot;my_64bit_hostname&quot;  ) then
</span><br>
<span class="quotelev1">&gt;   setenv PATH /path/to/my/openmpi/64bit/bin:$PATH    # Note &quot;64bit&quot; here.
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This approach also works for separate home directories &quot;per machine&quot;
</span><br>
<span class="quotelev1">&gt; (not NFS mounted), and is probably the simplest way to solve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are more elegant ways to setup the environment of choice,
</span><br>
<span class="quotelev1">&gt; other than changing the user startup files.
</span><br>
<span class="quotelev1">&gt; For instance, you can write intel.csh and intel.sh on the /etc/profile.d
</span><br>
<span class="quotelev1">&gt; directory,
</span><br>
<span class="quotelev1">&gt; to setup the appropriate environment as the user logs in.
</span><br>
<span class="quotelev1">&gt; See also the &quot;environment modules&quot; package:
</span><br>
<span class="quotelev1">&gt; <a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) If you run MPI programs across the two machines/architectures,
</span><br>
<span class="quotelev1">&gt; make sure to use the MPI types on MPI function calls correctly,
</span><br>
<span class="quotelev1">&gt; and to match them properly to the native Fortran (or C) types
</span><br>
<span class="quotelev1">&gt; on each machine/architecture.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa, PhD - Email: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have to check it and will report the result. In present case, it is
</span><br>
<span class="quotelev2">&gt;&gt; searching for shared lib.so.0 which has some extension &quot;..ELF...64&quot;. I have
</span><br>
<span class="quotelev2">&gt;&gt; already added &quot;/usr/local/lib&quot; which contains mpi libs in LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; otherwise they would not work on each box even separatey.
</span><br>
<span class="quotelev2">&gt;&gt; Bests, Happy 2009
</span><br>
<span class="quotelev2">&gt;&gt; mahmoud
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------------------------------------------------
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7643.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Previous message:</strong> <a href="7641.php">Bernard Secher - SFME/LGLS: "[OMPI users] default hostfile with 1.3 version"</a>
<li><strong>In reply to:</strong> <a href="7632.php">Gus Correa: "Re: [OMPI users] question running on heterogeneous systems"</a>
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
