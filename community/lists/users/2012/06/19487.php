<?
$subject_val = "[OMPI users] RE :  Bug when mixing sent types in version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  8 11:51:28 2012" -->
<!-- isoreceived="20120608155128" -->
<!-- sent="Fri, 8 Jun 2012 17:51:23 +0200" -->
<!-- isosent="20120608155123" -->
<!-- name="BOUVIER Benjamin" -->
<!-- email="benjamin.bouvier_at_[hidden]" -->
<!-- subject="[OMPI users] RE :  Bug when mixing sent types in version 1.6" -->
<!-- id="26910_1339170684_4FD21F7C_26910_7562_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E1F_at_THSONEA01CMS07P.one.grp" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3B915031-93E6-4DEC-904F-91C7EFFFAFE0_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] RE :  Bug when mixing sent types in version 1.6<br>
<strong>From:</strong> BOUVIER Benjamin (<em>benjamin.bouvier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-08 11:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19488.php">Jeff Squyres: "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19486.php">Rayson Ho: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<li><strong>In reply to:</strong> <a href="19485.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19488.php">Jeff Squyres: "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19488.php">Jeff Squyres: "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for your answer.
<br>
<p>I have downloaded the Netpipe benchmarks suite, launched `make mpi` and launched with mpirun the resulting executable.
<br>
<p>Here is an interesting fact : by launching this executable on 2 nodes, it works ; on 3 nodes, it blocks, I guess on connect. 
<br>
Each process is running on a core, on each machine, using 100% of one CPU ; but nothing else happens. I have to kill the program to quit. 
<br>
Setting the option -mca btl_base_verbose to 30 shows me that the last thing tried by each node is to connect to other nodes.
<br>
<p>May it be a network issue ? 
<br>
<p>Thanks,
<br>
<pre>
--
Benjamin Bouvier
________________________________________
De : users-bounces_at_[hidden] [users-bounces_at_[hidden]] de la part de Jeff Squyres [jsquyres_at_[hidden]]
Date d'envoi : vendredi 8 juin 2012 16:30
&#192; : Open MPI Users
Objet : Re: [OMPI users] Bug when mixing sent types in version 1.6
On Jun 8, 2012, at 6:43 AM, BOUVIER Benjamin wrote:
&gt; # include &lt;mpi.h&gt;
&gt; # include &lt;stdio.h&gt;
&gt; # include &lt;string.h&gt;
&gt;
&gt; int main(int argc, char **argv)
&gt; {
&gt;    int rank, size;
&gt;    const char someString[] = &quot;Can haz cheezburgerz?&quot;;
&gt;
&gt;    MPI_Init(&amp;argc, &amp;argv);
&gt;
&gt;    MPI_Comm_rank( MPI_COMM_WORLD, &amp; rank );
&gt;    MPI_Comm_size( MPI_COMM_WORLD, &amp; size );
&gt;
&gt;    if ( rank == 0 )
&gt;    {
&gt;        int len = strlen( someString );
&gt;        int i;
&gt;        for( i = 1; i &lt; size; ++i)
&gt;        {
&gt;            MPI_Send( &amp;len, 1, MPI_INT, i, 0, MPI_COMM_WORLD );
&gt;            MPI_Send( &amp;someString, len+1, MPI_CHAR, i, 0, MPI_COMM_WORLD );
&gt;        }
&gt;    } else {
&gt;        char buffer[ 128 ];
&gt;        int receivedLen;
&gt;        MPI_Status stat;
&gt;        MPI_Recv( &amp;receivedLen, 1, MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;stat );
&gt;        printf( &quot;[Worker] Length : %d\n&quot;, receivedLen );
&gt;        MPI_Recv( buffer, receivedLen+1, MPI_CHAR, 0, 0, MPI_COMM_WORLD, &amp;stat);
&gt;        printf( &quot;[Worker] String : %s\n&quot;, buffer );
&gt;    }
&gt;
&gt;    MPI_Finalize();
&gt; }
I don't see anything obviously wrong with this code.
&gt; I know that there is a better way to send a string, by giving a maximum buffer size at the second MPI_Recv, but there is no the main topic here.
&gt; The launch works locally (i.e when the 2 processes are launched on one machine), but doesn't work when the 2 processes are dispatched in 2 machines through network (i.e one per host). In this case, the worker correctly reads the INT, and then master and worker block on the next call.
That's very odd.
&gt; I have no issue when sending only char strings or only numbers. This only happens when sending char strings then numbers, or in the other order.
That's even more odd.
Can you run standard benchmarks like MPI net pipe, and/or the OSU benchmarks?  (across multiple nodes, that is)
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19488.php">Jeff Squyres: "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19486.php">Rayson Ho: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<li><strong>In reply to:</strong> <a href="19485.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19488.php">Jeff Squyres: "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19488.php">Jeff Squyres: "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
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
