<?
$subject_val = "Re: [OMPI users] TCP BTL in different subnets?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 10:40:44 2008" -->
<!-- isoreceived="20080930144044" -->
<!-- sent="Tue, 30 Sep 2008 10:38:57 -0400" -->
<!-- isosent="20080930143857" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP BTL in different subnets?" -->
<!-- id="D703F4D0-4CAB-42FA-8A55-CC4D8A3BD5D9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="dad39cd60809191600l7534a2efqdbda2481f9724296_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP BTL in different subnets?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 10:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6793.php">Jeroen Kleijer: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>Previous message:</strong> <a href="6791.php">Jeff Squyres: "Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6632.php">Jeroen Kleijer: "[OMPI users] TCP BTL in different subnets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6793.php">Jeroen Kleijer: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>Reply:</strong> <a href="6793.php">Jeroen Kleijer: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying -- I thought I had replied to this  
<br>
already, but I guess I hadn't.  :-(
<br>
<p>We've talked about this feature several times, but this specific  
<br>
functionality hasn't made it into the OMPI code base yet.  Sorry!  :-(
<br>
<p>(patches would be gladly accepted, but note that we'll likely be kinda  
<br>
picky about this code because it's a little hairy and complex...)
<br>
<p><p>On Sep 19, 2008, at 7:00 PM, Jeroen Kleijer wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get an openmpi application running accross different
</span><br>
<span class="quotelev1">&gt; nodes but seem to have hit a snag when the processes are on different
</span><br>
<span class="quotelev1">&gt; nodes, especially when the machines are on different TCP subnets.
</span><br>
<span class="quotelev1">&gt; The orted daemons start up fine but after that application borks with
</span><br>
<span class="quotelev1">&gt; the message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=111
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've read in this thread
</span><br>
<span class="quotelev1">&gt; <a href="http://thread.gmane.org/gmane.comp.clustering.open-mpi.user/3427/focus=3437">http://thread.gmane.org/gmane.comp.clustering.open-mpi.user/3427/focus=3437</a>
</span><br>
<span class="quotelev1">&gt; that openmpi currently can't do this yet but (pre-release?) versions
</span><br>
<span class="quotelev1">&gt; of openmpi 1.3 will work.
</span><br>
<span class="quotelev1">&gt; I've tried compiling openmpi 1.3a (nightly build) and running my
</span><br>
<span class="quotelev1">&gt; program with that (compiled with the mpicc of openmpi 1.3a) but I got
</span><br>
<span class="quotelev1">&gt; the same error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody confirm that:
</span><br>
<span class="quotelev1">&gt; 1) openmpi has dificulties using the tcp btl accross different subnets
</span><br>
<span class="quotelev1">&gt; 2) there are currently no workarounds for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there are solutions to this I'd really like to know about it as
</span><br>
<span class="quotelev1">&gt; I've been trying this for quite a while now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeroen Kleijer
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
<li><strong>Next message:</strong> <a href="6793.php">Jeroen Kleijer: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>Previous message:</strong> <a href="6791.php">Jeff Squyres: "Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6632.php">Jeroen Kleijer: "[OMPI users] TCP BTL in different subnets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6793.php">Jeroen Kleijer: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>Reply:</strong> <a href="6793.php">Jeroen Kleijer: "Re: [OMPI users] TCP BTL in different subnets?"</a>
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
