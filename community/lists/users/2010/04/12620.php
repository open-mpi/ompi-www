<?
$subject_val = "Re: [OMPI users] btl_tcp_if_exclude param";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 13 09:17:13 2010" -->
<!-- isoreceived="20100413131713" -->
<!-- sent="Tue, 13 Apr 2010 15:17:07 +0200" -->
<!-- isosent="20100413131707" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_if_exclude param" -->
<!-- id="q2g3a37617f1004130617qd397ebf8v2a465a12395d66ed_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="91D8D58C-407A-468C-A69C-8071C09E8A5E_at_cisco.com" -->
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
<strong>Date:</strong> 2010-04-13 09:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12621.php">Jürgen Kaiser: "[OMPI users] Don't crash on node failures"</a>
<li><strong>Previous message:</strong> <a href="12619.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12619.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12623.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12623.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it's right!
<br>
<p>Now i can see btl_tcp_if_include flag:
<br>
<p>MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;, data source:
<br>
default value)
<br>
MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;eth0,ib0,ib1&quot;, data
<br>
source: file
<br>
<p>[/cineca/prod/opt/compilers/openmpi/1.3.3/intel--11.1--binary/etc/openmpi-mca-params.conf])
<br>
<p>My actual configuration is:
<br>
<p>btl = ^tcp
<br>
btl_tcp_if_exclude = eth0,ib0,ib1
<br>
oob_tcp_include = eth1,lo
<br>
<p>But is it right? I have some doubt..
<br>
<p>2010/4/13 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Apr 13, 2010, at 9:03 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info --param btl tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah ha... this is revealing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl&quot; (current value: &quot;^tcp&quot;, data
</span><br>
<span class="quotelev1">&gt; source: file
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; [/cineca/prod/opt/compilers/openmpi/1.3.3/intel--11.1--binary/etc/openmpi-mca-params.conf])
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for the btl
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems you have a config file
</span><br>
<span class="quotelev1">&gt; /cineca/prod/opt/compilers/openmpi/1.3.3/intel--11.1--binary/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; that is excluding the TCP BTL from being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This config file will even prevent the TCP BTL from being shown in
</span><br>
<span class="quotelev1">&gt; ompi_info -- remember that ompi_info shows *current* values of MCA
</span><br>
<span class="quotelev1">&gt; parameters.  So you might want to do something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ompi_info --mca btl &quot;&quot; --param btl tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would override the &quot;btl&quot; MCA parameter in your config file, allow the
</span><br>
<span class="quotelev1">&gt; BTL TCP to be loaded by ompi_info, and therefore show you all the BTL TCP
</span><br>
<span class="quotelev1">&gt; params.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12621.php">Jürgen Kaiser: "[OMPI users] Don't crash on node failures"</a>
<li><strong>Previous message:</strong> <a href="12619.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12619.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12623.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12623.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
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
