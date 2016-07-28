<?
$subject_val = "Re: [OMPI users] some problems with openmpi-1.9a1r30100";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 11:07:22 2014" -->
<!-- isoreceived="20140101160722" -->
<!-- sent="Wed, 1 Jan 2014 08:05:36 -0800" -->
<!-- isosent="20140101160536" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some problems with openmpi-1.9a1r30100" -->
<!-- id="5DE94D2C-F0F2-4A7D-8023-39FBD3D0B3A1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201401010948.s019m734010487_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] some problems with openmpi-1.9a1r30100<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 11:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23305.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23303.php">Ralph Castain: "Re: [OMPI users] rankfile issues"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23314.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Reply:</strong> <a href="23314.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-bycore should still be available for backward compatibility, so I'll check that one. I'll have to look to see what your binding pattern didn't work
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4044">https://svn.open-mpi.org/trac/ompi/ticket/4044</a>
<br>
<p><p>On Jan 1, 2014, at 1:48 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Option &quot;-bycore&quot; isn't available any longer. Is this intended?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 111 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev1">&gt;  -host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 -bycore \
</span><br>
<span class="quotelev1">&gt;  -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt; mpiexec: Error: unknown option &quot;-bycore&quot;
</span><br>
<span class="quotelev1">&gt; Type 'mpiexec --help' for usage.
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 112 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 112 mpiexec -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -np 4 -host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 \
</span><br>
<span class="quotelev1">&gt;  -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Bind to:         CORE
</span><br>
<span class="quotelev1">&gt;   Node:            linpc0
</span><br>
<span class="quotelev1">&gt;   #processes:  2
</span><br>
<span class="quotelev1">&gt;   #cpus:          1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 113 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It worked with Open MPI 1.6.x.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.6.x 105 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev1">&gt;  -host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 -bycore \
</span><br>
<span class="quotelev1">&gt;  -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:09465] MCW rank 1 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B]
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; [linpc0:01036] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B]
</span><br>
<span class="quotelev1">&gt; linpc0
</span><br>
<span class="quotelev1">&gt; [sunpc0:03796] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B]
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; [sunpc1:21335] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B]
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.6.x 106 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you changed the syntax once more so that I can get the
</span><br>
<span class="quotelev1">&gt; expected bindings with different command line options or is it
</span><br>
<span class="quotelev1">&gt; a problem in Open MPI 1.9.x?
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23304/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23305.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23303.php">Ralph Castain: "Re: [OMPI users] rankfile issues"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23314.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Reply:</strong> <a href="23314.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
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
