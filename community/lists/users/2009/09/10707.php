<?
$subject_val = "Re: [OMPI users] Program hangs when run in the remote host ...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 04:24:36 2009" -->
<!-- isoreceived="20090921082436" -->
<!-- sent="Mon, 21 Sep 2009 13:54:30 +0530" -->
<!-- isosent="20090921082430" -->
<!-- name="souvik bhattacherjee" -->
<!-- email="souvik99_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs when run in the remote host ..." -->
<!-- id="b568ee700909210124s582ce742y7086df51054873ca_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0D7A5383-F8F4-46FD-99AC-74856EF17784_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-09-21 04:24:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10708.php">Lenny Verkhovsky: "Re: [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="10706.php">Pavel Shamis (Pasha): "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>In reply to:</strong> <a href="10696.php">Ralph Castain: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10886.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10886.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Ralph suggested, I *reversed the order of my PATH settings*:
<br>
<p>This is what I it shows:
<br>
<p>$ echo $PATH
<br>
/usr/local/openmpi-1.3.3/bin/:/usr/bin:/bin:/usr/local/bin:/usr/X11R6/bin/:/usr/games:/usr/lib/qt4/bin:/usr/bin:/opt/kde3/bin
<br>
<p>$ echo $LD_LIBRARY_PATH
<br>
/usr/local/openmpi-1.3.3/lib/
<br>
<p>Moreover, I checked that there were *NO* system supplied versions of OMPI,
<br>
previously installed. ( I did install MPICH2 earlier, but I had removed the
<br>
binaries and the related files). This is because,
<br>
<p>$ locate mpicc
<br>
/home/souvik/software/openmpi-1.3.3/build/ompi/contrib/vt/wrappers/mpicc-vt-wrapper-data.txt
<br>
/home/souvik/software/openmpi-1.3.3/build/ompi/tools/wrappers/mpicc-wrapper-data.txt
<br>
/home/souvik/software/openmpi-1.3.3/build/ompi/tools/wrappers/mpicc.1
<br>
/home/souvik/software/openmpi-1.3.3/contrib/platform/win32/ConfigFiles/mpicc-wrapper-data.txt.cmake
<br>
/home/souvik/software/openmpi-1.3.3/ompi/contrib/vt/wrappers/mpicc-vt-wrapper-data.txt
<br>
/home/souvik/software/openmpi-1.3.3/ompi/contrib/vt/wrappers/
<br>
mpicc-vt-wrapper-data.txt.in
<br>
/home/souvik/software/openmpi-1.3.3/ompi/tools/wrappers/mpicc-wrapper-data.txt
<br>
/home/souvik/software/openmpi-1.3.3/ompi/tools/wrappers/
<br>
mpicc-wrapper-data.txt.in
<br>
/usr/local/openmpi-1.3.3/bin/mpicc
<br>
/usr/local/openmpi-1.3.3/bin/mpicc-vt
<br>
/usr/local/openmpi-1.3.3/share/man/man1/mpicc.1
<br>
/usr/local/openmpi-1.3.3/share/openmpi/mpicc-vt-wrapper-data.txt
<br>
/usr/local/openmpi-1.3.3/share/openmpi/mpicc-wrapper-data.txt
<br>
<p>does not show the occurrence of mpicc in any directory related to MPICH2.
<br>
<p>The results are same with mpirun
<br>
<p>$ locate mpirun
<br>
/home/souvik/software/openmpi-1.3.3/build/ompi/tools/ortetools/mpirun.1
<br>
/home/souvik/software/openmpi-1.3.3/ompi/runtime/mpiruntime.h
<br>
/usr/local/openmpi-1.3.3/bin/mpirun
<br>
/usr/local/openmpi-1.3.3/share/man/man1/mpirun.1
<br>
<p>*These tests were done both on ict1 and ict2*.
<br>
<p>I performed another test which probably proves that the executable finds the
<br>
required files on the remote host. The program was run from ict2.
<br>
<p>$ cd /home/souvik/software/openmpi-1.3.3/examples/
<br>
<p>$ mpirun -np 4 --host ict2,ict1 hello_c
<br>
bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 28023) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>$ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 4 --host ict2,ict1 hello_c
<br>
<p>*This command-line statement as usual does not produce any output. On
<br>
pressing Crtl+C, the following output occurs*
<br>
<p>^Cmpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ict1 - daemon did not report back when launched
<br>
<p>$
<br>
<p>Also, doing *top *does not show any *mpirun* &amp; *hello_c* process running in
<br>
both the hosts. However, running hello_c in a single host say, ict2 does
<br>
show *mpirun* &amp; *hello_c* in the process list.
<br>
<p><p><p><p><p>On Sat, Sep 19, 2009 at 8:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; One thing that flags my attention. In your PATH definition, you put $PATH
</span><br>
<span class="quotelev1">&gt; ahead of your OMPI 1.3.3 installation. Thus, if there are any system
</span><br>
<span class="quotelev1">&gt; supplied versions of OMPI hanging around (and there often are), they will be
</span><br>
<span class="quotelev1">&gt; executed instead of your new installation.
</span><br>
<span class="quotelev1">&gt; You might try reversing that order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2009, at 7:33 AM, souvik bhattacherjee wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gus (and all OpenMPI users),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your interest in my problem. However, the points you had raised
</span><br>
<span class="quotelev1">&gt; earlier in your mails, seems to me that, I had already taken care of them. I
</span><br>
<span class="quotelev1">&gt; had enlisted them below pointwise. Your comments are rewritten in *RED *and
</span><br>
<span class="quotelev1">&gt; my replies in *BLACK.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) As you have mentioned: &quot;*I would guess you only installed OpenMPI only
</span><br>
<span class="quotelev1">&gt; on ict1, not on ict2*&quot;. However, I had mentioned initially: &quot;*I had
</span><br>
<span class="quotelev1">&gt; installed openmpi-1.3.3 separately on two of my machines ict1 and ict2*&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Next you said: &quot;*I am guessing this, because you used a prefix under
</span><br>
<span class="quotelev1">&gt; /usr/local*&quot;. However, I had installed them under:
</span><br>
<span class="quotelev1">&gt; *$ mkdir build
</span><br>
<span class="quotelev1">&gt; $ cd build
</span><br>
<span class="quotelev1">&gt; $ ../configure --prefix=/usr/local/openmpi-1.3.3/
</span><br>
<span class="quotelev1">&gt; # make all install*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Next as you pointed out: &quot;* ...not a typical name of an NFS mounted
</span><br>
<span class="quotelev1">&gt; directory. Using an NFS mounted directory is another way to make OpenMPI
</span><br>
<span class="quotelev1">&gt; visible to all nodes *&quot;.
</span><br>
<span class="quotelev1">&gt; Let me tell you once again, that I am not going for an NFS installation as
</span><br>
<span class="quotelev1">&gt; the first point in this list makes it clear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) In your next mail: &quot; *If you can ssh passwordless from ict1 to ict2
</span><br>
<span class="quotelev1">&gt; *and* vice versa *&quot;. Again as I had mentioned earlier &quot; *As a
</span><br>
<span class="quotelev1">&gt; prerequisite, I can ssh between them without a password or passphrase ( I
</span><br>
<span class="quotelev1">&gt; did not supply the passphrase at all ).* &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5) Further as you said: &quot; *If your /etc/hosts file on *both* machines list
</span><br>
<span class="quotelev1">&gt; ict1 and ict2
</span><br>
<span class="quotelev1">&gt; and their IP addresses *&quot;. Let me mention here that, these things are
</span><br>
<span class="quotelev1">&gt; already very well taken care of.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6) Finally as you said: &quot; *In case you have a /home directory on each
</span><br>
<span class="quotelev1">&gt; machine (i.e. /home is not NFS mounted) if your .bashrc files on *both*
</span><br>
<span class="quotelev1">&gt; machines set the PATH
</span><br>
<span class="quotelev1">&gt; and LD_LIBRARY_PATH to point to the OpenMPI directory. *&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again as I had mentioned previously,  *Also .bash_profile and .bashrc had
</span><br>
<span class="quotelev1">&gt; the following lines written into them:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH=$PATH:/usr/local/openmpi-1.3.3/bin/
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.3.3/lib/*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; ***************************************************************************************************************
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; As an additional bit of information, (which might assist you in the
</span><br>
<span class="quotelev1">&gt; investigation) I had used *Mandriva 2009.1* on all of my systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope, this will help you. Eagerly awaiting a response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/18/09, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Souvik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also worth checking:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) If you can ssh passwordless from ict1 to ict2 *and* vice versa.
</span><br>
<span class="quotelev2">&gt;&gt; 2) If your /etc/hosts file on *both* machines list ict1 and ict2
</span><br>
<span class="quotelev2">&gt;&gt; and their IP addresses.
</span><br>
<span class="quotelev2">&gt;&gt; 3) In case you have a /home directory on each machine (i.e. /home is
</span><br>
<span class="quotelev2">&gt;&gt; not NFS mounted) if your .bashrc files on *both* machines set the PATH
</span><br>
<span class="quotelev2">&gt;&gt; and LD_LIBRARY_PATH to point to the OpenMPI directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Souvik
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would guess you only installed OpenMPI only on ict1, not on ict2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If that is the case you won't have the required  OpenMPI libraries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on ict:/usr/local, and the job won't run on ict2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am guessing this, because you used a prefix under /usr/local,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which tends to be a &quot;per machine&quot; directory,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not a typical name of an NFS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mounted directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using an NFS mounted directory is another way to make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI visible to all nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See this FAQ:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; souvik bhattacherjee wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Myself quite new to Open MPI. Recently, I had installed openmpi-1.3.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; separately on two of my machines ict1 and ict2. These machines are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dual-socket quad-core (Intel Xeon E5410) i.e. each having 8 processors and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are connected by Gigabit ethernet switch. As a prerequisite, I can ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; between them without a password or passphrase ( I did not supply the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passphrase at all ). Thereafter,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ cd openmpi-1.3.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mkdir build
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ cd build
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ../configure --prefix=/usr/local/openmpi-1.3.3/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then as a root user,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # make all install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also .bash_profile and .bashrc had the following lines written into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=$PATH:/usr/local/openmpi-1.3.3/bin/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.3.3/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ cd ../examples/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 2 --host ict1 hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   hello_c: error while loading shared libraries: libmpi.so.0: cannot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open shared object file: No suchfile or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   hello_c: error while loading shared libraries: libmpi.so.0: cannot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open shared object file: No suchfile or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1 hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Hello, world, I am 1 of 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Hello, world, I am 0 of 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But the program hangs when ....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1,ict2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  This statement does not produce any output. Doing top on either
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machines does not show any hello_c running. However, when I press Ctrl+C the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following output appears
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        ict2 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The same thing repeats itself when hello_c is run from ict2. Since, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program does not produce any error, it becomes difficult to locate where I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; might have gone wrong.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did anyone of you encounter this problem or anything similar ? Any help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would be much appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Souvik
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; Souvik
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
Souvik Bhattacherjee
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10707/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10708.php">Lenny Verkhovsky: "Re: [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="10706.php">Pavel Shamis (Pasha): "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>In reply to:</strong> <a href="10696.php">Ralph Castain: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10886.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10886.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
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
