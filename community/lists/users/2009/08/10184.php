<?
$subject_val = "Re: [OMPI users] fault tolerance in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 07:24:31 2009" -->
<!-- isoreceived="20090803112431" -->
<!-- sent="Mon, 3 Aug 2009 16:54:26 +0530" -->
<!-- isosent="20090803112426" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fault tolerance in open mpi" -->
<!-- id="fa4af8200908030424r49cb7598jb81655a01c2624f7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f869b68c0907090800n4702b6d1q97c2b9235f67a713_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] fault tolerance in open mpi<br>
<strong>From:</strong> vipin kumar (<em>vipinkumar41_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 07:24:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10185.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10183.php">Lee Amy: "Re: [OMPI users] Help: Processors Binding"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9899.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10187.php">jody: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="10187.php">jody: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Thanks Durga for your reply.
<br>
<p>Jeff, once you wrote code for Mandelbrot set to demonstrate fault tolerance
<br>
in LAM-MPI. i. e. killing any slave process doesn't
<br>
affect others. Exact behaviour I am looking for in Open MPI. I attempted,
<br>
but no luck. Can you please tell how to write such programs in Open MPI.
<br>
<p>Thanks in advance.
<br>
<p>Regards,
<br>
On Thu, Jul 9, 2009 at 8:30 PM, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Although I have perhaps the least experience on the topic in this
</span><br>
<span class="quotelev1">&gt; list, I will take a shot; more experienced people, please correct me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI standards specify communication mechanism, not fault tolerance at
</span><br>
<span class="quotelev1">&gt; any level. You may achieve network tolerance at the IP level by
</span><br>
<span class="quotelev1">&gt; implementing 'equal cost multipath' routes (which means two equally
</span><br>
<span class="quotelev1">&gt; capable NIC cards connecting to the same destination and modifying the
</span><br>
<span class="quotelev1">&gt; kernel routing table to use both cards; the kernel will dynamically
</span><br>
<span class="quotelev1">&gt; load balance.). At the MAC level, you can achieve the same effect by
</span><br>
<span class="quotelev1">&gt; trunking multiple network cards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can achieve process level fault tolerance by a checkpointing
</span><br>
<span class="quotelev1">&gt; scheme such as BLCR, which has been tested to work with OpenMPI (and
</span><br>
<span class="quotelev1">&gt; other processes as well)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 9, 2009 at 4:57 AM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I want to know whether open mpi supports Network and process fault
</span><br>
<span class="quotelev1">&gt; tolerance
</span><br>
<span class="quotelev2">&gt; &gt; or not? If there is any example demonstrating these features that will be
</span><br>
<span class="quotelev2">&gt; &gt; best.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Vipin K.
</span><br>
<span class="quotelev2">&gt; &gt; Research Engineer,
</span><br>
<span class="quotelev2">&gt; &gt; C-DOTB, India
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><p><pre>
-- 
Vipin K.
Research Engineer,
C-DOTB, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10184/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10185.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10183.php">Lee Amy: "Re: [OMPI users] Help: Processors Binding"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9899.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10187.php">jody: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="10187.php">jody: "Re: [OMPI users] fault tolerance in open mpi"</a>
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
