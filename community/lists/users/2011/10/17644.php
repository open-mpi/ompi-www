<?
$subject_val = "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 27 20:06:45 2011" -->
<!-- isoreceived="20111028000645" -->
<!-- sent="Fri, 28 Oct 2011 09:06:19 +0900" -->
<!-- isosent="20111028000619" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?" -->
<!-- id="CAFiEsep4PMdkDk5HKOf4fTW4HdUq5iqQ55+K9ALfaGaMSCC77g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjEmx=sO_9mtzVM+WiPLWFhPSiM6UxeosxNPgdd8QUZObCw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-10-27 20:06:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17645.php">吕慧伟: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware (solved)"</a>
<li><strong>Previous message:</strong> <a href="17643.php">Ralph Castain: "Re: [OMPI users] Spawned process do not shut down..."</a>
<li><strong>In reply to:</strong> <a href="17624.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Josh,
<br>
This will really help a lot. Thank you for the support.
<br>
<p>Best Regards,
<br>
Nguyen Toan
<br>
<p>On Wed, Oct 26, 2011 at 9:20 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Since this would be a new feature for 1.4, we cannot move it since the
</span><br>
<span class="quotelev1">&gt; 1.4 branch is for bug fixes only. However, we may be able to add it to
</span><br>
<span class="quotelev1">&gt; 1.5. I filed a ticket if you want to track that progress:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2895">https://svn.open-mpi.org/trac/ompi/ticket/2895</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 25, 2011 at 11:52 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Josh,
</span><br>
<span class="quotelev2">&gt; &gt; Thank you. I will test the 1.7 trunk as you suggested.
</span><br>
<span class="quotelev2">&gt; &gt; Also I want to ask if we can add this interface to OpenMPI 1.4.2,
</span><br>
<span class="quotelev2">&gt; &gt; because my applications are mainly involved in this version.
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Oct 26, 2011 at 3:25 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI (trunk/1.7 - not 1.4 or 1.5) provides an application level
</span><br>
<span class="quotelev3">&gt; &gt;&gt; interface to request a checkpoint of an application. This API is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; defined on the following website:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  <a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This will behave the same as if you requested the checkpoint of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; job from the command line.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, Oct 24, 2011 at 12:37 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Dear all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I want to automatically checkpoint an MPI program with OpenMPI ( I'm
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; currently using 1.4.2 version with BLCR 0.8.2),
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; not by manually typing ompi-checkpoint command line from another
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; terminal.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; So I would like to know if there is a way to call checkpoint function
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; from
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; inside an MPI program
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; with OpenMPI or how to do that.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Any ideas are very appreciated.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17645.php">吕慧伟: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware (solved)"</a>
<li><strong>Previous message:</strong> <a href="17643.php">Ralph Castain: "Re: [OMPI users] Spawned process do not shut down..."</a>
<li><strong>In reply to:</strong> <a href="17624.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
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
