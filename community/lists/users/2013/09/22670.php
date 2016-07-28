<?
$subject_val = "Re: [OMPI users] Query name of appfile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 17 09:26:50 2013" -->
<!-- isoreceived="20130917132650" -->
<!-- sent="Tue, 17 Sep 2013 15:26:37 +0200" -->
<!-- isosent="20130917132637" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Query name of appfile" -->
<!-- id="1569F081-8A2C-4E75-A576-3AA4E86E67F4_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2EEB3C4AFB008240828A9B1603B5B0932FEB4252_at_011-DB3MPN2-151.MGDPHG.emi.philips.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Query name of appfile<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-17 09:26:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22671.php">Ralph Castain: "Re: [OMPI users] Query name of appfile"</a>
<li><strong>Previous message:</strong> <a href="22669.php">John Hearns: "Re: [OMPI users] Query name of appfile"</a>
<li><strong>In reply to:</strong> <a href="22668.php">Bontus, Claas: "[OMPI users] Query name of appfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22671.php">Ralph Castain: "Re: [OMPI users] Query name of appfile"</a>
<li><strong>Reply:</strong> <a href="22671.php">Ralph Castain: "Re: [OMPI users] Query name of appfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 17.09.2013 um 14:35 schrieb Bontus, Claas:
<br>
<p><span class="quotelev1">&gt; Starting an MPI run via
</span><br>
<span class="quotelev1">&gt; mpirun --app myappfile.app
</span><br>
<span class="quotelev1">&gt; is there any way to obtain at run-time the name of the appfile, the path and server name where it is saved.
</span><br>
<p>As you have an appfile anyway, it's also possible to define environment variables therein:
<br>
<p>&nbsp;-x file=baz -x server=foobar
<br>
<p>in each line and use these in each of the applications. Well, yes - this would be hardcoded in some way.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; claas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; The information contained in this message may be confidential and legally protected under applicable law. The message is intended solely for the addressee(s). If you are not the intended recipient, you are hereby notified that any use, forwarding, dissemination, or reproduction of this message is strictly prohibited and may be unlawful. If you are not the intended recipient, please contact the sender by return e-mail and destroy all copies of the original message.
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
<li><strong>Next message:</strong> <a href="22671.php">Ralph Castain: "Re: [OMPI users] Query name of appfile"</a>
<li><strong>Previous message:</strong> <a href="22669.php">John Hearns: "Re: [OMPI users] Query name of appfile"</a>
<li><strong>In reply to:</strong> <a href="22668.php">Bontus, Claas: "[OMPI users] Query name of appfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22671.php">Ralph Castain: "Re: [OMPI users] Query name of appfile"</a>
<li><strong>Reply:</strong> <a href="22671.php">Ralph Castain: "Re: [OMPI users] Query name of appfile"</a>
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
