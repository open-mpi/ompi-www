<?
$subject_val = "Re: [OMPI users] btl_tcp_if_exclude param";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 13 08:23:06 2010" -->
<!-- isoreceived="20100413122306" -->
<!-- sent="Tue, 13 Apr 2010 14:23:00 +0200" -->
<!-- isosent="20100413122300" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_if_exclude param" -->
<!-- id="j2y3a37617f1004130523s304364cchf96e41fcbc4b4773_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="33F1E96F-80B2-44B2-9D0F-550D0DAD4A18_at_cisco.com" -->
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
<strong>Date:</strong> 2010-04-13 08:23:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12615.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12613.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12613.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12615.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12615.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>thaks for your reply!
<br>
<p>If i set yout command the response is empty.
<br>
<p>This means i haven't installed  TCP BTL plugin?
<br>
<p>How can i check it?
<br>
<p>These are my build flags:
<br>
<p>--disable-ipv6  --disable-dlopen --enable-static --with-openib
<br>
--with-memory-manager=none --with-mpi-f90-size=medium
<br>
--with-lsf=/cineca/sysprod/lsf/7.0
<br>
--with-lsf-libdir=/cineca/sysprod/lsf/7.0/linux2.6-glibc2.3-x86_64/lib
<br>
<p><p>2010/4/13 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; No, that param is still there:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ompi_info --param btl tcp --parsable | grep clude:
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_include:value:
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_include:data_source:default value
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_include:status:writable
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_include:help:Comma-delimited list of devices
</span><br>
<span class="quotelev1">&gt; or CIDR notation of networks to use for MPI communication (e.g., &quot;eth0,eth1&quot;
</span><br>
<span class="quotelev1">&gt; or &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude.
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_include:deprecated:no
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_exclude:value:lo,sppp
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_exclude:data_source:default value
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_exclude:status:writable
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_exclude:help:Comma-delimited list of devices
</span><br>
<span class="quotelev1">&gt; or CIDR notation of networks to NOT use for MPI communication -- all devices
</span><br>
<span class="quotelev1">&gt; not matching these specifications will be used (e.g., &quot;eth0,eth1&quot; or &quot;
</span><br>
<span class="quotelev1">&gt; 192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with btl_tcp_if_include.
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_exclude:deprecated:no
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did your TCP BTL plugin somehow not get built / installed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2010, at 6:06 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear OpenMPI users and developers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying OpenMPI 1.3.3 and i've noted that btl_tcp_if_exclude is not
</span><br>
<span class="quotelev1">&gt; supported from new version:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the response to this command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info --param all all | grep btl_tcp_if_exclude
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; is empty.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Maybe that params is renamed?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12614/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12615.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12613.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12613.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12615.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12615.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
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
