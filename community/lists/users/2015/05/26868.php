<?
$subject_val = "Re: [OMPI users] OpenMPI on Windows without Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 06:54:22 2015" -->
<!-- isoreceived="20150514105422" -->
<!-- sent="Thu, 14 May 2015 11:54:19 +0100" -->
<!-- isosent="20150514105419" -->
<!-- name="J Martin Rushton" -->
<!-- email="martinsworkmachine_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Windows without Cygwin" -->
<!-- id="55547EDB.7050403_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAPsJ1NZd-4jC_02A_ZVcPh-5uW8U=Q=hH5nak0+DXZ+hMYWG7Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI on Windows without Cygwin<br>
<strong>From:</strong> J Martin Rushton (<em>martinsworkmachine_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-14 06:54:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26869.php">Chaitra Kumar: "[OMPI users] About POSIX APIs used on openMPI"</a>
<li><strong>Previous message:</strong> <a href="26867.php">Radoslaw Martyniszyn: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
<li><strong>In reply to:</strong> <a href="26863.php">Walt Brainerd: "Re: [OMPI users] OpenMPI on Windows without Cygwin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to have a quick look at MobaXterm ( 
<br>
<a href="http://mobaxterm.mobatek.net">http://mobaxterm.mobatek.net</a> ).  It's quicker to deploy and startup than 
<br>
bare Cygwin (well at least in the experience of my users) but is based 
<br>
upon Cygwin.  I can't see /dev though, so you will need to test to see 
<br>
if the functionality is there.
<br>
<p>On 13/05/15 21:19, Walt Brainerd wrote:
<br>
<span class="quotelev1">&gt; No, I hadn't received any response.
</span><br>
<span class="quotelev1">&gt; That is too bad.
</span><br>
<span class="quotelev1">&gt; Knowing that earlier would have saved some hours.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some day I'll look again at extracting some set of stuff
</span><br>
<span class="quotelev1">&gt; from Cygwin that will make it work. Maybe even that
</span><br>
<span class="quotelev1">&gt; is not possible. But Cygwin is huge. OTOH, maybe anybody
</span><br>
<span class="quotelev1">&gt; who is contemplating using Coarrays would be somebody
</span><br>
<span class="quotelev1">&gt; who has Cygwin anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 13, 2015 at 8:55 AM, Damien &lt;damien_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:damien_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Walt,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I don't remember seeing a response to this.  OpenMPI isn't supported
</span><br>
<span class="quotelev1">&gt;     on native Windows anymore.  The last version for Windows was the 1.6
</span><br>
<span class="quotelev1">&gt;     series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 2015-05-11 3:07 PM, Walt Brainerd wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Is it possible to build OpenMPI for Windows
</span><br>
<span class="quotelev2">&gt;&gt;     not running Cygwin?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I know it uses /dev/shm, so there would have to
</span><br>
<span class="quotelev2">&gt;&gt;     be something equivalent to that not in Cygwin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     TIA.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     Walt Brainerd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/05/26855.php">http://www.open-mpi.org/community/lists/users/2015/05/26855.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/05/26862.php">http://www.open-mpi.org/community/lists/users/2015/05/26862.php</a>
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
<span class="quotelev1">&gt; Walt Brainerd
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26863.php">http://www.open-mpi.org/community/lists/users/2015/05/26863.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26869.php">Chaitra Kumar: "[OMPI users] About POSIX APIs used on openMPI"</a>
<li><strong>Previous message:</strong> <a href="26867.php">Radoslaw Martyniszyn: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
<li><strong>In reply to:</strong> <a href="26863.php">Walt Brainerd: "Re: [OMPI users] OpenMPI on Windows without Cygwin"</a>
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
