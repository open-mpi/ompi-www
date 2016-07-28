<?
$subject_val = "Re: [OMPI users] TCP BTL in different subnets?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 10:53:37 2008" -->
<!-- isoreceived="20080930145337" -->
<!-- sent="Tue, 30 Sep 2008 16:53:32 +0200" -->
<!-- isosent="20080930145332" -->
<!-- name="Jeroen Kleijer" -->
<!-- email="jeroen.kleijer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP BTL in different subnets?" -->
<!-- id="dad39cd60809300753r2d983bddmafbeb426e59b2f28_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D703F4D0-4CAB-42FA-8A55-CC4D8A3BD5D9_at_cisco.com" -->
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
<strong>From:</strong> Jeroen Kleijer (<em>jeroen.kleijer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 10:53:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6794.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6792.php">Jeff Squyres: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>In reply to:</strong> <a href="6792.php">Jeff Squyres: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>No worries.
<br>
I've been able to get the most recent (1.3a september 25th)  to
<br>
compile and it does exactly what I need it to do (which is work
<br>
accross different subnets) and I can basically support that myself.
<br>
(not quite sure what went wrong first time I tried this though)
<br>
<p>Strange thing is, we've searched through the 1.2 code branch for the
<br>
function that causes this (which is in the file
<br>
ompi/mca/btl/tcp/btl_tcp_proc.c, function is_private_ipv4() ) and
<br>
adjusted this to always return true. This also seems to work! (don't
<br>
think this will be accepted as a patch as I have absolutely _no_ idea
<br>
what it'll break but both solutions seem to work for me(tm) )
<br>
<p>Regards,
<br>
<p>Jeroen Kleijer
<br>
<p>On Tue, Sep 30, 2008 at 4:38 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay in replying -- I thought I had replied to this already,
</span><br>
<span class="quotelev1">&gt; but I guess I hadn't.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've talked about this feature several times, but this specific
</span><br>
<span class="quotelev1">&gt; functionality hasn't made it into the OMPI code base yet.  Sorry!  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (patches would be gladly accepted, but note that we'll likely be kinda picky
</span><br>
<span class="quotelev1">&gt; about this code because it's a little hairy and complex...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2008, at 7:00 PM, Jeroen Kleijer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to get an openmpi application running accross different
</span><br>
<span class="quotelev2">&gt;&gt; nodes but seem to have hit a snag when the processes are on different
</span><br>
<span class="quotelev2">&gt;&gt; nodes, especially when the machines are on different TCP subnets.
</span><br>
<span class="quotelev2">&gt;&gt; The orted daemons start up fine but after that application borks with
</span><br>
<span class="quotelev2">&gt;&gt; the message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with errno=111
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've read in this thread
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://thread.gmane.org/gmane.comp.clustering.open-mpi.user/3427/focus=3437">http://thread.gmane.org/gmane.comp.clustering.open-mpi.user/3427/focus=3437</a>
</span><br>
<span class="quotelev2">&gt;&gt; that openmpi currently can't do this yet but (pre-release?) versions
</span><br>
<span class="quotelev2">&gt;&gt; of openmpi 1.3 will work.
</span><br>
<span class="quotelev2">&gt;&gt; I've tried compiling openmpi 1.3a (nightly build) and running my
</span><br>
<span class="quotelev2">&gt;&gt; program with that (compiled with the mpicc of openmpi 1.3a) but I got
</span><br>
<span class="quotelev2">&gt;&gt; the same error message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody confirm that:
</span><br>
<span class="quotelev2">&gt;&gt; 1) openmpi has dificulties using the tcp btl accross different subnets
</span><br>
<span class="quotelev2">&gt;&gt; 2) there are currently no workarounds for this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If there are solutions to this I'd really like to know about it as
</span><br>
<span class="quotelev2">&gt;&gt; I've been trying this for quite a while now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeroen Kleijer
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6794.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6792.php">Jeff Squyres: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>In reply to:</strong> <a href="6792.php">Jeff Squyres: "Re: [OMPI users] TCP BTL in different subnets?"</a>
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
