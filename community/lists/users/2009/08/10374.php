<?
$subject_val = "Re: [OMPI users] openmpi with xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 15 10:05:31 2009" -->
<!-- isoreceived="20090815140531" -->
<!-- sent="Sat, 15 Aug 2009 07:05:24 -0700" -->
<!-- isosent="20090815140524" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi with xgrid" -->
<!-- id="861B8B28-2693-4181-88CE-9463E6E327C4_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cf58c8d00908150103x49f49af0l7c6487ade82ef0d5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi with xgrid<br>
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-15 10:05:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10375.php">Lenny Verkhovsky: "Re: [OMPI users] Help: How to accomplish processors affinity"</a>
<li><strong>Previous message:</strong> <a href="10373.php">Joop van Lenthe: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>In reply to:</strong> <a href="10369.php">Alan: "Re: [OMPI users] openmpi with xgrid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15-Aug-09, at 1:03 AM, Alan wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Warner,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is frustrating... I read the ticket. 6 months already and 2  
</span><br>
<span class="quotelev1">&gt; releases postponed... Frankly, I am very skeptical that this will be  
</span><br>
<span class="quotelev1">&gt; fixed for 1.3.4. I really hope so, but when 1.3.4 will be released?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to think about going with 1.2.x and possible disruptions in  
</span><br>
<span class="quotelev1">&gt; my configuration (I use Fink) or wait.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I offered myself to test any nightly snapshot claiming this bug  
</span><br>
<span class="quotelev1">&gt; is fixed.
</span><br>
<p>Hi Alan,
<br>
<p>Its not too hard to get PBS/torque up and running.
<br>
<p>The OS/X-specific (?) issues I had:
<br>
<p>1) /etc/hosts had to have the server explicitly listed on each of the  
<br>
nodes.
<br>
2) $usecp had to be set in mom_config
<br>
3) $restricted had to be set on the nodes in mom_priv/config to accept  
<br>
calls from the server.
<br>
<p>I think that is it.  Of course if you are already using xgrid on these  
<br>
machines for other uses it won't play well with PBS, but otherwise all  
<br>
you are missing is the cute tachometer display.
<br>
<p>Cheers,  Jody
<br>
<p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Alan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 14, 2009 at 17:20, Warner Yuen &lt;wyuen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Alan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Xgrid support for Open MPI is currently broken in the latest version  
</span><br>
<span class="quotelev1">&gt; of Open MPI. See the ticket below. However, I believe that Xgrid  
</span><br>
<span class="quotelev1">&gt; still works with one of the earlier 1.2  versions of Open MPI. I  
</span><br>
<span class="quotelev1">&gt; don't recall for sure, but I think that it's Open MPI 1.2.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1777: Xgrid support is broken in the v1.3 series
</span><br>
<span class="quotelev1">&gt; --------------------- 
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  jsquyres  |        Owner:  brbarret
</span><br>
<span class="quotelev1">&gt;   Type:  defect    |       Status:  accepted
</span><br>
<span class="quotelev1">&gt; Priority:  major     |    Milestone:  Open MPI 1.3.4
</span><br>
<span class="quotelev1">&gt; Version:  trunk     |   Resolution:
</span><br>
<span class="quotelev1">&gt; Keywords:            |
</span><br>
<span class="quotelev1">&gt; --------------------- 
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Changes (by bbenton):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * milestone:  Open MPI 1.3.3 =&gt; Open MPI 1.3.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Scientific Computing
</span><br>
<span class="quotelev1">&gt; Consulting Engineer
</span><br>
<span class="quotelev1">&gt; Apple, Inc.
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 14, 2009, at 6:21 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Fri, 14 Aug 2009 14:21:30 +0100
</span><br>
<span class="quotelev1">&gt; From: Alan &lt;alanwilter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] openmpi with xgrid
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;cf58c8d00908140621v18d384f2wef97ee80ca3ded0c_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; I saw that <a href="http://www.open-mpi.org/community/lists/users/2007/08/3900.php">http://www.open-mpi.org/community/lists/users/2007/08/3900.php</a> 
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use fink, and so I changed the openmpi.info file in order to get  
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev1">&gt; with xgrid support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see:
</span><br>
<span class="quotelev1">&gt; amadeus[2081]:~/Downloads% /sw/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                Package: Open MPI root_at_amadeus.local Distribution
</span><br>
<span class="quotelev1">&gt;               Open MPI: 1.3.3
</span><br>
<span class="quotelev1">&gt;  Open MPI SVN revision: r21666
</span><br>
<span class="quotelev1">&gt;  Open MPI release date: Jul 14, 2009
</span><br>
<span class="quotelev1">&gt;               Open RTE: 1.3.3
</span><br>
<span class="quotelev1">&gt;  Open RTE SVN revision: r21666
</span><br>
<span class="quotelev1">&gt;  Open RTE release date: Jul 14, 2009
</span><br>
<span class="quotelev1">&gt;                   OPAL: 1.3.3
</span><br>
<span class="quotelev1">&gt;      OPAL SVN revision: r21666
</span><br>
<span class="quotelev1">&gt;      OPAL release date: Jul 14, 2009
</span><br>
<span class="quotelev1">&gt;           Ident string: 1.3.3
</span><br>
<span class="quotelev1">&gt;                 Prefix: /sw
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-apple-darwin9
</span><br>
<span class="quotelev1">&gt;         Configure host: amadeus.local
</span><br>
<span class="quotelev1">&gt;          Configured by: root
</span><br>
<span class="quotelev1">&gt;          Configured on: Fri Aug 14 12:58:12 BST 2009
</span><br>
<span class="quotelev1">&gt;         Configure host: amadeus.local
</span><br>
<span class="quotelev1">&gt;               Built by:
</span><br>
<span class="quotelev1">&gt;               Built on: Fri Aug 14 13:07:46 BST 2009
</span><br>
<span class="quotelev1">&gt;             Built host: amadeus.local
</span><br>
<span class="quotelev1">&gt;             C bindings: yes
</span><br>
<span class="quotelev1">&gt;           C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 bindings: yes (single underscore)
</span><br>
<span class="quotelev1">&gt;     Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;             C compiler: gcc
</span><br>
<span class="quotelev1">&gt;    C compiler absolute: /sw/var/lib/fink/path-prefix-10.6/gcc
</span><br>
<span class="quotelev1">&gt;           C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;  C++ compiler absolute: /sw/var/lib/fink/path-prefix-10.6/g++
</span><br>
<span class="quotelev1">&gt;     Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /sw/bin/gfortran
</span><br>
<span class="quotelev1">&gt;     Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /sw/bin/gfortran
</span><br>
<span class="quotelev1">&gt;            C profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;         C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;         Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;          Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;    MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;        libltdl support: yes
</span><br>
<span class="quotelev1">&gt;  Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;        MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;      MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;  FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;          MCA backtrace: execinfo (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.3)
</span><br>
<span class="quotelev1">&gt;          MCA paffinity: darwin (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA carto: auto_detect (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA carto: file (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;          MCA maffinity: first_use (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA timer: darwin (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;        MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;        MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;             MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;          MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;          MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA coll: hierarch (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA coll: self (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA io: romio (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA pml: csum (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA pml: v (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;             MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA btl: self (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA odls: default (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA rmaps: rank_file (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA rmaps: round_robin (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;             MCA routed: binomial (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.3)
</span><br>
<span class="quotelev1">&gt;             MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;             MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA plm: xgrid (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;             MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA ess: env (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA ess: singleton (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;            MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;            MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All seemed fine and I also have xgrid controller and agent running  
</span><br>
<span class="quotelev1">&gt; in my
</span><br>
<span class="quotelev1">&gt; laptop, and then when I tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /sw/bin/om-mpirun -c 2 mpiapp  # hello world example for mpi
</span><br>
<span class="quotelev1">&gt; [amadeus.local:40293] [[804,0],0] ORTE_ERROR_LOG: Unknown error: 1  
</span><br>
<span class="quotelev1">&gt; in file
</span><br>
<span class="quotelev1">&gt; src/plm_xgrid_module.m at line 119
</span><br>
<span class="quotelev1">&gt; [amadeus.local:40293] [[804,0],0] ORTE_ERROR_LOG: Unknown error: 1  
</span><br>
<span class="quotelev1">&gt; in file
</span><br>
<span class="quotelev1">&gt; src/plm_xgrid_module.m at line 153
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; om-mpirun was unable to start the specified application as it  
</span><br>
<span class="quotelev1">&gt; encountered an
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev1">&gt; More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2009-08-14 14:16:19.715 om-mpirun[40293:10b] *** Terminating app due  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; uncaught exception 'NSInvalidArgumentException', reason: '***
</span><br>
<span class="quotelev1">&gt; -[NSKVONotifying_XGConnection&lt;0x1001164b0&gt; finalize]: called when  
</span><br>
<span class="quotelev1">&gt; collecting
</span><br>
<span class="quotelev1">&gt; not enabled'
</span><br>
<span class="quotelev1">&gt; 2009-08-14 14:16:19.716 om-mpirun[40293:10b] Stack: (
</span><br>
<span class="quotelev1">&gt;   140735390096156,
</span><br>
<span class="quotelev1">&gt;   140735366109391,
</span><br>
<span class="quotelev1">&gt;   140735390122388,
</span><br>
<span class="quotelev1">&gt;   4295943988,
</span><br>
<span class="quotelev1">&gt;   4295939168,
</span><br>
<span class="quotelev1">&gt;   4295171139,
</span><br>
<span class="quotelev1">&gt;   4295883300,
</span><br>
<span class="quotelev1">&gt;   4295025321,
</span><br>
<span class="quotelev1">&gt;   4294973498,
</span><br>
<span class="quotelev1">&gt;   4295401605,
</span><br>
<span class="quotelev1">&gt;   4295345774,
</span><br>
<span class="quotelev1">&gt;   4295056598,
</span><br>
<span class="quotelev1">&gt;   4295116412,
</span><br>
<span class="quotelev1">&gt;   4295119970,
</span><br>
<span class="quotelev1">&gt;   4295401605,
</span><br>
<span class="quotelev1">&gt;   4294972881,
</span><br>
<span class="quotelev1">&gt;   4295401605,
</span><br>
<span class="quotelev1">&gt;   4295345774,
</span><br>
<span class="quotelev1">&gt;   4295056598,
</span><br>
<span class="quotelev1">&gt;   4295172615,
</span><br>
<span class="quotelev1">&gt;   4295938185,
</span><br>
<span class="quotelev1">&gt;   4294971936,
</span><br>
<span class="quotelev1">&gt;   4294969401,
</span><br>
<span class="quotelev1">&gt;   4294969340
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt; terminate called after throwing an instance of 'NSException'
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] Signal: Abort trap (6)
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] Signal code:  (0)
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [ 0] 2   libSystem.B.dylib
</span><br>
<span class="quotelev1">&gt; 0x00000000831443fa _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [ 1] 3   ???
</span><br>
<span class="quotelev1">&gt; 0x000000005fbfb1e8 0x0 + 1606398440
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [ 2] 4   libstdc++.6.dylib
</span><br>
<span class="quotelev1">&gt; 0x00000000827f2085 _ZN9__gnu_cxx27__verbose_terminate_handlerEv + 377
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [ 3] 5   libobjc.A.dylib
</span><br>
<span class="quotelev1">&gt; 0x0000000081811adf objc_end_catch + 280
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [ 4] 6   libstdc++.6.dylib
</span><br>
<span class="quotelev1">&gt; 0x00000000827f0425 __gxx_personality_v0 + 1259
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [ 5] 7   libstdc++.6.dylib
</span><br>
<span class="quotelev1">&gt; 0x00000000827f045b _ZSt9terminatev + 19
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [ 6] 8   libstdc++.6.dylib
</span><br>
<span class="quotelev1">&gt; 0x00000000827f054c __cxa_rethrow + 0
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [ 7] 9   libobjc.A.dylib
</span><br>
<span class="quotelev1">&gt; 0x0000000081811966 objc_exception_rethrow + 0
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [ 8] 10  CoreFoundation
</span><br>
<span class="quotelev1">&gt; 0x0000000082ef8194 _CF_forwarding_prep_0 + 5700
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [ 9] 11  mca_plm_xgrid.so
</span><br>
<span class="quotelev1">&gt; 0x00000000000ee734 orte_plm_xgrid_finalize + 4884
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [10] 12  mca_plm_xgrid.so
</span><br>
<span class="quotelev1">&gt; 0x00000000000ed460 orte_plm_xgrid_finalize + 64
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [11] 13  libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x0000000000031c43 orte_plm_base_close + 195
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [12] 14  mca_ess_hnp.so
</span><br>
<span class="quotelev1">&gt; 0x00000000000dfa24 0x0 + 916004
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [13] 15  libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x000000000000e2a9 orte_finalize + 89
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [14] 16  om-mpirun
</span><br>
<span class="quotelev1">&gt; 0x000000000000183a start + 4210
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [15] 17  libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x000000000006a085 opal_event_add_i + 1781
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [16] 18  libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x000000000005c66e opal_progress + 142
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [17] 19  libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x0000000000015cd6 orte_trigger_event + 70
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [18] 20  libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x000000000002467c orte_daemon_recv + 4332
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [19] 21  libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x0000000000025462 orte_daemon_cmd_processor + 722
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [20] 22  libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x000000000006a085 opal_event_add_i + 1781
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [21] 23  om-mpirun
</span><br>
<span class="quotelev1">&gt; 0x00000000000015d1 start + 3593
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [22] 24  libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x000000000006a085 opal_event_add_i + 1781
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [23] 25  libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x000000000005c66e opal_progress + 142
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [24] 26  libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x0000000000015cd6 orte_trigger_event + 70
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [25] 27  libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x0000000000032207 orte_plm_base_launch_failed + 135
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [26] 28  mca_plm_xgrid.so
</span><br>
<span class="quotelev1">&gt; 0x00000000000ed089 orte_plm_xgrid_spawn + 89
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [27] 29  om-mpirun
</span><br>
<span class="quotelev1">&gt; 0x0000000000001220 start + 2648
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [28] 30  om-mpirun
</span><br>
<span class="quotelev1">&gt; 0x0000000000000839 start + 113
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] [29] 31  om-mpirun
</span><br>
<span class="quotelev1">&gt; 0x00000000000007fc start + 52
</span><br>
<span class="quotelev1">&gt; [amadeus:40293] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [1]    40293 abort      /sw/bin/om-mpirun -c 2 mpiapp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anyone using openmpi with xgrid successfully keen to share  
</span><br>
<span class="quotelev1">&gt; his/her
</span><br>
<span class="quotelev1">&gt; experience? I am not new to xgrid or mpi, but to both integrated I  
</span><br>
<span class="quotelev1">&gt; must say
</span><br>
<span class="quotelev1">&gt; that I am in uncharted waters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be very appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks in advance,
</span><br>
<span class="quotelev1">&gt; Alan
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Alan Wilter S. da Silva, D.Sc. - CCPN Research Associate
</span><br>
<span class="quotelev1">&gt; Department of Biochemistry, University of Cambridge.
</span><br>
<span class="quotelev1">&gt; 80 Tennis Court Road, Cambridge CB2 1GA, UK.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.bio.cam.ac.uk/~awd28">http://www.bio.cam.ac.uk/~awd28</a>&lt;&lt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1318, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Alan Wilter S. da Silva, D.Sc. - CCPN Research Associate
</span><br>
<span class="quotelev1">&gt; Department of Biochemistry, University of Cambridge.
</span><br>
<span class="quotelev1">&gt; 80 Tennis Court Road, Cambridge CB2 1GA, UK.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.bio.cam.ac.uk/~awd28">http://www.bio.cam.ac.uk/~awd28</a>&lt;&lt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10374/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10375.php">Lenny Verkhovsky: "Re: [OMPI users] Help: How to accomplish processors affinity"</a>
<li><strong>Previous message:</strong> <a href="10373.php">Joop van Lenthe: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>In reply to:</strong> <a href="10369.php">Alan: "Re: [OMPI users] openmpi with xgrid"</a>
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
