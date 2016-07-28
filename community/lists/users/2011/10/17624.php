<?
$subject_val = "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 08:20:43 2011" -->
<!-- isoreceived="20111026122043" -->
<!-- sent="Wed, 26 Oct 2011 07:20:38 -0500" -->
<!-- isosent="20111026122038" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?" -->
<!-- id="CAANzjEmx=sO_9mtzVM+WiPLWFhPSiM6UxeosxNPgdd8QUZObCw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFiEserJ0U9m9euy1-CA8m=_KihMM5s73qaJiii_N=p7f3Kdug_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-26 08:20:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17625.php">Ralph Castain: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>Previous message:</strong> <a href="17623.php">Patrick Begou: "[OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>In reply to:</strong> <a href="17621.php">Nguyen Toan: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17644.php">Nguyen Toan: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Reply:</strong> <a href="17644.php">Nguyen Toan: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since this would be a new feature for 1.4, we cannot move it since the
<br>
1.4 branch is for bug fixes only. However, we may be able to add it to
<br>
1.5. I filed a ticket if you want to track that progress:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2895">https://svn.open-mpi.org/trac/ompi/ticket/2895</a>
<br>
<p>-- Josh
<br>
<p><p>On Tue, Oct 25, 2011 at 11:52 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear Josh,
</span><br>
<span class="quotelev1">&gt; Thank you. I will test the 1.7 trunk as you suggested.
</span><br>
<span class="quotelev1">&gt; Also I want to ask if we can add this interface to OpenMPI 1.4.2,
</span><br>
<span class="quotelev1">&gt; because my applications are mainly involved in this version.
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 26, 2011 at 3:25 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI (trunk/1.7 - not 1.4 or 1.5) provides an application level
</span><br>
<span class="quotelev2">&gt;&gt; interface to request a checkpoint of an application. This API is
</span><br>
<span class="quotelev2">&gt;&gt; defined on the following website:
</span><br>
<span class="quotelev2">&gt;&gt; &#160;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will behave the same as if you requested the checkpoint of the
</span><br>
<span class="quotelev2">&gt;&gt; job from the command line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Oct 24, 2011 at 12:37 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I want to automatically checkpoint an MPI program with OpenMPI ( I'm
</span><br>
<span class="quotelev3">&gt;&gt; &gt; currently using 1.4.2 version with BLCR 0.8.2),
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not by manually typing ompi-checkpoint command line from another
</span><br>
<span class="quotelev3">&gt;&gt; &gt; terminal.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So I would like to know if there is a way to call checkpoint function
</span><br>
<span class="quotelev3">&gt;&gt; &gt; from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; inside an MPI program
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with OpenMPI or how to do that.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any ideas are very appreciated.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17625.php">Ralph Castain: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>Previous message:</strong> <a href="17623.php">Patrick Begou: "[OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>In reply to:</strong> <a href="17621.php">Nguyen Toan: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17644.php">Nguyen Toan: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Reply:</strong> <a href="17644.php">Nguyen Toan: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
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
