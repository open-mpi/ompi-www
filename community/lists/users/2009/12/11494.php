<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 18:44:08 2009" -->
<!-- isoreceived="20091209234408" -->
<!-- sent="Wed, 9 Dec 2009 15:43:43 -0800" -->
<!-- isosent="20091209234343" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="76aeda4a0912091543h4b4aa5ceobb44aa58472a8647_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B2015CE.1010907_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)<br>
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 18:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11495.php">Matthew MacManes: "[OMPI users] OMPI 1.4: connectivity_c fails, ring_c and hello_c work"</a>
<li><strong>Previous message:</strong> <a href="11493.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11485.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11496.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11496.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus and List,
<br>
<p>1st of all Gus, I want to say thanks.. you have been a huge help, and when I
<br>
get this fixed, I owe you big time!
<br>
<p>However, the problems continue...
<br>
<p>I formatted the HD, reinstalled OS to make sure that I was working from
<br>
scratch.  I did your step A, which seemed to go fine:
<br>
<p>macmanes_at_macmanes:~$ which mpicc
<br>
/home/macmanes/apps/openmpi1.4/bin/mpicc
<br>
macmanes_at_macmanes:~$ which mpirun
<br>
/home/macmanes/apps/openmpi1.4/bin/mpirun
<br>
<p>Good stuff there...
<br>
<p>I then compiled the example files:
<br>
<p>macmanes_at_macmanes:~/Downloads/openmpi-1.4/examples$
<br>
/home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 ring_c
<br>
Process 0 sending 10 to 1, tag 201 (8 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
Process 1 exiting
<br>
Process 2 exiting
<br>
Process 3 exiting
<br>
Process 4 exiting
<br>
Process 5 exiting
<br>
Process 6 exiting
<br>
Process 7 exiting
<br>
macmanes_at_macmanes:~/Downloads/openmpi-1.4/examples$
<br>
/home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 connectivity_c
<br>
Connectivity test on 8 processes PASSED.
<br>
macmanes_at_macmanes:~/Downloads/openmpi-1.4/examples$
<br>
/home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 connectivity_c
<br>
..HANGS..NO OUTPUT
<br>
<p>this is maddening because ring_c works.. and connectivity_c worked the 1st
<br>
time, but not the second... I did it 10 times, and it worked twice.. here is
<br>
the TOP screenshot:
<br>
<p><a href="http://picasaweb.google.com/macmanes/DropBox?authkey=Gv1sRgCLKokNOVqo7BYw#5413382182027669394">http://picasaweb.google.com/macmanes/DropBox?authkey=Gv1sRgCLKokNOVqo7BYw#5413382182027669394</a>
<br>
<p>What is the difference between connectivity_c and ring_c? Under what
<br>
circumstances should one fail and not the other...
<br>
<p>I'm off to the Linux forums to see about the Nehalem kernel issues..
<br>
<p>Matt
<br>
<p><p><p>On Wed, Dec 9, 2009 at 13:25, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Matthew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no point in trying to troubleshoot MrBayes and ABySS
</span><br>
<span class="quotelev1">&gt; if not even the OpenMPI test programs run properly.
</span><br>
<span class="quotelev1">&gt; You must straighten them out first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) While you are at OpenMPI, do yourself a favor,
</span><br>
<span class="quotelev1">&gt; and install it from source on a separate directory.
</span><br>
<span class="quotelev1">&gt; Who knows if the OpenMPI package distributed with Ubuntu
</span><br>
<span class="quotelev1">&gt; works right on Nehalem?
</span><br>
<span class="quotelev1">&gt; Better install OpenMPI yourself from source code.
</span><br>
<span class="quotelev1">&gt; It is not a big deal, and may save you further trouble.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Recipe:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Install gfortran and g++ if you don't have them using apt-get.
</span><br>
<span class="quotelev1">&gt; 2) Put the OpenMPI tarball in, say /home/matt/downolads/openmpi
</span><br>
<span class="quotelev1">&gt; 3) Make another install directory *not in the system directory tree*.
</span><br>
<span class="quotelev1">&gt; Something like &quot;mkdir /home/matt/apps/openmpi-X.Y.Z/&quot; (X.Y.Z=version)
</span><br>
<span class="quotelev1">&gt; will work
</span><br>
<span class="quotelev1">&gt; 4) cd /home/matt/downolads/openmpi
</span><br>
<span class="quotelev1">&gt; 5) ./configure CC=gcc CXX=g++ F77=gfortran FC=gfortran  \
</span><br>
<span class="quotelev1">&gt; --prefix=/home/matt/apps/openmpi-X.Y.Z
</span><br>
<span class="quotelev1">&gt; (Use the prefix flag to install in the directory of item 3.)
</span><br>
<span class="quotelev1">&gt; 6) make
</span><br>
<span class="quotelev1">&gt; 7) make install
</span><br>
<span class="quotelev1">&gt; 8) At the bottom of your /home/matt/.bashrc or .profile file
</span><br>
<span class="quotelev1">&gt; put these lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/home/matt/apps/openmpi-X.Y.Z/bin:${PATH}
</span><br>
<span class="quotelev1">&gt; export MANPATH=/home/matt/apps/openmpi-X.Y.Z/share/man:`man -w`
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=home/matt/apps/openmpi-X.Y.Z/lib:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (If you use csh/tcsh use instead:
</span><br>
<span class="quotelev1">&gt; setenv PATH /home/matt/apps/openmpi-X.Y.Z/bin:${PATH}
</span><br>
<span class="quotelev1">&gt; etc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 9) Logout and login again to freshen um the environment variables.
</span><br>
<span class="quotelev1">&gt; 10) Do &quot;which mpicc&quot;  to check that it is pointing to your newly
</span><br>
<span class="quotelev1">&gt; installed OpenMPI.
</span><br>
<span class="quotelev1">&gt; 11) Recompile and rerun the OpenMPI test programs
</span><br>
<span class="quotelev1">&gt; with 2, 4, 8, 16, .... processors.
</span><br>
<span class="quotelev1">&gt; Use full path names to mpicc and to mpirun,
</span><br>
<span class="quotelev1">&gt; if the change of PATH above doesn't work right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ********
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B) Nehalem is quite new hardware.
</span><br>
<span class="quotelev1">&gt; I don't know if the Ubuntu kernel 2.6.31-16 fully supports all
</span><br>
<span class="quotelev1">&gt; of Nehalem features, particularly hyperthreading, and NUMA,
</span><br>
<span class="quotelev1">&gt; which are used by MPI programs.
</span><br>
<span class="quotelev1">&gt; I am not the right person to give you advice about this.
</span><br>
<span class="quotelev1">&gt; I googled out but couldn't find a clear information about
</span><br>
<span class="quotelev1">&gt; minimal kernel age/requirements to have Nehalem fully supported.
</span><br>
<span class="quotelev1">&gt; Some Nehalem owner in the list could come forward and tell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C) On the top screenshot you sent me, please try it again
</span><br>
<span class="quotelev1">&gt; (after you do item A) but type &quot;f&quot; and &quot;j&quot; to show the processors
</span><br>
<span class="quotelev1">&gt; that are running each process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D) Also, the screeshot shows 20GB of memory.
</span><br>
<span class="quotelev1">&gt; This sounds not as a optimal memory for Nehalem,
</span><br>
<span class="quotelev1">&gt; which tend to be 6GB, 12GB, 24GB, 48GB.
</span><br>
<span class="quotelev1">&gt; Did you put together the system, or upgraded the memory yourself,
</span><br>
<span class="quotelev1">&gt; of did you buy the computer as is?
</span><br>
<span class="quotelev1">&gt; However, this should not break MPI anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E) Answering your question:
</span><br>
<span class="quotelev1">&gt; It is true that different flavors of MPI
</span><br>
<span class="quotelev1">&gt; used to compile (mpicc) and run (mpiexec) a program would probably
</span><br>
<span class="quotelev1">&gt; break right away, regardless of the number of processes.
</span><br>
<span class="quotelev1">&gt; However, when it comes to different versions of the
</span><br>
<span class="quotelev1">&gt; same MPI flavor (say OpenMPI 1.3.4 and OpenMPI 1.3.3)
</span><br>
<span class="quotelev1">&gt; I am not sure it will break.
</span><br>
<span class="quotelev1">&gt; I would guess it may run but not in a reliable way.
</span><br>
<span class="quotelev1">&gt; Problems may appear as you stress the system with more cores, etc.
</span><br>
<span class="quotelev1">&gt; But this is just a guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthew MacManes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interestingly the results for the connectivity_c test... works fine with
</span><br>
<span class="quotelev2">&gt;&gt; -np &lt;8. For -np &gt;8 it works some of the time, other times it HANGS. I have
</span><br>
<span class="quotelev2">&gt;&gt; got to believe that this is a big clue!! Also, when it hangs, sometimes I
</span><br>
<span class="quotelev2">&gt;&gt; get the message &quot;mpirun was unable to cleanly terminate the daemons on the
</span><br>
<span class="quotelev2">&gt;&gt; nodes shown below&quot; Note that NO nodes are shown below.   Once, I got -np 250
</span><br>
<span class="quotelev2">&gt;&gt; to pass the connectivity test, but I was not able to replicate this
</span><br>
<span class="quotelev2">&gt;&gt; reliable, so I'm not sure if it was a fluke, or what.  Here is a like to a
</span><br>
<span class="quotelev2">&gt;&gt; screenshop of TOP when connectivity_c is hung with -np 14.. I see that 2
</span><br>
<span class="quotelev2">&gt;&gt; processes are only at 50% CPU usage.. Hmmmm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink</a>&lt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other tests, ring_c, hello_c, as well as the cxx versions of these
</span><br>
<span class="quotelev2">&gt;&gt; guys with with all values of -np.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using -mca mpi-paffinity_alone 1 I get the same behavior.
</span><br>
<span class="quotelev2">&gt;&gt; I agree that I am should worry about the mismatch between where the
</span><br>
<span class="quotelev2">&gt;&gt; libraries are installed versus where I am telling my programs to look for
</span><br>
<span class="quotelev2">&gt;&gt; them. Would this type of mismatch cause behavior like what I am seeing, i.e.
</span><br>
<span class="quotelev2">&gt;&gt; working with  a small number of processors, but failing with larger?  It
</span><br>
<span class="quotelev2">&gt;&gt; seems like a mismatch would have the same effect regardless of the number of
</span><br>
<span class="quotelev2">&gt;&gt; processors used. Maybe I am mistaken. Anyway, to address this, which mpirun
</span><br>
<span class="quotelev2">&gt;&gt; gives me /usr/local/bin/mpirun.. so to configure ./configure
</span><br>
<span class="quotelev2">&gt;&gt; --with-mpi=/usr/local/bin/mpirun and to run /usr/local/bin/mpirun -np X ...
</span><br>
<span class="quotelev2">&gt;&gt;  This should
</span><br>
<span class="quotelev2">&gt;&gt; uname -a gives me: Linux macmanes 2.6.31-16-generic #52-Ubuntu SMP Thu Dec
</span><br>
<span class="quotelev2">&gt;&gt; 3 22:07:16 UTC 2006 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 8, 2009, at 8:50 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Matthew
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please see comments/answers inline below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matthew MacManes wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Gus, Thanks for your ideas.. I have a few questions, and will try to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; answer yours in hopes of solving this!!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A simple way to test OpenMPI on your system is to run the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test programs that come with the OpenMPI source code,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello_c.c, connectivity_c.c, and ring_c.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Get the tarball from the OpenMPI site, gzip and untar it,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and look for it in the &quot;examples&quot; directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compile it with /your/path/to/openmpi/bin/mpicc hello_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Run it with /your/path/to/openmpi/bin/mpiexec -np X a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using X = 2, 4, 8, 16, 32, 64, ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will tell if your OpenMPI is functional,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and if you can run on many Nehalem cores,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even with oversubscription perhaps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It will also set the stage for further investigation of your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actual programs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Should I worry about setting things like --num-cores --bind-to-cores?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  This, I think, gets at your questions about processor affinity.. Am I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; right? I could not exactly figure out the -mca mpi-paffinity_alone stuff...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use the simple minded -mca mpi-paffinity_alone 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is probably the easiest way to assign a process to a core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There more complex  ways in OpenMPI, but I haven't tried.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed, -mca mpi-paffinity_alone 1 does improve performance of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; our programs here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a chance that without it the 16 virtual cores of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your Nehalem get confused with more than 3 processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (you reported that -np &gt; 3 breaks).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you try adding just -mca mpi-paffinity_alone 1  to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your mpiexec command line?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1. Additional load: nope. nothing else, most of the time not even
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; firefox.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Turn off firefox, etc, to make it even better.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ideally, use runlevel 3, no X, like a computer cluster node,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but this may not be required.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  2. RAM: no problems apparent when monitoring through TOP. Interesting, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did wonder about oversubscription, so I tried the option
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --nooversubscription, but this gave me an error mssage.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oversubscription from your program would only happen if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you asked for more processes than available cores, i.e.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np &gt; 8 (or &quot;virtual&quot; cores, in case of Nehalem hyperthreading,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np &gt; 16).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since you have -np=4 there is no oversubscription,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unless you have other external load (e.g. Matlab, etc),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but you said you don't.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yet another possibility would be if your program is threaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g. using OpenMP along with MPI), but considering what you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; said about OpenMP I would guess the programs don't use it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For instance, you launch the program with 4 MPI processes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and each process decides to start, say, 8 OpenMP threads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You end up with 32 threads and 8 (real) cores (or 16 hyperthreaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ones on Nehalem).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What else does top say?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any hog processes (memory- or CPU-wise)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; besides your program processes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  3. I have not tried other MPI flavors.. Ive been speaking to the authors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the programs, and they are both using openMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was not trying to convince you to use another MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use MPICH2 also, but OpenMPI reigns here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The idea or trying it with MPICH2 was just to check whether OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is causing the problem, but I don't think it is.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  4. I don't think that this is a problem, as I'm specifying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-mpi=/usr/bin/...  when I compile the programs. Is there any other way
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to be sure that this is not a problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know about your Ubuntu (we have CentOS and Fedora on various
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, most Linux distributions come with their MPI flavors,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and so do compilers, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Often times they install these goodies in unexpected places,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and this has caused a lot of frustration.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are tons of postings on this list that eventually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boiled down to mismatched versions of MPI in unexpected places.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The easy way is to use full path names to compile and to run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /my/openmpi/bin/mpicc on your program configuration script),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and something like this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /my/openmpi/bin/mpiexec -np  ... bla, bla ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when you submit the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can check your version with &quot;which mpicc&quot;, &quot;which mpiexec&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and (perhaps using full path names) with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;ompi_info&quot;, &quot;mpicc --showme&quot;, &quot;mpiexec --help&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  5. I had not been, and you could see some shuffling when monitoring the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; load on specific processors. I have tried to use --bind-to-cores to deal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with this. I don't understand how to use the -mca options you asked about.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6. I am using Ubuntu 9.10. gcc 4.4.1 and g++  4.4.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am afraid I won't be of help, because I don't have Nehalem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I read about Nehalem requiring quite recent kernels
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to get all of its features working right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the output of &quot;uname -a&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will tell the kernel version, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Other list subscribers may give you a suggestion if you post the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MyBayes is a for bayesian phylogenetics:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a> ABySS: is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program for assembly of DNA sequence data:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.bcgsc.ca/platform/bioinfo/software/abyss">http://www.bcgsc.ca/platform/bioinfo/software/abyss</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the links!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had found the MrBayes link.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I eventually found what your ABySS was about, but no links.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Amazing that it is about DNA/gene sequencing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our abyss here is the deep ocean ... :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Abysmal difference!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Do the programs mix MPI (message passing) with OpenMP (threads)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Im honestly not sure what this means..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some programs mix the two.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMP only works in a shared memory environment (e.g. a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computer like yours), whereas MPI can use both shared memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and work across a network (e.g. in a cluster).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are other differences too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unlikely that you have this hybrid type of parallel program,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; otherwise there would be some reference to OpenMP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the very program configuration files, program documentation, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, in general the configuration scripts of these hybrid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs can turn on MPI only, or OpenMP only, or both,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depending on how you configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even to compile with OpenMP you would need a proper compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flag, but that one might be hidden in a Makefile too, making
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a bit hard to find. &quot;grep -n mp Makefile&quot; may give a clue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anything on the documentation that mentions threads or OpenMP?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FYI, here is OpenMP:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks for all your help!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Matt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, so far it didn't really help. :(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But let's hope to find a clue,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maybe with a little help of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; our list subscriber friends.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi Matthew
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; More guesses/questions than anything else:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1) Is there any additional load on this machine?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We had problems like that (on different machines) when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users start listening to streaming video, doing Matlab calculations,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; etc, while the MPI programs are running.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This tends to oversubscribe the cores, and may lead to crashes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) RAM:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you monitor the RAM usage through &quot;top&quot;?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (I presume you are on Linux.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It may show unexpected memory leaks, if they exist.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On &quot;top&quot;, type &quot;1&quot; (one) see all cores, type &quot;f&quot; then &quot;j&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to see the core number associated to each process.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3) Do the programs work right with other MPI flavors (e.g. MPICH2)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If not, then it is not OpenMPI's fault.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4) Any possibility that the MPI versions/flavors of mpicc and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun that you are using to compile and launch the program are not the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; same?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5) Are you setting processor affinity on mpiexec?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec -mca mpi_paffinity_alone 1 -np ... bla, bla ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Context switching across the cores may also cause trouble, I suppose.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6) Which Linux are you using (uname -a)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On other mailing lists I read reports that only quite recent kernels
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support all the Intel Nehalem processor features well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't have Nehalem, I can't help here,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but the information may be useful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for other list subscribers to help you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As for the programs, some programs require specific setup,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (and even specific compilation) when the number of MPI processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vary.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It may help if you tell us a link to the program sites.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Baysian statistics is not totally out of our business,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but phylogenetic genetic trees is not really my league,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hence forgive me any bad guesses, please,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but would it need specific compilation or a different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; set of input parameters to run correctly on a different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; number of processors?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do the programs mix MPI (message passing) with OpenMP (threads)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I found this MrBayes, which seems to do the above:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://mrbayes.csit.fsu.edu/">http://mrbayes.csit.fsu.edu/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As for the ABySS, what is it, where can it be found?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Doesn't look like a deep ocean circulation model, as the name suggest.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My $0.02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Matthew MacManes
</span><br>
<span class="quotelev2">&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev2">&gt;&gt; University of California- Berkeley
</span><br>
<span class="quotelev2">&gt;&gt; Museum of Vertebrate Zoology
</span><br>
<span class="quotelev2">&gt;&gt; Phone: 510-495-5833
</span><br>
<span class="quotelev2">&gt;&gt; Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
</span><br>
<span class="quotelev2">&gt;&gt; Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11494/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11495.php">Matthew MacManes: "[OMPI users] OMPI 1.4: connectivity_c fails, ring_c and hello_c work"</a>
<li><strong>Previous message:</strong> <a href="11493.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11485.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11496.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11496.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
