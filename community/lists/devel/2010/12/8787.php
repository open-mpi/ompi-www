<?
$subject_val = "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 09:43:52 2010" -->
<!-- isoreceived="20101217144352" -->
<!-- sent="Fri, 17 Dec 2010 07:43:43 -0700" -->
<!-- isosent="20101217144343" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)" -->
<!-- id="3449E29A-5AB0-4667-A975-23EE7BC9754C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D0B53E2.9040909_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 09:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8788.php">George Bosilca: "Re: [OMPI devel] Connection architectures behind the MPI"</a>
<li><strong>Previous message:</strong> <a href="8786.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is the expected behavior designed into Open MPI. If any process calls MPI_Init and then terminates without calling MPI_Finalize, we flag that as an abnormal termination and abort the entire job.
<br>
<p>We don't provide any option for avoiding that behavior.
<br>
<p>On Dec 17, 2010, at 5:13 AM, Suraj Prabhakaran wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am observing a behavior where when the parent spawns a child and when the child terminates abruptly (for example with exit() before MPI_Finalize() ), the parent also terminates even after both the child and parent have explicitly called a MPI_disconnect. This turns out to be a disadvantage.  A sample program is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parent:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm child_comm;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_spawn(&quot;./child&quot;, MPI_ARGV_NULL, 1, MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;child_comm,    MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;spawned a child\n&quot;);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_disconnect(&amp;child_comm);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Disconnected from the child\n&quot;);
</span><br>
<span class="quotelev1">&gt;   sleep(5000);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Child:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm parent, parent1;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_get_parent(&amp;parent);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_disconnect(&amp;parent);
</span><br>
<span class="quotelev1">&gt;   if(parent == MPI_COMM_NULL)
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Child: Disconnected from the parent, Exiting\n\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_get_parent(&amp;parent1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   if(parent1 != MPI_COMM_NULL)
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Child: yes, i got my parent again\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   exit(1); //abrupt end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the above simple example, the second printf will not be displayed clearly indicating that the child is really disconnected from the parent. However, at exit() of the child, the parent terminates too. Perhaps there is a way to avoid this kind of auto cleanup?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Suraj Prabhakaran
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
<li><strong>Next message:</strong> <a href="8788.php">George Bosilca: "Re: [OMPI devel] Connection architectures behind the MPI"</a>
<li><strong>Previous message:</strong> <a href="8786.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
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
