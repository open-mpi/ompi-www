<?
$subject_val = "Re: [OMPI users] How to replace --cpus-per-proc by --map-by";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 05:12:40 2014" -->
<!-- isoreceived="20140327091240" -->
<!-- sent="Thu, 27 Mar 2014 18:11:47 +0900" -->
<!-- isosent="20140327091147" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to replace --cpus-per-proc by --map-by" -->
<!-- id="OF5C622E5B.F6B5B4E0-ON49257CA8.0030AE56-49257CA8.0032981B_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ssbKX=rUkkQnwiYfBE7Hhte_K3UkByXVX9K84h6UO4j8JE4A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-03-27 05:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23983.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23981.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23980.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23987.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="23987.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mapping and binding is related to so called process affinity.
<br>
It's a bit difficult for me to explain ...
<br>
<p>So please see this URL below(especially the first half part
<br>
of it - from 1 to 20 pages):
<br>
<a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>
<br>
<p>Although these slides by Jeff are the explanation for LAMA,
<br>
which is another mapping system installed in the openmpi-1.7
<br>
series, I guess you can easily understand what is mapping and
<br>
binding in general terms.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; Thank you Tetsuya - it worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Btw. what's the difference between mapping and binding? I think I am bit
</span><br>
confused here.
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
<span class="quotelev1">&gt; On Thu, Mar 27, 2014 at 4:19 AM,  &lt;tmishima_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Saliya,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What you want to do is map-by node. So please try below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -np 2 --map-by node:pe=4 --bind-to core
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might not need to add --bind-to core, because it's default binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I see in v.1.7.5rc5 --cpus-per-proc is deprecated and is advised to
</span><br>
<span class="quotelev1">&gt; replace by --map-by&#160;&lt;obj&gt;:PE=N.
</span><br>
<span class="quotelev2">&gt; &gt; I've tried this but I couldn't get the expected allocation of procs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For example I was running 2 procs on 2 nodes each with 2 sockets where
</span><br>
a
<br>
<span class="quotelev1">&gt; socket has 4 cores. I wanted 1 proc per node and bound to all cores in
</span><br>
one
<br>
<span class="quotelev1">&gt; of the sockets. I could get this by using
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --bind-to core: --map-by ppr:1:node --cpus-per-proc 4 -np 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then it'll show bindings as
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [i51:32274] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket 0[core
</span><br>
1
<br>
<span class="quotelev1">&gt; [hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/B/B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [i52:31765] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core
</span><br>
1
<br>
<span class="quotelev1">&gt; [hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/B/B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a better way without using -cpus-per-proc as suggested to get
</span><br>
<span class="quotelev1">&gt; the same effect?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; Saliya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23983.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23981.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23980.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23987.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="23987.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
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
