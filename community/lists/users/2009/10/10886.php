<?
$subject_val = "Re: [OMPI users] Program hangs when run in the remote host ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 02:52:52 2009" -->
<!-- isoreceived="20091006065252" -->
<!-- sent="Tue, 6 Oct 2009 12:22:47 +0530" -->
<!-- isosent="20091006065247" -->
<!-- name="souvik bhattacherjee" -->
<!-- email="souvik99_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs when run in the remote host ..." -->
<!-- id="b568ee700910052352t744385e2w3d91aedf1e6f6304_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b568ee700909210124s582ce742y7086df51054873ca_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program hangs when run in the remote host ...<br>
<strong>From:</strong> souvik bhattacherjee (<em>souvik99_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-06 02:52:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10887.php">Ashley Pittman: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Previous message:</strong> <a href="10885.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10707.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10887.php">Ashley Pittman: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="10887.php">Ashley Pittman: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Finally, it seems I'm able to run my program on a remote host.
<br>
<p>The problem was due to some firewall settings. Modifying the firewall ACCEPT
<br>
policy as shown below, did the work.
<br>
<p># /etc/init.d/ip6tables stop
<br>
Resetting built-in chains to the default ACCEPT policy:         [  OK  ]
<br>
# /etc/init.d/iptables stop
<br>
Resetting built-in chains to the default ACCEPT policy:         [  OK  ]
<br>
<p>Another related query:
<br>
<p>Let me mention once again, I had installed openmpi-1.3.3 separately on two
<br>
of my machines ict1 and ict2. Now when I issue the following command :
<br>
<p>$ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 4 --host ict2,ict1 hello_c
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not find
<br>
an executable:
<br>
<p>Executable: hello_c
<br>
Node: ict1
<br>
<p>while attempting to start process rank 1.
<br>
--------------------------------------------------------------------------
<br>
<p>So, I did a *make* on the examples directory on ict1 to generate the
<br>
executable (One can also copy the executable from ict2 to ict1 in the same
<br>
directory).
<br>
<p>Now, it seems to run fine.
<br>
<p>$ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 4 --host ict2,ict1 hello_c
<br>
Hello, world, I am 0 of 8
<br>
Hello, world, I am 2 of 8
<br>
Hello, world, I am 4 of 8
<br>
Hello, world, I am 6 of 8
<br>
Hello, world, I am 5 of 8
<br>
Hello, world, I am 3 of 8
<br>
Hello, world, I am 7 of 8
<br>
Hello, world, I am 1 of 8
<br>
$
<br>
<p>This implies that one has to copy the executables in the remote host each
<br>
time one requires to run a program which is different from the previous one.
<br>
<p>Is the implication correct or is there some way around.
<br>
<p>Thanks,
<br>
<p><p>On Mon, Sep 21, 2009 at 1:54 PM, souvik bhattacherjee &lt;souvik99_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; As Ralph suggested, I *reversed the order of my PATH settings*:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is what I it shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ echo $PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/bin/:/usr/bin:/bin:/usr/local/bin:/usr/X11R6/bin/:/usr/games:/usr/lib/qt4/bin:/usr/bin:/opt/kde3/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/lib/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, I checked that there were *NO* system supplied versions of OMPI,
</span><br>
<span class="quotelev1">&gt; previously installed. ( I did install MPICH2 earlier, but I had removed the
</span><br>
<span class="quotelev1">&gt; binaries and the related files). This is because,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ locate mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/souvik/software/openmpi-1.3.3/build/ompi/contrib/vt/wrappers/mpicc-vt-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/souvik/software/openmpi-1.3.3/build/ompi/tools/wrappers/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; /home/souvik/software/openmpi-1.3.3/build/ompi/tools/wrappers/mpicc.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/souvik/software/openmpi-1.3.3/contrib/platform/win32/ConfigFiles/mpicc-wrapper-data.txt.cmake
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/souvik/software/openmpi-1.3.3/ompi/contrib/vt/wrappers/mpicc-vt-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; /home/souvik/software/openmpi-1.3.3/ompi/contrib/vt/wrappers/
</span><br>
<span class="quotelev1">&gt; mpicc-vt-wrapper-data.txt.in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/souvik/software/openmpi-1.3.3/ompi/tools/wrappers/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; /home/souvik/software/openmpi-1.3.3/ompi/tools/wrappers/
</span><br>
<span class="quotelev1">&gt; mpicc-wrapper-data.txt.in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/bin/mpicc-vt
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/share/man/man1/mpicc.1
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/share/openmpi/mpicc-vt-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/share/openmpi/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does not show the occurrence of mpicc in any directory related to MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The results are same with mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ locate mpirun
</span><br>
<span class="quotelev1">&gt; /home/souvik/software/openmpi-1.3.3/build/ompi/tools/ortetools/mpirun.1
</span><br>
<span class="quotelev1">&gt; /home/souvik/software/openmpi-1.3.3/ompi/runtime/mpiruntime.h
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/bin/mpirun
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/share/man/man1/mpirun.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *These tests were done both on ict1 and ict2*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I performed another test which probably proves that the executable finds
</span><br>
<span class="quotelev1">&gt; the required files on the remote host. The program was run from ict2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cd /home/souvik/software/openmpi-1.3.3/examples/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 --host ict2,ict1 hello_c
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 28023) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 4 --host ict2,ict1 hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *This command-line statement as usual does not produce any output. On
</span><br>
<span class="quotelev1">&gt; pressing Crtl+C, the following output occurs*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         ict1 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, doing *top *does not show any *mpirun* &amp; *hello_c* process running
</span><br>
<span class="quotelev1">&gt; in both the hosts. However, running hello_c in a single host say, ict2 does
</span><br>
<span class="quotelev1">&gt; show *mpirun* &amp; *hello_c* in the process list.
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
<span class="quotelev1">&gt; On Sat, Sep 19, 2009 at 8:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One thing that flags my attention. In your PATH definition, you put $PATH
</span><br>
<span class="quotelev2">&gt;&gt; ahead of your OMPI 1.3.3 installation. Thus, if there are any system
</span><br>
<span class="quotelev2">&gt;&gt; supplied versions of OMPI hanging around (and there often are), they will be
</span><br>
<span class="quotelev2">&gt;&gt; executed instead of your new installation.
</span><br>
<span class="quotelev2">&gt;&gt; You might try reversing that order.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 19, 2009, at 7:33 AM, souvik bhattacherjee wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus (and all OpenMPI users),
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your interest in my problem. However, the points you had raised
</span><br>
<span class="quotelev2">&gt;&gt; earlier in your mails, seems to me that, I had already taken care of them. I
</span><br>
<span class="quotelev2">&gt;&gt; had enlisted them below pointwise. Your comments are rewritten in *RED *and
</span><br>
<span class="quotelev2">&gt;&gt; my replies in *BLACK.*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) As you have mentioned: &quot;*I would guess you only installed OpenMPI only
</span><br>
<span class="quotelev2">&gt;&gt; on ict1, not on ict2*&quot;. However, I had mentioned initially: &quot;*I had
</span><br>
<span class="quotelev2">&gt;&gt; installed openmpi-1.3.3 separately on two of my machines ict1 and ict2*&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Next you said: &quot;*I am guessing this, because you used a prefix under
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local*&quot;. However, I had installed them under:
</span><br>
<span class="quotelev2">&gt;&gt; *$ mkdir build
</span><br>
<span class="quotelev2">&gt;&gt; $ cd build
</span><br>
<span class="quotelev2">&gt;&gt; $ ../configure --prefix=/usr/local/openmpi-1.3.3/
</span><br>
<span class="quotelev2">&gt;&gt; # make all install*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) Next as you pointed out: &quot;* ...not a typical name of an NFS mounted
</span><br>
<span class="quotelev2">&gt;&gt; directory. Using an NFS mounted directory is another way to make OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; visible to all nodes *&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Let me tell you once again, that I am not going for an NFS installation as
</span><br>
<span class="quotelev2">&gt;&gt; the first point in this list makes it clear.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) In your next mail: &quot; *If you can ssh passwordless from ict1 to ict2
</span><br>
<span class="quotelev2">&gt;&gt; *and* vice versa *&quot;. Again as I had mentioned earlier &quot; *As a
</span><br>
<span class="quotelev2">&gt;&gt; prerequisite, I can ssh between them without a password or passphrase ( I
</span><br>
<span class="quotelev2">&gt;&gt; did not supply the passphrase at all ).* &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5) Further as you said: &quot; *If your /etc/hosts file on *both* machines
</span><br>
<span class="quotelev2">&gt;&gt; list ict1 and ict2
</span><br>
<span class="quotelev2">&gt;&gt; and their IP addresses *&quot;. Let me mention here that, these things are
</span><br>
<span class="quotelev2">&gt;&gt; already very well taken care of.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6) Finally as you said: &quot; *In case you have a /home directory on each
</span><br>
<span class="quotelev2">&gt;&gt; machine (i.e. /home is not NFS mounted) if your .bashrc files on *both*
</span><br>
<span class="quotelev2">&gt;&gt; machines set the PATH
</span><br>
<span class="quotelev2">&gt;&gt; and LD_LIBRARY_PATH to point to the OpenMPI directory. *&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again as I had mentioned previously,  *Also .bash_profile and .bashrc had
</span><br>
<span class="quotelev2">&gt;&gt; the following lines written into them:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH=$PATH:/usr/local/openmpi-1.3.3/bin/
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.3.3/lib/*
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; ***************************************************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; As an additional bit of information, (which might assist you in the
</span><br>
<span class="quotelev2">&gt;&gt; investigation) I had used *Mandriva 2009.1* on all of my systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope, this will help you. Eagerly awaiting a response.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/18/09, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Souvik
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also worth checking:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) If you can ssh passwordless from ict1 to ict2 *and* vice versa.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) If your /etc/hosts file on *both* machines list ict1 and ict2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and their IP addresses.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) In case you have a /home directory on each machine (i.e. /home is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not NFS mounted) if your .bashrc files on *both* machines set the PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and LD_LIBRARY_PATH to point to the OpenMPI directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Souvik
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would guess you only installed OpenMPI only on ict1, not on ict2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If that is the case you won't have the required  OpenMPI libraries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on ict:/usr/local, and the job won't run on ict2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am guessing this, because you used a prefix under /usr/local,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which tends to be a &quot;per machine&quot; directory,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not a typical name of an NFS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mounted directory.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Using an NFS mounted directory is another way to make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI visible to all nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; See this FAQ:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope this helps,
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
<span class="quotelev4">&gt;&gt;&gt;&gt; souvik bhattacherjee wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Myself quite new to Open MPI. Recently, I had installed openmpi-1.3.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; separately on two of my machines ict1 and ict2. These machines are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dual-socket quad-core (Intel Xeon E5410) i.e. each having 8 processors and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are connected by Gigabit ethernet switch. As a prerequisite, I can ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; between them without a password or passphrase ( I did not supply the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; passphrase at all ). Thereafter,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ cd openmpi-1.3.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mkdir build
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ cd build
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ ../configure --prefix=/usr/local/openmpi-1.3.3/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then as a root user,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # make all install
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Also .bash_profile and .bashrc had the following lines written into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; them:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PATH=$PATH:/usr/local/openmpi-1.3.3/bin/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.3.3/lib/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ cd ../examples/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ make
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 --host ict1 hello_c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   hello_c: error while loading shared libraries: libmpi.so.0: cannot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; open shared object file: No suchfile or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   hello_c: error while loading shared libraries: libmpi.so.0: cannot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; open shared object file: No suchfile or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1 hello_c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But the program hangs when ....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1,ict2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hello_c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  This statement does not produce any output. Doing top on either
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; machines does not show any hello_c running. However, when I press Ctrl+C the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; following output appears
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        ict2 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The same thing repeats itself when hello_c is run from ict2. Since, the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program does not produce any error, it becomes difficult to locate where I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; might have gone wrong.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Did anyone of you encounter this problem or anything similar ? Any help
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would be much appreciated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Souvik
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Souvik
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Souvik Bhattacherjee
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Souvik Bhattacherjee
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10886/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10887.php">Ashley Pittman: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Previous message:</strong> <a href="10885.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10707.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10887.php">Ashley Pittman: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="10887.php">Ashley Pittman: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
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
