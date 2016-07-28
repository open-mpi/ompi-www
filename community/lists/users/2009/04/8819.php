<?
$subject_val = "Re: [OMPI users] Fwd:  ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 12:28:28 2009" -->
<!-- isoreceived="20090407162828" -->
<!-- sent="Tue, 07 Apr 2009 12:28:19 -0400" -->
<!-- isosent="20090407162819" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd:  ssh MPi and program tests" -->
<!-- id="49DB7F23.9080909_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="b87c422a0904070708i341a3722q74627687ac404859_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd:  ssh MPi and program tests<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 12:28:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8820.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8818.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8809.php">Francesco Pietra: "[OMPI users] Fwd:  ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8834.php">Marco: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Francesco
<br>
<p>Sorry, I was out of the loop, doing some real work ... :)
<br>
Jody and Terry already gave you great advice (as they always do),
<br>
and got you moving in the right direction, which is great news!
<br>
<p>More comments below.
<br>
<p>I think we need to cut this message short,
<br>
for good mailing list etiquette.
<br>
I trimmed it a bit but it is still too long.
<br>
Or you can open a new thread when you try Amber (was it Amber?) again.
<br>
<p>Francesco Pietra wrote:
<br>
<span class="quotelev1">&gt; Hi Gustavo:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;I feel myself stupid enough in this circumstance.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Oh, well, the folks on the list
<br>
for sure didn't want you to feel this way.
<br>
We are always learning something.
<br>
<p><span class="quotelev1">&gt; That was the case. Adjusted as indicated by Jody, the connectivity
</span><br>
<span class="quotelev1">&gt; test passed and the hello test:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev1">&gt;                           1 of 4
</span><br>
<span class="quotelev1">&gt;                           2 of 4
</span><br>
<span class="quotelev1">&gt;                           3 of 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Combine with all other investigations, the installation of openmpi
</span><br>
<span class="quotelev1">&gt; 1.3.1 is correct.
</span><br>
<p>Great, with Jody's help now you know for sure that OpenMPI is sane,
<br>
and so is the mpirun launching mechanism.
<br>
<p>Now, I would guess you ran it in a single host,
<br>
with four processes,
<br>
something like
<br>
&quot;mpirun -host host1 -n 4 hello&quot;
<br>
right?
<br>
MPI is highly dependent on the mpirun command and options.
<br>
Hence, it would help us help you,
<br>
if you send the mpirun command you used as well.
<br>
<p>Are you happy with running on a single host,
<br>
or does your Amber program require more computer power, more than one host?
<br>
If it does,
<br>
and if you want to test the connection across the two AMD64 machines,
<br>
you need to run again with the two hosts.
<br>
Something like this:
<br>
<p>&quot;mpirun -host host1,host2 -n 8 hello&quot;
<br>
<p>With the appropriate names/IP addresses for host1, and host2, of course.
<br>
<p>Does this work for you?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks a lot for your lesson
</span><br>
<p>Not trying to lecture you, just to help you get started.
<br>
The combination of MPI, network environment, etc, can be daunting in the
<br>
beginning, and I and most people on the list experienced the same
<br>
difficulties you are facing at some point.
<br>
Somebody helped us
<br>
(I continue to get help from mailing lists and
<br>
their knowledgeable and generous subscribers),
<br>
so why not helping you and others out?
<br>
<p><span class="quotelev1">&gt; francesco
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Francesco Pietra &lt;chiendarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, Apr 7, 2009 at 11:39 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] ssh MPi and program tests
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gus:
</span><br>
<span class="quotelev1">&gt; I should have set clear at the beginning that on the Zyxel router
</span><br>
<span class="quotelev1">&gt; (connected to Internet by dynamic IP afforded by the provider)  there
</span><br>
<span class="quotelev1">&gt; are three computers. Their host names:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; deb32 (desktop debian i386)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; deb64 (multisocket debian amd 64 lenny)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tya64 (multisocket debian amd 64 lenny)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The three are ssh passwordless interconnected from the same user
</span><br>
<span class="quotelev1">&gt; (myself). I never established connections as root user because I have
</span><br>
<span class="quotelev1">&gt; direct access to all tree computers. So, if I slogin as user,
</span><br>
<span class="quotelev1">&gt; passwordless connection is established. If I try to slogin as root
</span><br>
<span class="quotelev1">&gt; user, it says that the authenticity of the host to which I intended to
</span><br>
<span class="quotelev1">&gt; connect can't be established, RSA key fingerprint .. Connect?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Not a problem.
<br>
You don't need to ssh as root to the remote machines.
<br>
Actually, it is safer not to.
<br>
If need to do sys admin work in the remote machine,
<br>
you can become root after you ssh as a regular user,
<br>
using &quot;su&quot; (or preferably &quot;su -&quot;, to get the superuser environment).
<br>
<p><span class="quotelev1">&gt; Moreover, I appended to the pub keys know to deb64 those that deb64
</span><br>
<span class="quotelev1">&gt; had sent to either deb32 or tya64. Whereby, when i command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With certain programs (conceived for batch run), the execution on
</span><br>
<span class="quotelev1">&gt; deb64 is launched from deb32.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh 192.168.#.## date (where the numbers stand for hostname)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I copied /examples to my deb64 home, chown to me, compiled as user and
</span><br>
<span class="quotelev1">&gt; run as user &quot;connectivity&quot;.  (I have not compild in the openmpi
</span><br>
<span class="quotelev1">&gt; directory as this is to root user, while ssh has been adjusted for me
</span><br>
<span class="quotelev1">&gt; as user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running as user in my home
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun -deb64 -1 connectivity_c 2&gt;&amp;1 | tee n=1.connectivity.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>OK, Jody already clarified that one.
<br>
You have wrong options to mpirun.
<br>
You may be mixing the mpirun syntax with some other software syntax.
<br>
Remember: &quot;mpirun --help&quot; is your friend!
<br>
<p>If you follow the right syntax of mpirun, as recommended by Jody,
<br>
the conectivity test program will run correctly,
<br>
just as the &quot;hello&quot; program did.
<br>
<p><span class="quotelev1">&gt; it asked to add the host (himself) to the list on known hosts (on
</span><br>
<span class="quotelev1">&gt; repeating the command, that was no more asked). The unabridged output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===========
</span><br>
<span class="quotelev1">&gt; [deb64:03575] procdir: /tmp/openmpi-sessions-francesco_at_deb64_0/38647/0/0
</span><br>
<span class="quotelev1">&gt; [deb64:03575] jobdir: /tmp/openmpi-sessions-francesco_at_deb64_0/38647/0
</span><br>
<span class="quotelev1">&gt; [deb64:03575] top: openmpi-sessions-francesco_at_deb64_0
</span><br>
<span class="quotelev1">&gt; [deb64:03575] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [deb64:03575] mpirun: reset PATH:
</span><br>
<span class="quotelev1">&gt; /usr/local/bin:/usr/local/mcce/bin:/opt/intel/cce/10.1.015/bin:/opt/intel/fce/10.1.015/bin:/home/francesco/gmmx06:/usr/local/bin:/usr/bin:/bin:/usr/games:/usr/local/amber10/exe:/usr/local/dock6/bin
</span><br>
<span class="quotelev1">&gt; [deb64:03575] mpirun: reset LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib:/opt/intel/mkl/10.0.1.014/lib/em64t:/opt/intel/cce/10.1.015/lib:/opt/intel/fce/10.1.015/lib:/usr/local/lib:/opt/acml4.1.0/gfortran64_mp_int64/lib
</span><br>
<span class="quotelev1">&gt; [deb64:03583] procdir: /tmp/openmpi-sessions-francesco_at_deb64_0/38647/0/1
</span><br>
<span class="quotelev1">&gt; [deb64:03583] jobdir: /tmp/openmpi-sessions-francesco_at_deb64_0/38647/0
</span><br>
<span class="quotelev1">&gt; [deb64:03583] top: openmpi-sessions-francesco_at_deb64_0
</span><br>
<span class="quotelev1">&gt; [deb64:03583] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [deb64:03575] [[38647,0],0] node[0].name deb64 daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [deb64:03575] [[38647,0],0] node[1].name deb64 daemon 1 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [deb64:03583] [[38647,0],1] node[0].name deb64 daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [deb64:03583] [[38647,0],1] node[1].name deb64 daemon 1 arch ffc91200
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev1">&gt; find an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: -e
</span><br>
<span class="quotelev1">&gt; Node: deb64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [deb64:03575] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [deb64:03575] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; orterun: exiting with status -123
</span><br>
<span class="quotelev1">&gt; [deb64:03583] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have changed the command, setting 4 for n and giving the full path
</span><br>
<span class="quotelev1">&gt; to the executable &quot;connectivity_c&quot; at no avail. I do not understand
</span><br>
<span class="quotelev1">&gt; the message &quot;Executable: -e&quot; in the out file and I feel myself stupid
</span><br>
<span class="quotelev1">&gt; enough in this circumstance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ssh is working for slogin and ssh to deb 64 date gives the date
</span><br>
<span class="quotelev1">&gt; passwordless, both before and after the &quot;connectivity&quot; run. i.e.,
</span><br>
<span class="quotelev1">&gt; deb64 knew, and knows, itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output of ompi_info between xxxxxxxxxx should probably clarify
</span><br>
<span class="quotelev1">&gt; your other questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI root_at_deb64 Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.3.1
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r20826
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Mar 18, 2009
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.3.1
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r20826
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Mar 18, 2009
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.3.1
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r20826
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Mar 18, 2009
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.3.1
</span><br>
<span class="quotelev1">&gt;                  Prefix: /usr/local
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: deb64
</span><br>
<span class="quotelev1">&gt;           Configured by: root
</span><br>
<span class="quotelev1">&gt;           Configured on: Fri Apr  3 23:03:30 CEST 2009
</span><br>
<span class="quotelev1">&gt;          Configure host: deb64
</span><br>
<span class="quotelev1">&gt;                Built by: root
</span><br>
<span class="quotelev1">&gt;                Built on: Fri Apr  3 23:12:28 CEST 2009
</span><br>
<span class="quotelev1">&gt;              Built host: deb64
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: /opt/intel/fce/10.1.015/bin/ifort
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs:
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: /opt/intel/fce/10.1.015/bin/ifort
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs:
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Note that your build didn't use icc, but gcc (and g++), along with ifort.
<br>
I don't remember what your intent was,
<br>
but if you wanted to use icc (and icpc),
<br>
somehow the OpenMPI configure script didn't pick it up.
<br>
If you really want icc, rebuild OpenMPI giving the full path name
<br>
to icc (CC=/full/path/to/icc), and likewise for icpc and ifort.
<br>
<p><span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; francesco
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Good luck,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8820.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8818.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8809.php">Francesco Pietra: "[OMPI users] Fwd:  ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8834.php">Marco: "Re: [OMPI users] ssh MPi and program tests"</a>
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
