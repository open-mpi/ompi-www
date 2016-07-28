<?
$subject_val = "Re: [OMPI users] Checkpointing automatically at regular intervals";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 10:00:58 2009" -->
<!-- isoreceived="20090630140058" -->
<!-- sent="Tue, 30 Jun 2009 10:00:37 -0400" -->
<!-- isosent="20090630140037" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing automatically at regular intervals" -->
<!-- id="7DEB795E-91E1-4636-8E08-50A7410EEDA7_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="06EC0935-E8A2-4F68-9686-5D3EF06DE7E8_at_inrialpes.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing automatically at regular intervals<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 10:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9778.php">Josh Hursey: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<li><strong>Previous message:</strong> <a href="9776.php">Mohamed Slim bouguerra: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>In reply to:</strong> <a href="9776.php">Mohamed Slim bouguerra: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9780.php">Reuti: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently, there is no mechanism to checkpoint every X minutes in Open  
<br>
MPI.
<br>
<p>As mentioned below you can use a script to initiate the checkpoint  
<br>
every X minutes. Alternatively it should not be too difficult to add  
<br>
such a feature to Open MPI. If enough people would be interested I can  
<br>
file a feature bug to add such a feature in a future release.
<br>
<p>Josh
<br>
<p>On Jun 30, 2009, at 9:34 AM, Mohamed Slim bouguerra wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I think that you can write a simple script such as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; wihle `pgrep mpirun`  != &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint `pidof mpirun`
</span><br>
<span class="quotelev1">&gt; sleep 5
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 30 juin 09 &#224; 14:29, Kritiraj Sajadah a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt;        I can manually checkpoint an MPI application using OPEN MPI  
</span><br>
<span class="quotelev2">&gt;&gt; and BLCR. However, I now want to checkpointing my application  
</span><br>
<span class="quotelev2">&gt;&gt; automatically at every 5 minutes. Is there a way in OPEN MPI to  
</span><br>
<span class="quotelev2">&gt;&gt; ensure automatic checkpointing without the user intervention while  
</span><br>
<span class="quotelev2">&gt;&gt; the application is running?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Kritiraj
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9778.php">Josh Hursey: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<li><strong>Previous message:</strong> <a href="9776.php">Mohamed Slim bouguerra: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>In reply to:</strong> <a href="9776.php">Mohamed Slim bouguerra: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9780.php">Reuti: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
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
