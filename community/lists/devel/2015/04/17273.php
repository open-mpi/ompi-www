<?
$subject_val = "[OMPI devel]  binding output error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 09:29:40 2015" -->
<!-- isoreceived="20150420132940" -->
<!-- sent="Mon, 20 Apr 2015 17:29:39 +0400" -->
<!-- isosent="20150420132939" -->
<!-- name="Elena Elkina" -->
<!-- email="elena.elkina_at_[hidden]" -->
<!-- subject="[OMPI devel]  binding output error" -->
<!-- id="CANhOtjbr-yz64r3vJgb+fxfajOZUh1_3wnogmQP0APv0ja-ycw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel]  binding output error<br>
<strong>From:</strong> Elena Elkina (<em>elena.elkina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 09:29:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17274.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17272.php">Rolf vandeVaart: "Re: [OMPI devel] c_accumulate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17282.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<li><strong>Reply:</strong> <a href="17282.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>I faced with an issue on our cluster related to mapping &amp; binding policies
<br>
on 1.8.5.
<br>
<p>The matter is that --report-bindings output doesn't correspond to the
<br>
locale. It looks like there is a mistake on the output itself, because it
<br>
just puts serial core number while that core can be on another socket. For
<br>
example,
<br>
<p>mpirun -np 2 --display-devel-map --report-bindings --map-by *socket*
<br>
hostname
<br>
&nbsp;Data for JOB [43064,1] offset 0
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYSOCKET
<br>
&nbsp;Ranking policy: SOCKET
<br>
&nbsp;Binding policy: CORE  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
<br>
&nbsp;&nbsp;Num new daemons: 0 New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: clx-orion-001  Launch id: -1 State: 2
<br>
&nbsp;&nbsp;Daemon: [[43064,0],0] Daemon launched: True
<br>
&nbsp;&nbsp;Num slots: 28 Slots in use: 2 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;Num slots allocated: 28 Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 2 Next node_rank: 2
<br>
&nbsp;&nbsp;Data for proc: [[43064,1],0]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 0 Node rank: 0 App rank: 0
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 *Locale: 0-6,14-20* Bind
<br>
location: 0 Binding: 0
<br>
&nbsp;&nbsp;Data for proc: [[43064,1],1]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 1 Node rank: 1 App rank: 1
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 *Locale: 7-13,21-27* Bind
<br>
location: 7 Binding: 7
<br>
[clx-orion-001:26951] MCW rank 0 bound to socket 0[*core 0[*hwt 0]]:
<br>
[B/././././././././././././.][./././././././././././././.]
<br>
[clx-orion-001:26951] MCW rank 1 bound to socket 1[*core 14*[hwt 0]]:
<br>
[./././././././././././././.][B/././././././././././././.]
<br>
<p>The second process should be bound at core 7 (not core 14).
<br>
<p><p>Another example:
<br>
mpirun -np 8 --display-devel-map --report-bindings --map-by core hostname
<br>
&nbsp;Data for JOB [43202,1] offset 0
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYCORE
<br>
&nbsp;Ranking policy: CORE
<br>
&nbsp;Binding policy: CORE  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
<br>
&nbsp;&nbsp;Num new daemons: 0 New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: clx-orion-001  Launch id: -1 State: 2
<br>
&nbsp;&nbsp;Daemon: [[43202,0],0] Daemon launched: True
<br>
&nbsp;&nbsp;Num slots: 28 Slots in use: 8 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;Num slots allocated: 28 Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 8 Next node_rank: 8
<br>
&nbsp;&nbsp;Data for proc: [[43202,1],0]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 0 Node rank: 0 App rank: 0
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: 0 Bind
<br>
location: 0 Binding:
<br>
0
<br>
&nbsp;&nbsp;Data for proc: [[43202,1],1]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 1 Node rank: 1 App rank: 1
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: 1 Bind
<br>
location: 1 Binding:
<br>
1
<br>
&nbsp;&nbsp;Data for proc: [[43202,1],2]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 2 Node rank: 2 App rank: 2
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: 2 Bind
<br>
location: 2 Binding:
<br>
2
<br>
&nbsp;&nbsp;Data for proc: [[43202,1],3]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 3 Node rank: 3 App rank: 3
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: 3 Bind
<br>
location: 3 Binding:
<br>
3
<br>
&nbsp;&nbsp;Data for proc: [[43202,1],4]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 4 Node rank: 4 App rank: 4
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: 4 Bind
<br>
location: 4 Binding:
<br>
4
<br>
&nbsp;&nbsp;Data for proc: [[43202,1],5]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 5 Node rank: 5 App rank: 5
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: 5 Bind
<br>
location: 5 Binding:
<br>
5
<br>
&nbsp;&nbsp;Data for proc: [[43202,1],6]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 6 Node rank: 6 App rank: 6
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: 6 Bind
<br>
location: 6 Binding:
<br>
6
<br>
&nbsp;&nbsp;Data for proc: [[43202,1],7]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 7 Node rank: 7 App rank: 7
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 *Locale: 14* Bind location:
<br>
14 Binding: 14
<br>
[clx-orion-001:27069] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././././././././.][./././././././././././././.]
<br>
[clx-orion-001:27069] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./././././././././././.][./././././././././././././.]
<br>
[clx-orion-001:27069] MCW rank 2 bound to socket 0[core 2[hwt 0]]:
<br>
[././B/././././././././././.][./././././././././././././.]
<br>
[clx-orion-001:27069] MCW rank 3 bound to socket 0[core 3[hwt 0]]:
<br>
[./././B/./././././././././.][./././././././././././././.]
<br>
[clx-orion-001:27069] MCW rank 4 bound to socket 0[core 4[hwt 0]]:
<br>
[././././B/././././././././.][./././././././././././././.]
<br>
[clx-orion-001:27069] MCW rank 5 bound to socket 0[core 5[hwt 0]]:
<br>
[./././././B/./././././././.][./././././././././././././.]
<br>
[clx-orion-001:27069] MCW rank 6 bound to socket 0[core 6[hwt 0]]:
<br>
[././././././B/././././././.][./././././././././././././.]
<br>
[clx-orion-001:27069] MCW rank 7 bound to socket 0[*core 7*[hwt 0]]:
<br>
[./././././././B/./././././.][./././././././././././././.]
<br>
<p>Rank 7 should be bound at core 14 instead of core 7 since core 7 is at
<br>
another socket.
<br>
<p>Best regards,
<br>
Elena
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17273/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17274.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17272.php">Rolf vandeVaart: "Re: [OMPI devel] c_accumulate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17282.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<li><strong>Reply:</strong> <a href="17282.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
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
