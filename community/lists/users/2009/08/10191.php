<?
$subject_val = "Re: [OMPI users] fault tolerance in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 10:30:37 2009" -->
<!-- isoreceived="20090803143037" -->
<!-- sent="Mon, 3 Aug 2009 10:30:32 -0400" -->
<!-- isosent="20090803143032" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fault tolerance in open mpi" -->
<!-- id="f869b68c0908030730j271abf8ci3befd892918a17eb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0908030621k2d36d29er99bf783c13ec6327_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-03 10:30:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10192.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10190.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>In reply to:</strong> <a href="10187.php">jody: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10192.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="10192.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is that kind of approach possible within an MPI framework? Perhaps a
<br>
grid approach would be better. More experienced people, speak up,
<br>
please?
<br>
(The reason I say that is that I too am interested in the solution of
<br>
that kind of problem, where an individual blade of a blade server
<br>
fails and correcting for that failure on the fly is better than taking
<br>
checkpoints and restarting the whole process excluding the failed
<br>
blade.
<br>
<p>Durga
<br>
<p>On Mon, Aug 3, 2009 at 9:21 AM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess &quot;task-farming&quot; could give you a certain amount of the kind of
</span><br>
<span class="quotelev1">&gt; fault-tolerance you want.
</span><br>
<span class="quotelev1">&gt; (i.e. a master process distributes tasks to idle slave processors -
</span><br>
<span class="quotelev1">&gt; however, this will only work
</span><br>
<span class="quotelev1">&gt; if the slave processes don't need to communicate with each other)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 3, 2009 at 1:24 PM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Durga for your reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, once you wrote code for Mandelbrot set to demonstrate fault tolerance
</span><br>
<span class="quotelev2">&gt;&gt; in LAM-MPI. i. e. killing any slave process doesn't
</span><br>
<span class="quotelev2">&gt;&gt; affect others. Exact behaviour I am looking for in Open MPI. I attempted,
</span><br>
<span class="quotelev2">&gt;&gt; but no luck. Can you please tell how to write such programs in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 9, 2009 at 8:30 PM, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Although I have perhaps the least experience on the topic in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list, I will take a shot; more experienced people, please correct me:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI standards specify communication mechanism, not fault tolerance at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any level. You may achieve network tolerance at the IP level by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementing 'equal cost multipath' routes (which means two equally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; capable NIC cards connecting to the same destination and modifying the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel routing table to use both cards; the kernel will dynamically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; load balance.). At the MAC level, you can achieve the same effect by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunking multiple network cards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can achieve process level fault tolerance by a checkpointing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheme such as BLCR, which has been tested to work with OpenMPI (and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other processes as well)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 9, 2009 at 4:57 AM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I want to know whether open mpi supports Network and process fault
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; tolerance
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; or not? If there is any example demonstrating these features that will
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; be
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; best.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Vipin K.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Research Engineer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; C-DOTB, India
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Vipin K.
</span><br>
<span class="quotelev2">&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev2">&gt;&gt; C-DOTB, India
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10192.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10190.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>In reply to:</strong> <a href="10187.php">jody: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10192.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="10192.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
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
