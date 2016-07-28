<?
$subject_val = "Re: [OMPI users] Problems with OpenMPI running with Rmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 11:41:38 2008" -->
<!-- isoreceived="20081020154138" -->
<!-- sent="Mon, 20 Oct 2008 17:41:34 +0200" -->
<!-- isosent="20081020154134" -->
<!-- name="Simone Giannerini" -->
<!-- email="sgiannerini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with OpenMPI running with Rmpi" -->
<!-- id="3c12769c0810200841i11794fabu9bc0c96704443b4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Problems with OpenMPI running with Rmpi" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with OpenMPI running with Rmpi<br>
<strong>From:</strong> Simone Giannerini (<em>sgiannerini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-20 11:41:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7050.php">Gustavo Seabra: "[OMPI users] Problems installing in Cygwin"</a>
<li><strong>Maybe in reply to:</strong> <a href="7009.php">Simone Giannerini: "[OMPI users] Problems with OpenMPI running with Rmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Dirk,
<br>
<p>many thanks for your reply,
<br>
<p><span class="quotelev1">&gt;On 17 October 2008 at 12:42, Simone Giannerini wrote:
</span><br>
<span class="quotelev1">&gt;| Dear all,
</span><br>
<span class="quotelev1">&gt;|
</span><br>
<span class="quotelev1">&gt;| I managed to install successfully Rmpi 0.5-5 on a quad opteron machine (8
</span><br>
<span class="quotelev1">&gt;| cores overall) running on OpenSUSE 11.0 and Open MPI 1.5.2.
</span><br>
<span class="quotelev1">&gt;|
</span><br>
<span class="quotelev1">&gt;| this is what I get
</span><br>
<span class="quotelev1">&gt;|
</span><br>
<span class="quotelev1">&gt;| &gt; library(Rmpi)
</span><br>
<span class="quotelev1">&gt;| [gauss:24207] mca: base: component_find: unable to open osc pt2pt: file not
</span><br>
<span class="quotelev1">&gt;| found (ignored)
</span><br>
<span class="quotelev1">&gt;| libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;| --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;| [0,0,0]: OpenIB on host gauss was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt;| Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt;| lower performance.
</span><br>
<span class="quotelev1">&gt;| --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am surprised that your googling did lead to you stumbling on dozens of
</span><br>
<span class="quotelev1">&gt;posts on this telling you that the config file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        /etc/openmpi/openmpi-mca-params.conf (location for Debian etc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;can be changed to explicitly setting btl to 'no openib' as in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        # Disable the use of InfiniBand
</span><br>
<span class="quotelev1">&gt;        # btl = ^openib
</span><br>
<span class="quotelev1">&gt;        btl = ^openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>thanks, I had also read some of  your previous posts but for sure I
<br>
should have tried harder.
<br>
<p><span class="quotelev1">&gt;which will suppress the warning by suppressing the load of IB. Better still,
</span><br>
<span class="quotelev1">&gt;newer Open MPI release do this by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I managed to upgrade to version 1.2.6 that has that option enabled by default.
<br>
Unfortunately though, it only suppresses the following warning
<br>
<p>libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
<p>while the others remain.
<br>
In any case as I pointed out in my previous post the issue is that
<br>
only two threads are spawn per session.
<br>
Maybe I should try to check whether Ompi is working properly before
<br>
getting to Rmpi.
<br>
I will try to work it out,  of course any suggestions would be heartily welcome.
<br>
<p>ciao
<br>
<p>Simone
<br>
<p><span class="quotelev1">&gt;| I have searched the archives and found that the following suggestion was
</span><br>
<span class="quotelev1">&gt;| given for a similar problem:
</span><br>
<span class="quotelev1">&gt;|
</span><br>
<span class="quotelev1">&gt;| &gt; Open MPI has Infiniband module compiled but there is no IB device found
</span><br>
<span class="quotelev1">&gt;| &gt; on your host. Try to add &quot;--mca btl ^openib&quot; string to your command
</span><br>
<span class="quotelev1">&gt;| &gt; line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That's one way of suppressing it, but not the only one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;| Since I am not calling mpi directly but through Rmpi I do not know where to
</span><br>
<span class="quotelev1">&gt;| put that flag, I might contact the Rmpi mantainer, in any case, I would be
</span><br>
<span class="quotelev1">&gt;| grateful if you had further suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There is nothing Rmpi can do there so contacting Dr Yu, while generally a
</span><br>
<span class="quotelev1">&gt;good idea with actual Rmpi issues, is not really advised here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers, Dirk
</span><br>
<pre>
-- 
______________________________________________________
Simone Giannerini
Dipartimento di Scienze Statistiche &quot;Paolo Fortunati&quot;
Universita' di Bologna
Via delle belle arti 41 - 40126  Bologna,  ITALY
Tel: +39 051 2098262  Fax: +39 051 232153
<a href="http://www2.stat.unibo.it/giannerini/">http://www2.stat.unibo.it/giannerini/</a>
______________________________________________________
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7050.php">Gustavo Seabra: "[OMPI users] Problems installing in Cygwin"</a>
<li><strong>Maybe in reply to:</strong> <a href="7009.php">Simone Giannerini: "[OMPI users] Problems with OpenMPI running with Rmpi"</a>
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
