<?
$subject_val = "Re: [OMPI users] cartofile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 04:46:53 2009" -->
<!-- isoreceived="20090921084653" -->
<!-- sent="Mon, 21 Sep 2009 11:46:48 +0300" -->
<!-- isosent="20090921084648" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cartofile" -->
<!-- id="453d39990909210146x15183d34sb278fb943f1ff50f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AB15AE0.8000300_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cartofile<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 04:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10709.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10707.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>In reply to:</strong> <a href="10663.php">Eugene Loh: "[OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10710.php">Eugene Loh: "Re: [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="10710.php">Eugene Loh: "Re: [OMPI users] cartofile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene,
<br>
carto file is a file with a staic graph topology of your node.
<br>
in the opal/mca/carto/file/carto_file.h you can see example.
<br>
( yes I know that , it should be help/man list :) )
<br>
Basically it describes a map of your node and inside interconnection.
<br>
Hopefully it will be discovered automatically someday,
<br>
but for now you can describe your node manually.
<br>
Best regards
<br>
Lenny.
<br>
<p>On Thu, Sep 17, 2009 at 12:38 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I feel like I should know, but what's a cartofile?  I guess you supply
</span><br>
<span class="quotelev1">&gt; &quot;topological&quot; information about a host, but I can't tell how this
</span><br>
<span class="quotelev1">&gt; information is used by, say, mpirun.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10709.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10707.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>In reply to:</strong> <a href="10663.php">Eugene Loh: "[OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10710.php">Eugene Loh: "Re: [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="10710.php">Eugene Loh: "Re: [OMPI users] cartofile"</a>
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
