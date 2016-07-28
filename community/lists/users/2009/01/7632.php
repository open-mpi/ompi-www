<?
$subject_val = "Re: [OMPI users] question running on heterogeneous systems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 12:21:45 2009" -->
<!-- isoreceived="20090105172145" -->
<!-- sent="Mon, 05 Jan 2009 12:21:27 -0500" -->
<!-- isosent="20090105172127" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question running on heterogeneous systems" -->
<!-- id="49624197.6010004_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="118b978f0901020936v79879710na6a27e92d097f5f8_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 12:21:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7633.php">Eugene Loh: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Previous message:</strong> <a href="7631.php">Lydia Heck: "[OMPI users] using the carto facility"</a>
<li><strong>In reply to:</strong> <a href="7622.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7642.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Reply:</strong> <a href="7642.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mahmoud Payami wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 2, 2009 at 9:08 AM, doriankrause &lt;doriankrause_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:doriankrause_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Mahmoud Payami wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Dear OpenMPI Users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I have two systems, one with Intel64 processor, and one with
</span><br>
<span class="quotelev1">&gt;         IA32. The OSs on first is CentOS-86_64 and the other
</span><br>
<span class="quotelev1">&gt;         CentOS-i386. I installed Intel fortran compiler 10.1 on both.
</span><br>
<span class="quotelev1">&gt;          In the first I use the fce, and in the second I use fc
</span><br>
<span class="quotelev1">&gt;         directories (ifortvars.sh/csh). I have compiled openmpi
</span><br>
<span class="quotelev1">&gt;         separately on each machine. Now, I could not run my
</span><br>
<span class="quotelev1">&gt;         application whch is compiled on ia32 machine. Should I use
</span><br>
<span class="quotelev1">&gt;         &quot;fc&quot; instead of &quot;fce&quot; on intel64 and then compile openmpi with
</span><br>
<span class="quotelev1">&gt;         that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Could you give us some more information? What is the error message?
</span><br>
<span class="quotelev1">&gt;     You said that the application is compiled for the 32 bit
</span><br>
<span class="quotelev1">&gt;     architecture. I'm not used to mixing 32/64 bit architectures. Does
</span><br>
<span class="quotelev1">&gt;     the application run on each host seperately?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dorian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hi Mahmoud, list
<br>
<span class="quotelev1">&gt; Dear Dorian,
</span><br>
<span class="quotelev1">&gt; Thank you  for your contribution. The application, compiled on each 
</span><br>
<span class="quotelev1">&gt; box separately, is ok with mpi an no problem. Recently, I had checked 
</span><br>
<span class="quotelev1">&gt; that a binary file created on ia32, also works on 86_64 but the 
</span><br>
<span class="quotelev1">&gt; reverse is not true.
</span><br>
That is correct.
<br>
x86-64 architecture can run 32-bit binaries,
<br>
but 64-bit binaries don't work on x86 machines.
<br>
<span class="quotelev1">&gt; So, why not a parallel program which is compiled on ia32 box? I think, 
</span><br>
<span class="quotelev1">&gt; if I configure and install openmpi using ia32 intel compiler on 86_64 
</span><br>
<span class="quotelev1">&gt; box, then it will be resolved.
</span><br>
1. You need to compile OpenMPI separately on each architecture.
<br>
Use the &quot;--prefix=/path/to/my/openmpi/32bit/&quot; (32-bit example/suggestion)
<br>
configure option, to install the two libraries on different locations,
<br>
if you want. 
<br>
This will make clear for which architecture the library was built for.
<br>
<p>2. You need to compile your application separately on each architecture,
<br>
and link to the OpenMPI libraries built for that specific architecture
<br>
according to item 1  above.
<br>
(I.e. don't mix apples and oranges.)
<br>
<p>3. You need to have the correct environment variables set
<br>
on each machine architecture.
<br>
They are *different* on each architecture.
<br>
<p>I.e., if you use Intel Fortran,
<br>
source the fc script on the 32bit machine,
<br>
and source the fce script on the 64-bit machine.
<br>
<p>This can be done on the .bashrc or .tcshrc file.
<br>
If you have a different home directory on each machine,
<br>
you can write a .bashrc or .tcshrc file for each architecture.
<br>
If you have a single NFS mounted home directory,
<br>
use a trick like this (tcsh example):
<br>
<p>if ( $HOST == &quot;my_32bit_hostname&quot; ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;source /path/to/intel/fc/bin/ifortvars.csh             # Note &quot;fc&quot; here.
<br>
else if ( $HOST == &quot;my_64bit_hostname&quot;  ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;source /path/to/intel/fce/bin/ifortvars.csh           # Note &quot;fce&quot; here.
<br>
endif
<br>
<p>whatever your &quot;my_32bit_hostname&quot;, &quot;my_64bit_hostname&quot;.
<br>
/path/to/intel/fc/, and  /path/to/intel/fce/   are.
<br>
(Do &quot;hostname&quot; on each machine to find out the right name to use.)
<br>
<p>Likewise for the OpenMPI binaries (mpicc, mpif90, mpirun, etc):
<br>
<p>if ( $HOST == &quot;my_32bit_hostname&quot; ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;setenv PATH /path/to/my/openmpi/32bit/bin:$PATH   # Note &quot;32bit&quot; here.
<br>
else if ( $HOST == &quot;my_64bit_hostname&quot;  ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;setenv PATH /path/to/my/openmpi/64bit/bin:$PATH    # Note &quot;64bit&quot; here.
<br>
endif
<br>
<p>This approach also works for separate home directories &quot;per machine&quot;
<br>
(not NFS mounted), and is probably the simplest way to solve the problem.
<br>
<p>There are more elegant ways to setup the environment of choice,
<br>
other than changing the user startup files.
<br>
For instance, you can write intel.csh and intel.sh on the /etc/profile.d 
<br>
directory,
<br>
to setup the appropriate environment as the user logs in.
<br>
See also the &quot;environment modules&quot; package:
<br>
<a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>
<br>
<p>4) If you run MPI programs across the two machines/architectures,
<br>
make sure to use the MPI types on MPI function calls correctly,
<br>
and to match them properly to the native Fortran (or C) types
<br>
on each machine/architecture.
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa, PhD - Email: gus_at_[hidden]
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; I have to check it and will report the result. In present case, it is 
</span><br>
<span class="quotelev1">&gt; searching for shared lib.so.0 which has some extension &quot;..ELF...64&quot;. I 
</span><br>
<span class="quotelev1">&gt; have already added &quot;/usr/local/lib&quot; which contains mpi libs in 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH otherwise they would not work on each box even separatey.
</span><br>
<span class="quotelev1">&gt; Bests, Happy 2009
</span><br>
<span class="quotelev1">&gt; mahmoud
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="7633.php">Eugene Loh: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Previous message:</strong> <a href="7631.php">Lydia Heck: "[OMPI users] using the carto facility"</a>
<li><strong>In reply to:</strong> <a href="7622.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7642.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Reply:</strong> <a href="7642.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
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
