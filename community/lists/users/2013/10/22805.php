<?
$subject_val = "[OMPI users] Compiling OpenMPI 1.7.x with core afinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 06:17:42 2013" -->
<!-- isoreceived="20131021101742" -->
<!-- sent="Mon, 21 Oct 2013 12:17:38 +0200" -->
<!-- isosent="20131021101738" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling OpenMPI 1.7.x with core afinity" -->
<!-- id="5264FF42.60605_at_legi.grenoble-inp.fr" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Compiling OpenMPI 1.7.x with core afinity<br>
<strong>From:</strong> Patrick Begou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 06:17:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22806.php">MM: "[OMPI users] calculation progress status"</a>
<li><strong>Previous message:</strong> <a href="22804.php">Iliev, Hristo: "Re: [OMPI users] debugging performance regressions between versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22808.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Reply:</strong> <a href="22808.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am compiling OpenMPI 1.7.3 and 1.7.2 with GCC 4.8.1 but I'm unable to activate 
<br>
some binding policy at compile time.
<br>
ompi_info -a shows:
<br>
<p>MCA hwloc: parameter &quot;hwloc_base_binding_policy&quot; (current value: &quot;&quot;, data 
<br>
source: default, level: 9 dev/all, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Policy for binding processes [none (default) | 
<br>
hwthread | core | l1cache | l2cache | l3cache | socket | numa | board] 
<br>
(supported qualifiers: overload-allowed,if-supported)
<br>
MCA hwloc: parameter &quot;hwloc_base_bind_to_core&quot; (current value: &quot;false&quot;, data 
<br>
source: default, level: 9 dev/all, type: bool)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bind processes to cores
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valid values: 0: f|false|disabled, 1: t|true|enabled
<br>
MCA hwloc: parameter &quot;hwloc_base_bind_to_socket&quot; (current value: &quot;false&quot;, data 
<br>
source: default, level: 9 dev/all, type: bool)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bind processes to sockets
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valid values: 0: f|false|disabled, 1: t|true|enabled
<br>
<p>So clearly it is not activated.
<br>
I've tried to set these options to ./configure but it doesn't help:
<br>
--enable-mca-direct=hwloc_base_bind_to_core,hwloc_base_bind_to_socket
<br>
<p>I know it should work because it is working out of the box with OpenMPI-1.6.3 
<br>
that I have compiled several months ago.
<br>
<p>I think I've messed something but where ?
<br>
<p>Thanks for your advices
<br>
<p>Patrick
<br>
<p><pre>
-- 
===================================================================
|  Equipe M.O.S.T.         |                                      |
|  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
|  LEGI                    |                                      |
|  BP 53 X                 | Tel 04 76 82 51 35                   |
|  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
===================================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22806.php">MM: "[OMPI users] calculation progress status"</a>
<li><strong>Previous message:</strong> <a href="22804.php">Iliev, Hristo: "Re: [OMPI users] debugging performance regressions between versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22808.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Reply:</strong> <a href="22808.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
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
