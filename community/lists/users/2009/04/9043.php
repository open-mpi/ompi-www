<?
$subject_val = "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 23:43:24 2009" -->
<!-- isoreceived="20090423034324" -->
<!-- sent="Thu, 23 Apr 2009 11:43:19 +0800" -->
<!-- isosent="20090423034319" -->
<!-- name="Tsung Han Shie" -->
<!-- email="icbm0926_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Could following situations caused by RDMA mcaparameters?" -->
<!-- id="84b2b5e30904222043j39016925of26dc50990b760fd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0C8E305D-90C2-4936-9EEF-94E552993599_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Could following situations caused by RDMA mcaparameters?<br>
<strong>From:</strong> Tsung Han Shie (<em>icbm0926_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 23:43:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9044.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Previous message:</strong> <a href="9042.php">Elvedin Trnjanin: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>In reply to:</strong> <a href="9025.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9057.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMAmcaparameters?"</a>
<li><strong>Reply:</strong> <a href="9057.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMAmcaparameters?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff
<br>
<p>Thanks for your help.
<br>
Unfortunately, after I thoroughly examined entire cluster, I found a bad
<br>
node with busted hard drive. That's the reason why this job hanged.
<br>
Also, when this job is sent with one bad node among the machinefile, neither
<br>
the openmpi nor my program gives me any error messages. That's why I can't
<br>
find the reason for job hanged.
<br>
<p>Best regard
<br>
<p>2009/4/22 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Apr 21, 2009, at 11:01 AM, Tsung Han Shie wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I tried to increase speed of a program with openmpi-1.1.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you mean 1.1.3 or 1.3.1?I mean 1.1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  by adding following 4 parameters into openmpi-mca-params.conf file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpi_leave_pinned=1
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_eager_rdma_num=128
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_max_eager_rdma=128
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_eager_limit=1024
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you meant 1.3.1 above, please see the following message about an
</span><br>
<span class="quotelev1">&gt; important bug in 1.3 and 1.3.1 with the use of mpi_leave_pinned:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/announce/2009/03/0029.php">http://www.open-mpi.org/community/lists/announce/2009/03/0029.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  and then, I ran my program twice(124 processes on 31 nodes). one with
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_leave_pinned=1&quot;, another with &quot;mpi_leave_pinned=0&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; All of them were stopped abnormally with &quot;ctrl+c&quot; and &quot;killall -9
</span><br>
<span class="quotelev2">&gt;&gt; &lt;program&gt;&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why -- did they hang?
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I just fun my program for a few steps to see the speed and then I killed
<br>
it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  After that, I couldn't start to run that program again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What exactly was the error?
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;There are not any messages.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I checked every nodes with &quot;free -m&quot; and I found that huge amount of
</span><br>
<span class="quotelev2">&gt;&gt; cached memory were used in each nodes.
</span><br>
<span class="quotelev2">&gt;&gt; Could this situation be caused by those 4 parameters? IS there anyway to
</span><br>
<span class="quotelev2">&gt;&gt; free theme?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9043/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9044.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Previous message:</strong> <a href="9042.php">Elvedin Trnjanin: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>In reply to:</strong> <a href="9025.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9057.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMAmcaparameters?"</a>
<li><strong>Reply:</strong> <a href="9057.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMAmcaparameters?"</a>
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
