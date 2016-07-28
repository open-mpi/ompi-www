<?
$subject_val = "Re: [OMPI users] open mpi 1.8.6. MPI_T";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 17:43:32 2015" -->
<!-- isoreceived="20150814214332" -->
<!-- sent="Fri, 14 Aug 2015 22:43:22 +0100" -->
<!-- isosent="20150814214322" -->
<!-- name="Khalid Hasanov" -->
<!-- email="xalid.h_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi 1.8.6. MPI_T" -->
<!-- id="CABb4ZDeyUW+=r2N5YeZwjnhvT=OR01VjOSMQbCvftiwU4yKPKA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWgz08LrL6u37Vnn=TuuZaGVpA0pw3ZkTcyA_H6rv+Qtg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi 1.8.6. MPI_T<br>
<strong>From:</strong> Khalid Hasanov (<em>xalid.h_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 17:43:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27479.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27477.php">Jeff Squyres (jsquyres): "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="27475.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>What do you mean by &quot;cvar version &quot; ? Is there cvar version of
<br>
&quot;coll_tuned_bcast_algorithm&quot; ?
<br>
<p>If you meant using cvar APIs then I use them. For example, in the following
<br>
example I use MPI_T_cvar_write to set the variable. Despite I can read
<br>
using MPI_T_cvar_read, the write does not work.
<br>
<p>I set the variable, then use MPI_Comm_split to create a new communicator,
<br>
after that I read the variable again to check if it was set or not.
<br>
<p>Thanks.
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int cidx, nvals, err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int bcast_alg;
<br>
int provided;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_T_cvar_handle chandle;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;err =  MPI_T_init_thread(MPI_THREAD_SINGLE, &amp;provided);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_T_cvar_get_index(&quot;coll_tuned_bcast_algorithm&quot;, &amp;cidx);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (err != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout, &quot;Error getting cvar index\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_T_cvar_handle_alloc(cidx, NULL, &amp;chandle, &amp;nvals);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_T_cvar_read(chandle, &amp;bcast_alg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!rank)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout, &quot;Bcast alg after first read: %d\n&quot;, bcast_alg);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;bcast_alg = 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_T_cvar_write(chandle, &amp;bcast_alg);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm sub_comm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_split(MPI_COMM_WORLD, rank&gt;0, rank, &amp;sub_comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_T_cvar_read(chandle, &amp;bcast_alg);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (!rank)
<br>
fprintf(stdout, &quot;Bcast alg after second read: %d\n&quot;, bcast_alg);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_T_cvar_handle_free(&amp;chandle);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_T_finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return EXIT_SUCCESS;
<br>
}
<br>
<p><p><p><p><p><p><p>On Fri, Aug 14, 2015 at 7:07 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Aug 14, 2015 at 1:56 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note, too, that these variables are likely only changeable before
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INIT.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I didn't check these specific variables, but at least the
</span><br>
<span class="quotelev2">&gt;&gt; btl_self_eager_limit variable is likely only read/used for setup during
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INIT.  coll_tuned_bcast_algorithm may only be used before a
</span><br>
<span class="quotelev2">&gt;&gt; communicator is setup (although I don't know that for sure offhand).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is read before every communicator creation. So technically one can
</span><br>
<span class="quotelev1">&gt; change the algorithm dynamically for each communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Aug 14, 2015, at 1:50 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; They are considered as control variables, so use the cvar version and
</span><br>
<span class="quotelev2">&gt;&gt; you should get them.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Fri, Aug 14, 2015 at 11:14 AM, Khalid Hasanov &lt;xalid.h_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am trying to use MPI_T interface to set coll_tuned_bcast_algorithm
</span><br>
<span class="quotelev2">&gt;&gt; mca parameter during run time, however I was not successful to do that.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I wonder if is it currently supported in Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I had the same problem with setting btl_self_eager_limit parameter.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The code I am using attached below.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Khalid
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27470.php">http://www.open-mpi.org/community/lists/users/2015/08/27470.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27473.php">http://www.open-mpi.org/community/lists/users/2015/08/27473.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27474.php">http://www.open-mpi.org/community/lists/users/2015/08/27474.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27475.php">http://www.open-mpi.org/community/lists/users/2015/08/27475.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Best Regards,
Khalid
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27478/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27479.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27477.php">Jeff Squyres (jsquyres): "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="27475.php">George Bosilca: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
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
