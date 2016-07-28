<?
$subject_val = "Re: [OMPI users] Checkpointing automatically at regular intervals";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 11:37:39 2009" -->
<!-- isoreceived="20090630153739" -->
<!-- sent="Tue, 30 Jun 2009 08:37:34 -0700 (PDT)" -->
<!-- isosent="20090630153734" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing automatically at regular intervals" -->
<!-- id="89414.86219.qm_at_web31008.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Checkpointing automatically at regular intervals" -->
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
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 11:37:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9782.php">Prentice Bisbal: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Previous message:</strong> <a href="9780.php">Reuti: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>Maybe in reply to:</strong> <a href="9772.php">Kritiraj Sajadah: "[OMPI users] Checkpointing automatically at regular intervals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9800.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9800.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Josh,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am sure it will definitely be good because if someone is using OPEN MPI for checkpointing his application, he will not want to sit and checkpoint the application manually; and this can be a real pain if its a long running application.
<br>
<p>I would imagine an automatic restart from the last checkpoint in case of failure would also be interesting.
<br>
<p>Many thanks.
<br>
<p>Regards,
<br>
<p>Kritiraj
<br>
<p>--- On Tue, 6/30/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Checkpointing automatically at regular intervals
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, June 30, 2009, 3:00 PM
</span><br>
<span class="quotelev1">&gt; Currently, there is no mechanism to
</span><br>
<span class="quotelev1">&gt; checkpoint every X minutes in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As mentioned below you can use a script to initiate the
</span><br>
<span class="quotelev1">&gt; checkpoint every X minutes. Alternatively it should not be
</span><br>
<span class="quotelev1">&gt; too difficult to add such a feature to Open MPI. If enough
</span><br>
<span class="quotelev1">&gt; people would be interested I can file a feature bug to add
</span><br>
<span class="quotelev1">&gt; such a feature in a future release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2009, at 9:34 AM, Mohamed Slim bouguerra wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; I think that you can write a simple script such as:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; wihle `pgrep mpirun`&#160; != &quot;&quot;
</span><br>
<span class="quotelev2">&gt; &gt; ompi-checkpoint `pidof mpirun`
</span><br>
<span class="quotelev2">&gt; &gt; sleep 5
</span><br>
<span class="quotelev2">&gt; &gt; done
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Le 30 juin 09 &#224; 14:29, Kritiraj Sajadah a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear All,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160; &#160; &#160; &#160; I can manually
</span><br>
<span class="quotelev1">&gt; checkpoint an MPI application using OPEN MPI and BLCR.
</span><br>
<span class="quotelev1">&gt; However, I now want to checkpointing my application
</span><br>
<span class="quotelev1">&gt; automatically at every 5 minutes. Is there a way in OPEN MPI
</span><br>
<span class="quotelev1">&gt; to ensure automatic checkpointing without the user
</span><br>
<span class="quotelev1">&gt; intervention while the application is running?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kritiraj
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
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
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9782.php">Prentice Bisbal: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Previous message:</strong> <a href="9780.php">Reuti: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>Maybe in reply to:</strong> <a href="9772.php">Kritiraj Sajadah: "[OMPI users] Checkpointing automatically at regular intervals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9800.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9800.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
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
