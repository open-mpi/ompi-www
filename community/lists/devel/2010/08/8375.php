<?
$subject_val = "Re: [OMPI devel] delivering SIGUSR2 to an ompi process";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 03:34:13 2010" -->
<!-- isoreceived="20100826073413" -->
<!-- sent="Thu, 26 Aug 2010 09:28:04 +0200 (CEST)" -->
<!-- isosent="20100826072804" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] delivering SIGUSR2 to an ompi process" -->
<!-- id="alpine.DEB.2.00.1008260922120.6625_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C755B1F.2050808_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] delivering SIGUSR2 to an ompi process<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 03:28:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8376.php">Nysal Jan: "Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<li><strong>Previous message:</strong> <a href="8374.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on the members of ompi_crcp_bkmrk_pml_drain_message_ref_t and ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
<li><strong>In reply to:</strong> <a href="8356.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve,
<br>
<p>This is indeed strange. The mechanism you describe works for me.
<br>
<p>Here is my simple test :
<br>
<p>---------------------- mpi-sig.c ----------------------
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;signal.h&gt;
<br>
<p>void warn(int sig) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Got signal %d\n&quot;, sig);
<br>
}
<br>
<p>int main (int argc, char ** argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;signal(SIGUSR2, warn);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
-------------------------------------------------------
<br>
<p>Whenever I do a kill -SIGUSR2 on it, I get the message &quot;Got signal 12&quot; 
<br>
(the handler gets called).
<br>
<p>If I remove the call to signal() I get the same message you get :
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 25067 on node bullx1 exited on signal 12 (User defined signal 2).
<br>
--------------------------------------------------------------------------
<br>
<p>Maybe you should ensure that this simple test works, then figure out why 
<br>
it is different from yours.
<br>
<p>Sylvain
<br>
<p>On Wed, 25 Aug 2010, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; On 08/25/2010 12:43 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 25, 2010, at 11:26 AM, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 08/25/2010 11:33 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We don't use it - mpirun traps it and then propagates it by default to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all remote procs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I should send the signal to the mpirun process?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes - however, note that it will be propagated to ALL processes in the job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you want to only get the signal in one proc, you can just do a &quot;kill&quot; to 
</span><br>
<span class="quotelev2">&gt;&gt; that specific process on its node. We don't trap signals on the application 
</span><br>
<span class="quotelev2">&gt;&gt; procs themselves, so your proc can do whatever it wants with it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something is funny then.  When I send SIGUSR2 to the process itself -or- to 
</span><br>
<span class="quotelev1">&gt; the mpirun proc, it just kills the process and doesn't get to my sig handler. 
</span><br>
<span class="quotelev1">&gt; And my same library works when I run the job using mvapich2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll keep digging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8376.php">Nysal Jan: "Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<li><strong>Previous message:</strong> <a href="8374.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on the members of ompi_crcp_bkmrk_pml_drain_message_ref_t and ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
<li><strong>In reply to:</strong> <a href="8356.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
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
