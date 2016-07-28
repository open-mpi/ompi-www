<?
$subject_val = "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 07:13:28 2010" -->
<!-- isoreceived="20101217121328" -->
<!-- sent="Fri, 17 Dec 2010 13:13:22 +0100" -->
<!-- isosent="20101217121322" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)" -->
<!-- id="4D0B53E2.9040909_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D068E99.7070902_at_anu.edu.au" -->
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
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 07:13:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8785.php">Suraj Prabhakaran: "[OMPI devel]  Problems with Connect/Accept and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="8783.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Connection architectures behind the MPI"</a>
<li><strong>In reply to:</strong> <a href="8773.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8785.php">Suraj Prabhakaran: "[OMPI devel]  Problems with Connect/Accept and Disconnect"</a>
<li><strong>Reply:</strong> <a href="8785.php">Suraj Prabhakaran: "[OMPI devel]  Problems with Connect/Accept and Disconnect"</a>
<li><strong>Reply:</strong> <a href="8786.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8787.php">Ralph Castain: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am observing a behavior where when the parent spawns a child and when 
<br>
the child terminates abruptly (for example with exit() before 
<br>
MPI_Finalize() ), the parent also terminates even after both the child 
<br>
and parent have explicitly called a MPI_disconnect. This turns out to be 
<br>
a disadvantage.  A sample program is as follows:
<br>
<p>Parent:
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm child_comm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn(&quot;./child&quot;, MPI_ARGV_NULL, 1, MPI_INFO_NULL, 0, 
<br>
MPI_COMM_SELF, &amp;child_comm,    MPI_ERRCODES_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;spawned a child\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;child_comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Disconnected from the child\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(5000);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Child:
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm parent, parent1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent(&amp;parent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;parent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(parent == MPI_COMM_NULL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Child: Disconnected from the parent, Exiting\n\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent(&amp;parent1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(parent1 != MPI_COMM_NULL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Child: yes, i got my parent again\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;exit(1); //abrupt end
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>In the above simple example, the second printf will not be displayed 
<br>
clearly indicating that the child is really disconnected from the 
<br>
parent. However, at exit() of the child, the parent terminates too. 
<br>
Perhaps there is a way to avoid this kind of auto cleanup?
<br>
<p>Thanks,
<br>
Suraj Prabhakaran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8785.php">Suraj Prabhakaran: "[OMPI devel]  Problems with Connect/Accept and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="8783.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Connection architectures behind the MPI"</a>
<li><strong>In reply to:</strong> <a href="8773.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8785.php">Suraj Prabhakaran: "[OMPI devel]  Problems with Connect/Accept and Disconnect"</a>
<li><strong>Reply:</strong> <a href="8785.php">Suraj Prabhakaran: "[OMPI devel]  Problems with Connect/Accept and Disconnect"</a>
<li><strong>Reply:</strong> <a href="8786.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8787.php">Ralph Castain: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
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
