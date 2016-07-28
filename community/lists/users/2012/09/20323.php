<?
$subject_val = "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 21:20:33 2012" -->
<!-- isoreceived="20120926012033" -->
<!-- sent="Wed, 26 Sep 2012 09:20:25 +0800 (CST)" -->
<!-- isosent="20120926012025" -->
<!-- name="Richard " -->
<!-- email="codemonkee_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi test program &amp;quot;ring&amp;quot; failed: blocked at MPI_Send" -->
<!-- id="6e961a17.13995.13a00291eee.Coremail.codemonkee_at_163.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="CC872B27.75F6%tombry_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send<br>
<strong>From:</strong> Richard  (<em>codemonkee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 21:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20324.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20322.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="20305.php">Tom Bryan (tombry): "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20322.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom might be correct, I checked my system. Using rpm -qa, I did not find Xen, but found libvirt.
<br>
<p><p>At 2012-09-25 21:38:23,&quot;Tom Bryan (tombry)&quot; &lt;tombry_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;On 9/25/12 9:10 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;problem, so i fixed it using &quot;--mca btl_tcp_if_include bond0&quot; because I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;know this is the high speed network interface I should use on each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Glad it works for you!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;If you're not using those interfaces (they might be related to Xen, or
</span><br>
<span class="quotelev2">&gt;&gt;something like that?), you might want to disable them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;YMMV, but on our RHEL machines, I believe that the virbr0 interface is
</span><br>
<span class="quotelev1">&gt;coming from the libvirt package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;---Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20324.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20322.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="20305.php">Tom Bryan (tombry): "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20322.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
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
