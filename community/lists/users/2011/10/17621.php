<?
$subject_val = "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 00:52:42 2011" -->
<!-- isoreceived="20111026045242" -->
<!-- sent="Wed, 26 Oct 2011 13:52:17 +0900" -->
<!-- isosent="20111026045217" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?" -->
<!-- id="CAFiEserJ0U9m9euy1-CA8m=_KihMM5s73qaJiii_N=p7f3Kdug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjEnOdwva5J4fFBmXtsK6Kj3yGE9j=dKdtaWuZs=wHzGbQg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?<br>
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-26 00:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17622.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17620.php">MM: "Re: [OMPI users] mpirun should run with just the localhost interface on win?"</a>
<li><strong>In reply to:</strong> <a href="17618.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17624.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Reply:</strong> <a href="17624.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Josh,
<br>
<p>Thank you. I will test the 1.7 trunk as you suggested.
<br>
Also I want to ask if we can add this interface to OpenMPI 1.4.2,
<br>
because my applications are mainly involved in this version.
<br>
<p>Regards,
<br>
Nguyen Toan
<br>
<p>On Wed, Oct 26, 2011 at 3:25 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI (trunk/1.7 - not 1.4 or 1.5) provides an application level
</span><br>
<span class="quotelev1">&gt; interface to request a checkpoint of an application. This API is
</span><br>
<span class="quotelev1">&gt; defined on the following website:
</span><br>
<span class="quotelev1">&gt;  <a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will behave the same as if you requested the checkpoint of the
</span><br>
<span class="quotelev1">&gt; job from the command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 24, 2011 at 12:37 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt; I want to automatically checkpoint an MPI program with OpenMPI ( I'm
</span><br>
<span class="quotelev2">&gt; &gt; currently using 1.4.2 version with BLCR 0.8.2),
</span><br>
<span class="quotelev2">&gt; &gt; not by manually typing ompi-checkpoint command line from another
</span><br>
<span class="quotelev1">&gt; terminal.
</span><br>
<span class="quotelev2">&gt; &gt; So I would like to know if there is a way to call checkpoint function
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev2">&gt; &gt; inside an MPI program
</span><br>
<span class="quotelev2">&gt; &gt; with OpenMPI or how to do that.
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas are very appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nguyen Toan
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17621/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17622.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17620.php">MM: "Re: [OMPI users] mpirun should run with just the localhost interface on win?"</a>
<li><strong>In reply to:</strong> <a href="17618.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17624.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Reply:</strong> <a href="17624.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
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
