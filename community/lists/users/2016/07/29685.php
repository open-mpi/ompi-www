<?
$subject_val = "Re: [OMPI users] Forcing TCP btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 01:14:56 2016" -->
<!-- isoreceived="20160719051456" -->
<!-- sent="Tue, 19 Jul 2016 14:14:53 +0900" -->
<!-- isosent="20160719051453" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Forcing TCP btl" -->
<!-- id="3a3faf3f-a1f3-25a4-22aa-bef6be9e7934_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+ssbKWnRXcvf93Dvg06VXH34qiChSfHmE1=4uFs5mvb=OamAA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 01:14:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29686.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Previous message:</strong> <a href="29684.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>In reply to:</strong> <a href="29684.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29686.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Reply:</strong> <a href="29686.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
basically, there are two methods (aka pml) to send/recv messages.
<br>
<p>ob1 is the basic one, it works with (all ?) interconnects that can 
<br>
send/recv a stream of data
<br>
<p>pml/ob1 uses the available btl(s) (tcp, openib, ...)
<br>
<p>cm is for feature rich interconnects that can send/recv messages
<br>
<p>pml/cm uses the available mtl (mxm, portals4, psm, ...)
<br>
<p><p>mxm is a mtl that uses the (proprietary) mxm library from Mellanox.
<br>
<p><p>bottom line, there are two ways to use infiniband :
<br>
<p>- pml/ob1 and btl/openib
<br>
<p>- pml/cm and mtl/mxm
<br>
<p><p>since pml/cm has a default priority that is higher than pml/ob1, if you 
<br>
want to force tcp usage, even on systems
<br>
<p>where mxm is available and OpenMPI has builtin support for mxm, you need to
<br>
<p>- force pml/ob1 (so mtl/mxm cannot be used by pml/cm)
<br>
<p>and
<br>
<p>- blacklist btl/openib
<br>
<p>your mpirun command line looks like this
<br>
<p>mpirun --mca pml ob1 --mca btl ^openib ...
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p>On 7/19/2016 1:57 PM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; Thank you, but what's mxm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 19, 2016 at 12:52 AM, Nathan Hjelm &lt;hjelmn_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hjelmn_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You probably will also want to run with -mca pml ob1 to make sure
</span><br>
<span class="quotelev1">&gt;     mxm is not in use. The combination should be sufficient to force
</span><br>
<span class="quotelev1">&gt;     tcp usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Jul 18, 2016, at 10:50 PM, Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt;     &lt;esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Hi,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I read in a previous thread
</span><br>
<span class="quotelev1">&gt;     (<a href="https://www.open-mpi.org/community/lists/users/2014/05/24475.php">https://www.open-mpi.org/community/lists/users/2014/05/24475.php</a>)
</span><br>
<span class="quotelev1">&gt;     that Jeff mentions it's possible for OpenMPI to pick up the openib
</span><br>
<span class="quotelev1">&gt;     transport if tcp is not requested explicitly.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; So, does that mean if I do,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --mca btl ^openib
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; that it's still possible for OpenMPI to use Infiniband and not TCP?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Is there a way to guarantee that a test is using TCP, but not IB?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thank you,
</span><br>
<span class="quotelev2">&gt;     &gt; saliya
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --
</span><br>
<span class="quotelev2">&gt;     &gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;     &gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;     &gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;     &gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/07/29682.php">http://www.open-mpi.org/community/lists/users/2016/07/29682.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/07/29683.php">http://www.open-mpi.org/community/lists/users/2016/07/29683.php</a>
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29684.php">http://www.open-mpi.org/community/lists/users/2016/07/29684.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29685/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29686.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Previous message:</strong> <a href="29684.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>In reply to:</strong> <a href="29684.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29686.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Reply:</strong> <a href="29686.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
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
