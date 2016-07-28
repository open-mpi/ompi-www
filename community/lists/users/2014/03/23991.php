<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 14:04:07 2014" -->
<!-- isoreceived="20140327180407" -->
<!-- sent="Thu, 27 Mar 2014 14:04:07 -0400" -->
<!-- isosent="20140327180407" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="53346817.9060207_at_scalableinformatics.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC3FE48C08_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 14:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23990.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23990.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/27/2014 01:53 PM, Sasso, John (GE Power &amp; Water, Non-GE) wrote:
<br>
<span class="quotelev1">&gt; When a piece of software built against OpenMPI fails, I will see an
</span><br>
<span class="quotelev1">&gt; error referring to the rank of the MPI task which incurred the failure.
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 1236 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with errorcode 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I do not have access to the software code, just the
</span><br>
<span class="quotelev1">&gt; installation directory tree for OpenMPI.  My question is:  Is there a
</span><br>
<span class="quotelev1">&gt; flag that can be passed to mpirun, or an environment variable set, which
</span><br>
<span class="quotelev1">&gt; would reveal the mapping of ranks to the hosts they are on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do understand that one could have multiple MPI ranks running on the
</span><br>
<span class="quotelev1">&gt; same host, but finding a way to determine which rank ran on what host
</span><br>
<span class="quotelev1">&gt; would go a long way in help troubleshooting problems which may be
</span><br>
<span class="quotelev1">&gt; central to the host.  Thanks!
</span><br>
<p>In the past, I've done something like this (in C, though a similar thing 
<br>
would work well in Fortran/others)
<br>
<p>#include &lt;sys/utsname.h&gt;
<br>
/* ... */
<br>
int debug = 1;
<br>
char *cpu_name;
<br>
struct utsname  uts;
<br>
<p>/* ... later, after MPI_Init/MPI_Comm_rank/MPI_Comm_size .. */
<br>
<p>uname(&amp;uts);
<br>
cpu_name = uts.nodename;
<br>
<p>if (debug==1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;hostname=%s, I am rank %d\n&quot;, cpu_name,rank);
<br>
}
<br>
<p><p><p><p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics, Inc.
email: landman_at_[hidden]
web  : <a href="http://scalableinformatics.com">http://scalableinformatics.com</a>
twtr : @scalableinfo
phone: +1 734 786 8423 x121
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23990.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23990.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
