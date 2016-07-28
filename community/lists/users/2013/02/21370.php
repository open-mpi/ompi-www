<?
$subject_val = "Re: [OMPI users] mpirun completes for one user, not for another";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 11:16:53 2013" -->
<!-- isoreceived="20130211161653" -->
<!-- sent="Mon, 11 Feb 2013 16:16:48 +0000" -->
<!-- isosent="20130211161648" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun completes for one user, not for another" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CE546B_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADjSo4QE8QW8A=Kc6qmQHDVhGLOEMbGMK=c3soha-euAiA0dAw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun completes for one user, not for another<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 11:16:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21371.php">albatross_at_[hidden]: "Re: [OMPI users] error when running mpirun"</a>
<li><strong>Previous message:</strong> <a href="21369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>In reply to:</strong> <a href="21361.php">Daniel Fetchinson: "[OMPI users] mpirun completes for one user, not for another"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21380.php">Daniel Fetchinson: "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Reply:</strong> <a href="21380.php">Daniel Fetchinson: "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make sure that the PATH really is identical between users -- especially for non-iteractive logins.  E.g.:
<br>
<p>env
<br>
<p>vs. 
<br>
<p>ssh othernode env
<br>
<p>Also check the LD_LIBRARY_PATH.
<br>
<p><p>On Feb 11, 2013, at 7:11 AM, Daniel Fetchinson &lt;fetchinson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a really strange problem: a super simple MPI test program (see
</span><br>
<span class="quotelev1">&gt; below) runs successfully for all users when executed on 4 processes in
</span><br>
<span class="quotelev1">&gt; 1 node, but hangs for user A and runs successfully for user B when
</span><br>
<span class="quotelev1">&gt; executed on 8 processes in 2 nodes. The executable used is the same
</span><br>
<span class="quotelev1">&gt; and the appfile used is also the same for user A and user B. Both
</span><br>
<span class="quotelev1">&gt; users launch it by
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --app appfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where the content of 'appfile' is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for the single node run with 4 processes and is replaced by
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; -np 1 -host node2 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; -np 1 -host node2 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; -np 1 -host node2 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; -np 1 -host node2 -wdir /tmp/test ./test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for the 2-node run with 8 processes. Just to recap, the single node
</span><br>
<span class="quotelev1">&gt; run works for both user A and user B, but the 2-node run only works
</span><br>
<span class="quotelev1">&gt; for user B and it hangs for user A. It does respond to Ctrl-C though.
</span><br>
<span class="quotelev1">&gt; Both users use bash, have set up passwordless ssh, are able to ssh
</span><br>
<span class="quotelev1">&gt; from node1 to node2 and back, have the same PATH and use the same
</span><br>
<span class="quotelev1">&gt; 'mpirun' executable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point I've run out of ideas what to check and debug because
</span><br>
<span class="quotelev1">&gt; the setups look really identical. The test program is simply
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char **argv )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int node;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank( MPI_COMM_WORLD, &amp;node );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; printf( &quot;First Hello World from Node %d\n&quot;, node );
</span><br>
<span class="quotelev1">&gt; MPI_Barrier( MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt; printf( &quot;Second Hello World from Node %d\n&quot;,node );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize(  );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also asked both users to compile the test program separately, and
</span><br>
<span class="quotelev1">&gt; the resulting executable 'test' is the same for both indicating again
</span><br>
<span class="quotelev1">&gt; that identical gcc, mpicc, etc, is used. Gcc is 4.5.1 and openmpi is
</span><br>
<span class="quotelev1">&gt; 1.5. and the interconnect is infiniband.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've really run out of ideas what else to compare between user A and B.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any hints,
</span><br>
<span class="quotelev1">&gt; Daniel
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Psss, psss, put it down! - <a href="http://www.cafepress.com/putitdown">http://www.cafepress.com/putitdown</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Psss, psss, put it down! - <a href="http://www.cafepress.com/putitdown">http://www.cafepress.com/putitdown</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21371.php">albatross_at_[hidden]: "Re: [OMPI users] error when running mpirun"</a>
<li><strong>Previous message:</strong> <a href="21369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>In reply to:</strong> <a href="21361.php">Daniel Fetchinson: "[OMPI users] mpirun completes for one user, not for another"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21380.php">Daniel Fetchinson: "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Reply:</strong> <a href="21380.php">Daniel Fetchinson: "Re: [OMPI users] mpirun completes for one user, not for another"</a>
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
