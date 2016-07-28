<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 11:46:04 2013" -->
<!-- isoreceived="20131021154604" -->
<!-- sent="Mon, 21 Oct 2013 15:46:02 +0000" -->
<!-- isosent="20131021154602" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F981B00_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52654397.7060602_at_legi.grenoble-inp.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 11:46:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22813.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Previous message:</strong> <a href="22811.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>In reply to:</strong> <a href="22811.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22813.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Reply:</strong> <a href="22813.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you manually install a recent version of hwloc (<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>) on kareline, and run lstopo on it?  Send the output here.
<br>
<p>What kind of machine is kareline?
<br>
<p><p>On Oct 21, 2013, at 11:09 AM, Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph for this answer. May be I wasn't very clear (my English is not so good...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not want the binding-to-core be the default. For hybrid codes (OpenMP + MPI) I need a bind to the socket.  But at this time, I am unable to request a --bind-to-core option:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [begou_at_kareline OARTEST]$ mpirun -n 4 --bind-to-core ./hellompi172
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Node:  kareline
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and without &quot;--bind-to-core&quot; some processes share a same core with only 50% load each.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With an older MPI version (OpenMPI-1.6.3 built with gcc 4.4) it works on the same server. I try to build OpenMPI-1.7.3 or 1.7.2 with GCC 4.8.1 at this time with openib support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Browsing the developper's list (not this user list), I've found one thread where you discuss about libnuma for a similar problem. libnuma is installed but not the development package (numactl-devel-2.0.7-6.el6.x86_64) so I've just added this package and at this time I'm trying to build again OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We never set binding &quot;on&quot; by default, and there is no configure option that will do so. Never has been, to my knowledge.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you truly want it to bind by default, then you need to add that directive to your default MCA param file:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;prefix&gt;/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 21, 2013, at 3:17 AM, Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am compiling OpenMPI 1.7.3 and 1.7.2 with GCC 4.8.1 but I'm unable to activate some binding policy at compile time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info -a shows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA hwloc: parameter &quot;hwloc_base_binding_policy&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          Policy for binding processes [none (default) | hwthread | core | l1cache | l2cache | l3cache | socket | numa | board] (supported qualifiers: overload-allowed,if-supported)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA hwloc: parameter &quot;hwloc_base_bind_to_core&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          Bind processes to cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA hwloc: parameter &quot;hwloc_base_bind_to_socket&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          Bind processes to sockets
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So clearly it is not activated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried to set these options to ./configure but it doesn't help:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mca-direct=hwloc_base_bind_to_core,hwloc_base_bind_to_socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know it should work because it is working out of the box with OpenMPI-1.6.3 that I have compiled several months ago.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I've messed something but where ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your advices
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Patrick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  LEGI                    |                                      |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev1">&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
</span><br>
<span class="quotelev1">&gt; |  LEGI                    |                                      |
</span><br>
<span class="quotelev1">&gt; |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev1">&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev1">&gt; ===================================================================
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22813.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Previous message:</strong> <a href="22811.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>In reply to:</strong> <a href="22811.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22813.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Reply:</strong> <a href="22813.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
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
