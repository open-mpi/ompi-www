<?
$subject_val = "Re: [OMPI users] mca parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 10:07:08 2008" -->
<!-- isoreceived="20081208150708" -->
<!-- sent="Mon, 8 Dec 2008 08:06:58 -0700" -->
<!-- isosent="20081208150658" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca parameter" -->
<!-- id="6F3777A5-51DF-49FD-A17A-8880618FB831_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="737935.63911.qm_at_web28415.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca parameter<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 10:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7456.php">Heitor Florido: "[OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="7454.php">Yasmine Yacoub: "[OMPI users] mca parameter"</a>
<li><strong>In reply to:</strong> <a href="7454.php">Yasmine Yacoub: "[OMPI users] mca parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7457.php">jody: "Re: [OMPI users] mca parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry for not communicating this accurately enough - you need to  
<br>
add that line to your mpirun command. In other words, you need to  
<br>
start your job with:
<br>
<p>mpirun -mca  btl_openib_warn_default_gid_prefix 0 .....
<br>
<p>Ralph
<br>
<p><p>On Dec 8, 2008, at 8:00 AM, Yasmine Yacoub wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for your response, but still my problem remains, I have  
</span><br>
<span class="quotelev1">&gt; used this command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -mca  btl_openib_warn_default_gid_prefix 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I have got this message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash: -mca: command not found
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7455/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7456.php">Heitor Florido: "[OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="7454.php">Yasmine Yacoub: "[OMPI users] mca parameter"</a>
<li><strong>In reply to:</strong> <a href="7454.php">Yasmine Yacoub: "[OMPI users] mca parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7457.php">jody: "Re: [OMPI users] mca parameter"</a>
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
