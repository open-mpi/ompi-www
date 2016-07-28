<?
$subject_val = "Re: [OMPI users] mpirun completes for one user, not for another";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 17:08:51 2013" -->
<!-- isoreceived="20130211220851" -->
<!-- sent="Mon, 11 Feb 2013 23:08:46 +0100" -->
<!-- isosent="20130211220846" -->
<!-- name="Daniel Fetchinson" -->
<!-- email="fetchinson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun completes for one user, not for another" -->
<!-- id="CADjSo4QtgbG9sLPGrLWvW3NmhsU8r7tyrmmRFUKVZEFRpvmoqA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CE546B_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Daniel Fetchinson (<em>fetchinson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 17:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21381.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21379.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21370.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot, this was exactly the problem:
<br>
<p><span class="quotelev1">&gt; Make sure that the PATH really is identical between users -- especially for
</span><br>
<span class="quotelev1">&gt; non-iteractive logins.  E.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; env
</span><br>
<p>Here PATH was correct.
<br>
<p><span class="quotelev1">&gt; vs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh othernode env
</span><br>
<p>Here PATH was not correct. The PATH was set in .bash_profile and
<br>
apparently in non-interactive logins .bash_profile is not sourced.
<br>
Only .bashrc is sourced. So if the PATH is set in .bashrc everything
<br>
is fine and the problem went away.
<br>
<p>Thanks again,
<br>
Daniel
<br>
<p><p><span class="quotelev1">&gt; Also check the LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2013, at 7:11 AM, Daniel Fetchinson &lt;fetchinson_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a really strange problem: a super simple MPI test program (see
</span><br>
<span class="quotelev2">&gt;&gt; below) runs successfully for all users when executed on 4 processes in
</span><br>
<span class="quotelev2">&gt;&gt; 1 node, but hangs for user A and runs successfully for user B when
</span><br>
<span class="quotelev2">&gt;&gt; executed on 8 processes in 2 nodes. The executable used is the same
</span><br>
<span class="quotelev2">&gt;&gt; and the appfile used is also the same for user A and user B. Both
</span><br>
<span class="quotelev2">&gt;&gt; users launch it by
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --app appfile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where the content of 'appfile' is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for the single node run with 4 processes and is replaced by
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node1 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node2 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node2 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node2 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host node2 -wdir /tmp/test ./test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for the 2-node run with 8 processes. Just to recap, the single node
</span><br>
<span class="quotelev2">&gt;&gt; run works for both user A and user B, but the 2-node run only works
</span><br>
<span class="quotelev2">&gt;&gt; for user B and it hangs for user A. It does respond to Ctrl-C though.
</span><br>
<span class="quotelev2">&gt;&gt; Both users use bash, have set up passwordless ssh, are able to ssh
</span><br>
<span class="quotelev2">&gt;&gt; from node1 to node2 and back, have the same PATH and use the same
</span><br>
<span class="quotelev2">&gt;&gt; 'mpirun' executable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this point I've run out of ideas what to check and debug because
</span><br>
<span class="quotelev2">&gt;&gt; the setups look really identical. The test program is simply
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char **argv )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; int node;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank( MPI_COMM_WORLD, &amp;node );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; printf( &quot;First Hello World from Node %d\n&quot;, node );
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier( MPI_COMM_WORLD );
</span><br>
<span class="quotelev2">&gt;&gt; printf( &quot;Second Hello World from Node %d\n&quot;,node );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize(  );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also asked both users to compile the test program separately, and
</span><br>
<span class="quotelev2">&gt;&gt; the resulting executable 'test' is the same for both indicating again
</span><br>
<span class="quotelev2">&gt;&gt; that identical gcc, mpicc, etc, is used. Gcc is 4.5.1 and openmpi is
</span><br>
<span class="quotelev2">&gt;&gt; 1.5. and the interconnect is infiniband.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've really run out of ideas what else to compare between user A and B.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any hints,
</span><br>
<span class="quotelev2">&gt;&gt; Daniel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Psss, psss, put it down! - <a href="http://www.cafepress.com/putitdown">http://www.cafepress.com/putitdown</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Psss, psss, put it down! - <a href="http://www.cafepress.com/putitdown">http://www.cafepress.com/putitdown</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Psss, psss, put it down! - <a href="http://www.cafepress.com/putitdown">http://www.cafepress.com/putitdown</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21381.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21379.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21370.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
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
