<?
$subject_val = "[OMPI users] How to replace --cpus-per-proc by --map-by";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 04:04:18 2014" -->
<!-- isoreceived="20140327080418" -->
<!-- sent="Thu, 27 Mar 2014 04:04:18 -0400" -->
<!-- isosent="20140327080418" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] How to replace --cpus-per-proc by --map-by" -->
<!-- id="CA+ssbKU-5cqX37d7RUirGmvbNTbwMK8cStgZiYGkLpqKTbGhpg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to replace --cpus-per-proc by --map-by<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 04:04:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23979.php">tmishima_at_[hidden]: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23979.php">tmishima_at_[hidden]: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="23979.php">tmishima_at_[hidden]: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I see in v.1.7.5rc5 --cpus-per-proc is deprecated and is advised to replace
<br>
by --map-by &lt;obj&gt;:PE=N.
<br>
I've tried this but I couldn't get the expected allocation of procs.
<br>
<p>For example I was running 2 procs on 2 nodes each with 2 sockets where a
<br>
socket has 4 cores. I wanted 1 proc per node and bound to all cores in one
<br>
of the sockets. I could get this by using
<br>
<p>--bind-to core: --map-by ppr:1:node --cpus-per-proc 4 -np 2
<br>
<p>Then it'll show bindings as
<br>
<p>*[i51:32274] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket 0[core
<br>
1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]]:
<br>
[B/B/B/B][./././.]*
<br>
*[i52:31765] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core
<br>
1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]]:
<br>
[B/B/B/B][./././.]*
<br>
<p><p>Is there a better way without using -cpus-per-proc as suggested to get the
<br>
same effect?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23979.php">tmishima_at_[hidden]: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23979.php">tmishima_at_[hidden]: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="23979.php">tmishima_at_[hidden]: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
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
