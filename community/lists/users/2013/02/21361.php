<?
$subject_val = "[OMPI users] mpirun completes for one user, not for another";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 07:11:37 2013" -->
<!-- isoreceived="20130211121137" -->
<!-- sent="Mon, 11 Feb 2013 13:11:32 +0100" -->
<!-- isosent="20130211121132" -->
<!-- name="Daniel Fetchinson" -->
<!-- email="fetchinson_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun completes for one user, not for another" -->
<!-- id="CADjSo4QE8QW8A=Kc6qmQHDVhGLOEMbGMK=c3soha-euAiA0dAw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADjSo4RftA5A3jAm1WgU1cViLYf9+j_6u-fv4MzsG867+NmxZg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun completes for one user, not for another<br>
<strong>From:</strong> Daniel Fetchinson (<em>fetchinson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 07:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile	provides theallocation"</a>
<li><strong>Previous message:</strong> <a href="21360.php">Pierre Lindenbaum: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Reply:</strong> <a href="21369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Reply:</strong> <a href="21370.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I have a really strange problem: a super simple MPI test program (see
<br>
below) runs successfully for all users when executed on 4 processes in
<br>
1 node, but hangs for user A and runs successfully for user B when
<br>
executed on 8 processes in 2 nodes. The executable used is the same
<br>
and the appfile used is also the same for user A and user B. Both
<br>
users launch it by
<br>
<p>mpirun --app appfile
<br>
<p>where the content of 'appfile' is
<br>
<p>-np 1 -host node1 -wdir /tmp/test ./test
<br>
-np 1 -host node1 -wdir /tmp/test ./test
<br>
-np 1 -host node1 -wdir /tmp/test ./test
<br>
-np 1 -host node1 -wdir /tmp/test ./test
<br>
<p>for the single node run with 4 processes and is replaced by
<br>
<p>-np 1 -host node1 -wdir /tmp/test ./test
<br>
-np 1 -host node1 -wdir /tmp/test ./test
<br>
-np 1 -host node1 -wdir /tmp/test ./test
<br>
-np 1 -host node1 -wdir /tmp/test ./test
<br>
-np 1 -host node2 -wdir /tmp/test ./test
<br>
-np 1 -host node2 -wdir /tmp/test ./test
<br>
-np 1 -host node2 -wdir /tmp/test ./test
<br>
-np 1 -host node2 -wdir /tmp/test ./test
<br>
<p>for the 2-node run with 8 processes. Just to recap, the single node
<br>
run works for both user A and user B, but the 2-node run only works
<br>
for user B and it hangs for user A. It does respond to Ctrl-C though.
<br>
Both users use bash, have set up passwordless ssh, are able to ssh
<br>
from node1 to node2 and back, have the same PATH and use the same
<br>
'mpirun' executable.
<br>
<p>At this point I've run out of ideas what to check and debug because
<br>
the setups look really identical. The test program is simply
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main( int argc, char **argv )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int node;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank( MPI_COMM_WORLD, &amp;node );
<br>
<p>&nbsp;&nbsp;&nbsp;printf( &quot;First Hello World from Node %d\n&quot;, node );
<br>
&nbsp;&nbsp;&nbsp;MPI_Barrier( MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;&nbsp;printf( &quot;Second Hello World from Node %d\n&quot;,node );
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize(  );
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>I also asked both users to compile the test program separately, and
<br>
the resulting executable 'test' is the same for both indicating again
<br>
that identical gcc, mpicc, etc, is used. Gcc is 4.5.1 and openmpi is
<br>
1.5. and the interconnect is infiniband.
<br>
<p>I've really run out of ideas what else to compare between user A and B.
<br>
<p>Thanks for any hints,
<br>
Daniel
<br>
<p><p><p><p><p><pre>
-- 
Psss, psss, put it down! - <a href="http://www.cafepress.com/putitdown">http://www.cafepress.com/putitdown</a>
-- 
Psss, psss, put it down! - <a href="http://www.cafepress.com/putitdown">http://www.cafepress.com/putitdown</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile	provides theallocation"</a>
<li><strong>Previous message:</strong> <a href="21360.php">Pierre Lindenbaum: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Reply:</strong> <a href="21369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Reply:</strong> <a href="21370.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
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
