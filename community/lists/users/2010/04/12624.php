<?
$subject_val = "Re: [OMPI users] btl_tcp_if_exclude param";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 13 09:50:20 2010" -->
<!-- isoreceived="20100413135020" -->
<!-- sent="Tue, 13 Apr 2010 15:50:15 +0200" -->
<!-- isosent="20100413135015" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_if_exclude param" -->
<!-- id="z2n3a37617f1004130650s753007a3lf6f96d6c21bc3be0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CB88F6E-F9B0-43D5-BC3E-3A9359CA64EC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_tcp_if_exclude param<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-13 09:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12625.php">Ralph Castain: "Re: [OMPI users] Don't crash on node failures"</a>
<li><strong>Previous message:</strong> <a href="12623.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12623.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok Jeff,
<br>
<p>i have understood. Thanks very much for your help!
<br>
<p>Regards.
<br>
<p><p>2010/4/13 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Apr 13, 2010, at 9:17 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; My actual configuration is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; btl = ^tcp
</span><br>
<span class="quotelev2">&gt; &gt; btl_tcp_if_exclude = eth0,ib0,ib1
</span><br>
<span class="quotelev2">&gt; &gt; oob_tcp_include = eth1,lo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But is it right? I have some doubt..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It depends on what &quot;right&quot; is in your environment.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your default config excludes the BTL TCP, assumedly because you want
</span><br>
<span class="quotelev1">&gt; OpenFabrics/IB to be the default transport for MPI messages.  That's
</span><br>
<span class="quotelev1">&gt; probably good.  In the &quot;^tcp&quot; case, the BTL TCP isn't even loaded -- so the
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude parameter isn't even used.  But if someone overrides the
</span><br>
<span class="quotelev1">&gt; &quot;btl&quot; parameter and *does* load the TCP BTL, then the btl_tcp_if_exclude
</span><br>
<span class="quotelev1">&gt; parameter will mean something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it's not harmful to have the btl_tcp_if_exclude parameter specified,
</span><br>
<span class="quotelev1">&gt; even if it isn't used most of the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The oob_tcp_include parameter tells OMPI how to use it's &quot;out of band&quot;
</span><br>
<span class="quotelev1">&gt; channel for setup/teardown of the overall job, creating MPI data
</span><br>
<span class="quotelev1">&gt; connections, etc.  You're telling it which devices it can use.  It probably
</span><br>
<span class="quotelev1">&gt; would be ok to use &quot;eth1&quot; and drop the &quot;,lo&quot; part.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12624/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12625.php">Ralph Castain: "Re: [OMPI users] Don't crash on node failures"</a>
<li><strong>Previous message:</strong> <a href="12623.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12623.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
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
