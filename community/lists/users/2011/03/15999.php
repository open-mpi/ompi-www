<?
$subject_val = "Re: [OMPI users] Shared Memory Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 26 15:04:20 2011" -->
<!-- isoreceived="20110326190420" -->
<!-- sent="Sat, 26 Mar 2011 20:04:16 +0100" -->
<!-- isosent="20110326190416" -->
<!-- name="Michele Marena" -->
<!-- email="michelemarena_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Problem." -->
<!-- id="AANLkTim8GjB7X7F8HO3evwevLmwECVetqb9a5yPJTwhK_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="88165BB9-C00D-4903-AA9B-874D3884B499_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Problem.<br>
<strong>From:</strong> Michele Marena (<em>michelemarena_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-26 15:04:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16000.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="15998.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="15997.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16001.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Reply:</strong> <a href="16001.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the syntax is wrong in the email, but I write it correctly when I
<br>
launch mpirun. When some communicating processes are on the same node the
<br>
application don't terminate, otherwise the application terminate and its
<br>
results are correct. My OpenMPI version is 1.2.7.
<br>
<p>2011/3/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2011, at 11:34 AM, Michele Marena wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; I've a problem with shared memory. When my application runs using pure
</span><br>
<span class="quotelev1">&gt; message passing (one process for node), it terminates and returns correct
</span><br>
<span class="quotelev1">&gt; results. When 2 processes share a node and use shared memory for exchanges
</span><br>
<span class="quotelev1">&gt; messages, my application don't terminate. At shell I write &quot;mpirun -nolocal
</span><br>
<span class="quotelev1">&gt; --mca self,sm,tcp ... (forces interface to eth0)... -np (number of
</span><br>
<span class="quotelev1">&gt; processes) executable arguments&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's not right. If you want the apps to use shared memory, you don't have
</span><br>
<span class="quotelev1">&gt; to do anything. However, if you do want to specify, then the correct syntax
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl self,sm,tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope you help me.
</span><br>
<span class="quotelev2">&gt; &gt; I thank you.
</span><br>
<span class="quotelev2">&gt; &gt; Michele _______________________________________________
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15999/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16000.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="15998.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="15997.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16001.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Reply:</strong> <a href="16001.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
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
