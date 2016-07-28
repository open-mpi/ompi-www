<?
$subject_val = "Re: [OMPI users] MPI_Barrier in Self-checkpointing call";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 10:56:45 2012" -->
<!-- isoreceived="20120215155645" -->
<!-- sent="Wed, 15 Feb 2012 10:56:41 -0500" -->
<!-- isosent="20120215155641" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Barrier in Self-checkpointing call" -->
<!-- id="CAANzjEmav+GjT0Ov=01OG0YWBpMKmLCYDc5-2EqtkeWYMncg7w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT118-W6026E105C3E3ACB0A28656D57D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Barrier in Self-checkpointing call<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 10:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18481.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18479.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>In reply to:</strong> <a href="18471.php">Faisal Shahzad: "[OMPI users] MPI_Barrier in Self-checkpointing call"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you receive that callback the MPI has ben put in a quiescent state. As
<br>
such it does not allow MPI communication until the checkpoint is completely
<br>
finished. So you cannot call barrier in the checkpoint callback. Since Open
<br>
MPI did doing a coordinated checkpoint, you can assume that all processes
<br>
are calling the same callback at about the same time (the coordination
<br>
algorithm synchronizes them for you)
<br>
<p>If you would like a notification callback before the quiescence protocol
<br>
you might want to look at the INC callbacks:
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_inc_register_callback">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_inc_register_callback</a>
<br>
They are available in the Open MPI trunk (v1.7). The
<br>
OMPI_CR_INC_PRE_CRS_PRE_MPI
<br>
callback will give you immediate notice, and you -should- be able to make
<br>
MPI calls in that callback. I have not tried it, but conceptually it should
<br>
work. If it does not, I can file a bug ticket and we can look into
<br>
addressing it.
<br>
<p>-- Josh
<br>
<p>On Wed, Feb 15, 2012 at 4:23 AM, Faisal Shahzad &lt;itsfaisi_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  Dear Group,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted to do a synchronization check with 'MPI_Barrier(MPI_COMM_WORLD)'
</span><br>
<span class="quotelev1">&gt; in 'opal_crs_self_user_checkpoint(char **restart_cmd)' call. Although every
</span><br>
<span class="quotelev1">&gt; process is present in this call, it fails to synchronize. Is there any
</span><br>
<span class="quotelev1">&gt; reason why cant we use barrier?
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Faisal
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18480/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18481.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18479.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>In reply to:</strong> <a href="18471.php">Faisal Shahzad: "[OMPI users] MPI_Barrier in Self-checkpointing call"</a>
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
