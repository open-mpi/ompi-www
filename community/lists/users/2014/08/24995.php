<?
$subject_val = "Re: [OMPI users] Multiple runs interaction";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 11:37:11 2014" -->
<!-- isoreceived="20140812153711" -->
<!-- sent="Tue, 12 Aug 2014 08:37:11 -0700" -->
<!-- isosent="20140812153711" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple runs interaction" -->
<!-- id="CAMD57ofi2fQ9DHs_-f8zmv3Y5fOxYM-mgSa4T4peS-qqEqzofA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DC84EAB1-FF18-4756-82D0-8C5845FAE49A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple runs interaction<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-12 11:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24996.php">Daniels, Marcus G: "[OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="24994.php">Reuti: "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>In reply to:</strong> <a href="24994.php">Reuti: "Re: [OMPI users] Multiple runs interaction"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can improve performance by using --bind-to socket or --bind-to numa as
<br>
this will keep the process inside the same memory region. You can also help
<br>
separate the jobs by using the --cpuset to tell each job which cpus it
<br>
should use - we'll stay within that envelope.
<br>
<p><p><p>On Tue, Aug 12, 2014 at 8:33 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 12.08.2014 um 16:57 schrieb Antonio Rago:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brilliant, this works!
</span><br>
<span class="quotelev2">&gt; &gt; However I&#226;&#128;&#153;ve to say that it seems that it seems that code becomes
</span><br>
<span class="quotelev1">&gt; slightly less performing.
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to instruct mpirun on which core to use, and maybe create
</span><br>
<span class="quotelev1">&gt; this map automatically with grid engine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the open source version of SGE the requested core binding is only a
</span><br>
<span class="quotelev1">&gt; soft request. The Univa version can handle this as a hard request though,
</span><br>
<span class="quotelev1">&gt; as the scheduler will do the assignment and knows which cores are used. I
</span><br>
<span class="quotelev1">&gt; have no information whether this will be forwarded to Open MPI
</span><br>
<span class="quotelev1">&gt; automatically. I assume not, and it must be read out of the machine file
</span><br>
<span class="quotelev1">&gt; (there ought to be an extra column for it in their version) and feed to
</span><br>
<span class="quotelev1">&gt; Open MPI by some measures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt; &gt; Antonio
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 12 Aug 2014, at 14:10, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The quick and dirty answer is that in the v1.8 series, Open MPI started
</span><br>
<span class="quotelev1">&gt; binding MPI processes to cores by default.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When you run 2 independent jobs on the same machine in the way in which
</span><br>
<span class="quotelev1">&gt; you described, the two jobs won't have knowledge of each other, and
</span><br>
<span class="quotelev1">&gt; therefore they will both starting binging MPI processes starting with
</span><br>
<span class="quotelev1">&gt; logical core 0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The easy workaround is to disable bind-to-core behavior.  For example,
</span><br>
<span class="quotelev1">&gt; &quot;mpirun --bind-to none ...&quot;.  In this way, the OS will (more or less) load
</span><br>
<span class="quotelev1">&gt; balance your MPI jobs to available cores (assuming you don't run more MPI
</span><br>
<span class="quotelev1">&gt; processes than cores).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 12, 2014, at 7:05 AM, Antonio Rago &lt;antonio.rago_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dear mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I&#226;&#128;&#153;m running into trouble in the configuration of the small cluster I&#226;&#128;&#153;m
</span><br>
<span class="quotelev1">&gt; managing.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I&#226;&#128;&#153;ve installed openmpi-1.8.1 with gcc 4.7 on a Centos 6.5 with
</span><br>
<span class="quotelev1">&gt; infiniband support.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Compile and installation were all ok and i can compile and actually
</span><br>
<span class="quotelev1">&gt; run parallel jobs, both directly or by submitting them with the queue
</span><br>
<span class="quotelev1">&gt; manager (gridengine).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My problem is that when two different subsets of two job end on the
</span><br>
<span class="quotelev1">&gt; same node, they will not spread equally and use all the cores of the node
</span><br>
<span class="quotelev1">&gt; but instead they will run on a common subset of cores leaving some other
</span><br>
<span class="quotelev1">&gt; totally empty.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For example two 4 core jobs on a 8 core node will result in only 4
</span><br>
<span class="quotelev1">&gt; core running on the node (all of them being oversubscribed) and the other 4
</span><br>
<span class="quotelev1">&gt; cores being empty.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Clearly there must be an error in the way I&#226;&#128;&#153;ve configured stuffs but i
</span><br>
<span class="quotelev1">&gt; cannot find any hint on how to solve the problem.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I&#226;&#128;&#153;ve tried to do different map (map by core or by slot) but I&#226;&#128;&#153;ve never
</span><br>
<span class="quotelev1">&gt; succeeded.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Could you give a me suggestion on this issue?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Antonio
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [<a href="http://www.plymouth.ac.uk/images/email_footer.gif">http://www.plymouth.ac.uk/images/email_footer.gif</a>]&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.plymouth.ac.uk/worldclass">http://www.plymouth.ac.uk/worldclass</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This email and any files with it are confidential and intended solely
</span><br>
<span class="quotelev1">&gt; for the use of the recipient to whom it is addressed. If you are not the
</span><br>
<span class="quotelev1">&gt; intended recipient then copying, distribution or other use of the
</span><br>
<span class="quotelev1">&gt; information contained is strictly prohibited and you should not rely on it.
</span><br>
<span class="quotelev1">&gt; If you have received this email in error please let the sender know
</span><br>
<span class="quotelev1">&gt; immediately and delete it from your system(s). Internet emails are not
</span><br>
<span class="quotelev1">&gt; necessarily secure. While we take every care, Plymouth University accepts
</span><br>
<span class="quotelev1">&gt; no responsibility for viruses and it is your responsibility to scan emails
</span><br>
<span class="quotelev1">&gt; and their attachments. Plymouth University does not accept responsibility
</span><br>
<span class="quotelev1">&gt; for any changes made after it was sent. Nothing in this email or its
</span><br>
<span class="quotelev1">&gt; attachments constitutes an order for goods or services unless accompanied
</span><br>
<span class="quotelev1">&gt; by an official order form.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24986.php">http://www.open-mpi.org/community/lists/users/2014/08/24986.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24991.php">http://www.open-mpi.org/community/lists/users/2014/08/24991.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ________________________________
</span><br>
<span class="quotelev2">&gt; &gt; [<a href="http://www.plymouth.ac.uk/images/email_footer.gif">http://www.plymouth.ac.uk/images/email_footer.gif</a>]&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.plymouth.ac.uk/worldclass">http://www.plymouth.ac.uk/worldclass</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This email and any files with it are confidential and intended solely
</span><br>
<span class="quotelev1">&gt; for the use of the recipient to whom it is addressed. If you are not the
</span><br>
<span class="quotelev1">&gt; intended recipient then copying, distribution or other use of the
</span><br>
<span class="quotelev1">&gt; information contained is strictly prohibited and you should not rely on it.
</span><br>
<span class="quotelev1">&gt; If you have received this email in error please let the sender know
</span><br>
<span class="quotelev1">&gt; immediately and delete it from your system(s). Internet emails are not
</span><br>
<span class="quotelev1">&gt; necessarily secure. While we take every care, Plymouth University accepts
</span><br>
<span class="quotelev1">&gt; no responsibility for viruses and it is your responsibility to scan emails
</span><br>
<span class="quotelev1">&gt; and their attachments. Plymouth University does not accept responsibility
</span><br>
<span class="quotelev1">&gt; for any changes made after it was sent. Nothing in this email or its
</span><br>
<span class="quotelev1">&gt; attachments constitutes an order for goods or services unless accompanied
</span><br>
<span class="quotelev1">&gt; by an official order form.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24992.php">http://www.open-mpi.org/community/lists/users/2014/08/24992.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24994.php">http://www.open-mpi.org/community/lists/users/2014/08/24994.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24995/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24996.php">Daniels, Marcus G: "[OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="24994.php">Reuti: "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>In reply to:</strong> <a href="24994.php">Reuti: "Re: [OMPI users] Multiple runs interaction"</a>
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
