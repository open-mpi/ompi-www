<?
$subject_val = "Re: [OMPI users] How to replace --cpus-per-proc by --map-by";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 04:20:06 2014" -->
<!-- isoreceived="20140327082006" -->
<!-- sent="Thu, 27 Mar 2014 17:19:17 +0900" -->
<!-- isosent="20140327081917" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to replace --cpus-per-proc by --map-by" -->
<!-- id="OFF953BE55.F4D5D6AC-ON49257CA8.002D39F2-49257CA8.002DC98D_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ssbKU-5cqX37d7RUirGmvbNTbwMK8cStgZiYGkLpqKTbGhpg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to replace --cpus-per-proc by --map-by<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20How%20to%20replace%20--cpus-per-proc%20by%20--map-by"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-27 04:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23980.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="23978.php">Saliya Ekanayake: "[OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>In reply to:</strong> <a href="23978.php">Saliya Ekanayake: "[OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23980.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="23980.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Saliya,
<br>
<p>What you want to do is map-by node. So please try below:
<br>
<p>-np 2 --map-by node:pe=4 --bind-to core
<br>
<p>You might not need to add --bind-to core, because it's default binding.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see in v.1.7.5rc5 --cpus-per-proc is deprecated and is advised to
</span><br>
replace by --map-by&#160;&lt;obj&gt;:PE=N.
<br>
<span class="quotelev1">&gt; I've tried this but I couldn't get the expected allocation of procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example I was running 2 procs on 2 nodes each with 2 sockets where a
</span><br>
socket has 4 cores. I wanted 1 proc per node and bound to all cores in one
<br>
of the sockets. I could get this by using
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --bind-to core: --map-by ppr:1:node --cpus-per-proc 4 -np 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then it'll show bindings as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [i51:32274] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket 0[core 1
</span><br>
[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]]:
<br>
[B/B/B/B][./././.]
<br>
<span class="quotelev1">&gt; [i52:31765] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 1
</span><br>
[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]]:
<br>
[B/B/B/B][./././.]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a better way without using -cpus-per-proc as suggested to get
</span><br>
the same effect?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23980.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="23978.php">Saliya Ekanayake: "[OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>In reply to:</strong> <a href="23978.php">Saliya Ekanayake: "[OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23980.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="23980.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
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
