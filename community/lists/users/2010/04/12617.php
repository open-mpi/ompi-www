<?
$subject_val = "Re: [OMPI users] btl_tcp_if_exclude param";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 13 08:55:50 2010" -->
<!-- isoreceived="20100413125550" -->
<!-- sent="Tue, 13 Apr 2010 08:55:45 -0400" -->
<!-- isosent="20100413125545" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_if_exclude param" -->
<!-- id="F7F3C03F-1477-40F0-923C-C723B25CE1D4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="z2y3a37617f1004130532s4307ee81l7ede249567daa28e_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-13 08:55:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12618.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12616.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12616.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12618.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12618.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops!  I neglected to see that you built statically -- hence, all the OMPI plugins got slurped up into their respective libraries (e.g., libmpi.a).  
<br>
<p>If you run ompi_info --param btl tcp, do you see anything at all?  If not, that would indicate that the TCP BTL wasn't built.  IF so, can you send your build logs/etc.?  (please compress!)
<br>
<p><p>On Apr 13, 2010, at 8:32 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MM, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my OpenMPI installation haven't this library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ho can i do to install it? It is very important? Or i can use OpenMPI without this module?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/4/13 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Check in your installation directory under $lib/openmpi -- see if mca_btl_tcp.* is there.  There should be a .so file (and probably a .la file as well).  If the .so is not there, then the BTL TCP plugin is not installed (which would be darn weird, to be honest...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2010, at 8:23 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thaks for your reply!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If i set yout command the response is empty.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This means i haven't installed  TCP BTL plugin?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How can i check it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; These are my build flags:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --disable-ipv6  --disable-dlopen --enable-static --with-openib --with-memory-manager=none --with-mpi-f90-size=medium --with-lsf=/cineca/sysprod/lsf/7.0 --with-lsf-libdir=/cineca/sysprod/lsf/7.0/linux2.6-glibc2.3-x86_64/lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2010/4/13 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; No, that param is still there:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ompi_info --param btl tcp --parsable | grep clude:
</span><br>
<span class="quotelev2">&gt; &gt; mca:btl:tcp:param:btl_tcp_if_include:value:
</span><br>
<span class="quotelev2">&gt; &gt; mca:btl:tcp:param:btl_tcp_if_include:data_source:default value
</span><br>
<span class="quotelev2">&gt; &gt; mca:btl:tcp:param:btl_tcp_if_include:status:writable
</span><br>
<span class="quotelev2">&gt; &gt; mca:btl:tcp:param:btl_tcp_if_include:help:Comma-delimited list of devices or CIDR notation of networks to use for MPI communication (e.g., &quot;eth0,eth1&quot; or &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with btl_tcp_if_exclude.
</span><br>
<span class="quotelev2">&gt; &gt; mca:btl:tcp:param:btl_tcp_if_include:deprecated:no
</span><br>
<span class="quotelev2">&gt; &gt; mca:btl:tcp:param:btl_tcp_if_exclude:value:lo,sppp
</span><br>
<span class="quotelev2">&gt; &gt; mca:btl:tcp:param:btl_tcp_if_exclude:data_source:default value
</span><br>
<span class="quotelev2">&gt; &gt; mca:btl:tcp:param:btl_tcp_if_exclude:status:writable
</span><br>
<span class="quotelev2">&gt; &gt; mca:btl:tcp:param:btl_tcp_if_exclude:help:Comma-delimited list of devices or CIDR notation of networks to NOT use for MPI communication -- all devices not matching these specifications will be used (e.g., &quot;eth0,eth1&quot; or &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with btl_tcp_if_include.
</span><br>
<span class="quotelev2">&gt; &gt; mca:btl:tcp:param:btl_tcp_if_exclude:deprecated:no
</span><br>
<span class="quotelev2">&gt; &gt; $
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did your TCP BTL plugin somehow not get built / installed?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 13, 2010, at 6:06 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dear OpenMPI users and developers,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm trying OpenMPI 1.3.3 and i've noted that btl_tcp_if_exclude is not supported from new version:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the response to this command:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_info --param all all | grep btl_tcp_if_exclude
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is empty.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Maybe that params is renamed?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Parallel programmer
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Supercomputing Group
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it           
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12618.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12616.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12616.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12618.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12618.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
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
