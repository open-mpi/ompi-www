<?
$subject_val = "Re: [OMPI users] Checkpointing automatically at regular intervals";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 09:34:58 2009" -->
<!-- isoreceived="20090630133458" -->
<!-- sent="Tue, 30 Jun 2009 15:34:54 +0200" -->
<!-- isosent="20090630133454" -->
<!-- name="Mohamed Slim bouguerra" -->
<!-- email="mohamed-slim.bouguerra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing automatically at regular intervals" -->
<!-- id="06EC0935-E8A2-4F68-9686-5D3EF06DE7E8_at_inrialpes.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="706780.12808.qm_at_web31004.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Mohamed Slim bouguerra (<em>mohamed-slim.bouguerra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 09:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9777.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>Previous message:</strong> <a href="9775.php">Mohamed Slim bouguerra: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<li><strong>In reply to:</strong> <a href="9772.php">Kritiraj Sajadah: "[OMPI users] Checkpointing automatically at regular intervals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9777.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>Reply:</strong> <a href="9777.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I think that you can write a simple script such as:
<br>
<p>wihle `pgrep mpirun`  != &quot;&quot;
<br>
ompi-checkpoint `pidof mpirun`
<br>
sleep 5
<br>
done
<br>
<p>Le 30 juin 09 &#224; 14:29, Kritiraj Sajadah a &#233;crit :
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;         I can manually checkpoint an MPI application using OPEN MPI  
</span><br>
<span class="quotelev1">&gt; and BLCR. However, I now want to checkpointing my application  
</span><br>
<span class="quotelev1">&gt; automatically at every 5 minutes. Is there a way in OPEN MPI to  
</span><br>
<span class="quotelev1">&gt; ensure automatic checkpointing without the user intervention while  
</span><br>
<span class="quotelev1">&gt; the application is running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Kritiraj
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9777.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>Previous message:</strong> <a href="9775.php">Mohamed Slim bouguerra: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<li><strong>In reply to:</strong> <a href="9772.php">Kritiraj Sajadah: "[OMPI users] Checkpointing automatically at regular intervals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9777.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>Reply:</strong> <a href="9777.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
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
