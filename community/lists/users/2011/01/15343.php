<?
$subject_val = "Re: [OMPI users] Newbie question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 15:11:40 2011" -->
<!-- isoreceived="20110112201140" -->
<!-- sent="Wed, 12 Jan 2011 15:11:30 -0500" -->
<!-- isosent="20110112201130" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question" -->
<!-- id="4D2E0AF2.3080105_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3F2EEE35-B667-4C76-AEC4-8D11A6B9DFE9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie question<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 15:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15344.php">Tena Sakai: "[OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15342.php">Ralph Castain: "Re: [OMPI users] Newbie question"</a>
<li><strong>In reply to:</strong> <a href="15342.php">Ralph Castain: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/28877.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Jan 12, 2011, at 12:54 PM, Tena Sakai wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Siegmar,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks for your reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried man pages you mention, but one hurdle I am running into
</span><br>
<span class="quotelev2">&gt;&gt; is orte_hosts page.  I don't find the specification of fields for
</span><br>
<span class="quotelev2">&gt;&gt; the file.  I see an example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   dummy1 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;   dummy2 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;   dummy3 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;   dummy4 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;   dummy5 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is the first field (dummyX) machine/node name?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is the definition
</span><br>
<span class="quotelev2">&gt;&gt; of slots?  (Max number of processes to spawn?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes
</span><br>
<p>Here we don't let 'slots' exceed the number of physical cores.
<br>
(Actually, Torque does this for us.)
<br>
I suppose this prevents the cores to be oversubscribed,
<br>
at least by default, right?
<br>
<p>Gus Correa
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing a different man page?  Can you please shed some light?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev2">&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/10/11 11:38 PM, &quot;Siegmar Gross&quot; &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What I want is to spawn a bunch of R slaves to other machines on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the network. I can spawn R slaves, as many as I like, to the local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine, but I don t know how to do this with machines on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; network.  That s what hosts parameter of mpi.spawn.Rslaves()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enables me to do, I think.  If I can do that, then Rmpi has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function(s) to send command to each of the spawned slaves.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My question is how can I get open MPI to give me those hosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not quite sure if I understood your question, but when you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; read &quot;man MPI_Comm_spawn&quot; you can find the parameter &quot;MPI_Info info&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which allows to specify where and how to start processes. &quot;man
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Info_create&quot; shows you how to create an info object and &quot;man
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Info_set&quot; how to add a key/value pair. &quot;man orte_hosts&quot; shows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you how you can build a hostfile. I do not know how to do these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things in your language R but hopefully the information of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manual pages helps to solve your problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15344.php">Tena Sakai: "[OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15342.php">Ralph Castain: "Re: [OMPI users] Newbie question"</a>
<li><strong>In reply to:</strong> <a href="15342.php">Ralph Castain: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/28877.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
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
