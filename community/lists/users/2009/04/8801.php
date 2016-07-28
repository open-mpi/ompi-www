<?
$subject_val = "Re: [OMPI users] ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 05:39:47 2009" -->
<!-- isoreceived="20090407093947" -->
<!-- sent="Tue, 7 Apr 2009 11:39:41 +0200" -->
<!-- isosent="20090407093941" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh MPi and program tests" -->
<!-- id="b87c422a0904070239v1fee8ab1o116e6b479e06568f_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49DA6E0F.4060000_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 05:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8802.php">Terry Frankcombe: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8800.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8795.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8802.php">Terry Frankcombe: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8802.php">Terry Frankcombe: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8803.php">jody: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8809.php">Francesco Pietra: "[OMPI users] Fwd:  ssh MPi and program tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus:
<br>
I should have set clear at the beginning that on the Zyxel router
<br>
(connected to Internet by dynamic IP afforded by the provider)  there
<br>
are three computers. Their host names:
<br>
<p>deb32 (desktop debian i386)
<br>
<p>deb64 (multisocket debian amd 64 lenny)
<br>
<p>tya64 (multisocket debian amd 64 lenny)
<br>
<p>The three are ssh passwordless interconnected from the same user
<br>
(myself). I never established connections as root user because I have
<br>
direct access to all tree computers. So, if I slogin as user,
<br>
passwordless connection is established. If I try to slogin as root
<br>
user, it says that the authenticity of the host to which I intended to
<br>
connect can't be established, RSA key fingerprint .. Connect?
<br>
<p>Moreover, I appended to the pub keys know to deb64 those that deb64
<br>
had sent to either deb32 or tya64. Whereby, when i command.
<br>
<p>With certain programs (conceived for batch run), the execution on
<br>
deb64 is launched from deb32.
<br>
<p>ssh 192.168.#.## date (where the numbers stand for hostname)
<br>
<p><p>I copied /examples to my deb64 home, chown to me, compiled as user and
<br>
run as user &quot;connectivity&quot;.  (I have not compild in the openmpi
<br>
directory as this is to root user, while ssh has been adjusted for me
<br>
as user.
<br>
<p>Running as user in my home
<br>
<p>/usr/local/bin/mpirun -deb64 -1 connectivity_c 2&gt;&amp;1 | tee n=1.connectivity.out
<br>
<p>it asked to add the host (himself) to the list on known hosts (on
<br>
repeating the command, that was no more asked). The unabridged output:
<br>
<p>===========
<br>
[deb64:03575] procdir: /tmp/openmpi-sessions-francesco_at_deb64_0/38647/0/0
<br>
[deb64:03575] jobdir: /tmp/openmpi-sessions-francesco_at_deb64_0/38647/0
<br>
[deb64:03575] top: openmpi-sessions-francesco_at_deb64_0
<br>
[deb64:03575] tmp: /tmp
<br>
[deb64:03575] mpirun: reset PATH:
<br>
/usr/local/bin:/usr/local/mcce/bin:/opt/intel/cce/10.1.015/bin:/opt/intel/fce/10.1.015/bin:/home/francesco/gmmx06:/usr/local/bin:/usr/bin:/bin:/usr/games:/usr/local/amber10/exe:/usr/local/dock6/bin
<br>
[deb64:03575] mpirun: reset LD_LIBRARY_PATH:
<br>
/usr/local/lib:/opt/intel/mkl/10.0.1.014/lib/em64t:/opt/intel/cce/10.1.015/lib:/opt/intel/fce/10.1.015/lib:/usr/local/lib:/opt/acml4.1.0/gfortran64_mp_int64/lib
<br>
[deb64:03583] procdir: /tmp/openmpi-sessions-francesco_at_deb64_0/38647/0/1
<br>
[deb64:03583] jobdir: /tmp/openmpi-sessions-francesco_at_deb64_0/38647/0
<br>
[deb64:03583] top: openmpi-sessions-francesco_at_deb64_0
<br>
[deb64:03583] tmp: /tmp
<br>
[deb64:03575] [[38647,0],0] node[0].name deb64 daemon 0 arch ffc91200
<br>
[deb64:03575] [[38647,0],0] node[1].name deb64 daemon 1 arch ffc91200
<br>
[deb64:03583] [[38647,0],1] node[0].name deb64 daemon 0 arch ffc91200
<br>
[deb64:03583] [[38647,0],1] node[1].name deb64 daemon 1 arch ffc91200
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not
<br>
find an executable:
<br>
<p>Executable: -e
<br>
Node: deb64
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
[deb64:03575] sess_dir_finalize: job session dir not empty - leaving
<br>
[deb64:03575] sess_dir_finalize: proc session dir not empty - leaving
<br>
orterun: exiting with status -123
<br>
[deb64:03583] sess_dir_finalize: job session dir not empty - leaving
<br>
=========================
<br>
<p>I have changed the command, setting 4 for n and giving the full path
<br>
to the executable &quot;connectivity_c&quot; at no avail. I do not understand
<br>
the message &quot;Executable: -e&quot; in the out file and I feel myself stupid
<br>
enough in this circumstance.
<br>
<p>The ssh is working for slogin and ssh to deb 64 date gives the date
<br>
passwordless, both before and after the &quot;connectivity&quot; run. i.e.,
<br>
deb64 knew, and knows, itself.
<br>
<p>The output of ompi_info between xxxxxxxxxx should probably clarify
<br>
your other questions.
<br>
<p>xxxxxxxxxxxxxxxxxxx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI root_at_deb64 Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3.1
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r20826
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Mar 18, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.3.1
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r20826
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Mar 18, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.3.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r20826
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Mar 18, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.3.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: deb64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Fri Apr  3 23:03:30 CEST 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: deb64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Fri Apr  3 23:12:28 CEST 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: deb64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: /opt/intel/fce/10.1.015/bin/ifort
<br>
&nbsp;&nbsp;Fortran77 compiler abs:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: /opt/intel/fce/10.1.015/bin/ifort
<br>
&nbsp;&nbsp;Fortran90 compiler abs:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: yes
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no  (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: file (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.1)
<br>
xxxxxxxxxxxxxxxxxxxxxxxxxx
<br>
<p>thanks
<br>
francesco
<br>
<p>On Mon, Apr 6, 2009 at 11:03 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Francesco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See answers inline.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus:
</span><br>
<span class="quotelev2">&gt;&gt; Partial quick answers below. I have reestablished the ssh connection
</span><br>
<span class="quotelev2">&gt;&gt; so that tomorrow I'll run the tests. Everything that relates to
</span><br>
<span class="quotelev2">&gt;&gt; running amber is on the &quot;parallel computer&quot;, where I have access to
</span><br>
<span class="quotelev2">&gt;&gt; everything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 6, 2009 at 7:53 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Francesco, list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Apr 6, 2009 at 5:21 PM, Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Francesco
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Did you try to run examples/connectivity_c.c,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or examples/hello_c.c before trying amber?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; They are in the directory where you untarred the OpenMPI tarball.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It is easier to troubleshoot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; possible network and host problems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with these simpler programs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have found the &quot;examples&quot;. Should they be compiled? how? This is my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only question here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd examples/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /full/path/to/openmpi/bin/mpicc -o connectivity_c connectivity_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then run it with, say:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /full/path/to/openmpi/bin/mpirun -host {whatever_hosts_you_want}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -n {as_many_processes_you_want} connectivity_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Likewise for hello_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What's below is info. Although amber parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would have not compiled with faulty openmpi, I'll run openmpi tests as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; soon as I understand how.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Also, to avoid confusion,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you may use a full path name to mpirun,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in case you have other MPI flavors in your system.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Often times the mpirun your path is pointing to is not what you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; may think it is.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/local/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you install OpenMPI on /usr/local ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When you do &quot;mpirun -help&quot;, do you see &quot;mpirun (Open MPI) 1.3&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -help
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.3.1
</span><br>
<span class="quotelev2">&gt;&gt; on the 1st line, then follow the options
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, it looks like you installed OpenMPI 1.3.1 with the default
</span><br>
<span class="quotelev1">&gt; &quot;--prefix&quot; which is /usr/local.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about the output of &quot;orte_info&quot; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte_info was not installed. See below what has been installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, my fault.
</span><br>
<span class="quotelev1">&gt; I meant ompi_info (not orte_info).
</span><br>
<span class="quotelev1">&gt; Please try ompi_info or &quot;ompi_info --config&quot;.
</span><br>
<span class="quotelev1">&gt; It will tell you the compilers used to build OpenMPI, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I presume all of this is being done in the &quot;parallel computer&quot;,
</span><br>
<span class="quotelev1">&gt; i.e., in one of the AMD64 Debian systems, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does it show your Intel compilers, etc?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess so, otherwise amber would have not been compiled, but I don't
</span><br>
<span class="quotelev2">&gt;&gt; know the commands to prove it. The intel compilers are on the path:
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/cce/10.1.015/bin:/opt/intel/fce/10.1.015/bin and the mkl
</span><br>
<span class="quotelev2">&gt;&gt; are sourced in .bashrc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, all in the AMD64 system, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ask because many Linux distributions come with one or more flavors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of MPI (OpenMPI, MPICH, LAM, etc), some compilers also do (PGI for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instance), some tools (Intel MKL?) may also have their MPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and you end up with a bunch of MPI commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on your path that may produce a big mixup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a pretty common problem that affect new users on this list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the MPICH list, on clustering lists, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The errors messages often don't help find the source of the problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and people spend a lot of time trying to troubleshoot network,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc, when is often just a path problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, this is why when you begin, you may want to use full path
</span><br>
<span class="quotelev3">&gt;&gt;&gt; names, to avoid confusion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After the basic MPI functionality is working,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then you can go and fix your path chain,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and rely on your path chain.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there is no other accessible MPI (one application, DOT2, has mpich but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it is a static compilation; DOT2 parallelizatuion requires thar the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; computer knows itself, i.e.&quot; ssh hostname date&quot; should afford the date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passwordless. The reported issues in testing amber have destroyed this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; situation: now deb64 has port22 closed, evem to itself.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you tried to reboot the master node, to see if it comes back
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the original ssh setup?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You need ssh to be functional to run OpenMPI code,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; including the tests above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't know if you want to run on amd64 alone (master node?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or on a cluster.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In any case, you may use a list of hosts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or a hostfile on the mpirun command line,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to specify where you want to run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With amber I use the parallel computer directly and the amber
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installation is chown to me. The ssh connection, in this case, only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; serves to get file from. or send files to, my desktop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is unclear to me what you mean by &quot;the parallel computer directly&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you explain better which computers are in this game?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your desktop and a cluster perhaps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are they both Debian 64 Linux?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where do you compile the programs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where do you want to run the programs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my .bashrc:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (for amber)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_HOME=/usr/local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export MPI_HOME
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (for openmpi)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if [ &quot;$LD_LIBRARY_PATH&quot; ] ; then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160;export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH'/usr/local/lib&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160;export LD_LIBRARY_PATH=&quot;/usr/local/lib&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this on your desktop or on the &quot;parallel computer&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On both &quot;parallel computers&quot; (there is my desktop, ssh to two uma-type
</span><br>
<span class="quotelev2">&gt;&gt; dual-opteron &quot;parallel computers&quot;. Only one was active when the &quot;test&quot;
</span><br>
<span class="quotelev2">&gt;&gt; problems arose. While the (ten years old) destop is i386, both other
</span><br>
<span class="quotelev2">&gt;&gt; machines are amd64, i.e., all debian lenny. I prepare the input files
</span><br>
<span class="quotelev2">&gt;&gt; on the i386 and use it also as storage for backups.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, you only use your i386 desktop to ssh to the AMD64 machine,
</span><br>
<span class="quotelev1">&gt; and to prepare input files, etc, right?
</span><br>
<span class="quotelev1">&gt; The OpenMPI installation, the compilations you do, and the job runs
</span><br>
<span class="quotelev1">&gt; all happen in the AMD64 system, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, do you use each of these systems separately on your
</span><br>
<span class="quotelev1">&gt; MPI program runs,
</span><br>
<span class="quotelev1">&gt; or do you use them together?
</span><br>
<span class="quotelev1">&gt; If you use them together, are they connected through a network,
</span><br>
<span class="quotelev1">&gt; and did you setup passowrdless ssh connections between them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;parallel
</span><br>
<span class="quotelev2">&gt;&gt; computer&quot; has only the X server and a minimal window for a
</span><br>
<span class="quotelev2">&gt;&gt; two-dimensional graphics of amber.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how amber works, so please tell me.
</span><br>
<span class="quotelev1">&gt; Do you somehow interact with amber while it is running in parallel mode,
</span><br>
<span class="quotelev1">&gt; using this &quot;minimal window for a two dimensional graphics&quot;?
</span><br>
<span class="quotelev1">&gt; Or is this only a data post-processing activity that happens after the
</span><br>
<span class="quotelev1">&gt; parallel run of amber finishes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other parallel computer has a
</span><br>
<span class="quotelev2">&gt;&gt; GeForce 6600 card with GLSL support, which I use to elaborate
</span><br>
<span class="quotelev2">&gt;&gt; graphically the outputs from the numerical computations (using VMD,
</span><br>
<span class="quotelev2">&gt;&gt; Chimera and other 64 bit graphical programs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPICH_HOME=/usr/local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export MPICH_HOME
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is for DOCK, which, with this env variabl, accepts openmpi (at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lest it was so with v 1.2.6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh, well, it looks like there is MPICH already installed on /usr/local.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, this may be part of the confusion, the path confusion I referred to.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, there is no MPICH installed. With the above export, DOCK (a
</span><br>
<span class="quotelev2">&gt;&gt; docking program from the same developers of Amber) is so kind to use
</span><br>
<span class="quotelev2">&gt;&gt; the executables of openmpi. The export was suggested by the DOCK
</span><br>
<span class="quotelev2">&gt;&gt; developers, and it worked. Unable to explain why.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, this may be a way the DOCK developers found to trick their own
</span><br>
<span class="quotelev1">&gt; software (DOCK) to think MPICH is installed in /usr/local,
</span><br>
<span class="quotelev1">&gt; and actually use the OpenMPI libraries instead of MPICH.
</span><br>
<span class="quotelev1">&gt; They may have hardwired on their build scripts the &quot;MPICH_HOME&quot;
</span><br>
<span class="quotelev1">&gt; environment variable as the location where the MPI libraries reside.
</span><br>
<span class="quotelev1">&gt; But which MPI libraries are there may not matter much, I would guess.
</span><br>
<span class="quotelev1">&gt; Just a guess anyway.
</span><br>
<span class="quotelev1">&gt; (I have no idea of what the heck DOCK is or how it works.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as the parallel support is concerned, /usr/local/bin only
</span><br>
<span class="quotelev2">&gt;&gt; contains what openmpi 1.3.1 has installed (resulting from ./configure
</span><br>
<span class="quotelev2">&gt;&gt; cc=/path/icc cxx=/path/icpc F77=path/ifort FC=path/ifort
</span><br>
<span class="quotelev2">&gt;&gt; --with-libnuma=/usr/lib):
</span><br>
<span class="quotelev2">&gt;&gt; mpic++ mpicc mpiCC mpicc-vt mpiCC-vt mpic++-vt mpicxx mpicxx-vt
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec mpif77 mpif77-vt mpif90 mpif90-vt mpirun ompi-clean ompi-info
</span><br>
<span class="quotelev2">&gt;&gt; ompi-ps ompi-server opal-wapper opari orte-clean orted orte-iof
</span><br>
<span class="quotelev2">&gt;&gt; orte-ps orterun otfaux otfcompress otfconfig otfdecompress otfdump
</span><br>
<span class="quotelev2">&gt;&gt; otfmerge vtcc vtcxx vtf77 vtf90 vtfilter vtunify. There is no
</span><br>
<span class="quotelev2">&gt;&gt; orte_info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course not.
</span><br>
<span class="quotelev1">&gt; Doh! &#194;&#160;I misspelled the name ... :(
</span><br>
<span class="quotelev1">&gt; It is ompi_info for sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would suggest installing OpenMPI on a different directory,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the --prefix option of the OpenMPI configure script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do configure --help for details about all configuration options.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the intel compilers (compiled ifort and icc, are sourced in both my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .bashrc and root home .bashrc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks and apologies for my low level in these affairs. It is the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first time I am faced by such problems, with amd64, same intel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compilers, and openmpi 1.2.6 everything was in order.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To me it doesn't look like the problem is related to the new version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I asked about that because I am using the same commands, .bashrc, etc
</span><br>
<span class="quotelev2">&gt;&gt; that worked with version 1.2.6. The computers are the same, the only
</span><br>
<span class="quotelev2">&gt;&gt; (non minor) difference is upgrading from amd64 etch to amd64 lenny (or
</span><br>
<span class="quotelev2">&gt;&gt; I am doing mistakes that I have not yet detected).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, but I still don't think it is some problem in OpenMPI 1.3.1 that is
</span><br>
<span class="quotelev1">&gt; causing trouble here.
</span><br>
<span class="quotelev1">&gt; If it were, the program would start running, but mpirun is having trouble
</span><br>
<span class="quotelev1">&gt; even to start the programs, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since you seem to have also upgraded the Debian release,
</span><br>
<span class="quotelev1">&gt; therefore another part of the system also changed.
</span><br>
<span class="quotelev1">&gt; But still, it may not be related to Debian either.
</span><br>
<span class="quotelev1">&gt; It may be just some confusion on paths, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I really encourage you to try to compile and run the programs in the
</span><br>
<span class="quotelev1">&gt; examples directory.
</span><br>
<span class="quotelev1">&gt; They are very clear and simple (as opposed to amber, which hides behind
</span><br>
<span class="quotelev1">&gt; a few layers of software), and even if they fail, the failure will help
</span><br>
<span class="quotelev1">&gt; clarify the nature of the problem, and find a fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh, well, I am afraid I am asking more questions than helping out,
</span><br>
<span class="quotelev1">&gt; but I am trying to understand what is going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try the test programs with full path names first.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It may not solve the problem, but it may clarify things a bit.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; francesco
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do &quot;/full/path/to/openmpi/bin/mpirun --help&quot; for details.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am not familiar to amber, but how does it find your openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libraries and compiler wrappers?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Don't you need to give it the paths during configuration,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; say,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /configure_amber -openmpi=/full/path/to/openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or similar?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have compiled openmpi 1.3.1 on debian amd64 lenny with icc/ifort
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (10.1.015) and libnuma. Tests passed:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ompi_info | grep libnuma
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;MCA affinity: libnuma (MCA v 2.0, API 2.0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ompi_info | grep maffinity
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;MCA affinity: first use (MCA as above)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;MCA affinity: libnuma as above.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Then, I have compiled parallel a molecular dynamics package, amber10,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; without error signals but I am having problems in testing the amber
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parallel installation.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; amber10 configure was set as:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./configure_amber -openmpi -nobintray ifort
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; just as I used before with openmpi 1.2.6. Could you say if the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -openmpi should be changed?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cd tests
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export DO_PARALLEL='mpirun -np 4'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make test.parallel.MM &#194;&#160;&lt; /dev/null
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cd cytosine &amp;&amp; ./Run.cytosine
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The authenticity of host deb64 (which is the hostname) (127.0.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; can't be established.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; RSA fingerprint .....
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connecting ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I stopped the ssh daemon, whereby tests were interrupted because deb64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (i.e., itself) could no more be accessed. Further attempts under these
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; conditions failed for the same reason. Now, sshing to deb64 is no more
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; possible: port 22 closed. In contrast, sshing from deb64 to other
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; computers occurs passwordless. No such problems arose at the time of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; amd64 etch with the same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; configuration of ssh, same compilers, and openmpi 1.2.6.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am here because the warning from the amber site is that I should to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; learn how to use my installation of MPI. Therefore, if there is any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clue ..
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; francesco pietra
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8802.php">Terry Frankcombe: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8800.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8795.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8802.php">Terry Frankcombe: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8802.php">Terry Frankcombe: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8803.php">jody: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8809.php">Francesco Pietra: "[OMPI users] Fwd:  ssh MPi and program tests"</a>
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
