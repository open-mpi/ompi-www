<?
$subject_val = "Re: [OMPI users] Checkpointing automatically at regular intervals";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 08:53:41 2009" -->
<!-- isoreceived="20090702125341" -->
<!-- sent="Thu, 02 Jul 2009 08:53:36 -0400" -->
<!-- isosent="20090702125336" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing automatically at regular intervals" -->
<!-- id="151ABECD-FA9B-470A-A069-A62345A8E15E_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="89414.86219.qm_at_web31008.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2009-07-02 08:53:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9801.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9799.php">Josh Hursey: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9781.php">Kritiraj Sajadah: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I created a feature ticket for this if you wanted to track it:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1961">https://svn.open-mpi.org/trac/ompi/ticket/1961</a>
<br>
<p>I do not know when I will have time look at implementing this (of  
<br>
course patches from the community are always welcome). But hopefully  
<br>
in the next couple months.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jun 30, 2009, at 11:37 AM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Josh,
</span><br>
<span class="quotelev1">&gt;            I am sure it will definitely be good because if someone  
</span><br>
<span class="quotelev1">&gt; is using OPEN MPI for checkpointing his application, he will not  
</span><br>
<span class="quotelev1">&gt; want to sit and checkpoint the application manually; and this can be  
</span><br>
<span class="quotelev1">&gt; a real pain if its a long running application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would imagine an automatic restart from the last checkpoint in  
</span><br>
<span class="quotelev1">&gt; case of failure would also be interesting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kritiraj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Tue, 6/30/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Checkpointing automatically at regular  
</span><br>
<span class="quotelev2">&gt;&gt; intervals
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tuesday, June 30, 2009, 3:00 PM
</span><br>
<span class="quotelev2">&gt;&gt; Currently, there is no mechanism to
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint every X minutes in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As mentioned below you can use a script to initiate the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint every X minutes. Alternatively it should not be
</span><br>
<span class="quotelev2">&gt;&gt; too difficult to add such a feature to Open MPI. If enough
</span><br>
<span class="quotelev2">&gt;&gt; people would be interested I can file a feature bug to add
</span><br>
<span class="quotelev2">&gt;&gt; such a feature in a future release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 30, 2009, at 9:34 AM, Mohamed Slim bouguerra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that you can write a simple script such as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wihle `pgrep mpirun`  != &quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-checkpoint `pidof mpirun`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sleep 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 30 juin 09 &#224; 14:29, Kritiraj Sajadah a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         I can manually
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint an MPI application using OPEN MPI and BLCR.
</span><br>
<span class="quotelev2">&gt;&gt; However, I now want to checkpointing my application
</span><br>
<span class="quotelev2">&gt;&gt; automatically at every 5 minutes. Is there a way in OPEN MPI
</span><br>
<span class="quotelev2">&gt;&gt; to ensure automatic checkpointing without the user
</span><br>
<span class="quotelev2">&gt;&gt; intervention while the application is running?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kritiraj
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="9801.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9799.php">Josh Hursey: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9781.php">Kritiraj Sajadah: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
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
