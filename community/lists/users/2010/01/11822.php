<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 13:44:46 2010" -->
<!-- isoreceived="20100119184446" -->
<!-- sent="Tue, 19 Jan 2010 11:44:39 -0700" -->
<!-- isosent="20100119184439" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object" -->
<!-- id="DBC0845C-B4AF-4968-8889-FA5AFB9AA2D4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="b88e40561001190905x1101b1e8ne5166980ca453cfa_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 13:44:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11823.php">Jeff Squyres: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11821.php">Justin Bronder: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>In reply to:</strong> <a href="11820.php">Federico Golfr&#232; Andreasi: "[OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All of the hosts that will be used in the job must be included in the original hostfile - even if the hosts won't be used until comm_spawn.
<br>
<p>The name in the hostfile must match the name provided in the info object as we otherwise would have to do DNS resolves to detect the alias, which would have a significant performance impact.
<br>
<p>On Jan 19, 2010, at 10:05 AM, Federico Golfr&#232; Andreasi wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to submit you a question,
</span><br>
<span class="quotelev1">&gt; I write a little code that does and MPI_Comm_spawn_multiple on a specific set of node.
</span><br>
<span class="quotelev1">&gt; The node where to run on are specified using the &quot;host&quot; attribute of the MPI_Info object.
</span><br>
<span class="quotelev1">&gt; That attribute is filled with the string get from MPI_Get_processor_name.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the correct way of working ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a strange behavior when I use alias in the /etc/hosts file.
</span><br>
<span class="quotelev1">&gt; (I run jobs in a linux cluster, with CentOS 5).
</span><br>
<span class="quotelev1">&gt; If I use the alias in the hostfile the spawn process throws me an error;
</span><br>
<span class="quotelev1">&gt; instead the spawning process (run with the same hostfile) runs correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that is necessary, when using the spawn function with INFO object, 
</span><br>
<span class="quotelev1">&gt; to run the spawning process with a hostfile filled with the &quot;real&quot; and complete hostname.
</span><br>
<span class="quotelev1">&gt; Or I have to use a different function to get the host name?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much,
</span><br>
<span class="quotelev1">&gt; Federico
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
<li><strong>Next message:</strong> <a href="11823.php">Jeff Squyres: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11821.php">Justin Bronder: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>In reply to:</strong> <a href="11820.php">Federico Golfr&#232; Andreasi: "[OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
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
