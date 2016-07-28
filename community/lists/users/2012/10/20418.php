<?
$subject_val = "Re: [OMPI users] question to -cpus-to-proc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  5 10:13:02 2012" -->
<!-- isoreceived="20121005141302" -->
<!-- sent="Fri, 5 Oct 2012 07:12:56 -0700" -->
<!-- isosent="20121005141256" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question to -cpus-to-proc" -->
<!-- id="CAMD57oe_8gv=hfAVdDN8G=-gjSZyR3k-sNScPdg_0eeb6PUcuQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201210050553.q955r9nI001813_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] question to -cpus-to-proc<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-05 10:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20419.php">Ralph Castain: "Re: [OMPI users] -output-filename 1234 versus --mca orte_output_filename 1234"</a>
<li><strong>Previous message:</strong> <a href="20417.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>In reply to:</strong> <a href="20415.php">Siegmar Gross: "[OMPI users] question to -cpus-to-proc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't recall anyone ever asking for that before - the original people who
<br>
wanted cpus-per-proc only cared about it at the job level, not the
<br>
individual app. So it currently is a global value.
<br>
<p>It can be modified, but it'll be awhile before I get around to it.
<br>
<p><p>On Thu, Oct 4, 2012 at 10:53 PM, Siegmar Gross &lt;
<br>
Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if I start different programs on one command line, I can use different
</span><br>
<span class="quotelev1">&gt; options &quot;-host&quot; and &quot;-np&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -host linpc0 -np 1 date : \
</span><br>
<span class="quotelev1">&gt;   -host sunpc0,sunpc1 -np 2 hostname
</span><br>
<span class="quotelev1">&gt; Fri Oct  5 07:37:25 CEST 2012
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only the last value counts if I use for example &quot;-cpus-per-proc&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -host linpc0 -np 1 -cpus-per-proc 2 \
</span><br>
<span class="quotelev1">&gt;   -bind-to-core date : -host sunpc0,sunpc1 -np 2 -cpus-per-proc 1 \
</span><br>
<span class="quotelev1">&gt;   -bind-to-socket hostname
</span><br>
<span class="quotelev1">&gt; [linpc0:16121] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
</span><br>
<span class="quotelev1">&gt; Fri Oct  5 07:37:42 CEST 2012
</span><br>
<span class="quotelev1">&gt; [sunpc0:17789] MCW rank 1 bound to socket 0[core 0]: [B .][. .]
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; [sunpc1:15007] MCW rank 2 bound to socket 0[core 0]: [B .][. .]
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -host linpc0 -np 1 -cpus-per-proc 2 \
</span><br>
<span class="quotelev1">&gt;   -bind-to-core date : -host sunpc0,sunpc1 -np 2 -bind-to-socket \
</span><br>
<span class="quotelev1">&gt;   hostname
</span><br>
<span class="quotelev1">&gt; [linpc0:16191] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:17824] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; Fri Oct  5 07:37:56 CEST 2012
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; [sunpc1:15040] MCW rank 2 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this behaviour intended? How could I map and bind processes in
</span><br>
<span class="quotelev1">&gt; different ways on a command line without a rankfile, e.g. in the
</span><br>
<span class="quotelev1">&gt; following way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0=linpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=sunpc0 slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc1 slot=0:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for any reply in advance.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20419.php">Ralph Castain: "Re: [OMPI users] -output-filename 1234 versus --mca orte_output_filename 1234"</a>
<li><strong>Previous message:</strong> <a href="20417.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>In reply to:</strong> <a href="20415.php">Siegmar Gross: "[OMPI users] question to -cpus-to-proc"</a>
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
