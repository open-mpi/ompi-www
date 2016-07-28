<?
$subject_val = "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 12:24:32 2010" -->
<!-- isoreceived="20101217172432" -->
<!-- sent="Fri, 17 Dec 2010 12:24:27 -0500" -->
<!-- isosent="20101217172427" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)" -->
<!-- id="7334A467-07BC-4B2F-9EEF-5A3B3543FED3_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3449E29A-5AB0-4667-A975-23EE7BC9754C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 12:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8790.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8788.php">George Bosilca: "Re: [OMPI devel] Connection architectures behind the MPI"</a>
<li><strong>In reply to:</strong> <a href="8787.php">Ralph Castain: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8790.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8790.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8791.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me try to round the edges on this one. It is not that we couldn't or wouldn't like to have a more &quot;MPI&quot; compliant approach on this, but the definition of connected processes in the MPI standard is [kind of] shady. One thing is clear however, it is a transitive relationship. If A is &quot;connected&quot; to B, and B is &quot;connected&quot; to C, then A and C are &quot;connected&quot; even if they don't know anything about each other. In other terms when you call disconnect, it is difficult to compute the peers that have to be &quot;disconnected&quot; as even if you disconnected them in one communicator they can still be connected some other way. Therefore, we choose the simplest path, once connected the processes remain connected until the end of the execution.
<br>
<p>However, as Ralph pointed out, if you call MPI_Finalize as requested by the MPI standard, we handle the case nicely without forcing every process to abort.
<br>
<p>If you're looking for a winter break project, we do accept contributions from the community ...
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 17, 2010, at 09:43 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; That is the expected behavior designed into Open MPI. If any process calls MPI_Init and then terminates without calling MPI_Finalize, we flag that as an abnormal termination and abort the entire job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't provide any option for avoiding that behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 17, 2010, at 5:13 AM, Suraj Prabhakaran wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am observing a behavior where when the parent spawns a child and when the child terminates abruptly (for example with exit() before MPI_Finalize() ), the parent also terminates even after both the child and parent have explicitly called a MPI_disconnect. This turns out to be a disadvantage.  A sample program is as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Parent:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm child_comm;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_spawn(&quot;./child&quot;, MPI_ARGV_NULL, 1, MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;child_comm,    MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;spawned a child\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_disconnect(&amp;child_comm);
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;Disconnected from the child\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;  sleep(5000);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Child:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm parent, parent1;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_get_parent(&amp;parent);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_disconnect(&amp;parent);
</span><br>
<span class="quotelev2">&gt;&gt;  if(parent == MPI_COMM_NULL)
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;Child: Disconnected from the parent, Exiting\n\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_get_parent(&amp;parent1);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  if(parent1 != MPI_COMM_NULL)
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;Child: yes, i got my parent again\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  exit(1); //abrupt end
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the above simple example, the second printf will not be displayed clearly indicating that the child is really disconnected from the parent. However, at exit() of the child, the parent terminates too. Perhaps there is a way to avoid this kind of auto cleanup?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Suraj Prabhakaran
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8790.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8788.php">George Bosilca: "Re: [OMPI devel] Connection architectures behind the MPI"</a>
<li><strong>In reply to:</strong> <a href="8787.php">Ralph Castain: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8790.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8790.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8791.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
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
