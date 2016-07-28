<?
$subject_val = "Re: [OMPI users] ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 17:03:21 2009" -->
<!-- isoreceived="20090406210321" -->
<!-- sent="Mon, 06 Apr 2009 17:03:11 -0400" -->
<!-- isosent="20090406210311" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh MPi and program tests" -->
<!-- id="49DA6E0F.4060000_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="b87c422a0904061240u6b9f965cm2ac770ef4ac15f5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh MPi and program tests<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 17:03:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8796.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8794.php">Yvan Fournier: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8791.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8801.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8801.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Francesco
<br>
<p><p>See answers inline.
<br>
<p>Francesco Pietra wrote:
<br>
<span class="quotelev1">&gt; Hi Gus:
</span><br>
<span class="quotelev1">&gt; Partial quick answers below. I have reestablished the ssh connection
</span><br>
<span class="quotelev1">&gt; so that tomorrow I'll run the tests. Everything that relates to
</span><br>
<span class="quotelev1">&gt; running amber is on the &quot;parallel computer&quot;, where I have access to
</span><br>
<span class="quotelev1">&gt; everything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 6, 2009 at 7:53 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Francesco, list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr 6, 2009 at 5:21 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Francesco
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you try to run examples/connectivity_c.c,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or examples/hello_c.c before trying amber?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; They are in the directory where you untarred the OpenMPI tarball.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is easier to troubleshoot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possible network and host problems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with these simpler programs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have found the &quot;examples&quot;. Should they be compiled? how? This is my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only question here.
</span><br>
<span class="quotelev2">&gt;&gt; cd examples/
</span><br>
<span class="quotelev2">&gt;&gt; /full/path/to/openmpi/bin/mpicc -o connectivity_c connectivity_c.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then run it with, say:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /full/path/to/openmpi/bin/mpirun -host {whatever_hosts_you_want}
</span><br>
<span class="quotelev2">&gt;&gt; -n {as_many_processes_you_want} connectivity_c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Likewise for hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What's below is info. Although amber parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would have not compiled with faulty openmpi, I'll run openmpi tests as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; soon as I understand how.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, to avoid confusion,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you may use a full path name to mpirun,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in case you have other MPI flavors in your system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Often times the mpirun your path is pointing to is not what you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; may think it is.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; Did you install OpenMPI on /usr/local ?
</span><br>
<span class="quotelev2">&gt;&gt; When you do &quot;mpirun -help&quot;, do you see &quot;mpirun (Open MPI) 1.3&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -help
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.3.1
</span><br>
<span class="quotelev1">&gt; on the 1st line, then follow the options
</span><br>
<p>Ok, it looks like you installed OpenMPI 1.3.1 with the default
<br>
&quot;--prefix&quot; which is /usr/local.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How about the output of &quot;orte_info&quot; ?
</span><br>
<span class="quotelev1">&gt; orte_info was not installed. See below what has been installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Sorry, my fault.
<br>
I meant ompi_info (not orte_info).
<br>
Please try ompi_info or &quot;ompi_info --config&quot;.
<br>
It will tell you the compilers used to build OpenMPI, etc.
<br>
<p>I presume all of this is being done in the &quot;parallel computer&quot;,
<br>
i.e., in one of the AMD64 Debian systems, right?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does it show your Intel compilers, etc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess so, otherwise amber would have not been compiled, but I don't
</span><br>
<span class="quotelev1">&gt; know the commands to prove it. The intel compilers are on the path:
</span><br>
<span class="quotelev1">&gt; /opt/intel/cce/10.1.015/bin:/opt/intel/fce/10.1.015/bin and the mkl
</span><br>
<span class="quotelev1">&gt; are sourced in .bashrc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Again, all in the AMD64 system, right?
<br>
<p><span class="quotelev2">&gt;&gt; I ask because many Linux distributions come with one or more flavors
</span><br>
<span class="quotelev2">&gt;&gt; of MPI (OpenMPI, MPICH, LAM, etc), some compilers also do (PGI for
</span><br>
<span class="quotelev2">&gt;&gt; instance), some tools (Intel MKL?) may also have their MPI,
</span><br>
<span class="quotelev2">&gt;&gt; and you end up with a bunch of MPI commands
</span><br>
<span class="quotelev2">&gt;&gt; on your path that may produce a big mixup.
</span><br>
<span class="quotelev2">&gt;&gt; This is a pretty common problem that affect new users on this list,
</span><br>
<span class="quotelev2">&gt;&gt; on the MPICH list, on clustering lists, etc.
</span><br>
<span class="quotelev2">&gt;&gt; The errors messages often don't help find the source of the problem,
</span><br>
<span class="quotelev2">&gt;&gt; and people spend a lot of time trying to troubleshoot network,
</span><br>
<span class="quotelev2">&gt;&gt; etc, when is often just a path problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, this is why when you begin, you may want to use full path
</span><br>
<span class="quotelev2">&gt;&gt; names, to avoid confusion.
</span><br>
<span class="quotelev2">&gt;&gt; After the basic MPI functionality is working,
</span><br>
<span class="quotelev2">&gt;&gt; then you can go and fix your path chain,
</span><br>
<span class="quotelev2">&gt;&gt; and rely on your path chain.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is no other accessible MPI (one application, DOT2, has mpich but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is a static compilation; DOT2 parallelizatuion requires thar the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computer knows itself, i.e.&quot; ssh hostname date&quot; should afford the date
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passwordless. The reported issues in testing amber have destroyed this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; situation: now deb64 has port22 closed, evem to itself.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried to reboot the master node, to see if it comes back
</span><br>
<span class="quotelev2">&gt;&gt; to the original ssh setup?
</span><br>
<span class="quotelev2">&gt;&gt; You need ssh to be functional to run OpenMPI code,
</span><br>
<span class="quotelev2">&gt;&gt; including the tests above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know if you want to run on amd64 alone (master node?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or on a cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In any case, you may use a list of hosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or a hostfile on the mpirun command line,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to specify where you want to run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With amber I use the parallel computer directly and the amber
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation is chown to me. The ssh connection, in this case, only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; serves to get file from. or send files to, my desktop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is unclear to me what you mean by &quot;the parallel computer directly&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Can you explain better which computers are in this game?
</span><br>
<span class="quotelev2">&gt;&gt; Your desktop and a cluster perhaps?
</span><br>
<span class="quotelev2">&gt;&gt; Are they both Debian 64 Linux?
</span><br>
<span class="quotelev2">&gt;&gt; Where do you compile the programs?
</span><br>
<span class="quotelev2">&gt;&gt; Where do you want to run the programs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my .bashrc:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (for amber)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_HOME=/usr/local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export MPI_HOME
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (for openmpi)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if [ &quot;$LD_LIBRARY_PATH&quot; ] ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH'/usr/local/lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  export LD_LIBRARY_PATH=&quot;/usr/local/lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this on your desktop or on the &quot;parallel computer&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On both &quot;parallel computers&quot; (there is my desktop, ssh to two uma-type
</span><br>
<span class="quotelev1">&gt; dual-opteron &quot;parallel computers&quot;. 
</span><br>
<span class="quotelev1">&gt; Only one was active when the &quot;test&quot;
</span><br>
<span class="quotelev1">&gt; problems arose. While the (ten years old) destop is i386, both other
</span><br>
<span class="quotelev1">&gt; machines are amd64, i.e., all debian lenny. I prepare the input files
</span><br>
<span class="quotelev1">&gt; on the i386 and use it also as storage for backups. 
</span><br>
<p>So, you only use your i386 desktop to ssh to the AMD64 machine,
<br>
and to prepare input files, etc, right?
<br>
The OpenMPI installation, the compilations you do, and the job runs
<br>
all happen in the AMD64 system, right?
<br>
<p>BTW, do you use each of these systems separately on your
<br>
MPI program runs,
<br>
or do you use them together?
<br>
If you use them together, are they connected through a network,
<br>
and did you setup passowrdless ssh connections between them?
<br>
<p><span class="quotelev1">&gt; The &quot;parallel
</span><br>
<span class="quotelev1">&gt; computer&quot; has only the X server and a minimal window for a
</span><br>
<span class="quotelev1">&gt; two-dimensional graphics of amber. 
</span><br>
<p>I don't know how amber works, so please tell me.
<br>
Do you somehow interact with amber while it is running in parallel mode,
<br>
using this &quot;minimal window for a two dimensional graphics&quot;?
<br>
Or is this only a data post-processing activity that happens after the
<br>
parallel run of amber finishes?
<br>
<p><span class="quotelev1">&gt; The other parallel computer has a
</span><br>
<span class="quotelev1">&gt; GeForce 6600 card with GLSL support, which I use to elaborate
</span><br>
<span class="quotelev1">&gt; graphically the outputs from the numerical computations (using VMD,
</span><br>
<span class="quotelev1">&gt; Chimera and other 64 bit graphical programs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is also
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH_HOME=/usr/local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export MPICH_HOME
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is for DOCK, which, with this env variabl, accepts openmpi (at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lest it was so with v 1.2.6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh, well, it looks like there is MPICH already installed on /usr/local.
</span><br>
<span class="quotelev2">&gt;&gt; So, this may be part of the confusion, the path confusion I referred to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, there is no MPICH installed. With the above export, DOCK (a
</span><br>
<span class="quotelev1">&gt; docking program from the same developers of Amber) is so kind to use
</span><br>
<span class="quotelev1">&gt; the executables of openmpi. The export was suggested by the DOCK
</span><br>
<span class="quotelev1">&gt; developers, and it worked. Unable to explain why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>OK, this may be a way the DOCK developers found to trick their own
<br>
software (DOCK) to think MPICH is installed in /usr/local,
<br>
and actually use the OpenMPI libraries instead of MPICH.
<br>
They may have hardwired on their build scripts the &quot;MPICH_HOME&quot;
<br>
environment variable as the location where the MPI libraries reside.
<br>
But which MPI libraries are there may not matter much, I would guess.
<br>
Just a guess anyway.
<br>
(I have no idea of what the heck DOCK is or how it works.)
<br>
<p><span class="quotelev1">&gt; As far as the parallel support is concerned, /usr/local/bin only
</span><br>
<span class="quotelev1">&gt; contains what openmpi 1.3.1 has installed (resulting from ./configure
</span><br>
<span class="quotelev1">&gt; cc=/path/icc cxx=/path/icpc F77=path/ifort FC=path/ifort
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr/lib):
</span><br>
<span class="quotelev1">&gt; mpic++ mpicc mpiCC mpicc-vt mpiCC-vt mpic++-vt mpicxx mpicxx-vt
</span><br>
<span class="quotelev1">&gt; mpiexec mpif77 mpif77-vt mpif90 mpif90-vt mpirun ompi-clean ompi-info
</span><br>
<span class="quotelev1">&gt; ompi-ps ompi-server opal-wapper opari orte-clean orted orte-iof
</span><br>
<span class="quotelev1">&gt; orte-ps orterun otfaux otfcompress otfconfig otfdecompress otfdump
</span><br>
<span class="quotelev1">&gt; otfmerge vtcc vtcxx vtf77 vtf90 vtfilter vtunify. There is no
</span><br>
<span class="quotelev1">&gt; orte_info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Of course not.
<br>
Doh!  I misspelled the name ... :(
<br>
It is ompi_info for sure.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would suggest installing OpenMPI on a different directory,
</span><br>
<span class="quotelev2">&gt;&gt; using the --prefix option of the OpenMPI configure script.
</span><br>
<span class="quotelev2">&gt;&gt; Do configure --help for details about all configuration options.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the intel compilers (compiled ifort and icc, are sourced in both my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .bashrc and root home .bashrc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks and apologies for my low level in these affairs. It is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first time I am faced by such problems, with amd64, same intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers, and openmpi 1.2.6 everything was in order.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To me it doesn't look like the problem is related to the new version
</span><br>
<span class="quotelev2">&gt;&gt; of OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I asked about that because I am using the same commands, .bashrc, etc
</span><br>
<span class="quotelev1">&gt; that worked with version 1.2.6. The computers are the same, the only
</span><br>
<span class="quotelev1">&gt; (non minor) difference is upgrading from amd64 etch to amd64 lenny (or
</span><br>
<span class="quotelev1">&gt; I am doing mistakes that I have not yet detected).
</span><br>
<p>Yes, but I still don't think it is some problem in OpenMPI 1.3.1 that is
<br>
causing trouble here.
<br>
If it were, the program would start running, but mpirun is having 
<br>
trouble even to start the programs, right?
<br>
<p>Since you seem to have also upgraded the Debian release,
<br>
therefore another part of the system also changed.
<br>
But still, it may not be related to Debian either.
<br>
It may be just some confusion on paths, etc.
<br>
<p>I really encourage you to try to compile and run the programs in the 
<br>
examples directory.
<br>
They are very clear and simple (as opposed to amber, which hides behind
<br>
a few layers of software), and even if they fail, the failure will help
<br>
clarify the nature of the problem, and find a fix.
<br>
<p>Oh, well, I am afraid I am asking more questions than helping out,
<br>
but I am trying to understand what is going on.
<br>
<p>Gus Correa
<br>
<p><span class="quotelev2">&gt;&gt; Try the test programs with full path names first.
</span><br>
<span class="quotelev2">&gt;&gt; It may not solve the problem, but it may clarify things a bit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; francesco
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do &quot;/full/path/to/openmpi/bin/mpirun --help&quot; for details.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am not familiar to amber, but how does it find your openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries and compiler wrappers?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Don't you need to give it the paths during configuration,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; say,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /configure_amber -openmpi=/full/path/to/openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or similar?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have compiled openmpi 1.3.1 on debian amd64 lenny with icc/ifort
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (10.1.015) and libnuma. Tests passed:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info | grep libnuma
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MCA affinity: libnuma (MCA v 2.0, API 2.0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info | grep maffinity
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MCA affinity: first use (MCA as above)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MCA affinity: libnuma as above.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then, I have compiled parallel a molecular dynamics package, amber10,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; without error signals but I am having problems in testing the amber
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parallel installation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; amber10 configure was set as:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure_amber -openmpi -nobintray ifort
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; just as I used before with openmpi 1.2.6. Could you say if the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -openmpi should be changed?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cd tests
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export DO_PARALLEL='mpirun -np 4'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make test.parallel.MM  &lt; /dev/null
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cd cytosine &amp;&amp; ./Run.cytosine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The authenticity of host deb64 (which is the hostname) (127.0.1.1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can't be established.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RSA fingerprint .....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connecting ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I stopped the ssh daemon, whereby tests were interrupted because deb64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (i.e., itself) could no more be accessed. Further attempts under these
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; conditions failed for the same reason. Now, sshing to deb64 is no more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; possible: port 22 closed. In contrast, sshing from deb64 to other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; computers occurs passwordless. No such problems arose at the time of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; amd64 etch with the same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configuration of ssh, same compilers, and openmpi 1.2.6.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am here because the warning from the amber site is that I should to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; learn how to use my installation of MPI. Therefore, if there is any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clue ..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; francesco pietra
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8796.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8794.php">Yvan Fournier: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8791.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8801.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8801.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
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
