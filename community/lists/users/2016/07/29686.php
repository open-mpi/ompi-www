<?
$subject_val = "Re: [OMPI users] Forcing TCP btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 01:21:41 2016" -->
<!-- isoreceived="20160719052141" -->
<!-- sent="Tue, 19 Jul 2016 01:21:39 -0400" -->
<!-- isosent="20160719052139" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Forcing TCP btl" -->
<!-- id="CA+ssbKWUym4FVGb1Anp6Mwh+6+nmySx8pj7X=weMSjgYBG-yjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3a3faf3f-a1f3-25a4-22aa-bef6be9e7934_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Forcing TCP btl<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 01:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29687.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29685.php">Gilles Gouaillardet: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>In reply to:</strong> <a href="29685.php">Gilles Gouaillardet: "Re: [OMPI users] Forcing TCP btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Gilles. That explains it!
<br>
<p>On Tue, Jul 19, 2016 at 1:14 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; basically, there are two methods (aka pml) to send/recv messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ob1 is the basic one, it works with (all ?) interconnects that can
</span><br>
<span class="quotelev1">&gt; send/recv a stream of data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pml/ob1 uses the available btl(s) (tcp, openib, ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cm is for feature rich interconnects that can send/recv messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pml/cm uses the available mtl (mxm, portals4, psm, ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mxm is a mtl that uses the (proprietary) mxm library from Mellanox.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bottom line, there are two ways to use infiniband :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - pml/ob1 and btl/openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - pml/cm and mtl/mxm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; since pml/cm has a default priority that is higher than pml/ob1, if you
</span><br>
<span class="quotelev1">&gt; want to force tcp usage, even on systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where mxm is available and OpenMPI has builtin support for mxm, you need to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - force pml/ob1 (so mtl/mxm cannot be used by pml/cm)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - blacklist btl/openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your mpirun command line looks like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca pml ob1 --mca btl ^openib ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; On 7/19/2016 1:57 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you, but what's mxm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 19, 2016 at 12:52 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You probably will also want to run with -mca pml ob1 to make sure mxm is
</span><br>
<span class="quotelev2">&gt;&gt; not in use. The combination should be sufficient to force tcp usage.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jul 18, 2016, at 10:50 PM, Saliya Ekanayake &lt; &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I read in a previous thread (
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="https://www.open-mpi.org/community/lists/users/2014/05/24475.php">https://www.open-mpi.org/community/lists/users/2014/05/24475.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/community/lists/users/2014/05/24475.php">https://www.open-mpi.org/community/lists/users/2014/05/24475.php</a>) that
</span><br>
<span class="quotelev2">&gt;&gt; Jeff mentions it's possible for OpenMPI to pick up the openib transport if
</span><br>
<span class="quotelev2">&gt;&gt; tcp is not requested explicitly.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So, does that mean if I do,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --mca btl ^openib
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that it's still possible for OpenMPI to use Infiniband and not TCP?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is there a way to guarantee that a test is using TCP, but not IB?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; saliya
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Saliya Ekanayake
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt; &gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Indiana University, Bloomington
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29682.php">http://www.open-mpi.org/community/lists/users/2016/07/29682.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29683.php">http://www.open-mpi.org/community/lists/users/2016/07/29683.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29684.php">http://www.open-mpi.org/community/lists/users/2016/07/29684.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29685.php">http://www.open-mpi.org/community/lists/users/2016/07/29685.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29686/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29687.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29685.php">Gilles Gouaillardet: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>In reply to:</strong> <a href="29685.php">Gilles Gouaillardet: "Re: [OMPI users] Forcing TCP btl"</a>
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
