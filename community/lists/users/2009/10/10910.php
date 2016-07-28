<?
$subject_val = "Re: [OMPI users] problem with mpiexec/mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 11:11:00 2009" -->
<!-- isoreceived="20091012151100" -->
<!-- sent="Mon, 12 Oct 2009 09:10:51 -0600" -->
<!-- isosent="20091012151051" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with mpiexec/mpirun" -->
<!-- id="A99B8347-8E81-4DD7-8B37-B541FA0AB700_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9d13e50c0910120801p4058214n7e5de181c09b0e3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with mpiexec/mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-12 11:10:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10911.php">Dorian Krause: "[OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="10909.php">Jovana Knezevic: "[OMPI users] problem with mpiexec/mpirun"</a>
<li><strong>In reply to:</strong> <a href="10909.php">Jovana Knezevic: "[OMPI users] problem with mpiexec/mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hate to say this, but you don't appear to be using Open MPI.  
<br>
&quot;mpdtrace&quot; is an MPICH command, last I checked.
<br>
<p>You might try their mailing list, or check which mpiexec you are using  
<br>
and contact them.
<br>
<p><p>On Oct 12, 2009, at 9:01 AM, Jovana Knezevic wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run 11 instances of my program on 6 dual-core Opterons
</span><br>
<span class="quotelev1">&gt; (it is not time-consuming application anyway, takes 10 seconds at
</span><br>
<span class="quotelev1">&gt; one-core laptop :)).
</span><br>
<span class="quotelev1">&gt; so, when I type:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -machinefile hostfile -n 11 ./program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nothing happens!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;mpdtrace -l&quot;  command (from the machine I type the command at) is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lx64a171_41469 (10.156.70.171)
</span><br>
<span class="quotelev1">&gt; lx64a176_47945 (10.156.70.176)
</span><br>
<span class="quotelev1">&gt; lx64a175_42990 (10.156.70.175)
</span><br>
<span class="quotelev1">&gt; lx64a174_39601 (10.156.70.174)
</span><br>
<span class="quotelev1">&gt; lx64a173_45387 (10.156.70.173)
</span><br>
<span class="quotelev1">&gt; lx64a172_55297 (10.156.70.172)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (seems that all 6 machines are there)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any idea/clue what the reason could be?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jovana
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
<li><strong>Next message:</strong> <a href="10911.php">Dorian Krause: "[OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="10909.php">Jovana Knezevic: "[OMPI users] problem with mpiexec/mpirun"</a>
<li><strong>In reply to:</strong> <a href="10909.php">Jovana Knezevic: "[OMPI users] problem with mpiexec/mpirun"</a>
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
