<?
$subject_val = "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 19:52:20 2016" -->
<!-- isoreceived="20160711235220" -->
<!-- sent="Tue, 12 Jul 2016 08:52:13 +0900" -->
<!-- isosent="20160711235213" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem when installing Rmpi package in HPC cluster" -->
<!-- id="dfacd564-a9f7-5460-6c38-63e297bb7283_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CACD_QsXmBdwXwqWEcAo875pp2rmWEOMuZM6k8P2atOEy1JNSAA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem when installing Rmpi package in HPC cluster<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-11 19:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29644.php">Bennet Fauber: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Previous message:</strong> <a href="29642.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>In reply to:</strong> <a href="29640.php">pan yang: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29644.php">Bennet Fauber: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Reply:</strong> <a href="29644.php">Bennet Fauber: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note this is just a workaround, this simply disables the mxm mtl (e.g. 
<br>
Mellanox optimized infiniband driver).
<br>
<p><p>basically, there are two ways to run a single task mpi program (a.out)
<br>
<p>- mpirun -np 1 ./a.out (this is the &quot;standard&quot; way)
<br>
<p>- ./a.out (aka singleton mode)
<br>
<p>the logs you posted do not specify how the test was launch (e.g. with or 
<br>
without mpirun)
<br>
<p><p>bottom line, if you hit a singleton limitation (e.g. mxm/mtl is not 
<br>
working in singleton mode), then you can simply
<br>
<p>mpirun -np &lt;n&gt; a.out
<br>
<p>your Rmpi applications, and this should be just fine.
<br>
<p><p>if not, you need to
<br>
<p>export OMPI_MCA_pml=ob1
<br>
<p>regardless you are using mpirun or not.
<br>
<p>/* and for the sake of completion, if you are using mpirun, an 
<br>
equivalent option is to
<br>
<p>mpirun --mca pml ob1 ...
<br>
<p>*/
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On 7/12/2016 1:34 AM, pan yang wrote:
<br>
<span class="quotelev1">&gt; Dear Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried export OMPI_MCA_pml=ob1, and it worked! Thank you very much 
</span><br>
<span class="quotelev1">&gt; for your brilliant suggestion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, I don't really understand what do you mean by '/can you 
</span><br>
<span class="quotelev1">&gt; also extract the command tha launch the test ?/'...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Pan
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29640.php">http://www.open-mpi.org/community/lists/users/2016/07/29640.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29643/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29644.php">Bennet Fauber: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Previous message:</strong> <a href="29642.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>In reply to:</strong> <a href="29640.php">pan yang: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29644.php">Bennet Fauber: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Reply:</strong> <a href="29644.php">Bennet Fauber: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
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
