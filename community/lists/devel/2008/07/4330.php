<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 08:56:31 2008" -->
<!-- isoreceived="20080713125631" -->
<!-- sent="Sun, 13 Jul 2008 15:56:26 +0300" -->
<!-- isosent="20080713125626" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="453d39990807130556y258977e3qf0a45be6912aaedf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4879F93F.9020907_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-13 08:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4331.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4329.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4329.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4331.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4331.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha is right, I didn't disabled it.
<br>
<p>On 7/13/08, Pavel Shamis (Pasha) &lt;pasha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brad and I did some scale testing of IBCM and saw this error sometimes.
</span><br>
<span class="quotelev2">&gt;&gt;  It seemed to happen with higher frequency when you increased the number of
</span><br>
<span class="quotelev2">&gt;&gt; processes on a single node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I talked to Sean Hefty about it, but we never figured out a definitive
</span><br>
<span class="quotelev2">&gt;&gt; cause or solution.  My best guess is that there is something wonky about
</span><br>
<span class="quotelev2">&gt;&gt; multiple processes simultaneously interacting with the IBCM kernel driver
</span><br>
<span class="quotelev2">&gt;&gt; from userspace; but I don't know jack about kernel stuff, so that's a total
</span><br>
<span class="quotelev2">&gt;&gt; SWAG.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for reminding me of this issue; I admit that I had forgotten about
</span><br>
<span class="quotelev2">&gt;&gt; it.  :-(  Pasha -- should IBCM not be the default?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It is not default. I guess Lenny configured it explicitly, is not it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 13, 2008, at 7:08 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting this error sometimes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/USERS/lenny/OMPI_COMP_PATH/bin/mpirun -np 100 -hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/USERS/lenny/TESTS/COMPILERS/hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/USERS/lenny/TESTS/COMPILERS/hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch24][[32428,1],96][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c:769:ibcm_component_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to ib_cm_listen 10 times: rc=-1, errno=22
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world! I'm 0 of 100 on witch2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4330/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4331.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4329.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4329.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4331.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4331.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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
