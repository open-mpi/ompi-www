<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 05:43:41 2007" -->
<!-- isoreceived="20070403094341" -->
<!-- sent="Tue, 3 Apr 2007 11:44:51 +0200" -->
<!-- isosent="20070403094451" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_endpoint errors" -->
<!-- id="20070403094451.GL922_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C23706DD.144E%heywood_at_cshl.edu" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-03 05:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2987.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="2985.php">Heywood, Todd: "[OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>In reply to:</strong> <a href="2985.php">Heywood, Todd: "[OMPI users] btl_tcp_endpoint errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2992.php">Heywood, Todd: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>Reply:</strong> <a href="2992.php">Heywood, Todd: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 02, 2007 at 07:15:41PM -0400, Heywood, Todd wrote:
<br>
<p>Hi,
<br>
<p><span class="quotelev1">&gt; [blade90][0,1,223][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:572:mc
</span><br>
<span class="quotelev1">&gt; a_btl_tcp_endpoint_complete_connect] connect() failed with errno=113
</span><br>
<p>errno is OS specific, so it's important to know which OS you're using.
<br>
<p>You can always convert these error numbers to normal strings with perl:
<br>
<p>adi_at_drcomp:~$ perl -e 'die$!=113'
<br>
No route to host at -e line 1.
<br>
<p>(read: 113 is &quot;No route to host&quot; under Linux. If you're not using Linux,
<br>
&nbsp;your 113 probably means something else)
<br>
<p>If it's really &quot;No route to host&quot;, check your routing setup.
<br>
<p><p>adi_at_drcomp:~$ perl -e 'die$!=104'
<br>
Connection reset by peer at -e line 1.
<br>
<p><p>This usually happens when a remote process dies, perhaps due to
<br>
segfaults.
<br>
<p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2987.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="2985.php">Heywood, Todd: "[OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>In reply to:</strong> <a href="2985.php">Heywood, Todd: "[OMPI users] btl_tcp_endpoint errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2992.php">Heywood, Todd: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>Reply:</strong> <a href="2992.php">Heywood, Todd: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
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
