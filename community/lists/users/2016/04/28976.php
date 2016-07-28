<?
$subject_val = "Re: [OMPI users] make install warns about 'common symbols'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 23:14:10 2016" -->
<!-- isoreceived="20160420031410" -->
<!-- sent="Tue, 19 Apr 2016 23:14:00 -0400" -->
<!-- isosent="20160420031400" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] make install warns about 'common symbols'" -->
<!-- id="CAHXxYDispmoz=V5Wf7K-xiWWZpD4tf3wzHHX72iSNOPQZdvaJA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5716F03B.9010501_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] make install warns about 'common symbols'<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 23:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28977.php">Sreenidhi Bharathkar Ramesh: "[OMPI users] OMPI core/thread scaling"</a>
<li><strong>Previous message:</strong> <a href="28975.php">Gilles Gouaillardet: "Re: [OMPI users] make install warns about 'common symbols'"</a>
<li><strong>In reply to:</strong> <a href="28975.php">Gilles Gouaillardet: "Re: [OMPI users] make install warns about 'common symbols'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much, Gilles. Declaring globals as static indeed fixed it,
<br>
even without initialization (some are complicated structures, so
<br>
initializing at declaration is not easy.)
<br>
<p>Best regards
<br>
Durga
<br>
<p>1% of the executables have 99% of CPU privilege!
<br>
Userspace code! Unite!! Occupy the kernel!!!
<br>
<p>On Tue, Apr 19, 2016 at 10:58 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; This is just a warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there are some potential issues with uninitialized common symbols, but i
</span><br>
<span class="quotelev1">&gt; cannot remember the details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bottom line, they should be avoided :
</span><br>
<span class="quotelev1">&gt; - declare global variables as static if the scope is only one source file
</span><br>
<span class="quotelev1">&gt; - always initialize global variables
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/20/2016 11:48 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While doing a 'make install' with some additional code written by me, I
</span><br>
<span class="quotelev1">&gt; get the following message:
</span><br>
<span class="quotelev1">&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev1">&gt; Doing a search on previous mails, I found the following thread that is
</span><br>
<span class="quotelev1">&gt; pertinent:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/devel/2015/04/17220.php">https://www.open-mpi.org/community/lists/devel/2015/04/17220.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I could not find out exactly what this warning/error is trying to
</span><br>
<span class="quotelev1">&gt; tell me: is there a multiple definition of a global symbol? (that should be
</span><br>
<span class="quotelev1">&gt; an error, not a warning, right?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev1">&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28974.php">http://www.open-mpi.org/community/lists/users/2016/04/28974.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28975.php">http://www.open-mpi.org/community/lists/users/2016/04/28975.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28977.php">Sreenidhi Bharathkar Ramesh: "[OMPI users] OMPI core/thread scaling"</a>
<li><strong>Previous message:</strong> <a href="28975.php">Gilles Gouaillardet: "Re: [OMPI users] make install warns about 'common symbols'"</a>
<li><strong>In reply to:</strong> <a href="28975.php">Gilles Gouaillardet: "Re: [OMPI users] make install warns about 'common symbols'"</a>
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
