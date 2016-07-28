<?
$subject_val = "Re: [OMPI users] Newbie question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 14:59:30 2011" -->
<!-- isoreceived="20110112195930" -->
<!-- sent="Wed, 12 Jan 2011 11:54:42 -0800" -->
<!-- isosent="20110112195442" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question" -->
<!-- id="C9534702.DC8A%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201101110738.p0B7cjZ5024760_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 14:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15342.php">Ralph Castain: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15340.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15335.php">Siegmar Gross: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15342.php">Ralph Castain: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="15342.php">Ralph Castain: "Re: [OMPI users] Newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>Many thanks for your reply.
<br>
<p>I have tried man pages you mention, but one hurdle I am running into
<br>
is orte_hosts page.  I don't find the specification of fields for
<br>
the file.  I see an example:
<br>
<p>&nbsp;&nbsp;&nbsp;dummy1 slots=4
<br>
&nbsp;&nbsp;&nbsp;dummy2 slots=4
<br>
&nbsp;&nbsp;&nbsp;dummy3 slots=4
<br>
&nbsp;&nbsp;&nbsp;dummy4 slots=4
<br>
&nbsp;&nbsp;&nbsp;dummy5 slots=4
<br>
<p>Is the first field (dummyX) machine/node name?  What is the definition
<br>
of slots?  (Max number of processes to spawn?)
<br>
<p>Am I missing a different man page?  Can you please shed some light?
<br>
<p>Thank you.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><p><p><p>On 1/10/11 11:38 PM, &quot;Siegmar Gross&quot; &lt;Siegmar.Gross_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I want is to spawn a bunch of R slaves to other machines on
</span><br>
<span class="quotelev2">&gt;&gt; the network. I can spawn R slaves, as many as I like, to the local
</span><br>
<span class="quotelev2">&gt;&gt; machine, but I don t know how to do this with machines on the
</span><br>
<span class="quotelev2">&gt;&gt; network.  That s what hosts parameter of mpi.spawn.Rslaves()
</span><br>
<span class="quotelev2">&gt;&gt; enables me to do, I think.  If I can do that, then Rmpi has
</span><br>
<span class="quotelev2">&gt;&gt; function(s) to send command to each of the spawned slaves.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question is how can I get open MPI to give me those hosts
</span><br>
<span class="quotelev2">&gt;&gt; parameters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not quite sure if I understood your question, but when you
</span><br>
<span class="quotelev1">&gt; read &quot;man MPI_Comm_spawn&quot; you can find the parameter &quot;MPI_Info info&quot;
</span><br>
<span class="quotelev1">&gt; which allows to specify where and how to start processes. &quot;man
</span><br>
<span class="quotelev1">&gt; MPI_Info_create&quot; shows you how to create an info object and &quot;man
</span><br>
<span class="quotelev1">&gt; MPI_Info_set&quot; how to add a key/value pair. &quot;man orte_hosts&quot; shows
</span><br>
<span class="quotelev1">&gt; you how you can build a hostfile. I do not know how to do these
</span><br>
<span class="quotelev1">&gt; things in your language R but hopefully the information of the
</span><br>
<span class="quotelev1">&gt; manual pages helps to solve your problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<li><strong>Next message:</strong> <a href="15342.php">Ralph Castain: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15340.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15335.php">Siegmar Gross: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15342.php">Ralph Castain: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="15342.php">Ralph Castain: "Re: [OMPI users] Newbie question"</a>
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
