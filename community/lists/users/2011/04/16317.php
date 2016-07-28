<?
$subject_val = "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 15:56:58 2011" -->
<!-- isoreceived="20110422195658" -->
<!-- sent="Fri, 22 Apr 2011 13:56:49 -0600" -->
<!-- isosent="20110422195649" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3" -->
<!-- id="5BCB97C4-2CDA-4E4C-A9D7-F5C3996F123C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DB1A201.9413.21899138_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-22 15:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16318.php">Pablo Lopez Rios: "[OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Previous message:</strong> <a href="16316.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="16316.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2011, at 1:42 PM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI 1.4.3 + Intel Compilers V8.1 summary:
</span><br>
<span class="quotelev1">&gt; (in case someone likes to refer to it later)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) To make all Open MPI executables statically linked and 
</span><br>
<span class="quotelev1">&gt; independent of any dynamic libraries,
</span><br>
<span class="quotelev1">&gt; &quot;--disable-shared&quot; and &quot;--enable-static&quot; options should BOTH be 
</span><br>
<span class="quotelev1">&gt; fowarded to configure, and &quot;-i-static&quot;
</span><br>
<span class="quotelev1">&gt; option should be specified for intel compilers too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) It is confirmed that environment variables could be forwarded to 
</span><br>
<span class="quotelev1">&gt; slave nodes, such as $PATH 
</span><br>
<span class="quotelev1">&gt; and $LD_LIBARY_PATH, by specifying options to mpirun. 
</span><br>
<span class="quotelev1">&gt; However, mpirun will invoke orted daemon on
</span><br>
<span class="quotelev1">&gt; master and slave nodes.
</span><br>
<p>This is not correct - mpirun will not invoke an orted daemon on the master node. mpirun itself acts as the local daemon.
<br>
<p><span class="quotelev1">&gt; These environment variables passed to 
</span><br>
<span class="quotelev1">&gt; slave nodes via mpirun options does not 
</span><br>
<span class="quotelev1">&gt; take into effect before orted started.
</span><br>
<p>This is not entirely correct. It depends on the launcher. For rsh/ssh launchers, we do indeed set the environmental variables prior to executing the orted daemon. Some launch environments do not support that functionality.
<br>
<p><p><span class="quotelev1">&gt; So if orted daemon needs 
</span><br>
<span class="quotelev1">&gt; these environment variables to run,
</span><br>
<span class="quotelev1">&gt; the only way is to set these environment variables in a shared 
</span><br>
<span class="quotelev1">&gt; .bashrc or .profile file, visible to 
</span><br>
<span class="quotelev1">&gt; both master and slave nodes, say, on a shared NFS partition. It 
</span><br>
<span class="quotelev1">&gt; seems no other way to resolve this kind
</span><br>
<span class="quotelev1">&gt; of dependence.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Yiguang
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
<li><strong>Next message:</strong> <a href="16318.php">Pablo Lopez Rios: "[OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Previous message:</strong> <a href="16316.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="16316.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
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
