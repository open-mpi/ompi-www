<?
$subject_val = "Re: [OMPI users] fault tolerance in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 11:00:25 2009" -->
<!-- isoreceived="20090709150025" -->
<!-- sent="Thu, 9 Jul 2009 11:00:19 -0400" -->
<!-- isosent="20090709150019" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fault tolerance in open mpi" -->
<!-- id="f869b68c0907090800n4702b6d1q97c2b9235f67a713_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fa4af8200907090157w65b24256j6f9e5bf5769a654f_at_mail.gmail.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 11:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9900.php">Justin Luitjens: "Re: [OMPI users] Segfault when using valgrind"</a>
<li><strong>Previous message:</strong> <a href="9898.php">Jeff Squyres: "Re: [OMPI users] bulding rpm"</a>
<li><strong>In reply to:</strong> <a href="9891.php">vipin kumar: "[OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10184.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10184.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Although I have perhaps the least experience on the topic in this
<br>
list, I will take a shot; more experienced people, please correct me:
<br>
<p>MPI standards specify communication mechanism, not fault tolerance at
<br>
any level. You may achieve network tolerance at the IP level by
<br>
implementing 'equal cost multipath' routes (which means two equally
<br>
capable NIC cards connecting to the same destination and modifying the
<br>
kernel routing table to use both cards; the kernel will dynamically
<br>
load balance.). At the MAC level, you can achieve the same effect by
<br>
trunking multiple network cards.
<br>
<p>You can achieve process level fault tolerance by a checkpointing
<br>
scheme such as BLCR, which has been tested to work with OpenMPI (and
<br>
other processes as well)
<br>
<p>Durga
<br>
<p>On Thu, Jul 9, 2009 at 4:57 AM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to know whether open mpi supports Network and process fault tolerance
</span><br>
<span class="quotelev1">&gt; or not? If there is any example demonstrating these features that will be
</span><br>
<span class="quotelev1">&gt; best.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9900.php">Justin Luitjens: "Re: [OMPI users] Segfault when using valgrind"</a>
<li><strong>Previous message:</strong> <a href="9898.php">Jeff Squyres: "Re: [OMPI users] bulding rpm"</a>
<li><strong>In reply to:</strong> <a href="9891.php">vipin kumar: "[OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10184.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10184.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
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
