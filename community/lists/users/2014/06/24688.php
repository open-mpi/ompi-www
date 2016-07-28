<?
$subject_val = "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 15:14:47 2014" -->
<!-- isoreceived="20140620191447" -->
<!-- sent="Fri, 20 Jun 2014 15:14:46 -0400" -->
<!-- isosent="20140620191446" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update." -->
<!-- id="CAG4F6z8_3EkU=rJoAOEkd9o694et2db+WAX-f5jGUMw_HJGz8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0CDC5C0A257A5D40A5DCDC6E58F28E5EA62A74C823_at_KIT-MSX-07.kit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-20 15:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24689.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Previous message:</strong> <a href="24687.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update."</a>
<li><strong>In reply to:</strong> <a href="24687.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24689.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Reply:</strong> <a href="24689.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aleksandar,
<br>
<p>Please ensure your system administrator follows the guidelines outlined in
<br>
the link printed in the error message
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>Best,
<br>
<p>Josh
<br>
<p><p>On Fri, Jun 20, 2014 at 2:56 PM, Ivanov, Aleksandar (INR) &lt;
<br>
aleksandar.ivanov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was not the one updating the machine unfortunately, however I can ask my
</span><br>
<span class="quotelev1">&gt; colleagues for specific list of modifications done. If I understand you
</span><br>
<span class="quotelev1">&gt; correctly you are referring to the &#226;&#128;&#156;ulimit&#226;&#128;&#157; parameters. They are properly
</span><br>
<span class="quotelev1">&gt; set, in fact we use JMS as job scheduler, therefore the &#226;&#128;&#156;ulimit -v&#226;&#128;&#157; is set
</span><br>
<span class="quotelev1">&gt; by the user. In my case I used 31GB per MPI process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The stack size is set to infinity.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Ralph
</span><br>
<span class="quotelev1">&gt; Castain
</span><br>
<span class="quotelev1">&gt; *Sen**t:* Friday, June 20, 2014 8:42 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb
</span><br>
<span class="quotelev1">&gt; error after Infini-band stack update.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What was updated? If the OS, did you remember to set the memory
</span><br>
<span class="quotelev1">&gt; registration limits to max?
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
<span class="quotelev1">&gt; On Jun 20, 2014, at 11:25 AM, Ivanov, Aleksandar (INR) &lt;
</span><br>
<span class="quotelev1">&gt; aleksandar.ivanov_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; Dear Sir or Madam,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the openmpi 1.6.5 library compiled with IFORT / ICC 13.1.5.
</span><br>
<span class="quotelev1">&gt; Since a recent update of our machine I started generating mpi errors. The
</span><br>
<span class="quotelev1">&gt; code crashes after completing approx. 24 % from the total job. The same
</span><br>
<span class="quotelev1">&gt; code and input were run before on the same machine and no such problems
</span><br>
<span class="quotelev1">&gt; were ever observed. The actual error message is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I presume that after the update an incompatibility between the
</span><br>
<span class="quotelev1">&gt; infiniband-stack and the openmpi library might have been introduced. I
</span><br>
<span class="quotelev1">&gt; think that the suggested  &#226;&#128;&#156;out of memory problem&#226;&#128;&#157; should not be causing the
</span><br>
<span class="quotelev1">&gt; malfunction, since the application uses only 1GB of the total 32 GB
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would appreciate your help and ideas how to clarify this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aleksandar Ivanov
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;openmpi.log&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24685.php">http://www.open-mpi.org/community/lists/users/2014/06/24685.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24687.php">http://www.open-mpi.org/community/lists/users/2014/06/24687.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24688/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24689.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Previous message:</strong> <a href="24687.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update."</a>
<li><strong>In reply to:</strong> <a href="24687.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24689.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Reply:</strong> <a href="24689.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
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
