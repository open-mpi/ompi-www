<?
$subject_val = "Re: [OMPI users] Shared Memory Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 26 17:44:57 2011" -->
<!-- isoreceived="20110326214457" -->
<!-- sent="Sat, 26 Mar 2011 22:44:52 +0100" -->
<!-- isosent="20110326214452" -->
<!-- name="Michele Marena" -->
<!-- email="michelemarena_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Problem." -->
<!-- id="AANLkTimba1gORGDpmF8AYediySP4xSi8b+hbQnDE7nK-_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C0465AB5-A881-48FB-9D17-E0D6F95CDF10_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Problem.<br>
<strong>From:</strong> Michele Marena (<em>michelemarena_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-26 17:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16009.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16007.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16005.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, It works fine without shared memory. I thank you Ralph. I will check
<br>
the code for logical mistakes, otherwise I choose the option suggested by
<br>
you.
<br>
<p>2011/3/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Your other option is to simply not use shared memory. TCP contains loopback
</span><br>
<span class="quotelev1">&gt; support, so you can run with just
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl self,tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and shared memory won't be used. It will run a tad slower that way, but at
</span><br>
<span class="quotelev1">&gt; least your app will complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2011, at 2:30 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 26.03.2011 um 21:16 schrieb Michele Marena:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No, I can't. I'm not a administrator of the cluster and I'm not the
</span><br>
<span class="quotelev1">&gt; owner.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can recompile your private version of Open MPI and install it in
</span><br>
<span class="quotelev1">&gt; $HOME/local/openmpi-1.4.3 or alike and set paths accordingly during
</span><br>
<span class="quotelev1">&gt; compilation of your source and execution.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2011/3/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you update to a more recent version? That version is several years
</span><br>
<span class="quotelev1">&gt; out-of-date - we don't even really support it any more.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 26, 2011, at 1:04 PM, Michele Marena wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yes, the syntax is wrong in the email, but I write it correctly when I
</span><br>
<span class="quotelev1">&gt; launch mpirun. When some communicating processes are on the same node the
</span><br>
<span class="quotelev1">&gt; application don't terminate, otherwise the application terminate and its
</span><br>
<span class="quotelev1">&gt; results are correct. My OpenMPI version is 1.2.7.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2011/3/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mar 26, 2011, at 11:34 AM, Michele Marena wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I've a problem with shared memory. When my application runs using pure
</span><br>
<span class="quotelev1">&gt; message passing (one process for node), it terminates and returns correct
</span><br>
<span class="quotelev1">&gt; results. When 2 processes share a node and use shared memory for exchanges
</span><br>
<span class="quotelev1">&gt; messages, my application don't terminate. At shell I write &quot;mpirun -nolocal
</span><br>
<span class="quotelev1">&gt; --mca self,sm,tcp ... (forces interface to eth0)... -np (number of
</span><br>
<span class="quotelev1">&gt; processes) executable arguments&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; That's not right. If you want the apps to use shared memory, you don't
</span><br>
<span class="quotelev1">&gt; have to do anything. However, if you do want to specify, then the correct
</span><br>
<span class="quotelev1">&gt; syntax is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun -mca btl self,sm,tcp
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I hope you help me.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I thank you.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Michele _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16008/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16009.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16007.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16005.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
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
