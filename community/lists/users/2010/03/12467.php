<?
$subject_val = "Re: [OMPI users] openMPI on Xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 16:13:36 2010" -->
<!-- isoreceived="20100329201336" -->
<!-- sent="Mon, 29 Mar 2010 16:13:11 -0400" -->
<!-- isosent="20100329201311" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI on Xgrid" -->
<!-- id="b66245471003291313id1a7710o2794052826c32839_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b66245471003291311u5a5f9532s255a43add0304e8f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI on Xgrid<br>
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 16:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12468.php">Jeff Squyres: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12466.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>In reply to:</strong> <a href="12466.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12468.php">Jeff Squyres: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
at least it would be a good exercise to complete the process with xgrid +
<br>
openMPI for the knowledge
<br>
<p>Cristobal
<br>
<p><p><p><p>On Mon, Mar 29, 2010 at 4:11 PM, Cristobal Navarro &lt;axischire_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; i realized that xcode dev tools include openMPI 1.2.x
</span><br>
<span class="quotelev1">&gt; should i keep trying??
</span><br>
<span class="quotelev1">&gt; or do you recommend to completly abandon xgrid and go for another tool like
</span><br>
<span class="quotelev1">&gt; Torque with openMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 29, 2010 at 3:48 PM, Jody Klymak &lt;jklymak_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 29, 2010, at  12:39 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 29, 2010, at 1:34 PM, Cristobal Navarro wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the information,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but is it possible to make it work with xgrid or the 1.4.1 version just
</span><br>
<span class="quotelev2">&gt;&gt; dont support it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I've had excellent success with Torque and openmpi on OS-X 10.5
</span><br>
<span class="quotelev2">&gt;&gt; Server.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.clusterresources.com/products/torque-resource-manager.php">http://www.clusterresources.com/products/torque-resource-manager.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It doesn't have a nice dashboard, but the queue tools are more than
</span><br>
<span class="quotelev2">&gt;&gt; adequate for my needs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI had a funny port issue on my setup that folks helped with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From my notes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Edited /Network/Xgrid/openmpi/etc/openmpi-mca-params.conf to make sure
</span><br>
<span class="quotelev2">&gt;&gt; that the right ports are used:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;example&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # set ports so that they are more valid than the default ones (see email
</span><br>
<span class="quotelev2">&gt;&gt; from Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_port_min_v4 = 36900
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_port_range  = 32
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/example&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,  Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12467/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12468.php">Jeff Squyres: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12466.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>In reply to:</strong> <a href="12466.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12468.php">Jeff Squyres: "Re: [OMPI users] openMPI on Xgrid"</a>
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
