<?
$subject_val = "Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 31 20:52:40 2011" -->
<!-- isoreceived="20110901005240" -->
<!-- sent="Wed, 31 Aug 2011 20:52:33 -0400" -->
<!-- isosent="20110901005233" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?" -->
<!-- id="BFF0685E-01CA-4632-951F-17144B6DFD09_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1314837322.2953.YahooMailNeo_at_web160708.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-31 20:52:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17138.php">Randolph Pullen: "[OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Previous message:</strong> <a href="17136.php">Mateus Augusto: "[OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="17136.php">Mateus Augusto: "[OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you MPI_COMM_SPAWN, the parent and children processes are said to be &quot;connected&quot;.  And MPI_FINALIZE is collective across all connected processes (see the definition of MPI_FINALIZE in MPI-2.2).
<br>
<p>If you want to disconnect the spawned children from the parents, use MPI_COMM_DISCONNECT.  Then the two sets of processes will be able to MPI_FINALIZE separately.
<br>
<p><a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Comm_spawn.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Comm_spawn.3.php</a>
<br>
<a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Finalize.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Finalize.3.php</a>
<br>
<a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Comm_disconnect.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Comm_disconnect.3.php</a>
<br>
<p><p>On Aug 31, 2011, at 8:35 PM, Mateus Augusto wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have three processes that communicate with each other. The first process creates the other two processes (using MPI_Comm_spaw (...)).
</span><br>
<span class="quotelev1">&gt; When one of the processes performs MPI_Finalize (), it continues in execution, stopped in MPI_Finalize function () (in busy waiting, ie, using CPU) and just executes the next instruction only when the other two processes run MPI_Finalize ().  It seems that MPI_Finalize () behaves like MPI_Barrier (). This behavior only occurs when processes communicate with each other (when, for example, use MPI_Send,  MPI_Isend, MPI_Bsend. or MPI_Ssend).
</span><br>
<span class="quotelev1">&gt; I would like to know if we can avoid this behavior of MPI_Finalize when processes communicate with each other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here there are the codes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process Master:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;     int i;
</span><br>
<span class="quotelev1">&gt;     char other[200];
</span><br>
<span class="quotelev1">&gt;     getcwd(other, 199);
</span><br>
<span class="quotelev1">&gt;     strcat(other, &quot;/otherProcess&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm com;
</span><br>
<span class="quotelev1">&gt;     MPI_Status s;    
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_spawn(other, MPI_ARGV_NULL, 2, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;com, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(&amp;i, 1, MPI_INT, 0, 0, com, &amp;s);
</span><br>
<span class="quotelev1">&gt;     sleep(15); // Make the otherProcess wait the Master process in MPI_Finalize().
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other Process (process Master calls otherProcess):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char * argv[]) {
</span><br>
<span class="quotelev1">&gt;     int dest;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm parent;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_get_parent(&amp;parent);
</span><br>
<span class="quotelev1">&gt;     MPI_Send(&amp;dest, 1, MPI_INT, 0, 0, parent); // If this line is removed, the process doesn't stop in MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Before MPI_Finalize\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();  // The process stay here waiting all process execute MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;     printf(&quot;After MPI_Finalize\n&quot;);
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried several things but nothing worked. I don't want that otherProcess stay waiting in MPI_Finalize().
</span><br>
<span class="quotelev1">&gt; Could someone help-me?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17138.php">Randolph Pullen: "[OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Previous message:</strong> <a href="17136.php">Mateus Augusto: "[OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="17136.php">Mateus Augusto: "[OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
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
