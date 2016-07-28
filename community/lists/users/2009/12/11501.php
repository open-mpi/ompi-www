<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa) RESOLVED FOR NOW";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 11:28:15 2009" -->
<!-- isoreceived="20091210162815" -->
<!-- sent="Thu, 10 Dec 2009 08:28:03 -0800" -->
<!-- isosent="20091210162803" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa) RESOLVED FOR NOW" -->
<!-- id="A71AA656-C55E-4661-941E-4E602D6A295B_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="82dde0912100742m7fe05e76h81d2a5418f381035_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa) RESOLVED FOR NOW<br>
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 11:28:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11502.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11500.php">Mattijs Janssens: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11499.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11509.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)	RESOLVED FOR NOW"</a>
<li><strong>Reply:</strong> <a href="11509.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)	RESOLVED FOR NOW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark, 
<br>
<p>Exciting.. SOLVED.. There is an open ticket #2043 regarding Nehelem/OpenMPI/Hang problem (<a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>).. Seems like the problem might be specific to gcc4.4x and OMPI &lt;1.3.2.. It seems like there is a group up us with dual socket nehalems trying to use ompi without much luck (or at least not without headaches).. 
<br>
<p>Of note, mca btl_sm_num_fifos 7 seems to work as well..
<br>
<p>now off to see if I can get some real code to work... 
<br>
<p>Thanks, Mark, Gus, and the rest of the OMPI Users Group!
<br>
<p><p><p><p><p>On Dec 10, 2009, at 7:42 AM, Mark Bolstad wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just a quick interjection, I also have a dual-quad Nehalem system, HT on, 24GB ram, hand compiled 1.3.4 with options: --enable-mpi-threads --enable-mpi-f77=no --with-openib=no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With v1.3.4 I see roughly the same behavior, hello, ring work, connectivity fails randomly with np &gt;= 8. Turning on -v increased the success, but still hangs. np = 16 fails more often, and the hang is random in which pair of processes are communicating.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, it seems to be related to the shared memory layer problem. Running with -mca btl ^sm works consistently through np = 128.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 9, 2009 at 8:03 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Matthew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Save any misinterpretation I may have made of the code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello_c has no real communication, except for a final Barrier
</span><br>
<span class="quotelev1">&gt; synchronization.
</span><br>
<span class="quotelev1">&gt; Each process prints &quot;hello world&quot; and that's it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ring probes a little more, with processes Send(ing) and
</span><br>
<span class="quotelev1">&gt; Recv(cieving) messages.
</span><br>
<span class="quotelev1">&gt; Ring just passes a message sequentially along all process
</span><br>
<span class="quotelev1">&gt; ranks, then back to rank 0, and repeat the game 10 times.
</span><br>
<span class="quotelev1">&gt; Rank 0 is in charge of counting turns, decrementing the counter,
</span><br>
<span class="quotelev1">&gt; and printing that (nobody else prints).
</span><br>
<span class="quotelev1">&gt; With 4 processes:
</span><br>
<span class="quotelev1">&gt; 0-&gt;1-&gt;2-&gt;3-&gt;0-&gt;1... 10 times
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In connectivity every pair of processes exchange a message.
</span><br>
<span class="quotelev1">&gt; Therefore it probes all pairwise connections.
</span><br>
<span class="quotelev1">&gt; In verbose mode you can see that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These programs shouldn't hang at all, if the system were sane.
</span><br>
<span class="quotelev1">&gt; Actually, they should even run with a significant level of
</span><br>
<span class="quotelev1">&gt; oversubscription, say,
</span><br>
<span class="quotelev1">&gt; -np 128  should work easily for all three programs on a powerful
</span><br>
<span class="quotelev1">&gt; machine like yours.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Suggestions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Stick to the OpenMPI you compiled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) You can run connectivity_c in verbose mode:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 connectivity_c -v
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Note the trailing &quot;-v&quot;.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should tell more about who's talking to who.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) I wonder if there are any BIOS settings that may be required
</span><br>
<span class="quotelev1">&gt; (and perhaps not in place) to make the Nehalem hyperthreading to
</span><br>
<span class="quotelev1">&gt; work properly in your computer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You reach the BIOS settings by typing &lt;DEL&gt; or &lt;F2&gt;
</span><br>
<span class="quotelev1">&gt; when the computer boots up.
</span><br>
<span class="quotelev1">&gt; The key varies by
</span><br>
<span class="quotelev1">&gt; BIOS and computer vendor, but shows quickly on the bootup screen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may ask the computer vendor about the recommended BIOS settings.
</span><br>
<span class="quotelev1">&gt; If you haven't done this before, be careful to change and save only
</span><br>
<span class="quotelev1">&gt; what really needs to change (if anything really needs to change),
</span><br>
<span class="quotelev1">&gt; or the result may be worse.
</span><br>
<span class="quotelev1">&gt; (Overclocking is for gamers, not for genome researchers ... :) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4) What I read about Nehalem DDR3 memory is that it is optimal
</span><br>
<span class="quotelev1">&gt; on configurations that are multiples of 3GB per CPU.
</span><br>
<span class="quotelev1">&gt; Common configs. in dual CPU machines like yours are
</span><br>
<span class="quotelev1">&gt; 6, 12, 24 and 48GB.
</span><br>
<span class="quotelev1">&gt; The sockets where you install the memory modules also matter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your computer has 20GB.
</span><br>
<span class="quotelev1">&gt; Did you build the computer or upgrade the memory yourself?
</span><br>
<span class="quotelev1">&gt; Do you know how the memory is installed, in which memory sockets?
</span><br>
<span class="quotelev1">&gt; What does the vendor have to say about it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this:
</span><br>
<span class="quotelev1">&gt; <a href="http://en.community.dell.com/blogs/dell_tech_center/archive/2009/04/08/nehalem-and-memory-configurations.aspx">http://en.community.dell.com/blogs/dell_tech_center/archive/2009/04/08/nehalem-and-memory-configurations.aspx</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5) As I said before, typing &quot;f&quot; then &quot;j&quot; on &quot;top&quot; will add
</span><br>
<span class="quotelev1">&gt; a column (labeled &quot;P&quot;) that shows in which core each process is running.
</span><br>
<span class="quotelev1">&gt; This will let you observe how the Linux scheduler is distributing
</span><br>
<span class="quotelev1">&gt; the MPI load across the cores.
</span><br>
<span class="quotelev1">&gt; Hopefully it is load-balanced, and different processes go to different
</span><br>
<span class="quotelev1">&gt; cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is very disconcerting when MPI processes hang.
</span><br>
<span class="quotelev1">&gt; You are not alone.
</span><br>
<span class="quotelev1">&gt; The reasons are not always obvious.
</span><br>
<span class="quotelev1">&gt; At least in your case there is no network involved or to troubleshoot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope it helps,
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthew MacManes wrote:
</span><br>
<span class="quotelev1">&gt; Hi Gus and List,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1st of all Gus, I want to say thanks.. you have been a huge help, and when I get this fixed, I owe you big time!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the problems continue...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I formatted the HD, reinstalled OS to make sure that I was working from scratch.  I did your step A, which seemed to go fine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; macmanes_at_macmanes:~$ which mpicc
</span><br>
<span class="quotelev1">&gt; /home/macmanes/apps/openmpi1.4/bin/mpicc
</span><br>
<span class="quotelev1">&gt; macmanes_at_macmanes:~$ which mpirun
</span><br>
<span class="quotelev1">&gt; /home/macmanes/apps/openmpi1.4/bin/mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good stuff there...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then compiled the example files:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; macmanes_at_macmanes:~/Downloads/openmpi-1.4/examples$ /home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 ring_c
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (8 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev1">&gt; Process 0 exiting
</span><br>
<span class="quotelev1">&gt; Process 1 exiting
</span><br>
<span class="quotelev1">&gt; Process 2 exiting
</span><br>
<span class="quotelev1">&gt; Process 3 exiting
</span><br>
<span class="quotelev1">&gt; Process 4 exiting
</span><br>
<span class="quotelev1">&gt; Process 5 exiting
</span><br>
<span class="quotelev1">&gt; Process 6 exiting
</span><br>
<span class="quotelev1">&gt; Process 7 exiting
</span><br>
<span class="quotelev1">&gt; macmanes_at_macmanes:~/Downloads/openmpi-1.4/examples$ /home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 connectivity_c
</span><br>
<span class="quotelev1">&gt; Connectivity test on 8 processes PASSED.
</span><br>
<span class="quotelev1">&gt; macmanes_at_macmanes:~/Downloads/openmpi-1.4/examples$ /home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 connectivity_c
</span><br>
<span class="quotelev1">&gt; ..HANGS..NO OUTPUT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is maddening because ring_c works.. and connectivity_c worked the 1st time, but not the second... I did it 10 times, and it worked twice.. here is the TOP screenshot:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://picasaweb.google.com/macmanes/DropBox?authkey=Gv1sRgCLKokNOVqo7BYw#5413382182027669394">http://picasaweb.google.com/macmanes/DropBox?authkey=Gv1sRgCLKokNOVqo7BYw#5413382182027669394</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the difference between connectivity_c and ring_c? Under what circumstances should one fail and not the other...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm off to the Linux forums to see about the Nehalem kernel issues..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 9, 2009 at 13:25, Gus Correa &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Hi Matthew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    There is no point in trying to troubleshoot MrBayes and ABySS
</span><br>
<span class="quotelev1">&gt;    if not even the OpenMPI test programs run properly.
</span><br>
<span class="quotelev1">&gt;    You must straighten them out first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Suggestions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    A) While you are at OpenMPI, do yourself a favor,
</span><br>
<span class="quotelev1">&gt;    and install it from source on a separate directory.
</span><br>
<span class="quotelev1">&gt;    Who knows if the OpenMPI package distributed with Ubuntu
</span><br>
<span class="quotelev1">&gt;    works right on Nehalem?
</span><br>
<span class="quotelev1">&gt;    Better install OpenMPI yourself from source code.
</span><br>
<span class="quotelev1">&gt;    It is not a big deal, and may save you further trouble.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Recipe:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1) Install gfortran and g++ if you don't have them using apt-get.
</span><br>
<span class="quotelev1">&gt;    2) Put the OpenMPI tarball in, say /home/matt/downolads/openmpi
</span><br>
<span class="quotelev1">&gt;    3) Make another install directory *not in the system directory tree*.
</span><br>
<span class="quotelev1">&gt;    Something like &quot;mkdir /home/matt/apps/openmpi-X.Y.Z/&quot; (X.Y.Z=version)
</span><br>
<span class="quotelev1">&gt;    will work
</span><br>
<span class="quotelev1">&gt;    4) cd /home/matt/downolads/openmpi
</span><br>
<span class="quotelev1">&gt;    5) ./configure CC=gcc CXX=g++ F77=gfortran FC=gfortran  \
</span><br>
<span class="quotelev1">&gt;    --prefix=/home/matt/apps/openmpi-X.Y.Z
</span><br>
<span class="quotelev1">&gt;    (Use the prefix flag to install in the directory of item 3.)
</span><br>
<span class="quotelev1">&gt;    6) make
</span><br>
<span class="quotelev1">&gt;    7) make install
</span><br>
<span class="quotelev1">&gt;    8) At the bottom of your /home/matt/.bashrc or .profile file
</span><br>
<span class="quotelev1">&gt;    put these lines:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    export PATH=/home/matt/apps/openmpi-X.Y.Z/bin:${PATH}
</span><br>
<span class="quotelev1">&gt;    export MANPATH=/home/matt/apps/openmpi-X.Y.Z/share/man:`man -w`
</span><br>
<span class="quotelev1">&gt;    export
</span><br>
<span class="quotelev1">&gt;    LD_LIBRARY_PATH=home/matt/apps/openmpi-X.Y.Z/lib:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    (If you use csh/tcsh use instead:
</span><br>
<span class="quotelev1">&gt;    setenv PATH /home/matt/apps/openmpi-X.Y.Z/bin:${PATH}
</span><br>
<span class="quotelev1">&gt;    etc)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    9) Logout and login again to freshen um the environment variables.
</span><br>
<span class="quotelev1">&gt;    10) Do &quot;which mpicc&quot;  to check that it is pointing to your newly
</span><br>
<span class="quotelev1">&gt;    installed OpenMPI.
</span><br>
<span class="quotelev1">&gt;    11) Recompile and rerun the OpenMPI test programs
</span><br>
<span class="quotelev1">&gt;    with 2, 4, 8, 16, .... processors.
</span><br>
<span class="quotelev1">&gt;    Use full path names to mpicc and to mpirun,
</span><br>
<span class="quotelev1">&gt;    if the change of PATH above doesn't work right.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ********
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    B) Nehalem is quite new hardware.
</span><br>
<span class="quotelev1">&gt;    I don't know if the Ubuntu kernel 2.6.31-16 fully supports all
</span><br>
<span class="quotelev1">&gt;    of Nehalem features, particularly hyperthreading, and NUMA,
</span><br>
<span class="quotelev1">&gt;    which are used by MPI programs.
</span><br>
<span class="quotelev1">&gt;    I am not the right person to give you advice about this.
</span><br>
<span class="quotelev1">&gt;    I googled out but couldn't find a clear information about
</span><br>
<span class="quotelev1">&gt;    minimal kernel age/requirements to have Nehalem fully supported.
</span><br>
<span class="quotelev1">&gt;    Some Nehalem owner in the list could come forward and tell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    C) On the top screenshot you sent me, please try it again
</span><br>
<span class="quotelev1">&gt;    (after you do item A) but type &quot;f&quot; and &quot;j&quot; to show the processors
</span><br>
<span class="quotelev1">&gt;    that are running each process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    D) Also, the screeshot shows 20GB of memory.
</span><br>
<span class="quotelev1">&gt;    This sounds not as a optimal memory for Nehalem,
</span><br>
<span class="quotelev1">&gt;    which tend to be 6GB, 12GB, 24GB, 48GB.
</span><br>
<span class="quotelev1">&gt;    Did you put together the system, or upgraded the memory yourself,
</span><br>
<span class="quotelev1">&gt;    of did you buy the computer as is?
</span><br>
<span class="quotelev1">&gt;    However, this should not break MPI anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    E) Answering your question:
</span><br>
<span class="quotelev1">&gt;    It is true that different flavors of MPI
</span><br>
<span class="quotelev1">&gt;    used to compile (mpicc) and run (mpiexec) a program would probably
</span><br>
<span class="quotelev1">&gt;    break right away, regardless of the number of processes.
</span><br>
<span class="quotelev1">&gt;    However, when it comes to different versions of the
</span><br>
<span class="quotelev1">&gt;    same MPI flavor (say OpenMPI 1.3.4 and OpenMPI 1.3.3)
</span><br>
<span class="quotelev1">&gt;    I am not sure it will break.
</span><br>
<span class="quotelev1">&gt;    I would guess it may run but not in a reliable way.
</span><br>
<span class="quotelev1">&gt;    Problems may appear as you stress the system with more cores, etc.
</span><br>
<span class="quotelev1">&gt;    But this is just a guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Gus Correa
</span><br>
<span class="quotelev1">&gt;    ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    Gustavo Correa
</span><br>
<span class="quotelev1">&gt;    Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt;    Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt;    ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Matthew MacManes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Interestingly the results for the connectivity_c test... works
</span><br>
<span class="quotelev1">&gt;        fine with -np &lt;8. For -np &gt;8 it works some of the time, other
</span><br>
<span class="quotelev1">&gt;        times it HANGS. I have got to believe that this is a big clue!!
</span><br>
<span class="quotelev1">&gt;        Also, when it hangs, sometimes I get the message &quot;mpirun was
</span><br>
<span class="quotelev1">&gt;        unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt;        below&quot; Note that NO nodes are shown below.   Once, I got -np 250
</span><br>
<span class="quotelev1">&gt;        to pass the connectivity test, but I was not able to replicate
</span><br>
<span class="quotelev1">&gt;        this reliable, so I'm not sure if it was a fluke, or what.  Here
</span><br>
<span class="quotelev1">&gt;        is a like to a screenshop of TOP when connectivity_c is hung
</span><br>
<span class="quotelev1">&gt;        with -np 14.. I see that 2 processes are only at 50% CPU usage..
</span><br>
<span class="quotelev1">&gt;        Hmmmm          <a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink</a>
</span><br>
<span class="quotelev1">&gt;        &lt;<a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink</a>&gt;
</span><br>
<span class="quotelev1">&gt;        &lt;<a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink</a>
</span><br>
<span class="quotelev1">&gt;        &lt;<a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        The other tests, ring_c, hello_c, as well as the cxx versions of
</span><br>
<span class="quotelev1">&gt;        these guys with with all values of -np.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Using -mca mpi-paffinity_alone 1 I get the same behavior.
</span><br>
<span class="quotelev1">&gt;        I agree that I am should worry about the mismatch between where
</span><br>
<span class="quotelev1">&gt;        the libraries are installed versus where I am telling my
</span><br>
<span class="quotelev1">&gt;        programs to look for them. Would this type of mismatch cause
</span><br>
<span class="quotelev1">&gt;        behavior like what I am seeing, i.e. working with  a small
</span><br>
<span class="quotelev1">&gt;        number of processors, but failing with larger?  It seems like a
</span><br>
<span class="quotelev1">&gt;        mismatch would have the same effect regardless of the number of
</span><br>
<span class="quotelev1">&gt;        processors used. Maybe I am mistaken. Anyway, to address this,
</span><br>
<span class="quotelev1">&gt;        which mpirun gives me /usr/local/bin/mpirun.. so to configure
</span><br>
<span class="quotelev1">&gt;        ./configure --with-mpi=/usr/local/bin/mpirun and to run
</span><br>
<span class="quotelev1">&gt;        /usr/local/bin/mpirun -np X ...  This should
</span><br>
<span class="quotelev1">&gt;        uname -a gives me: Linux macmanes 2.6.31-16-generic #52-Ubuntu
</span><br>
<span class="quotelev1">&gt;        SMP Thu Dec 3 22:07:16 UTC 2006 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        On Dec 8, 2009, at 8:50 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Hi Matthew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Please see comments/answers inline below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Matthew MacManes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                Hi Gus, Thanks for your ideas.. I have a few questions,
</span><br>
<span class="quotelev1">&gt;                and will try to answer yours in hopes of solving this!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            A simple way to test OpenMPI on your system is to run the
</span><br>
<span class="quotelev1">&gt;            test programs that come with the OpenMPI source code,
</span><br>
<span class="quotelev1">&gt;            hello_c.c, connectivity_c.c, and ring_c.c:
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Get the tarball from the OpenMPI site, gzip and untar it,
</span><br>
<span class="quotelev1">&gt;            and look for it in the &quot;examples&quot; directory.
</span><br>
<span class="quotelev1">&gt;            Compile it with /your/path/to/openmpi/bin/mpicc hello_c.c
</span><br>
<span class="quotelev1">&gt;            Run it with /your/path/to/openmpi/bin/mpiexec -np X a.out
</span><br>
<span class="quotelev1">&gt;            using X = 2, 4, 8, 16, 32, 64, ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            This will tell if your OpenMPI is functional,
</span><br>
<span class="quotelev1">&gt;            and if you can run on many Nehalem cores,
</span><br>
<span class="quotelev1">&gt;            even with oversubscription perhaps.
</span><br>
<span class="quotelev1">&gt;            It will also set the stage for further investigation of your
</span><br>
<span class="quotelev1">&gt;            actual programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                Should I worry about setting things like --num-cores
</span><br>
<span class="quotelev1">&gt;                --bind-to-cores?  This, I think, gets at your questions
</span><br>
<span class="quotelev1">&gt;                about processor affinity.. Am I right? I could not
</span><br>
<span class="quotelev1">&gt;                exactly figure out the -mca mpi-paffinity_alone stuff...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I use the simple minded -mca mpi-paffinity_alone 1.
</span><br>
<span class="quotelev1">&gt;            This is probably the easiest way to assign a process to a core.
</span><br>
<span class="quotelev1">&gt;            There more complex  ways in OpenMPI, but I haven't tried.
</span><br>
<span class="quotelev1">&gt;            Indeed, -mca mpi-paffinity_alone 1 does improve performance of
</span><br>
<span class="quotelev1">&gt;            our programs here.
</span><br>
<span class="quotelev1">&gt;            There is a chance that without it the 16 virtual cores of
</span><br>
<span class="quotelev1">&gt;            your Nehalem get confused with more than 3 processes
</span><br>
<span class="quotelev1">&gt;            (you reported that -np &gt; 3 breaks).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Did you try adding just -mca mpi-paffinity_alone 1  to
</span><br>
<span class="quotelev1">&gt;            your mpiexec command line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                1. Additional load: nope. nothing else, most of the time
</span><br>
<span class="quotelev1">&gt;                not even firefox.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Good.
</span><br>
<span class="quotelev1">&gt;            Turn off firefox, etc, to make it even better.
</span><br>
<span class="quotelev1">&gt;            Ideally, use runlevel 3, no X, like a computer cluster node,
</span><br>
<span class="quotelev1">&gt;            but this may not be required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                2. RAM: no problems apparent when monitoring through
</span><br>
<span class="quotelev1">&gt;                TOP. Interesting, I did wonder about oversubscription,
</span><br>
<span class="quotelev1">&gt;                so I tried the option --nooversubscription, but this
</span><br>
<span class="quotelev1">&gt;                gave me an error mssage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Oversubscription from your program would only happen if
</span><br>
<span class="quotelev1">&gt;            you asked for more processes than available cores, i.e.,
</span><br>
<span class="quotelev1">&gt;            -np &gt; 8 (or &quot;virtual&quot; cores, in case of Nehalem hyperthreading,
</span><br>
<span class="quotelev1">&gt;            -np &gt; 16).
</span><br>
<span class="quotelev1">&gt;            Since you have -np=4 there is no oversubscription,
</span><br>
<span class="quotelev1">&gt;            unless you have other external load (e.g. Matlab, etc),
</span><br>
<span class="quotelev1">&gt;            but you said you don't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Yet another possibility would be if your program is threaded
</span><br>
<span class="quotelev1">&gt;            (e.g. using OpenMP along with MPI), but considering what you
</span><br>
<span class="quotelev1">&gt;            said about OpenMP I would guess the programs don't use it.
</span><br>
<span class="quotelev1">&gt;            For instance, you launch the program with 4 MPI processes,
</span><br>
<span class="quotelev1">&gt;            and each process decides to start, say, 8 OpenMP threads.
</span><br>
<span class="quotelev1">&gt;            You end up with 32 threads and 8 (real) cores (or 16
</span><br>
<span class="quotelev1">&gt;            hyperthreaded
</span><br>
<span class="quotelev1">&gt;            ones on Nehalem).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            What else does top say?
</span><br>
<span class="quotelev1">&gt;            Any hog processes (memory- or CPU-wise)
</span><br>
<span class="quotelev1">&gt;            besides your program processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                3. I have not tried other MPI flavors.. Ive been
</span><br>
<span class="quotelev1">&gt;                speaking to the authors of the programs, and they are
</span><br>
<span class="quotelev1">&gt;                both using openMPI.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I was not trying to convince you to use another MPI.
</span><br>
<span class="quotelev1">&gt;            I use MPICH2 also, but OpenMPI reigns here.
</span><br>
<span class="quotelev1">&gt;            The idea or trying it with MPICH2 was just to check whether
</span><br>
<span class="quotelev1">&gt;            OpenMPI
</span><br>
<span class="quotelev1">&gt;            is causing the problem, but I don't think it is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                4. I don't think that this is a problem, as I'm
</span><br>
<span class="quotelev1">&gt;                specifying --with-mpi=/usr/bin/...  when I compile the
</span><br>
<span class="quotelev1">&gt;                programs. Is there any other way to be sure that this is
</span><br>
<span class="quotelev1">&gt;                not a problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Hmmm ....
</span><br>
<span class="quotelev1">&gt;            I don't know about your Ubuntu (we have CentOS and Fedora on
</span><br>
<span class="quotelev1">&gt;            various
</span><br>
<span class="quotelev1">&gt;            machines).
</span><br>
<span class="quotelev1">&gt;            However, most Linux distributions come with their MPI flavors,
</span><br>
<span class="quotelev1">&gt;            and so do compilers, etc.
</span><br>
<span class="quotelev1">&gt;            Often times they install these goodies in unexpected places,
</span><br>
<span class="quotelev1">&gt;            and this has caused a lot of frustration.
</span><br>
<span class="quotelev1">&gt;            There are tons of postings on this list that eventually
</span><br>
<span class="quotelev1">&gt;            boiled down to mismatched versions of MPI in unexpected places.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            The easy way is to use full path names to compile and to run.
</span><br>
<span class="quotelev1">&gt;            Something like this:
</span><br>
<span class="quotelev1">&gt;            /my/openmpi/bin/mpicc on your program configuration script),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            and something like this
</span><br>
<span class="quotelev1">&gt;            /my/openmpi/bin/mpiexec -np  ... bla, bla ...
</span><br>
<span class="quotelev1">&gt;            when you submit the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            You can check your version with &quot;which mpicc&quot;, &quot;which mpiexec&quot;,
</span><br>
<span class="quotelev1">&gt;            and (perhaps using full path names) with
</span><br>
<span class="quotelev1">&gt;            &quot;ompi_info&quot;, &quot;mpicc --showme&quot;, &quot;mpiexec --help&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                5. I had not been, and you could see some shuffling when
</span><br>
<span class="quotelev1">&gt;                monitoring the load on specific processors. I have tried
</span><br>
<span class="quotelev1">&gt;                to use --bind-to-cores to deal with this. I don't
</span><br>
<span class="quotelev1">&gt;                understand how to use the -mca options you asked about.
</span><br>
<span class="quotelev1">&gt;                6. I am using Ubuntu 9.10. gcc 4.4.1 and g++  4.4.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I am afraid I won't be of help, because I don't have Nehalem.
</span><br>
<span class="quotelev1">&gt;            However, I read about Nehalem requiring quite recent kernels
</span><br>
<span class="quotelev1">&gt;            to get all of its features working right.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            What is the output of &quot;uname -a&quot;?
</span><br>
<span class="quotelev1">&gt;            This will tell the kernel version, etc.
</span><br>
<span class="quotelev1">&gt;            Other list subscribers may give you a suggestion if you post the
</span><br>
<span class="quotelev1">&gt;            information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                MyBayes is a for bayesian phylogenetics:
</span><br>
<span class="quotelev1">&gt;                 <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a>
</span><br>
<span class="quotelev1">&gt;                ABySS: is a program for assembly of DNA sequence data:
</span><br>
<span class="quotelev1">&gt;                <a href="http://www.bcgsc.ca/platform/bioinfo/software/abyss">http://www.bcgsc.ca/platform/bioinfo/software/abyss</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Thanks for the links!
</span><br>
<span class="quotelev1">&gt;            I had found the MrBayes link.
</span><br>
<span class="quotelev1">&gt;            I eventually found what your ABySS was about, but no links.
</span><br>
<span class="quotelev1">&gt;            Amazing that it is about DNA/gene sequencing.
</span><br>
<span class="quotelev1">&gt;            Our abyss here is the deep ocean ... :)
</span><br>
<span class="quotelev1">&gt;            Abysmal difference!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    Do the programs mix MPI (message passing) with
</span><br>
<span class="quotelev1">&gt;                    OpenMP (threads)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                Im honestly not sure what this means..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Some programs mix the two.
</span><br>
<span class="quotelev1">&gt;            OpenMP only works in a shared memory environment (e.g. a single
</span><br>
<span class="quotelev1">&gt;            computer like yours), whereas MPI can use both shared memory
</span><br>
<span class="quotelev1">&gt;            and work across a network (e.g. in a cluster).
</span><br>
<span class="quotelev1">&gt;            There are other differences too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Unlikely that you have this hybrid type of parallel program,
</span><br>
<span class="quotelev1">&gt;            otherwise there would be some reference to OpenMP
</span><br>
<span class="quotelev1">&gt;            on the very program configuration files, program
</span><br>
<span class="quotelev1">&gt;            documentation, etc.
</span><br>
<span class="quotelev1">&gt;            Also, in general the configuration scripts of these hybrid
</span><br>
<span class="quotelev1">&gt;            programs can turn on MPI only, or OpenMP only, or both,
</span><br>
<span class="quotelev1">&gt;            depending on how you configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Even to compile with OpenMP you would need a proper compiler
</span><br>
<span class="quotelev1">&gt;            flag, but that one might be hidden in a Makefile too, making
</span><br>
<span class="quotelev1">&gt;            a bit hard to find. &quot;grep -n mp Makefile&quot; may give a clue.
</span><br>
<span class="quotelev1">&gt;            Anything on the documentation that mentions threads or OpenMP?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            FYI, here is OpenMP:
</span><br>
<span class="quotelev1">&gt;            <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                Thanks for all your help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;             &gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Well, so far it didn't really help. :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            But let's hope to find a clue,
</span><br>
<span class="quotelev1">&gt;            maybe with a little help of
</span><br>
<span class="quotelev1">&gt;            our list subscriber friends.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Gus Correa
</span><br>
<span class="quotelev1">&gt;            ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;            Gustavo Correa
</span><br>
<span class="quotelev1">&gt;            Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt;            Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt;            ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    Hi Matthew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    More guesses/questions than anything else:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    1) Is there any additional load on this machine?
</span><br>
<span class="quotelev1">&gt;                    We had problems like that (on different machines) when
</span><br>
<span class="quotelev1">&gt;                    users start listening to streaming video, doing
</span><br>
<span class="quotelev1">&gt;                    Matlab calculations,
</span><br>
<span class="quotelev1">&gt;                    etc, while the MPI programs are running.
</span><br>
<span class="quotelev1">&gt;                    This tends to oversubscribe the cores, and may lead
</span><br>
<span class="quotelev1">&gt;                    to crashes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    2) RAM:
</span><br>
<span class="quotelev1">&gt;                    Can you monitor the RAM usage through &quot;top&quot;?
</span><br>
<span class="quotelev1">&gt;                    (I presume you are on Linux.)
</span><br>
<span class="quotelev1">&gt;                    It may show unexpected memory leaks, if they exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    On &quot;top&quot;, type &quot;1&quot; (one) see all cores, type &quot;f&quot;
</span><br>
<span class="quotelev1">&gt;                    then &quot;j&quot;
</span><br>
<span class="quotelev1">&gt;                    to see the core number associated to each process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    3) Do the programs work right with other MPI flavors
</span><br>
<span class="quotelev1">&gt;                    (e.g. MPICH2)?
</span><br>
<span class="quotelev1">&gt;                    If not, then it is not OpenMPI's fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    4) Any possibility that the MPI versions/flavors of
</span><br>
<span class="quotelev1">&gt;                    mpicc and
</span><br>
<span class="quotelev1">&gt;                    mpirun that you are using to compile and launch the
</span><br>
<span class="quotelev1">&gt;                    program are not the
</span><br>
<span class="quotelev1">&gt;                    same?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    5) Are you setting processor affinity on mpiexec?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    mpiexec -mca mpi_paffinity_alone 1 -np ... bla, bla ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    Context switching across the cores may also cause
</span><br>
<span class="quotelev1">&gt;                    trouble, I suppose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    6) Which Linux are you using (uname -a)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    On other mailing lists I read reports that only
</span><br>
<span class="quotelev1">&gt;                    quite recent kernels
</span><br>
<span class="quotelev1">&gt;                    support all the Intel Nehalem processor features well.
</span><br>
<span class="quotelev1">&gt;                    I don't have Nehalem, I can't help here,
</span><br>
<span class="quotelev1">&gt;                    but the information may be useful
</span><br>
<span class="quotelev1">&gt;                    for other list subscribers to help you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    As for the programs, some programs require specific
</span><br>
<span class="quotelev1">&gt;                    setup,
</span><br>
<span class="quotelev1">&gt;                    (and even specific compilation) when the number of
</span><br>
<span class="quotelev1">&gt;                    MPI processes
</span><br>
<span class="quotelev1">&gt;                    vary.
</span><br>
<span class="quotelev1">&gt;                    It may help if you tell us a link to the program sites.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    Baysian statistics is not totally out of our business,
</span><br>
<span class="quotelev1">&gt;                    but phylogenetic genetic trees is not really my league,
</span><br>
<span class="quotelev1">&gt;                    hence forgive me any bad guesses, please,
</span><br>
<span class="quotelev1">&gt;                    but would it need specific compilation or a different
</span><br>
<span class="quotelev1">&gt;                    set of input parameters to run correctly on a different
</span><br>
<span class="quotelev1">&gt;                    number of processors?
</span><br>
<span class="quotelev1">&gt;                    Do the programs mix MPI (message passing) with
</span><br>
<span class="quotelev1">&gt;                    OpenMP (threads)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    I found this MrBayes, which seems to do the above:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    <a href="http://mrbayes.csit.fsu.edu/">http://mrbayes.csit.fsu.edu/</a>
</span><br>
<span class="quotelev1">&gt;                    <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    As for the ABySS, what is it, where can it be found?
</span><br>
<span class="quotelev1">&gt;                    Doesn't look like a deep ocean circulation model, as
</span><br>
<span class="quotelev1">&gt;                    the name suggest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    My $0.02
</span><br>
<span class="quotelev1">&gt;                    Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                _______________________________________________
</span><br>
<span class="quotelev1">&gt;                users mailing list
</span><br>
<span class="quotelev1">&gt;                users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            _______________________________________________
</span><br>
<span class="quotelev1">&gt;            users mailing list
</span><br>
<span class="quotelev1">&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        _________________________________
</span><br>
<span class="quotelev1">&gt;        Matthew MacManes
</span><br>
<span class="quotelev1">&gt;        PhD Candidate
</span><br>
<span class="quotelev1">&gt;        University of California- Berkeley
</span><br>
<span class="quotelev1">&gt;        Museum of Vertebrate Zoology
</span><br>
<span class="quotelev1">&gt;        Phone: 510-495-5833
</span><br>
<span class="quotelev1">&gt;        Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
</span><br>
<span class="quotelev1">&gt;        Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        users mailing list
</span><br>
<span class="quotelev1">&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    users mailing list
</span><br>
<span class="quotelev1">&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_________________________________
<br>
Matthew MacManes
<br>
PhD Candidate
<br>
University of California- Berkeley
<br>
Museum of Vertebrate Zoology
<br>
Phone: 510-495-5833
<br>
Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
<br>
Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
<br>
<p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11501/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11502.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11500.php">Mattijs Janssens: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11499.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11509.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)	RESOLVED FOR NOW"</a>
<li><strong>Reply:</strong> <a href="11509.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)	RESOLVED FOR NOW"</a>
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
