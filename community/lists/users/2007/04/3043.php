<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr  8 01:35:57 2007" -->
<!-- isoreceived="20070408053557" -->
<!-- sent="Sun, 8 Apr 2007 07:37:33 +0200" -->
<!-- isosent="20070408053733" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104" -->
<!-- id="20070408053733.GS922_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D2D7D9FE2492524A925313E2D82E1B5304F6A116_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Date:</strong> 2007-04-08 01:37:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3044.php">Nathan Graham: "[OMPI users] OMPI and NPB3.2.1"</a>
<li><strong>Previous message:</strong> <a href="3042.php">de Almeida, Valmor F.: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>In reply to:</strong> <a href="3041.php">de Almeida, Valmor F.: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Apr 07, 2007 at 02:23:36PM -0400, de Almeida, Valmor F. wrote:
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<p>Hi!
<br>
<p><span class="quotelev1">&gt; Is there a way to get detailed information on what this error may be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [x1:17287] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<p>perl -e 'die$!=104'
<br>
<p>On Linux, this means &quot;Connection reset by peer&quot;, most likely due to
<br>
remote process termination.
<br>
<p>(as mentioned here:)
<br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 17287 on node x1 exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated). 
</span><br>
<p>Your process ended with signal 15.
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
<li><strong>Next message:</strong> <a href="3044.php">Nathan Graham: "[OMPI users] OMPI and NPB3.2.1"</a>
<li><strong>Previous message:</strong> <a href="3042.php">de Almeida, Valmor F.: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>In reply to:</strong> <a href="3041.php">de Almeida, Valmor F.: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104"</a>
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
