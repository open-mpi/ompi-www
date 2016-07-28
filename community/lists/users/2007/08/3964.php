<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 08:27:02 2007" -->
<!-- isoreceived="20070831122702" -->
<!-- sent="Fri, 31 Aug 2007 08:26:39 -0400" -->
<!-- isosent="20070831122639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Port Range" -->
<!-- id="792CADF1-014D-41AC-9223-217DA0916D4F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45ae3b650708310406q40eb82cbx7209bcf2d18565db_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-31 08:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3965.php">Jeff Squyres: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Previous message:</strong> <a href="3963.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3963.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3966.php">James Conway: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Reply:</strong> <a href="3966.php">James Conway: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>What do you say about committing your patch?
<br>
<p><p>On Aug 31, 2007, at 7:06 AM, Simon Hammond wrote:
<br>
<p><span class="quotelev1">&gt; On 31/08/2007, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Aug 31, 2007 at 10:49:10AM +0200, Sven Stork wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Friday 31 August 2007 09:07, Gleb Natapov wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Aug 31, 2007 at 08:04:00AM +0100, Simon Hammond wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 31/08/2007, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Received from George Bosilca on Thu, Aug 30, 2007 at  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 07:42:52PM EDT:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have a patch for this, but I never felt a real need for it,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; never push it in the trunk. I'm not completely convinced that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; we need
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it, except in some really strange situations (read grid). Why  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; do you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; need a port range ? For avoiding firewalls ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We are planning on using OpenMPI as the basis for running MPI jobs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; across a series of workstations overnight. The workstations are  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; locked
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; down so that only a small number of ports are available for  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use. If we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; try to use anything else its disaster.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately this is really an organizational policy above  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anything
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; else and its very difficult to get it to change.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As workaround you can write application that will bind to all  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ports that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are not allowed to be used by MPI before running MPI job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another option could be (if that match your policy) to limit the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dynamic port
</span><br>
<span class="quotelev3">&gt;&gt;&gt; range that is used by your OS. By this all application (unless  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they ask for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an specific port) will get ports in this limited port range. If  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following link might be interesting for you:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.ncftp.com/ncftpd/doc/misc/ephemeral_ports.html">http://www.ncftp.com/ncftpd/doc/misc/ephemeral_ports.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was sure it is possible to set a port range on Linux, but didn't  
</span><br>
<span class="quotelev2">&gt;&gt; know how.
</span><br>
<span class="quotelev2">&gt;&gt; This is much better workaround.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks guys, I'll give this a try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Si Hammond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;                         Gleb.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3965.php">Jeff Squyres: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Previous message:</strong> <a href="3963.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3963.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3966.php">James Conway: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Reply:</strong> <a href="3966.php">James Conway: "Re: [OMPI users] OpenMPI and Port Range"</a>
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
