<?
$subject_val = "Re: [OMPI users] Set number of processes in another way than -np X";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 11:10:30 2013" -->
<!-- isoreceived="20130606151030" -->
<!-- sent="Thu, 6 Jun 2013 08:10:23 -0700" -->
<!-- isosent="20130606151023" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set number of processes in another way than -np X" -->
<!-- id="D411FF0E-AA2E-43BF-A672-3CCBBB3B2F95_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFemY3YRuZNPGAxAXokvnV2qn4bob-R02wTNcw+yRJVkTnapBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Set number of processes in another way than -np X<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 11:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22041.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22039.php">Jos&#233; Luis Garc&#237;a Pallero: "[OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22039.php">Jos&#233; Luis Garc&#237;a Pallero: "[OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22041.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22041.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid not. You could start a single process, and then have that process call MPI_Comm_spawn to launch the rest of them
<br>
<p>On Jun 6, 2013, at 7:54 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm newbie in the use of MPI, so probably I ask some stupid question (or previously asked, but in this case I have searched in the archive and I haven't found anything):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exists any other way than -np X in order to pass the number of processes to start for an MPI program? I mean a function of the style MPI_Set_Number_Processes() or similar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; *****************************************
</span><br>
<span class="quotelev1">&gt; Jos&#233; Luis Garc&#237;a Pallero
</span><br>
<span class="quotelev1">&gt; jgpallero_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (o&lt;
</span><br>
<span class="quotelev1">&gt; / / \
</span><br>
<span class="quotelev1">&gt; V_/_
</span><br>
<span class="quotelev1">&gt; Use Debian GNU/Linux and enjoy!
</span><br>
<span class="quotelev1">&gt; *****************************************
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22040/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22041.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22039.php">Jos&#233; Luis Garc&#237;a Pallero: "[OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22039.php">Jos&#233; Luis Garc&#237;a Pallero: "[OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22041.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22041.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
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
