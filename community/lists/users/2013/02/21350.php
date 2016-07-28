<?
$subject_val = "Re: [OMPI users] error when running mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 15:10:58 2013" -->
<!-- isoreceived="20130210201058" -->
<!-- sent="Sun, 10 Feb 2013 12:10:50 -0800" -->
<!-- isosent="20130210201050" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error when running mpirun" -->
<!-- id="99ACA605-90FE-4F39-AB59-AEFC7AD4CE45_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJjHMhN__v0AaqeUbQjUz8N=bKJAwC1J7YW+BwcVFejHtBWigA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error when running mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-10 15:10:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21351.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Previous message:</strong> <a href="21349.php">satya k: "[OMPI users] error when running mpirun"</a>
<li><strong>In reply to:</strong> <a href="21349.php">satya k: "[OMPI users] error when running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21371.php">albatross_at_[hidden]: "Re: [OMPI users] error when running mpirun"</a>
<li><strong>Reply:</strong> <a href="21371.php">albatross_at_[hidden]: "Re: [OMPI users] error when running mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The error message indicates that libnuma was not installed on at least one node. That's a system library, not an OMPI one, so you'll need to get it installed by someone with root privileges.
<br>
<p>On Feb 10, 2013, at 12:04 PM, satya k &lt;satya5509_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I m getting the below error when executing mpirun with hostfile option
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $mpirun -np 4 -hostfile nodes ./hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orted: error while loading shared libraries: libnuma.so.1: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 11798) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also checked with the echo $LD_LIBRARY_PATH command on the nodes, Its giving output as /apps/mpi/lib where lib files exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions... I could not find anything as I am a newbie..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Albatross
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21351.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Previous message:</strong> <a href="21349.php">satya k: "[OMPI users] error when running mpirun"</a>
<li><strong>In reply to:</strong> <a href="21349.php">satya k: "[OMPI users] error when running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21371.php">albatross_at_[hidden]: "Re: [OMPI users] error when running mpirun"</a>
<li><strong>Reply:</strong> <a href="21371.php">albatross_at_[hidden]: "Re: [OMPI users] error when running mpirun"</a>
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
