<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 10:24:26 2013" -->
<!-- isoreceived="20131021142426" -->
<!-- sent="Mon, 21 Oct 2013 07:24:23 -0700" -->
<!-- isosent="20131021142423" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity" -->
<!-- id="9FC30FF5-B960-4F36-B7CC-65E3D1C8EDC4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5264FF42.60605_at_legi.grenoble-inp.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 10:24:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22809.php">MM: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Previous message:</strong> <a href="22807.php">Andreas Sch&#228;fer: "Re: [OMPI users] calculation progress status"</a>
<li><strong>In reply to:</strong> <a href="22805.php">Patrick Begou: "[OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22811.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Reply:</strong> <a href="22811.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We never set binding &quot;on&quot; by default, and there is no configure option that will do so. Never has been, to my knowledge.
<br>
<p>If you truly want it to bind by default, then you need to add that directive to your default MCA param file:
<br>
<p>&lt;prefix&gt;/etc/openmpi-mca-params.conf
<br>
<p><p>On Oct 21, 2013, at 3:17 AM, Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am compiling OpenMPI 1.7.3 and 1.7.2 with GCC 4.8.1 but I'm unable to activate some binding policy at compile time.
</span><br>
<span class="quotelev1">&gt; ompi_info -a shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA hwloc: parameter &quot;hwloc_base_binding_policy&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                          Policy for binding processes [none (default) | hwthread | core | l1cache | l2cache | l3cache | socket | numa | board] (supported qualifiers: overload-allowed,if-supported)
</span><br>
<span class="quotelev1">&gt; MCA hwloc: parameter &quot;hwloc_base_bind_to_core&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                          Bind processes to cores
</span><br>
<span class="quotelev1">&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt; MCA hwloc: parameter &quot;hwloc_base_bind_to_socket&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                          Bind processes to sockets
</span><br>
<span class="quotelev1">&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So clearly it is not activated.
</span><br>
<span class="quotelev1">&gt; I've tried to set these options to ./configure but it doesn't help:
</span><br>
<span class="quotelev1">&gt; --enable-mca-direct=hwloc_base_bind_to_core,hwloc_base_bind_to_socket
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know it should work because it is working out of the box with OpenMPI-1.6.3 that I have compiled several months ago.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I've messed something but where ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your advices
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22809.php">MM: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Previous message:</strong> <a href="22807.php">Andreas Sch&#228;fer: "Re: [OMPI users] calculation progress status"</a>
<li><strong>In reply to:</strong> <a href="22805.php">Patrick Begou: "[OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22811.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Reply:</strong> <a href="22811.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
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
