<?
$subject_val = "Re: [OMPI users] core binding confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 10:40:07 2012" -->
<!-- isoreceived="20120306154007" -->
<!-- sent="Tue, 6 Mar 2012 07:40:02 -0800" -->
<!-- isosent="20120306154002" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core binding confusion" -->
<!-- id="CAMD57oegsdyNzA0O034ABqfzMFBc+smj+89eQRVAxqNYWwVmmA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87zkbt92ac.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] core binding confusion<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 10:40:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18698.php">Gustavo Correa: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Previous message:</strong> <a href="18696.php">Dave Love: "[OMPI users] core binding confusion"</a>
<li><strong>In reply to:</strong> <a href="18696.php">Dave Love: "[OMPI users] core binding confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18700.php">Dave Love: "Re: [OMPI users] core binding confusion"</a>
<li><strong>Reply:</strong> <a href="18700.php">Dave Love: "Re: [OMPI users] core binding confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 6, 2012 at 7:28 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Could someone confirm whether this is a bug or misunderstanding the doc
</span><br>
<span class="quotelev1">&gt; (in which case it's not just me, and it needs clarifying!)?  I haven't
</span><br>
<span class="quotelev1">&gt; looked at the current code in the hope of a quick authoritative answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is with 1.5.5rc3, originally on Interlagos, but also checked on
</span><br>
<span class="quotelev1">&gt; Magny Cours.  It's also seen on two Interlagos with different physical
</span><br>
<span class="quotelev1">&gt; numbering of the logical processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a 48-core Magny Cours with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun --bysocket --bind-to-core --report-bindings -np 48
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what I get is two processes per core, e.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [node247:09521] [[58099,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[58099,1],14] to socket 2 cpus 4000
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;  [node247:09521] [[58099,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[58099,1],38] to socket 2 cpus 4000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and hwloc-ps confirms the situation.  However, I (and my boss, who did
</span><br>
<span class="quotelev1">&gt; it originally) expect one per core.  With --bycore we do see one per
</span><br>
<span class="quotelev1">&gt; core, of course.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that actually expected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well, no - it shouldn't do that, so I would expect it is a bug. Will try to
<br>
look at it, but probably won't happen until next week due to travel.
<br>
<p><p><span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18697/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18698.php">Gustavo Correa: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Previous message:</strong> <a href="18696.php">Dave Love: "[OMPI users] core binding confusion"</a>
<li><strong>In reply to:</strong> <a href="18696.php">Dave Love: "[OMPI users] core binding confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18700.php">Dave Love: "Re: [OMPI users] core binding confusion"</a>
<li><strong>Reply:</strong> <a href="18700.php">Dave Love: "Re: [OMPI users] core binding confusion"</a>
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
